<div class="table-responsive">
  <!--Table-->
  <table class="table table-striped">
    <!--Table head-->
    <thead>
      <tr>
        <th>#</th>
        <th>Product Name</th>
        <th>Product Category</th>
        <th>Product Description</th>
        <th>Product Warrenty</th>
        <th>Product Image</th>
        <th>Product Price</th>
       
      </tr>
    </thead>
    <!--Table head-->
    <!--Table body-->
    <tbody>
    <?php
		 $count=1;
		 foreach($items as $key=>$item){ ?>
      <tr>
		<td><?= $count++  ?></td>
		
		<td><?= $item->itemname  ?></td>
        <td><?= $item->itemcategory?></td>
		<td><?= $item->itemdescription  ?></td>
		<td><?= $item->itemwarranty  ?></td>
        <td><img style="width:100px; height:65px;" src="<?php echo $this->Url->image("../".$item->itemimage); ?>" alt="No Image"></td>
        <td><?= $item->itemprice  ?></td>
        <td><a class="btn btn-success" href="#" role="button">Edit</a></td>
		<td><a class="btn btn-danger" href="#" role="button">Delete</a></td>
      </tr>
         <?php } ?>
    </tbody>
    <!--Table body-->
  </table>
  <!--Table-->
</div>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>