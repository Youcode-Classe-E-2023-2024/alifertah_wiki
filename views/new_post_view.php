<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="post_title">post_title</label>
            <input type="text" class="form-control" id="post_title" name='post_title' placeholder="post_title">
        </div>
        <div class="form-group">
            <label for="category">category</label>
            <select class="form-control" id="post_category" name="post_category">
                <option selected disabled>---category---</option>
                <?php getAllCategories($db);?>
            </select>
        </div>

        <div class="form-group">
            <label for="category">tags</label>
            <select class="form-control" id="tagSelect" name="tags">
                <option selected disabled>--select tag--</option>
                <?php getAllTags($db); ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="post_content">content</label>
            <textarea class="form-control" id="post_content" name="post_content" rows="3"></textarea>
        </div>
        <button id="submitPost" type="submit" name='create' class="btn btn-success">Submit</button>

    </form>
</div>

<script>
var tags = document.getElementById("tagSelect")
let selectedTags = []
tags.addEventListener("change", function() {
  let selectedTag = this.options[this.selectedIndex];
  let tagId = parseInt(selectedTag.id); // Ensure the id is treated as an integer
  selectedTags.push(tagId);
  selectedTag.style.display = "none";
});

document.getElementById('submitPost').addEventListener("click", (event)=>{
        
    fetch("index.php?page=process_tags", {
         method: "POST",
         headers: {
           "Content-Type" : "application/json",
         },
         body: JSON.stringify({items: selectedTags})
        })
        
        .then(response => response.json())
        .then(data =>{
         console.log("Success", data);
        })
        .catch((error) => {
             console.error('Error:', error);
         });
})

 
</script>
