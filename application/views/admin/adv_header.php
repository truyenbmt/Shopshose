<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Admin_Shopshose</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="<?php echo base_url() ?>admin/logout"><i class="fa fa-fw fa-sign-out"></i> Thoát</a></li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url() ?>admin"><i class="fa fa-fw fa-dashboard"></i> Bảng điều khiển</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>" target="_blank"><i class="fa fa-fw fa-home"></i> Trang chủ</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/config"><i class="fa fa-fw fa-wrench"></i> Thông tin chung</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#product"><i class="fa fa-archive fa-fw"></i> Sản phẩm <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="product" class="collapse">
                            <li>
                                <a href="<?php echo base_url() ?>admin/category"><i class="fa fa-arrow-circle-right"></i> Danh mục</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>admin/product"><i class="fa fa-arrow-circle-right"></i> Sản phẩm</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#post"><i class="fa fa-fw fa-pencil-square-o"></i> Bài viết <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="post" class="collapse">
                            <li>
                                <a href="<?php echo base_url() ?>admin/news"><i class="fa fa-arrow-circle-right"></i> Tin tức</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'admin/thongtin' ?>"><i class="fa fa-arrow-circle-right"></i> Thông tin</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#image"><i class="fa fa-fw fa-picture-o"></i> Hình ảnh <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="image" class="collapse">
                            <li>
                                <a href="<?php echo base_url() ?>admin/slide"><i class="fa fa-arrow-circle-right"></i> Slide</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'admin/banner' ?>"><i class="fa fa-arrow-circle-right"></i> Banner</a>
                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="<?php echo base_url() ?>admin/user"><i class="fa fa-fw fa-user"></i> Tài khoản admin</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
