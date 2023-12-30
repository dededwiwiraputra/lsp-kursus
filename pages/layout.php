<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header('Location: ../login/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Artikel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CSS Global -->
    <link rel="stylesheet" href="../assets/css/global.css">

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-primary py-3">
        <div class="container">
            <a class="navbar-brand">Admin Artikel</a>
            <div class="d-flex" role="search">
                <a class="link btn btn-secondary text-black px-5" href="./login/logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    <?php
    include './routes.php';
    ?>
    <!-- End Content -->

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark fixed-bottom">
        <div class="container text-center">
            <span class="text-light">Admin Artikel || Created By Dede Dwi Wira Putra</span>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Javascript -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- CKEditor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#isi'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>