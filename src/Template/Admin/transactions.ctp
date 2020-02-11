<div class="table-responsive">
  <!--Table-->
  <table class="table table-striped">
    <!--Table head-->
    <thead>
      <tr>
        <th>#</th>
        <th>Product</th>
        <th>Customer</th>
        <th>Contact</th>
        <th>Landmark</th>
        <th>City</th>
        <th>Address Type</th>
        <th>Payment Type</th>
        <th>Total Amount</th>
      </tr>
    </thead>
    <!--Table head-->
    <!--Table body-->
    <tbody>
    <?php
		 $count=1;
		 foreach($checkout as $key=>$transaction){ ?>
      <tr>
		<td><?= $count++  ?></td>
		
          <td><?= $transaction->product_name  ?></td>
              <td><?= $transaction->cust_name ?></td>
          <td><?= $transaction->cust_number   ?></td>
          <td><?= $transaction->cust_landmark   ?></td>
           <td><?= $transaction->cust_city  ?>  </td>
           <td><?= $transaction->address_type   ?></td>
           <td><?= $transaction->payment_type   ?></td>
           <td>$<?= $transaction->total_amount   ?></td>
    
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