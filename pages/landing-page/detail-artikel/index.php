<?php
// Retrieve the article ID from the URL
$article_id = isset($_GET['id']) ? $_GET['id'] : null;

// Check if the article ID is set
if ($article_id) {
    include "./datas/config.php";

    $query = "SELECT * FROM artikel WHERE status = 1 AND id <> $article_id ORDER BY updated_at DESC LIMIT 3";
    $resultAll = $conn->query($query);

    // Fetch the data for the specified article ID
    $sql = "SELECT * FROM artikel WHERE id = $article_id";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $judul = $row['judul'];
        $isi = $row['isi'];
        $updated_at = $row['updated_at'];
        $gambar = $row['gambar'];
        $status = $row['status'];
    } else {
        // Handle the case where the article ID is not found
        echo "Article not found";
    }

    // Close the database connection
    $conn->close();
}

// Your existing HTML and form code
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <p class="fs-3 fw-semibold mb-2"><?= isset($judul) ? $judul : '' ?></p>
            <p class="mb-5"><?= isset($updated_at) ? $updated_at : '' ?></p>
            <img class="img-fluid mb-5" src="/lsp_kursus/assets/img/<?= isset($gambar) ? $gambar : '' ?>" alt="" style="height: 450px; width: 100%; object-fit: cover;">
            <span><?= isset($isi) ? $isi : '' ?></span>
        </div>
        <div class="ps-5 col-md-4">
            <p class="fs-4 fs-semibold">Recent Article</p>
            <?php if ($result->num_rows > 0) : ?>
                <?php
                while ($row = $resultAll->fetch_assoc()) : ?>
                    <a class="row mb-3 linked shadow-sm" href="?q=detail-artikel&id=<?= $row['id'] ?>" style="height: 70px;">
                        <div class="col-4">
                            <img src="/lsp_kursus/assets/img/<?= $row['gambar'] ?>" alt="" style="width: 100%; height: 70px; object-fit: cover;">
                        </div>
                        <div class="col-8">
                            <p class="truncate linked"><?= $row['judul'] ?></p>
                            <p class="linked" style="opacity: 0.5;"><?= $row['updated_at'] ?></p>
                        </div>
                    </a>
                <?php endwhile; ?>
            <?php else : ?>

            <?php endif; ?>
        </div>
    </div>
</div>