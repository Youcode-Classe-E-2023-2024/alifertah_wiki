<?php
    if(isset($_POST['confirmEdit'])){
        $tag_id = $_POST['tag_id'];
        $tag_name = $_POST['tagName'];

        $query = "UPDATE tags SET tag_name = :tag_name WHERE tag_id = '$tag_id'";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':tag_name', $tag_name, PDO::PARAM_STR);
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error updating category: ' . $e->getMessage());
        }
    }