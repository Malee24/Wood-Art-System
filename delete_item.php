<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

  
    $result = $conn->query("SELECT image_URL FROM items WHERE id = $id");

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (!empty($row['image_URL']) && file_exists($row['image_URL'])) {
            unlink($row['image_URL']); // Delete image file
        }

        
        $conn->query("DELETE FROM items WHERE id = $id");
    }
}

header("Location: Aadd.php");
exit();
?>
