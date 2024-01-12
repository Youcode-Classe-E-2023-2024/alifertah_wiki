<?php
function getAllCategories(PDO $pdo) {

    $sql = "SELECT * FROM categories";

    $statement = $pdo->prepare($sql);
    $statement->execute();

    $allCategories = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($allCategories as $category ){
        echo("<option>".$category['category_name'])."</option>";
    }
}


function create_post(PDO $pdo, $post_title, $post_category, $post_author, $post_content){
    $sql = "INSERT INTO posts (post_title, post_category, post_author, post_content) VALUES (:title, :categoryID, :post_author, :content)";
    
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':title', $post_title, PDO::PARAM_STR);
    $statement->bindParam(':post_author', $post_author, PDO::PARAM_STR);
    $statement->bindParam(':categoryID', $post_category, PDO::PARAM_INT);
    $statement->bindParam(':content', $post_content, PDO::PARAM_STR);

    $statement->execute();
}

function getAllTags(PDO $pdo) {

    $sql = "SELECT * FROM tags";

    $statement = $pdo->prepare($sql);
    $statement->execute();

    $allTags = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($allTags as $tag ){
        echo("<option id='$tag[tag_id]' class='tag'>".$tag['tag_name'])."</option>";
    }
}