<div class="container-fluid">
  <!-- Content (Right Column) -->
  <div id="content" class="box row">
    <span style='color: red;'><?php echo $this->session->flashdata('mess'); ?></span>
    <!-- Form -->
    <div class="col-md-12">
    <h3 class="tit">Quản lý sản phẩm</h3>
    <h4>Sửa sản phẩm</h4>
    <form action="<?php echo base_url().'ad_product/sua/'.$id; ?>" method="post" enctype="multipart/form-data">
    <table class="table table-bordered table-hover table-striped">
      <?php if(isset($product) && !empty($product)){
        foreach ($product as $key) {
      ?>
      <tr>
        <td>Tên sản phẩm:</td>
        <td><textarea name="name" cols="80" rows="1"><?php echo $key['name'] ?></textarea></td>
      </tr>

      <tr>
        <td>Ảnh đại diện:</td>
        <td><img src="<?php echo base_url().'uploads/product/'.$key['img'] ?>" height="50px"> <input type="file" name="img" /></td>
      </tr>

      <tr>
        <td>Chọn danh mục:</td> 
        <td><select name="cat_id">
            <option value="<?php echo $key['cat_id'] ?>">--Chọn danh mục--</option>
            <?php if(isset($danhmuc)){
              foreach ($danhmuc as $key2) {
            ?>
            <option value="<?php echo $key2['cat_id'] ?>"><?php echo $key2['cat_name'] ?></option>
            <?php }} ?>
          </select>
        </td>
      </tr>

      <tr>
        <td>Giá:</td>
        <td><input type="text" name="price" value="<?php echo $key['price'] ?>" /></td>
      </tr>

      <tr>
        <td>Mô tả sản phẩm:</td>
        <td><textarea id="summary" name="description" ><?php echo $key['description'] ?></textarea></td>
      </tr>
     
      <tr>
        <td>Tình trạng:</td>
        <td><textarea name="tinhtrang" cols="80" rows="1"><?php echo $key['tinhtrang'] ?></textarea></td>
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