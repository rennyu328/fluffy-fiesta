<?php
// 課題8:課題1、課題2のユーザー定義箇所を含んだutil.phpを作成し、
// requireで呼び出して表示する
require "myutil.php";
my_profile();

// 課題9:3人分のプロフィールについてIDと住所以外を表示する処理を実行する。
// 2重のforeachとcontinueを必ず用いること
$profile1 = array(
  'id' => 1,
  'name' => '小暮里佳子',
  'birth'=> '1994年3月28日',
  'adress'=> '東京都',
);
$profile2 = array(
  'id' => 1,
  'name' => 'Tom',
  'birth'=> '2000年3月28日',
  'adress'=> '埼玉県',
);
$profile3 = array(
  'id' => 1,
  'name' => 'Mary',
  'birth'=> '1899年3月28日',
  'adress'=> '千葉県',
);
$profiles = array($profile1,$profile2,$profile3);
foreach($profiles as $profile){
  // print_r($profile);
  //print_rを使えば配列の中身を表示させられる
  //echoでは配列は見られない
  echo "<br>";

  foreach($profile as $key => $item){
    if($key=='id'||$key=='adress'){
      continue;
    }
    echo " $key は $item です<br>";
  }
}

//コメントアウト
/*  */
?>
