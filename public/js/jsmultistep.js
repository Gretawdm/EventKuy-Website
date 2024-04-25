const form = document.getElementById("multiStepForm");
const steps = Array.from(document.querySelectorAll(".step"));
const stepIndicators = Array.from(document.querySelectorAll(".step-indicator"));
let currentStep = 0;

function showStep(step) {
    steps[currentStep].classList.remove("active");
    steps[step].classList.add("active");
    stepIndicators[currentStep].classList.remove("active");
    stepIndicators[step].classList.add("active");
    currentStep = step;
}

function nextStep() {
    if (currentStep < steps.length - 1) {
        showStep(currentStep + 1);
    }
}

function prevStep() {
    if (currentStep > 0) {
        showStep(currentStep - 1);
    }
}

document.querySelectorAll(".next-btn").forEach((button) => {
    button.addEventListener("click", nextStep);
});

document.querySelectorAll(".prev-btn").forEach((button) => {
    button.addEventListener("click", prevStep);
});

form.addEventListener("submit", function (event) {
    event.preventDefault();
    // Handle form submission here
});
