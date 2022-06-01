<section style="margin-top: -22px;">
    <div class="block-tab-category14">
        <div class="head">
            <span class="bar"><i class="fa fa-bars"></i></span>
            <ul class="box-tabs nav-tab">   
                <li class="active"><a data-toggle="tab" href="<?php echo base_url() ?>lien-he">Thông tin liên hệ</a></li>
            </ul>
        </div>
        <div class="container" style="margin-top: 20px;">
            <div id="tab-1" class="tab-panel active">
                <div class="col-md-4">
                    <h4 style="margin-bottom: 15px;color: #293462;"><?php echo $copyright; ?></h4>
                    <ul>
                        <li><strong>Điện thoại:</strong> <?php echo $phone; ?></li>
                        <li><strong>Email:</strong> <?php echo $email; ?></li>
                        <li><strong>Đ/C:</strong> <?php echo $address; ?></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <?php echo $gmaps; ?>
                </div>
            </div>
        </div>
    </div>
</section>