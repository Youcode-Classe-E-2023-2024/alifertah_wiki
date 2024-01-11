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

        .read-more {
            color: #007bff;
        }
    </style>
</head>
<body>

<!-- Page Content -->
<div class="container mt-5">

    <!-- Blog Posts -->
    <div class="row">

        <!-- Blog Post 1 -->
        <div class="col-lg-6">
            <div class="blog-post">
                <img src="https://via.placeholder.com/800x400" alt="Sample Image" class="img-fluid">
                <div class="info">
                    <h2>Sample Blog Post Title 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p class="date">January 1, 2024</p>
                    <a href="#" class="read-more"><i class="fas fa-arrow-right"></i> Read More</a>
                </div>
            </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="col-lg-6">
            <div class="blog-post">
                <img src="https://via.placeholder.com/800x400" alt="Sample Image" class="img-fluid">
                <div class="info">
                    <h2>Sample Blog Post Title 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p class="date">January 2, 2024</p>
                    <a href="#" class="read-more"><i class="fas fa-arrow-right"></i> Read More</a>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>
