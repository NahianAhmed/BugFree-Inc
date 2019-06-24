-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 05:15 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sebaguru`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `addresss` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_in_touch` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `addresss`, `email`, `office_time`, `office_day`, `off_day`, `get_in_touch`, `phone`, `map`, `created_at`, `updated_at`) VALUES
(4, 'sdasd 44', 'nahianahmedcse@gmail.com', '9am to 5pm', 'sat to wed', 'friday', 'dsad  44', 'sdasd', 'https://maps.google.com/maps?q=daffodil%20international%20university&t=&z=13&ie=UTF8&iwloc=&output=embed', '2019-06-10 01:53:07', '2019-06-16 05:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE `experts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exprience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`id`, `name`, `exprience`, `designation`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Nahian Ahmed', '2', 'Bsc in CSE', 'sasad', 'public/asset/images/experts/pine-post-tout.jpg', '2019-06-20 05:27:21', '2019-06-20 05:27:21'),
(3, 'Nahian Ahmed', '2', 'Bsc in CSE', 'dscsA', 'public/asset/images/experts/pine-post-tout.jpg', '2019-06-20 05:37:43', '2019-06-20 05:37:43'),
(4, 'Nahian Ahmed', '2', 'Web Dev', 'The dummy copy at this site is made from a dictionary of 500 words from Cicero\'s original source and the text fragments traditionally added', 'public/asset/images/experts/pine-post-tout.jpg', '2019-06-22 01:46:21', '2019-06-22 01:46:21'),
(5, 'Nahian Ahmed', '2', 'Director', '<span class=\"ILfuVd rjOVwe\"><span class=\"e24Kjd\">The <b>dummy</b> copy at this site is made from a dictionary of 500 words from Cicero\'s original source and the <b>text</b> fragments traditionally added</span></span>', 'public/asset/images/experts/pine-post-tout.jpg', '2019-06-22 01:49:09', '2019-06-22 01:49:09'),
(6, 'Nahian Ahmed', '2', 'Founder And Chairman', '<span class=\"ILfuVd rjOVwe\"><span class=\"e24Kjd\">The <b>dummy</b> copy at this site is made from a dictionary of 500 words from Cicero\'s original source and the <b>text</b> fragments traditionally added</span></span>', 'public/asset/images/experts/pine-post-tout.jpg', '2019-06-22 01:49:27', '2019-06-22 01:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_02_20_180753_create_my_auth__tokens_table', 1),
(2, '2019_02_21_091607_create_user_tables_table', 1),
(3, '2019_06_10_053636_create_contacts_table', 2),
(5, '2019_06_16_051441_create_user_queries_table', 3),
(7, '2019_06_16_081040_create_our_projects_table', 4),
(8, '2019_06_17_085014_create_testimonials_table', 5),
(9, '2019_06_20_040610_create_settings_table', 6),
(10, '2019_06_20_111607_create_experts_table', 7),
(11, '2019_06_22_044623_create_reset_passwords_table', 8),
(13, '2019_06_23_065405_create_services_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `my_auth__tokens`
--

CREATE TABLE `my_auth__tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_projects`
--

CREATE TABLE `our_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_projects`
--

INSERT INTO `our_projects` (`id`, `title`, `link`, `client`, `technology`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'EDUCATION PARLIAMENT', 'http://educationparliament.com/', 'Thinkers Fort', 'Laravel, PHP-7.3, JavaScript, JQuery,AJAX,Mysql etc.', '<h2 class=\"col-title\">Since 2013, EDUCATION PARLIAMENT are working to develop skills and trying to spread knowledge to offer a brighter generation.</h2>', 'public/asset/images/project/EDUCATION PARLIAMENTlogo1 - Copy.png', '2019-06-16 03:46:01', '2019-06-16 03:46:01'),
(2, 'BidyaGuru', 'http://BidyaGuru.com', 'Thinkers Fort', 'CodeIgniter, PHP-5.6, JavaScript, JQuery,AJAX,Mysql etc.', '<div class=\"flip-card-back\">\r\n      \r\n     <div class=\"row\">\r\n         <div class=\"col-md-10 col-md-offset-2\">\r\n\r\n<li class=\"h3\"> Revolutionary outcomes of long 3 years research. </li>\r\n<li class=\"h3\"> Best teachers for one to one online live class. </li>\r\n<li class=\"h3\"> Secured digital payment system. </li>\r\n<li class=\"h3\"> Trustworthy website for actual Learning &amp; Earning    </li>\r\n\r\n         </div>\r\n    \r\n\r\n\r\n     </div> \r\n\r\n\r\n\r\n    </div>', 'public/asset/images/project/BidyaGuruBidya Guru Logo.jpg', '2019-06-16 04:43:31', '2019-06-16 04:43:31'),
(3, 'Ovijan.com', 'http://ovijan.com/', 'Thinkers Fort', 'Laravel, PHP-7.3, JavaScript, JQuery,AJAX,Mysql etc.', '<h1 class=\"section-title\">Funding Welfare Initiatives</h1>\r\n                    <h1 class=\"section-title\">A Professional Crowdfunding Platform</h1>\r\n                    \r\n                    <p class=\"jumbotron-sub-text\">Create your own world class professional fund raising platform within 5 minutes</p>', 'public/asset/images/project/Ovijan.comthinking.png', '2019-06-16 04:55:32', '2019-06-16 04:55:32'),
(9, 'Rent Seba', 'http://rentseba.com', 'Thinkers Fort', 'PHP-5.6, JavaScript, JQuery,AJAX,Mysql etc.', 'sdf f&nbsp; f f fsfsfsd<br>', 'public/asset/images/project/Rent Sebasp1.png', '2019-06-20 02:54:15', '2019-06-20 02:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `reset_passwords`
--

CREATE TABLE `reset_passwords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reset_passwords`
--

INSERT INTO `reset_passwords` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(3, 'nahianahmedcse@gmail.com', '646464', '2019-06-21 23:23:04', '2019-06-21 23:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `short_description`, `long_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Web Devlopment', 'There are so many styles you can combine that is possible to create almost any kind of layout based on Porto Template, navigate in our preview and see the header variations, the colors, and the page content types that you will be able to use.', 'There are so many styles you can combine that is possible to create almost any kind of\r\n                layout based on Porto Template, navigate in our preview and see the header variations, the colors, and\r\n                the page content types that you will be able to use.', 'public/asset/images/services/Screen Shot 2019-04-09 at 14.08.38.png', '2019-06-23 02:24:01', '2019-06-23 02:24:01'),
(3, 'Software Q/A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in adipiscing elit.', 'public/asset/images/services/Screen Shot 2019-04-09 at 14.08.38.png', '2019-06-23 04:24:43', '2019-06-23 04:24:43'),
(4, 'ios Development', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in adipiscing elit.', 'public/asset/images/services/Screen Shot 2019-04-09 at 14.08.38.png', '2019-06-23 04:25:23', '2019-06-23 04:25:23'),
(5, 'AWS Dev', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in adipiscing elit.', 'public/asset/images/services/Screen Shot 2019-04-09 at 14.08.38.png', '2019-06-23 04:25:49', '2019-06-23 04:25:49'),
(6, 'Hosting Services', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in adipiscing elit.', 'public/asset/images/services/Screen Shot 2019-04-09 at 14.08.38.png', '2019-06-23 04:26:30', '2019-06-23 04:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `values` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `field`, `values`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'public/asset/images/logo/SebaGurulogo-default-slim.png', NULL, '2019-06-20 00:41:39'),
(2, 'title', 'Thinkers Fort', NULL, '2019-06-20 02:59:54'),
(3, 'counting', '10,14,13,22', NULL, '2019-06-20 00:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `testimonial`, `created_at`, `updated_at`) VALUES
(1, 'Nahian Ahmed', 'public/asset/images/testimonial/thinking.png', 'xzczxc', '2019-06-17 05:09:04', '2019-06-17 05:09:04'),
(2, 'Nahian Ahmed', 'public/asset/images/testimonial/images.jpg', 'Good services', '2019-06-19 21:44:54', '2019-06-19 21:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`id`, `name`, `email`, `subject`, `message`, `read`, `created_at`, `updated_at`) VALUES
(1, 'Nahian Ahmed', 'nahianahmedcse@gmail.com', 'test', '$data->message = $req->message;', 1, '2019-06-15 23:47:27', '2019-06-16 00:04:47'),
(2, 'Nahian Ahmed', 'admin@admin.com', 'test 2', 'upate', 0, '2019-06-16 00:01:10', '2019-06-16 00:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_tables`
--

CREATE TABLE `user_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_tables`
--

INSERT INTO `user_tables` (`id`, `name`, `email`, `mobile`, `birthdate`, `user_type`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Nahian Ahmed', 'nahianahmedcse@gmail.com', '01677035933', '2019-05-01', 'admin', '$2y$10$2CZZQtcbUtaiYQDMAJmGb..DiYp3qJ.B9A7UTVPRwEWqxGV9fPZNa', '2019-05-27 22:17:03', '2019-06-22 00:04:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_auth__tokens`
--
ALTER TABLE `my_auth__tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_projects`
--
ALTER TABLE `our_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_passwords`
--
ALTER TABLE `reset_passwords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tables`
--
ALTER TABLE `user_tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experts`
--
ALTER TABLE `experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `my_auth__tokens`
--
ALTER TABLE `my_auth__tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_projects`
--
ALTER TABLE `our_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reset_passwords`
--
ALTER TABLE `reset_passwords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_tables`
--
ALTER TABLE `user_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
