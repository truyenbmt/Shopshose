<section style="margin-top: -22px;">
    <div class="block-tab-category14">
        <?php 
            if(isset($tinchitiet)&&(!empty($tinchitiet))){
        ?>
        <div class="head">
            <span class="bar"><i class="fa fa-bars"></i></span>
            <ul class="box-tabs nav-tab">   
                <li class="active"><a data-toggle="tab" href="<?php echo base_url()?>danh-sach-tin">Tin tức</a></li>
            </ul>
        </div>
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="color: #293462;text-transform:uppercase;"><?php echo $tinchitiet['n_title'] ?></h4>
                    <p class="text-center" style="margin-top: 15px"><img src="<?php echo base_url().'uploads/news/'.$tinchitiet['n_avatar'] ?>" style="width:50%;" /></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo $tinchitiet['n_content'] ?></p>
                    <p><small>Ngày đăng: <?php echo $tinchitiet['n_date'] ?></small></p>
                </div>              
            </div>
        </div>
        <?php } ?>
    </div>
</section>