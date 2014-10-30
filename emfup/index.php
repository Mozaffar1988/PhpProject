<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EMF-Admin</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/unicorn-login.css" />
    </head>
    <body style="background: #006400;">
        <div id="container">
            <div id="logo">
                <img src="img/logo_wfp.gif" style="width: 324px;height: 79px;" alt="" />
            </div>
            <div id="user">
                <div class="avatar">
                    <div class="inner"></div>
                    <img src="img/demo/av1_1.jpg" />
                </div>
                <div class="text">
                    <h4>Hello,<span class="user_name"></span></h4>
                </div>
            </div>
            <div id="loginbox">
                <form id="loginform" action="action/loginUserAc.php" method="post">
    				<p>Enter username and password to continue.</p>
                    <div class="input-group input-sm">
                        <span class="input-group-addon"><i class="icon-user"></i></span><input class="form-control" type="text" id="username" name="username" placeholder="Username" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-lock"></i></span><input class="form-control" type="password" id="password" name="password" placeholder="Password" />
                    </div>
                    <div class="form-actions clearfix">
                        <!--<div class="pull-left">
                            <a href="#registerform" class="flip-link to-register blue">Create new account</a>
                        </div> -->
                        <input style="margin-top: 10%;" type="submit" class="btn btn-block btn-primary btn-default" value="Login" />
                    </div>
                </form>

            </div>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/jquery-ui.custom.min.js"></script>
        <script src="js/unicorn.login.js"></script>
    </body>
</html>
