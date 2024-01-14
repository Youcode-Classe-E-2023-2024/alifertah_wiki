<?php


function create_post(PDO $pdo, $post_title, $post_category, $post_author, $post_content){
    $sql = "INSERT INTO posts (post_title, post_category, post_author, post_content) VALUES (:title, :category_name, :post_author, :content)";
    
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':title', $post_title, PDO::PARAM_STR);
    $statement->bindParam(':post_author', $post_author, PDO::PARAM_STR);
    $statement->bindParam(':category_name', $post_category, PDO::PARAM_STR);
    $statement->bindParam(':content', $post_content, PDO::PARAM_STR);

    $statement->execute();

    $lastInsertId = $pdo->lastInsertId();


    echo json_encode(['postId' => $lastInsertId]);
    die();
}
