/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : dprd

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 29/11/2024 10:31:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for anggota
-- ----------------------------
DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `fraksi` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `periode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of anggota
-- ----------------------------
BEGIN;
INSERT INTO `anggota` (`id`, `nama`, `fraksi`, `jabatan`, `periode`, `created_at`, `updated_at`, `telp`, `alamat`) VALUES (4, 'Adi Nugroho', '3', 'ketua', '2029', '2024-11-28 21:06:45', '2024-11-28 21:07:18', '0987656789', 'jl s adam');
COMMIT;

-- ----------------------------
-- Table structure for hasil
-- ----------------------------
DROP TABLE IF EXISTS `hasil`;
CREATE TABLE `hasil` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rapat_komisi_id` int(11) DEFAULT NULL,
  `rapat_pansus_id` int(11) DEFAULT NULL,
  `notulensi` text,
  `catatan` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hasil
-- ----------------------------
BEGIN;
INSERT INTO `hasil` (`id`, `rapat_komisi_id`, `rapat_pansus_id`, `notulensi`, `catatan`, `created_at`, `updated_at`) VALUES (1, 2, 1, 'ya begitulah', 'sdfdsf', '2024-11-29 09:54:02', '2024-11-29 09:55:25');
COMMIT;

-- ----------------------------
-- Table structure for komisi
-- ----------------------------
DROP TABLE IF EXISTS `komisi`;
CREATE TABLE `komisi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of komisi
-- ----------------------------
BEGIN;
INSERT INTO `komisi` (`id`, `nama`, `bidang`, `keterangan`, `created_at`, `updated_at`) VALUES (2, 'df', 'dfg', 'dfg', '2024-11-28 21:19:40', '2024-11-28 21:19:40');
COMMIT;

-- ----------------------------
-- Table structure for pansus
-- ----------------------------
DROP TABLE IF EXISTS `pansus`;
CREATE TABLE `pansus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `masa_kerja` varchar(255) DEFAULT NULL,
  `pembahasan` text,
  `jumlah` varchar(255) DEFAULT NULL,
  `pimpinan_id` int(11) DEFAULT NULL,
  `komisi_id` int(11) DEFAULT NULL,
  `anggota_id` int(11) DEFAULT NULL,
  `keterangan` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pansus
-- ----------------------------
BEGIN;
INSERT INTO `pansus` (`id`, `nama`, `masa_kerja`, `pembahasan`, `jumlah`, `pimpinan_id`, `komisi_id`, `anggota_id`, `keterangan`, `created_at`, `updated_at`) VALUES (1, 'rapat 1', 'kljklj', 'lkj', '4 orang', 4, 2, 4, 'ok', '2024-11-29 09:17:01', '2024-11-29 09:39:41');
INSERT INTO `pansus` (`id`, `nama`, `masa_kerja`, `pembahasan`, `jumlah`, `pimpinan_id`, `komisi_id`, `anggota_id`, `keterangan`, `created_at`, `updated_at`) VALUES (2, 'sdf', 'dfg', 'sdf', '23', 4, 2, 4, 'sdf', '2024-11-29 09:17:57', '2024-11-29 09:17:57');
COMMIT;

-- ----------------------------
-- Table structure for pimpinan
-- ----------------------------
DROP TABLE IF EXISTS `pimpinan`;
CREATE TABLE `pimpinan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pimpinan
-- ----------------------------
BEGIN;
INSERT INTO `pimpinan` (`id`, `nip`, `nama`, `jabatan`, `keterangan`, `created_at`, `updated_at`) VALUES (4, '435', 'asdasdfas', 'sdgsf', 'sdfsdsdgdsfs', '2024-11-28 20:56:39', '2024-11-28 20:56:39');
INSERT INTO `pimpinan` (`id`, `nip`, `nama`, `jabatan`, `keterangan`, `created_at`, `updated_at`) VALUES (5, NULL, 'wer', 'rwet', 'ert', '2024-11-28 20:58:05', '2024-11-28 20:58:05');
COMMIT;

-- ----------------------------
-- Table structure for rapat_komisi
-- ----------------------------
DROP TABLE IF EXISTS `rapat_komisi`;
CREATE TABLE `rapat_komisi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `komisi_id` int(11) DEFAULT NULL,
  `keterangan` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rapat_komisi
-- ----------------------------
BEGIN;
INSERT INTO `rapat_komisi` (`id`, `nama`, `jenis`, `tanggal`, `tempat`, `komisi_id`, `keterangan`, `created_at`, `updated_at`) VALUES (2, 'ddasdkjdgkdjsf', 'sdgdfg', '2024-11-28', 'dsfg', 2, 'sdf', '2024-11-29 09:52:57', '2024-11-29 09:52:57');
COMMIT;

-- ----------------------------
-- Table structure for rapat_pansus
-- ----------------------------
DROP TABLE IF EXISTS `rapat_pansus`;
CREATE TABLE `rapat_pansus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `komisi_id` int(11) DEFAULT NULL,
  `keterangan` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rapat_pansus
-- ----------------------------
BEGIN;
INSERT INTO `rapat_pansus` (`id`, `nama`, `jenis`, `tanggal`, `tempat`, `komisi_id`, `keterangan`, `created_at`, `updated_at`) VALUES (1, 'dsf', 'dfgsfd', '2024-11-28', 'sfg', 2, 'sdfsdf', '2024-11-29 09:41:51', '2024-11-29 09:41:51');
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1, 1);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'user', '2023-05-15 16:36:37', '2023-05-15 16:36:37');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (3, 'petugas', '2024-11-10 17:28:18', '2024-11-10 17:28:18');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (4, 'saksi', '2024-11-20 22:51:33', '2024-11-20 22:51:33');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (5, 'kelurahan', '2024-11-21 03:07:06', '2024-11-21 03:07:06');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (6, 'kecamatan', '2024-11-21 03:07:11', '2024-11-21 03:07:11');
COMMIT;

-- ----------------------------
-- Table structure for tindakan
-- ----------------------------
DROP TABLE IF EXISTS `tindakan`;
CREATE TABLE `tindakan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) DEFAULT NULL,
  `pengaduan_id` int(11) DEFAULT NULL,
  `perda_id` int(11) DEFAULT NULL,
  `hukuman` text,
  `keterangan` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tindakan
-- ----------------------------
BEGIN;
INSERT INTO `tindakan` (`id`, `nomor`, `pengaduan_id`, `perda_id`, `hukuman`, `keterangan`, `created_at`, `updated_at`) VALUES (1, NULL, 3, 2, 'ds', 'dfs', '2024-11-28 16:18:58', '2024-11-28 16:18:58');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `password_superadmin` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `api_token` varchar(255) DEFAULT NULL,
  `last_session` varchar(255) DEFAULT NULL,
  `change_password` int(1) unsigned DEFAULT '0' COMMENT '0: belum, 1: sudah',
  `pendaftar_id` char(36) DEFAULT NULL,
  `pengumpul_id` int(11) DEFAULT NULL,
  `suara_id` int(11) DEFAULT NULL,
  `kelurahan_id` int(11) DEFAULT NULL,
  `kecamatan_id` int(11) DEFAULT NULL,
  `nama_kec` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1167 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`, `pendaftar_id`, `pengumpul_id`, `suara_id`, `kelurahan_id`, `kecamatan_id`, `nama_kec`) VALUES (1, 'admin', NULL, 'admin', '2024-11-28 20:37:49', '$2y$10$E9xG1OtIFvBRbHqlwHCC3u48vO5eBf2OQ9wFNpi.qKOAzVqNDUdW2', NULL, '5SAktFU4AwiRMNnhWDjjPPTDlVNWUzSqTCtXRqpz9IOkEzlBGOBIGOAxn0cU', '2024-11-28 20:37:49', '2024-11-28 20:37:49', '$2y$10$tjMANlV25IUwvKuPxEODW.3qE3zPSKjwhmgTcZUgsPDZRGcpgGAN.', NULL, 0, NULL, 5, NULL, NULL, NULL, NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
