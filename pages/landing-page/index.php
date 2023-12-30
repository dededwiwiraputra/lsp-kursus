<?php
include './datas/config.php';

// Query untuk mengambil data dari tabel gambar_carousel
$query = "SELECT * FROM artikel WHERE status = 1 ORDER BY updated_at DESC";
$result = $conn->query($query);

?>
<div class="container py-5">
    <div class="row">
        <?php if ($result->num_rows > 0) : ?>
            <?php
            while ($row = $result->fetch_assoc()) : ?>
                <div class="col-4 mb-5">
                    <a href="?q=detail-artikel&id=<?= $row['id'] ?>" class="link">
                        <div class="card">
                            <img src="/lsp_kursus/assets/img/<?= $row['gambar'] ?>" class="card-img-top img-fluid" alt="..." style="width: 100%; height: 300px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><span class="truncate"><?= $row['judul'] ?></span></h5>
                                <p class=""><?= $row['updated_at'] ?></p>
                                <span class="truncate-2">
                                    <?= $row['isi'] ?>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php else : ?>

        <?php endif; ?>
    </div>
</div>