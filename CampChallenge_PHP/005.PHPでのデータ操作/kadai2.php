<?php
//以下の機能を実装してください。
//１で作成したHTMLの入力データを取得し、画面に表示する

     if(isset($_POST['txtName'])==false){
        echo '名前が入力されていません。'.'<br>';}
     else{
           $txtName = $_POST['txtName'];
           echo '名前'.$txtName.'<br>';
     }

     if(isset($_POST['txtGender'])==false){
        echo '性別が選択されていません。'.'<br>';}
     else{
        $txtGender = $_POST['txtGender'];
        echo '性別:'.$txtGender.'<br>';
        //指定のラジオボタンが押されたときvalueに入るものを指定しておく
        // print_r($txtGender);
        // foreach($txtGender as $value){
        //   echo $value.'<br>';
        }
     if(isset($_POST['txtHobby'])==false){
        echo '趣味が入力されていません。';
     }
     else{
      $txtHobby = $_POST['txtHobby'];
      echo '趣味:'.$txtHobby.'<br>';
    }
      //HTML
      //cols横幅 rows縦幅　しかしブラウザによって面積が変わって表示されるらしい
      //action に指定された場所に送信される　sample.php
      //ボタンと送信ボタンは別　送信ボタンの語句もvalue=で変えられる
?>
