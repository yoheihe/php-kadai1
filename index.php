<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題①-1</title>
</head>
<body>
  <?php echo '日本の首都は?'; ?>
  <form method="POST">
    <div class="text">
      <input type="text" name="question" class="textbox">
      <input type="submit" value="OK" class="btn-submit">
    </div>
  </form>

  <?php
  $question = $_POST['question'];
  if($question == '') {
    echo '';
  }
  else if($question == '東京') {
    echo '正解';
  }
  else {
    echo '不正解';
  }
  ?>
</body>
</html>