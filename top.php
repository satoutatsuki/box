<html>
<head lang="ja">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>縄張り争い</title>
</head>
<body bgcolor="#FFDDDD">
<?php
if($win > 6 ){
   echo "ユーザの勝ち";
}
if($lose > 6 ){
   echo "ユーザの負け";
}
if(isset($_GET['win'])){  //勝った回数
   $win = $_GET['win'];
   } else {
   $win = 0;
   }
if(isset($_GET['lose'])){  //負けた回数
   $lose = $_GET['lose'];
   } else {
   $lose = 0;
   }
?>

<form action="result.php" method="get">
<input type="submit" value="縄張り争い">
<input type="hidden" value=<?php echo $win; ?>  name="win">
<input type="hidden" value=<?php echo $lose; ?> name="lose">
</form>
</body>
</html>
