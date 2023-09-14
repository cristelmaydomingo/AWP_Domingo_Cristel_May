-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 02:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_school`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Add_New_User` (IN `Input_last_Name` VARCHAR(30), IN `Input_first_Name` VARCHAR(30), IN `Input_midlle_Name` VARCHAR(30), IN `Input_extention_Name` VARCHAR(30), IN `Input_sex` CHAR(1), IN `Input_birth_Date` DATE, IN `Input_age` INT(2), IN `Input_home_Address` VARCHAR(75), IN `Input_civil_Status` VARCHAR(12), IN `Input_religion` VARCHAR(20), IN `Input_nationality` VARCHAR(20), IN `Input_boarding_Address` VARCHAR(75), IN `Input_contact_Number` CHAR(11), IN `Input_email_Address` VARCHAR(25))   BEGIN 
   
    	INSERT INTO person (last_Name, first_Name, midlle_Name, extention_Name, sex, birth_date, age, home_address, civil_status, religion, nationality, boarding_address, contact_number, email_address) 
        
    VALUES (Input_first_Name,Input_last_Name, Input_midlle_Name, Input_extention_Name,Input_sex, Input_birth_date, Input_age, Input_home_address, Input_civil_status, Input_religion, Input_nationality, Input_boarding_address, Input_contact_number, Input_email_address);
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_ID` int(9) NOT NULL,
  `last_Name` varchar(50) NOT NULL,
  `first_Name` varchar(50) NOT NULL,
  `middle_Name` varchar(50) DEFAULT NULL,
  `extension_name` varchar(6) DEFAULT NULL,
  `Sex` char(10) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(2) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `civil_status` char(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `boarding_Address` varchar(100) NOT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_ID` int(9) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
