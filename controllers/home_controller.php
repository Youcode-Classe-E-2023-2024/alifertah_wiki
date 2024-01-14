<?php
if(isset($_POST['archive'])){
    archive_post($db, $_POST['post_id']);
}