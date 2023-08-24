document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("signup-form");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const emailInput = document.getElementById("email");
        const passwordInput = document.getElementById("password");

        const emailValue = emailInput.value.trim();
        const passwordValue = passwordInput.value.trim();

        if (emailValue === "" || passwordValue === "") {
            alert("Please fill in all fields.");
            return;
        }

        console.log("Email:", emailValue);
        console.log("Password:", passwordValue);

        form.submit();
    });
});
