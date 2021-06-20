<?php

const CORRECT_ID = 'login';
const CORRECT_PS = 'ps';

function h($s){
    return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();
//ログイン済みの場合
if ($_SESSION['login']) {
    $_SESSION['login'] = false;
    echo 'ようこそ' .  h($_SESSION['id']) . "さん<br>";
    echo "<a href='logout.php'>ログアウトはこちら。</a>";
    exit;
}

// セッション・クッキーに情報がある場合
if ((!empty($_SESSION['password']) && !empty($_COOKIE[CORRECT_ID]))) {
    if (password_verify($_SESSION['password'], $_COOKIE[CORRECT_ID])) {
        $_SESSION['login'] = false;
        echo 'ようこそ' .  h($_SESSION['id']) . "さん<br>";
        echo "<a href='logout.php'>ログアウトはこちら。</a>";
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>
<h1>ようこそ、ログインしてください。</h1>
<form  action="login.php" method="post">
    <label for="id">id</label>
    <input type="id" name="id"><br>
    <label for="password">password</label>
    <input type="password" name="password"><br><br>
    <label for="remember">ログイン情報を保存する</label>
    <input type="checkbox" name="remember"><br><br>
    <button type="submit">Log In!</button>
</form>
</body>
</html>