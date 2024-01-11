CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    user_type ENUM('regular', 'admin') DEFAULT 'regular' NOT NULL
);

CREATE TABLE categories (
    category_id INT PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(255) NOT NULL,
);

CREATE TABLE tags (
    tag_id INT PRIMARY KEY AUTO_INCREMENT,
    tag_name VARCHAR(255) NOT NULL,
);

CREATE TABLE posts ( 
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    post_title VARCHAR(255) NOT NULL, 
    post_content TEXT NOT NULL, 
    post_date DATETIME DEFAULT CURRENT_TIMESTAMP, 
    post_update DATE, 
    post_author INT, 
    post_categoy INT
);

CREATE TABLE tags (
    tag_id INT,
    post_id INT
);