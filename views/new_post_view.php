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
            <select class="form-control" id="tags" name="tags">
                <option>--select tag--</option>
                <?php getAllTags($db); ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="post_content">content</label>
            <textarea class="form-control" id="post_content" name="post_content" rows="3"></textarea>
        </div>
        <button type="submit" name='create' class="btn btn-success">Submit</button>

    </form>
</div>
