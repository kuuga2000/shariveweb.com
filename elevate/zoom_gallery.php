<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>jQuery Zoom Demo : Scrolling Zoom</title>
		<script src="./elevatezoom-master/jquery-1.8.3.min.js"></script>
		<script src="./elevatezoom-master/jquery.elevatezoom.js"></script>
		<style>
			/*custom style zoom window*/
			.zoomWindow {
				/*custom border zoom window*/
				/*border: 2px solid #D0C6BC !important;*/
				/*untuk memberikan jarak antara image asli
				 *dengan zoom window nya*/
				/*margin-left: 160px !important;*/
			}
			.large-image {
				float: left;
			}
			.thumb {
				float: left;
			}
			.thumb ul {
				margin-top: 0px;
			}
			.thumb ul li {
				list-style: none;
			}
			.thumb ul li img {
				width: 78px;
				cursor: pointer;
			}
			#img-wrap {
				position: relative;
			}
			#img-wrap .loading {
				position: absolute;
				display: none;
				top: 40%;
				left: 50%;
			}
		</style>
	</head>
	<body>
		<h1>Scrolling Zoom Example With Thumb List</h1>
		<div class="large-image" class="img-detail">
			<div id="img-wrap">
				<div class="loading">
					<img src="./elevatezoom-master/images/loading2.png" />
				</div>
				<div id="detail_image_wrap">
					<img id="detail_image" src="./elevatezoom-master/images/small/ciel.jpg" data-zoom-image="./elevatezoom-master/images/large/ciel.jpg" />
				</div>
			</div>

		</div>
		<div class="thumb">
			<ul>
				<li>
					<img class="thumb-image" src="./elevatezoom-master/images/thumb/ciel.jpg" img-large="./elevatezoom-master/images/large/ciel.jpg" img-small="./elevatezoom-master/images/small/ciel.jpg" />
				</li>
				<li>
					<img class="thumb-image" src="./elevatezoom-master/images/thumb/ciel2.jpg" img-large="./elevatezoom-master/images/large/ciel2.jpg" img-small="./elevatezoom-master/images/small/ciel2.jpg" />
				</li>
				<li>
					<img class="thumb-image" src="./elevatezoom-master/images/thumb/ciel3.jpg" img-large="./elevatezoom-master/images/large/ciel3.jpg" img-small="./elevatezoom-master/images/small/ciel3.jpg" />
				</li>
				<li>
					<img class="thumb-image" src="./elevatezoom-master/images/thumb/ciel4.jpg" img-large="./elevatezoom-master/images/large/ciel4.jpg" img-small="./elevatezoom-master/images/small/ciel4.jpg" />
				</li>
			</ul>
		</div>
		<div style="clear: left;"></div>
		<p>
			<a href="http://www.shariveweb.com">Shariveweb.com</a>
		</p>
		<script>
			$(function() {
				$("#detail_image").elevateZoom({
					cursor : "crosshair",
					/*untuk dimensi zoom window nya (width x height)*/
					zoomWindowWidth : 317,
					zoomWindowHeight : 476,
					/*supaya bisa zoom in + zoom out
					 dengan scrolling*/
					scrollZoom : true,
					zoomWindowOffetx : 160,
					borderSize : 2,
					//url:'http://belajar.shariveweb.com/elevate/elevatezoom-master/images/loading2.png',
					//loadingIcon:true,
				});

				/*event yg membuat thumb image bisa diklik
				 sehingga membuat detail image berubah*/
				$(".thumb-image").click(function() {
					loading('show');
					var img_small = $(this).attr("img-small");
					var img_large = $(this).attr("img-large");
					$("#detail_image").attr({
						'src' : img_small,
						'data-zoom-image' : img_large
					}).load(function() {
						loading('hide');
					});
					$(".zoomWindow").css({
						"background-image" : "url('" + img_large + "')",
					});
				});

				function loading(action) {
					action == 'hide' ? $('.loading').hide() : $('.loading').show();
				}

			});
		</script>
	</body>
</html>
