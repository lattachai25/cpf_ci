-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2021 at 09:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpfaustr_ci`
--
CREATE DATABASE IF NOT EXISTS `cpfaustr_ci` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `cpfaustr_ci`;

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `history_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `history_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_th` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protion_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protion_th` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `story_en`, `story_th`, `history_en`, `history_th`, `name_en`, `name_th`, `protion_en`, `protion_th`, `content_en`, `content_th`, `images`, `status`) VALUES
(1, 'ABOUT', '<p>	ABOUT</p>', '<p>\n	ABOUT</p>\n', NULL, NULL, NULL, '<p>\n	Leading Agro-Industrial and Food Conglomerate CPF operates integrated agro-industrial and food business, including livestock and aquaculture such as swine, broiler, layer, duck, shrimp and fish. The businesses are categorized into 3 categories,</p>\n', '<p>\n	Leading Agro-Industrial and Food Conglomerate CPF operates integrated agro-industrial and food business, including livestock and aquaculture such as swine, broiler, layer, duck, shrimp and fish. The businesses are categorized into 3 categories,</p>\n', '<p>\n	Our architects and designers constantly and carefully monitor the environment, they accept and develop changes, research fashion and architectural, as well as sociological, changes and transform them into unique design.</p>\n', '<p>\n	Our architects and designers constantly and carefully monitor the environment, they accept and develop changes, research fashion and architectural, as well as sociological, changes and transform them into unique design. TH</p>\n', 'MR.CPF AUSTRALIA', 'MR.CPF AUSTRALIA', 'CEO', 'CEO', '<p>\n	Charoen Pokphand Foods Public Company Limited (the &quot;Company&quot;) believes that the conduct of businesses in a fair, honest, and transparent manner, with responsibility towards all groups of stakeholders, will essentially support the sustainable growth of its businesses. The Company has signed the Declaration of Intent to join Thailand&#39;s PrivateSector Collective Action Coalition Against Corruption, in order to express its commitment to prevent and counter all forms of corruption, and to cooperate with the public sector, civil society, mass media, and international organizations in establishing clean business practice standards.</p>\n', '<p>\n	Charoen Pokphand Foods Public Company Limited (the &quot;Company&quot;) believes that the conduct of businesses in a fair, honest, and transparent manner, with responsibility towards all groups of stakeholders, will essentially support the sustainable growth of its businesses. The Company has signed the Declaration of Intent to join Thailand&#39;s PrivateSector Collective Action Coalition Against Corruption, in order to express its commitment to prevent and counter all forms of corruption, and to cooperate with the public sector, civil society, mass media, and international organizations in establishing clean business practice standards.</p>\n', '2fc95-03.jpg', '1'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MR.CPF AUSTRALIA', 'MR.CPF AUSTRALIA ', 'CFO', 'CFO', '<p>\n	Charoen Pokphand Foods Public Company Limited (the &quot;Company&quot;) believes that the conduct of businesses in a fair, honest, and transparent manner, with responsibility towards all groups of stakeholders, will essentially support the sustainable growth of its businesses. The Company has signed the Declaration of Intent to join Thailand&#39;s PrivateSector Collective Action Coalition Against Corruption, in order to express its commitment to prevent and counter all forms of corruption, and to cooperate with the public sector, civil society, mass media, and international organizations in establishing clean business practice standards.</p>\n', '<p>\n	Charoen Pokphand Foods Public Company Limited (the &quot;Company&quot;) believes that the conduct of businesses in a fair, honest, and transparent manner, with responsibility towards all groups of stakeholders, will essentially support the sustainable growth of its businesses. The Company has signed the Declaration of Intent to join Thailand&#39;s PrivateSector Collective Action Coalition Against Corruption, in order to express its commitment to prevent and counter all forms of corruption, and to cooperate with the public sector, civil society, mass media, and international organizations in establishing clean business practice standards.</p>\n', '00855-01.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `apples`
--

CREATE TABLE `apples` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '3',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '10',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apples`
--

INSERT INTO `apples` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(2, NULL, NULL, NULL, NULL, NULL, NULL, '8', '3', '10', 'apple EN', 'apple TH', 'APPLE EN', 'APPLE TH', '<p>\n	apple EN</p>\n', '<p>\n	apple TH</p>\n', '', '91192-apple_image1.png', '72c5f-1.jpg', '', '', '', '95698-aus-product-list-for-website.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `apple_image`
--

CREATE TABLE `apple_image` (
  `apple_image_id` int(20) NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apple_products`
--

CREATE TABLE `apple_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 3,
  `id_subcat` int(10) NOT NULL DEFAULT 10,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `apple_products`
--

INSERT INTO `apple_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 8, 3, 10, '', '', '', '', NULL, NULL, 'a71a8-72c5f-1.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `beefs`
--

CREATE TABLE `beefs` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '2',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beefs`
--

INSERT INTO `beefs` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(41, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2', 'NEWS BEEF PRODUCT1', 'NEWS BEEF PRODUCT1', 'NEWS BEEF PRODUCT', 'NEWS BEEF PRODUCT', '<p>\n	NEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCT</p>\n', '<p>\n	NEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCT</p>\n', 'edeeb-4.jpg', '', '', '', '', '', NULL, '1'),
(42, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', 'NEWS BEEF PRODUCT', 'NEWS BEEF PRODUCT', 'NEWS BEEF PRODUCT', 'NEWS BEEF PRODUCT', '<p>\n	NEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCT</p>\n', '<p>\n	NEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCT</p>\n', '13b50-3.jpg', '', '', '', '', '', 'files_upload/Beef/6f6d7ea73f8b34354a3ecc69f872abfd.pdf', '1'),
(43, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2', 'NEWS BEEF PRODUCTNEWS BEEF PRODUCT', 'NEWS BEEF PRODUCTNEWS BEEF PRODUCT', 'NEWS BEEF PRODUCT', 'NEWS BEEF PRODUCT', '<p>\n	NEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCT</p>\n', '<p>\n	NEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCT</p>\n', '85a0f-2.jpg', '', '', '', '', '', 'files_upload/Beef/f0f6cc51dacebe556699ccb45e2d43a8.pdf', '1'),
(44, 'NEWS BEEF PRODUCT', NULL, NULL, NULL, NULL, NULL, '1', '1', '2', 'NEWS BEEF PRODUCT', 'NEWS BEEF PRODUCT', 'NEWS BEEF PRODUCTNEWS BEEF PRODUCT', 'NEWS BEEF PRODUCTNEWS BEEF PRODUCT', '<p>\n	NEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCT</p>\n', '<p>\n	NEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCT</p>\n', 'efc76-2.jpg', '', '', '', '', '', NULL, '1'),
(45, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '3', 'AWARD-WINNING AUSTRALIAN LAMB', NULL, 'TASTE OF THE DIFFERENCE.', NULL, '<p>\n	NEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCT</p>\n', '<p>\n	NEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCTNEWS BEEF PRODUCT</p>\n', '62334-1.jpg', 'd5118-2.jpg', '9db8c-3.jpg', 'a28d6-4.jpg', 'a8371-5.jpg', 'f3c52-6.jpg', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `beef_products`
--

CREATE TABLE `beef_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) DEFAULT 1,
  `id_subcat` int(10) DEFAULT 2,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beef_products`
--

INSERT INTO `beef_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 1, 1, 2, '', '', '', '', NULL, NULL, '7db7a-1.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `beetroots`
--

CREATE TABLE `beetroots` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '4',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '16',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beetroots`
--

INSERT INTO `beetroots` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', 'beetroot', 'beetroot', 'beetrootbeetroot', 'beetrootbeetroot', 'beetrootbeetroot', 'beetrootbeetroot', NULL, '', '', '', '', '', '', '1', NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '1', '4', '16', 'beetroot', 'beetroot', 'beetrootbeetroot', 'beetrootbeetroot', 'beetrootbeetroot', 'beetrootbeetroot', NULL, '', '', '', '', '', '', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `beetroot_products`
--

CREATE TABLE `beetroot_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 4,
  `id_subcat` int(10) NOT NULL DEFAULT 16,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beetroot_products`
--

INSERT INTO `beetroot_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 7, 4, 16, '', '', '', '', NULL, NULL, 'cbd0b-6.jpg', '', '', '', '', '', '9c95c-6.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `best__sellers__homes`
--

CREATE TABLE `best__sellers__homes` (
  `id` int(20) UNSIGNED NOT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `best__sellers__homes`
--

INSERT INTO `best__sellers__homes` (`id`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_product1`, `status`) VALUES
(1, 'Harvey Beef', 'Harvey Beef', 'Harvey Beef', 'Harvey Beef', NULL, NULL, NULL, NULL),
(2, 'Harvey Beef', 'Harvey Beef', 'Harvey Beef', 'Harvey Beef', NULL, NULL, NULL, NULL),
(3, 'Harvey Beef', 'Harvey Beef', 'Harvey Beef', 'Harvey Beef', NULL, NULL, NULL, NULL),
(4, 'Harvey Beef', 'Harvey Beef', 'Harvey Beef', 'Harvey Beef', NULL, NULL, 'b4550-012-harveybeef-170220-jwyld.jpg', NULL),
(5, 'Harvey Beef', 'Harvey Beef', 'Harvey Beef', 'Harvey Beef', NULL, NULL, '5c88b-005-harveybeef-170220-jwyld-copy.jpg', NULL),
(6, 'Harvey Beef', 'Harvey Beef', 'Harvey Beef', 'Harvey Beef', NULL, NULL, '0642f-4.jpg', NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, '2e2ca-5.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '6',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '23',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '6', '1', '1', 'beverage', 'beverage', 'beverage', 'beverage', '<p>\n	beveragebeverage</p>\n', '<p>\n	beveragebeverage</p>\n', '1f495-020-hb-eyefillet-recipe-170904-jwyld.jpg', '', '', '', '', '', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `beverage_products`
--

CREATE TABLE `beverage_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 6,
  `id_subcat` int(10) NOT NULL DEFAULT 23,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beverage_products`
--

INSERT INTO `beverage_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 8, 6, 23, '', '', '', '', NULL, NULL, '20a40-con02.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id_brand` int(20) UNSIGNED NOT NULL,
  `name_brand_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_brand_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id_brand`, `name_brand_th`, `name_brand_en`, `images`, `status`) VALUES
(1, 'WOODWARD', 'WOODWARD', '919da-logoangus.jpg', '1'),
(2, 'CARRARA', 'CARRARA', NULL, '1'),
(3, 'KINGFISH', 'KINGFISH', NULL, '1'),
(4, 'JADE TIGER ABALONE', 'JADE TIGER ABALONE', NULL, '1'),
(5, 'CEPHALOPOD', 'CEPHALOPOD', NULL, '1'),
(6, 'APPELLATION OYSTERS', 'APPELLATION OYSTERS', NULL, '1'),
(7, 'BAY SEA FARMS', 'BAY SEA FARMS', 'eb8a0-brownes_dairy_logo.jpg', '1'),
(8, 'BRAVO', 'BRAVO', 'e5eaa-bravo_logo.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `butter`
--

CREATE TABLE `butter` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '5',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '21',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `butter`
--

INSERT INTO `butter` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', 'butter', 'butter', 'butter', 'butter', '<p>\n	butterbutterbutter</p>\n', '<p>\n	butterbutterbutter</p>\n', '03b5c-1.jpg', NULL, '', '', '', '', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `butter_products`
--

CREATE TABLE `butter_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 5,
  `id_subcat` int(10) NOT NULL DEFAULT 21,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `butter_products`
--

INSERT INTO `butter_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 8, 5, 21, '', '', '', '', NULL, NULL, 'bbce1-dairy3.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `carrots`
--

CREATE TABLE `carrots` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '4',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '15',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carrots`
--

INSERT INTO `carrots` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_product1`, `attachment`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', 'carrot', 'carrot', 'vcarrotcarrot', 'carrot', 'carrotcarrotcarrot', 'carrotcarrotcarrot', NULL, 'files_upload/Carrot/1dba3025b159cd9354da65e2d0436a31.jpg|files_upload/Carrot/94c7bb58efc3b337800875b5d382a072.jpg', '', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carrot_products`
--

CREATE TABLE `carrot_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 4,
  `id_subcat` int(10) NOT NULL DEFAULT 15,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carrot_products`
--

INSERT INTO `carrot_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 4, 4, 15, '', '', '', '', NULL, NULL, 'eb4c2-7.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(20) UNSIGNED NOT NULL,
  `name_categories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_cat`, `name_categories`, `created_at`, `updated_at`) VALUES
(1, 'MEAT', NULL, NULL),
(2, 'SEAFOOD', NULL, NULL),
(3, 'FRUIT', NULL, NULL),
(4, 'VEGETABLE', NULL, NULL),
(5, 'DAIRY', NULL, NULL),
(6, 'OTHERS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cephalopods`
--

CREATE TABLE `cephalopods` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '2',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '8',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cephalopods`
--

INSERT INTO `cephalopods` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '8', 'cephalopod', 'cephalopod', 'cephalopod', 'cephalopod', 'cephalopodcephalopodcephalopodcephalopod', 'cephalopodcephalopodcephalopodcephalopod', NULL, '', '', '', '', '', 'files_upload/Cephalopod/b597460c506e8e35fb0cc1c1905dd3bc.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cephalopod_products`
--

CREATE TABLE `cephalopod_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 2,
  `id_subcat` int(10) NOT NULL DEFAULT 8,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cephalopod_products`
--

INSERT INTO `cephalopod_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 4, 2, 8, '', '', '', '', NULL, NULL, 'b6902-cephalopod1.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cheese`
--

CREATE TABLE `cheese` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '5',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '20',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cheese`
--

INSERT INTO `cheese` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '7', '5', '20', 'cheese', 'cheese', 'cheese', 'cheese', '<p>\n	cheesecheesecheesecheesecheese</p>\n', '<p>\n	cheesecheesecheesecheesecheese</p>\n', '76575-4.jpg', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cheeses`
--

CREATE TABLE `cheeses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cheeses`
--

INSERT INTO `cheeses` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `brade`, `category`, `sub_category`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_product1`, `attachment`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', 'cheese', 'cheese', 'cheese', 'cheese', 'cheesecheese', 'cheesecheese', NULL, 'files_upload/Cheese/2bd2e3373dce441c6c3bfadd1daa953e.jpg|files_upload/Cheese/14d9e8007c9b41f57891c48e07c23f57.jpg', '', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cheese_products`
--

CREATE TABLE `cheese_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 5,
  `id_subcat` int(10) NOT NULL DEFAULT 20,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cheese_products`
--

INSERT INTO `cheese_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 7, 5, 20, '', '', '', '', NULL, NULL, '5e2b9-dairy2.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cherries`
--

CREATE TABLE `cherries` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '3',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '11',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cherries`
--

INSERT INTO `cherries` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', 'cherries', 'cherries', 'cherries cherries', 'cherries cherries', 'cherriescherriescherriescherries', 'cherriescherriescherries', NULL, '', '', '', '', '', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `cherries_products`
--

CREATE TABLE `cherries_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 3,
  `id_subcat` int(10) NOT NULL DEFAULT 11,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cherries_products`
--

INSERT INTO `cherries_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 4, 3, 11, '', '', '', '', NULL, NULL, 'ec6ca-cherries1.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `citrus_products`
--

CREATE TABLE `citrus_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 3,
  `id_subcat` int(10) NOT NULL DEFAULT 13,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `citrus_products`
--

INSERT INTO `citrus_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 7, 3, 13, '', '', '', '', NULL, NULL, '6b7f1-oing.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `confectionaries`
--

CREATE TABLE `confectionaries` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '6',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '24',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `confectionaries`
--

INSERT INTO `confectionaries` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '6', '24', 'confectionary', 'confectionary', 'confectionary', 'confectionary', '<p>\n	confectionaryconfectionary</p>\n', '<p>\n	confectionaryconfectionary</p>\n', '64bde-039-hb-eyefillet-recipe-170904-jwyld.jpg', '', '', '', '', '', NULL, '1'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '1', '6', '24', 'confectionary', 'confectionary', 'confectionary', 'confectionary', '<p>\n	confectionary</p>\n', '<p>\n	confectionary</p>\n', 'ba52a-012-harveybeef-170220-jwyld.jpg', '', '', '', '', '', 'files_upload/Confectionary/2aac0e27587428fe2aafe882c5974a85.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `confectionary_products`
--

CREATE TABLE `confectionary_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 6,
  `id_subcat` int(10) NOT NULL DEFAULT 24,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `confectionary_products`
--

INSERT INTO `confectionary_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 6, 6, 24, '', '', '', '', NULL, NULL, 'd0013-cony01.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faceboot_link_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faceboot_link_th` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_link_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_link_th` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_link_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_link_th` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_link_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_link_th` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email_link1_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email_link1_th` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email_link2_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email_link2_th` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_map` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `text_title_en`, `text_title_th`, `address_en`, `address_th`, `faceboot_link_en`, `faceboot_link_th`, `line_link_en`, `line_link_th`, `tel_link_en`, `tel_link_th`, `mobile_link_en`, `mobile_link_th`, `Email_link1_en`, `Email_link1_th`, `Email_link2_en`, `Email_link2_th`, `link_map`) VALUES
(1, 'Contact Us', 'Contact Us', 'Contact Us', NULL, NULL, NULL, '<p>\n	Thanks for your interest in Product CPF AUSTRALIA we&#39;ll get back with you very soon.</p>\n', '<p>\n	Thanks for your interest in Product CPF AUSTRALIA we&#39;ll get back with you very soon. TH</p>\n', '<p>\n	13, Soi Aree Samphan 2, Soi Phahonyothin 5 (Ratchahru) Phahonyothin Road, Phaya Thai Subdistrict, Phaya Thai District, Bangkok 10400</p>\n', '<p>\n	13, Soi Aree Samphan 2, Soi Phahonyothin 5 (Ratchahru) Phahonyothin Road, Phaya Thai Subdistrict, Phaya Thai District, Bangkok 10400 TH</p>\n', 'FACEBOOK.COM', 'FACEBOOK.COM', 'CPFAUSTRALIA', 'CPFAUSTRALIA', '02 - 123 - 45678', '02 - 123 - 45678', '08 - 123 - 45678', '08 - 123 - 45678', 'INFO@CPFAUSTRALIA.COM', 'INFO@CPFAUSTRALIA.COM', 'SALE@CPFAUSTRALIA.COM', 'SALE@CPFAUSTRALIA.COM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d551.7295618675165!2d100.53282601891937!3d13.727481637763042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f2c645ba09b%3A0xb9f3861b315a58ca!2sCPF%20Thailand!5e1!3m2!1sth!2sth!4v162711755');

-- --------------------------------------------------------

--
-- Table structure for table `dairies`
--

CREATE TABLE `dairies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dairies`
--

INSERT INTO `dairies` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `brade`, `category`, `sub_category`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '5', '5', '20', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.', 'This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.', 'files_upload/Dairy/357a6fdf7642bf815a88822c447d9dc4.jpg', '', '', '', '', '', '', '1'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '1', '5', '19', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.', 'This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.', 'files_upload/Dairy/c3c617a9b80b3ae1ebd868b0017cc349.jpg', '', '', '', '', '', '', '1'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, '5', '5', '20', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.', 'This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.', 'files_upload/Dairy/f7b6bc883be91f56eb248d72de4d2847.jpg', '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dairy`
--

CREATE TABLE `dairy` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '2',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dairy`
--

INSERT INTO `dairy` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '5', '1', '2', 'dairy', 'dairy', 'dairy', 'dairy', '<p>\n	dairydairydairydairydairy</p>\n', '<p>\n	dairydairydairydairydairy</p>\n', 'd8e67-01.jpg', '', '', '', '', '', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `dairy_passion`
--

CREATE TABLE `dairy_passion` (
  `id` int(10) NOT NULL,
  `content_th` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dairy_passion`
--

INSERT INTO `dairy_passion` (`id`, `content_th`, `content_en`, `images_show`) VALUES
(1, '', '0', 'd92a1-dairy1.jpg'),
(2, '', '0', '8562e-dairy2.jpg'),
(3, '', '0', 'c189a-dairy3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `distributionhomes`
--

CREATE TABLE `distributionhomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enjoy__your__homes`
--

CREATE TABLE `enjoy__your__homes` (
  `id` int(20) UNSIGNED NOT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enjoy__your__homes`
--

INSERT INTO `enjoy__your__homes` (`id`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_product1`, `status`, `day`) VALUES
(1, 'Harvey Beef is proud to offer our premium 100 Day', 'Harvey Beef is proud to offer our premium 100 Day', NULL, NULL, '<p>\n	Since 1919 Harvey Beef has fostered long lasting relationships with Western Australia&rsquo;s best beef producers. From the pristine and rugged Kimberley and Pilbara regions where the cattle feed on the natural grasses of the rangelands, to the green grass pastures of the Great Southern and South Western regions, Harvey Beef and our producers place the highest priority on animal welfare and food safety.</p>\n', '<p>\n	Since 1919 Harvey Beef has fostered long lasting relationships with Western Australia&rsquo;s best beef producers. From the pristine and rugged Kimberley and Pilbara regions where the cattle feed on the natural grasses of the rangelands, to the green grass pastures of the Great Southern and South Western regions, Harvey Beef and our producers place the highest priority on animal welfare and food safety.</p>\n', '1d261-025-hb-eyefillet-recipe-170904-jwyld.jpg', '0', NULL),
(2, 'Harvey Beef is proud to offer our premium 100 Day', 'Harvey Beef is proud to offer our premium 100 Day', NULL, NULL, '<p>\n	Since 1919 Harvey Beef has fostered long lasting relationships with Western Australia&rsquo;s best beef producers. From the pristine and rugged Kimberley and Pilbara regions where the cattle feed on the natural grasses of the rangelands, to the green grass pastures of the Great Southern and South Western regions, Harvey Beef and our producers place the highest priority on animal welfare and food safety.</p>\n', '<p>\n	Since 1919 Harvey Beef has fostered long lasting relationships with Western Australia&rsquo;s best beef producers. From the pristine and rugged Kimberley and Pilbara regions where the cattle feed on the natural grasses of the rangelands, to the green grass pastures of the Great Southern and South Western regions, Harvey Beef and our producers place the highest priority on animal welfare and food safety.</p>\n', 'a3b13-3001658_harvey-beef_we-are-100_social-media_portrait.jpg', '1', NULL),
(3, 'Harvey Beef is proud to offer our premium 100 Day', 'Harvey Beef is proud to offer our premium 100 Day', NULL, NULL, '<p>\n	Since 1919 Harvey Beef has fostered long lasting relationships with Western Australia&rsquo;s best beef producers. From the pristine and rugged Kimberley and Pilbara regions where the cattle feed on the natural grasses of the rangelands, to the green grass pastures of the Great Southern and South Western regions, Harvey Beef and our producers place the highest priority on animal welfare and food safety.</p>\n', '<p>\n	Since 1919 Harvey Beef has fostered long lasting relationships with Western Australia&rsquo;s best beef producers. From the pristine and rugged Kimberley and Pilbara regions where the cattle feed on the natural grasses of the rangelands, to the green grass pastures of the Great Southern and South Western regions, Harvey Beef and our producers place the highest priority on animal welfare and food safety.</p>\n', '5408f-032-harveybeef-170220-jwyld.jpg', '1', NULL),
(4, 'Harvey Beef is proud to offer our premium 100 Day', 'Harvey Beef is proud to offer our premium 100 Day', NULL, NULL, '<p>\n	Since 1919 Harvey Beef has fostered long lasting relationships with Western Australia&rsquo;s best beef producers. From the pristine and rugged Kimberley and Pilbara regions where the cattle feed on the natural grasses of the rangelands, to the green grass pastures of the Great Southern and South Western regions, Harvey Beef and our producers place the highest priority on animal welfare and food safety.</p>\n', '<p>\n	Since 1919 Harvey Beef has fostered long lasting relationships with Western Australia&rsquo;s best beef producers. From the pristine and rugged Kimberley and Pilbara regions where the cattle feed on the natural grasses of the rangelands, to the green grass pastures of the Great Southern and South Western regions, Harvey Beef and our producers place the highest priority on animal welfare and food safety.</p>\n', 'e3fdd-006-harveybeef-170220-jwyld.jpg', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fish`
--

CREATE TABLE `fish` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '2',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fish`
--

INSERT INTO `fish` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '3', '1', '2', 'fish', 'ปลา', 'fish', 'ปลา', '<p>\n	fishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfish</p>\n', '<p>\n	fishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfishfish</p>\n', '05ef5-1.jpg', '', '', '', '', '', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `fish_products`
--

CREATE TABLE `fish_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 2,
  `id_subcat` int(10) NOT NULL DEFAULT 6,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fish_products`
--

INSERT INTO `fish_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 4, 2, 6, '', '', '', '', NULL, NULL, '66f43-5.png', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(20) NOT NULL,
  `name_brand_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_brand_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `address_en` text COLLATE utf8_unicode_ci NOT NULL,
  `address_th` text COLLATE utf8_unicode_ci NOT NULL,
  `link_map` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `name_brand_en`, `name_brand_th`, `address_en`, `address_th`, `link_map`, `tel`) VALUES
(1, 'CPF AUSTRALIA', 'CPF AUSTRALIA', '<p>\n	No. 13, Soi Aree Samphan 2, Soi Phahonyothin 5 (Ratchahru) Phahonyothin Road,<br />\n	Phaya Thai Subdistrict, Phaya Thai District, Bangkok 10400</p>\n', '<p>\n	เลขที่ 13 ซ.อารีย์สัมพันธ์ 2 ซ.พหลโยธิน 5 (ราชหรุ) ถ.พหลโยธิน แขวงพญาไท<br />\n	เขตพญาไท กรุงเทพมหานคร 10400</p>\n', 'https://www.google.com/maps/place/CPF+Thailand/@13.727812,100.532951,219m/data=!3m1!1e3!4m5!3m4!1s0x0:0xb9f3861b315a58ca!8m2!3d13.7278342!4d100.5329428?hl=en-US', '02 - 123 - 45678');

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', '10', 'APPLE', 'APPLE Since 1919 Harvey Beef has fostered long lasting relationships with Western Australia', 'APPLE Since 1919 Harvey Beef has fostered long lasting relationships with Western Australia', 'APPLE', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', 'a216f-purple1.jpg', '', '', '', '', '', NULL, '1'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '5', '3', '10', 'APPLE Since 1919 Harvey Beef h', 'APPLE Since 1919 Harvey Beef h', 'APPLE Since 1919 Harvey Beef h', 'APPLE Since 1919 Harvey Beef h', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', 'c6467-purple2.jpg', '', '', '', '', '', NULL, '1'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, '5', '3', '12', 'This article is about the food. For the UK band', 'This article is about the food. For the UK band', 'This article is about the food. For the UK band', 'This article is about the food. For the UK band', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', '9b69c-purple1.jpg', '', '', '', '', '', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `fruit_passion`
--

CREATE TABLE `fruit_passion` (
  `id` int(10) NOT NULL,
  `content_th` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fruit_passion`
--

INSERT INTO `fruit_passion` (`id`, `content_th`, `content_en`, `images_show`) VALUES
(1, '', '', '3fd83-stonefruit.jpg'),
(2, '', '', 'd382f-cherries1.jpg'),
(3, '', '', 'bf865-oing.jpg'),
(4, '', '', '568bb-91192-apple_image1.png');

-- --------------------------------------------------------

--
-- Table structure for table `healthhomes`
--

CREATE TABLE `healthhomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lambs`
--

CREATE TABLE `lambs` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '3',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lambs`
--

INSERT INTO `lambs` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(2, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '3', 'TASTE OF THE DIFFERENCE', NULL, 'WOODWARD', 'WOODWARD TH', '<p>\n	LAMB</p>\n', '<p>\n	LAMBLAMBLAMBLAMB</p>\n', '940f6-4.jpg', '', '', '', '', '', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `lamb_products`
--

CREATE TABLE `lamb_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) DEFAULT 1,
  `id_subcat` int(10) DEFAULT 3,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lamb_products`
--

INSERT INTO `lamb_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 7, 1, 3, '', '', '', '', NULL, NULL, 'dc37e-2.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mains`
--

CREATE TABLE `mains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meat`
--

CREATE TABLE `meat` (
  `id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meats`
--

CREATE TABLE `meats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '2',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meats`
--

INSERT INTO `meats` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, 'Meat', 'Meat', 'Meat', 'Meat', 'Meat', 'Meat', '1', '1', '2', 'THE MAGIC MARBLE', 'THE MAGIC MARBLE', 'DECADENCE HAS ARRIVED', 'DECADENCE HAS ARRIVED', '<p>\n	combination of nature and experience. Only Carrara 640 Wagyu is created to honour the magic marble. Displaying an intricate, feathery pattern and distinguished as the world&rsquo;s finest.</p>\n', '<p>\n	combination of nature and experience. Only Carrara 640 Wagyu is created to honour the magic marble. Displaying an intricate, feathery pattern and distinguished as the world&rsquo;s finest.</p>\n', '280d9-76d7c0780ceb8fbf964c102ebc16d75f.jpg', '', '', '', '', '', '85032-1628920205.pdf', '1'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2', 'THE MAGIC MARBLE 2', 'THE MAGIC MARBLE 2', 'DECADENCE HAS ARRIVED 2', 'DECADENCE HAS ARRIVED 2', '<p>\n	Carrara 640 is a perfect combination of nature and experience. Only Carrara 640 Wagyu is created to honour the magic marble. Displaying an intricate, feathery pattern and distinguished as the world&rsquo;s finest.</p>\n', '<p>\n	Carrara 640 is a perfect combination of nature and experience. Only Carrara 640 Wagyu is created to honour the magic marble. Displaying an intricate, feathery pattern and distinguished as the world&rsquo;s finest.</p>\n', 'dfe73-5a2b8fee6a50b5594ecc5041eed53650.jpg', '', '', '', '', '', '208ca-44a2e0804995faf8d2e3b084a1e2db1d.pdf', '1'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2', 'THE MAGIC MARBLE', 'THE MAGIC MARBLE', 'DECADENCE HAS ARRIVED', 'DECADENCE HAS ARRIVED', '<p>\n	Carrara 640 is a perfect combination of nature and experience. Only Carrara 640 Wagyu is created to honour the magic marble. Displaying an intricate, feathery pattern and distinguished as the world&rsquo;s finest.</p>\n', '<p>\n	Carrara 640 is a perfect combination of nature and experience. Only Carrara 640 Wagyu is created to honour the magic marble. Displaying an intricate, feathery pattern and distinguished as the world&rsquo;s finest.</p>\n', 'b75cc-3f2dff7862a70f97a59a1fa02c3ec110.jpg', '', '', '', '', '', '0532a-9d740bd0f36aaa312c8d504e28c42163.pdf', '1'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2', 'THE MAGIC MARBLE', 'THE MAGIC MARBLE TH', 'DECADENCE HAS ARRIVED', 'DECADENCE HAS ARRIVED TH', '<p>\n	Carrara 640 is a perfect combination of nature and experience. Only Carrara 640 Wagyu is created to honour the magic marble. Displaying an intricate, feathery pattern and distinguished as the world&rsquo;s finest.</p>\n', '<p>\n	TH Carrara 640 is a perfect combination of nature and experience. Only Carrara 640 Wagyu is created to honour the magic marble. Displaying an intricate, feathery pattern and distinguished as the world&rsquo;s finest.</p>\n', '85817-2d13d901966a8eaa7f9c943eba6a540b.jpg', '', '', '', '', '', 'bcc5d-1e0feeaff84a19bf3936e693311fa66d.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `meat_images`
--

CREATE TABLE `meat_images` (
  `id` int(20) NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meat_passion`
--

CREATE TABLE `meat_passion` (
  `id` int(11) NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `content_th` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meat_passion`
--

INSERT INTO `meat_passion` (`id`, `content_en`, `content_th`, `images_show`) VALUES
(1, '', '', '32506-4.jpg'),
(2, '', '', '95e42-4de81d9105c85bca6e6e4666e6dd536a.jpg'),
(3, '', '', 'f1825-3.jpg'),
(4, '', '', '4e50a-2.jpg'),
(5, '', '', '84b99-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_07_20_053601_create_mains_table', 1),
(4, '2021_07_21_043225_create_meats_table', 1),
(5, '2021_07_21_043408_create_beefs_table', 1),
(6, '2021_07_21_043431_create_lambs_table', 1),
(7, '2021_07_21_043452_create_venisons_table', 1),
(8, '2021_07_21_043514_create_turkeys_table', 1),
(9, '2021_07_21_050022_create_seafoods_table', 1),
(10, '2021_07_21_050033_create_fish_table', 1),
(11, '2021_07_21_050042_create_shells_table', 1),
(12, '2021_07_21_050052_create_cephalopods_table', 1),
(13, '2021_07_21_050102_create_shrimps_table', 1),
(14, '2021_07_21_050112_create_fruits_table', 1),
(15, '2021_07_21_050122_create_apples_table', 1),
(16, '2021_07_21_050131_create_cherries_table', 1),
(17, '2021_07_21_050141_create_stonefruits_table', 1),
(18, '2021_07_21_050151_create_navelcitruses_table', 1),
(19, '2021_07_21_050202_create_strawberries_table', 1),
(20, '2021_07_21_050216_create_vegetables_table', 1),
(21, '2021_07_21_050225_create_carrots_table', 1),
(22, '2021_07_21_050235_create_beetroots_table', 1),
(23, '2021_07_21_050245_create_whiteonions_table', 1),
(24, '2021_07_21_050310_create_sweetpotatoes_table', 1),
(25, '2021_07_21_050322_create_dairies_table', 1),
(26, '2021_07_21_050330_create_yogurts_table', 1),
(27, '2021_07_21_050339_create_cheeses_table', 1),
(28, '2021_07_21_050350_create_butter_table', 1),
(29, '2021_07_21_050402_create_others_table', 1),
(30, '2021_07_21_050411_create_processedfoods_table', 1),
(31, '2021_07_21_050422_create_beverages_table', 1),
(32, '2021_07_21_050431_create_confectionaries_table', 1),
(33, '2021_07_21_050454_create_contacts_table', 1),
(34, '2021_07_24_084717_create_abouts_table', 1),
(35, '2021_07_26_052230_create_brands_table', 1),
(36, '2021_07_26_052419_create_categories_table', 1),
(37, '2021_07_26_052440_create_sub_categories_table', 1),
(38, '2021_08_05_023733_create_poultries_table', 1),
(188, '2014_10_12_000000_create_users_table', 1),
(189, '2014_10_12_100000_create_password_resets_table', 1),
(190, '2021_07_20_053601_create_mains_table', 1),
(191, '2021_07_21_043225_create_meats_table', 1),
(192, '2021_07_21_043346_create_poultries_table', 1),
(193, '2021_07_21_043408_create_beefs_table', 1),
(194, '2021_07_21_043431_create_lambs_table', 1),
(195, '2021_07_21_043452_create_venisons_table', 1),
(196, '2021_07_21_043514_create_turkeys_table', 1),
(197, '2021_07_21_050022_create_seafoods_table', 1),
(198, '2021_07_21_050033_create_fish_table', 1),
(199, '2021_07_21_050042_create_shells_table', 1),
(200, '2021_07_21_050052_create_cephalopods_table', 1),
(201, '2021_07_21_050102_create_shrimps_table', 1),
(202, '2021_07_21_050112_create_fruits_table', 1),
(203, '2021_07_21_050122_create_apples_table', 1),
(204, '2021_07_21_050131_create_cherries_table', 1),
(205, '2021_07_21_050141_create_stonefruits_table', 1),
(206, '2021_07_21_050151_create_navelcitruses_table', 1),
(207, '2021_07_21_050202_create_strawberries_table', 1),
(208, '2021_07_21_050216_create_vegetables_table', 1),
(209, '2021_07_21_050225_create_carrots_table', 1),
(210, '2021_07_21_050235_create_beetroots_table', 1),
(211, '2021_07_21_050245_create_whiteonions_table', 1),
(212, '2021_07_21_050310_create_sweetpotatoes_table', 1),
(213, '2021_07_21_050322_create_dairies_table', 1),
(214, '2021_07_21_050330_create_yogurts_table', 1),
(215, '2021_07_21_050339_create_cheeses_table', 1),
(216, '2021_07_21_050350_create_butter_table', 1),
(217, '2021_07_21_050402_create_others_table', 1),
(218, '2021_07_21_050411_create_processedfoods_table', 1),
(219, '2021_07_21_050422_create_beverages_table', 1),
(220, '2021_07_21_050431_create_confectionaries_table', 1),
(222, '2021_07_24_084717_create_abouts_table', 1),
(224, '2021_07_26_052419_create_categories_table', 1),
(225, '2021_07_26_052440_create_sub_categories_table', 1),
(226, '2021_07_21_050454_create_contacts_table', 2),
(227, '2021_07_26_052230_create_brands_table', 3),
(266, '2014_10_12_000000_create_users_table', 1),
(267, '2014_10_12_100000_create_password_resets_table', 1),
(268, '2021_07_20_053601_create_mains_table', 1),
(269, '2021_07_21_043225_create_meats_table', 1),
(270, '2021_07_21_043346_create_poultries_table', 1),
(271, '2021_07_21_043408_create_beefs_table', 1),
(272, '2021_07_21_043431_create_lambs_table', 1),
(273, '2021_07_21_043452_create_venisons_table', 1),
(274, '2021_07_21_043514_create_turkeys_table', 1),
(275, '2021_07_21_050022_create_seafoods_table', 1),
(276, '2021_07_21_050033_create_fish_table', 1),
(277, '2021_07_21_050042_create_shells_table', 1),
(278, '2021_07_21_050052_create_cephalopods_table', 1),
(279, '2021_07_21_050102_create_shrimps_table', 1),
(280, '2021_07_21_050112_create_fruits_table', 1),
(281, '2021_07_21_050122_create_apples_table', 1),
(282, '2021_07_21_050131_create_cherries_table', 1),
(283, '2021_07_21_050141_create_stonefruits_table', 1),
(284, '2021_07_21_050151_create_navelcitruses_table', 1),
(285, '2021_07_21_050202_create_strawberries_table', 1),
(286, '2021_07_21_050216_create_vegetables_table', 1),
(287, '2021_07_21_050225_create_carrots_table', 1),
(288, '2021_07_21_050235_create_beetroots_table', 1),
(289, '2021_07_21_050245_create_whiteonions_table', 1),
(290, '2021_07_21_050310_create_sweetpotatoes_table', 1),
(291, '2021_07_21_050322_create_dairies_table', 1),
(292, '2021_07_21_050330_create_yogurts_table', 1),
(293, '2021_07_21_050339_create_cheeses_table', 1),
(294, '2021_07_21_050350_create_butter_table', 1),
(295, '2021_07_21_050402_create_others_table', 1),
(296, '2021_07_21_050411_create_processedfoods_table', 1),
(297, '2021_07_21_050422_create_beverages_table', 1),
(298, '2021_07_21_050431_create_confectionaries_table', 1),
(299, '2021_07_21_050454_create_contacts_table', 1),
(300, '2021_07_24_084717_create_abouts_table', 1),
(301, '2021_07_26_052230_create_brands_table', 1),
(302, '2021_07_26_052419_create_categories_table', 1),
(303, '2021_07_26_052440_create_sub_categories_table', 1),
(304, '2021_08_28_033459_create_slidehomes_table', 4),
(305, '2021_08_28_033527_create_popularhomes_table', 4),
(306, '2021_08_28_033549_create_ourotherhomes_table', 4),
(307, '2021_08_28_033607_create_healthhomes_table', 4),
(308, '2021_08_28_033620_create_distributionhomes_table', 4),
(315, '2021_09_24_065517_create_what__the__best__homes_table', 5),
(316, '2021_09_24_065701_create_best__sellers__homes_table', 5),
(317, '2021_09_24_065716_create_enjoy__your__homes_table', 5),
(318, '2021_09_24_065729_create_show__now__homes_table', 5),
(319, '2021_09_24_065742_create_valuce__partners_homes_table', 5),
(320, '2021_09_24_065753_create_our__other_products__homes_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `navelcitruses`
--

CREATE TABLE `navelcitruses` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '3',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '13',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navelcitruses`
--

INSERT INTO `navelcitruses` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '13', 'navelcitrus', 'navelcitrus', 'navelcitrus', 'navelcitrus', 'navelcitrusnavelcitrus', 'navelcitrusnavelcitrus', NULL, '', '', '', '', '', '', '1'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', '13', 'navelcitrus', 'navelcitrus', 'navelcitrus', 'navelcitrus', 'navelcitrusnavelcitrusnavelcitrus', 'navelcitrusnavelcitrusnavelcitrus', NULL, '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `onion_products`
--

CREATE TABLE `onion_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 4,
  `id_subcat` int(10) NOT NULL DEFAULT 17,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `onion_products`
--

INSERT INTO `onion_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 5, 4, 17, '', '', '', '', NULL, NULL, '82014-3.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '6',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '4', '6', '22', 'ทดสอบการซื้อขาย ทดสอบการซื้อขาย', 'ทดสอบการซื้อขาย ทดสอบการซื้อขาย', 'ทดสอบการซื้อขาย ทดสอบการซื้อขาย', 'ทดสอบการซื้อขาย ทดสอบการซื้อขาย', '<p>\n	ทดสอบการซื้อขาย ทดสอบการซื้อขาย</p>\n', '<p>\n	ทดสอบการซื้อขาย ทดสอบการซื้อขาย</p>\n', '82bd0-4.jpg', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `others_passion`
--

CREATE TABLE `others_passion` (
  `id` int(10) NOT NULL,
  `content_th` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `others_passion`
--

INSERT INTO `others_passion` (`id`, `content_th`, `content_en`, `images_show`) VALUES
(1, '', '', '0df7d-d8e67-01.jpg'),
(2, '', '', 'f09b8-con02.jpg'),
(3, '', '', '3c061-con03.jpg'),
(4, '', '', '5257d-con02.jpg'),
(5, '', '', 'bf85f-con03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ourotherhomes`
--

CREATE TABLE `ourotherhomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our__other_products__homes`
--

CREATE TABLE `our__other_products__homes` (
  `id` int(20) UNSIGNED NOT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our__other_products__homes`
--

INSERT INTO `our__other_products__homes` (`id`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_product1`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '7e5e5-7.jpg', NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '14e0c-5.jpg', NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, '243bd-4.jpg', NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, 'd999a-3.jpg', NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, '7bc60-2.jpg', NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 'dc031-1.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popularhomes`
--

CREATE TABLE `popularhomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `potatoes_products`
--

CREATE TABLE `potatoes_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 4,
  `id_subcat` int(10) NOT NULL DEFAULT 18,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `potatoes_products`
--

INSERT INTO `potatoes_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 2, 4, 18, '', '', '', '', NULL, NULL, '4eeed-2.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `poultries`
--

CREATE TABLE `poultries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poultries`
--

INSERT INTO `poultries` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `brade`, `category`, `sub_category`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(4, 'POULTRY', 'POULTRY', 'POULTRY', NULL, NULL, NULL, '1', '1', '1', 'POULTRY', 'POULTRY', 'POULTRY', 'POULTRY POULTRY', 'POULTRYPOULTRYPOULTRYPOULTRY', 'POULTRYPOULTRYPOULTRYPOULTRY', 'files_upload/Poultry/39d0a8908fbe6c18039ea8227f827023.jpg', '', '', '', '', '', 'files_upload/Poultry/394868456436dbe743e4380554c0493a.pdf', '1'),
(5, 'POULTRY', 'POULTRY', 'POULTRYPOULTRYPOULTRYPOULTRY', NULL, NULL, NULL, '1', '1', '1', 'POULTRY', 'POULTRY', 'POULTRY', 'POULTRY', 'POULTRYPOULTRYPOULTRY', 'POULTRYPOULTRYPOULTRY', 'files_upload/Poultry/7fc346397dc202259f27edc7d2adec88.jpg', '', '', '', '', '', 'files_upload/Poultry/c0a5a65e55124eae3388586316a25f57.pdf', '1'),
(6, 'CARRARA', NULL, NULL, NULL, NULL, NULL, '2', '1', '1', 'CARRARA', 'CARRARA', 'CARRARA', 'CARRARA', 'CARRARACARRARACARRARACARRARACARRARACARRARACARRARA', 'CARRARACARRARACARRARACARRARACARRARACARRARACARRARA', 'files_upload/Poultry/fb4ab556bc42d6f0ee0f9e24ec4d1af0.jpg', '', '', '', '', '', 'files_upload/Poultry/5e15fb59326e7a9c3d6558ca74621683.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `processedfoods`
--

CREATE TABLE `processedfoods` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '6',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '22',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `processedfoods`
--

INSERT INTO `processedfoods` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '4', '1', '1', 'Processedfood', 'Processedfood', 'Processedfood', 'Processedfood', '<p>\n	ProcessedfoodProcessedfood</p>\n', '<p>\n	ProcessedfoodProcessedfood</p>\n', 'b4bf5-01.jpg', '', '', '', '', '', NULL, '1'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '5', '1', '1', 'Processedfood', 'Processedfood', 'Processedfood', 'Processedfood', '<p>\n	ProcessedfoodProcessedfood</p>\n', '<p>\n	ProcessedfoodProcessedfood</p>\n', '52582-2.jpg', '', '', '', '', '', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `processed_products`
--

CREATE TABLE `processed_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 6,
  `id_subcat` int(10) NOT NULL DEFAULT 22,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `processed_products`
--

INSERT INTO `processed_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 7, 6, 22, '', '', '', '', NULL, NULL, 'd214c-con03.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `seafoods`
--

CREATE TABLE `seafoods` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seafoods`
--

INSERT INTO `seafoods` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(2, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2', '6', 'This article is about the food. For the UK band, see Seafood (band)', 'This article is about the food. For the UK band, see Seafood (band)', 'This article is about the food. For the UK band, see Seafood (band)', 'This article is about the food. For the UK band, see Seafood (band)', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', '32de1-9.jpg', '', '', '', '', '', NULL, '1'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, '3', '2', '6', 'This article is about the food. For the UK band, see Seafood (band)', 'This article is about the food. For the UK band, see Seafood (band)', 'This article is about the food. For the UK band, see Seafood (band)', 'This article is about the food. For the UK band, see Seafood (band)', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', '90765-10.jpg', '', '', '', '', '', NULL, '1'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, '3', '2', '7', 'This article is about the food. For the UK band, see Seafood (band)', 'This article is about the food. For the UK band, see Seafood (band)', 'This article is about the food. For the UK band, see Seafood (band)', 'This article is about the food. For the UK band, see Seafood (band)', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', '032e1-8.jpg', '', '', '', '', '', NULL, '1'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, '4', '2', '8', 'This article is about the food. For the UK band, see Seafood (band)', 'This article is about the food. For the UK band, see Seafood (band)', 'This article is about the food. For the UK band, see Seafood (band)', 'This article is about the food. For the UK band, see Seafood (band)', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', '<p>\n	This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food. A seafood platter composed of shrimp, oyster, snail and crab. Seafood includes any form of food taken from the sea. Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>\n', '2ed98-4.jpg', '', '', '', '', '', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `seafood_passion`
--

CREATE TABLE `seafood_passion` (
  `id` int(11) NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `content_th` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seafood_passion`
--

INSERT INTO `seafood_passion` (`id`, `content_en`, `content_th`, `images_show`) VALUES
(1, '', '', '2b5de-cephalopod1.jpg'),
(2, '', '', 'caa8e-sefood.jpg'),
(3, '', '', 'c5306-sefood1.jpg'),
(4, '', '', 'e1745-shells1.jpg'),
(5, '', '', 'a235f-shimp1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shells`
--

CREATE TABLE `shells` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '2',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '7',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shells`
--

INSERT INTO `shells` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '7', 'Shells Shells', 'Shells Shells', 'Shells Shells', 'Shells Shells', 'Shells', 'Shells', NULL, '', '', '', '', '', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `shells_products`
--

CREATE TABLE `shells_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 2,
  `id_subcat` int(10) NOT NULL DEFAULT 7,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shells_products`
--

INSERT INTO `shells_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 2, 2, 7, '', '', '', '', NULL, NULL, '07cda-shells1.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `show__now__homes`
--

CREATE TABLE `show__now__homes` (
  `id` int(20) UNSIGNED NOT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` date DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `show__now__homes`
--

INSERT INTO `show__now__homes` (`id`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_product1`, `day`, `status`) VALUES
(2, 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', NULL, NULL, 'files_upload/Slidehome/feeef9bd04fac1765263893621bb4811.jpg', '2021-09-24', NULL),
(3, 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', 'Purple Carrots Try fresh purple carrots direct from Australia today', NULL, NULL, 'files_upload/Slidehome/7a70c831f7cd407750d00c839b23a496.jpg', '2021-09-24', NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, 'files_upload/Slidehome/728f206c2a01bf572b5940d7d9a8fa4c.jpg', '2021-09-18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shrimps`
--

CREATE TABLE `shrimps` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '2',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '9',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shrimps`
--

INSERT INTO `shrimps` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', 'shrimp', 'shrimp', 'shrimp shrimp', 'shrimp shrimp', 'shrimpvshrimpshrimp', 'shrimpshrimpshrimpshrimp', NULL, '', '', '', '', '', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `shrimp_products`
--

CREATE TABLE `shrimp_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 2,
  `id_subcat` int(10) NOT NULL DEFAULT 9,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shrimp_products`
--

INSERT INTO `shrimp_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 3, 2, 9, '', '', '', '', NULL, NULL, 'f3ef1-shimp1.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slidehomes`
--

CREATE TABLE `slidehomes` (
  `id` int(20) UNSIGNED NOT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slidehomes`
--

INSERT INTO `slidehomes` (`id`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_product1`, `status`) VALUES
(2, 'Pure Australian meat, satisfying meat-lovers worldwide.', 'เนื้อออสเตรเลียแท้ๆ เอาใจคนรักเนื้อทั่วโลก', 'We believe in creating a meaningful connection between you and the food you eat.', 'เราเชื่อมั่นในการสร้างความสัมพันธ์ที่มีความหมายระหว่างคุณกับอาหารที่คุณรับประทาน', NULL, NULL, '72c4b-4.jpg', '1'),
(3, 'Sharing our passion for quality Australian meat with the world.', 'Main Picture + key Message all brand x Campaign x Seasonal Promo', 'We believe in creating a meaningful connection between you and the food you eat.', 'We believe in creating a meaningful connection between you and the food you eat.', NULL, NULL, 'b8853-3.jpg', '1'),
(4, 'FRESHWATER KING SALMON', NULL, 'Raised in the swift, cold currents of New Zealand\'s Southern Alps', NULL, NULL, NULL, 'f3926-fish400x600.jpg', '1'),
(6, 'Sharing our passion for quality Australian meat with the world.', 'แบ่งปันความหลงใหลในคุณภาพเนื้อออสเตรเลียของเรากับคนทั่วโลก', NULL, NULL, NULL, NULL, '8acba-1.jpg', '1'),
(7, 'Sharing our passion for quality Australian Lamb with the world.', 'แบ่งปันความหลงใหลในคุณภาพเนื้อแกะออสเตรเลียของเรากับคนทั่วโลก', NULL, NULL, NULL, NULL, 'd062d-109778632_204236577673261_6121051054058577573_n.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `slide_dairy`
--

CREATE TABLE `slide_dairy` (
  `id` int(11) NOT NULL,
  `content_th` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide_dairy`
--

INSERT INTO `slide_dairy` (`id`, `content_th`, `content_en`, `images_show`) VALUES
(1, '', '', 'a888d-dairy1.jpg'),
(2, '', '', 'b851c-dairy2.jpg'),
(3, '', '', '7ee8b-dairy3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slide_fruit`
--

CREATE TABLE `slide_fruit` (
  `id` int(11) NOT NULL,
  `content_th` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide_fruit`
--

INSERT INTO `slide_fruit` (`id`, `content_th`, `content_en`, `images_show`) VALUES
(1, '<p>\n	Apple</p>\n', '<p>\n	Apple</p>\n', 'c95e0-72c5f-1.jpg'),
(2, '<div style=\"color: rgb(248, 248, 242); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 16px; line-height: 22px; white-space: pre;\">\n	Cherries</div>\n', '<div style=\"color: rgb(248, 248, 242); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 16px; line-height: 22px; white-space: pre;\">\n	Cherries</div>\n', 'd5f6e-cherries1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slide_meat`
--

CREATE TABLE `slide_meat` (
  `id` int(10) NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `content_th` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide_meat`
--

INSERT INTO `slide_meat` (`id`, `content_en`, `content_th`, `images_show`) VALUES
(1, '<p>\n	Meat Slide</p>\n', '<p>\n	Meat Slide</p>\n', '6c84d-1.jpg'),
(2, '<p>\n	Meat Slide 2</p>\n', '<p>\n	Meat Slide 2</p>\n', 'e8a44-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slide_others`
--

CREATE TABLE `slide_others` (
  `id` int(11) NOT NULL,
  `content_th` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide_others`
--

INSERT INTO `slide_others` (`id`, `content_th`, `content_en`, `images_show`) VALUES
(1, '', '', '1569e-cony01.jpg'),
(2, '', '', '4b8ba-con03.jpg'),
(3, '', '', 'a78a0-con02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slide_seafood`
--

CREATE TABLE `slide_seafood` (
  `id` int(10) NOT NULL,
  `content_th` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide_seafood`
--

INSERT INTO `slide_seafood` (`id`, `content_th`, `content_en`, `images_show`) VALUES
(1, '<p>\n	SealFood</p>\n', '<p>\n	SealFood</p>\n', '79716-sefood.jpg'),
(2, '<p>\n	SealFood</p>\n', '<p>\n	SealFood</p>\n', '37530-sefood1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slide_vegetable`
--

CREATE TABLE `slide_vegetable` (
  `id` int(11) NOT NULL,
  `content_th` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide_vegetable`
--

INSERT INTO `slide_vegetable` (`id`, `content_th`, `content_en`, `images_show`) VALUES
(1, '', '', 'c4d63-1.jpg'),
(2, '', '', '9d249-6c74d-purple1.jpg'),
(3, '', '', '64695-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `socal`
--

CREATE TABLE `socal` (
  `id` int(20) NOT NULL,
  `facebook` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `socal`
--

INSERT INTO `socal` (`id`, `facebook`, `instagram`, `youtube`) VALUES
(1, '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `stonefruits`
--

CREATE TABLE `stonefruits` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '3',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '25',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stonefruits`
--

INSERT INTO `stonefruits` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '3', '3', '13', 'stonefruit', 'stonefruit', 'stonefruit', 'stonefruit', 'stonefruitstonefruit', 'stonefruitstonefruitstonefruit', NULL, '', '', '', '', '', '', '1'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '3', '3', '13', 'stonefruit', 'stonefruit', 'stonefruit', 'stonefruit', 'stonefruitstonefruit', 'stonefruitstonefruitstonefruit', NULL, '', '', '', '', '', '', '1'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, '3', '3', '13', 'stonefruit', 'stonefruit', 'stonefruit', 'stonefruit', 'stonefruitstonefruit', 'stonefruitstonefruitstonefruit', NULL, '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stone_products`
--

CREATE TABLE `stone_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 3,
  `id_subcat` int(10) NOT NULL DEFAULT 12,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stone_products`
--

INSERT INTO `stone_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 5, 3, 12, '', '', '', '', NULL, NULL, 'aa944-stonefruit.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `strawberries`
--

CREATE TABLE `strawberries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strawberries`
--

INSERT INTO `strawberries` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `brade`, `category`, `sub_category`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(2, NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', '14', 'Strawberry', 'Strawberry', 'Strawberry', 'Strawberry', 'StrawberryStrawberry', 'StrawberryStrawberry', NULL, '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `strawberry`
--

CREATE TABLE `strawberry` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '3',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '14',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id_subcat` int(20) UNSIGNED NOT NULL,
  `name_sub_categories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id_subcat`, `name_sub_categories`) VALUES
(1, 'POULTRY'),
(2, 'BEEF'),
(3, 'LAMB'),
(4, 'VENISON'),
(5, 'TURKEY'),
(6, 'FISH'),
(7, 'SHELLS'),
(8, 'CEPHALOPOD'),
(9, 'SHRIMP'),
(10, 'APPLE'),
(11, 'CHERRIES'),
(12, 'STONE-CITRUS'),
(13, 'NAVEL-CITRUS'),
(14, 'STRAWBERRY'),
(15, 'CARROT'),
(16, 'BEETROOT'),
(17, 'WHITE ONION'),
(18, 'SWEET POTATOES'),
(19, 'YOGURT'),
(20, 'CHEESE'),
(21, 'BUTTER'),
(22, 'PROCESSED FOODS'),
(23, 'BEVERAGE'),
(24, 'CONFECTIONARY'),
(25, 'STONE FRUITS'),
(26, 'WHITE ONION');

-- --------------------------------------------------------

--
-- Table structure for table `sweetpotatoes`
--

CREATE TABLE `sweetpotatoes` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '4',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '18',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_product1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sweetpotatoes`
--

INSERT INTO `sweetpotatoes` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_product1`, `attachment`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', 'sweetpotatoes', 'sweetpotatoes', 'sweetpotatoes', 'sweetpotatoes', 'sweetpotatoes', 'sweetpotatoes', NULL, 'files_upload/Sweetpotatoes/4d42d2f5010c1c13f23492a35645d6a7.jpg|files_upload/Sweetpotatoes/51de85ddd068f0bc787691d356176df9.jpg', 'files_upload/Sweetpotatoes/220a7f49d42406598587a66f02584ac3.pdf', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `the_best_we`
--

CREATE TABLE `the_best_we` (
  `id` int(20) NOT NULL,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci NOT NULL,
  `images_product1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `the_best_we`
--

INSERT INTO `the_best_we` (`id`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_product1`, `status`) VALUES
(1, '', '', '', '', '', '', '6ca64-5.jpg', ''),
(2, '', '', '', '', '', '', 'd3aa8-4.jpg', ''),
(3, '', '', '', '', '', '', '93f0a-2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `turkeys`
--

CREATE TABLE `turkeys` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '5',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `turkeys`
--

INSERT INTO `turkeys` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `category`, `sub_category`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `attachment`, `status`) VALUES
(3, 'Turkey', 'Turkey', 'TurkeyTurkeyTurkeyTurkeyTurkey', NULL, NULL, NULL, '1', '1', '1', 'Turkey', 'Turkey', 'Turkey', 'Turkey', '<p>\n	TurkeyTurkeyTurkeyTurkeyTurkey</p>\n', '<p>\n	TurkeyTurkeyTurkeyTurkeyTurkey</p>\n', '6dfdb-13.jpg', NULL, '1'),
(4, 'Turkey2', 'TurkeyTurkey2', 'TurkeyTurkeyTurkeyTurkeyTurkey2', NULL, NULL, NULL, '1', '1', '5', 'Turkey2 TH', 'Turkey2', 'TurkeyTurkeyTurkey', 'TurkeyTurkeyTurkey TH', '<p>\n	TurkeyTurkeyTurkeyTurkeyTurkeyTurkeyTurkey</p>\n', '<p>\n	TurkeyTurkeyTurkeyTurkeyTurkeyTurkeyTurkey</p>\n', '07ae6-12.jpg', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `turkey_products`
--

CREATE TABLE `turkey_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 1,
  `id_subcat` int(10) NOT NULL DEFAULT 5,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `turkey_products`
--

INSERT INTO `turkey_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 2, 1, 5, '', '', '', '', NULL, NULL, '6d22d-5.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(200) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(191) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(3, 'admin', 'admni', 'admin@gmail.com'),
(4, 'admin01', 'admin01', 'admin01@gmail.com'),
(5, 'ideakit', 'ideakit', 'ideakit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `valuce_partners`
--

CREATE TABLE `valuce_partners` (
  `id` int(20) NOT NULL,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci NOT NULL,
  `images_product1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `valuce_partners`
--

INSERT INTO `valuce_partners` (`id`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_product1`, `status`) VALUES
(1, '', '', '', '', '', '', '36a07-logo1.jpg', '1'),
(2, '', '', '', '', '', '', '8a0f7-logo.jpg', '1'),
(3, '', '', '', '', '', '', 'b0370-black-logo.jpg', '1'),
(4, '', '', '', '', '', '', '81db6-logo2.jpg', '1'),
(5, '', '', '', '', '', '', 'e0ae8-jade-tiger.jpg', '1'),
(6, '', '', '', '', '', '', 'ccf07-20200910-153530_1_m.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `vegetable`
--

CREATE TABLE `vegetable` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '4',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '2',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vegetable_passion`
--

CREATE TABLE `vegetable_passion` (
  `id` int(10) NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `content_th` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vegetable_passion`
--

INSERT INTO `vegetable_passion` (`id`, `content_en`, `content_th`, `images_show`) VALUES
(1, '', '', '5ccbf-1.jpg'),
(2, '', '', '1ab6c-2.jpg'),
(3, '', '', '9cf17-3.jpg'),
(4, '', '', 'd3926-9b69c-purple1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `venison`
--

CREATE TABLE `venison` (
  `id` int(20) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_cat` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `id_subcat` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '4',
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci NOT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `venison`
--

INSERT INTO `venison` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', '7', '1', '4', 'venison', 'venison TH', 'venison', 'venison TH', '', '', '1187f-5.jpg', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `venison_products`
--

CREATE TABLE `venison_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 1,
  `id_subcat` int(10) NOT NULL DEFAULT 4,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `venison_products`
--

INSERT INTO `venison_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 3, 1, 4, '', '', '', '', NULL, NULL, '0b79c-3.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `whitonion`
--

CREATE TABLE `whitonion` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '4',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '26',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whitonion`
--

INSERT INTO `whitonion` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', '26', NULL, NULL, NULL, NULL, NULL, NULL, '6c74d-purple1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `yogurt`
--

CREATE TABLE `yogurt` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facrbook_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orteh_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '5',
  `id_subcat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '19',
  `text_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_title_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_product_th` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `yogurt`
--

INSERT INTO `yogurt` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `attachment`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '7', '5', '19', 'yogurt', 'yogurt', 'yogurt', 'yogurt', '<p>\n	yogurtyogurtyogurtyogurtyogurt</p>\n', '<p>\n	yogurtyogurtyogurtyogurtyogurtyogurt</p>\n', '82d3e-01.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `yogurt_products`
--

CREATE TABLE `yogurt_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `google_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facrbook_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orteh_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_brand` int(10) DEFAULT NULL,
  `id_cat` int(10) NOT NULL DEFAULT 5,
  `id_subcat` int(10) NOT NULL DEFAULT 19,
  `text_title_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text_title_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_en` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_product_th` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detel_product_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detel_product_th` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `images_show` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images_show5` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `yogurt_products`
--

INSERT INTO `yogurt_products` (`id`, `title`, `keywords`, `description`, `google_code`, `facrbook_code`, `orteh_code`, `id_brand`, `id_cat`, `id_subcat`, `text_title_en`, `text_title_th`, `name_product_en`, `name_product_th`, `detel_product_en`, `detel_product_th`, `images_show`, `images_show1`, `images_show2`, `images_show3`, `images_show4`, `images_show5`, `attachment`, `status`) VALUES
(1, '', '', '', '', '', '', 5, 5, 19, '', '', '', '', NULL, NULL, '4ff5b-d8e67-01.jpg', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apples`
--
ALTER TABLE `apples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apple_image`
--
ALTER TABLE `apple_image`
  ADD PRIMARY KEY (`apple_image_id`);

--
-- Indexes for table `apple_products`
--
ALTER TABLE `apple_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beefs`
--
ALTER TABLE `beefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beef_products`
--
ALTER TABLE `beef_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beetroots`
--
ALTER TABLE `beetroots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beetroot_products`
--
ALTER TABLE `beetroot_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best__sellers__homes`
--
ALTER TABLE `best__sellers__homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beverage_products`
--
ALTER TABLE `beverage_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `butter`
--
ALTER TABLE `butter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `butter_products`
--
ALTER TABLE `butter_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrots`
--
ALTER TABLE `carrots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrot_products`
--
ALTER TABLE `carrot_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `cephalopods`
--
ALTER TABLE `cephalopods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cephalopod_products`
--
ALTER TABLE `cephalopod_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cheese`
--
ALTER TABLE `cheese`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cheese_products`
--
ALTER TABLE `cheese_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cherries`
--
ALTER TABLE `cherries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cherries_products`
--
ALTER TABLE `cherries_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citrus_products`
--
ALTER TABLE `citrus_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confectionaries`
--
ALTER TABLE `confectionaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confectionary_products`
--
ALTER TABLE `confectionary_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dairy`
--
ALTER TABLE `dairy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dairy_passion`
--
ALTER TABLE `dairy_passion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enjoy__your__homes`
--
ALTER TABLE `enjoy__your__homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fish_products`
--
ALTER TABLE `fish_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruit_passion`
--
ALTER TABLE `fruit_passion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lambs`
--
ALTER TABLE `lambs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lamb_products`
--
ALTER TABLE `lamb_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meat`
--
ALTER TABLE `meat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meats`
--
ALTER TABLE `meats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meat_images`
--
ALTER TABLE `meat_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meat_passion`
--
ALTER TABLE `meat_passion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navelcitruses`
--
ALTER TABLE `navelcitruses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onion_products`
--
ALTER TABLE `onion_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others_passion`
--
ALTER TABLE `others_passion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our__other_products__homes`
--
ALTER TABLE `our__other_products__homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potatoes_products`
--
ALTER TABLE `potatoes_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processedfoods`
--
ALTER TABLE `processedfoods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processed_products`
--
ALTER TABLE `processed_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seafoods`
--
ALTER TABLE `seafoods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seafood_passion`
--
ALTER TABLE `seafood_passion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shells`
--
ALTER TABLE `shells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shells_products`
--
ALTER TABLE `shells_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show__now__homes`
--
ALTER TABLE `show__now__homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shrimps`
--
ALTER TABLE `shrimps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shrimp_products`
--
ALTER TABLE `shrimp_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slidehomes`
--
ALTER TABLE `slidehomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_dairy`
--
ALTER TABLE `slide_dairy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_fruit`
--
ALTER TABLE `slide_fruit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_meat`
--
ALTER TABLE `slide_meat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_others`
--
ALTER TABLE `slide_others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_seafood`
--
ALTER TABLE `slide_seafood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_vegetable`
--
ALTER TABLE `slide_vegetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socal`
--
ALTER TABLE `socal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stonefruits`
--
ALTER TABLE `stonefruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stone_products`
--
ALTER TABLE `stone_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strawberry`
--
ALTER TABLE `strawberry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id_subcat`);

--
-- Indexes for table `sweetpotatoes`
--
ALTER TABLE `sweetpotatoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `the_best_we`
--
ALTER TABLE `the_best_we`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turkeys`
--
ALTER TABLE `turkeys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turkey_products`
--
ALTER TABLE `turkey_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `valuce_partners`
--
ALTER TABLE `valuce_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vegetable`
--
ALTER TABLE `vegetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vegetable_passion`
--
ALTER TABLE `vegetable_passion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venison`
--
ALTER TABLE `venison`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venison_products`
--
ALTER TABLE `venison_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whitonion`
--
ALTER TABLE `whitonion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yogurt`
--
ALTER TABLE `yogurt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yogurt_products`
--
ALTER TABLE `yogurt_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apples`
--
ALTER TABLE `apples`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apple_image`
--
ALTER TABLE `apple_image`
  MODIFY `apple_image_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apple_products`
--
ALTER TABLE `apple_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beefs`
--
ALTER TABLE `beefs`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `beef_products`
--
ALTER TABLE `beef_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beetroots`
--
ALTER TABLE `beetroots`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `beetroot_products`
--
ALTER TABLE `beetroot_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `best__sellers__homes`
--
ALTER TABLE `best__sellers__homes`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beverage_products`
--
ALTER TABLE `beverage_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id_brand` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `butter`
--
ALTER TABLE `butter`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `butter_products`
--
ALTER TABLE `butter_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carrots`
--
ALTER TABLE `carrots`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carrot_products`
--
ALTER TABLE `carrot_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cephalopods`
--
ALTER TABLE `cephalopods`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cephalopod_products`
--
ALTER TABLE `cephalopod_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cheese`
--
ALTER TABLE `cheese`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cheese_products`
--
ALTER TABLE `cheese_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cherries`
--
ALTER TABLE `cherries`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cherries_products`
--
ALTER TABLE `cherries_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `citrus_products`
--
ALTER TABLE `citrus_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `confectionaries`
--
ALTER TABLE `confectionaries`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `confectionary_products`
--
ALTER TABLE `confectionary_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dairy`
--
ALTER TABLE `dairy`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dairy_passion`
--
ALTER TABLE `dairy_passion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enjoy__your__homes`
--
ALTER TABLE `enjoy__your__homes`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fish`
--
ALTER TABLE `fish`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fish_products`
--
ALTER TABLE `fish_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fruit_passion`
--
ALTER TABLE `fruit_passion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lambs`
--
ALTER TABLE `lambs`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lamb_products`
--
ALTER TABLE `lamb_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meat`
--
ALTER TABLE `meat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meats`
--
ALTER TABLE `meats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `meat_images`
--
ALTER TABLE `meat_images`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meat_passion`
--
ALTER TABLE `meat_passion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `navelcitruses`
--
ALTER TABLE `navelcitruses`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `onion_products`
--
ALTER TABLE `onion_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `others_passion`
--
ALTER TABLE `others_passion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `our__other_products__homes`
--
ALTER TABLE `our__other_products__homes`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `potatoes_products`
--
ALTER TABLE `potatoes_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `processedfoods`
--
ALTER TABLE `processedfoods`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `processed_products`
--
ALTER TABLE `processed_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seafoods`
--
ALTER TABLE `seafoods`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seafood_passion`
--
ALTER TABLE `seafood_passion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shells`
--
ALTER TABLE `shells`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shells_products`
--
ALTER TABLE `shells_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `show__now__homes`
--
ALTER TABLE `show__now__homes`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shrimps`
--
ALTER TABLE `shrimps`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shrimp_products`
--
ALTER TABLE `shrimp_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slidehomes`
--
ALTER TABLE `slidehomes`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slide_dairy`
--
ALTER TABLE `slide_dairy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slide_fruit`
--
ALTER TABLE `slide_fruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slide_meat`
--
ALTER TABLE `slide_meat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slide_others`
--
ALTER TABLE `slide_others`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slide_seafood`
--
ALTER TABLE `slide_seafood`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slide_vegetable`
--
ALTER TABLE `slide_vegetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socal`
--
ALTER TABLE `socal`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stonefruits`
--
ALTER TABLE `stonefruits`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stone_products`
--
ALTER TABLE `stone_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `strawberry`
--
ALTER TABLE `strawberry`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id_subcat` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sweetpotatoes`
--
ALTER TABLE `sweetpotatoes`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `the_best_we`
--
ALTER TABLE `the_best_we`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `turkeys`
--
ALTER TABLE `turkeys`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `turkey_products`
--
ALTER TABLE `turkey_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `valuce_partners`
--
ALTER TABLE `valuce_partners`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vegetable`
--
ALTER TABLE `vegetable`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vegetable_passion`
--
ALTER TABLE `vegetable_passion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `venison`
--
ALTER TABLE `venison`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `venison_products`
--
ALTER TABLE `venison_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whitonion`
--
ALTER TABLE `whitonion`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yogurt`
--
ALTER TABLE `yogurt`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yogurt_products`
--
ALTER TABLE `yogurt_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
