<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guardian Login</title>
</head>
<body>
    <h2>Guardian Login</h2>

    <form id="loginForm">
        <input type="text" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>

    <script>
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const email = document.querySelector('input[name="email"]').value;
    const password = document.querySelector('input[name="password"]').value;

    fetch("https://mediaguard.consultmi.com/api/guardian/login", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            email: email,
            password: password
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            alert("Login successful! Redirecting to dashboard...");
            window.location.href = "/dashboard"; // Redirect after successful login
        } else {
            alert("Login failed: " + (data.message || "Invalid credentials."));
        }
    })
    .catch(error => {
        console.error("Error:", error);
        alert("An error occurred. Please try again later.");
    });
});
</script>


</body>
</html>
<?php /**PATH C:\Users\Vejzo\mediguard\resources\views/login.blade.php ENDPATH**/ ?>