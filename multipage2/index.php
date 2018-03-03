<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpzag.com : Demo Bootstrap Tabbed Slider Carousel with jQuery, PHP & MySQL</title>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'></script>
<script src="js/carousel-slider.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php include('container.php');?>
<div class="container">
	<h2>Create Bootstrap Tabbed Slider Carousel with jQuery, PHP & MySQL</h2>
	<br>
	<?php include_once("slider.php"); ?>
    <div id="tabSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php echo $sliderHtml; ?>            
        </div>
        <ul class="nav nav-pills nav-justified">
             <?php echo $buttonHtml; ?>		
        </ul>
    </div>
    <div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/bootstrap-tabbed-slider-carousel-with-jquery-php-mysql/">Back to Tutorial</a>		
	</div>	
</div>
<?php include('footer.php');?>
