<?php

const CORRECT_ID = 'login';
const CORRECT_PS = 'ps';

session_start();
//パスワード確認後sessionにメールアドレスを渡す
if (($_POST['id'] == CORRECT_ID) && ($_POST['password'] == CORRECT_PS)) {
    session_regenerate_id(true); //session_idを新しく生成し、置き換える
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['password'] = $_POST['CORRECT_PS'];
    echo 'ログインしました';
} else {
    echo 'メールアドレス又はパスワードが間違っています。';
    return false;
}