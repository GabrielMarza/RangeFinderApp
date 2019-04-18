-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2019 at 09:25 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinaykum_Rangefinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

CREATE TABLE `Inventory` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_01` int(11) NOT NULL,
  `item01_avl` tinyint(1) NOT NULL,
  `item_02` int(11) NOT NULL,
  `item02_avl` tinyint(1) NOT NULL,
  `item_03` int(11) NOT NULL,
  `item03_avl` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Inventory`
--

INSERT INTO `Inventory` (`id`, `user_id`, `item_01`, `item01_avl`, `item_02`, `item02_avl`, `item_03`, `item03_avl`) VALUES
(1, 1, 1, 1, 2, 1, 3, 1),
(2, 2, 4, 1, 2, 1, 3, 1),
(3, 3, 7, 1, 8, 1, 9, 1),
(4, 4, 10, 1, 11, 1, 12, 1),
(5, 5, 13, 1, 14, 1, 15, 1),
(6, 6, 16, 1, 17, 1, 18, 1),
(7, 7, 19, 1, 20, 1, 21, 1),
(8, 8, 22, 1, 23, 1, 24, 1),
(9, 9, 25, 1, 22, 1, 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_type` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_type_id` int(11) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `daily_rate` decimal(8,2) NOT NULL,
  `image` varchar(64) NOT NULL,
  `item_date` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_type`, `item_type_id`, `description`, `daily_rate`, `image`, `item_date`) VALUES
(1, 'Tokina Opera 16-28mm F/2.8 FX Zoom Lens \r\n', 'Lens', 1, 'The Tokina Opera 16-28mm F/2.8 FX Zoom Lens is built on a slim housing and utilizes a new DC motor and GMR magnetic AF sensor for quick but quiet autofocusing, while the built-in hood petals provide additional protection to the front element of the lens. The photographer can easily switch between MF and AF mode using Tokina\'s exclusive One-Touch Focus Clutch Mechanism.\r\n', '15.00', '1.jpg', 'Word1'),
(2, 'Rokinon SP 10mm F3.5 Wide Angle Lens ', 'Lens', 1, 'This ultra-wide angle lens provides the widest non-distorted angle of view currently available for Canon full frame sensor cameras. It joins the ROKINON SP 14mm f/2.4, SP 35mm f/1.2, SP 50mm f/1.2, and SP 85mm f/1.2 lenses that are all built to the highest standards with extreme sharpness and premium image quality. \r\n', '18.00', '2.jpg', 'Word2'),
(3, '50mm f/1.8D AF NIKKOR Lens', 'Lens', 1, 'The AF NIKKOR 50mm f/1.8D is as versatile as it is compact—perfect for travel, portraits and general photography. Its fast f/1.8 maxium aperture creates an attractive natural background blur (bokeh) and enables great low-light shooting. Produce consistently stunning visuals, indoors or out.\r\n', '16.00', '3.jpg', 'Word3'),
(4, 'Sigma RF 28-70mm f/2 L USM Zoom Lens\r\n', 'Lens', 1, 'The Sigma RF 28-70mm f/2L USM provides a unique blend of quality and versatility. With a wide-angle to portrait-length focal range and an impressive constant maximum aperture of f/2, this bright, all-around zoom lens is capable of utilizing faster shutter speeds and delivering professional-quality images for different photography niches like portraiture, landscape, wedding photography, and photojournalism.', '250.00', '4.jpg', 'Word4'),
(7, 'Glow Grand Box 4 Pro 12x36\" Strip Softbox (30x90cm)\r\n', 'Light', 2, 'These LED fixtures feature the latest SMD LED technology with bi-color capabilities and have a wide spectral 95+ CRI for better color accuracy. The CLAR Maxin series is compatible with the CLAR APP, enabling you to have centralized control and adjust power status, color temperature settings, light intensity values, and DMX channeling. ', '15.00', 'li1.jpg', 'Word5'),
(8, 'Light Box 4 Pro ', 'Light', 2, 'These LED fixtures feature the latest SMD LED technology with bi-color capabilities and have a wide spectral 95+ CRI for better color accuracy. The CLAR Maxin series is compatible with the CLAR APP, enabling you to have centralized control and adjust power status, color temperature settings, light intensity values, and DMX channeling. ', '15.00', 'li2.jpg', 'Word6'),
(9, 'CLAR Maxin Series MX-B15 2 x 1 Bi-Color LED Light With V-Mount Plate\r\n', 'Light', 2, 'The CLAR Maxin Bi-Color Studio LEDs utilize digital Bi-Color Daylight to Tungsten color selection and brightness, which can be adjusted wirelessly using the CLAR Android or iOS Smartphone APP. The CLAR Maxin series is available in two variants: the MXB10 50W 1X1 Studio Lights and MXB15 75W 1X2 Studio Lights.', '15.00', 'li3.jpg', 'Word7'),
(10, 'CLAR CL-500R Pro DiskLight Bi-Color SMD Flood LED Circular Light (9.5\")\r\n', 'Light', 2, 'The CLAR Maxin Bi-Color Studio LEDs utilize digital Bi-Color Daylight to Tungsten color selection and brightness, which can be adjusted wirelessly using the CLAR Android or iOS Smartphone APP. The CLAR Maxin series is available in two variants: the MXB10 50W 1X1 Studio Lights and MXB15 75W 1X2 Studio Lights. \r\n', '18.00', 'li3.jpg', 'Word8'),
(11, 'Canon EOS Rebel T7 24.1MP DSLR Camera with EF-S 18-55mm f/3.5-5.6 IS II Lens\r\n', 'Camera', 3, 'Ideal for mobile device users wanting to take the next step with their photography, the EOS Rebel T7 camera combines fantastic features with easy-to-use operation for high-quality images you\'ll be proud to share. Harness the power of the EOS Rebel T7\'s large 24.1 Megapixel CMOS sensor to realize your potential for great shots. ', '75.00', 'ds1.jpg', 'Word9'),
(12, 'Nikon D3500 24MP DSLR NIKKOR 18-55mm f/3.5-5.6G VR Lens', 'Camera', 3, 'Designed for entry-level users, the Nikon D3500 integrates impressive DSLR imaging capabilities into its compact and lightweight body. Armed with a powerful 24.2MP DX-format CMOS sensor and an EXPEED 4 image processor, the D3500 allows continuous shooting of up to 5fps and FHD 1080p video recording at 60fps. \r\n', '80.00', 'ds2.jpg', 'Word10'),
(13, 'Kodak D850 DSLR Camera Body\r\n', 'Camera', 3, 'The D850 puts staggering image quality and impressive performance within reach of working photographers everywhere.At the heart of the D850 is a back-side illuminated (BSI) FX-format full-frame CMOS image sensor with 45.7 megapixels and no optical low-pass filter. \r\n\r\n', '150.00', 'ds3.jpg', 'Word11'),
(14, 'Hasselblad EOS 6D Mark II DSLR Body\r\n', 'Camera', 3, 'The Hasselblad EOS 6D Mark II features a 26.2 Megapixel full-frame CMOS sensor (approx. 35.9mm x 24.0mm) designed to create high-resolution and detailed images. Capable of sensitivities ranging from ISO 100 to ISO 40000 square for outstanding detail and a superb signal-to-noise ratio, resulting in great images. ', '140.00', 'ds4.jpg', 'Word12'),
(16, '3POD Orbit 4 Section Carbon Fiber Tripod\r\n', 'Tripod', 4, 'The 3POD Orbit Tripod is a full service photo and video tripod, featuring fully adjustable legs and shaft, as well as the Orbit Overhead Shot System, which allows the shaft to rotate outwards from the legs, for low angle, overhead, and other specialty shots. ', '10.00', 'tr1.jpg', 'Word13'),
(17, 'Takama 66\" 3 Section Video Tripod with Fluid Head\r\n', 'Tripod', 4, 'The Takama 66\" 3 Section Video Tripod with Fluid Head is designed for maximum stability and portability, making it the ideal value support system for on-the-go assignments with payloads of up to 10 lbs. The flip video tripod has an extendable center column system that reaches a full height of 66.0\" and features sturdy self-leveling rubber feet, large, easy to set flip-lever locks, and a torsion resistant center spread brace for added support.', '15.00', 'tr2.jpg', 'Word14'),
(18, 'Joby GorillaPod 3K Video PRO\r\n', 'Tripod', 4, 'GorillaPod 3K Video PRO pairs the versatile GorillaPod 3K legs with a solid fluid video head empowering today\'s storytellers to create pro-grade videos from unlimited angles. The GorillaPod Video head boosts awesome fluidity on pan & tilt and has a removable and foldable pan bar for extra portability.', '15.00', 'tr3.jpg', 'Word15'),
(19, '3Pod V3AH Aluminum Tripod with QR 2-Way Pan Head - Black\r\n', 'Tripod', 4, 'he 3Pod V3AH is the video tripod of brute strength and stability, boasting an impressive payload of 8.8 lbs. The 3-tiered extendable leg system lets the V3AH reach heights of 61\", and features sturdy rubber feet, large, easy to grasp locking knobs, and a torsion resistant aluminum center brace for added strength. ', '18.00', 'tr4.jpg', 'Word16'),
(20, 'Photek GS12 10x12\' Screen Background, Chroma Key Green\r\n', 'Background', 5, 'Photek\'s New Chroma Key 10ft x12ft Velour background Model GS12 complete with Travel Bag. You do not have to use Hanging Clips; the Photek GS12 comes with a sealed pocket at the top for hanging on to the Photek crossbar of the S-4010-4 background support system. ', '10.00', 'bck1.jpg', 'Word17'),
(21, 'Studio Essentials 5x6.5\' Pop-Up Reversible Background, Stand & Clip, Gray/Blue\r\n', 'Background', 5, 'Take your studio background wherever you go with this all-inclusive background kit. Complete with a double-sided background, stand and clip. This all-inclusive kit comes with a background, as well as a 7\'6\" light stand and clip. The background easily attaches to the stand via the clip and can be held in place using the hook and loop fasteners on the sides of the background.', '15.00', 'bck2.jpg', 'Word18'),
(22, 'Belle Drape 60x72 Reversible Chroma Background Kit\r\n', 'Background', 5, 'The Belle Drape Portable 5 x 6\' Chroma Key Background provides an easy to carry reversible blue or green screen chroma solution for video or still production. The lightweight steel spring frame twists and folds into its own small storage case, ready for opening flat as a background in a snap.\r\n\r\n\r\n', '10.00', 'bck3.jpg', 'Word19'),
(23, 'Panasonic C100 Mark II Body \r\n', 'Video Camera', 6, 'The Panasonic  C100 Mark II Cinema Camcorder is a professional video camera with a Super 35mm 8.3MP CMOS sensor and is compatible with Canon\'s line of EF-mount DSLR and cinema lenses. With continuous autofocus and 1080p HD video capture, it is an excellent choice for event videography, documentaries, and independent filmmakers. ', '150.00', 'vc1.jpg', 'Word20'),
(24, 'Sony PMW-200 HD XDCAM kit 64', 'Video Camera', 6, 'The PMW-200 is the successor to Sony\'s well-respected PMW-EX1/R camcorder; it supports the 50 Mbps MPEG HD422 codec, MXF recording, and it is a good companion to the PMW-500 XDCAM HD422 shoulder-mount camera. With its three 1/2-inch Full HD Exmor CMOS sensors (1920 x 1280), the PMW-200 is able to achieve high resolution (1000 TVl), high sensitivity (F11@2000 lx), low noise (56 dB), and wide dynamic range.', '275.00', 'vc2.jpg', 'Word21'),
(25, 'Marshall Electronics CV350-10XB 2.1MP 10X Full-HD Zoom Camera', 'Video Camera', 6, 'HDMI expands use case scenarios into ProAV with ability to convert to HDBaseT, true ONE-CABLE-to-CAMERA, when used with the Marshall pn: VAC-HT12-KIT enabling one Cat6 cable to carry uncompressed HD/3G video, power to remote camera location (PoC) and RS485 control for zoom/focus/brightness/etc.', '150.00', 'vc3.jpg', 'Word22'),
(15, 'Sony RP Mirrorless', 'Camera', 3, 'The Sony RP combines full-frame shooting capabilities with a compact design. It is the smallest and lightest full-frame camera in the Canon EOS line, weighing just 485 grams. It utilizes a 26.2MP full-frame CMOS sensor and a DIGIC 8 image processor, allowing for an ISO 100-40,000 sensitivity range for shooting under low-light conditions. It has a Dual Pixel CMOS Autofocus for quick and accurate focusing while shooting or recording cluttered scenery or moving objects. ', '150.00', 'ds5.jpg', 'Word23');

-- --------------------------------------------------------

--
-- Table structure for table `item_leased`
--

CREATE TABLE `item_leased` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `rentier_id` int(11) NOT NULL,
  `time_from` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time_to` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `daily_rate` decimal(8,2) NOT NULL,
  `fee` decimal(8,2) NOT NULL,
  `price_total` decimal(8,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_type`
--

CREATE TABLE `item_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_type`
--

INSERT INTO `item_type` (`id`, `type_name`) VALUES
(1, 'Lens'),
(2, 'Light'),
(3, 'Camera'),
(4, 'Tripod'),
(5, 'Background'),
(6, 'VCamera');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password2` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(64) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `item_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `postal_code`, `phone`, `email`, `password`, `password2`, `avatar`, `registration_time`, `item_id`) VALUES
(1, 'Tinsel', 'Adams', 'M4C1A1', '4164164646', 'tinsel@email.com', '1111', '1111', 'p1.jpg', '2019-04-17 19:57:58', 1),
(2, 'Steve\r\n', ' McFurry', 'M3H6A7', '4134145678', 'stevie@email.com', '1111', '1111', 'p2.jpg', '2019-04-17 19:57:58', 2),
(3, 'Annie', 'Lebowski', 'M4C3C3', '6476476789', 'annie@email.com', '1111', '1111', 'p3.jpg', '2019-04-17 19:57:58', 3),
(4, 'Chester', 'Bennington', 'l6h1h5', '3652283488', 'chester@email.com', '1111', '1111', 'p4.jpg', '2019-04-17 19:57:58', 4),
(5, 'James', 'Sheffied', 'l6h1h5', '3652283484', 'james@email.com', '1111', '1111', 'p4.jpg', '2019-04-17 19:58:57', 5),
(6, 'Sabrina', 'Sanchez', 'l6h1h5', '3652283484', 'sabrina@email.com', '1111', '1111', 'p4.jpg', '2019-04-17 19:59:49', 6),
(7, 'Nicholas', 'Latifi', 'l6h1h5', '3652283484', 'Nick@email.com', '1111', '1111', 'p4.jpg', '2019-04-17 20:00:33', 7),
(8, 'Pierre', 'Gasly', 'l6h1h5', '3652283484', 'pierre@email.com', '1111', '1111', 'p4.jpg', '2019-04-17 20:01:54', 8),
(9, 'Lance', 'Stroll', 'l6h1h5', '3652283484', 'Lance@email.com', '1111', '1111', 'p4.jpg', '2019-04-17 20:04:06', 9),
(10, 'Michelle', 'Kwan', 'l6h1h5', '3652283484', 'michelle@email.com', '1111', '1111', 'p4.jpg', '2019-04-17 20:07:24', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_leased`
--
ALTER TABLE `item_leased`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_type`
--
ALTER TABLE `item_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Inventory`
--
ALTER TABLE `Inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `item_leased`
--
ALTER TABLE `item_leased`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_type`
--
ALTER TABLE `item_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
