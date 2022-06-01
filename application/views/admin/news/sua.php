<div class="container-fluid">
  <!-- Content (Right Column) -->
  <div id="content" class="box row">
    <span style='color: red;'><?php echo $this->session->flashdata('mess'); ?></span>
    <!-- Form -->
    <div class="col-md-12">
    <h3 class="tit">Quản lý tin tức</h3>
    <h4>Sửa bài viết</h4>
    <form action="<?php echo base_url().'ad_news/sua/'.$id; ?>" method="post" enctype="multipart/form-data">
    <table class="table table-bordered table-hover table-striped">
      <?php if(isset($tintuc) && !empty($tintuc)){
        foreach ($tintuc as $key) {
      ?>
      <tr>
        <td>Tiêu đề:</td>
        <td><textarea name="n_title" cols="80" rows="2"><?php echo $key['n_title'] ?></textarea></td>
      </tr>
      <tr>
        <td>Ảnh đại diện:</td>
        <td><img src="<?php echo base_url().'uploads/news/'.$key['n_avatar'] ?>" height="50px"> <input type="file" name="n_avatar" /></td>
      </tr>
      <tr>
        <td>Nội dung:</td>
        <td><textarea id="summary" name="n_content" ><?php echo $key['n_content'] ?></textarea></td>
      </tr>
      <tr>
        <td>Ngày đăng: </td>
        <td><textarea name="n_date" cols="80" rows="1" ><?php echo $key['n_date'] ?></textarea></td>
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