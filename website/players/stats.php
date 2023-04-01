<?php

$usr=htmlspecialchars($_GET['user']);

?>

<?php

include('../db/db_conn.php');
include('../main_func.php');

?>

<html>
    <head>
        <link rel="stylesheet" href="../style/style.php">
    </head>
    <body>
        <center>
            <div class="bloc-casier">
                <div class="login">
                    <h1><?php echo $usr; ?> Stats</h1>
                </div>
                <?php get_stat($usr); ?>
            </div>
            <div class="bloc-casier">
                <div class="login">
                    <h1><?php echo $usr; ?> Casier</h1>
                </div>
                <?php get_locker($usr); ?>
            </div>
        </center>
    </body>
</html>