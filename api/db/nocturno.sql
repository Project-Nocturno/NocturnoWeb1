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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

INSERT INTO `item` (`item_name`, `item_price`, `item_id`, `item_style`) VALUES

-- Skins

('tomatohead', 1500, 'CID_109_Athena_Commando_M_Pizza', 'skins'),
('tricera_ops', 2000, 'CID_107_Athena_Commando_F_PajamaParty', 'skins'),
('leviathan', 2000, 'CID_108_Athena_Commando_M_Fishhead', 'skins'),
('cipher', 1200, 'CID_110_Athena_Commando_F_CircuitBreaker', 'skins'),
('dark_vanguard', 2000, 'CID_105_Athena_Commando_F_SpaceBlack', 'skins'),
('raven', 2000, 'CID_102_Athena_Commando_M_Raven', 'skins'),
('whiplash', 800, 'CID_106_Athena_Commando_F_Taxi', 'skins'),
('rabbit_raider', 1500, 'CID_103_Athena_Commando_M_Bunny', 'skins'),
('bunny_brawler', 1500, 'CID_104_Athena_Commando_F_Bunny', 'skins'),
('midnight_ops', 1200, 'CID_101_Athena_Commando_M_Stealth', 'skins'),
('power_chord', 2000, 'CID_097_Athena_Commando_F_RockerPunk', 'skins'),
('highland_warrior', 1500, 'CID_099_Athena_Commando_F_Scathach', 'skins'),
('battle_hound', 2000, 'CID_100_Athena_Commando_M_CuChulainn', 'skins'),
('green_clover', 800, 'CID_098_Athena_Commando_F_StPatty', 'skins'),
('radiant_striker', 1200, 'CID_091_Athena_Commando_M_RedShirt', 'skins'),
('brilliant_striker', 1200, 'CID_092_Athena_Commando_F_RedShirt', 'skins'),
('burnout', 1500, 'CID_094_Athena_Commando_M_Rider', 'skins'),
('rex', 2000, 'CID_093_Athena_Commando_M_Dinosaur', 'skins'),
('crimson_scout', 800, 'CID_086_Athena_Commando_M_RedSilk', 'skins'),
('scarlet_defender', 800, 'CID_087_Athena_Commando_F_RedSilk', 'skins'),
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

('axeroni', 800, 'Pickaxe_ID_040_Pizza', 'pickaxes'),
('bitemark', 1200, 'Pickaxe_ID_041_PajamaParty', 'pickaxes'),
('cutting_edge', 800, 'Pickaxe_ID_042_CircuitBreaker', 'pickaxes'),
('carrot_stick', 800, 'Pickaxe_ID_038_Carrot', 'pickaxes'),
('spectral_axe', 800, 'Pickaxe_ID_035_Prismatic', 'pickaxes'),
('anarchy_axe', 800, 'Pickaxe_ID_034_RockerPunk', 'pickaxes'),
('silver_fang', 800, 'Pickaxe_ID_036_CuChulainn', 'pickaxes'),
('pot_o_gold', 800, 'Pickaxe_ID_033_PotOfGold', 'pickaxes'),
('tactical_spade', 500, 'Pickaxe_ID_032_Tactical', 'pickaxes'),
('empire_axe', 800, 'Pickaxe_ID_030_ArtDeco', 'pickaxes'),
('pick_squeak', 1500, 'Pickaxe_ID_031_Squeak', 'pickaxes'),
('rainbow_smash', 1500, 'Pickaxe_ID_026_Brite', 'pickaxes'),
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
('default_pickaxe', 0, 'DefaultPickaxe', 'pickaxes'),

--  Gliders

('rusty_rider', 1200, 'Glider_ID_021_Scavenger', 'gliders'),
('googly', 800, 'Glider_ID_028_Googly', 'gliders'),
('fossil_flyer', 500, 'Glider_ID_029_PajamaParty', 'gliders'),
('planetary_probe', 1200, 'Glider_ID_027_Satelite', 'gliders'),
('mainframe', 500, 'Glider_ID_030_CircuitBreaker', 'gliders'),
('orbital_shuttle', 1200, 'Glider_ID_025_ShuttleA', 'gliders'),
('deep_space_lander', 1200, 'Glider_ID_026_ShuttleB', 'gliders'),
('feathered_flyer', 800, 'Glider_ID_024_Reaper', 'gliders'),
('checker', 500, 'Glider_ID_019_Taxi', 'gliders'),
('stage_dive', 800, 'Glider_ID_022_RockerPunk', 'gliders'),
('rayale_dragon', 2000, 'Glider_ID_014_Dragon', 'gliders'),
('mako', 500, 'Glider_Warthog', 'gliders'),
('prismatic', 800, 'Glider_Prismatic', 'gliders'),
('gum_drop', 800, 'Glider_ID_009_CandyCoat', 'gliders'),
('cozy_coaster', 800, 'Glider_ID_005_HolidaySweater', 'gliders'),
('cloud_strike', 1200, 'Glider_ID_010_Storm', 'gliders'),
('paper_parasol', 0, 'Umbrella_PaperParasol', 'gliders'),
('snowflake', 0, 'Umbrella_Snowflake', 'gliders'),
('umbrella', 0, 'Solo_Umbrella', 'gliders'),
('default_glider', 0, 'DefaultGlider', 'gliders'),

--  BattlePass Palier Saison 3

('mission_specialist', -1, 'CID_080_Athena_Commando_M_Space', 'BattlePassS3'), -- Palier 1
-- Défi palier 2 -- Palier 2 -- FREE
-- Give de 100 MTX -- Palier 4
('wow', -1, 'Emoji_Wow', 'BattlePassS3'), -- Palier 5
('suppressed_pistol', -1, 'LSID_005_SuppressedPistol', 'BattlePassS3'), -- Palier 6
('sawtooth', -1, 'Pickaxe_ID_027_Scavenger', 'BattlePassS3'), -- Palier 7
('thief', -1, 'Emoji_Thief', 'BattlePassS3'), -- Palier 8
('salute', -1, 'EID_Salute', 'BattlePassS3'), -- Palier 10 -- FREE
-- Give de 100 MTX -- Palier 11
('harvesting_tools', -1, 'LSID_003_Pickaxes', 'BattlePassS3'), -- Palier 12
('in_love', -1, 'Emoji_InLove', 'BattlePassS3'), -- Palier 14 -- FREE
('heartbroken', -1, 'Emoji_Heartbroken', 'BattlePassS3'), -- Palier 14
('rainbow_rider', -1, 'Glider_ID_015_Brite', 'BattlePassS3'), -- Palier 15
-- Give de 100 MTX -- Palier 18 -- FREE
('boombox', -1, 'Emoji_Boombox', 'BattlePassS3'), -- Palier 18
-- Give de 100 MTX -- Palier 19
('rainbow', -1, 'Trails_ID_002_Rainbow', 'BattlePassS3'), -- Palier 20
('precision', -1, 'BID_025_Tactical', 'BattlePassS3'), -- Palier 22 -- FREE
('rocket_ride', -1, 'Emoji_RocketRide', 'BattlePassS3'), -- Palier 22
('rust_lord', -1, 'CID_082_Athena_Commando_M_Scavenger', 'BattlePassS3'), -- Palier 23
('good_game', -1, 'Emoji_GoodGame', 'BattlePassS3'), -- Palier 26 -- FREE
-- Give de 100 MTX -- Palier 27
('tactical_shotgun', -1, 'LSID_004_TacticalShotgun', 'BattlePassS3'), -- Palier 28
('battle_royale', -1, 'LSID_008_KeyArt', 'BattlePassS3'), -- Palier 30 -- FREE
('bush', -1, 'Emoji_Bush', 'BattlePassS3'), -- Palier 30
('take_the_l', -1, 'EID_TakeTheL', 'BattlePassS3'), -- Palier 31
-- Give de 100 MTX -- Palier 34 -- FREE
-- Give de 100 MTX -- Palier 35
('ultramarine', -1, 'Trails_ID_004_BlueStreak', 'BattlePassS3'), -- Palier 36
('awww', -1, 'Emoji_Awww', 'BattlePassS3'), -- Palier 38
('carbon', -1, 'Glider_ID_016_Tactical', 'BattlePassS3'), -- Palier 39
('positivity', -1, 'Emoji_Positivity', 'BattlePassS3'), -- Palier 42 -- FREE  -- JE ME SUIS ARRETER LA PTN
-- Give de 100 MTX -- Palier 43
('brite_unicorn', -1, 'LSID_001_Brite', 'BattlePassS3'), -- Palier 44
('eva', -1, 'Pickaxe_ID_028_Space', 'BattlePassS3'), -- Palier 46 -- FREE
('thumbs_up', -1, 'Emoji_ThumbsUp', 'BattlePassS3'), -- Palier 46
('astro', -1, 'BID_024_Space', 'BattlePassS3'), -- Palier 47
('thumbs_down', -1, 'Emoji_ThumbsDown', 'BattlePassS3'), -- Palier 48
('all_star', -1, 'Trails_ID_001_Disco', 'BattlePassS3'), -- Palier 50
-- Give de 100 MTX -- Palier 51
('1_hp', -1, 'Emoji_1HP', 'BattlePassS3'), -- Palier 52
('a+', -1, 'Emoji_APlus', 'BattlePassS3'), -- Palier 54 -- FREE
('moonwalker', -1, 'CID_081_Athena_Commando_F_Space', 'BattlePassS3'), -- Palier 55
('hot_dawg', -1, 'Emoji_HotDawg', 'BattlePassS3'), -- Palier 58
-- Give de 100 MTX -- Palier 59
('minigun', -1, 'LSID_006_Minigun', 'BattlePassS3'), -- Palier 60
('best_mates', -1, 'EID_BestMates', 'BattlePassS3'), -- Palier 63
('hoarder', -1, 'Emoji_Hoarder', 'BattlePassS3'), -- Palier 64
-- Give de 100 MTX -- Palier 67
('bubbles', -1, 'Trails_ID_005_Bubbles', 'BattlePassS3'), -- Palier 68
('dark_voyager', -1, 'CID_088_Athena_Commando_M_SpaceBlack', 'BattlePassS3'), -- Palier 70
('dark_matter', -1, 'BID_028_SpaceBlack', 'BattlePassS3'), -- Palier 71
('200_iq', -1, 'Emoji_200IQPlay', 'BattlePassS3'), -- Palier 74
-- Give de 100 MTX -- Palier 75
('raptor', -1, 'LSID_002_Raptor', 'BattlePassS3'), -- Palier 76
('trusty_no', -1, 'Pickaxe_ID_029_Assassin', 'BattlePassS3'), -- Palier 79
('flaming_rage', -1, 'Emoji_FlamingRage', 'BattlePassS3'), -- Palier 80
-- Give de 100 MTX -- Palier 83
('flames', -1, 'Trails_ID_003_Fire', 'BattlePassS3'), -- Palier 84
('kaboom', -1, 'Emoji_Kaboom', 'BattlePassS3'), -- Palier 86
('elite_agent', -1, 'CID_083_Athena_Commando_F_Tactical', 'BattlePassS3'), -- Palier 87
('majestic', -1, 'Emoji_Majestic', 'BattlePassS3'), -- Palier 90
-- Give de 100 MTX -- Palier 91
('elit_agent', -1, 'LSID_007_TacticalCommando', 'BattlePassS3'), -- Palier 92
('number_1', -1, 'Emoji_Number1', 'BattlePassS3'), -- Palier 97
-- Give de 100 MTX -- Palier 98
('the_reaper', -1, 'CID_084_Athena_Commando_M_Assassin', 'BattlePassS3'), -- Palier 100

--  BattlePass Palier Saison 2

-- ('ecuyer_bleu', -1, 'CID_033_Athena_Commando_F_Medieval', 'BattlePassS2'), -- Palier 1
-- ('backpack_ecuyer_bleu', -1, 'bid_001_bluesquire', 'BattlePassS2'), -- Palier 1
-- ('lol', -1, 'emoji_lol', 'BattlePassS2'), -- Palier 2 -- FREE
-- -- Give 100 MTX -- Palier 4
-- -- Give 1000 XP -- Palier 6
-- ('bravo', -1, 'emoji_clapping', 'BattlePassS2'), -- Palier 5
-- ('salut', -1, 'eid_wave', 'BattlePassS2'), -- Palier 5 -- FREE
-- ('impulseuse', -1, 'Pickaxe_ID_012_District', 'BattlePassS2'), -- Palier 7
-- -- Give 1000 XP -- Palier 8
-- ('doigts_en_coeur', -1, 'emoji_hearthands', 'BattlePassS2'), -- Palier 11 -- FREE
-- -- Give 100 MTX -- Palier 11
-- ('rip', -1, 'emoji_rip', 'BattlePassS2'), -- Palier 12
-- -- Give 1000 XP -- Palier 13
-- -- Give 100 MTX -- Palier 14 -- FREE
-- ('demon_disco', -1, 'Glider_ID_004_Disco', 'BattlePassS2'), -- Palier 14
-- ('dans_le_mille', -1, 'emoji_bullseye', 'BattlePassS2'), -- Palier 17 -- FREE
-- -- Give 100 MTX -- Palier 18
-- ('rage', -1, 'emoji_rage', 'BattlePassS2'), -- Palier 19
-- ('tagada_hue', -1, 'eid_ridethepony_athena', 'BattlePassS2'), -- Palier 20 -- FREE
-- -- Give 1000 XP -- Palier 20
-- ('chevaleresse', -1, 'CID_032_Athena_Commando_M_Medieval', 'BattlePassS2'), -- Palier 21
-- ('backpack_chevaleresse', -1, 'bid_002_royaleknight', 'BattlePassS2'), -- Palier 21
-- ('paix', -1, 'emoji_peacesign', 'BattlePassS2'), -- Palier 22
-- -- Give 1000 XP -- Palier 23 -- FREE
-- -- Give 100 MTX -- Palier 25
-- ('cest_la_fete', -1, 'emoji_disco', 'BattlePassS2'), -- Palier 26
-- -- Give 1000 XP -- Palier 27
-- ('le_ver', -1, 'eid_worm', 'BattlePassS2'), -- Palier 28
-- -- Give 100 MTX -- Palier 29 -- FREE
-- -- Give 100 MTX -- Palier 32
-- ('exclamation', -1, 'emoji_exclamation', 'BattlePassS2'), -- Palier 33
-- -- Give 1000 XP -- Palier 34
-- ('seigneur_duplaneur', -1, 'Glider_ID_002_Medieval', 'BattlePassS2'), -- Palier 35 -- FREE
-- ('hachecalibur', -1, 'Pickaxe_ID_011_Medieval', 'BattlePassS2'), -- Palier 35
-- ('biscoteau', -1, 'emoji_armflex', 'BattlePassS2'), -- Palier 36
-- -- Give 100 MTX -- Palier 39
-- ('mvp', -1, 'emoji_mvp', 'BattlePassS2'), -- Palier 40
-- -- Give 1000 XP -- Palier 41
-- ('royale_x', -1, 'Glider_ID_003_District', 'BattlePassS2'), -- Palier 42
-- -- Give 1000 XP -- Palier 43
-- -- Give 100 MTX -- Palier 46
-- ('hamecon', -1, 'emoji_baited', 'BattlePassS2'), -- Palier 47
-- -- Give 1000 XP -- Palier 48
-- ('floss', -1, 'eid_floss', 'BattlePassS2'), -- Palier 49
-- -- Give 100 MTX -- Palier 53
-- ('tes_deg', -1, 'emoji_salty', 'BattlePassS2'), -- Palier 54
-- -- Give 1000 XP -- Palier 55
-- ('soldat_a_facettes', -1, 'CID_039_Athena_Commando_F_Disco', 'BattlePassS2'), -- Palier 56
-- ('discret', -1, 'emoji_stealthy', 'BattlePassS2'), -- Palier 57
-- ('potato', -1, 'emoji_potatoaim', 'BattlePassS2'), -- Palier 61
-- -- Give 1000 XP -- Palier 62
-- ('fulgurante', -1, 'Pickaxe_ID_013_Teslacoil', 'BattlePassS2'), -- Palier 63
-- -- Give 1000 XP -- Palier 64
-- -- Give 100 MTX -- Palier 67
-- ('en_feu', -1, 'emoji_onfire', 'BattlePassS2'), -- Palier 68
-- -- Give 1000 XP -- Palier 69
-- ('chevalier_noir', -1, 'CID_035_Athena_Commando_M_Medieval', 'BattlePassS2'), -- Palier 70

-- Pack Event

('strike_specialist', -1, 'CID_025_Athena_Commando_M', 'Event'),
('lucky', -1, 'HappyPickaxe', 'Event'),
('voyageur', -1, 'Glider_Voyager', 'Event'),
-- + 2500 MTX

-- Pack Bug S3

('circuit_breaker', -1, 'CID_042_Athena_Commando_M_Cyberpunk', 'BugS2'),
('shouldnt_have', -1, 'Pickaxe_ID_022_HolidayGiftWrap', 'BugS2'),
('zephyr', -1, 'Glider_ID_008_Graffiti', 'BugS2'),
('dab', -1, 'EID_Dab', 'BugS2'),
-- + 2500 MTX

-- Pack Booster

('rogue_agent', -1, 'CID_090_Athena_Commando_M_Tactical', 'Booster'),
('spectre', -1, 'Pickaxe_ID_037_Stealth', 'Booster'),
('storm_sigil', -1, 'Glider_ID_023_CuChulainn', 'Booster'),
-- + 1000 MTX

-- Pack Staff

('renegade_raider', -1, 'CID_028_Athena_Commando_F', 'staff'),
('assault_trooper', -1, 'CID_017_Athena_Commando_M', 'staff'),
('raider_revenge', -1, 'Pickaxe_Lockjaw', 'staff'),
('arial_assault_one', -1, 'Glider_ID_001', 'staff'),

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `character` text NOT NULL,
  `backpack` text NOT NULL,
  `pickaxe` text NOT NULL,
  `glider` text NOT NULL,
  `skydivecontrail` text NOT NULL,
  `musicpack` text NOT NULL,
  `loadingscreen` text NOT NULL,
  `dance` text NOT NULL,
  `itemwraps` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `token`;
CREATE TABLE IF NOT EXISTS `token` (
  `token` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

COMMIT;

-- Give Item: http://localhost/nocturnoweb/api/post/item/item.php?urlkey=VEIDVOE9oN8O3C4TnU2RIN1O0rF82mU6RuJwHFQ6GH5mF4NQ3pZ8Z6R7A8dL0&usrnm=root&passwd=toor&token=NOCTURNOISBETTER-cm9vdA==-q99s7OS5qE61e9568OSE&action=give_item&target_user=root&item=default_skin
-- Give All: http://localhost/nocturnoweb/api/post/item/item.php?urlkey=VEIDVOE9oN8O3C4TnU2RIN1O0rF82mU6RuJwHFQ6GH5mF4NQ3pZ8Z6R7A8dL0&usrnm=root&passwd=toor&token=NOCTURNOISBETTER-cm9vdA==-q99s7OS5qE61e9568OSE&action=give_all&target_user=root&item=
-- Ban qlq: http://localhost/nocturnoweb/api/post/ban/ban.php?urlkey=VEIDVOE9oN8O3C4TnU2RIN1O0rF82mU6RuJwHFQ6GH5mF4NQ3pZ8Z6R7A8dL0&usrnm=root&passwd=toor&token=NOCTURNOISBETTER-cm9vdA==-q99s7OS5qE61e9568OSE&action=ban_user&target_user=root
-- UnBan qlq: http://localhost/nocturnoweb/api/post/ban/ban.php?urlkey=VEIDVOE9oN8O3C4TnU2RIN1O0rF82mU6RuJwHFQ6GH5mF4NQ3pZ8Z6R7A8dL0&usrnm=root&passwd=toor&token=NOCTURNOISBETTER-cm9vdA==-q99s7OS5qE61e9568OSE&action=unban_user&target_user=root