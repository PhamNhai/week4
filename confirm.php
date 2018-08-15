<?php
    $name = $_POST['user_name'];
// if(isset($_POST['user_name'])){ $name = $_POST['user_name']; }
    $phone = $_POST['user_phone'];
    $message = $_POST['user_message'];
?>

<!DOCTYPE html>
<html>
<head>
<title>確認画面</title>
<meta charset="utf-8">
<link rel='stylesheet' href='custom.css'/>
</head>
<body>
<form method="post" action="done.php">
  <div class="element_wrap">
    <label class="">氏名:  <?php echo $name; ?></label>
  </div>
  <div class="element_wrap">
    <label>電話番号:  <?php echo $phone; ?></label>
  </div>
  <div class="element_wrap">
    <label>問い合わせ内容:  <?php echo $message; ?></label>
  </div>
  <input type="submit" class = "button1" name="btn_submit" value="問い合わせ完了">
  <input type="submit" class = "button2" name="btn_back" value="修正する">
  <input type="hidden" name="user_name" value="<?php echo $name; ?>">
  <input type="hidden" name="user_phone" value="<?php echo $phone; ?>">
  <input type="hidden" name="user_message" value="<?php echo $message; ?>">
</form>
</body>
</html>