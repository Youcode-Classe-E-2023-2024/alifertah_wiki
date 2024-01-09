<?php
if(isset($_POST['logout'])){
    if(isset($_SESSION)){
        session_unset();
        session_destroy();
        header("Location: index.php?page=login");
    }
}