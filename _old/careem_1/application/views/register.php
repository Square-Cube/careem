<!DOCTYPE html>
<html lang="en">

	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Careem | <?php echo $title; ?></title>

		<link href="<?php echo base_url(); ?>media/css/register.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>media/css/animate.css" rel="stylesheet">

		<script src="<?php echo base_url(); ?>media/js/jquery-1.11.0.min.js"></script>
		<script src="<?php echo base_url(); ?>media/js/jquery.easing.1.3.min.js"></script>
		<script src="<?php echo base_url(); ?>media/js/jquery.transform2d.js"></script>
		<script src="<?php echo base_url(); ?>media/js/jquery.form.min.js"></script>

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

		<div id="base_url" attr="<?php echo base_url(); ?>"></div>

		<div class="fullContainer">

			<div class="logo animated zoomIn">
				<img src="<?php echo base_url(); ?>media/img/logo.png">	
			</div>

			<form id='register_form' name='register_form' method='post' action='<?php echo site_url('home/register'); ?>' onSubmit='return validate_register_form()'>
				<div class="form_input animated fadeInUp" style="animation-delay: 0.5s;">
					<span>name:</span>
					<input type="text" name="name" maxlength="50">
				</div>
				<div class="form_input animated fadeInUp" style="animation-delay: 0.7s;">
					<span>email:</span>
					<input type="text" name="email" maxlength="100">
				</div>
				<div class="form_input animated fadeInUp" style="animation-delay: 0.9s;">
					<span>phone:</span>
					<input type="text" name="phone" maxlength="11">
				</div>
				<input class="animated fadeInUp" style="animation-delay: 1.2s;" type="submit" value="GO">
				<div id="register_error"></div>
			</form>

		</div> <!-- fullContainer -->

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url(); ?>media/js/register.js"></script>

	</body>

</html>