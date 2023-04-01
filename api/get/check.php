<?php

date_default_timezone_set('UTC');

$usr=htmlspecialchars($_GET['user']);
$pass=htmlspecialchars($_GET['pass']);

$pass=hash('sha256', $pass);
$pass=hash('sha512', $pass);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

?>

<?php

include '../db/db_conn.php';

?>

<?php

$sql="SELECT token FROM users WHERE username='$usr' AND password='$pass'";
$result=mysqli_query($conn, $sql);

if (mysqli_num_rows($result)!=0) {
    mysqli_fetch_assoc($result);

    echo json_encode("ok", JSON_PRETTY_PRINT);

} else {

    echo json_encode("error", JSON_PRETTY_PRINT);

}

?>