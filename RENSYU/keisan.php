<?php
if( empty($_POST['x']) && empty($_POST['y']) ){
$x = $y = "";
}else{
$x = $_POST['x'];
$y = $_POST['y'];
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算</title>
</head>
<body>
<form method="POST" action="keisan.php">
<input type="text" name="x" value="<?=$x?>">×
<input type="text" name="y" value="<?=$y?>">＝
<input type="text" name="A" value="<?=$x*$y?>">
<input type="submit" value="計算">
</form>
    
</body>
</html>
