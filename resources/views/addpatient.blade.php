<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Patient | MediGuard</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Add Patient</h2>
        <form id="addPatientForm" method="POST">
            <div class="form-group">
                <label for="name">Patient Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter patient's name" required>
            </div>
            <div class="form-group">
                <label for="age">Patient Age:</label>
                <input type="number" id="age" name="age" placeholder="Enter patient's age" required>
            </div>
            <button type="submit">Add Patient</button>
        </form>
    </div>

    <script>
        document.getElementById("addPatientForm").addEventListener("submit", function(event) {
            event.preventDefault();
            const name = document.getElementById("name").value;
            const age = document.getElementById("age").value;

            fetch("/api/guardian/addpatient", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ name: name, age: age })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    alert("Patient added successfully!");
                    window.location.href = "/dashboard";
                } else {
                    alert("Failed to add patient: " + (data.message || "Please try again."));
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
