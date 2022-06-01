<div class="container"> <!-- sản phẩm mới -->
    <div class="block-group-banner-top">
        <div class="row">
            <?php if(isset($banner) && !empty($banner)){
                $i=1;
                foreach ($banner as $key) {
                    if($i<=3){

            ?>
            <div class="col-sm-4">
                <div class="item banner-img">
                    <img src="<?php echo base_url().'uploads/slide/'.$key['image'] ?>" alt="">
                </div>
            </div>
            <?php } $i++; }} ?>
        </div>
    </div>
    <div class="block-tab-category14">
        <div class="head">
            <span class="bar"><i class="fa fa-bars"></i></span>
            <ul class="box-tabs nav-tab">   
                <li class="active"><a data-toggle="tab" href="#tab-1">Sản phẩm mới</a></li>
            </ul>
        </div>
        <div class="tab-container">
            <div id="tab-1" class="tab-panel active">
                <?php if(isset($pro_home) && !empty($pro_home)){
                    $i=0;
                    foreach ($pro_home as $key) {
                        if($i % 4 == 0) echo '<div class="row">';
                ?>
                <div class="col-md-3">
                    <div class="product-style4">
                        <div class="product-thumb">
                            <a href="<?php echo base_url().'product/'.$key['id'] ?>">
                                <img class="primary_image" src="<?php echo base_url().'uploads/product/'.$key['img'] ?>" height="250px" width="100%" alt="">
                            </a>
                            <a href="<?php echo base_url().'product/'.$key['id'] ?>" class="btn-add-to-cart">Xem</a>
                        </div>
                        <div class="product-info">
                            <h4 class="product-name"><a href="<?php echo base_url().'product/'.$key['id'] ?>"><?php echo $key['name'] ?></a></h4>
                            <span class="price">
                                <ins><?php echo $key['price'] ?></ins>
                            </span>
                        </div>
                    </div>
                </div>
                <?php if($i % 4 == 3) echo '</div>';$i++; }} ?>
            </div>
        </div>
    </div>
</div>

<div class="section-block-deal"> <!-- khuyến mại -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-8"><img src="<?php echo base_url() ?>themes/home/assets/data/option14/km1.jpg"></div>
            
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="block-deal">
                    <h3 class="title">khuyến mại trong tuần</h3>
                    <?php if(isset($khuyenmai) && !empty($khuyenmai)){ ?>
                    <h4 class="product-name"><?php echo $khuyenmai['seo_descript']; ?></h4>
                    <div class="desc"><?php echo $khuyenmai['noidung']; ?></div>
                    <span class="price">
                        <ins><?php echo $khuyenmai['t_date']; ?></ins></span>
                    <a href="<?php echo base_url() ?>lien-he"><button type="button" class="btn btn-success">Liên hệ mua hàng</button></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container"> <!-- sản phẩm bán chạy -->
    <div class="block-top-brands2">
        <h2 class="title">Tin tức</h2>
        <div class="tab-container brand-products">
            <div id="brand1" class="tab-panel active">
                <ul class="list-bran-product">
                    <?php if(isset($tinmoi) && !empty($tinmoi)){
                        foreach ($tinmoi as $key) {
                    ?>
                    <li class="product-style4  col-md-3">
                        <div class="product-thumb">
                            <a href="<?php echo base_url().'tin-tuc/'.$key['id'] ?>">
                                <img class="primary_image" src="<?php echo base_url().'uploads/news/'.$key['n_avatar'] ?>" alt="" height="200px" width="100%">
                            </a>
                        </div>
                        <div class="product-info">
                            <h4 class="product-name"><a href="<?php echo base_url().'tin-tuc/'.$key['id'] ?>"><?php echo $key['n_title'] ?></a></h4>
                        </div>
                    </li>
                    <?php }} ?>
                </ul>
            </div>
        </div>
        <br/>
    </div>
    
</div>
