<?php
// ６．５で作成したプログラムに、ファイルの中身を読み込んで表示する機能を追加してください。

var_dump($_FILES);//アップロードされたファイルはここに保存される

$file_name = 'upload.txt';
move_uploaded_file(
$_FILES['userfile']['tmp_name'],$file_name);
//サーバに保存 一時保存のファイル,保存ファイル名
//$file_name（uploadtxtとして表示される）
 ?>
