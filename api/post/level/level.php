<?php
date_default_timezone_set('UTC');
$urlkey=htmlspecialchars($_GET['urlkey']);
$token=htmlspecialchars($_GET['token']);
$pass=htmlspecialchars($_GET['passwd']);
$usrnm=htmlspecialchars($_GET['usrnm']);
$usr=htmlspecialchars($_GET['target_user']);
$action=htmlspecialchars($_GET['action']);
$level=htmlspecialchars($_GET['level']);
$token=hash('sha256', $token);
$token=hash('sha512', $token);
$pass=hash('sha256', $pass);
$pass=hash('sha512', $pass);
$key="yoursupersecureurlkey";
$basekey="yourtopcoolsupersecureurlkey";
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
$ip=$_SERVER['REMOTE_ADDR'];
?>

<?php
include 'level_func.php';
include '../../global_func.php';
include '../../db/db_conn.php';
?>

<?php 
if ($urlkey===$key) {
    $sql="SELECT token, grade FROM users WHERE username='$usrnm' AND password='$pass'";
    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)!=0) {
        $row=mysqli_fetch_assoc($result);

        if ($row['token']===$token) {
        
            if (in_array($row['grade'], array('nocturno', 'admin', 'dev'))) {

                if ($action==="give_level") {
                    give_lvl($level, $usr);

                } else if ($action==="del_level") {
                    del_lvl($level, $usr);
                    
                } else if ($action==="create_account") {

                    $uid=UniqueMachineID();
                    create_acc($pass, $usr, $ip, $uid);

                } else {

                    echo json_encode("error", JSON_PRETTY_PRINT);

                }

            } else {

                echo json_encode("this_account_is_not_admin", JSON_PRETTY_PRINT);

            }

        } else {
            
            echo json_encode("nope", JSON_PRETTY_PRINT);
        }

    } else {

        if ($action==="create_account") {
            $uid=UniqueMachineID();
            create_acc($pass, $usr, $ip, $uid);

        } else {

            echo json_encode("bad_logins", JSON_PRETTY_PRINT);

        }
    }

} else {

    if ($urlkey==$basekey) {

        if ($action=="add_level") {

            add_lvl($level, $usr);

        } else {

            echo json_encode("nope", JSON_PRETTY_PRINT);

        }

    } else {

        echo json_encode("bad_key", JSON_PRETTY_PRINT);

    }
}
?>