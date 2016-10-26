<?php
// ５．自分の氏名について、バイト数と文字数を取得して、表示してください。
//strlen 文字列長を取得する関数
//部分文字列の取得
//substr(元の文字列, 開始位置, 取得文字数);
//マルチバイト文字数の取得　mb
echo strlen('小暮里佳子').'バイト'.'<br>';
echo mb_strlen('小暮里佳子').'文字'.'<br>';

//６．自分のメールアドレスの「@」以降の文字を取得して、表示してください。
echo strstr('rikako_k@gmail.com','@');

// ７．以下の文章の「I」⇒「い」に、「U」⇒「う」に入れ替える処理を作成し、
// 　　結果を表示してください。
// 　　「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」

$str = 'きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます';
$str = str_replace('I','い',$str);
$str = str_replace('U','う',$str);
echo $str.'<br>';

// ８．ファイルに自己紹介を書き出し、保存してください。
// fopen 引き数に指定したファイルを、指定したモード（上書き：w）で開く
$fp = fopen('sample.txt','w');
fwrite($fp,'大学4年生です！');
fclose($fp);

// ９．ファイルから自己紹介を読み出し、表示してください。
$fp = fopen('sample.txt','r');
$file_txt = fgets($fp);//１行読み取り
echo $file_txt;
 ?>
