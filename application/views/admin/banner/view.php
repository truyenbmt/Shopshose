<!-- Content (Right Column) -->
<div id="content" class="box">
  <span style='color: red;'><?php echo $this->session->flashdata('mess'); ?></span>
  <!-- Form -->
  <h3 class="tit">Quản lý ảnh banner</h3>       
  <table class="table table-bordered table-hover table-striped">
    <thead>
      <th>STT</th><th>Ảnh banner</th><th>Xử lý</th>
    </thead>
   <tbody>
      <?php if(isset($slide) && !empty($slide)){$i=0;
    foreach ($slide as $key) {$i++; ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><img src="<?php echo base_url().'uploads/slide/'.$key['image'] ?>" alt="ảnh slide" width="70px" /></td>

      <td><a href="<?php echo base_url().'ad_banner/xoa/'.$key['id'] ?>"><button style="padding:2px 5px" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button></a></td>

    </tr>
    <?php }} ?>

    </tbody>
  </table>
  <br/>
  <a href="<?php echo base_url() ?>ad_banner/them"><button class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm banner</button></a>

</div>

<style>
  table {
    width: 80%;
  }
</style>