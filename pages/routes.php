<?php
@$page = $_GET['q'];
if (!empty($page)) {
    switch ($page) {
        case 'tambah-artikel':
            include './manage-artikel/tambah/index.php';
            break;

        case 'edit-artikel':
            include './manage-artikel/edit/index.php';
            break;

        case 'logout':
            include 'logout.php';
            break;
    }
} else {
    include './dashboard/dashboard.php';
}
