-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2018 at 07:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medileaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `contributor`
--

CREATE TABLE `contributor` (
  `contributor_id` int(6) NOT NULL,
  `contributor_username` varchar(50) NOT NULL,
  `contributor_password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contributor_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contributor`
--

INSERT INTO `contributor` (`contributor_id`, `contributor_username`, `contributor_password`, `name`, `contributor_level`) VALUES
(1, 'someone@medileaf.com', 'abc123', 'Someone', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `plant_id` int(6) NOT NULL,
  `plant_name` varchar(30) NOT NULL,
  `plant_family` varchar(50) NOT NULL,
  `scientific_name` varchar(50) NOT NULL,
  `nativity` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `plant_image_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`plant_id`, `plant_name`, `plant_family`, `scientific_name`, `nativity`, `description`, `plant_image_link`) VALUES
(1, 'Chamomile', 'Asteraceae', 'Chamomilla', 'Western Europe, India, Western Asia', 'The chamomile flowering plant has a long tradition of using as an important herb. Its beautiful flowers contain a number of volatile oils including bisabolol, matricin, bisabolol A and Bisabolol B. Chamomile can heal many diseases with no side effects.', 'https://cdn4.themysteriousworld.com/wp-content/uploads/2013/12/chamomile.webp'),
(2, 'Dandelion', 'Asteraceae', 'Taraxacum officinale', 'Europe, Asia', 'The flowers, stem and leaves of dandelion plants also used in production of a number of medicines. Dandelion is a rich source of vitamins and nutrients. It is also used to make wine and coffee substitutes.', 'https://cdn2.themysteriousworld.com/wp-content/uploads/2013/12/dadelion.webp'),
(3, 'Coneflower', ' Echinacea', 'Asteraceae', 'Eastern and central North America', 'It is a popular herb in the world. The leaves, flowers, stems and roots of echinacea can be used for medical purposes. This herb works as active chemicals in your body and fight against fungus, reduce flu and inflammation.', 'https://cdn3.themysteriousworld.com/wp-content/uploads/2013/12/echinacea.webp'),
(4, 'Cayenne pepper', 'Solanaceae', 'Capsicum annuum', 'Tropical and temperate zones', 'Used as flavor for many dishes. It is cultivated from various part of the world. Also used as a herb from old time onward. Helps to stimulate the blood circulation, nutrient absorption power of the body and restoration of digestive secretions.', 'https://cdn3.themysteriousworld.com/wp-content/uploads/2013/12/cayene-pepper.webp'),
(5, 'Peppermint', 'Lamiaceae', 'Mentha x piperita', 'Europe, Middle East', 'Hybrid plant mainly cultivated in Europe. Peppermint oil is widely used as food flavor. This plant also has a calming effect and offers many other health benefits. Peppermint also has anti-bacterial and anti-fungal properties. ', 'https://cdn3.themysteriousworld.com/wp-content/uploads/2013/12/peppermint.webp'),
(6, 'Sage', 'Lamiaceae', 'Salvia officinalis', 'Mediterranean region', 'A powerful herb with beautiful flowers and soft leafs. This plant grows in home gardens. The stem, flower and leaves of sage can cure a number of diseases in an effective way. The sage is very rich in nutrients and antioxidants.', 'https://cdn.themysteriousworld.com/wp-content/uploads/2013/12/sage.webp'),
(7, 'Lady fern', 'Athyriaceae', 'Athyrium filix-femina', 'Northern Hemisphere', 'A long, light greenly plant native to northern hemisphere. It is commonly used for decorations and to make a number of recipes. Lady Ferns can also power to heal a number of diseases. The roots and stems of lady ferns are used for medicinal purposes.', 'https://cdn3.themysteriousworld.com/wp-content/uploads/2013/12/lady-ferns.webp'),
(8, 'Catnip', 'Lamiaceae', 'Nepeta cataria', 'Southern and eastern Europe, Middle East, central Asia, and parts of China', 'Widely popular in the world because of its health benefits. It is a powerful detoxifier, help to sweat out toxic elements from your body. One of best natural medicine for headache and migraine. Also provides quick relief from toothache.', 'https://cdn2.themysteriousworld.com/wp-content/uploads/2013/12/catnip.webp'),
(9, 'Spinach', 'Amaranthaceae', 'Spinacia oleracea', 'Central and western Asia', 'This crispy, leafy vegetable has powerful healing ability. It is a great source of vitamins and minerals. Spinach contains Vitamin K, Vitamin A, Manganese, Folate, Magnesium, Iron, Vitamin C, Vitamin B1, Zinc, Phosphorous, Vitamin B3 and Selenium.', 'https://cdn.themysteriousworld.com/wp-content/uploads/2013/12/Spinach.webp'),
(10, 'Garlic', 'Amaryllidaceae', 'Allium sativum', 'Central Asia and northeastern Iran', 'It can heal a wide range of diseases. It is low in calories and rich in nutrients. Garlic contains Vitamin C, Vitamin B6, Manganese and Fiber. The sulphur rich ,strong pungent smell of garlic also can keep away insects and even snakes.', 'https://cdn2.themysteriousworld.com/wp-content/uploads/2013/12/garlic.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contributor`
--
ALTER TABLE `contributor`
  ADD PRIMARY KEY (`contributor_id`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`plant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contributor`
--
ALTER TABLE `contributor`
  MODIFY `contributor_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `plant_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
