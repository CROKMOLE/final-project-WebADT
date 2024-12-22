import './bootstrap';


// Select the modal and the close button
const modal = document.getElementById('alert-main');
const closeButton = document.getElementById('close-button');

// Add click event listener to the close button
closeButton.addEventListener('click', () => {
    // Add the `hidden` class to hide the modal
    modal.classList.replace("block", "hidden")
});

const easterEgg = document.querySelector(`.easter-egg`);

// easterEgg.style.opacity = 1
