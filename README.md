# NocturnoWeb1
the web part of the nocturno project (website, api, ...) of the project nocturno
it works with a mysql database

# HOW IT WORKS: 
## API: 

the api works with a get part and a post part (the get part will allow to get data (like for example: tokens, stats, ...) and the post will allow to insert data (like for example: exp, level, mtx, ...))

## WEBSITE: 

in the website style will be in ./pages/style.php  
the site will work with a session system that will allow a connection:

```php
<?php 
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

<?php include 'dashboard.php'; ?>

<?php 
} else {
?>

<?php include 'login.php'; ?>

<?php
}
?>
```

the goal is to display the dashboard.php to the user.  

the main functions are defined in main_func.php

## DATABASE:

basic sql command to generate the database: 
```sql
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `item_name` text NOT NULL,
  `item_price` int NOT NULL,
  `item_id` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

INSERT INTO `item` (`item_name`, `item_price`, `item_id`) VALUES
('renegade_raider', 100000, 'CID_028_Athena_Commando_F'),
('assault_trooper', 1200, 'CID_017_Athena_Commando_M'),
('skull_trooper', 1500, 'CID_030_Athena_Commando_M_Halloween'),
('ghoul_trooper', 1500, 'CID_029_Athena_Commando_F_Halloween'),
('recon_specialist', 1200, 'CID_024_Athena_Commando_F'),
('brawler', 1200, 'CID_021_Athena_Commando_F'),
('racon_expert', 1200, 'CID_022_Athena_Commando_F'),
('reaper', 2500, 'HalloweenScythe'),
('raider_revenge', 5000, 'Pickaxe_Lockjaw'),
('close_shave', 800, 'BoltonPickaxe'),
('death_valley', 1500, 'Pickaxe_Deathvalley'),
('mako', 500, 'Glider_Warthog'),
('prismatic', 800, 'Glider_Prismatic');

DROP TABLE IF EXISTS `stat`;
CREATE TABLE IF NOT EXISTS `stat` (
  `top1` int NOT NULL,
  `top10` int NOT NULL,
  `top25` int NOT NULL,
  `kills` int NOT NULL,
  `username` text NOT NULL,
  `token` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `token`;
CREATE TABLE IF NOT EXISTS `token` (
  `token` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `token` text NOT NULL,
  `username` text NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `password` text NOT NULL,
  `mtx` int NOT NULL,
  `item` text NOT NULL,
  `status` text NOT NULL,
  `ip` text NOT NULL,
  `date` text NOT NULL,
  `level` int NOT NULL,
  `exp` int NOT NULL,
  `grade` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

COMMIT;
```

command that will be used to insert the skins that will be available with the values (item_name, item_price, item_id):
```sql
INSERT INTO `item` (`item_name`, `item_price`, `item_id`) VALUES
('renegade_raider', 100000, 'CID_028_Athena_Commando_F'),
('assault_trooper', 1200, 'CID_017_Athena_Commando_M'),
('skull_trooper', 1500, 'CID_030_Athena_Commando_M_Halloween'),
('ghoul_trooper', 1500, 'CID_029_Athena_Commando_F_Halloween'),
('recon_specialist', 1200, 'CID_024_Athena_Commando_F'),
('brawler', 1200, 'CID_021_Athena_Commando_F'),
('racon_expert', 1200, 'CID_022_Athena_Commando_F'),
('reaper', 2500, 'HalloweenScythe'),
('raider_revenge', 5000, 'Pickaxe_Lockjaw'),
('close_shave', 800, 'BoltonPickaxe'),
('death_valley', 1500, 'Pickaxe_Deathvalley'),
('mako', 500, 'Glider_Warthog'),
('prismatic', 800, 'Glider_Prismatic');
```
