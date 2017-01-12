<?php require_once"./assets/header-sksm.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>SKSM v 0.1 | Log in</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet"> <!-- style custom -->
  </head>
    
    <body>
      
    <div class="login-box">
    <div class="login-logo">
        <a href="#" style="color:black ; text-decoration:none">Login SKSM</a>
    </div><!-- /.login-logo -->
        
    <div class="login-box-body">
        <p class="login-box-msg">Masukkan Username dan Password Anda</p>
        <form name="form1" id="form1" action="proses/proses-login.php" method="post" accept-charset="utf-8">
            <div class="form-group has-feedback">
                <input type="text" name="username" value="" placeholder="Username Anda" class="form-control" id="login" maxlength="80" size="30" required autofocus>
                <span class="fa fa-user form-control-feedback"></span>
                <span><font color="red"></font></span>
            </div>
    <div class="form-group has-feedback">
        <input type="password" name="password" value="" placeholder="Password Anda" class="form-control" id="password" size="30" required>
        <span class="fa fa-lock form-control-feedback"></span>
        <span><font color="red"></font></span>
    </div>
            
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                    <input type="checkbox" name="remember" value="" id="remember">Remember Me
                    
                    </div>                   
                </label>
                </div>
        </div><!-- /.col -->
        
        <div class="form-actions col-xs-4">
            <input class="btn btn-primary" type="submit" name="login" value="Log in">
        </div><!-- /.col -->
    </div>
        </form>
    </div><!-- /.login-box-body -->
</div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>