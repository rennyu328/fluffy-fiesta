<?php
$time = date('n月j日H時i分,');//日付時刻情報を書式化
$fp = fopen('sample.txt','a');//処理の経過をsample.txtに保存
      fwrite($fp,$time.'状況開始'.'<br>');
      fclose($fp);

 //配列の中の数字をソートする処理
      $numbers = array(18,7,20,5);
      asort($numbers);
      print_r($numbers);
      echo '<br>';

$fp = fopen('sample.txt','a');
      fwrite($fp,$time.'状況終了'.'<br>');
      fclose($fp);

 //ファイルから文字を取得
 $contents = @file_get_contents("sample.txt");
 echo $contents;
?>
