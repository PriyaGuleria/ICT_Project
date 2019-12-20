<!DOCTYPE html>
<html lang="zxx">
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Admin : Login</div>
      <div class="card-body">
      <?php
            echo $this->Form->create(
              null,
              [
                "url"=>["action"=>"login"]
              ]
            );
				?>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="adminemail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="adminpassword" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                  Remember Password
              </label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Login">
         <!-- <a class="btn btn-primary btn-block" >Login</a>-->
        <!--  <a class="btn btn-primary btn-block" href="<?php echo $this->Url->build(["controller"=>"admin","action"=>"dashboard"]);?>">Login</a>-->
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
</body>
</html>
