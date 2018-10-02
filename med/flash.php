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

