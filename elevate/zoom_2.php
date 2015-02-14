<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<title>jQuery Zoom Demo : Scrolling Zoom</title>
		<script src='./elevatezoom-master/jquery-1.8.3.min.js'></script>
		<script src='./elevatezoom-master/jquery.elevatezoom.js'></script>
		<style>
			/*custom style zoom window*/
			.zoomWindow{
				/*custom border zoom window*/
				border: 2px solid #D0C6BC !important;
				/*untuk memberikan jarak antara image asli 
				 *dengan zoom window nya*/
				margin-left:20px !important;
			}
		</style>
	</head>
	<body>
		<h1>Scrolling Zoom Example</h1>
		<img id="detail_image" src='./elevatezoom-master/images/small/ciel.jpg' data-zoom-image="./elevatezoom-master/images/large/ciel.jpg"/>
		<p>
			<a href="http:://www.shariveweb.com">Shariveweb.com</a>
		</p>
		<script>
			$('#detail_image').elevateZoom({
				cursor : "crosshair",
				zoomWindowFadeIn : 500,
				zoomWindowFadeOut : 750,
				/*untuk dimensi zoom window nya (width x height)*/
				zoomWindowWidth: 317,
				zoomWindowHeight: 476,
				/*supaya bisa zoom in + zoom out 
				dengan scrolling*/
				scrollZoom : true,
			});
		</script>
	</body>
</html>