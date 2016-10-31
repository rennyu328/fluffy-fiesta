
１．以下の入力フィールドを持ったHTMLを、PHPで処理する想定で記述してください。
・名前（テキストボックス）、性別（ラジオボタン）、趣味（複数行テキストボックス）
<html>
  <head>
    <title>データ操作</title>
  </head>
  <body>
    <form action="kadai2.php" method="post">
      名前:<input type="text" name="txtName">
      女:<input type="radio" value="女" name="txtGender">
      男:<input type="radio" value="男" name="txtGender">
      趣味:<textarea name ="txtHobby" cols="30" rows="5"></textarea>
      <input type="submit" value="登録する" name="btnSubmit">
    </form>
  </body>
</html>
