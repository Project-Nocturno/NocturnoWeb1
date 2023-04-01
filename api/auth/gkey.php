<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$urlkey=htmlspecialchars($_GET['urlkey']);
$basekey="VEIDVOE9oN8O3C4TnU2RIN1O0rF82mUDSFJsdJOFKJKJSDgjkojsdJJKOGJJKOSJGKJOjsDJKO";

?>

<?php

include '../db/db_conn.php';

if ($urlkey===$basekey) {

    $sql="SELECT gkey FROM gkeys";
    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)!=0) {
        $row=mysqli_fetch_assoc($result);

        echo json_encode($row['gkey'], JSON_PRETTY_PRINT);

    } else {

        echo json_encode("error", JSON_PRETTY_PRINT);

    }

} else {

    echo json_encode("bad_key", JSON_PRETTY_PRINT);

}

?>