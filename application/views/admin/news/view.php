<div class="container-fluid">
    <!-- Content (Right Column) -->
    <div id="content" class="box row">
      <span style='color: red;'><?php echo $this->session->flashdata('mess'); ?></span>
      <!-- Form -->
      <div class="col-md-12">
      <h3 class="tit">Bảng quản lý tin tức</h3>
      <div class="text-right add-btn"><a href="<?php echo base_url() ?>ad_news/them"><button class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm tin mới</button></a></div>     
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <th>STT</th><th>Ảnh đại diện</th><th>Tiêu đề</th><th>Ngày đăng</th><th>Xử lý</th>
        </thead>
        <tbody>
          <?php if(isset($news) && !empty($news)){$i=0;
        foreach ($news as $key) {$i++; ?>
        <tr>
          <td><?php echo $start+$i; ?></td>
          <td><img src="<?php echo base_url().'uploads/news/'.$key['n_avatar'] ?>" alt="ảnh đại diện" height="50px" /></td>
          <td><?php echo $key['n_title'] ?></td>
          <td><?php echo $key['n_date'] ?></td>
          <td>
            <a href="<?php echo base_url().'ad_news/xoa/'.$key['id'] ?>"><button style="padding:2px 5px" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button></a>
            <a href="<?php echo base_url().'ad_news/sua/'.$key['id'] ?>"><button style="padding:2px 5px" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</button></a>
          </td>
        </tr>
        <?php  
            }
          } 
        ?>
        </tbody>
      </table>
      <br/>

        <div id="pagination" style="margin-top: 10px">
          <?php echo $links; ?>
        </div>
      </div>
    </div>
</div>

<style>
  .add-btn {
    margin-bottom: 20px;
  }
</style>