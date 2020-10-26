<?php
$hands = ["グー","チョキ","パー"];

if(isset($_POST["playerHand"])){
$playerHand = $_POST["playerHand"];

$key = array_rand($hands);
$pcHand = $hands[$key];

if($playerHand == $pcHand) {
    $result = "あいこ";
}elseif($playerHand == "グー" && $pcHand == "チョキ"){
    $result ="勝ち";
}elseif($playerHand == "チョキ" && $pcHand == "パー"){
$result = "勝ち";
}elseif($playerHand == "パー" && $pcHand == "グー"){
$result = "勝ち";
}else{
    $result ="負け";
}
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果発表</title>
    <link rel="stylesheet" href="./battle.css">
</head>
<body>
    <div class="wrapper" id="wrapper">
        <header>
        <div class="header-logo">じゃんけん大会結果発表~~~~</div>
        </header>
        <main>
            <h1>結果は・・・・</h1>
            <div class="result-box flex">
                    <p class="result-word"><?= $result ?>!!</p>
            </div>
            <div class="hands">
                あなた：<?= $playerHand  ?><br>
                コンピューター：<?= $pcHand ?><br>
            </div>
                <p><a class="red" href="index.php">>>>もう一回勝負する</a></p>
           
        </main>
    <footer>
    <small>&copy;yurugramming!!</small>
    </footer>
    
    </div>
</body>
</html>