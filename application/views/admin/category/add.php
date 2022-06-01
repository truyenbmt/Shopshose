<div class="container-fluid">

    <!-- Content (Right Column) -->

    <div id="content" class="box row">

      <!-- Form -->

      <div class="col-md-12">

      <h3 class="tit">Quản lý danh mục</h3>

      <h4>Thêm danh mục</h4>

      <?php echo form_open_multipart('ad_category/them');?>

        <table class="table table-bordered table-hover table-striped">

          <tr>

            <td>Tên danh mục: </td>

            <td><input type="text" placeholder="Tên danh mục" name="cat_name" size="60" /></td>

          </tr>
      

        </table>

        <p>

          <button type="submit" name="submit" class="btn btn-success">Lưu</button> </p>

      </form>

      

    </div>

  </div>

</div>





<style type="text/css">



</style>