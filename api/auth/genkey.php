<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$urlkey=htmlspecialchars($_GET['urlkey']);
$gkey=htmlspecialchars($_GET['gkey']);
$key="VEIDVOE9oN8O3C4TnU2RIN1O0rF82mU6RuJwHFQ6GH5mF4NQ3pZ8Z6R7A8dL0";
$basekey="VEIDVOE9oN8O3C4TnU2RIN1O0rF82mUDSFJsdJOFKJKJSDgjkojsdJJKOGJJKOSJGKJOjsDJKO";

?>

<?php

include '../db/db_conn.php';

if ($urlkey===$key) {

    $sql="SELECT gkey FROM gkeys";
    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)==0) {
        $sql="INSERT INTO gkeys (gkey) VALUES ('$gkey')";
        $result=mysqli_query($conn, $sql);

        if ($result==TRUE) {
            
            echo json_encode("ok", JSON_PRETTY_PRINT);

        } else {

            echo json_encode("error", JSON_PRETTY_PRINT);

        }

    } else {
        $row=mysqli_fetch_assoc($result);
        
        if ($row['gkey']!=$gkey) {
            $sql="UPDATE gkeys SET gkey='$gkey'";
            $result=mysqli_query($conn, $sql);

            if ($result==TRUE) {

                echo json_encode("ok", JSON_PRETTY_PRINT);

            } else {

                echo json_encode("error", JSON_PRETTY_PRINT);

            }

        } else {
            
            echo json_encode("ok", JSON_PRETTY_PRINT);

        }

    }

} else {

    if ($urlkey==$basekey) {

        echo json_encode("do_not_have_acces", JSON_PRETTY_PRINT);

    } else {

        echo json_encode("bad_key", JSON_PRETTY_PRINT);

    }

}

?>