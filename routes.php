<?php
@$page = $_GET['q'];
if (!empty($page)) {
    switch ($page) {
        case 'detail-artikel':
            include './pages/landing-page/detail-artikel/index.php';
            break;
    }
} else {
    include './pages/landing-page/index.php';
}
