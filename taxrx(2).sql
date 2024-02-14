-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 08:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxrx`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_customer`
--

CREATE TABLE `add_customer` (
  `CustomerId` bigint(20) UNSIGNED NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `CustomerAddress` varchar(255) NOT NULL,
  `GstNumber` varchar(255) NOT NULL,
  `PanNumber` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL,
  `BankName` varchar(255) NOT NULL,
  `IFSC` varchar(255) NOT NULL,
  `BankAccount` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_customer`
--

INSERT INTO `add_customer` (`CustomerId`, `CustomerName`, `CustomerAddress`, `GstNumber`, `PanNumber`, `Email`, `MobileNumber`, `BankName`, `IFSC`, `BankAccount`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Rohit', 'nagpur', '65757.00', 'fajk74', 'Rohitbharshe', '457982.00', 'hsdh', 'shjhg849', '27589.00', 1, '2022-11-20 04:24:47', '2022-11-20 04:24:47'),
(2, 'Rohit', 'nagpur', '72598.00', 'fajk74', 'rohit@gmail.com', '92847498.00', 'hdfc', 'shjhg849', '8823042.00', 3, '2022-11-20 06:07:17', '2022-11-20 06:07:17'),
(3, 'shubham', 'indore', '65757.00', '23235', 's@gmail.com', '9406879999.00', 'hghghg', '112222222', '89896633.00', 6, '2022-12-20 05:24:44', '2022-12-20 05:24:44'),
(4, 'hfsda', 'fdlajdsfa', '12345678', '12345678', 'hi@hi.com', '9876543219', 'fgjkl;agd', '12345678', '1234567890987654', 9, '2023-08-02 05:36:46', '2023-08-02 05:36:46'),
(5, 'helll', 'kjhjcjkhljk gklj', '787654678765432', '6848769898', 'hi@hi', '9876435679', 'hdfc', '67665567987', '67865', 9, '2023-08-02 05:46:48', '2023-08-02 05:46:48'),
(6, 'hfsda', 'kjhjcjkhljk gklj', '787654671234567', '6848769898', 'hi@hi.com', '9876435679', 'hdfc', 'ABCD0123456', '648372738384', 2, '2023-08-10 07:45:42', '2023-08-10 07:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_users`
--

CREATE TABLE `customer_users` (
  `customer_users_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_users`
--

INSERT INTO `customer_users` (`customer_users_id`, `name`, `username`, `number`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Rohit', 'rohit1234', NULL, 'rohitbharshe@gmail.com', 'Rohit1234', '2022-11-20 04:07:46', '2022-11-20 04:07:46'),
(2, 'Gaurav', 'Gaurav', NULL, 'gaurav@gmail.com', 'Gaurav123', '2022-11-20 04:28:03', '2022-11-20 04:28:03'),
(3, 'Shubham', 'shubham', NULL, 'shubham@gmail.com', 'Shubham1234', '2022-11-20 06:01:40', '2022-11-20 06:01:40'),
(4, 'Shreyash', 'Shree', NULL, 'deshpandeshreyash450@gmail.com', 'Shreyash@123', '2022-11-20 20:26:42', '2022-11-20 20:26:42'),
(5, 'Rohit', 'rohitharshe', NULL, 'rohit@gmail.com', 'Rohit@2002', '2022-12-12 10:33:08', '2022-12-12 10:33:08'),
(6, 'harshita sanwale', 'harshita15', NULL, 'info@mailinator.com', '12345678', '2022-12-16 15:36:57', '2022-12-16 15:36:57'),
(7, 'Gourav', 'Gourav', NULL, 'ranagaurav687@gmail.com', '12345678', '2023-07-31 09:10:13', '2023-07-31 09:10:13'),
(8, 'hello', 'hello@hello.com', NULL, 'hello@hello.com', '12345', '2023-08-02 00:20:14', '2023-08-02 00:20:14'),
(9, 'hi', 'hi@hi.com', NULL, 'hi@hi.com', '$2y$10$1O4Jd4zW3HAZkjWX3hr2z.lFzm0F.QRhwRc50VtCR/7JXPC7comJe', '2023-08-02 00:36:43', '2023-08-02 00:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `edit_profile`
--

CREATE TABLE `edit_profile` (
  `edit_id` bigint(20) UNSIGNED NOT NULL,
  `tradename` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Gst_no` decimal(20,2) DEFAULT NULL,
  `office_address` varchar(60) NOT NULL,
  `state` varchar(60) NOT NULL,
  `pin_code` decimal(8,2) NOT NULL,
  `number` decimal(18,2) NOT NULL,
  `pan_no` varchar(10) NOT NULL,
  `AUTHORISED` varchar(255) DEFAULT NULL,
  `bank_name` varchar(60) NOT NULL,
  `IFSC` varchar(50) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `profile_pic` blob DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `BankAccount` decimal(30,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `edit_profile`
--

INSERT INTO `edit_profile` (`edit_id`, `tradename`, `email`, `Gst_no`, `office_address`, `state`, `pin_code`, `number`, `pan_no`, `AUTHORISED`, `bank_name`, `IFSC`, `user_id`, `profile_pic`, `created_at`, `updated_at`, `BankAccount`) VALUES
(1, 'dfhsbdg', 'hi@hi.com', NULL, 'Civil Lines', 'HimachalPradesh', 176215.00, 9876354676.00, 'DLYPG1929S', NULL, 'HDFC', '123456781234', 2, NULL, '2022-11-20 04:32:36', '2023-08-09 01:58:07', 123456783949.00),
(2, 'sai jwellers', NULL, 43793.00, 'gondia', 'Maharastra', 441702.00, 9284749802.00, 'dhsd89', 'fhf', 'hdfc', 'hdfc0003838', 3, NULL, '2022-11-20 06:10:11', '2022-11-20 06:10:11', 398259.00);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_joining` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `employee_picture` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `date_of_birth`, `date_of_joining`, `gender`, `designation`, `manager`, `employee_picture`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'ssd', '2023-11-07', '2023-11-14', 'male', 'df', 'dfs', '1700229906.jpg', '123456', 'shitalkatre370@gmail.com', '2023-11-17 08:35:06', '2023-11-17 08:35:06'),
(2, 'Ronitr', '2023-11-08', '2023-11-14', 'female', 'sdsffffffffg', 'asadsdsf', '1700230533.jpg', '123456', 's@gmail.com', '2023-11-17 08:45:33', '2023-11-17 08:45:33'),
(3, 'shital katre', '2023-11-07', '2023-11-21', 'female', 'as', 'sa', '1700235324.gif', '123456', 'sh@gmail.com', '2023-11-17 10:05:24', '2023-11-17 10:05:24'),
(4, 'su', '2023-11-01', '2023-11-01', 'female', 'jfhgj', 'kgjgk', '1700235950.jpg', '456789', 'Sg@gmail.com', '2023-11-17 10:15:50', '2023-11-17 10:15:50'),
(7, 'de', '2023-11-14', '2023-11-15', 'female', 'wewewe', 'ewwewe', '1700307422.gif', '123456', 'xz@GMAIL.COM', '2023-11-18 06:07:02', '2023-11-18 06:07:02'),
(8, 'sonam', '2023-11-07', '2023-11-14', 'female', 'kh', 'yg', '1700365983.jpg', '123456', 'as@gmail.com', '2023-11-18 22:23:05', '2023-11-18 22:23:05'),
(9, 'hg', '2023-11-07', '2023-11-03', 'female', 're', 're', '1700371892.jpg', '123456', 'fd@gmail.com', '2023-11-19 00:01:32', '2023-11-19 00:01:32'),
(10, 'up', '2023-11-07', '2023-11-15', 'female', 'lk', 'ml', '1700372031.jpg', '234567', 'lk@gmail.com', '2023-11-19 00:03:51', '2023-11-19 00:03:51'),
(11, 'yumr', '2023-11-14', '2023-11-15', 'male', 'Access to our dashboard', 'dashboard', '1700372471.jpeg', '567890', 'rt@gmail.com', '2023-11-19 00:11:11', '2023-11-19 00:11:11'),
(12, 'rmi', '2023-11-08', '2023-11-08', 'male', 'ju', 'uj', '1700372688.jpg', '123456', 'dfgf@gmail.com', '2023-11-19 00:14:48', '2023-11-19 00:14:48'),
(13, 'shitalkatre', '2023-11-08', '2023-11-15', 'female', 'kanakku.dreamguystech.co', 'kanakku.dreamguystech.co', '1700374841.jpeg', '123456', 'djhggggg123@gmail.com', '2023-11-19 00:50:41', '2023-11-19 00:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `SalesType` varchar(255) DEFAULT NULL,
  `InvoiceId` bigint(20) UNSIGNED NOT NULL,
  `InvoiceNumber` decimal(8,2) DEFAULT NULL,
  `PartyName` varchar(255) DEFAULT NULL,
  `InvoiceDate` date DEFAULT NULL,
  `GST_No` varchar(255) DEFAULT NULL,
  `goodservices` varchar(255) DEFAULT NULL,
  `taxablevalue` varchar(255) DEFAULT NULL,
  `HSNSAC` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `UQC` varchar(255) DEFAULT NULL,
  `GstRate` varchar(255) DEFAULT NULL,
  `IGST` varchar(255) DEFAULT NULL,
  `CGST` varchar(255) DEFAULT NULL,
  `SGSTUTGST` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `CustomerId` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`SalesType`, `InvoiceId`, `InvoiceNumber`, `PartyName`, `InvoiceDate`, `GST_No`, `goodservices`, `taxablevalue`, `HSNSAC`, `quantity`, `UQC`, `GstRate`, `IGST`, `CGST`, `SGSTUTGST`, `user_id`, `CustomerId`, `created_at`, `updated_at`) VALUES
('2022-11-22', 2, 1.00, NULL, '2022-11-21', '', 'dsf', '50.00', '67.00', '1', 'NO OF PCS', '32', '89', '56', '23', 3, 2, '2022-11-20 07:49:06', '2022-11-20 07:49:06'),
(NULL, 3, 68746.00, 'Gourav', '2023-08-15', NULL, 'Service', '7698', '756895', '2', 'KG', '6', '886', '794', '76598', NULL, NULL, NULL, NULL),
(NULL, 4, 68746.00, 'Gourav', '2023-08-15', NULL, 'Service', '7698', '756895', '2', 'KG', '6', '886', '794', '76598', NULL, NULL, NULL, NULL),
('Sez', 5, 46236.00, 'hemant', '2023-08-25', '643725', 'Goods', '52363', '256', '5', 'Dozen', '55', '356', '456', '346546', 9, NULL, NULL, NULL),
('Sez', 6, 68746.00, 'hello', '2023-08-19', '643725', 'Service', '52363', '256', '4', 'Meter', '55', '886', '794', '346546', 9, NULL, NULL, NULL),
('Nil Rated', 7, 46236.00, 'Shubham', '2023-08-25', '643725', 'Goods', '52363', '756895', '5', 'Meter', '6', '356', '794', '76598', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_05_063416_create_customer_users_table', 1),
(6, '2022_11_10_164859_create_edit_profile_table', 1),
(7, '2022_11_10_184443_add__bank_account_to_edit_profile_table', 1),
(8, '2022_11_12_122350_create__add_customer_table', 1),
(9, '2022_11_19_062911_create__invoice_table', 2),
(10, '2022_11_19_091528_create__vendor_table', 2),
(11, '2022_11_19_123002_create_purchase_bill_table', 3),
(12, '2022_11_19_154147_add_paid_to_invoice_table', 3),
(13, '2023_10_15_144634_create_companies_table', 4),
(14, '2023_10_15_161731_create_customers_table', 4),
(15, '2023_11_17_114756_add_somecolumn_field_to_users', 5),
(16, '2023_11_17_120316_create_user_table', 6),
(17, '2023_11_17_124258_create_todos_table', 7),
(18, '2023_11_17_133406_create_employees_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ranagaurav687@gmail.com', '$2y$10$4fgC4sL0dXinQvgDgALu0.PYq.xKHhZB3HsDcYZ72bfliQRB5r4m.', '2023-08-11 11:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_bill`
--

CREATE TABLE `purchase_bill` (
  `PurchaseId` bigint(20) UNSIGNED NOT NULL,
  `BillNumber` decimal(8,2) DEFAULT NULL,
  `BillDate` date DEFAULT NULL,
  `good` varchar(255) DEFAULT NULL,
  `taxablevalue` decimal(8,2) DEFAULT NULL,
  `HSN` decimal(8,2) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `UQC` varchar(255) DEFAULT NULL,
  `GstRate` varchar(255) DEFAULT NULL,
  `IGST` varchar(255) DEFAULT NULL,
  `CGST` varchar(255) DEFAULT NULL,
  `SGST` varchar(255) DEFAULT NULL,
  `Paid` decimal(8,2) DEFAULT NULL,
  `UnPaid` decimal(8,2) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `VendorId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_bill`
--

INSERT INTO `purchase_bill` (`PurchaseId`, `BillNumber`, `BillDate`, `good`, `taxablevalue`, `HSN`, `quantity`, `UQC`, `GstRate`, `IGST`, `CGST`, `SGST`, `Paid`, `UnPaid`, `user_id`, `VendorId`, `created_at`, `updated_at`) VALUES
(1, 1.00, '2022-11-21', 'sfd', 423.00, 324.00, '1', 'KG', '423', '453', '43', '453', 432.00, 243.00, 3, 1, '2022-11-20 09:23:39', '2022-11-20 09:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, 'admin@admin.com', '2023-08-13 07:42:19', '$2y$10$XUf84/ZlgBcfyH08iMk8vOGvCbl14WreUPS9AhZpXRNH1tYDHtCkm', NULL, NULL, '2023-08-13 07:42:19'),
(2, 'Manager', NULL, 'ranagaurav687@gmail.com', '2023-08-10 23:53:40', '$2y$10$XUf84/ZlgBcfyH08iMk8vOGvCbl14WreUPS9AhZpXRNH1tYDHtCkm', NULL, '2023-08-09 04:49:05', '2023-08-10 23:53:40'),
(4, 'Shubham', '46352794', 'test@test.com', NULL, '$2y$10$Rx1saNH9Vqm9ssbit2U2Z.7Em46VaolnZGGgZaOs6qTlY2K/3kYzW', NULL, '2023-08-08 03:02:42', '2023-08-08 03:02:42'),
(6, 'Shubham', '1234567898', '1@gmail.com', NULL, '$2y$10$sYUqtn661hbwa1AFuR5gYeFMCc7ndg5SmuUgZhutH67k3mKgBLhP.', NULL, '2023-08-11 00:13:43', '2023-08-11 00:13:43'),
(7, 'Faaang', '1234554321', 'hello@hello.com', NULL, '$2y$10$ay1bHcMBt2dRY1gRdkrtOOsZlMt3jeKdNLp5WcM/dXdvrnkma7TXO', NULL, '2023-08-11 00:16:40', '2023-08-11 00:16:40'),
(8, 'Faaang', '1234543215', 'it@it.com', '2023-08-11 00:32:49', '$2y$10$kYR62t4osvvCTmeVbDmw5.QgXuZR373/zwhIxocOMf62xbN9kSn5O', NULL, '2023-08-11 00:27:08', '2023-08-11 00:32:49'),
(9, 'dfhsbdg', '1123452313', '11@gmail.com', NULL, '$2y$10$NJRQ/dWOxVW7C6tYFBVBVelqCmMMXX5gKvBCZQHt3996/s0Gv1H1O', NULL, '2023-08-11 00:30:02', '2023-08-11 00:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `VendorId` bigint(20) UNSIGNED NOT NULL,
  `VendorName` varchar(255) DEFAULT NULL,
  `VendorAddress` varchar(255) DEFAULT NULL,
  `GstNumber` varchar(255) DEFAULT NULL,
  `PanNumber` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `MobileNumber` varchar(255) DEFAULT NULL,
  `BankName` varchar(255) DEFAULT NULL,
  `IFSC` varchar(255) DEFAULT NULL,
  `BankAccount` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`VendorId`, `VendorName`, `VendorAddress`, `GstNumber`, `PanNumber`, `Email`, `MobileNumber`, `BankName`, `IFSC`, `BankAccount`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'pune', '72598.00', 'fajk74', 'rohit@gmail.com', '457982.00', 'hsdh', 'shjhg849', '27589.00', 3, '2022-11-20 07:52:39', '2022-11-20 07:52:39'),
(2, 'Gourav', NULL, '34563256423244', 'DLYPG1929S', 'hi@hi.com', '9816577536', 'hdfc', 'ABCD0123456', '648372738384', 9, '2023-08-03 02:11:44', '2023-08-03 02:11:44'),
(3, 'shah', NULL, '34563256423244', 'DLYPG1929S', 'hi@hi.com', '9883643323', 'HDFC', 'ABCD0123456', '648372738384', 9, '2023-08-03 02:31:55', '2023-08-03 02:31:55'),
(5, 'Gourav', NULL, '34563256423244', 'DLYPG1929S', 'hi@hi.com', '9816577536', 'HDFC', 'ABCD0123456', '648372738384', 2, '2023-08-10 08:12:24', '2023-08-10 08:12:24'),
(6, 'Gourav', NULL, '34563256423244', 'DLYPG1929S', 'hi@hi.com', '9816577536', 'HDFC', 'ABCD0123456', '648372738384', 2, '2023-08-10 08:12:50', '2023-08-10 08:12:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_customer`
--
ALTER TABLE `add_customer`
  ADD PRIMARY KEY (`CustomerId`),
  ADD KEY `add_customer_customer_users_id_foreign` (`user_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_users`
--
ALTER TABLE `customer_users`
  ADD PRIMARY KEY (`customer_users_id`);

--
-- Indexes for table `edit_profile`
--
ALTER TABLE `edit_profile`
  ADD PRIMARY KEY (`edit_id`),
  ADD KEY `edit_profile_customer_users_id_foreign` (`user_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceId`),
  ADD KEY `invoice_customer_users_id_foreign` (`user_id`),
  ADD KEY `invoice_customerid_foreign` (`CustomerId`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchase_bill`
--
ALTER TABLE `purchase_bill`
  ADD PRIMARY KEY (`PurchaseId`),
  ADD KEY `purchase_bill_vendorid_foreign` (`VendorId`),
  ADD KEY `purchase_bill_users_id_foreign` (`user_id`) USING BTREE;

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`VendorId`),
  ADD KEY `_vendor_customer_users_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_customer`
--
ALTER TABLE `add_customer`
  MODIFY `CustomerId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_users`
--
ALTER TABLE `customer_users`
  MODIFY `customer_users_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `edit_profile`
--
ALTER TABLE `edit_profile`
  MODIFY `edit_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_bill`
--
ALTER TABLE `purchase_bill`
  MODIFY `PurchaseId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `VendorId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_customer`
--
ALTER TABLE `add_customer`
  ADD CONSTRAINT `add_customer_customer_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `customer_users` (`customer_users_id`);

--
-- Constraints for table `edit_profile`
--
ALTER TABLE `edit_profile`
  ADD CONSTRAINT `edit_profile_customer_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `customer_users` (`customer_users_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_customer_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `customer_users` (`customer_users_id`),
  ADD CONSTRAINT `invoice_customerid_foreign` FOREIGN KEY (`CustomerId`) REFERENCES `add_customer` (`CustomerId`);

--
-- Constraints for table `purchase_bill`
--
ALTER TABLE `purchase_bill`
  ADD CONSTRAINT `purchase_bill_customer_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `customer_users` (`customer_users_id`),
  ADD CONSTRAINT `purchase_bill_vendorid_foreign` FOREIGN KEY (`VendorId`) REFERENCES `vendor` (`VendorId`);

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `_vendor_customer_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `customer_users` (`customer_users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
