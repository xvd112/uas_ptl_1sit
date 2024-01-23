-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 03:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrs_klmpk2`
--

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`nm_fasilitas`, `deskripsi`, `nm_dokter`, `s_dokter`, `created_at`, `updated_at`) VALUES('Bedah', 'Bedah adalah suatu bidang dalam dunia kedokteran yang berkaitan dengan pembedahan atau intervensi bedah. Secara umum, bedah melibatkan penggunaan teknik tertentu untuk melakukan tindakan medis yang mencakup pemotongan atau manipulasi jaringan tubuh untuk memperbaiki atau mengatasi masalah kesehatan.', 'Dr. Jhon Doe', 'Dokter Bedah Senior', '2024-01-15 23:53:42', '2024-01-15 23:53:42');
INSERT INTO `fasilitas` (`nm_fasilitas`, `deskripsi`, `nm_dokter`, `s_dokter`, `created_at`, `updated_at`) VALUES('Endoskopi', 'Endoskopi adalah suatu prosedur medis di mana seorang dokter menggunakan alat yang disebut endoskop untuk memeriksa dan memeriksa bagian dalam tubuh manusia. Endoskop adalah instrumen medis yang panjang dan fleksibel, dilengkapi dengan kamera atau serat optik kecil di ujungnya. Prosedur endoskopi memungkinkan dokter untuk melihat struktur dan organ dalam tubuh, seperti lambung, usus, esofagus, atau saluran napas, tanpa melakukan pembedahan besar.', 'Dr. Laura Williams', 'Dokter Endoskopi Senior', '2024-01-15 23:55:26', '2024-01-16 01:00:46');
INSERT INTO `fasilitas` (`nm_fasilitas`, `deskripsi`, `nm_dokter`, `s_dokter`, `created_at`, `updated_at`) VALUES('Radiology', 'Radiologi adalah cabang ilmu kedokteran yang memanfaatkan teknologi radiasi untuk diagnosis, pemantauan, dan penanganan berbagai kondisi medis. Radiologi memainkan peran penting dalam dunia medis dengan memberikan gambaran visual internal dari struktur tubuh manusia, yang membantu dokter dalam mengevaluasi dan memahami kondisi kesehatan pasien.', 'Dr. James Smith', 'Dokter Radiology Senior', '2024-01-15 23:56:42', '2024-01-16 01:01:18');

--
-- Dumping data for table `galeries`
--

INSERT INTO `galeries` (`title`, `category`, `photo`, `desc`, `created_at`, `updated_at`) VALUES('Safira Putri Nabila', 'team', '20240115094612.JPG', 'Ketua Kelompok', '2024-01-15 02:46:12', '2024-01-20 19:44:34');
INSERT INTO `galeries` (`title`, `category`, `photo`, `desc`, `created_at`, `updated_at`) VALUES('Alvikri Mukhlis', 'team', '20240118152539.JPG', 'Anggota Kelompok', '2024-01-15 03:05:24', '2024-01-20 19:44:39');
INSERT INTO `galeries` (`title`, `category`, `photo`, `desc`, `created_at`, `updated_at`) VALUES('Aqsar Akbar', 'team', '20240121024410.jpg', '<p>Anggota Kelompok<br></p>', '2024-01-20 19:44:10', '2024-01-20 19:46:52');
INSERT INTO `galeries` (`title`, `category`, `photo`, `desc`, `created_at`, `updated_at`) VALUES('Yangga Affriadi', 'team', '20240121025201.jpg', '<p>Anggota Kelompok</p>', '2024-01-20 19:52:01', '2024-01-20 19:52:01');
INSERT INTO `galeries` (`title`, `category`, `photo`, `desc`, `created_at`, `updated_at`) VALUES('Muhammad Irfan Fadhilah', 'team', '20240121025421.png', '<p>Anggota Kelompok</p>', '2024-01-20 19:54:21', '2024-01-20 19:54:21');

--
-- Dumping data for table `sejarahs`
--

INSERT INTO `sejarahs` (`sejarah`, `created_at`, `updated_at`) VALUES('Dalam perkembangannya, Rumah Bersalin Kasih Ibu mengalami pasang surut dan berbagai perubahan terus terjadi. Pada tahun 1981 Dr. Lo Siauw Ging bergabung, dengan demikian terjadi perombakan struktural dan pada tahun 1982 ditingkatkan menjadi Rumah Sakit Umum atas pertimbangan kebutuhan akan jasa layanan kesehatan masyarakat dan atas usul IKES (Inspektur Kesehatan). Sebagai Rumah Sakit Umum, RS. Kasih Ibu tidak hanya memberikan pelayanan kesehatan seputar masalah kebidanan dan penyakit kandungan saja tetapi juga untuk berbagai jenis penyakit yang lain. Oleh karena itu, sejak tahun 1982 RS. Kasih Ibu semakin berkembang dalam memberikan pelayanan kesehatan dengan merintis Klinik Umum, Klinik Gigi, dan juga beragam Poliklinik Spesialis', '2024-01-18 12:52:24', '2024-01-18 12:52:24');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `email_verified_at`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES('Safira Putri Nabila', 'putri@mail.com', NULL, '$2y$12$Lj3xT8xpFvUjczENJXDKHuqYh8kIiVRItOPzTrekGUVYgIMMzl.CW', 1, NULL, '2024-01-12 01:51:02', '2024-01-14 20:00:17');
INSERT INTO `users` (`name`, `email`, `email_verified_at`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES('Alvikri Mukhlis', 'alvi@mail.com', NULL, '$2y$12$2BrIOq8OZ/bqPrZ1YLQCvO8EG6PlsFXBxa7UKgf5Y8fSDvOCjF3hW', 0, NULL, '2024-01-14 07:56:36', '2024-01-14 07:56:36');
INSERT INTO `users` (`name`, `email`, `email_verified_at`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES('yangga', 'yanggaaffriadi17@gmail.com', NULL, '$2y$12$9FqyO3rXSPVcIaSaqwDptenIJg.IEPAPC/5ISClXOuIDEDVqRcTVq', 0, NULL, '2024-01-18 03:12:13', '2024-01-18 03:12:13');
INSERT INTO `users` (`name`, `email`, `email_verified_at`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES('Aqsar', 'aqsar@mail.com', NULL, '$2y$12$6QQXyLtbggWUrh6XwR.Z1OnC6MtD2kqyCNbIyatN49Klctmvi37S.', 0, NULL, '2024-01-16 23:11:03', '2024-01-16 23:11:03');

--
-- Dumping data for table `visimisis`
--

INSERT INTO `visimisis` (`visi`, `misi`, `created_at`, `updated_at`) VALUES('Menjadi Rumah Sakit unggulan dan terpercaya di Surakarta dan sekitarnya.', 'Senantiasa berdedikasi mengutamakan keselamatan pasien dengan memberikan pelayanan kesehatan secara profesional dan bermutu tinggi.', '2024-01-18 03:13:33', '2024-01-18 03:13:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
