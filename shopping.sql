-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 21, 2020 at 04:38 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `console`
--

DROP TABLE IF EXISTS `console`;
CREATE TABLE IF NOT EXISTS `console` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) NOT NULL,
  `model` varchar(30) NOT NULL,
  `price` varchar(255) NOT NULL,
  `memory` int(10) NOT NULL,
  `storage` int(15) NOT NULL,
  `graphics` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `console`
--

INSERT INTO `console` (`id`, `brand`, `model`, `price`, `memory`, `storage`, `graphics`, `description`, `img`) VALUES
(10, 'nintendo', 'Switch', '300', 2, 32, 'NVIDIA Custom Tegra ', 'The Nintendo Switch is a video game console developed by Nintendo, released worldwide in most regions on March 3, 2017. It is a hybrid console that can be used as a home console and portable device.', '5f39299c6187b5.44983279.png'),
(11, 'playstation', 'playstation one', '50', 0, 0, '3D Geometry Engine', 'The PlayStation, one of a new generation of 32-bit consoles, signaled Sony\'s rise to power in the video game world. Also known as the PS One, the PlayStation used compact discs (CDs), heralding the video game industry\'s move away from cartridges.', '5f394c8d70e680.74919005.png'),
(12, 'playstation', 'playstation two', '70', 1, 0, 'Parallel rendering processor(147 MHz)', 'The PlayStation 2  is a home video game console developed and marketed by Sony Computer Entertainment. ... The PS2 is the best-selling video game console of all time, having sold over 155 million units worldwide, as confirmed by Sony.', '5f3a7b1467e420.03892378.png'),
(13, 'playstation', 'playstation 3', '150', 1, 120, 'RSX “Reality Synthesizer” @ 500MHz', 'The PlayStation 3 is a home video game console developed by Sony Computer Entertainment. It is the successor to PlayStation 2, and is part of the PlayStation brand of consoles. ... It was the first console to use Bluray Disc as its primary storage medium.', '5f3a7c3c2f4924.71506825.png'),
(14, 'playstation', 'playstation 4', '250', 8, 500, 'AMD Radeon based graphics engine', 'The PlayStation 4 (PS4) is an eighth-generation home video game console developed by Sony Computer Entertainment. Announced as the successor to the PlayStation 3 in February 2013, it was launched on November 15 in North America.', '5f3bc5ae9faa77.21319334.png'),
(15, 'xbox', 'xbox 360', '100', 1, 250, '512MB GDDR3 RAM', 'The Xbox 360 is a home video game console developed by Microsoft. As the successor to the original Xbox, it is the second console in the Xbox series', '5f3adf69b900f8.78965784.png'),
(16, 'xbox', 'xbox one', '250', 8, 500, 'AMD Radeon 7790', 'The Microsoft Xbox One system combines a gaming console with the ability to watch television and movie content as well as listen to music or chat with others via Skype.', '5f3bbe360afa87.99181811.png'),
(17, 'xbox', 'xbox 360 slim', '150', 1, 320, 'XGPU at 500 MHz.', 'At E3 2010, Microsoft unveiled an Xbox 360 redesigned. Officially referred to as the \"S\"  Slim, it the latest iteration packs a built-in Wi-Fi, and a new design that\'s about 17 percent smaller than the previous models.', '5f3aff497b4279.64694163.png'),
(18, 'xbox', 'xbox one s', '300', 8, 2000, '1.4 T-FLOPS, 12 compute units', 'The Xbox One S is a slick looking game console that\'s 40 percent smaller than the original. It can display 4K video from streaming services and Ultra HD Blu-rays, and supports HDR contrast.', '5f3afc37dd2e69.06635148.png'),
(19, 'xbox', 'xbox one x', '400', 12, 1000, 'Integrated AMD graphics (6 teraflops)', 'All games look and play great on Xbox One X. But selected titles are optimised to take advantage of the power of Xbox One X with higher resolutions, faster framerates, improved textures and more. These games are Xbox One X Enhanced.', '5f3bc322996912.49718426.png'),
(20, 'playstation', 'playstation 5', '700', 16, 825, 'Custom RDNA 2 (2.23GHz)', 'the PlayStation 5 \"allows for fundamental changes in what a game can be,\" Mark Cerny, Sony\'s lead system architect, told Wired.', '5f3bc3e70ebda8.21146332.png'),
(21, 'xbox', 'xbox series x', '750', 16, 1000, 'AMD RDNA 2 (12 teraflop)', 'Xbox Series X is our fastest, most powerful console ever. This means a high-fidelity gaming experience enclosed in a quiet and bold design, with the ability to discover thousands of games across four generations, all with more playing and less waiting.', '5f3bc494154145.36438746.png'),
(22, 'playstation', 'playstation 4 pro', '300', 8, 1000, 'AMD Radeon (4.20 TFLOPS)', 'The PS4 Pro is Sony\'s newer, more premium console. It plays games in a higher resolution (4K) and often in High Dynamic Range (HDR)', '5f3ad738d34bc7.80506931.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(1, '', 'k@gmail.com', '632524'),
(2, '', 'moha@gmail.com', 'moha');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

DROP TABLE IF EXISTS `mobile`;
CREATE TABLE IF NOT EXISTS `mobile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) NOT NULL,
  `model` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `screen` varchar(40) NOT NULL,
  `camera` int(5) NOT NULL,
  `processor` varchar(30) NOT NULL,
  `memory` int(10) NOT NULL,
  `storage` int(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `brand`, `model`, `price`, `screen`, `camera`, `processor`, `memory`, `storage`, `description`, `img`) VALUES
(19, 'samsung', 'Galaxy Note 20 Ultra', 999, '6.90-inch (1440x3200)', 108, 'Exynos 990 (2.4GHz) octa-core', 12, 256, 'The first to merge a pen with a phone, Galaxy Note is a computer suite in your pocket. This is next-level gaming on mobile. This is a pro-grade 8K camera and editing suite.', '5f3bee55078059.73384366.png'),
(20, 'samsung', 'Galaxy S20 Ultra', 1075, '    6.9\" Quad HD+ (3200x1440)', 108, 'Exynos 990 (2GHz) octa-core', 12, 256, 'Galaxy S20 Ultra. With revolutionary 8K Video Snap, 5G connectivity and Space Zoom up to 100x, the way you capture and share your life will never be the same.', '5f3bf12b4bd237.27884046.png'),
(21, 'huawei', 'Huawei P30 Lite', 200, '6.15 inches', 24, 'HiSilicon Kirin 710', 4, 128, 'HUAWEI P30 Lite Global Version 24MP Triple Rear Camera 6.15 inch 6GB 128GB Kirin 710 Octa core 4G Smartphone.', '5f3bf4ec0b9ac4.73993813.png'),
(22, 'huawei', 'Huawei P30 Pro', 700, '6.47-inch (1080x2340)', 40, 'Kirin 980 (2.6GHz) octa-core', 8, 256, 'Huawei P30 Pro is the latest flagship from the Chinese telecommunications giant in 2019. Huawei\'s P-series is all about photography.', '5f3bf66b173367.10865085.png'),
(23, 'huawei', 'Huawei P40 Lite', 235, '6.5\" 2400 x 1080 ', 64, ' Kirin 820 (2.36 GHz)', 6, 128, 'Finding the best price for the Huawei P40 Lite is no easy task. Here you will find where to buy the Huawei P40 Lite at the best price. Prices are continuously tracked in over 140 stores so that you can find a reputable dealer with the best price', '5f3bf7fbf31c35.04728641.png'),
(24, 'huawei', 'Huawei P40 Pro', 860, '6.58\" 1200 x 2640', 50, 'Kirin 990 (2x2.86 GHz) 8 core', 8, 256, 'Speak for yourself with the Ultra Vision Leica Quad Camera by capturing photos and videos anytime and anywhere you want. Revolutionize your experience of speed and power with the cutting-edge Kirin 990 5G Chipset.', '5f3d937dee76d5.80350920.png'),
(25, 'huawei', 'Huawei Y6 Pro (2019)', 250, '6.09\" IPS 720 x 1560', 13, 'Mediatek MT6761(Quad-core)', 3, 32, 'uawei Y6 Pro 2019 is powered by the Mediatek MT6761 Helio A22 Quad-core 2.0 GHz Cortex-A53 processor. The smartphone comes with a 6.09 inches IPS LCD capacitive touchscreen and 720 x 1560 pixels resolution.', '5f3d94f49a6482.59893140.png'),
(26, 'huawei', 'Huawei Y9 Prime (2019)', 230, '6.59\" IPS 1080 x 2340', 16, 'Kirin 710F (4x2.2 GHz)', 4, 64, 'The HUAWEI Y9 Prime 2019 features a unique dividing line that makes this design standout from the rest. On the smooth back, the special silk texture shimmers under the light and you can see the fine details clearly. ', '5f3d95feb5b727.57717048.png'),
(27, 'huawei', 'Huawei Y9 S', 220, '6.59\" IPS 1080 x 2340', 48, 'Kirin 710F (4x2.2 GHz)', 6, 128, 'HUAWEI Y9s is equipped with a 6.59” HUAWEI Ultra FullView Display, 48 MP triple cameras, side-mounted fingerprint, front pop-up camera and Kirin 710F.', '5f3d97203cc038.26794599.png'),
(28, 'apple', 'Iphone 8 Plus', 360, '5.5\" IPS 1080 x 1920', 12, 'Apple A11 Bionic (Hexa-core)', 3, 64, 'The iPhone 8 Plus is a larger version of the iPhone 8, with a larger screen and battery, more RAM, and a secondary telephoto camera on the rear. It\'s powered by the same A11 Bionic processor as the iPhone X.', '5f3d99f5831516.01985005.png'),
(29, 'apple', 'Iphone 11', 680, '6.1\" 828 x 1792', 12, 'Apple A13 Bionic (Hexa-core)', 4, 64, 'The best iPhone Apple has ever made. Even faster speed, improved battery life. The iPhone 11\'s cameras get an excellent new Night Mode and an ultrawide-angle camera that can add extra detail in photos. Fantastic video camera.', '5f3d9ff1bf6310.29199626.png'),
(30, 'apple', 'Iphone 11 Pro', 999, '5.8\" OLED (2436 X 1125)', 12, 'Apple A13 (Third‑generation)', 4, 64, 'iPhone 11 Pro smartphone was launched on 10th September 2019. The phone comes with a 5.80-inch touchscreen display with a resolution of 1125x2436 pixels at a pixel density of 458 pixels per inch (ppi).', '5f3da2b34ed018.77668933.png'),
(31, 'apple', 'Iphone X', 480, '5.8\" OLED (1125 x 2436)', 12, 'Apple A11 Bionic (2.39 GHz)', 3, 256, 'The good The iPhone X delivers a great blend of handheld comfort and a big, gorgeous 5.8-inch OLED screen.', '5f3eb92e094053.35490975.png'),
(32, 'rog', 'ROG Phone II', 1400, '6.59\" AMOLED (1080 x 2340)', 48, 'Qualcomm Snapdragon 855+', 8, 128, 'he Asus ROG Phone II is an angry-looking gaming phone with a virtually identical rear camera setup. Being a gaming phone, however, it also delivers mountains of power, a sensationally smooth 120Hz screen, not to mention a massive 6000mAh battery.', '5f3ebc0ab5a293.67013367.png');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

DROP TABLE IF EXISTS `pc`;
CREATE TABLE IF NOT EXISTS `pc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) NOT NULL,
  `model` varchar(50) NOT NULL,
  `price` varchar(255) NOT NULL,
  `processor` varchar(40) NOT NULL,
  `memory` int(10) NOT NULL,
  `storage` int(10) NOT NULL,
  `graphics` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`id`, `brand`, `model`, `price`, `processor`, `memory`, `storage`, `graphics`, `description`, `img`) VALUES
(27, 'lenovo', 'Lenovo ThinkPad E480', '720', 'Core i7-8550U', 8, 1000, 'AMD RX550 2GB', 'Simple. Powerful. Compatible. The E480 is easy for IT to deploy, offering the simplicity of Windows 10 Pro, the hardware compatibility of multiple USB ports, and the energy efficiency of 8th Gen quad-core Intel® processors delivering faster performance.', '5f3fb2c9568bc2.00169285.png'),
(28, 'lenovo', 'Lenovo Yoga 720', '875', 'Core i7-7700HQ ', 8, 512, 'NVIDIA GeForce GTX 1050', 'YOGA 720 does offer. The design is great, the hardware options are great, and the display is top notch. If you can look past the missing ports and the fingerprint-prone exterior.', '5f3fb6e45f79f0.48617879.png'),
(29, 'lenovo', 'Lenovo Legion Y7000', '970', ' Intel Core i7 9750H', 8, 1000, ' NVIDIA GeForce GTX 1650 4GB', 'The Legion Y7000 features a sleek, Iron Gray aluminum hood that curves down to an angled hinge with vent grills that are reminiscent of a sports car.', '5f3fbe7e551271.46619960.png'),
(30, 'asus', 'Asus TUF Gaming A17', '1100', 'AMD Ryzen 7 4800H', 16, 1000, 'GeForce GTX 1660 Ti', 'The Asus TUF Gaming A17 is packed with a ton of neat specs and features. you get strong performance and graphics, decently long battery life for a gaming laptop, a Mil-Spec tested chassis, a comfortable keyboard and a meaty 1TB SSD.', '5f3fc0a079e8d6.31893702.png'),
(31, 'rog', 'ROG Zepheyrus Duo', '1700', 'Intel Core i7-10875H', 32, 2000, 'NVIDIA RTX 2070 Super', 'The Duo 15 looks stunning. It\'s more refined and powerful than previous ASUS dual-display laptops and that might tempt early adopters who want to both impress their friends and still beat them at games. it\'s also heavier and more expensive than a normal 15-inch laptop.', '5f3fc4cc1f6667.06399085.png'),
(32, 'acer', 'ACER Nitro 5', '720', 'Intel Core i5-8300H', 8, 1000, 'NVIDIA GeForce GTX 1650', 'The Acer Nitro 5 offers a powerful 9th Gen i5 CPU, capable GTX 1650 and slick design, make this machine a casual gamer\'s dream.  It runs games remarkably well and stays cool while doing so. An abundance of ports, solid gaming performance and an affordable price to make it a category leader over more-expensive competitors.', '5f3fea45488b65.55218162.png'),
(33, 'acer', 'ACER Nitro 7', '950', 'Intel Core i7-9750H', 16, 512, 'NVIDIA GeForce GTX 1650 4GB', 'Acer\'s new-design Nitro 7 gaming laptop packs Nvidia GeForce GTX-class graphics into a 15.6-inch chassis. While it lacks the gaming chutzpah of the company\'s even trimmer Predator Triton 500, it\'s not nearly as expensive and incorporates most of the features budget-minded gamers are looking for.', '5f3febe077b319.68558042.png'),
(34, 'asus', 'ASUS Zenbook 14', '1550', 'Intel Core i7-8565U', 16, 512, 'GeForce MX250', 'ASUS ZenBook 14 Ultra-Slim Laptop 14\" Full HD NanoEdge Bezel, Intel Core i7-8565U, 16GB RAM, 512GB PCIe SSD, GeForce MX250, Innovative Screenpad 2.0, Windows 10 Pro, UX434FL-DB77, Royal Blue ', '5f3fece692a550.38774773.png'),
(35, 'asus', 'ASUS Zenbook Duo', '2500', 'Intel Core i7-9750H', 16, 1000, 'GeForce RTX 2060', 'Asus ZenBook Pro Duo UX581 15.6” 4K UHD NanoEdge Bezel Touch, Intel Core i7-9750H, 16GB RAM, 1TB PCIe SSD, GeForce RTX 2060, Innovative Screenpad Plus, Windows 10 Pro, Celestial Blue, UX581GV-XB74T ', '5f3feda5e37b79.70069466.png'),
(36, 'predator', 'Predator Helios 300', '1200', 'Intel Core i7-9750H', 16, 1256, 'GeForce GTX 1660 Ti', '2020 Acer Predator Helios 300 15.6 Inch 144Hz FHD Gaming Laptop (9th Gen 6-Core i7-9750H, 16GB RAM, 256GB PCIe SSD + 1TB HDD, Backlit Keyboard, GTX 1660 Ti, Win 10) + NexiGo Wireless Mouse Bundle ', '5f3fee9dbf4ea3.14008516.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

DROP TABLE IF EXISTS `user_register`;
CREATE TABLE IF NOT EXISTS `user_register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `email`, `password`) VALUES
(1, 'karar', 'k@gmail.com', '53432'),
(2, 'this is me', 'skdfjskdfj@gmail.com', 'sdkjfksjdflk'),
(3, 'zeyad', 'dksljfls@gmail.com', 'sdjfksdklfj'),
(5, 'asawer', 'sdjkfs@gmail.com', 'dkslfj;sdjf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
