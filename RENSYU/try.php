<?php
// get values passefrom
$user = $_POST['user'];

$user = stripslashes($user);
$user = mysql_real_scape_srtring($user);

// mysql_connect("localhost","root","");
// mysql_selecgt_db("gajyumaru")
    //まずはデータベースへ接続します
    $dsn = "mysql:dbname=php_tools;host=localhost;charset=utf8mb4";
    $username = "root";
    $password = "root";
        $options = [];
    $pdo = new PDO($dsn, $username, $password, $options);

   $result = mysql_query_("select * from gajyumaru where userName = '$user'")
   or die("Faild to query database".mysql_error()); 
   $row = mysql_fetch_array($result);
   if($row['user'] == $user){
    header('location: gajyumaru.php');
    exit();
}
?>





<?php
    //まずはデータベースへ接続します
    $dsn = "mysql:dbname=php_tools;host=localhost;charset=utf8mb4";
    $username = "root";
    $password = "root";
        $options = [];
    $pdo = new PDO($dsn, $username, $password, $options);


session_start();
//POSTのvalidate
if (!filter_var($_POST['user'],FILTER_VALIDATE_BOOLEAN)) {
  echo '入力された値が不正です。';
  return false;
}
//DB内でPOSTされたメールアドレスを検索
try {
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
  $stmt = $pdo->prepare('select * from userDeta where user = ?');
  $stmt->execute([$_POST['user']]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
//emailがDB内に存在しているか確認
if (!isset($row['user'])) {
  echo '名前が間違っています。';
  return false;
}
//パスワード確認後sessionにメールアドレスを渡す
if (password_verify($_POST['password'], $row['password'])) {
  session_regenerate_id(true); //session_idを新しく生成し、置き換える
  $_SESSION['EMAIL'] = $row['user'];
  echo 'ログインしました';
} else {
  echo '名前が間違っています。';
  return false;
}
?>


<!-- gajyumaruに飛ばす正解code -->
<?php
session_start();
ini_set("display_errors", "1");

// ↓変更
if (isset($_SESSION["user"])) {
    header('location: gajyumaru.php');
    exit();
} elseif (!empty($_POST["user"])) {
    $_SESSION["user"] = $_POST["user"];
    header('location: gajyumaru.php');
    exit();
}
$title = "Login";
?>

