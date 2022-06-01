
    <!-- Content (Right Column) -->
<div class="container-fluid">

    <div id="content" class="box row">

      <span style='color: red;'><?php echo $this->session->flashdata('mess'); ?></span>

      <!-- Form -->
      <div class="col-md-12">
        <h3 class="tit">Bảng quản lý tài khoản</h3>       
        <div class="text-right add-btn"><a href="<?php echo base_url() ?>ad_user/them"><button class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm tài khoản</button></a></div>
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th>STT</th><th>Tên tài khoản</th><th>Mật khẩu</th><th>Xử lý</th>
          </thead>
          <tbody>
            <?php if(isset($user) && !empty($user)){$i=0;
          foreach ($user as $key) {$i++; ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $key['name'] ?></td>
            <td>******</td>
            <td>
              <a href="<?php echo base_url().'ad_user/xoa/'.$key['id'] ?>"><button style="padding:2px 5px" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button></a>
              <a href="<?php echo base_url().'ad_user/sua/'.$key['id'] ?>"><button style="padding:2px 5px" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</button></a>
            </td>
          </tr>
          <?php  
              }
            } 
          ?>
        </table>

    </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- end container -->

<style>
  #content {
    min-height: 400px;
  }
  .add-btn {
    margin-bottom: 20px;
  }
</style>