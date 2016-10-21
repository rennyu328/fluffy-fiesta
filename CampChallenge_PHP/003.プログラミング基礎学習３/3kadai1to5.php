<?php
//ユーザー定義関数（サブルーチン）
// -複数行に渡る処理をひとまとめにして、一言呼び出すだけで何度も
// 再利用できるようにしたもの。
// 型：function 関数名(){
//   処理1
//   処理2・・・
// }
// 使い方：関数名();

// 課題1:自分のプロフィール(名前、生年月日、自己紹介)を3行に分けて表示する
// ユーザー定義関数を作り、関数を10回呼び出して下さい
function my_profile(){
  echo '私の名前は小暮里佳子です<br>';
  echo '1994年3月28日<br>';
  echo '趣味はゲームです<br>';
}
for($i=0;$i<10;$i++){
   my_profile();
}
// 課題2:引数として数値を受け取り、その値が奇数か偶数か判別＆表示する処理を関数として制作し、
// 適当な数値に対して奇数・偶数の判別を行ってください
// 引数は処理の中の一部に変数を使いたい場合に使う。
// 表示させるときに()に変数に代入したい値を入れる
function abc($num){
if($num % 2 ==0){
  echo '偶数';
}if($num % 2 !== 0){
  echo '奇数<br>';
   }
}
  abc(3);

// 課題3:引き数が3つの関数を定義する。
// 1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、
// 最後はデフォルト値がfalse(bool値)の$typeを引き数として定義する。
// 1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、
// $typeがfalseの時はその値を表示、trueのときはさらに2乗して表示する。
// 例）function sample($□□□, $△△△, $type)
// 引数が３つの関数書き出し部分(デフォルト値なし)

function sample($a,$b = 5,$type = false){
     $num = $a * $b;

  if(!$type){
    echo $num,'<br>';
  }
  if($type){
    echo $num * $num,'<br>';
  }
}
  sample(10,22,true);

// 課題4:課題1で定義した関数に追記する形として、
// 戻り値 true(bool値) を返却するように修正し、
// 関数の呼び出し側でtrueを受け取れたら「この処理は正しく実行できました」、
// そうでないなら「正しく実行できませんでした」と表示する。

function my_profiles(){
  echo '私の名前は小暮里佳子です<br>';
  echo '1994年3月28日<br>';
  echo '趣味はゲームです<br>';
  return true; //この関数が実行されればtrueが返ってくるはず
}
for($i=0;$i<10;$i++){
  $a = my_profiles();//返ってきた結果を$aに入れる
//$aにtrueが入っていれば成功なので以下
if($a==true){
  echo'この処理は正しく実行できました<br>';
}
if($a!=true){
  echo '正しく実行できませんでした<br>';
}
}
//先生のメモ
// function 関数・マシーン名（コーヒー豆の変数。複数可）{
//   関数のなかに盛り込む処理、コーヒー豆の変数をつかう
// return　出したいもの
// }
// 関数名（変数にいれたいもの）;//これで関数・マシーン実行
// $a = 出てきたもの　にすれば代入もできる

// 課題5:戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、
// 受け取った後は全情報を表示する

function samples(){
  $arr = array(
    'id' => 1,
    'name' => '小暮里佳子',
    'birth'=> '1994年3月28日',
    'adress'=> '東京都銀座',
  );
  return $arr;
}
 $e = samples();
 foreach($e as $key => $value){
 echo $key,':',$value,'<br>';
 }

?>
