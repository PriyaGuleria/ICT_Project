<div class="table-responsive">
  <!--Table-->
  <table class="table table-striped">
    <!--Table head-->
    <thead>
      <tr>
        <th>#</th>
        <th>Guest Name</th>
        <th>Guest Message</th>
        <th>Guest Number</th>
        <th>Guest Email</th>
        <th>Guest Message</th>

      </tr>
    </thead>
    <!--Table head-->
    <!--Table body-->
    <tbody>
    <?php
		 $count=1;
		 foreach($contacts as $key=>$contact){ ?>
      <tr>
		<td><?= $count++  ?></td>
		
  		<td><?= $contact->guestname  ?></td>
        <td><?= $contact->guestemail?></td>
  		<td><?= $contact->guestcontact  ?></td>
	  	<td><?= $contact->guestemail  ?></td>        
        <td><?= $contact->guestmessage  ?></td>
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