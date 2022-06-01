<div class="container-fluid">

    <!-- Content (Right Column) -->

    <div id="content" class="box row">



      <span style='color: red;'><?php echo $this->session->flashdata('mess'); ?></span>

      <!-- Form -->

      <div class="col-md-12">

        <h3 class="tit">Thông tin chung</h3> 

        <div class="text-right add-btn">

          <a href="<?php echo base_url() ?>ad_config/sua"><button class="btn btn-primary">Sửa thông tin</button></a>

        </div>  

        <table class="table table-bordered table-hover table-striped">

          <thead>

           <th>Tiêu đề</th><th>Nội dung</th>

          </thead>

          <tbody>

            <?php if(isset($config) && !empty($config)){

          foreach ($config as $key) { ?>

          <tr>

            <td>Logo</td><td><img src="<?php echo base_url().'uploads/'.$key['logo'] ?>" alt="logo" width="50px" /></td>

          </tr>

          <tr>

           <td>Favicon</td><td><img src="<?php echo base_url().'uploads/'.$key['favicon'] ?>" alt="favicon" width="50px" /></td>

          </tr>

          <tr>

            <td>Điện thoại</td><td><?php echo $key['phone'] ?></td>

          </tr>

          <tr>

            <td>E-mail</td><td><?php echo $key['email'] ?></td>

          </tr>

          <tr>

            <td>Địa chỉ</td><td><?php echo $key['address'] ?></td>

          </tr>

          <tr>

            <td>Website</td><td><?php echo $key['website'] ?></td>

          </tr> 

          <tr>

            <td>Bản quyền</td><td><?php echo $key['copyright'] ?></td>

          </tr>

          <tr>

            <td>Fanpage</td><td><?php echo $key['fanpage'] ?></td>

          </tr>

          <tr>

            <td>Google maps</td><td><?php echo $key['gmaps'] ?></td>

          </tr>



          <?php  

              }

            } 

          ?>

        </table>

        <br/>

      </div> <!-- end col -->

    </div> <!-- end row -->

</div> <!-- end container -->

<br/>



<style>

  #content {

    min-height: 400px;

  }

  .add-btn {

    margin-bottom: 20px;

  }

</style>