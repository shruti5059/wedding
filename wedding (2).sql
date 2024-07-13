-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 01:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `a_id` int(20) NOT NULL,
  `a_info1` varchar(200) NOT NULL,
  `a_info2` varchar(200) NOT NULL,
  `a_info3` varchar(200) NOT NULL,
  `a_info4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`a_id`, `a_info1`, `a_info2`, `a_info3`, `a_info4`) VALUES
(1, 'Dream Collection has established itself as one of ...', 'About Customization : Customization is our forte. ..', 'About Customer Relationship: We Endeavor to build ...', 'Low Prices'),
(2, 'Dream Collection has established itself as one of the leading brand in women ethnic wear available online. With strong presence at all major retailers, Dream Collection has become the first choice of ', 'About Customization : Customization is our forte. You can relish the best hand craftsmanship with styles and designs you desire. \"TAILOR-MADE\"is our service provided to our fashion conscious divas for', 'About Customer Relationship: We Endeavor to build our customer relationship by giving more of what they want.', 'Low Prices');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_image`
--

CREATE TABLE `about_us_image` (
  `image_id` int(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us_image`
--

INSERT INTO `about_us_image` (`image_id`, `image`, `name`) VALUES
(1, 'bhargavi.jpeg', 'Bhargavi Domadiya'),
(4, 'khushbu.jpeg', 'Khushbu Domadiya'),
(5, 'shruti1.jpeg', 'Shruti Beladiya');

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `id` int(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`id`, `fname`, `gender`, `email`, `password`, `Date`) VALUES
(10, 'abcde', 'female', 'abcde@gmail.com', '121212', '2023-04-03 05:36:57'),
(12, 'bhargavi', 'female', 'bhargavi@gmail.com', '321321', '2023-04-07 15:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(20) NOT NULL,
  `cart_subcat_id` int(20) NOT NULL,
  `cart_client_id` int(20) NOT NULL,
  `product_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `total` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_subcat_id`, `cart_client_id`, `product_name`, `description`, `price`, `quantity`, `image`, `total`, `date`) VALUES
(2, 5, 5, 'Dark Green Lehenga', 'Dark Green Sequins Embroidered Raw Silk Bridal Leh...', 4000, 2, '1p.jpg', 8000, '2023-03-25 05:46:56'),
(3, 17, 5, 'Blue Designer Blazer', 'Blue Designer Blazer', 8300, 4, 'blzarblue1.png', 33200, '2023-03-25 05:50:18'),
(32, 35, 13, 'Blue Blazer Suit', 'Blue Blazer Suit', 8960, 1, '1650487411partyq1.png', 8960, '2023-04-03 05:51:40'),
(56, 7, 12, 'Hot Pink Lehenga', 'Hot Pink Cutdana Embroidered Silk Bridal Lehenga', 8500, 1, '1t.jpg', 8500, '2023-04-07 10:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(20) NOT NULL,
  `category_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `category_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_date`) VALUES
(1, 'Blazer', '2023-03-10 10:53:34'),
(2, 'Groom Kurta', '2023-03-10 10:53:42'),
(3, 'Shervani', '2023-03-10 10:53:50'),
(4, 'Bride Maid Outfit', '2023-03-10 10:53:57'),
(5, 'Groom Maid outfits', '2023-03-10 10:54:05'),
(21, 'Gouan', '2023-03-25 15:50:53'),
(22, 'Women Indo Western Outfit', '2023-03-25 15:52:06'),
(23, 'Saree', '2023-03-25 16:07:43'),
(24, 'Men Indo Western Outfits', '2023-03-25 16:52:34'),
(25, 'Men Party Wear', '2023-03-26 10:20:17'),
(26, 'Women Party Wear', '2023-03-26 10:20:49'),
(27, 'Safa', '2023-03-28 05:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `client_register`
--

CREATE TABLE `client_register` (
  `c_id` int(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_register`
--

INSERT INTO `client_register` (`c_id`, `user_name`, `email`, `password`, `phoneno`, `address`) VALUES
(11, 'shruti beladiya', 'shruti.beladiya5059@gmail.com', '555666', '7016817757', '28, kavita ro house surat v-1'),
(12, 'uttam radadiya', 'uttamradadiya@gmail.com', '111111', '9313502112', '29, sanketdham yogichowk'),
(13, 'khushbu  domadiya', 'kkdomadiya6662@gmail.com', '123456', '7016456789', 'xyz'),
(14, 'abcd', 'abc@gmail.com', '123123', '7016817757', 'vapi');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(20) NOT NULL,
  `color_name` varchar(200) NOT NULL,
  `color_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_name`, `color_date`) VALUES
(1, 'Blue', '2023-03-02 11:31:05'),
(2, 'Black', '2023-03-02 11:32:51'),
(3, 'Yellow', '2023-03-02 11:33:46'),
(4, 'Green', '2023-03-10 07:15:03'),
(5, 'Pink', '2023-03-10 07:16:24'),
(6, 'purple', '2023-03-10 10:52:43'),
(7, 'white', '2023-03-10 10:53:04'),
(8, 'Red', '2023-03-11 04:44:42'),
(9, 'Brown', '2023-03-13 15:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(20) NOT NULL,
  `sub_cat_id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `sub_cat_id`, `name`, `comment`, `image`, `date`) VALUES
(1, 4, 'shruti', 'Nice Fabric and perfect color for my Haldi functio...\r\n', '1650470636lehengayello1.png', '2023-03-13 15:45:39'),
(2, 52, 'shanvi', 'Nice Fabric....', '1650479029shervani21.png', '2023-04-27 04:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(20) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_subject` varchar(50) NOT NULL,
  `contact_message` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `date`) VALUES
(1, 'shruti', 'shruti.beladiya5059@gmail.com', 'wedding', 'good outfits....', '2023-03-30 07:06:34'),
(2, 'khushbu', 'kkdomadiya6662@gmail.com', 'wedding', 'good outftis.....', '2023-03-30 07:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE `designer` (
  `id` int(20) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`id`, `d_name`, `d_description`, `image`, `date`) VALUES
(2, 'kevin hart', 'M.A., Design University of London, UK.2015', 'WhatsApp Image 2022-04-17 at 2.57.48 PM.jpeg', '2023-03-10 09:43:12'),
(3, 'mina sundwall', 'M.A., Design University of New York, USA.2017', 'WhatsApp Image 2022-04-17 at 2.57.47 PM.jpeg', '2023-03-10 09:43:47'),
(4, 'olivia rodrigo', 'B.A., Design  University of Illinois at Chicago, Chicago, IL  2012', 'WhatsApp Image 2022-04-17 at 2.57.47 PM (1).jpeg', '2023-03-31 11:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `f_id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `que` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`f_id`, `email`, `subject`, `que`, `ans`, `date`) VALUES
(1, 'shrutibeladiya5059@gmail.com', 'Order Product', 'How do I place my order?', 'Select a category Choose the product of your choice. Create an account by registering with Dream Collection in the login page or you can just select the product and proceed to the checkout page as a guest.', '2023-03-10 09:49:54'),
(2, 'uttamradadiya30@gmail.com', 'delivery info', 'What is the estimated time of delivery?', 'we usually process the order in 4-5 working days. also the estimated shipping time is mentioned under each product.', '2023-04-05 15:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `jewellery`
--

CREATE TABLE `jewellery` (
  `j_id` int(20) NOT NULL,
  `j_name` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jewellery`
--

INSERT INTO `jewellery` (`j_id`, `j_name`, `date`) VALUES
(1, 'Men Jewellery', '2023-03-10 08:48:55'),
(2, 'Women Jewellery', '2023-03-10 11:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `j_subcategory`
--

CREATE TABLE `j_subcategory` (
  `j_sub_id` int(20) NOT NULL,
  `j_id` int(20) NOT NULL,
  `j_sub_name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `j_subcategory`
--

INSERT INTO `j_subcategory` (`j_sub_id`, `j_id`, `j_sub_name`, `description`, `image`, `price`, `date`) VALUES
(4, 1, 'Golden and Green Set', 'Golden and Green Pearl Set For Men', '6daa3913aa9c9f916ce4b8952542ee80.jpg', '1000', '2023-03-24 08:16:21'),
(5, 1, 'White Set ', 'White Pearl Set ', '5cdbe97aaec87f05f1efeeadbcd195cf.jpg', '900', '2023-03-24 08:17:23'),
(6, 2, 'Pearl Set', 'White Pearl Set', 'set10.png', '890', '2023-03-24 08:18:16'),
(7, 2, 'Floral Set', 'Diamond Floral Set', 'set4.png', '2000', '2023-04-06 17:00:25'),
(8, 1, 'Green Men Set', 'Green Pearl Set', '862745d94594acd901927d73ac420d25.jpg', '900', '2023-04-06 17:30:38'),
(9, 2, 'Diamond Set', 'White and Purple Diamond Set', 'set6.png', '650', '2023-04-06 17:31:32'),
(10, 2, 'Yellow Jhumka', 'Yellow Banarasi Jhumka', 'set8.png', '560', '2023-04-06 17:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `multi_image`
--

CREATE TABLE `multi_image` (
  `image_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multi_image`
--

INSERT INTO `multi_image` (`image_id`, `category_id`, `image`, `date`) VALUES
(1, 4, '1o.jpg', '2023-03-10 11:21:29'),
(2, 4, '2o.jpg', '2023-03-10 11:21:44'),
(3, 4, '3o.jpg', '2023-03-10 11:22:06'),
(4, 4, '4o.jpg', '2023-03-10 11:22:06'),
(5, 4, '5o.jpg', '2023-03-10 11:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `ocassion`
--

CREATE TABLE `ocassion` (
  `o_id` int(20) NOT NULL,
  `o_name` varchar(200) NOT NULL,
  `o_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ocassion`
--

INSERT INTO `ocassion` (`o_id`, `o_name`, `o_date`) VALUES
(1, 'Mehendi', '2023-03-02 09:11:57'),
(3, 'Haldi', '2023-03-02 11:06:18'),
(4, 'Sangeet', '2023-03-02 11:06:32'),
(5, 'Reception', '2023-03-02 11:15:42'),
(7, 'Wedding day', '2023-03-10 07:18:06'),
(8, 'Party', '2023-03-11 04:47:37'),
(9, 'Engagement', '2023-03-11 04:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `sub_cat_id` int(20) NOT NULL,
  `order_name` varchar(200) CHARACTER SET latin1 NOT NULL,
  `order_email` varchar(200) CHARACTER SET latin1 NOT NULL,
  `order_phone` varchar(20) CHARACTER SET latin1 NOT NULL,
  `order_address` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `o_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `order_city` varchar(200) CHARACTER SET latin1 NOT NULL,
  `order_final_amount` int(100) NOT NULL,
  `order_payment_type` varchar(100) CHARACTER SET latin1 NOT NULL,
  `order_status` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `c_id`, `sub_cat_id`, `order_name`, `order_email`, `order_phone`, `order_address`, `o_date`, `order_city`, `order_final_amount`, `order_payment_type`, `order_status`) VALUES
(47, 11, 12, 'shruti beladiya', 'shruti.beladiya5059@gmail.com', '7016817757', '28, kavita ro house surat v-1', '06-04-23', '28, kavita ro house surat v-1 ', 15000, 'Stripe', 'Pending'),
(48, 12, 21, 'uttam radadiya', 'uttamradadiya@gmail.com', '9313502112', '29, sanketdham yogichowk', '07-04-23', '29, sanketdham yogichowk surat', 7690, 'Stripe', 'success'),
(49, 12, 10, 'uttam radadiya', 'uttamradadiya@gmail.com', '9313502112', '29, sanketdham yogichowk', '07-04-23', '29, sanketdham yogichowk surat', 560, 'Stripe', 'success'),
(50, 14, 52, 'abcd', 'abc@gmail.com', '7016817757', 'vapi', '07-04-23', '29, sanketdham yogichowk surat', 11000, 'Stripe', 'success'),
(55, 11, 12, 'shruti beladiya', 'shruti.beladiya5059@gmail.com', '7016817757', '28, kavita ro house surat v-1', '07-04-23', 'vapi', 15000, 'Stripe', 'Pending'),
(56, 14, 5, 'abcd', 'abc@gmail.com', '7016817757', 'vapi', '07-04-23', 'surat', 4000, 'Stripe', 'success'),
(57, 11, 12, 'shruti beladiya', 'shruti.beladiya5059@gmail.com', '7016817757', '28, kavita ro house surat v-1', '08-04-23', 'vapi', 19800, 'Stripe', 'success'),
(58, 11, 32, 'shruti beladiya', 'shruti.beladiya5059@gmail.com', '7016817757', '28, kavita ro house surat v-1', '19-04-23', 'suart', 5500, 'Stripe', 'success'),
(59, 11, 10, 'shruti beladiya', 'shruti.beladiya5059@gmail.com', '7016817757', '28, kavita ro house surat v-1', '25-04-23', 'suart', 560, 'Stripe', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  `p_amount` varchar(255) CHARACTER SET latin1 NOT NULL,
  `card_number` varchar(255) CHARACTER SET latin1 NOT NULL,
  `expiredate` varchar(200) CHARACTER SET latin1 NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `cvv_no` int(20) NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 NOT NULL,
  `invoice` varchar(200) CHARACTER SET latin1 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `order_id`, `p_amount`, `card_number`, `expiredate`, `user_name`, `cvv_no`, `status`, `invoice`, `date`) VALUES
(22, 48, '7690', '4242 4242 4242 4242', '09/25', 'uttam radadiya', 157, 'success', '36060186', '2023-04-07 04:49:55'),
(23, 49, '560', '4242 4242 4242 4242', '03/26', 'uttam ', 456, 'success', '56426109', '2023-04-07 06:11:52'),
(24, 50, '11000', '4242 4242 4242 4242', '01/24', 'kk', 123, 'success', '79505904', '2023-04-07 09:09:12'),
(25, 56, '4000', '6522 8149 4602 7554', '09/28', 'abc', 506, 'success', '56583342', '2023-04-07 12:38:44'),
(26, 57, '19800', '4242 4242 4242 4242 ', '03/24', 'abc', 123, 'success', '68224415', '2023-04-08 04:44:02'),
(27, 58, '5500', '6522 8149 4602 7554', '01/26', 'shruti', 569, 'success', '59865086', '2023-04-19 05:25:39'),
(28, 59, '560', '5242 7221 6694 3122', '05/24', 'abcd', 531, 'success', '82064595', '2023-04-25 06:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_cat_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `o_id` int(20) NOT NULL,
  `color_id` int(20) NOT NULL,
  `sub_cat_name` varchar(200) NOT NULL,
  `o_stock` varchar(20) NOT NULL,
  `sub_cat_content` varchar(200) NOT NULL,
  `size` varchar(100) NOT NULL,
  `sub_cat_price` int(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `category_id`, `o_id`, `color_id`, `sub_cat_name`, `o_stock`, `sub_cat_content`, `size`, `sub_cat_price`, `image`, `date`) VALUES
(4, 4, 1, 4, 'Mahendi Green Lehenga', 'out of stock', 'Mehendi Green Sequins Embroidered Silk Bridal Lehe..', '', 8000, '1o.jpg', '2023-04-08 04:26:00'),
(5, 4, 1, 4, 'Dark Green Lehenga', 'stock', 'Dark Green Sequins Embroidered Raw Silk Bridal Leh...', '', 4000, '1p.jpg', '2023-04-07 09:19:20'),
(6, 4, 3, 3, 'Cyber Yellow Lehenga', 'stock', 'Cyber Yellow Resham Embroidered Silk Bride Lehenga', '', 5500, '1650470636lehengayello1.png', '2023-04-07 09:57:32'),
(7, 4, 4, 5, 'Hot Pink Lehenga', 'stock', 'Hot Pink Cutdana Embroidered Silk Bridal Lehenga', '', 8500, '1t.jpg', '2023-04-07 09:58:13'),
(8, 4, 5, 6, 'Light Pink Pearl Lehenga', 'stock', 'Light Pink Pearl Embroidered Raw Silk Bridal Lehen...', '', 9000, '1a.jpg', '2023-04-07 09:58:32'),
(9, 4, 7, 8, 'Red Sequins Lehenga', 'stock', 'Crimson Red Sequins Embroidered Raw Silk Bridal Le...', '', 6000, '1v.jpg', '2023-04-07 09:58:50'),
(10, 4, 8, 1, 'Dark Peacock Blue Lehenga', 'stock', 'Dark Peacock Blue Sequins Embroidered Net Bridal L...', '', 9800, '1l.jpg', '2023-04-07 09:59:07'),
(11, 4, 9, 6, 'Royal Purple Lehenga', 'stock', 'Royal Purple Sequins Embroidered Silk  Lehenga', '', 10000, '16504710341m.jpg', '2023-04-07 10:01:25'),
(12, 4, 8, 1, 'Pastel Blue Lehenga', 'stock', 'Pastel Blue Sequins Embroidered Net  Lehenga', '', 15000, '16504711441q.jpg', '2023-04-07 10:01:48'),
(15, 4, 7, 9, 'Bole Brown Lehenga', 'stock', 'Bole Brown Mirror Embroidered Silk Designer Leheng...', '', 3500, '16504711771c.jpg', '2023-04-07 10:03:23'),
(16, 4, 5, 7, 'Off White Georget Lehenga', 'stock', 'Off-White Gota Embroidered Tissue Georgette  Lehen...', '', 6700, '1j.jpg', '2023-04-07 10:03:47'),
(17, 1, 4, 5, 'Blue Designer Blazer', 'stock', 'Blue Designer Blazer', '', 8300, '1650475318blzarblue1.png', '2023-04-07 10:04:23'),
(21, 21, 4, 5, 'Dusty Pink Gown', 'stock', 'Dusty Rose Pink Stone Embroidered Net Bridal Gown', '', 2000, 'gown1.jpg', '2023-04-07 10:06:27'),
(22, 21, 1, 4, 'Green Silver Work Gown', 'stock', 'Green Georget Silver Work Gown', '', 3000, 'gown17.png', '2023-04-07 10:08:32'),
(23, 21, 5, 1, 'Blue Sequins Gown', 'stock', 'Blue Sequins Embroidered Net Bridal Gown', '', 4000, 'gown12.jpg', '2023-04-07 10:09:55'),
(24, 21, 9, 8, 'Dark Red Gown', 'stock', 'Rosewood Red Zari Woven Banarasi Silk Gown', '', 3200, '1650472140gown8.jpg', '2023-04-07 10:10:37'),
(25, 21, 5, 6, 'Light Purple Gown', 'stock', 'Light Purple Silk Gown With Embroderied Border', '', 9000, '1650472159gown25.png', '2023-04-07 10:12:04'),
(26, 21, 3, 7, 'White Tissue Silk Gown', 'stock', 'Off-White Gota Embroidered Tissue Georgette  Gown', '', 4500, '1650472185gown28.png', '2023-04-07 10:12:34'),
(27, 21, 3, 3, 'Yellow Designer Gown', 'stock', 'Yellow Designer Gown with zari work', '', 2500, '1650472201gown21.png', '2023-04-07 10:13:39'),
(28, 23, 3, 3, 'Yellow Silk Saree', 'stock', 'Yellow Silk Saree with silver border work', '', 5400, '1650473067saree13.jpg', '2023-04-07 10:14:20'),
(29, 23, 1, 8, 'Red Silk saree', 'stock', 'Rosewood Red Zari Woven Banarasi Silk Saree', '', 2900, '1650473100saree1.jpg', '2023-04-07 10:14:46'),
(30, 23, 1, 4, 'Green Silk Saree', 'stock', 'Green Georget Silver  Silk Work Saree', '', 7080, '1650473117saree16.jpg', '2023-04-07 10:16:53'),
(31, 23, 8, 1, 'Blue Silk Saree', 'stock', 'Blue  Zardosi Embroidered Raw Silk Jodhpuri Saree', '', 6800, '1650473136saree4.jpg', '2023-04-07 10:17:24'),
(32, 23, 4, 7, 'White Net Saree', 'stock', 'White Net Saree With handmade work of pearl', '', 5500, '1650473153saree7.jpg', '2023-04-07 10:17:48'),
(33, 23, 4, 5, 'Pink Cotton Saree', 'stock', 'Pink Cotton With Red Border Saree', '', 1050, '1650473182saree10.jpg', '2023-04-07 10:18:25'),
(35, 5, 5, 1, 'Blue Blazer Suit', 'stock', 'Blue Blazer Suit', '', 8960, '1650487411partyq1.png', '2023-04-07 10:18:59'),
(36, 5, 8, 2, 'Black Suit', 'stock', 'Black Suit', '', 3500, '1650487456partybb1.png', '2023-04-07 10:19:43'),
(37, 24, 7, 5, 'Pink Suit ', 'stock', 'Pink Suit With Simple Work', '', 9870, '1650482531west1.png', '2023-04-07 10:20:39'),
(38, 24, 9, 8, 'Red Suit', 'stock', 'Red Suit With Professional Fabric', '', 10000, '1650482586west14.png', '2023-04-07 10:21:23'),
(39, 24, 8, 1, 'Sky Blue Suit', 'stock', 'Sky Blue Suit With brooch', '', 6900, '1650482629west24.png', '2023-04-07 10:22:00'),
(40, 1, 1, 4, 'Dark Green Cotton Blazer', 'stock', 'Dark Green Cotton Blazer', '', 7590, '1650475388blzargree1.png', '2023-04-07 10:22:29'),
(41, 1, 7, 5, 'Light Pink Italian Blazer', 'stock', 'Light Pink Italian Blazer', '', 2800, '1650475411blzar1.png', '2023-04-07 10:22:55'),
(42, 2, 3, 3, 'Yellow Silk Kurta', 'stock', 'Yellow Silk Kurta', '', 2500, '1650478765kurta1.png', '2023-04-07 10:24:10'),
(43, 2, 1, 4, 'Light Green Men Kurta', 'stock', 'Light Green Men Kurta', '', 3000, '1650478797kurta15.png', '2023-04-07 10:24:36'),
(44, 2, 8, 1, 'Dark Blue Men Kurta', 'stock', 'Dark Blue Men Kurta', '', 2600, '1650478818kurta11.png', '2023-04-07 10:24:55'),
(45, 2, 5, 5, 'Light Pink Kurta For Men', 'stock', 'Light Pink Kurta For Men', '', 2560, '1650478836kurta23.png', '2023-04-07 10:25:21'),
(46, 2, 4, 2, 'Black Kurta For Men', 'stock', 'Black Kurta For Men', '', 2650, '1650478906kurta13.png', '2023-04-07 10:25:46'),
(48, 3, 1, 4, 'White and Green Shervani', 'stock', 'White and Green Shervani', '', 4500, '1650479082shervani17.png', '2023-04-07 10:26:10'),
(49, 3, 7, 8, 'Red Silk Shervani', 'stock', 'Red Silk Shervani', '', 6400, '1650479107shervani34.png', '2023-04-07 10:26:31'),
(50, 3, 4, 1, 'Sky Blue Shervani', 'stock', 'Sky Blue Shervani', '', 4800, '1650479127shervani3.png', '2023-04-07 10:26:55'),
(51, 3, 7, 8, 'Designer Red Shervani', 'stock', 'Designer Red Shervani', '', 6900, '1650479151shervani28.png', '2023-04-07 10:27:16'),
(52, 3, 9, 7, 'White Designer Shervani', 'stock', 'White Designer Shervani', '', 5500, '1650479029shervani21.png', '2023-04-07 10:27:52'),
(53, 25, 4, 1, 'Blue Silk Italian Suit', 'stock', 'Blue Silk Italian Suit', '', 9780, '1650482943partyw1.png', '2023-04-07 10:28:36'),
(54, 25, 5, 2, 'Black Suit', 'stock', 'Black Suit', '', 4500, '1650483041party1.png', '2023-04-07 10:29:01'),
(55, 25, 8, 8, 'Red Suit', 'stock', 'Red Suit', '', 4000, '1650483147partym1.png', '2023-04-07 10:29:42'),
(56, 25, 9, 6, 'Purple Suit', 'stock', 'Purple Suit', '', 9750, '1650483185partys1.png', '2023-04-07 10:30:08'),
(57, 22, 4, 6, 'Purple Funky Lehenga', 'stock', 'Purple Funky Lehenga', '', 5670, '1650487140indowestern21.jpg', '2023-04-07 10:30:48'),
(58, 22, 8, 7, 'Cream Lehenga', 'stock', 'Cream Lehenga', '', 8500, '1650487169indowestern7.jpg', '2023-04-07 10:31:08'),
(59, 22, 5, 6, 'Dark Purple Lehenga', 'stock', 'Dark Purple Lehenga', '', 8300, '1650487197indowestern2.jpg', '2023-04-07 10:31:29'),
(60, 1, 9, 5, 'Funky Lehenga', 'stock', 'Funky Lehenga With Multicolour', '', 6500, '1650487218manu.jpg', '2023-04-07 10:32:24'),
(61, 26, 1, 4, 'Green Indo Western Gouan', 'stock', 'Green Indo Western Gouan ', '', 7560, 'pe1.png', '2023-04-07 10:33:03'),
(62, 26, 8, 7, 'White Indo Crop Top', 'stock', 'White Indo Crop Top', '', 8600, '1650482730pw1.png', '2023-04-07 10:33:52'),
(63, 26, 8, 5, 'Ros Pink Indo Western', 'stock', 'Ros Pink Indo Western', '', 5600, '1650482762pm1.png', '2023-04-07 10:34:52'),
(64, 26, 8, 6, 'Purple Indo Top and Saree', 'stock', 'Purple Indo Top and Saree', '', 6400, '1650482821pp1.png', '2023-04-07 10:35:11'),
(65, 26, 8, 1, 'Simple Blue Gouan', 'stock', 'Simple Blue Gouan', '', 4600, '1650482857pu1.png', '2023-04-07 10:36:31'),
(66, 27, 1, 4, 'Green Safa', 'stock', 'Green Safa', '', 1100, 'safa11.png', '2023-04-07 10:36:58'),
(67, 27, 3, 3, 'Yellow Safa', 'stock', 'Yellow Safa', '', 500, '1650478682safa2.png', '2023-04-07 10:37:28'),
(68, 27, 7, 8, 'Red Safa', 'stock', 'Red Designer Safa', '', 1500, '1650478671safa3.png', '2023-04-07 10:38:10'),
(69, 27, 7, 8, 'Red Safa', 'stock', 'Red Safa', '', 700, '1650478649safa10.png', '2023-04-07 10:38:33'),
(70, 27, 5, 7, 'White Safa', 'stock', 'White Safa', '', 900, '1650478632safa7.png', '2023-04-07 10:38:51'),
(71, 27, 7, 5, 'Pink Safa', 'stock', 'Pink Safa', '', 1200, '1650478604safa23.png', '2023-04-07 10:39:11'),
(72, 1, 1, 1, 'Mahendi green kurta', 'stock', 'mahendi kurta', '', 850, '1678436377green kurta.jpg', '2023-04-07 10:39:46'),
(73, 22, 1, 4, 'Mahendi green western', 'out of stock', 'Mahendi green western', '', 4500, 'bridemaid15.jpg', '2023-04-06 11:37:10'),
(74, 5, 7, 5, 'Off white Groom Maid Outfit', 'out of stock', 'Off white Groom Maid Outfit', '', 9000, 'groom maid outfit.jpg', '2023-04-06 16:45:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `about_us_image`
--
ALTER TABLE `about_us_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `client_register`
--
ALTER TABLE `client_register`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `designer`
--
ALTER TABLE `designer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `jewellery`
--
ALTER TABLE `jewellery`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `j_subcategory`
--
ALTER TABLE `j_subcategory`
  ADD PRIMARY KEY (`j_sub_id`);

--
-- Indexes for table `multi_image`
--
ALTER TABLE `multi_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `ocassion`
--
ALTER TABLE `ocassion`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_us_image`
--
ALTER TABLE `about_us_image`
  MODIFY `image_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `client_register`
--
ALTER TABLE `client_register`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designer`
--
ALTER TABLE `designer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jewellery`
--
ALTER TABLE `jewellery`
  MODIFY `j_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `j_subcategory`
--
ALTER TABLE `j_subcategory`
  MODIFY `j_sub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `multi_image`
--
ALTER TABLE `multi_image`
  MODIFY `image_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ocassion`
--
ALTER TABLE `ocassion`
  MODIFY `o_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
