<?php

function grade($usr, $grd) {

    global $conn;

    $sql="SELECT status FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);
    $stat=mysqli_fetch_assoc($result);

    if ($stat['status']=="ban") {
        
        echo json_encode("user_ban", JSON_PRETTY_PRINT);

    } else if ($stat['status']=="normal") {

        if (in_array($grd, array('nocturno', 'admin', 'dev', 'modo', 'helper', 'staff', 'tester', 'member'))) {
            $sql="UPDATE users SET grade='$grd' WHERE username='$usr'";
            $result=mysqli_query($conn, $sql);

            if ($result==TRUE) {
                
                echo json_encode("grade", JSON_PRETTY_PRINT);

            } else {
                
                echo json_encode("grade_error", JSON_PRETTY_PRINT);
            }

        } else {

            echo json_encode("grade_error", JSON_PRETTY_PRINT);

        }

    }

}

function ungrade($usr) {
    
    global $conn;

    $sql="SELECT status FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);
    $stat=mysqli_fetch_assoc($result);

    if ($stat['status']=="ban") {
        
        echo json_encode("user_ban", JSON_PRETTY_PRINT);

    } else if ($stat['status']=="normal") {

        $sql="UPDATE users SET grade='none' WHERE username='$usr'";
        $result=mysqli_query($conn, $sql);

        if ($result==TRUE) {
            
            echo json_encode("ungrade", JSON_PRETTY_PRINT);

        } else {
            
            echo json_encode("ungrade_error", JSON_PRETTY_PRINT);
        }

    }
}

?>