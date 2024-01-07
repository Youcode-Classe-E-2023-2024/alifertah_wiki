<?php
$stmt = $db->prepare("SELECT * FROM categories");
$stmt->execute([]);