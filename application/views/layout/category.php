<section style="margin-top: -22px;">
    <div class="block-tab-category14">
        <div class="head">
            <span class="bar"><i class="fa fa-bars"></i></span>
            <ul class="box-tabs nav-tab">   
                <li class="active"><a data-toggle="tab" href="<?php echo base_url().'category/'.$cat_id['cat_id'] ?>"><?php echo $cat_id['cat_name'] ?></a></li>
            </ul>
        </div>
        <div class="container" style="margin-top: 20px;">
            <div id="tab-1" class="tab-panel active">
                <?php if(isset($pro_cat) && !empty($pro_cat)){
                    $i=0;
                    foreach ($pro_cat as $key) {
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
            <div class="pagination">
                <?php if(isset($links) && !empty($links)) echo $links; ?>
            </div>
        </div>
    </div>
</section>