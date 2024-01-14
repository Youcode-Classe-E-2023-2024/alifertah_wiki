<?php
function getTagsForPost($pdo, $postId) {
    $query = "SELECT tag_name
    FROM tags
    WHERE tag_id IN (
        SELECT tag_id
        FROM posts_tags
        WHERE post_id = :postId
    )";
    
    $statement = $pdo->prepare($query);
    $statement->bindParam(':postId', $postId, PDO::PARAM_INT);
    $statement->execute();

    $tags = $statement->fetchAll(PDO::FETCH_COLUMN);
    return $tags;
}

function deletePost($db, $postId){
    $sql = "DELETE FROM posts WHERE post_id = :postId";
    $statement = $db->prepare($sql);
    $statement->bindParam(':postId', $postId, PDO::PARAM_INT);
    $statement->execute(); 
    header('Location: index.php?page=home');
    // $rowCount = $statement->rowCount();
    // if ($rowCount > 0) {
    //     echo json_encode(['message' => 'Post deleted successfully']);
    // } else {
    //     echo json_encode(['error' => 'Post not found or already deleted']);
    // }
    // die();
}

function edit_post($db, $title, $content, $category, $postId) {
    $postUpdate = date('Y-m-d H:i:s'); 

    $stmt = $db->prepare("UPDATE posts SET 
        post_title = :post_title,
        post_content = :post_content,
        post_update = :post_update,
        post_category = :post_category 
        WHERE post_id = :post_id");

    $stmt->bindParam(':post_title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':post_content', $content, PDO::PARAM_STR);
    $stmt->bindParam(':post_update', $postUpdate, PDO::PARAM_STR);
    $stmt->bindParam(':post_category', $category, PDO::PARAM_INT);
    $stmt->bindParam(':post_id', $postId, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: index.php?page=home");
        return true; 
    } else {
        return false;
    }
}
