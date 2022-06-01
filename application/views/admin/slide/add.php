<!-- Content (Right Column) -->
<div id="content" class="box">
  <?php echo $this->session->flashdata('mess'); ?>
  <!-- Form -->
  <h3 class="tit">Quản lý slide</h3>
  <h4>Thêm mới slide</h4>
  <?php echo form_open_multipart('ad_slide/them');?>
    <table class="table table-bordered table-hover table-striped">
      <tr>
        <td>Chọn ảnh slide: </td>
        <td><input type="file" name="image" /></td>
      </tr>

    </table>
    <p>
      <button type="submit" name="submit" class="btn btn-success">Thêm slide</button>
    </p>
  </form>

</div>