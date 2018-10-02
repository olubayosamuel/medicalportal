-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadministrators`
--

CREATE TABLE IF NOT EXISTS `tbadministrators` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbadministrators`
--

INSERT INTO `tbadministrators` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Olusegun', 'Gyibrilla', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------


--
-- Table structure for table `tbcandidates`
--

CREATE TABLE IF NOT EXISTS `tbcandidates` (
  `candidate_id` int(5) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(45) NOT NULL,
  `candidate_position` varchar(45) NOT NULL,
  `candidate_cvotes` int(11) NOT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbcandidates`
--

INSERT INTO `tbcandidates` (`candidate_id`, `candidate_name`, `candidate_position`, `candidate_cvotes`) VALUES
(1, 'Mamun', 'PRESIDENT', 0),
(2, 'Emran', 'PRESIDENT', 0),
(3, 'Sabuj', 'VICE-PRESIDENT', 0),
(4, 'Sajedul', 'VICE-PRESIDENT', 0);

-- --------------------------------------------------------


CREATE TABLE IF NOT EXISTS `tbparty` (
  `party_id` int(5) NOT NULL AUTO_INCREMENT,
  `party_name` varchar(45) NOT NULL,
  `party_position` varchar(45) NOT NULL,
  `party_cvotes` int(11) NOT NULL,
  PRIMARY KEY (`party_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbcandidates`
--

INSERT INTO `tbparty` (`party_id`, `party_name`, `party_position`, `party_cvotes`) VALUES
(1, 'PDP', 'PRESIDENT', 0),
(2, 'APC', 'PRESIDENT', 0),
(3, 'Accord party', 'VICE-PRESIDENT', 0),
(4, 'ACN', 'VICE-PRESIDENT', 0);



--
-- Table structure for table `tbmembers`
--

CREATE TABLE IF NOT EXISTS `tbmembers` (
  `member_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `voter_id` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbmembers`
--

INSERT INTO `tbmembers` (`member_id`, `first_name`, `last_name`, `email`, `voter_id`, `password`) VALUES
(1, 'Md. Rezwanul', 'Haque', 'rezwan@gmail.com', '19964714075000192', '7d9b087beffc9879ead55e7291d6b541'),
(2, 'Mahbub', 'Alam', 'mahbub@gmail.com', '19864714075000186', '939d2ad38c88fda9c0bad11086e4e057');

-- --------------------------------------------------------

--
-- Table structure for table `tbpositions`
--

CREATE TABLE IF NOT EXISTS `tbpositions` (
  `position_id` int(5) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(45) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbpositions`
--

INSERT INTO `tbpositions` (`position_id`, `position_name`) VALUES
(1, 'PRESIDENT'),
(2, 'VICE-PRESIDENT'),
(3, 'Secretary'),
(4, 'Vice-Secretary'),
(5, 'Organizing-Secretary'),
(6, 'Treasurer'),
(7, 'Vice-Treasurer'),
(8, 'Member'),
(9, 'Woman-Member');


CREATE TABLE multisoniictable (
	sn INT(11) NOT NULL AUTO_INCREMENT,
	Tdate CHAR(30) NOT NULL,
	Ttime CHAR(30) NOT NULL,
	sensor1 CHAR(30) NOT NULL,
	sensor2 CHAR(30) NOT NULL,
	sensor3 CHAR(30) NOT NULL,
	sensor4 CHAR(30) NOT NULL,
	PRIMARY KEY (sn)
);
// Create connection to SQL database
$con= mysqli_connect("localhost","id5399043_sensordb","olalekan","id5399043_sensorlog");// server, user, pass, database


	<tr>
	<td style="color:#000000"; width="120" >Voter Id</td>
	<td style="color:#000000"; width="6">:</td>
	<td style="color:#000000"; width="294"><input name="voter_id" type="text" ></td>
	</tr>


<tr>
  <td style="color:#000000"; width="120" >ID Number</td>
  <td style="color:#000000"; width="6">:</td>
  <td style="color:#000000"; width="294"><input name="id_no" type="text" ></td>
  </tr>

   <div><?php
        
        $result = mysqli_query($con,"SELECT * FROM multisoniictable");//table select
        
        while($row = mysqli_fetch_array($result)) {

  echo "<tr>";
  $sn_id = $row['sn'];
$currentDate = $row['Tdate'];
$currentTime = $row['Ttime'];
$sensorData1 = $row['temperature'];
$sensorData2 = $row['humidity'];
$sensorData3 = $row['batteryVoltage'];
$sensorData4 = $row['AC1'];
$sensorData5 = $row['AC2'];
$sensorData6 = $row['AC3'];
$sensorData7 = $row['Current'];

        
    ?></div>
   






   




<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Home</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Home" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20180416101217" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20180416101220" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1523961466" rel="stylesheet" type="text/css" />
	<link href="css/1.css?ts=1523961466" rel="stylesheet" type="text/css" />
	<ga-code/>
	<script type="text/javascript">var currLang = '';</script>	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->
</head>


<body>
    
    
<div><?php 
$con = mysqli_connect("localhost","id5399043_sensordb","olalekan","id5399043_sensorlog");// server, user, pass, database

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
        
        $result = mysqli_query($con,"SELECT * FROM pageTable");//table select
        
        while($row = mysqli_fetch_array($result)) {


$currentDate = $row['Tdate'];
$currentTime = $row['Ttime'];
$sensorData1 = $row['temperature'];
$sensorData2 = $row['humidity'];
$sensorData3 = $row['batteryVoltage'];
$sensorData4 = $row['AC1'];
$sensorData5 = $row['AC2'];
$sensorData6 = $row['AC3'];
$sensorData7 = $row['Current'];
    }
        
    ?> </div>

    
  
    
    
    
    
    <div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance0" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle"><span class="wb_tr_ok">Multisonic IOT page</span></h4>
</div><div id="wb_element_instance1" class="wb_element wb_element_picture"><img alt="gallery/logo" src="gallery_gen/dc5c264f449232610a1fd0e327489e90_50x60.png"></div><div id="wb_element_instance2" class="wb_element wb_element_picture"><img alt="gallery/logo" src="gallery_gen/dc5c264f449232610a1fd0e327489e90.png"></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance4" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance5" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance6" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance7" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance8" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance9" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance10" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance11" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">DATE</h1>
</div><div id="wb_element_instance12" class="wb_element" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><span style="color:rgba(0,0,0,1);"><?php echo $currentDate; ?></span></h3>
</div><div id="wb_element_instance13" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">TIME</h1>
</div><div id="wb_element_instance14" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">TEMP</h1>
</div><div id="wb_element_instance15" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">HUMIDITY</h1>
</div><div id="wb_element_instance16" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">PHCN</h1>
</div><div id="wb_element_instance17" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading1" style="text-align: center;">Generator</h2>
</div><div id="wb_element_instance18" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">Auxilliary</h1>
</div><div id="wb_element_instance19" class="wb_element" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><span style="color:rgba(0,0,0,1);"><?php echo $currentTime; ?></span></h3>
</div><div id="wb_element_instance20" class="wb_element" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><?php echo $sensorData1; ?></h3>
</div><div id="wb_element_instance21" class="wb_element" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><?php echo $sensorData2; ?></h3>
</div><div id="wb_element_instance22" class="wb_element" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><?php echo $sensorData4; ?></h3>
</div><div id="wb_element_instance23" class="wb_element" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><?php echo $sensorData5; ?></h3>
</div><div id="wb_element_instance24" class="wb_element" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><?php echo $sensorData6; ?></h3>
</div><div id="wb_element_instance25" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance26" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance27" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">BATTERY</h1>
</div><div id="wb_element_instance28" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">CURRENT</h1>
</div><div id="wb_element_instance29" class="wb_element" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><?php echo $sensorData7; ?></h3>
</div><div id="wb_element_instance30" class="wb_element" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;"><?php echo $sensorData3; ?></h3>
</div><div id="wb_element_instance31" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(1);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance31");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance31").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 139px;"><div id="wb_element_instance3" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2018 <a href="http://multisoniciot.000webhostapp.com">multisoniciot.000webhostapp.com</a></p></div><div id="wb_element_instance32" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>

