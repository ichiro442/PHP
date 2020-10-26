<?php
// $url = "https://www.t3a.jp/blog/web-develop/get-site-data/";
// $output = file_get_contents($url);
// var_dump($output);


// phpQueryの読み込み
// require_once("./phpQuery-onefile.php");
// $html = file_get_contents("https://www.youtube.com/watch?v=ndQNtf_b20o&list=WL&index=4&t=2s");
// $title = phpQuery::newDocument($html)->find("h1")->text();
// $articles = phpQuery::newDocument($html)->find(".ArticleText p")->text();
// echo phpQuery::newDocument($html)->find(".ArticleText p")->text();

// ニュースサイト
// require_once("./phpQuery-onefile.php");
// $html = file_get_contents("https://www.asahi.com/articles/ASN8L3GY1N8GULFA016.html");
// $title = phpQuery::newDocument($html)->find("h1")->text();
// $article = phpQuery::newDocument($html)->find(".ArticleText p")->text();

// $html = file_get_contents("https://www.asahi.com/articles/ASN8L0DD3N8KUHBI02Q.html");
// $title2 = phpQuery::newDocument($html)->find("h1")->text();
// $article2 = phpQuery::newDocument($html)->find(".ArticleText p")->text();


// 一括取得
// require_once("./phpQuery-onefile.php");
// $html = file_get_contents("https://www.asahi.com/articles/ASN8L3GY1N8GULFA016.html");
// //HTMLを全文取得
// $dom = phpQuery::newDocument($html);

// /*
//  * Wikipediaのタイトル・H1タグの中身と、
//  * 画像の一覧を取得している。
//  */

// //H1タグの取得
// $h1 = $dom->find("h1")->text();
// echo $h1 . '<br>';

// //titleタグの取得
// $title = $dom->find("title")->text();
// echo $title . '<br>';

// //imgタグの一覧を取得
// foreach ($dom->find('img') as $img){
//   $img = $img->getAttribute('src');
//   echo '<img src=' . $img . '><br>';
// }

// //aタグの一覧を取得
// foreach ($dom->find('a') as $a){
//   $a = $a->getAttribute('href');
//   echo '<a href=' . $a . '>' . $a . '</a><br>';
// }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スクレイピング</title>
</head>
<body>

<h1><?=$title?></h1>
<p>記事の中身は</p>
<p><?= $article ?></p>

<h1><?=$title2?></h1>
<p>記事の中身は</p>
<p><?= $article2 ?></p>

</body>
</html>