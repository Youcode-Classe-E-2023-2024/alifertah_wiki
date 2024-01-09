<?php

function show_all($db){
    $stmt = $db->prepare("SELECT * FROM tags");
    $stmt->execute([]);
    while($tag = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo("
            <tr class='text-center text-secondary'>
            <td>$tag[tag_id]</td>
            <td>$tag[tag_name]</td>
        <td>
        <form method='post'>
            <input value='$tag[tag_id]' name='tag_id' hidden></input>
            <button class='btn' type='submit' name='delete'><i class='fa-solid fa-trash text-primary'></i></button>
            <button class='btn' type='submit' name='edit'><i class='fa-solid fa-pen-to-square text-primary'></i></button>
        </form>
        </td>
        </tr>
        ");
    }
}

if(isset($_POST['delete'])){
    $cat = $_POST['tag_id'];
    $stmt = $db->prepare("DELETE FROM tags WHERE tag_id = '$cat'");
    $stmt->execute([]);
}
