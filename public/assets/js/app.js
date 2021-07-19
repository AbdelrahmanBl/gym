

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
let stepsLength  = 0
let counterSteps = 0
let currentStep  = 0
let step         = $("#step")
let steps        = $("#custom-steps")
$(document).ready(() => {
    let width      = steps.width()
    stepsLength  = parseInt(steps.attr('data-count'))
    counterSteps = width / stepsLength 
 
    nextStep()
})
function nextStep() {
    if(steps.width() > step.width() && currentStep < stepsLength) {
        step.width(step.width() + counterSteps)
        currentStep++
        updateStep(currentStep)
    }
}

function prevStep() {
    if(steps.width() >= step.width() && currentStep > 1) {
        step.width(step.width() - counterSteps)
        currentStep--
        updateStep(currentStep)
    }
}

function updateStep(no) {
    $("#step-counter").html(`${no}/${stepsLength}`);
}