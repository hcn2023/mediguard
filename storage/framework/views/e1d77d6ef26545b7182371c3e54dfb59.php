<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Patient - MediGuard</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h2>Add Patient</h2>

<form id="patientForm">
    <input type="text" name="name" placeholder="Patient Name" required><br><br>
    <input type="text" name="age" placeholder="Patient Age" required><br><br>
    <button type="submit">Add Patient</button>
</form>

<script>
document.getElementById("patientForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch("https://mediguard.connetmi.com/api/add_patient_details/", {
        method: "POST",
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.json();
    })
    .then(data => {
        console.log("Patient Response:", data);
        alert(data.message);
    })
    .catch(error => {
        console.error("Error:", error);
        alert("Failed to add patient. Please try again.");
    });
});
</script>

</body>
</html>
<?php /**PATH C:\Users\Vejzo\mediguard\resources\views/addpatient.blade.php ENDPATH**/ ?>