<html>
  <head>
    <title>掲示板</title>
  </head>
  <body>
    <form action="kadai9_board.php" method="post">
      名前:<input type="text" name="name">
      本文:<textarea name ="content" cols="30" rows="5"></textarea>
      <input type="submit" value="登録する" name="btnSubmit">
    </form>
  </body>
</html>
<?php

if(!isset($_POST['name']) || $_POST['name']==NULL){
echo'名前が入力されていません。'.'<br>';}
else{
$name = $_POST['name'];
echo '名前 '.$name.'<br>';
}

if(!isset($_POST['content']) || $_POST['content']==NULL){
echo'本文が入力されていません。'.'<br>';}
else{
$content = $_POST['content'];
echo '本文 '.$content.'<br>';
}

//ログファイルに保存
$fp = fopen('kadai9_log.txt','a');//a追記
      fwrite($fp,$name.$content.'<br>');
      fclose($fp);


 //ファイルから文字を取得
 $log = @file_get_contents("kadai9_log.txt");
 echo $log;

 ?>
