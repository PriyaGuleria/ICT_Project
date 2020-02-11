<div class="table-responsive">
  <!--Table-->
  <table class="table table-striped">
    <!--Table head-->
    <thead>
      <tr>
        <th>#</th>
        <th>Customer Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <!--Table head-->
    <?php
		 $count=1;
		 foreach($users as $key=>$user){ ?>
      <tr>
		<td><?= $count++  ?></td>
		
  		<td><?= $user->firstname  ?></td>
      <td><a href="<?php echo $this->Url->build(["controller"=>"admin","action"=>"details?id=$user->userid"]);?>">Show Profile</a></td>
  
      </tr>
         <?php } ?>
    <!--Table body-->
    <tbody>
   
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