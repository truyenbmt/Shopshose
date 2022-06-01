<!-- HEADER -->
<div id="header" class="header style14" style="margin-top: -22px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div id="main-menu" class="main-menu menu-option14">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active">
                                        <a href="<?php echo base_url() ?>">Trang chủ</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh mục</a>
                                        <ul class="dropdown-menu mega_dropdown" role="menu">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <?php if(isset($cat_menu) && !empty($cat_menu)){
                                                        foreach ($cat_menu as $key) {
                                                    ?>
                                                    <li><a href="<?php echo base_url().'category/'.$key['cat_id'] ?>"><?php echo $key['cat_name'] ?></a></li>
                                                    <?php }} ?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url() ?>danh-sach-tin">Tin tức</a></li>
                                    <li><a href="<?php echo base_url() ?>lien-he">Liên hệ</a></li>
                                    
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-4 text-center"><a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>themes/home/assets/data/option14/logo.jpg" height="100px" alt=""></a></div>
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="top-header">
                    <div class="nav-top-links">
                        <a class="first-item" href="<?php echo base_url() ?>thongtin/chinh-sach-bao-mat">Chính sách</a>
                    </div>
                    <div class="nav-top-links">
                        <a href="<?php echo base_url() ?>thongtin/dieu-khoan-su-dung">Điều khoản</a>
                    </div>
                    <div class="nav-top-links">
                        <a href="<?php echo base_url() ?>thongtin/che-do-doi-tra">Đổi trả hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
