<div class="container-fluid">
    <!-- Content (Right Column) -->

    <div id="content" class="box row">

      <?php if(isset($mess)){echo $mess;}; ?>

      <!-- Form -->
      <div class="col-md-12">

        <h3 class="tit">Bảng quản lý tài khoản</h3>

        <h4>Sửa tài khoản</h4>
        <br/>
        <table class="table table-bordered table-hover">
          <?php echo form_open_multipart('ad_user/sua/'.$id);?>
          	<?php 
          		if(!empty($user_admin)){
          	?>
            <tr>
              <td><label>Tên admin: </label></td>
              <td><input type="text" value="<?php echo $user_admin['name'] ?>" name="name" /> </td>
            </tr>

            <tr>
              <td><label>Mật khẩu: </label></td>
              <td><input type="text" placeholder="******" name="pass" /></td>
            </tr>

            <tr>
              <td></td>
              <td><button type="submit" name="submit" class="btn btn-success">Lưu</button></td>
            </tr>
            <?php } ?>
          </form>
        </table>
      </div>
    </div>
</div>
