<?php
// ・パスワードはpassword
// ・入力項目は[名前][本文]の掲示板システムを作成
// ・セッションは120秒で途切れるように
    require_once '5_demo6.php';
    //require_onceはrequireとほぼ同じ
    //require_onceの場合は、すでに読み込まれているかをチェックし
    //すでに読み込まれている場合は読み込まない。
    //requireはスクリプト内で別ファイルを読み込む

    //この課題からログインすると掲示板に飛べるようにする
    $pass = PASSWORD;
    $chkpass=null;
    if(empty($_POST['password'])){
        $chkpass=null;
    }else{
        $chkpass=$_POST['password'];
    }


?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title><?php echo LOGIN ?></title>
</head>
<body>
    <h1>ログイン画面</h1>

    <?php
    if($chkpass!==$pass){
        if($chkpass!==null){
            echo 'パスワードが異なります。もう一度ログインパスワードを入力してください<br>';
        }else{
            echo 'ログインパスワードを入力してください<br>';
        }
        ?>
        <form action="<?php echo LOGIN ?>" method="POST">
            <input type="text" name="password">
            <input type="submit" name="btnSubmit" value="ログイン">
        </form>
    <?php
    }else{
        echo 'ログインに成功しました。三秒後にサービストップに移動します';
        echo '<meta http-equiv="refresh" content="3;URL='.INPUT.'">';

        session_start();
        $_SESSION['last_access']=mktime();
    }
    ?>
</body>
</html>
