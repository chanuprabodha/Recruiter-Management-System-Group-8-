<?php
// Assuming you have a database connection set up
include 'connection.php';

if (isset($_GET['id'])) {
    $jobId = $_GET['id'];
    
    // Delete the job from the database
    $sql = "DELETE FROM jobs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $jobId);
    
    if ($stmt->execute()) {
        // If the deletion was successful, redirect to the job listing page
        header("Location: job-listing.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $stmt->close();
}

$conn->close();
?>
