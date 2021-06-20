<?php

const CORRECT_ID = 'login';
const CORRECT_PS = 'ps';

// セッション削除
session_start();
$_SESSION['login'] = false;
@session_destroy();

// クッキー削除
setcookie(CORRECT_ID, '');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content=" 5; url=index.php">
    <title>Logout</title>
</head>
<body>
<h1>Logoutしました。</h1>
</body>
</html>
