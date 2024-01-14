<?php
function archive_post($db, $post_id){
    $stmt = $db->prepare("UPDATE posts SET 
        status = :status 
        WHERE post_id = :post_id");
$status = "archived";
$stmt->bindParam(':status', $status, PDO::PARAM_STR);
    $stmt->bindParam(':post_id', $post_id, PDO::PARAM_STR);

    if ($stmt->execute()) {
        header("Location: index.php?page=home");
        return true; 
    } else {
        return false;
    }   
}