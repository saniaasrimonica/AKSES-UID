DROP TABLE IF EXISTS `provinsi`;
CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `provinsi` (`id`, `nama_provinsi`, `created_at`, `updated_at`) VALUES
(1,	'DKI Jakarta',	NULL,	NULL),
(2,	'Jawa Barat',	NULL,	NULL),
(3,	'Jawa Tengah',	NULL,	NULL),
(4,	'DI Yogyakarta',	NULL,	NULL),
(5,	'Jawa Timur',	NULL,	NULL),
(6,	'Banten',	NULL,	NULL),
(7,	'Bali',	NULL,	NULL),
(8,	'Sumatra Utara',	NULL,	NULL),
(9,	'Sumatra Barat',	NULL,	NULL),
(10,	'Sumatra Selatan',	NULL,	NULL),
(11,	'Aceh',	NULL,	NULL),
(12,	'Kalimantan Barat',	NULL,	NULL),
(13,	'Kalimantan Tengah',	NULL,	NULL),
(14,	'Kalimantan Timur',	NULL,	NULL),
(15,	'Kalimantan Selatan',	NULL,	NULL),
(16,	'Sulawesi Utara',	NULL,	NULL),
(17,	'Sulawesi Tengah',	NULL,	NULL),
(18,	'Sulawesi Barat',	NULL,	NULL),
(19,	'Sulawesi Tenggara',	NULL,	NULL),
(20,	'Sulawesi Selatan',	NULL,	NULL),
(21,	'Nusa Tenggara Barat',	NULL,	NULL),
(22,	'Nusa Tenggara Timur',	NULL,	NULL),
(23,	'Maluku Utara',	NULL,	NULL),
(24,	'Maluku',	NULL,	NULL),
(25,	'Papua Barat',	NULL,	NULL),
(26,	'Papua',	NULL,	NULL),
(27,	'Riau',	NULL,	NULL),
(28,	'Jambi',	NULL,	NULL);

-- 2015-08-04 14:16:30
