<?php

include_once '../config.php';

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
            <h2>Post</h2>
            <a href="post.php" class="btn btn-info">Back</a>
            <form action="insert-post.php" method="post">
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="Title" id="inputTitle" class="form-control">
                </div>
                <textarea class="form-control" name="content" id="inputContent" rows="5"></textarea>
                <br>
                <input type="submit" name="save" value="save" class="btn btn-success">
            </form>
        </div>
        <div class="col-md-4">
            Sidebar
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <footer>
                    Este es el footer <br>
                    <a href="index.php">Admin Panel</a>
                </footer>
            </div>
        </div>
    </div>
</div>
</body>
</html>