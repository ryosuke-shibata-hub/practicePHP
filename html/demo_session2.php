<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

  <?php
//↓セッション変数を変更するときは上書きするだけ
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);

//PHPセッションを破棄する
// すべてのセッション変数を削除
session_unset();
//セッションを破棄
session_destroy();
?>

</body>
</html>
