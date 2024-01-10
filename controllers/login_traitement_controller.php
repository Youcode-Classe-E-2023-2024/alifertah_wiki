<?php
if (isset($_POST['email'], $_POST['password'], $_POST['username'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $username = $_POST['username'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            $stmt = $db->prepare("INSERT INTO users (users_email, users_password, users_username) VALUES (?, ?, ?)");
            $stmt->bindParam(1, $email);
            $stmt->bindParam(2, $hashedPassword);
            $stmt->bindParam(3, $username);

            if ($stmt->execute()) {
                echo json_encode(array("success" => "User registered successfully"));
            } else {
                echo json_encode(array("error" => "Failed to register user"));
            }
            $stmt->closeCursor();
        } catch (PDOException $e) {
            echo json_encode(array("error" => "Database error: " . $e->getMessage()));
        }

    } else {
        echo json_encode(array("error" => "Please enter a valid email"));
    }
    exit();
}
?>
