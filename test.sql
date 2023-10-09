-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 26 sep. 2023 à 16:32
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `nas`
--

CREATE TABLE `nas` (
  `id` int(11) NOT NULL,
  `nasname` varchar(128) NOT NULL,
  `shortname` varchar(32) DEFAULT NULL,
  `type` varchar(30) DEFAULT 'other',
  `ports` int(11) DEFAULT NULL,
  `secret` varchar(60) NOT NULL DEFAULT 'secret',
  `server` varchar(64) DEFAULT NULL,
  `community` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT 'RADIUS Client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `nas`
--

INSERT INTO `nas` (`id`, `nasname`, `shortname`, `type`, `ports`, `secret`, `server`, `community`, `description`) VALUES
(1, 'localhost', 'APL', 'other', 10, 'secret123', '', NULL, 'RADIUS Client'),
(3, '10.217.16.28', 'Test AP', 'other', NULL, 'secret', NULL, NULL, 'RADIUS Client'),
(4, '192.168.1.1', 'AP pfsense LAN ', 'other', NULL, 'secret', NULL, NULL, 'RADIUS Client');

-- --------------------------------------------------------

--
-- Structure de la table `radacct`
--

CREATE TABLE `radacct` (
  `radacctid` bigint(20) NOT NULL,
  `acctsessionid` varchar(64) NOT NULL DEFAULT '',
  `acctuniqueid` varchar(32) NOT NULL DEFAULT '',
  `username` varchar(64) NOT NULL DEFAULT '',
  `realm` varchar(64) DEFAULT '',
  `nasipaddress` varchar(15) NOT NULL DEFAULT '',
  `nasportid` varchar(15) DEFAULT NULL,
  `nasporttype` varchar(32) DEFAULT NULL,
  `acctstarttime` datetime DEFAULT NULL,
  `acctupdatetime` datetime DEFAULT NULL,
  `acctstoptime` datetime DEFAULT NULL,
  `acctinterval` int(11) DEFAULT NULL,
  `acctsessiontime` int(10) UNSIGNED DEFAULT NULL,
  `acctauthentic` varchar(32) DEFAULT NULL,
  `connectinfo_start` varchar(50) DEFAULT NULL,
  `connectinfo_stop` varchar(50) DEFAULT NULL,
  `acctinputoctets` bigint(20) DEFAULT NULL,
  `acctoutputoctets` bigint(20) DEFAULT NULL,
  `calledstationid` varchar(50) NOT NULL DEFAULT '',
  `callingstationid` varchar(50) NOT NULL DEFAULT '',
  `acctterminatecause` varchar(32) NOT NULL DEFAULT '',
  `servicetype` varchar(32) DEFAULT NULL,
  `framedprotocol` varchar(32) DEFAULT NULL,
  `framedipaddress` varchar(15) NOT NULL DEFAULT '',
  `framedipv6address` varchar(45) NOT NULL DEFAULT '',
  `framedipv6prefix` varchar(45) NOT NULL DEFAULT '',
  `framedinterfaceid` varchar(44) NOT NULL DEFAULT '',
  `delegatedipv6prefix` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `radacct`
--

INSERT INTO `radacct` (`radacctid`, `acctsessionid`, `acctuniqueid`, `username`, `realm`, `nasipaddress`, `nasportid`, `nasporttype`, `acctstarttime`, `acctupdatetime`, `acctstoptime`, `acctinterval`, `acctsessiontime`, `acctauthentic`, `connectinfo_start`, `connectinfo_stop`, `acctinputoctets`, `acctoutputoctets`, `calledstationid`, `callingstationid`, `acctterminatecause`, `servicetype`, `framedprotocol`, `framedipaddress`, `framedipv6address`, `framedipv6prefix`, `framedinterfaceid`, `delegatedipv6prefix`) VALUES
(1, '7952', 'b173f2d86072117f01def4f77c2c02d1', 'Rabe', '', '10.217.16.19', '', '', '2023-09-14 16:24:30', '2023-09-14 16:24:30', '2023-09-14 16:25:22', NULL, 52, '', '', '', 0, 0, '', '', 'NAS-Reboot', '', '', '', '', '', '', ''),
(7, 'e2d78bea519e27dd', 'd87288d9de104925281714d3dc3166c5', '08:00:27:2f:c1:16', '', '192.168.1.1', '2000', 'Ethernet', '2023-09-25 14:42:22', '2023-09-25 14:42:22', '2023-09-25 14:42:49', NULL, 22, 'RADIUS', '', '', 3968268, 263312, '08:00:27:2f:c1:16:pfSense.labs.tech', '08:00:27:18:f1:a9', 'NAS-Request', 'Login-User', '', '192.168.1.5', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `radcheck`
--

CREATE TABLE `radcheck` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(64) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '==',
  `value` varchar(253) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `radcheck`
--

INSERT INTO `radcheck` (`id`, `username`, `attribute`, `op`, `value`) VALUES
(1, '08:00:27:18:f1:a9', 'Cleartext-Password', ':=', '123456789'),
(3, '04:7c:16:93:f1:f0', 'Cleartext-Password', ':=', '12345'),
(4, '00:00:00:00:00', 'Cleartext-Password', ':=', '1234'),
(5, '08:00:27:2f:c1:16', 'Cleartext-Password', ':=', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `radgroupcheck`
--

CREATE TABLE `radgroupcheck` (
  `id` int(10) UNSIGNED NOT NULL,
  `groupname` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(64) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '==',
  `value` varchar(253) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `radgroupreply`
--

CREATE TABLE `radgroupreply` (
  `id` int(10) UNSIGNED NOT NULL,
  `groupname` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(64) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '=',
  `value` varchar(253) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `radmacauth`
--

CREATE TABLE `radmacauth` (
  `id` int(11) NOT NULL,
  `macaddr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `radmacauth`
--

INSERT INTO `radmacauth` (`id`, `macaddr`) VALUES
(1, '08:00:27:18:f1:a9'),
(2, '04:7C:16:93:F1:F0'),
(3, '08:00:27:2f:c1:16');

-- --------------------------------------------------------

--
-- Structure de la table `radpostauth`
--

CREATE TABLE `radpostauth` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `pass` varchar(64) NOT NULL DEFAULT '',
  `reply` varchar(32) NOT NULL DEFAULT '',
  `authdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `radpostauth`
--

INSERT INTO `radpostauth` (`id`, `username`, `pass`, `reply`, `authdate`) VALUES
(2, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(3, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(5, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(6, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(7, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(8, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(9, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(10, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(11, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(12, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(13, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(14, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(15, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(16, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(17, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(18, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(19, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(20, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(21, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(22, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(23, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(24, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(25, 'Rabe', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(26, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(27, 'Rabe', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(28, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(29, 'Rabe', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(30, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(31, 'Rabe', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(32, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(33, 'Rabe', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(34, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(35, 'Rabe', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(36, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(37, 'Rabe', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(38, 'Rabe', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(39, 'Rabe', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(40, '08:00:27:18:f1:a9', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(41, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(42, '04:7c:16:93:f1:f0', '', 'Access-Reject', '2023-09-26 10:40:15'),
(43, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(44, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(45, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(46, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(47, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(48, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(49, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(50, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(51, '04:7c:16:93:f1:f0', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(52, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(53, '04:7c:16:93:f1:f0', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(54, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(55, '04:7c:16:93:f1:f0', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(56, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(57, '04:7c:16:93:f1:f0', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(58, '04:7c:16:93:f1:f0', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(59, '04:7c:16:93:f1:f0', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(60, '08:00:27:18:f1:a9', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(61, '08:00:27:18:f1:a9', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(62, '08:00:27:18:f1:a9', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(63, '08:00:27:18:f1:a9', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(64, '08:00:27:18:f1:a9', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(65, '08:00:27:18:f1:a9', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(66, '08:00:27:18:f1:a9', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(67, '08:00:27:18:f1:a9', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(68, '08:00:27:18:f1:a9', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(69, '08:00:27:18:f1:a9', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(70, '08:00:27:18:f1:a9', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(71, '08:00:27:18:f1:a9', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(72, '08:00:27:18:f1:a9', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(73, '00:00:00:00:00', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(74, '00:00:00:00:00', '123456789', 'Access-Reject', '2023-09-26 10:40:15'),
(75, '08:00:27:18:f1:a9', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(76, '08:00:27:18:f1:a9', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(77, '08:00:27:18:f1:a9', '123456789', 'Access-Accept', '2023-09-26 10:40:15'),
(78, '00:00:00:00:00', '1234', 'Access-Reject', '2023-09-26 10:40:15'),
(79, '08:00:27:2f:c1:16', '12345', 'Access-Accept', '2023-09-26 10:40:15'),
(80, '08:00:27:2f:c1:16', '12345', 'Access-Accept', '2023-09-26 10:40:15'),
(81, '08:00:27:18:f1:a9', '123456789', 'Access-Accept', '2023-09-26 10:40:15');

-- --------------------------------------------------------

--
-- Structure de la table `radreply`
--

CREATE TABLE `radreply` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(64) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '=',
  `value` varchar(253) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `radreply`
--

INSERT INTO `radreply` (`id`, `username`, `attribute`, `op`, `value`) VALUES
(1, 'Rabe', 'Reply-Message', ':=', '\"oke fa nety\"');

-- --------------------------------------------------------

--
-- Structure de la table `radusergroup`
--

CREATE TABLE `radusergroup` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `groupname` varchar(64) NOT NULL DEFAULT '',
  `priority` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `nas`
--
ALTER TABLE `nas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nasname` (`nasname`);

--
-- Index pour la table `radacct`
--
ALTER TABLE `radacct`
  ADD PRIMARY KEY (`radacctid`),
  ADD UNIQUE KEY `acctuniqueid` (`acctuniqueid`),
  ADD KEY `username` (`username`),
  ADD KEY `framedipaddress` (`framedipaddress`),
  ADD KEY `framedipv6address` (`framedipv6address`),
  ADD KEY `framedipv6prefix` (`framedipv6prefix`),
  ADD KEY `framedinterfaceid` (`framedinterfaceid`),
  ADD KEY `delegatedipv6prefix` (`delegatedipv6prefix`),
  ADD KEY `acctsessionid` (`acctsessionid`),
  ADD KEY `acctsessiontime` (`acctsessiontime`),
  ADD KEY `acctstarttime` (`acctstarttime`),
  ADD KEY `acctinterval` (`acctinterval`),
  ADD KEY `acctstoptime` (`acctstoptime`),
  ADD KEY `nasipaddress` (`nasipaddress`);

--
-- Index pour la table `radcheck`
--
ALTER TABLE `radcheck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`(32));

--
-- Index pour la table `radgroupcheck`
--
ALTER TABLE `radgroupcheck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupname` (`groupname`(32));

--
-- Index pour la table `radgroupreply`
--
ALTER TABLE `radgroupreply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupname` (`groupname`(32));

--
-- Index pour la table `radmacauth`
--
ALTER TABLE `radmacauth`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `radpostauth`
--
ALTER TABLE `radpostauth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`(32));

--
-- Index pour la table `radreply`
--
ALTER TABLE `radreply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`(32));

--
-- Index pour la table `radusergroup`
--
ALTER TABLE `radusergroup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`(32));

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `nas`
--
ALTER TABLE `nas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `radacct`
--
ALTER TABLE `radacct`
  MODIFY `radacctid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `radcheck`
--
ALTER TABLE `radcheck`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `radgroupcheck`
--
ALTER TABLE `radgroupcheck`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `radgroupreply`
--
ALTER TABLE `radgroupreply`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `radmacauth`
--
ALTER TABLE `radmacauth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `radpostauth`
--
ALTER TABLE `radpostauth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `radreply`
--
ALTER TABLE `radreply`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `radusergroup`
--
ALTER TABLE `radusergroup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
