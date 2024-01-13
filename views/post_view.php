<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
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
    </style>
</head>

<body>

    <!-- Post Content -->
    <div class="container post-container">

        <!-- Post Header -->
        <div class="post-header">
            <h1><?= $_GET['title']?></h1>
            <p class="post-meta">
            <?= $_GET['date']?> | <?= $_GET['category']?>
            </p>
        </div>

        <!-- Post Image -->
        <img src="https://via.placeholder.com/800x400" alt="Post Image" class="img-fluid post-img">

        <!-- Post Content -->
        <div class="post-content">
            <?= $_GET['content']?>
        </div>

        <!-- Post Tags -->
        <p class="post-tags">
            Tags:
            <?php
            // print_r($tags);
            foreach ($tags as $tag) {
                echo '<a href="#">' . $tag . '</a>, ';
            }
            ?>

    </div>

</body>

</html>
