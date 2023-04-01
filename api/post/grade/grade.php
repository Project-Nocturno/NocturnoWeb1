<?php

date_default_timezone_set('UTC');
$urlkey=htmlspecialchars($_GET['urlkey']);
$usr=htmlspecialchars($_GET['usrnm']);
$grd=htmlspecialchars($_GET['grade']);
$action=htmlspecialchars($_GET['action']);
$basekey="yourtopcoolsupersecureurlkey";
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
$ip=$_SERVER['REMOTE_ADDR'];

?>

<?php

include 'grade_func.php';
include '../../global_func.php';
include '../../db/db_conn.php';

?>

<?php 

if ($urlkey===$key) {
    $sql="SELECT username FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)!=0) {
        $row=mysqli_fetch_assoc($result);

        if ($row['username']===$usr) {

            if ($action==="grade_user") {
                grade($usr, $grd);

            } else if ($action==="ungrade_user") {
                ungrade($usr);

            } else {

                echo json_encode("error", JSON_PRETTY_PRINT);

            }

        } else {
            
            echo json_encode("nope", JSON_PRETTY_PRINT);
        }

    } else {

        echo json_encode("bad_user", JSON_PRETTY_PRINT);

    }

} else {
    
    echo json_encode("bad_key", JSON_PRETTY_PRINT);
}

?>