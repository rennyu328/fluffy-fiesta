<?php
//１
//値が1なら「one」、値が2なら「two」、それ以外は「想定外」と表示する処理
 $num = 1;
 $message = ' ';
 switch($num){
    case 1:
      $message = 'one';
      break;
    case 2:
      $message = 'two';
      break;
    default:
      $message = '想定外';
      //break;
      //最後の処理なので条件分の処理から離脱しなくてもoK?
   }echo $message."<br>";//."<br>";で改行
//２
//値が'A'なら「英語」、値が'あ'なら「日本語」、それ以外は何も表示しない処理
 $num = 'A';
 switch($num){
    case 'A':
      $message = '英語';
      break;
    case 'あ':
      $message = '日本語';
   }echo $message."<br>";
  //それ以外は何も表示しないのでdefault(else)は書かない

//３
//for文を利用して、8を20回掛ける処理を実現。
  $num = 1;
  for($i=0;$i<20;$i++){
     $num = $num*8;
    //右辺を左辺に代入するので、左辺がないと意味なし
  }echo $num."<br>";
//４
//for文を利用して、'A'を30個連結する処理。
  $message = 'A';
  for($i=0;$i<30;$i++){
    //0からスタートし（初期値）、30より小さい数まで、1ずつ足す。
    $message = $message.'A';
  }echo $message."<br>";
  //クォーテーションの違い
  //変数に代入するときに数字を数値として代入するか、文字として代入するか
//５．for文を利用して、0から100を全部足す処理。
  $num = 0;
  for($i=1;$i<=100;$i++){
    //1からスタートし、100以下まで1ずつ足す。
    $num=$num+$i;
  }echo $num."<br>";
//６．while文を利用して、以下の処理を実現してください。
//1000を2で割り続け、100より小さくなったらループを抜ける処理。
  $num = 1000;
  while($num >= 100){
    $num = $num / 2;
  }echo $num."<br>";
//７．以下の順番で、要素が格納された配列を作成してください。
//→10, 100, 'soeda', 'hayashi', -20, 118, 'END'
    $arr = array();
    $arr = array(10,100,'soeda','hayashi',-20,118,'END');
//左から順番に0〜数字が割り当てられる。
//８．７で作成した配列の'soeda'を33に変更してください。
    $arr[2] = 30;
//９．以下の順で、連想配列を作成してください。
//1に'AAA', 'hello'に'world', 'soeda'に33, 20に20
    $arr = array();
    $arr = array(
      1 => 'AAA',
 'hello'=> 'world',
 'soeda'=> 33,
        );
    echo $arr['soeda'];
?>
