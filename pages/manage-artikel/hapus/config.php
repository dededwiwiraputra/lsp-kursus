<?php
// delete_article.php

include "../../../datas/config.php";

if (isset($_POST['delete_article'])) {
    // Get the article ID and image filename from the form submission
    $article_id = $_POST['article_id'];
    $article_image = $_POST['article_image'];

    // Construct the path to the image file
    $image_path = __DIR__ . '/../../../assets/img/' . $article_image;

    // Perform the deletion query
    $delete_query = "DELETE FROM artikel WHERE id = $article_id";
    $delete_result = $conn->query($delete_query);

    // Check if the deletion was successful
    if ($delete_result) {
        // Delete the associated image file
        if (file_exists($image_path)) {
            unlink($image_path);
            echo "Article and image deleted successfully.";
        } else {
            echo "Article deleted, but image file not found.";
        }
    } else {
        echo "Error deleting article: " . $conn->error;
    }
}

// Redirect back to the page displaying the table
header("Location: ../../layout.php");
exit();
