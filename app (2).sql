-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 06:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `cityes`
--

CREATE TABLE `cityes` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cityes`
--

INSERT INTO `cityes` (`id`, `city_name`) VALUES
(1, 'بغداد'),
(2, 'البصرة'),
(3, 'نينوى'),
(4, 'أربيل'),
(5, 'النجف'),
(6, 'ذي قار'),
(7, 'كركوك'),
(8, 'الأنبار'),
(9, 'صلاح الدين'),
(10, 'السليمانية'),
(11, 'ديالى'),
(12, 'واسط'),
(13, 'ميسان'),
(14, 'المثنى'),
(15, 'بابل'),
(16, 'كربلاء'),
(17, 'دهوك'),
(18, 'القادسية');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `discription` text DEFAULT NULL,
  `nots` text DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `spec_id` int(11) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `full_name`, `location`, `discription`, `nots`, `city_id`, `spec_id`, `phone`) VALUES
(19, 'مؤيد النقيب', 'مستشفى الكفيل', 'اخصائي دقيق بالجهاز الهضمي والقنوات الصفراوية والكبدة', '', 16, 24, '078048505004'),
(21, 'احمد الحاج محمد علي الحري', 'الاسكان -مجمع الكوثر-مجاور شركة خطوط نبع العراق  ق', 'دكتوراه اختصاص دقيق بجراحة اورام وامراض القولون والمستقيم والجراحة التنضيرية المتقدمة ض ', '', 16, 24, '07816970810'),
(22, 'محمد عباس الياسري ', 'الاسكان-مجمع ادم الطبي-قرب صيدلية سما الاسكان', 'جراحة الجهاز الهضمي وجراحة الفتق وتجميل البطن جراحة البواسير والناسور', '', 16, 24, '07800366646'),
(23, 'حيدر زيني ', 'شارع الاسكان -مقابل شركة نبع العراق', 'اخصائي دقيق بالعمليت الجراحية والمنضارية', '', 16, 24, '07800005796');

-- --------------------------------------------------------

--
-- Table structure for table `spec`
--

CREATE TABLE `spec` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spec`
--

INSERT INTO `spec` (`id`, `name`) VALUES
(1, 'جملة عصبية '),
(2, 'اشعة وسونار '),
(3, 'عيون'),
(4, 'نسائية وتوليد'),
(5, 'جلدية وتجميل'),
(6, 'اسنان'),
(7, 'اورام'),
(8, 'الطب الرياضي'),
(9, 'المفاصل والروماتيزم'),
(10, 'جراحة العضام والمفاصل والكسور'),
(11, 'مجاري بولية وكلية'),
(12, 'انف واذن وحنجرة '),
(13, 'جراحة القلب'),
(14, 'تخدير وعناية مركزة'),
(15, 'امراض الدم'),
(16, 'نفسية'),
(17, 'جراحة اطفال'),
(18, 'اطباء اطفال'),
(19, 'جراحة العمود الفقري '),
(20, 'باطنية '),
(21, 'جراحة دماغ واعصاب'),
(22, 'العقم واطفال الانابيب'),
(23, 'التجميل والجراحة التجميلية '),
(24, 'جراحة عامة وناضورية وجهاز هضمي'),
(25, 'صدرية وتنفسية'),
(26, 'قلبية'),
(27, 'وجه وفكين '),
(28, 'علاج طبيعي وتأهيل طبي');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) DEFAULT NULL,
  `pas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `pas`) VALUES
('admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cityes`
--
ALTER TABLE `cityes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `spec_id` (`spec_id`);

--
-- Indexes for table `spec`
--
ALTER TABLE `spec`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cityes`
--
ALTER TABLE `cityes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `spec`
--
ALTER TABLE `spec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cityes` (`id`),
  ADD CONSTRAINT `doctors_ibfk_2` FOREIGN KEY (`spec_id`) REFERENCES `spec` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
