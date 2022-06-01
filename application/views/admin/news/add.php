<div class="container-fluid">
    <!-- Content (Right Column) -->
    <div id="content" class="box row">
      <!-- Form -->
      <span style='color: red;'><?php echo $this->session->flashdata('mess'); ?></span>
      <div class="col-md-12">
      <h3 class="tit">Quản lý tin tức</h3>
      <h4>Thêm tin mới</h4>
      <?php echo form_open_multipart('ad_news/them');?>
        <table class="table table-bordered table-hover table-striped">
          
          <tr>
            <td>Ảnh đại diện: </td>
            <td><input type="file" name="n_avatar" /></td>
          </tr>
          <tr>
            <td>Tiêu đề: </td>
            <td><textarea name="n_title" cols="80" rows="2">Tiêu đề bài viết</textarea></td>
          </tr>          
          <tr>
            <td>Nội dung: </td> 
            <td><textarea id="summary" name="n_content">Nội dung bài viết</textarea></td>
          </tr>
          <tr>
            <td>Ngày viết: </td>
            <td><input type="text" name="n_date" placeholder="Ngày 1/1/2020"></td>
          </tr>
      
        </table>
        <p>
          <button type="submit" name="submit" class="btn btn-success">Lưu tin mới</button>
        </p>
      </form>
      
    </div>
  </div>
</div>

<script type="text/javascript">
    CKEDITOR.replace('summary');
</script>