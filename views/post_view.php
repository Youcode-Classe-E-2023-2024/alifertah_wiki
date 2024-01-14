<style>
    body {
        font-family: 'Arial', sans-serif;
    }

    .post-container {
        max-width: 800px;
        margin: 50px auto;
    }

    .post-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .post-img {
        max-width: 100%;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .post-content {
        color: #555;
        font-size: 18px;
    }

    .post-meta {
        color: #888;
        font-size: 14px;
        margin-top: 20px;
    }

    .post-tags {
        color: #007bff;
        font-size: 14px;
        margin-top: 10px;
    }

    .edit-button {
        display: block;
        margin-top: 20px;
        text-align: center;
    }
</style>

<div class="container post-container">
    <div class="post-header">
        <h1><?= $_GET['title'] ?></h1>
        <p class="post-meta">
            <?= $_GET['date'] ?> | <?= $_GET['category'] ?>
        </p>
    </div>
    <img src="https://via.placeholder.com/800x400" alt="Post Image" class="img-fluid post-img">
    <div class="post-content">
        <?= $_GET['content'] ?>
    </div>
    <p class="post-tags">
        Tags:
        <?php
        foreach ($tags as $tag) {
            echo '<a href="#">' . $tag . '</a>, ';
        }
        ?>
    </p>

    <?php
    if (isset($_SESSION['user']) && trim($_SESSION['user']) == trim($_GET['author'])) {
        echo "<div class='d-flex justify-content-start align-items-center'>
        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#postModal'>
        Edit Post
        </button>
            <form method='post' onsubmit='return confirmDelete();'>
                <button class='btn btn-danger' type='submit' name='delete'>Delete</button>
            </form>
            
            </div> 
            ";
        }
        ?>
        <div class='modal fade' id='postModal' tabindex='-1' role='dialog' aria-labelledby='postModalLabel'
        aria-hidden='true'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='postModalLabel'>Create/Edit Post</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            <div class='modal-body'>

                <div class='container'>
                    <form method='post'>
                        <input name='post_id' value=<?= $_GET['id']?> hidden>
                        <div class='form-group'>
                            <label for='post_title'>Post Title</label>
                            <input type='text' class='form-control' id='post_title' name='post_title'
                                placeholder='Post Title'>
                        </div>
                        <div class='form-group'>
                            <label for='post_category'>Category</label>
                            <select class='form-control' id='post_category' name='post_category'>
                                <option selected disabled>--- Select Category ---</option>
                                <?php getAllCategories($db)?>; 
                            </select>
                        </div>

                        <div class='form-group'>
                            <label for='tagSelect'>Tags</label>
                            <select class='form-control' id='tagSelect' name='tags'>
                                <option selected disabled>-- Select Tag --</option>
                                <?php getAllTags($db); ?>
                            </select>
                        </div>

                        <div class='form-group'>
                            <label for='post_content'>Content</label>
                            <textarea class='form-control' id='post_content' name='post_content'
                                rows='3'></textarea>
                        </div>
                        <button type='submit' name='edit' class='btn btn-success'>Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this post?');
        }
    </script>
</div>
