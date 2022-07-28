<?php
require_once("inc/db.php");

$login_id = isset($_POST['login_id']) ? $_POST['login_id'] : null;
$login_pw = isset($_POST['login_pw']) ? $_POST['login_pw'] : null;
$login_name = isset($_POST['login_name']) ? $_POST['login_name'] : null;

//parameter check
if ($login_id == null || $login_pw == null || $login_name == null){
    header("Location: /regist.php");
    exit();
}

//check if you are a member
$member_count = db_select("select count(member_id) cnt from member where login_id = ?", array($login_id));
if ($member_count && $member_count[0]['cnt'] == 1){
    header("Location: /regist.php");
   exit();
}

//password encryption
$bcrypt_pw = password_hash($login_pw, PASSWORD_BCRYPT);

//data storage
db_insert("insert into member (login_id, login_name,  login_pw) values (:login_id, :login_name, :login_pw )",
    array(
        'login_id' => $login_id,
        'login_name' => $login_name,
        'login_pw' => $bcrypt_pw
    )
);

//go to login page
header("Location: /login.php");

