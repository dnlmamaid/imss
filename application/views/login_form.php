<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
        <form class="form-signin"  method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>login/validate_account">
          <?php if(validation_errors() == FALSE){
								echo validation_errors(); 
								}
			  					else{ ?>	
				  					<div class="alert alert-danger" role="alert"style="margin-top:5px"><?php echo validation_errors(); ?></div>
			  					<?php  } ?>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
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
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>