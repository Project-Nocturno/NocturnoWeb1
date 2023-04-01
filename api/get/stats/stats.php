<?php

date_default_timezone_set('UTC');
$usr=htmlspecialchars($_GET['user']);
$action=htmlspecialchars($_GET['action']);
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

?>

<?php

include 'stats_func.php';
include '../../global_func.php';
include '../../db/db_conn.php';

?>

<?php 

if ($action=="kills") {
    kills($usr);

} else if ($action=="grade") {
    grade($usr);

} else if ($action=="top1") {
    top1($usr);

} else if ($action=="top10") {
    top10($usr);

} else if ($action=="top25") {
    top25($usr);

} else if ($action=="status") {
    status($usr);

} else if ($action=="date") {
    acc_date($usr);

} else if ($action=="level") {
    acc_level($usr);

} else if ($action=="exp") {
    acc_exp($usr);

} else if ($action=="items") {
    acc_items($usr);

} else if ($action=="mtx") {
    acc_mtx($usr);

} else {

    echo json_encode("error", JSON_PRETTY_PRINT);

}

?>