<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $json_data = file_get_contents("php://input");
    $tags_array = json_decode($json_data, true);

    if ($tags_array !== null) {
        $query = "INSERT INTO posts_tags (tag_id, post_id) VALUES (:tag_id, :post_id)";
        $stmt = $db->prepare($query);

        $post_id = $db->lastInsertId();

        for ($i = 0; $i < count($tags_array['items']); $i++) {
            $stmt->bindParam(':post_id', $post_id, PDO::PARAM_INT);
            $stmt->bindParam(':tag_id', $tags_array['items'][$i], PDO::PARAM_INT);
            $stmt->execute();
        }

        error_log("Received Tags Array: " . print_r($tags_array, true));
        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'data' => $tags_array]);
    } else {
        error_log("Error decoding JSON data");
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'error' => 'Error decoding JSON data']);
    }

} else {
    error_log("Invalid request method. Expected POST.");
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Invalid request method. Expected POST.']);
}

die();
?>
