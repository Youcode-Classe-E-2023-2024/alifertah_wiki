<?php

/**
 * Dump and die.
 *
 * @param $var
 * @return void
 */
function dd($var) {
    echo '<pre>';
    echo '<code>';
    var_dump($var);
    echo '</code>';
    echo '</pre>';
    die();
}

/**
 * Prevent inputs from XSS vulnerability.
 *
 * @param string $str
 * @return string
 */
function str_secure($str) {
    return trim(htmlspecialchars($str));
}

function getAllCategories(PDO $pdo) {

    $sql = "SELECT * FROM categories";

    $statement = $pdo->prepare($sql);
    $statement->execute();

    $allCategories = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($allCategories as $category ){
        echo("<option>".$category['category_name'])."</option>";
    }
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
