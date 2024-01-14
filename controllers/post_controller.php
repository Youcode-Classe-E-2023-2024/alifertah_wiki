<?php
$tags = getTagsForPost($db, (int)$_GET['id']);

if(isset($_POST['delete'])){
    deletePost($db, $_GET['id']);
}

if(isset($_POST['edit'])){
    edit_post($db, $_POST['post_title'],
    $_POST['post_content'],    
    $_POST['post_category'],    
    $_POST['post_id']    
);    
}