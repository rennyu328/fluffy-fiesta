//５.ファイルのアップロード機能を作成する。
formのenctypeをmultipart/form-dataにし、
input nameを決めてtypeはfileの入力フォーマットをつくる
<HTML>
    <head>
    </head>
    <body>
          <form
        action="kadai6.php" method="post"
        enctype="multipart/form-data">
        ファイル選択：<input type="file" name="userfile"/>
        <input name="submit" type="submit">
        </form>
    </body>
</HTML>
