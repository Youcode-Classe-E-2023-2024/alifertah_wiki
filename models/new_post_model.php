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

