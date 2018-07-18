-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 11:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `careem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `prize` varchar(50) DEFAULT NULL,
  `added_at` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `prize`, `added_at`) VALUES
(1, 'ali ahmed', 'mohammedrshad40@gmail.c0m', '01151355883', '70% OFF YOUR RIDE', '11/07/2018'),
(2, 'ahmed alii', '5uooyt@gmail.com', '01151355678', 'FREE RIDE', '11/07/2018'),
(3, 'mohamed sarhan', 'mohamedsarhan747@yahoo.com', '01011790223', '70% OFF YOUR RIDE', '11/07/2018'),
(4, 'mahmoud salamaa', 'mahmoud.salama31.ms@gmail.com', '01067980985', '50% OFF YOUR RIDE', '11/07/2018'),
(5, 'mostafa abdrabo', 'mostafaabdrabo_83@hotmail.com', '01067188356', '70% OFF YOUR RIDE', '11/07/2018'),
(6, 'asmaa taleb', 'asmaa.tb94@yahoo.com', '01095557239', '70% OFF YOUR RIDE', '11/07/2018'),
(7, 'farida fouda', 'faridafouda2001@gmail.com', '01118335612', '70% OFF YOUR RIDE', '11/07/2018'),
(8, 'amr hamdyn', 'amrhamdyh@gmail.com', '01277044127', '50% OFF YOUR RIDE', '11/07/2018'),
(9, 'nesreen mostafa', 'dr_nesreen158@hotmail.com', '01111620800', '50% OFF YOUR RIDE', '11/07/2018'),
(10, 'joseph henein', 'joseph.henein@live.com', '01225100098', '50% OFF YOUR RIDE', '11/07/2018'),
(11, 'ahmed sherif', 'ahmedmss87@hotmail.com', '01060001005', 'FREE RIDE', '11/07/2018'),
(12, 'moataz mahmoud', 'moatazphotography@gmail.com', '01005738959', '70% OFF YOUR RIDE', '11/07/2018'),
(13, 'farah karim', 'farahkarim@live.com', '01022674449', '70% OFF YOUR RIDE', '11/07/2018'),
(14, 'farah tamer', 'farahtamerrr@icloud.com', '01010161105', 'FREE RIDE', '11/07/2018'),
(15, 'sherry magdy', 'sherymagdy@hotmail.com', '01226232760', '70% OFF YOUR RIDE', '11/07/2018'),
(16, 'ahmed hossam', 'ahmedhossameldeen95@gmail.com', '01001350400', '70% OFF YOUR RIDE', '11/07/2018'),
(17, 'nada gamal', 'ngamal@sarmady.net', '01111867882', '50% OFF YOUR RIDE', '11/07/2018'),
(18, 'Esraa Gamal', 'esraa.gamal1991@gmail.com', '01115715743', 'FREE RIDE', '11/07/2018'),
(19, 'rania naga', 'rania.abouelnaga@nielsen.com', '01000888262', '70% OFF YOUR RIDE', '11/07/2018'),
(20, 'yousef alhamdi', 'mr.hoil2004@gmail.com', '01009172263', '50% OFF YOUR RIDE', '11/07/2018'),
(21, 'younes alhamdi', 'younesalhamdi21@gmail.com', '01000917226', 'FREE RIDE', '11/07/2018'),
(22, 'amal ahmed', 'moly-@windowslive.com', '01096452030', '70% OFF YOUR RIDE', '11/07/2018'),
(23, 'abdelrahman elhefnawy', 'abdelrahman.elhefnawy91@gmail.com', '01000254545', '50% OFF YOUR RIDE', '11/07/2018'),
(24, 'omar ashraf', 'omar.elbeyali@gmail.com', '01223643547', '50% OFF YOUR RIDE', '11/07/2018'),
(25, 'alaa abd elnaser', 'alaaabdelnaser@icloud.com', '01066249779', '70% OFF YOUR RIDE', '11/07/2018'),
(26, 'Mahmoud Elbanna', 'melbanna@elsakia.com', '01015154276', 'FREE RIDE', '11/07/2018'),
(27, 'mohamed elleissy', 'leissy77@gmail.com', '01222111272', '70% OFF YOUR RIDE', '11/07/2018'),
(28, 'mohamed moheb', 'mmoheb.2002@gmail.com', '01011855431', '50% OFF YOUR RIDE', '11/07/2018'),
(29, 'lobna arshad', 'lobna.bash6designs@gmail.com', '01098582600', 'FREE RIDE', '11/07/2018'),
(30, 'nabil gamal', 'nabilladecima@gmail.com', '01014799475', 'FREE RIDE', '11/07/2018'),
(31, 'ISRAA YASSER', 'israa.yasser@msa.edu.eg', '01061216582', '50% OFF YOUR RIDE', '11/07/2018'),
(32, 'farida elhakey', 'farida.elhakey@gmail.com', '01277224670', 'FREE RIDE', '11/07/2018'),
(33, 'diana aref', 'diana.aref@msa.edu.eg', '01018446560', '50% OFF YOUR RIDE', '11/07/2018'),
(34, 'hamza jamal', 'hamza.masaeid@gmail.com', '01211212558', '70% OFF YOUR RIDE', '11/07/2018'),
(35, 'merna hatem', 'mernahatem1212@yahoo.com', '01110645436', 'FREE RIDE', '11/07/2018'),
(36, 'rame yasin', 'ramemsarweh@gmail.com', '01065003997', '70% OFF YOUR RIDE', '11/07/2018'),
(37, 'wajeh oyoun', 'wajeh.ou@gmail.com', '01012045936', '70% OFF YOUR RIDE', '11/07/2018'),
(38, 'haneen haddad', 'haneenmoinhaddad@hotmail.com', '01149955381', '70% OFF YOUR RIDE', '11/07/2018'),
(39, 'salma amr', 'salmaamr259@gmail.com', '01127997474', 'FREE RIDE', '11/07/2018'),
(40, 'farida samer', 'faridasamer@rocketmail.com', '01141330804', '70% OFF YOUR RIDE', '11/07/2018'),
(41, 'habiba samer', 'habibasamer18@icloud.com', '01156199335', '50% OFF YOUR RIDE', '11/07/2018'),
(42, 'amr ahmed', 'amr_akamal@yahoo.com', '01221931960', '70% OFF YOUR RIDE', '11/07/2018'),
(43, 'hadeel kamal', 'hadoola-alasoola@hotmail.com', '01143871081', '50% OFF YOUR RIDE', '11/07/2018'),
(44, 'hanan hashem', 'hananhashem1994@gmail.com', '01032853170', '50% OFF YOUR RIDE', '11/07/2018'),
(45, 'mohammed kamal', 'nlyt.palestine@gmail.com', '01144394929', '70% OFF YOUR RIDE', '11/07/2018'),
(46, 'mazn syam', 'mazn200219@gmail.com', '01062290592', '70% OFF YOUR RIDE', '11/07/2018'),
(47, 'samia kamal', 'samia.syam76@hotmail.com', '01026627625', 'FREE RIDE', '11/07/2018'),
(48, 'mahmmed ahmed', 'elmasrey30900@yahoo.com', '01146235577', '50% OFF YOUR RIDE', '11/07/2018'),
(49, 'yehia ali', 'yehaaaa37@gmail.com', '01032836465', '70% OFF YOUR RIDE', '11/07/2018'),
(50, 'nour yassin', 'nyassin323@gmail.com', '01001035323', '50% OFF YOUR RIDE', '11/07/2018'),
(51, 'donia mahmoud', 'donia.mahmoud@live.com', '01026661157', 'FREE RIDE', '11/07/2018'),
(52, 'yosra harby', 'yosra.harby@gmail.com', '01062301135', '70% OFF YOUR RIDE', '11/07/2018'),
(53, 'AYAH  MOUSSA', 'AYAH.MOUSSA@GMAIL.COM', '01065265770', '70% OFF YOUR RIDE', '11/07/2018'),
(54, 'sara khattab', 'sarakhattabb@icloud.com', '01091118417', 'FREE RIDE', '11/07/2018'),
(55, 'HAMDY KATTAB', 'hamdyomar2003@yahoo.com ', '01005100414', '50% OFF YOUR RIDE', '11/07/2018'),
(56, 'hania elattar', 'haniaelattar@hotmail.com', '01115644404', '70% OFF YOUR RIDE', '11/07/2018'),
(57, 'deena elattar', 'delattar@gmail.com', '01222240553', '70% OFF YOUR RIDE', '11/07/2018'),
(58, 'radwa salah', 'hashim_heba@yahoo.com', '01111903680', '50% OFF YOUR RIDE', '11/07/2018'),
(59, 'nour osama', 'nour.osama16@gmail.com', '01001232277', '50% OFF YOUR RIDE', '11/07/2018'),
(60, 'nawal ahmed', 'ahmeddegwi@hotmail.com', '01206530290', 'FREE RIDE', '11/07/2018'),
(61, 'adham ahmed', 'adhamahmed25@yahoo.com', '01112109379', 'FREE RIDE', '11/07/2018'),
(62, 'sherif alaa', 'mail.sherif@gmail.com', '01001188889', '50% OFF YOUR RIDE', '11/07/2018'),
(63, 'youssef sherif', 'youssef.sherif@yahoo.com', '01001650082', '70% OFF YOUR RIDE', '11/07/2018'),
(64, 'marwa hamouda', 'pinkflowers-2020@hotmail.com', '01111907807', '50% OFF YOUR RIDE', '11/07/2018'),
(65, 'khouloud ahmed', 'kholoud_ahmed1611@hotmail.com', '01064945544', '50% OFF YOUR RIDE', '11/07/2018'),
(66, 'ahmed khouloud', 'kholoud_ahmed1116@hotmail.com', '01014253695', '50% OFF YOUR RIDE', '11/07/2018'),
(67, 'hala mahmoud', 'younglady2020@hotmail.com', '01001383713', '70% OFF YOUR RIDE', '11/07/2018'),
(68, 'radwa samir', 'r.samir_2011@hotmail.com', '01094330019', '70% OFF YOUR RIDE', '11/07/2018'),
(69, 'nada samir', 'nadasamir99@hotmail.com', '01094866332', '50% OFF YOUR RIDE', '11/07/2018'),
(70, 'omnia nassar', 'dr.omnia.nassar@gmail.com', '01119356107', '70% OFF YOUR RIDE', '11/07/2018'),
(71, 'mona maghrabi', 'eng_no2a77@yahoo.com', '01010651763', '70% OFF YOUR RIDE', '11/07/2018'),
(72, 'mohammed fouad', 'mizoworld@hitmail.com', '01286646705', '70% OFF YOUR RIDE', '11/07/2018');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
