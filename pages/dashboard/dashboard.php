<div class="container py-5">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <p class="fs-4 fw-semibold mb-5">List Artikel</p>
                </div>
                <div class="col text-end">
                    <a class="link btn btn-secondary text-black px-5" href="?q=tambah-artikel">Tambah Artikel</a>
                </div>
            </div>
            <?php
            include __DIR__ . '/../../datas/config.php';

            // Query untuk mengambil data dari tabel gambar_carousel
            $query = "SELECT * FROM artikel";
            $result = $conn->query($query);

            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Status</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Tanggal Pembuatan</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <?php if ($result->num_rows > 0) : ?>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($row = $result->fetch_assoc()) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td class="col-2">
                                    <?php
                                    // Check the value of 'status' and display accordingly
                                    echo $row['status'] == 0 ? 'Draft' : 'Publish';
                                    ?>
                                </td>
                                <td class="col-4"><span class="truncate"><?= $row['judul'] ?></span></td>
                                <td class="col-3"><?= $row['created_at'] ?></td>
                                <td class="col-3 d-flex">
                                    <a class="link btn btn-primary text-white px-5" href="?q=edit-artikel&id=<?= $row['id'] ?>">Edit</a>
                                    <form class="ms-2" method="post" action="./manage-artikel/hapus/config.php">
                                        <input type="hidden" name="article_image" value="<?= $row['gambar'] ?>">
                                        <input type="hidden" name="article_id" value="<?= $row['id'] ?>">
                                        <button type="submit" class="link btn btn-red text-white px-5" name="delete_article">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                <?php else : ?>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td class="col-2"></td>
                            <td class="col-4"></td>
                            <td class="col-3"></td>
                            <td class="col-3">
                                <a class="link btn bg-primary text-white px-5">Edit</a>
                                <a class="link btn bg-red text-white px-5">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                <?php endif; ?>
            </table>
        </div>
    </div>
</div>