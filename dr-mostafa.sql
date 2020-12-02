-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 02:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dr-mostafa`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked_in` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `phone`, `email`, `facebook`, `twitter`, `linked_in`, `image`, `created_at`, `updated_at`) VALUES
(1, '01000000000', 'test@test.com', 'https://www.facebook.com/', 'https://twitter.com/login?username_or_email=', 'https://www.linkedin.com/', 'ZrJzFPC2RHpOTtHuAlExyE2tyeKjTLL4W0xl0o6U.jpeg', '2020-12-02 11:08:45', '2020-12-02 11:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `member_translations`
--

CREATE TABLE `member_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_translations`
--

INSERT INTO `member_translations` (`id`, `member_id`, `name`, `job`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'اسم123', 'طبيب', '<p>وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;</p>', 'ar', '2020-12-02 11:08:45', '2020-12-02 11:25:03'),
(2, 1, 'name', 'doctor', '<p>desc&nbsp;desc&nbsp;desc&nbsp;desc&nbsp;desc&nbsp;desc&nbsp;desc&nbsp;</p>', 'en', '2020-12-02 11:08:45', '2020-12-02 11:08:45');

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
(5, '2020_04_07_204105_laratrust_setup_tables', 1),
(75, '2020_10_11_110146_create_surgeries_table', 2),
(76, '2020_10_11_110204_create_surgery_translations_table', 2),
(77, '2020_10_11_153605_create_images_table', 3),
(80, '2020_10_11_154317_create_question_answers_table', 4),
(81, '2020_10_11_155409_create_question_answer_translations_table', 4),
(82, '2020_10_11_153938_create_videos_table', 5),
(83, '2020_10_11_155938_create_video_translations_table', 5),
(84, '2020_10_12_130505_create_posts_table', 6),
(85, '2020_10_12_130518_create_post_translations_table', 6),
(88, '2020_10_14_013113_create_pages_table', 7),
(89, '2020_10_14_013650_create_page_translations_table', 7),
(90, '2020_10_14_113808_create_page_images_table', 8),
(93, '2020_10_14_133815_create_settings_table', 9),
(94, '2020_10_15_010316_create_setting_translations_table', 9),
(95, '2020_10_15_023103_create_contact_messages_table', 10),
(100, '2020_10_16_192550_create_expectations_table', 11),
(101, '2020_10_16_192734_create_expectation_translations_table', 11),
(102, '2020_10_18_132547_create_partners_table', 12),
(103, '2020_10_18_132639_create_partner_translations_table', 12),
(104, '2020_10_18_140613_create_testmonials_table', 13),
(105, '2020_10_18_140636_create_testmonial_translations_table', 13),
(106, '2020_10_19_114135_create_cultures_table', 14),
(107, '2020_10_19_114450_create_culture_translations_table', 14),
(108, '2020_10_21_120315_create_departments_table', 15),
(109, '2020_10_21_120507_create_department_translations_table', 15),
(110, '2020_10_21_120524_create_jobs_table', 15),
(111, '2020_10_21_120539_create_job_translations_table', 15),
(112, '2020_10_21_120632_create_applicants_table', 15),
(115, '2020_10_22_104135_create_categories_table', 16),
(116, '2020_10_22_104337_create_category_translations_table', 16),
(120, '2020_10_22_123148_create_products_table', 17),
(121, '2020_10_22_123639_create_product_translations_table', 17),
(122, '2020_10_22_123656_create_product_images_table', 17),
(129, '2020_10_24_111000_create_cities_table', 18),
(130, '2020_10_24_111103_create_areas_table', 18),
(131, '2020_10_24_111126_create_delars_table', 18),
(132, '2020_10_24_111244_create_city_translations_table', 18),
(133, '2020_10_24_111319_create_area_translations_table', 18),
(134, '2020_10_24_111331_create_delar_translations_table', 18),
(135, '2020_10_24_143351_create_sectors_table', 19),
(136, '2020_10_24_143421_create_sector_translations_table', 19),
(137, '2020_10_25_130756_create_subscribers_table', 20),
(138, '2020_11_10_112012_create_awards_table', 21),
(139, '2020_11_10_140246_create_events_table', 22),
(140, '2020_11_10_150628_create_certifications_table', 23),
(142, '2020_11_10_153330_create_publications_table', 24),
(143, '2020_11_10_163356_create_theses_table', 25),
(144, '2020_11_11_103554_create_lectures_table', 26),
(145, '2020_11_11_113107_create_workshops_table', 27),
(147, '2020_11_11_135039_create_esteems_table', 28),
(148, '2020_11_12_140913_create_settings_table', 29),
(149, '2020_11_17_123840_create_center_awards_table', 30),
(150, '2020_11_17_124027_create_center_publications_table', 30),
(151, '2020_11_17_124040_create_center_workshops_table', 30),
(152, '2020_11_17_124051_create_center_videos_table', 30),
(153, '2020_11_17_124104_create_center_photo_albums_table', 30),
(154, '2020_11_18_114205_create_sliders_table', 31),
(155, '2020_11_18_114517_create_services_table', 31),
(156, '2020_11_19_111157_create_contact_messages_table', 32),
(157, '2020_11_19_111412_create_subscribers_table', 32),
(158, '2020_12_01_132251_create_setting_translations_table', 33),
(159, '2020_12_02_110248_create_services_table', 34),
(160, '2020_12_02_110551_create_service_translations_table', 34),
(161, '2020_12_02_124039_create_members_table', 35),
(162, '2020_12_02_124048_create_member_translations_table', 35);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'Super Admin', 'Super Admin', '2020-04-13 18:56:16', '2020-04-13 18:56:16'),
(2, 'admin', 'Admin', 'Admin', '2020-04-13 18:56:21', '2020-04-13 18:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(2, 7, 'App\\User'),
(2, 8, 'App\\User'),
(2, 9, 'App\\User'),
(2, 10, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `image`, `created_at`, `updated_at`) VALUES
(2, '4yMxk0GCFh34aZIHJBV9Yc9oycq0UGZEI1tlkJS0.png', 'sRTRk8Sv5G4bm0bjMklmIZW4ZQQJ7i9s3zGRVEZ2.jpeg', '2020-12-02 10:30:31', '2020-12-02 10:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_translations`
--

INSERT INTO `service_translations` (`id`, `service_id`, `title`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(3, 2, 'خدمة 2', '<p>وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;وصف&nbsp;</p>', 'ar', '2020-12-02 10:30:31', '2020-12-02 10:30:31'),
(4, 2, 'Service 2', '<p>description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;description&nbsp;</p>', 'en', '2020-12-02 10:30:32', '2020-12-02 10:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `field_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `field_name`, `key`, `value`, `details`, `image`, `type`, `class`, `created_at`, `updated_at`) VALUES
(26, 'لغة الموقع الاساسية', 'default_lang', 'en', 'ar:العربية|en:الانجليزية', NULL, 'select', 'general', NULL, '2020-12-01 12:27:37'),
(27, 'لوجو الموقع', 'logo', NULL, NULL, 'oz0eVqcu2b5Pv5VhkIWrXEQVuHzVQESEZjggV82h.png', 'image', 'general', NULL, '2020-12-01 12:55:39'),
(28, 'أيقونة الموقع', 'icon', NULL, NULL, 'XAsaZxSyrqXAxN8RJc6hXwNhJywbbWjB0KzuOVwu.png', 'image', 'general', NULL, '2020-12-01 12:58:59'),
(29, 'صورة المشاركة الاجتماعية', 'share_img', NULL, NULL, 'M8Lf5iQR0OrMxotcHyEDt9xWONcunctRO8H76aci.png', 'image', 'general', NULL, '2020-12-01 12:58:59'),
(30, 'أسم الموقع', 'site_name', NULL, NULL, NULL, 'text', 'seo', NULL, NULL),
(31, 'كلمات دلاليه', 'key_words', NULL, NULL, NULL, 'text', 'seo', NULL, NULL),
(32, 'وصف', 'description', NULL, NULL, NULL, 'text', 'seo', NULL, NULL),
(33, 'رقم الهاتف', 'phone', '01275262482', NULL, NULL, 'text', 'contact', NULL, '2020-12-02 08:39:37'),
(37, 'رقم الهاتف', 'phone', NULL, NULL, NULL, 'text', 'contact', NULL, NULL),
(38, 'رقم الهاتف الارض', 'home_line', '05022664', NULL, NULL, 'text', 'contact', NULL, '2020-12-02 08:39:37'),
(39, 'واتس اب', 'whatsapp', '01015960452', NULL, NULL, 'text', 'contact', NULL, '2020-12-02 08:39:37'),
(40, 'فاكس', 'fax', '123456', NULL, NULL, 'text', 'contact', NULL, '2020-12-02 08:39:37'),
(41, 'البريد الالكتروني', 'email', 'test@test.com', NULL, NULL, 'text', 'contact', NULL, '2020-12-02 08:39:37'),
(42, 'العنوان', 'address', NULL, NULL, NULL, 'text', 'contact', NULL, NULL),
(43, 'الخريطه', 'map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3418.9582766687977!2d31.375416185002408!3d31.027412078421893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79dcbe88f6c25%3A0x859ee8ea1a8da4ae!2z2LTYsdmD2Kkg2KrZg9mG2Ygg2YXYtdixINmE2YTYqNix2YXYrNmK2KfYqiDZiNiq2LXZhdmK2YUg2KfZhNmF2YjYp9mC2Lk!5e0!3m2!1sar!2seg!4v1606898370313!5m2!1sar!2seg\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', NULL, NULL, 'text', 'contact', NULL, '2020-12-02 08:39:37'),
(44, 'فيس بوك', 'facebook', 'https://www.facebook.com/', NULL, NULL, 'text', 'social_media', NULL, '2020-12-02 08:48:35'),
(45, 'لينكد إن', 'linked_id', NULL, NULL, NULL, 'text', 'social_media', NULL, NULL),
(46, 'تويتر', 'twitter', 'https://twitter.com/i/sms_login', NULL, NULL, 'text', 'social_media', NULL, '2020-12-02 08:48:35'),
(47, 'جوجل بلس', 'google_plus', NULL, NULL, NULL, 'text', 'social_media', NULL, NULL),
(48, 'فيس بوك', 'facebook', NULL, NULL, NULL, 'text', 'social_media', NULL, NULL),
(49, 'انستجرام', 'instagram', NULL, NULL, NULL, 'text', 'social_media', NULL, NULL),
(50, 'بينتيريست', 'pinterest', NULL, NULL, NULL, 'text', 'social_media', NULL, NULL),
(51, 'RSS', 'rss', NULL, NULL, NULL, 'text', 'social_media', NULL, NULL),
(52, 'سكايب', 'skype', NULL, NULL, NULL, 'text', 'social_media', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `translated_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `setting_id`, `translated_value`, `locale`, `created_at`, `updated_at`) VALUES
(1, 30, 'د مصطفي غنيم', 'ar', '2020-12-02 08:08:38', '2020-12-02 08:08:38'),
(2, 30, 'Dr mostafa', 'en', '2020-12-02 08:08:38', '2020-12-02 08:08:38'),
(3, 31, 'كلمة, كلمة, كلمة', 'ar', '2020-12-02 08:08:38', '2020-12-02 08:08:38'),
(4, 31, 'word, word,', 'en', '2020-12-02 08:08:38', '2020-12-02 08:08:38'),
(5, 32, 'وصف وصف وصف وصف وصف', 'ar', '2020-12-02 08:08:38', '2020-12-02 08:08:38'),
(6, 32, 'descirpiondescirpiondescirpiondescirpiondescirpion', 'en', '2020-12-02 08:08:38', '2020-12-02 08:08:38'),
(7, 42, 'عنوان', 'ar', '2020-12-02 08:41:01', '2020-12-02 08:41:01'),
(8, 42, 'address', 'en', '2020-12-02 08:41:01', '2020-12-02 08:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcm_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `email_verified_at`, `password`, `api_token`, `fcm_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Backend', 'Dev', 'test@test.com', 'By3aVg45STBdNWXaZvumWAYovN1JLAsziqqL7ABd.jpeg', NULL, '$2y$10$zHxBlli8LvQmJKnmmNntXu0NWIVvxvk5hWfmwAlNU1KsjmhHJAJGy', NULL, NULL, 'Bw1P6sbaFtZt0TDjRVgnKM5jdWYmdK3NVXciGbMwA5b351jYxGV7nQR2hcny', '2020-06-16 21:49:58', '2020-10-26 14:16:12'),
(8, 'test', 'tets', 'test2@test.com', 'default.png', NULL, '$2y$10$pcQ2j7gwpcatrW1FHRUh6OnyXHGv9T83dOwyLppZBm/XM0bzwXGvO', NULL, NULL, NULL, '2020-10-17 11:26:56', '2020-10-17 11:26:56'),
(9, 'test', 'tets', 'test3@test.com', 'default.png', NULL, '$2y$10$FAlI4GNV9L2FKKsCwLhXoO0/oTG8mYQMj8C96K1tzFrmF3HPZFnKC', NULL, NULL, NULL, '2020-10-17 14:29:07', '2020-10-17 14:29:07'),
(10, 'Sonya', 'Baldwin', 'cazycumujy@mailinator.com', 'default.png', NULL, '$2y$10$YTwwgqj.cGduW0x6ndI3ZuTcNL0slEimOn.ferazbD2R51Yyta06G', NULL, NULL, NULL, '2020-12-01 10:48:26', '2020-12-01 10:48:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_translations`
--
ALTER TABLE `member_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `member_translations_member_id_locale_unique` (`member_id`,`locale`),
  ADD KEY `member_translations_locale_index` (`locale`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_translations_service_id_locale_unique` (`service_id`,`locale`),
  ADD KEY `service_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  ADD KEY `setting_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member_translations`
--
ALTER TABLE `member_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_translations`
--
ALTER TABLE `member_translations`
  ADD CONSTRAINT `member_translations_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
