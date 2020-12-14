<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Medileaf - Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/site.css">
        <script src="js/validate.js"></script>
    </head>
    <body>
    <?php
        session_start(); // session is started to get the message from authentication.php if user access
        if(isset($_SESSION["user"])) { // redirect to index (contributors) if attempting to access pages for visitors
            header("Location: index.php");
        }
    ?>
        <div class="container">
            <div class="row form">
                <form class="col-md-4 offset-md-4" name="login" method="post" onsubmit="return validate()" action="authentication.php" autocomplete="off">
                    <h2 class="text-center"><img src="icon/si-glyph-leaf.svg"/>Medileaf</h2>
                    <div class="form-group">
                        <input type="text" oninput="remove_username_err()" onclick="removeloginerr()" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <span id="username_err" style="color: red;"></span>
                    <div class="form-group">
                        <input type="password" oninput="remove_password_err()" onclick="removeloginerr()" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <span id="password_err" style="color: red; display: block;"></span>
                    <span id="login_err" style="color: red;">
						<?php 
							if(isset($_SESSION["loginerr"])) {
								echo $_SESSION["loginerr"];
								unset($_SESSION["loginerr"]);
							}
						?>
					</span>
                    <button type="submit" class="btn" name="loginbtn">Login</button>
                    <small class="form-text text-center">Please <a href="mailto:support@medileaf.com">contact us</a> if you would like to be a part of us.</small>
                </form>
            </div>
        </div>
    </body>
</html>