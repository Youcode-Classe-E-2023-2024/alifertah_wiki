<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .blog-post {
            background-color: #ffffff;
            border-radius: 8px;
            margin-bottom: 20px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .blog-post:hover {
            transform: scale(1.02);
        }

        .blog-post img {
            max-width: 100%;
            border-radius: 8px 8px 0 0;
        }

        .blog-post .info {
            padding: 20px;
        }

        .blog-post h2 {
            font-size: 1.8em;
            margin-bottom: 10px;
            color: #333;
        }

        .blog-post p {
            color: #555;
        }

        .blog-post .date {
            color: #888;
            font-size: 0.9em;
        }

        .blog-post .category {
            color: #007bff;
            font-size: 0.9em;
        }

        .read-more {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <?php
            $query = "SELECT * FROM posts";
            $stmt = $db->query($query);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $postId = $row['post_id'];

                $postTitle = $row['post_title'];
                $postContent = $row['post_content'];
                $postDate = $row['post_date'];
                $categoryName = $row['post_category'];
                $postAuthor = $row['post_author'];
            ?>
                <div class="col-lg-6">
                    <div class="blog-post">
                        <img src="https://via.placeholder.com/800x400" alt="Sample Image" class="img-fluid">
                        <div class="info">
                            <h2><?php echo $postTitle; ?></h2>
                            <p><?php echo substr($postContent, 0, 30) . '...'; ?></p>
                            <p class="category">Category: <?php echo $categoryName; ?></p>
                            <p class="date"><?php echo date('F j, Y', strtotime($postDate)); ?></p>
                            <p class="author">Author: <?php echo $postAuthor; ?></p>
                            <a href="index.php?page=post&title=<?= $postTitle;?> 
                                &content=<?=$postContent ?>
                                &date=<?= $postDate?>
                                &category=<?= $categoryName?>
                                &author=<?= $postAuthor?>
                                &id=<?= $postId?>"
                                class="read-more">
                                <i class="fas fa-arrow-right"></i> Read More
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>
