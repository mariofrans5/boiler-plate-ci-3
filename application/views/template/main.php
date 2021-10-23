<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>My Template</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">

		<!-- Template CSS  -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/template.css">

		<!-- jQuery necessary for Bootstrap's JavaScript plugins -->
		<script src="<?php echo base_url();?>assets/js/jquery_1_12_4.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="<?php echo base_url();?>assets/js/bootstrap_3_3_6.js"></script>

		<!-- Template javascript -->
		<script src="<?php echo base_url();?>assets/js/template.js"></script>
	</head>
	<body class="msb-x">
		<?php $this->load->view('template/navbar'); ?>
		<?php $this->load->view('template/sidebar'); ?>
		<!--main content wrapper-->
		<div class="mcw">
			<!--main content view-->
			<?php echo $contents; ?>
			<!--main content view end-->
		</div>
		<!--main content wrapper end-->
	</body>
</html>
