-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2019 at 09:21 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `derbyairlinesystem`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=``@`localhost` PROCEDURE `GetFlightStatistics`(IN `j_date` DATE)
BEGIN
 select flight_no,departure_date,IFNULL(no_of_passengers, 0) as no_of_passengers,total_capacity from (
select f.flight_no,f.departure_date,sum(t.no_of_passengers) as no_of_passengers,j.total_capacity 
from flight_details f left join ticket_details t 
on t.booking_status='CONFIRMED' 
and t.flight_no=f.flight_no 
and f.departure_date=t.journey_date 
inner join airplane_details j on j.numser=f.numser
group by flight_no,journey_date) k where departure_date=j_date;
 END$$

DELIMITER ;

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `airplane_details` (
  `numser` int(10) NOT NULL,
  `plane_type` varchar(20) ,
  `total_capacity` int(5) ,
  `active` varchar(5) 
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `airplane_details`
--

INSERT INTO `airplane_details` (`numser`, `plane_type`, `total_capacity`, `active`) VALUES
(100, 'boeing737', 300, 'Yes'),
(101, 'emirates987', 275, 'Yes'),
(102, 'BA10003', 50, 'Yes'),
(103, 'Airfr-10004', 225, 'Yes'),
(104, 'AIRBUS69-552710007',  250, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE IF NOT EXISTS `passenger` (
  `passenger_id` int(255) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`passenger_id`, `firstname`, `surname`, `Email`, `phone`, `address`, `username`, `password`) VALUES
(1, 'jayden', 'walters', 'jayden@gmail.com', 075728992, '40 marketon st derby', 'jay', 'bin'),
(2, 'jason', 'peters', 'jason@gmail.com', 089276228, '22 arsenal st london', 'jpe', 'pin'),
(3, 'mosh', 'yinka', 'mosh@gmail.com', 02282929, '32 old trafford st manchester', 'mosh', 'mosh360'),
(4, 'john', 'mabool', 'john@gmail.com', 029288222, '90 city centre birmingham', 'jm', 'bin'),
(5, 'jack ', 'bin', 'jack@yahoo.com', 078729208, '90 lagos city lagos', 'lagos', 'pin');
-- --------------------------------------------------------
CREATE TABLE `pilot` (
  `pilotid` int(255) NOT NULL,
  `pilotratings` varchar(40) NOT NULL,
  `EmpNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `way`
--

INSERT INTO `pilot` (`pilotid`, `pilotratings`, `EmpNum`) VALUES
(1, 'classs a', '4'),
(2, 'class b', '5'),
(3, 'class c', '6'),
(4, 'class a', '7');

CREATE TABLE `crew` (
  `crewid` int(255) NOT NULL,
  `crewtype` varchar(40) NOT NULL,
  `EmpNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `way`
--

INSERT INTO `crew` (`crewid`, `crewtype`, `EmpNum`) VALUES
(1, 'crew a', '8'),
(2, 'crew b', '9'),
(3, 'class c', '10');

--
-- Table structure for table `payment_details`
--
--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `EmpNum` int(255) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `phone` int(12) NOT NULL,
  `address` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 
--

INSERT INTO `staff` (`EmpNum`, `firstname`, `surname`, `phone`, `address`, `username`, `password`) VALUES
(1, 'mike', 'john', 0786578866, '32 city centre derby', 'mikey', 'bob'),
(2, 'joseph', 'dury ', 1231231, '76 pybus st derby', 'josephy', 'pop'),
(3, 'josh', 'kerry', 097657899, '22 arsenal st london', 'joshy', 'bob'),
(4, 'lee', ' thomas ', 078854567, '87 trafford st chester', 'leey', 'pop'),
(5, 'harry', 'yu', 125899543, '32 tong st london', 'harryy', 'bob'),
(6, 'barnby', ' lee', 123123123, '55 city wr birmingham', 'barnyy', 'pop'),
(7, 'karim', 'ben', 09785665432, '09 burton rd london', 'karimy', 'bob'),
(8, 'nini', ' cindy ', 1279200312, '33 fiit st london', 'niniy', 'pop'),
(9, 'chloe', 'burton', 177775432, '65 peng st france', 'chloeyy', 'bob'),
(10, 'esther', 'jerry', 18899566, '67 ton st belgium', 'esthery', 'pop');

-- --------------------------------------------------------

--
-- 
--


-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE IF NOT EXISTS `flight_details` (
  `flight_no` varchar(10) NOT NULL,
  `from_city` varchar(20) DEFAULT NULL,
  `to_city` varchar(20) DEFAULT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `seats_economy` int(5) DEFAULT NULL,
  `seats_business` int(5) DEFAULT NULL,
  `price_economy` int(10) DEFAULT NULL,
  `price_business` int(10) DEFAULT NULL,
  `numser` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_details`
--

INSERT INTO `flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `numser`) VALUES
('AA101', 'london', 'france', '2022-12-24', '2022-12-25', '21:00:00', '01:00:00', 195, 96, 5000, 7500, 100),
('AA102', 'derby', 'manchester', '2022-12-25', '2017-12-26', '10:00:00', '12:00:00', 200, 73, 2500, 3000, 101),
('AA103', 'birmingham', 'wales', '2022-12-26', '2017-12-27', '17:00:00', '17:45:00', 150, 75, 1200, 1500, 102),
('AA104', 'ireland', 'scotland', '2023-01-12', '2023-01-13', '09:00:00', '09:17:00', 37, 4, 500, 750, 103),
('AA106', 'newyork', 'california', '2023-01-13', '2023-01-14', '13:00:00', '14:00:00', 150, 75, 3000, 3750, 104),
('BOING707PA', 'lagos', 'abuja', '2023-01-14', '2023-01-15', '10:00:00', '13:00:00', 400, 21, 4500, 7000, 105);

-- --------------------------------------------------------

--
-- Table structure for table `frequent_flier_details`
--

CREATE TABLE IF NOT EXISTS `frequent_flier_details` (
  `frequent_flier_no` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `mileage` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frequent_flier_details`
--

INSERT INTO `frequent_flier_details` (`frequent_flier_no`, `username`, `mileage`) VALUES
('10001000', 'aadith', 375),
('20002000', 'harryroshan', 150);

-- --------------------------------------------------------

--
-- Table structure for table `jet_details`
--


CREATE TABLE IF NOT EXISTS `payment_details` (
  `payment_id` varchar(20) NOT NULL,
  `pnr` varchar(15) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_amount` int(6) DEFAULT NULL,
  `payment_mode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) VALUES
('120000248', '4797983', '2017-11-25', 4200, 'credit card'),
('142539461', '3773951', '2017-11-25', 4050, 'debit card'),
('165125569', '8503285', '2017-11-25', 7500, 'net banking'),
('423519897', '2033264', '2019-08-17', 6638, 'paypal'),
('460571289', '9572357', '2019-08-19', 25700, 'debit card'),
('952539062', '5272308', '2019-08-18', 7850, 'credit card');

--
-- Triggers `payment_details`
--
DELIMITER //
CREATE TRIGGER `update_ticket_after_payment` AFTER INSERT ON `payment_details`
 FOR EACH ROW UPDATE ticket_details
     SET booking_status='CONFIRMED', payment_id= NEW.payment_id
   WHERE pnr = NEW.pnr
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE IF NOT EXISTS `ticket_details` (
  `pnr` varchar(15) NOT NULL,
  `date_of_reservation` date DEFAULT NULL,
  `flight_no` varchar(10) DEFAULT NULL,
  `journey_date` date DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `booking_status` varchar(20) DEFAULT NULL,
  `no_of_passengers` int(5) DEFAULT NULL,
  `lounge_access` varchar(5) DEFAULT NULL,
  `priority_checkin` varchar(5) DEFAULT NULL,
  `insurance` varchar(5) DEFAULT NULL,
  `payment_id` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_details`
--

INSERT INTO `ticket_details` (`pnr`, `date_of_reservation`, `flight_no`, `journey_date`, `class`, `booking_status`, `no_of_passengers`, `lounge_access`, `priority_checkin`, `insurance`, `payment_id`, `username`) VALUES
('1669050', '2017-11-25', 'AirfRance89', '2017-12-04', 'business', 'CONFIRMED', 3, 'yes', 'yes', 'yes', '620041544', 'mosh'),
('2033264', '2019-08-17', 'AIRBUS700', '2019-08-19', 'economy', 'CONFIRMED', 1, 'yes', 'yes', 'yes', '423519897', 'josh'),
('2179656', '2019-08-17', 'Boeing737', '2019-08-19', 'economy', 'CONFIRMED', 1, 'yes', 'yes', 'yes', '936389160', 'jay'),
('2369143', '2017-11-26', 'BA121', '2017-12-01', 'business', 'CONFIRMED', 4, 'yes', 'yes', 'yes', '467972527', 'harry'),
('2538635', '2019-08-17', 'VA839', '2019-08-19', 'economy', 'CANCELED', 1, 'no', 'no', 'no', '757064819', 'wizzy'),
('9572357', '2019-08-19', 'AIR707PA', '2019-09-01', 'business', 'CANCELED', 2, 'yes', 'yes', 'yes', '460571289', 'david');

--
-- Indexes for dumped tables
--

CREATE TABLE `city` (
  `city_id` int(255) NOT NULL,
  `origin` varchar(40) NOT NULL,
  `destination` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `origin`, `destination`) VALUES
(1, 'london', 'france'),
(2, 'belgium', 'newyork'),
(3, 'dubai', 'lagos'),
(4, 'london', 'canada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stff`
--
--
-- Indexes for table `admin`
--
ALTER TABLE `Staff`
 ADD PRIMARY KEY (`EmpNum`);

  ALTER TABLE `pilot`
  ADD CONSTRAINT `staff_pilot_ibfk_1` FOREIGN KEY (`EmpNum`) REFERENCES `staff` (`EmpNum`);
  
 ALTER TABLE `crew`
  ADD CONSTRAINT `staff_crew_ibfk_1` FOREIGN KEY (`EmpNum`) REFERENCES `staff` (`EmpNum`);
--
-- 
--


--
-- Indexes for table `flight_details`
--
ALTER TABLE `flight_details`
 ADD PRIMARY KEY (`flight_no`,`departure_date`), ADD KEY `numser` (`numser`);

--
-- Indexes for table `frequent_flier_details`
--
ALTER TABLE `frequent_flier_details`
 ADD PRIMARY KEY (`frequent_flier_no`), ADD KEY `username` (`username`);

--
-- Indexes for table `airplane_details`
--
ALTER TABLE `airplane_details`
 ADD PRIMARY KEY (`numser`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
 ADD PRIMARY KEY (`passenger_id`,`username`), ADD KEY `username` (`username`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
 ADD PRIMARY KEY (`payment_id`), ADD KEY `pnr` (`pnr`);

--
-- Indexes for table `ticket_details`
--
ALTER TABLE `ticket_details`
 ADD PRIMARY KEY (`pnr`), ADD KEY `username` (`username`), ADD KEY `journey_date` (`journey_date`), ADD KEY `flight_no` (`flight_no`), ADD KEY `flight_no_2` (`flight_no`,`journey_date`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight_details`
--
ALTER TABLE `flight_details`
ADD CONSTRAINT `flight_details_ibfk_1` FOREIGN KEY (`numser`) REFERENCES `airplane_details` (`numser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `frequent_flier_details`
--
ALTER TABLE `frequent_flier_details`
ADD CONSTRAINT `frequent_flier_details_ibfk_1` FOREIGN KEY (`username`) REFERENCES `passenger` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `passengers`
--
ALTER TABLE `passenger`
ADD CONSTRAINT `passenger_ibfk_1` FOREIGN KEY (`username`) REFERENCES `ticket_details` (`pnr`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `passenger_ibfk_2` FOREIGN KEY (`frequent_flier_no`) REFERENCES `frequent_flier_details` (`frequent_flier_no`) ON UPDATE CASCADE;

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`pnr`) REFERENCES `ticket_details` (`pnr`) ON UPDATE CASCADE;

--
-- Constraints for table `ticket_details`
--
ALTER TABLE `ticket_details`
ADD CONSTRAINT `ticket_details_ibfk_2` FOREIGN KEY (`username`) REFERENCES `passenger` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ticket_details_ibfk_3` FOREIGN KEY (`flight_no`, `journey_date`) REFERENCES `flight_details` (`flight_no`, `departure_date`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
