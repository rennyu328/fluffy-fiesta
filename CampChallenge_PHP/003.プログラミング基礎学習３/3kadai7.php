<?php
// 課題7:引き数、戻り値はなしの関数を用意。初期値3のglobal値を2倍していく、
// ローカルな値はstaticとしてその関数が何回実行されたのかを保持していくような
//関数である。
// この関数を20回呼び出す
// function
$global_number = 3;//初期値３のグローバル値

function sample (){ //引数、戻り値なしの関数を設定

  global $global_number;//global宣言
  $global_number = $global_number * 2;
  echo '2倍した数,'.$global_number.'<br>';

  static $local_number = 1;
  //初期値1のローカル値,static宣言をすることで2周目初期化しない
  echo $local_number.'回実行されました'.'<br>';
  $local_number++;//ローカル値に1足す
}
for($i=0;$i<20;$i++){
  sample();
}

?>
