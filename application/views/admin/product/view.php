<div class="container-fluid">
    <!-- Content (Right Column) -->
    <div id="content" class="box row">
      <span style='color: red;'><?php echo $this->session->flashdata('mess'); ?></span>
      <!-- Form -->
      <div class="col-md-12">
      <h3 class="tit">Quản lý sản phẩm</h3>
      <div class="text-right add-btn"><a href="<?php echo base_url() ?>ad_product/them"><button class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm mới</button></a></div>   
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <th>STT</th><th>Ảnh đại diện</th><th>Tên sp</th><th>Giá</th><th>Tình trạng</th><th>Xử lý</th>
        </thead>
        <tbody>
          <?php if(isset($product) && !empty($product)){$i=0;
        foreach ($product as $key) {$i++; ?>
        <tr>
          <td><?php echo $start+$i; ?></td>
          <td><img src="<?php echo base_url().'uploads/product/'.$key['img'] ?>" alt="ảnh đại diện" height="50px" /></td>
          <td><?php echo $key['name'] ?></td>
          <td><?php echo $key['price'] ?></td>
          <td><?php echo $key['tinhtrang'] ?></td>
          <td>
            <a href="<?php echo base_url().'ad_product/xoa/'.$key['id'] ?>"><button style="padding:2px 5px" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button></a>
            <a href="<?php echo base_url().'ad_product/sua/'.$key['id'] ?>"><button style="padding:2px 5px" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</button></a>
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
  form input {
    padding: 2px 3px;
  }
  form input:last-child {
    padding-left: 10px;
    padding-right: 10px;
  }
</style>