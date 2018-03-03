<?php 
include_once("db_connect.php");
$sql = "SELECT id, page, content FROM tab_slider LIMIT 4";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$imageCount = 0;
$buttonHtml = '';		
$sliderHtml = '';	
while( $rows = mysqli_fetch_assoc($resultset)){	
	$activeClass = "";			
	if(!$imageCount) {
		$activeClass = 'active';	
	}		
	// slider html
	$sliderHtml.= "<div class='item ".$activeClass."'>".$rows['content']."</div>";   
	// tab button html
	$buttonHtml.= "<li data-target='#tabSlider' data-slide-to='".$imageCount."' class='".$activeClass."'><a href='#'>".$rows['page']."<small></small></a></li>";
	$imageCount++;
}
?>