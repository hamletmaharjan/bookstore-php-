-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 03:26 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` enum('admin','superadmin') DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `first_name`, `last_name`, `email`, `password`, `contact`, `image`, `role`, `status`) VALUES
(1, 'hams', 'maharjan', 'hams@gmail.com', 'b052538edda4b46ed8c57ad17e7d6c87', '9841363126', NULL, 'superadmin', 'active'),
(4, 'hamlet', 'maharjan', 'hamlet@gmail.com', 'ea3596139530b2abe7089082ab57ecbd', '98373646', NULL, 'admin', 'active'),
(5, 'sushma', 'luitel', 'sushma@gmail.com', 'cfa6036ef7743ed8137014558101205d', '929929292', NULL, 'superadmin', 'active'),
(20, 'jorge', 'masvidal', 'jorge@gmail.com', 'd67326a22642a324aa1b0745f2f17abb', '92929292', NULL, 'admin', 'inactive'),
(21, 'kunjan', 'rajbhandari', 'kunjan@gmail.com', 'e106cd068b536babb17bd307724ad46e', '9819087207', NULL, 'superadmin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `table_author`
--

CREATE TABLE `table_author` (
  `a_id` bigint(20) NOT NULL,
  `a_firstname` varchar(30) DEFAULT NULL,
  `a_lastname` varchar(50) DEFAULT NULL,
  `age` bigint(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_author`
--

INSERT INTO `table_author` (`a_id`, `a_firstname`, `a_lastname`, `age`, `email`, `contact`) VALUES
(2, 'Leonardo', 'Decaprio', 33, 'decaprio@gmail.com', '919928300'),
(3, 'Stephen', 'King', 71, 'sking@yahoo.com', '919122342'),
(4, 'Billy', 'Moore', 50, 'billymoore@gmail.com', '871212212'),
(5, 'J.K.', 'Rowling', 45, 'rawling@gmail.com', '9192993422'),
(6, 'Cody', 'Garbrandt', 30, 'codynolove@gamil.com', '8771923452'),
(7, 'Andy', 'Hunt', 50, 'andyhunt@gmail.com', '87709090909'),
(8, 'J. R. R.', 'Tolkien', 40, 'powerfuljrr@gmail.com', '8771100110'),
(9, 'Mark', 'Twain', 65, 'marktwain@outlook.com', '1800123123'),
(10, 'Robin', 'Nixon', 60, 'nixonrobin@gmail.com', '1971231234'),
(11, 'Jerome', 'Groopman', 67, 'jermone_groopman@gmail.com', '929929920'),
(12, 'Margaret', 'Mitchell', 49, 'mitchellmarget@hotmail.com', '1921689823'),
(14, 'hamlet', 'maharjan', 21, 'hams@gmail.com', '999898');

-- --------------------------------------------------------

--
-- Table structure for table `table_book`
--

CREATE TABLE `table_book` (
  `b_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `author_id` bigint(20) NOT NULL,
  `categories` enum('academics','biography','fiction','history','medical science','poetry','others') DEFAULT NULL,
  `pages` decimal(6,0) DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `publisher` varchar(40) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_book`
--

INSERT INTO `table_book` (`b_id`, `title`, `price`, `author_id`, `categories`, `pages`, `published_date`, `publisher`, `cover`) VALUES
(2, 'The Alchemist', 500, 2, 'fiction', '699', '2008-03-04', 'Asmita', 'ad9daeaf27c5aa2866bde07c0a227cd0.jpg'),
(4, 'Harry Potter and the Sorcerer\'s Stone', 2000, 5, 'fiction', '198', '2019-05-10', 'Eva', 'ea796028ce5e681dec073605aaf1fbdd.jpg'),
(5, 'A Prayer Before Dawn', 699, 3, 'biography', '587', '2017-09-13', 'Billy Moore', 'df417ba78ec9526fb6f13540cbc156a0.jpg'),
(6, 'The Pact', 700, 6, 'biography', '490', '2018-05-08', 'UFC', 'a5771064559396b1eecb07162e74ffc8.jpg'),
(7, 'The Notorious', 5000, 7, 'poetry', '634', '2017-10-11', 'UFC', '66e86effd9a447df7ffbb09d351b9f43.jpg'),
(8, 'Harry Potter and the Philosopher\'s Stone', 1300, 5, 'fiction', '799', '1997-06-26', 'Bloomsbury', '96a9397f40158b9b0de36c292f2d92da.jpg'),
(9, 'Harry Potter and the Prisoner of Azkaban', 1100, 5, 'fiction', '787', '1999-07-18', 'Bloomsbury', '1e8831b687493aa1f096b16958cf75d5.jpg'),
(10, 'Life on the Mississippi', 1600, 9, 'biography', '624', '1883-01-01', 'McGraw Hall', '03e4626a8d94d2c91b819248ba42bdc6.jpg'),
(11, 'The Pragmatic Programmer', 849, 7, 'others', '500', '1990-04-21', 'Mac Mullar', '5b93625a70e729117e1af49e5ff502a5.jpg'),
(12, 'Learning PHP, MySQL & JavaScript', 2500, 10, 'academics', '1239', '2009-07-28', 'HarperCollins', 'd276b1e569d5f5e1f4efdd2fbc7c214d.jpg'),
(13, 'How Doctors Think', 5999, 11, 'medical science', '325', '2009-01-02', 'Houghton Mifflin Harcourt', '3a2474a65e88c3962649c5a7ef6b894b.jpg'),
(14, 'Gone with the Wind', 2400, 12, 'history', '1476', '1936-05-30', 'Macmillan Publishers', '1fed506b63b628cc7c2be3c6db543f5e.jpg'),
(15, 'the pace', 333, 14, 'biography', '342', '2112-02-21', 'Ekata', 'f183cd6320564b16ed93d4b9a38585c5._SX379_BO1,204,203,200_');

-- --------------------------------------------------------

--
-- Table structure for table `table_cart`
--

CREATE TABLE `table_cart` (
  `ca_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `book_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_cart`
--

INSERT INTO `table_cart` (`ca_id`, `customer_id`, `book_id`) VALUES
(25, 1, 10),
(33, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `table_contact`
--

CREATE TABLE `table_contact` (
  `id` bigint(10) NOT NULL,
  `full_name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_contact`
--

INSERT INTO `table_contact` (`id`, `full_name`, `email`, `message`) VALUES
(1, 'carlos condit', 'condit@lhotmail.com', 'there is still some rooms for improvements');

-- --------------------------------------------------------

--
-- Table structure for table `table_customer`
--

CREATE TABLE `table_customer` (
  `c_id` bigint(20) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_username` varchar(20) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_phone` varchar(20) NOT NULL,
  `c_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_customer`
--

INSERT INTO `table_customer` (`c_id`, `c_name`, `c_username`, `c_email`, `c_phone`, `c_password`) VALUES
(1, 'kevin', 'kevindurant', 'kd@live.com', '9393929', 'dk'),
(2, 'Carlos Condit', 'carloscondit', 'condit@gmail.com', '8771233212', 'nbk'),
(3, 'stipe', 'stipemiocic', 'stipemiocic@gmail.com', '877123456', 'stipe'),
(4, 'sushma', 'sush', 'sluitel@gmail.com', '9842312321', 'sushma'),
(5, 'hams', 'hamlet', 'hams@live.com', '9929929', 'hamlet');

-- --------------------------------------------------------

--
-- Table structure for table `table_order`
--

CREATE TABLE `table_order` (
  `o_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `book_id` int(11) NOT NULL,
  `state` enum('state1','state2','state3','state4','state5','state6','state7') DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `zip_code` int(10) DEFAULT NULL,
  `address_line_1` varchar(30) DEFAULT NULL,
  `address_line_2` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_order`
--

INSERT INTO `table_order` (`o_id`, `customer_id`, `book_id`, `state`, `city`, `zip_code`, `address_line_1`, `address_line_2`) VALUES
(1, 1, 8, 'state2', 'kathmandu', 44600, 'chandragiri-14', 'naikap'),
(24, 5, 5, 'state1', 'biratnager', 3432, 'urlabari', 'johole'),
(25, 5, 14, 'state1', 'biratnager', 3432, 'urlabari', 'johole'),
(26, 2, 11, 'state3', 'kathmandu', 44860, 'kalanki', 'naikap'),
(27, 2, 4, 'state3', 'kathmandu', 44860, 'kalanki', 'naikap'),
(28, 2, 12, 'state3', 'kathmandu', 44860, 'kalanki', 'naikap'),
(29, 2, 11, 'state3', 'kathmandu', 44860, 'kalanki', 'naikap'),
(30, 4, 11, 'state1', 'biratnager', 3432, 'urlabari', 'johole'),
(31, 3, 5, 'state3', 'kathmandu', 44860, 'kalanki', 'naikap'),
(32, 3, 4, 'state3', 'kathmandu', 44860, 'kalanki', 'naikap'),
(33, 3, 5, 'state3', 'kathmandu', 44860, 'kalanki', 'naikap'),
(34, 3, 2, 'state3', 'kathmandu', 44860, 'kalanki', 'naikap'),
(35, 5, 14, 'state3', 'kathmandu', 44860, 'kalanki', 'naikap'),
(36, 5, 11, 'state3', 'kathmandu', 44860, 'kalanki', 'naikap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `table_author`
--
ALTER TABLE `table_author`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `table_book`
--
ALTER TABLE `table_book`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `fk_aid` (`author_id`);

--
-- Indexes for table `table_cart`
--
ALTER TABLE `table_cart`
  ADD PRIMARY KEY (`ca_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `table_contact`
--
ALTER TABLE `table_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_customer`
--
ALTER TABLE `table_customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `table_order`
--
ALTER TABLE `table_order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `book_id` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `table_author`
--
ALTER TABLE `table_author`
  MODIFY `a_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `table_book`
--
ALTER TABLE `table_book`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `table_cart`
--
ALTER TABLE `table_cart`
  MODIFY `ca_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `table_contact`
--
ALTER TABLE `table_contact`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_customer`
--
ALTER TABLE `table_customer`
  MODIFY `c_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_order`
--
ALTER TABLE `table_order`
  MODIFY `o_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_book`
--
ALTER TABLE `table_book`
  ADD CONSTRAINT `fk_aid` FOREIGN KEY (`author_id`) REFERENCES `table_author` (`a_id`) ON UPDATE CASCADE;

--
-- Constraints for table `table_cart`
--
ALTER TABLE `table_cart`
  ADD CONSTRAINT `table_cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `table_customer` (`c_id`),
  ADD CONSTRAINT `table_cart_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `table_book` (`b_id`);

--
-- Constraints for table `table_order`
--
ALTER TABLE `table_order`
  ADD CONSTRAINT `table_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `table_customer` (`c_id`),
  ADD CONSTRAINT `table_order_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `table_book` (`b_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
