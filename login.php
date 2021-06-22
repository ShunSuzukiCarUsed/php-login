<?php

const CORRECT_ID = 'login';
const CORRECT_PS = 'ps';
const ONE_MONTH = 2592000;

session_start();
//パスワード確認後sessionにメールアドレスを渡す
if (($_POST['id'] == CORRECT_ID) && ($_POST['password'] == CORRECT_PS)) {
    session_regenerate_id(true); //session_idを新しく生成し、置き換える
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['login'] = true;

    // ハッシュ化
    $hash_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // チェックしてたらログイン情報をクッキーへセット
    if (!empty($_POST['remember'])) {
        setcookie($_POST['id'], $hash_pass, time() + ONE_MONTH);
    }
    else {
        // クッキークリア
        setcookie($_POST['id'], $hash_pass, time() - 1);
    }

} else {
    echo 'メールアドレス又はパスワードが間違っています。';
    echo "<a href='index.php'>TOPへ戻る</a>";

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
