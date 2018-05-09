<?php

include_once 'config.php';
$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
$query->execute();

$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Blog</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>My blog</h1>
      </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <?php
                foreach ($blogPosts as $blogPost){
                    echo '<div class="blog-post">';
                    echo '<h2>' . $blogPost['title'] . '</h2>';
                    echo '<p>Mayo 7, 2018 por <a href="#">Julian V.</a> </p>';
                    echo '<div class="blog-post-image">';
                    echo '<img src="images/keyboard.jpg" alt="" height="200" width="700">';
                    echo '</div>';
                    echo '<div class="blog-post-content">';
                    echo '<p>' . $blogPost['content'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
        <div class="col-md-4">
            Sidebar
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
          <div class="row">
              <div class="col-md-12">
                  <footer>
                      Este es el footer <br>
                      <a href="admin/index.php">Admin Panel</a>
                  </footer>
              </div>
          </div>
      </div>
  </div>
</body>
</html>
