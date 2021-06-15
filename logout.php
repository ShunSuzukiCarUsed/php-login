<?php
// セッション削除
session_start();
@session_destroy();
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
