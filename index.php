<?php

function h($s){
    return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();
//ログイン済みの場合
if (isset($_SESSION['id'])) {
    echo 'ようこそ' .  h($_SESSION['id']) . "さん<br>";
    echo "<a href='logout.php'>ログアウトはこちら。</a>";
    exit;
}

// クッキーに情報がある場合
if (!empty($_COOKIE['login_id'])) {
    if ($_SESSION['id'] = $_COOKIE['login_id']) {
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
    <input type="id" name="id">
    <label for="password">password</label>
    <input type="password" name="password">
    <button type="submit">Log In!</button>
</form>
</body>
</html>