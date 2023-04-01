SET @ORIG_SQL_REQUIRE_PRIMARY_KEY = @@SQL_REQUIRE_PRIMARY_KEY;
SET SQL_REQUIRE_PRIMARY_KEY = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `item_name` text NOT NULL,
  `item_price` int NOT NULL,
  `item_id` text NOT NULL,
  `item_style` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

INSERT INTO `item` (`item_name`, `item_price`, `item_id`, `item_style`) VALUES

-- Skins

('skull_trooper', 1500, 'CID_030_Athena_Commando_M_Halloween', 'skins'),
('ghoul_trooper', 1500, 'CID_029_Athena_Commando_F_Halloween', 'skins'),
('recon_specialist', 1200, 'CID_024_Athena_Commando_F', 'skins'),
('brawler', 1200, 'CID_021_Athena_Commando_F', 'skins'),
('racon_expert', 1200, 'CID_022_Athena_Commando_F', 'skins'),
('love_ranger', 2000, 'CID_070_Athena_Commando_M_Cupid', 'skins'),
('cuddle_team_leader', 2000, 'CID_069_Athena_Commando_F_PinkBear', 'skins'),
('e.l.f', 1200, 'CID_051_Athena_Commando_M_HolidayElf', 'skins'),
('merry_marauder', 1200, 'CID_049_Athena_Commando_M_HolidayGingerbread', 'skins'),
('ginger_gunner', 1500, 'CID_048_Athena_Commando_F_HolidayGingerbread', 'skins'),
('nog_ops', 800, 'CID_046_Athena_Commando_F_HolidaySweater', 'skins'),
('funk_ops', 1500, 'CID_038_Athena_Commando_M_Disco', 'skins'),
('rednosed_raider', 1200, 'CID_047_Athena_Commando_F_HolidayReindeer', 'skins'),
('yuletide_ranger', 800, 'CID_045_Athena_Commando_M_HolidaySweater', 'skins'),
('brite_bomber', 1200, 'CID_044_Athena_Commando_F_SciPop', 'skins'),
('crackshot', 2000, 'CID_050_Athena_Commando_M_HolidayNutcracker', 'skins'),
('artic_assassin', 1200, 'CID_037_Athena_Commando_F_WinterCamo', 'skins'),
('blue_team_leader', 1200, 'CID_052_Athena_Commando_F_PSBlue', 'skins'),
('dazzle', 1200, 'CID_076_Athena_Commando_F_Sup', 'skins'),
('jungle_scout', 800, 'CID_074_Athena_Commando_F_Stripe', 'skins'),
('mogul_master', 1500, 'CID_065_Athena_Commando_F_SkiGirl_FRA', 'skins'),
('sash_sergeant', 1200, 'CID_072_Athena_Commando_M_Scout', 'skins'),
('default_skin', 0, 'CID_001_Athena_Commando_F_Default', 'skins'),

--  Pickaxes

('reaper', 2500, 'HalloweenScythe', 'pickaxes'),
('close_shave', 800, 'BoltonPickaxe', 'pickaxes'),
('death_valley', 1500, 'Pickaxe_Deathvalley', 'pickaxes'),
('candy_axe', 1500, 'Pickaxe_ID_015_HolidayCandyCane', 'pickaxes'),
('disco_brawl', 1500, 'Pickaxe_ID_016_Disco', 'pickaxes'),
('ice_breaker', 500, 'Pickaxe_ID_014_WinterCamo', 'pickaxes'),
('chomp_jr', 1500, 'Pickaxe_ID_017_Shark', 'pickaxes'),
('plunja', 800, 'Pickaxe_ID_024_Plunger', 'pickaxes'),
('tat_axe', 800, 'Pickaxe_ID_019_Heart', 'pickaxes'),
('batsickle', 800, 'SickleBatPickaxe', 'pickaxes'),
('Default_Pickaxe', 0, 'DefaultPickaxe', 'pickaxes'),

--  Gliders

('mako', 500, 'Glider_Warthog', 'gliders'),
('prismatic', 800, 'Glider_Prismatic', 'gliders'),
('gum_drop', 800, 'Glider_ID_009_CandyCoat', 'gliders'),
('cozy_coaster', 800, 'Glider_ID_005_HolidaySweater', 'gliders'),
('cloud_strike', 1200, 'Glider_ID_010_Storm', 'gliders'),
('snowflake', 0, 'Umbrella_Snowflake', 'gliders'),
('umbrella', 0, 'Solo_Umbrella', 'gliders'),
('default_glider', 0, 'DefaultGlider', 'gliders'),

--  BattlePass

-- Saison 2

('royale_knight', -1, 'CID_033_Athena_Commando_F_Medieval', 'BattlePass'),
('blue_squire', -1, 'CID_032_Athena_Commando_M_Medieval', 'BattlePass'),
('sparkle_specialist', -1, 'ID_039_Athena_Commando_F_Disco', 'BattlePass'),
('black_knight', -1, 'CID_035_Athena_Commando_M_Medieval', 'BattlePass'),
('pusle_axe', -1, 'Pickaxe_ID_012_District', 'BattlePass'),
('axecalibur', -1, 'Pickaxe_ID_011_Medieval', 'BattlePass'),
('ac_dc', -1, 'Pickaxe_ID_013_Teslacoil', 'BattlePass'),
('the_brave', -1, 'Glider_ID_002_Medieval', 'BattlePass'),
('royale_x', -1, 'Glider_ID_003_District', 'BattlePass'),
('get_down', -1, 'Glider_ID_004_Disco', 'BattlePass'),

-- Pack Event

('first_strike_specialist', -1, 'CID_025_Athena_Commando_M', 'Event'),
('lucky', -1, 'HappyPickaxe', 'Event'),
('voyager', -1, 'Glider_Voyager', 'Event'),
-- + 2500 MTX

-- Pack Bug S2

('circuit_breaker', -1, 'CID_042_Athena_Commando_M_Cyberpunk', 'BugS2'),
('shouldnt_have', -1, 'Pickaxe_ID_022_HolidayGiftWrap', 'BugS2'),
('zephyr', -1, 'Glider_ID_008_Graffiti', 'BugS2'),
('dab', -1, 'EID_Dab', 'BugS2'),
-- + 2500 MTX

-- Pack Staff

('renegade_raider', -1, 'CID_028_Athena_Commando_F', 'staff'),
('assault_trooper', -1, 'CID_017_Athena_Commando_M', 'staff'),
('raider_revenge', -1, 'Pickaxe_Lockjaw', 'staff'),
('aerial_assault_one', -1, 'Glider_ID_001', 'staff'),

-- Pack Youtuber

('red_knight', -1, 'CID_034_Athena_Commando_F_Medieval', 'youtube'),
('pink_flamingo', -1, 'Pickaxe_Flamingo', 'youtube'),
('roadtrip', -1, 'Glider_RoadTrip', 'youtube');
-- + 10000 MTX


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
  `id` int NOT NULL,
  `password` text NOT NULL,
  `mtx` int NOT NULL,
  `item` text NOT NULL,
  `status` text NOT NULL,
  `ip` text NOT NULL,
  `date` text NOT NULL,
  `level` int NOT NULL,
  `exp` int NOT NULL,
  `grade` text NOT NULL,
  `uid` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
COMMIT;