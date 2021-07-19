

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
let stepsLength  = 0
let counterSteps = 0
let currentStep  = 0
let step         = $("#step")
let steps        = $("#custom-steps")
$(document).ready(() => {
    let width      = steps.width()
    stepsLength  = parseInt(steps.attr('data-count'))
    counterSteps = width / stepsLength 
    
    questions   = JSON.parse($("#questions").val())
    handleStorage()
    currentStep = parseInt(getStorage().pos)
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

function addRespond(_this,pos) {
    let respond = $(_this).attr('data-respond');

    selectRespond($(_this).attr('id'))
    
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
        $('#div-'+(pos + 1)).show('fast')
        nextStep()
    },500)
}

function handleStorage() {
console.log(getStorage());

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
    switch (type) {
        case 1:
            if(param == null)
                param = `div-${pos}-${res}`
            $('.selected-option').removeClass('selected-option')
            document.getElementById(param).classList.add('selected-option')
            break;
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