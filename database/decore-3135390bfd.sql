-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: shareddb-y.hosting.stackcp.net
-- Generation Time: Jun 17, 2022 at 08:39 AM
-- Server version: 10.4.14-MariaDB-log
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decore-3135390bfd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_role_id` bigint(20) NOT NULL DEFAULT 2,
  `image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'def.png',
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `admin_role_id`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '+923024611117', 1, '2022-01-08-61d89642e7105.png', 'admin@gmail.com', NULL, '$2a$12$xGozmoyplBCcdqfpVjLdWuU8Ltsf3dOFeDO0Q02wJgnD3fxsYrcdS', 'acR1Ro4UDmBD5rQRtRf1duDjKgIsegw6RHR3tqWtytwdFPKf9baNemV3cPMV', '2022-01-06 18:19:58', '2022-01-08 01:36:34'),
(2, 'Ahsan Shah', '12345678', 7, '2022-02-01-61f9051011a51.png', 'Ahsanshah@gmail.com', NULL, '$2y$10$OATxgP/AhE20Ve9ibDPngOvrDDmGAiUC5DSUXNQDg6G7jkBzFAzKq', 'yv59VOvrfi8TmFBhcTUAe0lxBWLsXbLSWxnAdoN2x8QX2RIwAK4dQ2HT2dMI', '2022-02-01 10:01:52', '2022-02-01 10:01:52'),
(3, 'Ali', '1399877', 8, '2022-02-01-61f90a6c8c9ef.png', 'ali_shan@gmail.com', NULL, '$2y$10$l/nzaI6aozLllrv.pa/CEeqitFGnYvl6xWYuITWFrbthYgA6fCK5u', NULL, '2022-02-01 10:24:44', '2022-02-01 10:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_access` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `name`, `module_access`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Master Admin', NULL, 1, NULL, NULL),
(7, 'Product Manager', '[\"product_management\"]', 1, '2022-02-01 09:59:04', '2022-02-01 09:59:04'),
(8, 'Order Manager', '[\"order_management\"]', 1, '2022-02-01 10:23:52', '2022-02-01 10:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `admin_wallets`
--

CREATE TABLE `admin_wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `inhouse_earning` double NOT NULL DEFAULT 0,
  `withdrawn` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `commission_earned` double(8,2) NOT NULL DEFAULT 0.00,
  `delivery_charge_earned` double(8,2) NOT NULL DEFAULT 0.00,
  `pending_amount` double(8,2) NOT NULL DEFAULT 0.00,
  `total_tax_collected` double(8,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_wallets`
--

INSERT INTO `admin_wallets` (`id`, `admin_id`, `inhouse_earning`, `withdrawn`, `created_at`, `updated_at`, `commission_earned`, `delivery_charge_earned`, `pending_amount`, `total_tax_collected`) VALUES
(1, 1, 400, 0, NULL, '2022-01-15 16:55:50', 0.00, 5.00, 0.00, 0.00),
(2, 1, 0, 0, '2022-01-06 18:19:58', '2022-01-06 18:19:58', 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `admin_wallet_histories`
--

CREATE TABLE `admin_wallet_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `order_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'received',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Small', '2022-01-20 10:50:14', '2022-01-20 10:54:12'),
(4, 'Medium', '2022-01-20 10:54:35', '2022-01-20 10:54:35'),
(5, 'Size', '2022-01-20 10:57:07', '2022-01-20 10:57:07'),
(6, 'Characters', '2022-01-20 11:05:51', '2022-01-20 11:05:51'),
(7, 'Colours', '2022-01-20 11:08:31', '2022-01-20 11:08:31'),
(8, 'One Pack', '2022-01-26 09:16:48', '2022-01-26 09:28:25'),
(9, '12 Packs', '2022-01-26 09:18:07', '2022-01-26 09:18:45'),
(10, 'Packs', '2022-01-26 09:31:18', '2022-01-26 09:31:18'),
(11, 'Box', '2022-02-01 10:13:03', '2022-02-01 10:13:03'),
(12, 'Extra Shipping', '2022-02-02 13:02:52', '2022-02-02 13:02:52'),
(13, 'Dozen', '2022-02-02 15:25:55', '2022-02-02 15:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photo`, `banner_type`, `published`, `created_at`, `updated_at`, `url`) VALUES
(2, '2022-05-13-627e44f909d15.png', 'Main Banner', 1, '2022-01-17 07:15:06', '2022-05-13 15:46:01', 'Banner2'),
(3, '2022-05-13-627e370aaa356.png', 'Main Banner', 1, '2022-01-17 07:17:19', '2022-05-13 14:46:34', 'mainbanner2'),
(4, '2022-05-13-627e4929631aa.png', 'Main Banner', 1, '2022-05-13 16:03:53', '2022-05-13 16:04:00', 'Banner3');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'def.png',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Decor By Shan', '2022-02-01-61f9099f26311.png', 1, '2022-02-01 10:21:19', '2022-02-01 10:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `business_settings`
--

CREATE TABLE `business_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_settings`
--

INSERT INTO `business_settings` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'system_default_currency', '8', '2020-10-11 07:43:44', '2022-01-15 16:27:47'),
(2, 'language', '[{\"id\":\"1\",\"name\":\"english\",\"code\":\"en\",\"status\":1}]', '2020-10-11 07:53:02', '2021-06-10 21:16:25'),
(3, 'mail_config', '{\"name\":\"demo\",\"host\":\"mail.demo.com\",\"driver\":\"SMTP\",\"port\":\"587\",\"username\":\"info@demo.com\",\"email_id\":\"info@demo.com\",\"encryption\":\"TLS\",\"password\":\"demo\"}', '2020-10-12 10:29:18', '2022-01-15 16:59:06'),
(4, 'cash_on_delivery', '{\"status\":\"1\"}', NULL, '2021-05-25 21:21:15'),
(6, 'ssl_commerz_payment', '{\"status\":\"0\",\"store_id\":null,\"store_password\":null}', '2020-11-09 08:36:51', '2021-07-06 12:29:46'),
(7, 'paypal', '{\"status\":\"0\",\"paypal_client_id\":null,\"paypal_secret\":null}', '2020-11-09 08:51:39', '2021-07-06 12:29:57'),
(8, 'stripe', '{\"status\":\"0\",\"api_key\":null,\"published_key\":null}', '2020-11-09 09:01:47', '2021-07-06 12:30:05'),
(9, 'paytm', '{\"status\":\"0\",\"paytm_merchant_id\":\"dbzfb\",\"paytm_merchant_key\":\"sdfbsdfb\",\"paytm_merchant_website\":\"dsfbsdf\",\"paytm_channel\":\"sdfbsdf\",\"paytm_industry_type\":\"sdfb\"}', '2020-11-09 09:19:08', '2020-11-09 09:19:56'),
(10, 'company_phone', '000000000', NULL, '2020-12-08 14:15:01'),
(11, 'company_name', 'Decor By Shan', NULL, '2021-02-27 18:11:53'),
(12, 'company_web_logo', '2022-01-15-61e2b08f0878c.png', NULL, '2022-01-15 11:31:27'),
(13, 'company_mobile_logo', '2021-02-20-6030c88c91911.png', NULL, '2021-02-20 14:30:04'),
(14, 'terms_condition', '<p>terms and conditions</p>', NULL, '2021-06-11 01:51:36'),
(15, 'about_us', '<p>this is about us page. hello and hi from about page description..</p>', NULL, '2021-06-11 01:42:53'),
(16, 'sms_nexmo', '{\"status\":\"0\",\"nexmo_key\":\"custo5cc042f7abf4c\",\"nexmo_secret\":\"custo5cc042f7abf4c@ssl\"}', NULL, NULL),
(17, 'company_email', 'info@DecorByShan', NULL, '2021-03-15 12:29:51'),
(18, 'colors', '{\"primary\":\"#f24040\",\"secondary\":\"#000000\"}', '2020-10-11 13:53:02', '2022-02-01 17:32:16'),
(19, 'company_footer_logo', '2022-01-17-61e51a74b2b9f.png', NULL, '2022-01-17 07:27:48'),
(20, 'company_copyright_text', 'CopyRight@Decor By Shan', NULL, '2021-03-15 12:30:47'),
(21, 'download_app_apple_stroe', '{\"status\":\"1\",\"link\":\"https:\\/\\/www.target.com\\/s\\/apple+store++now?ref=tgt_adv_XS000000&AFID=msn&fndsrc=tgtao&DFA=71700000012505188&CPNG=Electronics_Portable+Computers&adgroup=Portable+Computers&LID=700000001176246&LNM=apple+store+near+me+now&MT=b&network=s&device=c&location=12&targetid=kwd-81913773633608:loc-12&ds_rl=1246978&ds_rl=1248099&gclsrc=ds\"}', NULL, '2020-12-08 12:54:53'),
(22, 'download_app_google_stroe', '{\"status\":\"1\",\"link\":\"https:\\/\\/play.google.com\\/store?hl=en_US&gl=US\"}', NULL, '2020-12-08 12:54:48'),
(23, 'company_fav_icon', '2021-03-02-603df1634614f.png', '2020-10-11 13:53:02', '2021-03-02 14:03:48'),
(24, 'fcm_topic', '', NULL, NULL),
(25, 'fcm_project_id', '', NULL, NULL),
(26, 'push_notification_key', 'Put your firebase server key here.', NULL, NULL),
(27, 'order_pending_message', '{\"status\":\"1\",\"message\":\"order pen message\"}', NULL, NULL),
(28, 'order_confirmation_msg', '{\"status\":\"1\",\"message\":\"Order con Message\"}', NULL, NULL),
(29, 'order_processing_message', '{\"status\":\"1\",\"message\":\"Order pro Message\"}', NULL, NULL),
(30, 'out_for_delivery_message', '{\"status\":\"1\",\"message\":\"Order ouut Message\"}', NULL, NULL),
(31, 'order_delivered_message', '{\"status\":\"1\",\"message\":\"Order del Message\"}', NULL, NULL),
(32, 'razor_pay', '{\"status\":\"0\",\"razor_key\":null,\"razor_secret\":null}', NULL, '2021-07-06 12:30:14'),
(33, 'sales_commission', '0', NULL, '2021-06-11 18:13:13'),
(34, 'seller_registration', '1', NULL, '2021-06-04 21:02:48'),
(35, 'pnc_language', '[\"en\"]', NULL, NULL),
(36, 'order_returned_message', '{\"status\":\"1\",\"message\":\"Order hh Message\"}', NULL, NULL),
(37, 'order_failed_message', '{\"status\":null,\"message\":\"Order fa Message\"}', NULL, NULL),
(40, 'delivery_boy_assign_message', '{\"status\":0,\"message\":\"\"}', NULL, NULL),
(41, 'delivery_boy_start_message', '{\"status\":0,\"message\":\"\"}', NULL, NULL),
(42, 'delivery_boy_delivered_message', '{\"status\":0,\"message\":\"\"}', NULL, NULL),
(43, 'terms_and_conditions', '', NULL, NULL),
(44, 'minimum_order_value', '1', NULL, NULL),
(45, 'privacy_policy', '<p>my privacy policy</p>\r\n\r\n<p>&nbsp;</p>', NULL, '2021-07-06 11:09:07'),
(46, 'paystack', '{\"status\":\"0\",\"publicKey\":null,\"secretKey\":null,\"paymentUrl\":\"https:\\/\\/api.paystack.co\",\"merchantEmail\":null}', NULL, '2021-07-06 12:30:35'),
(47, 'senang_pay', '{\"status\":\"0\",\"secret_key\":null,\"merchant_id\":null}', NULL, '2021-07-06 12:30:23'),
(48, 'currency_model', 'single_currency', NULL, NULL),
(49, 'social_login', '[{\"login_medium\":\"google\",\"client_id\":\"\",\"client_secret\":\"\",\"status\":\"\"},{\"login_medium\":\"facebook\",\"client_id\":\"\",\"client_secret\":\"\",\"status\":\"\"}]', NULL, NULL),
(50, 'digital_payment', '{\"status\":\"1\"}', '2022-02-02 14:16:29', '2022-02-02 14:16:29'),
(51, 'phone_verification', '0', NULL, NULL),
(52, 'email_verification', '0', NULL, NULL),
(53, 'order_verification', '1', NULL, NULL),
(54, 'country_code', 'PK', NULL, NULL),
(55, 'pagination_limit', '10', NULL, NULL),
(56, 'shipping_method', 'inhouse_shipping', NULL, NULL),
(57, 'paymob_accept', '{\"status\":\"0\",\"api_key\":\"\",\"iframe_id\":\"\",\"integration_id\":\"\",\"hmac\":\"\"}', NULL, NULL),
(58, 'bkash', '{\"status\":\"0\",\"api_key\":\"\",\"api_secret\":\"\",\"username\":\"\",\"password\":\"\"}', NULL, NULL),
(59, 'forgot_password_verification', 'phone', NULL, NULL),
(60, 'paytabs', '{\"status\":0,\"profile_id\":\"\",\"server_key\":\"\",\"base_url\":\"https:\\/\\/secure-egypt.paytabs.com\\/\"}', NULL, '2021-11-21 03:01:40'),
(61, 'timezone', 'Asia/Karachi', NULL, NULL),
(62, 'maintenance_mode', '0', '2022-01-18 11:01:26', '2022-01-18 11:02:57'),
(63, 'currency_symbol_position', 'left', '2022-01-31 09:16:07', '2022-01-31 11:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `cart_group_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choices` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variations` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variant` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` double(8,2) NOT NULL DEFAULT 1.00,
  `tax` double(8,2) NOT NULL DEFAULT 1.00,
  `discount` double(8,2) NOT NULL DEFAULT 1.00,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_id` bigint(20) DEFAULT NULL,
  `seller_is` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shop_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_shippings`
--

CREATE TABLE `cart_shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_group_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_method_id` bigint(20) DEFAULT NULL,
  `shipping_cost` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_shippings`
--

INSERT INTO `cart_shippings` (`id`, `cart_group_id`, `shipping_method_id`, `shipping_cost`, `created_at`, `updated_at`) VALUES
(6, '2-h1iu8-1643789057', 2, 5.00, '2022-02-02 13:08:13', '2022-02-02 13:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `home_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`, `parent_id`, `position`, `created_at`, `updated_at`, `home_status`) VALUES
(2, 'Birthday', 'birthday', '2022-06-10-62a33dd65f34f.png', 0, 0, '2022-01-08 01:45:32', '2022-06-10 16:49:26', 1),
(3, 'Birthday Candles', 'birthday-candles', NULL, 2, 1, '2022-01-15 16:08:26', '2022-01-15 16:08:26', 1),
(5, 'Birthday Caps', 'birthday-caps', NULL, 2, 1, '2022-01-15 11:08:41', '2022-01-15 11:08:41', 1),
(6, 'Birthday Balloons', 'birthday-balloons', NULL, 2, 1, '2022-02-01 10:05:01', '2022-02-01 10:05:01', 1),
(7, 'Candles', 'candles', NULL, 2, 1, '2022-05-10 15:21:34', '2022-05-10 15:21:34', 1),
(8, 'Anniversary', 'anniversary', '2022-05-10-627a4b3310d84.png', 0, 0, '2022-05-10 15:23:31', '2022-05-12 03:30:07', 1),
(9, 'flowers', 'flowers', NULL, 8, 1, '2022-05-10 15:24:54', '2022-05-10 15:24:54', 1),
(10, 'Mehndi', 'mehndi', '2022-05-12-627c46c7d0023.png', 0, 0, '2022-05-12 03:29:11', '2022-05-12 03:29:11', 1),
(11, 'Anniversary Foil Balloons', 'anniversary-foil-balloons', NULL, 8, 1, '2022-05-14 05:29:01', '2022-05-14 05:29:01', 1),
(12, 'Anniversary Letter Banners', 'anniversary-letter-banners', NULL, 2, 1, '2022-05-14 05:29:45', '2022-05-14 05:29:45', 1),
(13, 'Foil Curtain', 'foil-curtain', NULL, 8, 1, '2022-05-14 05:30:37', '2022-05-14 05:30:37', 1),
(14, 'Anniversary Cake Toppers', 'anniversary-cake-toppers', NULL, 8, 1, '2022-05-14 05:31:20', '2022-05-14 05:31:20', 1),
(15, 'Party Poppers', 'party-poppers', NULL, 8, 1, '2022-05-14 05:31:47', '2022-05-14 05:31:47', 1),
(16, 'Snow Spray', 'snow-spray', NULL, 8, 1, '2022-05-14 05:32:07', '2022-05-14 05:32:07', 1),
(17, 'Foil Curtain', 'foil-curtain', NULL, 2, 1, '2022-05-14 05:32:54', '2022-05-14 05:32:54', 1),
(18, 'Snow Spray', 'snow-spray', NULL, 2, 1, '2022-05-14 05:33:04', '2022-05-14 05:33:04', 1),
(19, 'Party Poppers', 'party-poppers', NULL, 2, 1, '2022-05-14 05:33:19', '2022-05-14 05:33:19', 1),
(20, 'Birthday Cake Toppers', 'birthday-cake-toppers', NULL, 2, 1, '2022-05-14 05:33:51', '2022-05-14 05:33:51', 1),
(21, 'Birthday Candles', 'birthday-candles', NULL, 2, 1, '2022-05-14 05:34:16', '2022-05-14 05:34:16', 1),
(22, 'Birthday Caps', 'birthday-caps', NULL, 2, 1, '2022-05-14 05:34:34', '2022-05-14 05:34:34', 1),
(23, 'Birthday Balloons', 'birthday-balloons', NULL, 2, 1, '2022-05-14 05:34:56', '2022-05-14 05:34:56', 1),
(24, 'Birthday Letter Banners', 'birthday-letter-banners', NULL, 2, 1, '2022-05-14 05:35:24', '2022-05-14 05:35:24', 1),
(25, 'Birthday Buntings', 'birthday-buntings', NULL, 2, 1, '2022-05-14 05:35:59', '2022-05-14 05:35:59', 1),
(26, 'Thaals', 'thaals', NULL, 10, 1, '2022-05-14 05:36:58', '2022-05-14 05:36:58', 1),
(27, 'Plates', 'plates', NULL, 10, 1, '2022-05-14 05:37:13', '2022-05-14 05:37:13', 1),
(28, 'Candles', 'candles', NULL, 10, 1, '2022-05-14 05:37:27', '2022-05-14 05:37:27', 1),
(29, 'Dopattas', 'dopattas', NULL, 10, 1, '2022-05-14 05:37:45', '2022-05-14 05:37:45', 1),
(30, 'Gaana', 'gaana', NULL, 10, 1, '2022-05-14 05:38:12', '2022-05-14 05:38:12', 1),
(31, 'Probs', 'probs', NULL, 10, 1, '2022-05-14 05:38:27', '2022-05-14 05:38:27', 1),
(32, 'Chabbas', 'chabbas', NULL, 10, 1, '2022-05-14 05:38:58', '2022-05-14 05:38:58', 1),
(33, 'Decor', 'decor', NULL, 10, 1, '2022-05-14 05:39:11', '2022-05-14 05:39:11', 1),
(34, 'Party Poppers', 'party-poppers', NULL, 10, 1, '2022-05-14 05:39:32', '2022-05-14 05:39:32', 1),
(35, 'Snow Spray', 'snow-spray', NULL, 10, 1, '2022-05-14 05:39:44', '2022-05-14 05:39:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chattings`
--

CREATE TABLE `chattings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `seller_id` bigint(20) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sent_by_customer` tinyint(1) NOT NULL DEFAULT 0,
  `sent_by_seller` tinyint(1) NOT NULL DEFAULT 0,
  `seen_by_customer` tinyint(1) NOT NULL DEFAULT 1,
  `seen_by_seller` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shop_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'IndianRed', '#CD5C5C', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(2, 'LightCoral', '#F08080', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(3, 'Salmon', '#FA8072', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(4, 'DarkSalmon', '#E9967A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(5, 'LightSalmon', '#FFA07A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(6, 'Crimson', '#DC143C', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(7, 'Red', '#FF0000', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(8, 'FireBrick', '#B22222', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(9, 'DarkRed', '#8B0000', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(10, 'Pink', '#FFC0CB', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(11, 'LightPink', '#FFB6C1', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(12, 'HotPink', '#FF69B4', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(13, 'DeepPink', '#FF1493', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(14, 'MediumVioletRed', '#C71585', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(15, 'PaleVioletRed', '#DB7093', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(16, 'LightSalmon', '#FFA07A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(17, 'Coral', '#FF7F50', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(18, 'Tomato', '#FF6347', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(19, 'OrangeRed', '#FF4500', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(20, 'DarkOrange', '#FF8C00', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(21, 'Orange', '#FFA500', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(22, 'Gold', '#FFD700', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(23, 'Yellow', '#FFFF00', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(24, 'LightYellow', '#FFFFE0', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(25, 'LemonChiffon', '#FFFACD', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(26, 'LightGoldenrodYellow', '#FAFAD2', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(27, 'PapayaWhip', '#FFEFD5', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(28, 'Moccasin', '#FFE4B5', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(29, 'PeachPuff', '#FFDAB9', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(30, 'PaleGoldenrod', '#EEE8AA', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(31, 'Khaki', '#F0E68C', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(32, 'DarkKhaki', '#BDB76B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(33, 'Lavender', '#E6E6FA', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(34, 'Thistle', '#D8BFD8', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(35, 'Plum', '#DDA0DD', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(36, 'Violet', '#EE82EE', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(37, 'Orchid', '#DA70D6', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(38, 'Fuchsia', '#FF00FF', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(39, 'Magenta', '#FF00FF', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(40, 'MediumOrchid', '#BA55D3', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(41, 'MediumPurple', '#9370DB', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(42, 'Amethyst', '#9966CC', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(43, 'BlueViolet', '#8A2BE2', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(44, 'DarkViolet', '#9400D3', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(45, 'DarkOrchid', '#9932CC', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(46, 'DarkMagenta', '#8B008B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(47, 'Purple', '#800080', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(48, 'Indigo', '#4B0082', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(49, 'SlateBlue', '#6A5ACD', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(50, 'DarkSlateBlue', '#483D8B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(51, 'MediumSlateBlue', '#7B68EE', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(52, 'GreenYellow', '#ADFF2F', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(53, 'Chartreuse', '#7FFF00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(54, 'LawnGreen', '#7CFC00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(55, 'Lime', '#00FF00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(56, 'LimeGreen', '#32CD32', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(57, 'PaleGreen', '#98FB98', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(58, 'LightGreen', '#90EE90', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(59, 'MediumSpringGreen', '#00FA9A', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(60, 'SpringGreen', '#00FF7F', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(61, 'MediumSeaGreen', '#3CB371', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(62, 'SeaGreen', '#2E8B57', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(63, 'ForestGreen', '#228B22', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(64, 'Green', '#008000', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(65, 'DarkGreen', '#006400', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(66, 'YellowGreen', '#9ACD32', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(67, 'OliveDrab', '#6B8E23', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(68, 'Olive', '#808000', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(69, 'DarkOliveGreen', '#556B2F', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(70, 'MediumAquamarine', '#66CDAA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(71, 'DarkSeaGreen', '#8FBC8F', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(72, 'LightSeaGreen', '#20B2AA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(73, 'DarkCyan', '#008B8B', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(74, 'Teal', '#008080', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(75, 'Aqua', '#00FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(77, 'LightCyan', '#E0FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(78, 'PaleTurquoise', '#AFEEEE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(79, 'Aquamarine', '#7FFFD4', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(80, 'Turquoise', '#40E0D0', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(81, 'MediumTurquoise', '#48D1CC', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(82, 'DarkTurquoise', '#00CED1', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(83, 'CadetBlue', '#5F9EA0', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(84, 'SteelBlue', '#4682B4', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(85, 'LightSteelBlue', '#B0C4DE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(86, 'PowderBlue', '#B0E0E6', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(87, 'LightBlue', '#ADD8E6', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(88, 'SkyBlue', '#87CEEB', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(89, 'LightSkyBlue', '#87CEFA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(90, 'DeepSkyBlue', '#00BFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(91, 'DodgerBlue', '#1E90FF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(92, 'CornflowerBlue', '#6495ED', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(93, 'MediumSlateBlue', '#7B68EE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(94, 'RoyalBlue', '#4169E1', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(95, 'Blue', '#0000FF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(96, 'MediumBlue', '#0000CD', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(97, 'DarkBlue', '#00008B', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(98, 'Navy', '#000080', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(99, 'MidnightBlue', '#191970', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(100, 'Cornsilk', '#FFF8DC', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(101, 'BlanchedAlmond', '#FFEBCD', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(102, 'Bisque', '#FFE4C4', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(103, 'NavajoWhite', '#FFDEAD', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(104, 'Wheat', '#F5DEB3', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(105, 'BurlyWood', '#DEB887', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(106, 'Tan', '#D2B48C', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(107, 'RosyBrown', '#BC8F8F', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(108, 'SandyBrown', '#F4A460', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(109, 'Goldenrod', '#DAA520', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(110, 'DarkGoldenrod', '#B8860B', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(111, 'Peru', '#CD853F', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(112, 'Chocolate', '#D2691E', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(113, 'SaddleBrown', '#8B4513', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(114, 'Sienna', '#A0522D', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(115, 'Brown', '#A52A2A', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(116, 'Maroon', '#800000', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(117, 'White', '#FFFFFF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(118, 'Snow', '#FFFAFA', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(119, 'Honeydew', '#F0FFF0', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(120, 'MintCream', '#F5FFFA', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(121, 'Azure', '#F0FFFF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(122, 'AliceBlue', '#F0F8FF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(123, 'GhostWhite', '#F8F8FF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(124, 'WhiteSmoke', '#F5F5F5', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(125, 'Seashell', '#FFF5EE', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(126, 'Beige', '#F5F5DC', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(127, 'OldLace', '#FDF5E6', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(128, 'FloralWhite', '#FFFAF0', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(129, 'Ivory', '#FFFFF0', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(130, 'AntiqueWhite', '#FAEBD7', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(131, 'Linen', '#FAF0E6', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(132, 'LavenderBlush', '#FFF0F5', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(133, 'MistyRose', '#FFE4E1', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(134, 'Gainsboro', '#DCDCDC', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(135, 'LightGrey', '#D3D3D3', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(136, 'Silver', '#C0C0C0', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(137, 'DarkGray', '#A9A9A9', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(138, 'Gray', '#808080', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(139, 'DimGray', '#696969', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(140, 'LightSlateGray', '#778899', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(141, 'SlateGray', '#708090', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(142, 'DarkSlateGray', '#2F4F4F', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(143, 'Black', '#000000', '2018-11-05 02:12:30', '2018-11-05 02:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `feedback` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reply` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `min_purchase` decimal(8,2) NOT NULL DEFAULT 0.00,
  `max_discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount_type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percentage',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `limit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exchange_rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `code`, `exchange_rate`, `status`, `created_at`, `updated_at`) VALUES
(1, 'USD', '$', 'USD', '1', 1, NULL, '2022-01-15 16:56:43'),
(2, 'BDT', '৳', 'BDT', '84', 0, NULL, '2022-01-15 16:05:05'),
(3, 'Indian Rupi', '₹', 'INR', '60', 0, '2020-10-15 17:23:04', '2022-01-15 16:05:04'),
(4, 'Euro', '€', 'EUR', '100', 0, '2021-05-25 21:00:23', '2022-01-15 16:05:04'),
(5, 'YEN', '¥', 'JPY', '110', 0, '2021-06-10 22:08:31', '2022-01-15 16:05:03'),
(6, 'Ringgit', 'RM', 'MYR', '4.16', 0, '2021-07-03 11:08:33', '2022-01-15 16:05:02'),
(7, 'Rand', 'R', 'ZAR', '14.26', 0, '2021-07-03 11:12:38', '2022-01-15 16:05:02'),
(8, 'Pakistan', 'Rs', 'Pak', '1', 1, '2022-01-15 16:04:43', '2022-01-15 16:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `customer_wallets`
--

CREATE TABLE `customer_wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `balance` decimal(8,2) NOT NULL DEFAULT 0.00,
  `royality_points` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_wallet_histories`
--

CREATE TABLE `customer_wallet_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `transaction_amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `transaction_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_method` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deal_of_the_days`
--

CREATE TABLE `deal_of_the_days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount_type` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'amount',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_deals`
--

CREATE TABLE `feature_deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flash_deals`
--

CREATE TABLE `flash_deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `background_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `deal_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flash_deal_products`
--

CREATE TABLE `flash_deal_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flash_deal_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `help_topics`
--

CREATE TABLE `help_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ranking` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_08_105159_create_admins_table', 1),
(5, '2020_09_08_111837_create_admin_roles_table', 1),
(6, '2020_09_16_142451_create_categories_table', 2),
(7, '2020_09_16_181753_create_categories_table', 3),
(8, '2020_09_17_134238_create_brands_table', 4),
(9, '2020_09_17_203054_create_attributes_table', 5),
(10, '2020_09_19_112509_create_coupons_table', 6),
(11, '2020_09_19_161802_create_curriencies_table', 7),
(12, '2020_09_20_114509_create_sellers_table', 8),
(13, '2020_09_23_113454_create_shops_table', 9),
(14, '2020_09_23_115615_create_shops_table', 10),
(15, '2020_09_23_153822_create_shops_table', 11),
(16, '2020_09_21_122817_create_products_table', 12),
(17, '2020_09_22_140800_create_colors_table', 12),
(18, '2020_09_28_175020_create_products_table', 13),
(19, '2020_09_28_180311_create_products_table', 14),
(20, '2020_10_04_105041_create_search_functions_table', 15),
(21, '2020_10_05_150730_create_customers_table', 15),
(22, '2020_10_08_133548_create_wishlists_table', 16),
(23, '2016_06_01_000001_create_oauth_auth_codes_table', 17),
(24, '2016_06_01_000002_create_oauth_access_tokens_table', 17),
(25, '2016_06_01_000003_create_oauth_refresh_tokens_table', 17),
(26, '2016_06_01_000004_create_oauth_clients_table', 17),
(27, '2016_06_01_000005_create_oauth_personal_access_clients_table', 17),
(28, '2020_10_06_133710_create_product_stocks_table', 17),
(29, '2020_10_06_134636_create_flash_deals_table', 17),
(30, '2020_10_06_134719_create_flash_deal_products_table', 17),
(31, '2020_10_08_115439_create_orders_table', 17),
(32, '2020_10_08_115453_create_order_details_table', 17),
(33, '2020_10_08_121135_create_shipping_addresses_table', 17),
(34, '2020_10_10_171722_create_business_settings_table', 17),
(35, '2020_09_19_161802_create_currencies_table', 18),
(36, '2020_10_12_152350_create_reviews_table', 18),
(37, '2020_10_12_161834_create_reviews_table', 19),
(38, '2020_10_12_180510_create_support_tickets_table', 20),
(39, '2020_10_14_140130_create_transactions_table', 21),
(40, '2020_10_14_143553_create_customer_wallets_table', 21),
(41, '2020_10_14_143607_create_customer_wallet_histories_table', 21),
(42, '2020_10_22_142212_create_support_ticket_convs_table', 21),
(43, '2020_10_24_234813_create_banners_table', 22),
(44, '2020_10_27_111557_create_shipping_methods_table', 23),
(45, '2020_10_27_114154_add_url_to_banners_table', 24),
(46, '2020_10_28_170308_add_shipping_id_to_order_details', 25),
(47, '2020_11_02_140528_add_discount_to_order_table', 26),
(48, '2020_11_03_162723_add_column_to_order_details', 27),
(49, '2020_11_08_202351_add_url_to_banners_table', 28),
(50, '2020_11_10_112713_create_help_topic', 29),
(51, '2020_11_10_141513_create_contacts_table', 29),
(52, '2020_11_15_180036_add_address_column_user_table', 30),
(53, '2020_11_18_170209_add_status_column_to_product_table', 31),
(54, '2020_11_19_115453_add_featured_status_product', 32),
(55, '2020_11_21_133302_create_deal_of_the_days_table', 33),
(56, '2020_11_20_172332_add_product_id_to_products', 34),
(57, '2020_11_27_234439_add__state_to_shipping_addresses', 34),
(58, '2020_11_28_091929_create_chattings_table', 35),
(59, '2020_12_02_011815_add_bank_info_to_sellers', 36),
(60, '2020_12_08_193234_create_social_medias_table', 37),
(61, '2020_12_13_122649_shop_id_to_chattings', 37),
(62, '2020_12_14_145116_create_seller_wallet_histories_table', 38),
(63, '2020_12_14_145127_create_seller_wallets_table', 38),
(64, '2020_12_15_174804_create_admin_wallets_table', 39),
(65, '2020_12_15_174821_create_admin_wallet_histories_table', 39),
(66, '2020_12_15_214312_create_feature_deals_table', 40),
(67, '2020_12_17_205712_create_withdraw_requests_table', 41),
(68, '2021_02_22_161510_create_notifications_table', 42),
(69, '2021_02_24_154706_add_deal_type_to_flash_deals', 43),
(70, '2021_03_03_204349_add_cm_firebase_token_to_users', 44),
(71, '2021_04_17_134848_add_column_to_order_details_stock', 45),
(72, '2021_05_12_155401_add_auth_token_seller', 46),
(73, '2021_06_03_104531_ex_rate_update', 47),
(74, '2021_06_03_222413_amount_withdraw_req', 48),
(75, '2021_06_04_154501_seller_wallet_withdraw_bal', 49),
(76, '2021_06_04_195853_product_dis_tax', 50),
(77, '2021_05_27_103505_create_product_translations_table', 51),
(78, '2021_06_17_054551_create_soft_credentials_table', 51),
(79, '2021_06_29_212549_add_active_col_user_table', 52),
(80, '2021_06_30_212619_add_col_to_contact', 53),
(81, '2021_07_01_160828_add_col_daily_needs_products', 54),
(82, '2021_07_04_182331_add_col_seller_sales_commission', 55),
(83, '2021_08_07_190655_add_seo_columns_to_products', 56),
(84, '2021_08_07_205913_add_col_to_category_table', 56),
(85, '2021_08_07_210808_add_col_to_shops_table', 56),
(86, '2021_08_14_205216_change_product_price_col_type', 56),
(87, '2021_08_16_201505_change_order_price_col', 56),
(88, '2021_08_16_201552_change_order_details_price_col', 56),
(89, '2019_09_29_154000_create_payment_cards_table', 57),
(90, '2021_08_17_213934_change_col_type_seller_earning_history', 57),
(91, '2021_08_17_214109_change_col_type_admin_earning_history', 57),
(92, '2021_08_17_214232_change_col_type_admin_wallet', 57),
(93, '2021_08_17_214405_change_col_type_seller_wallet', 57),
(94, '2021_08_22_184834_add_publish_to_products_table', 57),
(95, '2021_09_08_211832_add_social_column_to_users_table', 57),
(96, '2021_09_13_165535_add_col_to_user', 57),
(97, '2021_09_19_061647_add_limit_to_coupons_table', 57),
(98, '2021_09_20_020716_add_coupon_code_to_orders_table', 57),
(99, '2021_09_23_003059_add_gst_to_sellers_table', 57),
(100, '2021_09_28_025411_create_order_transactions_table', 57),
(101, '2021_10_02_185124_create_carts_table', 57),
(102, '2021_10_02_190207_create_cart_shippings_table', 57),
(103, '2021_10_03_194334_add_col_order_table', 57),
(104, '2021_10_03_200536_add_shipping_cost', 57),
(105, '2021_10_04_153201_add_col_to_order_table', 57),
(106, '2021_10_07_172701_add_col_cart_shop_info', 57),
(107, '2021_10_07_184442_create_phone_or_email_verifications_table', 57),
(108, '2021_10_07_185416_add_user_table_email_verified', 57),
(109, '2021_10_11_192739_add_transaction_amount_table', 57),
(110, '2021_10_11_200850_add_order_verification_code', 57),
(111, '2021_10_12_083241_add_col_to_order_transaction', 57),
(112, '2021_10_12_084440_add_seller_id_to_order', 57),
(113, '2021_10_12_102853_change_col_type', 57),
(114, '2021_10_12_110434_add_col_to_admin_wallet', 57),
(115, '2021_10_12_110829_add_col_to_seller_wallet', 57),
(116, '2021_10_13_091801_add_col_to_admin_wallets', 57),
(117, '2021_10_13_092000_add_col_to_seller_wallets_tax', 57),
(118, '2021_10_13_165947_rename_and_remove_col_seller_wallet', 57),
(119, '2021_10_13_170258_rename_and_remove_col_admin_wallet', 57),
(120, '2021_10_14_061603_column_update_order_transaction', 57),
(121, '2021_10_15_103339_remove_col_from_seller_wallet', 57),
(122, '2021_10_15_104419_add_id_col_order_tran', 57),
(123, '2021_10_15_213454_update_string_limit', 57),
(124, '2021_10_16_234037_change_col_type_translation', 57),
(125, '2021_10_16_234329_change_col_type_translation_1', 57),
(126, '2021_10_27_091250_add_shipping_address_in_order', 58),
(127, '2021_01_24_205114_create_paytabs_invoices_table', 59),
(128, '2021_11_20_043814_change_pass_reset_email_col', 59);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0a4d53417ae348bbd7e1ba3cc14753b561f008d8602f36022e8837119b389e67f39093997604ad89', 6, 1, 'LaravelAuthApp', '[]', 0, '2022-02-01 10:56:16', '2022-02-01 10:56:16', '2023-02-01 10:56:16'),
('1c118dd38fe477ef1a740ce4fe516071ecc1a10c0ecfd2e7d2fe2ea3ebe4abfc683e76dc42bc0ff7', 2, 1, 'LaravelAuthApp', '[]', 0, '2022-02-01 12:14:35', '2022-02-01 12:14:35', '2023-02-01 12:14:35'),
('6840b7d4ed685bf2e0dc593affa0bd3b968065f47cc226d39ab09f1422b5a1d9666601f3f60a79c1', 98, 1, 'LaravelAuthApp', '[]', 1, '2021-07-05 09:25:41', '2021-07-05 09:25:41', '2022-07-05 15:25:41'),
('6f68963aa165505903f32996c2a3c0df65a9e79c40424d1b5e823020c184e44900347ed5610fde10', 6, 1, 'LaravelAuthApp', '[]', 0, '2022-02-01 07:33:11', '2022-02-01 07:33:11', '2023-02-01 07:33:11'),
('c42cdd5ae652b8b2cbac4f2f4b496e889e1a803b08672954c8bbe06722b54160e71dce3e02331544', 98, 1, 'LaravelAuthApp', '[]', 1, '2021-07-05 09:24:36', '2021-07-05 09:24:36', '2022-07-05 15:24:36'),
('c4fa5f3323f6bb39b05bc8f41dd709254884b05451fda649a99fb1f17d587f090314be5b50acaaf3', 2, 1, 'LaravelAuthApp', '[]', 0, '2022-02-02 14:11:07', '2022-02-02 14:11:07', '2023-02-02 14:11:07'),
('d92abe4c95262d68f3939e96c0bd71e69f520b599c310cc01e9494517b49c49dd63d17037f660557', 4, 1, 'LaravelAuthApp', '[]', 0, '2022-02-02 15:16:53', '2022-02-02 15:16:53', '2023-02-02 15:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, '6amtech', 'GEUx5tqkviM6AAQcz4oi1dcm1KtRdJPgw41lj0eI', 'http://localhost', 1, 0, 0, '2020-10-21 18:27:22', '2020-10-21 18:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-10-21 18:27:23', '2020-10-21 18:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_ref` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_amount` double NOT NULL DEFAULT 0,
  `shipping_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `discount_amount` double NOT NULL DEFAULT 0,
  `discount_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_method_id` bigint(20) NOT NULL DEFAULT 0,
  `shipping_cost` double(8,2) NOT NULL DEFAULT 0.00,
  `order_group_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'def-order-group',
  `verification_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `seller_id` bigint(20) DEFAULT NULL,
  `seller_is` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address_data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `customer_type`, `payment_status`, `order_status`, `payment_method`, `transaction_ref`, `order_amount`, `shipping_address`, `created_at`, `updated_at`, `discount_amount`, `discount_type`, `coupon_code`, `shipping_method_id`, `shipping_cost`, `order_group_id`, `verification_code`, `seller_id`, `seller_is`, `shipping_address_data`) VALUES
(100001, '2', 'customer', 'paid', 'delivered', 'cash_on_delivery', '', 405, '1', '2022-01-15 16:52:26', '2022-01-15 16:55:49', 0, NULL, '0', 2, 5.00, '9652-TmGtT-1642243946', '125211', 1, 'admin', '{\"id\":1,\"customer_id\":2,\"contact_person_name\":\"furrukh Rana\",\"address_type\":\"permanent\",\"address\":\"644\\/c satllite town bahawalpur pakistan\",\"city\":\"pakistan\",\"zip\":\"63100\",\"phone\":\"+923334884869\",\"created_at\":\"2022-01-15 16:52:15\",\"updated_at\":\"2022-01-15 16:52:15\",\"state\":null,\"country\":\"Pakistan\"}'),
(100002, '6', 'customer', 'paid', 'confirmed', 'cash_on_delivery', '', 95, '2', '2022-02-01 07:37:06', '2022-02-01 10:18:27', 0, NULL, NULL, 2, 5.00, '6-648819-1643701026', '300793', 1, 'admin', '{\"id\":2,\"customer_id\":6,\"contact_person_name\":null,\"address_type\":\"Home\",\"address\":\"Bahwalpur\",\"city\":\"bwp\",\"zip\":\"56855\",\"phone\":\"0\",\"created_at\":\"2022-02-01 07:36:52\",\"updated_at\":\"2022-02-01 07:36:52\",\"state\":null,\"country\":null}'),
(100003, '2', 'customer', 'unpaid', 'confirmed', 'cash_on_delivery', '', 140, '1', '2022-02-01 12:15:31', '2022-02-01 12:17:37', 0, NULL, NULL, 2, 5.00, '2-842016-1643717731', '863787', 1, 'admin', '{\"id\":1,\"customer_id\":2,\"contact_person_name\":\"furrukh Rana\",\"address_type\":\"permanent\",\"address\":\"644\\/c satllite town bahawalpur pakistan\",\"city\":\"pakistan\",\"zip\":\"63100\",\"phone\":\"+923334884869\",\"created_at\":\"2022-01-15 16:52:15\",\"updated_at\":\"2022-01-15 16:52:15\",\"state\":null,\"country\":\"Pakistan\"}'),
(100004, '2', 'customer', 'unpaid', 'confirmed', 'cash_on_delivery', '', 815, '1', '2022-02-01 12:17:52', '2022-02-01 12:24:37', 0, NULL, NULL, 2, 5.00, '2-665666-1643717872', '446150', 1, 'admin', '{\"id\":1,\"customer_id\":2,\"contact_person_name\":\"furrukh Rana\",\"address_type\":\"permanent\",\"address\":\"644\\/c satllite town bahawalpur pakistan\",\"city\":\"pakistan\",\"zip\":\"63100\",\"phone\":\"+923334884869\",\"created_at\":\"2022-01-15 16:52:15\",\"updated_at\":\"2022-01-15 16:52:15\",\"state\":null,\"country\":\"Pakistan\"}'),
(100005, '2', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1205, '1', '2022-02-01 12:26:37', '2022-02-01 12:26:37', 0, NULL, '0', 2, 5.00, '5473-KxpFN-1643718397', '140259', 1, 'admin', '{\"id\":1,\"customer_id\":2,\"contact_person_name\":\"furrukh Rana\",\"address_type\":\"permanent\",\"address\":\"644\\/c satllite town bahawalpur pakistan\",\"city\":\"pakistan\",\"zip\":\"63100\",\"phone\":\"+923334884869\",\"created_at\":\"2022-01-15 16:52:15\",\"updated_at\":\"2022-01-15 16:52:15\",\"state\":null,\"country\":\"Pakistan\"}'),
(100006, '2', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1205, '1', '2022-02-01 12:26:44', '2022-02-01 12:26:44', 0, NULL, '0', 2, 5.00, '5364-2EgwN-1643718404', '704301', 1, 'admin', '{\"id\":1,\"customer_id\":2,\"contact_person_name\":\"furrukh Rana\",\"address_type\":\"permanent\",\"address\":\"644\\/c satllite town bahawalpur pakistan\",\"city\":\"pakistan\",\"zip\":\"63100\",\"phone\":\"+923334884869\",\"created_at\":\"2022-01-15 16:52:15\",\"updated_at\":\"2022-01-15 16:52:15\",\"state\":null,\"country\":\"Pakistan\"}'),
(100007, '2', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1205, '1', '2022-02-01 12:26:45', '2022-02-01 12:26:45', 0, NULL, '0', 2, 5.00, '4107-sOXQZ-1643718405', '154022', 1, 'admin', '{\"id\":1,\"customer_id\":2,\"contact_person_name\":\"furrukh Rana\",\"address_type\":\"permanent\",\"address\":\"644\\/c satllite town bahawalpur pakistan\",\"city\":\"pakistan\",\"zip\":\"63100\",\"phone\":\"+923334884869\",\"created_at\":\"2022-01-15 16:52:15\",\"updated_at\":\"2022-01-15 16:52:15\",\"state\":null,\"country\":\"Pakistan\"}'),
(100008, '2', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1205, '1', '2022-02-01 12:26:45', '2022-02-01 12:26:45', 0, NULL, '0', 2, 5.00, '7568-4YVGJ-1643718405', '937382', 1, 'admin', '{\"id\":1,\"customer_id\":2,\"contact_person_name\":\"furrukh Rana\",\"address_type\":\"permanent\",\"address\":\"644\\/c satllite town bahawalpur pakistan\",\"city\":\"pakistan\",\"zip\":\"63100\",\"phone\":\"+923334884869\",\"created_at\":\"2022-01-15 16:52:15\",\"updated_at\":\"2022-01-15 16:52:15\",\"state\":null,\"country\":\"Pakistan\"}'),
(100009, '2', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1205, '1', '2022-02-01 12:26:46', '2022-02-01 12:26:46', 0, NULL, '0', 2, 5.00, '2267-zcKtB-1643718406', '892520', 1, 'admin', '{\"id\":1,\"customer_id\":2,\"contact_person_name\":\"furrukh Rana\",\"address_type\":\"permanent\",\"address\":\"644\\/c satllite town bahawalpur pakistan\",\"city\":\"pakistan\",\"zip\":\"63100\",\"phone\":\"+923334884869\",\"created_at\":\"2022-01-15 16:52:15\",\"updated_at\":\"2022-01-15 16:52:15\",\"state\":null,\"country\":\"Pakistan\"}'),
(100010, '2', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1205, '1', '2022-02-01 12:26:47', '2022-02-01 12:26:47', 0, NULL, '0', 2, 5.00, '1476-XsL7E-1643718407', '887217', 1, 'admin', '{\"id\":1,\"customer_id\":2,\"contact_person_name\":\"furrukh Rana\",\"address_type\":\"permanent\",\"address\":\"644\\/c satllite town bahawalpur pakistan\",\"city\":\"pakistan\",\"zip\":\"63100\",\"phone\":\"+923334884869\",\"created_at\":\"2022-01-15 16:52:15\",\"updated_at\":\"2022-01-15 16:52:15\",\"state\":null,\"country\":\"Pakistan\"}'),
(100011, '4', 'customer', 'unpaid', 'failed', 'cash_on_delivery', '', 280, '3', '2022-02-02 17:06:18', '2022-02-02 19:42:41', 0, NULL, NULL, 2, 200.00, '4-713235-1643803578', '600036', 1, 'admin', '{\"id\":3,\"customer_id\":4,\"contact_person_name\":null,\"address_type\":\"Home\",\"address\":\"25-B Mason road lahore\",\"city\":\"lahore\",\"zip\":\"54000\",\"phone\":\"0\",\"created_at\":\"2022-02-02 17:06:05\",\"updated_at\":\"2022-02-02 17:06:05\",\"state\":null,\"country\":null}'),
(100012, '4', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1640, '3', '2022-02-03 13:25:44', '2022-02-03 13:25:44', 0, NULL, '0', 2, 200.00, '2427-zcUxE-1643876744', '945015', 1, 'admin', '{\"id\":3,\"customer_id\":4,\"contact_person_name\":null,\"address_type\":\"Home\",\"address\":\"25-B Mason road lahore\",\"city\":\"lahore\",\"zip\":\"54000\",\"phone\":\"0\",\"created_at\":\"2022-02-02 17:06:05\",\"updated_at\":\"2022-02-02 17:06:05\",\"state\":null,\"country\":null}'),
(100013, '4', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1640, '3', '2022-02-03 13:25:47', '2022-02-03 13:25:47', 0, NULL, '0', 2, 200.00, '4995-4yixP-1643876747', '247507', 1, 'admin', '{\"id\":3,\"customer_id\":4,\"contact_person_name\":null,\"address_type\":\"Home\",\"address\":\"25-B Mason road lahore\",\"city\":\"lahore\",\"zip\":\"54000\",\"phone\":\"0\",\"created_at\":\"2022-02-02 17:06:05\",\"updated_at\":\"2022-02-02 17:06:05\",\"state\":null,\"country\":null}'),
(100014, '4', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1640, '3', '2022-02-03 13:25:48', '2022-02-03 13:25:48', 0, NULL, '0', 2, 200.00, '2733-EzHDA-1643876748', '886951', 1, 'admin', '{\"id\":3,\"customer_id\":4,\"contact_person_name\":null,\"address_type\":\"Home\",\"address\":\"25-B Mason road lahore\",\"city\":\"lahore\",\"zip\":\"54000\",\"phone\":\"0\",\"created_at\":\"2022-02-02 17:06:05\",\"updated_at\":\"2022-02-02 17:06:05\",\"state\":null,\"country\":null}'),
(100015, '4', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1640, '3', '2022-02-03 13:25:52', '2022-02-03 13:25:52', 0, NULL, '0', 2, 200.00, '1199-DThRP-1643876752', '721297', 1, 'admin', '{\"id\":3,\"customer_id\":4,\"contact_person_name\":null,\"address_type\":\"Home\",\"address\":\"25-B Mason road lahore\",\"city\":\"lahore\",\"zip\":\"54000\",\"phone\":\"0\",\"created_at\":\"2022-02-02 17:06:05\",\"updated_at\":\"2022-02-02 17:06:05\",\"state\":null,\"country\":null}'),
(100016, '4', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1640, '3', '2022-02-03 13:25:57', '2022-02-03 13:25:57', 0, NULL, '0', 2, 200.00, '1090-fJbfz-1643876757', '410933', 1, 'admin', '{\"id\":3,\"customer_id\":4,\"contact_person_name\":null,\"address_type\":\"Home\",\"address\":\"25-B Mason road lahore\",\"city\":\"lahore\",\"zip\":\"54000\",\"phone\":\"0\",\"created_at\":\"2022-02-02 17:06:05\",\"updated_at\":\"2022-02-02 17:06:05\",\"state\":null,\"country\":null}'),
(100017, '2', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1000, '1', '2022-02-03 14:29:38', '2022-02-03 14:29:38', 0, NULL, '0', 2, 200.00, '7671-XHt5j-1643880578', '290168', 1, 'admin', '{\"id\":1,\"customer_id\":2,\"contact_person_name\":\"furrukh Rana\",\"address_type\":\"permanent\",\"address\":\"644\\/c satllite town bahawalpur pakistan\",\"city\":\"pakistan\",\"zip\":\"63100\",\"phone\":\"+923334884869\",\"created_at\":\"2022-01-15 16:52:15\",\"updated_at\":\"2022-01-15 16:52:15\",\"state\":null,\"country\":\"Pakistan\"}'),
(100018, '2', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 1640, '1', '2022-02-03 14:31:44', '2022-02-03 14:31:44', 0, NULL, '0', 2, 200.00, '1471-16Q4L-1643880704', '364295', 1, 'admin', '{\"id\":1,\"customer_id\":2,\"contact_person_name\":\"furrukh Rana\",\"address_type\":\"permanent\",\"address\":\"644\\/c satllite town bahawalpur pakistan\",\"city\":\"pakistan\",\"zip\":\"63100\",\"phone\":\"+923334884869\",\"created_at\":\"2022-01-15 16:52:15\",\"updated_at\":\"2022-01-15 16:52:15\",\"state\":null,\"country\":\"Pakistan\"}'),
(100019, '2', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 920, '1', '2022-02-03 14:50:25', '2022-02-03 14:50:25', 0, NULL, '0', 2, 200.00, '8496-UaQ7T-1643881825', '361535', 1, 'admin', '{\"id\":1,\"customer_id\":2,\"contact_person_name\":\"furrukh Rana\",\"address_type\":\"permanent\",\"address\":\"644\\/c satllite town bahawalpur pakistan\",\"city\":\"pakistan\",\"zip\":\"63100\",\"phone\":\"+923334884869\",\"created_at\":\"2022-01-15 16:52:15\",\"updated_at\":\"2022-01-15 16:52:15\",\"state\":null,\"country\":\"Pakistan\"}'),
(100020, '7', 'customer', 'unpaid', 'pending', 'cash_on_delivery', '', 320, '4', '2022-05-21 15:15:25', '2022-05-21 15:15:25', 0, NULL, '0', 2, 200.00, '5341-gPQGp-1653131725', '718349', 1, 'admin', '{\"id\":4,\"customer_id\":0,\"contact_person_name\":\"ali\",\"address_type\":\"home\",\"address\":\"jdcskdljfwcnewwfeo\",\"city\":\"Lahore\",\"zip\":\"323423\",\"phone\":\"we4234243`\",\"created_at\":\"2022-05-21 16:15:08\",\"updated_at\":\"2022-05-21 16:15:08\",\"state\":null,\"country\":\"Pakistan\"}');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `seller_id` bigint(20) DEFAULT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `tax` double NOT NULL DEFAULT 0,
  `discount` double NOT NULL DEFAULT 0,
  `delivery_status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shipping_method_id` bigint(20) DEFAULT NULL,
  `variant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_stock_decreased` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `seller_id`, `product_details`, `qty`, `price`, `tax`, `discount`, `delivery_status`, `payment_status`, `created_at`, `updated_at`, `shipping_method_id`, `variant`, `variation`, `discount_type`, `is_stock_decreased`) VALUES
(1, 100001, 2, 1, '{\"id\":2,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Birthday Boy Candle Big\",\"slug\":\"lays-zl9sxv\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":3,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-15-61e2a165d62e7.png\\\"]\",\"thumbnail\":\"2022-01-15-61e2a3c9edbca.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#0000FF\\\"]\",\"variant_product\":0,\"attributes\":\"null\",\"choice_options\":\"[]\",\"variation\":\"[{\\\"type\\\":\\\"Blue\\\",\\\"price\\\":100,\\\"sku\\\":\\\"BBCB-Blue\\\",\\\"qty\\\":50}]\",\"published\":0,\"unit_price\":100,\"purchase_price\":100,\"tax\":0,\"tax_type\":\"percent\",\"discount\":0,\"discount_type\":\"flat\",\"current_stock\":50,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-08 01:47:46\",\"updated_at\":\"2022-01-15 16:46:40\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"2022-01-15-61e2a13d4f0b5.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 4, 100, 0, 0, 'pending', 'unpaid', '2022-01-15 16:52:26', '2022-01-15 16:52:26', NULL, 'Blue', '{\"color\":\"Blue\"}', 'discount_on_product', 1),
(2, 100002, 83, 1, '{\"id\":83,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Number Candle 09\",\"slug\":\"number-candle-09-L5kQNv\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":null,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-29-61f4dec293a4e.png\\\"]\",\"thumbnail\":\"2022-01-29-61f4dec295345.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#F8F8FF\\\"]\",\"variant_product\":0,\"attributes\":\"null\",\"choice_options\":\"[]\",\"variation\":\"[{\\\"type\\\":\\\"GhostWhite\\\",\\\"price\\\":50,\\\"sku\\\":\\\"NC0-GhostWhite\\\",\\\"qty\\\":30}]\",\"published\":0,\"unit_price\":50,\"purchase_price\":30,\"tax\":0,\"tax_type\":\"percent\",\"discount\":20,\"discount_type\":\"flat\",\"current_stock\":30,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-29 06:29:22\",\"updated_at\":\"2022-01-29 06:29:22\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 3, 50, 0, 60, 'pending', 'unpaid', '2022-02-01 07:37:06', '2022-02-01 07:37:06', NULL, 'GhostWhite', '{\"color\":\"GhostWhite\"}', 'discount_on_product', 1),
(3, 100003, 85, 1, '{\"id\":85,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Number Candle Card 0-9\",\"slug\":\"number-candle-card-0-9-cqER4L\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":null,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-29-61f4e02574502.png\\\"]\",\"thumbnail\":\"2022-01-29-61f4e0257538b.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[]\",\"variant_product\":0,\"attributes\":\"[\\\"7\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_7\\\",\\\"title\\\":\\\"Colours\\\",\\\"options\\\":[\\\"Multi\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Multi\\\",\\\"price\\\":80,\\\"sku\\\":\\\"NCC0-Multi\\\",\\\"qty\\\":30}]\",\"published\":0,\"unit_price\":80,\"purchase_price\":55,\"tax\":0,\"tax_type\":\"percent\",\"discount\":25,\"discount_type\":\"flat\",\"current_stock\":30,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-29 06:35:17\",\"updated_at\":\"2022-01-29 06:35:17\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 1, 80, 0, 25, 'pending', 'unpaid', '2022-02-01 12:15:31', '2022-02-01 12:15:31', NULL, 'Multi', '{\"Colours\":\"Multi\"}', 'discount_on_product', 1),
(4, 100003, 90, 1, '{\"id\":90,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Stand Candle Metallic Color Small 10pcs\",\"slug\":\"stand-candle-metallic-color-small-10pcs-CEAUji\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":null,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-29-61f4e40ae8d79.png\\\",\\\"2022-01-29-61f4e40ae9bd9.png\\\",\\\"2022-01-29-61f4e40aea1b7.png\\\"]\",\"thumbnail\":\"2022-01-29-61f4e40aea612.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#B8860B\\\",\\\"#FF0000\\\",\\\"#8B4513\\\"]\",\"variant_product\":0,\"attributes\":\"null\",\"choice_options\":\"[]\",\"variation\":\"[{\\\"type\\\":\\\"DarkGoldenrod\\\",\\\"price\\\":100,\\\"sku\\\":\\\"SCMCS1-DarkGoldenrod\\\",\\\"qty\\\":30},{\\\"type\\\":\\\"Red\\\",\\\"price\\\":100,\\\"sku\\\":\\\"SCMCS1-Red\\\",\\\"qty\\\":30},{\\\"type\\\":\\\"SaddleBrown\\\",\\\"price\\\":100,\\\"sku\\\":\\\"SCMCS1-SaddleBrown\\\",\\\"qty\\\":30}]\",\"published\":0,\"unit_price\":100,\"purchase_price\":80,\"tax\":0,\"tax_type\":\"percent\",\"discount\":20,\"discount_type\":\"flat\",\"current_stock\":90,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-29 06:51:54\",\"updated_at\":\"2022-02-01 10:15:36\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 1, 100, 0, 20, 'pending', 'unpaid', '2022-02-01 12:15:32', '2022-02-01 12:15:32', NULL, 'SaddleBrown', '{\"color\":\"SaddleBrown\"}', 'discount_on_product', 1),
(5, 100004, 89, 1, '{\"id\":89,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Sparkling Candle 15Cm\",\"slug\":\"sparkling-candle-15cm-8TAPOX\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":null,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-29-61f4e279bfe07.png\\\",\\\"2022-01-29-61f4e279c0fee.png\\\"]\",\"thumbnail\":\"2022-01-29-61f4e279c14de.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[]\",\"variant_product\":0,\"attributes\":\"[\\\"7\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_7\\\",\\\"title\\\":\\\"Colours\\\",\\\"options\\\":[\\\"Multi\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Multi\\\",\\\"price\\\":300,\\\"sku\\\":\\\"SC1-Multi\\\",\\\"qty\\\":30}]\",\"published\":0,\"unit_price\":300,\"purchase_price\":270,\"tax\":0,\"tax_type\":\"percent\",\"discount\":30,\"discount_type\":\"flat\",\"current_stock\":30,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-29 06:45:13\",\"updated_at\":\"2022-01-29 06:45:13\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 3, 300, 0, 90, 'pending', 'unpaid', '2022-02-01 12:17:52', '2022-02-01 12:17:52', NULL, '', '{\"Colours\":null}', 'discount_on_product', 1),
(6, 100005, 88, 1, '{\"id\":88,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Sparkling Candle 12Cm\",\"slug\":\"sparkling-candle-12cm-2DIUHb\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":null,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-29-61f4e242374f9.png\\\",\\\"2022-01-29-61f4e24238453.png\\\"]\",\"thumbnail\":\"2022-01-29-61f4e2423891f.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[]\",\"variant_product\":0,\"attributes\":\"[\\\"7\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_7\\\",\\\"title\\\":\\\"Colours\\\",\\\"options\\\":[\\\"Multi\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Multi\\\",\\\"price\\\":280,\\\"sku\\\":\\\"SC1-Multi\\\",\\\"qty\\\":30}]\",\"published\":0,\"unit_price\":280,\"purchase_price\":240,\"tax\":0,\"tax_type\":\"percent\",\"discount\":40,\"discount_type\":\"flat\",\"current_stock\":30,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-29 06:44:18\",\"updated_at\":\"2022-01-29 06:44:18\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 5, 280, 0, 200, 'pending', 'unpaid', '2022-02-01 12:26:37', '2022-02-01 12:26:37', NULL, 'Multi', '{\"Colours\":\"Multi\"}', 'discount_on_product', 1),
(7, 100006, 88, 1, '{\"id\":88,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Sparkling Candle 12Cm\",\"slug\":\"sparkling-candle-12cm-2DIUHb\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":null,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-29-61f4e242374f9.png\\\",\\\"2022-01-29-61f4e24238453.png\\\"]\",\"thumbnail\":\"2022-01-29-61f4e2423891f.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[]\",\"variant_product\":0,\"attributes\":\"[\\\"7\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_7\\\",\\\"title\\\":\\\"Colours\\\",\\\"options\\\":[\\\"Multi\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Multi\\\",\\\"price\\\":280,\\\"sku\\\":\\\"SC1-Multi\\\",\\\"qty\\\":25}]\",\"published\":0,\"unit_price\":280,\"purchase_price\":240,\"tax\":0,\"tax_type\":\"percent\",\"discount\":40,\"discount_type\":\"flat\",\"current_stock\":25,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-29 06:44:18\",\"updated_at\":\"2022-02-01 12:26:37\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 5, 280, 0, 200, 'pending', 'unpaid', '2022-02-01 12:26:44', '2022-02-01 12:26:44', NULL, 'Multi', '{\"Colours\":\"Multi\"}', 'discount_on_product', 1),
(8, 100007, 88, 1, '{\"id\":88,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Sparkling Candle 12Cm\",\"slug\":\"sparkling-candle-12cm-2DIUHb\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":null,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-29-61f4e242374f9.png\\\",\\\"2022-01-29-61f4e24238453.png\\\"]\",\"thumbnail\":\"2022-01-29-61f4e2423891f.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[]\",\"variant_product\":0,\"attributes\":\"[\\\"7\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_7\\\",\\\"title\\\":\\\"Colours\\\",\\\"options\\\":[\\\"Multi\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Multi\\\",\\\"price\\\":280,\\\"sku\\\":\\\"SC1-Multi\\\",\\\"qty\\\":20}]\",\"published\":0,\"unit_price\":280,\"purchase_price\":240,\"tax\":0,\"tax_type\":\"percent\",\"discount\":40,\"discount_type\":\"flat\",\"current_stock\":20,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-29 06:44:18\",\"updated_at\":\"2022-02-01 12:26:44\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 5, 280, 0, 200, 'pending', 'unpaid', '2022-02-01 12:26:45', '2022-02-01 12:26:45', NULL, 'Multi', '{\"Colours\":\"Multi\"}', 'discount_on_product', 1),
(9, 100008, 88, 1, '{\"id\":88,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Sparkling Candle 12Cm\",\"slug\":\"sparkling-candle-12cm-2DIUHb\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":null,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-29-61f4e242374f9.png\\\",\\\"2022-01-29-61f4e24238453.png\\\"]\",\"thumbnail\":\"2022-01-29-61f4e2423891f.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[]\",\"variant_product\":0,\"attributes\":\"[\\\"7\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_7\\\",\\\"title\\\":\\\"Colours\\\",\\\"options\\\":[\\\"Multi\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Multi\\\",\\\"price\\\":280,\\\"sku\\\":\\\"SC1-Multi\\\",\\\"qty\\\":15}]\",\"published\":0,\"unit_price\":280,\"purchase_price\":240,\"tax\":0,\"tax_type\":\"percent\",\"discount\":40,\"discount_type\":\"flat\",\"current_stock\":15,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-29 06:44:18\",\"updated_at\":\"2022-02-01 12:26:45\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 5, 280, 0, 200, 'pending', 'unpaid', '2022-02-01 12:26:45', '2022-02-01 12:26:45', NULL, 'Multi', '{\"Colours\":\"Multi\"}', 'discount_on_product', 1),
(10, 100009, 88, 1, '{\"id\":88,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Sparkling Candle 12Cm\",\"slug\":\"sparkling-candle-12cm-2DIUHb\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":null,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-29-61f4e242374f9.png\\\",\\\"2022-01-29-61f4e24238453.png\\\"]\",\"thumbnail\":\"2022-01-29-61f4e2423891f.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[]\",\"variant_product\":0,\"attributes\":\"[\\\"7\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_7\\\",\\\"title\\\":\\\"Colours\\\",\\\"options\\\":[\\\"Multi\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Multi\\\",\\\"price\\\":280,\\\"sku\\\":\\\"SC1-Multi\\\",\\\"qty\\\":10}]\",\"published\":0,\"unit_price\":280,\"purchase_price\":240,\"tax\":0,\"tax_type\":\"percent\",\"discount\":40,\"discount_type\":\"flat\",\"current_stock\":10,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-29 06:44:18\",\"updated_at\":\"2022-02-01 12:26:45\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 5, 280, 0, 200, 'pending', 'unpaid', '2022-02-01 12:26:46', '2022-02-01 12:26:46', NULL, 'Multi', '{\"Colours\":\"Multi\"}', 'discount_on_product', 1),
(11, 100010, 88, 1, '{\"id\":88,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Sparkling Candle 12Cm\",\"slug\":\"sparkling-candle-12cm-2DIUHb\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":null,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-29-61f4e242374f9.png\\\",\\\"2022-01-29-61f4e24238453.png\\\"]\",\"thumbnail\":\"2022-01-29-61f4e2423891f.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[]\",\"variant_product\":0,\"attributes\":\"[\\\"7\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_7\\\",\\\"title\\\":\\\"Colours\\\",\\\"options\\\":[\\\"Multi\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Multi\\\",\\\"price\\\":280,\\\"sku\\\":\\\"SC1-Multi\\\",\\\"qty\\\":5}]\",\"published\":0,\"unit_price\":280,\"purchase_price\":240,\"tax\":0,\"tax_type\":\"percent\",\"discount\":40,\"discount_type\":\"flat\",\"current_stock\":5,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-29 06:44:18\",\"updated_at\":\"2022-02-01 12:26:46\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 5, 280, 0, 200, 'pending', 'unpaid', '2022-02-01 12:26:47', '2022-02-01 12:26:47', NULL, 'Multi', '{\"Colours\":\"Multi\"}', 'discount_on_product', 1),
(12, 100011, 2, 1, '{\"id\":2,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Birthday Boy Candle Big\",\"slug\":\"lays-zl9sxv\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":5,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-29-61f4d433c924a.png\\\"]\",\"thumbnail\":\"2022-01-29-61f4d433ca680.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#0000FF\\\"]\",\"variant_product\":0,\"attributes\":\"null\",\"choice_options\":\"[]\",\"variation\":\"[{\\\"type\\\":\\\"Blue\\\",\\\"price\\\":100,\\\"sku\\\":null,\\\"qty\\\":100}]\",\"published\":0,\"unit_price\":100,\"purchase_price\":80,\"tax\":0,\"tax_type\":\"percent\",\"discount\":20,\"discount_type\":\"flat\",\"current_stock\":100,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-08 01:47:46\",\"updated_at\":\"2022-02-02 15:52:18\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"2022-01-15-61e2a13d4f0b5.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 1, 100, 0, 20, 'pending', 'unpaid', '2022-02-02 17:06:18', '2022-02-02 19:42:13', NULL, 'Blue', '{\"color\":\"Blue\"}', 'discount_on_product', 0),
(13, 100012, 46, 1, '{\"id\":46,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Tie Lari Hb Lining, Character Cap\",\"slug\":\"tie-lari-hb-lining-character-cap-zSU992\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"5\\\",\\\"position\\\":2}]\",\"brand_id\":5,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-22-61ebe2d1251cd.png\\\",\\\"2022-01-22-61ebe2d129b19.png\\\",\\\"2022-01-22-61ebe2d12b683.png\\\",\\\"2022-01-22-61ebe2d12d082.png\\\"]\",\"thumbnail\":\"2022-02-03-61fb83e5260fa.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#0000FF\\\",\\\"#228B22\\\",\\\"#008000\\\",\\\"#FFFF00\\\"]\",\"variant_product\":0,\"attributes\":\"[\\\"10\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_10\\\",\\\"title\\\":\\\"Packs\\\",\\\"options\\\":[\\\"Single Pieces\\\",\\\"  Dozen\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Blue-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Blue-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Blue-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Blue-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"ForestGreen-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-ForestGreen-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"ForestGreen-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-ForestGreen-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Green-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Green-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Yellow-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Yellow-Dozen\\\",\\\"qty\\\":1000}]\",\"published\":0,\"unit_price\":80,\"purchase_price\":60,\"tax\":0,\"tax_type\":\"percent\",\"discount\":0,\"discount_type\":\"flat\",\"current_stock\":8000,\"details\":\"<p>Use For Birthday Party<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-22 10:56:17\",\"updated_at\":\"2022-02-03 13:23:09\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 2, 720, 0, 0, 'pending', 'unpaid', '2022-02-03 13:25:44', '2022-02-03 13:25:44', NULL, 'Blue-Dozen', '{\"color\":\"Blue\",\"Packs\":\"Dozen\"}', 'discount_on_product', 1),
(14, 100013, 46, 1, '{\"id\":46,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Tie Lari Hb Lining, Character Cap\",\"slug\":\"tie-lari-hb-lining-character-cap-zSU992\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"5\\\",\\\"position\\\":2}]\",\"brand_id\":5,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-22-61ebe2d1251cd.png\\\",\\\"2022-01-22-61ebe2d129b19.png\\\",\\\"2022-01-22-61ebe2d12b683.png\\\",\\\"2022-01-22-61ebe2d12d082.png\\\"]\",\"thumbnail\":\"2022-02-03-61fb83e5260fa.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#0000FF\\\",\\\"#228B22\\\",\\\"#008000\\\",\\\"#FFFF00\\\"]\",\"variant_product\":0,\"attributes\":\"[\\\"10\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_10\\\",\\\"title\\\":\\\"Packs\\\",\\\"options\\\":[\\\"Single Pieces\\\",\\\"  Dozen\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Blue-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Blue-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Blue-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Blue-Dozen\\\",\\\"qty\\\":998},{\\\"type\\\":\\\"ForestGreen-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-ForestGreen-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"ForestGreen-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-ForestGreen-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Green-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Green-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Yellow-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Yellow-Dozen\\\",\\\"qty\\\":1000}]\",\"published\":0,\"unit_price\":80,\"purchase_price\":60,\"tax\":0,\"tax_type\":\"percent\",\"discount\":0,\"discount_type\":\"flat\",\"current_stock\":7998,\"details\":\"<p>Use For Birthday Party<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-22 10:56:17\",\"updated_at\":\"2022-02-03 13:25:44\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 2, 720, 0, 0, 'pending', 'unpaid', '2022-02-03 13:25:47', '2022-02-03 13:25:47', NULL, 'Blue-Dozen', '{\"color\":\"Blue\",\"Packs\":\"Dozen\"}', 'discount_on_product', 1),
(15, 100014, 46, 1, '{\"id\":46,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Tie Lari Hb Lining, Character Cap\",\"slug\":\"tie-lari-hb-lining-character-cap-zSU992\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"5\\\",\\\"position\\\":2}]\",\"brand_id\":5,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-22-61ebe2d1251cd.png\\\",\\\"2022-01-22-61ebe2d129b19.png\\\",\\\"2022-01-22-61ebe2d12b683.png\\\",\\\"2022-01-22-61ebe2d12d082.png\\\"]\",\"thumbnail\":\"2022-02-03-61fb83e5260fa.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#0000FF\\\",\\\"#228B22\\\",\\\"#008000\\\",\\\"#FFFF00\\\"]\",\"variant_product\":0,\"attributes\":\"[\\\"10\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_10\\\",\\\"title\\\":\\\"Packs\\\",\\\"options\\\":[\\\"Single Pieces\\\",\\\"  Dozen\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Blue-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Blue-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Blue-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Blue-Dozen\\\",\\\"qty\\\":996},{\\\"type\\\":\\\"ForestGreen-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-ForestGreen-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"ForestGreen-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-ForestGreen-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Green-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Green-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Yellow-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Yellow-Dozen\\\",\\\"qty\\\":1000}]\",\"published\":0,\"unit_price\":80,\"purchase_price\":60,\"tax\":0,\"tax_type\":\"percent\",\"discount\":0,\"discount_type\":\"flat\",\"current_stock\":7996,\"details\":\"<p>Use For Birthday Party<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-22 10:56:17\",\"updated_at\":\"2022-02-03 13:25:47\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 2, 720, 0, 0, 'pending', 'unpaid', '2022-02-03 13:25:48', '2022-02-03 13:25:48', NULL, 'Blue-Dozen', '{\"color\":\"Blue\",\"Packs\":\"Dozen\"}', 'discount_on_product', 1),
(16, 100015, 46, 1, '{\"id\":46,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Tie Lari Hb Lining, Character Cap\",\"slug\":\"tie-lari-hb-lining-character-cap-zSU992\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"5\\\",\\\"position\\\":2}]\",\"brand_id\":5,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-22-61ebe2d1251cd.png\\\",\\\"2022-01-22-61ebe2d129b19.png\\\",\\\"2022-01-22-61ebe2d12b683.png\\\",\\\"2022-01-22-61ebe2d12d082.png\\\"]\",\"thumbnail\":\"2022-02-03-61fb83e5260fa.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#0000FF\\\",\\\"#228B22\\\",\\\"#008000\\\",\\\"#FFFF00\\\"]\",\"variant_product\":0,\"attributes\":\"[\\\"10\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_10\\\",\\\"title\\\":\\\"Packs\\\",\\\"options\\\":[\\\"Single Pieces\\\",\\\"  Dozen\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Blue-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Blue-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Blue-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Blue-Dozen\\\",\\\"qty\\\":994},{\\\"type\\\":\\\"ForestGreen-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-ForestGreen-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"ForestGreen-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-ForestGreen-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Green-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Green-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Yellow-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Yellow-Dozen\\\",\\\"qty\\\":1000}]\",\"published\":0,\"unit_price\":80,\"purchase_price\":60,\"tax\":0,\"tax_type\":\"percent\",\"discount\":0,\"discount_type\":\"flat\",\"current_stock\":7994,\"details\":\"<p>Use For Birthday Party<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-22 10:56:17\",\"updated_at\":\"2022-02-03 13:25:48\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 2, 720, 0, 0, 'pending', 'unpaid', '2022-02-03 13:25:52', '2022-02-03 13:25:52', NULL, 'Blue-Dozen', '{\"color\":\"Blue\",\"Packs\":\"Dozen\"}', 'discount_on_product', 1),
(17, 100016, 46, 1, '{\"id\":46,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Tie Lari Hb Lining, Character Cap\",\"slug\":\"tie-lari-hb-lining-character-cap-zSU992\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"5\\\",\\\"position\\\":2}]\",\"brand_id\":5,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-22-61ebe2d1251cd.png\\\",\\\"2022-01-22-61ebe2d129b19.png\\\",\\\"2022-01-22-61ebe2d12b683.png\\\",\\\"2022-01-22-61ebe2d12d082.png\\\"]\",\"thumbnail\":\"2022-02-03-61fb83e5260fa.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#0000FF\\\",\\\"#228B22\\\",\\\"#008000\\\",\\\"#FFFF00\\\"]\",\"variant_product\":0,\"attributes\":\"[\\\"10\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_10\\\",\\\"title\\\":\\\"Packs\\\",\\\"options\\\":[\\\"Single Pieces\\\",\\\"  Dozen\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Blue-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Blue-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Blue-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Blue-Dozen\\\",\\\"qty\\\":992},{\\\"type\\\":\\\"ForestGreen-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-ForestGreen-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"ForestGreen-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-ForestGreen-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Green-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Green-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Yellow-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Yellow-Dozen\\\",\\\"qty\\\":1000}]\",\"published\":0,\"unit_price\":80,\"purchase_price\":60,\"tax\":0,\"tax_type\":\"percent\",\"discount\":0,\"discount_type\":\"flat\",\"current_stock\":7992,\"details\":\"<p>Use For Birthday Party<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-22 10:56:17\",\"updated_at\":\"2022-02-03 13:25:52\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 2, 720, 0, 0, 'pending', 'unpaid', '2022-02-03 13:25:57', '2022-02-03 13:25:57', NULL, 'Blue-Dozen', '{\"color\":\"Blue\",\"Packs\":\"Dozen\"}', 'discount_on_product', 1),
(18, 100017, 90, 1, '{\"id\":90,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Stand Candle Metallic Color Small 10pcs\",\"slug\":\"stand-candle-metallic-color-small-10pcs-CEAUji\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"3\\\",\\\"position\\\":2}]\",\"brand_id\":5,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-29-61f4e40ae8d79.png\\\",\\\"2022-01-29-61f4e40ae9bd9.png\\\",\\\"2022-01-29-61f4e40aea1b7.png\\\"]\",\"thumbnail\":\"2022-01-29-61f4e40aea612.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#DAA520\\\",\\\"#800080\\\",\\\"#FF0000\\\"]\",\"variant_product\":0,\"attributes\":\"[\\\"10\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_10\\\",\\\"title\\\":\\\"Packs\\\",\\\"options\\\":[\\\"1Dozen\\\",\\\"        2Dozen\\\",\\\"      Single Pieces\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Goldenrod-1Dozen\\\",\\\"price\\\":980,\\\"sku\\\":\\\"SCMCS1-Goldenrod-1Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Goldenrod-2Dozen\\\",\\\"price\\\":1940,\\\"sku\\\":\\\"SCMCS1-Goldenrod-2Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Goldenrod-SinglePieces\\\",\\\"price\\\":100,\\\"sku\\\":\\\"SCMCS1-Goldenrod-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Purple-1Dozen\\\",\\\"price\\\":980,\\\"sku\\\":\\\"SCMCS1-Purple-1Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Purple-2Dozen\\\",\\\"price\\\":1940,\\\"sku\\\":\\\"SCMCS1-Purple-2Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Purple-SinglePieces\\\",\\\"price\\\":1000,\\\"sku\\\":\\\"SCMCS1-Purple-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Red-1Dozen\\\",\\\"price\\\":980,\\\"sku\\\":\\\"SCMCS1-Red-1Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Red-2Dozen\\\",\\\"price\\\":1940,\\\"sku\\\":\\\"SCMCS1-Red-2Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Red-SinglePieces\\\",\\\"price\\\":100,\\\"sku\\\":\\\"SCMCS1-Red-SinglePieces\\\",\\\"qty\\\":1000}]\",\"published\":0,\"unit_price\":100,\"purchase_price\":80,\"tax\":0,\"tax_type\":\"percent\",\"discount\":20,\"discount_type\":\"flat\",\"current_stock\":9000,\"details\":\"<p>Use Birthday Celebration On Birthday Cakes<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-29 06:51:54\",\"updated_at\":\"2022-02-02 17:21:01\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 1, 100, 0, 20, 'pending', 'unpaid', '2022-02-03 14:29:38', '2022-02-03 14:29:38', NULL, 'Goldenrod-400', '{\"color\":\"Goldenrod\",\"ExtraShipping\":\"400\"}', 'discount_on_product', 1),
(19, 100017, 46, 1, '{\"id\":46,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Tie Lari Hb Lining, Character Cap\",\"slug\":\"tie-lari-hb-lining-character-cap-zSU992\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"5\\\",\\\"position\\\":2}]\",\"brand_id\":5,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-22-61ebe2d1251cd.png\\\",\\\"2022-01-22-61ebe2d129b19.png\\\",\\\"2022-01-22-61ebe2d12b683.png\\\",\\\"2022-01-22-61ebe2d12d082.png\\\"]\",\"thumbnail\":\"2022-02-03-61fb83e5260fa.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#0000FF\\\",\\\"#228B22\\\",\\\"#008000\\\",\\\"#FFFF00\\\"]\",\"variant_product\":0,\"attributes\":\"[\\\"10\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_10\\\",\\\"title\\\":\\\"Packs\\\",\\\"options\\\":[\\\"Single Pieces\\\",\\\"  Dozen\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Blue-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Blue-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Blue-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Blue-Dozen\\\",\\\"qty\\\":990},{\\\"type\\\":\\\"ForestGreen-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-ForestGreen-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"ForestGreen-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-ForestGreen-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Green-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Green-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Yellow-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Yellow-Dozen\\\",\\\"qty\\\":1000}]\",\"published\":0,\"unit_price\":80,\"purchase_price\":60,\"tax\":0,\"tax_type\":\"percent\",\"discount\":0,\"discount_type\":\"flat\",\"current_stock\":7990,\"details\":\"<p>Use For Birthday Party<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-22 10:56:17\",\"updated_at\":\"2022-02-03 13:25:57\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 1, 720, 0, 0, 'pending', 'unpaid', '2022-02-03 14:29:38', '2022-02-03 14:29:38', NULL, 'Yellow-Dozen', '{\"color\":\"Yellow\",\"Packs\":\"Dozen\"}', 'discount_on_product', 1),
(20, 100018, 46, 1, '{\"id\":46,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Tie Lari Hb Lining, Character Cap\",\"slug\":\"tie-lari-hb-lining-character-cap-zSU992\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"5\\\",\\\"position\\\":2}]\",\"brand_id\":5,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-22-61ebe2d1251cd.png\\\",\\\"2022-01-22-61ebe2d129b19.png\\\",\\\"2022-01-22-61ebe2d12b683.png\\\",\\\"2022-01-22-61ebe2d12d082.png\\\"]\",\"thumbnail\":\"2022-02-03-61fb83e5260fa.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#0000FF\\\",\\\"#228B22\\\",\\\"#008000\\\",\\\"#FFFF00\\\"]\",\"variant_product\":0,\"attributes\":\"[\\\"10\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_10\\\",\\\"title\\\":\\\"Packs\\\",\\\"options\\\":[\\\"Single Pieces\\\",\\\"  Dozen\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Blue-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Blue-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Blue-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Blue-Dozen\\\",\\\"qty\\\":990},{\\\"type\\\":\\\"ForestGreen-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-ForestGreen-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"ForestGreen-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-ForestGreen-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Green-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Green-Dozen\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Yellow-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-Dozen\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Yellow-Dozen\\\",\\\"qty\\\":999}]\",\"published\":0,\"unit_price\":80,\"purchase_price\":60,\"tax\":0,\"tax_type\":\"percent\",\"discount\":0,\"discount_type\":\"flat\",\"current_stock\":7989,\"details\":\"<p>Use For Birthday Party<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-22 10:56:17\",\"updated_at\":\"2022-02-03 14:29:38\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 2, 720, 0, 0, 'pending', 'unpaid', '2022-02-03 14:31:44', '2022-02-03 14:31:44', NULL, 'Blue-Dozen', '{\"color\":\"Blue\",\"Packs\":\"Dozen\"}', 'discount_on_product', 1),
(21, 100019, 46, 1, '{\"id\":46,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Tie Lari Hb Lining, Character Cap\",\"slug\":\"tie-lari-hb-lining-character-cap-zSU992\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"5\\\",\\\"position\\\":2}]\",\"brand_id\":5,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-22-61ebe2d1251cd.png\\\",\\\"2022-01-22-61ebe2d129b19.png\\\",\\\"2022-01-22-61ebe2d12b683.png\\\",\\\"2022-01-22-61ebe2d12d082.png\\\"]\",\"thumbnail\":\"2022-02-03-61fb83e5260fa.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#0000FF\\\",\\\"#228B22\\\",\\\"#008000\\\",\\\"#FFFF00\\\"]\",\"variant_product\":0,\"attributes\":\"[\\\"10\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_10\\\",\\\"title\\\":\\\"Packs\\\",\\\"options\\\":[\\\"Single Pieces\\\",\\\"12 Pieces\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Blue-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Blue-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Blue-12Pieces\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Blue-12Pieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"ForestGreen-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-ForestGreen-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"ForestGreen-12Pieces\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-ForestGreen-12Pieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Green-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-12Pieces\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Green-12Pieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Yellow-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-12Pieces\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Yellow-12Pieces\\\",\\\"qty\\\":1000}]\",\"published\":0,\"unit_price\":80,\"purchase_price\":60,\"tax\":0,\"tax_type\":\"percent\",\"discount\":0,\"discount_type\":\"flat\",\"current_stock\":8000,\"details\":\"<p>Use For Birthday Party<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-22 10:56:17\",\"updated_at\":\"2022-02-03 14:38:40\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 1, 720, 0, 0, 'pending', 'unpaid', '2022-02-03 14:50:25', '2022-02-03 14:50:25', NULL, 'Blue-12Pieces', '{\"color\":\"Blue\",\"Packs\":\"12 Pieces\"}', 'discount_on_product', 1),
(22, 100020, 46, 1, '{\"id\":46,\"added_by\":\"admin\",\"user_id\":1,\"name\":\"Tie Lari Hb Lining, Character Cap\",\"slug\":\"tie-lari-hb-lining-character-cap-zSU992\",\"category_ids\":\"[{\\\"id\\\":\\\"2\\\",\\\"position\\\":1},{\\\"id\\\":\\\"5\\\",\\\"position\\\":2}]\",\"brand_id\":5,\"unit\":\"pc\",\"min_qty\":1,\"refundable\":1,\"images\":\"[\\\"2022-01-22-61ebe2d1251cd.png\\\",\\\"2022-01-22-61ebe2d129b19.png\\\",\\\"2022-01-22-61ebe2d12b683.png\\\",\\\"2022-01-22-61ebe2d12d082.png\\\"]\",\"thumbnail\":\"2022-02-03-61fb83e5260fa.png\",\"featured\":null,\"flash_deal\":null,\"video_provider\":\"youtube\",\"video_url\":null,\"colors\":\"[\\\"#0000FF\\\",\\\"#228B22\\\",\\\"#008000\\\",\\\"#FFFF00\\\"]\",\"variant_product\":0,\"attributes\":\"[\\\"10\\\"]\",\"choice_options\":\"[{\\\"name\\\":\\\"choice_10\\\",\\\"title\\\":\\\"Packs\\\",\\\"options\\\":[\\\"Single Pieces\\\",\\\"12 Pieces\\\"]}]\",\"variation\":\"[{\\\"type\\\":\\\"Blue-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Blue-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Blue-12Pieces\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Blue-12Pieces\\\",\\\"qty\\\":999},{\\\"type\\\":\\\"ForestGreen-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-ForestGreen-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"ForestGreen-12Pieces\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-ForestGreen-12Pieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Green-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Green-12Pieces\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Green-12Pieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-SinglePieces\\\",\\\"price\\\":60,\\\"sku\\\":\\\"TLHLCC-Yellow-SinglePieces\\\",\\\"qty\\\":1000},{\\\"type\\\":\\\"Yellow-12Pieces\\\",\\\"price\\\":720,\\\"sku\\\":\\\"TLHLCC-Yellow-12Pieces\\\",\\\"qty\\\":1000}]\",\"published\":0,\"unit_price\":80,\"purchase_price\":60,\"tax\":0,\"tax_type\":\"percent\",\"discount\":0,\"discount_type\":\"flat\",\"current_stock\":7999,\"details\":\"<p>Use For Birthday Party<\\/p>\",\"free_shipping\":0,\"attachment\":null,\"created_at\":\"2022-01-22 10:56:17\",\"updated_at\":\"2022-02-03 14:50:25\",\"status\":1,\"featured_status\":1,\"meta_title\":null,\"meta_description\":null,\"meta_image\":\"def.png\",\"request_status\":1,\"denied_note\":null,\"reviews_count\":0,\"translations\":[],\"reviews\":[]}', 2, 60, 0, 0, 'pending', 'unpaid', '2022-05-21 15:15:25', '2022-05-21 15:15:25', NULL, 'Blue-SinglePieces', '{\"color\":\"Blue\",\"Packs\":\"Single Pieces\"}', 'discount_on_product', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_transactions`
--

CREATE TABLE `order_transactions` (
  `seller_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `order_amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `seller_amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `admin_commission` decimal(8,2) NOT NULL DEFAULT 0.00,
  `received_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_charge` decimal(8,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `seller_is` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_transactions`
--

INSERT INTO `order_transactions` (`seller_id`, `order_id`, `order_amount`, `seller_amount`, `admin_commission`, `received_by`, `status`, `delivery_charge`, `tax`, `created_at`, `updated_at`, `customer_id`, `seller_is`, `delivered_by`, `payment_method`, `transaction_id`, `id`) VALUES
(1, 100001, '400.00', '400.00', '0.00', 'admin', 'disburse', '5.00', '0.00', '2022-01-15 16:55:50', '2022-01-15 16:55:50', 2, 'admin', 'admin', 'cash_on_delivery', '8695-DWu70-1642244150', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `identity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paytabs_invoices`
--

CREATE TABLE `paytabs_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `result` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `response_code` int(10) UNSIGNED NOT NULL,
  `pt_invoice_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` int(10) UNSIGNED DEFAULT NULL,
  `card_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_first_six_digits` int(10) UNSIGNED DEFAULT NULL,
  `card_last_four_digits` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phone_or_email_verifications`
--

CREATE TABLE `phone_or_email_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_or_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phone_or_email_verifications`
--

INSERT INTO `phone_or_email_verifications` (`id`, `phone_or_email`, `token`, `created_at`, `updated_at`) VALUES
(1, '+923037818078', '2443', '2022-01-18 11:43:23', '2022-01-18 11:43:23'),
(2, '+923037818078', '2499', '2022-01-18 11:44:08', '2022-01-18 11:44:08'),
(3, '+923409452780', '8503', '2022-01-18 11:44:47', '2022-01-18 11:44:47'),
(4, '+923409452780', '9243', '2022-01-18 11:45:23', '2022-01-18 11:45:23'),
(5, '+923409452780', '3163', '2022-01-18 11:45:25', '2022-01-18 11:45:25'),
(6, '+923037818078', '1248', '2022-01-18 13:40:30', '2022-01-18 13:40:30'),
(7, 'shan.liaqat@hotmail.com', '9435', '2022-01-27 08:04:31', '2022-01-27 08:04:31'),
(8, 'azk055@hotmail.com', '5368', '2022-01-27 13:01:45', '2022-01-27 13:01:45'),
(9, 'furrukh.raza89@gmail.com', '5345', '2022-01-31 07:47:03', '2022-01-31 07:47:03'),
(10, 'furrukh.raza89@gmail.com', '4406', '2022-01-31 09:09:32', '2022-01-31 09:09:32'),
(11, 'furrukh.raza89@gmail.com', '3959', '2022-01-31 09:11:02', '2022-01-31 09:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `added_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_ids` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_qty` int(11) NOT NULL DEFAULT 1,
  `refundable` tinyint(1) NOT NULL DEFAULT 1,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flash_deal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_provider` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colors` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variant_product` tinyint(1) NOT NULL DEFAULT 0,
  `attributes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choice_options` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `unit_price` double NOT NULL DEFAULT 0,
  `purchase_price` double NOT NULL DEFAULT 0,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.00',
  `tax_type` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.00',
  `discount_type` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_stock` int(11) DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free_shipping` tinyint(1) NOT NULL DEFAULT 0,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `featured_status` tinyint(1) NOT NULL DEFAULT 1,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_status` tinyint(1) NOT NULL DEFAULT 0,
  `denied_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `added_by`, `user_id`, `name`, `slug`, `category_ids`, `brand_id`, `unit`, `min_qty`, `refundable`, `images`, `thumbnail`, `featured`, `flash_deal`, `video_provider`, `video_url`, `colors`, `variant_product`, `attributes`, `choice_options`, `variation`, `published`, `unit_price`, `purchase_price`, `tax`, `tax_type`, `discount`, `discount_type`, `current_stock`, `details`, `free_shipping`, `attachment`, `created_at`, `updated_at`, `status`, `featured_status`, `meta_title`, `meta_description`, `meta_image`, `request_status`, `denied_note`) VALUES
(1, 'admin', 1, 'Bindi Frill Gatta Cap Medium 24cm', 'coke-c2ZWWD', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-15-61e2ac7d3ef44.png\"]', '2022-01-15-61e2ac7d412d5.png', NULL, NULL, 'youtube', NULL, '[\"#008000\",\"#FFA500\",\"#FFC0CB\",\"#FF0000\"]', 0, 'null', '[]', '[{\"type\":\"Green\",\"price\":45,\"sku\":\"BFGCM2-Green\",\"qty\":30},{\"type\":\"Orange\",\"price\":45,\"sku\":\"BFGCM2-Orange\",\"qty\":30},{\"type\":\"Pink\",\"price\":45,\"sku\":\"BFGCM2-Pink\",\"qty\":30},{\"type\":\"Red\",\"price\":45,\"sku\":\"BFGCM2-Red\",\"qty\":30}]', 0, 45, 45, '0', 'percent', '0', 'flat', 120, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-08 01:43:34', '2022-01-18 13:10:18', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(2, 'admin', 1, 'Birthday Boy Candle Big', 'lays-zl9sxv', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4d433c924a.png\"]', '2022-01-29-61f4d433ca680.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\"]', 0, 'null', '[]', '[{\"type\":\"Blue\",\"price\":100,\"sku\":null,\"qty\":100}]', 0, 100, 80, '0', 'percent', '20', 'flat', 100, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-08 01:47:46', '2022-02-02 19:42:13', 1, 1, NULL, NULL, '2022-01-15-61e2a13d4f0b5.png', 1, NULL),
(3, 'admin', 1, 'Birthday Girl Candle Small PVC Packing', 'birthday-girl-candle-small-pvc-packing-P3nRD1', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4d3b26b4c4.png\"]', '2022-01-29-61f4d3b26c514.png', NULL, NULL, 'youtube', NULL, '[\"#FFC0CB\"]', 0, 'null', '[]', '[{\"type\":\"Pink\",\"price\":100,\"sku\":null,\"qty\":30}]', 0, 100, 75, '0', 'percent', '25', 'flat', 30, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-20 06:51:13', '2022-01-29 05:42:16', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(4, 'admin', 1, 'Churri Candle Balloon Design 8pcs Pack', 'churri-candle-balloon-design-8pcs-pack-L5PHyH', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-20-61e90d1a965e6.png\"]', '2022-01-20-61e90d1a9b5d7.png', NULL, NULL, 'youtube', NULL, '[]', 0, 'null', '[]', '[]', 0, 90, 70, '0', 'percent', '0', 'flat', 50, '<p>Use Birthday Celebration On Birthday Cakes</p>\r\n\r\n<p>Available in Multi Colours</p>', 0, NULL, '2022-01-20 07:19:54', '2022-01-20 07:21:25', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(5, 'admin', 1, 'Churri candle smiley 8pcs pack', 'churri-candle-smiley-8pcs-pack-GuaiA1', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4d192bc670.png\"]', '2022-01-29-61f4d192bd6d7.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]}]', '[{\"type\":\"Multi\",\"price\":90,\"sku\":\"Ccs8p-Multi\",\"qty\":30}]', 0, 90, 70, '0', 'percent', '20', 'flat', 30, '<p>Use Birthday Celebration On Birthday Cakes<br />\r\nAvailable in Multi Colours</p>', 0, NULL, '2022-01-20 07:25:24', '2022-01-29 05:33:11', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(6, 'admin', 1, 'Curly Candle Star 4pcs Pack', 'curly-candle-star-4pcs-pack-gnoS0Q', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4cfba1d8f4.png\"]', '2022-01-29-61f4cfba1ea7d.png', NULL, NULL, 'youtube', NULL, '[\"#FF8C00\",\"#FF0000\"]', 0, 'null', '[]', '[{\"type\":\"DarkOrange\",\"price\":120,\"sku\":\"CCS4P-DarkOrange\",\"qty\":30},{\"type\":\"Red\",\"price\":120,\"sku\":\"CCS4P-Red\",\"qty\":30}]', 0, 120, 80, '0', 'percent', '40', 'flat', 60, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-20 07:33:31', '2022-01-29 05:25:19', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(7, 'admin', 1, 'Curly Churri Candle 4pcs pack', 'curly-churri-candle-4pcs-pack-4j59EV', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4cf4f806d1.png\"]', '2022-01-29-61f4cf4f81a24.png', NULL, NULL, 'youtube', NULL, '[\"#FF1493\",\"#008000\",\"#FF0000\",\"#FFFF00\"]', 0, 'null', '[]', '[{\"type\":\"DeepPink\",\"price\":80,\"sku\":\"CCC4p-DeepPink\",\"qty\":30},{\"type\":\"Green\",\"price\":80,\"sku\":\"CCC4p-Green\",\"qty\":30},{\"type\":\"Red\",\"price\":80,\"sku\":\"CCC4p-Red\",\"qty\":30},{\"type\":\"Yellow\",\"price\":80,\"sku\":\"CCC4p-Yellow\",\"qty\":30}]', 0, 80, 60, '0', 'percent', '20', 'flat', 120, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-20 07:56:13', '2022-01-29 05:23:32', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(8, 'admin', 1, 'Floating Candle Heart Shape 50pcs Pack', 'floating-candle-heart-shape-50pcs-pack-blG1P4', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-20-61e9164fcf711.png\"]', '2022-01-20-61e9164fd685b.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\"]', 0, 'null', '[]', '[{\"type\":\"Blue\",\"price\":420,\"sku\":\"FCHS5P-Blue\",\"qty\":50}]', 0, 420, 360, '0', 'percent', '0', 'flat', 50, '<p>Use For Birthday,Wedding &nbsp;And Different Decoration Uses</p>', 0, NULL, '2022-01-20 07:59:11', '2022-01-20 07:59:11', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(9, 'admin', 1, 'Floating Candle Heart Shape 50pcs Pack', 'floating-candle-heart-shape-50pcs-pack-EpiCYd', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-20-61e916aec2618.png\"]', '2022-01-20-61e916aec87d8.png', NULL, NULL, 'youtube', NULL, '[\"#FFC0CB\"]', 0, 'null', '[]', '[{\"type\":\"Pink\",\"price\":420,\"sku\":\"FCHS5P-Pink\",\"qty\":50}]', 0, 420, 360, '0', 'percent', '0', 'flat', 50, '<p>Use For Birthday,Wedding &nbsp;And Different Decoration Uses</p>', 0, NULL, '2022-01-20 08:00:46', '2022-01-20 08:00:46', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(10, 'admin', 1, 'Floating Candle Heart Shape 50pcs Pack', 'floating-candle-heart-shape-50pcs-pack-PMZPz5', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-20-61e91704e5871.png\"]', '2022-01-20-61e91704ebbe3.png', NULL, NULL, 'youtube', NULL, '[\"#FF0000\"]', 0, 'null', '[]', '[{\"type\":\"Red\",\"price\":420,\"sku\":\"FCHS5P-Red\",\"qty\":50}]', 0, 420, 360, '0', 'percent', '0', 'flat', 50, '<p>Use For Birthday,Wedding &nbsp;And Different Decoration Uses</p>', 0, NULL, '2022-01-20 08:02:12', '2022-01-20 08:02:12', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(11, 'admin', 1, 'Floating Candle Heart Shape 50pcs Pack', 'floating-candle-heart-shape-50pcs-pack-LxG0KO', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-20-61e92e287bc93.png\"]', '2022-01-20-61e92e28848bc.png', NULL, NULL, 'youtube', NULL, '[\"#FFFFFF\"]', 0, 'null', '[]', '[{\"type\":\"White\",\"price\":420,\"sku\":\"FCHS5P-White\",\"qty\":50}]', 0, 420, 360, '0', 'percent', '0', 'flat', 50, '<p>Use For Wedding Mehndi Event And Different Decoration Uses</p>', 0, NULL, '2022-01-20 09:40:56', '2022-01-20 09:40:56', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(12, 'admin', 1, 'Floating Candle Heart Shape 50pcs Pack', 'floating-candle-heart-shape-50pcs-pack-kVAqms', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4ce8beaec8.png\",\"2022-01-29-61f4ce8bec04f.png\",\"2022-01-29-61f4ce8bec630.png\",\"2022-01-29-61f4cea256817.png\"]', '2022-01-29-61f4ce8becef4.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\",\"#9370DB\",\"#FFC0CB\",\"#FF0000\",\"#FFFFFF\"]', 0, 'null', '[]', '[{\"type\":\"Blue\",\"price\":420,\"sku\":\"FCHS5P-Blue\",\"qty\":30},{\"type\":\"MediumPurple\",\"price\":420,\"sku\":\"FCHS5P-MediumPurple\",\"qty\":30},{\"type\":\"Pink\",\"price\":420,\"sku\":\"FCHS5P-Pink\",\"qty\":30},{\"type\":\"Red\",\"price\":420,\"sku\":\"FCHS5P-Red\",\"qty\":30},{\"type\":\"White\",\"price\":420,\"sku\":\"FCHS5P-White\",\"qty\":30}]', 0, 420, 360, '0', 'percent', '60', 'flat', 150, '<p>Use For Wedding Mehndi Event And Different Decoration Uses</p>', 0, NULL, '2022-01-20 09:44:12', '2022-01-29 05:20:34', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(13, 'admin', 1, 'Floating Candle Multi Color 10pcs Pack', 'floating-candle-multi-color-10pcs-pack-1L2K3l', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4cc8d10a03.png\"]', '2022-01-29-61f4cc8d1195b.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]}]', '[{\"type\":\"Multi\",\"price\":80,\"sku\":\"FCMC1P-Multi\",\"qty\":30}]', 0, 80, 60, '0', 'percent', '20', 'flat', 30, '<p>Use For Birthday,Wedding &nbsp;And Different Decoration Uses<br />\r\nAvailable in Multi Colours</p>', 0, NULL, '2022-01-20 09:46:52', '2022-01-29 05:11:45', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(18, 'admin', 1, 'Floating Candle Round Shape 50pcs Pack', 'floating-candle-round-shape-50pcs-pack-910HBM', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4cbaa4e1ee.png\",\"2022-01-29-61f4cbaa4f444.png\",\"2022-01-29-61f4cbaa4f8f0.png\",\"2022-01-29-61f4cbc3e47ce.png\"]', '2022-01-29-61f4cbaa4feec.png', NULL, NULL, 'youtube', NULL, '[\"#9370DB\",\"#FFC0CB\",\"#FF0000\",\"#87CEEB\",\"#FFFF00\"]', 0, 'null', '[]', '[{\"type\":\"MediumPurple\",\"price\":420,\"sku\":\"FCRS5P-MediumPurple\",\"qty\":30},{\"type\":\"Pink\",\"price\":420,\"sku\":\"FCRS5P-Pink\",\"qty\":30},{\"type\":\"Red\",\"price\":420,\"sku\":\"FCRS5P-Red\",\"qty\":30},{\"type\":\"SkyBlue\",\"price\":420,\"sku\":\"FCRS5P-SkyBlue\",\"qty\":30},{\"type\":\"Yellow\",\"price\":420,\"sku\":\"FCRS5P-Yellow\",\"qty\":30}]', 0, 420, 360, '0', 'percent', '60', 'flat', 150, '<p>Use For Birthday,Wedding &nbsp;And Different Decoration Uses</p>', 0, NULL, '2022-01-20 10:01:11', '2022-01-29 05:11:02', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(19, 'admin', 1, 'Bindi Frill Gatta Cap Medium 24cm', 'bindi-frill-gatta-cap-medium-24cm-SIxnoP', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-20-61e93c2e64267.png\",\"2022-01-20-61e93c2e6ddbe.png\",\"2022-01-20-61e93c2e71a34.png\",\"2022-01-20-61e93c2e75b84.png\"]', '2022-01-20-61e93c2e79faa.png', NULL, NULL, 'youtube', NULL, '[\"#008000\",\"#FFA500\",\"#FFC0CB\",\"#FF0000\"]', 0, '[\"6\",\"10\",\"5\"]', '[{\"name\":\"choice_6\",\"title\":\"Characters\",\"options\":[\"Ben ten\",\"      Tom&Jerry\",\"      Baby Boss\",\"      Spiderman\",\"      Unicon\",\"      Frozen\"]},{\"name\":\"choice_10\",\"title\":\"Packs\",\"options\":[\"Dozen\",\"  single\"]},{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium 24cm\"]}]', '[{\"type\":\"Green-Benten-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Green-Benten-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Green-Benten-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Green-Benten-single-Medium24cm\",\"qty\":30},{\"type\":\"Green-Tom&Jerry-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Green-Tom&Jerry-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Green-Tom&Jerry-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Green-Tom&Jerry-single-Medium24cm\",\"qty\":30},{\"type\":\"Green-BabyBoss-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Green-BabyBoss-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Green-BabyBoss-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Green-BabyBoss-single-Medium24cm\",\"qty\":30},{\"type\":\"Green-Spiderman-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Green-Spiderman-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Green-Spiderman-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Green-Spiderman-single-Medium24cm\",\"qty\":30},{\"type\":\"Green-Unicon-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Green-Unicon-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Green-Unicon-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Green-Unicon-single-Medium24cm\",\"qty\":30},{\"type\":\"Green-Frozen-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Green-Frozen-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Green-Frozen-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Green-Frozen-single-Medium24cm\",\"qty\":30},{\"type\":\"Orange-Benten-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Orange-Benten-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Orange-Benten-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Orange-Benten-single-Medium24cm\",\"qty\":30},{\"type\":\"Orange-Tom&Jerry-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Orange-Tom&Jerry-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Orange-Tom&Jerry-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Orange-Tom&Jerry-single-Medium24cm\",\"qty\":30},{\"type\":\"Orange-BabyBoss-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Orange-BabyBoss-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Orange-BabyBoss-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Orange-BabyBoss-single-Medium24cm\",\"qty\":30},{\"type\":\"Orange-Spiderman-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Orange-Spiderman-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Orange-Spiderman-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Orange-Spiderman-single-Medium24cm\",\"qty\":30},{\"type\":\"Orange-Unicon-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Orange-Unicon-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Orange-Unicon-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Orange-Unicon-single-Medium24cm\",\"qty\":30},{\"type\":\"Orange-Frozen-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Orange-Frozen-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Orange-Frozen-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Orange-Frozen-single-Medium24cm\",\"qty\":30},{\"type\":\"Pink-Benten-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Pink-Benten-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Pink-Benten-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Pink-Benten-single-Medium24cm\",\"qty\":30},{\"type\":\"Pink-Tom&Jerry-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Pink-Tom&Jerry-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Pink-Tom&Jerry-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Pink-Tom&Jerry-single-Medium24cm\",\"qty\":30},{\"type\":\"Pink-BabyBoss-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Pink-BabyBoss-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Pink-BabyBoss-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Pink-BabyBoss-single-Medium24cm\",\"qty\":30},{\"type\":\"Pink-Spiderman-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Pink-Spiderman-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Pink-Spiderman-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Pink-Spiderman-single-Medium24cm\",\"qty\":30},{\"type\":\"Pink-Unicon-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Pink-Unicon-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Pink-Unicon-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Pink-Unicon-single-Medium24cm\",\"qty\":30},{\"type\":\"Pink-Frozen-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Pink-Frozen-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Pink-Frozen-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Pink-Frozen-single-Medium24cm\",\"qty\":30},{\"type\":\"Red-Benten-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Red-Benten-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Red-Benten-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Red-Benten-single-Medium24cm\",\"qty\":30},{\"type\":\"Red-Tom&Jerry-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Red-Tom&Jerry-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Red-Tom&Jerry-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Red-Tom&Jerry-single-Medium24cm\",\"qty\":30},{\"type\":\"Red-BabyBoss-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Red-BabyBoss-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Red-BabyBoss-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Red-BabyBoss-single-Medium24cm\",\"qty\":30},{\"type\":\"Red-Spiderman-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Red-Spiderman-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Red-Spiderman-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Red-Spiderman-single-Medium24cm\",\"qty\":30},{\"type\":\"Red-Unicon-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Red-Unicon-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Red-Unicon-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Red-Unicon-single-Medium24cm\",\"qty\":30},{\"type\":\"Red-Frozen-Dozen-Medium24cm\",\"price\":375,\"sku\":\"BFGCM2-Red-Frozen-Dozen-Medium24cm\",\"qty\":30},{\"type\":\"Red-Frozen-single-Medium24cm\",\"price\":45,\"sku\":\"BFGCM2-Red-Frozen-single-Medium24cm\",\"qty\":30}]', 0, 45, 30, '0', 'percent', '15', 'flat', 1440, '<p>Use For Birthday Party<br />\r\nCharacter: Ben ten,Tom &amp; Jerry, Baby Boss,Spiderman ,Unicon,Frozen<br />\r\nSize: Medium 24cm</p>', 0, NULL, '2022-01-20 10:40:46', '2022-01-29 07:38:45', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(20, 'admin', 1, 'Bindi Frill Gatta Cap small 20cm', 'bindi-frill-gatta-cap-small-20cm-UMQhIH', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-20-61e93db773d40.png\",\"2022-01-20-61e93db77af59.png\",\"2022-01-20-61e93db78045f.png\",\"2022-01-20-61e93db7865c6.png\"]', '2022-01-20-61e93db78d310.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\"]', 0, '[\"6\",\"5\"]', '[{\"name\":\"choice_6\",\"title\":\"Characters\",\"options\":[\"Ben ten\",\"  Tom & Jerry\",\"   Baby Boss\",\"  Spiderman \",\"  Unicon\",\"frozen\"]},{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Small 20cm\"]}]', '[{\"type\":\"Blue-Benten-Small20cm\",\"price\":35,\"sku\":\"BFGCs2-Blue-Benten-Small20cm\",\"qty\":1},{\"type\":\"Blue-Tom&Jerry-Small20cm\",\"price\":35,\"sku\":\"BFGCs2-Blue-Tom&Jerry-Small20cm\",\"qty\":1},{\"type\":\"Blue-BabyBoss-Small20cm\",\"price\":35,\"sku\":\"BFGCs2-Blue-BabyBoss-Small20cm\",\"qty\":1},{\"type\":\"Blue-Spiderman-Small20cm\",\"price\":35,\"sku\":\"BFGCs2-Blue-Spiderman-Small20cm\",\"qty\":1},{\"type\":\"Blue-Unicon-Small20cm\",\"price\":35,\"sku\":\"BFGCs2-Blue-Unicon-Small20cm\",\"qty\":1},{\"type\":\"Blue-frozen-Small20cm\",\"price\":35,\"sku\":\"BFGCs2-Blue-frozen-Small20cm\",\"qty\":1}]', 0, 35, 25, '0', 'percent', '0', 'flat', 6, '<p>Use For Birthday Party<br />\r\nCharacter: Ben ten,Tom &amp; Jerry, Baby Boss,Spiderman ,Unicon,Frozen<br />\r\nSize: Small 20cm</p>', 0, NULL, '2022-01-20 10:47:19', '2022-02-12 12:32:48', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(21, 'admin', 1, 'Bindi Gatta Cap', 'bindi-gatta-cap-VWf8mV', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-20-61e93e3b20580.png\"]', '2022-01-20-61e93e3b2f729.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\",\"5\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]},{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\",\"  Small\"]}]', '[{\"type\":\"Multi-Medium\",\"price\":35,\"sku\":\"BGC-Multi-Medium\",\"qty\":30},{\"type\":\"Multi-Small\",\"price\":35,\"sku\":\"BGC-Multi-Small\",\"qty\":30}]', 0, 35, 25, '0', 'percent', '0', 'flat', 60, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-20 10:49:31', '2022-01-20 11:16:09', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(22, 'admin', 1, 'Bindi Gatta Cap', 'bindi-gatta-cap-EC8Wsa', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'kg', 1, 1, '[\"2022-01-20-61e94681a8e38.png\",\"2022-01-20-61e94681b36b2.png\",\"2022-01-20-61e94681b5cc4.png\",\"2022-01-20-61e94681b88bb.png\"]', '2022-01-20-61e94681bb6b5.png', NULL, NULL, 'youtube', NULL, '[\"#000000\",\"#FF0000\",\"#FFFF00\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\",\"Small\"]}]', '[{\"type\":\"Black-Medium\",\"price\":25,\"sku\":\"BGC-Black-Medium\",\"qty\":30},{\"type\":\"Black-Small\",\"price\":15,\"sku\":\"BGC-Black-Small\",\"qty\":30},{\"type\":\"Red-Medium\",\"price\":25,\"sku\":\"BGC-Red-Medium\",\"qty\":30},{\"type\":\"Red-Small\",\"price\":15,\"sku\":\"BGC-Red-Small\",\"qty\":30},{\"type\":\"Yellow-Medium\",\"price\":25,\"sku\":\"BGC-Yellow-Medium\",\"qty\":30},{\"type\":\"Yellow-Small\",\"price\":15,\"sku\":\"BGC-Yellow-Small\",\"qty\":30}]', 0, 25, 15, '0', 'percent', '0', 'flat', 180, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-20 11:24:49', '2022-01-20 11:24:49', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(23, 'admin', 1, 'Emoji Cap 24cm Medium Lace', 'emoji-cap-24cm-medium-lace-Gw0btj', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-21-61ea8565b3858.png\",\"2022-01-21-61ea8565b9b85.png\",\"2022-01-21-61ea8565bcc4b.png\"]', '2022-01-21-61ea8565c1ed8.png', NULL, NULL, 'youtube', NULL, '[\"#008000\",\"#FFA500\",\"#FFFF00\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Green-Medium\",\"price\":60,\"sku\":\"EC2ML-Green-Medium\",\"qty\":30},{\"type\":\"Orange-Medium\",\"price\":60,\"sku\":\"EC2ML-Orange-Medium\",\"qty\":30},{\"type\":\"Yellow-Medium\",\"price\":60,\"sku\":\"EC2ML-Yellow-Medium\",\"qty\":30}]', 0, 60, 40, '0', 'percent', '0', 'flat', 90, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-21 10:05:25', '2022-01-21 10:05:25', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(24, 'admin', 1, 'Foam Cap Small', 'foam-cap-small-WNlQ0E', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-21-61ea8a8c45d61.png\",\"2022-01-21-61ea8a8c55d7f.png\",\"2022-01-21-61ea8a8c5a080.png\",\"2022-01-21-61ea8a8c62372.png\"]', '2022-01-21-61ea8a8c655b7.png', NULL, NULL, 'youtube', NULL, '[\"#FFA500\",\"#FFC0CB\",\"#FF0000\",\"#FFFFFF\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Small\"]}]', '[{\"type\":\"Orange-Small\",\"price\":120,\"sku\":\"FCS-Orange-Small\",\"qty\":30},{\"type\":\"Pink-Small\",\"price\":120,\"sku\":\"FCS-Pink-Small\",\"qty\":30},{\"type\":\"Red-Small\",\"price\":120,\"sku\":\"FCS-Red-Small\",\"qty\":30},{\"type\":\"White-Small\",\"price\":120,\"sku\":\"FCS-White-Small\",\"qty\":30}]', 0, 120, 70, '0', 'percent', '0', 'flat', 120, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-21 10:27:24', '2022-01-21 10:27:24', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(25, 'admin', 1, 'Frill Gatta Cap 20cm Small', 'frill-gatta-cap-20cm-small-Kdh5PN', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-21-61ea8c69a8f3a.png\",\"2022-01-21-61ea8c69b101f.png\",\"2022-01-21-61ea8c69b348a.png\",\"2022-01-21-61ea8c69b5512.png\"]', '2022-01-21-61ea8c69bb5e5.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"6\",\"7\",\"5\"]', '[{\"name\":\"choice_6\",\"title\":\"Characters\",\"options\":[\"Benten\",\"Mickey Mouse\",\"Tom Jerry\",\"Spidermen\",\"Car\",\"Frozen \",\"minion \",\"Sofia\",\"HB \",\"Doremon\"]},{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]},{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Small\"]}]', '[{\"type\":\"Benten-Multi-Small\",\"price\":30,\"sku\":\"FGC2S-Benten-Multi-Small\",\"qty\":30},{\"type\":\"MickeyMouse-Multi-Small\",\"price\":30,\"sku\":\"FGC2S-MickeyMouse-Multi-Small\",\"qty\":30},{\"type\":\"TomJerry-Multi-Small\",\"price\":30,\"sku\":\"FGC2S-TomJerry-Multi-Small\",\"qty\":30},{\"type\":\"Spidermen-Multi-Small\",\"price\":30,\"sku\":\"FGC2S-Spidermen-Multi-Small\",\"qty\":30},{\"type\":\"Car-Multi-Small\",\"price\":30,\"sku\":\"FGC2S-Car-Multi-Small\",\"qty\":30},{\"type\":\"Frozen-Multi-Small\",\"price\":30,\"sku\":\"FGC2S-Frozen-Multi-Small\",\"qty\":30},{\"type\":\"minion-Multi-Small\",\"price\":30,\"sku\":\"FGC2S-minion-Multi-Small\",\"qty\":30},{\"type\":\"Sofia-Multi-Small\",\"price\":30,\"sku\":\"FGC2S-Sofia-Multi-Small\",\"qty\":30},{\"type\":\"HB-Multi-Small\",\"price\":30,\"sku\":\"FGC2S-HB-Multi-Small\",\"qty\":30},{\"type\":\"Doremon-Multi-Small\",\"price\":30,\"sku\":\"FGC2S-Doremon-Multi-Small\",\"qty\":30}]', 0, 30, 20, '0', 'percent', '0', 'flat', 300, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-21 10:35:21', '2022-01-21 10:35:21', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(26, 'admin', 1, 'Frill Gatta Cap 24cm Medium', 'frill-gatta-cap-24cm-medium-tzPGnt', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-21-61ea918c7c631.png\",\"2022-01-21-61ea918c892ce.png\",\"2022-01-21-61ea918c8c259.png\"]', '2022-01-21-61ea918c8ec8d.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"6\",\"7\",\"5\"]', '[{\"name\":\"choice_6\",\"title\":\"Characters\",\"options\":[\"Benten\",\"Mickey Mouse\",\"Tom Jerry\",\"Spidermen\",\"Car\",\"Frozen \",\"minion \",\"Sofia\",\"HB \",\"Mottu Patllu\"]},{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]},{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Benten-Multi-Medium\",\"price\":35,\"sku\":\"FGC2M-Benten-Multi-Medium\",\"qty\":30},{\"type\":\"MickeyMouse-Multi-Medium\",\"price\":35,\"sku\":\"FGC2M-MickeyMouse-Multi-Medium\",\"qty\":30},{\"type\":\"TomJerry-Multi-Medium\",\"price\":35,\"sku\":\"FGC2M-TomJerry-Multi-Medium\",\"qty\":30},{\"type\":\"Spidermen-Multi-Medium\",\"price\":35,\"sku\":\"FGC2M-Spidermen-Multi-Medium\",\"qty\":30},{\"type\":\"Car-Multi-Medium\",\"price\":35,\"sku\":\"FGC2M-Car-Multi-Medium\",\"qty\":30},{\"type\":\"Frozen-Multi-Medium\",\"price\":35,\"sku\":\"FGC2M-Frozen-Multi-Medium\",\"qty\":30},{\"type\":\"minion-Multi-Medium\",\"price\":35,\"sku\":\"FGC2M-minion-Multi-Medium\",\"qty\":30},{\"type\":\"Sofia-Multi-Medium\",\"price\":35,\"sku\":\"FGC2M-Sofia-Multi-Medium\",\"qty\":30},{\"type\":\"HB-Multi-Medium\",\"price\":35,\"sku\":\"FGC2M-HB-Multi-Medium\",\"qty\":30},{\"type\":\"MottuPatllu-Multi-Medium\",\"price\":35,\"sku\":\"FGC2M-MottuPatllu-Multi-Medium\",\"qty\":30}]', 0, 35, 25, '0', 'percent', '0', 'flat', 300, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-21 10:57:16', '2022-01-21 10:57:16', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(27, 'admin', 1, 'HB Afshan Print Kiran Lace Cap', 'hb-afshan-print-kiran-lace-cap-cmCO7d', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-21-61ea9e076e853.png\",\"2022-01-21-61ea9e0781f83.png\",\"2022-01-21-61ea9e0785494.png\",\"2022-01-21-61ea9e0788574.png\"]', '2022-01-21-61ea9e078c193.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\",\"#FFC0CB\",\"#FFFFFF\",\"#FFFF00\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\",\"Small\"]}]', '[{\"type\":\"Blue-Medium\",\"price\":45,\"sku\":\"HAPKLC-Blue-Medium\",\"qty\":30},{\"type\":\"Blue-Small\",\"price\":35,\"sku\":\"HAPKLC-Blue-Small\",\"qty\":30},{\"type\":\"Pink-Medium\",\"price\":45,\"sku\":\"HAPKLC-Pink-Medium\",\"qty\":30},{\"type\":\"Pink-Small\",\"price\":35,\"sku\":\"HAPKLC-Pink-Small\",\"qty\":30},{\"type\":\"White-Medium\",\"price\":45,\"sku\":\"HAPKLC-White-Medium\",\"qty\":30},{\"type\":\"White-Small\",\"price\":35,\"sku\":\"HAPKLC-White-Small\",\"qty\":30},{\"type\":\"Yellow-Medium\",\"price\":45,\"sku\":\"HAPKLC-Yellow-Medium\",\"qty\":30},{\"type\":\"Yellow-Small\",\"price\":35,\"sku\":\"HAPKLC-Yellow-Small\",\"qty\":30}]', 0, 35, 45, '0', 'percent', '0', 'flat', 240, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-21 11:50:31', '2022-01-21 11:50:31', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(28, 'admin', 1, 'HB Afshan Print Kiran Lace Cap', 'hb-afshan-print-kiran-lace-cap-rX91HC', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-21-61eaa27ca69c0.png\",\"2022-01-21-61eaa27cb524f.png\",\"2022-01-21-61eaa27cbc0f9.png\",\"2022-01-21-61eaa27cbe7a1.png\"]', '2022-01-21-61eaa27cc512c.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\",\"#008000\",\"#FF0000\",\"#FFFF00\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\",\"Small\"]}]', '[{\"type\":\"Blue-Medium\",\"price\":45,\"sku\":\"HAPKLC-Blue-Medium\",\"qty\":30},{\"type\":\"Blue-Small\",\"price\":35,\"sku\":\"HAPKLC-Blue-Small\",\"qty\":30},{\"type\":\"Green-Medium\",\"price\":45,\"sku\":\"HAPKLC-Green-Medium\",\"qty\":30},{\"type\":\"Green-Small\",\"price\":35,\"sku\":\"HAPKLC-Green-Small\",\"qty\":30},{\"type\":\"Red-Medium\",\"price\":45,\"sku\":\"HAPKLC-Red-Medium\",\"qty\":30},{\"type\":\"Red-Small\",\"price\":35,\"sku\":\"HAPKLC-Red-Small\",\"qty\":30},{\"type\":\"Yellow-Medium\",\"price\":45,\"sku\":\"HAPKLC-Yellow-Medium\",\"qty\":30},{\"type\":\"Yellow-Small\",\"price\":35,\"sku\":\"HAPKLC-Yellow-Small\",\"qty\":30}]', 0, 35, 45, '0', 'percent', '0', 'flat', 240, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-21 12:09:32', '2022-01-21 12:09:32', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(29, 'admin', 1, 'Frill Gatta Cap 34cm Large', 'frill-gatta-cap-34cm-large-RJdAm0', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-21-61eaa3374c049.png\",\"2022-01-21-61eaa33756dab.png\",\"2022-01-21-61eaa3375ecfa.png\",\"2022-01-21-61eaa337640b7.png\"]', '2022-01-21-61eaa33768f11.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"6\",\"7\",\"5\"]', '[{\"name\":\"choice_6\",\"title\":\"Characters\",\"options\":[\"Ben ten\",\"Mickey Mouse\",\"Tom&Jerry\",\"Spiderman\",\"Cars\",\"Frozen \",\"Minion \",\"Sofia\",\"Happy Birthday\",\"Mottu Patllu\"]},{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]},{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Large\"]}]', '[{\"type\":\"Benten-Multi-Large\",\"price\":40,\"sku\":\"FGC3L-Benten-Multi-Large\",\"qty\":30},{\"type\":\"MickeyMouse-Multi-Large\",\"price\":40,\"sku\":\"FGC3L-MickeyMouse-Multi-Large\",\"qty\":30},{\"type\":\"Tom&Jerry-Multi-Large\",\"price\":40,\"sku\":\"FGC3L-Tom&Jerry-Multi-Large\",\"qty\":30},{\"type\":\"Spiderman-Multi-Large\",\"price\":40,\"sku\":\"FGC3L-Spiderman-Multi-Large\",\"qty\":30},{\"type\":\"Cars-Multi-Large\",\"price\":40,\"sku\":\"FGC3L-Cars-Multi-Large\",\"qty\":30},{\"type\":\"Frozen-Multi-Large\",\"price\":40,\"sku\":\"FGC3L-Frozen-Multi-Large\",\"qty\":30},{\"type\":\"Minion-Multi-Large\",\"price\":40,\"sku\":\"FGC3L-Minion-Multi-Large\",\"qty\":30},{\"type\":\"Sofia-Multi-Large\",\"price\":40,\"sku\":\"FGC3L-Sofia-Multi-Large\",\"qty\":30},{\"type\":\"HappyBirthday-Multi-Large\",\"price\":40,\"sku\":\"FGC3L-HappyBirthday-Multi-Large\",\"qty\":30},{\"type\":\"MottuPatllu-Multi-Large\",\"price\":40,\"sku\":\"FGC3L-MottuPatllu-Multi-Large\",\"qty\":30}]', 0, 40, 30, '0', 'percent', '0', 'flat', 300, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-21 12:12:39', '2022-01-21 12:12:39', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(30, 'admin', 1, 'HB Afshan Print White Ball Cap', 'hb-afshan-print-white-ball-cap-cLssVx', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'kg', 1, 1, '[\"2022-01-21-61eaa3f2b8652.png\",\"2022-01-21-61eaa3f2bf5c6.png\",\"2022-01-21-61eaa3f2c2649.png\",\"2022-01-21-61eaa3f2c490e.png\"]', '2022-01-21-61eaa3f2c7328.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\",\"#008000\",\"#FFA500\",\"#FFFF00\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\",\"Small\"]}]', '[{\"type\":\"Blue-Medium\",\"price\":60,\"sku\":\"HAPWBC-Blue-Medium\",\"qty\":30},{\"type\":\"Blue-Small\",\"price\":55,\"sku\":\"HAPWBC-Blue-Small\",\"qty\":30},{\"type\":\"Green-Medium\",\"price\":60,\"sku\":\"HAPWBC-Green-Medium\",\"qty\":30},{\"type\":\"Green-Small\",\"price\":55,\"sku\":\"HAPWBC-Green-Small\",\"qty\":30},{\"type\":\"Orange-Medium\",\"price\":60,\"sku\":\"HAPWBC-Orange-Medium\",\"qty\":30},{\"type\":\"Orange-Small\",\"price\":55,\"sku\":\"HAPWBC-Orange-Small\",\"qty\":30},{\"type\":\"Yellow-Medium\",\"price\":60,\"sku\":\"HAPWBC-Yellow-Medium\",\"qty\":30},{\"type\":\"Yellow-Small\",\"price\":55,\"sku\":\"HAPWBC-Yellow-Small\",\"qty\":30}]', 0, 55, 60, '0', 'percent', '0', 'flat', 240, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-21 12:15:46', '2022-01-21 12:15:46', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(31, 'admin', 1, 'HB Lining Polka Dots Lace Cap Medium', 'hb-lining-polka-dots-lace-cap-medium-g7BOh1', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-21-61eaa5d552db4.png\",\"2022-01-21-61eaa5d55a3c6.png\",\"2022-01-21-61eaa5d55c8f4.png\"]', '2022-01-21-61eaa5d55f7f8.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\",\"#008000\",\"#FFFF00\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Blue-Medium\",\"price\":80,\"sku\":\"HLPDLCM-Blue-Medium\",\"qty\":30},{\"type\":\"Green-Medium\",\"price\":80,\"sku\":\"HLPDLCM-Green-Medium\",\"qty\":30},{\"type\":\"Yellow-Medium\",\"price\":80,\"sku\":\"HLPDLCM-Yellow-Medium\",\"qty\":30}]', 0, 80, 60, '0', 'percent', '0', 'flat', 90, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-21 12:23:49', '2022-01-21 12:23:49', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(32, 'admin', 1, 'HB Lining Polka Dots Lace Cap Medium', 'hb-lining-polka-dots-lace-cap-medium-RUj690', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebc96e87990.png\",\"2022-01-22-61ebc96e8a44f.png\",\"2022-01-22-61ebc96e8b8ce.png\",\"2022-01-22-61ebc96e8cbe9.png\"]', '2022-01-22-61ebc96e8e152.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\",\"#FFA500\",\"#FFC0CB\",\"#FF0000\",\"#87CEEB\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Blue-Medium\",\"price\":40,\"sku\":\"HLPDLCM-Blue-Medium\",\"qty\":30},{\"type\":\"Orange-Medium\",\"price\":40,\"sku\":\"HLPDLCM-Orange-Medium\",\"qty\":30},{\"type\":\"Pink-Medium\",\"price\":40,\"sku\":\"HLPDLCM-Pink-Medium\",\"qty\":30},{\"type\":\"Red-Medium\",\"price\":40,\"sku\":\"HLPDLCM-Red-Medium\",\"qty\":30},{\"type\":\"SkyBlue-Medium\",\"price\":40,\"sku\":\"HLPDLCM-SkyBlue-Medium\",\"qty\":30}]', 0, 40, 30, '0', 'percent', '0', 'flat', 150, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 09:07:58', '2022-01-22 09:07:58', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(33, 'admin', 1, 'HB Lining Polka Dots Lace Cap Medium', 'hb-lining-polka-dots-lace-cap-medium-J2eM6T', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebca8e9d705.png\",\"2022-01-22-61ebca8ea03e8.png\",\"2022-01-22-61ebca8ea15e3.png\",\"2022-01-22-61ebca8ea2444.png\"]', '2022-01-22-61ebca8ea34e8.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\",\"#800080\",\"#2E8B57\",\"#FFFFFF\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Blue-Medium\",\"price\":40,\"sku\":\"HLPDLCM-Blue-Medium\",\"qty\":30},{\"type\":\"Purple-Medium\",\"price\":40,\"sku\":\"HLPDLCM-Purple-Medium\",\"qty\":30},{\"type\":\"SeaGreen-Medium\",\"price\":40,\"sku\":\"HLPDLCM-SeaGreen-Medium\",\"qty\":30},{\"type\":\"White-Medium\",\"price\":40,\"sku\":\"HLPDLCM-White-Medium\",\"qty\":30}]', 0, 40, 30, '0', 'percent', '0', 'flat', 120, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 09:12:46', '2022-01-22 09:12:46', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(34, 'admin', 1, 'HB Lining Polka Dots Lace Cap Medium', 'hb-lining-polka-dots-lace-cap-medium-DN74LA', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebd2f866ccc.png\",\"2022-01-22-61ebd2f868bb1.png\",\"2022-01-22-61ebd2f88086c.png\",\"2022-01-22-61ebd2f881e62.png\"]', '2022-01-22-61ebd2f882ce9.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\",\"#FFC0CB\",\"#FF0000\",\"#FFFF00\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Blue-Medium\",\"price\":40,\"sku\":\"HLPDLCM-Blue-Medium\",\"qty\":30},{\"type\":\"Pink-Medium\",\"price\":40,\"sku\":\"HLPDLCM-Pink-Medium\",\"qty\":30},{\"type\":\"Red-Medium\",\"price\":40,\"sku\":\"HLPDLCM-Red-Medium\",\"qty\":30},{\"type\":\"Yellow-Medium\",\"price\":40,\"sku\":\"HLPDLCM-Yellow-Medium\",\"qty\":30}]', 0, 40, 30, '0', 'percent', '0', 'flat', 120, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 09:48:40', '2022-01-22 09:48:40', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(35, 'admin', 1, 'HB Lining Polka Dots Lace Cap Medium', 'hb-lining-polka-dots-lace-cap-medium-P8weE0', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebd376eaf29.png\",\"2022-01-22-61ebd376ec991.png\",\"2022-01-22-61ebd376ed780.png\",\"2022-01-22-61ebd376ee4ba.png\"]', '2022-01-22-61ebd376ef1fc.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"6\"]', '[{\"name\":\"choice_6\",\"title\":\"Characters\",\"options\":[\"Spidermen\",\"Cars\",\"Frozen \",\"Minion \",\"Doremon\"]}]', '[{\"type\":\"Spidermen\",\"price\":40,\"sku\":\"HLPDLCM-Spidermen\",\"qty\":30},{\"type\":\"Cars\",\"price\":40,\"sku\":\"HLPDLCM-Cars\",\"qty\":30},{\"type\":\"Frozen\",\"price\":40,\"sku\":\"HLPDLCM-Frozen\",\"qty\":30},{\"type\":\"Minion\",\"price\":40,\"sku\":\"HLPDLCM-Minion\",\"qty\":30},{\"type\":\"Doremon\",\"price\":40,\"sku\":\"HLPDLCM-Doremon\",\"qty\":30}]', 0, 40, 30, '0', 'percent', '0', 'flat', 150, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 09:50:46', '2022-01-22 09:50:46', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(36, 'admin', 1, 'HB,Lining,Character Cap Medium24cm', 'hbliningcharacter-cap-medium24cm-rsiT4H', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebd42db8474.png\",\"2022-01-22-61ebd42dbbeec.png\",\"2022-01-22-61ebd42dbdfda.png\",\"2022-01-22-61ebd42dbf193.png\"]', '2022-01-22-61ebd42dc01eb.png', NULL, NULL, 'youtube', NULL, '[\"#000000\",\"#808080\",\"#008000\",\"#FFC0CB\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Black-Medium\",\"price\":40,\"sku\":\"HCM-Black-Medium\",\"qty\":30},{\"type\":\"Gray-Medium\",\"price\":40,\"sku\":\"HCM-Gray-Medium\",\"qty\":30},{\"type\":\"Green-Medium\",\"price\":40,\"sku\":\"HCM-Green-Medium\",\"qty\":30},{\"type\":\"Pink-Medium\",\"price\":40,\"sku\":\"HCM-Pink-Medium\",\"qty\":30}]', 0, 40, 30, '0', 'percent', '0', 'flat', 120, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 09:53:49', '2022-01-22 09:53:49', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(37, 'admin', 1, 'Hb Lining,Polka Dots Cap Raisham', 'hb-liningpolka-dots-cap-raisham-cap-medium-NmABzs', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebd5bbc0ce4.png\",\"2022-01-22-61ebd5bbc37e4.png\"]', '2022-01-22-61ebd5bbc9411.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\",\"#FFFF00\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Blue-Medium\",\"price\":100,\"sku\":\"HLDCRCM-Blue-Medium\",\"qty\":30},{\"type\":\"Yellow-Medium\",\"price\":100,\"sku\":\"HLDCRCM-Yellow-Medium\",\"qty\":30}]', 0, 100, 60, '0', 'percent', '0', 'flat', 60, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 10:00:27', '2022-02-02 15:36:08', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(38, 'admin', 1, 'HB Panni Print Flower Design Cap 24cm Medium', 'hb-panni-print-flower-design-cap-24cm-medium-Kshs7I', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebd73bbc903.png\",\"2022-01-22-61ebd73bc0eeb.png\"]', '2022-01-22-61ebd73bc3b5a.png', NULL, NULL, 'youtube', NULL, '[\"#000000\",\"#0000FF\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Black-Medium\",\"price\":50,\"sku\":\"HPPFDC2M-Black-Medium\",\"qty\":30},{\"type\":\"Blue-Medium\",\"price\":50,\"sku\":\"HPPFDC2M-Blue-Medium\",\"qty\":30}]', 0, 50, 35, '0', 'percent', '0', 'flat', 60, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 10:06:51', '2022-01-22 10:06:51', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(39, 'admin', 1, 'Lace Cap 24cm Medium', 'lace-cap-24cm-medium-KIDrQd', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebda48ac3bc.png\",\"2022-01-22-61ebda48b1f11.png\",\"2022-01-22-61ebda48b3376.png\",\"2022-01-22-61ebda48b43b0.png\"]', '2022-01-22-61ebda48b5320.png', NULL, NULL, 'youtube', NULL, '[\"#008000\",\"#FFA500\",\"#FFC0CB\",\"#FF0000\",\"#FFFF00\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Green-Medium\",\"price\":80,\"sku\":\"LC2M-Green-Medium\",\"qty\":30},{\"type\":\"Orange-Medium\",\"price\":80,\"sku\":\"LC2M-Orange-Medium\",\"qty\":30},{\"type\":\"Pink-Medium\",\"price\":80,\"sku\":\"LC2M-Pink-Medium\",\"qty\":30},{\"type\":\"Red-Medium\",\"price\":80,\"sku\":\"LC2M-Red-Medium\",\"qty\":30},{\"type\":\"Yellow-Medium\",\"price\":80,\"sku\":\"LC2M-Yellow-Medium\",\"qty\":30}]', 0, 80, 60, '0', 'percent', '0', 'flat', 150, '<p>Use for Birthday Party</p>', 0, NULL, '2022-01-22 10:19:52', '2022-01-22 10:19:52', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(40, 'admin', 1, 'Rainbow Cap 24cm Medium', 'rainbow-cap-24cm-medium-GYDfXV', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebdbe7b1886.png\",\"2022-01-22-61ebdbe7b592f.png\",\"2022-01-22-61ebdbe7b794a.png\",\"2022-01-22-61ebdbe7b8e13.png\"]', '2022-01-22-61ebdbe7ba94f.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\",\"5\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]},{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Multi-Medium\",\"price\":45,\"sku\":\"RC2M-Multi-Medium\",\"qty\":30}]', 0, 45, 35, '0', 'percent', '0', 'flat', 30, '<p>Use for Birthday Party</p>', 0, NULL, '2022-01-22 10:26:47', '2022-01-22 10:26:47', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(41, 'admin', 1, 'Ribbon Lace Sheet Design cap 20cm', 'ribbon-lace-sheet-design-cap-20cm-m6XalP', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebdc9139b03.png\",\"2022-01-22-61ebdc913ec4a.png\",\"2022-01-22-61ebdc9140f97.png\"]', '2022-01-22-61ebdc91429ba.png', NULL, NULL, 'youtube', NULL, '[\"#008000\",\"#FF0000\",\"#FFFFFF\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Small\"]}]', '[{\"type\":\"Green-Small\",\"price\":80,\"sku\":\"RLSDc2-Green-Small\",\"qty\":30},{\"type\":\"Red-Small\",\"price\":80,\"sku\":\"RLSDc2-Red-Small\",\"qty\":30},{\"type\":\"White-Small\",\"price\":80,\"sku\":\"RLSDc2-White-Small\",\"qty\":30}]', 0, 80, 50, '0', 'percent', '0', 'flat', 90, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 10:29:37', '2022-01-22 10:29:37', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(42, 'admin', 1, 'Ring Cap Hb,Lining,Character Medium 24cm', 'ring-cap-hbliningcharacter-medium-24cm-emLe3R', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebdea51b8b4.png\",\"2022-01-22-61ebdea523464.png\",\"2022-01-22-61ebdea52496e.png\",\"2022-01-22-61ebdea525a95.png\"]', '2022-01-22-61ebdea5270d4.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\",\"#800080\",\"#FFFFFF\",\"#FFFF00\"]', 0, '[\"5\"]', '[{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Blue-Medium\",\"price\":100,\"sku\":\"RCHM2-Blue-Medium\",\"qty\":30},{\"type\":\"Purple-Medium\",\"price\":100,\"sku\":\"RCHM2-Purple-Medium\",\"qty\":30},{\"type\":\"White-Medium\",\"price\":100,\"sku\":\"RCHM2-White-Medium\",\"qty\":30},{\"type\":\"Yellow-Medium\",\"price\":100,\"sku\":\"RCHM2-Yellow-Medium\",\"qty\":30}]', 0, 100, 70, '0', 'percent', '0', 'flat', 120, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 10:38:29', '2022-01-22 10:38:29', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(43, 'admin', 1, 'Sadi Gatta Cap 20cm Small', 'sadi-gatta-cap-20cm-small-0txZDF', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebdfb12edb7.png\",\"2022-01-22-61ebdfb131131.png\",\"2022-01-22-61ebdfb131e5c.png\",\"2022-01-22-61ebdfb132fac.png\"]', '2022-01-22-61ebdfb134041.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"6\",\"5\"]', '[{\"name\":\"choice_6\",\"title\":\"Characters\",\"options\":[\"Ben ten\",\"Mickey Mouse\",\"Tom&Jerry\",\"Spidermen\",\"Cars\",\"Frozen \",\"Minion \",\"Sofia\",\"Happy Birthday \",\"Mottu Patllu \",\"Hello Kitty\"]},{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Small\"]}]', '[{\"type\":\"Benten-Small\",\"price\":25,\"sku\":\"SGC2S-Benten-Small\",\"qty\":30},{\"type\":\"MickeyMouse-Small\",\"price\":25,\"sku\":\"SGC2S-MickeyMouse-Small\",\"qty\":30},{\"type\":\"Tom&Jerry-Small\",\"price\":25,\"sku\":\"SGC2S-Tom&Jerry-Small\",\"qty\":30},{\"type\":\"Spidermen-Small\",\"price\":25,\"sku\":\"SGC2S-Spidermen-Small\",\"qty\":30},{\"type\":\"Cars-Small\",\"price\":25,\"sku\":\"SGC2S-Cars-Small\",\"qty\":30},{\"type\":\"Frozen-Small\",\"price\":25,\"sku\":\"SGC2S-Frozen-Small\",\"qty\":30},{\"type\":\"Minion-Small\",\"price\":25,\"sku\":\"SGC2S-Minion-Small\",\"qty\":30},{\"type\":\"Sofia-Small\",\"price\":25,\"sku\":\"SGC2S-Sofia-Small\",\"qty\":30},{\"type\":\"HappyBirthday-Small\",\"price\":25,\"sku\":\"SGC2S-HappyBirthday-Small\",\"qty\":30},{\"type\":\"MottuPatllu-Small\",\"price\":25,\"sku\":\"SGC2S-MottuPatllu-Small\",\"qty\":30},{\"type\":\"HelloKitty-Small\",\"price\":25,\"sku\":\"SGC2S-HelloKitty-Small\",\"qty\":30}]', 0, 25, 15, '0', 'percent', '0', 'flat', 330, '<p>Use For Birtdhay Party</p>', 0, NULL, '2022-01-22 10:42:57', '2022-01-22 10:42:57', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(44, 'admin', 1, 'Sadi Gatta Cap 24cm Medium', 'sadi-gatta-cap-24cm-medium-8VFWEa', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebe07f7e041.png\",\"2022-01-22-61ebe07f81228.png\",\"2022-01-22-61ebe07f8279e.png\",\"2022-01-22-61ebe07f83e5d.png\"]', '2022-01-22-61ebe07f85443.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"6\",\"7\"]', '[{\"name\":\"choice_6\",\"title\":\"Characters\",\"options\":[\"Ben ten\",\"Mickey Mouse\",\"Tom&Jerry\",\"Spidermen\",\"Cars\",\"Frozen \",\"Minion \",\"Sofia\",\"Happy Birthday \",\"Mottu Patllu\"]},{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Benten-Medium\",\"price\":35,\"sku\":\"SGC2M-Benten-Medium\",\"qty\":30},{\"type\":\"MickeyMouse-Medium\",\"price\":35,\"sku\":\"SGC2M-MickeyMouse-Medium\",\"qty\":30},{\"type\":\"Tom&Jerry-Medium\",\"price\":35,\"sku\":\"SGC2M-Tom&Jerry-Medium\",\"qty\":30},{\"type\":\"Spidermen-Medium\",\"price\":35,\"sku\":\"SGC2M-Spidermen-Medium\",\"qty\":30},{\"type\":\"Cars-Medium\",\"price\":35,\"sku\":\"SGC2M-Cars-Medium\",\"qty\":30},{\"type\":\"Frozen-Medium\",\"price\":35,\"sku\":\"SGC2M-Frozen-Medium\",\"qty\":30},{\"type\":\"Minion-Medium\",\"price\":35,\"sku\":\"SGC2M-Minion-Medium\",\"qty\":30},{\"type\":\"Sofia-Medium\",\"price\":35,\"sku\":\"SGC2M-Sofia-Medium\",\"qty\":30},{\"type\":\"HappyBirthday-Medium\",\"price\":35,\"sku\":\"SGC2M-HappyBirthday-Medium\",\"qty\":30},{\"type\":\"MottuPatllu-Medium\",\"price\":35,\"sku\":\"SGC2M-MottuPatllu-Medium\",\"qty\":30}]', 0, 35, 20, '0', 'percent', '0', 'flat', 300, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 10:46:23', '2022-01-22 10:46:23', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(45, 'admin', 1, 'Sadi Gatta Cap 34cm Large', 'sadi-gatta-cap-34cm-large-LVRA1S', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-22-61ebe15b5e622.png\",\"2022-01-22-61ebe15b60308.png\",\"2022-01-22-61ebe15b6190f.png\",\"2022-01-22-61ebe15b62c41.png\"]', '2022-01-22-61ebe15b63cae.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"6\",\"5\"]', '[{\"name\":\"choice_6\",\"title\":\"Characters\",\"options\":[\"Ben ten\",\"Mickey Mouse\",\"Tom&Jerry\",\"Spiderman\",\"Cars\",\"Frozen \",\"Minion \",\"Sofia\",\"Happy Birthday \",\"Mottu Patllu\",\"Barbie\"]},{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Large\"]}]', '[{\"type\":\"Benten-Large\",\"price\":50,\"sku\":\"SGC3L-Benten-Large\",\"qty\":30},{\"type\":\"MickeyMouse-Large\",\"price\":50,\"sku\":\"SGC3L-MickeyMouse-Large\",\"qty\":30},{\"type\":\"Tom&Jerry-Large\",\"price\":50,\"sku\":\"SGC3L-Tom&Jerry-Large\",\"qty\":30},{\"type\":\"Spiderman-Large\",\"price\":50,\"sku\":\"SGC3L-Spiderman-Large\",\"qty\":30},{\"type\":\"Cars-Large\",\"price\":50,\"sku\":\"SGC3L-Cars-Large\",\"qty\":30},{\"type\":\"Frozen-Large\",\"price\":50,\"sku\":\"SGC3L-Frozen-Large\",\"qty\":30},{\"type\":\"Minion-Large\",\"price\":50,\"sku\":\"SGC3L-Minion-Large\",\"qty\":30},{\"type\":\"Sofia-Large\",\"price\":50,\"sku\":\"SGC3L-Sofia-Large\",\"qty\":30},{\"type\":\"HappyBirthday-Large\",\"price\":50,\"sku\":\"SGC3L-HappyBirthday-Large\",\"qty\":30},{\"type\":\"MottuPatllu-Large\",\"price\":50,\"sku\":\"SGC3L-MottuPatllu-Large\",\"qty\":30},{\"type\":\"Barbie-Large\",\"price\":50,\"sku\":\"SGC3L-Barbie-Large\",\"qty\":30}]', 0, 50, 25, '0', 'percent', '0', 'flat', 330, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 10:50:03', '2022-01-22 10:50:03', 1, 1, NULL, NULL, 'def.png', 1, NULL);
INSERT INTO `products` (`id`, `added_by`, `user_id`, `name`, `slug`, `category_ids`, `brand_id`, `unit`, `min_qty`, `refundable`, `images`, `thumbnail`, `featured`, `flash_deal`, `video_provider`, `video_url`, `colors`, `variant_product`, `attributes`, `choice_options`, `variation`, `published`, `unit_price`, `purchase_price`, `tax`, `tax_type`, `discount`, `discount_type`, `current_stock`, `details`, `free_shipping`, `attachment`, `created_at`, `updated_at`, `status`, `featured_status`, `meta_title`, `meta_description`, `meta_image`, `request_status`, `denied_note`) VALUES
(46, 'admin', 1, 'Tie Lari Hb Lining, Character Cap', 'tie-lari-hb-lining-character-cap-zSU992', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-22-61ebe2d1251cd.png\",\"2022-01-22-61ebe2d129b19.png\",\"2022-01-22-61ebe2d12b683.png\",\"2022-01-22-61ebe2d12d082.png\"]', '2022-02-03-61fb83e5260fa.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\",\"#228B22\",\"#008000\",\"#FFFF00\"]', 0, '[\"10\"]', '[{\"name\":\"choice_10\",\"title\":\"Packs\",\"options\":[\"Single Pieces\",\"12 Pieces\"]}]', '[{\"type\":\"Blue-SinglePieces\",\"price\":60,\"sku\":\"TLHLCC-Blue-SinglePieces\",\"qty\":998},{\"type\":\"Blue-12Pieces\",\"price\":720,\"sku\":\"TLHLCC-Blue-12Pieces\",\"qty\":999},{\"type\":\"ForestGreen-SinglePieces\",\"price\":60,\"sku\":\"TLHLCC-ForestGreen-SinglePieces\",\"qty\":1000},{\"type\":\"ForestGreen-12Pieces\",\"price\":720,\"sku\":\"TLHLCC-ForestGreen-12Pieces\",\"qty\":1000},{\"type\":\"Green-SinglePieces\",\"price\":60,\"sku\":\"TLHLCC-Green-SinglePieces\",\"qty\":1000},{\"type\":\"Green-12Pieces\",\"price\":720,\"sku\":\"TLHLCC-Green-12Pieces\",\"qty\":1000},{\"type\":\"Yellow-SinglePieces\",\"price\":60,\"sku\":\"TLHLCC-Yellow-SinglePieces\",\"qty\":1000},{\"type\":\"Yellow-12Pieces\",\"price\":720,\"sku\":\"TLHLCC-Yellow-12Pieces\",\"qty\":1000}]', 0, 80, 60, '0', 'percent', '0', 'flat', 7997, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 10:56:17', '2022-05-21 15:15:25', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(47, 'admin', 1, 'Tie Lari Hb Lining, Character Cap', 'tie-lari-hb-lining-character-cap-InRtRF', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-22-61ebe3827b128.png\",\"2022-01-22-61ebe3827fbab.png\",\"2022-01-22-61ebe382816b5.png\",\"2022-01-22-61ebe38282ede.png\"]', '2022-01-22-61ebe38284603.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"6\",\"5\"]', '[{\"name\":\"choice_6\",\"title\":\"Characters\",\"options\":[\"Spiderman\",\"    Cars\",\"    Barbie \",\"    Minion \",\"    Happy Birthday\"]},{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium 24cm\"]}]', '[{\"type\":\"Spiderman-Medium24cm\",\"price\":80,\"sku\":\"TLHLCC-Spiderman-Medium24cm\",\"qty\":1000},{\"type\":\"Cars-Medium24cm\",\"price\":80,\"sku\":\"TLHLCC-Cars-Medium24cm\",\"qty\":1000},{\"type\":\"Barbie-Medium24cm\",\"price\":80,\"sku\":\"TLHLCC-Barbie-Medium24cm\",\"qty\":1000},{\"type\":\"Minion-Medium24cm\",\"price\":80,\"sku\":\"TLHLCC-Minion-Medium24cm\",\"qty\":1000},{\"type\":\"HappyBirthday-Medium24cm\",\"price\":80,\"sku\":\"TLHLCC-HappyBirthday-Medium24cm\",\"qty\":1000}]', 0, 80, 60, '0', 'percent', '0', 'flat', 5000, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 10:59:14', '2022-02-03 11:55:21', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(48, 'admin', 1, 'Ring Cap Hb,Lining,Character Medium 24cm', 'ring-cap-hbliningcharacter-medium-24cm-vGozTp', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-22-61ebe4893fd19.png\",\"2022-01-22-61ebe4894406d.png\",\"2022-01-22-61ebe48945470.png\",\"2022-01-22-61ebe48946325.png\"]', '2022-01-22-61ebe489475c2.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"6\",\"5\"]', '[{\"name\":\"choice_6\",\"title\":\"Characters\",\"options\":[\"Spiderman\",\"  Cars\",\"  Frozen \",\"  Minion \",\"  Hello Kitty\",\"  Mottu Patllu\",\"  Duck\"]},{\"name\":\"choice_5\",\"title\":\"Size\",\"options\":[\"Medium\"]}]', '[{\"type\":\"Spiderman-Medium\",\"price\":80,\"sku\":\"RCHM2-Spiderman-Medium\",\"qty\":1000},{\"type\":\"Cars-Medium\",\"price\":80,\"sku\":\"RCHM2-Cars-Medium\",\"qty\":1000},{\"type\":\"Frozen-Medium\",\"price\":80,\"sku\":\"RCHM2-Frozen-Medium\",\"qty\":1000},{\"type\":\"Minion-Medium\",\"price\":80,\"sku\":\"RCHM2-Minion-Medium\",\"qty\":1000},{\"type\":\"HelloKitty-Medium\",\"price\":80,\"sku\":\"RCHM2-HelloKitty-Medium\",\"qty\":1000},{\"type\":\"MottuPatllu-Medium\",\"price\":80,\"sku\":\"RCHM2-MottuPatllu-Medium\",\"qty\":1000},{\"type\":\"Duck-Medium\",\"price\":80,\"sku\":\"RCHM2-Duck-Medium\",\"qty\":1000}]', 0, 80, 60, '0', 'percent', '0', 'flat', 7000, '<p>Use For Birthday Party</p>', 0, NULL, '2022-01-22 11:03:37', '2022-02-03 11:39:15', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(54, 'admin', 1, 'Glass candle 3 pcs pack', 'glass-candle-3-pcs-pack-btpC0b', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4c8cb448bf.png\",\"2022-01-29-61f4c8cb470a0.png\",\"2022-01-29-61f4c8cb4741a.png\",\"2022-01-29-61f4c934d8ee7.png\"]', '2022-01-29-61f4c8cb47833.png', NULL, NULL, 'youtube', NULL, '[\"#00008B\",\"#008000\",\"#9370DB\",\"#FF0000\",\"#FFFFFF\",\"#FFFF00\"]', 0, 'null', '[]', '[{\"type\":\"DarkBlue\",\"price\":420,\"sku\":\"Gc3pp-DarkBlue\",\"qty\":1000},{\"type\":\"Green\",\"price\":420,\"sku\":\"Gc3pp-Green\",\"qty\":1000},{\"type\":\"MediumPurple\",\"price\":420,\"sku\":\"Gc3pp-MediumPurple\",\"qty\":1000},{\"type\":\"Red\",\"price\":420,\"sku\":\"Gc3pp-Red\",\"qty\":1000},{\"type\":\"White\",\"price\":420,\"sku\":\"Gc3pp-White\",\"qty\":1000},{\"type\":\"Yellow\",\"price\":420,\"sku\":\"Gc3pp-Yellow\",\"qty\":1000}]', 0, 420, 420, '0', 'percent', '40', 'flat', 6000, '<p>Use For Birthday,Wedding &nbsp;And Different Decoration Uses</p>', 0, NULL, '2022-01-26 10:03:12', '2022-02-03 11:37:34', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(60, 'admin', 1, 'Glass Candle 4pcs Pack', 'glass-candle-4pcs-pack-X7vFIQ', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4c51111533.png\",\"2022-01-29-61f4c51113cd5.png\",\"2022-01-29-61f4c511140ac.png\",\"2022-01-29-61f4c532bbba7.png\"]', '2022-01-29-61f4c5463c4f2.png', NULL, NULL, 'youtube', NULL, '[\"#6495ED\",\"#8FBC8F\",\"#FF69B4\",\"#9370DB\",\"#FF0000\",\"#FFFFFF\"]', 0, 'null', '[]', '[{\"type\":\"CornflowerBlue\",\"price\":300,\"sku\":\"GC4P-CornflowerBlue\",\"qty\":1000},{\"type\":\"DarkSeaGreen\",\"price\":300,\"sku\":\"GC4P-DarkSeaGreen\",\"qty\":1000},{\"type\":\"HotPink\",\"price\":300,\"sku\":\"GC4P-HotPink\",\"qty\":1000},{\"type\":\"MediumPurple\",\"price\":300,\"sku\":\"GC4P-MediumPurple\",\"qty\":1000},{\"type\":\"Red\",\"price\":300,\"sku\":\"GC4P-Red\",\"qty\":1000},{\"type\":\"White\",\"price\":300,\"sku\":\"GC4P-White\",\"qty\":1000}]', 0, 300, 250, '0', 'percent', '50', 'flat', 6000, '<p>Use For Birthday,Wedding &nbsp;And Different Decoration Uses</p>', 0, NULL, '2022-01-27 07:37:41', '2022-02-03 11:35:29', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(61, 'admin', 1, 'Number Candle Stick 1-3', 'number-candle-stick-1-3-eMiPM8', '[{\"id\":\"2\",\"position\":1},{\"id\":\"5\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4d4f8ac045.png\",\"2022-01-29-61f4dfc6c9533.png\"]', '2022-01-29-61f4d4f8ad286.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\"]', 0, 'null', '[]', '[{\"type\":\"Blue\",\"price\":120,\"sku\":\"NCS1-Blue\",\"qty\":1000}]', 0, 120, 80, '0', 'percent', '40', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-27 07:44:26', '2022-02-01 21:22:18', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(63, 'admin', 1, 'Hb Cake Topper Candle', 'hb-cake-topper-candle-mfwZ4R', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-28-61f3f6c74662a.png\",\"2022-01-28-61f3f6c747b76.png\",\"2022-01-28-61f3f6c7482c2.png\"]', '2022-01-27-61f24fbbf0247.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"METALLIC GOLD\",\"          METALLIC PINK\",\"          METALLIC SKY BLUE\"]}]', '[{\"type\":\"METALLICGOLD\",\"price\":170,\"sku\":\"HCTC-METALLICGOLD\",\"qty\":1000},{\"type\":\"METALLICPINK\",\"price\":170,\"sku\":\"HCTC-METALLICPINK\",\"qty\":1000},{\"type\":\"METALLICSKYBLUE\",\"price\":170,\"sku\":\"HCTC-METALLICSKYBLUE\",\"qty\":1000}]', 0, 170, 140, '0', 'percent', '30', 'flat', 3000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-27 07:54:35', '2022-02-01 21:08:21', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(64, 'admin', 1, 'Hb Plastic Stand Candle 20pcs Pack', 'hb-plastic-stand-candle-20pcs-pack-WrExlu', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4d58370cbf.png\"]', '2022-01-29-61f4d58371cc3.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]}]', '[{\"type\":\"Multi\",\"price\":120,\"sku\":\"HPSC2P-Multi\",\"qty\":1000}]', 0, 120, 120, '0', 'percent', '20', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-27 07:58:06', '2022-02-01 20:57:27', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(66, 'admin', 1, 'Curly Candle Smiley 4pcs pack', 'curly-candle-smiley-4pcs-pack-mk7mct', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4d09408c58.png\"]', '2022-01-29-61f4d09409e12.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]}]', '[{\"type\":\"Multi\",\"price\":120,\"sku\":\"CCS4p-Multi\",\"qty\":1000}]', 0, 120, 80, '0', 'percent', '40', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 05:28:52', '2022-02-01 20:43:42', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(67, 'admin', 1, 'Churri Candle Stand 12pcs', 'churri-candle-stand-12pcs-QETFk8', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4d126e2e56.png\"]', '2022-01-29-61f4d126e3ff3.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]}]', '[{\"type\":\"Multi\",\"price\":60,\"sku\":\"CCS1-Multi\",\"qty\":1000}]', 0, 60, 40, '0', 'percent', '20', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 05:31:18', '2022-02-01 20:15:35', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(68, 'admin', 1, 'Churri Candle Opp 10pcs Pack', 'churri-candle-opp-10pcs-pack-ifsZsU', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4d269b55e0.png\"]', '2022-01-29-61f4d269b69f8.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]}]', '[{\"type\":\"Multi\",\"price\":300,\"sku\":\"CCO1P-Multi\",\"qty\":1000}]', 0, 300, 340, '0', 'percent', '40', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 05:36:41', '2022-02-01 20:02:03', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(69, 'admin', 1, 'Churri Candle Baloon Design 8pcs Pack', 'churri-candle-baloon-design-8pcs-pack-84MBmr', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4d3354fd08.png\"]', '2022-01-29-61f4d33550c0a.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]}]', '[{\"type\":\"Multi\",\"price\":90,\"sku\":\"CCBD8P-Multi\",\"qty\":1000}]', 0, 90, 70, '0', 'percent', '20', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 05:40:05', '2022-02-01 19:52:34', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(70, 'admin', 1, 'Hb Tinka Candle Metallic Color', 'hb-tinka-candle-metallic-color-JQr9jz', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4d6001999f.png\"]', '2022-01-29-61f4d6001a8e6.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Metallic silver\"]}]', '[{\"type\":\"Metallicsilver\",\"price\":150,\"sku\":\"HTCMC-Metallicsilver\",\"qty\":1000}]', 0, 150, 120, '0', 'percent', '30', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 05:52:00', '2022-02-01 19:43:40', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(72, 'admin', 1, 'Light Candle', 'light-candle-vSWJDV', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4d7f2502ed.png\",\"2022-02-01-61f942e72ec79.png\",\"2022-02-01-61f942e7366a1.png\"]', '2022-01-29-61f4d7f2513cd.png', NULL, NULL, 'youtube', NULL, '[\"#FFFF00\"]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]}]', '[{\"type\":\"Yellow-Multi\",\"price\":720,\"sku\":\"LC-Yellow-Multi\",\"qty\":1000}]', 0, 720, 650, '0', 'percent', '70', 'flat', 1000, '<p>Use For Birthday,Wedding &nbsp;And Different Decoration Uses</p>', 0, NULL, '2022-01-29 06:00:18', '2022-02-01 19:25:43', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(73, 'admin', 1, 'Magic Candle Big 6Pcs', 'magic-candle-big-6pcs-LnR2Qm', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4d8aa0cb76.png\"]', '2022-01-29-61f4d8aa0da77.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]}]', '[{\"type\":\"Multi\",\"price\":80,\"sku\":\"MCB6-Multi\",\"qty\":1000}]', 0, 80, 60, '0', 'percent', '20', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:03:22', '2022-02-01 19:17:11', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(74, 'admin', 1, 'Magic Candle Small 10Pcs', 'magic-candle-small-10pcs-wE0pKR', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4da3b016a3.png\"]', '2022-01-29-61f4da3b02734.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]}]', '[{\"type\":\"Multi\",\"price\":40,\"sku\":\"MCS1-Multi\",\"qty\":1000}]', 0, 40, 25, '0', 'percent', '15', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:10:03', '2022-02-01 19:16:07', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(75, 'admin', 1, 'Music Candle 3pcs Pack', 'music-candle-3pcs-pack-7FLlP3', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4da9369d0e.png\"]', '2022-01-29-61f4da936ab14.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]}]', '[{\"type\":\"Multi\",\"price\":80,\"sku\":\"MC3P-Multi\",\"qty\":1000}]', 0, 80, 55, '0', 'percent', '25', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:11:31', '2022-02-01 19:07:53', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(76, 'admin', 1, 'My First Birthday Candle', 'my-first-birthday-candle-l290wY', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4daf62a7f1.png\"]', '2022-01-29-61f4daf62b6d6.png', NULL, NULL, 'youtube', NULL, '[\"#0000FF\"]', 0, 'null', '[]', '[{\"type\":\"Blue\",\"price\":100,\"sku\":\"MFBC-Blue\",\"qty\":1000}]', 0, 100, 70, '0', 'percent', '30', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:13:10', '2022-02-01 18:58:12', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(77, 'admin', 1, 'Number Candle 01', 'number-candle-0-9-QzWX41', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4db44f36d2.png\"]', '2022-01-29-61f4db4500593.png', NULL, NULL, 'youtube', NULL, '[\"#F8F8FF\"]', 0, 'null', '[]', '[{\"type\":\"GhostWhite\",\"price\":50,\"sku\":\"NC0-GhostWhite\",\"qty\":30}]', 0, 50, 30, '0', 'percent', '20', 'flat', 30, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:14:29', '2022-01-29 06:17:44', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(78, 'admin', 1, 'Number Candle 00', 'number-candle-0-9-OIbAB1', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4db9f80252.png\"]', '2022-01-29-61f4db9f81171.png', NULL, NULL, 'youtube', NULL, '[\"#F8F8FF\"]', 0, 'null', '[]', '[{\"type\":\"GhostWhite\",\"price\":50,\"sku\":\"NC0-GhostWhite\",\"qty\":30}]', 0, 50, 30, '0', 'percent', '20', 'flat', 30, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:15:59', '2022-01-29 06:17:20', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(79, 'admin', 1, 'Number Candle 03', 'number-candle-03-IpdEPG', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4dc39d664c.png\"]', '2022-01-29-61f4dc39d76fc.png', NULL, NULL, 'youtube', NULL, '[\"#F8F8FF\"]', 0, 'null', '[]', '[{\"type\":\"GhostWhite\",\"price\":50,\"sku\":\"NC0-GhostWhite\",\"qty\":30}]', 0, 50, 30, '0', 'percent', '20', 'flat', 30, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:18:33', '2022-01-29 06:18:33', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(80, 'admin', 1, 'Number Candle 04', 'number-candle-04-yVqIh6', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4dd80b99ce.png\"]', '2022-01-29-61f4dd80ba882.png', NULL, NULL, 'youtube', NULL, '[\"#F8F8FF\"]', 0, 'null', '[]', '[{\"type\":\"GhostWhite\",\"price\":50,\"sku\":\"NC0-GhostWhite\",\"qty\":30}]', 0, 50, 30, '0', 'percent', '20', 'flat', 30, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:24:00', '2022-01-29 06:24:00', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(81, 'admin', 1, 'Number Candle 07', 'number-candle-07-wuBWzg', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4de2e10261.png\"]', '2022-01-29-61f4de2e11021.png', NULL, NULL, 'youtube', NULL, '[\"#F8F8FF\"]', 0, 'null', '[]', '[{\"type\":\"GhostWhite\",\"price\":50,\"sku\":\"NC0-GhostWhite\",\"qty\":30}]', 0, 50, 30, '0', 'percent', '20', 'flat', 30, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:26:54', '2022-01-29 06:26:54', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(82, 'admin', 1, 'Number Candle 08', 'number-candle-08-IxFS2S', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4de7b1a2b9.png\"]', '2022-01-29-61f4de7b1b5ce.png', NULL, NULL, 'youtube', NULL, '[\"#F8F8FF\"]', 0, 'null', '[]', '[{\"type\":\"GhostWhite\",\"price\":50,\"sku\":\"NC0-GhostWhite\",\"qty\":30}]', 0, 50, 30, '0', 'percent', '20', 'flat', 30, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:28:11', '2022-01-29 06:28:11', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(83, 'admin', 1, 'Number Candle 09', 'number-candle-09-L5kQNv', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4dec293a4e.png\"]', '2022-01-29-61f4dec295345.png', NULL, NULL, 'youtube', NULL, '[\"#F8F8FF\"]', 0, 'null', '[]', '[{\"type\":\"GhostWhite\",\"price\":50,\"sku\":\"NC0-GhostWhite\",\"qty\":1000}]', 0, 50, 30, '0', 'percent', '20', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:29:22', '2022-02-01 18:48:25', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(84, 'admin', 1, 'Number Candle Golden 1-2', 'number-candle-golden-1-2-XjsMFx', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4df5daf1e6.png\",\"2022-01-29-61f4df5db0178.png\"]', '2022-01-29-61f4df5db0575.png', NULL, NULL, 'youtube', NULL, '[\"#B8860B\"]', 0, 'null', '[]', '[{\"type\":\"DarkGoldenrod\",\"price\":80,\"sku\":\"NCG1-DarkGoldenrod\",\"qty\":1000}]', 0, 80, 60, '0', 'percent', '20', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:31:57', '2022-02-01 18:27:38', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(85, 'admin', 1, 'Number Candle Card 0-9', 'number-candle-card-0-9-cqER4L', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4e02574502.png\"]', '2022-01-29-61f4e0257538b.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Multi\"]}]', '[{\"type\":\"Multi\",\"price\":80,\"sku\":\"NCC0-Multi\",\"qty\":1000}]', 0, 80, 55, '0', 'percent', '25', 'flat', 1000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:35:17', '2022-02-01 17:32:39', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(86, 'admin', 1, 'Pancil Stand Candle Metallic Color 8pcs/Pack', 'pancil-stand-candle-metallic-color-8pcs-pack-omGA4f', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4e0dbb6962.png\",\"2022-01-29-61f4e0dbb7c8a.png\",\"2022-02-02-61fa9ab02ac4d.png\"]', '2022-01-29-61f4e0dbb80e6.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Metallic Silver\",\"    Metallic Gold\",\"    Metallic Multi Colors\"]}]', '[{\"type\":\"MetallicSilver\",\"price\":120,\"sku\":\"PSCMC8-MetallicSilver\",\"qty\":100},{\"type\":\"MetallicGold\",\"price\":120,\"sku\":\"PSCMC8-MetallicGold\",\"qty\":100},{\"type\":\"MetallicMultiColors\",\"price\":120,\"sku\":\"PSCMC8-MetallicMultiColors\",\"qty\":100}]', 0, 120, 95, '0', 'percent', '25', 'flat', 300, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:38:19', '2022-02-02 19:52:32', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(87, 'admin', 1, 'Sparkling Candle 10Cm 6pcs/Pack', 'sparkling-candle-10cm-mg2h7S', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4e1f6e7e29.png\",\"2022-01-29-61f4e1f6e8cbd.png\"]', '2022-01-29-61f4e1f6e9216.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Mix Color\"]}]', '[{\"type\":\"MixColor\",\"price\":250,\"sku\":\"SC16-MixColor\",\"qty\":100}]', 0, 250, 220, '0', 'percent', '30', 'flat', 100, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:43:02', '2022-02-02 19:45:11', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(88, 'admin', 1, 'Sparkling Candle 12Cm 6pcs/Pack', 'sparkling-candle-12cm-2DIUHb', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4e242374f9.png\",\"2022-01-29-61f4e24238453.png\"]', '2022-01-29-61f4e2423891f.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Mix Color\"]}]', '[{\"type\":\"MixColor\",\"price\":280,\"sku\":\"SC16-MixColor\",\"qty\":100}]', 0, 280, 240, '0', 'percent', '40', 'flat', 100, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:44:18', '2022-02-02 17:00:59', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(89, 'admin', 1, 'Sparkling Candle 15Cm 6pcs/Pack', 'sparkling-candle-15cm-8TAPOX', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', NULL, 'pc', 1, 1, '[\"2022-01-29-61f4e279bfe07.png\",\"2022-01-29-61f4e279c0fee.png\"]', '2022-06-10-62a33833bbd38.png', NULL, NULL, 'youtube', NULL, '[]', 0, '[\"7\"]', '[{\"name\":\"choice_7\",\"title\":\"Colours\",\"options\":[\"Mix Color\"]}]', '[{\"type\":\"MixColor\",\"price\":320,\"sku\":\"SC1-MixColor\",\"qty\":100}]', 0, 300, 270, '0', 'percent', '30', 'flat', 100, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:45:13', '2022-06-10 16:25:23', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(90, 'admin', 1, 'Stand Candle Metallic Color Small 10pcs', 'stand-candle-metallic-color-small-10pcs-CEAUji', '[{\"id\":\"2\",\"position\":1},{\"id\":\"3\",\"position\":2}]', 5, 'pc', 1, 1, '[\"2022-01-29-61f4e40ae8d79.png\",\"2022-01-29-61f4e40ae9bd9.png\",\"2022-01-29-61f4e40aea1b7.png\"]', '2022-06-10-62a33788a286d.png', NULL, NULL, 'youtube', NULL, '[\"#DAA520\",\"#800080\",\"#FF0000\"]', 0, '[\"10\"]', '[{\"name\":\"choice_10\",\"title\":\"Packs\",\"options\":[\"1Dozen\",\"          2Dozen\",\"        Single Pieces\"]}]', '[{\"type\":\"Goldenrod-1Dozen\",\"price\":980,\"sku\":\"SCMCS1-Goldenrod-1Dozen\",\"qty\":1000},{\"type\":\"Goldenrod-2Dozen\",\"price\":1940,\"sku\":\"SCMCS1-Goldenrod-2Dozen\",\"qty\":1000},{\"type\":\"Goldenrod-SinglePieces\",\"price\":100,\"sku\":\"SCMCS1-Goldenrod-SinglePieces\",\"qty\":1000},{\"type\":\"Purple-1Dozen\",\"price\":980,\"sku\":\"SCMCS1-Purple-1Dozen\",\"qty\":1000},{\"type\":\"Purple-2Dozen\",\"price\":1940,\"sku\":\"SCMCS1-Purple-2Dozen\",\"qty\":1000},{\"type\":\"Purple-SinglePieces\",\"price\":1000,\"sku\":\"SCMCS1-Purple-SinglePieces\",\"qty\":1000},{\"type\":\"Red-1Dozen\",\"price\":980,\"sku\":\"SCMCS1-Red-1Dozen\",\"qty\":1000},{\"type\":\"Red-2Dozen\",\"price\":1940,\"sku\":\"SCMCS1-Red-2Dozen\",\"qty\":1000},{\"type\":\"Red-SinglePieces\",\"price\":100,\"sku\":\"SCMCS1-Red-SinglePieces\",\"qty\":1000}]', 0, 100, 80, '0', 'percent', '20', 'flat', 9000, '<p>Use Birthday Celebration On Birthday Cakes</p>', 0, NULL, '2022-01-29 06:51:54', '2022-06-10 16:22:32', 1, 1, NULL, NULL, 'def.png', 1, NULL),
(92, 'admin', 1, 'Test  Product', 'test-product-xgLRWL', '[{\"id\":\"8\",\"position\":1},{\"id\":\"9\",\"position\":2}]', NULL, 'kg', 1, 1, '[\"2022-06-09-62a2223f276b0.png\"]', '2022-06-09-62a2223f2b60d.png', NULL, NULL, 'youtube', NULL, '[]', 0, 'null', '[]', '[]', 0, 100, 100, '0', 'percent', '0', 'flat', 0, '<p>Tes produt for check</p>', 0, NULL, '2022-06-09 20:39:27', '2022-06-09 20:39:27', 1, 1, NULL, NULL, 'def.png', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

CREATE TABLE `product_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `variant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `qty` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search_functions`
--

CREATE TABLE `search_functions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible_for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `search_functions`
--

INSERT INTO `search_functions` (`id`, `key`, `url`, `visible_for`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'admin/dashboard', 'admin', NULL, NULL),
(2, 'Order All', 'admin/orders/list/all', 'admin', NULL, NULL),
(3, 'Order Pending', 'admin/orders/list/pending', 'admin', NULL, NULL),
(4, 'Order Processed', 'admin/orders/list/processed', 'admin', NULL, NULL),
(5, 'Order Delivered', 'admin/orders/list/delivered', 'admin', NULL, NULL),
(6, 'Order Returned', 'admin/orders/list/returned', 'admin', NULL, NULL),
(7, 'Order Failed', 'admin/orders/list/failed', 'admin', NULL, NULL),
(8, 'Brand Add', 'admin/brand/add-new', 'admin', NULL, NULL),
(9, 'Brand List', 'admin/brand/list', 'admin', NULL, NULL),
(10, 'Banner', 'admin/banner/list', 'admin', NULL, NULL),
(11, 'Category', 'admin/category/view', 'admin', NULL, NULL),
(12, 'Sub Category', 'admin/category/sub-category/view', 'admin', NULL, NULL),
(13, 'Sub sub category', 'admin/category/sub-sub-category/view', 'admin', NULL, NULL),
(14, 'Attribute', 'admin/attribute/view', 'admin', NULL, NULL),
(15, 'Product', 'admin/product/list', 'admin', NULL, NULL),
(16, 'Coupon', 'admin/coupon/add-new', 'admin', NULL, NULL),
(17, 'Custom Role', 'admin/custom-role/create', 'admin', NULL, NULL),
(18, 'Employee', 'admin/employee/add-new', 'admin', NULL, NULL),
(19, 'Seller', 'admin/sellers/seller-list', 'admin', NULL, NULL),
(20, 'Contacts', 'admin/contact/list', 'admin', NULL, NULL),
(21, 'Flash Deal', 'admin/deal/flash', 'admin', NULL, NULL),
(22, 'Deal of the day', 'admin/deal/day', 'admin', NULL, NULL),
(23, 'Language', 'admin/business-settings/language', 'admin', NULL, NULL),
(24, 'Mail', 'admin/business-settings/mail', 'admin', NULL, NULL),
(25, 'Shipping method', 'admin/business-settings/shipping-method/add', 'admin', NULL, NULL),
(26, 'Currency', 'admin/currency/view', 'admin', NULL, NULL),
(27, 'Payment method', 'admin/business-settings/payment-method', 'admin', NULL, NULL),
(28, 'SMS Gateway', 'admin/business-settings/sms-gateway', 'admin', NULL, NULL),
(29, 'Support Ticket', 'admin/support-ticket/view', 'admin', NULL, NULL),
(30, 'FAQ', 'admin/helpTopic/list', 'admin', NULL, NULL),
(31, 'About Us', 'admin/business-settings/about-us', 'admin', NULL, NULL),
(32, 'Terms and Conditions', 'admin/business-settings/terms-condition', 'admin', NULL, NULL),
(33, 'Web Config', 'admin/business-settings/web-config', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'def.png',
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_commission_percentage` double(8,2) DEFAULT NULL,
  `gst` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller_wallets`
--

CREATE TABLE `seller_wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) DEFAULT NULL,
  `total_earning` double NOT NULL DEFAULT 0,
  `withdrawn` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `commission_given` double(8,2) NOT NULL DEFAULT 0.00,
  `pending_withdraw` double(8,2) NOT NULL DEFAULT 0.00,
  `delivery_charge_earned` double(8,2) NOT NULL DEFAULT 0.00,
  `collected_cash` double(8,2) NOT NULL DEFAULT 0.00,
  `total_tax_collected` double(8,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_wallets`
--

INSERT INTO `seller_wallets` (`id`, `seller_id`, `total_earning`, `withdrawn`, `created_at`, `updated_at`, `commission_given`, `pending_withdraw`, `delivery_charge_earned`, `collected_cash`, `total_tax_collected`) VALUES
(1, 1, 0, 0, '2022-01-15 16:55:50', '2022-01-15 16:55:50', 0.00, 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `seller_wallet_histories`
--

CREATE TABLE `seller_wallet_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `order_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'received',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'home',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`id`, `customer_id`, `contact_person_name`, `address_type`, `address`, `city`, `zip`, `phone`, `created_at`, `updated_at`, `state`, `country`) VALUES
(1, '2', 'furrukh Rana', 'permanent', '644/c satllite town bahawalpur pakistan', 'pakistan', '63100', '+923334884869', '2022-01-15 16:52:15', '2022-01-15 16:52:15', NULL, 'Pakistan'),
(2, '6', NULL, 'Home', 'Bahwalpur', 'bwp', '56855', '0', '2022-02-01 07:36:52', '2022-02-01 07:36:52', NULL, NULL),
(3, '4', NULL, 'Home', '25-B Mason road lahore', 'lahore', '54000', '0', '2022-02-02 17:06:05', '2022-02-02 17:06:05', NULL, NULL),
(4, '0', 'ali', 'home', 'jdcskdljfwcnewwfeo', 'Lahore', '323423', 'we4234243`', '2022-05-21 15:15:08', '2022-05-21 15:15:08', NULL, 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_methods`
--

CREATE TABLE `shipping_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator_id` bigint(20) DEFAULT NULL,
  `creator_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` decimal(8,2) NOT NULL DEFAULT 0.00,
  `duration` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_methods`
--

INSERT INTO `shipping_methods` (`id`, `creator_id`, `creator_type`, `title`, `cost`, `duration`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'admin', 'COD', '200.00', '2-3 Days', 1, '2022-02-02 13:08:35', '2022-02-02 13:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'def.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_medias`
--

CREATE TABLE `social_medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_medias`
--

INSERT INTO `social_medias` (`id`, `name`, `link`, `icon`, `active_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'twitter', 'https://www.w3schools.com/howto/howto_css_table_responsive.asp', 'fa fa-twitter', 0, 1, '2020-12-31 21:18:03', '2022-01-15 15:59:09'),
(2, 'linkedin', 'https://dev.6amtech.com/', 'fa fa-linkedin', 0, 1, '2021-02-27 16:23:01', '2022-01-15 15:59:06'),
(3, 'google-plus', 'https://dev.6amtech.com/', 'fa fa-google-plus-square', 0, 1, '2021-02-27 16:23:30', '2022-01-15 15:58:46'),
(4, 'pinterest', 'https://dev.6amtech.com/', 'fa fa-pinterest', 0, 1, '2021-02-27 16:24:14', '2022-01-15 15:58:47'),
(5, 'instagram', 'https://dev.6amtech.com/', 'fa fa-instagram', 1, 1, '2021-02-27 16:24:36', '2022-01-15 15:59:04'),
(6, 'facebook', 'facebook.com', 'fa fa-facebook', 1, 1, '2021-02-27 19:19:42', '2021-06-11 17:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `soft_credentials`
--

CREATE TABLE `soft_credentials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

CREATE TABLE `support_tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `subject` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'low',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket_convs`
--

CREATE TABLE `support_ticket_convs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `support_ticket_id` bigint(20) DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `customer_message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `payment_for` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_id` bigint(20) DEFAULT NULL,
  `payment_receiver_id` bigint(20) DEFAULT NULL,
  `paid_by` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_to` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'success',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount` double(8,2) NOT NULL DEFAULT 0.00,
  `transaction_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `translationable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `translationable_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'def.png',
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `street_address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apartment_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cm_firebase_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `payment_card_last_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_card_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_card_fawry_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_medium` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_phone_verified` tinyint(1) NOT NULL DEFAULT 0,
  `temporary_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_email_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `f_name`, `l_name`, `phone`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `street_address`, `country`, `city`, `zip`, `house_no`, `apartment_no`, `cm_firebase_token`, `is_active`, `payment_card_last_four`, `payment_card_brand`, `payment_card_fawry_token`, `login_medium`, `social_id`, `is_phone_verified`, `temporary_token`, `is_email_verified`) VALUES
(1, NULL, 'admin', '1', '88076543', 'def.png', 'admin@decorbyshan.com', NULL, '1a663e139a5d78a43bd26398339e2c64', NULL, '2022-01-07 13:34:47', '2022-01-07 13:34:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0),
(2, NULL, 'furrukh', 'Rana', '3334884869', 'def.png', 'furrukh.raza89@gmail.com', NULL, '$2y$10$xh8vIp8kR4dpih4Q8zR2euf.ViXUDnTTsXxoHoOZrPFxQaObUFNxO', NULL, '2022-01-15 16:49:05', '2022-02-02 14:11:06', NULL, NULL, NULL, NULL, NULL, NULL, 'cUzXJFTYQ-mKzR622oWfgT:APA91bG4CwnnM5yLp09CFDLP8Xbm8MBi4dQ4FAj-IQy33ET1ICtBTDcoqTM1lUDVcHVhOYbfjBBE_w5Osd7aZ-5HB3kGmSjUGUuQGds52UgFK6vRD1KpojaRUhnO9JJxMBsXBqPRq5WN', 1, NULL, NULL, NULL, NULL, NULL, 0, 'gkArND7HV2B0dg7VfmWRyYcoL5TZgYEZ97Jshdlk', 0),
(3, NULL, 'Asad', 'Ch', '+923037818078', 'def.png', 'asad078@gmail.com', NULL, '$2y$10$mTL1gaIdBZCtjmvJCtHeTOimtfE5HYavgm2TfXEkYBjX4voBNCTK6', NULL, '2022-01-18 11:43:22', '2022-01-18 13:39:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 0, 'ymypc6A6L3o8p07exT1BZIK8QWK5CFZk9pzLo0fO', 0),
(4, NULL, 'Shan', 'Liaqat', '03024611117', 'def.png', 'shan.liaqat@hotmail.com', NULL, '$2y$10$UqU7qC5mY9NJcz6YCtrFn.kqhbDvi3StXaNnybVTo0mCg4LkMEv8W', NULL, '2022-01-27 08:04:30', '2022-02-02 15:16:53', NULL, NULL, NULL, NULL, NULL, NULL, 'erEhYhe4Qr-PRvRW_v_db_:APA91bG2-d9cZh7PJPBhWN28QvYh31GcKZA7dzInCoAxNGk9TMNPgKikMNC69secEDS9W3ETwqkkkaY2Nvw7cU8kmQsp9xKiSVRPPgqDmRNYH51TDAWT0J7dAzd6Gmo9-H86h-xcfSwO', 1, NULL, NULL, NULL, NULL, NULL, 0, 'N5E4FDCc8kOOiceS01An0NSfX3yrWYKbg7Lf3gGD', 0),
(5, NULL, 'Ahsan', 'Khan', '03314303070', 'def.png', 'azk055@hotmail.com', NULL, '$2y$10$crqEuVk8iNFWkZ9B5kHTuuJZNJGgVGkkbC0/2U6671Fw7QrDdxfaO', NULL, '2022-01-27 13:01:43', '2022-01-27 13:01:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0),
(6, NULL, 'Test', 'T', '+923409452780', 'def.png', 'test@gmail.com', NULL, '$2y$10$7UCFfsj.nnrHjkejJJNhp.a8.LE2Rn/TJ/Kbym8LxLAqLr2HYp3iW', NULL, '2022-02-01 07:33:11', '2022-02-01 10:56:16', NULL, NULL, NULL, NULL, NULL, NULL, 'fcj-YQRIShSZLxuJ9LvdvG:APA91bGtEBL8GPMquVAv-hQbXgJgFO3Cps3uQUOSlJu3LQoeGnJFxXoCDn2QpyK33CFddch3hE6G5oGacFaWL5rCN6z6cMRGbZs2P9Pf6Hx4BQITA_dO_dPpek_Q-PHVc0YUiw5G5Ayt', 1, NULL, NULL, NULL, NULL, NULL, 0, 'VAX7dbh6wVgSZ5jEX6Tn6pSYf9k0x1WGmcoZQO9X', 0),
(7, NULL, 'phantom', 'phantom', '126873247892347', 'def.png', 'phantom@gmail.com', NULL, '$2y$10$BlmvCHrPgV0NhX9AFI29iu7927bFv1v60IHOwCyhbn4HvM678hLKC', NULL, '2022-05-21 15:11:37', '2022-05-21 15:11:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_requests`
--

CREATE TABLE `withdraw_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.00',
  `transaction_note` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_wallets`
--
ALTER TABLE `admin_wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_wallet_histories`
--
ALTER TABLE `admin_wallet_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_settings`
--
ALTER TABLE `business_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_shippings`
--
ALTER TABLE `cart_shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chattings`
--
ALTER TABLE `chattings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_wallets`
--
ALTER TABLE `customer_wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_wallet_histories`
--
ALTER TABLE `customer_wallet_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deal_of_the_days`
--
ALTER TABLE `deal_of_the_days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_deals`
--
ALTER TABLE `feature_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deals`
--
ALTER TABLE `flash_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deal_products`
--
ALTER TABLE `flash_deal_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_topics`
--
ALTER TABLE `help_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_transactions`
--
ALTER TABLE `order_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`identity`);

--
-- Indexes for table `paytabs_invoices`
--
ALTER TABLE `paytabs_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone_or_email_verifications`
--
ALTER TABLE `phone_or_email_verifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search_functions`
--
ALTER TABLE `search_functions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`);

--
-- Indexes for table `seller_wallets`
--
ALTER TABLE `seller_wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_wallet_histories`
--
ALTER TABLE `seller_wallet_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_medias`
--
ALTER TABLE `social_medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soft_credentials`
--
ALTER TABLE `soft_credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_tickets`
--
ALTER TABLE `support_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_ticket_convs`
--
ALTER TABLE `support_ticket_convs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD UNIQUE KEY `transactions_id_unique` (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_translationable_id_index` (`translationable_id`),
  ADD KEY `translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_wallets`
--
ALTER TABLE `admin_wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_wallet_histories`
--
ALTER TABLE `admin_wallet_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `business_settings`
--
ALTER TABLE `business_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart_shippings`
--
ALTER TABLE `cart_shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `chattings`
--
ALTER TABLE `chattings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_wallets`
--
ALTER TABLE `customer_wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_wallet_histories`
--
ALTER TABLE `customer_wallet_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deal_of_the_days`
--
ALTER TABLE `deal_of_the_days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature_deals`
--
ALTER TABLE `feature_deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flash_deals`
--
ALTER TABLE `flash_deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flash_deal_products`
--
ALTER TABLE `flash_deal_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `help_topics`
--
ALTER TABLE `help_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100021;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order_transactions`
--
ALTER TABLE `order_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paytabs_invoices`
--
ALTER TABLE `paytabs_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phone_or_email_verifications`
--
ALTER TABLE `phone_or_email_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `product_stocks`
--
ALTER TABLE `product_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `search_functions`
--
ALTER TABLE `search_functions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_wallets`
--
ALTER TABLE `seller_wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seller_wallet_histories`
--
ALTER TABLE `seller_wallet_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_medias`
--
ALTER TABLE `social_medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `soft_credentials`
--
ALTER TABLE `soft_credentials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_ticket_convs`
--
ALTER TABLE `support_ticket_convs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
