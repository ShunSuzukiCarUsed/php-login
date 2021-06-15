<?php

const CORRECT_ID = 'login';
const CORRECT_PS = 'ps';
const ONE_MONTH = 2592000;

session_start();
//パスワード確認後sessionにメールアドレスを渡す
if (($_POST['id'] == CORRECT_ID) && ($_POST['password'] == CORRECT_PS)) {
    session_regenerate_id(true); //session_idを新しく生成し、置き換える
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['password'] = $_POST['CORRECT_PS'];

    // クッキーセット
    setcookie('login_id', $_POST['id'], time() + ONE_MONTH);

} else {
    echo 'メールアドレス又はパスワードが間違っています。';
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content=" 5; url=index.php">
    <title>Login</title>
</head>
<body>
<h1>Loginしました。</h1>
</body>
</html>
