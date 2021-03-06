<!DOCTYPE html>
<HTML>
<HEAD>
	<TITLE>Kalaszeg Kft.</TITLE>

<!-- Meta adatok-->	
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-mobile-web-app-capable" content="YES" />
	<meta name="keywords" content="#" />
	<meta name="description" content="#" />
	<meta name="dcterms.rightsHolder" content="#" />
	<meta name="author" content="KLD" />
	<meta name="robots" content="noindex, nofollow" />
	<meta name="googlebot" content="noindex, nofollow" />
	<meta name="turbolinks-cache-control" content="no-cache" />
	<meta name="format-detection" content="telephone=no">

<!-- Css -->	
	<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
	<link href="https://fonts.googleapis.com/css?family=Andika|Archivo+Black|Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css"  href="css/main.css" />
	<link rel="stylesheet" type="text/css"  href="css/mediaquery.css" />
	<link rel="stylesheet" type="text/css"  href="css/frame/bootstrap/css/bootstrap.min.css" />
	
<!-- Script -->
	<script src="js/frame/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/frame/bootstrap.min.js" type="text/javascript"></script>
	
</HEAD>
<BODY>

	<HEADER class="container">
	
		<div class="row">
			<div class="col-sm-4 logo_item"></div>
			<div class="col-sm-8 logo">
				<a href="index.php">
					<img src="images/kalaszeg_logo.png" alt="Kalaszeg" />
				
					<p>Kalaszeg</p>
				</a>
			</div>		
		</div>
		
		<div class="row teszt">
			<div class="col-sm-4 navbar"></div>
			<NAV class="col-sm-8 navigation">
				<ul>
					<li>
						<a href="#">Főoldal</a>
					</li>
					<li>
						<a href="#">Bemutatkozás</a>
					</li>
					<li>
						<a href="#">Szolgáltatások</a>
					</li>
					<li>
						<a href="#">Kapcsolat</a>
					</li>
				</ul>
			</NAV>
		</div>
		
		<div class="row">
			<div class="col-sm-7"></div>
			<div class="col-sm-4 slogan">
				<h1>Lorem ipsum...</h1>
			</div>
			<div class="col-sm-1"></div>
		</div>
		
	</HEADER> 
	<SECTION class="container">
		
		<div class="row">
			<div calss="col-sm-12"> 
				<h2>Bemutatkozás</h2>
				<span class="title"></span>
			</div>
		</div>
		
		<div class="row introduction_content">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum sem et lorem tempus, ac molestie lorem aliquet. Quisque vestibulum dui nisi, quis tempus nibh ultrices vel. Aenean id pretium mauris. Integer quis ultrices enim. Suspendisse vitae lacinia metus, in sodales sapien. Donec non gravida magna.
			</p>
		</div>
		
	</SECTION>
	<SECTION class="container">
		
		<div class="row">
			<div calss="col-sm-12"> 
				<h2>Szolgáltatásaink</h2>
				<span class="title"></span>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-3 icon" data-oldal="aloldal1.php">
				<div class="icon_img active">
					<i class="glyphicon glyphicon-tags icon_glyp"></i>
				</div>
				<h3>Szolgáltatás 1.</h3>
			</div>
			<div class="col-sm-3 icon" data-oldal="aloldal2.php">
				<div class="icon_img">	
					<i class="glyphicon glyphicon-adjust icon_glyp"></i>
				</div>
				<h3>Szolgáltatás 2.</h3>
			</div>
			<div class="col-sm-3 icon" data-oldal="aloldal3.php">
				<div class="icon_img">	
					<i class="glyphicon glyphicon-tint icon_glyp"></i>
				</div>
				<h3>Szolgáltatás 3.</h3>
			</div>
			<div class="col-sm-3 icon" data-oldal="aloldal4.php">
				<div class="icon_img">
					<i class="glyphicon glyphicon-filter icon_glyp"></i>
				</div>
				<h3>Szolgáltatás 4.</h3>
			</div>
		</div>
		
	</SECTION>
	<SECTION class="container" id="hatter">
		
		<div class="row">
			<div class="services">
				<?php
					include("js/aloldal1.php");
				?>
			</div>
		</div>
		
	</SECTION>
	<SECTION class="container contact">
		
		<div class="row">
			<div calss="col-sm-12"> 
				<h2>Kapcsolat</h2>
				<span class="title"></span>
			</div>
		</div>
		
		<div class="row">
			<div class="contact_content">
				<i class="glyphicon glyphicon-earphone"> </i>
				<p>+36/30/4504772</p>
			</div>
			<div class="contact_content">
				<i class="glyphicon glyphicon-envelope"> </i>
				<p>kalaszegkL@gmail.com</p>
			</div>
		</div>
	
	</SECTION>

</BODY>
<script>

$(document).ready(
	function(){
	
		$(".icon_img").hover(
			function(){
				
				$(this).css({"background-color":"#000000"});
				$(this).children("i").css({"color":"#ffffff"});
				$(this).parent(".icon").children("h3").css({"color":"#000000"});
				
			},
			function(){
			
				$(this).css({"background-color":"rgba(254,204,0,0.8)"});
				$(this).children("i").css({"color":"#000000"});
				$(this).parent(".icon").children("h3").css({"color":"#959595"});
			
			});
			
		$(".icon_img").click(
			function(){
				
				$(".icon_img").removeClass("active");
				$(this).addClass("active");
			
				
			});
			
		$(".icon").click(
			function()
			{
				var site=$(this).data("oldal");
				
				$(".services").fadeOut("slow", function()
					{
						
						oldalcsereajax(site);
				
					});
				
			});
			
		
	
	});
	
	

function oldalcsereajax(content){
	
	var ajaxobj=$.ajax(
		{
			url: "js/"+content,
			dataType: "html",
			type: "POST",
			data: {}
		});
		
		ajaxobj.done(
			function(vissza)
			{
				$(".services").html(vissza);
				$(".services").fadeIn("slow");
				
			});
	
}
	
</script>
</HTML>