<div class="container-fluid">
    <!-- Content (Right Column) -->

    <div id="content" class="box row">

      <?php if(isset($mess)){echo $mess;}; ?>

      <!-- Form -->
      <div class="col-md-12">

        <h3 class="tit">Bảng quản lý tài khoản</h3>

        <h4>Thêm tài khoản</h4>
        <br/>
        <table class="table table-bordered table-hover">
          <?php echo form_open_multipart('ad_user/them');?>

            <tr>
              <td><label>Tên admin: </label></td>
              <td><input type="text" placeholder="Tên admin" name="name" /> </td>
            </tr>

            <tr>
              <td><label>Mật khẩu: </label></td>
              <td><input type="text" placeholder="******" name="pass" required="required" /></td>
            </tr>

            <tr>
              <td></td>
              <td><button type="submit" name="submit" class="btn btn-success">Lưu</button></td>
            </tr>

          </form>
        </table>
      </div>
    </div>
</div>
