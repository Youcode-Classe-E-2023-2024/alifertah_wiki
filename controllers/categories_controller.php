<?php
    if(isset($_POST['edit'])){
        header("Location: index.php?page=edit_category&category_id=$_POST[category_id]");
    }