-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2023 at 05:43 PM
-- Server version: 8.0.33-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `moderateusers_permission` tinyint(1) NOT NULL DEFAULT '1',
  `moderatecontent_permission` tinyint(1) NOT NULL DEFAULT '1',
  `moderateadmin_permission` tinyint(1) NOT NULL DEFAULT '1',
  `moderatepages_permission` tinyint(1) NOT NULL DEFAULT '1',
  `secret` varchar(256) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `moderateusers_permission`, `moderatecontent_permission`, `moderateadmin_permission`, `moderatepages_permission`, `secret`, `verified`) VALUES
(1, 'manu', '$2y$10$yA44QztYrEkFB9xaaORoROpS415OT1warGq1qZoaHvIOFutufgTi.', 1, 1, 1, 1, 'NAHSUIKNLGEFSH7Z', 1),
(2, 'admin', '$2y$10$yA44QztYrEkFB9xaaORoROpS415OT1warGq1qZoaHvIOFutufgTi.', 1, 1, 1, 1, 'WZIH6N5NS2DLWLDY', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `usertype` varchar(256) DEFAULT NULL,
  `id` int NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `usertype`, `id`, `createdat`) VALUES
('Manuel Christian', '$2y$10$d9sukCVqt0O8Fo7F2vV.nunwwhN.YzBxbzS449Bml6u7u2jPJd0pW', 'me@mail.com', 'student', 10, '2023-06-16 17:00:00'),
('Manuel Christian', '$2y$10$hcHEjiQwkj/Rg89c3CMHcuENS8McOHcvSKEkiLfjnvxY2dhb4HV7W', 'me@mail.com', 'student', 11, '2023-06-16 17:00:00'),
('Manuel Christian', '$2y$10$ZYmonJRoyI25kCm8FNAi9ON1hK3UXx38tjYkSyQSvkom3J7CSpdeS', 'me@mail.com', 'student', 12, '2023-06-16 17:00:00'),
('Manuel Christian', '$2y$10$GCEbwpMF3uQ7Fk2.hgMwdu4VkDNCwv3he0/lxw3zUtbo.mhNcoI56', 'me@mail.com', 'student', 13, '2023-06-16 17:00:00'),
('Manuel Christian', '$2y$10$QzE0IbK09uVykGO3Gh8JiOkr0Ie77NQuorKVPPq/dJJAwax3cf.l6', 'me@mail.com', 'student', 14, '2023-06-16 17:00:00'),
('Manuel Christian', '$2y$10$7rJZ/A20bqxGdL9UkXGaeeAfK7vUSSjAtGTrDMTPh4OYRBU3fSlC2', 'me@mail.com', 'student', 15, '2023-06-16 17:00:00'),
('Manuel Christian', '$2y$10$9mpPfWJZRCaDfSmp1MqxI.4rP/bsG2zO2WDeUSpxg3X0YfZ809CGK', 'me@mail.com', 'student', 16, '2023-06-16 17:00:00'),
('Manuel Christian', '$2y$10$JDxAxz6sBp9b.kGGcFNq2epBQ2hzJDbfaa4FdzK/YAqAruhfVuvGG', 'me@mail.com', 'student', 17, '2023-06-16 17:00:00'),
('test', '$2y$10$hOiCPmyardAcr3B5EPDwO.Na2DkFiltKaD4YX99SgvobG8EMpLNxq', 'test', 'student', 18, '2023-06-15 17:00:00'),
('test', '$2y$10$wicj5oOGg4aPT7GfSLr7Geb35OvZgFoaY8/ok2.NuYwjs30oVdeUC', 'test', 'student', 19, '2023-06-15 17:00:00'),
('test', '$2y$10$JZku2mwYD9Tlno.INUO9Ue0b4G79rZk0rx.eiYcgVruHtabdv2p66', 'test', 'student', 20, '2023-06-15 17:00:00'),
('test', '$2y$10$e0vukrUBPybS4X5QkCJah.M0lIx40TA16J/b7C6EJ8nrTxbScMGXq', 'test', 'student', 21, '2023-06-15 17:00:00'),
('test', '$2y$10$HLX7x4MAnhHohc1esbxvt.hxB3/JNRWgOIqFJckUxc3oBDcjZuKH.', 'test', 'student', 22, '2023-06-15 17:00:00'),
('test', '$2y$10$YK8fpXmkqTmvd0ku/k4q2eNb.pW0s1CP1abAbv/cdtg8M58ym74NG', 'test', 'student', 23, '2023-06-15 17:00:00'),
('test', '$2y$10$f6egU364LdjDyPhmGP3yEu.C/l8Auz05.gG/hqVnBdoypNOeLNN6y', 'test', 'student', 24, '2023-06-15 17:00:00'),
('test', '$2y$10$VV8HN4aFMims3ZHDQU5tIO7ziUKYY/ZD.eqgQNo6nQgAsrXFKydrW', 'test', 'student', 25, '2023-06-15 17:00:00'),
('test', '$2y$10$qbcNnnKwEYQzYAI9zJVYkeS3LzzqIat7.ssjldI6z96drDmw1OVYC', 'test', 'student', 26, '2023-06-15 17:00:00'),
('test', '$2y$10$acsAO6c/sNW.BDviuAz8SOE9cJSoMOneNX0MIjE4g8JzWNAivUqM6', 'test', 'student', 27, '2023-06-15 17:00:00'),
('test', '$2y$10$wMWTFVuOYLGnG0jxGI4rzeJYiWzxUa9uTzosGCd/ByU2WQRDWCQU6', 'test', 'student', 28, '2023-06-15 17:00:00'),
('test', '$2y$10$slV6ampLbounLY.3pZ5f1uU7nLlqCDh.EPmr1bjC4.LRup7Ww5Tvm', 'test', 'student', 29, '2023-06-15 17:00:00'),
('test', '$2y$10$QCgmFuafJkhqEtwPOAo09.Ffq9SYG7DF7CcKADBtN57YhfSXQ.uP.', 'test', 'student', 30, '2023-06-15 17:00:00'),
('test', '$2y$10$J78fiBkvXC22wKMXEahDsO8ban4tD2szOZTV6aBhfDb6Lzt/VX4Ue', 'test', 'student', 31, '2023-06-15 17:00:00'),
('test', '$2y$10$ZbVFr/sVhnrasJzRnshn3uI4db5Mmht3FSHcEB2NH9NoX1ZHwyMTC', 'test', 'student', 32, '2023-06-15 17:00:00'),
('test', '$2y$10$K.5xMeaoB1gFWDXWgoor0unzHFc/23d8k4sNUbUg.Bz7uauYRhXkq', 'test', 'student', 33, '2023-06-15 17:00:00'),
('test', '$2y$10$GRFiXzdGxWpG9p/X0MFeeuapnREImt5ooRAa4.J2qrCIHtOE0e0jy', 'test', 'student', 34, '2023-06-15 17:00:00'),
('test', '$2y$10$jw1jeF9baSrt2Km9GM8dfOOvnZhYyZlsYJxj42sCO4oSSmeYp8CeS', 'test', 'student', 35, '2023-06-15 17:00:00'),
('test', '$2y$10$tHGsyzPAeZe4LKsdETXl9O09E7rHGEh18VVdSGx5OZBLRy1rg2Vay', 'test', 'student', 36, '2023-06-15 17:00:00'),
('test', '$2y$10$I1iSOhWO6KyidZPARh6EkeQVGS1Njs88cHQHYfc21fGzJDeGGKzZq', 'test', 'student', 37, '2023-06-15 17:00:00'),
('test', '$2y$10$lRSA8dXp9MXwuA7awC91p.FY/4o/nb2xvsMMZP85d2uCgyWBU8Qge', 'test', 'student', 38, '2023-06-15 17:00:00'),
('test', '$2y$10$toe547CMmrGHAXgPFySn5.Pfk6sHfqtl8PtPxVHI5RN6OSwBzf.Gy', 'test', 'student', 39, '2023-06-15 17:00:00'),
('test', '$2y$10$lJtsg3hS/0BrpYZxSfZITuR8jP5PtGc2PPX2HSsbfHT2U7qPhrceK', 'test', 'student', 40, '2023-06-15 17:00:00'),
('test', '$2y$10$ekJ.ScaiVF0RYDqX8an3N.asxDEYbnM9.irehMGkT0Do1yTBeXdvy', 'test', 'student', 41, '2023-06-15 17:00:00'),
('test', '$2y$10$g81sK47kpVtRWx1PI5zCsusDf/l4SOSzENq87LxhidSehcEwZH5We', 'test', 'student', 42, '2023-06-15 17:00:00'),
('test', '$2y$10$OUXXoyFhm4/t5.StHoiFx.Qr2Q/FvMZauCro68yzBTDWXG8xgv9NG', 'test', 'student', 44, '2023-06-15 17:00:00'),
('test', '$2y$10$RRXBMBt8lo39l4V1DRttO.QvKmmHcn5IlBRcjzJGZNiLCq7Sw6V7S', 'test', 'student', 45, '2023-06-15 17:00:00'),
('test', '$2y$10$iy21CCBhGvnSZR7Yw48QL.oeMsG/cQ/lVE5somF1Zjz602iaioFMq', 'test', 'student', 46, '2023-06-15 17:00:00'),
('test', '$2y$10$yflB0HYnzPsop.Y1.1gEv.k0ZqBMDo7p9cXml3uvSrtmtpHg.CCVq', 'test', 'student', 47, '2023-06-15 17:00:00'),
('test', '$2y$10$ajjMFUNWzRBZ/psynJpK4eq4ucQusdf9doAW9R2sdZCiOHJ9GaRDm', 'test', 'student', 48, '2023-06-15 17:00:00'),
('test', '$2y$10$/93.ucDDL5GW9RcUm3Z0DedAbSCoAIMeuew..qKSfJ.GEpPHkdMwi', 'test', 'student', 49, '2023-06-15 17:00:00'),
('test', '$2y$10$qUTmLZloMu7lv39fSw0qR.HV9sGTQvkKvwfgq20QUa1Hh0ndUZEly', 'test', 'student', 50, '2023-06-15 17:00:00'),
('test', '$2y$10$1EfeXHLFmjtFqUSPauTCjePvm/Fzla7zbqJ0a7fcaMwqUHNyGwgDW', 'test', 'student', 51, '2023-06-15 17:00:00'),
('test', '$2y$10$GfRisx9ERu5w9lhp5ztM8eO3BRUnGOFAS0/77kw25iSz2n7gi299G', 'test', 'student', 52, '2023-06-15 17:00:00'),
('test', '$2y$10$tb0aKJAnZHOEhEyLmEpwmeYj1ZSr5wOTDblE2ifQHwEJwg6qSXQh6', 'test', 'student', 56, '2023-06-15 17:00:00'),
('test', '$2y$10$bUBdVPfMIXxpPSoQruyzfu4WlCt5ju1oVu9CXGMtvCDSP7cigQjDS', 'test', 'student', 57, '2023-06-15 17:00:00'),
('test', '$2y$10$5UJu1cP/mIGaAglbE7Uv7e4krfAnmMb6vnCt3OyDXjIMowsL8F1Xy', 'test', 'student', 58, '2023-06-15 17:00:00'),
('test', '$2y$10$d49ZZSlTv8NSEInjTdpulOwVOW2oGCFtdDPe5c.00qDmNrpKOAnnS', 'test', 'student', 59, '2023-06-15 17:00:00'),
('test', '$2y$10$w.kP/FZUqUjnLVRp/ATTiuD.BhnLEYzDMC8ICAUl8jOV5jThQUBmW', 'test', 'student', 60, '2023-06-15 17:00:00'),
('test', '$2y$10$QFK8L.qzVH0nUC7KtuN4ReQRWWQG3t.c/EbLd6qkD2W6v5Xswrctu', 'test', 'student', 61, '2023-06-15 17:00:00'),
('test', '$2y$10$ipQ7AttuGnAzbLPy9xlNjuSDetsonun52PQLI/hWG.3RoH3CfbWJ6', 'test', 'student', 62, '2023-06-15 17:00:00'),
('test', '$2y$10$Qvt6pv31ch1blt8OWusp4eTOsjYT3r0TxnKkujrb.SjqozLfhjNtW', 'test', 'student', 63, '2023-06-15 17:00:00'),
('test', '$2y$10$bIN0j27dm4HaJPxs0kYQoOGM0izO9B3Mbl.0RCEQZ1HIMnxs14h66', 'test', 'student', 64, '2023-06-15 17:00:00'),
('test', '$2y$10$/iYzV8/n0yMrFmlHNrowruLjz/SY6oeQ2jyYDJ.53KbVAGtbk49Jq', 'test', 'student', 65, '2023-06-15 17:00:00'),
('test', '$2y$10$AGgIkveRUQ9xSb/75oOnqO8RReMMGhKHmMR318mobmt0.duVkZs3G', 'test', 'student', 66, '2023-06-15 17:00:00'),
('test', '$2y$10$Z.rp7ZiVU27PqgkhCDCXIu9gl/NeuOw6cuMPBe6EBWFC.3.CnUqLW', 'test', 'student', 67, '2023-06-15 17:00:00'),
('test', '$2y$10$uFzFd4j4/4oq5QlabOY7XeplLx/yUwjf3Gr81glUxwgiRGdJUQa3e', 'test', 'student', 68, '2023-06-15 17:00:00'),
('test', '$2y$10$NC3.5yG7r08hf0JRIKq2aOQLpQ9NVF7/EU2zdR2zn2CxyWjc1oHR2', 'test', 'student', 69, '2023-06-15 17:00:00'),
('test', '$2y$10$kFdMv4YpS1UZkj0prECM5OBeISZyjnOmNvyeVut09Eh3oP0WGV.NO', 'test', 'student', 70, '2023-06-15 17:00:00'),
('test', '$2y$10$QWnAWm./AcwDD32LshFi3eB3e3ltnuE7fnTMqxDeeE/7npCZ.RiYS', 'test', 'student', 71, '2023-06-15 17:00:00'),
('test', '$2y$10$3z3/MlgRleRu9GKimrip8OIFFb6zS9Zd3p35eHUtA0YDoLE6w3b5W', 'test', 'student', 72, '2023-06-15 17:00:00'),
('test', '$2y$10$tTno9GBpgEUvPALTxtlkI.nxAXs/FnDiSxD/KPbNwTpDADmnNo1O.', 'test', 'student', 73, '2023-06-15 17:00:00'),
('test', '$2y$10$bRaWIOidPIKzrvT34RL4o.wfGWGVKYfcJNou6GvQySUm/.TO.XV9.', 'test', 'student', 74, '2023-06-15 17:00:00'),
('test', '$2y$10$7CExrX1C0HmEVbNxqO4Jn.JXfM1Far13ndC6TaV3OhTQgjkskN5nS', 'test', 'student', 75, '2023-06-15 17:00:00'),
('test', '$2y$10$GUkHicFkGwkRTXbZcitFjusFS8hFg2gESQaZ4GLEiTFNlTIekwzX.', 'test', 'student', 76, '2023-06-15 17:00:00'),
('test', '$2y$10$aL8i29bB5.qqguxAEDfQVOZfawaJEGp2Kn/9q2jFKQtO71c4Hs/CC', 'test', 'student', 77, '2023-06-15 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
