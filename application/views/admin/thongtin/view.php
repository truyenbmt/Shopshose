<div class="container-fluid">
    <!-- Content (Right Column) -->
    <div id="content" class="box row">
      <span style='color: red;'><?php echo $this->session->flashdata('mess'); ?></span>
      <!-- Form -->
      <div class="col-md-12">
      <h3 class="tit">Bảng quản lý thông tin</h3>
      <br/>
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <th>STT</th><th>Tiêu đề</th><th>Nội dung seo</th><th>Xử lý</th>
        </thead>
        <tbody>
          <?php if(isset($thongtin) && !empty($thongtin)){$i=0;
        foreach ($thongtin as $key) {$i++; ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $key['tieude'] ?></td>
          <td><?php echo $key['seo_descript'] ?></td>
          <td>
            <a href="<?php echo base_url().'ad_thongtin/sua/'.$key['id'] ?>"><button style="padding:2px 5px" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</button></a>
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