<?php
date_default_timezone_set('UTC');
$urlkey=htmlspecialchars($_GET['urlkey']);
$pass=htmlspecialchars($_GET['passwd']);
$usr=htmlspecialchars($_GET['usrnm']);
$action=htmlspecialchars($_GET['action']);
$pass=hash('sha256', $pass);
$pass=hash('sha512', $pass);
$key="yoursupersecureurlkey";
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
$ip=$_SERVER['REMOTE_ADDR'];
?>

<?php

include 'lobby_func.php';
include '../../global_func.php';
include '../../db/db_conn.php';

?>

<?php 

if ($urlkey===$key) {

    if ($action==="shop") {
        get_shop();

    } else if ($action==="discoverfrontend") {
        discoverfrontend();

    } else if ($action==="keychain") {
        keychain();

    } else if ($action==="contentpages") {
        contentpages();

    } else if ($action==="catalog") {
        catalog();

    } else if ($action==="create_account") {
        $uid=UniqueMachineID();
        create_acc($pass, $usr, $ip, $uid);

    } else {

        echo json_encode("error", JSON_PRETTY_PRINT);

    }

} else {
    
    echo json_encode("bad_key", JSON_PRETTY_PRINT);
}

?>