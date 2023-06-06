-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 02:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_note`
--

CREATE TABLE `about_note` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_note`
--

INSERT INTO `about_note` (`id`, `icon`, `tag`, `content`) VALUES
(1, 'uploads/9733maintenance2.png', 'Questions', 'Eum dicat inimicus ad, cum diceret phaedrum no, at feugait facilisi praesent vel. Est habeo aliquam consectetuer in. Ad usu saperet referrentur, mel te timeam senserit, eu mea inimicus explicari.'),
(2, 'uploads/1368maintenance3.png', 'Maintenance', 'Eum dicat inimicus ad, cum diceret phaedrum no, at feugait facilisi praesent vel. Est habeo aliquam consectetuer in. Ad usu saperet referrentur, mel te timeam senserit, eu mea inimicus explicari.'),
(3, 'uploads/2224maintenance4.png', 'State Contractor License', 'Eum dicat inimicus ad, cum diceret phaedrum no, at feugait facilisi praesent vel. Est habeo aliquam consectetuer in. Ad usu saperet referrentur, mel te timeam senserit, eu mea inimicus explicari.');

-- --------------------------------------------------------

--
-- Table structure for table `about_section`
--

CREATE TABLE `about_section` (
  `id` int(11) NOT NULL,
  `about_image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content1` varchar(255) NOT NULL,
  `content2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_section`
--

INSERT INTO `about_section` (`id`, `about_image`, `heading`, `content1`, `content2`) VALUES
(2, 'uploads/8444about.png', 'About Us', 'Silver Hawk is a General Construction company. Lorem ipsum dolor sit amet, et vel eripuit dolorum disputando. Audiam verear maluisset an sea, cu sea ipsum postulant scripserit.', 'Eum dicat inimicus ad, cum diceret phaedrum no, at feugait facilisi praesent vel. Est habeo aliquam consectetuer in. Ad usu saperet referrentur, mel te timeam senserit, eu mea inimicus explicari.');

-- --------------------------------------------------------

--
-- Table structure for table `about_service`
--

CREATE TABLE `about_service` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content1` varchar(255) NOT NULL,
  `content2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_service`
--

INSERT INTO `about_service` (`id`, `image`, `heading`, `content1`, `content2`) VALUES
(2, 'uploads/7738about.png', 'Welcome to Silver Hawk', 'Silver Hawk is a General Construction company. Lorem ipsum dolor sit amet, et vel eripuit dolorum disputando. Audiam verear maluisset an sea, cu sea ipsum                              postulant scripserit.', 'Eum dicat inimicus ad, cum diceret phaedrum no, at feugait facilisi praesent vel. Est habeo aliquam consectetuer in. Ad usu saperet referrentur, mel te timeam senserit, eu mea inimicus explicari.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Jannatul Ferdous Tamanna', 'jannatulayaat1234@gmail.com', 'abcd', ''),
(4, 'tamanna', 'asdf@gmail.com', 'hello', 'hellooo'),
(5, 'Jannatul Ferdous Tamanna', 'jannatulayaat1234@gmail.com', 'zxcv', 'asdd'),
(6, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `design_section`
--

CREATE TABLE `design_section` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `design_section`
--

INSERT INTO `design_section` (`id`, `icon`, `tag`, `content`) VALUES
(8, 'uploads/2981support.png', 'Sales & Support', 'You can also rely on our honest and upfront Eum dicat inimicus ad, cum diceret phaedrum no, at feugait facilisi praesent vel. Est habeo aliquam consectetuer in. Ad usu saperet referrentur, mel te timeam senserit.'),
(9, 'uploads/4793design.png', 'Design', 'Eum dicat inimicus ad, cum diceret phaedrum no, at feugait facilisi praesent vel. Est habeo aliquam consectetuer in. Ad usu saperet referrentur, mel te timeam senserit, eu mea inimicus explicari.'),
(10, 'uploads/1516custom.png', 'Custom', 'Eum dicat inimicus ad, cum diceret phaedrum no, at feugait facilisi praesent vel. Est habeo aliquam consectetuer in. Ad usu saperet referrentur, mel te timeam senserit, eu mea inimicus explicari.');

-- --------------------------------------------------------

--
-- Table structure for table `footer_contact`
--

CREATE TABLE `footer_contact` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_contact`
--

INSERT INTO `footer_contact` (`id`, `text`, `cell`) VALUES
(8, 'Get started with your project today:', '702-960-7754');

-- --------------------------------------------------------

--
-- Table structure for table `footer_logo`
--

CREATE TABLE `footer_logo` (
  `id` int(11) NOT NULL,
  `footer_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_logo`
--

INSERT INTO `footer_logo` (`id`, `footer_logo`) VALUES
(3, 'uploads/9924footer.png'),
(4, 'uploads/9924footer.png'),
(5, 'uploads/9924footer.png'),
(6, 'uploads/9924footer.png'),
(7, 'uploads/1581custom.png');

-- --------------------------------------------------------

--
-- Table structure for table `footer_social_media`
--

CREATE TABLE `footer_social_media` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `icon_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_social_media`
--

INSERT INTO `footer_social_media` (`id`, `icon`, `icon_url`) VALUES
(5, 'fa-brands fa-facebook-f', ''),
(6, 'fa-brands fa-facebook-f', ''),
(7, 'fa-brands fa-twitter', ''),
(9, 'fa-brands fa-google-plus-g', '');

-- --------------------------------------------------------

--
-- Table structure for table `footer_socket`
--

CREATE TABLE `footer_socket` (
  `id` int(11) NOT NULL,
  `socket_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_socket`
--

INSERT INTO `footer_socket` (`id`, `socket_text`) VALUES
(2, '© Copyright 2018 Silver Hawk, All Rights Reserved. Web Design by Once Interactive'),
(3, '© Copyright 2018 Silver Hawk, All Rights Reserved. Web Design by Once Interactive'),
(4, '© Copyright 2018 Silver Hawk, All Rights Reserved. Web Design by Once Interactive'),
(5, '© Copyright 2018 Silver Hawk, All Rights Reserved. Web Design by Once Interactive'),
(6, '© Copyright 2018 Silver Hawk, All Rights Reserved. Web Design by Once Interactive');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_section`
--

CREATE TABLE `gallery_section` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_section`
--

INSERT INTO `gallery_section` (`id`, `image`, `heading`, `tag`) VALUES
(2, 'uploads/9916gallery1.jpg', 'summer', 'paint'),
(3, 'uploads/9979gallery1.jpg', 'summerlin', 'paint'),
(4, 'uploads/1173gallery2.jpg', 'summerlin', 'paint'),
(5, 'uploads/9346gallery3.jpg', 'summerlin', 'paint'),
(6, 'uploads/5347gallery4.jpg', 'summerlin', 'paint'),
(7, 'uploads/7084gallery5.jpg', 'summerlin', 'paint'),
(8, 'uploads/8954gallery6.jpg', 'summerlin', 'paint');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo_img`) VALUES
(3, 'uploads/9715logo.png'),
(4, 'uploads/4418design.png'),
(5, 'uploads/4689custom.png'),
(6, 'uploads/4535maintenance2.png'),
(7, 'uploads/7566logo2.png'),
(8, 'uploads/2354logo.png'),
(9, 'uploads/8745logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `id` int(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id`, `menu_name`, `menu_url`) VALUES
(3, 'Home', 'index.php'),
(4, 'Home', 'index.php'),
(5, 'Services', 'services.php'),
(8, 'About Us', 'about.php'),
(9, 'Gallery', 'port.php'),
(10, 'Contact Us', 'contact.php');

-- --------------------------------------------------------

--
-- Table structure for table `port_gallery`
--

CREATE TABLE `port_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `port_gallery`
--

INSERT INTO `port_gallery` (`id`, `image`, `heading`, `tag`) VALUES
(2, 'uploads/2389gallery1.jpg', 'summerlin', 'paint'),
(3, 'uploads/2769gallery2.jpg', 'summerlin', 'paint'),
(4, 'uploads/7123gallery3.jpg', 'summerlin', 'paint'),
(5, 'uploads/6962gallery4.jpg', 'summerlin', 'paint'),
(6, 'uploads/5408gallery5.jpg', 'summerlin', 'paint'),
(7, 'uploads/8832gallery6.jpg', 'summerlin', 'paint'),
(8, 'uploads/4643port1.png', 'summerlin', 'paint'),
(9, 'uploads/6615port2.png', 'summerlin', 'paint'),
(10, 'uploads/5764port3.png', 'summerlin', 'paint');

-- --------------------------------------------------------

--
-- Table structure for table `service_gallery`
--

CREATE TABLE `service_gallery` (
  `id` int(11) NOT NULL,
  `service_image` varchar(255) NOT NULL,
  `service_tag` varchar(255) NOT NULL,
  `service_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_gallery`
--

INSERT INTO `service_gallery` (`id`, `service_image`, `service_tag`, `service_content`) VALUES
(1, 'uploads/4773service1.png', 'House Renovation', 'With over thirty years of experience in residential renovation design and over 16,000 renovation plans delivered to this day.'),
(2, 'uploads/8439service2.png', 'Laminate Flooring', 'Lorem doller count meter dummy text goes to show doller count meter. Inset count meter dollwr lorem count lorem ipsum.'),
(3, 'uploads/1396service3.png', 'Metal Roofing', 'Lorem doller count meter dummy text goes to show doller count meter. Inset count meter dollwr lorem count lorem ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `service_part`
--

CREATE TABLE `service_part` (
  `id` int(11) NOT NULL,
  `service_icon` varchar(255) NOT NULL,
  `service_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_part`
--

INSERT INTO `service_part` (`id`, `service_icon`, `service_text`) VALUES
(4, 'uploads/8958Serviceicon1.png', 'General Contract'),
(7, 'uploads/7590Serviceicon2.png', 'Drywall repair and paint'),
(8, 'uploads/9822Serviceicon3.png', 'Flooring Demolition');

-- --------------------------------------------------------

--
-- Table structure for table `service_section`
--

CREATE TABLE `service_section` (
  `id` int(11) NOT NULL,
  `icon_image` varchar(255) NOT NULL,
  `icon_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_section`
--

INSERT INTO `service_section` (`id`, `icon_image`, `icon_text`) VALUES
(16, 'uploads/4769icon1.png', 'General Contract'),
(17, 'uploads/3033Serviceicon2.png', 'Drywall repair and paint'),
(18, 'uploads/1692Serviceicon3.png', 'Flooring Demolition');

-- --------------------------------------------------------

--
-- Table structure for table `service_slider`
--

CREATE TABLE `service_slider` (
  `id` int(11) NOT NULL,
  `slider_heading` varchar(255) NOT NULL,
  `slider_content` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_slider`
--

INSERT INTO `service_slider` (`id`, `slider_heading`, `slider_content`, `slider_image`) VALUES
(4, 'hello', 'hello', 'uploads/5021inner-bannerpic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `heading1` varchar(255) NOT NULL,
  `heading2` varchar(255) NOT NULL,
  `content_text` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `heading1`, `heading2`, `content_text`, `slider_image`) VALUES
(28, 'We’LL Take Care Of', 'Your Home', 'Lorem ipsum doller count meter inset lorem ipsum doller                              count set dow inset count meter insta lorem inset.', 'uploads/4873slider1.jpg'),
(29, 'We’LL Take Care Of', 'Your Home', 'Lorem ipsum doller count meter inset lorem ipsum doller                              count set dow inset count meter insta lorem inset.', 'uploads/7104slider2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `top_header`
--

CREATE TABLE `top_header` (
  `id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_header`
--

INSERT INTO `top_header` (`id`, `phone`, `email`) VALUES
(1, '702-960-7754', 'info@gmail.com'),
(2, '702-960-7754', 'info@gmail.com'),
(3, '702-960-7754', 'info@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `top_header_social_media`
--

CREATE TABLE `top_header_social_media` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `social_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_header_social_media`
--

INSERT INTO `top_header_social_media` (`id`, `icon`, `social_url`) VALUES
(11, 'fa-brands fa-twitter', ''),
(12, 'fa-brands fa-facebook-f', ''),
(13, 'fa-brands fa-twitter', ''),
(14, 'fa-brands fa-google-plus-g', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_note`
--
ALTER TABLE `about_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_section`
--
ALTER TABLE `about_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_service`
--
ALTER TABLE `about_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_section`
--
ALTER TABLE `design_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_contact`
--
ALTER TABLE `footer_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_logo`
--
ALTER TABLE `footer_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_social_media`
--
ALTER TABLE `footer_social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_socket`
--
ALTER TABLE `footer_socket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_section`
--
ALTER TABLE `gallery_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port_gallery`
--
ALTER TABLE `port_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_gallery`
--
ALTER TABLE `service_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_part`
--
ALTER TABLE `service_part`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_section`
--
ALTER TABLE `service_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_slider`
--
ALTER TABLE `service_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_header`
--
ALTER TABLE `top_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_header_social_media`
--
ALTER TABLE `top_header_social_media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_note`
--
ALTER TABLE `about_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `about_section`
--
ALTER TABLE `about_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_service`
--
ALTER TABLE `about_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `design_section`
--
ALTER TABLE `design_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `footer_contact`
--
ALTER TABLE `footer_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `footer_logo`
--
ALTER TABLE `footer_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `footer_social_media`
--
ALTER TABLE `footer_social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `footer_socket`
--
ALTER TABLE `footer_socket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery_section`
--
ALTER TABLE `gallery_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `port_gallery`
--
ALTER TABLE `port_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_gallery`
--
ALTER TABLE `service_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_part`
--
ALTER TABLE `service_part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_section`
--
ALTER TABLE `service_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `service_slider`
--
ALTER TABLE `service_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `top_header`
--
ALTER TABLE `top_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `top_header_social_media`
--
ALTER TABLE `top_header_social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
