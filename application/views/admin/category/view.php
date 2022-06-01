<div class="container-fluid">

    <!-- Content (Right Column) -->

    <div id="content" class="box row">

      <span style='color: red;'><?php echo $this->session->flashdata('mess'); ?></span>

      <!-- Form -->

      <div class="col-md-12">

      <h3 class="tit">Bảng quản lý danh mục</h3>

      <div class="text-right add-btn"><a href="<?php echo base_url() ?>ad_category/them"><button class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm danh mục</button></a></div>     

      <table class="table table-bordered table-hover table-striped">

        <thead>

          <th>STT</th><th>Tên danh mục</th><th>Xử lý</th>

        </thead>

        <tbody>

          <?php if(isset($category) && !empty($category)){$i=0;

        foreach ($category as $key) {$i++; ?>

        <tr>

          <td><?php echo $i ?></td>

          <td><?php echo $key['cat_name'] ?></td>

          <td>

            <a href="<?php echo base_url().'ad_category/sua/'.$key['cat_id'] ?>"><button style="padding:2px 5px" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</button></a>
            <a href="<?php echo base_url().'ad_category/xoa/'.$key['cat_id'] ?>"><button style="padding:2px 5px" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button></a>

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