<?php

include "../../datas/config.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Ambil input username dan password dari form
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Persiapkan pernyataan SQL dengan parameter terikat
    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);

    // Bind parameter ke pernyataan SQL
    $stmt->bind_param('ss', $input_username, $input_password);

    // Eksekusi pernyataan SQL
    $stmt->execute();

    // Ambil hasil query
    $result = $stmt->get_result();

    // Periksa apakah hasil query mengembalikan baris data
    if ($result->num_rows > 0) {
        // Login berhasil, set session dan redirect ke halaman dashboard
        $_SESSION['username'] = $input_username;
        // echo "Login Success";
        header('Location: ../layout.php');
        exit();
    } else {
        // Login gagal, tampilkan pesan error
        echo "Login failed. Please check your username and password.";
    }

    // Tutup pernyataan dan koneksi
    $stmt->close();
    $conn->close();
}
