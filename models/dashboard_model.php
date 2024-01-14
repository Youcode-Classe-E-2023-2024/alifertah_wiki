<?php

function getTotalUsers(){
    global $db;
    $stmt = $db->query("SELECT COUNT(*) FROM users");
    return $stmt->fetchColumn();
}

function getTotalCategories(){
    global $db;
    $stmt = $db->query("SELECT COUNT(*) FROM categories");
    return $stmt->fetchColumn();
}

function getTotalTags(){
    global $db;
    $stmt = $db->query("SELECT COUNT(*) FROM tags");
    return $stmt->fetchColumn();
}

function getTotalPosts(){
    global $db;
    $stmt = $db->query("SELECT COUNT(*) FROM posts");
    return $stmt->fetchColumn();
}
?>