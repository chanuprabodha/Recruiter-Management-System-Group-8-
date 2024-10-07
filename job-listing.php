<?php
require_once 'connection.php';

// Get search parameters
$keywords = isset($_GET['keywords']) ? $_GET['keywords'] : '';
$location = isset($_GET['location']) ? $_GET['location'] : '';
$jobType = isset($_GET['jobType']) ? $_GET['jobType'] : '';

// Create SQL query with filtering based on user input
$sql = "SELECT * FROM jobs WHERE 1=1";

if (!empty($keywords)) {
    $sql .= " AND title LIKE '%" . $conn->real_escape_string($keywords) . "%'";
}

if (!empty($location)) {
    $sql .= " AND location = '" . $conn->real_escape_string($location) . "'";
}

if (!empty($jobType)) {
    $sql .= " AND job_type = '" . $conn->real_escape_string($jobType) . "'";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment Management System</title>
    <link rel="stylesheet" href="assert/style.css">
</head>
<body>
    <header>
    <div class="logo">
            <h1>RMS</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="job-listing.php">Job Listing</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
        </nav>
        <div class="profile">
        <a href="profile.php"><img src="assert/profile.png" alt="Profile Icon" style="width: 40px; border-radius: 50%;"></a> <!-- Replace with your profile icon -->
    </div>
    </header>

    <!-- Search Section with Filters -->
    <section id="search-jobs">
        <div class="search-container">
            <form action="job-listing.php" method="get">
                <input type="text" name="keywords" placeholder="Job title or keywords" value="<?php echo htmlspecialchars($keywords); ?>" />
                
                <!-- Location Filter -->
                <select name="location" id="countryDropdown">
                    <option value="">Location</option>
                    <!-- Countries will be dynamically loaded here -->
                </select>

                <select name="jobType">
                    <option value="">Job Type</option>
                    <option value="fulltime" <?php if($jobType == 'fulltime') echo 'selected'; ?>>Full-time</option>
                    <option value="parttime" <?php if($jobType == 'parttime') echo 'selected'; ?>>Part-time</option>
                    <option value="contract" <?php if($jobType == 'contract') echo 'selected'; ?>>Contract</option>
                    <option value="freelance" <?php if($jobType == 'freelance') echo 'selected'; ?>>Freelance</option>
                </select>

                <button type="submit">Search Jobs</button>
            </form>
        </div>
    </section>

    <h2 style="text-align: center;">Job Listings</h2>
    <a href="create-job.php" class="create-job">Create New Job</a>

    <div class="job-grid">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='job-box'>
                        <h3>{$row['title']}</h3>
                        <p>{$row['description']}</p>
                        <p><strong>Job Type:</strong> {$row['job_type']}</p>
                        <p><strong>Location:</strong> {$row['location']}</p>
                        <div class='job-actions'>
                            <a href='update-job.php?id={$row['id']}'>Update</a>
                            <a href='delete-job.php?id={$row['id']}' onclick='return confirm(\"Are you sure you want to delete this job?\");'>Delete</a>
                        </div>
                      </div>";
            }
        } else {
            echo "<p>No jobs found.</p>";
        }
        ?>
    </div>
        
    <!-- View More Button -->
    <div class="view-more-container">
        <a href="#view-more" class="view-more-btn">View More</a>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <h2 class="footer-title">Recruitment Management System</h2>
            <nav class="footer-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="job-listing.php">Job Listing</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
            <!-- Social Media Links -->
            <div class="social-media">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <!-- Copyright Bar Section -->
    <div class="copyright-bar">
        <p>&copy; 2024 RMS. All rights reserved. | 
            <a href="#terms">Terms & Conditions</a> | 
            <a href="#privacy">Privacy Policy</a>
        </p>
    </div>

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
