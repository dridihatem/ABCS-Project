<div class="container">

      <form class="form-signin" action="controller/autehtification.php" method="POST">
        <h2 class="form-signin-heading"> <img src="assets/images/logo.png" style="width:125px;"/><br /><br />Connexion Admininstrateur</h2>

        <div class="login-wrap">
            <?php if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Oh snap!</strong> Username or Password Wrong
        </div>
        <?php }
        else if(isset($_GET['disconnect'])){ ?>
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>You have successfully </strong>logged out
        </div>

        <?php } ?>
            <div class="user-login-info">
                <input type="text" class="form-control" placeholder="Login" autofocus name="login">
                <input type="password" class="form-control" placeholder="Password" name="pass">
            </div>
            
            <button class="btn btn-lg btn-login btn-block" type="submit">Login</button>

            

        </div>


          

      </form>

    </div>