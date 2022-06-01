<section style="margin-top: -22px;">
    <div class="block-tab-category14">
        <div class="head">
            <span class="bar"><i class="fa fa-bars"></i></span>
            <ul class="box-tabs nav-tab">   
                <li class="active"><a data-toggle="tab" href="<?php echo base_url().'product/'.$product['id'] ?>">Chi tiết sản phẩm</a></li>
            </ul>
        </div>
        <div class="container" style="margin-top: 20px;">
            <div id="tab-1" class="tab-panel active">
                <?php if (isset($product)) { ?>
                <div class="col-md-4">
                    <img src="<?php echo base_url().'uploads/product/'.$product['img'] ?>" class="img-responsive" />
                </div>
                <div class="col-md-8 pro-detail">
                    <h4 style="margin-bottom: 15px;color: #293462;"><?php echo $product['name']; ?></h4>
                    <p style="color: orange;"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></p>
                    <h2 style="color: green;"><?php echo $product['price']; ?></h2>
                    <p><strong>Tình trạng</strong>: <?php echo $product['tinhtrang']; ?></p>
                    <p><a href="<?php echo base_url() ?>lien-he">
                        <button class="btn btn-success">Mua hàng</button></a>
                    </p>
                    <h4 style="background: #eee;padding: 5px 8px;">Mô tả sản phẩm</h4>
                    <p><?php echo $product['description']; ?></p>
                </div>
                <?php } ?>
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
                        <ins><?php echo $khuyenmai['t_date']; ?></ins>
                    </span>
                    <a href="<?php echo base_url() ?>lien-he"><button type="button" class="btn btn-success">Liên hệ mua hàng</button></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<style type="text/css">
    .pro-detail p {
        margin: 15px 0px;
    }
</style>