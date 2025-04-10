/*
 * This file contains JavaScript code for a simple counter animation.
 * Initializes a counter animation for elements with the class 'counter'.
 * The animation increments the counter value from 0 to the target value specified in the `data-target` attribute.
 * This is typically used for creating animated statistics or numerical displays on the webpage.
 * @function
 * @listens DOMContentLoaded
 * @param {Event} event - The DOMContentLoaded event object.
 */

document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".counter");
  counters.forEach((counter) => {
    const updateCount = () => {
      const target = +counter.getAttribute("data-target");
      const count = +counter.innerText;
      const increment = target / 100; // Adjust speed by changing the divisor

      if (count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(updateCount, 3); // Adjust interval for smoother animation
      } else {
        counter.innerText = target;
      }
    };
    updateCount();
  });
});

/*
 * This file contains JavaScript code for a simple image slider.
 * This file contains JavaScript code for a simple carousel animation.
 * The carousel scrolls through items automatically, creating a smooth scrolling effect.
 * The carousel items are cloned to create an infinite scrolling effect.
 * The scroll speed and behavior can be adjusted by modifying the interval and scroll amount.
 * @function
 * @listens DOMContentLoaded
 * @param {Event} event - The DOMContentLoaded event object.
 */

document.addEventListener("DOMContentLoaded", function () {
const carousel = document.querySelector(".clients_carousel");
const cloneItems = () => {
    // Get all child elements of the carousel as an array
    const items = Array.from(carousel.children);

    // Loop through each item and create a clone
    items.forEach((item) => {
        const clone = item.cloneNode(true); // Create a deep clone of the item
        carousel.appendChild(clone); // Append the cloned item to the carousel
    });
};

// Call the function to clone items
cloneItems();

// Initialize the scroll amount to 0
let scrollAmount = 0;

// Function to handle automatic scrolling of the carousel
function autoScroll() {
    scrollAmount += 1; // Increment the scroll amount by 1

    // Reset scroll amount if it exceeds half the scroll width (to loop back)
    if (scrollAmount >= carousel.scrollWidth / 2) {
        scrollAmount = 0;// Reset scroll amount to 0
       
    }

    // Scroll the carousel to the updated scroll amount with smooth behavior
    carousel.scrollTo({
        left: scrollAmount, // Scroll horizontally to the updated position
        behavior: "smooth", // Smooth scrolling effect
    });
}

  setInterval(autoScroll, 50);

  // Hide scrollbar for the carousel
  carousel.style.overflow = "hidden";
});


/*
 * This file contains JavaScript code for initializing and controlling a Bootstrap carousel.
 * The script sets up an auto-sliding carousel for testimonials and ensures the control buttons work as expected.
 * The carousel auto-slides every 5 seconds and allows manual navigation using the previous and next buttons.
 * @function
 * @listens DOMContentLoaded
 * @param {Event} event - The DOMContentLoaded event object.
 */

document.addEventListener('DOMContentLoaded', function () {
    // Initialize Bootstrap carousel
    var testimonialsCarousel = document.querySelector('#testimonials_carousel');
    if (testimonialsCarousel) {
        new bootstrap.Carousel(testimonialsCarousel, {
            interval: 5000, // Set auto-slide interval to 5 seconds
            ride: 'carousel',
            hover: 'pause', // Pause on hover
        });
    }
    // Ensure carousel control buttons work
    var prevButton = document.querySelector('.carousel-control-prev');
    var nextButton = document.querySelector('.carousel-control-next');
    if (prevButton && nextButton) {
        prevButton.addEventListener('click', function () {
        var carousel = document.querySelector('#testimonials_carousel');
        if (carousel) {
            new bootstrap.Carousel(carousel).prev();
        }
        });
        nextButton.addEventListener('click', function () {
        var carousel = document.querySelector('#testimonials_carousel');
        if (carousel) {
            new bootstrap.Carousel(carousel).next();
        }
        });
    }
});

