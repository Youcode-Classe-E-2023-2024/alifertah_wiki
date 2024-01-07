<?php
if(isset($_POST['create'])){
    $category = $_POST['category'];
    insert_category();
    $stmt = $db->prepare("INSERT INTO categories (category_name) VALUES (?)");
    $stmt->execute([$category]);
    header("Location: index.php?page=categories");
}