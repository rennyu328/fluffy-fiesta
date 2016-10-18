<?php
    $param1 = $_GET['param1'];    // 商品種別
    $param2 = $_GET['param2'];    // 総額
    $param3 = $_GET['param3'];    // 個数
if($param1 == 1){
  echo '雑貨';
}
elseif($param1 == 2){
  echo '生鮮食品';
}
elseif($param1 == 3){
  echo 'その他';
}
echo "<p>".'総額'.$param2."<p>";//総額
echo '1個あたりの値段'.$param2 / $param3;//１個あたりの値段

if($param2 >= 3000){
echo "<p>".'ポイント'.$param2 * 0.04."<p>";
}//ポイント
