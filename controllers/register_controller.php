<?php
 if (isset($_POST['email'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $hashedPassword]);
    exit();
    // header('Location: index.php?page=login');
}