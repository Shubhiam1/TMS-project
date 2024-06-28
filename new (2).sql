-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 10:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `package_start_date` varchar(255) NOT NULL,
  `package_end_date` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `user_id`, `package_start_date`, `package_end_date`, `comment`, `status`) VALUES
(26, '276', '2024-05-15', '2024-05-30', 'yhtyrhythetyrheyhetyhtyehyhjtyhythyy', 'unconfirmed'),
(27, '276', '2024-05-24', '2024-05-31', 'mumi7mm7mkuy7m', 'unconfirmed'),
(39, '278', '2024-05-25', '2024-05-24', 'gfxhjrfjrfdj', 'unconfirmed'),
(40, '278', '2024-05-24', '2024-05-31', 'dfvgerfhgbehbetr', 'unconfirmed'),
(41, '276', '2024-05-16', '2024-05-25', 'gdhbrebhrethgertw', 'unconfirmed'),
(42, '276', '2024-05-17', '2024-05-24', 'saqcfwqefe3wrg', 'unconfirmed'),
(43, '276', '2024-05-24', '2024-05-25', 'hjighivhkvhivhivhi', 'unconfirmed'),
(44, '276', '2024-05-25', '2024-05-31', 'saqfwefergte43', 'unconfirmed'),
(45, '276', '2024-05-16', '2024-05-31', 'erthge5tthyrethrtj', 'unconfirmed'),
(46, '276', '2024-05-24', '2024-05-28', 'wdfgweregerger', 'unconfirmed'),
(47, '276', '2024-05-31', '2024-06-06', 'dfgvwregfvwre', 'unconfirmed'),
(48, '276', '2024-05-18', '2024-06-01', 'sdfwergwer', 'unconfirmed'),
(49, '276', '2024-05-31', '2024-05-31', 'werfgerthgerts', 'unconfirmed'),
(50, '276', '2024-05-25', '2024-05-31', 'dfwsfgwerfgwerfgrger', 'unconfirmed'),
(51, '276', '2024-05-25', '2024-05-29', 'gnfnfnfngfngf', 'unconfirmed'),
(52, '276', '2024-05-25', '2024-05-31', 'jvjhdvchdsacgsadcfgasmdhcvbascgsiay', 'unconfirmed'),
(53, '276', '2024-05-19', '2024-05-31', 'fgfgfcchgfc', 'unconfirmed'),
(54, '276', '2024-05-24', '2024-06-07', 'fgfgfcchgfcgfwergfvwe', 'unconfirmed'),
(55, '276', '2024-05-18', '2024-06-07', 'dswgwerg3we', 'unconfirmed'),
(56, '276', '2024-05-25', '2024-06-01', 'rg3ergerq', 'unconfirmed'),
(57, '276', '2024-05-26', '2024-06-06', 'wqefdwqefqf', 'unconfirmed'),
(58, '276', '2024-05-24', '2024-05-31', 'erwf3wrgf3we', 'unconfirmed'),
(59, '276', '2024-05-24', '2024-05-31', 'fgnryjhtryj', 'unconfirmed'),
(60, '276', '2024-05-25', '2024-05-31', 'wg45eg45weg4wq', 'unconfirmed'),
(61, '276', '2024-05-24', '2024-05-31', 'tyhu546rhuy5r4hw', 'unconfirmed'),
(62, '276', '2024-05-24', '2024-05-30', 'fbhretdhrtdeh4r56', 'unconfirmed'),
(63, '276', '2024-05-18', '2024-05-25', 'ertyh4reh4rewt', 'unconfirmed'),
(64, '276', '2024-05-25', '2024-05-30', 'rgerthgye4tyhg', 'unconfirmed'),
(65, '276', '2024-05-25', '2024-05-31', 'adsfgewrageg', 'unconfirmed'),
(66, '276', '2024-05-25', '2024-05-30', 'thretdhretd', 'unconfirmed'),
(67, '276', '2024-05-18', '2024-05-30', 'wrgerge', 'unconfirmed'),
(68, '276', '2024-05-25', '2024-05-30', 'xvcsdvsf', 'unconfirmed'),
(69, '276', '2024-05-23', '2024-05-31', 'ewrgreg4', 'unconfirmed'),
(70, '276', '2024-06-01', '2024-06-01', 'dfbvefgvbera', 'unconfirmed'),
(71, '276', '2024-05-17', '2024-05-31', 'ugjhvhjvhjvhjvhkj\r\n', 'unconfirmed'),
(72, '276', '2024-05-18', '2024-05-31', 'hcccjvvvkhvkhvkh', 'unconfirmed'),
(73, '276', '2024-05-23', '2024-05-30', 'efwfewfw', 'unconfirmed'),
(74, '276', '2024-05-16', '2024-05-30', 'ghrhrgs', 'unconfirmed'),
(75, '276', '2024-05-24', '2024-05-30', 'sfgvewrqge4thg', 'unconfirmed'),
(76, '276', '2024-05-24', '2024-05-30', 'rwgee4hgrethre', 'unconfirmed'),
(77, '276', '2024-05-16', '2024-05-30', 'rgfe3wrgewqg', 'unconfirmed'),
(78, '276', '2024-05-24', '2024-05-31', 'fbgvdfsg', 'unconfirmed'),
(79, '276', '2024-05-22', '2024-05-24', 'ewrte', 'unconfirmed'),
(80, '276', '2024-05-17', '2024-05-25', 'rethrtshrt', 'unconfirmed'),
(81, '276', '2024-05-25', '2024-05-30', 'dwsfgwsfv', 'unconfirmed'),
(82, '276', '2024-05-24', '2024-05-31', 'ytjtyrjhrtyjh', 'unconfirmed'),
(83, '276', '2024-05-09', '2024-05-31', 'wefwefwesafw', 'unconfirmed'),
(84, '276', '2024-05-24', '2024-05-25', 'wdfgerge', 'unconfirmed'),
(85, '276', '2024-05-24', '2024-05-26', 'wdefwergerg', 'unconfirmed'),
(86, '276', '2024-05-25', '2024-05-30', 'cgnfhnfgnfd', 'unconfirmed'),
(87, '276', '2024-05-23', '2024-05-29', 'dfgetdgesgvbdsf', 'unconfirmed'),
(88, '276', '2024-05-25', '2024-05-25', 'ghrdtgshbfd', 'unconfirmed'),
(89, '276', '2024-05-25', '2024-06-09', 'dtryjfyjfdyhjfdh', 'unconfirmed'),
(90, '276', '2024-05-31', '2024-06-09', 'sfvesfvsdfveas', 'unconfirmed'),
(91, '276', '2024-05-18', '2024-06-08', 'dnfgrfgh', 'unconfirmed'),
(92, '276', '2024-05-17', '2024-06-08', 'werfge5rg4w5erhg4r', 'unconfirmed'),
(93, '276', '2024-05-17', '2024-05-25', 'bdbdfbvdfvdf', 'unconfirmed'),
(94, '276', '2024-05-25', '2024-05-11', 'rgeher5tyhgertshge', 'unconfirmed'),
(95, '276', '2024-05-18', '2024-05-31', 'efwrfwrf', 'unconfirmed'),
(96, '276', '2024-05-24', '2024-05-17', 'wefwefwcwc', 'unconfirmed'),
(97, '276', '2024-05-17', '2024-05-31', 'dwsvsvsfvsdav', 'unconfirmed'),
(98, '276', '2024-05-17', '2024-05-31', 'qeqedfqedqedqe', 'unconfirmed'),
(99, '276', '2024-05-18', '2024-06-01', 'drvgefgethrth', 'unconfirmed'),
(100, '276', '2024-05-17', '2024-05-31', 'tyhhhehehhrtthydrhr', 'unconfirmed'),
(101, '276', '2024-05-18', '2024-05-25', 'dwfgwsfws', 'unconfirmed'),
(102, '276', '2024-05-25', '2024-06-08', 'rfgerwfgverve', 'unconfirmed'),
(103, '276', '2024-05-23', '2024-06-01', 'bdfbdsfdgbhfd', 'unconfirmed'),
(104, '276', '2024-05-18', '2024-06-01', 'swascasc', 'unconfirmed'),
(105, '276', '2024-05-26', '2024-06-08', 'dfbdbdvbdbvdbbd', 'unconfirmed'),
(106, '276', '2024-06-08', '2024-06-05', 'vrfhgredsfgsfdvfsd', 'unconfirmed'),
(107, '276', '2024-06-08', '2024-06-05', 'vrfhgredsfgsfdvfsd', 'unconfirmed'),
(108, '276', '2024-06-08', '2024-06-05', 'vrfhgredsfgsfdvfsd', 'unconfirmed'),
(109, '276', '2024-06-13', '2024-06-20', 'i,,hf,fhgj', 'unconfirmed'),
(110, '276', '2024-06-21', '2024-06-28', 'ujk,mytugk,myfd', 'unconfirmed');

-- --------------------------------------------------------

--
-- Table structure for table `booking_quaries`
--

CREATE TABLE `booking_quaries` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_quaries`
--

INSERT INTO `booking_quaries` (`id`, `name`, `email`, `query`) VALUES
('1', 'Test', 'test@gmail.com', 'test'),
('1', 'sdfedsgv', 'kokok@gmail.com', '123456\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `phone`, `message`) VALUES
(1, 'Vansh Pratap Rajpoot', 'rajpoot.office@gmail.com', 'Kerla Trip', '7485961020', 'Hi I want to gather some information about the Kerla'),
(2, 'sfdga', 'kk@gmail.com', 'v  vhn', '8219044578', 'jobjswqavadvwkhefkhasecvkcvkhvfsdnkvcdkhasdFYSADFIYW'),
(3, 'sfdga', 'kokok@gmail.com', 'wfrgwrsfgwerf', '9882074669', 'rewfwerfwefwefwefwefwrefw');

-- --------------------------------------------------------

--
-- Table structure for table `google_login_user`
--

CREATE TABLE `google_login_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL DEFAULT '',
  `full_name` varchar(255) NOT NULL DEFAULT '',
  `picture` varchar(255) NOT NULL DEFAULT '',
  `verifiedEmail` varchar(255) NOT NULL DEFAULT '',
  `token` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `google_login_user`
--

INSERT INTO `google_login_user` (`id`, `email`, `first_name`, `last_name`, `gender`, `full_name`, `picture`, `verifiedEmail`, `token`) VALUES
(2, 'baseline.shubham041@gmail.com', 'Shubham', 'Bhardwaj', '', 'Shubham Bhardwaj', 'https://lh3.googleusercontent.com/a/ACg8ocJsnqwX78PnrF8lpeGEQDLecUZ7xI8N8shwe5r_UNZgkS1gWw=s96-c', '1', '100294151079949113968');

-- --------------------------------------------------------

--
-- Table structure for table `new_tb`
--

CREATE TABLE `new_tb` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_tb`
--

INSERT INTO `new_tb` (`id`, `fname`, `lname`, `dob`, `phone`, `email`, `pwd`, `user`) VALUES
(235, 'admin', 'admin', '1999-10-02', '8219044578', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(276, 'FirstName ', 'LastName', '1999-10-02', '9882074669', 'user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(277, 'Vansh', 'Pratap Rajpoot', '2002-10-18', '7485961020', 'rajpoot.office@gmail.com', 'b2dc33afe26d78e52f974dbf3e72fcab', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `package_tb`
--

CREATE TABLE `package_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_tb`
--

INSERT INTO `package_tb` (`id`, `name`, `type`, `location`, `price`, `details`, `feature`, `image`) VALUES
(1, 'Himachal Park  ', 'Outdoor', 'Hamirpur', '20', '  test', 'Test', 'uploads/Screenshot (1).png'),
(2, 'National Park ', 'Outdoor', 'India', '12', ' Good park', 'Free Pickup and Drop to the home', 'uploads/screencapture-localhost-carpentry-about-2024-05-16-01_27_06.png');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `currency` varchar(3) NOT NULL,
  `status` varchar(50) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `payer_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(9) NOT NULL,
  `price` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `price`, `status`, `product_name`) VALUES
(119, '12', 'completed', 'undefined'),
(120, '12', 'completed', 'undefined'),
(121, '12', 'completed', 'undefined'),
(122, '12', 'completed', 'undefined'),
(123, '20', 'completed', 'undefined'),
(124, '12', 'completed', 'undefined'),
(125, '20', 'completed', 'undefined');

-- --------------------------------------------------------

--
-- Table structure for table `stripe_payment`
--

CREATE TABLE `stripe_payment` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stripe_payment`
--

INSERT INTO `stripe_payment` (`id`, `email`, `amount`, `date`, `payment_method`) VALUES
(1, 'v@gmail.com', '1200', '2024-05-30 03:51:49', 'stripe'),
(2, 'tgeh@gmail.com', '1200', '2024-05-30 03:53:47', 'stripe'),
(3, 'user@gmail.com', '1200', '2024-05-30 03:56:11', 'stripe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_login_user`
--
ALTER TABLE `google_login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_tb`
--
ALTER TABLE `new_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_tb`
--
ALTER TABLE `package_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripe_payment`
--
ALTER TABLE `stripe_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `google_login_user`
--
ALTER TABLE `google_login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `new_tb`
--
ALTER TABLE `new_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `package_tb`
--
ALTER TABLE `package_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `stripe_payment`
--
ALTER TABLE `stripe_payment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
