<?php

$menuclr1="rgba(255, 255, 255, 0.5)";
$menuclr3="rgba(255, 255, 255, 0.95)";
$menuclr2="rgba(255, 255, 255, 0.7)";

$colors=[
    24 => $menuclr1,
    1 => $menuclr1,
    2 => $menuclr1,
    3 => $menuclr1,
    4 => $menuclr1,
    5 => $menuclr1,
    6 => $menuclr1,
    7 => $menuclr2,
    8 => $menuclr2,
    9 => $menuclr2,
    10 => $menuclr3,
    11 => $menuclr3,
    12 => $menuclr3,
    13 => $menuclr3,
    14 => $menuclr3,
    15 => $menuclr3,
    16 => $menuclr3,
    17 => $menuclr3,
    18 => $menuclr3,
    19 => $menuclr2,
    20 => $menuclr2,
    21 => $menuclr2,
    22 => $menuclr2,
    23 => $menuclr2
];
$menuclr=$colors[(int) date("H")+1];
session_start();
include 'main_func.php';
include 'db/db_conn.php';
$page="Casier";

if ($_SESSION) {
    $usern=$_SESSION['username'];
} else {
    $usern="Anonyme";
}

?>

<html>
    <head>
  		<title>Nocturno | <?php echo $page ?: "error" ?></title>
    	<meta charset="utf-8">
		<link rel="stylesheet" href="style/style.php">
		<link rel="icon" type="image/x-icon" href="img/icon.png">
	</head>
    <header class="site-header">
		<div class="wrapper site-header__wrapper">
            <a href="index.php" class="logo">Project Nocturno</a>
            <nav class="nav">
                <ul class="nav__wrapper">
                    <li class="nav__item"><a href="index.php">Accueil</a></li>
                    <li class="nav__item"><a href="locker.php">Casier</a></li>
                    <?php
                        if (!$_SESSION) {
                            echo '<li class="nav__item"><a href="login.php">Login</a></li>';
                            echo '<li class="nav__item"><a href="signup.php">Signup</a></li>';
                        } else {
                            echo '<li class="nav__item"><a href="logout.php">Logout</a></li>';
                        }
                    ?>
                    <li class="nav__item"><a href="https://dsc.gg/nocturno" target="_blank">Discord</a></li>
                    <li class="nav__acc"><a href="dashboard.php"><?php echo $usern ?></a></li>
                </ul>
		    </nav>
            <a class="trigger">
                <i class="fas fa-bars"></i>
            </a>
		</div>
	</header>
    <script src="https://kit.fontawesome.com/13426a0776.js" crossorigin="anonymous"></script>
    <body>
        <nav class="full-screen-nav">
            <div class="backdrop"></div>
            <ul class="menu_ul">
                <li style="--clr:<?php echo $menuclr; ?>;">
                    <a class="menu_a" href="index.php" data-text="Accueil">Accueil</a>
                </li>
                <li style="--clr:<?php echo $menuclr; ?>;">
                    <a class="menu_a" href="locker.php" data-text="Casier">Casier</a>
                </li>
                <?php
                    if (!$_SESSION) {
                        echo '<li style="--clr:'.$menuclr.';"><a class="menu_a" href="login.php" data-text="Login">Login</a></li>';
                        echo '<li style="--clr:'.$menuclr.';"><a class="menu_a" href="signup.php" data-text="Signup">Signup</a></li>';
                    } else {
                        echo '<li style="--clr:'.$menuclr.';"><a class="menu_a" href="logout.php" data-text="Logout">Logout</a></li>';
                    }
                ?>
                <li style="--clr:<?php echo $menuclr; ?>;">
                    <a class="menu_a" href="dashboard.php" data-text="Dashboard">Dashboard</a>
                </li>
            </ul>
        </nav>
        <script>

            const trigger=document.querySelector('.trigger');
            const nav=document.querySelector('.full-screen-nav');
            const backdrop=document.querySelector('.backdrop');
            const text=document.querySelector('.menu_ul');
            
            trigger.addEventListener("click", () => nav.classList.add('open-nav'));
            backdrop.addEventListener('click', () => nav.classList.remove('open-nav'));
            text.addEventListener('click', () => nav.classList.remove('open-nav'));

        </script>
        <center>
            <div class="bloc-casier">
				<div class="login">
                    <h1>Casier</h1>
				</div>
                <div class="locker">
                <?php
                    if ($_SESSION) {get_locker($_SESSION['username']);;} else {
                        echo "<p>Vous n'êtes pas connéctés, veuillez vous connecter <a href='login.php'>ici</a></p>";
                    }
                ?>
                </div>
			</div>
		</center>
    <body>
</html>