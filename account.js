<script>
    // Check if the user is logged in using the session
    var isLoggedIn = <?php echo isset($_SESSION['email']) ? 'true' : 'false'; ?>;
    var username = "<?php echo isset($_SESSION['email']) ? addslashes($_SESSION['email']) : ''; ?>";

    // Function to update the dropdown based on login status
    function updateDropdown() {
        if (isLoggedIn) {
            document.getElementById("usernamePlaceholder").innerText = username;
            document.getElementById("signOutLink").style.display = "block";
        } else {
            document.getElementById("usernamePlaceholder").innerText = "My Account";
            document.getElementById("signOutLink").style.display = "none";
        }
    }

    // Call the function to initialize the dropdown based on initial login status
    updateDropdown();
</script>
