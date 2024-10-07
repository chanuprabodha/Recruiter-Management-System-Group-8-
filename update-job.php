<?php
// Database connection
require_once 'connection.php';

// Get job by ID
$id = $_GET['id'];
$sql = "SELECT * FROM jobs WHERE id = $id";
$result = $conn->query($sql);
$job = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $jobId = $_POST['id'];
    $jobTitle = $_POST['job_title'];
    $jobDescription = $_POST['job_description'];
    $jobType = $_POST['job_type'];
    $location = $_POST['location'];

    $sql = "UPDATE jobs SET title='$title', description='$description', job_type='$job_type', location='$location' WHERE id=$id";

    if ($stmt->execute()) {
        // Redirect to job listing page after successful update
        header("Location: job-listing.php");
        exit();
    } else {
        echo "Error updating job: " . $conn->error;
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
    <title>Update Job</title>
</head>
<body>
    <h2>Update Job</h2>
    <form action="" method="POST">
        <input type="text" name="title" value="<?php echo $job['title']; ?>" required><br>
        <textarea name="description" required><?php echo $job['description']; ?></textarea><br>
        <select name="jobType" required>
            <option value="">Job Type</option>
            <option value="fulltime">Full-time</option>
            <option value="parttime">Part-time</option>
            <option value="contract">Contract</option>
            <option value="freelance">Freelance</option>
        </select><br>
        <select name="location" id="countryDropdown">
                    <option value="">Location</option>
                    <!-- Countries will be dynamically loaded here -->
                </select>
        <button type="submit">Update Job</button>
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
