-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2017 at 03:14 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `postweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `web` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loglink`
--

CREATE TABLE `loglink` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `task_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `detail` longtext NOT NULL,
  `web` text NOT NULL,
  `post_count` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `ipaddress` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id`, `url`, `ipaddress`, `status`) VALUES
(1, 'http://www.talad.info\n', '202.129.206.229', 2),
(2, 'http://www.talad.work\n', '103.253.73.176', 2),
(3, 'http://www.postweb.work\n', '202.129.206.229', 2),
(4, 'http://www.getsale.info\n', '202.129.206.229', 2),
(5, 'http://www.buysale.work\n', '202.129.206.229', 2),
(6, 'http://www.postfree.info\n', '103.253.73.176', 2),
(7, 'http://www.postfree.work\n', '47.88.214.83', 2),
(8, 'http://www.wellmart.work\n', '103.253.73.176', 2),
(9, 'http://www.malldee.work\n', '103.253.73.176', 2),
(10, 'http://www.wemart.work\n', '103.253.73.176', 2),
(11, 'http://www.postdee.work\n', '103.253.73.176', 2),
(12, 'http://www.saledee.work\n', '103.253.73.176', 2),
(13, 'http://www.tarad.work\n', '103.253.73.176', 2),
(14, 'http://www.buysale.club\n', '103.253.73.176', 2),
(15, 'http://www.tarad.club\n', '103.253.73.176', 2),
(16, 'http://www.rubpost.club\n', '103.253.73.176', 2),
(17, 'http://www.talad.club\n', '103.253.73.176', 2),
(18, 'http://www.postweb.club\n', '103.253.73.176', 2),
(19, 'http://www.deeshop.club\n', '103.253.73.176', 2),
(20, 'http://www.postfree.club\n', '103.253.73.176', 2),
(21, 'http://www.salefree.club\n', '103.253.73.176', 2),
(22, 'http://www.buynet.club\n', '103.253.73.176', 2),
(23, 'http://www.postsale.club\n', '103.253.73.176', 2),
(24, 'http://www.netpost.club\n', '103.253.73.176', 2),
(25, 'http://www.shopdee.club\n', '103.253.73.176', 2),
(26, 'http://www.getpost.club\n', '103.253.73.176', 2),
(27, 'http://www.onmart.club\n', '103.253.73.176', 2),
(28, 'http://www.propost.club\n', '103.253.73.176', 2),
(29, 'http://www.findpost.club\n', '103.253.73.176', 2),
(30, 'http://www.yourpost.club\n', '202.129.206.229', 2),
(31, 'http://www.domarket.club\n', '202.129.206.229', 2),
(32, 'http://www.shoppro.club\n', '202.129.206.229', 2),
(33, 'http://www.shopwork.club\n', '202.129.206.229', 2),
(34, 'http://www.maxpost.club\n', '202.129.206.229', 2),
(35, 'http://www.bemart.club\n', '202.129.206.229', 2),
(36, 'http://www.yespost.club\n', '202.129.206.229', 2),
(37, 'http://www.taladthai.club\n', '202.129.206.229', 2),
(38, 'http://www.gobuysale.club\n', '47.88.214.83', 2),
(39, 'http://www.adsfree.club\n', '202.129.206.229', 2),
(40, 'http://www.hotpost.club\n', '202.129.206.229', 2),
(41, 'http://www.thaibiz.club\n', '202.129.206.229', 2),
(42, 'http://www.thaimart.club\n', '202.129.206.229', 2),
(43, 'http://www.mymart.club\n', '202.129.206.229', 2),
(44, 'http://www.siampost.club\n', '202.129.206.229', 2),
(45, 'http://www.thaipost.club\n', '202.129.206.229', 2),
(46, 'http://www.buyshop.club\n', '202.129.206.229', 2),
(47, 'http://www.martdeal.club\n', '202.129.206.229', 2),
(48, 'http://www.getshop.club\n', '103.253.73.8', 2),
(49, 'http://www.thaisale.club\n', '208.110.81.123', 2),
(50, 'http://www.richshop.club\n', '103.253.73.176', 2),
(51, 'http://www.sanookpost.club\n', '103.253.73.176', 2),
(52, 'http://www.saveshop.club\n', '103.253.73.176', 2),
(53, 'http://www.shopdd.club\n', '103.253.73.176', 2),
(54, 'http://www.shopgo.club\n', '103.253.73.176', 2),
(55, 'http://www.shoppingzone.club\n', '103.253.73.176', 2),
(56, 'http://www.siamshop.club\n', '103.253.73.8', 2),
(57, 'http://www.starmart.club\n', '202.129.206.229', 2),
(58, 'http://www.startpost.club\n', '103.253.73.176', 2),
(59, 'http://www.taladdee.club\n', '103.253.73.176', 2),
(60, 'http://www.taladonline.club\n', '103.253.73.176', 2),
(61, 'http://www.taradthai.club\n', '103.253.73.176', 2),
(62, 'http://www.thaimall.club\n', '103.253.73.176', 2),
(63, 'http://www.tradedee.club\n', '103.253.73.176', 2),
(64, 'http://www.tradeinter.club\n', '103.253.73.176', 2),
(65, 'http://www.webmall.club\n', '103.253.73.176', 2),
(66, 'http://www.webpost.club\n', '103.253.73.176', 2),
(67, 'http://www.yindee.club\n', '103.253.73.176', 2),
(68, 'http://www.zoneshop.club\n', '103.253.73.176', 2),
(69, 'http://www.freemart.club\n', '103.253.73.176', 2),
(70, 'http://www.getmall.club\n', '202.129.206.229', 2),
(71, 'http://www.gurushop.club\n', '208.110.81.123', 2),
(72, 'http://www.hotweb.club\n', '208.110.81.123', 2),
(73, 'http://www.hunsa.club\n', '208.110.81.123', 2),
(74, 'http://www.interpost.club\n', '208.110.81.123', 2),
(75, 'http://www.kodsana.club\n', '208.110.81.123', 2),
(76, 'http://www.lovepost.club\n', '208.110.81.123', 2),
(77, 'http://www.mallhot.club\n', '208.110.81.123', 2),
(78, 'http://www.marketdee.club\n', '208.110.81.123', 2),
(79, 'http://www.marketza.club\n', '208.110.81.123', 2),
(80, 'http://www.mepost.club\n', '208.110.81.123', 2),
(81, 'http://www.morepost.club\n', '208.110.81.123', 2),
(82, 'http://www.nanashop.club\n', '208.110.81.123', 2),
(83, 'http://www.netclick.club\n', '208.110.81.123', 2),
(84, 'http://www.netdeal.club\n', '208.110.81.123', 2),
(85, 'http://www.postjung.club\n', '208.110.81.123', 2),
(86, 'http://www.postza.club\n', '208.110.81.123', 2),
(87, 'http://www.prakard.club\n', '208.110.81.123', 2),
(88, 'http://www.asiashop.club\n', '208.110.81.123', 2),
(89, 'http://www.bestmart.club\n', '208.110.81.123', 2),
(90, 'http://www.bizzone.club\n', '208.110.81.123', 2),
(91, 'http://www.cheapshop.club\n', '208.110.81.123', 2),
(92, 'http://www.classifiedfree.club\n', '208.110.81.123', 2),
(93, 'http://www.classifiedweb.club\n', '208.110.81.123', 2),
(94, 'http://www.clickgo.club\n', '208.110.81.123', 2),
(95, 'http://www.dealdd.club\n', '208.110.81.123', 2),
(96, 'http://www.dealfree.club\n', '208.110.81.123', 2),
(97, 'http://www.kodsana.work\n', '208.110.81.123', 2),
(98, 'http://www.sanook.work\n', '208.110.81.123', 2),
(99, 'http://www.yindeemarket.com\n', '208.110.81.123', 2),
(100, 'http://www.taladkonthai.com\n', '208.110.81.123', 2),
(101, 'http://www.taladsinka.com\n', '208.110.81.123', 2),
(102, 'http://www.tradesitenews.com\n', '208.110.81.123', 2),
(103, 'http://www.marketza.info\n', '208.110.81.123', 2),
(104, 'http://www.sansbuy.com\n', '208.110.81.123', 2),
(105, 'http://www.sopostza.com\n', '208.110.81.123', 2),
(106, 'http://www.plazanana.com\n', '208.110.81.123', 2),
(107, 'http://www.postdee.com\n', '208.110.81.123', 2),
(108, 'http://www.taladza.com\n', '103.253.73.176', 2),
(109, 'http://www.iseeplaza.com\n', '202.129.206.229', 2),
(110, 'http://www.icansale.com\n', '202.129.206.229', 2),
(111, 'http://www.kodsanazone.com\n', '202.129.206.229', 2),
(112, 'http://www.prakardzone.com\n', '202.129.206.229', 2),
(113, 'http://www.prakarddee.com\n', '208.110.81.123', 2),
(114, 'http://www.konthaimarket.com\n', '202.129.206.229', 2),
(115, 'http://www.postfreezone.com\n', '103.253.73.8', 2),
(116, 'http://www.kodsanafree.com\n', '202.129.206.229', 2),
(117, 'http://www.prakardhunsa.com\n', '202.129.206.229', 2),
(118, 'http://www.prakarddeal.com\n', '202.129.206.229', 2),
(119, 'http://www.sinkamall.com\n', '202.129.206.229', 2),
(120, 'http://www.trademun.com\n', '202.129.206.229', 2),
(121, 'http://www.zopostza.com\n', '202.129.206.229', 2),
(122, 'http://www.taladhiso.com\n', '202.129.206.229', 2),
(123, 'http://www.marketdd.info\n', '202.129.206.229', 2),
(124, 'http://www.postdaily.info\n', '202.129.206.229', 2),
(125, 'http://www.taladthai.info\n', '202.129.206.229', 2),
(126, 'http://www.dealmarket.info\n', '202.129.206.229', 2),
(127, 'http://www.kodsanathai.info\n', '202.129.206.229', 2),
(128, 'http://www.postsanook.info\n', '202.129.206.229', 2),
(129, 'http://www.malldee.info\n', '202.129.206.229', 2),
(130, 'http://www.martdeal.info\n', '202.129.206.229', 2),
(131, 'http://www.plazadeal.info\n', '202.129.206.229', 2),
(132, 'http://www.promotego.info\n', '202.129.206.229', 2),
(133, 'http://www.taladfree.com\n', '202.129.206.229', 1),
(134, 'http://www.adsshared.com\n', '103.253.73.176', 1),
(135, 'http://www.4-fit.com\n', '202.129.206.229', 1),
(136, 'http://www.postza.in.th\n', '208.110.81.123', 1),
(137, 'http://www.iget.in.th\n', '208.110.81.123', 1),
(138, 'http://www.bestpostfree.com\n', '202.129.206.229', 1),
(139, 'http://www.wetradeshop.com\n', '202.129.206.229', 1),
(140, 'http://www.wemall.info\n', '202.129.206.229', 1),
(141, 'http://www.showprakard.com\n', '202.129.206.229', 1),
(142, 'http://www.tradesinka.com\n', '202.129.206.229', 1),
(143, 'http://www.bestmart.info\n', '202.129.206.229', 1),
(144, 'http://www.exclassified.com\n', '202.129.206.229', 1),
(145, 'http://www.classifiedsiam.com\n', '202.129.206.229', 1),
(146, 'http://www.wellmarket.info\n', '202.129.206.229', 1),
(147, 'http://www.dailythaishop.com\n', '202.129.206.229', 1),
(148, 'http://www.thaihotMart.com\n', '202.129.206.229', 1),
(149, 'http://www.nicemall.info\n', '202.129.206.229', 1),
(151, 'http://www.siammart.info\n', '103.253.73.8', 1),
(152, 'http://www.sinkhathai.info\n', '103.253.73.8', 1),
(153, 'http://www.hotmarket.info\n', '103.253.73.8', 1),
(154, 'http://www.greenpost.info\n', '103.253.73.8', 1),
(155, 'http://www.classifieddaily.info\n', '103.253.73.8', 1),
(156, 'http://www.classifiedpost.info\n', '103.253.73.8', 1),
(157, 'http://www.saledd.info\n', '103.253.73.8', 1),
(158, 'http://www.bizmarket.info\n', '103.253.73.8', 1),
(159, 'http://www.taladsale.com\n', '103.253.73.8', 1),
(160, 'http://www.adsshop.info\n', '103.253.73.8', 1),
(161, 'http://www.ohmart.info\n', '103.253.73.8', 1),
(162, 'http://www.postfreezon.com\n', '103.253.73.8', 1),
(163, 'http://www.thaisale.info\n', '103.253.73.8', 1),
(164, 'http://www.dodeal.info\n', '103.253.73.176', 1),
(165, 'http://www.zonepost.info\n', '103.253.73.8', 1),
(166, 'http://www.postza.info\n', '103.253.73.8', 1),
(167, 'http://www.betterpost.info\n', '103.253.73.8', 1),
(168, 'http://www.dealgood.info\n', '103.253.73.8', 1),
(169, 'http://www.wemart.in.th\n', '103.253.73.8', 1),
(170, 'http://www.taladdeal.com\n', '103.253.73.8', 1),
(171, 'http://www.taladclick.com\n', '103.253.73.8', 1),
(172, 'http://www.tamlayshop.com\n', '103.253.73.8', 1),
(173, 'http://www.forsaledd.com\n', '103.253.73.8', 1),
(174, 'http://www.onshop.info\n', '103.253.73.8', 1),
(175, 'http://www.dealdd.info\n', '103.253.73.8', 1),
(176, 'http://www.postbiz.info\n', '103.253.73.8', 1),
(177, 'http://www.doodeepost.com\n', '103.253.73.8', 1),
(178, 'http://www.goplusshop.com\n', '103.253.73.8', 1),
(179, 'http://www.getmart.info\n', '202.129.206.229', 1),
(180, 'http://www.mydealfree.com\n', '103.253.73.8', 1),
(181, 'http://www.postzone.info\n', '103.253.73.8', 1),
(182, 'http://www.buysalemarket.com\n', '103.253.73.8', 1),
(183, 'http://www.postsure.info\n', '103.253.73.8', 1),
(184, 'http://www.thaionpost.com\n', '103.253.73.8', 1),
(185, 'http://www.buysaledaily.com\n', '103.253.73.8', 1),
(186, 'http://www.jairakdesign.com\n', '103.253.73.8', 1),
(187, 'http://www.timetopost.com\n', '103.253.73.8', 1),
(188, 'http://www.mybazaar.info\n', '103.253.73.8', 1),
(189, 'http://www.thaiondeal.com\n', '103.253.73.8', 1),
(190, 'http://www.classifiedwell.com\n', '103.253.73.8', 1),
(191, 'http://www.saledirect.info\n', '103.253.73.8', 1),
(192, 'http://www.buydealfree.com\n', '103.253.73.8', 1),
(193, 'http://www.buymymart.com\n', '103.253.73.8', 1),
(194, 'http://www.postoffer.info\n', '103.253.73.8', 1),
(195, 'http://www.salemart.info\n', '103.253.73.8', 1),
(196, 'http://www.marketfree.info\n', '103.253.73.8', 1),
(197, 'http://www.bizdeal.info\n', '103.253.73.8', 1),
(198, 'http://www.postwell.info\n', '103.253.73.8', 1),
(199, 'http://www.freeclassifieddaily.com\n', '208.110.81.123', 1),
(200, 'http://www.tellget.com', '202.129.206.229', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loglink`
--
ALTER TABLE `loglink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `loglink`
--
ALTER TABLE `loglink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
