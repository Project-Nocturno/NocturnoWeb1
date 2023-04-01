<?php

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

function sendD($usr, $top) {
    
    $url="basicwebhook";
    $headers=['Content-Type: application/json; charset=utf-8'];
    $post=['username' => 'Nocturno '.$top, 'content' => 'GG a '.$usr.' pour son '.$top.' !'];
    $ch=curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));

    $response=curl_exec($ch);

}

function sendAdminBan($usr, $usrnm, $grd, $uid, $ip) {
    
    $url="adminbanwebhook";
    $headers=['Content-Type: application/json; charset=utf-8'];
    $embd=[
        [
            "title" => "**$usr à ban $usrnm**",
            "type" => "rich",
            "footer" => [
                "text" => "Nocturno™",
            ],
            "fields" => [
                [
                    "name" => "GRADE:",
                    "value" => "```$grd```",
                    "inline" => false
                ],
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

function sendAdminUnBan($usr, $usrnm, $grd, $uid, $ip) {
    
    $url="adminunbanwebhook";
    $headers=['Content-Type: application/json; charset=utf-8'];
    $embd=[
        [
            "title" => "**$usr à unban $usrnm**",
            "type" => "rich",
            "footer" => [
                "text" => "Nocturno™",
            ],
            "fields" => [
                [
                    "name" => "GRADE:",
                    "value" => "```$grd```",
                    "inline" => false
                ],
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

function sendBuyItem($usr, $item, $grd, $uid, $ip) {
    
    $url="buyitemwebhook";
    $headers=['Content-Type: application/json; charset=utf-8'];
    $item=str_replace('_', ' ', $item);
    $embd=[
        [
            "title" => "**$usr à acheter $item.**",
            "type" => "rich",
            "footer" => [
                "text" => "Nocturno™",
            ],
            "fields" => [
                [
                    "name" => "GRADE:",
                    "value" => "```$grd```",
                    "inline" => false
                ],
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

function sendGiveItem($item, $usr, $usrnm, $grd, $uid, $ip) {
    
    $url="sendgiveitemwebhook";
    $headers=['Content-Type: application/json; charset=utf-8'];
    $item=str_replace('_', ' ', $item);
    $embd=[
        [
            "title" => "**$usrnm à give $item à $usr.**",
            "type" => "rich",
            "footer" => [
                "text" => "Nocturno™",
            ],
            "fields" => [
                [
                    "name" => "GRADE:",
                    "value" => "```$grd```",
                    "inline" => false
                ],
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

function UniqueMachineID($salt = "") {  
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {  
          
        $temp = sys_get_temp_dir().DIRECTORY_SEPARATOR."diskpartscript.txt";  
        if(!file_exists($temp) && !is_file($temp)) file_put_contents($temp, "select disk 0\ndetail disk");  
        $output = shell_exec("diskpart /s ".$temp);  
        $lines = explode("\n",$output);  
        $result = array_filter($lines,function($line) {  
            return stripos($line,"ID:")!==false;  
        });  
          
          
        if(count($result)>0) {  
            $result = array_shift(array_values($result));  
            $result = explode(":",$result);  
            $result = trim(end($result));         
        } else $result = $output;         
    } else {  
        $result = shell_exec("blkid -o value -s UUID");    
        if(stripos($result,"blkid")!==false) {  
            $result = $_SERVER['HTTP_HOST'];  
        }  
    }     
    return md5($salt.md5($result));  
}

function create_acc($pass, $usr, $ip, $uid) {

    global $conn;
    sendIncription($usr, $uid, $ip);

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
    
                        echo json_encode("max_account_reached", JSON_PRETTY_PRINT);
    
                    } else {
    
                        if ($pass==="") {
                        
                            echo json_encode("bad_password", JSON_PRETTY_PRINT);
                    
                        } else {
                            $actdate=date('Y-m-d H:i:s');
    
                            $sql="INSERT INTO users (username, password, mtx, status, date, ip, level, exp, grade, uid, item) VALUES ('$usr', '$pass', '500', 'normal', '$actdate', '$ip', '1', '1', 'member', '$uid', 'default_skin, Default_Pickaxe, default_glider')";
                            $result=mysqli_query($conn, $sql);
                    
                            if ($result==TRUE) {
                                $tokn=generateToken($usr);
                                $tkn=hash('sha256', $tokn);
                                $tkn=hash('sha512', $tkn);
                                $sql="INSERT INTO stat (top1, top10, top25, username, token) VALUES ('0', '0', '0', '$usr', '$tkn')";
                                $result=mysqli_query($conn, $sql);
                    
                                if ($result==TRUE) {
                                    $sql="UPDATE users SET token='$tkn' WHERE username='$usr' AND password='$pass'";
                                    $result=mysqli_query($conn, $sql);
                    
                                    if ($result==TRUE) {
                                        
                                        $sql="INSERT INTO token (token, password) VALUES ('$tokn', '$pass')";
                                        $result=mysqli_query($conn, $sql);
                    
                                        if ($result==TRUE) {
                                            $sql="INSERT INTO favorites (username) VALUES ('$usr')";
                                            $result=mysqli_query($conn, $sql);

                                            if ($result==TRUE) {

                                                echo json_encode("$tokn", JSON_PRETTY_PRINT);

                                            }
                    
                                        } else {
                    
                                            echo json_encode("error_creating_account_token_table", JSON_PRETTY_PRINT);
                                        }
                    
                                    } else {
                                        
                                        echo json_encode("error_creating_account_stat", JSON_PRETTY_PRINT);
                                    }
                                } else {
                                    
                                    echo json_encode("error_creating_account_token", JSON_PRETTY_PRINT);
                                }
                    
                            } else {
                                
                                echo json_encode("error_creating_account", JSON_PRETTY_PRINT);
                            }
                        }
    
                    }
    
                } else {
    
                    if ($pass==="") {
                        
                        echo json_encode("bad_password", JSON_PRETTY_PRINT);
                
                    } else {
    
                        $actdate=date('Y-m-d H:i:s');
    
                        $sql="INSERT INTO users (username, password, mtx, status, date, ip, level, exp, grade, uid, item) VALUES ('$usr', '$pass', '500', 'normal', '$actdate', '$ip', '1', '1', 'member', '$uid', 'default_skin, Default_Pickaxe, default_glider')";
                        $result=mysqli_query($conn, $sql);
                
                        if ($result==TRUE) {
                            $tokn=generateToken($usr);
                            $tkn=hash('sha256', $tokn);
                            $tkn=hash('sha512', $tkn);
    
                            $sql="INSERT INTO stat (top1, top10, top25, username, token) VALUES ('0', '0', '0', '$usr', '$tkn')";
                            $result=mysqli_query($conn, $sql);
                
                            if ($result==TRUE) {
                                $sql="UPDATE users SET token='$tkn' WHERE username='$usr' AND password='$pass'";
                                $result=mysqli_query($conn, $sql);
                
                                if ($result==TRUE) {
                                    
                                    $sql="INSERT INTO token (token, password) VALUES ('$tokn', '$pass')";
                                    $result=mysqli_query($conn, $sql);
                
                                    if ($result==TRUE) {
                
                                        $sql="INSERT INTO favorites (username) VALUES ('$usr')";
                                        $result=mysqli_query($conn, $sql);

                                        if ($result==TRUE) {

                                            echo json_encode("$tokn", JSON_PRETTY_PRINT);

                                        }
                
                                    } else {
                
                                        echo json_encode("error_creating_account_token_table", JSON_PRETTY_PRINT);
                                    }
                
                                } else {
                                    
                                    echo json_encode("error_creating_account_stat", JSON_PRETTY_PRINT);
                                }
                            } else {
                                
                                echo json_encode("error_creating_account_token", JSON_PRETTY_PRINT);
                            }
                
                        } else {
                            
                            echo json_encode("error_creating_account", JSON_PRETTY_PRINT);
                        }
                    }
    
                }
    
            } else {
    
                echo json_encode("uid_ban", JSON_PRETTY_PRINT);
    
            }

        } else {

            $sql="SELECT ip FROM users WHERE ip='$ip'";
            $result=mysqli_query($conn, $sql);

            if (mysqli_num_rows($result)!=0) {

                if (mysqli_num_rows($result)>=4) {

                    echo json_encode("max_account_reached", JSON_PRETTY_PRINT);

                } else {

                    if ($pass==="") {
                    
                        echo json_encode("bad_password", JSON_PRETTY_PRINT);
                
                    } else {
                        $actdate=date('Y-m-d H:i:s');

                        $sql="INSERT INTO users (username, password, mtx, status, date, ip, level, exp, grade, uid, item) VALUES ('$usr', '$pass', '500', 'normal', '$actdate', '$ip', '1', '1', 'member', '$uid', 'default_skin, Default_Pickaxe, default_glider')";
                        $result=mysqli_query($conn, $sql);
                
                        if ($result==TRUE) {
                            $tokn=generateToken($usr);
                            $tkn=hash('sha256', $tokn);
                            $tkn=hash('sha512', $tkn);

                            $sql="INSERT INTO stat (top1, top10, top25, username, token) VALUES ('0', '0', '0', '$usr', '$tkn')";
                            $result=mysqli_query($conn, $sql);
                
                            if ($result==TRUE) {
                                $sql="UPDATE users SET token='$tkn' WHERE username='$usr' AND password='$pass'";
                                $result=mysqli_query($conn, $sql);
                
                                if ($result==TRUE) {
                                    
                                    $sql="INSERT INTO token (token, password) VALUES ('$tokn', '$pass')";
                                    $result=mysqli_query($conn, $sql);
                
                                    if ($result==TRUE) {
                
                                        $sql="INSERT INTO favorites (username) VALUES ('$usr')";
                                        $result=mysqli_query($conn, $sql);

                                        if ($result==TRUE) {

                                            echo json_encode("$tokn", JSON_PRETTY_PRINT);

                                        }
                
                                    } else {
                
                                        echo json_encode("error_creating_account_token_table", JSON_PRETTY_PRINT);
                                    }
                
                                } else {
                                    
                                    echo json_encode("error_creating_account_stat", JSON_PRETTY_PRINT);
                                }
                            } else {
                                
                                echo json_encode("error_creating_account_token", JSON_PRETTY_PRINT);
                            }
                
                        } else {
                            
                            echo json_encode("error_creating_account", JSON_PRETTY_PRINT);
                        }
                    }

                }

            } else {

                if ($pass==="") {
                    
                    echo json_encode("bad_password", JSON_PRETTY_PRINT);
            
                } else {

                    $actdate=date('Y-m-d H:i:s');

                    $sql="INSERT INTO users (username, password, mtx, status, date, ip, level, exp, grade, uid, item) VALUES ('$usr', '$pass', '500', 'normal', '$actdate', '$ip', '1', '1', 'member', '$uid', 'default_skin, Default_Pickaxe, default_glider')";
                    $result=mysqli_query($conn, $sql);
            
                    if ($result==TRUE) {
                        $tokn=generateToken($usr);
                        $tkn=hash('sha256', $tokn);
                        $tkn=hash('sha512', $tkn);

                        $sql="INSERT INTO stat (top1, top10, top25, username, token) VALUES ('0', '0', '0', '$usr', '$tkn')";
                        $result=mysqli_query($conn, $sql);
            
                        if ($result==TRUE) {
                            $sql="UPDATE users SET token='$tkn' WHERE username='$usr' AND password='$pass'";
                            $result=mysqli_query($conn, $sql);
            
                            if ($result==TRUE) {
                                
                                $sql="INSERT INTO token (token, password) VALUES ('$tokn', '$pass')";
                                $result=mysqli_query($conn, $sql);
            
                                if ($result==TRUE) {
            
                                    $sql="INSERT INTO favorites (username) VALUES ('$usr')";
                                    $result=mysqli_query($conn, $sql);

                                    if ($result==TRUE) {

                                        echo json_encode("$tokn", JSON_PRETTY_PRINT);

                                    }
            
                                } else {
            
                                    echo json_encode("error_creating_account_token_table", JSON_PRETTY_PRINT);
                                }
            
                            } else {
                                
                                echo json_encode("error_creating_account_stat", JSON_PRETTY_PRINT);
                            }
                        } else {
                            
                            echo json_encode("error_creating_account_token", JSON_PRETTY_PRINT);
                        }
            
                    } else {
                        
                        echo json_encode("error_creating_account", JSON_PRETTY_PRINT);
                    }
                }

            }

        }

    } else {

        echo json_encode("username_already_used", JSON_PRETTY_PRINT);

    }

}

?>