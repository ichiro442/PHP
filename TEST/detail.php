<?php 
require_once("blog.php");
$blog = new Blog();
$result = $blog->getById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブログ詳細</title>
</head>
<body>
    <h2>ブログ詳細</h2>
    <h3>タイトル：<?PHP echo $result['title'] ?></h3>
    <p>投稿日時：<?PHP echo $result['post_at'] ?></p>
    <p>カテゴリ：<?PHP echo $blog->setCategoryName($result['category']) ?></p>
    <hr>
    <p>本文：<?PHP echo $result['content'] ?></p>
</body>
</html>