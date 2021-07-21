DROP TABLE IF EXISTS `1_file`;
CREATE TABLE `1_file` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `size` bigint(20) NOT NULL,
  `url` tinytext NOT NULL,
  `data_add` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `1_file` (`id`, `name`, `size`, `url`, `data_add`) VALUES
(16,	'images.png',	710,	'/files/EiU7fNylPjYG24p_images.png',	'2021-07-21 22:52:42'),
(17,	'images(42).png',	2996,	'/files/AD5BRLVnHbkCWIp_images(42).png',	'2021-07-21 22:52:47'),
(18,	'images(41).png',	3067,	'/files/nPQkU6b3dw9zDoH_images(41).png',	'2021-07-21 22:52:51'),
(19,	'images(40).png',	2724,	'/files/P2qeNDbSc79uHjY_images(40).png',	'2021-07-21 22:52:55'),
(20,	'images(36).png',	6774,	'/files/YTEO95jdwcfPFkN_images(36).png',	'2021-07-21 22:52:59'),
(21,	'images(35).png',	11695,	'/files/PLlFrmiKN69f0uk_images(35).png',	'2021-07-21 22:53:04'),
(22,	'images(28).png',	9505,	'/files/kalFAKhJzI3bXPG_images(28).png',	'2021-07-21 22:53:08'),
(23,	'images(29).png',	7703,	'/files/gLEOzn4CpeifvHt_images(29).png',	'2021-07-21 22:53:13'),
(24,	'images(34).png',	7302,	'/files/5nweFBolZVJKQPX_images(34).png',	'2021-07-21 22:53:17'),
(25,	'images(31).png',	9042,	'/files/eLCgAZWjFfM70uU_images(31).png',	'2021-07-21 22:53:22'),
(26,	'images(32).png',	5771,	'/files/T3HDmgLIAV2KRU5_images(32).png',	'2021-07-21 22:53:31'),
(27,	'images(42).png',	2996,	'/files/oBidAUKWmGpkjCz_images(42).png',	'2021-07-21 22:53:48');