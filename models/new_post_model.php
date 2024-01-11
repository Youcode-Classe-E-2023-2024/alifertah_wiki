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


function create_post($post_title, $category, $content){

}

function getAllTags(PDO $pdo) {

    $sql = "SELECT * FROM tags";

    $statement = $pdo->prepare($sql);
    $statement->execute();

    $allTags = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($allTags as $tag ){
        echo("<option>".$tag['tag_name'])."</option>";
    }
}