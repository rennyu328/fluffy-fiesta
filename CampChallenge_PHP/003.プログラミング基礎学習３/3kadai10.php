<?php
// 課題10:課題9の処理のうち2人目まででforeachのループを抜けるようにする

$profile1 = array(
  'id' => 1,
  'name' => '小暮里佳子',
  'birth'=> '1994年3月28日',
  'adress'=> '東京都',
);
$profile2 = array(
  'id' => 2,
  'name' => 'Tom',
  'birth'=> '2000年3月28日',
  'adress'=> '埼玉県',
);
$profile3 = array(
  'id' => 3,
  'name' => 'Mary',
  'birth'=> '1899年3月28日',
  'adress'=> '千葉県',
);
$profiles = array($profile1,$profile2,$profile3);
  foreach($profiles as $profile){
    if($profile == $profile3){
      break;
    }
  //print_r($profile);
  //print_rを使えば配列の中身を表示させられる
  //echoでは配列は見られない
  foreach($profile as $key => $item){
    if($key=='id'||$key=='adress'){
      continue;
    }
    echo " $key は $item です<br>";
  }
}
?>
