<?php
require_once("inc/db.php");

$login_id = isset($_POST['login_id']) ? $_POST['login_id'] : null;
$login_pw = isset($_POST['login_pw']) ? $_POST['login_pw'] : null;

//check parameter
if ($login_id == null || $login_pw == null){
    header("Location: /login.php");
    exit();
}

//member data
$member_data = db_select("select * from member where login_id = ?", array($login_id));

//if you don't have member data
if ($member_data == null || count($member_data) == 0){
    header("Location: /login.php");
    exit();
}

//password match
$is_match_password = password_verify($login_pw, $member_data[0]['login_pw']);

//password mismatch
if ($is_match_password == false){
    header("Location: /login.php");
    exit();
}

session_start();
$_SESSION['member_id'] = $member_data[0]['member_id'];

//go to list
header("Location: /list.php");
