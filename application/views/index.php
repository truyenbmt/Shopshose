<!DOCTYPE html>
<html lang="vi">
<head>
    <title><?php if(isset($title)){echo $title;} else {echo "Hoa Cây Cảnh";} ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?php if(isset($favicon)){echo base_url().'uploads/'.$favicon;}?>" />
    <!-- meta seo -->
    <meta name="author" content="webtoanviet" />
    <meta name="generator" content="webtoanviet" />
    <link rel="canonical" href="<?php if(isset($url)){echo $url;}?>" />
    <meta name="description" content="<?php if(isset($seo_content)){echo $seo_content;} ?>" />

    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>themes/home/assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>themes/home/assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>themes/home/assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>themes/home/assets/lib/jquery.bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>themes/home/assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>themes/home/assets/lib/fancyBox/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>themes/home/assets/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>themes/home/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>themes/home/assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>themes/home/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>themes/home/assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>themes/home/assets/css/option14.css" />

</head>
<body class="home option14">

    <!-- header -->

    <?php $this->load->view('v_header') ?>

    <!-- //header -->

    <!-- template -->

    <?php $this->load->view($template) ?>

    <!-- //template -->

    <!-- footer -->

    <?php $this->load->view('v_footer') ?>

    <!-- //footer -->

    <a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>

    <!-- SCRIPTS -->
     <!-- Script-->
    <script type="text/javascript" src="<?php echo base_url() ?>themes/home/assets/lib/jquery/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>themes/home/assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>themes/home/assets/lib/select2/js/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>themes/home/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>themes/home/assets/lib/owl.carousel/owl.carousel.min.js"></script>
    <!-- COUNTDOWN -->
    <script type="text/javascript" src="<?php echo base_url() ?>themes/home/assets/lib/countdown/jquery.plugin.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>themes/home/assets/lib/countdown/jquery.countdown.js"></script>
    <!-- ./COUNTDOWN -->
    <script type="text/javascript" src="<?php echo base_url() ?>themes/home/assets/js/jquery.actual.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>themes/home/assets/lib/fancyBox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>themes/home/assets/lib/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>themes/home/assets/js/theme-script.js"></script>

</body>
</html>