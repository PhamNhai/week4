<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title></title>
<link rel='stylesheet' href='custom.css'/>
</head>

<body>
<form action="confirm.php" method="post"> 
  <div>
    <label for="name">名前:</label>
    <input type="text" id="name" name="user_name" />
  </div>
  <div>
    <label for="phone">電話番号:</label>
    <input type="phone" id="phone" name="user_phone" />
  </div>
  <div>
    <label for="msg">問い合わせ内容:</label>
    <textarea id="msg" name="user_message"></textarea>
  </div>
  <div>
    <input class="button1" name = "btn_confirm" type="submit" value="お問い合わせ確認画面へ">
  </div>
</form>
</body>
</html>
