<div class="container">

      <form class="form-signin" action="controller/autehtification.php" method="POST">
        <h2 class="form-signin-heading"> <img src="assets/images/logo.png" style="width:125px;"/><br /><br />Pay Portal</h2>

        <div class="login-wrap">
        	<?php if(isset($_GET['error'])){ ?>
		<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Wrong!</strong> Username or Password
		</div>
		<?php }
		else if(isset($_GET['disconnect'])){ ?>
		<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>You have seccessfully </strong>logout
		</div>

		<?php } ?>
            <div class="user-login-info">
                <input type="text" class="form-control" placeholder="Personal Number" autofocus name="login">
                <input type="password" class="form-control" placeholder="Password" name="pass">
            </div>
            <label class="checkbox">
               
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Login</button>
 <!--<div class="registration">
                Don't have an account yet?
                <a class="" href="register.php">
                    Create an account
                </a>
            </div>
            

        </div>-->

          <!-- Modal -->
          

      </form>

    </div>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      
                      <form name="" action="controller/forget.php" method="POST">
                      
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="reset">Cancel</button>
                          <button class="btn btn-success" type="submit" name="send">Submit</button>
                      </div>
                  </form>
                  </div>
              </div>
          </div>
          <!-- modal -->