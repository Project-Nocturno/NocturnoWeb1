<?php 

include '../mtx/mtx_func.php';

function buy_item($item, $usr) {

    global $conn;

    $sql="SELECT item FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);

    $it=explode(", ", $row['item']);

    foreach($it as $i) {
        if ($i==$item) {
            echo json_encode("already_exist", JSON_PRETTY_PRINT);
            exit(0);
        } else {}
    }

    $sql="SELECT mtx FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);
    $money=mysqli_fetch_assoc($result);

    $sql="SELECT item_price FROM item WHERE item_name='$item'";
    $result=mysqli_query($conn, $sql);
    $price=mysqli_fetch_assoc($result);

    if ($money['mtx'] > $price['item_price']) {
        $sql="SELECT item FROM users WHERE username='$usr'";
        $result=mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)>0) {
            $row=mysqli_fetch_assoc($result);
            if ($row['item']=="") {
                $items=$row['item'];
                $nitems=$items.$item;
                $sql="UPDATE users SET item='$nitems' WHERE username='$usr'";
                $result=mysqli_query($conn, $sql);

                if ($result==TRUE) {
                    get_mtx($price['item_price'], $usr);

                } else {
                    echo json_encode("error", JSON_PRETTY_PRINT);

                }   
            } else {

                $items=$row['item'];
                $nitems=$items.', '.$item;
                $sql="UPDATE users SET item='$nitems' WHERE username='$usr'";
                $result=mysqli_query($conn, $sql);

                if ($result==TRUE) {
                    get_mtx($price['item_price'], $usr);

                } else {
                    echo json_encode("error", JSON_PRETTY_PRINT);

                }

            }

        } else {
            $nitems=$item;
            $sql="UPDATE users SET item='$nitems' WHERE username='$usr'";
            $result=mysqli_query($conn, $sql);

            if ($result==TRUE) {
                get_mtx($price['item_price'], $usr);

            } else {
                echo json_encode("error", JSON_PRETTY_PRINT);

            }

        }

    } else {
        echo json_encode("not_money", JSON_PRETTY_PRINT);

    }
}

function give_item($item, $usr) {

    global $conn;

    $sql="SELECT item FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);

    $it=explode(", ", $row['item']);

    foreach($it as $i) {
        if ($i==$item) {
            echo json_encode("already_exist", JSON_PRETTY_PRINT);
            exit(0);
        } else {}
    }

    $sql="SELECT item FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0) {
        $row=mysqli_fetch_assoc($result);
        if ($row['item']=="") {
            $items=$row['item'];
            $nitems=$items.$item;
            $sql="UPDATE users SET item='$nitems' WHERE username='$usr'";
            $result=mysqli_query($conn, $sql);

            if ($result==TRUE) {
                
                echo json_encode("ok", JSON_PRETTY_PRINT);

            } else {
                echo json_encode("error", JSON_PRETTY_PRINT);

            }   
        } else {

            $items=$row['item'];
            $nitems=$items.', '.$item;
            $sql="UPDATE users SET item='$nitems' WHERE username='$usr'";
            $result=mysqli_query($conn, $sql);

            if ($result==TRUE) {
                
                echo json_encode("ok", JSON_PRETTY_PRINT);

            } else {
                echo json_encode("error", JSON_PRETTY_PRINT);

            }

        }

    } else {
        $nitems=$item;
        $sql="UPDATE users SET item='$nitems' WHERE username='$usr'";
        $result=mysqli_query($conn, $sql);

        if ($result==TRUE) {
                
            echo json_encode("ok", JSON_PRETTY_PRINT);

        } else {
            echo json_encode("error", JSON_PRETTY_PRINT);

        }

    }

}

function give_all($usr) {

    global $conn;

    $sql="SELECT * FROM item";
    $resultIt=mysqli_query($conn, $sql);
    
    $sql="UPDATE users SET item='' WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {
        $items=mysqli_fetch_all($resultIt, MYSQLI_ASSOC);
        foreach ($items as $item) {
            $item=$item['item_name'];

            $sql="SELECT item FROM users WHERE username='$usr'";
            $result=mysqli_query($conn, $sql);

            if (mysqli_num_rows($result)>0) {
                $row=mysqli_fetch_assoc($result);
                if ($row['item']=="") {
                    $items=$row['item'];
                    $nitems=$items.$item;
                    $sql="UPDATE users SET item='$nitems' WHERE username='$usr'";
                    $result=mysqli_query($conn, $sql);

                    if ($result==TRUE) {} else {
                        echo json_encode("error", JSON_PRETTY_PRINT);

                    }   
                } else {

                    $items=$row['item'];
                    $nitems=$items.', '.$item;
                    $sql="UPDATE users SET item='$nitems' WHERE username='$usr'";
                    $result=mysqli_query($conn, $sql);

                    if ($result==TRUE) {} else {
                        echo json_encode("error", JSON_PRETTY_PRINT);

                    }

                }

            } else {
                $nitems=$item;
                $sql="UPDATE users SET item='$nitems' WHERE username='$usr'";
                $result=mysqli_query($conn, $sql);

                if ($result==TRUE) {} else {
                    echo json_encode("error", JSON_PRETTY_PRINT);

                }
            }
        }
    }

    echo json_encode("ok", JSON_PRETTY_PRINT);

}

function favorite_item($item, $usr, $style) {

    global $conn;
    
    $sql="UPDATE favorites SET `$style`='$item' WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if ($result==TRUE) {

        echo json_encode("ok", JSON_PRETTY_PRINT);

    } else {

        echo json_encode("error", JSON_PRETTY_PRINT);
    
    }

}

function get_favorites($usr) {

    global $conn;
    
    $sql="SELECT * FROM favorites WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0) {
        $row=mysqli_fetch_assoc($result);
        $r=[
            'character'=>$row['character'],
            'backpack'=>$row['backpack'],
            'pickaxe'=>$row['pickaxe'],
            'glider'=>$row['glider'],
            'skydivecontrail'=>$row['skydivecontrail'],
            'musicpack'=>$row['musicpack'],
            'loadingscreen'=>$row['loadingscreen'],
            'dance'=>$row['dance'],
            'itemwraps'=>$row['itemwraps']
        ];

        echo json_encode($r, JSON_PRETTY_PRINT);

    } else {

        echo json_encode("error", JSON_PRETTY_PRINT);
    
    }

}

?>