<?php
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $stmt = $db->prepare("SELECT user_id, user_type, password FROM users WHERE email = ?");
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        if ($result && password_verify($password, $result['password'])) {
            $_SESSION['email'] = $email;
            $_SESSION['user'] = $result['user_id'];
            $_SESSION['user_type'] = $result['user_type'];
            
            echo json_encode(array("success" => "Login successful", "role" => $result['user_type']));
        } else {
            echo json_encode(array("error" => "Invalid email or password"));
        }
    } catch (PDOException $e) {
        echo json_encode(array("error" => "Database error: " . $e->getMessage()));
    }
    exit();
}
?>
