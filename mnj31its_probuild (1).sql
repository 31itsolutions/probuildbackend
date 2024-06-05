-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 09:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mnj31its_probuild`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_uses`
--

CREATE TABLE `about_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_uses`
--

INSERT INTO `about_uses` (`id`, `title`, `title_description`, `created_at`, `updated_at`) VALUES
(1, 'about here', 'in my blade file, but the images did not display on my website. ... starts with storage/image_path and there is a folder in the server name', '2021-09-10 23:22:04', '2021-09-10 23:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `add_images`
--

CREATE TABLE `add_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `add_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_images`
--

INSERT INTO `add_images` (`id`, `add_image`, `created_at`, `updated_at`) VALUES
(1, '5117994 1.png', '2021-09-09 22:18:58', '2021-10-19 00:05:50'),
(2, '5256934 1.png', '2021-09-09 22:19:13', '2021-10-19 00:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `add_image_nexts`
--

CREATE TABLE `add_image_nexts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `add_image_next` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_image_nexts`
--

INSERT INTO `add_image_nexts` (`id`, `add_image_next`, `created_at`, `updated_at`) VALUES
(4, '11075 1.png', '2021-09-24 01:16:54', '2021-10-19 00:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

CREATE TABLE `analytics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `views` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analytics`
--

INSERT INTO `analytics` (`id`, `views`, `created_at`, `updated_at`) VALUES
(1, 6528, '2021-09-20 12:50:52', '2023-06-22 01:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `bg_images`
--

CREATE TABLE `bg_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login_image` varchar(255) NOT NULL,
  `home_image` varchar(255) NOT NULL,
  `vendor_image` varchar(255) NOT NULL,
  `customer_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bg_images`
--

INSERT INTO `bg_images` (`id`, `login_image`, `home_image`, `vendor_image`, `customer_image`, `created_at`, `updated_at`) VALUES
(1, 'login.png', 'Header.png', 'Header.png', 'Header.png', '2021-09-09 22:18:27', '2021-10-21 03:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_title` varchar(255) DEFAULT NULL,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `business_category` varchar(255) DEFAULT NULL,
  `business_description` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `monday_from` varchar(255) DEFAULT NULL,
  `monday_to` varchar(255) DEFAULT NULL,
  `tuesday_from` varchar(255) DEFAULT NULL,
  `tuesday_to` varchar(255) DEFAULT NULL,
  `wednesday_from` varchar(255) DEFAULT NULL,
  `wednesday_to` varchar(255) DEFAULT NULL,
  `thursday_from` varchar(255) DEFAULT NULL,
  `thursday_to` varchar(255) DEFAULT NULL,
  `friday_from` varchar(255) DEFAULT NULL,
  `friday_to` varchar(255) DEFAULT NULL,
  `saturday_from` varchar(255) DEFAULT NULL,
  `saturday_to` varchar(255) DEFAULT NULL,
  `sunday_from` varchar(255) DEFAULT NULL,
  `sunday_to` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lang` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `fax_no` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `business_document` varchar(255) DEFAULT NULL,
  `business_brochure` varchar(255) DEFAULT NULL,
  `recommended` varchar(255) DEFAULT NULL,
  `business_image` varchar(255) DEFAULT NULL,
  `business_logo` varchar(255) DEFAULT NULL,
  `rating_avg` varchar(255) DEFAULT NULL,
  `rating_count` varchar(255) DEFAULT NULL,
  `featured_business` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `business_title`, `vendor_id`, `business_category`, `business_description`, `status`, `monday_from`, `monday_to`, `tuesday_from`, `tuesday_to`, `wednesday_from`, `wednesday_to`, `thursday_from`, `thursday_to`, `friday_from`, `friday_to`, `saturday_from`, `saturday_to`, `sunday_from`, `sunday_to`, `country`, `city`, `location`, `lat`, `lang`, `email`, `mobile_no`, `website`, `fax_no`, `facebook`, `linkedin`, `twitter`, `instagram`, `created_at`, `updated_at`, `category`, `business_document`, `business_brochure`, `recommended`, `business_image`, `business_logo`, `rating_avg`, `rating_count`, `featured_business`) VALUES
(3, 'Goldpen Company', 2, '2', 'A Simple PDF File. This is a small demonstration .pdf file - just for use in the Virtual Mechanics tutorials. More text. And more.', '1', '5:00', '5:00', '2:00', '3:00', '9:00', '8:00', '6:00', '10:00', '4:00', '2:00', '6:00', '4:00', '6:00', '7:00', 'India', 'Tamilnadu', 'Erode', '10.992424', '77.045766', 'rajkumar@gmail.com', '9710005847', 'https://www.google.com', '1212.33', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '2021-09-09 21:53:20', '2021-10-11 00:52:29', '1', 'Process of Uploading the documents.pdf', 'Process of Uploading the documents.pdf', '1', 'bg3.jpg', '1 2.png', '4', '3', '1'),
(4, 'Land vila', 2, '4', 'A Simple PDF File. This is a small demonstration .pdf file - just for use in the Virtual Mechanics tutorials. More text. And more.', '1', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', 'India', 'Tamilnadu', 'coimbatore', '10.992424', '77.045766', 'chembiyan@gmail.com', '9710005847', 'https://www.google.com', '1212.33', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '2021-09-09 21:56:06', '2021-12-07 16:59:35', '2', 'Process of Uploading the documents.pdf', 'Process of Uploading the documents.pdf', '1', 'bg3.jpg', '3 246.png', '4', '3', '1'),
(5, 'Mega Mind', 3, '5', 'A Simple PDF File. This is a small demonstration .pdf file - just for use in the Virtual Mechanics tutorials. More text. And more.', '1', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', 'India', 'Tamilnadu', 'coimbatore', '10.992424', '77.045766', 'admin@gmail.com', '9710005847', 'https://www.google.com', '1212.33', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '2021-09-09 21:59:06', '2021-10-11 00:54:56', '2', 'Process of Uploading the documents.pdf', 'Process of Uploading the documents.pdf', '1', 'bg3.jpg', 'f 2.png', '2', '1', '1'),
(6, 'Trigazone', 3, '6', 'Mathankumar', '1', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', '1:00', 'United Kingdom', 'Tamilnadu', 'coimbatore', '10.992424', '77.045766', 'admin@gmail.com', '9710005847', 'https://www.google.com', '1212.33', NULL, 'https://www.facebook.com/', NULL, NULL, '2021-09-09 22:00:59', '2021-10-11 00:56:17', '2', 'Process of Uploading the documents.pdf', 'Process of Uploading the documents.pdf', '1', 'bg3.jpg', '0b9e79b37796b4f9200d26edfa127d19 2s.png', '4', '1', '1'),
(28, 'home orginiser', 45, '2', 'I will help you to keep your home organised', '1', '8:00', '20:00', '8:00', '20:00', '8:00', '20:00', '8:00', '20:00', '8:00', '20:00', '8:00', '20:00', '8:00', '20:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-05 14:53:15', '2021-11-05 14:53:15', NULL, 'ZF217z2.jpg', 'ZF217z2.jpg', NULL, 'ZF217z2.jpg', 'ZF217z2.jpg', NULL, NULL, NULL),
(29, 'Happy Stone Property', 52, '6', 'Helloo test', '1', '9:00', '17:00', '9:00', '18:00', '6:00', '20:00', '5:00', '15:00', '7:00', '21:00', '16:00', '19:00', '6:00', '11:00', 'Bahrain', 'Saar', 'Saar Avenue', '26.17690112333968', '50.48399153051059', NULL, NULL, 'https://www.propertyfinder.bh/en/broker/happy-stone-properties-655', NULL, NULL, NULL, NULL, 'https://www.instagram.com/happystonebh/', '2021-12-03 17:27:18', '2022-02-20 16:36:58', NULL, 'HSP - New Property Form.pdf', 'HSP - New Property Form.pdf', NULL, 'banner-2 1.png', '1645349818_gmi logo (1).png', '2', '1', '1'),
(30, 'Test', 1, '1', 'Test', '1', '1:00', '2:00', '2:00', '2:00', '2:00', '2:00', '2:00', '2:00', '2:00', '2:00', '2:00', '2:00', '2:00', '2:00', 'india', 'tirunelveli', '43,asdasdas', 'lat', 'long', 'test@test.com', '88012832121', 'website.com', '2514213123', NULL, NULL, NULL, NULL, '2022-01-20 21:14:19', '2022-01-20 21:14:19', NULL, 'Shakespeare\'s All\'s Well That Ends Well Plot Summary.pdf', 'concepts-of-journalism-5-728.jpg', NULL, 'concepts-of-journalism-2-728.jpg', 'concepts-of-journalism-2-728.jpg', NULL, NULL, NULL),
(31, 'Sample one', 59, '7', 'sample test business', '1', '9:00', '18:00', '8:00', '16:00', '10:00', '17:00', '8:00', '20:00', '6:00', '18:00', '6:00', '20:00', '4:00', '20:00', 'Bahrain Bahrain', 'Manama Manama', 'Building aaa Kingdom of Bahrain', '50.47133151534425', '26.217434644233542', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-29 21:56:17', '2022-01-29 22:45:18', NULL, 'NAFNOOFI credentials.pdf', 'HSP - New Property Form.pdf', NULL, 'Header.png', 'Header.png', NULL, NULL, NULL),
(36, 'civil', 66, NULL, 'bbcdx', '1', '4:00', '6:00', 'Closed', '7:00', '11:00', '24:00', '8:00', '17:00', '1:00', '13:00', 'Closed', NULL, '17:00', '3:00', 'United Kingdom', 'Scotland', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '57.06339917959314', '-4.468460148965336', 'hai@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-20 14:21:06', '2022-02-21 18:15:36', NULL, '2.jfif', 'download (1).jfif', NULL, 'download (1).jfif', '1645442064_download.jfif', NULL, NULL, NULL),
(38, 'Painting', 64, '24', 'uiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', '1', 'Closed', NULL, '3:00', '11:00', 'Closed', NULL, '19:00', 'Closing Time', '8:00', 'Closing Time', '18:00', 'Closing Time', '20:00', 'Closing Time', 'canada', 'canada', 'fdsssx, uyyyyyyyyyyyyyyyyyyyyyyyyyyy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-20 16:08:58', '2022-02-20 18:58:10', NULL, 'download.jfif', '2.jfif', NULL, 'download (1).jfif', 'download (1).jfif', '4', '2', NULL),
(40, 'construction', 71, '5', 'sdfgghghhhhhbvxxxx', '1', 'Closed', NULL, '3:00', '9:00', '8:00', '15:00', '12:00', '14:00', '10:00', 'Closing Time', 'Opening Time', '20:00', 'Closed', NULL, 'USA', 'Newyork', 'wrtayajajammalslsssss', '40.711620265698706', '-74.00827622555654', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-20 18:25:46', '2022-02-21 18:09:44', NULL, '2.jfif', 'download.jfif', NULL, '2.jfif', '2.jfif', NULL, NULL, NULL),
(41, 'Prestige Construction.', 81, '17', 'We offer comprehensive construction services, focusing on design-build, general contracting, project management, and construction consulting. Our top priorities are completing projects within budget, and to the highest quality standards. +973 38383894', '1', '7:00', '20:00', '7:00', '20:00', '7:00', '20:00', '7:00', '20:00', 'Closed', NULL, 'Closed', NULL, '7:00', '15:00', 'Bahrain', 'Manama', 'Ali Road', NULL, NULL, 'haji_13@hotmail.com', '33195060', 'probuild.bh', NULL, NULL, NULL, NULL, 'https://instagram.com/faisalhaji13?igshid=MDM4ZDc5MmU=', '2023-02-22 22:55:57', '2023-03-10 08:53:57', NULL, 'Grifith College - transcript and certificate.pdf', 'ProBuild Company Profile .pdf', NULL, 'BE02FBD4-8E88-491D-A7FC-79413C82EA6C.jpeg', '1678413172_images.png', '3', '6', NULL),
(51, 'Haji Gallery', 90, '38', 'The main functions of a kitchen are to store, prepare and cook food (and to complete related tasks such as dishwashing). The room or area may also be used for dining.', '1', '1:00', '4:00', '1:00', '4:00', '1:00', '4:00', '2:00', '4:00', 'Closed', NULL, 'Closed', NULL, 'Closed', NULL, 'Bahrain', 'Saar', 'Saar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-25 06:01:27', '2023-03-09 09:15:22', NULL, 'text.txt', 'text.txt', NULL, 'EFEDFC59-924B-4FBF-B61E-970A344CE7A8.jpeg', 'EFEDFC59-924B-4FBF-B61E-970A344CE7A8.jpeg', '5', '3', NULL),
(53, 'BuildMat Construction', 94, '2', 'Design and Construction,  we are committed to delivering a high quality service and exceeding client expectations. We pride ourselves on our intense client. Contact us on +973 33195060', '1', '7:00', '5:00', '7:00', '5:00', '7:00', '5:00', '7:00', '5:00', 'Closed', NULL, 'Closed', NULL, '7:00', '4:00', 'Bahrain', 'Manama', 'Zinj', '26.2235305', '50.5875935', 'Haji_13@hotmail.com', '38383894', 'Probuild.bh', NULL, NULL, NULL, NULL, NULL, '2023-03-03 08:10:19', '2023-03-09 23:00:36', NULL, 'BACK GARDEN ORG.pdf', 'BACK GARDEN ORG.pdf', NULL, '4C9B97BC-2D32-43D4-9966-442C9AF1DFBC.jpeg', '1678377636_CFDC10AE-F23F-43D4-9C5A-E8D0AFA2FD05.webp', '2', '2', NULL),
(56, 'ProBuild Construction', 102, '25', 'ProBuild is a user-friendly construction directory featuring listings of contractors, suppliers, manpower agencies, architects, engineers, and freelancers in the Kingdom of Bahrain.', '1', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', 'Closed', NULL, '8:00', '8:00', 'Bahrain', 'Manama', 'Manama', '26.2059441', '50.5761660', 'haji_13@hotmail.com', '33195060', 'https://linktr.ee/Probuild.bh', NULL, 'https://linktr.ee/Probuild.bh', 'https://linktr.ee/Probuild.bh', 'https://linktr.ee/Probuild.bh', 'https://linktr.ee/Probuild.bh', '2023-03-06 03:02:13', '2023-03-09 23:09:51', NULL, '1621541960_Haji gallery.jpeg', 'ProBuild Company Profile .pdf', NULL, 'Black Simple Join Us New Location Instagram Post.mp4', '1678378191_Screen Shot 2023-03-04 at 5.24.13 PM.png', '4', '8', NULL),
(57, 'ProSmart Homes', 82, '27', 'A smart home allows homeowners to control appliances, thermostats, lights, and other devices remotely using a smartphone or tablet through an internet connection.', '1', '1:00', '9:00', '1:00', '9:00', '1:00', '9:00', '1:00', '9:00', 'Closed', NULL, 'Closed', NULL, '1:00', '9:00', 'Bahrain', 'Naim', 'Naim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-06 03:27:22', '2023-03-10 08:50:36', NULL, '1621541960_Haji gallery.jpeg', '20210821_103725000_iOS 9.png', NULL, 'Unknown-1.png', 'Unknown-1.png', '2', '3', NULL),
(58, 'Basset Furniture', 104, '28', 'The processes used in the manufacture of furniture include the cutting, bending, molding, laminating, and assembly of such materials.\r\nFurniture is not solely bending metal, cutting and shaping wood, or extruding.\r\nContact no: +973 38103110', '1', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', 'Closed', NULL, 'Closed', NULL, '8:00', '8:00', 'Bahrain', 'Muharraq', 'Amwaj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-09 07:45:55', '2023-03-09 21:25:39', NULL, '2D9E77BF-FB24-4F25-9DEA-D7CFC4F06026.JPG', '794F4DF8-CA6B-4FAE-A072-03477B417212.jpeg', NULL, '16064AD3-7243-46F9-B6BB-830EC5D65795.jpeg', '1678371939_7C3730E1-E691-416A-9854-F3E830FCBC57.png', '4', '3', NULL),
(59, 'Amwaj Swimming Pools', 106, '40', 'A hole is excavated, the necessary plumbing laid, and the pool is lowered into the hole, with sand filler used to fit the exact shape, backfilled and a concrete deck structure is constructed around the perimeter.\r\nContact us on: +973 37741231', '1', '5:00', '5:00', '5:00', '5:00', '5:00', '5:00', '5:00', '5:00', 'Closed', NULL, 'Closed', NULL, '5:00', '5:00', 'Bahrain', 'Manama', 'Zinj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-09 18:40:33', '2023-03-09 21:23:47', NULL, 'CF943FFB-2C43-4890-985A-1036656F3F59.jpeg', '9820F338-E5B6-492C-8A63-64621E81E4A4.webp', NULL, '06A85FA6-8085-4785-86C9-C8197424ED6C.webp', '1678371827_D88C9119-BF3F-47BE-A0F8-5A9E403987C5.jpeg', '5', '3', NULL),
(61, 'WeInvision Design&Execution', 107, '17', 'We design and execute processes to define the innovation challenges, the opportunities from those challenges and the solutions to be developed with the appropriate technology partners and discipline that focuses on perfection. Contact: +973 38103110', '1', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', 'Closed', NULL, '8:00', '8:00', '8:00', '8:00', 'Bahrain', 'Manama', 'Zinj', '26.1406669', '50.5512435', NULL, NULL, NULL, NULL, 'https://instagram.com/weinvision.bh?igshid=YmMyMTA2M2Y=', 'https://instagram.com/weinvision.bh?igshid=YmMyMTA2M2Y=', 'https://instagram.com/weinvision.bh?igshid=YmMyMTA2M2Y=', 'https://instagram.com/weinvision.bh?igshid=YmMyMTA2M2Y=', '2023-03-09 19:37:01', '2023-03-10 09:52:18', NULL, 'F704DB19-BA01-483D-8DE7-64626678087A.jpeg', '5B478A0A-8F5B-42A9-AFF7-CF994D6BC8D4.jpeg', NULL, '46DEAA45-0CCC-4FDB-9099-986766849655.jpeg', '46DEAA45-0CCC-4FDB-9099-986766849655.jpeg', '5', '6', NULL),
(62, 'Fatema’s Freelance Design', 108, '25', 'I design beautiful indoor spaces for a variety of clients. These independent professionals engage in activities such as securing new gigs, discussing requirements with clients. Contact Us on +973 36660969', '1', '7:00', '5:00', '7:00', '5:00', '7:00', '5:00', '7:00', '5:00', 'Closed', NULL, 'Closed', NULL, '7:00', '5:00', 'Bahrain', 'Manama', 'Hoora', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-10 03:12:41', '2023-03-10 04:00:34', NULL, '3675EEBA-9A31-4894-BE21-1F4B6B7BE7A3.jpeg', '019A0EC7-CE7D-4F11-8C4E-694AD1A29186.jpeg', NULL, '32111343-CCA6-4734-9061-D5CD05A9E438.webp', '1678392834_2BE208EA-F599-4344-978E-CF9722B95EE6.jpeg', '4', '3', NULL),
(63, 'Creative Curtains LTD', 109, '29', 'Creative Curtain serving Bahrain since 2018, decorative fabric, commonly hung to prevent drafts from door or window openings, arranged to fall straight in ornamental folds are also called draperies. Contact us on +97333195060', '1', '7:00', '7:00', '7:00', '7:00', '7:00', '7:00', '7:00', '7:00', 'Closed', NULL, 'Closed', NULL, '7:00', '7:00', 'Bahrain', 'Northern Governate', 'Sanad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-10 05:27:39', '2023-03-10 05:38:06', NULL, 'images.jpeg', 'images-4.jpeg', NULL, 'NJRhhmEYBN3kWZsW2GMf6e-2.jpg', 'NJRhhmEYBN3kWZsW2GMf6e-2.jpg', '2', '2', NULL),
(64, 'Durawell Marble', 85, '37', 'Durawell Marble  has been established in 1989, is one of the leading companies of Bahrain stone business and specialized in producing the premium quality slabs and variable finished goods of Marble&Onyx&Travertine. Call us on +973 366699220', '1', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', '8:00', 'Closed', NULL, 'Closed', NULL, '8:00', '8:00', 'bahrain', 'manama', 'table', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-10 09:32:09', '2023-03-10 09:32:09', NULL, 'Unknown-18', 'Unknown-17', NULL, 'Unknown-17', 'Unknown-17', NULL, NULL, NULL),
(65, 'The Woodfloor Company', 84, '35', 'Parquet floors have fairly high durability and are resistant to use for everyday needs. The normal use of parquet floors also rarely shows signs of aging or damage. The characteristics of parquet flooring. Visit us or call 38383892', '1', '7:00', '8:00', '7:00', '8:00', '7:00', '8:00', '7:00', '8:00', 'Closed', NULL, 'Closed', NULL, '7:00', '8:00', 'bahrain', 'Northern', 'Riffa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-10 09:41:22', '2023-03-11 06:17:49', NULL, 'fancy-living-room-Finland.jpg', 'f577c11d8dad6ef8131a63ddc5cd3835.jpg', NULL, 'fancy-living-room-Finland.jpg', 'fancy-living-room-Finland.jpg', '2', '2', NULL),
(66, 'Solar Lighting Solution', 99, '42', 'Solar Light Solution , LLC designs and manufactures precision solar simulators, meteorological instruments, sources, standards and calibration services to assess the impact of sunlight on human health and the environment. Contact us on +97317111711', '1', '8:00', '4:00', '8:00', '4:00', '8:00', '4:00', '8:00', '4:00', 'Closed', NULL, 'Closed', NULL, '8:00', '4:00', 'Bahrain', 'Manama', 'Um alhassam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-10 18:24:04', '2023-03-10 18:24:04', NULL, 'roof-with-solar-panels.jpg', 'roof-with-solar-panels.jpg', NULL, 'solar-2.jpg', 'solar-2.jpg', NULL, NULL, NULL),
(67, 'Ocean Realestate', 110, '2', 'Our company has a deep understanding of the local real estate market and we are well-equipped to assist our clients in buying, selling, renting, or investing in properties in Bahrain. Contact us on +973 38023802', '1', '8:00', '6:00', '8:00', '6:00', '8:00', '6:00', '8:00', '6:00', 'Closed', NULL, '8:00', '6:00', '8:00', '6:00', 'Bahrain', 'Manama', 'Tubli', '26.1918009', '50.5608377', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-11 19:31:34', '2023-03-11 20:24:14', NULL, 'F9AF3E2B-809D-470D-96E5-EA677A83BB79.jpeg', 'ADDEE998-09C3-4732-ABA4-82C224078EAD.jpeg', NULL, '6414D53E-4056-40A5-A6C4-FE7C87A769AE.jpeg', '6414D53E-4056-40A5-A6C4-FE7C87A769AE.jpeg', '5', '2', NULL),
(69, 'Haji Gallery', 114, '38', 'Haji Gallery a twenty five-year-old company representing prestigious and well-known brands in Tiles, Sanitary ware, Kitchens in Bahrain with two showrooms and have recently restructured the organization to participate and diversify its activities.', '1', '9:00', '8:00', '9:00', '8:00', '9:00', '8:00', '9:00', '8:00', 'Closed', NULL, '9:00', '2:00', '9:00', '8:00', 'Bahrain', 'Manama', 'Tubli', '26.1972717', '50.5575233', 'Hajigallery@hotmail.com', '38383894', 'https://hajigallery.com/', NULL, 'https://www.facebook.com/hajigallery', 'https://www.linkedin.com/company/haji-gallery/', 'https://instagram.com/hajigallery?igshid=YmMyMTA2M2Y=', 'https://instagram.com/hajigallery?igshid=YmMyMTA2M2Y=', '2023-03-27 07:47:33', '2023-03-27 08:01:20', NULL, 'CCBB5B99-9EFA-43F8-AC1E-65158DEED7A6.jpeg', '5B585607-400E-4AAD-8FF9-DFB1BBCDF765.jpeg', NULL, '11751B04-81FD-4E3D-8CB7-B73C165BCE96.jpeg', '11751B04-81FD-4E3D-8CB7-B73C165BCE96.jpeg', '3', '4', NULL),
(70, 'Leo Lighting & Services', 115, '31', 'Leo Lighting, Bahraini owned Company which supplies & designs - Comolucia Lighting | Smart Products | Professional Lighting', '1', '8:00', '8:00', '8:00', '9:00', '8:00', '8:00', '8:00', '8:00', 'Closed', NULL, 'Closed', NULL, '8:00', '8:00', 'Bahrain', 'Budaiya Road', 'Al Qadam', '26.2170557', '50.5177016', NULL, NULL, NULL, NULL, 'https://instagram.com/leo.fix.bh?igshid=YmMyMTA2M2Y=', 'https://instagram.com/leo.fix.bh?igshid=YmMyMTA2M2Y=', 'https://instagram.com/leo.fix.bh?igshid=YmMyMTA2M2Y=', 'https://instagram.com/leo.fix.bh?igshid=YmMyMTA2M2Y=', '2023-04-02 21:34:35', '2023-04-02 21:39:38', NULL, '9AAF7834-DFC9-4492-8977-A44E7EE23B5F.jpeg', '2AC9F891-3B61-4AA0-8990-3A7E7361A6F3.jpeg', NULL, '6033BF4E-4D24-45B0-8F35-822544ACA5CC.jpeg', '6033BF4E-4D24-45B0-8F35-822544ACA5CC.jpeg', '5', '3', NULL),
(71, 'Aswar Abuhassan', 117, '32', 'Bahraini owned company located in Salmabad, Kingdom of Bahrain. We focus on supplying iron forming, ornaments and aluminium to suit all types of project around Bahrain.', '1', '10:00', '5:00', '10:00', '5:00', '10:00', '6:00', '10:00', '5:00', 'Closed', NULL, '10:00', '5:00', '10:00', '5:00', 'Bahrain', 'Central Governorate', 'Salmabad', '26.1805755', '50.5295523', 'Aswar.abuhaasan7@gmail.com', '39933474', 'https://instagram.com/aswar.abuhassan?igshid=OGRjNzg3M2Y=', NULL, 'https://instagram.com/aswar.abuhassan?igshid=OGRjNzg3M2Y=', 'https://instagram.com/aswar.abuhassan?igshid=OGRjNzg3M2Y=', 'https://instagram.com/aswar.abuhassan?igshid=OGRjNzg3M2Y=', 'https://instagram.com/aswar.abuhassan?igshid=OGRjNzg3M2Y=', '2023-04-03 22:48:50', '2023-04-03 22:52:14', NULL, 'BB138630-A9E6-46DB-9D67-0F385454EB9F.jpeg', '97C7BBF0-D6E1-47AF-8409-EF75822DC85F.jpeg', NULL, 'B798C21D-8A9F-4DB5-92B9-AC1669FA7352.jpeg', 'B798C21D-8A9F-4DB5-92B9-AC1669FA7352.jpeg', '5', '2', NULL),
(72, 'Diqat Al Enjaz', 118, '39', 'Daqqat Al-Ajaz Est. Located in Budaiya Road, for the sale and installation of sanitary ware. You can find all the plumbing and  sanitary ware products under one roof, with the best types and the best prices in bahrain.', '1', '7:00', '7:00', '7:00', '7:00', '7:00', '7:00', '7:00', '7:00', 'Closed', NULL, '7:00', '7:00', '7:00', '7:00', 'Bahrain', 'Budaiya Road', 'Shakhura', '26.2118818', '50.5041886', 'Diqat_al_enjaz@outlook.com', '39191108', NULL, NULL, 'https://instagram.com/diqat_al_enjaz?igshid=YmMyMTA2M2Y=', 'https://instagram.com/diqat_al_enjaz?igshid=YmMyMTA2M2Y=', 'https://instagram.com/diqat_al_enjaz?igshid=YmMyMTA2M2Y=', 'https://instagram.com/diqat_al_enjaz?igshid=YmMyMTA2M2Y=', '2023-04-04 18:54:14', '2023-04-04 18:59:42', NULL, '3D9AA381-35BB-4D87-B02E-C77921BC72BD.png', 'F5799924-3EAB-4D48-A094-DCA9BF84891C.png', NULL, '4EC90D4F-C628-43D1-8C6D-396B72E5BAE6.jpeg', '1680609475_4808E700-6768-4054-B6BA-D2D1AFD15FB5.jpeg', '5', '2', NULL),
(73, 'Steel Masters', 119, '32', 'Steel Masters was established in 2021, as a leading company specialized BBQ grills of various types and sizes, using steel and stainless steel. We are experts on BBQ manufacturing, food trucks, trailers, commercial & residential shipping containers.', '1', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', 'Closed', NULL, 'Closed', NULL, '8:00', '5:00', 'Bahrain', 'Salmabad', 'Northern Governate', '26.1788921', '50.5327692', NULL, NULL, NULL, NULL, 'https://instagram.com/steelmasters.bh?igshid=YmMyMTA2M2Y=', 'https://instagram.com/steelmasters.bh?igshid=YmMyMTA2M2Y=', 'https://instagram.com/steelmasters.bh?igshid=YmMyMTA2M2Y=', 'https://instagram.com/steelmasters.bh?igshid=YmMyMTA2M2Y=', '2023-04-20 22:34:54', '2023-04-20 23:28:12', NULL, 'STEEL MASTERS CATALOGUE 2023.pdf', '0DCEE637-8B1A-4F1E-9F36-4AB8AD7F63D9.jpeg', NULL, '0146EC9A-728A-476F-88D2-39895B957907.jpeg', '0146EC9A-728A-476F-88D2-39895B957907.jpeg', '4', '3', NULL),
(74, 'AlFajer Glass & Aluminum', 120, '34', 'Al Fajar Glass & Aluminum W.L.L is a Bahrain-based company that specializes in glass and aluminum products. Their services include glass works, aluminum fabrication, cladding works, and curtain walling.', '1', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', 'Closed', NULL, '8:00', '4:00', '8:00', '4:00', 'Bahrain', 'Northern Governate', 'Salmabad', '26.185905', '50.523136', NULL, NULL, NULL, NULL, 'https://instagram.com/alfajarglass?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/alfajarglass?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/alfajarglass?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/alfajarglass?igshid=NTc4MTIwNjQ2YQ==', '2023-05-07 20:25:53', '2023-05-07 20:32:00', NULL, '7E812C05-12A0-47F4-85BC-23BC1E64BE88.jpeg', '9AB582CE-4E27-4789-92BE-A9C973A6350A.jpeg', NULL, '53E49EFA-6AA0-4A61-ACDF-9D6D2511F563.jpeg', '53E49EFA-6AA0-4A61-ACDF-9D6D2511F563.jpeg', '5', '2', NULL),
(75, 'Alkawthar Gypsm & Decor', 122, '25', 'Al Kawthar River is a company based in Bahrain that specializes in gypsum decor and painting \r\nservices.Al Kawthar River offers a wide range of \r\nservices, including gypsum board partitions, gypsum ceiling designs, painting, and decoration.', '1', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', 'Closed', NULL, '8:00', '5:00', '8:00', '5:00', 'Bahrain', 'Almuqsha', 'Budaiya Road', '26.2180759', '50.5175135', NULL, NULL, NULL, NULL, 'https://instagram.com/alkawtharriver?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/alkawtharriver?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/alkawtharriver?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/alkawtharriver?igshid=NTc4MTIwNjQ2YQ==', '2023-05-08 00:12:38', '2023-05-08 00:24:36', NULL, '4363886D-404E-4537-8B09-83A5DE536B0B.jpeg', 'A91F616F-6303-466F-B4BF-A1911E07A54F.jpeg', NULL, 'EABA9E5E-3658-4294-A97E-52F3BA255CD1.jpeg', 'EABA9E5E-3658-4294-A97E-52F3BA255CD1.jpeg', '4', '3', NULL),
(76, 'Sentry Solutions', 123, '6', 'Sentry Solution is a leading security solutions provider based in Bahrain, dedicated to providing security services. We offer a range of security solutions, including routing, CCTV, maintenance, video intercom & fire and safety.', '1', '9:00', '5:00', '9:00', '5:00', '9:00', '5:00', '9:00', '5:00', 'Closed', NULL, '9:00', '5:00', '9:00', '5:00', 'Bahrain', 'Manama', 'Al Gudaibiya', '26.2244557', '50.5963323', NULL, NULL, NULL, NULL, 'https://instagram.com/sentry.security?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/sentry.security?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/sentry.security?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/sentry.security?igshid=NTc4MTIwNjQ2YQ==', '2023-05-08 16:56:07', '2023-05-08 17:08:48', NULL, 'Sentry Company Profile.pdf', 'Sentry Company Profile.pdf', NULL, '2A632368-D6FF-45A7-8BCD-E07F4D40C717.png', '2A632368-D6FF-45A7-8BCD-E07F4D40C717.png', '3', '3', NULL),
(77, 'Crystal Square Glass', 124, '34', 'تصميم و تنفيذ جميع انواع الأبواب و النوافذ، دواليب المطابخ، الواجهات الزجاجية للمحلات ، السلالم، السلالم، الشرفات \"سكاي لايت\" الجدران الزجاجية للمباني، اعمالي الزجاج بدون اطار، قطع الأثاث الزجاجية.', '1', '8:00', '6:00', '8:00', '6:00', '8:00', '6:00', '8:00', '6:00', 'Closed', NULL, '8:00', '6:00', '8:00', '6:00', 'Bahrain', 'Capital Governate', 'Manama', '26.2171402', '50.6064622', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-08 18:33:39', '2023-05-08 19:36:44', NULL, '859AC3D2-147D-4309-BB9D-0107B03635A5.png', '74A642B6-24DA-4A66-B05E-B0BBAD461B1D.png', NULL, 'D1887FF9-71AF-4C8F-947A-720DC1914480.png', 'D1887FF9-71AF-4C8F-947A-720DC1914480.png', '2', '3', NULL),
(78, 'Crystal Square MEP', 127, '31', 'Crystal Square MEP is a professional engineering firm based in Bahrain that specializes in providing Mechanical, Electrical, and Plumbing (MEP)  for construction projects. The company\'s team of engineers, technicians, and designers.', '1', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', 'Closed', NULL, '8:00', '5:00', '8:00', '5:00', 'Bahrain', 'Capital governate', 'Manama', '26.2141904', '50.6089128', NULL, NULL, NULL, NULL, 'https://instagram.com/crystal.square.mep?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/crystal.square.mep?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/crystal.square.mep?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/crystal.square.mep?igshid=NTc4MTIwNjQ2YQ==', '2023-05-08 19:32:24', '2023-05-08 19:37:52', NULL, 'CFBB6D34-CEF8-426F-8E63-5C32C179D064.jpeg', '004DC479-DF4E-4AB1-B4BF-2CD09D83F5BE.jpeg', NULL, 'A0CBC4FE-CB59-42FF-AAE3-5059FEF180F4.jpeg', 'A0CBC4FE-CB59-42FF-AAE3-5059FEF180F4.jpeg', '5', '2', NULL),
(79, 'Maysilun Contracting', 128, '17', 'Maysilun Contracting & Maintenance, we offer various services suck as property management, maintenance, & construction.\r\nمؤسسة ميسلون للمقاولات العامه و التسويق العقاري في البحرين. نقوم ب أداره أملاك عقارية، صيانه و بناء، مقاولات عامه.', '1', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', 'Closed', NULL, '8:00', '5:00', '8:00', '5:00', 'Bahrain', 'Capital Governate', 'Manama', '26.1475912', '50.5561795', NULL, NULL, NULL, NULL, 'https://instagram.com/m.construction22?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/m.construction22?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/m.construction22?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/m.construction22?igshid=NTc4MTIwNjQ2YQ==', '2023-05-08 20:07:27', '2023-05-08 20:11:56', NULL, '6B79BC4D-1DA3-4FB5-AFF4-76F27A3F8AC0.jpeg', '2E7C07F1-1D43-4ABE-9CCA-7E480B73C53B.jpeg', NULL, 'C6CB33E3-5779-4EF3-B56F-C118BEF34A05.jpeg', 'C6CB33E3-5779-4EF3-B56F-C118BEF34A05.jpeg', '4', '2', NULL),
(80, 'Nahr Elfounoun Furniture', 129, '28', 'Nahr El Founoun is a Bahraini furniture company that offers furniture, interior design, curtains, wood, painting, and flooring.\r\nنهر الفنون شركة أثاث مقرها البحرين تقدم قطع أثاث وخدمات التصميم ، بما في ذلك الستائر والأعمال الخشبية والطلاء والأرضيات', '1', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', 'Closed', NULL, '8:00', '4:00', '8:00', '5:00', 'Bahrain', 'Southern Governate', 'Hamala', '26.1368363', '50.4716336', NULL, NULL, NULL, NULL, 'https://instagram.com/noorelfounoun?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/noorelfounoun?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/noorelfounoun?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/noorelfounoun?igshid=NTc4MTIwNjQ2YQ==', '2023-05-08 22:32:06', '2023-05-08 22:35:10', NULL, 'EAB44CB1-9756-4487-B6BD-3C0DB60DD8D5.jpeg', 'F7251C46-3690-4221-9C12-D112BC3211AD.jpeg', NULL, 'F9D0A920-D223-42BB-A1BD-FCDD33FE511D.jpeg', 'F9D0A920-D223-42BB-A1BD-FCDD33FE511D.jpeg', '5', '3', NULL),
(81, 'Bianca Construction', 130, '25', 'Bianca construction in bahrain. Our team of contractors are dedicated to providing services for all types of construction.\r\n شركة إنشاءات في البحرين. فريقنا من العامل\r\nذوي الخبرة لتقديم خدمات من الدرجة األولى لجميع مشاريع البناء', '1', '8:00', '6:00', '8:00', '6:00', '8:00', '6:00', '8:00', '6:00', 'Closed', NULL, '8:00', '6:00', '8:00', '6:00', 'Bahrain', 'Southern Governate', 'a’ali', '26.1580384', '50.5147488', NULL, NULL, NULL, NULL, 'Www.biancaa.net', 'Www.biancaa.net', 'https://maps.app.goo.gl/hPXeo4rVZNeu1EYg9?g_st=iwb', 'https://maps.app.goo.gl/hPXeo4rVZNeu1EYg9?g_st=iwb', '2023-05-09 00:53:46', '2023-05-09 01:48:58', NULL, '7D065E84-DA42-467E-B309-55BEE46E89D6.jpeg', '0FFA07D4-931F-484C-BCFE-5142E2B402AC.jpeg', NULL, 'F42266B2-5A06-4F1B-AD50-758B4F596972.jpeg', 'F42266B2-5A06-4F1B-AD50-758B4F596972.jpeg', '2', '3', NULL),
(82, 'Telal Contracting', 131, '25', 'Telal Construction is a Bahrain-based company that specializes in building, renovation, plumbing, tile fixing, and building maintenance services تلال للإنشاءات هي شركة مقرها البحرين متخصصة في خدمات البناء والتجديد والسباكة وتركيب البلاط وصيانة المباني', '1', '8:00', '6:00', '8:00', '6:00', '8:00', '6:00', '8:00', '6:00', 'Closed', NULL, '8:00', '6:00', '8:00', '6:00', 'Bahrain', 'Hamad Town', 'karzakan', '26.1325351', '50.4931084', NULL, NULL, NULL, NULL, 'https://instagram.com/telal_contracting.bh?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/telal_contracting.bh?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/telal_contracting.bh?igshid=NTc4MTIwNjQ2YQ==', 'https://instagram.com/telal_contracting.bh?igshid=NTc4MTIwNjQ2YQ==', '2023-05-09 01:41:39', '2023-05-09 02:02:45', NULL, 'E1CFDB57-0949-41E2-820E-7B14DC34D0BA.jpeg', 'D860D3EE-AD24-40D2-9788-7DFAF2110E23.jpeg', NULL, '5F4387DD-D8C8-494E-B4A2-591363CC2894.jpeg', '5F4387DD-D8C8-494E-B4A2-591363CC2894.jpeg', '4', '3', NULL),
(83, 'Creators Interiors', 132, '28', 'Creators Interiors is a design studio based in Bahrain. Skilled and creative designers are passionate about creating bespoke interiors. \r\nاستوديو للتصميم الداخلي يقع في البحرين. المصممون ذوو المهارات العالية والمبدعون متحمسون لإنشاء تصميمات داخلية.', '1', '9:00', '6:00', '9:00', '6:00', '9:00', '6:00', '8:00', '6:00', 'Closed', NULL, '9:00', '6:00', '9:00', '6:00', 'Bahrain', 'Capital Governate', 'Seef District', '26.2355173', '50.5371483', NULL, NULL, NULL, NULL, 'https://instagram.com/creators.interiors?igshid=MzRlODBiNWFlZA==', 'https://instagram.com/creators.interiors?igshid=MzRlODBiNWFlZA==', 'https://instagram.com/creators.interiors?igshid=MzRlODBiNWFlZA==', 'https://instagram.com/creators.interiors?igshid=MzRlODBiNWFlZA==', '2023-05-14 17:52:20', '2023-05-14 17:59:01', NULL, '78E8FF9D-D442-4E24-A18B-BA01B3601DC1.png', 'DAC9E2AD-2372-473F-98A8-05C5669D51DE.png', NULL, '2558D533-A855-4536-B075-7D0D086739B1.png', '2558D533-A855-4536-B075-7D0D086739B1.png', '4', '3', NULL),
(84, 'Aldinjil Construction', 133, '25', 'Al Dinjil Construction is construction company in Bahrain, Specialised services including commercial and residential buildings.\r\nشركة إنشاءات رائدة في البحرين ، متخصصة في مجموعة واسعة من خدمات البناء بما في ذلك المباني التجارية والسكنية', '1', '8:00', '6:00', '8:00', '6:00', '8:00', '6:00', '8:00', '6:00', 'Closed', NULL, '8:00', '6:00', '8:00', '6:00', 'Bahrain', 'Hamala', 'Southern Governate', '26.1469194', '50.4736319', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-15 00:07:48', '2023-05-15 00:10:28', NULL, '9E70207F-83CF-46F2-8779-2A38AD52A883.jpeg', '4ECC2B58-FE63-4BB9-8B47-54842789A720.jpeg', NULL, '96E3E710-7855-4A41-AA6D-3B03B85D2A95.jpeg', '96E3E710-7855-4A41-AA6D-3B03B85D2A95.jpeg', '5', '3', NULL),
(85, 'Sultan Gardens', 134, '1', 'Sultan Gardens, we specialise in landscape space planning and execution, pergolas, water features & wall cladding .\r\n\r\nحدائق السلطان,  متخصصون في تخطيط وتنفيذ مساحات المناظر الطبيعية ، والبرجولات ، والمسطحات المائية ، وتكسية الجدران.', '1', '9:00', '5:00', '9:00', '5:00', '9:00', '5:00', '9:00', '5:00', 'Closed', NULL, '9:00', '5:00', '9:00', '5:00', 'Bahrain', 'Saar', 'Janabiya', '26.1807167', '50.4813841', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-17 19:01:15', '2023-05-17 19:07:29', NULL, '8F46153D-8C8B-4A0A-85CA-E7C514D1CD0E.jpeg', 'C8F87FE4-4274-4E39-9150-64CC1525F469.jpeg', NULL, 'B757398B-50C8-4AEC-A751-B684D79F08E1.jpeg', 'B757398B-50C8-4AEC-A751-B684D79F08E1.jpeg', '5', '3', NULL),
(86, 'Repairco Technology Group', 135, '6', 'Welcome to Repairco Technology Services! We are a team of experts in mobile phone, computer, and CCTV services, repairs, and maintenance. Our mission is to provide top-notch technical solutions to ensure the smooth functioning of your devices.', '1', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', '8:00', '5:00', 'Closed', NULL, '8:00', '5:00', '8:00', '5:00', 'Bahrain', 'Sanad', 'Capital Governate', '26.1485609', '50.5838978', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-17 20:29:56', '2023-05-17 20:34:01', NULL, '892A1BDB-76EE-42C3-B622-C2DA02B9710A.jpeg', 'C4F2433A-89F2-410B-AFEB-BD8478E8C1E0.jpeg', NULL, '7B1EBE24-70DC-4F26-BA1E-E06500C2AB94.jpeg', '7B1EBE24-70DC-4F26-BA1E-E06500C2AB94.jpeg', '5', '3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_analytics`
--

CREATE TABLE `business_analytics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_info` varchar(255) DEFAULT NULL,
  `business_id` varchar(255) DEFAULT NULL,
  `clicks` varchar(255) DEFAULT NULL,
  `leads` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_analytics`
--

INSERT INTO `business_analytics` (`id`, `user_info`, `business_id`, `clicks`, `leads`, `created_at`, `updated_at`, `role`) VALUES
(1, '157.49.176.34', '2', '1', '0', '2021-11-18 15:28:22', '2021-11-18 15:28:22', 'Unknown'),
(2, '44', '2', '3', '0', '2021-11-18 21:09:38', '2021-11-18 22:00:22', 'Vendor'),
(3, '109.161.176.35', '2', '1', '0', '2021-11-18 21:40:58', '2021-11-18 21:40:58', 'Unknown'),
(4, '31.205.47.237', '2', '4', '0', '2021-11-18 21:47:17', '2021-11-22 08:36:33', 'Unknown'),
(5, '31.205.47.237', '4', '2', '0', '2021-11-18 21:49:43', '2021-11-24 22:34:56', 'Unknown'),
(6, '157.49.167.148', '2', '1', '0', '2021-11-18 23:02:46', '2021-11-18 23:02:46', 'Unknown'),
(7, '31.205.47.253', '3', '2', '0', '2021-11-19 20:20:14', '2021-11-19 21:02:54', 'Unknown'),
(8, '48', '2', '2', '0', '2021-11-20 19:12:31', '2021-11-20 19:14:00', 'Vendor'),
(9, '48', '4', '1', '0', '2021-11-20 19:13:05', '2021-11-20 19:13:05', 'Vendor'),
(10, '77.69.182.5', '3', '1', '0', '2021-11-20 19:15:36', '2021-11-20 19:15:36', 'Unknown'),
(11, '77.69.182.5', '6', '1', '0', '2021-11-20 19:16:02', '2021-11-20 19:16:02', 'Unknown'),
(12, '77.69.182.5', '28', '1', '0', '2021-11-20 19:19:37', '2021-11-20 19:19:37', 'Unknown'),
(13, '10', '4', '9', '0', '2021-11-20 19:24:00', '2021-11-20 19:25:42', 'Customer'),
(14, '8', '3', '43', '0', '2021-11-20 19:42:13', '2022-02-20 14:04:38', 'Customer'),
(15, '8', '2', '3', '0', '2021-11-20 19:49:17', '2021-11-20 19:56:34', 'Customer'),
(16, '47', '28', '2', '0', '2021-11-22 08:44:47', '2021-11-22 08:46:36', 'Vendor'),
(17, '47', '3', '4', '0', '2021-11-22 08:46:29', '2021-12-09 02:59:42', 'Vendor'),
(18, '46', '3', '3', '0', '2021-11-22 17:43:53', '2021-11-24 16:43:55', 'Vendor'),
(19, '157.49.137.70', '2', '1', '0', '2021-11-23 11:37:06', '2021-11-23 11:37:06', 'Unknown'),
(20, '44', '3', '9', '0', '2021-11-24 15:20:07', '2021-11-24 22:20:47', 'Vendor'),
(21, '46', '28', '1', '0', '2021-11-24 16:42:30', '2021-11-24 16:42:30', 'Vendor'),
(22, '46', '6', '1', '0', '2021-11-24 16:42:58', '2021-11-24 16:42:58', 'Vendor'),
(23, '46', '4', '1', '0', '2021-11-24 16:43:28', '2021-11-24 16:43:28', 'Vendor'),
(24, '44', '6', '1', '0', '2021-11-24 18:39:02', '2021-11-24 18:39:02', 'Vendor'),
(25, '47', '2', '1', '0', '2021-11-24 22:26:21', '2021-11-24 22:26:21', 'Vendor'),
(26, '31.205.47.237', '5', '1', '0', '2021-11-24 22:35:37', '2021-11-24 22:35:37', 'Unknown'),
(27, '31.205.47.237', '6', '1', '0', '2021-11-24 22:35:58', '2021-11-24 22:35:58', 'Unknown'),
(28, '47', '6', '1', '0', '2021-11-24 22:41:05', '2021-11-24 22:41:05', 'Vendor'),
(29, '1', '4', '3', '0', '2021-11-24 22:50:43', '2021-11-24 23:03:21', 'Vendor'),
(30, '37.131.60.24', '6', '1', '0', '2021-11-24 23:00:45', '2021-11-24 23:00:45', 'Unknown'),
(31, '82.194.32.175', '6', '1', '0', '2021-11-24 23:47:03', '2021-11-24 23:47:03', 'Unknown'),
(32, '89.148.36.108', '3', '2', '0', '2021-11-25 11:59:30', '2021-11-25 11:59:54', 'Unknown'),
(33, '185.49.160.52', '6', '2', '0', '2021-11-25 12:08:19', '2021-11-25 14:55:09', 'Unknown'),
(34, '8', '4', '6', '0', '2021-11-25 15:28:34', '2021-12-29 01:09:01', 'Customer'),
(35, '5.2.105.181', '5', '1', '0', '2021-11-25 15:58:22', '2021-11-25 15:58:22', 'Unknown'),
(36, '5.2.105.181', '28', '3', '0', '2021-11-25 21:04:34', '2022-01-28 18:26:03', 'Unknown'),
(37, '5.2.105.181', '4', '4', '0', '2021-11-25 21:08:03', '2022-01-28 18:23:25', 'Unknown'),
(38, '11', '4', '2', '0', '2021-11-25 21:11:40', '2021-11-25 21:12:26', 'Customer'),
(39, '11', '3', '4', '1', '2021-11-25 21:21:37', '2022-03-30 23:27:06', 'Customer'),
(40, '213.205.192.38', '6', '1', '0', '2021-11-26 00:16:06', '2021-11-26 00:16:06', 'Unknown'),
(41, '157.49.76.156', '4', '1', '0', '2021-11-27 20:56:32', '2021-11-27 20:56:32', 'Unknown'),
(42, '213.205.192.54', '4', '2', '0', '2021-11-28 10:15:20', '2021-11-28 10:24:59', 'Unknown'),
(43, '46.184.189.98', '28', '1', '0', '2021-11-28 17:54:36', '2021-11-28 17:54:36', 'Unknown'),
(44, '80.95.221.170', '3', '2', '0', '2021-11-28 17:54:44', '2021-11-28 17:56:00', 'Unknown'),
(45, '46.184.189.98', '3', '1', '0', '2021-11-28 17:56:24', '2021-11-28 17:56:24', 'Unknown'),
(46, '80.95.221.170', '4', '2', '0', '2021-11-28 17:57:46', '2021-11-28 17:58:21', 'Unknown'),
(47, '46.184.189.98', '4', '2', '0', '2021-11-28 17:58:31', '2021-11-28 17:59:39', 'Unknown'),
(48, '109.161.176.35', '4', '1', '0', '2021-11-28 18:01:33', '2021-11-28 18:01:33', 'Unknown'),
(49, '213.205.192.54', '3', '1', '0', '2021-11-28 22:35:32', '2021-11-28 22:35:32', 'Unknown'),
(50, '157.55.39.9', '4', '7', '0', '2021-11-29 02:45:53', '2021-12-06 23:59:02', 'Unknown'),
(51, '40.77.167.46', '3', '4', '0', '2021-11-29 05:17:25', '2021-12-09 08:34:11', 'Unknown'),
(52, '213.205.192.4', '5', '1', '0', '2021-11-29 06:12:47', '2021-11-29 06:12:47', 'Unknown'),
(53, '157.55.39.108', '6', '5', '0', '2021-11-29 07:46:22', '2021-12-15 10:56:25', 'Unknown'),
(54, '80.95.221.170', '6', '1', '0', '2021-11-29 12:23:18', '2021-11-29 12:23:18', 'Unknown'),
(55, '47', '4', '1', '0', '2021-11-30 02:57:45', '2021-11-30 02:57:45', 'Vendor'),
(56, '52', '3', '199', '0', '2021-11-30 16:55:07', '2022-02-20 21:23:37', 'Vendor'),
(57, '82.194.32.152', '3', '1', '0', '2021-12-01 02:50:57', '2021-12-01 02:50:57', 'Unknown'),
(58, '199.47.82.16', '3', '1', '0', '2021-12-01 15:53:09', '2021-12-01 15:53:09', 'Unknown'),
(59, '213.205.192.42', '6', '1', '0', '2021-12-02 06:01:04', '2021-12-02 06:01:04', 'Unknown'),
(60, '8', '29', '63', '0', '2021-12-03 17:28:17', '2022-01-30 15:53:28', 'Customer'),
(61, '52', '29', '50', '0', '2021-12-04 17:33:09', '2022-02-19 21:17:27', 'Vendor'),
(62, '27.114.165.32', '29', '3', '0', '2021-12-04 17:40:26', '2021-12-04 17:43:33', 'Unknown'),
(63, '49.36.237.55', '3', '1', '0', '2021-12-04 18:05:33', '2021-12-04 18:05:33', 'Unknown'),
(64, '213.205.192.9', '4', '1', '0', '2021-12-04 19:42:38', '2021-12-04 19:42:38', 'Unknown'),
(65, '213.205.192.9', '6', '1', '0', '2021-12-05 06:30:37', '2021-12-05 06:30:37', 'Unknown'),
(66, '157.55.39.9', '5', '1', '0', '2021-12-06 19:33:16', '2021-12-06 19:33:16', 'Unknown'),
(67, '37.187.141.11', '3', '1', '0', '2021-12-07 01:44:49', '2021-12-07 01:44:49', 'Unknown'),
(68, '199.47.82.17', '4', '1', '0', '2021-12-07 06:27:27', '2021-12-07 06:27:27', 'Unknown'),
(69, '122.178.142.15', '29', '1', '0', '2021-12-07 16:33:45', '2021-12-07 16:33:45', 'Unknown'),
(70, '122.178.142.15', '3', '6', '0', '2021-12-07 16:39:44', '2021-12-07 16:49:07', 'Unknown'),
(71, '8', '6', '12', '1', '2021-12-07 17:03:58', '2021-12-27 23:06:39', 'Customer'),
(72, '106.197.121.153', '3', '8', '0', '2021-12-07 22:38:53', '2021-12-07 22:45:33', 'Unknown'),
(73, '1', '29', '9', '0', '2021-12-08 01:18:49', '2021-12-08 01:56:40', 'Vendor'),
(74, '1', '3', '5', '2', '2021-12-08 06:35:56', '2021-12-08 06:45:04', 'Customer'),
(75, '1', '29', '9', '2', '2021-12-08 16:12:52', '2021-12-08 16:52:16', 'Customer'),
(76, '54', '3', '1', '0', '2021-12-08 16:16:56', '2021-12-08 16:16:56', 'Vendor'),
(77, '54', '4', '1', '0', '2021-12-08 16:23:22', '2021-12-08 16:23:22', 'Vendor'),
(78, '54', '29', '1', '0', '2021-12-08 17:09:00', '2021-12-08 17:09:00', 'Vendor'),
(79, '88.201.23.191', '3', '1', '0', '2021-12-08 17:34:37', '2021-12-08 17:34:37', 'Unknown'),
(80, '88.201.23.191', '29', '2', '0', '2021-12-08 17:36:23', '2021-12-08 17:39:18', 'Unknown'),
(81, '31.205.47.237', '3', '8', '0', '2021-12-08 20:39:03', '2022-01-30 19:13:37', 'Unknown'),
(82, '109.161.178.20', '3', '12', '0', '2021-12-08 21:20:08', '2021-12-20 17:49:08', 'Unknown'),
(83, '9', '3', '12', '0', '2021-12-08 21:48:28', '2022-03-16 07:07:59', 'Customer'),
(84, '109.161.178.20', '29', '3', '0', '2021-12-08 21:49:54', '2021-12-23 18:11:44', 'Unknown'),
(85, '9', '4', '2', '0', '2021-12-08 21:53:34', '2021-12-28 07:43:32', 'Customer'),
(86, '109.161.178.20', '4', '1', '0', '2021-12-08 21:54:13', '2021-12-08 21:54:13', 'Unknown'),
(87, '52', '4', '26', '0', '2021-12-08 22:08:23', '2022-02-22 22:49:16', 'Vendor'),
(88, '52', '6', '69', '0', '2021-12-08 22:29:28', '2021-12-27 14:19:39', 'Vendor'),
(89, '52', '5', '12', '0', '2021-12-09 17:43:25', '2022-02-20 22:02:50', 'Vendor'),
(90, '110.42.177.104', '3', '1', '0', '2021-12-10 04:18:14', '2021-12-10 04:18:14', 'Unknown'),
(91, '213.205.196.213', '29', '1', '0', '2021-12-12 22:06:10', '2021-12-12 22:06:10', 'Unknown'),
(92, '213.205.196.208', '29', '2', '0', '2021-12-13 00:39:22', '2021-12-13 00:39:33', 'Unknown'),
(93, '157.55.39.98', '4', '2', '0', '2021-12-14 00:46:52', '2021-12-15 11:56:43', 'Unknown'),
(94, '157.55.39.103', '3', '2', '0', '2021-12-15 07:31:44', '2021-12-15 09:01:54', 'Unknown'),
(95, '157.55.39.98', '5', '1', '0', '2021-12-15 13:43:15', '2021-12-15 13:43:15', 'Unknown'),
(96, '213.205.192.212', '5', '1', '0', '2021-12-16 05:27:45', '2021-12-16 05:27:45', 'Unknown'),
(97, '213.205.192.80', '3', '2', '0', '2021-12-17 15:38:26', '2021-12-17 15:42:13', 'Unknown'),
(98, '92.255.108.173', '4', '1', '0', '2021-12-20 16:19:57', '2021-12-20 16:19:57', 'Unknown'),
(99, '92.255.108.173', '6', '1', '0', '2021-12-20 16:19:59', '2021-12-20 16:19:59', 'Unknown'),
(100, '106.197.121.139', '4', '3', '0', '2021-12-20 17:17:00', '2021-12-20 17:32:10', 'Unknown'),
(101, '40.77.167.46', '6', '4', '0', '2021-12-20 19:14:59', '2022-01-05 23:16:06', 'Unknown'),
(102, '5.2.105.181', '3', '14', '0', '2021-12-20 20:20:46', '2022-01-28 18:36:21', 'Unknown'),
(103, '77.69.169.254', '3', '2', '0', '2021-12-20 20:48:15', '2021-12-20 20:48:29', 'Unknown'),
(104, '77.69.169.254', '4', '1', '0', '2021-12-20 20:57:30', '2021-12-20 20:57:30', 'Unknown'),
(105, '40.77.167.83', '5', '6', '0', '2021-12-21 13:41:36', '2022-01-14 00:40:08', 'Unknown'),
(106, '207.46.13.88', '28', '2', '0', '2021-12-23 03:34:28', '2021-12-29 18:35:41', 'Unknown'),
(107, '207.46.13.88', '3', '2', '0', '2021-12-23 05:47:40', '2021-12-30 08:29:01', 'Unknown'),
(108, '213.205.196.218', '5', '1', '0', '2021-12-23 06:36:48', '2021-12-23 06:36:48', 'Unknown'),
(109, '40.77.167.83', '4', '4', '0', '2021-12-23 07:53:35', '2022-01-14 03:42:54', 'Unknown'),
(110, '109.161.178.20', '5', '1', '0', '2021-12-23 16:59:41', '2021-12-23 16:59:41', 'Unknown'),
(111, '88.201.116.216', '3', '51', '0', '2021-12-27 12:05:48', '2021-12-27 22:36:04', 'Unknown'),
(112, '122.178.24.145', '3', '12', '0', '2021-12-27 12:25:54', '2021-12-27 13:19:48', 'Unknown'),
(113, '88.201.116.216', '29', '7', '0', '2021-12-27 12:50:48', '2021-12-27 23:46:28', 'Unknown'),
(114, '8', '5', '4', '1', '2021-12-27 15:10:34', '2022-02-20 18:05:51', 'Customer'),
(115, '88.201.116.216', '5', '1', '0', '2021-12-27 18:22:18', '2021-12-27 18:22:18', 'Unknown'),
(116, '88.201.116.216', '4', '3', '0', '2021-12-27 18:31:40', '2022-01-03 21:22:22', 'Unknown'),
(117, '40.77.167.7', '29', '3', '0', '2021-12-28 03:49:44', '2022-01-14 08:48:05', 'Unknown'),
(118, '213.205.192.221', '3', '2', '0', '2021-12-28 07:42:29', '2021-12-28 08:06:52', 'Unknown'),
(119, '56', '3', '2', '0', '2021-12-28 07:55:53', '2021-12-30 01:57:12', 'Vendor'),
(120, '56', '29', '1', '0', '2021-12-28 08:00:19', '2021-12-28 08:00:19', 'Vendor'),
(121, '56', '5', '2', '0', '2021-12-28 08:02:28', '2021-12-28 08:02:29', 'Vendor'),
(122, '85.209.178.71', '3', '1', '0', '2021-12-28 14:07:25', '2021-12-28 14:07:25', 'Unknown'),
(123, '213.205.192.44', '3', '1', '0', '2021-12-30 01:51:42', '2021-12-30 01:51:42', 'Unknown'),
(124, '56', '4', '1', '0', '2021-12-30 02:15:55', '2021-12-30 02:15:55', 'Vendor'),
(125, '157.55.39.65', '3', '2', '0', '2022-01-06 00:48:11', '2022-01-14 13:01:54', 'Unknown'),
(126, '157.55.39.65', '28', '3', '0', '2022-01-06 05:00:46', '2022-01-14 03:52:04', 'Unknown'),
(127, '40.77.167.51', '6', '1', '0', '2022-01-14 03:52:29', '2022-01-14 03:52:29', 'Unknown'),
(128, '40.77.167.2', '29', '1', '0', '2022-01-14 23:35:49', '2022-01-14 23:35:49', 'Unknown'),
(129, '40.77.167.27', '4', '1', '0', '2022-01-16 18:39:54', '2022-01-16 18:39:54', 'Unknown'),
(130, '207.46.13.129', '3', '1', '0', '2022-01-17 07:24:48', '2022-01-17 07:24:48', 'Unknown'),
(131, '89.148.1.43', '5', '1', '0', '2022-01-20 12:58:52', '2022-01-20 12:58:52', 'Unknown'),
(132, '117.98.188.148', '5', '1', '0', '2022-01-20 13:36:38', '2022-01-20 13:36:38', 'Unknown'),
(133, '77.111.246.19', '3', '1', '0', '2022-01-20 17:46:26', '2022-01-20 17:46:26', 'Unknown'),
(134, '1', '3', '1', '0', '2022-01-20 21:19:00', '2022-01-20 21:19:00', 'Vendor'),
(135, '58', '30', '1', '0', '2022-01-21 20:33:35', '2022-01-21 20:33:35', 'Vendor'),
(136, '213.205.192.69', '3', '1', '0', '2022-01-22 00:36:26', '2022-01-22 00:36:26', 'Unknown'),
(137, '77.111.246.16', '5', '1', '0', '2022-01-22 12:09:09', '2022-01-22 12:09:09', 'Unknown'),
(138, '157.55.39.61', '3', '1', '0', '2022-01-22 19:58:10', '2022-01-22 19:58:10', 'Unknown'),
(139, '207.46.13.125', '6', '2', '0', '2022-01-22 22:19:40', '2022-01-23 08:05:18', 'Unknown'),
(140, '207.46.13.184', '5', '1', '0', '2022-01-23 00:03:24', '2022-01-23 00:03:24', 'Unknown'),
(141, '157.55.39.61', '28', '1', '0', '2022-01-23 05:55:08', '2022-01-23 05:55:08', 'Unknown'),
(142, '207.46.13.184', '4', '1', '0', '2022-01-23 10:49:18', '2022-01-23 10:49:18', 'Unknown'),
(143, '207.46.13.132', '29', '1', '0', '2022-01-24 06:43:54', '2022-01-24 06:43:54', 'Unknown'),
(144, '213.205.196.212', '3', '3', '0', '2022-01-25 03:40:34', '2022-01-25 06:08:50', 'Unknown'),
(145, '106.198.110.141', '3', '1', '0', '2022-01-25 11:31:35', '2022-01-25 11:31:35', 'Unknown'),
(146, '213.205.192.86', '3', '1', '0', '2022-01-28 01:46:03', '2022-01-28 01:46:03', 'Unknown'),
(147, '5.2.105.181', '29', '1', '0', '2022-01-28 17:08:48', '2022-01-28 17:08:48', 'Unknown'),
(148, '59', '5', '1', '0', '2022-01-28 17:43:07', '2022-01-28 17:43:07', 'Vendor'),
(149, '5.2.105.181', '6', '1', '0', '2022-01-28 18:22:54', '2022-01-28 18:22:54', 'Unknown'),
(150, '58', '4', '1', '0', '2022-01-28 18:37:51', '2022-01-28 18:37:51', 'Vendor'),
(151, '58', '3', '4', '0', '2022-01-28 18:40:44', '2022-03-24 18:12:46', 'Vendor'),
(152, '31.205.47.165', '4', '1', '0', '2022-01-29 21:40:54', '2022-01-29 21:40:54', 'Unknown'),
(153, '77.69.241.102', '6', '2', '0', '2022-01-29 21:51:51', '2022-01-29 22:22:06', 'Unknown'),
(154, '109.161.178.185', '5', '1', '0', '2022-01-29 21:58:45', '2022-01-29 21:58:45', 'Unknown'),
(155, '59', '31', '1', '0', '2022-01-29 22:01:38', '2022-01-29 22:01:38', 'Vendor'),
(156, '31.205.47.253', '4', '1', '0', '2022-01-29 22:03:51', '2022-01-29 22:03:51', 'Unknown'),
(157, '14', '4', '1', '0', '2022-01-29 22:11:40', '2022-01-29 22:11:40', 'Customer'),
(158, '14', '3', '1', '0', '2022-01-29 22:17:05', '2022-01-29 22:17:05', 'Customer'),
(159, '14', '5', '2', '0', '2022-01-29 22:18:32', '2022-01-29 22:37:54', 'Customer'),
(160, '14', '6', '4', '0', '2022-01-29 22:22:49', '2022-01-29 22:24:25', 'Customer'),
(161, '8', '31', '7', '1', '2022-01-29 22:24:36', '2022-01-30 16:25:53', 'Customer'),
(162, '59', '3', '2', '0', '2022-01-29 22:40:54', '2022-02-22 23:05:43', 'Vendor'),
(163, '14', '28', '3', '1', '2022-01-29 22:43:00', '2022-01-29 22:43:36', 'Customer'),
(164, '109.161.178.185', '31', '7', '0', '2022-01-29 22:47:10', '2022-02-02 14:28:56', 'Unknown'),
(165, '60', '5', '1', '0', '2022-01-29 22:52:47', '2022-01-29 22:52:47', 'Vendor'),
(166, '109.161.178.185', '3', '8', '0', '2022-01-29 22:56:44', '2022-01-30 19:41:32', 'Unknown'),
(167, '213.205.192.248', '5', '1', '0', '2022-01-30 05:35:18', '2022-01-30 05:35:18', 'Unknown'),
(168, '213.205.192.248', '3', '1', '0', '2022-01-30 05:35:50', '2022-01-30 05:35:50', 'Unknown'),
(169, '63', '3', '1', '0', '2022-01-30 16:11:25', '2022-01-30 16:11:25', 'Vendor'),
(170, '63', '31', '2', '0', '2022-01-30 16:11:50', '2022-01-30 16:20:10', 'Vendor'),
(171, '63', '29', '1', '0', '2022-01-30 16:19:44', '2022-01-30 16:19:44', 'Vendor'),
(172, '59', '29', '1', '0', '2022-01-30 16:33:33', '2022-01-30 16:33:33', 'Vendor'),
(173, '109.161.178.185', '4', '1', '0', '2022-01-30 17:11:27', '2022-01-30 17:11:27', 'Unknown'),
(174, '109.161.178.185', '33', '25', '0', '2022-01-30 19:50:43', '2022-02-02 14:59:54', 'Unknown'),
(175, '15', '33', '8', '0', '2022-01-30 19:56:44', '2022-02-01 20:05:26', 'Customer'),
(176, '157.55.39.76', '5', '2', '0', '2022-01-30 22:55:13', '2022-02-04 13:51:21', 'Unknown'),
(177, '157.55.39.76', '4', '1', '0', '2022-01-30 23:20:44', '2022-01-30 23:20:44', 'Unknown'),
(178, '89.148.39.30', '3', '7', '0', '2022-01-31 00:20:46', '2022-01-31 01:12:04', 'Unknown'),
(179, '89.148.39.30', '33', '4', '0', '2022-01-31 00:21:23', '2022-01-31 00:44:53', 'Unknown'),
(180, '15', '5', '4', '1', '2022-01-31 00:27:08', '2022-01-31 00:28:13', 'Customer'),
(181, '15', '4', '2', '1', '2022-01-31 00:29:43', '2022-01-31 00:30:09', 'Customer'),
(182, '15', '3', '2', '1', '2022-01-31 00:30:59', '2022-01-31 00:31:23', 'Customer'),
(183, '15', '6', '3', '1', '2022-01-31 00:31:53', '2022-01-31 00:32:12', 'Customer'),
(184, '89.148.39.30', '28', '2', '0', '2022-01-31 01:07:40', '2022-01-31 01:12:28', 'Unknown'),
(185, '207.46.13.182', '3', '1', '0', '2022-01-31 09:54:47', '2022-01-31 09:54:47', 'Unknown'),
(186, '40.77.167.41', '6', '1', '0', '2022-01-31 12:02:18', '2022-01-31 12:02:18', 'Unknown'),
(187, '15', '34', '9', '1', '2022-01-31 17:33:18', '2022-02-01 19:52:12', 'Customer'),
(188, '109.161.178.185', '34', '11', '0', '2022-01-31 17:47:59', '2022-02-02 15:15:43', 'Unknown'),
(189, '17', '34', '16', '0', '2022-01-31 17:55:12', '2022-02-01 19:53:42', 'Customer'),
(190, '15', '31', '2', '2', '2022-01-31 18:53:55', '2022-01-31 18:58:03', 'Customer'),
(191, '207.46.13.38', '29', '1', '0', '2022-01-31 21:51:39', '2022-01-31 21:51:39', 'Unknown'),
(192, '16', '34', '6', '0', '2022-02-01 19:48:00', '2022-02-01 19:55:30', 'Customer'),
(193, '16', '33', '3', '0', '2022-02-01 20:01:47', '2022-02-01 20:03:18', 'Customer'),
(194, '213.205.192.80', '34', '1', '0', '2022-02-01 21:05:21', '2022-02-01 21:05:21', 'Unknown'),
(195, '213.205.192.80', '31', '1', '0', '2022-02-01 21:07:45', '2022-02-01 21:07:45', 'Unknown'),
(196, '18', '34', '2', '0', '2022-02-02 13:45:05', '2022-02-02 13:45:47', 'Customer'),
(197, '71', '35', '3', '0', '2022-02-02 15:41:49', '2022-02-02 15:47:25', 'Vendor'),
(198, '71', '34', '2', '0', '2022-02-02 15:43:38', '2022-02-02 15:46:44', 'Vendor'),
(199, '71', '33', '2', '0', '2022-02-02 15:44:04', '2022-02-02 15:45:59', 'Vendor'),
(200, '71', '31', '1', '0', '2022-02-02 15:44:52', '2022-02-02 15:44:52', 'Vendor'),
(201, '157.55.39.163', '3', '1', '0', '2022-02-03 15:05:03', '2022-02-03 15:05:03', 'Unknown'),
(202, '5.2.105.181', '35', '4', '0', '2022-02-03 17:10:22', '2022-02-17 15:20:40', 'Unknown'),
(203, '5.2.105.181', '31', '3', '0', '2022-02-03 17:55:53', '2022-02-03 19:07:33', 'Unknown'),
(204, '207.46.13.151', '4', '1', '0', '2022-02-09 02:13:27', '2022-02-09 02:13:27', 'Unknown'),
(205, '157.55.39.146', '3', '2', '0', '2022-02-09 18:37:27', '2022-02-09 22:57:32', 'Unknown'),
(206, '31.205.47.165', '33', '1', '0', '2022-02-09 22:30:57', '2022-02-09 22:30:57', 'Unknown'),
(207, '40.77.167.68', '6', '1', '0', '2022-02-10 05:38:48', '2022-02-10 05:38:48', 'Unknown'),
(208, '207.46.13.151', '5', '1', '0', '2022-02-10 08:44:55', '2022-02-10 08:44:55', 'Unknown'),
(209, '72', '35', '1', '0', '2022-02-10 16:56:20', '2022-02-10 16:56:20', 'Vendor'),
(210, '72', '34', '1', '0', '2022-02-10 16:56:28', '2022-02-10 16:56:28', 'Vendor'),
(211, '72', '33', '1', '0', '2022-02-14 04:29:31', '2022-02-14 04:29:31', 'Vendor'),
(212, '40.77.167.64', '28', '1', '0', '2022-02-14 05:28:03', '2022-02-14 05:28:03', 'Unknown'),
(213, '157.55.39.197', '3', '1', '0', '2022-02-15 01:47:32', '2022-02-15 01:47:32', 'Unknown'),
(214, '199.47.82.17', '5', '1', '0', '2022-02-15 09:26:21', '2022-02-15 09:26:21', 'Unknown'),
(215, '5.2.105.181', '33', '1', '0', '2022-02-17 15:04:48', '2022-02-17 15:04:48', 'Unknown'),
(216, '1', '35', '1', '0', '2022-02-18 11:25:37', '2022-02-18 11:25:37', 'Vendor'),
(217, '157.55.39.227', '5', '1', '0', '2022-02-18 19:37:32', '2022-02-18 19:37:32', 'Unknown'),
(218, '157.55.39.227', '4', '1', '0', '2022-02-18 19:52:03', '2022-02-18 19:52:03', 'Unknown'),
(219, '207.46.13.105', '6', '1', '0', '2022-02-19 03:03:26', '2022-02-19 03:03:26', 'Unknown'),
(220, '207.46.13.100', '29', '4', '0', '2022-02-19 07:43:46', '2022-03-06 02:28:42', 'Unknown'),
(221, '52', '31', '1', '0', '2022-02-19 16:41:03', '2022-02-19 16:41:03', 'Vendor'),
(222, '109.161.176.171', '4', '13', '0', '2022-02-19 18:58:02', '2022-02-22 16:49:49', 'Unknown'),
(223, '109.161.176.171', '5', '13', '0', '2022-02-19 18:58:53', '2022-02-21 16:46:40', 'Unknown'),
(224, '157.49.200.113', '6', '3', '0', '2022-02-19 19:08:15', '2022-02-19 19:13:35', 'Unknown'),
(225, '157.49.200.113', '3', '5', '0', '2022-02-19 19:28:08', '2022-02-19 20:14:57', 'Unknown'),
(226, '157.49.200.113', '4', '6', '0', '2022-02-19 20:01:11', '2022-02-19 20:08:05', 'Unknown'),
(227, '157.49.200.113', '31', '4', '0', '2022-02-19 20:16:08', '2022-02-19 20:27:05', 'Unknown'),
(228, '109.161.176.171', '31', '12', '0', '2022-02-19 20:20:05', '2022-02-21 14:29:42', 'Unknown'),
(229, '73', '3', '1', '0', '2022-02-20 13:19:50', '2022-02-20 13:19:50', 'Vendor'),
(230, '109.161.176.171', '33', '2', '0', '2022-02-20 14:09:01', '2022-02-20 14:14:32', 'Unknown'),
(231, '109.161.176.171', '34', '2', '0', '2022-02-20 14:10:38', '2022-02-20 14:28:35', 'Unknown'),
(232, '109.161.176.171', '35', '1', '0', '2022-02-20 14:15:39', '2022-02-20 14:15:39', 'Unknown'),
(233, '109.161.176.171', '36', '39', '0', '2022-02-20 14:28:03', '2022-02-21 15:16:37', 'Unknown'),
(234, '109.161.176.171', '3', '16', '0', '2022-02-20 14:59:24', '2022-02-21 19:10:38', 'Unknown'),
(235, '157.49.83.101', '36', '2', '0', '2022-02-20 15:33:24', '2022-02-20 19:44:01', 'Unknown'),
(236, '73', '36', '11', '0', '2022-02-20 15:36:13', '2022-02-20 15:51:15', 'Vendor'),
(237, '109.161.176.171', '38', '35', '0', '2022-02-20 16:38:49', '2022-02-21 15:13:15', 'Unknown'),
(238, '52', '30', '1', '0', '2022-02-20 16:40:17', '2022-02-20 16:40:17', 'Vendor'),
(239, '109.161.176.171', '29', '5', '0', '2022-02-20 17:37:17', '2022-02-22 23:38:33', 'Unknown'),
(240, '8', '36', '1', '3', '2022-02-20 17:41:48', '2022-02-20 17:41:48', 'Customer'),
(241, '8', '30', '1', '3', '2022-02-20 17:43:21', '2022-02-20 17:43:21', 'Customer'),
(242, '157.49.83.101', '5', '1', '0', '2022-02-20 17:57:47', '2022-02-20 17:57:47', 'Unknown'),
(243, '109.161.176.171', '40', '5', '0', '2022-02-20 18:33:07', '2022-02-22 17:59:20', 'Unknown'),
(244, '17', '38', '5', '1', '2022-02-20 18:39:54', '2022-02-20 18:49:04', 'Customer'),
(245, '64', '38', '1', '0', '2022-02-20 18:49:48', '2022-02-20 18:49:48', 'Vendor'),
(246, '61', '36', '1', '0', '2022-02-20 19:23:45', '2022-02-20 19:23:45', 'Vendor'),
(247, '155.93.230.141', '3', '1', '0', '2022-02-20 22:00:15', '2022-02-20 22:00:15', 'Unknown'),
(248, '155.93.230.141', '5', '1', '0', '2022-02-20 22:03:58', '2022-02-20 22:03:58', 'Unknown'),
(249, '109.161.176.171', '41', '6', '0', '2022-02-21 15:00:23', '2022-02-22 16:49:23', 'Unknown'),
(250, '109.161.176.171', '42', '1', '0', '2022-02-21 15:02:41', '2022-02-21 15:02:41', 'Unknown'),
(251, '157.55.39.192', '28', '3', '0', '2022-02-22 04:10:20', '2022-03-02 05:25:52', 'Unknown'),
(252, '109.161.176.171', '28', '1', '0', '2022-02-22 16:14:33', '2022-02-22 16:14:33', 'Unknown'),
(253, '19', '38', '2', '0', '2022-02-22 16:44:44', '2022-02-22 16:44:54', 'Customer'),
(254, '109.161.176.171', '30', '1', '0', '2022-02-22 16:48:34', '2022-02-22 16:48:34', 'Unknown'),
(255, '19', '29', '1', '0', '2022-02-22 18:00:19', '2022-02-22 18:00:19', 'Customer'),
(256, '19', '40', '1', '0', '2022-02-22 18:01:15', '2022-02-22 18:01:15', 'Customer'),
(257, '157.55.39.192', '3', '4', '0', '2022-02-22 20:18:12', '2022-03-08 19:44:48', 'Unknown'),
(258, '213.205.196.245', '6', '1', '0', '2022-02-22 20:29:09', '2022-02-22 20:29:09', 'Unknown'),
(259, '76', '4', '1', '0', '2022-02-22 22:25:20', '2022-02-22 22:25:20', 'Vendor'),
(260, '76', '3', '3', '0', '2022-02-22 22:25:52', '2022-02-23 00:19:16', 'Vendor'),
(261, '84.255.184.55', '3', '1', '0', '2022-02-22 23:34:30', '2022-02-22 23:34:30', 'Unknown'),
(262, '21', '30', '1', '0', '2022-02-22 23:38:43', '2022-02-22 23:38:43', 'Customer'),
(263, '31.205.47.165', '3', '1', '0', '2022-02-22 23:42:47', '2022-02-22 23:42:47', 'Unknown'),
(264, '21', '3', '1', '0', '2022-02-22 23:42:54', '2022-02-22 23:42:54', 'Customer'),
(265, '40.77.167.2', '4', '3', '0', '2022-02-24 12:16:18', '2022-03-06 11:07:14', 'Unknown'),
(266, '40.77.167.2', '5', '3', '0', '2022-02-25 12:51:48', '2022-03-05 01:12:52', 'Unknown'),
(267, '213.205.192.45', '4', '1', '0', '2022-02-25 23:26:47', '2022-02-25 23:26:47', 'Unknown'),
(268, '213.205.192.45', '40', '1', '0', '2022-02-25 23:27:54', '2022-02-25 23:27:54', 'Unknown'),
(269, '213.205.192.45', '6', '1', '0', '2022-02-25 23:29:44', '2022-02-25 23:29:44', 'Unknown'),
(270, '40.77.167.53', '6', '1', '0', '2022-02-28 04:22:07', '2022-02-28 04:22:07', 'Unknown'),
(271, '77.69.165.153', '5', '1', '0', '2022-03-01 02:00:12', '2022-03-01 02:00:12', 'Unknown'),
(272, '103.133.109.8', '3', '1', '0', '2022-03-01 07:40:37', '2022-03-01 07:40:37', 'Unknown'),
(273, '146.87.136.71', '5', '1', '0', '2022-03-01 21:04:12', '2022-03-01 21:04:12', 'Unknown'),
(274, '76', '5', '1', '0', '2022-03-03 00:45:57', '2022-03-03 00:45:57', 'Vendor'),
(275, '9', '30', '1', '1', '2022-03-03 00:50:15', '2022-03-03 00:50:15', 'Customer'),
(276, '5.9.151.57', '29', '1', '0', '2022-03-08 04:34:23', '2022-03-08 04:34:23', 'Unknown'),
(277, '5.9.151.57', '3', '1', '0', '2022-03-08 04:34:25', '2022-03-08 04:34:25', 'Unknown'),
(278, '5.9.151.57', '4', '1', '0', '2022-03-08 04:34:27', '2022-03-08 04:34:27', 'Unknown'),
(279, '5.9.151.57', '5', '1', '0', '2022-03-08 04:34:29', '2022-03-08 04:34:29', 'Unknown'),
(280, '5.9.151.57', '6', '1', '0', '2022-03-08 04:34:31', '2022-03-08 04:34:31', 'Unknown'),
(281, '78.46.63.108', '28', '1', '0', '2022-03-08 11:17:40', '2022-03-08 11:17:40', 'Unknown'),
(282, '78.46.63.108', '30', '1', '0', '2022-03-08 11:17:44', '2022-03-08 11:17:44', 'Unknown'),
(283, '78.46.63.108', '31', '1', '0', '2022-03-08 11:17:48', '2022-03-08 11:17:48', 'Unknown'),
(284, '78.46.63.108', '38', '1', '0', '2022-03-08 11:17:53', '2022-03-08 11:17:53', 'Unknown'),
(285, '78.46.63.108', '40', '1', '0', '2022-03-08 11:17:55', '2022-03-08 11:17:55', 'Unknown'),
(286, '31.205.12.106', '3', '3', '0', '2022-03-16 07:05:10', '2022-03-26 20:07:15', 'Unknown'),
(287, '154.117.72.3', '31', '1', '0', '2022-03-18 10:59:29', '2022-03-18 10:59:29', 'Unknown'),
(288, '154.117.72.3', '28', '1', '0', '2022-03-18 10:59:42', '2022-03-18 10:59:42', 'Unknown'),
(289, '154.117.72.3', '3', '1', '0', '2022-03-18 10:59:42', '2022-03-18 10:59:42', 'Unknown'),
(290, '157.55.39.127', '3', '2', '0', '2022-03-21 03:30:07', '2022-03-23 06:58:10', 'Unknown'),
(291, '157.55.39.15', '4', '1', '0', '2022-03-22 02:02:19', '2022-03-22 02:02:19', 'Unknown'),
(292, '185.191.171.19', '29', '1', '0', '2022-03-22 15:22:07', '2022-03-22 15:22:07', 'Unknown'),
(293, '223.182.246.39', '4', '2', '0', '2022-03-23 10:29:53', '2022-03-23 10:30:38', 'Unknown'),
(294, '185.191.171.12', '3', '1', '0', '2022-03-23 21:56:36', '2022-03-23 21:56:36', 'Unknown'),
(295, '185.191.171.4', '5', '3', '0', '2022-03-24 03:41:38', '2022-12-15 03:44:11', 'Unknown'),
(296, '185.191.171.36', '4', '3', '0', '2022-03-24 10:26:14', '2023-05-15 00:48:57', 'Unknown'),
(297, '58', '6', '1', '0', '2022-03-24 18:49:55', '2022-03-24 18:49:55', 'Vendor'),
(298, '185.191.171.3', '29', '2', '0', '2022-03-24 19:03:30', '2023-02-15 16:01:53', 'Unknown'),
(299, '157.55.39.15', '5', '1', '0', '2022-03-24 22:23:36', '2022-03-24 22:23:36', 'Unknown'),
(300, '157.55.39.127', '28', '1', '0', '2022-03-25 22:29:47', '2022-03-25 22:29:47', 'Unknown'),
(301, '185.191.171.37', '6', '1', '0', '2022-03-26 00:18:07', '2022-03-26 00:18:07', 'Unknown'),
(302, '185.191.171.43', '3', '4', '0', '2022-03-26 02:02:05', '2022-12-09 11:44:55', 'Unknown'),
(303, '185.191.171.43', '5', '2', '0', '2022-03-26 06:44:51', '2023-04-01 18:00:53', 'Unknown'),
(304, '193.188.113.121', '3', '1', '0', '2022-03-26 20:07:31', '2022-03-26 20:07:31', 'Unknown'),
(305, '31.205.12.122', '3', '2', '0', '2022-03-26 20:10:24', '2022-03-30 05:18:04', 'Unknown'),
(306, '185.191.171.8', '28', '1', '0', '2022-03-26 23:36:35', '2022-03-26 23:36:35', 'Unknown'),
(307, '40.77.167.31', '29', '1', '0', '2022-03-27 02:35:39', '2022-03-27 02:35:39', 'Unknown'),
(308, '185.191.171.35', '36', '1', '0', '2022-03-27 14:20:25', '2022-03-27 14:20:25', 'Unknown'),
(309, '185.191.171.22', '30', '2', '0', '2022-03-27 15:28:07', '2023-01-03 07:29:45', 'Unknown'),
(310, '185.191.171.43', '31', '1', '0', '2022-03-28 08:46:47', '2022-03-28 08:46:47', 'Unknown'),
(311, '185.191.171.41', '38', '1', '0', '2022-03-28 19:12:59', '2022-03-28 19:12:59', 'Unknown'),
(312, '64', '3', '1', '0', '2022-03-28 19:31:06', '2022-03-28 19:31:06', 'Vendor'),
(313, '109.161.178.244', '3', '4', '0', '2022-03-28 19:34:53', '2022-03-29 17:44:02', 'Unknown'),
(314, '185.191.171.40', '40', '1', '0', '2022-03-29 08:31:17', '2022-03-29 08:31:17', 'Unknown'),
(315, '109.161.178.244', '38', '3', '0', '2022-03-29 13:56:11', '2022-03-29 18:22:40', 'Unknown'),
(316, '109.161.178.244', '6', '2', '0', '2022-03-29 14:27:19', '2022-03-29 16:50:13', 'Unknown'),
(317, '109.161.178.244', '5', '4', '0', '2022-03-29 14:27:45', '2022-03-29 18:06:40', 'Unknown'),
(318, '109.161.178.244', '4', '1', '0', '2022-03-29 14:28:07', '2022-03-29 14:28:07', 'Unknown'),
(319, '109.161.178.244', '29', '2', '0', '2022-03-29 14:29:26', '2022-03-29 17:44:35', 'Unknown'),
(320, '109.161.178.244', '28', '1', '0', '2022-03-29 16:41:55', '2022-03-29 16:41:55', 'Unknown'),
(321, '109.161.178.244', '30', '1', '0', '2022-03-29 16:47:58', '2022-03-29 16:47:58', 'Unknown'),
(322, '109.161.178.244', '40', '3', '0', '2022-03-29 16:49:00', '2022-03-29 16:54:31', 'Unknown'),
(323, '185.191.171.38', '30', '2', '0', '2022-03-29 18:32:27', '2022-11-21 19:02:35', 'Unknown'),
(324, '80', '3', '3', '0', '2022-03-29 21:05:18', '2022-03-30 06:01:04', 'Vendor'),
(325, '80', '30', '1', '0', '2022-03-29 21:10:06', '2022-03-29 21:10:06', 'Vendor'),
(326, '157.55.39.128', '3', '5', '0', '2022-03-30 09:15:20', '2022-04-15 06:19:05', 'Unknown'),
(327, '5.62.34.23', '3', '1', '0', '2022-04-01 05:55:59', '2022-04-01 05:55:59', 'Unknown'),
(328, '185.191.171.33', '29', '1', '0', '2022-04-06 15:44:02', '2022-04-06 15:44:02', 'Unknown'),
(329, '157.55.39.128', '28', '7', '0', '2022-04-08 02:50:55', '2022-04-12 05:43:41', 'Unknown'),
(330, '197.234.223.244', '3', '1', '0', '2022-04-08 02:56:48', '2022-04-08 02:56:48', 'Unknown'),
(331, '197.234.223.244', '4', '1', '0', '2022-04-08 02:57:32', '2022-04-08 02:57:32', 'Unknown'),
(332, '188.166.187.39', '3', '1', '0', '2022-04-09 02:10:03', '2022-04-09 02:10:03', 'Unknown'),
(333, '185.191.171.41', '6', '1', '0', '2022-04-10 00:57:48', '2022-04-10 00:57:48', 'Unknown'),
(334, '185.191.171.21', '3', '2', '0', '2022-04-10 01:40:56', '2022-05-14 06:37:31', 'Unknown'),
(335, '185.191.171.33', '6', '2', '0', '2022-04-11 11:46:16', '2023-02-24 00:41:14', 'Unknown'),
(336, '185.191.171.19', '4', '2', '0', '2022-04-12 01:05:38', '2022-05-14 18:43:33', 'Unknown'),
(337, '157.55.39.13', '5', '1', '0', '2022-04-20 02:32:33', '2022-04-20 02:32:33', 'Unknown'),
(338, '207.46.13.5', '3', '2', '0', '2022-04-23 11:31:59', '2022-04-28 06:49:27', 'Unknown'),
(339, '157.55.39.13', '4', '1', '0', '2022-04-24 05:10:56', '2022-04-24 05:10:56', 'Unknown'),
(340, '185.191.171.9', '5', '1', '0', '2022-04-27 00:17:44', '2022-04-27 00:17:44', 'Unknown'),
(341, '157.245.167.115', '3', '1', '0', '2022-04-29 09:18:07', '2022-04-29 09:18:07', 'Unknown'),
(342, '185.191.171.16', '29', '1', '0', '2022-05-04 06:30:34', '2022-05-04 06:30:34', 'Unknown'),
(343, '185.191.171.43', '29', '1', '0', '2022-05-06 10:11:19', '2022-05-06 10:11:19', 'Unknown'),
(344, '159.223.187.136', '29', '4', '0', '2022-05-09 02:22:26', '2022-05-09 14:52:59', 'Unknown'),
(345, '161.35.48.138', '3', '4', '0', '2022-05-09 02:59:19', '2022-05-09 14:52:07', 'Unknown'),
(346, '161.35.48.138', '6', '4', '0', '2022-05-09 02:59:21', '2022-05-09 14:52:12', 'Unknown'),
(347, '185.191.171.5', '4', '1', '0', '2022-05-12 14:47:58', '2022-05-12 14:47:58', 'Unknown'),
(348, '185.191.171.40', '6', '1', '0', '2022-05-16 10:51:55', '2022-05-16 10:51:55', 'Unknown'),
(349, '185.191.171.34', '6', '1', '0', '2022-05-18 14:22:59', '2022-05-18 14:22:59', 'Unknown'),
(350, '192.99.35.94', '29', '1', '0', '2022-05-26 10:08:42', '2022-05-26 10:08:42', 'Unknown'),
(351, '192.99.35.94', '3', '1', '0', '2022-05-26 10:08:47', '2022-05-26 10:08:47', 'Unknown'),
(352, '65.108.110.26', '4', '1', '0', '2022-05-26 17:10:04', '2022-05-26 17:10:04', 'Unknown'),
(353, '65.108.110.26', '5', '1', '0', '2022-05-26 17:10:08', '2022-05-26 17:10:08', 'Unknown'),
(354, '65.108.110.26', '6', '1', '0', '2022-05-26 17:10:12', '2022-05-26 17:10:12', 'Unknown'),
(355, '192.99.37.133', '28', '1', '0', '2022-05-27 12:02:18', '2022-05-27 12:02:18', 'Unknown'),
(356, '192.99.37.133', '30', '1', '0', '2022-05-27 12:02:36', '2022-05-27 12:02:36', 'Unknown'),
(357, '192.99.37.133', '31', '1', '0', '2022-05-27 12:02:46', '2022-05-27 12:02:46', 'Unknown'),
(358, '192.99.37.133', '38', '1', '0', '2022-05-27 12:03:02', '2022-05-27 12:03:02', 'Unknown'),
(359, '192.99.37.133', '40', '1', '0', '2022-05-27 12:03:13', '2022-05-27 12:03:13', 'Unknown'),
(360, '185.191.171.26', '5', '2', '0', '2022-05-29 22:27:32', '2023-01-09 14:17:34', 'Unknown'),
(361, '185.191.171.37', '29', '4', '0', '2022-06-08 10:09:10', '2022-11-23 23:41:16', 'Unknown'),
(362, '40.77.167.40', '3', '1', '0', '2022-06-11 13:50:06', '2022-06-11 13:50:06', 'Unknown'),
(363, '185.191.171.2', '3', '2', '0', '2022-06-11 23:09:24', '2022-08-12 08:06:57', 'Unknown'),
(364, '185.191.171.35', '4', '1', '0', '2022-06-16 20:50:10', '2022-06-16 20:50:10', 'Unknown'),
(365, '185.191.171.18', '6', '2', '0', '2022-06-20 17:27:44', '2022-12-21 05:58:18', 'Unknown'),
(366, '185.191.171.2', '6', '1', '0', '2022-06-22 22:56:23', '2022-06-22 22:56:23', 'Unknown'),
(367, '185.191.171.18', '5', '1', '0', '2022-06-29 19:08:21', '2022-06-29 19:08:21', 'Unknown'),
(368, '185.191.171.44', '5', '2', '0', '2022-07-01 23:39:00', '2023-05-10 19:19:10', 'Unknown'),
(369, '207.46.13.1', '3', '1', '0', '2022-07-06 07:42:34', '2022-07-06 07:42:34', 'Unknown'),
(370, '185.191.171.22', '29', '3', '0', '2022-07-07 02:41:08', '2022-12-17 22:45:57', 'Unknown'),
(371, '185.191.171.17', '4', '2', '0', '2022-07-18 07:05:32', '2022-10-18 14:48:22', 'Unknown'),
(372, '185.191.171.21', '6', '2', '0', '2022-07-20 00:00:49', '2023-04-18 23:24:07', 'Unknown'),
(373, '185.191.171.8', '4', '2', '0', '2022-07-20 14:48:03', '2023-04-20 10:45:05', 'Unknown'),
(374, '192.99.14.135', '5', '1', '0', '2022-07-26 04:20:50', '2022-07-26 04:20:50', 'Unknown'),
(375, '192.99.14.135', '6', '1', '0', '2022-07-26 04:21:01', '2022-07-26 04:21:01', 'Unknown'),
(376, '207.46.13.172', '28', '1', '0', '2022-07-26 10:35:47', '2022-07-26 10:35:47', 'Unknown'),
(377, '185.191.171.38', '5', '1', '0', '2022-08-03 03:25:43', '2022-08-03 03:25:43', 'Unknown'),
(378, '185.191.171.10', '5', '1', '0', '2022-08-05 12:22:36', '2022-08-05 12:22:36', 'Unknown'),
(379, '185.191.171.25', '29', '1', '0', '2022-08-08 12:52:16', '2022-08-08 12:52:16', 'Unknown'),
(380, '65.108.125.120', '29', '1', '0', '2022-08-14 09:57:30', '2022-08-14 09:57:30', 'Unknown'),
(381, '65.108.125.120', '3', '1', '0', '2022-08-14 09:57:32', '2022-08-14 09:57:32', 'Unknown'),
(382, '158.69.246.14', '4', '1', '0', '2022-08-15 04:18:19', '2022-08-15 04:18:19', 'Unknown'),
(383, '173.212.220.26', '28', '1', '0', '2022-08-15 08:56:07', '2022-08-15 08:56:07', 'Unknown'),
(384, '173.212.220.26', '30', '1', '0', '2022-08-15 08:56:23', '2022-08-15 08:56:23', 'Unknown'),
(385, '173.212.220.26', '31', '1', '0', '2022-08-15 08:56:42', '2022-08-15 08:56:42', 'Unknown'),
(386, '173.212.220.26', '38', '1', '0', '2022-08-15 08:57:03', '2022-08-15 08:57:03', 'Unknown'),
(387, '173.212.220.26', '40', '1', '0', '2022-08-15 08:57:21', '2022-08-15 08:57:21', 'Unknown'),
(388, '185.191.171.24', '4', '2', '0', '2022-08-17 16:15:25', '2022-12-06 04:59:04', 'Unknown'),
(389, '157.55.39.202', '5', '1', '0', '2022-08-21 16:24:19', '2022-08-21 16:24:19', 'Unknown'),
(390, '207.46.13.129', '28', '1', '0', '2022-08-21 20:12:47', '2022-08-21 20:12:47', 'Unknown'),
(391, '185.191.171.25', '6', '2', '0', '2022-08-21 20:25:14', '2022-10-19 01:46:23', 'Unknown'),
(392, '185.191.171.22', '5', '1', '0', '2022-09-05 01:08:56', '2022-09-05 01:08:56', 'Unknown'),
(393, '185.191.171.21', '29', '1', '0', '2022-09-05 15:52:10', '2022-09-05 15:52:10', 'Unknown'),
(394, '185.191.171.15', '3', '1', '0', '2022-09-15 13:27:24', '2022-09-15 13:27:24', 'Unknown'),
(395, '185.191.171.39', '3', '1', '0', '2022-09-17 16:17:09', '2022-09-17 16:17:09', 'Unknown'),
(396, '185.191.171.6', '6', '2', '0', '2022-09-19 16:54:20', '2023-03-28 08:11:35', 'Unknown'),
(397, '185.191.171.39', '4', '2', '0', '2022-09-20 05:20:52', '2022-12-17 16:58:04', 'Unknown'),
(398, '185.191.171.20', '4', '1', '0', '2022-09-22 06:34:19', '2022-09-22 06:34:19', 'Unknown'),
(399, '185.191.171.33', '5', '1', '0', '2022-10-04 14:10:18', '2022-10-04 14:10:18', 'Unknown'),
(400, '185.191.171.6', '4', '1', '0', '2022-10-05 15:32:39', '2022-10-05 15:32:39', 'Unknown'),
(401, '185.191.171.34', '3', '1', '0', '2022-10-06 01:07:06', '2022-10-06 01:07:06', 'Unknown'),
(402, '185.191.171.38', '6', '1', '0', '2022-10-06 04:15:09', '2022-10-06 04:15:09', 'Unknown'),
(403, '185.191.171.19', '30', '1', '0', '2022-10-13 19:49:10', '2022-10-13 19:49:10', 'Unknown'),
(404, '185.191.171.6', '38', '2', '0', '2022-10-14 07:24:48', '2023-01-02 03:38:12', 'Unknown'),
(405, '65.21.232.254', '5', '1', '0', '2022-10-14 09:11:41', '2022-10-14 09:11:41', 'Unknown'),
(406, '65.21.232.254', '6', '1', '0', '2022-10-14 09:11:43', '2022-10-14 09:11:43', 'Unknown'),
(407, '185.191.171.5', '29', '2', '0', '2022-10-18 13:44:25', '2023-01-12 23:05:44', 'Unknown'),
(408, '185.191.171.16', '3', '3', '0', '2022-10-19 00:16:44', '2023-01-02 22:14:53', 'Unknown'),
(409, '185.191.171.40', '5', '1', '0', '2022-10-29 16:06:22', '2022-10-29 16:06:22', 'Unknown'),
(410, '185.191.171.44', '4', '2', '0', '2022-11-01 02:40:11', '2022-12-30 06:33:08', 'Unknown'),
(411, '185.191.171.14', '29', '1', '0', '2022-11-01 03:42:10', '2022-11-01 03:42:10', 'Unknown'),
(412, '185.191.171.38', '28', '1', '0', '2022-11-01 09:25:07', '2022-11-01 09:25:07', 'Unknown'),
(413, '185.191.171.11', '3', '1', '0', '2022-11-01 11:54:21', '2022-11-01 11:54:21', 'Unknown'),
(414, '185.191.171.5', '6', '1', '0', '2022-11-01 12:57:13', '2022-11-01 12:57:13', 'Unknown'),
(415, '185.191.171.22', '40', '1', '0', '2022-11-01 17:13:29', '2022-11-01 17:13:29', 'Unknown'),
(416, '65.108.206.155', '29', '1', '0', '2022-11-02 10:23:39', '2022-11-02 10:23:39', 'Unknown'),
(417, '65.108.206.155', '3', '1', '0', '2022-11-02 10:23:40', '2022-11-02 10:23:40', 'Unknown'),
(418, '192.99.37.132', '28', '1', '0', '2022-11-03 22:03:05', '2022-11-03 22:03:05', 'Unknown'),
(419, '192.99.37.132', '30', '1', '0', '2022-11-03 22:03:07', '2022-11-03 22:03:07', 'Unknown'),
(420, '192.99.37.132', '31', '1', '0', '2022-11-03 22:03:09', '2022-11-03 22:03:09', 'Unknown'),
(421, '192.99.37.132', '38', '1', '0', '2022-11-03 22:03:11', '2022-11-03 22:03:11', 'Unknown'),
(422, '192.99.37.132', '4', '1', '0', '2022-11-03 22:03:13', '2022-11-03 22:03:13', 'Unknown'),
(423, '192.99.37.132', '40', '1', '0', '2022-11-03 22:03:14', '2022-11-03 22:03:14', 'Unknown'),
(424, '185.191.171.13', '5', '1', '0', '2022-11-10 11:19:31', '2022-11-10 11:19:31', 'Unknown'),
(425, '185.191.171.10', '4', '2', '0', '2022-11-12 22:58:18', '2023-01-12 13:13:54', 'Unknown'),
(426, '185.191.171.36', '3', '1', '0', '2022-11-16 02:48:47', '2022-11-16 02:48:47', 'Unknown'),
(427, '185.191.171.23', '6', '1', '0', '2022-11-16 03:36:47', '2022-11-16 03:36:47', 'Unknown'),
(428, '185.191.171.19', '5', '1', '0', '2022-11-21 09:57:45', '2022-11-21 09:57:45', 'Unknown'),
(429, '185.191.171.37', '31', '2', '0', '2022-11-22 06:09:36', '2023-02-20 21:13:28', 'Unknown'),
(430, '185.191.171.16', '36', '1', '0', '2022-11-22 06:48:21', '2022-11-22 06:48:21', 'Unknown'),
(431, '185.191.171.39', '38', '1', '0', '2022-11-22 07:24:46', '2022-11-22 07:24:46', 'Unknown'),
(432, '185.191.171.2', '4', '1', '0', '2022-11-25 04:46:33', '2022-11-25 04:46:33', 'Unknown'),
(433, '185.191.171.38', '3', '1', '0', '2022-11-26 22:42:39', '2022-11-26 22:42:39', 'Unknown'),
(434, '185.191.171.45', '6', '1', '0', '2022-11-27 00:12:08', '2022-11-27 00:12:08', 'Unknown'),
(435, '185.191.171.15', '5', '1', '0', '2022-12-03 17:06:22', '2022-12-03 17:06:22', 'Unknown'),
(436, '185.191.171.34', '29', '1', '0', '2022-12-06 10:01:53', '2022-12-06 10:01:53', 'Unknown'),
(437, '185.191.171.39', '6', '1', '0', '2022-12-09 14:09:28', '2022-12-09 14:09:28', 'Unknown'),
(438, '185.191.171.25', '28', '1', '0', '2022-12-12 05:50:43', '2022-12-12 05:50:43', 'Unknown'),
(439, '185.191.171.8', '40', '2', '0', '2022-12-12 12:05:22', '2023-05-15 17:52:14', 'Unknown'),
(440, '185.191.171.35', '5', '1', '0', '2022-12-27 08:36:03', '2022-12-27 08:36:03', 'Unknown'),
(441, '185.191.171.6', '29', '1', '0', '2022-12-30 15:46:12', '2022-12-30 15:46:12', 'Unknown'),
(442, '185.191.171.26', '31', '1', '0', '2023-01-02 07:08:18', '2023-01-02 07:08:18', 'Unknown'),
(443, '192.95.30.12', '5', '1', '0', '2023-01-02 11:41:28', '2023-01-02 11:41:28', 'Unknown'),
(444, '192.95.30.12', '6', '1', '0', '2023-01-02 11:41:30', '2023-01-02 11:41:30', 'Unknown'),
(445, '185.191.171.8', '6', '1', '0', '2023-01-03 06:06:25', '2023-01-03 06:06:25', 'Unknown'),
(446, '185.191.171.8', '3', '1', '0', '2023-01-16 07:12:29', '2023-01-16 07:12:29', 'Unknown'),
(447, '192.99.35.94', '28', '1', '0', '2023-01-23 04:25:32', '2023-01-23 04:25:32', 'Unknown'),
(448, '185.191.171.24', '40', '1', '0', '2023-01-25 04:17:01', '2023-01-25 04:17:01', 'Unknown'),
(449, '185.191.171.16', '6', '1', '0', '2023-02-08 13:37:17', '2023-02-08 13:37:17', 'Unknown'),
(450, '185.191.171.5', '28', '1', '0', '2023-02-19 16:01:17', '2023-02-19 16:01:17', 'Unknown'),
(451, '185.191.171.39', '30', '1', '0', '2023-02-20 04:28:01', '2023-02-20 04:28:01', 'Unknown'),
(452, '185.191.171.26', '38', '1', '0', '2023-02-20 09:34:49', '2023-02-20 09:34:49', 'Unknown'),
(453, '81', '41', '42', '0', '2023-02-22 22:56:32', '2023-03-09 22:35:58', 'Vendor'),
(454, '5.151.98.125', '41', '38', '0', '2023-02-22 22:59:34', '2023-03-21 19:18:23', 'Unknown'),
(455, '213.205.192.173', '41', '4', '0', '2023-02-23 15:10:04', '2023-02-23 18:10:59', 'Unknown'),
(456, '82', '42', '3', '0', '2023-02-23 18:21:50', '2023-02-24 08:34:56', 'Vendor'),
(457, '83', '43', '12', '0', '2023-02-23 18:31:07', '2023-03-09 08:16:20', 'Vendor'),
(458, '84', '44', '8', '0', '2023-02-23 18:37:11', '2023-03-09 08:20:07', 'Vendor'),
(459, '84', '43', '2', '0', '2023-02-23 18:37:15', '2023-02-23 18:38:02', 'Vendor'),
(460, '84', '42', '3', '0', '2023-02-23 18:37:18', '2023-02-24 01:45:59', 'Vendor'),
(461, '84', '41', '3', '0', '2023-02-23 18:37:22', '2023-02-24 01:46:33', 'Vendor'),
(462, '81', '45', '13', '0', '2023-02-23 18:45:41', '2023-03-09 21:48:49', 'Vendor'),
(463, '22', '41', '37', '0', '2023-02-23 18:49:30', '2023-03-11 06:18:51', 'Customer'),
(464, '22', '42', '3', '1', '2023-02-23 18:55:25', '2023-02-24 02:44:23', 'Customer'),
(465, '84.255.185.139', '45', '1', '0', '2023-02-23 19:04:49', '2023-02-23 19:04:49', 'Unknown'),
(466, '22', '43', '13', '1', '2023-02-23 19:14:07', '2023-03-10 08:59:40', 'Customer'),
(467, '81', '46', '13', '0', '2023-02-23 19:19:48', '2023-03-09 22:36:02', 'Vendor'),
(468, '81', '42', '8', '0', '2023-02-23 19:22:52', '2023-02-24 01:50:56', 'Vendor'),
(469, '88.201.82.207', '43', '1', '0', '2023-02-23 20:02:25', '2023-02-23 20:02:25', 'Unknown'),
(470, '81', '44', '4', '0', '2023-02-23 20:25:32', '2023-02-24 09:58:57', 'Vendor'),
(471, '5.151.98.125', '43', '16', '0', '2023-02-23 20:27:51', '2023-03-09 23:14:42', 'Unknown'),
(472, '82', '43', '2', '0', '2023-02-24 01:51:33', '2023-02-24 08:40:05', 'Vendor'),
(473, '22', '45', '6', '2', '2023-02-24 01:59:42', '2023-03-09 09:15:35', 'Customer'),
(474, '5.151.98.125', '47', '6', '0', '2023-02-24 02:10:58', '2023-03-08 02:42:40', 'Unknown'),
(475, '5.151.98.125', '48', '11', '0', '2023-02-24 02:20:37', '2023-03-05 11:43:30', 'Unknown'),
(476, '5.151.98.125', '46', '12', '0', '2023-02-24 02:21:11', '2023-03-10 02:25:50', 'Unknown'),
(477, '86', '47', '3', '0', '2023-02-24 02:22:45', '2023-02-24 02:47:00', 'Vendor'),
(478, '86', '48', '10', '0', '2023-02-24 02:25:12', '2023-03-03 21:24:59', 'Vendor'),
(479, '86', '41', '4', '0', '2023-02-24 02:35:58', '2023-02-24 03:12:21', 'Vendor'),
(480, '22', '48', '10', '2', '2023-02-24 02:44:30', '2023-03-10 08:56:46', 'Customer'),
(481, '22', '44', '5', '2', '2023-02-24 02:44:34', '2023-03-09 09:15:38', 'Customer'),
(482, '86', '46', '1', '0', '2023-02-24 02:47:04', '2023-02-24 02:47:04', 'Vendor'),
(483, '86', '45', '1', '0', '2023-02-24 02:47:06', '2023-02-24 02:47:06', 'Vendor'),
(484, '86', '44', '2', '0', '2023-02-24 02:47:08', '2023-03-03 21:25:15', 'Vendor'),
(485, '86', '43', '3', '0', '2023-02-24 02:47:12', '2023-02-24 03:12:10', 'Vendor'),
(486, '86', '42', '1', '0', '2023-02-24 02:47:14', '2023-02-24 02:47:14', 'Vendor'),
(487, '23', '41', '1', '0', '2023-02-24 02:55:59', '2023-02-24 02:55:59', 'Customer'),
(488, '23', '43', '4', '0', '2023-02-24 02:56:02', '2023-02-24 02:58:12', 'Customer'),
(489, '5.151.98.125', '42', '1', '0', '2023-02-24 03:01:12', '2023-02-24 03:01:12', 'Unknown'),
(490, '213.205.192.162', '48', '1', '0', '2023-02-24 03:13:01', '2023-02-24 03:13:01', 'Unknown'),
(491, '213.205.192.162', '45', '3', '0', '2023-02-24 03:16:06', '2023-02-24 03:26:01', 'Unknown'),
(492, '213.205.192.162', '43', '2', '0', '2023-02-24 03:16:37', '2023-02-24 03:16:50', 'Unknown'),
(493, '83', '42', '1', '0', '2023-02-24 03:31:48', '2023-02-24 03:31:48', 'Vendor'),
(494, '5.151.98.125', '44', '6', '0', '2023-02-24 07:44:46', '2023-03-10 05:51:21', 'Unknown'),
(495, '5.151.98.125', '45', '8', '0', '2023-02-24 08:27:54', '2023-03-08 02:42:36', 'Unknown'),
(496, '22', '47', '9', '2', '2023-02-24 08:32:43', '2023-03-10 08:56:41', 'Customer'),
(497, '82', '41', '1', '0', '2023-02-24 08:43:56', '2023-02-24 08:43:56', 'Vendor'),
(498, '81', '43', '2', '0', '2023-02-24 09:59:02', '2023-02-24 10:00:05', 'Vendor'),
(499, '81', '48', '3', '0', '2023-02-24 16:40:26', '2023-03-09 21:56:02', 'Vendor'),
(500, '58', '41', '1', '0', '2023-02-24 23:41:29', '2023-02-24 23:41:29', 'Vendor'),
(501, '58', '46', '1', '0', '2023-02-24 23:50:10', '2023-02-24 23:50:10', 'Vendor'),
(502, '58', '43', '1', '0', '2023-02-24 23:50:16', '2023-02-24 23:50:16', 'Vendor'),
(503, '58', '47', '1', '0', '2023-02-24 23:50:22', '2023-02-24 23:50:22', 'Vendor'),
(504, '88', '49', '2', '0', '2023-02-25 01:51:07', '2023-02-25 01:52:31', 'Vendor'),
(505, '22', '49', '10', '2', '2023-02-25 01:54:31', '2023-03-09 09:15:47', 'Customer'),
(506, '81', '49', '2', '0', '2023-02-25 02:02:29', '2023-03-06 03:33:25', 'Vendor'),
(507, '83', '45', '1', '0', '2023-02-25 02:04:47', '2023-02-25 02:04:47', 'Vendor'),
(508, '83', '49', '1', '0', '2023-02-25 02:05:02', '2023-02-25 02:05:02', 'Vendor'),
(509, '83', '46', '3', '0', '2023-02-25 05:35:16', '2023-03-10 02:44:08', 'Vendor'),
(510, '83', '47', '1', '0', '2023-02-25 05:36:15', '2023-02-25 05:36:15', 'Vendor'),
(511, '89', '50', '6', '0', '2023-02-25 05:51:50', '2023-03-03 21:46:21', 'Vendor'),
(512, '22', '50', '13', '4', '2023-02-25 05:52:36', '2023-03-10 08:04:03', 'Customer'),
(513, '90', '41', '1', '0', '2023-02-25 05:57:15', '2023-02-25 05:57:15', 'Vendor'),
(514, '89', '51', '5', '0', '2023-02-25 06:04:40', '2023-03-03 22:57:58', 'Vendor'),
(515, '91', '41', '1', '0', '2023-02-25 06:09:38', '2023-02-25 06:09:38', 'Vendor'),
(516, '91', '43', '1', '0', '2023-02-25 06:09:41', '2023-02-25 06:09:41', 'Vendor'),
(517, '91', '44', '1', '0', '2023-02-25 06:09:43', '2023-02-25 06:09:43', 'Vendor'),
(518, '91', '45', '1', '0', '2023-02-25 06:09:48', '2023-02-25 06:09:48', 'Vendor'),
(519, '91', '46', '1', '0', '2023-02-25 06:09:52', '2023-02-25 06:09:52', 'Vendor'),
(520, '91', '47', '1', '0', '2023-02-25 06:09:55', '2023-02-25 06:09:55', 'Vendor'),
(521, '91', '48', '1', '0', '2023-02-25 06:09:57', '2023-02-25 06:09:57', 'Vendor'),
(522, '91', '49', '2', '0', '2023-02-25 06:10:01', '2023-02-25 06:11:37', 'Vendor'),
(523, '91', '50', '1', '0', '2023-02-25 06:10:06', '2023-02-25 06:10:06', 'Vendor'),
(524, '91', '51', '1', '0', '2023-02-25 06:10:09', '2023-02-25 06:10:09', 'Vendor'),
(525, '213.205.192.164', '41', '1', '0', '2023-02-25 06:12:35', '2023-02-25 06:12:35', 'Unknown'),
(526, '9', '38', '1', '1', '2023-02-25 06:15:26', '2023-02-25 06:15:26', 'Customer'),
(527, '9', '46', '4', '1', '2023-02-25 06:16:08', '2023-02-25 20:19:42', 'Customer'),
(528, '9', '50', '1', '1', '2023-02-25 06:17:58', '2023-02-25 06:17:58', 'Customer'),
(529, '9', '51', '4', '1', '2023-02-25 06:18:07', '2023-03-09 18:55:12', 'Customer'),
(530, '9', '49', '1', '1', '2023-02-25 20:19:48', '2023-02-25 20:19:48', 'Customer'),
(531, '9', '44', '1', '1', '2023-02-25 21:08:15', '2023-02-25 21:08:15', 'Customer'),
(532, '9', '43', '5', '1', '2023-02-25 21:08:21', '2023-03-09 18:50:43', 'Customer'),
(533, '92', '41', '2', '0', '2023-02-25 21:35:05', '2023-02-26 20:18:49', 'Vendor'),
(534, '93', '41', '1', '0', '2023-02-25 21:37:01', '2023-02-25 21:37:01', 'Vendor'),
(535, '93', '47', '1', '0', '2023-02-25 21:37:17', '2023-02-25 21:37:17', 'Vendor'),
(536, '24', '46', '2', '0', '2023-02-25 21:40:39', '2023-02-25 21:41:06', 'Customer'),
(537, '24', '44', '2', '0', '2023-02-25 21:41:00', '2023-02-25 21:41:35', 'Customer'),
(538, '24', '50', '2', '0', '2023-02-25 21:41:09', '2023-02-25 21:41:45', 'Customer'),
(539, '24', '45', '1', '0', '2023-02-25 21:41:41', '2023-02-25 21:41:41', 'Customer'),
(540, '92', '50', '2', '0', '2023-02-26 01:49:21', '2023-02-26 20:16:50', 'Vendor'),
(541, '193.188.114.210', '50', '1', '0', '2023-02-26 15:08:08', '2023-02-26 15:08:08', 'Unknown'),
(542, '88.201.6.148', '43', '1', '0', '2023-02-26 17:54:24', '2023-02-26 17:54:24', 'Unknown'),
(543, '92', '46', '1', '0', '2023-02-26 18:15:26', '2023-02-26 18:15:26', 'Vendor'),
(544, '92', '47', '1', '0', '2023-02-26 20:17:39', '2023-02-26 20:17:39', 'Vendor'),
(545, '92', '49', '1', '0', '2023-02-26 20:18:23', '2023-02-26 20:18:23', 'Vendor'),
(546, '92', '51', '1', '0', '2023-02-26 20:18:33', '2023-02-26 20:18:33', 'Vendor'),
(547, '92', '43', '1', '0', '2023-02-26 20:18:38', '2023-02-26 20:18:38', 'Vendor'),
(548, '92', '52', '5', '0', '2023-02-26 20:23:46', '2023-02-26 20:31:37', 'Vendor'),
(549, '213.205.192.54', '52', '1', '0', '2023-02-27 01:37:37', '2023-02-27 01:37:37', 'Unknown');
INSERT INTO `business_analytics` (`id`, `user_info`, `business_id`, `clicks`, `leads`, `created_at`, `updated_at`, `role`) VALUES
(550, '213.205.192.54', '50', '1', '0', '2023-02-27 01:38:01', '2023-02-27 01:38:01', 'Unknown'),
(551, '213.205.192.54', '48', '1', '0', '2023-02-27 01:38:06', '2023-02-27 01:38:06', 'Unknown'),
(552, '213.205.192.54', '45', '2', '0', '2023-02-27 01:38:13', '2023-02-27 01:38:29', 'Unknown'),
(553, '185.191.171.17', '29', '1', '0', '2023-02-27 06:53:48', '2023-02-27 06:53:48', 'Unknown'),
(554, '52.167.144.63', '4', '1', '0', '2023-02-28 00:01:42', '2023-02-28 00:01:42', 'Unknown'),
(555, '5.151.98.125', '49', '17', '0', '2023-03-01 23:04:23', '2023-03-10 09:03:09', 'Unknown'),
(556, '94', '53', '12', '0', '2023-03-03 08:10:38', '2023-03-09 23:01:08', 'Vendor'),
(557, '94', '41', '1', '0', '2023-03-03 08:59:20', '2023-03-03 08:59:20', 'Vendor'),
(558, '94', '46', '2', '0', '2023-03-03 08:59:29', '2023-03-03 09:01:21', 'Vendor'),
(559, '94', '49', '1', '0', '2023-03-03 09:00:03', '2023-03-03 09:00:03', 'Vendor'),
(560, '94', '50', '1', '0', '2023-03-03 09:00:08', '2023-03-03 09:00:08', 'Vendor'),
(561, '94', '51', '1', '0', '2023-03-03 09:00:18', '2023-03-03 09:00:18', 'Vendor'),
(562, '94', '52', '2', '0', '2023-03-03 09:00:24', '2023-03-03 09:00:33', 'Vendor'),
(563, '94', '43', '1', '0', '2023-03-03 09:00:49', '2023-03-03 09:00:49', 'Vendor'),
(564, '94', '44', '2', '0', '2023-03-03 09:00:52', '2023-03-03 09:06:02', 'Vendor'),
(565, '94', '45', '2', '0', '2023-03-03 09:01:17', '2023-03-03 09:06:13', 'Vendor'),
(566, '94', '47', '1', '0', '2023-03-03 09:01:23', '2023-03-03 09:01:23', 'Vendor'),
(567, '94', '48', '1', '0', '2023-03-03 09:01:26', '2023-03-03 09:01:26', 'Vendor'),
(568, '22', '53', '17', '5', '2023-03-03 09:10:55', '2023-03-27 08:01:59', 'Customer'),
(569, '87', '54', '6', '0', '2023-03-03 09:29:13', '2023-03-03 10:15:59', 'Vendor'),
(570, '5.151.98.125', '54', '10', '0', '2023-03-03 09:34:35', '2023-03-10 02:28:46', 'Unknown'),
(571, '22', '54', '7', '5', '2023-03-03 09:35:19', '2023-03-10 08:44:21', 'Customer'),
(572, '5.151.98.125', '51', '29', '0', '2023-03-03 09:39:24', '2023-03-19 01:37:58', 'Unknown'),
(573, '5.151.98.125', '50', '13', '0', '2023-03-03 10:01:37', '2023-03-10 02:59:31', 'Unknown'),
(574, '5.151.98.125', '53', '23', '0', '2023-03-03 10:02:11', '2023-03-21 00:04:26', 'Unknown'),
(575, '87', '41', '1', '0', '2023-03-03 10:15:17', '2023-03-03 10:15:17', 'Vendor'),
(576, '87', '50', '1', '0', '2023-03-03 10:15:33', '2023-03-03 10:15:33', 'Vendor'),
(577, '87', '51', '1', '0', '2023-03-03 10:15:39', '2023-03-03 10:15:39', 'Vendor'),
(578, '87', '52', '1', '0', '2023-03-03 10:15:42', '2023-03-03 10:15:42', 'Vendor'),
(579, '87', '53', '2', '0', '2023-03-03 10:15:45', '2023-03-09 20:55:07', 'Vendor'),
(580, '89', '52', '1', '0', '2023-03-03 10:23:04', '2023-03-03 10:23:04', 'Vendor'),
(581, '98', '48', '1', '0', '2023-03-03 17:24:24', '2023-03-03 17:24:24', 'Vendor'),
(582, '213.205.192.116', '54', '2', '0', '2023-03-03 20:05:53', '2023-03-03 20:07:55', 'Unknown'),
(583, '213.205.192.116', '53', '2', '0', '2023-03-03 20:51:41', '2023-03-03 20:56:05', 'Unknown'),
(584, '213.205.192.116', '51', '1', '0', '2023-03-03 21:03:01', '2023-03-03 21:03:01', 'Unknown'),
(585, '22', '46', '5', '5', '2023-03-03 21:04:31', '2023-03-10 08:03:47', 'Customer'),
(586, '213.205.192.116', '55', '1', '0', '2023-03-03 21:12:08', '2023-03-03 21:12:08', 'Unknown'),
(587, '99', '55', '3', '0', '2023-03-03 21:13:06', '2023-03-03 21:16:08', 'Vendor'),
(588, '22', '55', '8', '5', '2023-03-03 21:14:02', '2023-03-10 05:42:45', 'Customer'),
(589, '89', '55', '4', '0', '2023-03-03 21:19:54', '2023-03-03 22:57:07', 'Vendor'),
(590, '89', '46', '1', '0', '2023-03-03 21:20:31', '2023-03-03 21:20:31', 'Vendor'),
(591, '5.151.98.125', '52', '3', '0', '2023-03-03 21:32:33', '2023-03-08 18:56:52', 'Unknown'),
(592, '5.151.98.125', '55', '9', '0', '2023-03-03 21:32:42', '2023-03-10 02:23:16', 'Unknown'),
(593, '89', '53', '3', '0', '2023-03-03 21:41:54', '2023-03-03 22:56:11', 'Vendor'),
(594, '89', '54', '1', '0', '2023-03-03 21:45:22', '2023-03-03 21:45:22', 'Vendor'),
(595, '193.188.122.157', '41', '1', '0', '2023-03-03 22:03:10', '2023-03-03 22:03:10', 'Unknown'),
(596, '22', '51', '9', '7', '2023-03-03 22:52:30', '2023-03-13 01:29:48', 'Customer'),
(597, '22', '52', '1', '7', '2023-03-03 22:52:39', '2023-03-03 22:52:39', 'Customer'),
(598, '89', '41', '2', '0', '2023-03-03 22:56:19', '2023-03-04 01:10:12', 'Vendor'),
(599, '89', '43', '2', '0', '2023-03-03 22:56:23', '2023-03-09 23:23:14', 'Vendor'),
(600, '89', '48', '1', '0', '2023-03-03 22:56:28', '2023-03-03 22:56:28', 'Vendor'),
(601, '81', '47', '2', '0', '2023-03-04 03:18:21', '2023-03-04 17:19:25', 'Vendor'),
(602, '81', '55', '2', '0', '2023-03-04 17:20:43', '2023-03-09 21:57:04', 'Vendor'),
(603, '88', '53', '1', '0', '2023-03-04 20:07:26', '2023-03-04 20:07:26', 'Vendor'),
(604, '217.17.230.117', '41', '1', '0', '2023-03-05 13:47:43', '2023-03-05 13:47:43', 'Unknown'),
(605, '217.17.230.117', '43', '1', '0', '2023-03-05 13:48:01', '2023-03-05 13:48:01', 'Unknown'),
(606, '109.161.174.184', '43', '2', '0', '2023-03-05 15:22:10', '2023-03-05 15:24:33', 'Unknown'),
(607, '102', '45', '1', '0', '2023-03-06 02:52:42', '2023-03-06 02:52:42', 'Vendor'),
(608, '102', '51', '1', '0', '2023-03-06 02:53:24', '2023-03-06 02:53:24', 'Vendor'),
(609, '102', '46', '1', '0', '2023-03-06 02:53:30', '2023-03-06 02:53:30', 'Vendor'),
(610, '102', '56', '2', '0', '2023-03-06 03:03:54', '2023-03-06 03:08:29', 'Vendor'),
(611, '22', '56', '25', '7', '2023-03-06 03:10:16', '2023-04-04 05:43:06', 'Customer'),
(612, '5.151.98.125', '56', '55', '0', '2023-03-06 03:13:34', '2023-03-23 06:27:48', 'Unknown'),
(613, '88.201.58.243', '56', '1', '0', '2023-03-06 03:17:54', '2023-03-06 03:17:54', 'Unknown'),
(614, '102', '55', '1', '0', '2023-03-06 03:20:04', '2023-03-06 03:20:04', 'Vendor'),
(615, '82', '57', '2', '0', '2023-03-06 03:28:10', '2023-03-06 03:28:55', 'Vendor'),
(616, '22', '57', '13', '7', '2023-03-06 03:29:36', '2023-03-13 17:30:36', 'Customer'),
(617, '81', '50', '1', '0', '2023-03-06 03:33:29', '2023-03-06 03:33:29', 'Vendor'),
(618, '81', '51', '3', '0', '2023-03-06 03:33:33', '2023-03-09 22:56:26', 'Vendor'),
(619, '81', '53', '3', '0', '2023-03-06 03:33:36', '2023-03-09 22:30:01', 'Vendor'),
(620, '81', '56', '9', '0', '2023-03-06 03:33:49', '2023-03-22 08:06:50', 'Vendor'),
(621, '81', '57', '3', '0', '2023-03-06 03:33:56', '2023-03-17 08:11:50', 'Vendor'),
(622, '213.205.192.70', '50', '2', '0', '2023-03-07 01:17:04', '2023-03-07 01:29:46', 'Unknown'),
(623, '213.205.192.70', '56', '6', '0', '2023-03-07 01:17:19', '2023-03-07 02:27:47', 'Unknown'),
(624, '213.205.192.70', '44', '2', '0', '2023-03-07 01:17:57', '2023-03-07 01:21:14', 'Unknown'),
(625, '213.205.192.70', '43', '2', '0', '2023-03-07 01:21:23', '2023-03-07 01:29:21', 'Unknown'),
(626, '213.205.192.70', '45', '3', '0', '2023-03-07 01:21:28', '2023-03-07 02:32:32', 'Unknown'),
(627, '213.205.192.70', '57', '3', '0', '2023-03-07 01:21:46', '2023-03-07 02:24:52', 'Unknown'),
(628, '213.205.192.70', '41', '1', '0', '2023-03-07 01:29:14', '2023-03-07 01:29:14', 'Unknown'),
(629, '213.205.192.70', '46', '1', '0', '2023-03-07 01:29:31', '2023-03-07 01:29:31', 'Unknown'),
(630, '213.205.192.70', '47', '2', '0', '2023-03-07 01:29:35', '2023-03-07 01:30:28', 'Unknown'),
(631, '213.205.192.70', '48', '1', '0', '2023-03-07 01:29:39', '2023-03-07 01:29:39', 'Unknown'),
(632, '213.205.192.70', '49', '2', '0', '2023-03-07 01:29:42', '2023-03-07 01:30:31', 'Unknown'),
(633, '213.205.192.70', '51', '1', '0', '2023-03-07 01:29:51', '2023-03-07 01:29:51', 'Unknown'),
(634, '213.205.192.70', '52', '1', '0', '2023-03-07 01:29:55', '2023-03-07 01:29:55', 'Unknown'),
(635, '185.191.171.41', '3', '1', '0', '2023-03-07 01:53:25', '2023-03-07 01:53:25', 'Unknown'),
(636, '47', '41', '1', '0', '2023-03-07 02:26:36', '2023-03-07 02:26:36', 'Vendor'),
(637, '185.191.171.3', '5', '1', '0', '2023-03-07 05:39:53', '2023-03-07 05:39:53', 'Unknown'),
(638, '5.151.98.125', '57', '17', '0', '2023-03-07 06:50:29', '2023-03-21 00:01:56', 'Unknown'),
(639, '185.191.171.3', '40', '1', '0', '2023-03-07 08:28:26', '2023-03-07 08:28:26', 'Unknown'),
(640, '185.191.171.42', '6', '1', '0', '2023-03-07 13:22:19', '2023-03-07 13:22:19', 'Unknown'),
(641, '102.89.22.205', '41', '1', '0', '2023-03-08 06:48:16', '2023-03-08 06:48:16', 'Unknown'),
(642, '102.89.22.80', '41', '1', '0', '2023-03-08 06:54:30', '2023-03-08 06:54:30', 'Unknown'),
(643, '146.87.136.67', '41', '1', '0', '2023-03-08 16:15:46', '2023-03-08 16:15:46', 'Unknown'),
(644, '146.87.136.67', '52', '1', '0', '2023-03-08 16:16:10', '2023-03-08 16:16:10', 'Unknown'),
(645, '146.87.136.67', '56', '11', '0', '2023-03-08 16:22:18', '2023-03-15 17:30:02', 'Unknown'),
(646, '139.135.55.31', '41', '1', '0', '2023-03-08 19:13:54', '2023-03-08 19:13:54', 'Unknown'),
(647, '139.135.55.31', '43', '1', '0', '2023-03-08 19:14:35', '2023-03-08 19:14:35', 'Unknown'),
(648, '103', '41', '2', '0', '2023-03-08 19:23:50', '2023-03-08 19:24:22', 'Vendor'),
(649, '185.191.171.16', '4', '1', '0', '2023-03-08 19:39:48', '2023-03-08 19:39:48', 'Unknown'),
(650, '213.205.192.143', '53', '2', '0', '2023-03-09 07:16:49', '2023-03-09 09:05:09', 'Unknown'),
(651, '213.205.192.143', '55', '3', '0', '2023-03-09 07:16:54', '2023-03-09 09:07:41', 'Unknown'),
(652, '213.205.192.143', '47', '1', '0', '2023-03-09 07:29:41', '2023-03-09 07:29:41', 'Unknown'),
(653, '213.205.192.143', '50', '2', '0', '2023-03-09 07:29:45', '2023-03-09 09:28:07', 'Unknown'),
(654, '213.205.192.143', '52', '4', '0', '2023-03-09 07:29:53', '2023-03-09 09:02:53', 'Unknown'),
(655, '104', '58', '6', '0', '2023-03-09 07:46:35', '2023-03-09 21:32:50', 'Vendor'),
(656, '25', '44', '4', '0', '2023-03-09 07:53:01', '2023-03-09 07:56:14', 'Customer'),
(657, '25', '43', '3', '0', '2023-03-09 07:53:06', '2023-03-09 07:55:30', 'Customer'),
(658, '25', '58', '9', '0', '2023-03-09 07:53:30', '2023-03-09 08:00:32', 'Customer'),
(659, '25', '41', '1', '0', '2023-03-09 07:55:08', '2023-03-09 07:55:08', 'Customer'),
(660, '25', '45', '2', '0', '2023-03-09 07:56:29', '2023-03-09 07:56:51', 'Customer'),
(661, '25', '46', '1', '0', '2023-03-09 07:57:04', '2023-03-09 07:57:04', 'Customer'),
(662, '25', '47', '1', '0', '2023-03-09 07:57:08', '2023-03-09 07:57:08', 'Customer'),
(663, '25', '48', '1', '0', '2023-03-09 07:57:13', '2023-03-09 07:57:13', 'Customer'),
(664, '25', '57', '5', '1', '2023-03-09 08:00:49', '2023-03-09 08:01:11', 'Customer'),
(665, '72', '41', '3', '0', '2023-03-09 08:05:26', '2023-03-09 08:05:39', 'Vendor'),
(666, '83', '44', '1', '0', '2023-03-09 08:16:29', '2023-03-09 08:16:29', 'Vendor'),
(667, '84', '45', '1', '0', '2023-03-09 08:20:54', '2023-03-09 08:20:54', 'Vendor'),
(668, '84', '46', '1', '0', '2023-03-09 08:21:00', '2023-03-09 08:21:00', 'Vendor'),
(669, '84', '47', '1', '0', '2023-03-09 08:21:04', '2023-03-09 08:21:04', 'Vendor'),
(670, '84', '48', '1', '0', '2023-03-09 08:21:08', '2023-03-09 08:21:08', 'Vendor'),
(671, '84', '49', '1', '0', '2023-03-09 08:21:14', '2023-03-09 08:21:14', 'Vendor'),
(672, '213.205.192.143', '58', '1', '0', '2023-03-09 08:23:36', '2023-03-09 08:23:36', 'Unknown'),
(673, '213.205.192.143', '44', '1', '0', '2023-03-09 08:24:09', '2023-03-09 08:24:09', 'Unknown'),
(674, '213.205.192.143', '56', '2', '0', '2023-03-09 08:24:45', '2023-03-09 08:39:23', 'Unknown'),
(675, '213.205.192.143', '54', '1', '0', '2023-03-09 08:27:49', '2023-03-09 08:27:49', 'Unknown'),
(676, '213.205.192.143', '41', '1', '0', '2023-03-09 08:28:39', '2023-03-09 08:28:39', 'Unknown'),
(677, '5.151.98.125', '58', '18', '0', '2023-03-09 08:33:45', '2023-03-21 00:02:08', 'Unknown'),
(678, '213.205.192.143', '57', '6', '0', '2023-03-09 08:36:21', '2023-03-09 09:30:48', 'Unknown'),
(679, '213.205.192.143', '49', '1', '0', '2023-03-09 08:57:47', '2023-03-09 08:57:47', 'Unknown'),
(680, '213.205.192.143', '51', '2', '0', '2023-03-09 08:58:43', '2023-03-09 09:13:20', 'Unknown'),
(681, '213.205.192.143', '48', '1', '0', '2023-03-09 09:09:00', '2023-03-09 09:09:00', 'Unknown'),
(682, '84', '58', '1', '0', '2023-03-09 09:18:05', '2023-03-09 09:18:05', 'Vendor'),
(683, '84', '54', '1', '0', '2023-03-09 09:18:14', '2023-03-09 09:18:14', 'Vendor'),
(684, '84', '56', '2', '0', '2023-03-09 09:18:35', '2023-03-09 09:25:04', 'Vendor'),
(685, '213.205.192.143', '45', '1', '0', '2023-03-09 09:27:25', '2023-03-09 09:27:25', 'Unknown'),
(686, '213.205.192.225', '58', '1', '0', '2023-03-09 18:25:50', '2023-03-09 18:25:50', 'Unknown'),
(687, '213.205.192.225', '57', '1', '0', '2023-03-09 18:26:07', '2023-03-09 18:26:07', 'Unknown'),
(688, '213.205.192.225', '55', '1', '0', '2023-03-09 18:26:13', '2023-03-09 18:26:13', 'Unknown'),
(689, '213.205.192.225', '53', '1', '0', '2023-03-09 18:26:21', '2023-03-09 18:26:21', 'Unknown'),
(690, '106', '41', '2', '0', '2023-03-09 18:32:29', '2023-03-11 18:47:18', 'Vendor'),
(691, '106', '56', '2', '0', '2023-03-09 18:32:39', '2023-03-11 18:24:50', 'Vendor'),
(692, '106', '57', '1', '0', '2023-03-09 18:32:42', '2023-03-09 18:32:42', 'Vendor'),
(693, '106', '58', '2', '0', '2023-03-09 18:32:45', '2023-03-09 21:24:22', 'Vendor'),
(694, '106', '59', '5', '0', '2023-03-09 18:40:59', '2023-03-09 21:23:57', 'Vendor'),
(695, '26', '59', '2', '0', '2023-03-09 18:45:33', '2023-03-09 18:45:55', 'Customer'),
(696, '26', '52', '2', '0', '2023-03-09 18:46:16', '2023-03-09 18:47:01', 'Customer'),
(697, '26', '43', '2', '0', '2023-03-09 18:47:25', '2023-03-09 18:47:45', 'Customer'),
(698, '26', '44', '2', '0', '2023-03-09 18:48:02', '2023-03-09 18:48:18', 'Customer'),
(699, '26', '45', '2', '0', '2023-03-09 18:48:26', '2023-03-09 18:48:50', 'Customer'),
(700, '26', '55', '2', '0', '2023-03-09 18:49:23', '2023-03-09 18:49:38', 'Customer'),
(701, '9', '59', '4', '1', '2023-03-09 18:50:50', '2023-03-09 18:55:24', 'Customer'),
(702, '9', '57', '2', '1', '2023-03-09 18:52:11', '2023-03-09 18:52:32', 'Customer'),
(703, '9', '45', '1', '1', '2023-03-09 18:52:55', '2023-03-09 18:52:55', 'Customer'),
(704, '9', '58', '4', '1', '2023-03-09 18:53:15', '2023-03-09 18:55:28', 'Customer'),
(705, '146.87.136.67', '53', '4', '0', '2023-03-09 18:57:12', '2023-03-09 18:57:47', 'Unknown'),
(706, '146.87.136.67', '59', '1', '0', '2023-03-09 18:59:17', '2023-03-09 18:59:17', 'Unknown'),
(707, '213.205.192.20', '46', '1', '0', '2023-03-09 19:06:21', '2023-03-09 19:06:21', 'Unknown'),
(708, '213.205.192.20', '59', '4', '0', '2023-03-09 19:06:46', '2023-03-10 03:58:33', 'Unknown'),
(709, '22', '59', '21', '8', '2023-03-09 19:08:29', '2023-04-03 18:56:25', 'Customer'),
(710, '107', '60', '2', '0', '2023-03-09 19:27:47', '2023-03-09 19:29:14', 'Vendor'),
(711, '107', '61', '23', '0', '2023-03-09 19:37:58', '2023-03-30 05:11:38', 'Vendor'),
(712, '107', '46', '1', '0', '2023-03-09 19:41:46', '2023-03-09 19:41:46', 'Vendor'),
(713, '22', '61', '21', '10', '2023-03-09 19:46:21', '2023-03-13 16:25:33', 'Customer'),
(714, '213.205.192.20', '61', '7', '0', '2023-03-09 19:49:19', '2023-03-10 22:59:37', 'Unknown'),
(715, '107', '57', '1', '0', '2023-03-09 19:53:47', '2023-03-09 19:53:47', 'Vendor'),
(716, '107', '56', '2', '0', '2023-03-09 19:54:05', '2023-03-09 20:49:42', 'Vendor'),
(717, '107', '50', '1', '0', '2023-03-09 20:49:46', '2023-03-09 20:49:46', 'Vendor'),
(718, '107', '43', '1', '0', '2023-03-09 20:50:14', '2023-03-09 20:50:14', 'Vendor'),
(719, '107', '54', '1', '0', '2023-03-09 20:50:26', '2023-03-09 20:50:26', 'Vendor'),
(720, '87', '45', '1', '0', '2023-03-09 20:53:11', '2023-03-09 20:53:11', 'Vendor'),
(721, '87', '55', '1', '0', '2023-03-09 20:53:25', '2023-03-09 20:53:25', 'Vendor'),
(722, '87', '48', '1', '0', '2023-03-09 20:54:55', '2023-03-09 20:54:55', 'Vendor'),
(723, '87', '61', '1', '0', '2023-03-09 20:55:35', '2023-03-09 20:55:35', 'Vendor'),
(724, '213.205.192.20', '56', '3', '0', '2023-03-09 20:56:22', '2023-03-10 22:58:49', 'Unknown'),
(725, '213.205.192.20', '47', '1', '0', '2023-03-09 20:57:42', '2023-03-09 20:57:42', 'Unknown'),
(726, '5.151.98.125', '61', '22', '0', '2023-03-09 20:58:59', '2023-03-21 09:58:05', 'Unknown'),
(727, '107', '59', '2', '0', '2023-03-09 21:18:16', '2023-03-09 21:18:27', 'Vendor'),
(728, '104', '55', '1', '0', '2023-03-09 21:26:07', '2023-03-09 21:26:07', 'Vendor'),
(729, '99', '41', '2', '0', '2023-03-09 21:29:08', '2023-03-10 09:20:22', 'Vendor'),
(730, '99', '53', '5', '0', '2023-03-09 21:29:16', '2023-03-10 18:11:59', 'Vendor'),
(731, '99', '54', '2', '0', '2023-03-09 21:29:39', '2023-03-10 09:21:56', 'Vendor'),
(732, '99', '61', '1', '0', '2023-03-09 21:29:54', '2023-03-09 21:29:54', 'Vendor'),
(733, '213.205.192.20', '58', '2', '0', '2023-03-09 21:31:59', '2023-03-09 23:43:22', 'Unknown'),
(734, '104', '41', '1', '0', '2023-03-09 21:32:57', '2023-03-09 21:32:57', 'Vendor'),
(735, '81', '61', '5', '0', '2023-03-09 21:42:02', '2023-03-09 22:39:23', 'Vendor'),
(736, '81', '59', '3', '0', '2023-03-09 21:56:52', '2023-03-17 08:10:35', 'Vendor'),
(737, '81', '58', '1', '0', '2023-03-09 21:56:55', '2023-03-09 21:56:55', 'Vendor'),
(738, '81', '54', '2', '0', '2023-03-09 21:57:18', '2023-03-09 21:58:22', 'Vendor'),
(739, '81', '52', '1', '0', '2023-03-09 22:29:57', '2023-03-09 22:29:57', 'Vendor'),
(740, '89', '58', '1', '0', '2023-03-09 23:25:41', '2023-03-09 23:25:41', 'Vendor'),
(741, '89', '56', '1', '0', '2023-03-09 23:25:46', '2023-03-09 23:25:46', 'Vendor'),
(742, '89', '61', '1', '0', '2023-03-09 23:25:54', '2023-03-09 23:25:54', 'Vendor'),
(743, '213.205.192.20', '50', '1', '0', '2023-03-09 23:40:10', '2023-03-09 23:40:10', 'Unknown'),
(744, '213.205.192.20', '51', '1', '0', '2023-03-09 23:40:15', '2023-03-09 23:40:15', 'Unknown'),
(745, '213.205.192.20', '54', '1', '0', '2023-03-09 23:45:29', '2023-03-09 23:45:29', 'Unknown'),
(746, '5.151.98.125', '59', '9', '0', '2023-03-10 01:13:33', '2023-03-21 09:58:27', 'Unknown'),
(747, '84.255.185.112', '41', '1', '0', '2023-03-10 01:38:51', '2023-03-10 01:38:51', 'Unknown'),
(748, '84.255.185.112', '46', '1', '0', '2023-03-10 01:39:20', '2023-03-10 01:39:20', 'Unknown'),
(749, '84.255.185.112', '57', '1', '0', '2023-03-10 01:39:40', '2023-03-10 01:39:40', 'Unknown'),
(750, '84.255.185.112', '51', '1', '0', '2023-03-10 01:40:01', '2023-03-10 01:40:01', 'Unknown'),
(751, '84.255.185.112', '53', '1', '0', '2023-03-10 01:40:41', '2023-03-10 01:40:41', 'Unknown'),
(752, '99', '51', '2', '0', '2023-03-10 02:09:26', '2023-03-10 18:12:04', 'Vendor'),
(753, '83', '57', '1', '0', '2023-03-10 02:30:51', '2023-03-10 02:30:51', 'Vendor'),
(754, '83', '54', '2', '0', '2023-03-10 02:31:42', '2023-03-10 02:35:30', 'Vendor'),
(755, '83', '41', '1', '0', '2023-03-10 02:35:23', '2023-03-10 02:35:23', 'Vendor'),
(756, '88.201.82.207', '54', '1', '0', '2023-03-10 02:35:28', '2023-03-10 02:35:28', 'Unknown'),
(757, '83', '61', '2', '0', '2023-03-10 02:44:14', '2023-03-27 10:40:19', 'Vendor'),
(758, '88.201.82.207', '61', '1', '0', '2023-03-10 02:44:44', '2023-03-10 02:44:44', 'Unknown'),
(759, '108', '62', '9', '0', '2023-03-10 03:13:02', '2023-03-10 03:53:43', 'Vendor'),
(760, '108', '56', '1', '0', '2023-03-10 03:16:31', '2023-03-10 03:16:31', 'Vendor'),
(761, '89.148.42.60', '61', '3', '0', '2023-03-10 03:45:08', '2023-03-10 03:46:13', 'Unknown'),
(762, '108', '61', '2', '0', '2023-03-10 03:46:21', '2023-03-10 03:53:48', 'Vendor'),
(763, '108', '59', '1', '0', '2023-03-10 03:53:52', '2023-03-10 03:53:52', 'Vendor'),
(764, '108', '58', '1', '0', '2023-03-10 03:53:56', '2023-03-10 03:53:56', 'Vendor'),
(765, '108', '57', '1', '0', '2023-03-10 03:53:59', '2023-03-10 03:53:59', 'Vendor'),
(766, '213.205.192.20', '57', '1', '0', '2023-03-10 03:56:09', '2023-03-10 03:56:09', 'Unknown'),
(767, '213.205.192.20', '53', '1', '0', '2023-03-10 03:58:21', '2023-03-10 03:58:21', 'Unknown'),
(768, '213.205.192.20', '62', '2', '0', '2023-03-10 03:58:38', '2023-03-10 22:57:48', 'Unknown'),
(769, '22', '62', '13', '12', '2023-03-10 03:59:11', '2023-03-12 02:35:57', 'Customer'),
(770, '5.151.98.125', '62', '9', '0', '2023-03-10 05:14:16', '2023-03-23 06:28:25', 'Unknown'),
(771, '77.69.144.82', '41', '1', '0', '2023-03-10 05:19:43', '2023-03-10 05:19:43', 'Unknown'),
(772, '109', '63', '1', '0', '2023-03-10 05:28:12', '2023-03-10 05:28:12', 'Vendor'),
(773, '22', '63', '15', '12', '2023-03-10 05:29:27', '2023-03-13 16:25:37', 'Customer'),
(774, '22', '58', '18', '12', '2023-03-10 05:42:49', '2023-04-05 01:33:13', 'Customer'),
(775, '5.151.98.125', '63', '8', '0', '2023-03-10 05:48:08', '2023-03-19 07:34:00', 'Unknown'),
(776, '99', '48', '1', '0', '2023-03-10 09:20:26', '2023-03-10 09:20:26', 'Vendor'),
(777, '5.151.98.125', '65', '11', '0', '2023-03-10 09:42:44', '2023-03-21 09:58:22', 'Unknown'),
(778, '107', '62', '1', '0', '2023-03-10 09:53:09', '2023-03-10 09:53:09', 'Vendor'),
(779, '107', '63', '1', '0', '2023-03-10 09:53:12', '2023-03-10 09:53:12', 'Vendor'),
(780, '107', '65', '1', '0', '2023-03-10 09:53:24', '2023-03-10 09:53:24', 'Vendor'),
(781, '148.251.234.108', '56', '1', '0', '2023-03-10 17:16:32', '2023-03-10 17:16:32', 'Unknown'),
(782, '99', '66', '1', '0', '2023-03-10 18:25:20', '2023-03-10 18:25:20', 'Vendor'),
(783, '5.151.98.125', '66', '7', '0', '2023-03-10 18:25:38', '2023-03-21 09:58:18', 'Unknown'),
(784, '5.151.98.125', '64', '4', '0', '2023-03-10 18:29:45', '2023-03-21 00:02:17', 'Unknown'),
(785, '85', '64', '1', '0', '2023-03-10 18:31:04', '2023-03-10 18:31:04', 'Vendor'),
(786, '213.205.192.20', '64', '1', '0', '2023-03-10 22:57:56', '2023-03-10 22:57:56', 'Unknown'),
(787, '213.205.192.20', '66', '1', '0', '2023-03-10 22:58:01', '2023-03-10 22:58:01', 'Unknown'),
(788, '22', '65', '7', '12', '2023-03-11 06:16:22', '2023-03-13 20:41:18', 'Customer'),
(789, '213.205.192.50', '61', '1', '0', '2023-03-11 06:26:20', '2023-03-11 06:26:20', 'Unknown'),
(790, '106', '65', '1', '0', '2023-03-11 06:29:47', '2023-03-11 06:29:47', 'Vendor'),
(791, '106', '61', '1', '0', '2023-03-11 18:24:59', '2023-03-11 18:24:59', 'Vendor'),
(792, '106', '63', '1', '0', '2023-03-11 18:47:35', '2023-03-11 18:47:35', 'Vendor'),
(793, '106', '66', '1', '0', '2023-03-11 19:04:17', '2023-03-11 19:04:17', 'Vendor'),
(794, '110', '67', '5', '0', '2023-03-11 19:31:55', '2023-03-11 19:34:17', 'Vendor'),
(795, '5.151.98.125', '67', '10', '0', '2023-03-11 19:34:28', '2023-03-21 00:04:03', 'Unknown'),
(796, '103', '67', '1', '0', '2023-03-11 19:49:39', '2023-03-11 19:49:39', 'Vendor'),
(797, '22', '67', '26', '12', '2023-03-11 19:53:07', '2023-04-04 20:57:20', 'Customer'),
(798, '22', '66', '1', '12', '2023-03-11 23:17:39', '2023-03-11 23:17:39', 'Customer'),
(799, '86.130.230.201', '61', '1', '0', '2023-03-12 23:12:41', '2023-03-12 23:12:41', 'Unknown'),
(800, '84.255.185.68', '41', '1', '0', '2023-03-13 01:00:11', '2023-03-13 01:00:11', 'Unknown'),
(801, '22', '64', '2', '12', '2023-03-13 01:30:19', '2023-03-13 23:52:09', 'Customer'),
(802, '185.191.171.23', '29', '1', '0', '2023-03-13 11:36:12', '2023-03-13 11:36:12', 'Unknown'),
(803, '213.205.192.54', '56', '2', '0', '2023-03-13 22:08:52', '2023-03-13 22:09:58', 'Unknown'),
(804, '77.69.132.233', '65', '1', '0', '2023-03-14 03:29:16', '2023-03-14 03:29:16', 'Unknown'),
(805, '77.69.132.233', '67', '1', '0', '2023-03-14 03:29:33', '2023-03-14 03:29:33', 'Unknown'),
(806, '77.69.132.233', '41', '1', '0', '2023-03-14 03:29:51', '2023-03-14 03:29:51', 'Unknown'),
(807, '77.69.132.233', '51', '1', '0', '2023-03-14 03:30:08', '2023-03-14 03:30:08', 'Unknown'),
(808, '77.69.132.233', '57', '1', '0', '2023-03-14 03:30:32', '2023-03-14 03:30:32', 'Unknown'),
(809, '213.205.192.54', '59', '1', '0', '2023-03-14 21:03:43', '2023-03-14 21:03:43', 'Unknown'),
(810, '111', '56', '3', '0', '2023-03-14 23:45:35', '2023-03-15 00:46:33', 'Vendor'),
(811, '111', '61', '2', '0', '2023-03-14 23:52:22', '2023-03-15 00:06:22', 'Vendor'),
(812, '213.205.192.82', '56', '11', '0', '2023-03-15 05:05:58', '2023-03-15 16:21:25', 'Unknown'),
(813, '213.205.192.82', '65', '1', '0', '2023-03-15 05:06:35', '2023-03-15 05:06:35', 'Unknown'),
(814, '213.205.192.82', '63', '1', '0', '2023-03-15 05:07:04', '2023-03-15 05:07:04', 'Unknown'),
(815, '213.205.192.82', '58', '1', '0', '2023-03-15 05:07:12', '2023-03-15 05:07:12', 'Unknown'),
(816, '213.205.192.82', '53', '1', '0', '2023-03-15 05:07:27', '2023-03-15 05:07:27', 'Unknown'),
(817, '213.205.192.82', '41', '1', '0', '2023-03-15 05:07:37', '2023-03-15 05:07:37', 'Unknown'),
(818, '46.184.208.53', '57', '1', '0', '2023-03-15 21:34:48', '2023-03-15 21:34:48', 'Unknown'),
(819, '46.184.208.53', '59', '1', '0', '2023-03-15 21:35:02', '2023-03-15 21:35:02', 'Unknown'),
(820, '185.191.171.9', '3', '1', '0', '2023-03-18 10:55:13', '2023-03-18 10:55:13', 'Unknown'),
(821, '185.191.171.36', '5', '1', '0', '2023-03-18 15:58:12', '2023-03-18 15:58:12', 'Unknown'),
(822, '46.42.101.246', '51', '1', '0', '2023-03-18 17:08:11', '2023-03-18 17:08:11', 'Unknown'),
(823, '46.42.101.246', '53', '2', '0', '2023-03-18 17:08:52', '2023-03-18 17:09:25', 'Unknown'),
(824, '46.42.101.246', '58', '1', '0', '2023-03-18 17:09:35', '2023-03-18 17:09:35', 'Unknown'),
(825, '84.255.185.71', '62', '1', '0', '2023-03-19 02:46:55', '2023-03-19 02:46:55', 'Unknown'),
(826, '84.255.185.71', '51', '1', '0', '2023-03-19 02:47:59', '2023-03-19 02:47:59', 'Unknown'),
(827, '84.255.185.71', '41', '1', '0', '2023-03-19 02:48:45', '2023-03-19 02:48:45', 'Unknown'),
(828, '185.191.171.33', '62', '1', '0', '2023-03-20 12:32:41', '2023-03-20 12:32:41', 'Unknown'),
(829, '141.8.79.202', '59', '1', '0', '2023-03-20 18:40:40', '2023-03-20 18:40:40', 'Unknown'),
(830, '78.110.74.42', '63', '1', '0', '2023-03-20 20:46:22', '2023-03-20 20:46:22', 'Unknown'),
(831, '185.191.171.35', '56', '2', '0', '2023-03-20 21:05:46', '2023-05-05 12:03:15', 'Unknown'),
(832, '112', '67', '1', '0', '2023-03-21 20:07:59', '2023-03-21 20:07:59', 'Vendor'),
(833, '112', '53', '1', '0', '2023-03-21 20:08:16', '2023-03-21 20:08:16', 'Vendor'),
(834, '112', '59', '1', '0', '2023-03-21 20:08:52', '2023-03-21 20:08:52', 'Vendor'),
(835, '213.205.198.198', '41', '1', '0', '2023-03-22 08:04:47', '2023-03-22 08:04:47', 'Unknown'),
(836, '94.23.203.52', '5', '1', '0', '2023-03-23 10:57:42', '2023-03-23 10:57:42', 'Unknown'),
(837, '94.23.203.52', '6', '1', '0', '2023-03-23 10:57:46', '2023-03-23 10:57:46', 'Unknown'),
(838, '185.191.171.42', '30', '1', '0', '2023-03-23 18:14:18', '2023-03-23 18:14:18', 'Unknown'),
(839, '185.191.171.4', '38', '1', '0', '2023-03-23 21:58:53', '2023-03-23 21:58:53', 'Unknown'),
(840, '77.69.165.92', '61', '2', '0', '2023-03-24 07:27:38', '2023-03-24 07:33:19', 'Unknown'),
(841, '185.191.171.11', '31', '1', '0', '2023-03-24 12:04:02', '2023-03-24 12:04:02', 'Unknown'),
(842, '185.191.171.33', '28', '1', '0', '2023-03-25 10:24:42', '2023-03-25 10:24:42', 'Unknown'),
(843, '216.244.66.201', '58', '1', '0', '2023-03-26 14:05:51', '2023-03-26 14:05:51', 'Unknown'),
(844, '88.201.0.131', '56', '9', '0', '2023-03-26 17:33:39', '2023-03-26 18:25:43', 'Unknown'),
(845, '88.201.0.131', '62', '9', '0', '2023-03-26 18:27:55', '2023-03-26 21:03:59', 'Unknown'),
(846, '88.201.0.131', '53', '6', '0', '2023-03-26 18:37:44', '2023-03-26 20:18:21', 'Unknown'),
(847, '193.188.122.117', '61', '1', '0', '2023-03-26 20:09:22', '2023-03-26 20:09:22', 'Unknown'),
(848, '109.161.178.225', '61', '1', '0', '2023-03-26 20:13:17', '2023-03-26 20:13:17', 'Unknown'),
(849, '88.201.0.131', '61', '6', '0', '2023-03-26 20:13:41', '2023-03-26 21:04:22', 'Unknown'),
(850, '88.201.0.131', '63', '1', '0', '2023-03-26 20:26:53', '2023-03-26 20:26:53', 'Unknown'),
(851, '88.201.0.131', '67', '1', '0', '2023-03-26 21:07:14', '2023-03-26 21:07:14', 'Unknown'),
(852, '193.188.122.17', '61', '3', '0', '2023-03-26 21:50:44', '2023-03-26 21:51:07', 'Unknown'),
(853, '84.255.184.50', '58', '1', '0', '2023-03-27 00:10:07', '2023-03-27 00:10:07', 'Unknown'),
(854, '84.255.184.50', '62', '1', '0', '2023-03-27 00:10:32', '2023-03-27 00:10:32', 'Unknown'),
(855, '28', '63', '1', '0', '2023-03-27 00:13:01', '2023-03-27 00:13:01', 'Customer'),
(856, '28', '61', '2', '0', '2023-03-27 00:13:06', '2023-03-27 00:13:12', 'Customer'),
(857, '114', '56', '1', '0', '2023-03-27 07:27:00', '2023-03-27 07:27:00', 'Vendor'),
(858, '114', '68', '9', '0', '2023-03-27 07:27:14', '2023-03-27 07:36:28', 'Vendor'),
(859, '114', '69', '5', '0', '2023-03-27 07:47:54', '2023-03-27 07:55:20', 'Vendor'),
(860, '22', '69', '14', '14', '2023-03-27 07:57:52', '2023-04-04 20:50:05', 'Customer'),
(861, '77.69.149.157', '69', '7', '0', '2023-03-27 07:59:48', '2023-03-27 23:00:23', 'Unknown'),
(862, '83', '69', '1', '0', '2023-03-27 10:36:36', '2023-03-27 10:36:36', 'Vendor'),
(863, '77.69.149.157', '61', '2', '0', '2023-03-27 10:41:44', '2023-03-28 09:23:55', 'Unknown'),
(864, '77.69.149.157', '56', '2', '0', '2023-03-27 10:43:25', '2023-03-27 10:43:39', 'Unknown'),
(865, '88.201.58.31', '53', '3', '0', '2023-03-27 20:16:03', '2023-03-27 20:31:54', 'Unknown'),
(866, '88.201.58.31', '56', '7', '0', '2023-03-27 20:27:36', '2023-03-27 21:12:35', 'Unknown'),
(867, '88.201.58.31', '58', '2', '0', '2023-03-27 20:37:00', '2023-03-27 21:17:22', 'Unknown'),
(868, '46.184.244.158', '58', '1', '0', '2023-03-27 20:42:29', '2023-03-27 20:42:29', 'Unknown'),
(869, '88.201.58.31', '63', '1', '0', '2023-03-27 20:58:56', '2023-03-27 20:58:56', 'Unknown'),
(870, '88.201.58.31', '69', '1', '0', '2023-03-27 21:19:51', '2023-03-27 21:19:51', 'Unknown'),
(871, '77.69.149.157', '53', '3', '0', '2023-03-27 23:00:55', '2023-03-28 09:20:54', 'Unknown'),
(872, '185.191.171.23', '61', '1', '0', '2023-03-28 02:47:26', '2023-03-28 02:47:26', 'Unknown'),
(873, '185.191.171.9', '53', '1', '0', '2023-03-28 04:03:43', '2023-03-28 04:03:43', 'Unknown'),
(874, '77.69.149.157', '62', '2', '0', '2023-03-28 09:19:06', '2023-03-28 09:23:50', 'Unknown'),
(875, '77.69.149.157', '58', '1', '0', '2023-03-28 09:21:39', '2023-03-28 09:21:39', 'Unknown'),
(876, '216.244.66.201', '67', '1', '0', '2023-03-28 12:22:24', '2023-03-28 12:22:24', 'Unknown'),
(877, '185.191.171.4', '66', '1', '0', '2023-03-28 17:44:00', '2023-03-28 17:44:00', 'Unknown'),
(878, '216.244.66.201', '62', '1', '0', '2023-03-29 03:15:50', '2023-03-29 03:15:50', 'Unknown'),
(879, '185.191.171.37', '63', '1', '0', '2023-03-29 10:10:26', '2023-03-29 10:10:26', 'Unknown'),
(880, '185.191.171.8', '51', '1', '0', '2023-03-29 11:23:02', '2023-03-29 11:23:02', 'Unknown'),
(881, '216.244.66.201', '53', '1', '0', '2023-03-29 15:32:39', '2023-03-29 15:32:39', 'Unknown'),
(882, '185.191.171.12', '67', '1', '0', '2023-03-29 15:32:46', '2023-03-29 15:32:46', 'Unknown'),
(883, '185.191.171.44', '59', '1', '0', '2023-03-29 20:26:20', '2023-03-29 20:26:20', 'Unknown'),
(884, '185.191.171.38', '58', '1', '0', '2023-03-29 21:18:52', '2023-03-29 21:18:52', 'Unknown'),
(885, '185.191.171.7', '3', '1', '0', '2023-03-30 03:57:53', '2023-03-30 03:57:53', 'Unknown'),
(886, '216.244.66.201', '63', '1', '0', '2023-03-30 06:44:34', '2023-03-30 06:44:34', 'Unknown'),
(887, '216.244.66.201', '56', '1', '0', '2023-03-30 20:42:36', '2023-03-30 20:42:36', 'Unknown'),
(888, '88.201.58.163', '69', '3', '0', '2023-03-31 01:43:22', '2023-03-31 07:53:43', 'Unknown'),
(889, '216.244.66.201', '61', '1', '0', '2023-03-31 20:56:53', '2023-03-31 20:56:53', 'Unknown'),
(890, '216.244.66.201', '66', '1', '0', '2023-04-01 00:32:05', '2023-04-01 00:32:05', 'Unknown'),
(891, '193.188.122.51', '58', '1', '0', '2023-04-01 00:56:16', '2023-04-01 00:56:16', 'Unknown'),
(892, '88.201.6.154', '58', '1', '0', '2023-04-01 00:56:18', '2023-04-01 00:56:18', 'Unknown'),
(893, '193.188.122.51', '59', '1', '0', '2023-04-01 00:56:54', '2023-04-01 00:56:54', 'Unknown'),
(894, '88.201.6.154', '59', '1', '0', '2023-04-01 00:56:55', '2023-04-01 00:56:55', 'Unknown'),
(895, '193.188.122.51', '66', '1', '0', '2023-04-01 00:57:44', '2023-04-01 00:57:44', 'Unknown'),
(896, '185.191.171.11', '4', '1', '0', '2023-04-01 02:44:38', '2023-04-01 02:44:38', 'Unknown'),
(897, '88.201.6.154', '69', '1', '0', '2023-04-01 04:14:09', '2023-04-01 04:14:09', 'Unknown'),
(898, '185.191.171.9', '29', '1', '0', '2023-04-01 04:28:37', '2023-04-01 04:28:37', 'Unknown'),
(899, '89.148.42.48', '67', '1', '0', '2023-04-01 06:43:34', '2023-04-01 06:43:34', 'Unknown'),
(900, '185.191.171.4', '56', '1', '0', '2023-04-01 13:53:29', '2023-04-01 13:53:29', 'Unknown'),
(901, '89.148.63.40', '56', '1', '0', '2023-04-01 17:55:08', '2023-04-01 17:55:08', 'Unknown'),
(902, '84.255.184.50', '69', '1', '0', '2023-04-01 20:54:40', '2023-04-01 20:54:40', 'Unknown'),
(903, '216.244.66.201', '59', '1', '0', '2023-04-02 01:31:28', '2023-04-02 01:31:28', 'Unknown'),
(904, '27.63.228.86', '66', '1', '0', '2023-04-02 16:32:46', '2023-04-02 16:32:46', 'Unknown'),
(905, '88.201.58.55', '69', '1', '0', '2023-04-02 18:39:31', '2023-04-02 18:39:31', 'Unknown'),
(906, '88.201.6.184', '53', '6', '0', '2023-04-02 20:05:41', '2023-04-03 00:24:37', 'Unknown'),
(907, '88.201.6.184', '69', '3', '0', '2023-04-02 20:37:14', '2023-04-02 20:58:22', 'Unknown'),
(908, '115', '70', '4', '0', '2023-04-02 21:35:33', '2023-04-02 21:41:24', 'Vendor'),
(909, '22', '70', '10', '14', '2023-04-02 21:38:05', '2023-04-04 20:54:46', 'Customer'),
(910, '88.201.6.184', '70', '3', '0', '2023-04-02 21:41:48', '2023-04-02 21:46:16', 'Unknown'),
(911, '46.184.242.174', '70', '1', '0', '2023-04-02 21:44:51', '2023-04-02 21:44:51', 'Unknown'),
(912, '84.255.184.50', '70', '1', '0', '2023-04-02 21:55:13', '2023-04-02 21:55:13', 'Unknown'),
(913, '77.69.149.157', '70', '2', '0', '2023-04-03 00:21:46', '2023-04-03 00:22:06', 'Unknown'),
(914, '193.188.122.209', '70', '1', '0', '2023-04-03 07:22:59', '2023-04-03 07:22:59', 'Unknown'),
(915, '84.255.185.42', '69', '1', '0', '2023-04-03 18:04:22', '2023-04-03 18:04:22', 'Unknown'),
(916, '84.255.185.42', '56', '1', '0', '2023-04-03 19:00:32', '2023-04-03 19:00:32', 'Unknown'),
(917, '84.255.185.42', '70', '1', '0', '2023-04-03 19:02:03', '2023-04-03 19:02:03', 'Unknown'),
(918, '117', '71', '1', '0', '2023-04-03 22:49:46', '2023-04-03 22:49:46', 'Vendor'),
(919, '22', '71', '11', '14', '2023-04-03 22:51:12', '2023-04-05 01:32:15', 'Customer'),
(920, '84.255.185.42', '71', '1', '0', '2023-04-03 22:52:38', '2023-04-03 22:52:38', 'Unknown'),
(921, '193.188.123.230', '71', '1', '0', '2023-04-04 00:34:18', '2023-04-04 00:34:18', 'Unknown'),
(922, '193.188.122.115', '71', '1', '0', '2023-04-04 01:17:57', '2023-04-04 01:17:57', 'Unknown'),
(923, '118', '72', '1', '0', '2023-04-04 18:56:23', '2023-04-04 18:56:23', 'Vendor'),
(924, '22', '72', '8', '14', '2023-04-04 18:58:28', '2023-04-04 19:51:40', 'Customer'),
(925, '84.255.185.42', '72', '1', '0', '2023-04-04 19:00:00', '2023-04-04 19:00:00', 'Unknown'),
(926, '77.246.75.88', '61', '2', '0', '2023-04-04 22:30:35', '2023-04-04 22:30:38', 'Unknown'),
(927, '193.188.123.195', '72', '2', '0', '2023-04-04 23:02:40', '2023-04-05 07:32:23', 'Unknown'),
(928, '88.201.43.44', '72', '4', '0', '2023-04-04 23:48:44', '2023-04-04 23:57:30', 'Unknown'),
(929, '88.201.43.44', '71', '4', '0', '2023-04-04 23:50:28', '2023-04-05 00:47:33', 'Unknown'),
(930, '88.201.43.44', '70', '3', '0', '2023-04-04 23:52:57', '2023-04-05 00:20:10', 'Unknown'),
(931, '88.201.43.44', '58', '2', '0', '2023-04-04 23:53:34', '2023-04-05 00:22:55', 'Unknown'),
(932, '88.201.43.44', '59', '1', '0', '2023-04-04 23:53:42', '2023-04-04 23:53:42', 'Unknown'),
(933, '88.201.43.44', '67', '2', '0', '2023-04-04 23:53:54', '2023-04-05 00:20:21', 'Unknown'),
(934, '77.69.149.157', '71', '1', '0', '2023-04-05 00:19:39', '2023-04-05 00:19:39', 'Unknown'),
(935, '77.69.149.157', '72', '1', '0', '2023-04-05 00:19:56', '2023-04-05 00:19:56', 'Unknown'),
(936, '88.201.43.44', '61', '2', '0', '2023-04-05 00:20:31', '2023-04-05 00:22:43', 'Unknown'),
(937, '193.188.105.138', '71', '1', '0', '2023-04-05 01:59:31', '2023-04-05 01:59:31', 'Unknown'),
(938, '88.201.43.112', '61', '1', '0', '2023-04-05 07:48:12', '2023-04-05 07:48:12', 'Unknown'),
(939, '88.201.43.180', '72', '1', '0', '2023-04-06 07:39:44', '2023-04-06 07:39:44', 'Unknown'),
(940, '89.148.63.34', '69', '1', '0', '2023-04-06 19:57:25', '2023-04-06 19:57:25', 'Unknown'),
(941, '89.148.42.2', '62', '1', '0', '2023-04-06 20:03:42', '2023-04-06 20:03:42', 'Unknown'),
(942, '89.148.42.2', '58', '2', '0', '2023-04-06 20:07:30', '2023-04-06 20:14:28', 'Unknown'),
(943, '89.148.42.2', '69', '1', '0', '2023-04-06 20:11:55', '2023-04-06 20:11:55', 'Unknown'),
(944, '89.148.42.174', '58', '2', '0', '2023-04-06 22:52:43', '2023-04-06 22:59:09', 'Unknown'),
(945, '89.148.63.190', '58', '1', '0', '2023-04-07 21:06:44', '2023-04-07 21:06:44', 'Unknown'),
(946, '89.148.42.4', '70', '1', '0', '2023-04-08 03:14:45', '2023-04-08 03:14:45', 'Unknown'),
(947, '89.148.63.232', '70', '1', '0', '2023-04-09 03:15:25', '2023-04-09 03:15:25', 'Unknown'),
(948, '185.191.171.43', '61', '1', '0', '2023-04-09 04:55:51', '2023-04-09 04:55:51', 'Unknown'),
(949, '89.148.42.178', '67', '1', '0', '2023-04-09 15:19:07', '2023-04-09 15:19:07', 'Unknown'),
(950, '89.148.63.232', '69', '1', '0', '2023-04-10 01:50:32', '2023-04-10 01:50:32', 'Unknown'),
(951, '82.194.50.116', '72', '1', '0', '2023-04-10 09:13:00', '2023-04-10 09:13:00', 'Unknown'),
(952, '89.148.42.126', '70', '1', '0', '2023-04-10 20:31:38', '2023-04-10 20:31:38', 'Unknown'),
(953, '185.191.171.43', '40', '1', '0', '2023-04-11 10:32:30', '2023-04-11 10:32:30', 'Unknown'),
(954, '193.188.105.134', '70', '1', '0', '2023-04-11 20:52:06', '2023-04-11 20:52:06', 'Unknown'),
(955, '193.188.105.134', '69', '2', '0', '2023-04-11 20:52:12', '2023-04-11 23:47:53', 'Unknown'),
(956, '167.114.159.99', '28', '1', '0', '2023-04-12 08:38:29', '2023-04-12 08:38:29', 'Unknown'),
(957, '193.188.122.243', '69', '1', '0', '2023-04-14 01:12:00', '2023-04-14 01:12:00', 'Unknown'),
(958, '77.69.189.163', '69', '3', '0', '2023-04-14 07:52:19', '2023-04-19 00:02:00', 'Unknown'),
(959, '185.14.185.59', '69', '1', '0', '2023-04-14 07:52:20', '2023-04-14 07:52:20', 'Unknown'),
(960, '77.69.189.163', '70', '1', '0', '2023-04-14 07:52:25', '2023-04-14 07:52:25', 'Unknown'),
(961, '77.69.189.163', '72', '1', '0', '2023-04-14 07:52:30', '2023-04-14 07:52:30', 'Unknown'),
(962, '185.14.185.59', '72', '1', '0', '2023-04-14 07:52:31', '2023-04-14 07:52:31', 'Unknown'),
(963, '149.202.87.160', '69', '1', '0', '2023-04-14 19:08:30', '2023-04-14 19:08:30', 'Unknown'),
(964, '149.202.87.160', '70', '1', '0', '2023-04-14 19:08:32', '2023-04-14 19:08:32', 'Unknown'),
(965, '149.202.87.160', '71', '1', '0', '2023-04-14 19:08:34', '2023-04-14 19:08:34', 'Unknown'),
(966, '149.202.87.160', '72', '1', '0', '2023-04-14 19:08:36', '2023-04-14 19:08:36', 'Unknown'),
(967, '185.191.171.18', '3', '1', '0', '2023-04-15 22:07:12', '2023-04-15 22:07:12', 'Unknown'),
(968, '185.191.171.39', '56', '1', '0', '2023-04-15 22:47:01', '2023-04-15 22:47:01', 'Unknown'),
(969, '88.201.6.56', '69', '1', '0', '2023-04-16 02:08:50', '2023-04-16 02:08:50', 'Unknown'),
(970, '185.191.171.34', '62', '1', '0', '2023-04-18 15:06:13', '2023-04-18 15:06:13', 'Unknown'),
(971, '185.191.171.2', '5', '1', '0', '2023-04-18 15:16:14', '2023-04-18 15:16:14', 'Unknown'),
(972, '95.84.65.39', '69', '1', '0', '2023-04-19 00:02:07', '2023-04-19 00:02:07', 'Unknown'),
(973, '109.161.160.63', '61', '1', '0', '2023-04-19 00:33:33', '2023-04-19 00:33:33', 'Unknown'),
(974, '193.188.123.59', '69', '1', '0', '2023-04-20 00:48:17', '2023-04-20 00:48:17', 'Unknown'),
(975, '193.188.122.227', '69', '1', '0', '2023-04-20 21:48:16', '2023-04-20 21:48:16', 'Unknown'),
(976, '119', '73', '16', '0', '2023-04-20 22:35:22', '2023-05-05 04:09:19', 'Vendor'),
(977, '22', '73', '15', '14', '2023-04-20 23:21:25', '2023-05-08 02:10:34', 'Customer'),
(978, '119', '69', '1', '0', '2023-04-20 23:28:35', '2023-04-20 23:28:35', 'Vendor'),
(979, '84.255.185.42', '73', '1', '0', '2023-04-20 23:29:07', '2023-04-20 23:29:07', 'Unknown'),
(980, '88.201.11.129', '73', '1', '0', '2023-04-20 23:43:33', '2023-04-20 23:43:33', 'Unknown'),
(981, '88.201.0.205', '73', '1', '0', '2023-04-21 01:26:35', '2023-04-21 01:26:35', 'Unknown'),
(982, '77.69.189.163', '73', '1', '0', '2023-04-21 10:07:33', '2023-04-21 10:07:33', 'Unknown'),
(983, '185.191.171.24', '29', '1', '0', '2023-04-22 21:06:16', '2023-04-22 21:06:16', 'Unknown'),
(984, '193.188.113.161', '69', '1', '0', '2023-04-23 15:35:08', '2023-04-23 15:35:08', 'Unknown'),
(985, '185.191.171.24', '61', '1', '0', '2023-04-24 00:37:30', '2023-04-24 00:37:30', 'Unknown'),
(986, '27', '70', '1', '0', '2023-04-25 16:31:47', '2023-04-25 16:31:47', 'Customer'),
(987, '185.191.171.8', '66', '1', '0', '2023-04-26 15:33:54', '2023-04-26 15:33:54', 'Unknown'),
(988, '185.191.171.5', '31', '1', '0', '2023-04-27 03:35:00', '2023-04-27 03:35:00', 'Unknown'),
(989, '185.191.171.7', '63', '1', '0', '2023-04-27 08:58:52', '2023-04-27 08:58:52', 'Unknown'),
(990, '185.191.171.39', '51', '1', '0', '2023-04-27 13:23:11', '2023-04-27 13:23:11', 'Unknown'),
(991, '185.191.171.5', '67', '1', '0', '2023-04-27 14:15:54', '2023-04-27 14:15:54', 'Unknown'),
(992, '185.191.171.42', '59', '1', '0', '2023-04-27 19:06:46', '2023-04-27 19:06:46', 'Unknown'),
(993, '185.191.171.12', '58', '1', '0', '2023-04-27 22:49:29', '2023-04-27 22:49:29', 'Unknown'),
(994, '185.191.171.18', '28', '1', '0', '2023-04-28 02:20:03', '2023-04-28 02:20:03', 'Unknown'),
(995, '185.191.171.24', '53', '1', '0', '2023-04-28 16:35:51', '2023-04-28 16:35:51', 'Unknown'),
(996, '185.191.171.1', '38', '1', '0', '2023-04-29 00:06:50', '2023-04-29 00:06:50', 'Unknown'),
(997, '185.191.171.1', '30', '1', '0', '2023-04-29 00:10:50', '2023-04-29 00:10:50', 'Unknown'),
(998, '5.151.98.125', '73', '16', '0', '2023-04-29 20:12:49', '2023-05-17 05:28:17', 'Unknown'),
(999, '198.46.224.57', '73', '1', '0', '2023-05-01 00:20:29', '2023-05-01 00:20:29', 'Unknown'),
(1000, '107.172.41.199', '73', '1', '0', '2023-05-01 00:20:29', '2023-05-01 00:20:29', 'Unknown'),
(1001, '198.12.99.17', '73', '1', '0', '2023-05-01 00:20:31', '2023-05-01 00:20:31', 'Unknown'),
(1002, '192.227.207.194', '73', '1', '0', '2023-05-01 00:20:42', '2023-05-01 00:20:42', 'Unknown'),
(1003, '198.12.76.164', '73', '1', '0', '2023-05-01 00:21:04', '2023-05-01 00:21:04', 'Unknown'),
(1004, '185.203.7.193', '73', '1', '0', '2023-05-01 00:21:05', '2023-05-01 00:21:05', 'Unknown'),
(1005, '3.236.84.247', '73', '1', '0', '2023-05-01 00:30:17', '2023-05-01 00:30:17', 'Unknown'),
(1006, '185.191.171.5', '70', '1', '0', '2023-05-01 04:05:15', '2023-05-01 04:05:15', 'Unknown'),
(1007, '185.191.171.25', '72', '1', '0', '2023-05-01 08:49:35', '2023-05-01 08:49:35', 'Unknown'),
(1008, '185.191.171.5', '71', '1', '0', '2023-05-01 20:17:21', '2023-05-01 20:17:21', 'Unknown'),
(1009, '185.191.171.26', '73', '1', '0', '2023-05-02 09:51:07', '2023-05-02 09:51:07', 'Unknown'),
(1010, '185.191.171.5', '3', '1', '0', '2023-05-03 01:08:36', '2023-05-03 01:08:36', 'Unknown'),
(1011, '185.191.171.25', '69', '1', '0', '2023-05-03 07:04:51', '2023-05-03 07:04:51', 'Unknown'),
(1012, '25', '73', '1', '2', '2023-05-05 18:08:29', '2023-05-05 18:08:29', 'Customer'),
(1013, '120', '74', '2', '0', '2023-05-07 20:26:37', '2023-05-07 20:30:25', 'Vendor'),
(1014, '22', '74', '5', '14', '2023-05-07 20:31:13', '2023-06-12 04:07:52', 'Customer'),
(1015, '82.132.238.164', '74', '3', '0', '2023-05-07 20:32:20', '2023-05-07 20:38:20', 'Unknown'),
(1016, '37.131.111.52', '74', '2', '0', '2023-05-07 20:34:46', '2023-05-07 20:34:47', 'Unknown'),
(1017, '5.151.98.125', '74', '3', '0', '2023-05-07 21:49:02', '2023-05-16 15:34:08', 'Unknown'),
(1018, '122', '75', '4', '0', '2023-05-08 00:13:19', '2023-05-08 00:21:06', 'Vendor'),
(1019, '22', '75', '14', '14', '2023-05-08 00:22:53', '2023-05-08 02:10:13', 'Customer'),
(1020, '82.132.237.61', '75', '3', '0', '2023-05-08 00:26:53', '2023-05-08 02:25:37', 'Unknown'),
(1021, '88.201.115.115', '75', '1', '0', '2023-05-08 01:35:13', '2023-05-08 01:35:13', 'Unknown'),
(1022, '88.201.6.4', '75', '1', '0', '2023-05-08 03:40:50', '2023-05-08 03:40:50', 'Unknown'),
(1023, '123', '76', '5', '0', '2023-05-08 16:58:09', '2023-05-08 17:04:41', 'Vendor'),
(1024, '22', '76', '8', '16', '2023-05-08 17:05:16', '2023-05-08 17:08:48', 'Customer'),
(1025, '5.151.98.125', '76', '7', '0', '2023-05-08 17:09:04', '2023-05-17 05:28:22', 'Unknown'),
(1026, '104.28.51.13', '76', '1', '0', '2023-05-08 17:10:15', '2023-05-08 17:10:15', 'Unknown'),
(1027, '124', '77', '6', '0', '2023-05-08 18:33:59', '2023-05-08 19:18:10', 'Vendor'),
(1028, '109.161.178.182', '73', '1', '0', '2023-05-08 18:45:39', '2023-05-08 18:45:39', 'Unknown'),
(1029, '126', '73', '1', '0', '2023-05-08 19:02:17', '2023-05-08 19:02:17', 'Vendor'),
(1030, '127', '75', '1', '0', '2023-05-08 19:26:15', '2023-05-08 19:26:15', 'Vendor'),
(1031, '127', '78', '1', '0', '2023-05-08 19:32:36', '2023-05-08 19:32:36', 'Vendor'),
(1032, '22', '77', '7', '18', '2023-05-08 19:35:09', '2023-05-09 00:44:26', 'Customer'),
(1033, '22', '78', '9', '18', '2023-05-08 19:37:00', '2023-05-09 03:41:20', 'Customer'),
(1034, '5.151.98.125', '78', '3', '0', '2023-05-08 19:38:09', '2023-05-08 19:43:03', 'Unknown'),
(1035, '5.151.98.125', '77', '4', '0', '2023-05-08 19:38:25', '2023-05-09 08:15:11', 'Unknown'),
(1036, '46.184.249.7', '78', '2', '0', '2023-05-08 19:47:19', '2023-05-08 19:47:32', 'Unknown'),
(1037, '46.184.249.7', '78', '2', '0', '2023-05-08 19:47:19', '2023-05-08 19:47:32', 'Unknown'),
(1038, '77.69.189.132', '77', '1', '0', '2023-05-08 19:48:10', '2023-05-08 19:48:10', 'Unknown'),
(1039, '77.69.189.132', '78', '1', '0', '2023-05-08 19:48:56', '2023-05-08 19:48:56', 'Unknown'),
(1040, '82.132.238.208', '75', '1', '0', '2023-05-08 19:52:25', '2023-05-08 19:52:25', 'Unknown'),
(1041, '82.132.238.208', '77', '2', '0', '2023-05-08 19:53:38', '2023-05-08 19:57:05', 'Unknown'),
(1042, '109.161.218.118', '78', '2', '0', '2023-05-08 20:07:08', '2023-05-08 23:25:39', 'Unknown'),
(1043, '109.161.218.118', '77', '2', '0', '2023-05-08 20:07:47', '2023-05-08 23:24:48', 'Unknown'),
(1044, '128', '79', '3', '0', '2023-05-08 20:09:10', '2023-05-08 20:09:57', 'Vendor'),
(1045, '22', '79', '6', '18', '2023-05-08 20:10:31', '2023-05-09 01:52:47', 'Customer'),
(1046, '82.132.238.208', '79', '1', '0', '2023-05-08 20:12:20', '2023-05-08 20:12:20', 'Unknown'),
(1047, '37.131.109.251', '79', '5', '0', '2023-05-08 20:14:04', '2023-05-08 21:05:33', 'Unknown'),
(1048, '193.188.123.80', '79', '4', '0', '2023-05-08 20:33:44', '2023-05-08 20:38:34', 'Unknown'),
(1049, '46.184.246.238', '79', '1', '0', '2023-05-08 21:04:02', '2023-05-08 21:04:02', 'Unknown'),
(1050, '129', '80', '1', '0', '2023-05-08 22:32:42', '2023-05-08 22:32:42', 'Vendor'),
(1051, '22', '80', '8', '18', '2023-05-08 22:33:39', '2023-05-09 01:52:43', 'Customer'),
(1052, '5.151.98.125', '80', '4', '0', '2023-05-08 22:35:22', '2023-05-15 04:43:17', 'Unknown'),
(1053, '46.184.201.55', '80', '2', '0', '2023-05-08 22:35:41', '2023-05-08 22:37:29', 'Unknown'),
(1054, '213.204.77.229', '80', '1', '0', '2023-05-08 22:39:26', '2023-05-08 22:39:26', 'Unknown'),
(1055, '37.131.104.123', '80', '1', '0', '2023-05-08 22:42:23', '2023-05-08 22:42:23', 'Unknown'),
(1056, '109.63.56.81', '80', '1', '0', '2023-05-09 00:08:15', '2023-05-09 00:08:15', 'Unknown'),
(1057, '77.69.158.60', '79', '1', '0', '2023-05-09 00:10:22', '2023-05-09 00:10:22', 'Unknown'),
(1058, '130', '81', '9', '0', '2023-05-09 00:54:35', '2023-05-09 01:18:02', 'Vendor'),
(1059, '131', '82', '1', '0', '2023-05-09 01:43:43', '2023-05-09 01:43:43', 'Vendor'),
(1060, '22', '81', '11', '18', '2023-05-09 01:44:25', '2023-05-09 01:57:03', 'Customer'),
(1061, '22', '82', '7', '18', '2023-05-09 01:50:30', '2023-06-12 06:22:04', 'Customer'),
(1062, '193.188.122.55', '81', '1', '0', '2023-05-09 01:50:46', '2023-05-09 01:50:46', 'Unknown'),
(1063, '193.188.122.55', '82', '1', '0', '2023-05-09 01:52:08', '2023-05-09 01:52:08', 'Unknown'),
(1064, '5.151.98.125', '81', '5', '0', '2023-05-09 01:54:34', '2023-05-15 04:53:52', 'Unknown'),
(1065, '46.184.245.198', '81', '2', '0', '2023-05-09 01:54:52', '2023-05-09 01:56:20', 'Unknown'),
(1066, '29', '82', '4', '0', '2023-05-09 01:55:42', '2023-05-09 02:02:45', 'Customer'),
(1067, '159.89.14.61', '82', '1', '0', '2023-05-09 01:57:07', '2023-05-09 01:57:07', 'Unknown'),
(1068, '197.253.242.141', '81', '1', '0', '2023-05-09 01:57:19', '2023-05-09 01:57:19', 'Unknown'),
(1069, '5.151.98.125', '82', '2', '0', '2023-05-09 02:01:47', '2023-05-09 08:17:09', 'Unknown'),
(1070, '88.201.58.233', '82', '1', '0', '2023-05-09 02:20:56', '2023-05-09 02:20:56', 'Unknown'),
(1071, '88.201.50.144', '77', '1', '0', '2023-05-09 03:00:00', '2023-05-09 03:00:00', 'Unknown'),
(1072, '88.201.50.144', '78', '2', '0', '2023-05-09 03:00:17', '2023-05-09 03:00:21', 'Unknown'),
(1073, '5.151.98.125', '79', '1', '0', '2023-05-09 08:15:36', '2023-05-09 08:15:36', 'Unknown'),
(1074, '89.148.42.46', '82', '1', '0', '2023-05-09 17:05:02', '2023-05-09 17:05:02', 'Unknown'),
(1075, '185.212.220.220', '80', '1', '0', '2023-05-09 20:40:41', '2023-05-09 20:40:41', 'Unknown'),
(1076, '193.188.123.158', '81', '1', '0', '2023-05-11 00:17:32', '2023-05-11 00:17:32', 'Unknown'),
(1077, '185.191.171.26', '72', '1', '0', '2023-05-11 09:08:49', '2023-05-11 09:08:49', 'Unknown'),
(1078, '185.191.171.42', '61', '1', '0', '2023-05-11 11:49:06', '2023-05-11 11:49:06', 'Unknown'),
(1079, '185.191.171.14', '70', '1', '0', '2023-05-13 14:51:33', '2023-05-13 14:51:33', 'Unknown'),
(1080, '84.255.185.50', '75', '1', '0', '2023-05-14 16:39:43', '2023-05-14 16:39:43', 'Unknown'),
(1081, '185.191.171.1', '71', '1', '0', '2023-05-14 17:08:53', '2023-05-14 17:08:53', 'Unknown'),
(1082, '132', '83', '5', '0', '2023-05-14 17:52:49', '2023-05-14 18:02:19', 'Vendor'),
(1083, '22', '83', '6', '18', '2023-05-14 17:54:48', '2023-06-12 06:53:25', 'Customer'),
(1084, '5.151.98.125', '83', '6', '0', '2023-05-14 18:00:18', '2023-05-17 18:41:20', 'Unknown'),
(1085, '89.148.54.209', '83', '3', '0', '2023-05-14 18:00:34', '2023-05-14 18:03:03', 'Unknown'),
(1086, '185.191.171.20', '73', '1', '0', '2023-05-14 20:56:43', '2023-05-14 20:56:43', 'Unknown'),
(1087, '133', '83', '1', '0', '2023-05-15 00:00:25', '2023-05-15 00:00:25', 'Vendor'),
(1088, '133', '84', '1', '0', '2023-05-15 00:08:14', '2023-05-15 00:08:14', 'Vendor'),
(1089, '22', '84', '4', '18', '2023-05-15 00:08:58', '2023-05-15 00:10:28', 'Customer'),
(1090, '82.132.237.206', '84', '1', '0', '2023-05-15 00:10:50', '2023-05-15 00:10:50', 'Unknown'),
(1091, '82.132.238.212', '84', '2', '0', '2023-05-15 03:59:24', '2023-05-15 04:00:31', 'Unknown'),
(1092, '82.132.238.212', '83', '1', '0', '2023-05-15 04:00:14', '2023-05-15 04:00:14', 'Unknown'),
(1093, '5.151.98.125', '75', '2', '0', '2023-05-15 04:40:53', '2023-05-15 04:43:00', 'Unknown'),
(1094, '122', '73', '1', '0', '2023-05-15 13:46:58', '2023-05-15 13:46:58', 'Vendor');
INSERT INTO `business_analytics` (`id`, `user_info`, `business_id`, `clicks`, `leads`, `created_at`, `updated_at`, `role`) VALUES
(1095, '185.191.171.3', '69', '1', '0', '2023-05-15 15:31:53', '2023-05-15 15:31:53', 'Unknown'),
(1096, '5.151.98.125', '84', '1', '0', '2023-05-15 23:12:57', '2023-05-15 23:12:57', 'Unknown'),
(1097, '185.191.171.13', '6', '1', '0', '2023-05-16 03:03:32', '2023-05-16 03:03:32', 'Unknown'),
(1098, '185.191.171.17', '62', '1', '0', '2023-05-16 11:48:26', '2023-05-16 11:48:26', 'Unknown'),
(1099, '122', '79', '1', '0', '2023-05-16 15:37:40', '2023-05-16 15:37:40', 'Vendor'),
(1100, '46.184.241.144', '82', '1', '0', '2023-05-16 16:33:37', '2023-05-16 16:33:37', 'Unknown'),
(1101, '193.188.123.127', '84', '4', '0', '2023-05-16 21:14:44', '2023-05-16 21:18:53', 'Unknown'),
(1102, '193.188.123.194', '84', '5', '0', '2023-05-16 21:19:58', '2023-05-17 09:04:33', 'Unknown'),
(1103, '46.184.243.100', '84', '2', '0', '2023-05-16 23:14:38', '2023-05-16 23:15:37', 'Unknown'),
(1104, '82.194.53.224', '73', '1', '0', '2023-05-17 05:31:16', '2023-05-17 05:31:16', 'Unknown'),
(1105, '46.184.243.139', '84', '1', '0', '2023-05-17 14:16:25', '2023-05-17 14:16:25', 'Unknown'),
(1106, '134', '85', '2', '0', '2023-05-17 19:01:50', '2023-05-17 19:02:26', 'Vendor'),
(1107, '22', '85', '5', '18', '2023-05-17 19:05:28', '2023-05-17 19:07:43', 'Customer'),
(1108, '5.151.98.125', '85', '7', '0', '2023-05-17 19:07:41', '2023-05-18 01:25:21', 'Unknown'),
(1109, '193.188.123.127', '85', '4', '0', '2023-05-17 19:53:50', '2023-05-17 19:56:22', 'Unknown'),
(1110, '46.184.245.134', '85', '5', '0', '2023-05-17 19:56:04', '2023-05-17 19:57:35', 'Unknown'),
(1111, '88.201.0.91', '84', '1', '0', '2023-05-17 20:27:00', '2023-05-17 20:27:00', 'Unknown'),
(1112, '135', '86', '3', '0', '2023-05-17 20:30:32', '2023-05-17 20:31:54', 'Vendor'),
(1113, '22', '86', '6', '18', '2023-05-17 20:32:35', '2023-05-17 22:04:04', 'Customer'),
(1114, '5.151.98.125', '86', '1', '0', '2023-05-17 20:34:25', '2023-05-17 20:34:25', 'Unknown'),
(1115, '88.201.0.91', '86', '1', '0', '2023-05-17 20:38:31', '2023-05-17 20:38:31', 'Unknown'),
(1116, '88.201.123.49', '86', '3', '0', '2023-05-17 20:51:43', '2023-05-17 23:43:38', 'Unknown'),
(1117, '109.161.146.15', '86', '1', '0', '2023-05-17 21:21:22', '2023-05-17 21:21:22', 'Unknown'),
(1118, '109.63.56.223', '86', '1', '0', '2023-05-17 21:22:09', '2023-05-17 21:22:09', 'Unknown'),
(1119, '82.132.236.197', '85', '1', '0', '2023-05-17 22:05:02', '2023-05-17 22:05:02', 'Unknown'),
(1120, '84.255.185.37', '86', '2', '0', '2023-05-17 22:52:08', '2023-05-17 22:52:09', 'Unknown'),
(1121, '88.201.43.217', '86', '4', '0', '2023-05-18 05:49:34', '2023-05-18 05:51:42', 'Unknown'),
(1122, '159.89.14.61', '86', '1', '0', '2023-05-18 05:51:21', '2023-05-18 05:51:21', 'Unknown'),
(1123, '109.161.176.185', '85', '1', '0', '2023-05-23 11:27:04', '2023-05-23 11:27:04', 'Unknown'),
(1124, '54.36.39.129', '84', '2', '0', '2023-05-23 12:07:08', '2023-05-23 12:12:20', 'Unknown'),
(1125, '109.161.176.185', '77', '1', '0', '2023-05-23 13:20:25', '2023-05-23 13:20:25', 'Unknown'),
(1126, '109.161.176.185', '74', '1', '0', '2023-05-23 13:21:19', '2023-05-23 13:21:19', 'Unknown'),
(1127, '139.178.72.27', '74', '2', '0', '2023-05-23 13:21:24', '2023-05-23 13:21:43', 'Unknown'),
(1128, '139.178.74.162', '74', '1', '0', '2023-05-23 15:43:59', '2023-05-23 15:43:59', 'Unknown'),
(1129, '109.161.176.132', '74', '1', '0', '2023-05-24 20:23:16', '2023-05-24 20:23:16', 'Unknown'),
(1130, '119', '74', '1', '0', '2023-05-25 13:40:15', '2023-05-25 13:40:15', 'Vendor'),
(1131, '3.135.86.180', '74', '1', '0', '2023-05-28 15:54:02', '2023-05-28 15:54:02', 'Unknown'),
(1132, '109.161.176.132', '73', '3', '0', '2023-05-28 16:54:08', '2023-05-28 16:54:29', 'Unknown');

-- --------------------------------------------------------

--
-- Table structure for table `business_informations`
--

CREATE TABLE `business_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `monday_from` varchar(255) DEFAULT NULL,
  `monday_to` varchar(255) DEFAULT NULL,
  `tuesday_from` varchar(255) DEFAULT NULL,
  `tuesday_to` varchar(255) DEFAULT NULL,
  `wednesday_from` varchar(255) DEFAULT NULL,
  `wednesday_to` varchar(255) DEFAULT NULL,
  `thursday_from` varchar(255) DEFAULT NULL,
  `thursday_to` varchar(255) DEFAULT NULL,
  `friday_from` varchar(255) DEFAULT NULL,
  `friday_to` varchar(255) DEFAULT NULL,
  `saturday_from` varchar(255) DEFAULT NULL,
  `saturday_to` varchar(255) DEFAULT NULL,
  `sunday_from` varchar(255) DEFAULT NULL,
  `sunday_to` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lang` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `fax_no` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `category_icon` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `priority`, `category_icon`, `category_description`, `created_at`, `updated_at`) VALUES
(1, 'Architecture', '1', 'dashicons_car.png', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text .', '2021-09-09 21:12:04', '2021-11-07 15:17:06'),
(2, 'Contractors', '2', 'Groupss.png', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text .', '2021-09-09 21:12:46', '2021-11-07 15:14:27'),
(3, 'Suppliers', '3', 'parcel 1.png', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text .', '2021-09-09 21:13:26', '2021-09-26 23:50:31'),
(4, 'Manpower', '4', 'engineers 1.png', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text .', '2021-09-09 21:14:02', '2021-11-07 15:19:22'),
(8, 'Property Maintenance', '8', 'maintenance 1.png', 'PM', '2021-12-08 20:02:22', '2021-12-08 20:02:22'),
(9, 'Freelancers', '9', 'Groupss.png', 'Freelancers', '2021-12-08 20:03:34', '2021-12-08 20:03:34'),
(10, 'Packers & Movers', '10', 'hotel-supplier 1.png', 'Packers & Movers', '2021-12-08 20:05:26', '2021-12-08 20:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_uses`
--

INSERT INTO `contact_uses` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Rajkumar', 'Rajkumar@gmail.com', 'I need help from admin', 'I trying to contact for page loading', '2021-09-21 03:59:09', '2021-09-21 03:59:09'),
(2, 'Ravikumar', 'ravi@gmail.com', 'I need help from admin', 'I trying to contact for page loading', '2021-09-21 03:59:15', '2021-09-21 03:59:15'),
(3, 'Rhoda Dickerman', 'wa@fastdesigners.com', 'Can we work togetter?', 'Now, i am interested to sell this license and it can be yours if are willing to spend the right money on it.', '2021-12-10 04:18:18', '2021-12-10 04:18:18'),
(4, 'Stasiu Sliva', 'stasiu@sandcleads.com', 'Hello. From S&C Leads.', 'Kind regards,', '2021-12-21 03:18:57', '2021-12-21 03:18:57'),
(5, 'abcd', 'abc@gmail.com', 'Delay in services', 'Make it in time', '2021-12-23 17:47:21', '2021-12-23 17:47:21'),
(6, 'aa', 'aa', 'aa', 'aa', '2021-12-23 18:20:30', '2021-12-23 18:20:30'),
(7, 'faisal', 'haji_13@hotmail.com', 'info', 'is my message being delivered?', '2022-01-21 21:09:57', '2022-01-21 21:09:57'),
(8, 'Connie Costa', 'costa.connie@yahoo.com', 'You have the most incredible website', 'https://www.youtube.com/watch?v=rcpD-y_1yFo&list=PLT7sxXigVU1DPCZxuMKGBMl81zoR4QBld&index=1', '2022-01-22 02:57:08', '2022-01-22 02:57:08'),
(9, 'abcd', 'jinsa@franovia.com', 'Delay in services', 'Make it in time', '2022-01-31 14:36:27', '2022-01-31 14:36:27'),
(10, 'haass', 'abc@gmail.com', 'ss', 'www', '2022-02-21 18:35:42', '2022-02-21 18:35:42'),
(11, 'ss', 'ad@gmail.com', 'test', 'test', '2022-02-22 22:30:42', '2022-02-22 22:30:42'),
(12, 'SA FUNDING SUPPORT TEAM', 'info@safundingnow.com', 'Need Business Funding? Bank Said No? Relax, we got this…', 'funded within 48 hours with absolutely no obligation at all.', '2022-03-05 10:04:55', '2022-03-05 10:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `lname` varchar(255) NOT NULL,
  `area` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `account_status` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_editor` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active_count` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `number`, `profile_image`, `lname`, `area`, `city`, `province`, `country`, `email`, `account_status`, `password`, `is_editor`, `remember_token`, `created_at`, `updated_at`, `active_count`) VALUES
(1, 'Raja', '+198998988970', 'Rectangle 110g.png', 'kumara', 'coimbatorea', 'Tamilnadua', 'Indiaa', 'Indiaa', 'ravi@gmail.com', '1', '$2y$10$cWS5WFpLrD4sYt/dIJWAl./ks6S/ASn2Dvx8rdRslw5ZyIplEhX3W', 0, 'q1QzvSNhIq17vZKsdVdWd87lTbzEerEbFc6VG9pUr8jXIbmuzpSGbEeF6KkA', '2021-09-11 01:27:02', '2021-09-27 23:28:13', '1'),
(2, 'Madhu', '9876789809', NULL, 'Balaji', NULL, NULL, NULL, NULL, 'bmathan777@gmail.com', '1', '$2y$10$BFqhkRwKLGdi7qNZwbZyqewyyez4MtaadUO2j4UVWoKW2Q7hDA1tq', 0, 'GLTYoVniDj723JswGKtSUi1r1oposYvRVd02aw7SqGyi8OMNfZqxhKbbAY7Q', '2021-09-18 09:38:06', '2021-09-21 02:01:06', '0'),
(3, 'Sel', '9360741015', NULL, 'Selva', NULL, NULL, NULL, NULL, 'selselvatocodefo@gmail.com', '1', '$2y$10$n1BMRjKYwVI/JfVAOnKyWeY36Fm5VV/YOJdDxNgok1PJwFjPLmWQO', 0, 'Jl3EWj3qvlhni0qDW4eD1kMANRsdIgniqXZbhIizvxFbtiSdwATkcmRuu1LN', '2021-09-23 10:26:01', '2021-09-23 10:26:01', '1'),
(4, 'Aravind', '07810005847', 'ee.png', 'kumar', 'coimbatore', 'Tiruppur', 'Tamilnadu', 'India', 'aravinf@gmail.com', '1', '$2y$10$M4zgnTeqw0Zq/.b1R1Hw9emNxnATT8ZBIjSQQiyaiSSK/3Vvbgjju', 0, '1ZCkS5p4s7ePBX9N9FzM3emWu2IomqbEgJZgUPvZbK6tCoJwH2P9Agd6XXbP', '2021-10-23 07:13:00', '2021-10-23 07:23:27', '0'),
(6, 'Mathan', '8776879097', NULL, 'raj', NULL, NULL, NULL, NULL, 'mathanraj@gmail.com', '1', '$2y$10$bcPSfUq1mmcqfvNf1nBfOeusy/CWMr3JEceEAyhT/palvTn8hdAEq', 0, 'FzvnI7xYrXBFdW6vBNlXPqtgrxvejMxqFdj3TWne31uFTSc6QrVl89INZHGm', '2021-10-27 03:41:20', '2021-10-27 03:41:20', '0'),
(7, 'Jerry', '3553555', NULL, 'Ken', NULL, NULL, NULL, NULL, 'jerry@gmail.com', '1', '$2y$10$6euv42TtrgLRcDMUmugO.eL7AT6CyOKyhqhJ/Pss1CuzpRhyapWly', 0, NULL, '2021-10-30 20:59:19', '2021-10-30 20:59:19', '0'),
(8, 'Rashid', '676767676', 'download (1).jfif', 'Wal', 'seef', 'seef', 'Bahrain region', 'Bahrain', 'rashid@gmail.com', '1', '$2y$10$LfkF6fW.kcgs10VFdOWBU.B6ow6k4ktdBlYKXcewhSO4WcW9GXDim', 0, 'NGZc6JRjN3o25t2j74CjJEUGJoD5WEo5dI4WOsoi7OnqpmWld78YvjL7wPew', '2021-10-30 21:32:15', '2022-01-30 17:59:32', '0'),
(9, 'ali', '33195060', '767A83A6-3EF0-440C-B37D-4F796E71336C.jpeg', 'haji', 'Q', 'J', 'J', 'J', 'faisal@probuild.bh', '1', '$2y$10$1yfqO3eS3e7kkc/12m6mguVbUvFd9/Xfmv.V/RHL95RwGVaJR25VK', 0, 'N98hLibuSTCagmFDgAW9EJqoHlc2gwRSpTZYjXFZ4rI9EBVwgx76uqqbn4bZ', '2021-11-03 08:36:05', '2023-03-09 18:51:49', '0'),
(10, 'husain', '37303703', NULL, 'ali', NULL, NULL, NULL, NULL, 'haji_11@icloud.com', '1', '$2y$10$94jJcGjWgRrc.O4yRVaAjuWmEaoXNvGJYcS3tec1jlZT/.eV9.Ray', 0, '2Z410gC1guWWtJI6UgSP5zyhWo8Rez6GWpjgyAkLRBR7IQbDEXusBGD8APbJ', '2021-11-20 19:22:40', '2021-11-20 19:22:40', '0'),
(11, 'Probuild Construction', '38383894', NULL, 'Company', 'Saar', 'Kingdom', 'of BAHRAIN', 'BAHRAIN', 'info@probuild.bh', '1', '$2y$10$ZU4MsTR6BYuewpV1vOY5Peo3t0btq2LRAGbWFqnix6KwVKuL5wHtC', 0, 'MRtfngPKwrgAI7xfUzBWhChSiGY5sheamxhlcnS0WiQhm29rNYWI7G409jR6', '2021-11-25 21:11:23', '2022-03-30 23:28:26', '0'),
(12, 'Ali', '123456789', NULL, 'Ali', NULL, NULL, NULL, NULL, 'hajiii@icloud.com', '1', '$2y$10$H5DSzrUBuCTXggy3mUCKoe2zc8kcDvtNBjPHNM5ejqXaL1XmVYsxG', 0, 'j1SjKeWmN2HQxNUiCLTNZhZbVergL92KzgOjbhbRNzL7Jek8LrsuwTAgTfCq', '2021-12-05 15:11:20', '2021-12-05 15:11:20', '0'),
(14, 'haha', '111111111', NULL, 'hha', NULL, NULL, NULL, NULL, 'hahaha@haji.com', '1', '$2y$10$RmAkhXMK0Ubx/MlqdmZMK.ClX.Q0nVWM9gC6yB0OVttOonstgNgZG', 0, 'qvaEtCziKWAnWMqhmiJF3q69LAs47sVWy6sQidJomf4ru4nfFwrVnj4k5p41', '2022-01-29 22:07:57', '2022-01-29 22:07:57', '0'),
(15, 'Anu', '1246777', NULL, 's', 'manama', 'MANAMA, ALSUQAYYAH 328', 'Bahrain region', 'Bahrain', 'anu@gmail.com', '1', '$2y$10$6VkK3bGTUrcNBvEbmf8LE.X.THJy37o.1n3oRyTF.DFrFMe6eVZki', 0, 'v5At0aFpwyjChrY7iEYIxtqsz3uwzWOrVYLVULSISruXPhfOXmZLyGySTDYi', '2022-01-30 18:51:35', '2022-01-31 13:58:16', '0'),
(16, 'hai', '1234567', NULL, 'hai', NULL, NULL, NULL, NULL, 'hai@gmail.com', '1', '$2y$10$ZRGT1Fj/gY9GVoyJkfoVKezmB4.mUbixeiCm7zvwVfvjXtu9ajiee', 0, 'MLzZEjDBFS3RrotV3rX6YdJSbtO7A9nOT5ymHJY2lQTa6vZVaFo9rslUiSAd', '2022-01-30 19:26:55', '2022-01-30 19:26:55', '0'),
(17, 'Hello Hai', '37644444', NULL, 'hai', NULL, NULL, NULL, NULL, 'hello@gmail.com', '1', '$2y$10$RNkImtFcfD5MKAhg15ASNOMpyeTwWwOtAHPsW.l16lgYf1LhTcy9C', 0, 'uI62g5aPJ5bqJOv9yndozQyrVcPXHpxUtJPscVJVMY3JFInEvXJYrqoZw0BC', '2022-01-31 14:18:58', '2022-01-31 14:18:58', '0'),
(18, 'pro', '6733222', NULL, 'a', NULL, NULL, NULL, NULL, 'pro@gmail.com', '1', '$2y$10$8UzS3qb73E8.vA3L1pZRXu96wYYMAHKGtQtGJJaS1KXt8iC1GAT.2', 0, 'BsfEs22ZDblZuKLVBpd4VRR6LgwRzsTP8DdtbJTH3oAjuboC3qJF9Hc2WEOV', '2022-02-02 13:44:02', '2022-02-02 13:44:02', '0'),
(19, 'cherry', '873653', NULL, 'a', 'seef', 'MANAMA, ALSUQAYYAH 328', 'Bahrain region', 'Bahrain', 'cherry@gmail.com', '1', '$2y$10$rzhoUwizJ7sPTwHF18Owa.Fr9afpX6R9ylx0g.jHMsaaA17rK1p.S', 0, 'gK970QuUrUgrAfQyW4WWItGvFy84OpZWZEhwxwXtrPJl3idlXezPpczviE15', '2022-02-21 15:18:49', '2022-02-21 15:19:48', '0'),
(20, 'Faisal', 'Nehehshs', NULL, 'Haji', NULL, NULL, NULL, NULL, 'haji_13@hotmail.com', '1', '$2y$10$NkTX7F/R5nDKfCsOrRNkJeISes54cV2a8Wb1Q4ZujvL5IqID7uRle', 0, 'ytWSWrHV7zKUVCMsS5RHTuuKFsd0hrCN2gqR5cJIurwu5oY7BQbs2rCBrtxK', '2022-02-22 22:29:27', '2022-02-22 22:29:27', '0'),
(21, 'husain', '111222333', NULL, 'ali', NULL, NULL, NULL, NULL, 'haha11@gmail.com', '1', '$2y$10$e/WCL.mEKI5YiWgJE8u6duH/e3kSSh3G5PoGTDxsq2cITvOtur9FK', 0, 'eepaSTIrUuVnrFWayPkdbMSqcc2WHrkVSdL0Bg0q9gAUGp66CZSeqcNvzlsm', '2022-02-22 23:35:48', '2022-02-22 23:35:48', '0'),
(22, 'Default', '331950606', 'EF7E07EC-28ED-45E9-A9AD-ABC3F78DE234.jpeg', 'Customer', 'Saar', 'Saar', 'Saar', 'Bahrain', '13@hotmail.com', '1', '$2y$10$LZqkl81TSKMyQm37Nz9sWeZHJOLkzJ5vROeCG5C4p24jYVWErHVNu', 0, 'ue2ONQropci6n8RZ4wta8ivcNmAy8LHArPAS0sowRREGKtSWim0oOH00eR7f', '2023-02-23 18:48:26', '2023-05-08 19:34:56', '0'),
(23, '1', '33195060', NULL, '2', NULL, NULL, NULL, NULL, '1@hotmail.com', '1', '$2y$10$yn.toJgvB/l.ZeuIH5Lrd.8pZyHe77vUPxX2LUtGbt9f78o5V/6uy', 0, 'D0uGdig7Gzmq1dDSzrLeTeBqs8G1eOBPwxNHMJCHkUMywvPPwcPIE13UfNQu', '2023-02-24 02:53:40', '2023-02-24 02:53:40', '0'),
(24, 'Bsb', 'Dhsjs', NULL, 'Hshs', NULL, NULL, NULL, NULL, 'f13@hotmail.com', '1', '$2y$10$jS2ViHbA0m.kA2kuZM865OCLeO7N7d0Ag4HniUZaMHEXzcmUkF8eO', 0, '7iMYlZ1Qk9NZxbsVYcJdaXeRyuiEERCn02GwgkWA6XT7EmkIjMBe9pfVTpCM', '2023-02-25 21:38:26', '2023-02-25 21:38:26', '0'),
(25, 'F', 'Usjs', NULL, 'G', NULL, NULL, NULL, NULL, '12@hotmail.com', '1', '$2y$10$8xt2Tp9K4KjQqmgqsfjWDOw4KP.W.Jm2/CFoVXWLUkX1GWGgp2JTW', 0, 'MCHxctMStwxtOA92MzXxweyIoELZiobWfW5IF0qUKz26ldq9Nz8Esb0yvYw8', '2023-03-09 07:51:59', '2023-03-09 07:51:59', '0'),
(26, 'J', 'Sjsj', 'BDC12105-C6BE-4424-AAC2-2C4BDED0E3D4.png', 'J', 'Bahrain', 'A', 'N', 'N', '11@hotmail.com', '1', '$2y$10$P2ygzol.5DWIMnwVmc81D.jdTJAqvekRSTs9uE37qdceCrw2/K/Qm', 0, 'X8VeUviioFw42f0fn2q0WhwZ39fezwlgZznyvfg5MCMWiZZcymH8rrqAysfv', '2023-03-09 18:44:37', '2023-03-09 18:45:23', '0'),
(27, 'Dileep', '37303006', NULL, 'KP', NULL, NULL, NULL, NULL, 'dileep@31its.com', '1', '$2y$10$I/sirK.kiaotV2323MaK6uCPBszj29yQMRlMO6KdRHPdH37492Qte', 0, 'zVTq5rxBYK2w9hCAEPDZNBgClZDz0kGHk0DPJHQMUBIpSi21Ys2N30FH3U2p', '2023-03-21 20:00:46', '2023-03-21 20:00:46', '0'),
(28, 'faissal', '33663366', NULL, 'haji', NULL, NULL, NULL, NULL, 'haji111@hotmail.com', '1', '$2y$10$tBY5Ak.o7xRxKk2OaZPssu9Iz7UVfPuqE5ycrgicMPGbTRBS.E9Eu', 0, 'JQAlHo8r20aEOqZ9BX767zWR7D4TTl5M5LoCxVVM01Y6hQnWfMxA2iPpJ6ax', '2023-03-27 00:12:03', '2023-03-27 00:12:03', '0'),
(29, 'Reema', '36660969', NULL, 'Arsalan', NULL, NULL, NULL, NULL, 'reemaarsalan3@gmail.com', '1', '$2y$10$Uba0sxQifNjYAx.gLv3zFO2zwzpediNPmAIMKNJSmtW23TtewDiZi', 0, 'nu2gjSRVayx4t9YmLZJ9TV0VXMSZ5AGl4rERLHmrcXcROXt6VZQr2LX5KFjw', '2023-05-09 01:54:19', '2023-05-09 01:54:19', '0'),
(30, 'neethu', '8137853228', NULL, 'neethu', NULL, NULL, NULL, NULL, 'neethubino555@gmail.com', '1', '$2y$10$6.GFkmuOioIzAlu2Nq5eVOVtmnmDkK.5JCdWdVq5rRkvil6NR0e76', 0, 'kf11xo37ue7JorlPU5hRvKGeFtLUkmReeS9Imk31syJUnB5nfa9ng730kDsW', '2023-06-21 01:04:47', '2023-06-21 01:04:47', '0');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(100) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `title_description`, `created_at`, `updated_at`) VALUES
(1, 'FAQ here', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-09-11 00:21:34', '2021-09-11 00:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `galllery_images`
--

CREATE TABLE `galllery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `gallery_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galllery_images`
--

INSERT INTO `galllery_images` (`id`, `business_id`, `gallery_image`, `created_at`, `updated_at`) VALUES
(5, 3, 'listing-02.jpg', '2021-09-09 21:54:17', '2021-09-09 21:54:17'),
(6, 3, 'listing-05.jpg', '2021-09-09 21:54:30', '2021-09-09 21:54:30'),
(7, 4, 'carpenter3.jpg', '2021-09-09 21:57:03', '2021-09-09 21:57:03'),
(8, 4, 'cons.jfif', '2021-09-09 21:57:16', '2021-09-09 21:57:16'),
(9, 5, 'listing-02.jpg', '2021-09-09 21:59:53', '2021-09-09 21:59:53'),
(10, 6, 'listing-06.jpg', '2021-09-09 22:03:21', '2021-09-09 22:03:21'),
(46, 28, 'ZF217z2.jpg', NULL, NULL),
(47, 29, 'gdgd.png', NULL, NULL),
(48, 30, 'concepts-of-journalism-1-320.jpg', NULL, NULL),
(49, 31, 'gdgd.png', NULL, NULL),
(54, 36, 'download (2).jfif', NULL, NULL),
(56, 38, 'download (2).jfif', NULL, NULL),
(58, 40, '1645444072_download (1).jfif', NULL, '2022-02-21 18:47:52'),
(59, 41, '1678372507_5B4D5B51-87F5-4E9D-9576-BD249AA2CA06.jpeg', NULL, '2023-03-09 21:35:07'),
(69, 51, '1C06E0E9-7343-4595-A967-84708508B809.jpeg', NULL, NULL),
(71, 53, '1678377610_079D32C2-BB11-49F4-A5DB-02946ED7DA35.jpeg', NULL, '2023-03-09 23:00:10'),
(72, 53, '497547A4-44E3-4467-8074-243E8EF7FF80.jpeg', NULL, NULL),
(75, 56, '1678046833_20210821_103725000_iOS 9.png', NULL, '2023-03-06 03:07:13'),
(76, 56, '1678046849_20210821_103725000_iOS 5.png', NULL, '2023-03-06 03:07:29'),
(77, 57, '1678048123_Unknown.jpeg', NULL, '2023-03-06 03:28:43'),
(78, 58, '1678323002_20935D27-B373-43D4-B1C0-4B85AC7F0CA3.jpeg', NULL, '2023-03-09 07:50:02'),
(79, 59, '1678371671_B0C60914-907E-460D-AC60-94FCD7CF2FB6.webp', NULL, '2023-03-09 21:21:11'),
(81, 61, '7F87D6BF-9F7A-4845-8E7D-1C1110D8F5BA.jpeg', NULL, NULL),
(82, 62, 'B9B2EF7B-331E-4976-BA3D-E98C67046600.jpeg', NULL, NULL),
(83, 63, 'The Amazing Array Of Modern Curtain Designs  1600x900.jpg', NULL, NULL),
(84, 64, '1678447855_D8E0E2A7-22AF-4B12-BFDB-71117D2A011F.jpeg', NULL, '2023-03-10 18:30:55'),
(85, 65, 'f577c11d8dad6ef8131a63ddc5cd3835.jpg', NULL, NULL),
(86, 66, 'maxresdefault.jpg', NULL, NULL),
(87, 67, '2158EEC1-1EB1-43CB-B620-05A3066DCC5C.jpeg', NULL, NULL),
(89, 69, '914B14FE-AF93-48F9-B95E-62706D694599.jpeg', NULL, NULL),
(90, 70, '33DA0688-6CBE-4384-ABDB-4FC220EEB36D.jpeg', NULL, NULL),
(91, 71, '1680537041_6E739ECA-D5FC-42EB-AD8E-B537DEA1B68C.jpeg', NULL, '2023-04-03 22:50:41'),
(92, 72, 'BAB3AEF9-AF70-474E-89EA-C8B177DEEE45.jpeg', NULL, NULL),
(93, 73, '1682007971_047FB4CE-E776-4C90-A352-68D41968C27E.jpeg', NULL, '2023-04-20 23:26:11'),
(94, 74, '51BC2409-D869-4245-8BF2-32A05969D38F.jpeg', NULL, NULL),
(95, 75, '56013F61-B594-462D-9E10-D82549E45F68.jpeg', NULL, NULL),
(96, 76, '1683540049_ED785087-D647-4AD6-8F94-4ED654A707D8.jpeg', NULL, '2023-05-08 17:00:49'),
(97, 77, '1683548285_D57BBBC0-8A8E-46A0-AC64-187271E97386.jpeg', NULL, '2023-05-08 19:18:05'),
(98, 78, '1EB00B28-BECE-4E18-8DF8-3D04A0368033.jpeg', NULL, NULL),
(99, 79, '8AC1BB3A-A810-4944-930B-6777B9134317.jpeg', NULL, NULL),
(100, 80, 'C004D5FA-0719-44FE-B451-F62666B2DC22.jpeg', NULL, NULL),
(101, 81, '1683569676_D836CD8B-34FA-43EA-89DC-C0E62116B4BC.jpeg', NULL, '2023-05-09 01:14:36'),
(102, 82, '9FF126AD-8C32-4449-AF25-95A393F7EB43.jpeg', NULL, NULL),
(103, 83, '1684061625_4573CA10-244C-4BE3-B5A1-0D7AB01E25EE.jpeg', NULL, '2023-05-14 17:53:45'),
(104, 84, '531013FE-F642-4BB7-91E1-D3EF6C5E1EDA.jpeg', NULL, NULL),
(105, 85, '1684324943_812D6BBB-DFEC-43E6-90DD-AA58CF0004F6.jpeg', NULL, '2023-05-17 19:02:23'),
(106, 85, 'E7166916-7E6B-425A-B736-7396E94B0113.jpeg', NULL, NULL),
(107, 86, '1684330311_6D56A56A-6768-4C53-8EB9-819252A2B481.jpeg', NULL, '2023-05-17 20:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `home_categories`
--

CREATE TABLE `home_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `centered_image` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_categories`
--

INSERT INTO `home_categories` (`id`, `background_image`, `centered_image`, `sub_category`, `place`, `created_at`, `updated_at`) VALUES
(1, 'DFS.png', 'logo.png', '2', '1', '2021-10-27 07:22:15', '2021-10-28 01:01:40'),
(2, 'ee.png', 'logo.png', '2', '2', '2021-10-27 07:23:27', '2021-10-28 01:15:16'),
(3, 'SqYmTDQYMjod.png', 'logo.png', '5', '3', '2021-10-28 00:36:05', '2021-10-28 01:02:42'),
(4, 'aad.png', 'logo.png', '3', '4', '2021-10-28 00:37:05', '2021-10-28 00:37:05'),
(5, 'hdbd.png', 'logo.png', '6', '5', '2021-10-28 00:37:45', '2021-10-28 01:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_16_134352_create_vendors_table', 1),
(5, '2021_08_16_134511_create_customers_table', 1),
(6, '2021_08_18_163219_create_tendors_table', 1),
(7, '2021_08_20_055538_create_packages_table', 1),
(8, '2021_08_21_072541_create_businesses_table', 1),
(9, '2021_08_21_083711_create_products_table', 1),
(10, '2021_08_26_055637_create_package_vendor_table', 1),
(11, '2021_08_27_055920_create_galllery_images_table', 1),
(12, '2021_09_06_101321_create_bg_images_table', 1),
(13, '2021_09_06_104651_create_add_images_table', 1),
(14, '2021_09_06_111756_create_add_image_nexts_table', 1),
(15, '2021_09_06_140331_create_categories_table', 1),
(16, '2021_09_06_151626_create_sub_categories_table', 1),
(17, '2021_09_08_033725_create_business_informations_table', 1),
(18, '2021_09_08_060752_add_instagram_to_business_information_table', 1),
(19, '2021_09_08_113101_add_category_to_businesses_table', 1),
(20, '2021_09_09_071958_create_about_uses_table', 1),
(21, '2021_09_09_072051_create_faqs_table', 1),
(22, '2021_09_09_072135_create_privacy_policies_table', 1),
(23, '2021_09_09_072203_create_terms_of_policies_table', 1),
(24, '2021_09_09_104133_add_document_to_businesses_table', 1),
(25, '2021_09_09_113716_add_column_to_vendors_table', 1),
(26, '2021_09_09_114201_add_item_to_vendors_table', 1),
(27, '2021_09_09_145225_add_profile_to_users_table', 1),
(28, '2021_09_11_115112_add_recommended_status_to_businesses_table', 2),
(29, '2021_09_13_125614_add_business_image_to_businesses_table', 3),
(30, '2021_09_13_130959_add_product_image_to_products_table', 4),
(31, '2021_09_14_034248_create_reviews_table', 5),
(32, '2021_09_14_053605_add_cu_id_to_reviews_table', 6),
(33, '2021_09_14_155900_add_status_to_reviews_table', 7),
(34, '2021_09_16_054925_create_tendor_requests_table', 8),
(35, '2021_09_17_042307_create_tendor_actions_table', 9),
(36, '2021_09_17_053053_create_tendor_req_actions_table', 10),
(37, '2021_09_17_140653_add_more_package__to_packages_table', 11),
(38, '2021_09_18_145559_create_request_calls_table', 12),
(39, '2021_09_20_102644_add_more_column_removed__to_tendor_req_actionss_table', 13),
(40, '2021_09_20_115142_create_request_call_actions_table', 14),
(41, '2021_09_20_161200_create_visitors_table', 15),
(42, '2021_09_20_175501_create_analytics_table', 16),
(43, '2021_09_20_183106_add_more_active_count__to_customers_table', 17),
(44, '2021_09_20_183449_add_more_active_view__to_customers_table', 18),
(45, '2021_09_21_072549_add_more_active_view__to_vendors_table', 19),
(46, '2021_09_21_091239_create_contact_uses_table', 20),
(47, '2021_09_27_062319_create_reviews_table', 21),
(48, '2021_10_09_071012_add_logo_to_businesses_table', 22),
(49, '2021_10_11_055831_add_rating_detail_to_businesses_table', 23),
(50, '2021_10_22_045623_add_featured_to_businesses_table', 24),
(51, '2021_10_27_115202_create_home_categories_table', 25),
(52, '2021_11_15_110148_create_business_analytics_table', 26),
(53, '2021_11_16_111049_add_role_to_business_analytics_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `bussiness_listing` varchar(255) NOT NULL,
  `product_listing` varchar(255) NOT NULL,
  `gallery_image` varchar(255) NOT NULL,
  `company_profile` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `social_media` varchar(255) NOT NULL,
  `priority_listing` varchar(255) NOT NULL,
  `probuild_verify` varchar(255) NOT NULL,
  `tendor_board` varchar(255) NOT NULL,
  `validity` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `package_type` varchar(255) NOT NULL,
  `gross_type` varchar(255) NOT NULL,
  `gross_period` varchar(255) NOT NULL,
  `selling_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `bussiness_listing`, `product_listing`, `gallery_image`, `company_profile`, `contact`, `location`, `social_media`, `priority_listing`, `probuild_verify`, `tendor_board`, `validity`, `price`, `created_at`, `updated_at`, `package_type`, `gross_type`, `gross_period`, `selling_price`) VALUES
(1, 'Trail', '1', '1', '1', '1', '0', '1', '0', '0', '0', '0', '1', '0', '2021-09-09 21:32:26', '2021-09-18 05:14:57', 'M', '0', '0', '0'),
(2, 'Essential', '2', '2', '2', '1', '0', '1', '0', '0', '0', '0', '3', '0', '2021-09-09 21:33:06', '2021-09-18 05:15:29', 'M', 'D', '6', '3.990'),
(3, 'Standard', '5', '5', '0', '1', '0', '1', '1', '0', '0', '1', '3', '9.990', '2021-09-09 21:34:11', '2021-09-18 05:22:05', 'M', 'D', '0', '4.990'),
(4, 'Premium', '10', '10', '10', '1', '1', '1', '1', '1', '1', '1', '3', '14.990', '2021-09-09 21:34:56', '2021-09-18 05:22:29', 'M', '0', '0', '7.990'),
(5, 'Essential', '1', '4', '4', '1', '0', '0', '0', '0', '0', '0', '1', '0', '2021-09-17 23:23:34', '2021-09-18 05:17:43', 'Y', '0', '0', '29.990'),
(6, 'Standard', '3', '6', '6', '1', '1', '1', '0', '0', '0', '1', '1', '59.990', '2021-09-17 23:25:04', '2021-09-18 05:17:15', 'Y', 'M', '1', '29.990'),
(7, 'Premium', '6', '10', '10', '1', '1', '1', '1', '1', 'Acitve', '1', '1', '99.990', '2021-09-17 23:26:09', '2021-09-18 05:19:51', 'Y', 'M', '3', '49.990');

-- --------------------------------------------------------

--
-- Table structure for table `package_vendor`
--

CREATE TABLE `package_vendor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` varchar(255) NOT NULL,
  `starts_date` date NOT NULL,
  `ends_date` date NOT NULL,
  `Approval` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_vendor`
--

INSERT INTO `package_vendor` (`id`, `vendor_id`, `package_id`, `starts_date`, `ends_date`, `Approval`, `created_at`, `updated_at`) VALUES
(1, 1, '4', '2021-09-10', '2022-04-01', '0', '2021-09-10 03:05:42', '2022-02-19 09:59:48'),
(2, 2, '4', '2021-09-10', '2022-04-01', '1', '2021-09-10 03:06:21', '2022-02-19 10:00:21'),
(3, 3, '4', '2021-09-10', '2022-04-01', '1', '2021-09-10 03:06:54', '2022-02-19 10:00:21'),
(4, 4, '4', '2021-09-10', '2022-04-01', '1', '2021-09-10 03:07:38', '2022-02-19 10:00:21'),
(5, 5, '4', '2021-09-10', '2022-04-01', '1', '2021-09-10 03:08:16', '2022-02-19 10:00:21'),
(7, 1, '6', '2021-09-18', '2022-04-01', '1', '2021-09-18 06:22:14', '2022-02-19 10:00:21'),
(13, 42, '1', '2021-10-30', '2022-04-01', '1', '2021-10-30 21:08:37', '2022-02-19 10:00:21'),
(14, 43, '1', '2021-10-30', '2022-04-01', '1', '2021-10-30 21:09:34', '2022-02-19 10:00:21'),
(15, 44, '1', '2021-10-30', '2022-04-01', '1', '2021-10-30 21:14:44', '2022-02-19 10:00:21'),
(16, 45, '1', '2021-11-01', '2022-04-01', '1', '2021-11-01 11:35:39', '2022-02-19 10:00:21'),
(17, 46, '1', '2021-11-08', '2022-04-01', '0', '2021-11-08 12:53:38', '2022-02-19 10:00:21'),
(18, 47, '1', '2021-11-09', '2022-04-01', '1', '2021-11-09 21:15:53', '2022-02-19 10:00:21'),
(19, 48, '1', '2021-11-25', '2022-04-01', '1', '2021-11-25 21:10:23', '2022-02-19 10:00:21'),
(20, 46, '2', '2021-11-25', '2022-04-01', '0', '2021-11-25 14:19:41', '2022-02-19 10:00:21'),
(21, 46, '3', '2021-11-25', '2022-04-01', '0', '2021-11-25 14:20:06', '2022-02-19 10:00:21'),
(22, 46, '2', '2021-11-25', '2022-04-01', '0', '2021-11-25 14:20:19', '2022-02-19 10:00:21'),
(23, 46, '2', '2021-11-25', '2022-04-01', '0', '2021-11-25 14:20:29', '2022-02-19 10:00:21'),
(24, 49, '1', '2021-11-27', '2022-04-01', '1', '2021-11-27 23:26:48', '2022-02-19 10:00:21'),
(25, 50, '1', '2021-11-27', '2022-04-01', '1', '2021-11-27 23:27:52', '2022-02-19 10:00:21'),
(26, 51, '1', '2021-11-27', '2022-04-01', '1', '2021-11-27 23:28:50', '2022-02-19 10:00:21'),
(27, 52, '1', '2021-11-30', '2022-04-01', '1', '2021-11-30 16:40:12', '2022-02-19 10:00:21'),
(28, 53, '1', '2021-12-05', '2022-04-01', '1', '2021-12-05 15:09:39', '2022-02-19 10:00:21'),
(29, 54, '1', '2021-12-08', '2022-04-01', '1', '2021-12-08 16:09:16', '2022-02-19 10:00:21'),
(30, 55, '1', '2021-12-28', '2022-04-01', '1', '2021-12-28 07:46:56', '2022-02-19 10:00:21'),
(31, 56, '1', '2021-12-28', '2022-04-01', '1', '2021-12-28 07:48:53', '2022-02-19 10:00:21'),
(32, 57, '1', '2022-01-12', '2022-04-01', '1', '2022-01-12 19:54:26', '2022-02-19 10:00:21'),
(33, 58, '1', '2022-01-13', '2022-04-01', '1', '2022-01-13 21:58:23', '2022-02-19 10:00:21'),
(34, 59, '1', '2022-01-20', '2022-04-01', '1', '2022-01-20 12:33:26', '2022-02-19 10:00:21'),
(35, 60, '1', '2022-01-29', '2022-04-01', '1', '2022-01-29 22:46:55', '2022-02-19 10:00:21'),
(36, 61, '1', '2022-01-29', '2022-04-01', '1', '2022-01-29 22:53:20', '2022-02-19 10:00:21'),
(37, 62, '1', '2022-01-30', '2022-04-01', '1', '2022-01-30 16:03:13', '2022-02-19 10:00:21'),
(38, 63, '1', '2022-01-30', '2022-04-01', '1', '2022-01-30 16:04:10', '2022-02-19 10:00:21'),
(39, 64, '1', '2022-01-30', '2022-04-01', '1', '2022-01-30 18:48:17', '2022-02-19 10:00:21'),
(40, 65, '1', '2022-01-30', '2022-04-01', '1', '2022-01-30 18:53:35', '2022-02-19 10:00:21'),
(41, 66, '1', '2022-01-30', '2022-04-01', '1', '2022-01-30 19:44:45', '2022-02-19 10:00:21'),
(42, 67, '1', '2022-01-31', '2022-04-01', '1', '2022-01-31 16:53:13', '2022-02-19 10:00:21'),
(43, 68, '1', '2022-01-31', '2022-04-01', '1', '2022-01-31 19:16:27', '2022-02-19 10:00:21'),
(44, 69, '1', '2022-01-31', '2022-04-01', '1', '2022-01-31 19:17:38', '2022-02-19 10:00:21'),
(45, 70, '1', '2022-01-31', '2022-04-01', '1', '2022-01-31 19:18:40', '2022-02-19 10:00:21'),
(46, 71, '1', '2022-02-02', '2022-04-01', '1', '2022-02-02 15:19:29', '2022-02-19 10:00:21'),
(47, 72, '1', '2022-02-09', '2022-04-01', '1', '2022-02-09 22:38:01', '2022-02-19 10:00:21'),
(48, 73, '1', '2022-02-19', '2022-03-19', '1', '2022-02-19 21:34:31', '2022-02-19 21:34:31'),
(49, 74, '1', '2022-02-21', '2022-03-21', '1', '2022-02-21 14:41:17', '2022-02-21 14:41:17'),
(50, 75, '1', '2022-02-21', '2022-03-21', '1', '2022-02-21 18:26:00', '2022-02-21 18:26:00'),
(51, 76, '1', '2022-02-22', '2022-03-22', '1', '2022-02-22 21:59:11', '2022-02-22 21:59:11'),
(52, 77, '1', '2022-02-22', '2022-03-22', '1', '2022-02-22 23:07:08', '2022-02-22 23:07:08'),
(53, 78, '1', '2022-03-02', '2022-04-02', '1', '2022-03-02 17:41:58', '2022-03-02 17:41:58'),
(54, 79, '1', '2022-03-29', '2022-04-29', '1', '2022-03-29 21:02:21', '2022-03-29 21:02:21'),
(55, 80, '1', '2022-03-29', '2022-04-29', '1', '2022-03-29 21:03:40', '2022-03-29 21:03:40'),
(56, 81, '1', '2023-02-22', '2023-03-22', '1', '2023-02-22 22:43:23', '2023-02-22 22:43:23'),
(57, 82, '1', '2023-02-23', '2023-03-23', '1', '2023-02-23 18:15:26', '2023-02-23 18:15:26'),
(58, 83, '1', '2023-02-23', '2023-03-23', '1', '2023-02-23 18:23:44', '2023-02-23 18:23:44'),
(59, 84, '1', '2023-02-23', '2023-03-23', '1', '2023-02-23 18:33:01', '2023-02-23 18:33:01'),
(60, 85, '1', '2023-02-23', '2023-03-23', '1', '2023-02-24 02:06:31', '2023-02-24 02:06:31'),
(61, 86, '1', '2023-02-23', '2023-03-23', '1', '2023-02-24 02:11:51', '2023-02-24 02:11:51'),
(62, 87, '1', '2023-02-24', '2023-03-24', '1', '2023-02-24 20:59:36', '2023-02-24 20:59:36'),
(63, 88, '1', '2023-02-24', '2023-03-24', '1', '2023-02-25 01:44:05', '2023-02-25 01:44:05'),
(64, 89, '1', '2023-02-24', '2023-03-24', '1', '2023-02-25 05:40:08', '2023-02-25 05:40:08'),
(65, 90, '1', '2023-02-24', '2023-03-24', '1', '2023-02-25 05:56:14', '2023-02-25 05:56:14'),
(66, 91, '1', '2023-02-24', '2023-03-24', '1', '2023-02-25 06:07:44', '2023-02-25 06:07:44'),
(67, 92, '1', '2023-02-25', '2023-03-25', '1', '2023-02-25 21:32:44', '2023-02-25 21:32:44'),
(68, 93, '1', '2023-02-25', '2023-03-25', '1', '2023-02-25 21:35:51', '2023-02-25 21:35:51'),
(69, 94, '1', '2023-03-03', '2023-04-03', '1', '2023-03-03 07:58:10', '2023-03-03 07:58:10'),
(70, 95, '1', '2023-03-03', '2023-04-03', '1', '2023-03-03 10:23:48', '2023-03-03 10:23:48'),
(71, 96, '1', '2023-03-03', '2023-04-03', '1', '2023-03-03 10:24:29', '2023-03-03 10:24:29'),
(72, 97, '1', '2023-03-03', '2023-04-03', '1', '2023-03-03 10:25:25', '2023-03-03 10:25:25'),
(73, 98, '1', '2023-03-03', '2023-04-03', '1', '2023-03-03 17:21:34', '2023-03-03 17:21:34'),
(74, 99, '1', '2023-03-03', '2023-04-03', '1', '2023-03-03 21:07:34', '2023-03-03 21:07:34'),
(75, 100, '1', '2023-03-03', '2023-04-03', '1', '2023-03-04 01:21:32', '2023-03-04 01:21:32'),
(76, 101, '1', '2023-03-04', '2023-04-04', '1', '2023-03-04 13:07:28', '2023-03-04 13:07:28'),
(77, 102, '1', '2023-03-04', '2023-04-04', '1', '2023-03-04 20:18:51', '2023-03-04 20:18:51'),
(78, 103, '1', '2023-03-08', '2023-04-08', '1', '2023-03-08 19:09:50', '2023-03-08 19:09:50'),
(79, 104, '1', '2023-03-09', '2023-04-09', '1', '2023-03-09 07:32:41', '2023-03-09 07:32:41'),
(80, 105, '1', '2023-03-09', '2023-04-09', '1', '2023-03-09 18:28:44', '2023-03-09 18:28:44'),
(81, 106, '1', '2023-03-09', '2023-04-09', '1', '2023-03-09 18:29:40', '2023-03-09 18:29:40'),
(82, 107, '1', '2023-03-09', '2023-04-09', '1', '2023-03-09 19:15:11', '2023-03-09 19:15:11'),
(83, 108, '1', '2023-03-09', '2023-04-09', '1', '2023-03-10 03:04:08', '2023-03-10 03:04:08'),
(84, 109, '1', '2023-03-09', '2023-04-09', '1', '2023-03-10 05:15:37', '2023-03-10 05:15:37'),
(85, 110, '1', '2023-03-11', '2023-04-11', '1', '2023-03-11 19:15:29', '2023-03-11 19:15:29'),
(86, 111, '1', '2023-03-14', '2023-04-14', '1', '2023-03-14 23:44:17', '2023-03-14 23:44:17'),
(87, 112, '1', '2023-03-21', '2023-04-21', '1', '2023-03-21 19:55:06', '2023-03-21 19:55:06'),
(88, 113, '1', '2023-03-26', '2023-04-26', '1', '2023-03-26 23:50:53', '2023-03-26 23:50:53'),
(89, 114, '1', '2023-03-27', '2023-04-27', '1', '2023-03-27 07:00:38', '2023-03-27 07:00:38'),
(90, 115, '1', '2023-04-02', '2023-05-02', '1', '2023-04-02 21:24:00', '2023-04-02 21:24:00'),
(91, 116, '1', '2023-04-03', '2023-05-03', '1', '2023-04-03 19:24:15', '2023-04-03 19:24:15'),
(92, 117, '1', '2023-04-03', '2023-05-03', '1', '2023-04-03 22:36:33', '2023-04-03 22:36:33'),
(93, 118, '1', '2023-04-04', '2023-05-04', '1', '2023-04-04 18:44:26', '2023-04-04 18:44:26'),
(94, 119, '7', '2023-04-20', '2023-08-31', '1', '2023-04-20 22:28:11', '2023-05-25 09:24:28'),
(95, 120, '1', '2023-05-07', '2023-06-07', '1', '2023-05-07 20:18:29', '2023-05-07 20:18:29'),
(96, 121, '1', '2023-05-07', '2023-06-07', '1', '2023-05-07 23:57:21', '2023-05-07 23:57:21'),
(97, 122, '1', '2023-05-07', '2023-06-07', '1', '2023-05-07 23:59:02', '2023-05-07 23:59:02'),
(98, 123, '1', '2023-05-08', '2023-06-08', '1', '2023-05-08 16:38:07', '2023-05-08 16:38:07'),
(99, 124, '1', '2023-05-08', '2023-06-08', '1', '2023-05-08 18:19:37', '2023-05-08 18:19:37'),
(100, 125, '1', '2023-05-08', '2023-06-08', '1', '2023-05-08 18:55:31', '2023-05-08 18:55:31'),
(101, 126, '1', '2023-05-08', '2023-06-08', '1', '2023-05-08 19:00:36', '2023-05-08 19:00:36'),
(102, 127, '1', '2023-05-08', '2023-06-08', '1', '2023-05-08 19:21:14', '2023-05-08 19:21:14'),
(103, 128, '1', '2023-05-08', '2023-06-08', '1', '2023-05-08 20:02:20', '2023-05-08 20:02:20'),
(104, 129, '1', '2023-05-08', '2023-06-08', '1', '2023-05-08 22:10:11', '2023-05-08 22:10:11'),
(105, 130, '1', '2023-05-08', '2023-06-08', '1', '2023-05-09 00:45:45', '2023-05-09 00:45:45'),
(106, 131, '1', '2023-05-08', '2023-06-08', '1', '2023-05-09 01:26:13', '2023-05-09 01:26:13'),
(107, 132, '1', '2023-05-14', '2023-06-14', '1', '2023-05-14 17:38:58', '2023-05-14 17:38:58'),
(108, 133, '1', '2023-05-14', '2023-06-14', '1', '2023-05-14 23:49:59', '2023-05-14 23:49:59'),
(109, 134, '1', '2023-05-17', '2023-06-17', '1', '2023-05-17 18:46:01', '2023-05-17 18:46:01'),
(110, 135, '1', '2023-05-17', '2023-06-17', '1', '2023-05-17 20:23:08', '2023-05-17 20:23:08'),
(111, 136, '1', '2023-05-17', '2023-06-17', '1', '2023-05-17 20:53:41', '2023-05-17 20:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ravi@gmail.com', '62oWF8NQUt15J9n9KP2bE3TPuzJqZ6StC5ei9YQmrKWDTdZ9ZK3LEzuigyqcjNYz', '2021-10-04 03:52:34'),
('jinsa@franovia.com', 'd3fl15dxL5wRCWp0S9P8w0ZgTYaJediywnazJ76tGpfXesPVzvsi5Y9pL7GDVZoD', '2022-01-31 13:43:27'),
('anu@gmail.com', 'sRMNXLWIFFNHx4CrAkmwovBQjPXocrY3SX1iOaOXtvuYN07UiXsITab5H6bKMkc6', '2022-01-31 13:44:08'),
('hello@gmail.com', 'xbQxIX2BKEFsRNFY681LhIMeY5snWaZOZWXZO44p3izrKnfTVNC3SHsfvrOMD6Nk', '2022-02-21 18:34:21'),
('hello@gmail.com', 'bzO8oNuD0Ueruf6ML8B4OqpjljKfSLbWiEFBQUn2EVF1uowuFwUBKi68x49Rm58W', '2022-02-21 18:34:42'),
('haji_13@hotmail.com', '3ylxDpkQJmJHceRCyQbNA7vFKiTHcb9Nl6zyVhnFnKoo5HJZmdyGIOUs7Xw1A7Ki', '2023-03-03 09:41:51'),
('haji_13@hotmail.com', 'OXx8FmeXwi1zF3ZuJSlENoPPyQk31dBzO5GbNxvWu6cwXDnCbTNdizlZrixteoeX', '2023-03-10 02:57:28'),
('haji_13@hotmail.com', 'I0wVdEGMBFGrY2JBVCSaKuVQrE4r90ji1edsNAd218Sp6A1ZtnstFBoovkpA1yDf', '2023-03-10 02:57:37'),
('13@hotmail.com', 'Yk2DeSUkeb2cC1izWPKZTjGqGF96xDJhBXCwtqzgCMTNmULWio8wDLCazErXAfnl', '2023-06-21 00:47:30'),
('13@hotmail.com', 'pFXO7fUAA7F5vmgmYi2CLrdPGI5CzBRNWzRaXDNyKJMkVYcaW5pcgSnDhu6cNXSg', '2023-06-21 00:48:23'),
('neethubino555@gmail.com', 'wLMCmFnCr3eiNaSjekLyDiVM7F7EaLKdVRlNT4MC5SIJNGI7jEi9RmZLpDAHgWqb', '2023-06-21 01:05:33'),
('neethubino555@gmail.com', 'C50oGgLK6gYoFyzUIQKm6hCihEG6TKiInrHOxFqgHe9kBPbchrtCrJ8jSNpZJWAT', '2023-06-21 01:07:12'),
('neethubino555@gmail.com', 'G8LdKLa51yBvo82SIVM8GlXrUp6h4RF86jYftSv6lYFAXNb1FcO5wZwSSYLUo9aH', '2023-06-21 01:07:36'),
('neethubino555@gmail.com', '8NMh9NBCqTNUZubazBJtI4mI7L8eRWW7qq8VWGsXNffHb6eeS38sjCKMfAByqulk', '2023-06-21 01:08:08'),
('neethubino555@gmail.com', 'xvlBeeBZAJneDEg2Biwm4Kd7E0CJrqYc8SZC6isXDadFOg5e1GtViDRoYUM2kcC4', '2023-06-21 01:08:17'),
('neethubino555@gmail.com', 'kkKJ1WfU5BbPSRjxPlHMSc8dc5A33DR8IrHXozSTQptdGmC5iHBzgu07mPqBXwQw', '2023-06-21 01:09:49'),
('neethubino555@gmail.com', 'oFwGCeFtFqr2FGtVO29NUmZO6cmpCab0u9VwvuFfG1hLdzbTjMse5wyBnHd0DsLj', '2023-06-21 01:40:06'),
('neethubino555@gmail.com', 'fXLFesDccm3lgAuq2iTuisGMFjE8hSwCItVI47foVV1qHle4NeLB6Kz07BjQJ8V2', '2023-06-21 01:41:55'),
('neethubino555@gmail.com', 'j5aNAenQn4sF5eGcKf6xxsOgbMEfFmVhlhQAKjwfPlqilN2h6doaybP0e2u3P2Is', '2023-06-21 01:43:29'),
('neethubino555@gmail.com', 'SKrG6F9eowyPkimpg1JoMpcL74RWcSb52i5NAiqHwcrmauhunHxzSDbQ3uyHFVZh', '2023-06-21 01:52:58'),
('neethubino555@gmail.com', 'GPHsHy5xvqmZ5mzmZD7DpV7soB7FI9Rf5dPqoqCb5vwhKhmOyMfXR7gdALuZ9Mc7', '2023-06-21 01:54:23'),
('neethubino555@gmail.com', '0MGcgeANTtDQCaSIb9Jp1MwBmvCKJP535SSdp1WRKhMa7sq9SoFL5RGsccCHfhZb', '2023-06-21 01:55:48'),
('neethubino555@gmail.com', 'nX1PCLLF4lsAeZAnGMcjXyqzVOF9lKz4gyQ9N3y8sFmMeKlebX9eDzG2o1cEADJJ', '2023-06-21 09:53:21'),
('neethubino555@gmail.com', 'E1EMXgD432j3R5p1Ct4MTdZOVLWewImPRt1rlTjogaCHUHzMpqQYLWmNhG6QEIKw', '2023-06-21 10:00:06'),
('neethubino555@gmail.com', 'WFtodNd52s1yUKvUOVQ5G5pwtYvcj7PzIo8YuSQdVtrj9ZVVr2zDmWz6ZZqU0gVU', '2023-06-21 23:50:47'),
('neethubino555@gmail.com', 'cHrQFgtGhEJn26th0TH8YmFWDTzRddzvNhTFBBD9i2NBpEqLp1qnBpLOV3RxD8zn', '2023-06-21 23:57:03'),
('neethubino555@gmail.com', 'eQbKAA6awvwL5EbWtr5l0okTYQ39yeXEvmCOs8FK0tnutdwtZmvLZ9B6C6HH1hzl', '2023-06-21 23:59:43'),
('neethubino555@gmail.com', 'uRaw2sDwdWSGsbxskRQ9SQUcjySgxL3riouliECcPqj4F3NqO7wjNpeyZQrGzANP', '2023-06-22 00:02:20'),
('neethubino555@gmail.com', '1rbJ6JMAwefukZR2LIWEBBPaXoQN62VGi6AQ6LZDty3AEsCRvxdfYm0hZ2FwXv6K', '2023-06-22 00:51:07'),
('neethubino555@gmail.com', 'ub8uamDhgcMOm0GdVnA07e6G1Fte8U7yNXXpy8vGm1gWtTcIrj27iZ0tzvoBWbVI', '2023-06-22 01:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `title`, `title_description`, `created_at`, `updated_at`) VALUES
(1, 'Privacy policy here', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen policy.', '2021-09-11 00:37:13', '2021-09-11 00:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price_from` varchar(255) DEFAULT NULL,
  `product_price_to` varchar(255) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `business_id`, `product_name`, `product_price_from`, `product_price_to`, `product_category`, `product_description`, `created_at`, `updated_at`, `product_image`) VALUES
(5, 3, 'Portland cement', '50,000', '1,00,000', 'Landscope', 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.', '2021-09-09 21:53:35', '2021-09-09 21:53:35', NULL),
(6, 3, 'rapid hardening cement', '3,00,000', '2,00,000', 'Mep', 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.', '2021-09-09 21:53:58', '2021-09-09 21:53:58', NULL),
(7, 4, 'Pipe product', '100', '200', 'Plumbing', 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.', '2021-09-09 21:56:26', '2021-09-09 21:56:26', NULL),
(8, 4, 'Pipe Maintaining', '50,000', '1,00,000', 'Plumbing', 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.', '2021-09-09 21:56:49', '2021-09-09 21:56:49', NULL),
(9, 5, 'Fire thing', '100', '2,00,000', 'Fire fighting', 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.', '2021-09-09 21:59:29', '2021-09-09 21:59:29', NULL),
(10, 6, 'Portland cement', '50,000', '1,00,000', 'Cct systems', 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.', '2021-09-09 22:03:03', '2021-09-09 22:03:03', NULL),
(22, 3, 'Portland cement1', '50,001', '1,00,001', 'Landscope', 'AAAAAAA', NULL, NULL, 'bg3.jpg'),
(32, 5, 'Wiring product', '50,000', '1,00,000', NULL, 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.', '2021-10-21 05:39:12', '2021-10-21 05:39:12', NULL),
(38, 28, 'happy vend home orginiser', '599', '1099', NULL, 'I will help you to keep your home organised', NULL, NULL, '1636098795_ZF217z2.jpg'),
(39, 29, 'Villa', '500', '1000', NULL, 'Villa for Rent in Saar', NULL, NULL, '1638527238_2qD3PfjX7qKl7JtR.jpeg'),
(40, 30, 'test', '09', '21', NULL, 'test', NULL, NULL, '1642688059_cute-dog1.jpg'),
(41, 31, 'Test one', '123', '123456', NULL, 'test date ab asa assa sasaas  assasas', NULL, NULL, '1643468177_aad.png'),
(46, 36, 'Welding machine', '200', '500', NULL, 'sssssssssssssssssssssssssvcsss', NULL, '2022-02-21 18:14:05', '1645341666_download (2).jfif'),
(48, 38, 'Berger', '200', '400', NULL, NULL, NULL, '2022-02-22 14:05:23', '1645348138_download (2).jfif'),
(50, 40, 'Construction', '5000', '16778', NULL, 'ijnbbbbbbbbbbbbbbbbbbbbbxcdzxxxxxxxxxxxxxhvvccddfghjjjjjjm', NULL, '2022-02-21 18:51:01', '1645444261_2.jfif'),
(51, 41, 'Structure Construction', '500', '50,000', NULL, 'Constructing High Specs Towers & homes', NULL, '2023-03-10 08:53:41', '1678372580_8BA4BF47-37FB-42AE-A48B-F7893F783C39.jpeg'),
(61, 51, 'ASTER Brera Customized Kitchens', '2000', '6000', NULL, 'Preparation and processing equipments include, broilers, convention ovens or small', NULL, NULL, '1677279687_54610CC0-348C-4DC1-AD91-553E92588A6B.jpeg'),
(63, 53, 'Specialist', '200', '1000', NULL, 'Repairing Foundation.', NULL, '2023-03-09 23:00:54', '1677805819_E7601946-F5B4-436C-ACAA-7D2339548BAB.jpeg'),
(66, 56, 'Construction Directory', '0', '0', NULL, 'The platform is developed to help clients and vendors discover connections', NULL, '2023-03-09 23:10:18', '1678047504_20210821_103725000_iOS 9.png'),
(67, 57, 'Smart Home', '10', '5000', NULL, 'Supplying Smart home hubs include Amazon Echo, Google Home & Insteon Hub Pro.', NULL, NULL, '1678048042_Unknown.jpeg'),
(68, 58, 'Futuristic Furniture', '200', '5000', NULL, 'Custom-made, handmade furniture.', NULL, NULL, '1678322755_0A3DDB1A-9ADC-4557-864C-344DC1F9C283.jpeg'),
(69, 59, 'Pool Construction', '5,000', '50,000', NULL, 'Special Concrete Inground Swimming Pools', NULL, '2023-03-09 18:41:54', '1678362033_5C609A80-DD8A-415D-BB52-29B7A5DC8599.jpeg'),
(71, 61, 'Design & Execution', '1000', '50000', NULL, 'High-end Architectural Plans & Professional Execution', NULL, '2023-03-09 19:43:03', '1678365421_7B1525F5-5F14-41C9-AFFF-F16CCA953019.jpeg'),
(72, 62, 'Interior Designing', '200', '5000', NULL, 'Futuristic Interior Architectural Design', NULL, NULL, '1678392761_4B9CB16B-C332-47F0-8231-1FEC0B344557.jpeg'),
(73, 63, 'Decorative Fabric Fabrication', '25', '250', NULL, 'Hand-Made Modern Decorative Fabrics, Made in Italy.', NULL, '2023-03-10 05:31:57', '1678400859_images.jpeg'),
(74, 64, 'White Carrra Stone', '250', '10000', NULL, 'Greyish-white stormy lake marble', NULL, NULL, '1678415529_Unknown-19'),
(75, 65, 'Wood Flooring', '25', '85', NULL, 'Productions and installation of floors', NULL, NULL, '1678416082_fancy-living-room-Finland.jpg'),
(76, 66, 'Anker Solar Generator', '500', '1320', NULL, 'Long-Lasting Portable Power Station.', NULL, NULL, '1678447444_maxresdefault.jpg'),
(77, 67, 'Specialist Selling', '60,000', '1,000,000', NULL, 'Lands, Villas, Flats & Building.', NULL, NULL, '1678537894_ADF1BF1A-D2FA-4C89-AD6A-8BB6089E989E.jpeg'),
(79, 69, 'Peninsula Countertop', '1000', '4000', NULL, 'Semi-Open countertop w/ stools.', NULL, '2023-03-27 07:48:34', '1679878053_DCF08992-BCC4-4123-9A68-EDAB20DF8636.jpeg'),
(80, 70, 'Fan & Lights', '15', '20', NULL, 'Led celling fan & led lights \r\n2 in 1', NULL, '2023-04-02 21:41:11', '1680446471_F5E5B18A-D49F-491D-A327-51CAB1B52A80.jpeg'),
(81, 71, 'Staircase', '50', '500', NULL, 'Steel fabricated staircase | Prices according to measurements', NULL, NULL, '1680536930_06ECD88C-6F46-4874-9F2C-829D7BE1880B.jpeg'),
(82, 72, 'Glass cleaner', '2', '2.5', NULL, 'Specialty household cleaning products used to clean and wash glasses.', NULL, NULL, '1680609254_6EA8A9EE-8A95-4B86-9CED-5135C13978D9.jpeg'),
(83, 73, 'Madfoon Smoker', '950', '1650', NULL, 'Stainless steel grill top | 4 units Color |\r\nFire box | Wood, charcoal & glass', NULL, '2023-04-20 23:30:27', '1682004894_409CF4BA-FC5B-495A-98DA-ACCB0A36D9C2.jpeg'),
(84, 74, 'Glass Windows', '100', '5000', NULL, 'wide windows | Allowing for panoramic views | Ample natural light.', NULL, '2023-05-07 20:30:09', '1683466209_7106AB26-5AB8-4BB8-A56C-81727E468754.jpeg'),
(85, 75, 'Gypsm Ceiling', '100', '3500', NULL, 'prefabricated | ready-to-install boards | used for false ceilings.', NULL, NULL, '1683479558_41E0854F-8AB5-46A3-90B3-F0D37BEF5EDB.jpeg'),
(86, 76, 'Video Intercom', '25', '200', NULL, 'Intercom system w/ camera | Advanced entry system | Manage access', NULL, '2023-05-08 17:04:04', '1683540244_A274568C-7372-48ED-80AF-4A7799DCCE24.jpeg'),
(87, 77, 'Glass Facade', '2500', '5000', NULL, 'Design | Execution | Glass Window | Double-Glazed', NULL, '2023-05-08 18:36:19', '1683545619_C6AA3BD7-24AF-4CFD-9923-144AD547A10A.jpeg'),
(88, 78, 'Electrical Service', '20', '2000', NULL, 'Conductors |  Equipment Wire Transfer | Utility Wiring System.', NULL, NULL, '1683549144_FD0660E9-3AE6-48BF-9EB3-D1AB7D0096F0.jpeg'),
(89, 79, 'Construction', '100', '10000', NULL, 'Foundation | Blockwork | Concrete | Wood', NULL, NULL, '1683551247_9E8DBE85-A180-4F8B-A007-8341AC6FD5A7.jpeg'),
(90, 80, 'Interior Design', '20', '2000', NULL, 'Furniture | Gypsm Wall decor | Flooring | Paint | Lighting | Wood Work', NULL, NULL, '1683559926_F896FD64-FF76-4B2C-B403-EBF7243EC8F6.jpeg'),
(91, 81, 'Building Construction', '500', '5000', NULL, 'Blockwork | Cement-work | Plastering | Painting |', NULL, '2023-05-09 00:57:58', '1683568678_9269E9E3-A714-4A76-89EE-A40677EF0DF7.jpeg'),
(92, 82, 'Building Renovation', '200', '7000', NULL, 'Blockwork | Electrical | Plumbing | Plastering', NULL, NULL, '1683571299_D903B6FE-5AB9-4CC3-BE58-3BAFB9DE9680.jpeg'),
(93, 83, 'Interior Design', '100', '1000', NULL, 'Creative | Sustainable | Modern | Design Solution', NULL, NULL, '1684061540_8908C121-30A6-42F0-9B5C-5F02BB2D0AD2.png'),
(94, 84, 'House construction', '15000', '25000', NULL, 'Blockwork | تركيب طابوق | Concrete works | صب الاسمنت', NULL, NULL, '1684084068_C93E0007-31CF-46EE-B946-94DFFE6185AF.jpeg'),
(95, 85, 'Space Planning', '200', '2000', NULL, 'تخطيط المساحات | Garden Design & Execution | تصميم و تنفيذ الحدائق |', NULL, NULL, '1684324875_63DD4341-BCF1-4346-A00B-F35F3D95789C.jpeg'),
(96, 86, 'HDTV Camera', '20', '80', NULL, '24/7 Remote Viewing | Fast Response | 1 Day Installation', NULL, NULL, '1684330196_FDCE34B2-4FE9-4610-ABDD-7A577ADF845B.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `requestfqs`
--

CREATE TABLE `requestfqs` (
  `id` int(100) NOT NULL,
  `vendor_id` int(100) DEFAULT NULL,
  `customer_id` int(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `document` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requestfqs`
--

INSERT INTO `requestfqs` (`id`, `vendor_id`, `customer_id`, `name`, `email`, `message`, `document`, `created_at`, `updated_at`) VALUES
(6, 2, 4, 'VVV', 'vv@gmail.com', 'AA', NULL, '2021-10-05 02:31:35', '2021-10-05 02:31:35'),
(7, 1, 1, 'Govindan', 'bgovindk5455@gmail.com', 'we need better one', '1633756732_aad.png', '2021-10-08 23:48:52', '2021-10-08 23:48:52'),
(8, 1, 1, 'mm', 'bmathank555@gmail.com', 'ff', '1634012057_pc.jpg', '2021-10-11 22:44:17', '2021-10-11 22:44:17'),
(9, 2, 10, 'husain haji', 'haji_11@icloud.com', 'test1', '1637411072_AUIN8237.JPG', '2021-11-20 19:24:32', '2021-11-20 19:24:32'),
(10, 2, 11, 'info@probuild.bh', 'info@probuild.bh', 'just checking if it works', '1637849545_Screenshot 2021-11-25 at 3.18.58 pm.png', '2021-11-25 21:12:25', '2021-11-25 21:12:25'),
(11, 2, 11, 'f', 'haji_13@hotmail.com', 'bbilhbiyvbyih', '1637850135_Screenshot 2021-11-25 at 3.18.58 pm.png', '2021-11-25 21:22:15', '2021-11-25 21:22:15'),
(12, 52, 8, 'Khan', 'khan@gmail.com', 'Test', '1638527455_HSP - New Property Form.pdf', '2021-12-03 17:30:55', '2021-12-03 17:30:55'),
(13, 2, 9, 'faisal', 'haji_13@hotmail.com', 'is this working?', '1642774485_81-812810_go-to-image-png-bed-icon-white-transparent.png', '2022-01-21 21:14:45', '2022-01-21 21:14:45'),
(14, 3, 14, 'husain', 'hahaha@haji.com', 'i want call back', '1643469864_s1AjSxph_400x400.jpg', '2022-01-29 22:24:24', '2022-01-29 22:24:24'),
(15, 59, 8, 'Rashid', 'rashid@gmail.com', 'test message', '1643469989_aad.png', '2022-01-29 22:26:29', '2022-01-29 22:26:29'),
(16, 45, 14, 'Husain', 'hahaha@haji.com', 'hjkashjksaxkasx', '1643471004_s1AjSxph_400x400.jpg', '2022-01-29 22:43:24', '2022-01-29 22:43:24'),
(17, 59, 8, 'rashid', 'rashid@gmail.com', 'test', '1643532877_aad.png', '2022-01-30 15:54:37', '2022-01-30 15:54:37'),
(18, 66, 15, 'cherry', 'cherry@gmail.com', 'cement', '1643547631_download.jfif', '2022-01-30 20:00:31', '2022-01-30 20:00:31'),
(19, 64, 15, 'Anu', 'anu@gmail.com', 'need painter', '1643626241_download.jfif', '2022-01-31 17:50:41', '2022-01-31 17:50:41'),
(20, 64, 17, 'Hello', 'hello@gmail.com', 'hai', '1643626547_download (1).jfif', '2022-01-31 17:55:47', '2022-01-31 17:55:47'),
(21, 81, 22, 'Faisql', 'h@hotmail.com', 'Nzhsnandjsnnsn', '1677153011_Grifith College - transcript and certificate.pdf', '2023-02-23 18:50:11', '2023-02-23 18:50:11'),
(22, 81, 22, 'faisal', 'h@Hotmailcom', 'please work!', '1677178509_Construction Method.docx', '2023-02-24 01:55:09', '2023-02-24 01:55:09'),
(23, 83, 23, 'faisal', 'haji_13@hotmail.com', 'I require 2 painter to complete a 100 dinar table with smooth finishing according to Bahrain furniture regulation 2023.', '1677182278_Withdrawal.docx', '2023-02-24 02:57:58', '2023-02-24 02:57:58'),
(24, 88, 22, 'Faisal haji', 'haji_13@hotmail.com', '3D printing’s roots date back to the mid-1980s when stereolithography, or SLA, was conceived. SLA works as a high-powered laser and turns a liquid resin into a solid material.', '1677264935_PROBUILD WEBSITE SAMPLE .pdf', '2023-02-25 01:55:35', '2023-02-25 01:55:35'),
(25, 81, 22, 'Faisal Haji', '13@hotmail.com', 'ormats, including phone\r\nconversations, email chains, documents, and accounting\r\nsheets. A strategy of \"bet everything and', '1677265091_09A41B8C-2079-4CB4-AEE6-E7D387EFE66B.jpeg', '2023-02-25 01:58:11', '2023-02-25 01:58:11'),
(26, 81, 22, 'Faisql', 'h@hotmail.com', 'whom it may concern, I have a ready boq of a 3 bed villq that require tiles, kitchen, toilet. Please contact me at 38383894.', '1677436981_2165D809-4947-4B33-8BAE-614B39DA8A61.jpeg', '2023-02-27 01:43:01', '2023-02-27 01:43:01'),
(27, 83, 22, 'faisal', 'h@hotmail.com', 'I need to move 1 fill villa from Manama to Riffa one 30/02/2023.', '1677854232_1621541960_Haji gallery.jpeg', '2023-03-03 21:37:12', '2023-03-03 21:37:12'),
(28, 89, 22, 'Faisal Haji', 'haji@hotmail.com', 'I will 55 SQM for living room, I prefer shale sand tiles, 59x59 and my budget is 15 per Sqm', '1677854344_1621541960_Haji gallery.jpg', '2023-03-03 21:39:04', '2023-03-03 21:39:04'),
(29, 81, 22, 'Bsbsns', 'h@hotmail.com', 'Dnnddhbddbbdndndbdbdbdbdbdbdbdbdbdbdbdbdbdbdb', '1678127057_DD066CD2-682D-4178-92B4-CBC925054041.png', '2023-03-07 01:24:17', '2023-03-07 01:24:17'),
(30, 104, 25, 'Faisal Haji', 'haji@hotmail.com', 'The processes used in the manufacture of furniture include the cutting, bending, molding, laminating, and assembly of such materials as wood, metal, glass, plastics, and rattan. However, the production process for furniture is not solely bending metal, cutting and shaping wood, or extruding and molding plastics.', '1678323632_586FDE2E-4286-4656-9A5E-EE28CBDA5CDD.jpeg', '2023-03-09 08:00:32', '2023-03-09 08:00:32'),
(31, 82, 25, 'Jshsh', 'h@hotmail.com', 'The processes used in the manufacture of furniture include the cutting, bending, molding, laminating, and assembly of such materials as wood, metal, glass, plastics, and rattan. However, the production process for furniture is not solely bending metal, cutting and shaping wood, or extruding and molding plastics.', '1678323671_6313DDEE-0275-4156-A8F6-246EEAFF59AA.jpeg', '2023-03-09 08:01:11', '2023-03-09 08:01:11'),
(32, 106, 22, 'Faisal', 'h@hotmail.com', 'Hello [Name], We\'re so sorry to hear your experience was less than 5-stars and did not meet your expectations. Please help us', '1678363799_0B14A355-59F0-41A1-A4F9-7A326DA61822.webp', '2023-03-09 19:09:59', '2023-03-09 19:09:59'),
(33, 106, 22, 'Ahmed', 'h@hotmail.com', 'Hello [Name], We\'re so sorry to hear your experience was less than 5-stars and did not meet your expectations. Please help us', '1678363850_ProBuild Company Profile .pdf 2.pdf', '2023-03-09 19:10:50', '2023-03-09 19:10:50'),
(34, 107, 22, 'Faisal haji', 'h@hotmail.com', 'I am looking for someone to build my house, i have a ready BOQ and architectural plans', '1678366003_752733D5-6127-4D0B-BF96-77F7A7E8947D.jpeg', '2023-03-09 19:46:43', '2023-03-09 19:46:43'),
(35, 107, 22, 'Taisql', 'h@hotmail.com', 'Talal is a bitch', '1678366695_AE4B0016-0760-4A6A-B955-FFE19ED97745.png', '2023-03-09 19:58:15', '2023-03-09 19:58:15'),
(36, 104, 22, 'Probuild.bh', 'probuild.bh@hotmail.com', 'I am looking for 4x6 sofa, preferably made in italy. I will attach a picture of a sample, were looking for either green or blue color.', '1678715333_AAF02C13-C45D-4C18-870C-760AE29F8F8F.jpeg', '2023-03-13 20:48:53', '2023-03-13 20:48:53'),
(37, 106, 22, 'Probuild', 'probuild@hotmail.com', 'I would like a quote for 12X7 swimming pool, my villa is located in manama. Please let me know what documents you require.', '1678720537_23C01F43-FAE4-4126-8F1F-E349A77FC94F.jpeg', '2023-03-13 22:15:37', '2023-03-13 22:15:37'),
(38, 122, 22, 'احمد', 'h@hotmail.com', 'ابحث عن مقاول يصمم و ينفذ حائط جبس', '1683486531_769C06A7-7992-4D85-9E8D-C5E6502C251B.jpeg', '2023-05-08 02:08:51', '2023-05-08 02:08:51'),
(39, 122, 22, 'Ali', 'b@hotmail.com', 'Looking for a team to execute my ceiling using Gypsm & installation of lighting', '1683486599_FE3A14E7-B407-4468-AEA4-1D1B8A75E79B.jpeg', '2023-05-08 02:09:59', '2023-05-08 02:09:59'),
(40, 123, 22, 'علي', 'h@hotmail.com', 'السلام، بغيت ٥ شاشات cctv', '1683540445_D7C5CB81-66AA-41A7-A57F-1ECB89FF81D1.jpeg', '2023-05-08 17:07:25', '2023-05-08 17:07:25'),
(41, 123, 22, 'علي', 'h@hotmail.com', 'الشاشات عجيييبه', '1683540503_4252267D-945C-4133-8BBD-F0E06B6CC034.png', '2023-05-08 17:08:23', '2023-05-08 17:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `request_calls`
--

CREATE TABLE `request_calls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_call_id` varchar(255) NOT NULL,
  `vendor_call_id` varchar(255) NOT NULL,
  `customer_call_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_calls`
--

INSERT INTO `request_calls` (`id`, `business_call_id`, `vendor_call_id`, `customer_call_id`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '2021-09-18 09:34:30', '2021-09-18 09:34:30'),
(2, '1', '1', '2', '2021-09-18 09:42:32', '2021-09-18 09:42:32'),
(3, '1', '1', '1', '2021-10-11 00:39:09', '2021-10-11 00:39:09'),
(4, '4', '2', '1', '2021-10-22 03:54:36', '2021-10-22 03:54:36'),
(5, '4', '2', '9', '2021-11-03 08:36:13', '2021-11-03 08:36:13'),
(6, '3', '2', '8', '2021-11-07 15:10:46', '2021-11-07 15:10:46'),
(7, '4', '2', '8', '2021-11-15 19:16:34', '2021-11-15 19:16:34'),
(8, '2', '1', '1', '2021-11-15 19:17:27', '2021-11-15 19:17:27'),
(9, '4', '2', '10', '2021-11-20 19:24:40', '2021-11-20 19:24:40'),
(10, '4', '2', '10', '2021-11-20 19:24:45', '2021-11-20 19:24:45'),
(11, '4', '2', '10', '2021-11-20 19:24:48', '2021-11-20 19:24:48'),
(12, '4', '2', '10', '2021-11-20 19:24:58', '2021-11-20 19:24:58'),
(13, '4', '2', '10', '2021-11-20 19:25:01', '2021-11-20 19:25:01'),
(14, '4', '2', '10', '2021-11-20 19:25:03', '2021-11-20 19:25:03'),
(15, '28', '45', '8', '2021-11-20 19:40:27', '2021-11-20 19:40:27'),
(16, '3', '2', '8', '2021-11-20 19:46:27', '2021-11-20 19:46:27'),
(17, '3', '2', '8', '2021-11-20 19:46:41', '2021-11-20 19:46:41'),
(18, '2', '1', '8', '2021-11-20 19:56:09', '2021-11-20 19:56:09'),
(19, '2', '1', '8', '2021-11-20 19:56:34', '2021-11-20 19:56:34'),
(20, '29', '52', '8', '2021-12-03 17:29:01', '2021-12-03 17:29:01'),
(21, '29', '52', '1', '2021-12-08 16:13:08', '2021-12-08 16:13:08'),
(22, '29', '52', '1', '2021-12-08 16:14:18', '2021-12-08 16:14:18'),
(23, '29', '52', '1', '2021-12-08 16:14:29', '2021-12-08 16:14:29'),
(24, '29', '52', '1', '2021-12-08 16:16:47', '2021-12-08 16:16:47'),
(25, '29', '52', '1', '2021-12-08 16:47:55', '2021-12-08 16:47:55'),
(26, '3', '2', '8', '2021-12-09 01:33:39', '2021-12-09 01:33:39'),
(27, '3', '2', '8', '2021-12-09 01:48:07', '2021-12-09 01:48:07'),
(28, '3', '2', '8', '2021-12-09 01:54:54', '2021-12-09 01:54:54'),
(29, '29', '52', '8', '2021-12-09 01:58:38', '2021-12-09 01:58:38'),
(30, '29', '52', '8', '2021-12-20 18:09:07', '2021-12-20 18:09:07'),
(31, '3', '2', '9', '2021-12-20 20:21:29', '2021-12-20 20:21:29'),
(32, '3', '2', '9', '2021-12-20 20:22:35', '2021-12-20 20:22:35'),
(33, '3', '2', '9', '2021-12-20 20:22:42', '2021-12-20 20:22:42'),
(34, '29', '52', '8', '2021-12-23 17:05:49', '2021-12-23 17:05:49'),
(35, '29', '52', '8', '2021-12-27 12:52:45', '2021-12-27 12:52:45'),
(36, '3', '2', '8', '2021-12-27 12:59:00', '2021-12-27 12:59:00'),
(37, '29', '52', '8', '2021-12-27 13:00:33', '2021-12-27 13:00:33'),
(38, '3', '2', '8', '2021-12-27 22:38:32', '2021-12-27 22:38:32'),
(39, '29', '52', '8', '2021-12-27 22:46:17', '2021-12-27 22:46:17'),
(40, '29', '52', '8', '2021-12-27 22:46:35', '2021-12-27 22:46:35'),
(41, '29', '52', '8', '2021-12-27 22:47:16', '2021-12-27 22:47:16'),
(42, '29', '52', '8', '2021-12-27 22:47:34', '2021-12-27 22:47:34'),
(43, '29', '52', '8', '2021-12-27 22:48:20', '2021-12-27 22:48:20'),
(44, '29', '52', '8', '2021-12-27 22:51:51', '2021-12-27 22:51:51'),
(45, '29', '52', '8', '2021-12-27 22:56:25', '2021-12-27 22:56:25'),
(46, '6', '3', '8', '2021-12-27 22:56:48', '2021-12-27 22:56:48'),
(47, '29', '52', '8', '2021-12-27 22:57:31', '2021-12-27 22:57:31'),
(48, '29', '52', '8', '2021-12-27 22:57:57', '2021-12-27 22:57:57'),
(49, '29', '52', '8', '2021-12-27 22:58:14', '2021-12-27 22:58:14'),
(50, '29', '52', '8', '2021-12-27 22:58:32', '2021-12-27 22:58:32'),
(51, '6', '3', '8', '2021-12-27 22:58:35', '2021-12-27 22:58:35'),
(52, '6', '3', '8', '2021-12-27 23:03:06', '2021-12-27 23:03:06'),
(53, '6', '3', '8', '2021-12-27 23:04:35', '2021-12-27 23:04:35'),
(54, '29', '52', '8', '2021-12-27 23:04:41', '2021-12-27 23:04:41'),
(55, '6', '3', '8', '2021-12-27 23:05:53', '2021-12-27 23:05:53'),
(56, '29', '52', '8', '2021-12-27 23:06:33', '2021-12-27 23:06:33'),
(57, '6', '3', '8', '2021-12-27 23:06:39', '2021-12-27 23:06:39'),
(58, '29', '52', '8', '2021-12-27 23:07:04', '2021-12-27 23:07:04'),
(59, '3', '2', '9', '2021-12-30 01:59:12', '2021-12-30 01:59:12'),
(60, '30', '1', '9', '2022-01-21 21:13:48', '2022-01-21 21:13:48'),
(61, '3', '2', '9', '2022-01-21 21:15:55', '2022-01-21 21:15:55'),
(62, '6', '3', '14', '2022-01-29 22:22:57', '2022-01-29 22:22:57'),
(63, '6', '3', '14', '2022-01-29 22:23:07', '2022-01-29 22:23:07'),
(64, '29', '52', '8', '2022-01-29 22:23:10', '2022-01-29 22:23:10'),
(65, '31', '59', '8', '2022-01-29 22:25:03', '2022-01-29 22:25:03'),
(66, '28', '45', '14', '2022-01-29 22:43:35', '2022-01-29 22:43:35'),
(67, '31', '59', '8', '2022-01-30 15:53:08', '2022-01-30 15:53:08'),
(68, '31', '59', '8', '2022-01-30 15:54:00', '2022-01-30 15:54:00'),
(69, '3', '2', '16', '2022-01-30 19:27:15', '2022-01-30 19:27:15'),
(70, '3', '2', '15', '2022-01-31 00:23:36', '2022-01-31 00:23:36'),
(71, '3', '2', '8', '2022-01-31 00:25:35', '2022-01-31 00:25:35'),
(72, '5', '3', '15', '2022-01-31 00:27:27', '2022-01-31 00:27:27'),
(73, '5', '3', '15', '2022-01-31 00:27:42', '2022-01-31 00:27:42'),
(74, '5', '3', '15', '2022-01-31 00:28:12', '2022-01-31 00:28:12'),
(75, '4', '2', '15', '2022-01-31 00:30:09', '2022-01-31 00:30:09'),
(76, '3', '2', '15', '2022-01-31 00:31:23', '2022-01-31 00:31:23'),
(77, '6', '3', '15', '2022-01-31 00:32:06', '2022-01-31 00:32:06'),
(78, '6', '3', '15', '2022-01-31 00:32:12', '2022-01-31 00:32:12'),
(79, '33', '66', '15', '2022-01-31 00:35:46', '2022-01-31 00:35:46'),
(80, '33', '66', '15', '2022-01-31 00:36:11', '2022-01-31 00:36:11'),
(81, '33', '66', '15', '2022-01-31 15:23:50', '2022-01-31 15:23:50'),
(82, '33', '66', '15', '2022-01-31 16:48:04', '2022-01-31 16:48:04'),
(83, '34', '64', '15', '2022-01-31 17:33:45', '2022-01-31 17:33:45'),
(84, '34', '64', '15', '2022-01-31 17:51:01', '2022-01-31 17:51:01'),
(85, '34', '64', '17', '2022-01-31 17:56:06', '2022-01-31 17:56:06'),
(86, '3', '2', '8', '2022-02-20 13:31:13', '2022-02-20 13:31:13'),
(87, '3', '2', '8', '2022-02-20 13:55:45', '2022-02-20 13:55:45'),
(88, '38', '64', '17', '2022-02-20 18:49:04', '2022-02-20 18:49:04'),
(89, '36', '66', '17', '2022-02-21 14:11:21', '2022-02-21 14:11:21'),
(90, '38', '64', '19', '2022-02-22 16:44:54', '2022-02-22 16:44:54'),
(91, '3', '2', '20', '2022-02-22 22:29:45', '2022-02-22 22:29:45'),
(92, '4', '2', '20', '2022-02-25 23:33:06', '2022-02-25 23:33:06'),
(93, '38', '64', '17', '2022-03-29 18:12:03', '2022-03-29 18:12:03'),
(94, '3', '2', '11', '2022-03-30 23:27:06', '2022-03-30 23:27:06'),
(95, '41', '81', '22', '2023-02-23 18:49:33', '2023-02-23 18:49:33'),
(96, '43', '83', '22', '2023-02-24 01:53:59', '2023-02-24 01:53:59'),
(97, '43', '83', '23', '2023-02-24 02:58:12', '2023-02-24 02:58:12'),
(98, '47', '85', '22', '2023-02-24 23:51:22', '2023-02-24 23:51:22'),
(99, '49', '88', '22', '2023-02-25 01:54:36', '2023-02-25 01:54:36'),
(100, '41', '81', '22', '2023-02-25 01:57:03', '2023-02-25 01:57:03'),
(101, '47', '85', '22', '2023-02-25 05:20:31', '2023-02-25 05:20:31'),
(102, '43', '83', '22', '2023-02-25 05:52:28', '2023-02-25 05:52:28'),
(103, '46', '81', '9', '2023-02-25 06:17:07', '2023-02-25 06:17:07'),
(104, '47', '85', '22', '2023-02-27 03:47:56', '2023-02-27 03:47:56'),
(105, '49', '88', '22', '2023-03-03 09:09:20', '2023-03-03 09:09:20'),
(106, '50', '89', '22', '2023-03-03 21:39:09', '2023-03-03 21:39:09'),
(107, '50', '89', '22', '2023-03-03 21:39:12', '2023-03-03 21:39:12'),
(108, '50', '89', '22', '2023-03-03 21:39:14', '2023-03-03 21:39:14'),
(109, '50', '89', '22', '2023-03-06 03:09:32', '2023-03-06 03:09:32'),
(110, '57', '82', '22', '2023-03-07 01:22:41', '2023-03-07 01:22:41'),
(111, '41', '81', '22', '2023-03-07 01:23:34', '2023-03-07 01:23:34'),
(112, '41', '81', '22', '2023-03-07 01:23:36', '2023-03-07 01:23:36'),
(113, '58', '104', '25', '2023-03-09 08:00:02', '2023-03-09 08:00:02'),
(114, '58', '104', '25', '2023-03-09 08:00:04', '2023-03-09 08:00:04'),
(115, '58', '104', '25', '2023-03-09 08:00:07', '2023-03-09 08:00:07'),
(116, '57', '82', '25', '2023-03-09 08:00:51', '2023-03-09 08:00:51'),
(117, '57', '82', '25', '2023-03-09 08:00:52', '2023-03-09 08:00:52'),
(118, '57', '82', '25', '2023-03-09 08:00:54', '2023-03-09 08:00:54'),
(119, '41', '81', '22', '2023-03-09 09:09:38', '2023-03-09 09:09:38'),
(120, '58', '104', '22', '2023-03-09 19:07:02', '2023-03-09 19:07:02'),
(121, '59', '106', '22', '2023-03-09 19:08:31', '2023-03-09 19:08:31'),
(122, '59', '106', '22', '2023-03-09 19:08:31', '2023-03-09 19:08:31'),
(123, '59', '106', '22', '2023-03-09 19:08:32', '2023-03-09 19:08:32'),
(124, '59', '106', '22', '2023-03-09 19:08:32', '2023-03-09 19:08:32'),
(125, '61', '107', '22', '2023-03-09 19:46:22', '2023-03-09 19:46:22'),
(126, '61', '107', '22', '2023-03-09 19:46:25', '2023-03-09 19:46:25'),
(127, '56', '102', '22', '2023-03-13 11:00:41', '2023-03-13 11:00:41'),
(128, '56', '102', '22', '2023-03-13 11:00:43', '2023-03-13 11:00:43'),
(129, '56', '102', '22', '2023-03-13 11:00:45', '2023-03-13 11:00:45'),
(130, '58', '104', '22', '2023-03-13 20:48:57', '2023-03-13 20:48:57'),
(131, '58', '104', '22', '2023-03-13 20:49:00', '2023-03-13 20:49:00'),
(132, '59', '106', '22', '2023-03-13 22:13:34', '2023-03-13 22:13:34'),
(133, '59', '106', '22', '2023-03-13 22:14:16', '2023-03-13 22:14:16'),
(134, '61', '107', '28', '2023-03-27 00:13:12', '2023-03-27 00:13:12'),
(135, '61', '107', '22', '2023-03-27 07:56:23', '2023-03-27 07:56:23'),
(136, '59', '106', '22', '2023-04-03 18:56:25', '2023-04-03 18:56:25'),
(137, '71', '117', '22', '2023-04-04 05:43:44', '2023-04-04 05:43:44'),
(138, '70', '115', '22', '2023-04-04 20:54:45', '2023-04-04 20:54:45'),
(139, '70', '115', '22', '2023-04-08 03:15:43', '2023-04-08 03:15:43'),
(140, '73', '119', '22', '2023-05-04 17:59:30', '2023-05-04 17:59:30'),
(141, '73', '119', '22', '2023-05-04 17:59:32', '2023-05-04 17:59:32'),
(142, '73', '119', '22', '2023-05-04 17:59:34', '2023-05-04 17:59:34'),
(143, '73', '119', '22', '2023-05-04 17:59:37', '2023-05-04 17:59:37'),
(144, '73', '119', '22', '2023-05-04 17:59:38', '2023-05-04 17:59:38'),
(145, '73', '119', '22', '2023-05-04 17:59:41', '2023-05-04 17:59:41'),
(146, '73', '119', '22', '2023-05-04 17:59:43', '2023-05-04 17:59:43'),
(147, '73', '119', '22', '2023-05-04 17:59:43', '2023-05-04 17:59:43'),
(148, '75', '122', '22', '2023-05-08 02:10:02', '2023-05-08 02:10:02'),
(149, '75', '122', '22', '2023-05-08 02:10:06', '2023-05-08 02:10:06'),
(150, '75', '122', '22', '2023-05-08 02:10:10', '2023-05-08 02:10:10'),
(151, '75', '122', '22', '2023-05-08 02:10:13', '2023-05-08 02:10:13'),
(152, '76', '123', '22', '2023-05-08 17:07:26', '2023-05-08 17:07:26'),
(153, '76', '123', '22', '2023-05-08 17:07:29', '2023-05-08 17:07:29'),
(154, '77', '124', '22', '2023-05-08 19:35:11', '2023-05-08 19:35:11'),
(155, '82', '131', '22', '2023-05-09 02:03:14', '2023-05-09 02:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `request_call_actions`
--

CREATE TABLE `request_call_actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `request_call_action` varchar(255) NOT NULL,
  `request_call_tendor_id` varchar(255) NOT NULL,
  `request_call_vendor_id` varchar(255) NOT NULL,
  `request_call_removed` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_call_actions`
--

INSERT INTO `request_call_actions` (`id`, `request_call_action`, `request_call_tendor_id`, `request_call_vendor_id`, `request_call_removed`, `created_at`, `updated_at`) VALUES
(7, '1', '1', '1', 'NIL', '2021-09-23 08:35:52', '2021-09-23 08:36:09'),
(8, '1', '2', '1', 'NIL', '2021-10-04 08:29:17', '2021-10-04 08:29:17'),
(9, 'removed', '3', '1', 'removed', '2021-10-23 05:57:49', '2021-10-23 05:57:49'),
(10, 'removed', '79', '66', 'removed', '2022-01-31 14:10:38', '2022-01-31 14:10:38'),
(11, 'removed', '83', '64', 'removed', '2022-02-01 19:14:22', '2022-02-01 19:14:22'),
(12, 'removed', '122', '106', 'removed', '2023-03-09 19:11:53', '2023-03-09 19:11:53'),
(13, 'removed', '123', '106', 'removed', '2023-03-09 19:12:00', '2023-03-09 19:12:00'),
(14, '1', '141', '119', 'NIL', '2023-05-25 13:37:03', '2023-05-25 13:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `business_id`, `customer_name`, `email`, `review`, `rating`, `created_at`, `updated_at`, `customer_id`, `status`) VALUES
(13, 3, 'Santhosh', 'mudatuv@mailinator.com', 'HAi', '2', '2021-09-27 04:12:11', '2021-09-27 04:12:11', '1', '1'),
(14, 3, 'Santhosh', 'mudatuv@mailinator.com', 'sss', '5', '2021-09-27 04:23:25', '2021-09-27 04:23:25', '1', '1'),
(22, 3, 'Rohit', 'rohit@gmail.com', 'need help', '4', '2021-10-11 00:52:29', '2021-10-11 00:52:29', '1', '1'),
(23, 4, 'Virat', 'virat@gmail.com', 'need help from admin', '4', '2021-10-11 00:53:49', '2021-10-11 00:53:49', '1', '1'),
(24, 5, 'Imran khan', 'khan123@gmail.com', 'need help', '2', '2021-10-11 00:54:56', '2021-10-11 00:54:56', '1', '1'),
(25, 6, 'Deepak', 'deepak@gmail.com', 'how to add business', '4', '2021-10-11 00:56:17', '2021-10-11 00:56:17', '1', '1'),
(29, 4, 'husain', 'haji_11@icloud.com', '1 out of 10', '5', '2021-11-20 19:25:42', '2021-11-20 19:25:42', '10', '1'),
(30, 4, 'kamal', 'kjkj@gmail.com', 'kjkjk', '2', '2021-12-07 16:59:35', '2021-12-07 16:59:35', '8', '1'),
(31, 29, 'Navin', 'Apknavin007@gmail.com', 'test', '2', '2021-12-07 22:03:15', '2021-12-07 22:03:15', '8', '1'),
(51, 38, 'Hello', 'hello@gmail.com', 'good', '4', '2022-02-20 18:40:24', '2022-02-20 18:40:24', '17', '1'),
(52, 38, 'Hello', 'hello@gmail.com', '12344566', '3', '2022-02-20 18:40:48', '2022-02-20 18:40:48', '17', '1'),
(53, 41, 'Faisal', 'h@hotmail.com', 'Perfect', '5', '2023-02-23 18:49:55', '2023-02-23 18:49:55', '22', '1'),
(54, 41, 'Faisal Haji', 'Haji_13@hotmail.com', 'We need to change the review elf\'s.\r\nit aint that good', '2', '2023-02-24 02:44:01', '2023-02-24 02:44:01', '22', '1'),
(57, 41, 'Faisal Haji', '1@hotmail.com', 'is important to restrict each chance. The coordination of\r\nthe field\'s experts takes place. This suggests targeting every', '2', '2023-02-25 01:57:39', '2023-02-25 01:57:39', '22', '1'),
(58, 41, 'faisal ali haji ali', 'haji@hotmail.com', 'We offer comprehensive construction services, focusing on design-build, general contracting, project management, and construction consulting. Our top priorities', '2', '2023-02-25 05:21:10', '2023-02-25 05:21:10', '22', '1'),
(64, 41, 'Faisal', 'haji@hotmail.com', 'To whom it may concern,\r\nI have a ready boq of a 3 bed villq that require tiles, kitchen, toilet.\r\nPlease contact me at 38383894.', '2', '2023-02-27 01:41:53', '2023-02-27 01:41:53', '22', '1'),
(65, 41, 'Dheya', 'h@hotmail.com', 'Change the review table.', '2', '2023-02-27 01:42:25', '2023-02-27 01:42:25', '22', '1'),
(68, 53, 'Ali', 'q@hotmail.com', 'Poor steel quality', '1', '2023-03-03 09:11:14', '2023-03-03 09:11:14', '22', '1'),
(69, 53, 'Faisal', 'a@hotmail.com', 'Concrete was not suitable to lay', '2', '2023-03-03 09:11:45', '2023-03-03 09:11:45', '22', '1'),
(76, 56, 'Faisal haji', 'h@Homail.com', 'Easy to use website with amazing functionality', '5', '2023-03-06 03:11:16', '2023-03-06 03:11:16', '22', '1'),
(77, 56, 'Ahmed Saleh', 'h@Hotmail.com', 'UI design needs updating but overall 7/10', '4', '2023-03-06 03:12:08', '2023-03-06 03:12:08', '22', '1'),
(78, 56, 'Ali H', 'h@hotmail.com', 'I don\'t recommend this company.', '1', '2023-03-06 03:12:46', '2023-03-06 03:12:46', '22', '1'),
(79, 57, 'Reema', 'a@Hotmail.com', 'Alexa Echo bought from them was not working', '1', '2023-03-06 03:30:03', '2023-03-06 03:30:03', '22', '1'),
(80, 57, 'ahmed', 'a@Hotmail.com', 'Bad delivery service', '1', '2023-03-06 03:30:20', '2023-03-06 03:30:20', '22', '1'),
(81, 58, 'Saleh', 'h@hotmail.com', '.', '5', '2023-03-09 07:53:53', '2023-03-09 07:53:53', '25', '1'),
(82, 58, 'Ali', 'h@hotmail.com', 'There furniture is made of Indian and spanish fabrics', '2', '2023-03-09 07:54:37', '2023-03-09 07:54:37', '25', '1'),
(88, 51, 'Ahmed', 'a@hotmail.com', 'Best suppliers in bahrain', '5', '2023-03-09 09:14:33', '2023-03-09 09:14:33', '22', '1'),
(89, 51, 'Manal', 'a@hotmail.com', 'Buying my items from them for the past 6 years', '5', '2023-03-09 09:15:05', '2023-03-09 09:15:05', '22', '1'),
(90, 51, 'Faisal', 'a@hotmail.com', 'Excellent', '5', '2023-03-09 09:15:22', '2023-03-09 09:15:22', '22', '1'),
(91, 59, 'Ali', 'h@hotmail.com', 'Good construction method', '5', '2023-03-09 18:45:54', '2023-03-09 18:45:54', '26', '1'),
(98, 59, 'Salman', 'h@hotmail.com', 'Suppliers is very pleasant to work with', '5', '2023-03-09 18:51:17', '2023-03-09 18:51:17', '9', '1'),
(99, 57, 'Salman', 'h@hotmail.com', 'I would like to use it again', '5', '2023-03-09 18:52:31', '2023-03-09 18:52:31', '9', '1'),
(100, 58, 'Faisal haji', 'h@hotmail.com', 'Hello [Name], We\'re so sorry to hear your experience was less than 5-stars and did not meet your expectations. L', '5', '2023-03-09 18:53:39', '2023-03-09 18:53:39', '9', '1'),
(101, 59, 'Faisal', 'h@hotmail.com', 'I like they way they do business, very professional and excellent', '5', '2023-03-09 19:09:10', '2023-03-09 19:09:10', '22', '1'),
(102, 61, 'Hisham Ali', 'h@hotmail.com', 'You are the consummate professional and I am in awe of your design abilities and seamless coordination skills. I absolutely adore my new space and I am forever grateful to you and your team.', '5', '2023-03-09 19:48:02', '2023-03-09 19:48:02', '22', '1'),
(103, 61, 'Faisql', 'h@hotmail.com', 'Excellent service', '5', '2023-03-09 19:48:24', '2023-03-09 19:48:24', '22', '1'),
(104, 61, 'Alex', 'h@hotmail.com', 'Slow delivery but good works produced', '3', '2023-03-09 19:48:49', '2023-03-09 19:48:49', '22', '1'),
(105, 56, 'Alex', 'a@hotmail.com', 'Perfect', '5', '2023-03-09 19:55:11', '2023-03-09 19:55:11', '22', '1'),
(106, 56, 'Bushra', 'a@hotmail.com', 'Would definitely use again', '5', '2023-03-09 19:55:28', '2023-03-09 19:55:28', '22', '1'),
(107, 56, 'Reema consultants', 'a@hotmail.com', 'Perfect website designed', '5', '2023-03-09 19:56:02', '2023-03-09 19:56:02', '22', '1'),
(108, 56, 'Sara', 'a@hotmail.com', 'You need to add more business', '5', '2023-03-09 19:56:18', '2023-03-09 19:56:18', '22', '1'),
(109, 56, 'Faisal', 'h@hotmail.com', 'Excellent database', '5', '2023-03-09 19:56:38', '2023-03-09 19:56:38', '22', '1'),
(110, 61, 'Sara', 'w@hotmail.com', 'Would definitely use again', '5', '2023-03-09 19:57:43', '2023-03-09 19:57:43', '22', '1'),
(111, 61, 'Sara', 'a@hotmail.com', 'Perfect', '5', '2023-03-09 19:57:54', '2023-03-09 19:57:54', '22', '1'),
(112, 61, 'Sara', 'a@hotmail.com', 'Perfect', '5', '2023-03-09 19:57:54', '2023-03-09 19:57:54', '22', '1'),
(113, 62, 'Ahmed', 'f@hotmail.com', 'Execution is precise and good', '5', '2023-03-10 03:59:37', '2023-03-10 03:59:37', '22', '1'),
(114, 62, 'Probuild', 'a@hotmail.com', 'Definitely recommended', '5', '2023-03-10 04:00:03', '2023-03-10 04:00:03', '22', '1'),
(115, 62, 'Ali haji', 'a@hotmail.com', 'They can improve', '3', '2023-03-10 04:00:34', '2023-03-10 04:00:34', '22', '1'),
(116, 63, 'Reema', 'h@hotmail.com', 'Bad Fabric used in my project', '1', '2023-03-10 05:37:47', '2023-03-10 05:37:47', '22', '1'),
(117, 63, 'Samer', 'a@hotmail.com', 'I dont recommend', '3', '2023-03-10 05:38:06', '2023-03-10 05:38:06', '22', '1'),
(118, 65, 'Barco Construction', 'h@hotmail.com', 'They supplied us with 165 sqm of parquet for 2 villas in manama.', '2', '2023-03-11 06:17:25', '2023-03-11 06:17:25', '22', '1'),
(119, 65, 'Salman', 'a@hotmail.com', 'I dont recommend', '1', '2023-03-11 06:17:49', '2023-03-11 06:17:49', '22', '1'),
(120, 67, 'James alexum', 'h@hotmail.com', 'Many options for small budget.', '5', '2023-03-11 19:54:02', '2023-03-11 19:54:02', '22', '1'),
(121, 67, 'Ali sami', 'y@hotmail.com', 'Would definitely rent using them again.', '5', '2023-03-11 20:24:14', '2023-03-11 20:24:14', '22', '1'),
(122, 69, 'Sara Amin', 's@hotmail.com', 'Delivery and installation of product was flawless & fast.', '2', '2023-03-27 07:58:33', '2023-03-27 07:58:33', '22', '1'),
(123, 69, 'James', 'a@hotmail.com', 'I would definitely recommend them for bathtubs. BEST IN BAHRAIN🙏🙏', '5', '2023-03-27 07:59:05', '2023-03-27 07:59:05', '22', '1'),
(124, 69, 'Sami', 'a@hotmail.clm', 'Excellent', '5', '2023-03-27 07:59:24', '2023-03-27 07:59:24', '22', '1'),
(125, 69, 'Alex', 'a@hotmail.com', 'Bad customer service', '1', '2023-03-27 08:01:20', '2023-03-27 08:01:20', '22', '1'),
(126, 70, 'Ahmed Ali', 'a@hotmail.com', 'Excellent suppliers.', '5', '2023-04-02 21:38:46', '2023-04-02 21:38:46', '22', '1'),
(127, 70, 'Samer', 's@hotmail.com', 'Very high quality product', '5', '2023-04-02 21:39:11', '2023-04-02 21:39:11', '22', '1'),
(128, 70, 'Ali', 'a@hotmail.com', 'Fast delivery & installation service', '4', '2023-04-02 21:39:38', '2023-04-02 21:39:38', '22', '1'),
(129, 71, 'Ahmed', 'a@hotmail.com', 'High quality steel', '5', '2023-04-03 22:51:42', '2023-04-03 22:51:42', '22', '1'),
(130, 71, 'Ali saleh', 'a@hotmail.clm', 'Fast delivery & installation', '4', '2023-04-03 22:52:14', '2023-04-03 22:52:14', '22', '1'),
(131, 72, 'احمد', 'h@hotmail.com', 'التوصيل سريع و التركيب جداً ممتاز', '5', '2023-04-04 18:59:17', '2023-04-04 18:59:17', '22', '1'),
(132, 72, 'Samer', 'a@hotmaip.com', 'Good quality product', '4', '2023-04-04 18:59:42', '2023-04-04 18:59:42', '22', '1'),
(133, 73, 'Ali', 'h@hotmail.com', 'High quality stainless steel.', '5', '2023-04-20 23:21:45', '2023-04-20 23:21:45', '22', '1'),
(134, 73, 'Sara', 's@hotmail.com', 'Product was delivered as per drawings.', '3', '2023-04-20 23:22:12', '2023-04-20 23:22:12', '22', '1'),
(135, 73, 'Faris', 'h@hotmail.com', 'Fast delivery', '5', '2023-04-20 23:22:36', '2023-04-20 23:22:36', '22', '1'),
(136, 74, 'Saleem', 'a@hotmail.com', 'Excellent product.', '5', '2023-05-07 20:31:32', '2023-05-07 20:31:32', '22', '1'),
(137, 74, 'Fatema', 'g@hotmail.com', 'Fast installation & good customer service.', '4', '2023-05-07 20:32:00', '2023-05-07 20:32:00', '22', '1'),
(138, 75, 'Ahmed Ali', 'a@hotmail.com', 'Amazing ceiling door.', '5', '2023-05-08 00:23:22', '2023-05-08 00:23:22', '22', '1'),
(139, 75, 'Seema', 'a@hotmail.com', 'Gypsm material was excellent.', '5', '2023-05-08 00:24:04', '2023-05-08 00:24:04', '22', '1'),
(140, 75, 'Faris', 'f@hotmail.com', 'Fast installation', '2', '2023-05-08 00:24:36', '2023-05-08 00:24:36', '22', '1'),
(141, 76, 'Ahmed', 'a@hotmal.com', 'Fast delivery & installation.', '2', '2023-05-08 17:05:45', '2023-05-08 17:05:45', '22', '1'),
(142, 76, 'Sara', 's@hotmail.com', 'Video Intercom working perfectly fine, would definitely recommend sentry Solutions', '5', '2023-05-08 17:06:23', '2023-05-08 17:06:23', '22', '1'),
(143, 76, 'علي', 'h@hotmail.com', 'الشاشات عجيييبه😍😍😍', '2', '2023-05-08 17:08:48', '2023-05-08 17:08:48', '22', '1'),
(144, 77, 'احمد', 'h@hotmail', 'الزجاج الي عندهم وايد زين', '2', '2023-05-08 19:36:00', '2023-05-08 19:36:00', '22', '1'),
(145, 77, 'Sara', 'a@hotmail.com', 'Excellent installation service, would definitely recommend', '2', '2023-05-08 19:36:26', '2023-05-08 19:36:26', '22', '1'),
(146, 77, 'Ali', 'a@hotmail.com', '👎', '1', '2023-05-08 19:36:44', '2023-05-08 19:36:44', '22', '1'),
(147, 78, 'Hisham', 'h@hotmail.com', 'Cables were in very good quality', '5', '2023-05-08 19:37:27', '2023-05-08 19:37:27', '22', '1'),
(148, 78, 'Talal', 'h@hotmail.com', 'Did not like the delivery time.👎👎', '4', '2023-05-08 19:37:52', '2023-05-08 19:37:52', '22', '1'),
(149, 79, 'احمد علي', 'a@hotmail.com', 'شغل جدا جميل و عجيب😍😍', '2', '2023-05-08 20:11:18', '2023-05-08 20:11:18', '22', '1'),
(150, 79, 'ساره', 'h@hotmail.com', 'انصح جدا في المقاولات و الصيانه وقم ١ في المنامه🙌🙌', '5', '2023-05-08 20:11:56', '2023-05-08 20:11:56', '22', '1'),
(151, 80, 'فرح', 'h@hotmail.com', 'الاثاث جدا راقي و انصح في', '5', '2023-05-08 22:34:22', '2023-05-08 22:34:22', '22', '1'),
(152, 80, 'Haji Residence', 'h@hotmail.com', 'Great furniture and product quality is amazing.😍😍😍', '5', '2023-05-08 22:34:46', '2023-05-08 22:34:46', '22', '1'),
(153, 80, 'Ahmed', 'a@hotmail.com', 'Delivery and execution was fast', '5', '2023-05-08 22:35:10', '2023-05-08 22:35:10', '22', '1'),
(154, 81, 'ريما', 'h@hotmail.com', 'تصميم الحددائق و عجيب!!', '2', '2023-05-09 01:47:31', '2023-05-09 01:47:31', '22', '1'),
(155, 81, 'Ahmed', 'a@hotmail.com', 'Perfect delivery and installation', '2', '2023-05-09 01:47:53', '2023-05-09 01:47:53', '22', '1'),
(156, 81, 'احمد', 'h@hotmail.com', 'اصبغهم حلوة', '2', '2023-05-09 01:48:58', '2023-05-09 01:48:58', '22', '1'),
(157, 82, 'Rawan', 'reemaarsalan3@gmail.com', 'Great services!', '5', '2023-05-09 01:57:06', '2023-05-09 01:57:06', '29', '1'),
(158, 82, 'Fahad', 'reemaarsalan3@gmail.com', 'تسليك الكهرباء ممتاز', '2', '2023-05-09 01:58:15', '2023-05-09 01:58:15', '29', '1'),
(159, 82, 'Reem', 'reemaarsalan3@gmail.com', 'Great customer Service.. I highly recommend🤩', '5', '2023-05-09 02:02:45', '2023-05-09 02:02:45', '29', '1'),
(160, 83, 'احمد', 'h@hotmail.com', 'تصميم جداً ممتاز', '5', '2023-05-14 17:55:22', '2023-05-14 17:55:22', '22', '1'),
(161, 83, 'Ahmed', 'h@hotmail.clm', 'Would definitely recommend for interior design', '3', '2023-05-14 17:55:45', '2023-05-14 17:55:45', '22', '1'),
(162, 83, 'Sara', 's@hotmail.com', 'تصميم سريع🙌', '3', '2023-05-14 17:56:20', '2023-05-14 17:56:20', '22', '1'),
(163, 84, 'احمد', 'h@hotmail.com', 'مواد البناء جداً ممتازة', '4', '2023-05-15 00:09:44', '2023-05-15 00:09:44', '22', '1'),
(164, 84, 'Reem', 'a@hotmail.com', 'Good construction method', '5', '2023-05-15 00:10:01', '2023-05-15 00:10:01', '22', '1'),
(165, 84, 'فيصل', 'h@hotmail.com', 'شركة ممتازة', '5', '2023-05-15 00:10:28', '2023-05-15 00:10:28', '22', '1'),
(166, 85, 'Faisal', 'h@hotmail.com', 'Great landscape designers', '5', '2023-05-17 19:05:58', '2023-05-17 19:05:58', '22', '1'),
(167, 85, 'سارة', 'i@hotmail.com', 'التنفيذ جداً ممتاز👌 انصح في!', '4', '2023-05-17 19:06:58', '2023-05-17 19:06:58', '22', '1'),
(168, 85, 'احمد', 'h@hotmail.com', 'التوصيل سريع🙏', '5', '2023-05-17 19:07:29', '2023-05-17 19:07:29', '22', '1'),
(169, 86, 'Faisal', 'h@hotmail.com', 'Good quality camera and system', '5', '2023-05-17 20:33:11', '2023-05-17 20:33:11', '22', '1'),
(170, 86, 'احمد', 'h@hotmail.com', 'التركيب سريع جدا', '5', '2023-05-17 20:33:33', '2023-05-17 20:33:33', '22', '1'),
(171, 86, 'Sam', 's@hotmail.com', 'Would definitely recommend 10/10🙌🙏', '5', '2023-05-17 20:34:01', '2023-05-17 20:34:01', '22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `category_type` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `sub_category_icon` varchar(255) NOT NULL,
  `sub_category_description` varchar(255) NOT NULL,
  `premium` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `sub_category`, `category_type`, `priority`, `sub_category_icon`, `sub_category_description`, `premium`, `created_at`, `updated_at`) VALUES
(1, 'Landscope', '1', '1', 'Group 7802.png', 'better one', '1', '2021-09-09 21:17:08', '2021-09-28 00:51:34'),
(2, 'Civil', '1', '2', 'Group 7773.png', 'better one', NULL, '2021-09-09 21:17:33', '2021-09-24 02:15:10'),
(3, 'Mep', '1', '3', 'Group 7802.png', 'better one', NULL, '2021-09-09 21:18:08', '2021-11-07 15:24:54'),
(4, 'Plumbing', '2', '1', 'Group 7802.png', 'better one', '1', '2021-09-09 21:19:06', '2021-11-07 15:35:09'),
(5, 'Fire fighting', '2', '2', 'Group 7802.png', 'better one', '1', '2021-09-09 21:19:34', '2021-11-07 15:35:20'),
(6, 'Cct systems', '2', '3', 'Group 7802.png', 'better one', '1', '2021-09-09 21:20:28', '2021-11-07 15:35:33'),
(7, 'Transportation', '3', '1', 'Group 7802.png', 'better one', '1', '2021-09-09 21:22:10', '2021-11-07 15:37:34'),
(9, 'Manpower', '3', '3', 'Group 7802.png', 'better one', '1', '2021-09-09 21:23:25', '2021-11-07 15:37:54'),
(13, 'AC & Heater', '5', '1', 'Group 7802.png', 'better one', '1', '2021-09-11 08:17:41', '2021-11-07 15:40:25'),
(14, 'Security', '5', '2', 'Group 7802.png', 'better one', '1', '2021-09-11 08:18:40', '2021-11-07 15:40:48'),
(15, 'Flooring', '5', '3', 'Group 7802.png', 'better one', NULL, '2021-09-11 08:19:12', '2021-11-07 15:41:09'),
(16, 'Transportation', '1', '4', 'Group 7802.png', 'better one', NULL, '2021-09-30 05:56:57', '2021-11-07 15:42:10'),
(17, 'Contractor', '1', '5', 'Group 7802.png', 'better one', NULL, '2021-09-30 05:58:31', '2021-11-07 15:42:19'),
(18, 'General Manpower', '4', '1', 'General manpower.png', 'General manpower (brick mason, tiles mason & etc.)', '1', '2021-12-08 20:10:59', '2021-12-08 20:13:28'),
(19, 'Plumber', '4', '2', 'Plumber.png', 'Plumber', '1', '2021-12-08 20:15:13', '2021-12-08 20:15:13'),
(20, 'Electrical', '4', '3', 'Electrical.png', 'Electrical Works', '1', '2021-12-08 20:15:55', '2021-12-08 20:15:55'),
(21, 'Carpenter', '4', '4', 'Carpenter.png', 'Carpentry', '1', '2021-12-08 20:16:26', '2021-12-08 20:16:26'),
(22, 'Welder', '4', '5', 'Welder.png', 'Welding Works', '1', '2021-12-08 20:17:06', '2021-12-08 20:17:06'),
(23, 'AC and Heaters', '4', '6', 'Ac and heaters.png', 'AC & Heaters', NULL, '2021-12-08 20:17:58', '2021-12-08 20:18:43'),
(24, 'Painter', '4', '7', 'Painter.png', 'Painting', '1', '2021-12-08 20:19:45', '2021-12-08 20:19:45'),
(25, 'General Construction', '3', '5', 'General Construction materials.png', 'General Construction Materials', '1', '2021-12-08 21:03:05', '2021-12-08 21:03:05'),
(26, 'General Hardware', '3', '6', 'General Hardware & machinery.png', 'General Hardware and Machinery', '1', '2021-12-08 21:04:33', '2021-12-08 21:04:33'),
(27, 'Smart Home', '3', '7', 'Smart home.png', 'Smart Home', '1', '2021-12-08 21:05:26', '2021-12-08 21:05:26'),
(28, 'Furniture', '3', '8', 'Furniture.png', 'Furniture', '1', '2021-12-08 21:05:57', '2021-12-08 21:05:57'),
(29, 'Curtains', '3', '9', 'Curtains.png', 'Curtains', '1', '2021-12-08 21:06:20', '2021-12-08 21:06:20'),
(30, 'Wallpaper', '3', '10', 'Wallpaper.png', 'Wallpaper', '1', '2021-12-08 21:06:44', '2021-12-08 21:06:44'),
(31, 'Electrical', '3', '11', 'Electrical.png', 'Electrical supply', '1', '2021-12-08 21:07:32', '2021-12-08 21:07:32'),
(32, 'Steel', '3', '13', 'Steel.png', 'Steel', '1', '2021-12-08 21:07:57', '2021-12-08 21:07:57'),
(33, 'Wood', '3', '14', 'wood.png', 'Wood supply', '1', '2021-12-08 21:08:30', '2021-12-08 21:08:30'),
(34, 'Aluminum & Glass', '3', '14', 'aluminum & glass.png', 'Aluminum & Glass', '1', '2021-12-08 21:11:51', '2021-12-08 21:11:51'),
(35, 'Parquet', '3', '15', 'parquet.png', 'parquet', '1', '2021-12-08 21:12:53', '2021-12-08 21:12:53'),
(36, 'Tiles', '3', '16', 'tiles.png', 'tiles supply', '1', '2021-12-08 21:13:21', '2021-12-08 21:13:21'),
(37, 'Marble', '3', '17', 'marble.png', 'Marble', '1', '2021-12-08 21:14:13', '2021-12-08 21:14:13'),
(38, 'Kitchen', '3', '17', 'kitchen.png', 'Kitchen supplies', '1', '2021-12-08 21:14:35', '2021-12-08 21:14:35'),
(39, 'Sanitary Ware', '3', '17', 'sanitary ware.png', 'Sanitary Ware Supplies', '1', '2021-12-08 21:16:39', '2021-12-08 21:16:39'),
(40, 'Swimming Pools', '3', '18', 'swimming pools.png', 'Swimming Pool Supplies', '1', '2021-12-08 21:17:15', '2021-12-08 21:17:15'),
(41, 'Doors', '3', '18', 'doors.png', 'Doors', '1', '2021-12-08 21:18:01', '2021-12-08 21:18:01'),
(42, 'Lights', '3', '19', 'lights.png', 'lights', '1', '2021-12-08 21:18:31', '2021-12-08 21:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `tendor_requests`
--

CREATE TABLE `tendor_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `tendor_title` varchar(255) NOT NULL,
  `tendor_description` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `subcategory_id` varchar(255) NOT NULL,
  `sample_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tendor_requests`
--

INSERT INTO `tendor_requests` (`id`, `customer_id`, `tendor_title`, `tendor_description`, `category_id`, `subcategory_id`, `sample_image`, `created_at`, `updated_at`) VALUES
(8, 1, 'We need 100 Manpower immediately', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen .', '2', '5', 'aad.png', '2021-09-16 10:27:22', '2021-10-19 01:49:47'),
(9, 1, 'Need Transportation', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1', '3', 'listing-06.jpg', '2021-09-16 10:28:33', '2021-09-16 10:28:33'),
(10, 1, 'We need 100 cement bag Immediatly', 'Font Awesome is a font of scalable vector icons that can be customized by size, color, and just about any attribute that can be changed with CSS..', '1', '1', 'carpenter1.jpg', '2021-09-17 00:54:51', '2021-09-17 00:54:51'),
(12, 1, 'We need  Contract workers Immediatly', ', \'tendor_requests.id as tendorId\', \'tendor_requests.updated_at as tendorend\'', '1', '1', 'DFS.png', '2021-09-17 04:14:12', '2021-10-19 02:01:16'),
(13, 2, 'need paint', 'better', '1', '1', 'csfsfseg.png', '2021-09-20 04:23:15', '2021-10-19 02:19:21'),
(14, 1, 'Raj kumar ravi@gmail.com', 'better', '2', '4', 'building-construction.jpg', '2021-09-23 08:12:39', '2021-09-23 08:12:39'),
(15, 1, 'We need  Permanent workers Immediatly', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from', '1', '1', 'shoes_men2.jpg', '2021-09-27 08:43:05', '2021-09-27 08:43:05'),
(16, 2, 'We need  Permanent workers Immediatly', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from', '1', '1', 'hf.png', '2021-10-01 03:01:55', '2021-10-01 03:01:55'),
(17, 8, 'Rashid Wal', 'test tender', '4', '10', 'aad.png', '2021-10-30 21:33:43', '2021-10-30 21:33:43'),
(18, 8, 'Test Tender', 'test buses', '4', '10', 'aad.png', '2021-11-06 15:41:50', '2021-11-06 15:41:50'),
(19, 11, 'f f', 'wefsdddddddddd', '1', '2', 'Screenshot 2021-11-25 at 3.18.58 pm.png', '2021-11-25 21:23:12', '2021-11-25 21:23:12'),
(20, 8, 'Test tender', 'This one test', '4', '10', 'Brite SM 8.jpeg', '2021-12-03 17:12:06', '2021-12-03 17:12:06'),
(21, 8, 'Tender for Villa', 'Installation', '2', '6', 'HSP - New Property Form.pdf', '2021-12-03 17:32:21', '2021-12-03 17:32:21'),
(22, 8, 'Villlaaa', 'Check', '2', '6', 'Group 7802.png', '2021-12-08 17:47:56', '2021-12-08 17:47:56'),
(23, 8, 'Sample Tender', 'Sample Tender', '2', '6', 'Hp logo.png', '2021-12-08 17:53:51', '2021-12-08 17:53:51'),
(24, 8, 'Test 009', 'Preparing Test Scenarios from requirements documents. Creating and executing Test Cases and Documenting Test Results.', '2', '6', 'hp comp logo.jpg', '2021-12-08 18:00:41', '2021-12-08 18:00:41'),
(25, 8, 'Land Rental Req', 'Land rental requirement', '2', '6', 'pay 1 gsmr.JPG', '2021-12-20 18:04:05', '2021-12-20 18:04:05'),
(26, 8, 'Land Rental Request', 'Land Rental Request', '2', '6', 'pay 2 gsmr.JPG', '2021-12-20 18:05:29', '2021-12-20 18:05:29'),
(27, 8, 'Test Tender', 'Test Data', '2', '6', 'Hp logo.png', '2021-12-23 17:05:17', '2021-12-23 17:05:17'),
(28, 8, 'Water supply', 'Provide water supply for summing pools.', '3', '40', 'Image600.jpg', '2021-12-23 17:25:58', '2021-12-23 17:25:58'),
(29, 8, 'Water supply', 'provide water for swimming pool', '3', '40', 'Image600.jpg', '2021-12-23 17:43:12', '2021-12-23 17:43:12'),
(30, 9, 'Tender', 'Smslla', '1', '16', 'image.jpg', '2022-01-05 09:45:59', '2022-01-05 09:45:59'),
(31, 14, 'Glass', 'i need glass', '1', '1', 's1AjSxph_400x400.jpg', '2022-01-29 22:11:21', '2022-01-29 22:11:21'),
(32, 14, 'bed move', 'i have a bed to move', '1', '1', 's1AjSxph_400x400.jpg', '2022-01-29 22:25:37', '2022-01-29 22:25:37'),
(33, 8, 'sample tender', 'sample test tender', '3', '7', '5256934 1.png', '2022-01-30 15:55:44', '2022-01-30 15:55:44'),
(34, 8, 'Building', 'building', '1', '1', 'download (1).jfif', '2022-01-30 18:01:33', '2022-01-30 18:01:33'),
(35, 16, 'painting', 'want a painter', '4', '24', 'download (1).jfif', '2022-01-30 19:33:31', '2022-01-30 19:33:31'),
(36, 16, 'cement', 'portland cement', '1', '2', 'download.jfif', '2022-01-30 19:41:18', '2022-01-30 19:41:18'),
(37, 15, 'welding', 'need welder', '4', '22', 'download.jfif', '2022-01-30 19:53:27', '2022-01-30 19:53:27'),
(38, 15, 'welding', 'hai', '4', '22', 'download (1).jfif', '2022-01-31 00:44:26', '2022-01-31 00:44:26'),
(39, 17, 'welding', 'hai', '4', '22', 'download (1).jfif', '2022-01-31 15:13:10', '2022-01-31 15:13:10'),
(40, 15, 'painting', 'qqqqqqqqqqqqqqqqqqqq', '4', '24', '2.jfif', '2022-02-01 19:11:22', '2022-02-01 19:11:22'),
(41, 15, 'painting', 'helloooo', '4', '24', 'download (2).jfif', '2022-02-01 19:11:56', '2022-02-01 19:11:56'),
(42, 17, 'Test', 'Testing', '4', '24', 'Screenshot_20220206_124404_com.BOM.BOMFinal.jpg', '2022-02-20 18:46:51', '2022-02-20 18:46:51'),
(43, 19, 'light', 'tdsssaa', '3', '42', '2.jfif', '2022-02-21 15:20:29', '2022-02-21 15:20:29'),
(44, 9, 'building 3storey house', 'looking to build a house', '2', '4', '3.jpg', '2022-03-03 00:49:00', '2022-03-03 00:49:00'),
(45, 11, 'civil engineer needed', 'uhhhhhhhhhhh', '2', '4', 'Screenshot 2021-11-25 at 3.18.58 pm.png', '2022-03-30 23:29:23', '2022-03-30 23:29:23'),
(46, 11, 'aaa', 'aaaaa', '2', '5', 'Screenshot 2021-11-25 at 3.18.58 pm.png', '2022-03-30 23:30:07', '2022-03-30 23:30:07'),
(47, 22, 'Hshha', 'Jdbsmamhfmamsn', '2', '4', 'ProBuild Company Profile .pdf', '2023-02-23 18:49:14', '2023-02-23 18:49:14'),
(48, 22, 'Engineering consultant required', 'Building a 3-storey passihaus building\r\nplease contact on 38383894', '1', '2', 'Risk Assessment .pptx', '2023-02-24 02:49:35', '2023-02-24 02:49:35'),
(49, 23, '2 painter needed in Manama', '2 experienced painter required to paint 9x12 wall.\r\n10bd per hour max', '4', '19', 'Talal Haji CV 2.pages', '2023-02-24 02:55:48', '2023-02-24 02:55:48'),
(50, 22, 'Porcelain', 'is important to restrict each chance. The coordination of\r\nthe field\'s experts takes place. This\r\nsheets. A strategy of \"bet everything and', '1', '1', 'BEA107CF-791E-457D-902C-8A6548FB11E2.jpeg', '2023-02-25 01:58:55', '2023-02-25 01:58:55'),
(51, 22, 'Sjjwj', 'Jdksmamzn', '4', '20', 'Book.xlsx', '2023-02-25 01:59:17', '2023-02-25 01:59:17'),
(52, 22, 'Building', 'Building anything for you', '4', '19', '2A0E282D-822D-42B9-894E-2FC6037DFDE0.jpeg', '2023-02-25 02:00:58', '2023-02-25 02:00:58'),
(53, 22, 'civil contrator required for 3storey villa in Manama.', 'Refer a friend to live with X1 for an entry in to a monthly raffle to win £100 cash!\r\n**The monthly raffle will run from February 2023 to August 2023.', '1', '17', '1621541960_Haji gallery.jpeg', '2023-03-03 21:40:47', '2023-03-03 21:40:47'),
(54, 22, 'dcvodsov\'sdvcdscvas', 'dsdvvvvvvvvvvvvvllllllllallalslslslslslslslslslslslslslslslslslslsssssxsxsxscascascadcadfsrvdsvdwrvdawvdecdwcvdawcvfeqscqe', '3', '33', '1621541960_Haji gallery.jpeg', '2023-03-03 21:44:20', '2023-03-03 21:44:20'),
(55, 22, 'Hshshshdhdhe', 'Usbsbbdndndndbdbdbdbdhdhdhdhdhdbdbdjdhdhdhdhdbdhdhdhdhdhdhdhdhdhdhdhd', '3', '27', '0A6B3B17-CE94-425A-946E-138088DCB8EC.png', '2023-03-07 01:25:27', '2023-03-07 01:25:27'),
(56, 25, 'Hdhsh', 'Brhrnrbenrndndnbxnzbzbzbzbsnsnsidj snxnznsnsndjsnxndndn', '3', '28', 'Company-Profile.pdf', '2023-03-09 07:52:42', '2023-03-09 07:52:42'),
(57, 22, 'Jajaj', 'Hello [Name], We\'re so sorry to hear your experience was less than 5-stars and did not meet your expectations. Please help us improve by providing us with more information.', '3', '40', 'AF6FBDD6-1927-47E5-A242-E86F64D620F1.webp', '2023-03-09 19:07:45', '2023-03-09 19:07:45'),
(58, 22, '3 strorey low rise residential', 'I am looking for someone to build my house, i have a ready BOQ and architectural plans', '1', '2', '2EBF8E03-4FD5-4B15-BFFF-BCB14DF2B593.jpeg', '2023-03-09 19:46:13', '2023-03-09 19:46:13'),
(59, 22, 'Construction contractors', 'I want help build my house.\r\nPlease call me on 38383894', '1', '17', 'image.jpg', '2023-03-11 01:46:28', '2023-03-11 01:46:28'),
(60, 27, 'cxzczxc', 'sddsadsa', '1', '2', 'Asset 2.png', '2023-03-26 20:33:30', '2023-03-26 20:33:30'),
(61, 22, 'Durvait sanitary ware', 'Im looking for 47 No. of duravait and my budget is 18bd per pcs.', '3', '39', '00C85BA3-45E9-473C-948D-5B9A0D5394A7.jpeg', '2023-03-27 07:57:25', '2023-03-27 07:57:25'),
(62, 27, 'abc', 'ffggf', '1', '1', 'issac kitchen christmas Breakfast december 22 2022.png', '2023-04-03 18:48:26', '2023-04-03 18:48:26'),
(63, 22, 'Gypsm works', 'Need a construction team to building my gypsm work.\r\nPlease call 38103119', '3', '25', '6F8201DF-E053-4634-95B9-1A0773D6B8F0.png', '2023-05-08 02:11:51', '2023-05-08 02:11:51'),
(64, 22, 'جبس', 'نبحث عن مقاول جبس ، تنفيذ و تصميم في المنامه.', '3', '25', '5F0572E7-7CBA-4423-920B-A76E6891D18F.png', '2023-05-08 02:12:34', '2023-05-08 02:12:34'),
(65, 22, '3 Storey villa Design & Execution needed.', 'Nznznz', '3', '32', 'FE9178F7-C3E0-4AF5-9057-C50032E67DEB.jpeg', '2023-05-10 15:33:07', '2023-05-10 15:33:07'),
(66, 22, 'Building Maintenance Needed', 'Nssnanznz', '3', '32', '4D320527-B937-492D-BEA3-4E5B6032A041.jpeg', '2023-05-10 15:33:54', '2023-05-10 15:33:54'),
(67, 22, '20 Apartment bedroom furniture', 'Nznznz', '3', '32', 'DD2BE1F2-A178-4539-9107-6EF4D0374A54.jpeg', '2023-05-10 15:34:30', '2023-05-10 15:34:30'),
(68, 22, '260 SQM Grey Porcelain Tiles', 'Dndnsj', '3', '32', 'F5B8CFFD-9D30-4D0C-B6E0-46778D01A034.jpeg', '2023-05-10 15:36:02', '2023-05-10 15:36:02'),
(69, 22, 'Architects needed', 'Hshsh', '3', '32', 'BB71224B-8B4C-4931-82FE-673FA4AECD25.jpeg', '2023-05-10 15:36:38', '2023-05-10 15:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `tendor_req_actions`
--

CREATE TABLE `tendor_req_actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tendor_req_action` varchar(255) NOT NULL,
  `tendor_req_id` varchar(255) NOT NULL,
  `vendor_req_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tendor_req_removed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tendor_req_actions`
--

INSERT INTO `tendor_req_actions` (`id`, `tendor_req_action`, `tendor_req_id`, `vendor_req_id`, `created_at`, `updated_at`, `tendor_req_removed`) VALUES
(1, '1', '8', '1', '2021-09-17 00:04:43', '2021-09-17 00:04:43', ''),
(2, '0', '10', '1', '2021-09-17 00:55:22', '2021-10-01 08:33:34', 'removed'),
(3, '1', '1', '1', '2021-09-18 10:40:23', '2021-09-18 10:40:23', ''),
(6, '1', '12', '1', '2021-10-01 08:32:19', '2021-10-01 08:32:19', 'NIL'),
(7, 'removed', '16', '1', '2021-10-04 08:18:34', '2021-10-04 08:18:34', 'removed'),
(8, 'removed', '13', '1', '2021-10-19 06:18:30', '2021-10-19 06:18:30', 'removed'),
(9, 'removed', '21', '52', '2021-12-04 20:22:33', '2021-12-04 20:22:33', 'removed'),
(10, 'removed', '22', '52', '2021-12-08 17:50:05', '2021-12-08 17:50:05', 'removed'),
(11, 'removed', '23', '52', '2021-12-08 20:37:55', '2021-12-08 20:37:55', 'removed'),
(12, 'removed', '35', '64', '2022-02-01 19:05:27', '2022-02-01 19:05:27', 'removed'),
(13, 'removed', '41', '64', '2022-02-01 19:13:32', '2022-02-01 19:13:32', 'removed'),
(14, 'removed', '39', '66', '2022-02-20 14:54:19', '2022-02-20 14:54:19', 'removed'),
(15, 'removed', '24', '52', '2022-02-20 15:11:53', '2022-02-20 15:11:53', 'removed'),
(16, 'removed', '25', '52', '2022-02-20 15:54:42', '2022-02-20 15:54:42', 'removed'),
(17, 'removed', '26', '52', '2022-02-20 15:55:48', '2022-02-20 15:55:48', 'removed'),
(18, 'removed', '43', '74', '2022-02-21 15:31:39', '2022-02-21 15:31:39', 'removed'),
(19, 'removed', '50', '88', '2023-02-25 02:03:45', '2023-02-25 02:03:45', 'removed'),
(20, 'removed', '54', '89', '2023-03-03 22:58:31', '2023-03-03 22:58:31', 'removed'),
(21, 'removed', '65', '119', '2023-05-25 13:22:20', '2023-05-25 13:22:20', 'removed'),
(22, '1', '67', '119', '2023-05-25 13:24:49', '2023-05-25 13:26:33', 'removed'),
(23, '1', '66', '119', '2023-06-01 18:11:49', '2023-06-01 18:14:51', 'removed');

-- --------------------------------------------------------

--
-- Table structure for table `terms_of_policies`
--

CREATE TABLE `terms_of_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_of_policies`
--

INSERT INTO `terms_of_policies` (`id`, `title`, `title_description`, `created_at`, `updated_at`) VALUES
(1, 'Privacy policy here', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen .', '2021-09-11 00:04:13', '2021-09-11 00:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`, `profile`) VALUES
(1, 'Probuild(admin)', 'mnjgroup31@gmail.com', NULL, 1, '$2a$10$IEFUCvoip310EYvk3aWip.npN8PxBSf12D3PLCxL7QQ3sdtIj/cWm', NULL, '2021-09-09 21:08:29', '2022-01-28 17:11:22', 'csfsfseg.png');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `area` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `account_status` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vendor_document` varchar(255) DEFAULT NULL,
  `verified_vendor` varchar(255) DEFAULT NULL,
  `active_count` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `number`, `profile_image`, `lname`, `email`, `area`, `city`, `province`, `country`, `package`, `account_status`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`, `vendor_document`, `verified_vendor`, `active_count`) VALUES
(1, 'Raj', '+107810005812', 'bg3.jpg', 'kumar', 'raj@gmail.com', 'pudhuppai', 'vellakovil', 'Tiruppur', 'Tamilnad', NULL, '1', '$2y$10$8zfvTsj6pVycH5.khYoVPu/gixUvx9.2umPJYdJAO9xiaRBlsNeUu', 0, '3JxA3DMTI9mlDhZca79E5a1eRxUOFCLORD0O1V6j2te720d0cqdibjVeHMFB', '2021-09-09 21:35:41', '2021-09-23 23:03:34', 'Brochure 03.jpg', '1', '0'),
(2, 'Mohan', '07810005847', NULL, 'Kumar', 'mohan@gmail.com', 'pudhuppai', 'vellakovil', 'Tiruppur', 'Tamilnadu', NULL, '1', '$2y$10$d6131aps8rQt2UGx9LxL8uTrxiZDAzbfmWVOPP3seqr/MihgIrSei', 0, NULL, '2021-09-09 21:36:21', '2021-09-09 21:36:21', 'Brochure 03.jpg', '0', ''),
(3, 'Vel', '9899898897', NULL, 'raj', 'velraj@gmail.com', 'pudhuppai', 'Gandhipuram', 'Coimbatore', 'Tamilnadu', NULL, '1', '$2y$10$i.tGvDw.HfxQuRrDnJZfQ.1afzJ3ZUkS/09f43bdbFH0VePTL.b9K', 0, NULL, '2021-09-09 21:36:54', '2021-09-09 21:36:54', 'Brochure 03.jpg', '1', ''),
(4, 'Govind', '07810005847', NULL, 'R', 'Govind@gmail.com', 'pudhuppai', 'vellakovil', 'Tiruppur', 'Tamilnadu', NULL, '1', '$2y$10$Prqpc18QyMzNzTJGlkZx5eBhnECdmCH6/N8A8yPrFHoPs68cXxRxq', 0, NULL, '2021-09-09 21:37:37', '2021-09-09 21:37:37', 'Brochure 03.jpg', '1', ''),
(5, 'Navin', '07810005847', NULL, 'kumar', 'navin@gmail.com', 'pudhuppai', 'vellakovil', 'Tiruppur', 'Tamilnadu', NULL, '1', '$2y$10$RSXfymFGQudzN.KzwlasPOwMkEt5Q21ksYcCHWFZJRQTR//gjLZ2.', 0, NULL, '2021-09-09 21:38:15', '2021-09-09 21:38:15', 'Brochure 03.jpg', '1', ''),
(42, 'Mathan', '8747557765', NULL, 'Kumar', 'bmathan6677@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$yJkPC9x1RN.bN3zD3ZkyEul5/UQZN/O7XLwZOp9mnfaCKhvUCMqWK', 0, NULL, '2021-10-30 21:08:37', '2021-10-30 21:08:37', NULL, NULL, NULL),
(43, 'Mathan', '9775778765', NULL, 'Raj', 'mathanraj@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$7KxV9a5P74i62iX.YDP.DeQEOh80y9uUXxBlGc0IPiX9sp3UktP1C', 0, 'pGUUmW7pZLUx09ODqpoZEVZhHaVHW2gfszh09aJkyFSpdSKUP41ynUX5Mm2P', '2021-10-30 21:09:34', '2021-10-30 21:09:34', NULL, NULL, NULL),
(44, 'Jerry', '34343434', NULL, 'Ken', 'jer@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$T8XTsV8SqUK8fouxK51xUuxVIh5gGwiV0axPTSTUQ9UfF.bNyGeVm', 0, 'chQvo68fmx6ZmOrsb0Bj1t78tMOug90ZcJM04PtFB4aIFFl8GYLt81GYl2oi', '2021-10-30 21:14:44', '2021-10-30 21:14:44', NULL, NULL, NULL),
(45, 'shanth', '9677637197', 'EF7A2840-CCAB-4519-9FC3-19959B7CD9AE_Original.jpg', 'M', 'shanthm0505@gmail.com', 'coimbatore', 'coimbatore', 'coimbatore', 'India', NULL, '1', '$2y$10$HJQCyPzbIk.k6cdyGC2pIOqXXYGEo8zCZotzhFxfGC.KtQZ/gFuiq', 0, 'JwEStZ6JSDCIX2LjzOcb7OaGwA1O4LovsDUJVRrNZpnh6IcgKH4vOJdwI7A6', '2021-11-01 11:35:39', '2021-11-01 12:41:53', NULL, NULL, NULL),
(46, 'Ali', '37303703', NULL, 'Haji', 'haji_11@icloud.com', NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$pOidQb1JgbQm24pfnWhCbeIrgLRQmfkxTOdxdWbyLH2WBBkPnV1vq', 0, 'YYtfiQ2ILwBrKS1Dgr71I7XE3TstBo1OcXyFgdA4bq6FllIsRN1OCQBMCDST', '2021-11-08 12:53:38', '2021-11-25 21:19:56', NULL, NULL, NULL),
(47, 'Faisal', '38382922', NULL, 'Hajiii', 'info@probuild.bh', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$19KzG2o.EJFnQqU.GTWS6ukaqsqi9ZOFz55e1Dwf7cs8Dbazek/2S', 0, 'SquCZPEiXsCPUte5Vke0D463XbpycyOBMFP38tiyzoLxbv1F0gQryekvtstJ', '2021-11-09 21:15:53', '2021-11-09 21:15:53', NULL, NULL, NULL),
(48, 'a', '38383894', NULL, 'h', 'info@probuild.bh', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$DuSK..PAGYklH7lSRH89NeM1IhSZHZVrHG7dsGqhya8OC0SAkaeJO', 0, NULL, '2021-11-25 21:10:23', '2021-11-25 21:10:23', NULL, NULL, NULL),
(49, 'A', '12222222', NULL, 'A', 'haji_11@icloud.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$tbATsu73aDKXiuGhOHKmNOo5H.VQBu6yEy8dk.vjin7r47uoYmfxm', 0, NULL, '2021-11-27 23:26:48', '2021-11-27 23:26:48', NULL, NULL, NULL),
(50, 'husain', '123456789', NULL, 'hh', 'haji_11@icloud.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$KZnhz1kJCTqHTbYLgdXwcuhcJz82mI6tlQihhLMWBtNsDxWMhJbJ6', 0, NULL, '2021-11-27 23:27:52', '2021-11-27 23:27:52', NULL, NULL, NULL),
(51, 'husain', '1111111111111', NULL, 'ali', 'husain1@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$gUmQ29sB7bYRC5j9PlJa2.J01fPg2.2Y9igTHPfLWDI6C0yVXPHpS', 0, 'T3JMsyBUT4494Rp6P1GljpjjvEk1k1ZGM4JK7gci1Bea38anMmadABZiDyAb', '2021-11-27 23:28:50', '2021-11-27 23:28:50', NULL, NULL, NULL),
(52, 'khan', '676869', 'download.jfif', 'king', 'khan@gmail.com', 'manama', 'MANAMA, ALSUQAYYAH 328', 'Bahrain region', 'Bahrain', NULL, '1', '$2y$10$3EZDIC2GIng00RdpW.nMQu5wGOm7SoD.UHlBGYtcNYnIItBA9hwg6', 0, 'XCCRfR7Fht80x2LGMyWs8juxGXR9yphCvJkSOCgu1R48vPlJkpgxBo12y4ja', '2021-11-30 16:40:12', '2022-01-30 17:28:49', NULL, NULL, NULL),
(53, 'Ali', '123456789', NULL, 'Ali', 'hajii@icloud.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$KJhUyPSXGy64OOOzPL/6JuXG9nztcx69YkorqkmExWQbJIUU2MjL6', 0, 'JKThC8e8mKyimQQxJS0byJKfzstoOxZQReUp7tiGBEfwpR7ittdi8q5nWIou', '2021-12-05 15:09:39', '2021-12-05 15:09:39', NULL, NULL, NULL),
(54, 'Virat', '989898989', NULL, 'Kohli', 'virat@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$ZFWjG3oGLSPKRYgv/JMgFeN4xB7KXgfPZpoLh3PO7ycOktgGwND2e', 0, 'aG5lBtPZ3cQfSDZCvo7kXzoq07cU4Yiu2KFLoluxasqueC1DCuIISp74319Z', '2021-12-08 16:09:16', '2021-12-08 16:09:16', NULL, NULL, NULL),
(55, 'F', '33195060', NULL, 'H', 'info@probuild.bh', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$vYx8W3gEfR3rsF2ddzHX8utrvhcY6fSWhYHCQsoqwsL6IkMK58DDe', 0, NULL, '2021-12-28 07:46:56', '2021-12-28 07:46:56', NULL, NULL, NULL),
(56, 'F', '33195050/‘a', NULL, 'H', 'faisalhaji@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$YuFd/6Q4/0Yqft6njD8t9OS8tllJana9zfCc35BdKeeUfruqtAb5a', 0, 'Fu4gcxCADGabh5UiY8jxN6kCV005KR871OjCNDi7HzNYhsqOLfXVWVyXXLXV', '2021-12-28 07:48:53', '2021-12-28 07:48:53', NULL, NULL, NULL),
(57, 'Jinsa', '34212082', NULL, 'Jinsa', 'jinsa@franovia.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$awYn0D0IJRLZ9iZahx87neUmkyJJFXrmBTscP0GpcRBPNEFnuVeJ2', 0, NULL, '2022-01-12 19:54:26', '2022-01-12 19:54:26', NULL, NULL, NULL),
(58, 'james', '19999999', 'D71745DD-BC3D-4DC5-8314-31FF37D3FEB4.jpeg', 'ashton', 'a@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$bkOYm3nIYnSCCalS/6XQlOaZiwQ1NCdq.PnddkSQvEsQz08Etexem', 0, 'SNSUj1cIPIDUczdIsI3bMwD28D6NMydFITD2RHMoVhdWLN8Rj7rlYCeI4uYV', '2022-01-13 21:58:23', '2022-01-28 01:50:27', NULL, NULL, NULL),
(59, 'Arv', '7878787`', NULL, 'Ram', 'arv@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$9PYzQFskcRIYyaecP/2COeA69yKErZKpqijC0wsPSJWMW2m0szBVG', 0, 'v4Lj5r8OqR3yYzxzK7YiN39QywGXT8D0x3fjsJMYN1APsaObbCd0pb7B6PgU', '2022-01-20 12:33:26', '2022-01-20 12:33:26', NULL, NULL, NULL),
(60, 'huauha', '111111111111111', NULL, 'huahah', 'haji_11@icloud.comm', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$nWCtO5MkGiRNc3vQTM9ms.B6/1mdToxf5C0dokVJg3i0YHC.U6ZvC', 0, 'ZVJgyAo0MIy4WDglFDiljjI4M8vDsgcCgO4VAYYNBVOu57kMJKvva5jvjzRk', '2022-01-29 22:46:55', '2022-01-29 22:46:55', NULL, NULL, NULL),
(61, 'kam', '1234566', NULL, 'k', 'kam@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$SsUQfG2uvyAAj3gf5D5foOMRMmJerEAIajtG7Aq1NQkBwJOUTe202', 0, 'qVbANhS2wYgFLjHcAdUojzJLbEsDfUlas0RklO8KKu6nA04an5JEx7Jo3wEH', '2022-01-29 22:53:20', '2022-01-29 22:53:20', NULL, NULL, NULL),
(62, 'Jinsa', '1234579', NULL, 'P', 'jinsa@franovia.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$c5VI/yUWfgBeaJU8dmMOtObiUZpiiVss/dFV0Gzq/uKs4R/2KdDfW', 0, NULL, '2022-01-30 16:03:13', '2022-01-30 16:03:13', NULL, NULL, NULL),
(63, 'kam', '54454', NULL, 'kk', 'kamal@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$QL5vSM34U2Q2D/CocMCV9OxQAG4x4Cy8ZvVIZ7idhyI8X/36qjxSq', 0, '66XE2VQMaefa3Jfr8OCjITeg3VejdlbRPutnBJCr9BdWBz1Qlu3lPGjjOcqM', '2022-01-30 16:04:10', '2022-01-30 16:04:10', NULL, NULL, NULL),
(64, 'Hello', '1234521', NULL, 'Hello', 'hello@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$vwl/NrC/FIRgcDbYYXG98uvEIWpZUS6pp7B8vkgf71u3SHmzWEOji', 0, '1lbrcYQ2bjFtmnfygAiDXMRWD69lnxeZunnhTpUC4uFH1Aa8xAY1EZyXrs2R', '2022-01-30 18:48:17', '2022-01-30 18:48:17', NULL, NULL, NULL),
(65, 'Anu', '123456', NULL, 's', 'anu@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$vggX30s85AGq5aWyzTIoZO/uSHPfjWrXOhchYM81rpLef43x1MFca', 0, '55HsalUUxPzgY48QkVrnArvK3Mam8SqycqFxeFoDF7xSdrvx7VzNBsTUpQVe', '2022-01-30 18:53:35', '2022-01-30 18:53:35', NULL, NULL, NULL),
(66, 'test', '356778', '2.jfif', '1', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$QxpEkcypb29SS2..B1xIZeFaC3Z1QS/HH7UI/SyRhw32mm5Elk5AO', 0, 'Axc8fETth5sOzkTBVhoHDIDF3B10X5W6wdHBYFNLV1ajW6tRfzBIYqjoG0fJ', '2022-01-30 19:44:45', '2022-02-21 15:53:49', NULL, NULL, NULL),
(67, 'Hello', '2677883', NULL, 'hai', 'hello@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$ga1eZUHPQ1pPvK/SGEIt8eby07opeADM0UCDonYr4Dd7c1tLRlx7O', 0, NULL, '2022-01-31 16:53:13', '2022-01-31 16:53:13', NULL, NULL, NULL),
(68, 'Ahmed', '19191900', NULL, 'Ali', 'info@probuild.bh', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$04ZqojkrHBifPvp5Ckrt4.k7Eta0l4iINXpSLMkpG0tpYDzhHAFYC', 0, NULL, '2022-01-31 19:16:27', '2022-01-31 19:16:27', NULL, NULL, NULL),
(69, 'Ahmed', '1111111', NULL, 'Ali', 'info@probuild.bh', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$kEHVo/nqMkeH0hjf8T0LZO2thYzGA9DyVV2E6Duj2nhD27fTUL3MK', 0, NULL, '2022-01-31 19:17:38', '2022-01-31 19:17:38', NULL, NULL, NULL),
(70, 'Ahmed', '1222000', NULL, 'Ali', 'f.a.a.a.haji@edu.salford.ac.uk', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$gNuUwB6OW6oeTU/iR9ktIO56BKxlaFo6SqOuq0JMxcHOIjXC5gRq2', 0, 'REQpXVPLZWIL9AWyladp0rOvrtzcq1a4KMSik40RTZQ11OLhUzTvsBZMq22n', '2022-01-31 19:18:40', '2022-01-31 19:18:40', NULL, NULL, NULL),
(71, 'pro', '1239754', NULL, 'aaaa', 'pro@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$BeFLbUTvu.uaQNWFJY1//upplPsi1UOSrCeRMI2FS9tbWVKD.Bk0C', 0, 'OHfDv9yriAmPhSOFEdXU1mXpxj9OJRXjIFisy0NAKTUhnaezbZtjCXzhrjQE', '2022-02-02 15:19:29', '2022-02-02 15:19:29', NULL, NULL, NULL),
(72, 'Haji', '38383894', NULL, 'Construction', 'haji_13@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$C5LZ0Ef3UJgknZ6QM6IWoeJ.M9zucNW.Ey4qzGfxqW4If/KXOrouS', 0, 'Ji0eTt6Ra0FvoWHSWVZ1lDDTOdZhHPqN5EeVTMgF9ugsTQ4k7a31KlGVPwpL', '2022-02-09 22:38:01', '2022-02-09 22:38:01', NULL, NULL, NULL),
(73, 'Developer', '5478431545', NULL, 'Developer', 'dev@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$LnlKvFauywPfvC9AfeKGWOvoAk6qJt5YLaNCA9aribhn5wryCv/RO', 0, 'XsA0L91XurHAhviDbNZgTR2K20582gv1f6WXXuhY6qf9JNrBm5IwaBOO7m1q', '2022-02-19 21:34:31', '2022-02-19 21:34:31', NULL, NULL, NULL),
(74, 'cherry', '77263663', NULL, 's', 'cherry@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$2z1zQ6RpOb09Pd7GBi6GYu3GZu0oT6gspZ.Jom6f7niSjYIVmCC.a', 0, 'hBv3oZB6vz9EplIMzAYmE9uBBLn9Y9pKNPC6G4ChIsPlfCEX2MNEBGvrVlOO', '2022-02-21 14:41:17', '2022-02-21 14:41:17', NULL, NULL, NULL),
(75, 'hi', '77654', NULL, '123', 'hi123@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$8z1uSOSzwssyEFyXppTnKuuS9bt5JXP386Hz7sgBnAkbN/j42Tjby', 0, 'E2WOtkNY7KgxnYUTNoOMwZ3lqtBmkWa6lYXduuEgRzo9FLePAMZSjZTfFRRj', '2022-02-21 18:26:00', '2022-02-21 18:26:00', NULL, NULL, NULL),
(76, 'Fa', '0000000', NULL, 'Ha', 'faisal@probuild.bh', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$xItXc5rxrl8K3OiMzPJCqeD5beNKKt54x6CSw8Z7l4p8UDGZEvRp2', 0, 'NROxt4QZcjAQHpY3bQa5exMDJf5QxmjAtjweybV8hBoPZh792eGnT99RYRWw', '2022-02-22 21:59:11', '2022-02-22 21:59:11', NULL, NULL, NULL),
(77, 'Sample', '1212', NULL, 'User', 'sample@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$ctR9UfKehbYT1ZVjDnmecO1dT1LfRNBbbgruyPsKj3f9MHQIagMCq', 0, 'IzKRcBjFNsw7TjecolBw62zM9z23tGWeE9QZ6hYJjmNT6b4YaAVV5c5b3Y1P', '2022-02-22 23:07:08', '2022-02-22 23:07:08', NULL, NULL, NULL),
(78, 'Talal', '38103110', NULL, 'Haji', 'talal.haji@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$o2.OIxg6SDHXEDty6K33AOskOAv6qPueRzcOmkJu/C4lWpNMtYXAO', 0, 'tcgvckPsr7C8sKS0IdsK0mdBeHhiuxBW3svWnQfQfiYBOi79BHnmnoykKWr0', '2022-03-02 17:41:58', '2022-03-02 17:41:58', NULL, NULL, NULL),
(79, 'A', 'Aaaa', NULL, 'H', 'info@probuild.bh', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$RbCMG.mhVWya9o2a2MVaTOgtx6jPX9j/YjweUwIFlQAZT8LcCPSNy', 0, NULL, '2022-03-29 21:02:21', '2022-03-29 21:02:21', NULL, NULL, NULL),
(80, 'A', 'Aa', NULL, 'A', 'h@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$WjybtFSld9L7cF.HhFGMpuagf97svLUTNQC921SV3MPtCI6jPdfyu', 0, 'J3d63gGNSHuDfdzYOgbHensiWztgOji3QID97PdvmsowhGWlrV5uxvzt2mcd', '2022-03-29 21:03:40', '2022-03-29 21:03:40', NULL, NULL, NULL),
(81, 'Probuild', '33195050', 'EC54E3A0-11E8-42E2-A1F8-81424CB39F0C.jpeg', 'Construction Platform', 'haji@hotmail.com', 'zinj', 'manama', 'Saar', 'bahrain', NULL, '1', '$2y$10$c0BvVWp1WxHA4G50T7ogh.Y80FIShtKTBZnJ746cq2TNgN6CGd27G', 0, '9yHDDSbl6HkAfZo6YpWje8ZRn6AdVCrG1gotKnyRcGiDl0HNjhIJvrcyfHMj', '2023-02-22 22:43:23', '2023-03-21 18:50:57', NULL, NULL, NULL),
(82, 'ProSmart', '33195060', 'Unknown.png', 'homes', 'g@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$5KGlE.TH8y0tWmIOWcmfVObZiNOqlCpHHE0a.GUCbtPZIrxK06oOa', 0, 'acsuqH7mIOsZP1Y1QsJAom34b6b1TEdhXaq2NSyD6bz1SIgwd0AvYOo839Ib', '2023-02-23 18:15:26', '2023-03-09 08:35:52', NULL, NULL, NULL),
(83, 'Diamond', '331950506', NULL, 'Movers', 'f@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$hQIiyY81Iu0WDNZNPiDcceQJ68YBu5CMjMkKUz8Ox8JC8oE2XGyJO', 0, 'nPAiU00gQuKG39DQib6zIsONO8q7oA8XWgmyMUqfyhdgGA5N4cDD9apJk55w', '2023-02-23 18:23:44', '2023-02-23 18:31:33', NULL, NULL, NULL),
(84, 'Salford', '33195060', NULL, 'Consultants', 's@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$Q43eFQ91tihi9FFQxeOABeXWQQNunZsVnvjo6fQ/d8FCIQPOLAh5e', 0, 'bKNp57TqJw0n48u96i4ZNaehrquP4v3LwFgmHwYDooHiw8Q4tpqXwdpHnabk', '2023-02-23 18:33:01', '2023-02-23 18:33:01', NULL, NULL, NULL),
(85, 'Dheya', '33195060', NULL, 'Tiles', 'd@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$JRBoun5uV8wchI4aQ77zjO4/qVuQVNype7J2Ad74xiSFTR0Zia9Qu', 0, '0kDLpCvHW1SzkidUGK2SQMr8p5E1NYT5jVBDhgBaLaZ3IVtOeSL5FmIdFUPx', '2023-02-24 02:06:31', '2023-02-24 02:06:31', NULL, NULL, NULL),
(86, 'Talal', '33195060', NULL, 'Interiors', 't@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$9WLgvla/13n03YH2CdJiEeeceb34CF5y9h1Vmrpp1irsWYVAdzXWm', 0, 'sUbCSJQjI4TcAG40HyOsunb8RfW1uwA79UV05gunGQfNqxaWbyj2SGOMycBm', '2023-02-24 02:11:51', '2023-02-24 02:11:51', NULL, NULL, NULL),
(87, 'Reema', '33195060', NULL, 'Fit-out', 'r@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$ALfJurWpPEY3ToXwFAGEMe6UBPhe2P6.atoRojEP2t/BQ2BXadFCG', 0, '2PnyLiV0X8m4vUWZFLyOIGyYCj96XH0fRi6lKXpiBi8pPSr2n5A9Kc6PGad4', '2023-02-24 20:59:36', '2023-02-24 20:59:36', NULL, NULL, NULL),
(88, 'Pro 3D', '33195060', NULL, 'Construction', 'b@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$5SJ41KSvKifk1lLtxv9sh.cwSk4kc8pf1X8mqcNHyHIAnTTkYgOjq', 0, 'KmL65PyMJBBHcgasBYgQ8kmpvvfViyJg2ZczinKxtskqvrPK5cnyHXgP5nlT', '2023-02-25 01:44:05', '2023-02-25 01:44:05', NULL, NULL, NULL),
(89, 'Nashid', '33195060', 'Unknown-14', 'gallery', 'gallery@hotmail.com', 'a', 'a', 'a', 'a', NULL, '1', '$2y$10$J92ulakxZrRz59eswpIcTeEwxuGhDY2vEFZn9Eyyx4TvKNzOQNcNm', 0, 'RYtBlOoZiwp9kVDQw1UGTWQh3VE7gjVodPmvI9yBat3fMvFNVUWr11b9BNcA', '2023-02-25 05:40:08', '2023-03-10 09:16:56', NULL, NULL, NULL),
(90, 'Haji', '33195060', NULL, 'Gallery', 'bb@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$Dkc/w7e46YG06wYfTYIyYuy0qWha9P.3QuFvSXJBZ.R8.PLqt5SV.', 0, 'ftdnYw4GSVsvLFYLDT0n1UO58eBV3z8eJcOej6vtcbtFppbSPuhRDdpRqSjn', '2023-02-25 05:56:14', '2023-02-25 05:56:14', NULL, NULL, NULL),
(91, 'aaa', '122222', NULL, 'aa', 'aaa@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$FFwAosmksjs2zLb3CxAJ8.Dx1A8deOZ7huGbafLt089hl2S9l7MVK', 0, '4qCFWu9t8iYfYl2txgplbOms5mN2IDYn4GweslmFzhYeELgpR93NVqhPkSLa', '2023-02-25 06:07:44', '2023-02-25 06:07:44', NULL, NULL, NULL),
(92, 'Recom', '33195060', NULL, 'Solution', 'rs@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$s8cFJ6La0NKRb/NDUEH26exoJNzcoe55tJKVh8MCLGxXdX8BSvw4S', 0, 'K5R6WuhwxRFKx1IFeg7Y0FK0FSso5TARI6fgVOpZBSLQ4KTy911hu98ZFTiv', '2023-02-25 21:32:44', '2023-02-25 21:32:44', NULL, NULL, NULL),
(93, 'R', 'Shhsb', NULL, 'A', 'hh@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$k2Htgavf.tAndRfL3c6rYOywBprjytXmFh8rZNnTEotCKfkeg/aa6', 0, 'RNh3VyJxSEtP5YR2J5Eejw624QlMteTKo1W4bfvjpxToGkYC5VHwUS1Eu9eR', '2023-02-25 21:35:51', '2023-02-25 21:35:51', NULL, NULL, NULL),
(94, 'A', '33195060', NULL, 'H', 'ah@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$TAwAPt.kLwse0a69wflK5u1dlkfSok0AoPXb2.66HWTcVeDa1bWzi', 0, 'fKgBdjacFkhMp55KDMSMSRzxTYo7MsGfzHlNpqTucwxkuG6pjt40r4VnXYmo', '2023-03-03 07:58:10', '2023-03-03 07:58:10', NULL, NULL, NULL),
(95, 'Faisal', '33195060', NULL, 'Haji', 'haji_13@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$r7.C2KQihHvTRu0syJXSKOhF3XN4iPSwqLmnwIGF9gWzgDFmno9WG', 0, NULL, '2023-03-03 10:23:48', '2023-03-03 10:23:48', NULL, NULL, NULL),
(96, 'Faisal', '33195060', NULL, 'Haji', 'info@probuild.bh', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$DkQrY44O.1Vvm23XNqcSfeoYN60RbNhYiIBO3WRlFZjj7Jzhh9tQC', 0, NULL, '2023-03-03 10:24:29', '2023-03-03 10:24:29', NULL, NULL, NULL),
(97, 'Faisal', 'Djejsn', NULL, 'Haji', 'bbb@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$6AK85N7JG.FJBURVZ2wd4uv/imokrhWCSq9gQGAR9b3HJHxE4d00u', 0, 'IG5V0kz4atXDDgXyJ64TXzCC3hzJlocEo5ClNpa7KxRj65aHRiAl5t0Aj6hP', '2023-03-03 10:25:25', '2023-03-03 10:25:25', NULL, NULL, NULL),
(98, 'Reema', '36660969', NULL, 'Arsalan', 'reemaarsalan3@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$WHhKhytnuNUery0cOJ/o9eJ8kdanFBcq0iAeOkoKprH54CuRKpIYC', 0, NULL, '2023-03-03 17:21:34', '2023-03-03 17:21:34', NULL, NULL, NULL),
(99, 'Solar', '33195060', NULL, 'Solution', 'k@hotmail.com', 'l', 'l', 'l', 'l', NULL, '1', '$2y$10$/cvGMTFadRUvkqHEwAeEHO8t/sO44QgIeUzF2U0K6lVUMVGrXTCHG', 0, 'cdcHG7b9Sqg8tFljBwMQcZuE6cPDtkCdyncRZhHL2RftBAcrEK4Oz9AVbkh1', '2023-03-03 21:07:34', '2023-03-10 18:24:52', NULL, NULL, NULL),
(100, 'Shsh', '28282', NULL, 'Shsh', 'b11@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$uCffdZ2lO.1JJlvW0SAhPeRzNZ5Hti0RzT.RQcx2P8rQsK.yJzHx6', 0, 'ueOSuy97tDibDBtRMtYP3u5VzagxAAHqTyi1lnDiaeobSRdrOJUAwPnJu8f0', '2023-03-04 01:21:32', '2023-03-04 01:21:32', NULL, NULL, NULL),
(101, 'Talal', '38103110', NULL, 'Haji', 'talal.haji@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$WViihruK84pFF6IqtKwA6eAqaKMZmk/ggNX1.yMvmFXwABiDJAw1G', 0, NULL, '2023-03-04 13:07:28', '2023-03-04 13:07:28', NULL, NULL, NULL),
(102, 'probuild', '17777777', NULL, 'const.', 'probuild@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$gYd762q9cDuZKWXaqIssDOrrgloBZ8CzKnjCPG/aK..zxUuIG/Abu', 0, 'majtIa8ryq4fgl563i55I5qE8CJuityHZ46RXJ2P9abdB2XfYp9FVjWk3tWU', '2023-03-04 20:18:51', '2023-03-04 20:18:51', NULL, NULL, NULL),
(103, 'Haji', '39633963', NULL, 'Gallery', 'ahaest@hotmail.com', 'Saqaya', 'Manama', 'Manama', 'Bahrain', NULL, '1', '$2y$10$CmJQ.G/4GgACNTXaKAlqqeL8mKsQMkcHkXGQP/eOQltfc8NY./tIa', 0, 'OZeTxIAD8MstW3jceQbMEsc4JLk71ZUx7qekxAPMdeHZmbeT4YBjFlOsyZDg', '2023-03-08 19:09:50', '2023-03-08 19:11:39', NULL, NULL, NULL),
(104, 'Premier', '33195050', 'C03A8567-CC7A-42D4-855B-310658AA7AC4.png', 'Furniture', 'pf@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$0gPtjGM1cCF0gcYHXO7.D.atByLjHNUxmPTwZ/HG/SMzoMmEdllwu', 0, '8n0I7yUpZZ8viXiz5gqV2r2RmILpYxkiyUEfqGfDPTQLc8nopKSCQKTkBguX', '2023-03-09 07:32:41', '2023-03-09 21:32:39', NULL, NULL, NULL),
(105, 'Talal', '38103110', NULL, 'Haji', 'talal.haji@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$TpF0G8zGWxICuOUd7.kyWefsXJAIQ9Y0Q5wHWHJ9O.nudJZykCDCu', 0, NULL, '2023-03-09 18:28:44', '2023-03-09 18:28:44', NULL, NULL, NULL),
(106, 'Amwaj Swimming', '38103110', NULL, 'Pools', 'talalhaji@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$CLdpNu1cz2PZV1l9sFX7n.kXkUNv6w8BDdTBu2yTK4DFHvjsErTPm', 0, 'sITuWM8H1TfSN1Lsfx8vS0w9CyFyq2uJlR70ylQYBd4klTzUeVLj5oROXLjS', '2023-03-09 18:29:40', '2023-03-09 18:43:14', NULL, NULL, NULL),
(107, 'We', '38103110', '5C3C0F78-CCC0-4FA4-9026-9715A760ECB6.jpeg', 'Invision', 'talal@probuild.bh', 'J', 'J', 'J', 'J', NULL, '1', '$2y$10$TuRq8au670wliLRdZV.2ceDEg756GBZ2kpi6LvxnuY3nQ9gmjwv.a', 0, 'PBIb6ZOy6gKNGrCbMHZ7yWetjOxR2xWzkwxgr2eUYiXwo0Lq1BB483Nz6nwg', '2023-03-09 19:15:11', '2023-03-09 19:52:42', NULL, NULL, NULL),
(108, 'Faisal', '38383894', NULL, 'Freelance', 'ff@hotmail.clm', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$DsyTMTLj73OVv5Tus.SCE.F5ZzexEJXL3cB02ypiDIbbSrekenj8a', 0, 'dIJv1Mx2feftbL6R6WIi50xA5e0T9LyFPkgHk9tWzU67otAdPjCWsmsUvO9q', '2023-03-10 03:04:08', '2023-03-10 03:04:08', NULL, NULL, NULL),
(109, 'Creative', '33195060', 'images-4.jpeg', 'Curtains LTD', 'cc@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$3DfEX73vybZTKmcM8zj.hO4KTRpFvsm5JM..W421tvdvoXaWX8HIG', 0, 'o0LrLjKA85iCBk0YwIDkVzxXuyOVi1wzIG25Wd1INYJ8FIinBmcaVKsTv5Va', '2023-03-10 05:15:37', '2023-03-10 05:33:03', NULL, NULL, NULL),
(110, 'Ocean', '38023802', 'F662ACED-3E73-4143-A898-203C2C286E66.jpeg', 'Realestate', 'ahaest@hotmail.com', 'Tubli', 'Manama', 'Manama', 'Bahrain', NULL, '1', '$2y$10$9oaH4rp23dtamGT4NTtDFe/cng2T1tSLHcHHJHXe1DwIIa6wnfwLa', 0, '0P5UdxLDHL0w3Jq5lNYoAlqsf0zvP8mhEO7I1wfXfHQVSvSs4LlrHaDPJEER', '2023-03-11 19:15:29', '2023-03-11 19:32:56', NULL, NULL, NULL),
(111, 'Probuild', 'Uwuwu', NULL, 'Platform', 'p13@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$cPyQUa6Zck.0t3ZDkbUFMu9pcvwLKzW6m3yimMk3X8YFXZbmP4QTO', 0, '2QZnqApOgXH4CAunrbJoyAF2ZZZn6Xqu2PBAbJO6MbpEhPU9MupFtd6XCUMc', '2023-03-14 23:44:17', '2023-03-14 23:44:17', NULL, NULL, NULL),
(112, 'Akshay', '37303006', NULL, 'Manoj', 'akshay@31its.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$GJvCaB6TXy96Ahh1YvyWQ.BVHRkjMEEVz5cKkVSzSPbl6QLiHrB56', 0, 'NqtdtOMhne9FvQlpxZu4hqlNzSYRHQ22bW5zJS584hkqxelqk3dtJTl6uaXG', '2023-03-21 19:55:06', '2023-03-21 19:55:06', NULL, NULL, NULL),
(113, 'Hisham', '33195069', NULL, 'Hisham', 'hash@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$r6RQKu8IceTlJThEwNdyhO1rBt6H0kuZAY1bHdYvkRIUoLjFZdYrC', 0, 'W8olkqQqGv7D0X8Md2zPdodXZlV3KQoLVnzivLZTZb70LlIXAjR3rzW4XZoH', '2023-03-26 23:50:53', '2023-03-26 23:50:53', NULL, NULL, NULL),
(114, 'Haji', '38383894', '1000EB7C-1696-454E-9C39-4D9BCF496132.jpeg', 'Gallery', 'hajigallery@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$DqzmGGUGw9jxDnm4IK39neAXAlQ5fTtlLIkgoIck8ju//El4lq5mq', 0, 'r0VwW8ZxnI6ncVAWnPkfWi48al6W36zFhHFNomdyqgwL6anhbAxOSSMyZ63P', '2023-03-27 07:00:38', '2023-03-27 07:38:46', NULL, NULL, NULL),
(115, 'Husain', '+973 3344 1777', '6E025D28-4C77-4BF4-96AD-95C9E35C02FF.jpeg', 'Almalik', 'almalik@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$dB7axcUCu6rmGHqpvYOZse3jRY4flW4dvyo9uAdp7zKxx9eUy/NDi', 0, 'QhjLsWQ5ljHyWggpvWzmB7R47gpievGDHIQyFKbk5FE5AlHl0nn6MPYBF093', '2023-04-02 21:24:00', '2023-04-02 21:36:22', NULL, NULL, NULL),
(116, 'Akshay', '37303006', NULL, 'Akshay', 'akshay@mnjgroup.net', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$Q0w4XG3HYE3uF4qpXp0Lcuc/quj4q.lehXTK8pOcSS9E57awwS8yu', 0, 'W7xBQxm2EpU9sO7TzFlSEucuxWlT6p6cUPK6FjygPx7OYBncnkjPedRctf3q', '2023-04-03 19:24:15', '2023-04-03 19:24:15', NULL, NULL, NULL),
(117, 'Aswar', '39933474', 'EA7AE42C-BDC2-4769-BA76-0F2F6E16668E.jpeg', 'Abuhassan', 'Aswar.abuhaasan7@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$2qME7jXLlSc4vV6FQv60we18csTBDtSvGRYfYG.kG4GYIc1WLmLQy', 0, 'm2IyzSUZdDCUSSGS5AeQeanqqKSLQhKCyTo8PXpOBNgkyU73qyU18MY4T0cy', '2023-04-03 22:36:33', '2023-04-03 22:50:29', NULL, NULL, NULL),
(118, 'Diqat', '39191108', 'CBBE3A33-2C23-4044-AED5-A251663E2D77.jpeg', 'Al enjaz', 'Diqat_al_enjaz@outlook.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$xja0/XboF.eswiq7wlG64eEeVcVjafv4TSgD.nC8M8MZh4S0DaNnm', 0, 'dbWSb9SsYcIzVX3Elj6lGGchPP2i9GxM9p4sAUrgac4ExIdmta2AaSrbhQkq', '2023-04-04 18:44:26', '2023-04-04 18:57:39', NULL, NULL, NULL),
(119, 'Steel', '38383894', 'F231BC78-2A13-4B53-B1DE-4766C49FC7F7.jpeg', 'Masters', 'steelmasters@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$uzxVN43Q3mnY6RFKOd8UhecnNKdkLPPUsWIz7vciqqbUUozWmwtvi', 0, 'K48waSHdHJTaYL66zkC9mVrQ6tT9imRUekvtGuxeK8j7IuGgLRgd7P54VlMM', '2023-04-20 22:28:11', '2023-06-12 01:21:02', NULL, NULL, NULL),
(120, 'Alfajer', '35012348', 'A9D362AF-518E-4C27-AF26-9A6CF705B150.jpeg', 'Glass', 'alfajarglass@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$J01LNuM8BzwHc68m.waz3.QPuU/mx030p8UsA59BhUlFTVZCncPiO', 0, 'oMjRTmhG4b3ynCFWUFpUkSR0BSO9zCCEmNXlVFTEbDg1DCncY9H4gf0jo4la', '2023-05-07 20:18:29', '2023-05-07 20:26:24', NULL, NULL, NULL),
(121, 'Alkawthar', '00000000', NULL, 'River', 'river.alkawathar@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$BGgDaSTuM0IcQ5C9414SdeFvd9i4C1pqWNr7N7A5JJLww/tFMiN5K', 0, NULL, '2023-05-07 23:57:21', '2023-05-07 23:57:21', NULL, NULL, NULL),
(122, 'Alkawthar', '00000000', '0E27AA86-AE48-4D42-BAEC-CAAC47DECA76.jpeg', 'River', 'river.alkawthar@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$rNzOvPaVBd1H1ICzz059FuJq3me3XoVGwwoetAuV0NIyBimEXXZ.y', 0, 'TaY9H4xmlr6BhrFmI7FCbhOBvWqFajvFcJ5Nl21bXC4IA1sKJVCYOoIbAEjL', '2023-05-07 23:59:02', '2023-05-08 00:20:26', NULL, NULL, NULL),
(123, 'Sentry', '00000000', '2775B6EC-3A4E-4FF6-A674-862E644197E0.jpeg', 'Solutions', 'info@sentrysolutions.net', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$DabGVT1m4jPsDjWdCcF8EOFizD/Sw1iJxMpzb8fB6YL6qLEZJBXqK', 0, '3Angvezr7Uq3TsSNmUFO81czWDzYsYDIGnXdgdNp22ozQS9HpPBmXy1h23kY', '2023-05-08 16:38:07', '2023-05-08 17:02:42', NULL, NULL, NULL),
(124, 'Crystal Square', '00000000', '35C988D5-5A3A-4E84-9B65-367D15B83335.jpeg', 'Glass & Aluminum', 'projects@crystalsquare.org', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$eNb/PZbQh3MCeZjGX8iEW.UnGn.7nqLZYdTqTIuEC.ytr4qPX5b/e', 0, 'UECGzp35RZFmsTmkxiEbdyZsM6XqV77VA5HBJujDGwq3oi7btBjNlONkKlxs', '2023-05-08 18:19:37', '2023-05-08 19:15:53', NULL, NULL, NULL),
(125, 'Akshay', '37303006', NULL, 'Akshay', 'akshay@31its.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$mYjD1mbjornKqBsuG5x0VeC.TOalU9DdTN87EpOSSu7GvTFYas8TS', 0, NULL, '2023-05-08 18:55:31', '2023-05-08 18:55:31', NULL, NULL, NULL),
(126, 'manoj', '37303006', NULL, 'p', 'manoj@31its.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$8Qbc8Sik6zPocvIavPDn/umfUDbZ7HKiKJWfNmWHfWK9XqQ0PYC7O', 0, '2Oq6CYWCqf6ZTrQ0nmhhpuLup9jFD9jc9hXmmqXXUKVasb4aQCHNpAe29ExC', '2023-05-08 19:00:36', '2023-05-08 19:00:36', NULL, NULL, NULL),
(127, 'Crystal Square', '0000000', 'C37E07FC-8F6B-4C47-8FD0-58FACA21E9CF.jpeg', 'MEP', '1projects@crystalsquare.org', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$gRJGx02Hq0adY1BKsCmcyOdbEOsnq5E8A9XP14u.MhsQ.WOifQAX2', 0, 'uJtpGpie6MmH7jBibuQZqksKbjHFCPhD94AiAPH5w9fUSpxDQMgp6WwSICxM', '2023-05-08 19:21:14', '2023-05-08 19:25:01', NULL, NULL, NULL),
(128, 'Maysilun', '00000000', '7A1290CD-3A3B-413F-8A06-782C3A198AFA.jpeg', 'Contracting', 'maysilun@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$klcEyCFyDJbDHESY5dpHK.LCEv5FvOzj2c3olhgzcuOUvigxN4qKO', 0, 'd1sa6HgjLv8F4smUhwdyZuCixAz57XWtEx6SfNcZNIn7oB1JfL8HNhWbinXT', '2023-05-08 20:02:20', '2023-05-08 20:02:45', NULL, NULL, NULL),
(129, 'Nahr', '000000', 'E4F618F8-EDC1-44A7-991F-01695E2DC37D.jpeg', 'Elfounoun Furniture', 'nahrelfounoun@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$bscC5SOHq/WCJ2enwhh9o.6xtHZrLcAPy0y2sxUN8hKHywsocI8qq', 0, 'mBSdcwaknevrbW51dylI63K0312XdiDOngfJVoUpMCtryyX5ZI1FMRmjvPOI', '2023-05-08 22:10:11', '2023-05-08 22:32:29', NULL, NULL, NULL),
(130, 'Bianca', '00000000', '0E4FE9E3-8B95-413B-8EDB-491B0B38ED3B.jpeg', 'Construction', 'binaca@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$KucRcAq1SIUvOSCxfrqoJeGsXBX8bhNTgU/.VUhIICjX6VqmdVK96', 0, 'Epo5VcWQWWBF2X1bscW84BzgikZzOVYyEGw2shP9F3Jdv92xK4iD9w3KMCuo', '2023-05-09 00:45:45', '2023-05-09 00:46:17', NULL, NULL, NULL),
(131, 'Telal', '00000000', 'ABD1DA3D-B73D-45D6-B4FA-7EBC35FF0AB4.jpeg', 'Contracting', 'telal@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$TQJWwb6uDRy91RxZT8pIaua32l.hk20pArgz287JKH7vFnzQZsM5e', 0, 'RgGEkiPYdyLgmPoZ53Urh8OmOOC90j6Sspb9zeQSZr211t82jlPZkKjF0uzK', '2023-05-09 01:26:13', '2023-05-09 01:28:12', NULL, NULL, NULL),
(132, 'Creators', '000000', 'CB809751-AA87-4DA7-8363-2ABD921498EE.jpeg', 'Interiors', 'Kawtherinterior@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$MjRO/6w/vuumGCLf2eM1buRqdyoGyKoPH7IFAdivUm6zli5JcN1cm', 0, 'SWUEjxtrwKC9Ok260GQv0VnmQJVodRyG65sb4dsf1Wteb48KN05UpoEDOgLI', '2023-05-14 17:38:58', '2023-05-14 17:43:24', NULL, NULL, NULL),
(133, 'Aldinjil', '000000', '1C5CDA2C-CCFA-4EBE-9D31-8EB1DA0A5070.jpeg', 'construction', 'Alqadiri86@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$FpILUbzi9IRnuT07cqNyxeH0ffPf.p2hJV9dCvKNx8AsdLLqQ4dwO', 0, 'tpvyooTEzDlqfclSL3XEH4ERLzuHnca5Hhoh45QM1phD71p6gZDT8wSceBRM', '2023-05-14 23:49:59', '2023-05-14 23:51:52', NULL, NULL, NULL),
(134, 'Sultan', '00000000', '7D1D2483-5CFD-49BB-AA5C-DB98E0015753.jpeg', 'Gardens', 'sultangardens@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$EEB065.GkEfFjEEGKNrTAuSIe52PvxkmPZZzSrN9ezrBjDFZoW2rC', 0, 'BaR5szd9NSg3aSw8JbXF8AlP1evnbfmi27FFxUE0Q2QzZxy8rr4xeylBDYyn', '2023-05-17 18:46:01', '2023-05-17 18:46:21', NULL, NULL, NULL),
(135, 'Repairco', '00000000', '78712223-D422-4F08-83DC-94C34FF7F214.jpeg', 'Technology Group', 'repairco@hotmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$3XcF.4D78J/jiIQprI0R2.VtfIjPEBtIlk.52EIyWhSNcm4RBsI/O', 0, 'J0MPs8MGCuzydWgPuswhPGzp5WFIZYEU1MDaivEjVTkAxLBphWvwyRv9Gk9f', '2023-05-17 20:23:08', '2023-05-17 20:30:10', NULL, NULL, NULL),
(136, 'Francis Mark', '37111125', NULL, 'Duria', 'markinz1523@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', '$2y$10$180zIqaxWAKYTvnqeMxfe.LFlpnRjeQHt0GJM1ra9vRanJBo1uV2G', 0, NULL, '2023-05-17 20:53:41', '2023-05-17 20:53:41', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `date`, `ip`, `created_at`, `updated_at`) VALUES
(1, '2021-09-20 00:00:00', '2f8748abdbb42c16f5d62251f8adea1f65443b6ed0ec063b49be332a6c8cc200892828deee3bbc44bffff040677446dfe0fe5d9dc5a2150d342dd93456b54e22', '2021-09-20 10:45:15', '2021-09-20 10:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(100) NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `business_id` int(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `business_id`, `created_at`, `updated_at`) VALUES
(23, 1, 1, '2021-10-16 02:08:01', '2021-10-16 02:08:01'),
(27, 1, 3, '2021-10-28 05:59:42', '2021-10-28 05:59:42'),
(33, 9, 2, '2021-11-03 08:37:29', '2021-11-03 08:37:29'),
(34, 9, 3, '2021-11-03 08:37:39', '2021-11-03 08:37:39'),
(35, 9, 4, '2021-11-03 08:37:43', '2021-11-03 08:37:43'),
(37, 9, 5, '2021-11-03 08:37:57', '2021-11-03 08:37:57'),
(38, 9, 6, '2021-11-03 08:38:04', '2021-11-03 08:38:04'),
(43, 8, 4, '2021-12-07 16:34:55', '2021-12-07 16:34:55'),
(47, 8, 3, '2021-12-09 00:24:27', '2021-12-09 00:24:27'),
(48, 8, 29, '2021-12-09 01:58:30', '2021-12-09 01:58:30'),
(50, 14, 5, '2022-01-29 22:44:41', '2022-01-29 22:44:41'),
(51, 14, 4, '2022-01-29 22:44:54', '2022-01-29 22:44:54'),
(52, 15, 33, '2022-01-30 19:55:23', '2022-01-30 19:55:23'),
(53, 17, 38, '2022-02-20 18:42:10', '2022-02-20 18:42:10'),
(55, 20, 3, '2022-02-25 23:34:22', '2022-02-25 23:34:22'),
(56, 20, 4, '2022-02-25 23:34:23', '2022-02-25 23:34:23'),
(57, 20, 5, '2022-02-25 23:34:25', '2022-02-25 23:34:25'),
(58, 20, 6, '2022-02-25 23:34:26', '2022-02-25 23:34:26'),
(59, 20, 30, '2022-02-25 23:34:30', '2022-02-25 23:34:30'),
(60, 20, 36, '2022-02-25 23:34:34', '2022-02-25 23:34:34'),
(61, 20, 40, '2022-02-25 23:34:36', '2022-02-25 23:34:36'),
(64, 11, 5, '2022-03-30 23:30:59', '2022-03-30 23:30:59'),
(66, 11, 4, '2022-03-30 23:31:10', '2022-03-30 23:31:10'),
(67, 22, 42, '2023-02-23 18:50:25', '2023-02-23 18:50:25'),
(69, 22, 44, '2023-02-24 23:51:40', '2023-02-24 23:51:40'),
(70, 22, 45, '2023-02-24 23:51:41', '2023-02-24 23:51:41'),
(71, 22, 46, '2023-02-24 23:51:43', '2023-02-24 23:51:43'),
(72, 22, 49, '2023-03-06 03:14:42', '2023-03-06 03:14:42'),
(73, 22, 56, '2023-03-06 03:14:45', '2023-03-06 03:14:45'),
(75, 25, 43, '2023-03-09 07:52:55', '2023-03-09 07:52:55'),
(76, 25, 44, '2023-03-09 07:52:55', '2023-03-09 07:52:55'),
(77, 25, 45, '2023-03-09 07:52:56', '2023-03-09 07:52:56'),
(79, 22, 83, '2023-06-12 02:02:21', '2023-06-12 02:02:21'),
(82, 22, 83, '2023-06-12 02:02:21', '2023-06-12 02:02:21'),
(83, 22, 83, '2023-06-12 02:02:21', '2023-06-12 02:02:21'),
(84, 22, 84, '2023-06-12 02:02:23', '2023-06-12 02:02:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_uses`
--
ALTER TABLE `about_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_images`
--
ALTER TABLE `add_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_image_nexts`
--
ALTER TABLE `add_image_nexts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bg_images`
--
ALTER TABLE `bg_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `businesses_vendor_id_foreign` (`vendor_id`);

--
-- Indexes for table `business_analytics`
--
ALTER TABLE `business_analytics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_informations`
--
ALTER TABLE `business_informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `business_informations_business_id_foreign` (`business_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galllery_images`
--
ALTER TABLE `galllery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galllery_images_business_id_foreign` (`business_id`);

--
-- Indexes for table `home_categories`
--
ALTER TABLE `home_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_vendor`
--
ALTER TABLE `package_vendor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_vendor_vendor_id_foreign` (`vendor_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_business_id_foreign` (`business_id`);

--
-- Indexes for table `requestfqs`
--
ALTER TABLE `requestfqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_calls`
--
ALTER TABLE `request_calls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_call_actions`
--
ALTER TABLE `request_call_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_business_id_foreign` (`business_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tendor_requests`
--
ALTER TABLE `tendor_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tendor_requests_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `tendor_req_actions`
--
ALTER TABLE `tendor_req_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_of_policies`
--
ALTER TABLE `terms_of_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_uses`
--
ALTER TABLE `about_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_images`
--
ALTER TABLE `add_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_image_nexts`
--
ALTER TABLE `add_image_nexts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `analytics`
--
ALTER TABLE `analytics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bg_images`
--
ALTER TABLE `bg_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `business_analytics`
--
ALTER TABLE `business_analytics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1133;

--
-- AUTO_INCREMENT for table `business_informations`
--
ALTER TABLE `business_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galllery_images`
--
ALTER TABLE `galllery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `home_categories`
--
ALTER TABLE `home_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `package_vendor`
--
ALTER TABLE `package_vendor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `requestfqs`
--
ALTER TABLE `requestfqs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `request_calls`
--
ALTER TABLE `request_calls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `request_call_actions`
--
ALTER TABLE `request_call_actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tendor_requests`
--
ALTER TABLE `tendor_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tendor_req_actions`
--
ALTER TABLE `tendor_req_actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `terms_of_policies`
--
ALTER TABLE `terms_of_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `businesses`
--
ALTER TABLE `businesses`
  ADD CONSTRAINT `businesses_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `business_informations`
--
ALTER TABLE `business_informations`
  ADD CONSTRAINT `business_informations_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `galllery_images`
--
ALTER TABLE `galllery_images`
  ADD CONSTRAINT `galllery_images_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `package_vendor`
--
ALTER TABLE `package_vendor`
  ADD CONSTRAINT `package_vendor_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tendor_requests`
--
ALTER TABLE `tendor_requests`
  ADD CONSTRAINT `tendor_requests_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
