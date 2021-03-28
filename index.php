<?php

function h($s){
    return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();
//ログイン済みの場合
if (isset($_SESSION['EMAIL'])) {
    echo 'ようこそ' .  h($_SESSION['id']) . "さん<br>";
    echo "<a href='/logout.php'>ログアウトはこちら。</a>";
    exit;
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
    <label for="email">email</label>
    <input type="email" name="email">
    <label for="password">password</label>
    <input type="password" name="password">
    <button type="submit">Sign In!</button>
</form>
</body>
</html>