<?php
// ３．クッキーに現在時刻を記録し、次にアクセスした際に、
//前回記録した日時を表示してください。
//ユーザーの1回目の訪問
$access_time = date('Y年m月d日');
setcookie('LastLoginDate',$access_time);
//LastLoginDateという名前に$access_timeを保存

$lastDate = $_COOKIE['LastLoginDate'];
//LastLoginDateに保存されたクッキーを取得
echo'前回のアクセス日は、'.$lastDate.'です！';

?>
