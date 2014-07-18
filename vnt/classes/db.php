<?php

     $result = mysql_query("SHOW TABLES LIKE 'admin'");
		 if(!mysql_num_rows($result) > 0){
		 	mysql_query("CREATE TABLE IF NOT EXISTS `admin` (
						  `UserId` int(11) NOT NULL AUTO_INCREMENT,
						  `UserName` varchar(100) NOT NULL,
						  `UserPassword` varchar(100) NOT NULL,
						  PRIMARY KEY (`UserId`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6");
			mysql_query("INSERT INTO `admin` (`UserId`, `UserName`, `UserPassword`) VALUES(1, 'admin', 'admin')");
			
			mysql_query("CREATE TABLE IF NOT EXISTS `contactinfo` (
						  `ContactId` int(11) NOT NULL AUTO_INCREMENT,
						  `ContactName` varchar(100) NOT NULL,
						  `ContactEmail` varchar(100) NOT NULL,
						  `ContactTelephone` varchar(15) NOT NULL,
						  `ContactCountry` varchar(50) NOT NULL,
						  `ContactSubject` varchar(150) NOT NULL,
						  `ContactMessage` varchar(500) NOT NULL,
						  `CreatedDate` datetime NOT NULL,
						  PRIMARY KEY (`ContactId`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ");	 
			mysql_query("CREATE TABLE IF NOT EXISTS `emp_details` (
						  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
						  `EmpId` bigint(20) NOT NULL,
						  `FatherName` varchar(50) NOT NULL,
						  `Mobile` varchar(50) NOT NULL,
						  `AlternateMobile` varchar(50) NOT NULL,
						  `CurrentAddress` varchar(200) NOT NULL,
						  `PermanentAddress` varchar(200) NOT NULL,
						  `City` varchar(50) NOT NULL,
						  `State` varchar(50) NOT NULL,
						  `MaritialStatus` varchar(50) NOT NULL,
						  `Gender` varchar(50) NOT NULL,
						  `DOB` varchar(50) NOT NULL,
						  `JobTitle` varchar(50) NOT NULL,
						  `Department` varchar(50) NOT NULL,
						  `CreatedDate` datetime NOT NULL,
						  `Image` varchar(200) DEFAULT NULL,
						  `ZipCode` varchar(10) NOT NULL,
						  `PrZipCode` varchar(10) NOT NULL,
						  `PrCity` varchar(20) NOT NULL,
						  `PrState` varchar(20) NOT NULL,
						  PRIMARY KEY (`Id`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ");
			mysql_query("CREATE TABLE IF NOT EXISTS `emp_education` (
						  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
						  `EmpId` bigint(20) NOT NULL,
						  `Education1` varchar(20) NOT NULL,
						  `Year1` varchar(10) NOT NULL,
						  `College1` varchar(30) NOT NULL,
						  `Marks1` varchar(10) NOT NULL,
						  `CreatedDate` date NOT NULL,
						  PRIMARY KEY (`Id`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=289");
			mysql_query("CREATE TABLE IF NOT EXISTS `emp_previousemployee` (
						  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
						  `EmpId` bigint(20) NOT NULL,
						  `CompanyName1` varchar(30) NOT NULL,
						  `Position1` varchar(30) NOT NULL,
						  `TimePeriod1` varchar(20) NOT NULL,
						  `Salary1` varchar(20) NOT NULL,
						  `CreatedDate` datetime NOT NULL,
						  PRIMARY KEY (`Id`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ");
		    mysql_query("CREATE TABLE IF NOT EXISTS `e_customer` (
						  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
						  `UserId` bigint(20) NOT NULL,
						  `InTime` varchar(50) DEFAULT NULL,
						  `OutTime` varchar(50) DEFAULT NULL,
						  `CreatedDate` date NOT NULL,
						  PRIMARY KEY (`Id`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ");
			mysql_query("CREATE TABLE IF NOT EXISTS `e_login` (
						  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
						  `Email` varchar(50) NOT NULL,
						  `FirstName` varchar(100) NOT NULL,
						  `LastName` varchar(50) NOT NULL,
						  `UserName` varchar(50) NOT NULL,
						  `Password` varchar(50) NOT NULL,
						  `Role` varchar(50) NOT NULL,
						  `CreatedDate` datetime NOT NULL,
						  PRIMARY KEY (`Id`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ");
			mysql_query("CREATE TABLE IF NOT EXISTS `e_request` (
						  `RId` int(11) NOT NULL AUTO_INCREMENT,
						  `UserId` int(11) NOT NULL,
						  `Request` varchar(900) NOT NULL,
						  `Comment` varchar(300) DEFAULT NULL,
						  `Status` varchar(20) NOT NULL,
						  `CreatedDate` date NOT NULL,
						  PRIMARY KEY (`RId`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ");
			mysql_query("CREATE TABLE IF NOT EXISTS `i_invoicedetail` (
						  `id` int(11) NOT NULL AUTO_INCREMENT,
						  `idate` date NOT NULL,
						  `ddate` date NOT NULL,
						  `dnotes` varchar(500) NOT NULL,
						  `ino` int(11) NOT NULL,
						  `idonorname` varchar(100) NOT NULL,
						  `idonoradd` varchar(300) NOT NULL,
						  `ireceivername` varchar(100) NOT NULL,
						  `ireceiveradd` varchar(500) NOT NULL,
						  `total` double DEFAULT '0',
						  `saletax` double DEFAULT '0',
						  `othertax` float DEFAULT '0',
						  `discount` double DEFAULT '0',
						  `ftotal` double DEFAULT '0',
						  `paidamount` double DEFAULT '0',
						  PRIMARY KEY (`id`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=181");
			mysql_query("CREATE TABLE IF NOT EXISTS `i_itemdetail` (
						  `id` int(11) NOT NULL AUTO_INCREMENT,
						  `ino` bigint(20) NOT NULL,
						  `iname` varchar(100) NOT NULL,
						  `ides` varchar(500) NOT NULL,
						  `iprice` float NOT NULL,
						  `iqty` float NOT NULL,
						  `iamount` float DEFAULT NULL,
						  PRIMARY KEY (`id`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=190 ");
			mysql_query("CREATE TABLE IF NOT EXISTS `i_userinfo` (
						  `id` int(11) NOT NULL AUTO_INCREMENT,
						  `username` varchar(200) NOT NULL,
						  `userpassword` varchar(60) NOT NULL,
						  `useremail` varchar(300) NOT NULL,
						  PRIMARY KEY (`id`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ");
			mysql_query("CREATE TABLE IF NOT EXISTS `portfolioinfo` (
						  `ProjectId` int(11) NOT NULL AUTO_INCREMENT,
						  `ProjectTitle` varchar(100) NOT NULL,
						  `ProjectDescription` varchar(900) NOT NULL,
						  `ProjectImage` varchar(150) NOT NULL,
						  `ProjectUrl` varchar(150) NOT NULL,
						  `ProjectDate` datetime NOT NULL,
						  `ProjectSortOrder` int(11) NOT NULL,
						  PRIMARY KEY (`ProjectId`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ");
			mysql_query("CREATE TABLE IF NOT EXISTS `testimonialinfo` (
						  `TestimonialId` int(11) NOT NULL AUTO_INCREMENT,
						  `TestimonialDescription` varchar(900) NOT NULL,
						  `PersonPosition` varchar(100) NOT NULL,
						  `PersonName` varchar(100) NOT NULL,
						  `CreatedDate` datetime NOT NULL,
						  PRIMARY KEY (`TestimonialId`)
						) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ");
		  mysql_query("INSERT INTO `testimonialinfo` (`TestimonialId`, `TestimonialDescription`, `PersonPosition`, `PersonName`, `CreatedDate`) VALUES
(5, '<p>VictoryNet Technology provides a great service and great turn around time for my clients. I would recommend them to any company looking to outsource</p>', 'Nick, Owner', '- US Based IT Firm(Website design company)', '2013-12-05 11:35:49'),
(13, '<p >The VictoryNet Technology Team has been an incredible find for us. They have delivered to date, three (3) large design and development projects and fifteen (15) smaller lead generation, sales and marketing sites. Their work is top quality, efficient, delivered on time every time. To make matters even better, their pricing is very fair, In fact we estimate our cost savings since switching over to the VictoryNet Technology&nbsp;Team, to be approximately $13,000. I could not ask for a better IT Services Company. Vik, has personally guided my projects from beginning to end. I do not have time for multiple meeting and endless questionnaires and e-mails ju', 'Scott Edward;Vice President of Consultant Services', 'USA Loan Modification, California, USA', '2011-03-23 00:00:00');
");
		 }

?>