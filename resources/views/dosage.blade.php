<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save Dosage</title>
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Save Dosage</h2>
        <form id="saveDosageForm">
<div class="form-group">
    <label for="medicationName">Medication Name:</label>
    <input type="text" id="medicationName" name="medication_name" class="form-control" placeholder="Enter medication name">
</div>

            <div class="form-group">
                <label for="dosage">Dosage:</label>
                <input type="text" id="dosage" name="dosage" class="form-control" placeholder="Enter dosage">
            </div>
            <div class="form-group">
                <label for="schedule">Schedule:</label>
                <input type="text" id="schedule" name="schedule" class="form-control" placeholder="Enter schedule">
            </div>
            <button type="submit" class="btn btn-success btn-block">Save Dosage</button>
        </form>
    </div>

    <!-- Optional: Add your JavaScript here -->
    <script>
        document.getElementById("saveDosageForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const medication_name = document.getElementById("medicationName").value;
    const dosage = document.getElementById("dosage").value;
    const schedule = document.getElementById("schedule").value;

    fetch("/api/guardian/adddosage", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            medication_name: medication_name,
            dosage: dosage,
            schedule: schedule
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            alert("Dosage saved successfully!");
        } else {
            alert("An error occurred. Please try again later.");
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
