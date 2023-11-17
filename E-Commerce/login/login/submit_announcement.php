<?php
session_start();
include "db_conn.php";

if ($_SESSION['role'] == 'admin' && isset($_POST['announcement'])) {
    $admin_id = $_SESSION['id'];
    $announcement_text = $_POST['announcement'];

    $sql = "INSERT INTO announcements (admin_id, announcement_text) VALUES ('$admin_id', '$announcement_text')";
    if (mysqli_query($conn, $sql)) {
        $response = array("success" => "Announcement submitted successfully");
    } else {
        $response = array("error" => "Failed to submit announcement");
    }
    
    header('Content-Type: application/json');
    echo json_encode($response);
    
    
} else {
    header("Location: admin_dashboard.php?error=Unauthorized");
}
?>
