-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 05 feb 2021 om 09:04
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamewiki`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `naam` varchar(45) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`naam`, `comment`) VALUES
('hallo', 'hallo'),
('Henk', 'saai artikel'),
('Peter', 'Goed artikel!'),
('pipo', 'hallo');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `candle` text,
  `crucifix` text,
  `emfreader` text,
  `flashlight` text,
  `book` text,
  `glowstick` text,
  `hmc` text,
  `lightsensor` text,
  `lighter` text,
  `motionsensor` text,
  `microphone` text,
  `camera` text,
  `salt` text,
  `sanitypills` text,
  `smudgesticks` text,
  `soundsensor` text,
  `spiritbox` text,
  `sflashlight` text,
  `thermometer` text,
  `tripod` text,
  `uvlight` text,
  `videocamera` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `maps`
--

DROP TABLE IF EXISTS `maps`;
CREATE TABLE IF NOT EXISTS `maps` (
  `tanglewood` text,
  `edgefield` text,
  `ridgeview` text,
  `grafton` text,
  `bleasdale` text,
  `brownstone` text,
  `prison` text,
  `asylum` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `maps`
--

INSERT INTO `maps` (`tanglewood`, `edgefield`, `ridgeview`, `grafton`, `bleasdale`, `brownstone`, `prison`, `asylum`) VALUES
('Tanglewood Street House is one of the locations players can visit and is also the location of the game tutorial. It is a small single-story home with three bedrooms and two bathrooms. (One in the bedroom by the living room). Tanglewood can often make for a swift investigation due to its small size, but the open floorplan and only two accessible coat-closets make it very dangerous during a Hunt. This location features a working, interactable television with a remote. It also features several candles that can be lit using a Lighter.', 'A two story, six-bedroom house with a basement. Edgefield Street House is a congested, claustrophobic environment. Despite this, there are plenty of hiding spaces during a Hunt, as a room to hide in is always a few paces away. Its tight hallways can often make it difficult to see past fellow investigators, and a team member may be encouraged to set up Video Cameras and observe key investigative details from the Van.', 'Ridgeview Road House is one of the Locations in Phasmophobia, being one of the game\'s three Small maps during Early Access. It is a two-story, four-bedroom house with a garage and basement. It is quite congested with many linear hallways, with most of the rooms either being small, having numerous obstacles, or both. However, the presence of closets and multiple sub-rooms to dive into provides plenty of safety for a Hunt. After the last update, you cannot hide between the black car and the garage door during ghost hunt. As of the current version, a tripod-mounted video camera can be placed on the outside window looking into the Kitchen, allowing for it to be safely monitored even before the door is opened.', 'Grafton Farmhouse is one of the Small maps in Phasmophobia, and one of the two variants of the Farmhouse, alongside Bleasdale Farmhouse.', 'Bleasdale Farmhouse is one of the Small maps in Phasmophobia, and one of the two variants of the Farmhouse, alongside Grafton Farmhouse.', 'Shut down due to unnatural deaths, this isolated school has been abandoned for decades. Brownstone High School is the first medium-sized map added during early access. Long decrepit hallways, ominous classrooms, grotesque bathrooms, and various vacant office spaces fill the place with a solemn atmosphere. Its square shape and general symmetry can make it intuitive to navigate, and depending on the ghost, it may be easier to run during a hunt than to hide. Often, the faint ringing of a telephone can be heard traveling among the halls. Follow the sound and you just might find the Ghost Room. Due to the distance between available entrances and the truck, it is recommended to stage gear close to the building before beginning the mission.', 'The Prison map is a \"medium\" size map — larger than the houses currently in the game, but smaller in the Asylum. As prisons go, this is a facility that\'s definitely on the smaller side; this new map has roughly 50 prison cells in total, along with all of the other facilities necessary to accommodate prisoners.', 'Asylum is the first large map to be added during early access. Being unlocked at level five, its labyrinthine architecture, paired with its endless hallways and corridors, make for an intimidating venture, and even the most experienced paranormal investigator may find themselves getting lost. Global chat, a Strong Flashlight, and Candles placed at key intersections may not be enough to prevent a loss of Sanity in these dark halls, so be sure to pack a lot of Sanity Pills before beginning an investigation.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
