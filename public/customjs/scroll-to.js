// import { gsap } from "gsap";
// import { ScrollToPlugin } from "gsap/ScrollToPlugin";

document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('projectbtn'); // Updated to the correct ID
    console.log(button); // Debugging: check if the button element is found

    if (button) {
      // Toggle state
      let scrolled = false;

      button.addEventListener('click', () => {
        if (!scrolled) {
          // Scroll to the element
          gsap.to(window, { duration: 1, scrollTo: "#targetElement" });
          scrolled = true;
        } else {
          // Scroll back to the top
          gsap.to(window, { duration: 1, scrollTo: 0 });
          scrolled = false;
        }
      });
    } else {
      console.error('Element with ID "projectbtn" not found.');
    }
});