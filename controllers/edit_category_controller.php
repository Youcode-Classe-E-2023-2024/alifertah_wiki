<?php
    if(isset($_POST['edit'])){
        $categoryName = $_POST['category_name'];
        echo($categoryName);
        $category_id = $_GET['category_id'];
        $query = "UPDATE categories SET category_name = :category_name WHERE category_id = '$category_id'";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':category_name', $categoryName, PDO::PARAM_STR);
        try {
            $stmt->execute();
            header('Location: index.php?page=categories');
        } catch (PDOException $e) {
            die('Error updating category: ' . $e->getMessage());
        }
    }