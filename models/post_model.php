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