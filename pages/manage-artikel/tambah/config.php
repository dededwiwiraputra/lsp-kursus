<?php

include "../../../datas/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $status = $_POST['status'];

    // Handle file upload
    $gambar = '';  // Initialize an empty string for the file name

    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . '/../../../assets/img/';  // Specify the directory where you want to save the uploaded files

        // Generate a unique file name to avoid overwriting existing files
        $gambar = uniqid() . '_' . $_FILES['gambar']['name'];

        // Move the uploaded file to the specified directory
        move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadDir . $gambar);
    }

    // Insert data into the database
    $query = "INSERT INTO artikel (judul, isi, gambar, status) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssss', $judul, $isi, $gambar, $status);

    if ($stmt->execute()) {
        // Data inserted successfully
        echo "Data added to the database successfully.";
        header("Location: ../../layout.php");
    } else {
        // Error in execution
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
