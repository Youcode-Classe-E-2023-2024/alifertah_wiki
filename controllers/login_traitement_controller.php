<?php
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $stmt = $db->prepare("SELECT password FROM users WHERE email = ?");
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $hashedPassword = $stmt->fetchColumn();
        $stmt->closeCursor();

        if ($hashedPassword && password_verify($password, $hashedPassword)) {
            $_SESSION['email'] = $email;
            echo json_encode(array("success" => "Login successful"));
        } else {
            echo json_encode(array("error" => "Invalid email or password"));
        }
    } catch (PDOException $e) {
        echo json_encode(array("error" => "Database error: " . $e->getMessage()));
    }
    exit();
}
?>
