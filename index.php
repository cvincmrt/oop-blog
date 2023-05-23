<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
<?php
    require_once 'class/Db.php';
    require_once  'class/Blog.php';

    $db = new Db('localhost', 'blog', 'root', "");
    $blog = new Blog($db);


    $blog->getPostOne(1);
    $blog->getPosts();





?>






        </div>
    </div>
</div>










</body>
</html>



