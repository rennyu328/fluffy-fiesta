<?php
     session_start();
 if(isset($_SESSION)==true){
   $name = $_SESSION['lastName'];
   $gender = $_SESSION['lastGender'];
   $hobby = $_SESSION['lastHobby'];
 }
 else{
   $name = '';
   $gender = '';
   $hobby = '';
//空でよいので初期値をいれておく
 }
 echo "前回選択された性別:".$gender;

?>

<html>
  <head>
    <title>データ操作</title>
  </head>
  <body>
    <form action="kadai7.php" method="post">
      名前:<input type="text" name="txtName"
      value="<?php echo $name?>">
      女:<input type="radio" value="女" name="txtGender"
      <?php if($gender=="女"){echo"checked";}?>>
      男:<input type="radio" value="男" name="txtGender"
      <?php if($gender=="男"){echo"checked";} ?>>
      趣味:<textarea name ="txtHobby" cols="30" rows="5"><?php if(isset($hobby)==true){echo $hobby;}?></textarea>
      <input type="submit" value="登録する" name="btnSubmit">

    </form>
  </body>
</html>

<?php
     //ラジオボタンの初期値はchecked=checked,HTMLならcheckedでも可

     if(isset($_POST['txtName'])==false){
        echo '名前が入力されていません。'.'<br>';}
     else{
           $txtName = $_POST['txtName'];
           echo '名前:'.$txtName.'<br>';
     }

     if(isset($_POST['txtGender'])==false){
        echo '性別が選択されていません。'.'<br>';}
     else{
        $checkedGender = $_POST['txtGender'];
        echo '性別:'.$checkedGender.'<br>';
        //指定のラジオボタンが押されたときvalueに入るものを指定しておく
     }
     if(isset($_POST['txtHobby'])==false){
        echo '趣味が入力されていません。';
     }
     else{
      $txtHobby = $_POST['txtHobby'];
      echo '趣味:'.$txtHobby.'<br>';
     }

 //送信された情報をクッキーに保存する

     $_SESSION['lastName']=$txtName;
     $_SESSION['lastGender']=$checkedGender;
     $_SESSION['lastHobby']=$txtHobby;

?>
