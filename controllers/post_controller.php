<?php
function getTagsForPost($pdo, $postId) {
    $query = "SELECT t.tag_name
              FROM tags t
              JOIN posts_tags pt ON t.tag_id = pt.tag_id
              WHERE pt.post_id = :postId";
    
    $statement = $pdo->prepare($query);
    $statement->bindParam(':postId', $postId, PDO::PARAM_INT);
    $statement->execute();

    $tags = $statement->fetchAll(PDO::FETCH_COLUMN);
    return $tags;
}


$tags = getTagsForPost($db, (int)$_GET['id']);