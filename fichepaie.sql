-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 22 juin 2019 à 19:23
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fichepaie`
--

-- --------------------------------------------------------

--
-- Structure de la table `abc_accounts`
--

CREATE TABLE `abc_accounts` (
  `id` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passwordcrypt` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abc_accounts`
--

INSERT INTO `abc_accounts` (`id`, `matricule`, `password`, `passwordcrypt`, `nom`, `prenom`, `email`, `active`) VALUES
(3, '51230', '', '', 'Baati', 'Amel', 'AMEL.BAATI@OMV.COM', 0),
(4, '51231', '', '', 'Ben Ameur', 'Asma', 'ASMA.BENAMEUR@OMV.COM', 0),
(5, '51235', '', '', 'Ben Hadj Salah', 'Chiraz', 'CHIRAZ.BENHADJSALAH@OMV.COM', 0),
(6, '51236', '', '', 'Ben Jemia', 'Radhia', 'RADHIA.BENJEMIA@OMV.COM', 0),
(7, '51242', '', '', 'Blaiech', 'Mohamed Lamine', 'MOHAMEDLAMINE.BLAIECH@OMV.COM', 0),
(8, '51243', '', '', 'Cherif', 'Mahmoud', 'MAHMOUD.CHERIF@OMV.COM', 0),
(9, '51247', '', '', 'Doghri', 'Sihem', 'SIHEM.DOGHRI@OMV.COM', 0),
(10, '51253', '', '', 'Hamdi', 'Abdelmajid', 'ABDELMAJID.HAMDI@OMV.COM', 0),
(11, '51255', '', '', 'Khammassi', 'Lotfi', 'LOTFI.KHAMMASSI@OMV.COM', 0),
(12, '51258', '', '', 'Ayari', 'Noura', 'NOURA.AYARI@OMV.COM', 0),
(13, '51259', '', '', 'Sellami', 'Imen', 'IMEN.SELLAMI@OMV.COM', 0),
(14, '51261', '', '', 'Zorgani', 'Badreddine', 'BADREDDINE.ZORGANI@OMV.COM', 0),
(15, '51666', '', '', 'Sahloul', 'Le?la', 'LEILA.SAHLOUL@OMV.COM', 0),
(16, '51828', '', '', 'Zrelli', 'Amel', 'AMEL.ZERELLI@EXTERNAL.OMV.COM', 0),
(17, '51831', '', '', 'Zribi', 'Nadia', 'NADIA.ZRIBI@OMV.COM', 0),
(18, '52242', '', '', 'Nassri', 'Faten', 'FATEN.NASSRI@OMV.COM', 0),
(19, '52268', '', '', 'Ghrab', 'Farhat', 'FARHAT.GHRAB@OMV.COM', 0),
(20, '52271', '', '', 'Meddeb', 'Mohamed', 'MOHAMED.MEDDEB@OMV.COM', 0),
(21, '52750', '', '', 'Bahrini', 'Hamdi', 'HAMDI.BAHRINI@OMV.COM', 0),
(22, '52833', '', '', 'Moujbani', 'Walid', 'WALID.MOUJBANI@OMV.COM', 0),
(23, '52882', '', '', 'Hamda', 'Mohamed', 'MOHAMED.HAMDA@OMV.COM', 0),
(24, '53020', '', '', 'Frikha', 'Nizar', 'NIZAR.FRIKHA@OMV.COM', 0),
(25, '53026', '', '', 'Ben Said', 'Hela', 'HELA.BENSAID@OMV.COM', 0),
(26, '53311', '', '', 'Rouis', 'Anis', 'ANIS.ROUIS@OMV.COM', 0),
(27, '53461', '', '', 'Trabelsi', 'Khaled', 'KHALED.TRABELSI@OMV.COM', 0),
(28, '53462', '', '', 'Chabane', 'Hassen', 'HASSEN.CHABANE@OMV.COM', 0),
(29, '53465', '', '', 'Fassatoui', 'Omar', 'OMAR.FASSATOUI@OMV.COM', 0),
(30, '53482', '', '', 'Larbi', 'Mohamed Ali', 'MOHAMED_ALI.LARBI@PETROM.COM', 0),
(31, '53522', '', '', 'El Ouni', 'Insaf', 'INSAF.ELOUNI_AMOR@OMV.COM', 0),
(32, '53673', '', '', 'Chouchane', 'Insaf', 'INSAF.CHOUCHANE@OMV.COM', 0),
(33, '53674', '', '', 'Ben Abdallah', 'Karim', 'KARIM.BEN_ABDALLAH@OMV.COM', 0),
(34, '53678', '', '', 'Bouazzi', 'Hassen', 'HASSEN.BOUAZZI@OMV.COM', 0),
(35, '53679', '', '', 'Affes', 'Bassem', 'BASSEM.AFFES@OMV.COM', 0),
(36, '53680', '', '', 'Zayani', 'Jihene', 'JIHENE.ZAYANI@OMV.COM', 0),
(37, '53681', '', '', 'Belouidhnine', 'Ons', 'ONS.BELOUIDHNINE@OMV.COM', 0),
(38, '53682', '', '', 'Hmida', 'Hichem', 'HICHEM.HMIDA@OMV.COM', 0),
(39, '53683', '', '', 'Zrelli', 'Basma', 'BESMA.ZRELLI@OMV.COM', 0),
(40, '53684', '', '', 'Maaroufi', 'Ikram', 'IKRAM.MAAROUFI@OMV.COM', 0),
(41, '53685', '', '', 'Menzli', 'Slim', 'SLIM.MENZLI@OMV.COM', 0),
(42, '53686', '', '', 'Zaghouani', 'Bilel', 'BILEL.ZAGHOUANI@OMV.COM', 0),
(43, '53689', '', '', 'Lahsini', 'Sami', 'SAMI.LAHSINI@OMV.COM', 0),
(44, '53690', '', '', 'Maghrebi', 'Mohamed', 'MOHAMED.MAGHREBI@OMV.COM', 0),
(45, '53691', '', '', 'Dridi', 'Slim', 'SLIM.DRIDI@OMV.COM', 0),
(46, '53692', '', '', 'Moustaisser', 'Sofien', 'SOUFIENE.MOUSTAISSER@OMV.COM', 0),
(47, '53693', '', '', 'Kilani Jrad', 'Sofiene', 'SOFIENE.JRAD@OMV.COM', 0),
(48, '53694', '', '', 'Glai', 'Mehdi', 'MEHDI.GLAI@OMV.COM', 0),
(49, '53695', '', '', 'Kridagh', 'Adel', 'ADEL.KRIDAGH@OMV.COM', 0),
(50, '53696', '', '', 'El Heni', 'Mohamed', 'MODAHMED.ELHENI@OMV.COM', 0),
(51, '53697', '', '', 'Belhaj yahia', 'Abdelwaheb', 'ABDELWAHEB.BELHADJYAHYA@OMV.COM', 0),
(52, '53698', '', '', 'Tennich', 'Ismaiel', 'ISMAIL.TENNICH@OMV.COM', 0),
(53, '53699', '', '', 'Rahali', 'Sofiene', 'SOFIENE.RAHALI@OMV.COM', 0),
(54, '53700', '', '', 'Ben Mahmoud', 'Hichem', 'HICHEM.BENMAHMOUD@OMV.COM', 0),
(55, '53701', '', '', 'Nasri', 'Faycal', 'FAYCAL.NASRI@OMV.COM', 0),
(56, '53702', '', '', 'Majdoub', 'Youssef', 'YOUSSEF.MEJDOUB@OMV.COM', 0),
(57, '53703', '', '', 'Rhaiem', 'Ouajdi', 'OUAJDI.REHAIEM@OMV.COM', 0),
(58, '53704', '', '', 'Moalla', 'Mehdi', 'MEHDI.MOALLA@OMV.COM', 0),
(59, '53705', '', '', 'Mzoughi', 'Mohamed', 'MOHAMED.MZOUGHI@OMV.COM', 0),
(60, '53706', '', '', 'Bguilli', 'Mbarek', 'MBAREK.BGUILI@OMV.COM', 0),
(61, '53714', '', '', 'Khriji', 'Walid', 'WALID.KHERIJI@OMV.COM', 0),
(62, '53716', '', '', 'Friha', 'Riadh', 'RIADH.FRIHA@OMV.COM', 0),
(63, '53717', '', '', 'Ben Chehida', 'Mahmoud', 'MAHMOUD.BENCHEHIDA@OMV.COM', 0),
(64, '53720', '', '', 'Antir', 'Abdelbasset', 'ABDELBASSET.ANTIR@OMV.COM', 0),
(65, '53721', '', '', 'Elarbi', 'Saber', 'SABER.ELARBI@OMV.COM', 0),
(66, '53722', '', '', 'Hakim', 'Abdelfetteh', 'ABDELFETTEH.HAKIM@OMV.COM', 0),
(67, '53723', '', '', 'Ben Abid', 'Mohamed Aymen', 'AYMEN.BENABID@OMV.COM', 0),
(68, '53729', '', '', 'Guied', 'Belgacem', 'BELGACEM.GUIED@OMV.COM', 0),
(69, '53730', '', '', 'Elakel', 'Radhia', 'RADHIA.ELAKEL@OMV.COM', 0),
(70, '53731', '', '', 'Meftah', 'Aymen', 'AYMEN.MEFTAH@OMV.COM', 0),
(71, '53732', '', '', 'Lachiheb', 'Abdallah', 'ABDALLAH.LACHIHEB@OMV.COM', 0),
(72, '53733', '', '', 'Ouerghemmi', 'Ahmed', 'AHMED.OUERGHEMMI@OMV.COM', 0),
(73, '53734', '', '', 'Bezzina', 'Houssemeddine', 'HOUSSEMEDDINE.BEZZINA@OMV.COM', 0),
(74, '53735', '', '', 'Hlawet', 'Lassaad', 'LASSAD.HLAWET@OMV.COM', 0),
(75, '53736', '', '', 'Bouchouicha', 'Sami', 'SAMI.BOUCHOUICHA@OMV.COM', 0),
(76, '53737', '', '', 'Mhadhbi', 'Sofiene', 'SOFIENE.MHADHBI@OMV.COM', 0),
(77, '53738', '', '', 'Sdiri', 'Salem', 'SALEM.SDIRI@OMV.COM', 0),
(78, '53739', '', '', 'Gaja', 'Abderaouf', 'ABDERRAOUF.GAJA@OMV.COM', 0),
(79, '53740', '', '', 'Wiba', 'Mounir', 'MOUNIR.WIBA@OMV.COM', 0),
(80, '53787', '', '', 'Khemakhem', 'Saber', 'SABER.KHEMAKHEM@OMV.COM', 0),
(81, '53822', '', '', 'Maknine', 'Yosri', 'YOSRI.MAKNINE@OMV.COM', 0),
(82, '53829', '', '', 'Moalla', 'Thamer', 'THAMER.MOALLA@OMV.COM', 0),
(83, '53856', '', '', 'Kardous', 'Riadh', 'RIADH.KARDOUS@OMV.COM', 0),
(84, '53857', '', '', 'Kochkar', 'Wajih', 'WAJIH.KOCHKAR@OMV.COM', 0),
(85, '53885', '', '', 'Habachi', 'Achraf', 'ACHRAF.HABACHI@OMV.COM', 0),
(86, '53887', '', '', 'Ghrab', 'Adel', 'ADEL.GHRAB@OMV.COM', 0),
(87, '53893', '', '', 'Slim', 'Naouel', 'NAOUEL.SLIM@OMV.COM', 0),
(88, '53908', '', '', 'Saidane', 'Hamida', 'HAMIDA.SAIDANE@OMV.COM', 0),
(89, '54008', '', '', 'Ben Chihaoui', 'Jameleddine', 'JAMELEDDINE.BENCHIHAOUI@OMV.COM', 0),
(90, '54011', '', '', 'Chraief', 'Maher', 'MEHER.CHRAIF@OMV.COM', 0),
(91, '54012', '', '', 'Bannouri', 'Tahani', 'TAHANI.BANNOURI@OMV.COM', 0),
(92, '54130', '', '', 'Mekkaoui', 'Skander', 'SKANDER.MAKKAOUI@OMV.COM', 0),
(93, '54145', '', '', 'Ben Messaoud', 'Walid', 'WALID.BENMESSOUD@OMV.COM', 0),
(94, '54224', '', '', 'Saadi', 'Ahmed', 'AHMED.SAADI@OMV.COM', 0),
(95, '54225', '', '', 'Jenhani', 'Myriam', 'MYRIAM.JINHANI@OMV.COM', 0),
(96, '54267', '', '', 'Sahli', 'Ramzi', 'RAMZI.SAHLI@OMV.COM', 0),
(97, '54271', '', '', 'Eleuch', 'Mounir', 'MOUNIR.ELEUCH@OMV.COM', 0),
(98, '54278', '', '', 'Hosni', 'Fakher', 'FAKHER.HOSNI@OMV.COM', 0),
(99, '54279', '', '', 'Hamdi', 'Hela', 'HELA.HAMDI@OMV.COM', 0),
(100, '54280', '', '', 'Omri', 'Abdelkader', 'ABDELKADER.OMRI@OMV.COM', 0),
(101, '54281', '', '', 'Mzoughi', 'Wala', 'WALA.MZOUGHI@OMV.COM', 0),
(102, '54286', '', '', 'Klaa', 'Khalifa', 'KHALIFA.KLAA@OMV.COM', 0),
(103, '54352', '', '', 'Ben Hamouda', 'Radhouane', 'RADHOUAN.BENHAMMOUDA@OMV.COM', 0),
(104, '54368', '', '', 'Bouziani', 'Aymen', 'AYMEN.BOUZIANI@OMV.COM', 0),
(105, '54369', '', '', 'Ballouchi', 'Lamia', 'LAMIA.BALLOUCHI@OMV.COM', 0),
(106, '54397', '', '', 'Somrani', 'Chawki', 'CHAOUKI.SOMRANI@OMV.COM', 0),
(107, '54398', '', '', 'Megdich', 'Khamyes', 'KHMAYES.MEGDICH@OMV.COM', 0),
(108, '54399', '', '', 'Yahyaoui', 'Mohamed', 'MOHAMED.YAHYAOUI@OMV.COM', 0),
(109, '54400', '', '', 'Akrout', 'Yacine', 'YACINE.AKROUT@OMV.COM', 0),
(110, '54402', '', '', 'Maaned', 'Bechir', 'BECHIR.MAANED@OMV.COM', 0),
(111, '54403', '', '', 'Beldi', 'Alaaeddine', 'ALAAEDDINE.BELDI@OMV.COM', 0),
(112, '54404', '', '', 'Mestayser', 'Yahia', 'YAHIA.MOUSTAISSER@OMV.COM', 0),
(113, '54405', '', '', 'Hazel', 'Naoufel', 'NAOUFEL.HAZEL@OMV.COM', 0),
(114, '54406', '', '', 'Zarati', 'Kamel', 'KAMEL.ZARATI@OMV.COM', 0),
(115, '54407', '', '', 'Bousdira', 'Zakaria', 'ZAKARIA.BOUSDIRA@OMV.COM', 0),
(116, '54408', '', '', 'Mhazres', 'Mohamed Ali', 'MEDALI.MHAZRIS@OMV.COM', 0),
(117, '54409', '', '', 'Sassi', 'Mohamed', 'MOHAMED.SASSI@OMV.COM', 0),
(118, '54410', '', '', 'El Kar', 'Abdelkarim', 'ABDELKARIM.ELKAR@OMV.COM', 0),
(119, '54411', '', '', 'Montasser', 'Khaled', 'KHALED.MONTASSER@OMV.COM', 0),
(120, '54412', '', '', 'Souid', 'Mohamed', 'MOHAMED.SOUID@OMV.COM', 0),
(121, '54413', '', '', 'Chelly', 'Mohamed Aymen', 'MOHAMED_AYMEN.CHILLI@OMV.COM', 0),
(122, '54415', '', '', 'Driss', 'Fares', 'FARES.DRISS@OMV.COM', 0),
(123, '54416', '', '', 'Sehili', 'Wafa', 'WAFA.SEHILI@OMV.COM', 0),
(124, '54417', '', '', 'Adouani', 'Ferid', 'FERID.ADOUANI@OMV.COM', 0),
(125, '54418', '', '', 'Sellami', 'Slim', 'SLIM.SELLAMI@OMV.COM', 0),
(126, '54431', '', '', 'Ourir', 'Akram', 'AKRAM.OURIR@OMV.COM', 0),
(127, '54464', '', '', 'Trabelsi', 'Amel', 'AMEL.TRABELSI@OMV.COM', 0),
(128, '54486', '', '', 'Troudi', 'Habib', 'HABIB.TROUDI@OMV.COM', 0),
(129, '54524', '', '', 'Bejaoui', 'Abdelhamid', 'ABDELHAMID.BEJAOUI@OMV.COM', 0),
(130, '54526', '', '', 'Bouchkara', 'Chourouk', 'CHOUROUK.BOUCHKARA@OMV.COM', 0),
(131, '54527', '', '', 'Mamlouk', 'Myriam', 'MYRIAM.MAMLOUK@OMV.COM', 0),
(132, '54571', '', '', 'Saidi', 'Sara', 'SARRA.SAIDI@OMV.COM', 0),
(133, '54610', '', '', 'Menzli', 'Karim', 'KARIM.MENZLI@OMV.COM', 0),
(134, '54626', '', '', 'Souei', 'Fares', 'FARES.SOUEI@OMV.COM', 0),
(135, '54627', '', '', 'Bounouh', 'Sami', 'SAMI.BOUNOUH@OMV.COM', 0),
(136, '54628', '', '', 'Trabelsi', 'Hatem', 'HATEM.TRABELSI@OMV.COM', 0),
(137, '54629', '', '', 'Knaissi', 'Marouene', 'MARWEN.KNEICI@OMV.COM', 0),
(138, '54630', '', '', 'Gmati', 'Khaoula', 'KHAOULA.GMATI@OMV.COM', 0),
(139, '54631', '', '', 'Bejaoui', 'Jihene', 'JIHENE.BEJAOUI@OMV.COM', 0),
(140, '54632', '', '', 'Hammi', 'Myriam', 'MYRIAM.HAMMI@OMV.COM', 0),
(141, '54646', '', '', 'Ezzine', 'Taieb', 'TAIEB.EZZINE@OMV.COM', 0),
(142, '54675', '', '', 'Filali', 'Olfa', 'OLFA.FILALI@OMV.COM', 0),
(143, '54685', '', '', 'Ben Hmida', 'Boubaker', 'BOUBAKER.BENHMIDA@OMV.COM', 0),
(144, '54686', '', '', 'Gammoudi', 'Abdelhamid', 'ABDELHAMID.GAMMOUDI@OMV.COM', 0),
(145, '54687', '', '', 'Ghanmi', 'Saad', 'SAAD.GHANMI@OMV.COM', 0),
(146, '54689', '', '', 'Kooli', 'Imen', 'IMEN.KOOLI@OMV.COM', 0),
(147, '54690', '', '', 'Baccar', 'Nada', 'NADA.BACCAR@OMV.COM', 0),
(148, '54691', '', '', 'Fradj', 'Issam', 'ISSAM.FRADJ@OMV.COM', 0),
(149, '54734', '', '', 'Hadj Kacem', 'Mohamed', 'MOHAMED.HADJKACEM@OMV.COM', 0),
(150, '54736', '', '', 'Souelmi', 'Houda', 'HOUDA.SOUELMI@OMV.COM', 0),
(151, '54738', '', '', 'Gasmi', 'Karim', 'KARIM.GASMI@OMV.COM', 0),
(152, '54772', '', '', 'Khalifa', 'Kais', 'KAIS.KHALIFA@OMV.COM', 0),
(153, '54773', '', '', 'Ben Said', 'Mouna', 'MOUNA.BENSAID@OMV.COM', 0),
(154, '54777', '', '', 'Abid', 'Mohamed Amine', 'MOHAMEDAMINE.ABID@OMV.COM', 0),
(155, '54809', '', '', 'Ben Hassine', 'Anis', 'ANIS.BENHASSINE@OMV.COM', 0),
(156, '54810', '', '', 'Souayah', 'Borhene', 'BORHENE.SOUAYAH@OMV.COM', 0),
(157, '54879', '', '', 'Hammouda', 'Ahmed', 'AHMED.HAMMOUDA@OMV.COM', 0),
(158, '54918', '', '', 'Zar', 'Hichem', 'HICHEM.ZAR@OMV.COM', 0),
(159, '55009', '', '', 'Letaief', 'Brahim', 'BRAHIM.LETAIEF@OMV.COM', 0),
(160, '55011', '', '', 'Wamani', 'Donia', 'DONIA.WAMANI@OMV.COM', 0),
(161, '55012', '', '', 'Zaguia', 'Sameh', 'SAMEH.ZAGUIA@OMV.COM', 0),
(162, '55013', '', '', 'Saadaoui', 'Othmen', 'OTHMEN.SAADAOUI@OMV.COM', 0),
(163, '55014', '', '', 'Mnassri', 'Mohamed', 'MOHAMED.MNASSRI@OMV.COM', 0),
(164, '55016', '', '', 'Abdeljawed', 'Fedi', 'FEDI.ABDELJAWED@OMV.COM', 0),
(165, '55049', '', '', 'Chaouachi', 'Aiman', 'AIMAN.CHAOUACHI@OMV.COM', 0),
(166, '55050', '', '', 'Ben Rached', 'Karim', 'KARIM.BENRACHED@OMV.COM', 0),
(167, '55086', '', '', 'Anoun', 'Mohamed Alaeddine', 'MOHAMEDALAEDDINE.ANOUN@OMV.COM', 0),
(168, '55087', '', '', 'Kebaier', 'Dorsaf', 'DORSAF.KEBAIER@OMV.COM', 0),
(169, '55129', '', '', 'Abdelmouleh', 'Jihene', 'JIHENE.ABDELMOULEH@OMV.COM', 0),
(170, '55173', '', '', 'Mnii', 'Sabrine', 'SABRINE.MNII@OMV.COM', 0),
(171, '55175', '', '', 'Touati', 'Haithem', 'HAITHEM.TOUATI@OMV.COM', 0),
(172, '55176', '', '', 'Bouchahoua', 'Farhat', 'FARHAT.BOUCHAHOUA@OMV.COM', 0),
(173, '55178', '', '', 'Jlidi', 'Ali', 'ALI.JLIDI@OMV.COM', 0),
(174, '55179', '', '', 'Ouedhani', 'Ali', 'ALI.OUEDHANI@OMV.COM', 0),
(175, '55180', '', '', 'Amari', 'Tarek', 'TAREK.AMARI@OMV.COM', 0),
(176, '55181', '', '', 'Ben Othmen', 'Mounir', 'MOUNIR.BENOTHMEN@OMV.COM', 0),
(177, '55182', '', '', 'Marzougui', 'Mohamed', 'MOHAMED.MARZOUGUI@OMV.COM', 0),
(178, '55183', '', '', 'Bessnoun', 'Khaled', 'KHALED.BESSNOUN@OMV.COM', 0),
(179, '55184', '', '', 'Ben Amor', 'Laaroussi', 'LAAROUSSI.BENAMOR@OMV.COM', 0),
(180, '55185', '', '', 'Ghandri', 'Miloud', 'MILOUD.GHANDRI@OMV.COM', 0),
(181, '55186', '', '', 'Lassoued', 'Bechir', 'BECHIR.LASSOUED@OMV.COM', 0),
(182, '55187', '', '', 'Marsit', 'Abdelhamid', 'ABDELHAMID.MARSIT@OMV.COM', 0),
(183, '55188', '', '', 'Kaaouana', 'Kaouther', 'KAOUTHER.KAAOUANA@OMV.COM', 0),
(184, '55189', '', '', 'Ben Salah', 'Amine', 'AMINE.BENSALAH@OMV.COM', 0),
(185, '55231', '', '', 'Aloui', 'Farouk', 'FAROUK.ALOUI@OMV.COM', 0),
(186, '55232', '', '', 'Slim', 'Boutheina', 'BOUTHEINA.SLIM@OMV.COM', 0),
(187, '55243', '', '', 'Ben Haj Kacem', 'Houda', 'HOUDA.BENHAJKACEM@OMV.COM', 0),
(188, '55250', '', '', 'Cheour', 'Basma', 'BASMA.CHEOUR@OMV.COM', 0),
(189, '55280', '', '', 'Ben Salah', 'Ammar', 'AMMAR.BENSALAH@OMV.COM', 0),
(190, '55287', '', '', 'Hadiji', 'Mohamed', 'MOHAMED.HADIJI@OMV.COM', 0),
(191, '55288', '', '', 'Jaziri', 'Mohamed Amine', 'MOHAMEDAMINE.JAZIRI@OMV.COM', 0),
(192, '55289', '', '', 'Abid', 'Raida', 'RAIDA.ABID@OMV.COM', 0),
(193, '55317', '', '', 'Jemai', 'Bechir', 'BECHIR.JEMAI@OMV.COM', 0),
(194, '55473', '', '', 'Hmani', 'Moez', 'MOEZ.HMANI@OMV.COM', 0),
(195, '55499', '', '', 'Trabelsi', 'Mohamed', 'MOHAMED.TRABELSI@OMV.COM', 0),
(196, '55547', '', '', 'Boukraine', 'Majdi', 'MAJDI.BOUKRAINE@OMV.COM', 0),
(197, '55553', '', '', 'Medhioub', 'Fatma', 'FATMA.MEDHIOUB@OMV.COM', 0),
(198, '55563', '', '', 'Bessouda', 'Hend', 'HEND.BESSOUDA@OMV.COM', 0),
(199, '55622', '', '', 'Rebaa', 'Hatem', 'HATEM.REBAA@OMV.COM', 0),
(200, '55632', '', '', 'Moalla', 'Anis', 'ANIS.MOALLA@OMV.COM', 0),
(201, '55708', '', '', 'Amiri', 'Issam', 'ISSAM.AMIRI1@OMV.COM', 0),
(202, '55751', '', '', 'Kharrat', 'Mamdouh', 'MAMDOUH.KHARRAT@OMV.COM', 0),
(203, '55799', '', '', 'Ben Moussa', 'Aymen', 'AYMEN.BENMOUSSA@OMV.COM', 0),
(204, '55826', '', '', 'Ghrab', 'Brahim', 'BRAHIM.GHRAB@OMV.COM', 0),
(205, '55827', '', '', 'Gaja', 'Abdelkader', 'ABDELKADER.GAJA@OMV.COM', 0),
(206, '55829', '', '', 'Zrizer', 'Kamel', 'KAMEL.ZRIZER@OMV.COM', 0),
(207, '55832', '', '', 'Ben Mabrouk', 'Atef', 'ATEF.BENMABROUK@OMV.COM', 0),
(208, '55833', '', '', 'Ghrab', 'Mohamed', 'MOHAMED.GHRAB@OMV.COM', 0),
(209, '55838', '', '', 'Ben Achour', 'Mohamed', 'MOHAMED.BENACHOUR@OMV.COM', 0),
(210, '55841', '', '', 'Boussaffa', 'Belgacem', 'BELGACEM.BOUSSAFFA@OMV.COM', 0),
(211, '55842', '', '', 'Ghrab', 'Ezzeddine', 'EZZEDDINE.GHRAB@OMV.COM', 0),
(212, '55843', '', '', 'Houch', 'Hassen', 'HASSEN.HOUCH@OMV.COM', 0),
(213, '55844', '', '', 'Nasri', 'Youssef', 'YOUSSEF.NASRI@OMV.COM', 0),
(214, '55847', '', '', 'Ben Nassr', 'Mokhtar', 'MOKHTAR.BENNASSR@OMV.COM', 0),
(215, '55856', '', '', 'Guied', 'Ali', 'ALI.GUIED@OMV.COM', 0),
(216, '55928', '', '', 'Doghmani', 'Houssem', 'HOUSSEM.DOGHMANI@OMV.COM', 0),
(217, '55946', '', '', 'Hlaoui', 'Sonia', 'SONIA.HLAOUI@OMV.COM', 0),
(218, '55949', '', '', 'Hajjar', 'Issam', 'ISSAM.HAJJAR@OMV.COM', 0),
(219, '56023', '', '', 'Triki', 'Issam', 'ISSAM.TRIKI@OMV.COM', 0),
(220, '56058', '', '', 'Falfoul', 'Aymen', 'AYMEN.FALFOUL@OMV.COM', 0),
(221, '56061', '', '', 'Othmani', 'Nadia', 'NADIA.OTHMANI@OMV.COM', 0),
(222, '56062', '', '', 'Derbal', 'Malek', 'MALEK.DERBAL@OMV.COM', 0),
(223, '56091', '', '', 'Harzalli', 'Saadallah', 'SAADALLAH.HARZALLI@PETROM.COM', 0),
(224, '56092', '', '', 'Hazaien', 'Khaled', 'KHALED.HAZAIEN@OMV.COM', 0),
(225, '56093', '', '', 'Arfaoui', 'Houcine', 'HOUCINE.ARFAOUI@OMV.COM', 0),
(226, '56095', '', '', 'Chibani', 'Oussama', 'OUSSAMA.CHIBANI@OMV.COM', 0),
(227, '56097', '', '', 'Bouazizi', 'Heykel', 'HEYKEL.BOUAZIZI@OMV.COM', 0),
(228, '56098', '', '', 'Walha', 'Houda', 'HOUDA.WALHA@OMV.COM', 0),
(229, '56099', '', '', 'Tounekti', 'Amna', 'AMNA.TOUNEKTI@OMV.COM', 0),
(230, '56137', '', '', 'Ben Slimane', 'Slim', 'SLIM.BENSLIMANE@OMV.COM', 0),
(231, '56138', '', '', 'Bouabdelli', 'Hakim', 'HAKIM.BOUABDELLI@OMV.COM', 0),
(232, '56139', '', '', 'Alouani', 'Wael', 'WAEL.ALOUANI@OMV.COM', 0),
(233, '56140', '', '', 'Hamdi', 'Sabrine', 'SABRINE.HAMDI@OMV.COM', 0),
(234, '56607', '', '', 'Rebai', 'Mohamed Amine', 'MOHAMEDAMINE.REBAI@OMV.COM', 0),
(235, '56611', '', '', 'Sassi', 'Linda', 'LINDA.SASSI@OMV.COM', 0),
(236, '56614', '', '', 'Ben Romdhane', 'Slim', 'SLIM.BENROMDHANE@OMV.COM', 0),
(237, '56616', '', '', 'Beldi', 'Mohamed', 'MOHAMED.BELDI@OMV.COM', 0),
(238, '56632', '', '', 'Mhedhbi', 'Sameh', 'SAMEH.MHEDHBI1@OMV.COM', 0),
(239, '56667', '', '', 'Slama', 'Mohamed', 'MOHAMED.SLAMA@OMV.COM', 0),
(240, '56808', '', '', 'Chehaider', 'Ghassen', 'GHASSEN.CHEHAIDER@OMV.COM', 0),
(241, '56821', '', '', 'Farhat', 'Walid', 'WALID.FARHAT@OMV.COM', 0),
(242, '56845', '', '', 'Sedraoui', 'Ridha', 'RIDHA.SEDRAOUI@OMV.COM', 0),
(243, '56846', '', '', 'Hsiss', 'Farhat', 'FARHAT.HSISS@OMV.COM', 0),
(244, '56847', '', '', 'Gaceur', 'Abdellatif', 'ABDELLATIF.GACEUR@OMV.COM', 0),
(245, '56848', '', '', 'Ben Atia', 'Khaled', 'KHALED.BENATIA@OMV.COM', 0),
(246, '56849', '', '', 'Kebaili', 'Mohamed', 'MOHAMED.KEBAILI@OMV.COM', 0),
(247, '56850', '', '', 'Meguadmini', 'Samir', 'SAMIR.MEGUADMINI@OMV.COM', 0),
(248, '56851', '', '', 'Boussai', 'Abderraouf', 'ABDERRAOUF.BOUSSAI@OMV.COM', 0),
(249, '56852', '', '', 'Banga', 'Abdelwaheb', 'ABDELWAHEB.BANGA@OMV.COM', 0),
(250, '56853', '', '', 'Ben Rached', 'Hassen', 'HASSEN.BENRACHED@OMV.COM', 0),
(251, '56854', '', '', 'Bouallegui', 'Chouaib', 'CHOUAIB.BOUALLEGUI@OMV.COM', 0),
(252, '56855', '', '', 'Oueslati', 'Youssef Marouen', 'YOUSSEFMAROUEN.OUESLATI@OMV.COM', 0),
(253, '56856', '', '', 'Hosni', 'Khaled', 'KHALED.HOSNI@OMV.COM', 0),
(254, '56914', '', '', 'Mansri', 'Ines', 'INES.MANSRI@OMV.COM', 0),
(255, '56954', '', '', 'Messaoud', 'Yassine', 'YASSINE.MESSAOUD@OMV.COM', 0),
(256, '56980', '', '', 'Zouari', 'Ahmed', 'AHMED.ZOUARI@OMV.COM', 0),
(257, '57008', '', '', 'Bakri', 'Hamza', 'HAMZA.BAKRI@OMV.COM', 0),
(258, '57050', '', '', 'Rhouma', 'Naceur', 'NACEUR.RHOUMA@OMV.COM', 0),
(259, '57051', '', '', 'Mostaicer', 'Zouhaier', 'ZOUHAIER.MOSTAICER@OMV.COM', 0),
(260, '57053', '', '', 'Bahri', 'Chahine', 'CHAHINE.BAHRI@OMV.COM', 0),
(261, '57119', '', '', 'Tarhouni', 'Ramzi', 'RAMZI.TARHOUNI@OMV.COM', 0),
(262, '57123', '', '', 'Laroussi', 'Yesmine', 'YESMINE.LAROUSSI@OMV.COM', 0),
(263, '57221', '', '', 'Benzarti', 'Nour Elhayet', 'NOURELHAYET.BENZARTI@OMV.COM', 0),
(264, '57222', '', '', 'Nabli', 'Oussama', 'OUSSAMA.NABLI@OMV.COM', 0),
(265, '57223', '', '', 'Mahfoudhi', 'Kheireddine', 'KHEIREDDINE.MAHFOUDHI@OMV.COM', 0),
(266, '57364', '', '', 'El Ghezal', 'Malek', 'MALEK.ELGHEZAL@OMV.COM', 0),
(267, '57422', '', '', 'Kouki', 'Mohamed Fethi', 'MOHAMEDFETHI.KOUKI@OMV.COM', 0),
(268, '57432', '', '', 'Maraoui', 'Mohamed Nouri', 'MOHAMED.MARAOUI@OMV.COM', 0),
(269, '57502', '', '', 'Haj Kamel', 'Mehdi', 'MEHDI.HAJKAMEL@OMV.COM', 0),
(270, '57519', '', '', 'El Wafi', 'Anis', 'ANIS.ELWAFI@OMV.COM', 0),
(271, '58201', '', '', 'Haouet', 'Mohamed Riadh', 'MOHAMEDRIADH.HAOUET@OMV.COM', 0),
(272, '58204', '', '', 'Missaoui', 'Mohamed Amine', 'MOHAMEDAMINE.MISSAOUI@OMV.COM', 0),
(273, '58205', '', '', 'Rhayma', 'Amel', 'AMEL.RHAYMA@OMV.COM', 0),
(274, '58206', '', '', 'Jabrane', 'Abdelkhalek', 'ABDELKHALEK.JABRANE@OMV.COM', 0),
(275, '58207', '', '', 'Kassouk', 'Ahmed', 'AHMED.KASSOUK@OMV.COM', 0),
(276, '58208', '', '', 'Doudey', 'Fakhri', 'FAKHRI.DOUDEY@OMV.COM', 0),
(277, '58209', '', '', 'Taleb', 'Hakim', 'HAKIM.TALEB@OMV.COM', 0),
(278, '58210', '', '', 'Gmar', 'Mourad', 'MOURAD.GMAR@OMV.COM', 0),
(279, '58211', '', '', 'Aloui', 'Atef', 'ATEF.ALOUI@OMV.COM', 0),
(280, '58212', '', '', 'Hamzi', 'Nader', 'NADER.HAMZI@OMV.COM', 0),
(281, '58213', '', '', 'Alhafi', 'Almabrouk', 'ALMABROUK.ALHAFI@OMV.COM', 0),
(282, '58214', '', '', 'Arfa', 'Ayadi', 'AYADI.ARFA@OMV.COM', 0),
(283, '58215', '', '', 'Joyied', 'Khaled', 'KHALED.JOYIED@OMV.COM', 0),
(284, '58216', '', '', 'Mlik', 'Rami', 'RAMI.MLIK@OMV.COM', 0),
(285, '58217', '', '', 'Chelly Ben Nabil', 'Mahmoud', 'MAHMOUD.CHELLYBENNABIL@OMV.COM', 0),
(286, '58218', '', '', 'Bouricha', 'Marwa', 'MARWA.BOURICHA@OMV.COM', 0),
(287, '58219', '', '', 'Ben Taieb Souid', 'Mohamed', 'MOHAMED.BENTAIEBSOUID@OMV.COM', 0),
(288, '58220', '', '', 'Zemzemi', 'Seifeddine', 'SEIFEDDINE.ZEMZEMI@OMV.COM', 0),
(289, '58221', '', '', 'Ben Atia', 'Youssef', 'YOUSSEF.BENATIA@OMV.COM', 0),
(290, '58222', '', '', 'Khorchani', 'Abdallah', 'ABDALLAH.KHORCHANI@OMV.COM', 0),
(291, '58223', '', '', 'Dhifallah', 'Nizar', 'NIZAR.DHIFALLAH@OMV.COM', 0),
(292, '58224', '', '', 'Bouzir', 'Dhiaeddine', 'DHIAEDDINE.BOUZIR@OMV.COM', 0),
(293, '58225', '', '', 'Jebri', 'Khaled', 'KHALED.JEBRI@OMV.COM', 0),
(294, '58226', '', '', 'Gouider', 'Khaled', 'KHALED.GOUIDER@OMV.COM', 0),
(295, '58227', '', '', 'Salem', 'Ibtihel', 'IBTIHEL.SALEM@OMV.COM', 0),
(296, '58228', '', '', 'El Aidoudi', 'Noureddine', 'NOUREDDINE.ELAIDOUDI@OMV.COM', 0),
(297, '58229', '', '', 'Thabti', 'Ridha', 'RIDHA.THABTI@OMV.COM', 0),
(298, '58230', '', '', 'Khorchani', 'Issam', 'ISSAM.KHORCHANI@OMV.COM', 0),
(299, '58231', '', '', 'Lamred', 'Saiid', 'SAIID.LAMRED@OMV.COM', 0),
(300, '58232', '', '', 'Ghrab', 'Mohsen', 'MOHSEN.GHRAB@OMV.COM', 0),
(301, '58233', '', '', 'Jallali', 'Wided', 'WIDED.JALLALI@OMV.COM', 0),
(302, '58234', '', '', 'Raboudi', 'Oussama', 'OUSSAMA.RABOUDI@OMV.COM', 0),
(303, '58235', '', '', 'Majberi', 'Walid', 'WALID.MAJBERI@OMV.COM', 0),
(304, '58236', '', '', 'Jmil', 'Taher', 'TAHER.JMIL@OMV.COM', 0),
(305, '58237', '', '', 'Laaribi', 'Mohsen', 'MOHSEN.LAARIBI@OMV.COM', 0),
(306, '58238', '', '', 'Toumi', 'Mohamed Ali', 'MOHAMEDALI.TOUMI@OMV.COM', 0),
(307, '58239', '', '', 'Ghrab', 'Tarek Khalil', 'TAREKKHALIL.GHRAB@OMV.COM', 0),
(308, '58240', '', '', 'Wiba', 'Atef', 'ATEF.WIBA@OMV.COM', 0),
(309, '58241', '', '', 'Kahia', 'Mohamed', 'MOHAMED.KAHIA@OMV.COM', 0),
(310, '58242', '', '', 'Khattabi', 'Maher', 'MAHER.KHATTABI@OMV.COM', 0),
(311, '58243', '', '', 'Missaoui', 'Nabil', 'NABIL.MISSAOUI@OMV.COM', 0),
(312, '58244', '', '', 'EL Maiel', 'Mohamed', 'MOHAMED.ELMAIEL@OMV.COM', 0),
(313, '58245', '', '', 'Latrach', 'Marwa', 'MARWA.LATRACH@OMV.COM', 0),
(314, '58253', '', '', 'Dallali', 'Ayachi', 'AYACHI.DALLALI1@OMV.COM', 0),
(315, '58269', '', '', 'Ouardani', 'Slim', 'SLIM.OUARDANI@OMV.COM', 0),
(316, '58317', '', '', 'Ounis', 'Mohamed Amine', 'MOHAMEDAMINE.OUNIS@OMV.COM', 0),
(317, '58415', '', '', 'El Haj Kamel', 'Riadh', 'RIADH.ELHAJKAMEL@OMV.COM', 0),
(318, '58416', '', '', 'Elleuchi', 'Khalil', 'KHALIL.ELLEUCHI@OMV.COM', 0),
(319, '58417', '', '', 'Boussetta', 'Habib', 'HABIB.BOUSSETTA@OMV.COM', 0),
(320, '58418', '', '', 'Faidi', 'Oussama', 'OUSSAMA.FAIDI@OMV.COM', 0),
(321, '58419', '', '', 'Ziadi', 'Mohamed Anouar', 'MOHAMEDANOUAR.ZIADI@OMV.COM', 0),
(322, '58420', '', '', 'Attia', 'Ayoub', 'AYOUB.ATTIA@OMV.COM', 0),
(323, '58421', '', '', 'Marnaoui', 'Sofiane', 'SOFIANE.MARNAOUI@OMV.COM', 0),
(324, '58422', '', '', 'Jedidi', 'Hatem', 'HATEM.JEDIDI@OMV.COM', 0),
(325, '58436', '', '', 'Chaouch', 'Rafik', 'RAFIK.CHAOUCH@OMV.COM', 0),
(326, '58437', '', '', 'Regaya', 'Khalfallah', 'KHALFALLAH.REGAYA@OMV.COM', 0),
(327, '58438', '', '', 'Ben Othman', 'Mohamed Karim', 'MOHAMEDKARIM.BENOTHMAN@OMV.COM', 0),
(328, '58439', '', '', 'Bahri', 'Youssef', 'YOUSSEF.BAHRI@OMV.COM', 0),
(329, '58440', '', '', 'Hajji', 'Wahid', 'WAHID.HAJJI@OMV.COM', 0),
(330, '58441', '', '', 'Harhira', 'Anis', 'ANIS.HARHIRA@OMV.COM', 0),
(331, '58465', '', '', 'Njah', 'Bilal', 'BILAL.NJAH@OMV.COM', 0),
(332, '58466', '', '', 'Guebibia', 'Majdi', 'MAJDI.GUEBIBIA@OMV.COM', 0),
(333, '58467', '', '', 'Ben Othman', 'Jihed', 'JIHED.BENOTHMAN@OMV.COM', 0),
(334, '58468', '', '', 'Rejeb', 'Marwa', 'MARWA.REJEB@OMV.COM', 0),
(335, '58473', '', '', 'Ben Abdeljelil', 'Rochdi', 'ROCHDI.BENABDELJELIL@OMV.COM', 0),
(336, '58474', '', '', 'Youssef', 'Omar', 'OMAR.YOUSSEF@OMV.COM', 0),
(337, '58497', '', '', 'Rfifi', 'Jamel', 'JAMEL.RFIFI@OMV.COM', 0),
(338, '58523', '', '', 'Chaabane', 'Nizar', 'NIZAR.CHAABANE@OMV.COM', 0),
(339, '58525', '', '', 'Hamdi', 'Jamel', 'JAMEL.HAMDI@OMV.COM', 0),
(340, '58526', '', '', 'Ben Mahmoud', 'Mokhles', 'MOKHLES.BENMAHMOUD@OMV.COM', 0),
(341, '58529', '', '', 'Messaoudi', 'Mohamed', 'MOHAMED.MESSAOUDI@OMV.COM', 0),
(342, '58530', '', '', 'Hmaydi', 'Mohamed Karim', 'MOHAMEDKARIM.HMAYDI@OMV.COM', 0),
(343, '58531', '', '', 'Daffef', 'Mourad', 'MOURAD.DAFFEF@OMV.COM', 0),
(344, '58532', '', '', 'Lasram', 'Tahar', 'TAHAR.LASRAM@OMV.COM', 0),
(345, '58545', '', '', 'Ghannouchi', 'Issam', 'ISSAM.GHANNOUCHI@OMV.COM', 0),
(346, '58606', '', '', 'Ben Abdessamad', 'Mohamed Ali', 'MOHAMEDALI.BENABDESSAMAD@OMV.COM', 0),
(347, '58607', '', '', 'Jabnoun', 'Sami', 'SAMI.JABNOUN@OMV.COM', 0),
(348, '59039', 'C}O~1MkaQr', 'a24f2e58f01b80e2a6dd0d83a90cf225', 'Nasri', 'Sami', 'SAMI.NASRI@OMV.COM', 1),
(352, '500001', 'Metallica@123', '43db90711d23dd6ab69f4e4929799869', 'Hatem', 'Dridi', 'dridihatem@gmail.com', 0);

-- --------------------------------------------------------

--
-- Structure de la table `abc_administrator`
--

CREATE TABLE `abc_administrator` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `passMd5` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abc_administrator`
--

INSERT INTO `abc_administrator` (`id`, `login`, `pass`, `passMd5`, `type`, `etat`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `abc_fiche`
--

CREATE TABLE `abc_fiche` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `mois` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL,
  `type` int(11) NOT NULL COMMENT '1- fiche ; 2- retenu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abc_fiche`
--

INSERT INTO `abc_fiche` (`id`, `id_client`, `mois`, `annee`, `pdf`, `date_creation`, `type`) VALUES
(1, 164, 1, 2018, '', '2019-06-22 11:41:39', 0),
(2, 124, 2, 2019, '59381ecafe595a6551569eb7e4aa2f91.pdf', '2019-06-22 11:41:39', 0),
(3, 348, 2, 2019, '59381ecafe595a6551569eb7e4aa2f91.pdf', '2019-06-22 16:24:06', 1),
(4, 164, 2, 2019, '59381ecafe595a6551569eb7e4aa2f91.pdf', '2019-06-22 16:41:54', 2);

-- --------------------------------------------------------

--
-- Structure de la table `abc_message`
--

CREATE TABLE `abc_message` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `lu` tinyint(1) NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abc_accounts`
--
ALTER TABLE `abc_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `abc_administrator`
--
ALTER TABLE `abc_administrator`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `abc_fiche`
--
ALTER TABLE `abc_fiche`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `abc_message`
--
ALTER TABLE `abc_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abc_accounts`
--
ALTER TABLE `abc_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT pour la table `abc_administrator`
--
ALTER TABLE `abc_administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `abc_fiche`
--
ALTER TABLE `abc_fiche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `abc_message`
--
ALTER TABLE `abc_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
