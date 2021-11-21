<?php
// var_dump($_GET);
// var_dump($_POST);
// $keyword = $_POST;
// var_dump($keyword);

if(isset($_POST['keyword'] )){
    var_dump($_POST);
    unset($_POST);
}elseif(!(isset($_POST['keyword'] ))){
      echo '値がセットされていません';
    }
// $keyword = '魚';
// // $keyword = $_POST['keyword'] ? $_POST['keyword'] : '';
// $baseurl = 'https://webservice.recruit.co.jp/hotpepper/gourmet/v1/';
// $params = [
//     'key' => '4b7463156688d77d',
//     'format' => 'json',
//     'keyword' => $keyword,
//     'count' => 100
// ];
// $url = $baseurl . '?' . http_build_query($params, '', '&');
 
// // リクエストを送り結果を取得
// $result = file_get_contents($url);
 
// // 結果を出力
// header("Content-Type: text/javascript; charset=utf-8");
// echo $result;
 
// exit();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="api.php" method="post">
<input type="text" name="keyword">
<input type="submit" value="送信">
</form>
<?php echo $results_available; ?>件表示中
 
 <?php foreach( $shops as $shop ){ // 一例
     echo $shop['name']; // 店名
    //  echo $shop['address']; // 住所
 } ?>
</body>
</html>