# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: cs2141
# Generation Time: 2016-01-11 22:44:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table all_shift_view
# ------------------------------------------------------------

DROP VIEW IF EXISTS `all_shift_view`;

CREATE TABLE `all_shift_view` (
   `emp_id` INT(11) NOT NULL DEFAULT '0',
   `rental_id` INT(11) NOT NULL DEFAULT '0',
   `rental_name` VARCHAR(255) NOT NULL,
   `rent_type_name` VARCHAR(255) NOT NULL,
   `rental_date` DATE NOT NULL
) ENGINE=MyISAM;



# Dump of table department
# ------------------------------------------------------------

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `dept_name` varchar(255) NOT NULL,
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;

INSERT INTO `department` (`dept_name`, `dept_id`)
VALUES
	('Administration',1),
	('Front of House',2),
	('Lighting',3),
	('Sound',4),
	('Stage',5),
	('Box Office',6),
	('Custodial',7);

/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table employee
# ------------------------------------------------------------

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `emp_fname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `emp_lname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `u_name` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `emp_phone` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `emp_email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `job_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `u_name` (`u_name`),
  KEY `job_id` (`job_id`),
  CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;

INSERT INTO `employee` (`emp_fname`, `emp_lname`, `u_name`, `password`, `emp_phone`, `emp_email`, `job_id`, `emp_id`, `is_admin`)
VALUES
	('Andrea','Norwood','anorwood','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-6540','anorwood@net.com',5,1,0),
	('Graeme','Campbell','gcampbell','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-7010','audio@spatz.ca',12,2,0),
	('Sarah','White','swhite','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-5719','swhite@spatz.ca',3,3,1),
	('Robert','Tracey','rtracey','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-1111','lighting@spatz.ca',9,4,0),
	('Dustin','Harvey','dharvey','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-0757','stage@spatz.ca',15,5,0),
	('Benoit','Whitehead-Gravel','bgravel','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-5551','bgravel@net.com',10,6,0),
	('Simon','Rainville','srainville','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-8465','srainville@net.com',16,7,0),
	('Kathryn','McCormick','kmccormick','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-1705','kmccormick@net.com',4,8,0),
	('Stephanie','MacDonald','smacdonald','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-1410','boxoffice@spatz.ca',18,9,0),
	('Keelin','Jack','kjack','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-3580','office@spatz.ca',2,10,0),
	('Georgia','Duvall','gduvall','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-1709','gduvall@net.com',6,11,0),
	('Alex','Fraser','afraser','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-1750','afraser@net.com',8,12,0),
	('Simone','Manley','smanley','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-1952','smanley@net.com',7,13,0),
	('Louisa','Adamson','ladamson','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-1111','louisa@spatz.ca',1,14,1),
	('Kyran','McGowan','kmcgowan','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-6900','kmcgowan@net.com',13,15,0),
	('Jeffrey','O\'Hara','johara','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-0105','johara@net.com',20,16,0),
	('Cindy','Willcott','cwilcott','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-7802','cwillcott@net.com',21,17,0),
	('Janelle','Dorey','jdorey','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-1776','jdorey@net.com',11,18,0),
	('Sara','Mader','smader','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-1777','smader@net.com',14,19,0),
	('Garrett','Barker','gbarker','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8',NULL,'gbarker@net.com',17,20,0),
	('Shawn','Bisson','sbisson','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-1701','sbission@net.com',19,21,0),
	('Vicki','Beaufield','vbeaufield','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-1911','vbeaufield@net.com',11,22,0),
	('Ron','Barker','rbarker','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8','555-1102','rbarker@net.com',11,23,0);

/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table employee_by_dept
# ------------------------------------------------------------

DROP VIEW IF EXISTS `employee_by_dept`;

CREATE TABLE `employee_by_dept` (
   `emp_fname` VARCHAR(255) NOT NULL,
   `emp_lname` VARCHAR(255) NOT NULL,
   `job_title` VARCHAR(255) NOT NULL,
   `hourly_wage` DECIMAL(11) NULL DEFAULT NULL,
   `emp_phone` VARCHAR(30) NULL DEFAULT NULL,
   `emp_email` VARCHAR(255) NULL DEFAULT NULL,
   `dept_id` INT(11) NOT NULL,
   `emp_id` INT(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM;



# Dump of table job
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job`;

CREATE TABLE `job` (
  `job_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hourly_wage` decimal(11,2) DEFAULT NULL,
  `dept_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`job_id`),
  KEY `dept_id` (`dept_id`),
  CONSTRAINT `job_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `job` WRITE;
/*!40000 ALTER TABLE `job` DISABLE KEYS */;

INSERT INTO `job` (`job_title`, `hourly_wage`, `dept_id`, `job_id`)
VALUES
	('Office Administrator',30.00,1,1),
	('Office Assistant',15.00,1,2),
	('Rental Coordinator',18.00,1,3),
	('FOH Manager',20.00,2,4),
	('Usher',14.00,2,5),
	('Coat Check',14.00,2,6),
	('Concessions',14.00,2,7),
	('Security',20.00,2,8),
	('Head of Lighting',25.00,3,9),
	('Lead Lighting Hand',20.00,3,10),
	('Lighting Technician',15.00,3,11),
	('Head of Audio',25.00,4,12),
	('Lead Audio Hand',20.00,4,13),
	('Sound Technician',15.00,4,14),
	('Head Rigger',25.00,5,15),
	('Assistant Rigger',20.00,5,16),
	('Stage Hand',15.00,5,17),
	('Box Office Manager',20.00,6,18),
	('Cashier',24.00,6,19),
	('Head Custodian',35.00,7,20),
	('Custodian',30.00,7,21);

/*!40000 ALTER TABLE `job` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rental
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rental`;

CREATE TABLE `rental` (
  `rental_date` date NOT NULL,
  `rental_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `event_length` int(11) NOT NULL,
  `renter_id` int(11) DEFAULT NULL,
  `rent_type_id` int(11) NOT NULL,
  `rental_confirm` tinyint(1) NOT NULL,
  `rental_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`rental_id`),
  UNIQUE KEY `UQ_Date` (`rental_date`),
  KEY `renter_id` (`renter_id`),
  KEY `rent_type_id` (`rent_type_id`),
  CONSTRAINT `rental_ibfk_1` FOREIGN KEY (`renter_id`) REFERENCES `renter` (`renter_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rental_ibfk_2` FOREIGN KEY (`rent_type_id`) REFERENCES `rental_type` (`rent_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `rental` WRITE;
/*!40000 ALTER TABLE `rental` DISABLE KEYS */;

INSERT INTO `rental` (`rental_date`, `rental_name`, `event_length`, `renter_id`, `rent_type_id`, `rental_confirm`, `rental_id`)
VALUES
	('2015-12-07','Screen NS AGM',4,49,6,1,48),
	('2015-12-12','Body Builders Provincial Tournament',5,50,5,1,49),
	('2015-12-18','Elvis Live(?)',2,51,2,1,50),
	('2016-02-20','Chronicle Herald Spelling Bee',7,52,6,0,51),
	('2017-08-19','Mel and Rob\'s Mystery-Themed Wedding',6,53,9,1,52),
	('2015-12-03','The Little Prince',3,57,5,1,58),
	('2015-11-13','The Sound Of Music',4,58,5,1,59),
	('2016-03-04','Ivany Group AGM',4,67,6,0,63),
	('2016-03-06','Annual Children\'s Telethon',6,68,6,1,64),
	('2015-12-28','Die Hard on Ice',7,72,8,0,68);

/*!40000 ALTER TABLE `rental` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rental_confirmed
# ------------------------------------------------------------

DROP VIEW IF EXISTS `rental_confirmed`;

CREATE TABLE `rental_confirmed` (
   `rental_name` VARCHAR(255) NOT NULL,
   `rent_type_name` VARCHAR(255) NOT NULL,
   `rental_date` DATE NOT NULL,
   `event_length` INT(11) NOT NULL,
   `renter_company` VARCHAR(255) NULL DEFAULT NULL,
   `contact_name` VARCHAR(511) NULL DEFAULT NULL,
   `renter_phone` VARCHAR(30) NULL DEFAULT NULL,
   `renter_email` VARCHAR(255) NULL DEFAULT NULL,
   `rental_id` INT(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM;



# Dump of table rental_need_confirm
# ------------------------------------------------------------

DROP VIEW IF EXISTS `rental_need_confirm`;

CREATE TABLE `rental_need_confirm` (
   `rental_name` VARCHAR(255) NOT NULL,
   `rent_type_name` VARCHAR(255) NOT NULL,
   `rental_date` DATE NOT NULL,
   `event_length` INT(11) NOT NULL,
   `renter_company` VARCHAR(255) NULL DEFAULT NULL,
   `contact_name` VARCHAR(511) NULL DEFAULT NULL,
   `renter_phone` VARCHAR(30) NULL DEFAULT NULL,
   `renter_email` VARCHAR(255) NULL DEFAULT NULL,
   `rental_id` INT(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM;



# Dump of table rental_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rental_type`;

CREATE TABLE `rental_type` (
  `rent_type_name` varchar(255) NOT NULL,
  `setup_length` int(11) NOT NULL,
  `rent_type_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`rent_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `rental_type` WRITE;
/*!40000 ALTER TABLE `rental_type` DISABLE KEYS */;

INSERT INTO `rental_type` (`rent_type_name`, `setup_length`, `rent_type_id`)
VALUES
	('Rehearsal',1,1),
	('Concert',3,2),
	('Dance Performance',3,3),
	('Film Screening',3,4),
	('Theatre Performance',4,5),
	('Conference',3,6),
	('Lecture',3,7),
	('Banquet',2,8),
	('Party',1,9);

/*!40000 ALTER TABLE `rental_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table renter
# ------------------------------------------------------------

DROP TABLE IF EXISTS `renter`;

CREATE TABLE `renter` (
  `renter_fname` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `renter_lname` varchar(255) DEFAULT NULL,
  `renter_company` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `renter_phone` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `renter_email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `renter_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`renter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `renter` WRITE;
/*!40000 ALTER TABLE `renter` DISABLE KEYS */;

INSERT INTO `renter` (`renter_fname`, `renter_lname`, `renter_company`, `renter_phone`, `renter_email`, `renter_id`)
VALUES
	('Thom','Fitzgerald','Screen NS','709-555-1444','screens@NS.com',49),
	('Quinn','Shayley','Body Builders Association of NS','709-555-5514','bronzer@dudes.com',50),
	('Thane','Dunn','Elvis Impersonators of Canada','709-555-9999','theking@ahuh.com',51),
	('Anita','Letta','Spelling NS','709-555-6363','aletta@words.com',52),
	('Mel','Hattie','Da B\'ys','902-555-2933','melhattie@gmail.com',53),
	('Juanita','Peters','Maritime Conservatory','709-222-1315','cons@maritime.com',57),
	('Richard','Bonner','Halifax Broadway Society','709-555-9893','rick@bonner.com',58),
	('Bob','Ivany','Ivany Group','709-555-4135','ivany@ivanygroup.ca',67),
	('Aaron','Lawson','Lawson Inc','709-555-1415','lawson@lawson.ca',68),
	('Bruce','Willis','Willis Co.','709-555-1444','jazz@halifax.com',72);

/*!40000 ALTER TABLE `renter` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table requires
# ------------------------------------------------------------

DROP TABLE IF EXISTS `requires`;

CREATE TABLE `requires` (
  `rent_type_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  PRIMARY KEY (`rent_type_id`,`dept_id`),
  KEY `req_dept` (`dept_id`),
  CONSTRAINT `req_dept` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `req_rent_type` FOREIGN KEY (`rent_type_id`) REFERENCES `rental_type` (`rent_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `requires` WRITE;
/*!40000 ALTER TABLE `requires` DISABLE KEYS */;

INSERT INTO `requires` (`rent_type_id`, `dept_id`)
VALUES
	(1,1),
	(2,1),
	(3,1),
	(4,1),
	(5,1),
	(6,1),
	(7,1),
	(8,1),
	(9,1),
	(2,2),
	(3,2),
	(4,2),
	(5,2),
	(8,2),
	(9,2),
	(2,3),
	(3,3),
	(4,3),
	(5,3),
	(6,3),
	(7,3),
	(2,4),
	(3,4),
	(4,4),
	(5,4),
	(6,4),
	(7,4),
	(2,5),
	(3,5),
	(5,5),
	(2,6),
	(3,6),
	(5,6),
	(2,7),
	(4,7),
	(5,7);

/*!40000 ALTER TABLE `requires` ENABLE KEYS */;
UNLOCK TABLES;




# Replace placeholder table for all_shift_view with correct view syntax
# ------------------------------------------------------------

DROP TABLE `all_shift_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `all_shift_view`
AS SELECT
   `EM`.`emp_id` AS `emp_id`,
   `E`.`rental_id` AS `rental_id`,
   `E`.`rental_name` AS `rental_name`,
   `R`.`rent_type_name` AS `rent_type_name`,
   `E`.`rental_date` AS `rental_date`
FROM ((((`rental` `E` join `rental_type` `R` on(((`R`.`rent_type_id` = `E`.`rent_type_id`) and (`E`.`rental_confirm` = 1)))) join `requires` `D` on((`D`.`rent_type_id` = `R`.`rent_type_id`))) join `job` `J` on((`J`.`dept_id` = `D`.`dept_id`))) join `employee` `EM` on((`EM`.`job_id` = `J`.`job_id`)));


# Replace placeholder table for rental_confirmed with correct view syntax
# ------------------------------------------------------------

DROP TABLE `rental_confirmed`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rental_confirmed`
AS SELECT
   `R`.`rental_name` AS `rental_name`,
   `RT`.`rent_type_name` AS `rent_type_name`,
   `R`.`rental_date` AS `rental_date`,
   `R`.`event_length` AS `event_length`,
   `RE`.`renter_company` AS `renter_company`,concat(`RE`.`renter_fname`,' ',convert(`RE`.`renter_lname` using utf8)) AS `contact_name`,
   `RE`.`renter_phone` AS `renter_phone`,
   `RE`.`renter_email` AS `renter_email`,
   `R`.`rental_id` AS `rental_id`
FROM ((`rental` `R` join `renter` `RE` on((`RE`.`renter_id` = `R`.`renter_id`))) join `rental_type` `RT` on((`RT`.`rent_type_id` = `R`.`rent_type_id`))) where (`R`.`rental_confirm` = 1);


# Replace placeholder table for rental_need_confirm with correct view syntax
# ------------------------------------------------------------

DROP TABLE `rental_need_confirm`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rental_need_confirm`
AS SELECT
   `R`.`rental_name` AS `rental_name`,
   `RT`.`rent_type_name` AS `rent_type_name`,
   `R`.`rental_date` AS `rental_date`,
   `R`.`event_length` AS `event_length`,
   `RE`.`renter_company` AS `renter_company`,concat(`RE`.`renter_fname`,' ',convert(`RE`.`renter_lname` using utf8)) AS `contact_name`,
   `RE`.`renter_phone` AS `renter_phone`,
   `RE`.`renter_email` AS `renter_email`,
   `R`.`rental_id` AS `rental_id`
FROM ((`rental` `R` join `renter` `RE` on((`RE`.`renter_id` = `R`.`renter_id`))) join `rental_type` `RT` on((`RT`.`rent_type_id` = `R`.`rent_type_id`))) where (`R`.`rental_confirm` = 0);


# Replace placeholder table for employee_by_dept with correct view syntax
# ------------------------------------------------------------

DROP TABLE `employee_by_dept`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employee_by_dept`
AS SELECT
   `E`.`emp_fname` AS `emp_fname`,
   `E`.`emp_lname` AS `emp_lname`,
   `J`.`job_title` AS `job_title`,
   `J`.`hourly_wage` AS `hourly_wage`,
   `E`.`emp_phone` AS `emp_phone`,
   `E`.`emp_email` AS `emp_email`,
   `J`.`dept_id` AS `dept_id`,
   `E`.`emp_id` AS `emp_id`
FROM (`employee` `E` join `job` `J` on((`J`.`job_id` = `E`.`job_id`)));

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
