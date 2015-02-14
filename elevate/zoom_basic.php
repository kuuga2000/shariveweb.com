<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<title>jQuery Zoom Demo | Basic Zoom Example</title>
		<script src='./elevatezoom-master/jquery-1.8.3.min.js'></script>
		<script src='./elevatezoom-master/jquery.elevatezoom.js'></script>
	</head>
	<body>
		<h1>Basic Zoom Example</h1>
		<img id="detail_image" src='./elevatezoom-master/images/small/mbf.jpg' data-zoom-image="./elevatezoom-master/images/large/mbf.jpg"/>
		<p>
			<a href="http:://www.shariveweb.com">Shariveweb.com</a>
		</p>
		<script>
			//set id='detail_image' to elevate zoom
			$('#detail_image').elevateZoom({
				//zoom type nya inner (didalam area image yg tampil)
				zoomType : "inner",
				//type cursor
				cursor : "crosshair",
				//zoom fade in
				zoomWindowFadeIn : 500,
				//zoom fadeout
				zoomWindowFadeOut : 750,
			});
		</script>
	</body>
</html>