<section style="margin-top: -22px;">
    <div class="block-tab-category14">
        <div class="head">
            <span class="bar"><i class="fa fa-bars"></i></span>
            <ul class="box-tabs nav-tab">   
                <li class="active"><a data-toggle="tab" href="<?php echo base_url() ?>danh-sach-tin">Tin tức</a></li>
            </ul>
        </div>
        <div class="container" style="margin-top: 20px;">
            <div id="tab-1" class="tab-panel active">
                <?php if(isset($dstin) && !empty($dstin)){
                    $i=0;
                    foreach ($dstin as $key) {
                        if($i % 4 == 0) echo '<div class="row">';
                ?>
                <div class="col-md-3">
                    <div class="product-style4">
                        <div class="product-thumb">
                            <a href="<?php echo base_url().'tin-tuc/'.$key['id'] ?>">
                                <img class="primary_image" src="<?php echo base_url().'uploads/news/'.$key['n_avatar'] ?>" height="200px" width="100%" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <h4 class="product-name"><a href="<?php echo base_url().'tin-tuc/'.$key['id'] ?>"><?php echo $key['n_title'] ?></a></h4>
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