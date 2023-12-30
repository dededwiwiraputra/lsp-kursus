<?php
// Retrieve the article ID from the URL
$article_id = isset($_GET['id']) ? $_GET['id'] : null;

// Check if the article ID is set
if ($article_id) {
    include "../datas/config.php";

    // Fetch the data for the specified article ID
    $sql = "SELECT * FROM artikel WHERE id = $article_id";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $judul = $row['judul'];
        $isi = $row['isi'];
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

<div class="container py-5 mb-5">
    <div class="row">
        <div class="col">
            <p class="fs-4 fw-semibold mb-5">Manage Artikel</p>
            <form action="./manage-artikel/edit/config.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="article_id" value="<?= $article_id ?>">
                <input type="hidden" name="status" id="status" value="<?= isset($status) ? $status : '0' ?>">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="" value="<?= isset($judul) ? $judul : '' ?>">
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi</label>
                    <textarea class="form-control" id="isi" name="isi" rows="3"><?= isset($isi) ? $isi : '' ?></textarea>
                </div>
                <div class="mb-5">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control mb-2" id="gambar" name="gambar" onchange="updateImagePreview(this)">
                    <img id="image-preview" src="../assets/img/<?= isset($gambar) ? $gambar : '' ?>" alt="" class="img-fluid" style="object-fit: cover; width: 300px; height: 180px;">
                    <input type="hidden" name="current_gambar" value="<?= isset($gambar) ? $gambar : '' ?>">
                </div>
                <!-- Rest of your form fields and buttons -->

                <div class="row justify-content-end mb-3">
                    <div class="col-2">
                        <button type="submit" class="btn full-width text-white bg-red py-2">Batal</button>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-2">
                        <button type="submit" class="btn full-width bg-secondary py-2" onclick="setDraft()">Draft</button>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn full-width text-white bg-primary py-2" onclick="setPublish()">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function setDraft() {
        // Set the value of the hidden status input to 0
        document.getElementById('status').value = '0';
    }

    function setPublish() {
        // Set the value of the hidden status input to 1
        document.getElementById('status').value = '1';
    }

    function updateImagePreview(input) {
        const preview = document.getElementById('image-preview');
        const file = input.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>