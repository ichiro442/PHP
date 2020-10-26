<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<!-- // $ans1 = $_POST["ans1"];
// $ans2 = $_POST["ans2"];
// $ans3 = $_POST["ans3"];
// $ans4 = $_POST["ans4"];
// $correct = 0;
// if(!empty($_POST)){
//     if($ans1 == 5){
//         $correct++;
//     }else{
//         echo "まだまだ まだまだ";
//     }if($ans2 == 4){
//         $correct++;
//     }else{
//         echo "まだまだ";
//     }if($ans3 == 48){
//         $correct++;
//     }else{
//         echo "おおおおお！！？";
//     }if($ans4 == 5){
//         $correct++;
//     }else{
//         echo "やるじゃん！！！！";
//     }
    // echo "あなたのスコアは $correct 点です！"；
} -->



<form action="arithmetic_answer.php" method="post">
<p>waht is 2 + 3</p>
<input type="number" name="ans1">
<p>waht is 4 x 8</p>
<input type="number" name="ans2">
<p>クリックしてあなたの答えを送ってください</p>
<input type="submit">
</form>

<!-- <div id="wrapper">
    クイズです
<form action="answer.php">
    <input type="text" name="quiz" value="">
    <input type="text" name="quiz">
    <input type="text" name="quiz">
    <button type="submit">答え</button>
    <input type="submit" value="答える">

</form> -->


</div>
</body>
</html>