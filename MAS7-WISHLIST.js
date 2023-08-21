document.addEventListener("DOMContentLoaded", function () {
    // Get references to the heart icons and the heart badge in the navbar
    const heartIcons = document.querySelectorAll(".heart-icon");
    const heartBadge = document.querySelector(".wishlist-icon .badge");

    // Initialize the heart counter value
    let heartCounter = 0;

    // Function to update the heart counter and badge
    function updateHeartCounter() {
        if (this.classList.contains("liked")) {
            // Unlike the product
            this.classList.remove("liked");
            heartCounter -= 1; // Decrease the heart counter
        } else {
            // Like the product
            this.classList.add("liked");
            heartCounter += 1; // Increase the heart counter
        }

        // Update the heart badge
        heartBadge.textContent = heartCounter;
    }

    // Add click event listeners to the heart icons
    heartIcons.forEach(icon => {
        icon.addEventListener("click", updateHeartCounter);
    });
});