<div class="container" style="margin-top: 30px;">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Customer Profile</div>
      <?php
		 $count=1;
		 foreach($users as $key=>$user){ ?>


      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" value="<?= $user->firstname  ?>" placeholder="First name" required="required" autofocus="autofocus" readonly="true">
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" value="<?= $user->lastname  ?>" placeholder="Last name" required="required" readonly="true">
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" value="<?= $user->email  ?>" placeholder="Email address" required="required" readonly="true">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="inputPassword" class="form-control" value="<?= $user->contact  ?>" placeholder="Password" required="required" readonly="true">
                  <label for="text">Contact Number</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="confirmPassword" class="form-control" value="<?= $user->gender ?>" placeholder="Confirm password" required="required" readonly="true">
                  <label for="confirmPassword">Gender</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="inputPassword" class="form-control" value="<?= $user->address  ?>" placeholder="Password" required="required" readonly="true">
                  <label for="text">Address</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="confirmPassword" class="form-control" value="<?= $user->birthdate ?>" placeholder="Confirm password" required="required" readonly="true">
                  <label for="confirmPassword">Date Of Birth</label>
                </div>
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="<?php echo $this->Url->build(["controller"=>"admin","action"=>"delete?id=$user->userid"]);?>">Delete Customer Profile</a>
        </form>
        <?php } ?>
      </div>
    </div>
  </div>