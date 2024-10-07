<?php
// Include database connection
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jobTitle = $_POST['job_title'];
    $jobDescription = $_POST['job_description'];
    $jobType = $_POST['job_type'];
    $location = $_POST['location'];

    // Insert job into the database
    $sql = "INSERT INTO jobs (title, description, job_type, location) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $jobTitle, $jobDescription, $jobType, $location);

    if ($stmt->execute()) {
        // Redirect to job listing page after successful creation
        header("Location: job-listing.php");
        exit();
    } else {
        echo "Error creating job: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job</title>
</head>
<body>
    <h2>Create New Job</h2>
    <form action="create-job.php" method="POST">
        <input type="text" name="title" placeholder="Job Title" required><br>
        <textarea name="description" placeholder="Job Description" required></textarea><br>

        <!-- Job Type Select -->
        <select name="jobType" required>
            <option value="">Job Type</option>
            <option value="fulltime">Full-time</option>
            <option value="parttime">Part-time</option>
            <option value="contract">Contract</option>
            <option value="freelance">Freelance</option>
        </select><br>

        <!-- Location Select -->
        <select name="location" id="countryDropdown">
                    <option value="">Location</option>
                    <!-- Countries will be dynamically loaded here -->
                </select>

        <button type="submit">Create Job</button>
    </form>

    <!-- Script to Load Countries Dynamically -->
    <script>
        const countryDropdown = document.getElementById("countryDropdown");

        fetch("https://restcountries.com/v3.1/all")
          .then(response => response.json())
          .then(data => {
            const sortedCountries = data.sort((a, b) => a.name.common.localeCompare(b.name.common));

            sortedCountries.forEach(country => {
              let option = document.createElement("option");
              option.value = country.cca2;  // 2-letter country code
              option.text = country.name.common;  // Country name
              countryDropdown.appendChild(option);
            });
          })
          .catch(error => console.log("Error fetching country data:", error));
    </script>
</body>
</html>
