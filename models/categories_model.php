<?php

function show_all($db){
    $stmt = $db->prepare("SELECT * FROM categories");
    $stmt->execute([]);
    while($category = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo("
            <tr class='text-center text-secondary'>
            <td>$category[category_id]</td>
            <td>$category[category_name]</td>
        <td>
        <form method='post'>
            <input value='$category[category_id]' name='category_id' hidden></input>
            <button class='btn' type='submit' name='delete'><i class='fa-solid fa-trash text-primary'></i></button>
            <button class='btn' type='submit' name='edit'><i class='fa-solid fa-pen-to-square text-primary'></i></button>
        </form>
        </td>
        </tr>
        ");
    }
}

if(isset($_POST['delete'])){
    $cat = $_POST['category_id'];
    $stmt = $db->prepare("DELETE FROM categories WHERE category_id = '$cat'");
    $stmt->execute([]);
}
