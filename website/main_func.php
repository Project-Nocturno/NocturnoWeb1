<?php

function sendIncription($usr, $uid, $ip) {
    
    $url="inscriptionwebhook";
    $headers=['Content-Type: application/json; charset=utf-8'];
    $embd=[
        [
            "title" => "**$usr Vient de s'incrire.**",
            "type" => "rich",
            "footer" => [
                "text" => "Nocturno™",
            ],
            "fields" => [
                [
                    "name" => "HWID:",
                    "value" => "```$uid```",
                    "inline" => false
                ],
                [
                    "name" => "IP:",
                    "value" => "```$ip```",
                    "inline" => false
                ]
            ]
        ]
    ];
    $post=json_encode(['username' => 'Project Nocturno', "embeds"=>$embd], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
    
    $ch=curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    $response=curl_exec($ch);

}

function set_grade($grade) {
    if (in_array($grade, array('nocturno', 'admin', 'dev', 'modo', 'helper', 'staff'))) {
        $allgrades=[
            "nocturno" => "[NOCTURNO]", 
            "admin" => "[ADMIN]", 
            "dev" => "[DEV]", 
            "modo" => "[MODO]", 
            "helper" => "[HELPER]", 
            "staff" => "[STAFF]" 
        ];

        return $allgrades[$grade];

    } else {

        return "bad_grade";

    }

}

function get_locker($usr) {

    global $conn;

    $sql="SELECT item FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)!=0) {
        $row=mysqli_fetch_assoc($result);
        $it=explode(", ", $row['item']);

        foreach($it as $i) {
            $sql="SELECT item_style FROM item WHERE item_name='$i'";
            $result=mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)>0) {
                $row=mysqli_fetch_assoc($result);
                $cat=$row['item_style'];

                $nm=str_replace('_', ' ', $i);
                $nm=strtoupper($nm);
                $itemstyle=[
                    "staff_e"=>"#ff0000",
                    "skins_e"=>"#292929",
                    "gliders_e"=>"#292929",
                    "pickaxes_e"=>"#292929",
                    "BugS2_e"=>"#03cffc",
                    "Event_e"=>"#fa7302",
                    "youtube_e"=>"#ffffff",
                    "BattlePass_e"=>"#292929",
                    "staff_i"=>"#5e0000",
                    "skins_i"=>"#202020",
                    "gliders_i"=>"#202020",
                    "pickaxes_i"=>"#202020",
                    "BugS2_i"=>"#007b96",
                    "Event_i"=>"#b55200",
                    "youtube_i"=>"#ff0000",
                    "BattlePass_i"=>"#202020"
                ];
                $nm_i=$itemstyle[$cat."_i"];
                $nm_e=$itemstyle[$cat."_e"];
                echo "<div class='itembox' style='--back_color:$nm_i; --ext_color:$nm_e'><h3>$nm</h3><img src='images/$cat/$i.png'></div>";
            }
        }
    
    } else {

        echo "<p>No results found.</p>";

    }

}

function get_stat($usr) {

    global $conn;

    $sql="SELECT top1, top10, top25, kills FROM stat WHERE username='$usr'";
    $result=mysqli_query($conn,$sql);

    if (mysqli_num_rows($result)!=0) {
        $sql="SELECT status, grade, level, exp, mtx FROM users WHERE username='$usr'";
        $result2=mysqli_query($conn,$sql);

        if (mysqli_num_rows($result2)!=0) {
            $row=mysqli_fetch_assoc($result);
            $top1=$row['top1'];
            $top10=$row['top10'];
            $top25=$row['top25'];
            $kills=$row['kills'];
            $row2=mysqli_fetch_assoc($result2);
            $status=$row2['status'];
            $grade=$row2['grade'];
            $level=$row2['level'];
            $exp=$row2['exp'];
            $mtx=$row2['mtx'];
        
        echo "<h2>$usr top</h2>";
        echo "<p>top 1: $top1</p>";
        echo "<p>top 10: $top10</p>";
        echo "<p>top 25: $top25</p>";
        echo "<h2>$usr kills</h2>";
        echo "<p>kills: $kills</p>";
        echo "<h2>$usr infos</h2>";
        echo "<p>status: $status</p>";
        echo "<p>grade: $grade</p>";
        echo "<p>level: $level</p>";
        echo "<p>vbucks: $mtx</p>";
        echo "<p>exp: $exp</p>";

        } else {
            
            echo "<p>No results found.</p>";

        }
    } else {
            
        echo "<p>No results found.</p>";

    }

}

function get_top($usr) {

    global $conn;

    $sql="SELECT top1, top10, top25, kills FROM stat WHERE username='$usr'";
    $result=mysqli_query($conn,$sql);

    if (mysqli_num_rows($result)!=0) {
        $row=mysqli_fetch_assoc($result);
        $top1=$row['top1'];
        $top10=$row['top10'];
        $top25=$row['top25'];
        $kills=$row['kills'];

        echo "<h2>top:</h2>";
        echo "<p>top 1: $top1</p>";
        echo "<p>top 10: $top10</p>";
        echo "<p>top 25: $top25</p>";
        echo "<h2>kills:</h2>";
        echo "<p>kills: $kills</p>";

    } else {
        
        echo "<p>No results found.</p>";

    }

}

function get_param($usr, $token) {

    global $conn;

    $sql="SELECT mtx, item, status, ip FROM users WHERE username='$usr' AND token='$token'";
    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)!=0) {
        $row=mysqli_fetch_assoc($result);
        $it=explode(", ", $row['item']);
        echo "<h3>parameters:</h3>";
        echo "<p>items:</p>";

        foreach($it as $i) {
            echo "<p class='item'>$i</p>";
        }
        $mtx=$row['mtx'];
        $status=$row['status'];
        $ip=$row['ip'];
        echo "<p>Vbucks: $mtx</p>";
        echo "<p>status: $status</p>";
        echo "<p>ip: $ip</p>";

    }

}

function generateToken($usr) {
    $lenght=20;
    $usr=base64_encode($usr);
    $char='0123456789niquecosmosNIQUECOSMOS1234567890COSMOSESTPDVIVENOCTURNO';
    $maxlenght=strlen($char);
    $randomstring='';
    for ($i = 0; $i < $lenght; $i++) {
        $randomstring .= $char[rand(0, $maxlenght - 1)];
    }
    return "NOCTURNOISBETTER-".$usr."-".$randomstring;
}


function create_acc($pass, $usr, $ip, $uid) {

    global $conn;

    $sql="SELECT username FROM users WHERE username='$usr'";
    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)==0) {
        $sql="SELECT status FROM users WHERE uid='$uid'";
        $result=mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)!=0) {

            $row=mysqli_fetch_assoc($result);

            if ($row['status']=="normal") {
                $sql="SELECT ip FROM users WHERE ip='$ip'";
                $result=mysqli_query($conn, $sql);
    
                if (mysqli_num_rows($result)!=0) {
    
                    if (mysqli_num_rows($result)>=4) {
    
                        return "max_account_reached";
    
                    } else {
    
                        if ($pass==="") {
                        
                            return "bad_password";
                    
                        } else {
                            $actdate=date('Y-m-d H:i:s');
    
                            $sql="INSERT INTO users (username, password, mtx, status, date, ip, level, exp, grade, uid, item) VALUES ('$usr', '$pass', 500, 'normal', '$actdate', '$ip', 1, 1, 'member', '$uid', 'default_skin, Default_Pickaxe, default_glider')";
                            $result=mysqli_query($conn, $sql);
                            
                            if ($result=TRUE) {
                                $tokn=generateToken($usr);
                                $tkn=hash('sha256', $tokn);
                                $tkn=hash('sha512', $tkn);
                                $sql="INSERT INTO stat (top1, top10, top25, username, token) VALUES (0, 0, 0, '$usr', '$tkn')";
                                $result=mysqli_query($conn, $sql);
                    
                                if ($result=TRUE) {
                                    $sql="UPDATE users SET token='$tkn' WHERE username='$usr' AND password='$pass'";
                                    $result=mysqli_query($conn, $sql);
                    
                                    if ($result=TRUE) {
                                        
                                        $sql="INSERT INTO token (token, password) VALUES ('$tokn', '$pass')";
                                        $result=mysqli_query($conn, $sql);
                    
                                        if ($result=TRUE) {
                                            $sql="INSERT INTO favorites (username) VALUES ('$usr')";
                                            $result=mysqli_query($conn, $sql);

                                            if ($result==TRUE) {

                                                sendIncription($usr, $uid, $ip);
                                                return True;

                                            }
                    
                                        } else {
                    
                                            return "error_creating_account_token_table";
                                        }
                    
                                    } else {
                                        
                                        return "error_creating_account_stat";
                                    }
                                } else {
                                    
                                    return "error_creating_account_token";
                                }
                    
                            } else {
                                
                                return "error_creating_account";
                            }
                        }
    
                    }
    
                } else {
    
                    if ($pass==="") {
                        
                        return "bad_password";
                
                    } else {
    
                        $actdate=date('Y-m-d H:i:s');
    
                        $sql="INSERT INTO users (username, password, mtx, status, date, ip, level, exp, grade, uid, item) VALUES ('$usr', '$pass', 500, 'normal', '$actdate', '$ip', 1, 1, 'member', '$uid', 'default_skin, Default_Pickaxe, default_glider')";
                        $result=mysqli_query($conn, $sql);
                        
                        if ($result=TRUE) {
                            $tokn=generateToken($usr);
                            $tkn=hash('sha256', $tokn);
                            $tkn=hash('sha512', $tkn);
    
                            $sql="INSERT INTO stat (top1, top10, top25, username, token) VALUES (0, 0, 0, '$usr', '$tkn')";
                            $result=mysqli_query($conn, $sql);
                            
                            if ($result=TRUE) {
                                $sql="UPDATE users SET token='$tkn' WHERE username='$usr' AND password='$pass'";
                                $result=mysqli_query($conn, $sql);
                
                                if ($result=TRUE) {
                                    
                                    $sql="INSERT INTO token (token, password) VALUES ('$tokn', '$pass')";
                                    $result=mysqli_query($conn, $sql);
                
                                    if ($result=TRUE) {
                
                                        $sql="INSERT INTO favorites (username) VALUES ('$usr')";
                                        $result=mysqli_query($conn, $sql);

                                        if ($result==TRUE) {

                                            sendIncription($usr, $uid, $ip);
                                            return True;

                                        }
                
                                    } else {
                
                                        return "error_creating_account_token_table";
                                    }
                
                                } else {
                                    
                                    return "error_creating_account_stat";
                                }
                            } else {
                                
                                return "error_creating_account_token";
                            }
                
                        } else {
                            
                            return "error_creating_account";
                        }
                    }
    
                }
    
            } else {
    
                return "uid_ban";
    
            }

        } else {

            $sql="SELECT ip FROM users WHERE ip='$ip'";
            $result=mysqli_query($conn, $sql);

            if (mysqli_num_rows($result)!=0) {

                if (mysqli_num_rows($result)>=4) {

                    return "max_account_reached";

                } else {

                    if ($pass==="") {
                    
                        return "bad_password";
                
                    } else {
                        $actdate=date('Y-m-d H:i:s');

                        $sql="INSERT INTO users (username, password, mtx, status, date, ip, level, exp, grade, uid, item) VALUES ('$usr', '$pass', 500, 'normal', '$actdate', '$ip', 1, 1, 'member', '$uid', 'default_skin, Default_Pickaxe, default_glider')";
                        $result=mysqli_query($conn, $sql);
                        
                        if ($result=TRUE) {
                            $tokn=generateToken($usr);
                            $tkn=hash('sha256', $tokn);
                            $tkn=hash('sha512', $tkn);

                            $sql="INSERT INTO stat (top1, top10, top25, username, token) VALUES (0, 0, 0, '$usr', '$tkn')";
                            $result=mysqli_query($conn, $sql);
                
                            if ($result=TRUE) {
                                $sql="UPDATE users SET token='$tkn' WHERE username='$usr' AND password='$pass'";
                                $result=mysqli_query($conn, $sql);
                
                                if ($result=TRUE) {
                                    
                                    $sql="INSERT INTO token (token, password) VALUES ('$tokn', '$pass')";
                                    $result=mysqli_query($conn, $sql);
                
                                    if ($result=TRUE) {
                
                                        $sql="INSERT INTO favorites (username) VALUES ('$usr')";
                                        $result=mysqli_query($conn, $sql);

                                        if ($result==TRUE) {

                                            sendIncription($usr, $uid, $ip);
                                            return True;

                                        }
                
                                    } else {
                
                                        return "error_creating_account_token_table";
                                    }
                
                                } else {
                                    
                                    return "error_creating_account_stat";
                                }
                            } else {
                                
                                return "error_creating_account_token";
                            }
                
                        } else {
                            
                            return "error_creating_account";
                        }
                    }

                }

            } else {

                if ($pass==="") {
                    
                    return "bad_password";
            
                } else {

                    $actdate=date('Y-m-d H:i:s');

                    $sql="INSERT INTO users (username, password, mtx, status, date, ip, level, exp, grade, uid, item) VALUES ('$usr', '$pass', 500, 'normal', '$actdate', '$ip', 1, 1, 'member', '$uid', 'default_skin, Default_Pickaxe, default_glider')";
                    $result=mysqli_query($conn, $sql);
                    
                    if ($result=TRUE) {
                        $tokn=generateToken($usr);
                        $tkn=hash('sha256', $tokn);
                        $tkn=hash('sha512', $tkn);

                        $sql="INSERT INTO stat (top1, top10, top25, username, token) VALUES (0, 0, 0, '$usr', '$tkn')";
                        $result=mysqli_query($conn, $sql);
            
                        if ($result=TRUE) {
                            $sql="UPDATE users SET token='$tkn' WHERE username='$usr' AND password='$pass'";
                            $result=mysqli_query($conn, $sql);
            
                            if ($result=TRUE) {
                                
                                $sql="INSERT INTO token (token, password) VALUES ('$tokn', '$pass')";
                                $result=mysqli_query($conn, $sql);
            
                                if ($result=TRUE) {
            
                                    $sql="INSERT INTO favorites (username) VALUES ('$usr')";
                                    $result=mysqli_query($conn, $sql);

                                    if ($result==TRUE) {

                                        sendIncription($usr, $uid, $ip);
                                        return True;

                                    }
            
                                } else {
            
                                    return "error_creating_account_token_table";
                                }
            
                            } else {
                                
                                return "error_creating_account_stat";
                            }
                        } else {
                            
                            return "error_creating_account_token";
                        }
            
                    } else {
                        
                        return "error_creating_account";
                    }
                }

            }

        }

    } else {

        return "username_already_used";

    }

}

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

?>