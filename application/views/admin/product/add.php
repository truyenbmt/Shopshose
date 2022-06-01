<div class="container-fluid">
    <!-- Content (Right Column) -->
    <div id="content" class="box row">
      <!-- Form -->
      <span style='color: red;'><?php echo $this->session->flashdata('mess'); ?></span>
      <div class="col-md-12">
      <h3 class="tit">Quản lý sản phẩm</h3>
      <h4>Thêm sản phẩm mới</h4>
      <?php echo form_open_multipart('ad_product/them');?>
        <table class="table table-bordered table-hover table-striped">
          <tr>
            <td>Danh mục:</td>
            <td>
              <select name="cat_id">
                <option value="">--Chọn danh mục--</option>
                <?php 
                  if (isset($danhmuc)){
                    foreach ($danhmuc as $key) {
                ?>
                <option value="<?php echo $key['cat_id'] ?>"><?php echo $key['cat_name'] ?></option>
                <?php }} ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>Ảnh đại diện: </td>
            <td><input type="file" name="img" /></td>
          </tr>
          <tr>
            <td>Tên sản phẩm: </td>
            <td><textarea name="name" cols="80" rows="1">Tên sản phẩm</textarea></td>
          </tr>
          <tr>
            <td>Giá: </td> 
            <td><input type="text" name="price" value="20.000 đ" /></td>
          </tr>
          <tr>
            <td>Mô tả sản phẩm: </td> 
            <td><textarea id="summary" name="description">Mô tả sản phẩm</textarea></td>
          </tr>
          <tr>
            <td>Tình trạng: </td>
            <td><textarea name="tinhtrang" cols="80" rows="1">Còn hàng</textarea></td>
          </tr>

        </table>
        <p>
          <button type="submit" name="submit" class="btn btn-success">Lưu sản phẩm</button>
        </p>
      </form>

    </div>
  </div>
</div>


<script type="text/javascript">
    CKEDITOR.replace('summary');
</script>