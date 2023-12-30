<?php
include "../../../datas/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $article_id = $_POST['article_id'];
    $status = $_POST['status'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    // Handle file upload
    if (!empty($_FILES["gambar"]["name"])) {
        $targetDir = __DIR__ . '/../../../assets/img/';;
        $gambar = basename($_FILES["gambar"]["name"]);
        $targetFilePath = $targetDir . $gambar;

        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath)) {
            // File uploaded successfully
        } else {
            echo "Error uploading file.";
            exit; // Exit script to prevent further execution
        }
    } else {
        // File not selected, use the current file name from the hidden field
        $gambar = $_POST['current_gambar'];
    }

    // Update database with new values
    $updateSql = "UPDATE artikel SET status = '$status', judul = '$judul', isi = '$isi', gambar = '$gambar' WHERE id = $article_id";

    if ($conn->query($updateSql) === TRUE) {
        echo "Record updated successfully";
        header("Location: ../../layout.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
