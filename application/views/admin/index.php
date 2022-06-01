<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Admin_Shopshose</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>themes/admin/img/wtv_logo.png" />
    <meta name="robots" content="noindex, nofollow">
	 <!-- CSS -->
    <link href="<?php echo base_url();?>themes/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>themes/admin/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url();?>themes/admin/css/plugins/morris.css" rel="stylesheet">
    <link href="<?php echo base_url();?>themes/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url();?>themes/texteditor/ckeditor/ckeditor.js" type="text/javascript"></script>
    
</head>
<body>
	<div id="wrapper">
		<!-- BEGIN #navbar -->
		<?php
			$this->load->view("admin/adv_header");
		  ?>
		<!-- BEGIN #main -->
		<div id="page-wrapper" style="margin-top:-20px">
			<?php 
				$this->load->view($template);
		 	?>
        </div>
        <!-- /#page-wrapper -->
		<!-- BEGIN #footer -->
		<?php
			$this->load->view("admin/adv_footer");
		?>
	</div>
	<!-- /main -->
	<!-- script -->
	<!-- jQuery -->
    <script src="<?php echo base_url();?>themes/admin/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>themes/admin/js/bootstrap.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>themes/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>themes/admin/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>themes/admin/js/plugins/morris/morris-data.js"></script>

</body>
</html>