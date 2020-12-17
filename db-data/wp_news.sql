-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: db:3306
-- Thời gian đã tạo: Th12 14, 2020 lúc 09:35 AM
-- Phiên bản máy phục vụ: 5.7.32
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wordpress`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wp_news`
--

CREATE TABLE `wp_news` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `news_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `news_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `news_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `news_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `news_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `news_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `news_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `news_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `news_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `news_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `news_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `news_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `news_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `news_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'news',
  `news_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `wp_news`
--

INSERT INTO `wp_news` (`ID`, `news_author`, `news_date`, `news_date_gmt`, `news_content`, `news_title`, `news_excerpt`, `news_status`, `comment_status`, `ping_status`, `news_password`, `news_name`, `to_ping`, `pinged`, `news_modified`, `news_modified_gmt`, `news_content_filtered`, `news_parent`, `guid`, `menu_order`, `news_type`, `news_mime_type`, `comment_count`) VALUES
(1, 1, '2020-12-14 08:03:01', '2020-12-14 08:03:01', '<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first news. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2020-12-14 08:03:01', '2020-12-14 08:03:01', '', 0, 'http://localhost:8888/?p=1', 0, 'news', '', 1),
(2, 1, '2020-12-14 08:03:01', '2020-12-14 08:03:01', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog news because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost:8888/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Sample Page', '', 'publish', 'closed', 'open', '', 'sample-page', '', '', '2020-12-14 08:03:01', '2020-12-14 08:03:01', '', 0, 'http://localhost:8888/?page_id=2', 0, 'page', '', 0),
(3, 1, '2020-12-14 08:03:01', '2020-12-14 08:03:01', '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Our website address is: http://localhost:8888.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What personal data we collect and why we collect it</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comments</h3><!-- /wp:heading --><!-- wp:paragraph --><p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Media</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contact forms</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the news ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Embedded content from other websites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analytics</h3><!-- /wp:heading --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Your contact information</h2><!-- /wp:heading --><!-- wp:heading --><h2>Additional information</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>How we protect your data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What data breach procedures we have in place</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What third parties we receive data from</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What automated decision making and/or profiling we do with user data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Industry regulatory disclosure requirements</h3><!-- /wp:heading -->', 'Privacy Policy', '', 'draft', 'closed', 'open', '', 'privacy-policy', '', '', '2020-12-14 08:03:01', '2020-12-14 08:03:01', '', 0, 'http://localhost:8888/?page_id=3', 0, 'page', '', 0),
(4, 1, '2020-12-14 08:03:13', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2020-12-14 08:03:13', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/?p=4', 0, 'news', '', 0),
(5, 1, '2020-12-14 09:00:35', '2020-12-14 09:00:35', '', 'News', '', 'publish', 'closed', 'closed', '', '5', '', '', '2020-12-14 09:01:24', '2020-12-14 09:01:24', '', 0, 'http://localhost:8888/?p=5', 1, 'nav_menu_item', '', 0),
(6, 1, '2020-12-14 09:16:13', '2020-12-14 09:16:13', '', 'News', '', 'trash', 'closed', 'closed', '', 'news__trashed', '', '', '2020-12-14 09:17:25', '2020-12-14 09:17:25', '', 0, 'http://localhost:8888/?page_id=6', 0, 'page', '', 0),
(7, 1, '2020-12-14 09:16:13', '2020-12-14 09:16:13', ' ', '', '', 'publish', 'closed', 'closed', '', '7', '', '', '2020-12-14 09:16:13', '2020-12-14 09:16:13', '', 0, 'http://localhost:8888/?p=7', 2, 'nav_menu_item', '', 0),
(8, 1, '2020-12-14 09:16:13', '2020-12-14 09:16:13', '', 'News', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2020-12-14 09:16:13', '2020-12-14 09:16:13', '', 6, 'http://localhost:8888/?p=8', 0, 'revision', '', 0),
(9, 1, '2020-12-14 09:17:00', '2020-12-14 09:17:00', '', 'News', '', 'trash', 'closed', 'closed', '', 'news-2__trashed', '', '', '2020-12-14 09:17:13', '2020-12-14 09:17:13', '', 0, 'http://localhost:8888/?page_id=9', 0, 'page', '', 0),
(10, 1, '2020-12-14 09:17:00', '2020-12-14 09:17:00', ' ', '', '', 'publish', 'closed', 'closed', '', '10', '', '', '2020-12-14 09:17:00', '2020-12-14 09:17:00', '', 0, 'http://localhost:8888/?p=10', 3, 'nav_menu_item', '', 0),
(11, 1, '2020-12-14 09:17:00', '2020-12-14 09:17:00', '', 'News', '', 'inherit', 'closed', 'closed', '', '9-revision-v1', '', '', '2020-12-14 09:17:00', '2020-12-14 09:17:00', '', 9, 'http://localhost:8888/?p=11', 0, 'revision', '', 0),
(12, 1, '2020-12-14 09:17:42', '2020-12-14 09:17:42', '', 'News', '', 'publish', 'open', 'open', '', 'news', '', '', '2020-12-14 09:17:42', '2020-12-14 09:17:42', '', 0, 'http://localhost:8888/?p=12', 0, 'news', '', 0),
(13, 1, '2020-12-14 09:17:42', '2020-12-14 09:17:42', '', 'News', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2020-12-14 09:17:42', '2020-12-14 09:17:42', '', 12, 'http://localhost:8888/?p=13', 0, 'revision', '', 0),
(14, 1, '2020-12-14 09:18:50', '2020-12-14 09:18:50', '<!-- wp:paragraph -->\n<p>tg</p>\n<!-- /wp:paragraph -->', 'tesst', '', 'trash', 'closed', 'closed', '', 'tesst__trashed', '', '', '2020-12-14 09:19:04', '2020-12-14 09:19:04', '', 0, 'http://localhost:8888/?page_id=14', 0, 'page', '', 0),
(15, 1, '2020-12-14 09:18:50', '2020-12-14 09:18:50', ' ', '', '', 'publish', 'closed', 'closed', '', '15', '', '', '2020-12-14 09:18:50', '2020-12-14 09:18:50', '', 0, 'http://localhost:8888/?p=15', 2, 'nav_menu_item', '', 0),
(16, 1, '2020-12-14 09:18:50', '2020-12-14 09:18:50', '<!-- wp:paragraph -->\n<p>tg</p>\n<!-- /wp:paragraph -->', 'tesst', '', 'inherit', 'closed', 'closed', '', '14-revision-v1', '', '', '2020-12-14 09:18:50', '2020-12-14 09:18:50', '', 14, 'http://localhost:8888/?p=16', 0, 'revision', '', 0),
(17, 1, '2020-12-14 09:19:24', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2020-12-14 09:19:24', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/?p=17', 0, 'news', '', 0),
(18, 1, '2020-12-14 09:19:54', '2020-12-14 09:19:54', '', 'dcko', '', 'publish', 'closed', 'closed', '', 'dcko', '', '', '2020-12-14 09:19:54', '2020-12-14 09:19:54', '', 0, 'http://localhost:8888/?page_id=18', 0, 'page', '', 0),
(19, 1, '2020-12-14 09:19:54', '2020-12-14 09:19:54', ' ', '', '', 'publish', 'closed', 'closed', '', '19', '', '', '2020-12-14 09:19:54', '2020-12-14 09:19:54', '', 0, 'http://localhost:8888/?p=19', 2, 'nav_menu_item', '', 0),
(20, 1, '2020-12-14 09:19:54', '2020-12-14 09:19:54', '', 'dcko', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2020-12-14 09:19:54', '2020-12-14 09:19:54', '', 18, 'http://localhost:8888/?p=20', 0, 'revision', '', 0),
(21, 1, '2020-12-14 09:20:21', '2020-12-14 09:20:21', '', 'dddaaa', '', 'publish', 'closed', 'closed', '', 'dddaaa', '', '', '2020-12-14 09:20:21', '2020-12-14 09:20:21', '', 0, 'http://localhost:8888/?page_id=21', 0, 'page', '', 0),
(22, 1, '2020-12-14 09:20:21', '2020-12-14 09:20:21', ' ', '', '', 'publish', 'closed', 'closed', '', '22', '', '', '2020-12-14 09:20:21', '2020-12-14 09:20:21', '', 0, 'http://localhost:8888/?p=22', 3, 'nav_menu_item', '', 0),
(23, 1, '2020-12-14 09:20:21', '2020-12-14 09:20:21', '', 'dddaaa', '', 'inherit', 'closed', 'closed', '', '21-revision-v1', '', '', '2020-12-14 09:20:21', '2020-12-14 09:20:21', '', 21, 'http://localhost:8888/?p=23', 0, 'revision', '', 0),
(24, 1, '2020-12-14 09:21:51', '2020-12-14 09:21:51', '', 'vdddddddu', '', 'publish', 'open', 'open', '', 'vdddddddu', '', '', '2020-12-14 09:21:51', '2020-12-14 09:21:51', '', 0, 'http://localhost:8888/?p=24', 0, 'news', '', 0),
(25, 1, '2020-12-14 09:21:51', '2020-12-14 09:21:51', '', 'vdddddddu', '', 'inherit', 'closed', 'closed', '', '24-revision-v1', '', '', '2020-12-14 09:21:51', '2020-12-14 09:21:51', '', 24, 'http://localhost:8888/?p=25', 0, 'revision', '', 0),
(26, 1, '2020-12-14 09:22:55', '2020-12-14 09:22:55', '{\n    \"wp-template::nav_menu_locations[primary]\": {\n        \"value\": -1274106501919477800,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2020-12-14 09:22:55\"\n    },\n    \"wp-template::nav_menu_locations[sp-menu]\": {\n        \"value\": -1274106501919477800,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2020-12-14 09:22:55\"\n    },\n    \"nav_menu[-1274106501919477800]\": {\n        \"value\": {\n            \"name\": \"Company\",\n            \"description\": \"\",\n            \"parent\": 0,\n            \"auto_add\": false\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2020-12-14 09:22:55\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '04e59315-c3ed-4176-b75f-2ab042de9ff5', '', '', '2020-12-14 09:22:55', '2020-12-14 09:22:55', '', 0, 'http://localhost:8888/?p=26', 0, 'customize_changeset', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `wp_news`
--
ALTER TABLE `wp_news`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `news_name` (`news_name`(191)),
  ADD KEY `type_status_date` (`news_type`,`news_status`,`news_date`,`ID`),
  ADD KEY `news_parent` (`news_parent`),
  ADD KEY `news_author` (`news_author`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `wp_news`
--
ALTER TABLE `wp_news`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
