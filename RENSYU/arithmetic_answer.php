<?php
$ans1 = $_POST["ans1"];
$ans2 = $_POST["ans2"];


// $ans3 = $_POST["ans3"];
// $ans4 = $_POST["ans4"];
$correct = 0;
if(!empty($ans1) && !empty($ans2)){
    // $ans1 !== "" && $ans2 !==""){
    if($ans1 == 5){
        $answer = "正解";
        $correct++;
    }
    else{
        $answer = "間違っています";
    }
    if($ans2 == 32){
        $answer = "正解";
        $correct++;
    }
    else{
        $answer = "また間違っています";
    }
}else{
$answer = "未回答です。答えを書いてください。";
}



    // }if($ans3 == 48){
    //     $answer++;
    // }else{
    //     echo "おおおおお！！？";
    // }if($ans4 == 5){
    //     $answer++;
    // }else{
    //     echo "やるじゃん！！！！";
    // }
    // echo "あなたのスコアは $answer 点です！"；



?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= $answer?></p>
    <p>スコア: <?= $correct ?></p>
<p><a href="arithmetic_quiz.php">もう一回答える</a></p>
</body>
</html>