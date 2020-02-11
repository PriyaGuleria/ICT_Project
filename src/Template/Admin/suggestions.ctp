<div class="table-responsive">
  <!--Table-->
  <table class="table table-striped">
    <!--Table head-->
    <thead>
      <tr>
        <th>#</th>
        <th>Email</th>
        <th>Suggestion</th>

      </tr>
    </thead>
    <!--Table head-->
    <!--Table body-->
    <tbody>
    <?php
		 $count=1;
		 foreach($suggestions as $key=>$suggestion){ ?>
      <tr>
		<td><?= $count++  ?></td>
		
		<td><?= $suggestion->guestemail  ?></td>
        <td><?= $suggestion->guestsuggestion ?></td>
		
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