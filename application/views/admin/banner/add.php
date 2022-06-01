<!-- Content (Right Column) -->
<div id="content" class="box">
  <?php echo $this->session->flashdata('mess'); ?>
  <!-- Form -->
  <h3 class="tit">Quản lý banner</h3>
  <h4>Thêm mới banner</h4>
  <?php echo form_open_multipart('ad_banner/them');?>
    <table class="table table-bordered table-hover table-striped">
      <tr>
        <td>Chọn ảnh banner: </td>
        <td><input type="file" name="image" /></td>
      </tr>

    </table>
    <p>
      <button type="submit" name="submit" class="btn btn-success">Thêm banner</button>
    </p>
  </form>

</div>