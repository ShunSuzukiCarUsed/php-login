<?php
session_start();
$output = '';

//セッション変数のクリア
$_SESSION = array();

//セッションクッキーも削除
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
//セッションクリア
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
