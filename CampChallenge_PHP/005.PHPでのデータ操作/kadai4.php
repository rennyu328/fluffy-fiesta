<?php
// ４.３と同じ機能をセッションで作成する。
session_start();
$access_time = date('Y年m月d日');
$_SESSION['lastDate'] = $access_time;
//lastDateという名前で$access_timeを保存
echo'前回のアクセス日は、'.$_SESSION['lastDate'].'です！';
//$SESSIONでデータの出し入れができる。
//$SESSION[名前]で取得
?>
