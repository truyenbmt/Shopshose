<div class="container-fluid">
  <!-- Content (Right Column) -->
  <div id="content" class="box row">
    <span style='color: red;'><?php echo $this->session->flashdata('mess'); ?></span>
    <!-- Form -->
    <div class="col-md-12">
    <h3 class="tit">Quản lý thông tin</h3>
    <h4>Sửa thông tin</h4>
    <form action="<?php echo base_url().'ad_thongtin/sua/'.$id; ?>" method="post" enctype="multipart/form-data">
    <table class="table table-bordered table-hover table-striped">
      <?php if(isset($thongtin) && !empty($thongtin)){
        foreach ($thongtin as $key) {
      ?>
      <tr>
        <td>Tiêu đề:</td>
        <td><textarea name="tieude" cols="80" rows="2"><?php echo $key['tieude'] ?></textarea></td>
      </tr>
      <tr>
        <td>Nội dung:</td>
        <td><textarea id="summary" name="noidung" ><?php echo $key['noidung'] ?></textarea></td>
      </tr>
      <tr>
        <td>Link SEO:</td>
        <td><textarea name="linkseo" cols="80" rows="1" readonly=""><?php echo $key['linkseo'] ?></textarea></td>
      </tr>
      <tr>
        <td>Nội dung SEO:</td>
        <td><textarea name="seo_descript" cols="80" rows="3" ><?php echo $key['seo_descript'] ?></textarea></td>
      </tr>
      <tr>
        <td>Ngày cập nhật: </td>
        <td><textarea name="t_date" cols="80" rows="1" ><?php echo $key['t_date'] ?></textarea></td>
      </tr>

    <?php }} ?>
    </table>
      <p>
        <button type="submit" name="submit" class="btn btn-success">Lưu lại</button>
      </p>
    </form>

    </div>
  </div>
</div>

<script type="text/javascript">
    CKEDITOR.replace('summary');  
</script>