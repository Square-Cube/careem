<!DOCTYPE html>
<html lang="en">
	
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Careem | <?php echo $title; ?></title>

		<link href="<?php echo base_url(); ?>media/css/animate.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>media/css/wheel.css" rel="stylesheet">

		<script src="<?php echo base_url(); ?>media/js/jquery-1.11.0.min.js"></script>
		<script src="<?php echo base_url(); ?>media/js/jquery.easing.1.3.min.js"></script>
		<script src="<?php echo base_url(); ?>media/js/jquery.transform2d.js"></script>
		<script src="<?php echo base_url(); ?>media/js/winwheel_1.2.js"></script>
		<script src="<?php echo base_url(); ?>media/js/flyingPaper.js"></script>

		<script src="<?php echo base_url(); ?>media/js/PxLoader.js"></script>
		<script src="<?php echo base_url(); ?>media/js/PxLoaderImage.js"></script>

	</head>

	<body>

		<div class="web_loader">
		    <div class="web_percent">
		        <div class="web_overlay"></div>
		        <div class="web_bar"></div>
		    </div>
		</div>

		<canvas id="canvas"></canvas>

		<div id="base_url" attr="<?php echo base_url(); ?>"></div>
		<div id="prize" attr="<?php echo $prize; ?>"></div>

		<div class="fullContainer"> 	

			<div class="logo animated fadeInUp" style="animation-delay: 0.5s;">
				<img src="<?php echo base_url(); ?>media/img/logo.png">
			</div>

			<div class="slogan animated fadeInUp" style="animation-delay: 0.7s;">
				<img src="<?php echo base_url(); ?>media/img/slogan.png">
			</div>

			<div class="wheelContainer animated zoomIn" style="animation-delay: 1s;">
				<div class="canvasCont">
					<canvas class="the_canvas" id="myDrawingCanvas" width="956" height="956"></canvas>
				</div>
			</div>

			<div class="hit animated zoomIn" style="animation-delay: 1.5s;">
				<a id="spin_button" onClick="startSpin(); return false;">
					<img src="<?php echo base_url(); ?>media/img/hit.png">
				</a>
			</div>

			<div class="spinBtn arrow animated fadeInDown" style="animation-delay: 1.3s;">
				<img src="<?php echo base_url(); ?>media/img/arrow.png">
			</div>

			<div class="prize animated fadeInUp">
				<p><?php echo $prize; ?></p>
			</div>

		</div> <!-- fullContainer -->

		<script>
			// Call function to draw the wheel face at it's initial position.
			begin();
			powerSelected(0.5);
		</script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url(); ?>media/js/wheel.js"></script>

	</body>

</html>