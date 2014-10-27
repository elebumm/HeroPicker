-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2014 at 09:19 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `heroes`
--

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE IF NOT EXISTS `heroes` (
  `NAME` varchar(30) NOT NULL,
  `ATTRIBUTE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`NAME`, `ATTRIBUTE`) VALUES
('Abaddon', 'Strength'),
('Alchemist', 'Strength'),
('Ancient Apparition', 'Intelligence'),
('Anti Mage', 'Agility'),
('Axe', 'Strength'),
('Bane', 'Intelligence'),
('Batrider', 'Intelligence'),
('Beastmaster', 'Strength'),
('Bloodseeker', 'Agility'),
('Bounty Hunter', 'Agility'),
('Brewmaster', 'Strength'),
('Bristleback', 'Strength'),
('Broodmother', 'Agility'),
('Centaur Warrunner', 'Strength'),
('Chaos knight', 'Strength'),
('Chen', 'Intelligence'),
('Clinkz', 'Agility'),
('Clockwerk', 'Strength'),
('Crystal Maiden', 'Intelligence'),
('Dark Seer', 'Intelligence'),
('Dazzle', 'Intelligence'),
('Death Prophet', 'Intelligence'),
('Disruptor', 'Intelligence'),
('Doom', 'Strength'),
('Dragon Knight', 'Strength'),
('Drow Ranger', 'Agility'),
('Earth Spirit', 'Strength'),
('EarthShaker', 'Strength'),
('Elder Titan', 'Strength'),
('Ember Spirit', 'Agility'),
('Enchantress', 'Intelligence'),
('Enigma', 'Intelligence'),
('Faceless Void', 'Agility'),
('Gyrocopter', 'Agility'),
('Huskar', 'Strength'),
('Invoker', 'Intelligence'),
('Io', 'Strength'),
('Jakiro', 'Intelligence'),
('Juggernaut', 'Agility'),
('Keeper of the Light', 'Intelligence'),
('Kunkka', 'Strength'),
('Legion Commander', 'Strength'),
('Leshrac', 'Intelligence'),
('Lich', 'Intelligence'),
('Lifestealer', 'Strength'),
('Lina', 'Intelligence'),
('Lion', 'Intelligence'),
('Lone Druid', 'Agility'),
('Luna', 'Agility'),
('Lycan', 'Strength'),
('Magnus', 'Strength'),
('Medusa', 'Agility'),
('Meepo', 'Agility'),
('Mirana', 'Agility'),
('Morphling', 'Agility'),
('Naga Siren', 'Agility'),
('Nature''s Prophet', 'Intelligence'),
('Necrophos', 'Intelligence'),
('Nightstalker', 'Strength'),
('Nyx Assassin', 'Agility'),
('Ogre Magi', 'Intelligence'),
('Omniknight', 'Strength'),
('Outworld Devourer', 'Intelligence'),
('Phantom Assassin', 'Agility'),
('Phantom Lancer', 'Agility'),
('Phoenix', 'Strength'),
('Puck', 'Intelligence'),
('Pudge', 'Strength'),
('Pugna', 'Intelligence'),
('Queen of Pain', 'Intelligence'),
('Razor', 'Agility'),
('Riki', 'Agility'),
('Rubick', 'Intelligence'),
('Sand King', 'Strength'),
('Shadow Demon', 'Intelligence'),
('Shadow Fiend', 'Agility'),
('Shadow Shaman', 'Intelligence'),
('Silencer', 'Intelligence'),
('Skywrath mage', 'Intelligence'),
('Slardar', 'Strength'),
('Slark', 'Agility'),
('Sniper', 'Agility'),
('Spectre', 'Agility'),
('Spirit Breaker', 'Strength'),
('Storm Spirit', 'Intelligence'),
('Sven', 'Strength'),
('Techies', 'Intelligence'),
('Templar Assassin', 'Agility'),
('Terrorblade', 'Agility'),
('Tidehunter', 'Strength'),
('Timbersaw', 'Strength'),
('Tinker', 'Intelligence'),
('Tiny', 'Strength'),
('Treant Protector', 'Strength'),
('Troll Warlord', 'Agility'),
('Tusk', 'Strength'),
('Undying', 'Strength'),
('Ursa', 'Agility'),
('Vengeful Spirit', 'Agility'),
('Venomancer', 'Agility'),
('Viper', 'Agility'),
('Visage', 'Intelligence'),
('Warlock', 'Intelligence'),
('Weaver', 'Agility'),
('Windranger', 'Intelligence'),
('Witch Doctor', 'Intelligence'),
('Wraith King', 'Strength'),
('Zeus', 'Intelligence');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
 ADD PRIMARY KEY (`NAME`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
