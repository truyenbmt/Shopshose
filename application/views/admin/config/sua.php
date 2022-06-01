<div class="container-fluid">

    <!-- Content (Right Column) -->

  <div id="content" class="box row">

      <span style='color: red;'><?php if(isset($mess)){echo $mess;} ?></span>

      <!-- Form -->

    <div class="col-md-12">

      <h3 class="tit">Sửa thông tin chung</h3>  

      <?php echo $this->session->flashdata('mess'); ?>

      <form action="<?php echo base_url() ?>ad_config/update" method="post" enctype="multipart/form-data">     

        <table class="table table-bordered table-hover table-striped">

          <thead>

           <th>Tiêu đề</th><th>Nội dung</th>

          </thead>

          <tbody>

            <?php if(isset($config) && !empty($config)){

          foreach ($config as $key) { ?>

          <tr>

            <td>Logo</td><td><img src="<?php echo base_url().'uploads/'.$key['logo'] ?>" alt="" /> <input type="file" name="logo"></td>

          </tr>

          <tr>

            <td>Favicon</td><td><img src="<?php echo base_url().'uploads/'.$key['favicon'] ?>" alt="" /> <input type="file" name="favicon"></td>

          </tr>

          <tr>

            <td>Điện thoại</td><td><input type="text" name="phone" value="<?php echo $key['phone'] ?>" size=70 /></td>

          </tr>

          <tr>

            <td>Email</td><td><input type="text" name="email" value="<?php echo $key['email'] ?>" size=70 /></td>

          </tr>

          <tr>

            <td>Địa chỉ</td><td><textarea name="address" cols="80" rows="2"><?php echo $key['address'] ?></textarea></td>

          </tr>

          <tr>

            <td>Website</td><td><textarea name="website" cols="80" rows="1"><?php echo $key['website'] ?></textarea></td>

          </tr>

          <tr>

            <td>Bản quyền</td><td><input type="text" name="copyright" value="<?php echo $key['copyright'] ?>" size=70 /></td>

          </tr>

          <tr>

            <td>Nội dung seo</td><td><textarea name="seo_descript" cols="80" rows="3"><?php echo $key['seo_descript'] ?></textarea></td>

          </tr>

          <tr>

            <td>Fanpage</td><td><textarea name="fanpage" cols="80" rows="5"><?php echo $key['fanpage'] ?></textarea></td>

          </tr>

          <tr>

            <td>Google maps</td><td><textarea name="gmaps" cols="80" rows="5"><?php echo $key['gmaps'] ?></textarea></td>

          </tr>



          <?php  

              }

            } 

          ?>

        </table>

        <br/>

        <button type="submit" name="submit" class="btn btn-success">Lưu</button>

      </form>

    </div>

  </div>

</div>



<style>

  table {

    width: 90%;

  }

   img {

    width: 50px;

  }

</style>

<script type="text/javascript">
    CKEDITOR.replace('summary');
</script>