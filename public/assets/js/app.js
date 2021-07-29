

function startNow(link) {
    location.href = link;
    // if(detectMob())
    //     location.href = 'whatsapp://send?phone=2001003615945'
    // else alert('DESKTOP')
}

function detectMob() {
    const toMatch = [
        /Android/i,
        /webOS/i,
        /iPhone/i,
        /iPad/i,
        /iPod/i,
        /BlackBerry/i,
        /Windows Phone/i
    ];

    return toMatch.some((toMatchItem) => {
        return navigator.userAgent.match(toMatchItem);
    });
}

// Define Steps By Length
let questions    = []
let responds     = []
let loading      = false
let questionsPath
let stepsLength  = 0
let counterSteps = 0
let currentStep  = 0
let step         = $("#step")
let steps        = $("#custom-steps")
$(document).ready(() => {
    let width      = steps.width()
    stepsLength  = parseInt(steps.attr('data-count'))
    counterSteps = width / stepsLength 
    
    questions       = JSON.parse($("#questions").val())
    questionsPath   = $("#questions-path").val()
    
    handleStorage()
    currentStep = parseInt(getStorage().pos)
    responds    = getStorage().responds
})
function nextStep() {
    if(steps.width() > step.width() && currentStep < stepsLength) {
        step.width(step.width() + counterSteps)
        currentStep++
        updateStep(currentStep)
        updateStorage(currentStep,'p')
        selectRespond()
    }
}

function prevStep() {
    if(steps.width() >= step.width() && currentStep > 1) {
        step.width(step.width() - counterSteps)
        $('#div-'+currentStep).hide()
        currentStep--
        $('#div-'+currentStep).show('fast')
        updateStep(currentStep)
        updateStorage(currentStep,'p')
        selectRespond()
    }
}

function updateStep(no) {
    $("#step-counter").html(`${no}/${stepsLength}`);
}

function removeCheckBox(_this) {
    let pos = $(_this).attr('data-pos')
    $(`.box-${pos}`).prop('checked',false)
}

function handleBalance(_this) {
    let pos          = $(_this).attr('data-pos')
    let value        = parseInt($(_this).val())
    let setTextValue = questions[pos-1]['responds'][value].text
    let setImageValue = questions[pos-1]['responds'][value].img

    $(`#balance-preview-${pos}`).text(setTextValue)
    $(`#image-preview-${pos}`).prop('src',`${questionsPath}/${setImageValue}`)
}

function addRespond(_this,pos,type='default') {
    if(loading == true) return 0;
    loading = true
    let respond
    if(type == 'choose') {
        respond = []
        let qNo = questions[pos-1].responds.length
        for(let i = 1 ; i <= qNo ; i++) {
            let input = $(`#input-${pos}-${i}`)
            if(input.is(':checked')) respond.push(input.val())
        }
    }
    else if(type == 'balance') {
        respond = $(`#range-${pos}`).val()
    }
    else {
        respond = $(_this).attr('data-respond');
        selectRespond($(_this).attr('id'))
    }

    if(responds[pos-1])
        responds[pos-1] = respond
    else responds.push(respond)

    updateStorage(responds,'r')

    setTimeout(function() {
        $('#div-'+pos).hide()
        if(currentStep == stepsLength) {
            // Show Checkout Div
            $("#questions-container").hide()
            $("#checkout-container").show('fast')
            updateStorage('CHECKOUT','s')
            return 0;
        }
        
        if(pos == 1) {
            handleHidden2()
        }
        $('#div-'+(pos + 1)).show('fast')
        nextStep()
        loading = false
    },500)
}

function handleHidden2() {
    let pos = 1
    let no  = parseInt(getStorage().responds[pos-1])

    $(".show-all").addClass('force-hide')
    let arr = []
    switch (no) {
        case 1:
            arr = [1,2]
            break;
        case 2:
            arr = [3,4,5]
            break;
        case 3:
            arr = [6,7,8]
            break;
    }

    arr.forEach(item => {
        $("#div-"+(parseInt(pos)+1)+"-"+item).removeClass('force-hide')
    })
}

function handleStorage() {
    let obj = {
        status: "RESPOND" ,  // CHECKOUT
        pos: 1,
        responds : []
    }
    if(!isStorage()) {
        setStorage(obj)
    }

    if(getStorage().status == 'CHECKOUT') {
        $("#questions-container").hide()
        $("#checkout-container").show('fast')
        updateStorage('CHECKOUT','s')
    }
    else if(getStorage().status == 'RESPOND') {
        let pos = getStorage().pos
        handleHidden2()
        
        if(pos > 1) {
            $('#div-1').hide()
            $('#div-'+ pos ).show('fast')
            for(let i = 0 ; i < pos ; i ++) {
                nextStep()
            }
        }
        else nextStep()
    }
}

function selectRespond(param = null) {
    if(isStorage() && getStorage().status == "RESPOND") {
        let pos = parseInt(getStorage().pos)
        let arr = getStorage().responds

        let res = null
        if(arr[pos - 1]) {
            let res  = arr[pos - 1]
            selectRespondSwitches(res,param,pos)
        }
        else selectRespondSwitches(res,param,pos)
    }
}

function selectRespondSwitches(res,param,pos) {
    let type = parseInt(questions[pos - 1]['type'])
    if([1,2].includes(type)) {
        if(param == null)
            param = `div-${pos}-${res}`
        $('.selected-option').removeClass('selected-option')
        if(document.getElementById(param)) {
            document.getElementById(param).classList.add('selected-option')
        }
    }
    else if(type == 3) {
        if(res && res.length > 0) {
            res.forEach(i => {
                $(`#input-${pos}-${i}`).prop('checked',true)
            })
        }else {
            $(`#none-${pos}`).prop('checked',true)
        }
        
    }
    else if(type == 4) {
        if(res) {
            let img = questions[pos-1]['responds'][parseInt(res)].img
            let text = questions[pos-1]['responds'][parseInt(res)].text
            
            $(`#image-preview-${pos}`).prop('src',`${questionsPath}/${img}`)
            $(`#balance-preview-${pos}`).text(text)
            $(`#range-${pos}`).val(res)
        }else {
            $(`#image-preview-${pos}`).prop('src',`${questionsPath}/0.jpg`)
        }
    }
}

function updateStorage(update,field) {
    let obj = {
        status: (field == 's') ? update : getStorage().status,
        pos: (field == 'p') ? update : getStorage().pos,
        responds: (field == 'r') ? update : getStorage().responds,
    }
    setStorage(obj)
}

function getStorage() {
    return JSON.parse(localStorage.getItem('stored'))
}

function isStorage() {
    return JSON.parse(localStorage.getItem('stored')) != null 
}

function setStorage(obj) {
    localStorage.setItem('stored',JSON.stringify(obj))
}

function clearStorage() {
    localStorage.removeItem('stored');
}