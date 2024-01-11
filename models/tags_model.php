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
            <form method='post' class='d-inline'>
                <input value='$tag[tag_id]' name='tag_id' hidden></input>
                <button class='btn' type='submit' name='delete'><i class='fa-solid fa-trash text-primary'></i></button>
            </form>
            <button data-toggle='modal' data-target='#categoryModal_$tag[tag_id]' class='btn' type='submit' name='edit'><i class='fa-solid fa-pen-to-square text-primary'></i></button>


            <div class='modal fade' id='categoryModal_$tag[tag_id]' tabindex='-1' role='dialog' aria-labelledby='categoryModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='categoryModalLabel'>Edit $tag[tag_name]</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post'>
          <div class='form-group'>
            <label for='tagName'>new tag Name</label>
            <input type='text' name='tagName' class='form-control' id='tagName' placeholder='Enter tag name'>
            <input type='text' name='tag_id' value=$tag[tag_id] hidden>
          </div>
          <button type='submit' name='confirmEdit' class='btn btn-primary'>confirm</button>
        </form>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
      </div>
    </div>
  </div>
</div>

        
            </td>
    </tr>
    
        ");
    }
}

if(isset($_POST['newTag'])){
    $tag = $_POST['tagName'];
    // insert_category();
    $stmt = $db->prepare("INSERT INTO tags (tag_name) VALUES (?)");
    $stmt->execute([$tag]);
    // header("Location: index.php?page=tags");
}

if(isset($_POST['delete'])){
    $cat = $_POST['tag_id'];
    $stmt = $db->prepare("DELETE FROM tags WHERE tag_id = '$cat'");
    $stmt->execute([]);
}
