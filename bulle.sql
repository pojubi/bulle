-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2021 at 01:29 PM
-- Server version: 10.5.12-MariaDB-1:10.5.12+maria~focal
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'billy', 'billy', '$2y$10$mcYEMHKs3.WCf1ZvJBIoROCr9WZxO4r9quaD2c7JEgHjbocPznZYi');

-- --------------------------------------------------------

--
-- Table structure for table `affiches`
--

CREATE TABLE `affiches` (
  `affiche_id` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `img_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `affiches`
--

INSERT INTO `affiches` (`affiche_id`, `titre`, `prix`, `category_id`, `img_link`) VALUES
(4, 'vieux fourneaux', 'vieux', 2, 'uploads/01-VIEUX-FOURNEAUX-e1480878928900.jpg'),
(5, 'ribauds', '10.00', 8, 'uploads/02-RIBAUDS.jpg'),
(6, 'spirou', '10.00', 4, 'uploads/03-SPIROU.jpg'),
(7, 'buckdanny', '10.00', 3, 'uploads/04-BUCKDANNY.jpg'),
(8, 'luckyluke', '10.00', 3, 'uploads/06-LUCKYLUKE.jpg'),
(9, 'bourreau', '10.00', 3, 'uploads/07-BOURREAU.jpg'),
(10, 'gibrat', '10.00', 3, 'uploads/18-GIBRAT-Cathedrale.jpg'),
(11, 'cestac', '10.00', 8, 'uploads/30-CESTAC-CATHEDRALE.jpg'),
(12, 'oiry', '10.00', 8, 'uploads/2016-OIRY-CATHEDRALE.jpg'),
(13, 'golf-fairway', '10.00', 3, 'uploads/affiche-serigraphie-avril-golf-fairway-librairie-bulle.jpg'),
(14, 'tokyo eau fort', '10.00', 8, 'uploads/affiche-serigraphie-avril-tokyo-eau-forte-librairie-bulle.jpg'),
(15, 'bandit', '10.00', 3, 'uploads/affiche-serigraphie-bandit-gerner-librairie-bulle.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `telephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `nom`, `prenom`, `email`, `message`, `date`, `telephone`) VALUES
(4, 'vins', 'vino', 'vans@vino.com', 'luh you', '2021-10-01 13:00:13', '745854587');

-- --------------------------------------------------------

--
-- Table structure for table `dedicaces`
--

CREATE TABLE `dedicaces` (
  `dedicace_id` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `date` varchar(100) NOT NULL,
  `heure` varchar(100) NOT NULL,
  `lieu` varchar(250) NOT NULL,
  `img_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dedicaces`
--

INSERT INTO `dedicaces` (`dedicace_id`, `titre`, `date`, `heure`, `lieu`, `img_link`) VALUES
(17, 'blacksad', '12-07-2021', '15:00', 'lieu', 'uploads/BLACKSAD_6.jpg'),
(18, 'couverture', '12-07-2021', '15:00', 'lieu', 'uploads/Couverture-HD.jpg'),
(19, 'davodeau', '12-07-2021', '15:00', 'lieu', 'uploads/davodeau-droit-du-sol.jpg'),
(20, 'gowest', '12-07-2021', '15:00', 'lieu', 'uploads/go-west.jpg'),
(21, 'goldorak1', '12-07-2021', '15:00', 'lieu', 'uploads/Goldorak-1152x1536.jpg-650x867.jpg'),
(22, 'goldorak2', '12-07-2021', '15:00', 'lieu', 'uploads/goldorak-epau.jpg'),
(23, 'jean', '12-07-2021', '15:00', 'lieu', 'uploads/jean-claude-mezieres-1.jpg'),
(24, 'enfants', '12-07-2021', '15:00', 'lieu', 'uploads/Les-Enfants-de-la-Resistance-Tombes-du-ciel.jpg'),
(25, 'ruiz', '12-07-2021', '15:00', 'lieu', 'uploads/olivia-ruiz-commode.jpg'),
(26, 'radcliff', '12-07-2021', '15:00', 'lieu', 'uploads/radcliff-rodolphe.jpg'),
(27, 'reuze', '12-07-2021', '15:00', 'lieu', 'uploads/reuze-cons-650x839.jpg'),
(28, 'saint', '12-07-2021', '15:00', 'lieu', 'uploads/saint-elme-delcourt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dessines`
--

CREATE TABLE `dessines` (
  `dessine_id` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `img_link` varchar(250) NOT NULL,
  `date` varchar(100) NOT NULL,
  `heure` varchar(100) NOT NULL,
  `lieu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dessines`
--

INSERT INTO `dessines` (`dessine_id`, `titre`, `auteur`, `img_link`, `date`, `heure`, `lieu`) VALUES
(6, 'bazin', 'emmanuel bazin', 'uploads/affiche-emmanuel-bazin-librairie-bulle-2.jpg', '12-07-2021', '15:00', 'bazin land'),
(7, 'expo', 'astier', 'uploads/affiche-expo-astier-compr-1-650x997.jpg', '12-07-2021', '15:00', 'design land'),
(8, 'cestac', 'cestac', 'uploads/CESTAC-AFFICHE-2.jpg', '12-07-2021', '15:00', 'Le mans'),
(9, 'bulle', 'espace bis', 'uploads/librairie-bulle-espace-bis-expositions-damien-cuvillier-650x1002.jpg', '12-07-2021', '15:00', 'design land'),
(10, 'ravard', 'nestor', 'uploads/ravard-nestor-burma-librairie-bulle-650x998.jpg', '12-07-2021', '15:00', 'ravard county');

-- --------------------------------------------------------

--
-- Table structure for table `figurines-objets`
--

CREATE TABLE `figurines-objets` (
  `fig-objet_id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `img_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `figurines-objets`
--

INSERT INTO `figurines-objets` (`fig-objet_id`, `titre`, `prix`, `category_id`, `img_link`) VALUES
(4, 'toys', '10.00', 3, 'uploads/figurine-asterix-collectoys-librairie-bulle.jpg'),
(5, 'pile', '10.00', 1, 'uploads/figurine-asterix-pile-de-livres-librairie-bulle.jpg'),
(6, 'sirtaki', '10.00', 8, 'uploads/figurine-asterix-sirtaki-pixi-librairie-bulle.jpg'),
(7, 'blake', '10.00', 3, 'uploads/figurine-blake-et-mortimer-grande-pyramide-pixi-librairie-bulle.jpg'),
(8, 'mortimer', '10.00', 8, 'uploads/figurine-blake-et-mortimer-la-grande-pyramide-pixi-librairie-bulle.jpg'),
(9, 'pixi', '10.00', 3, 'uploads/figurine-coll-asterix-pixi-tu-peux-descendre-de-ton-socle-zerozerosix-librairie-bulle.jpg'),
(10, 'tunique', '10.00', 3, 'uploads/figurine-les-tuniques-bleues-bleus-dans-la-gadoue-librairie-bulle.jpg'),
(11, 'blue', '10.00', 8, 'uploads/figurine-les-tuniques-bleues-les-bleus-tournent-cosque-pixi-librairie-bulle.jpg'),
(12, 'obelix', '10.00', 3, 'uploads/figurine-obelix-char-pixi-librairie-bulle.jpg'),
(13, 'obelix2', '10.00', 8, 'uploads/figurine-tintin-camion-boucherie-sanzot-librairie-bulle.jpg'),
(14, 'camoin', '10.00', 3, 'uploads/figurine-tintin-camion-boucherie-sanzot-librairie-bulle.jpg'),
(15, 'tintin', '10.00', 3, 'uploads/figurine-tintin-tchang-librairie-bulle.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `reply_id` int(11) NOT NULL,
  `post` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`reply_id`, `post`, `date`, `email`) VALUES
(1, 'ok sir', '2021-10-01 15:31:50', 'vans@vino.com'),
(2, 'ok sir', '2021-10-01 15:34:17', 'vans@vino.com'),
(3, 'good', '2021-10-01 15:34:36', 'vans@vino.com'),
(4, 'Enter message here to reply', '2021-10-01 15:35:21', 'vans@vino.com');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `numPlace` varchar(10) NOT NULL,
  `event` varchar(100) NOT NULL,
  `confirmed` varchar(10) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `nom`, `prenom`, `numPlace`, `event`, `confirmed`, `telephone`, `email`) VALUES
(1, 'bogu', 'bogu', '2', 'the skyman', 'yes', '012321232', 'bogu@gmail.com'),
(2, 'felix', 'felix', '5', 'solar earth', 'non', '0212565', 'felix@felix.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `affiches`
--
ALTER TABLE `affiches`
  ADD PRIMARY KEY (`affiche_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `dedicaces`
--
ALTER TABLE `dedicaces`
  ADD PRIMARY KEY (`dedicace_id`);

--
-- Indexes for table `dessines`
--
ALTER TABLE `dessines`
  ADD PRIMARY KEY (`dessine_id`);

--
-- Indexes for table `figurines-objets`
--
ALTER TABLE `figurines-objets`
  ADD PRIMARY KEY (`fig-objet_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `affiches`
--
ALTER TABLE `affiches`
  MODIFY `affiche_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dedicaces`
--
ALTER TABLE `dedicaces`
  MODIFY `dedicace_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `dessines`
--
ALTER TABLE `dessines`
  MODIFY `dessine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `figurines-objets`
--
ALTER TABLE `figurines-objets`
  MODIFY `fig-objet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
