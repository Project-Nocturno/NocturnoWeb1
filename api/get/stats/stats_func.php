<?php

function kills($usr) {

    global $conn;

    $sql="SELECT kills FROM stat WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {
        $row=mysqli_fetch_array($result);
        $kills=$row['kills'];

        echo json_encode($kills, JSON_PRETTY_PRINT);

    } else {

        echo json_encode('error', JSON_PRETTY_PRINT);

    }

}

function grade($usr) {

    global $conn;

    $sql="SELECT grade FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {
        $row=mysqli_fetch_array($result);
        $grade=$row['grade'];

        echo json_encode($grade, JSON_PRETTY_PRINT);

    } else {

        echo json_encode('error', JSON_PRETTY_PRINT);

    }

}

function top1($usr) {

    global $conn;

    $sql="SELECT top1 FROM stat WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {
        $row=mysqli_fetch_array($result);
        $top1=$row['top1'];
        
        echo json_encode($top1, JSON_PRETTY_PRINT);

    } else {

        echo json_encode('error', JSON_PRETTY_PRINT);

    }

}

function top10($usr) {

    global $conn;

    $sql="SELECT top10 FROM stat WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {
        $row=mysqli_fetch_array($result);
        $top10=$row['top10'];
        
        echo json_encode($top10, JSON_PRETTY_PRINT);

    } else {

        echo json_encode('error', JSON_PRETTY_PRINT);

    }

}

function top25($usr) {

    global $conn;

    $sql="SELECT top25 FROM stat WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {
        $row=mysqli_fetch_array($result);
        $top25=$row['top25'];
        
        echo json_encode($top25, JSON_PRETTY_PRINT);

    } else {

        echo json_encode('error', JSON_PRETTY_PRINT);

    }

}

function status($usr) {

    global $conn;

    $sql="SELECT status FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {
        $row=mysqli_fetch_array($result);
        $stat=$row['status'];

        echo json_encode($stat, JSON_PRETTY_PRINT);

    } else {

        echo json_encode('error', JSON_PRETTY_PRINT);

    }

}

function acc_date($usr) {

    global $conn;

    $sql="SELECT date FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {
        $row=mysqli_fetch_array($result);
        $date=$row['date'];

        echo json_encode($date, JSON_PRETTY_PRINT);

    } else {

        echo json_encode('error', JSON_PRETTY_PRINT);

    }

}

function acc_level($usr) {

    global $conn;

    $sql="SELECT level FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {
        $row=mysqli_fetch_array($result);
        $level=$row['level'];

        echo json_encode($level, JSON_PRETTY_PRINT);

    } else {

        echo json_encode('error', JSON_PRETTY_PRINT);

    }

}

function acc_exp($usr) {

    global $conn;

    $sql="SELECT exp FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {
        $row=mysqli_fetch_array($result);
        $exp=$row['exp'];

        echo json_encode($exp, JSON_PRETTY_PRINT);

    } else {

        echo json_encode('error', JSON_PRETTY_PRINT);

    }

}

function acc_mtx($usr) {

    global $conn;

    $sql="SELECT mtx FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {
        $row=mysqli_fetch_array($result);
        $mtx=$row['mtx'];

        echo json_encode($mtx, JSON_PRETTY_PRINT);

    } else {

        echo json_encode('error', JSON_PRETTY_PRINT);

    }

}

function acc_items($usr) {

    global $conn;

    $sql="SELECT item FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {
        $row=mysqli_fetch_array($result);
        $it=explode(", ", $row['item']);

        echo json_encode($it, JSON_PRETTY_PRINT);

    } else {

        echo json_encode('error', JSON_PRETTY_PRINT);

    }

}

?>