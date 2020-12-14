<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Medileaf - Plants</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/site.css">
        <script src="js/validate.js"></script>
    </head>
    <body>
        <?php
            include("header.php");
            $conn = mysqli_connect("localhost", "root", "", "medileaf");
            if(!(isset($_SESSION["user"]))) { // redirect to index (visitors) if attempting to access pages for contributors
                header("Location: index.php");
            }

            if (mysqli_connect_errno()) {
                echo "Failed to connect to database. " . mysqli_connect_error();
            }
        ?>
        <div class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="welcome col-sm-12 text-center">
                        <h1>Add plant</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row form plant">
                <form class="col-md-4 offset-md-4 add" name="addplants" method="post" onsubmit="return validate_plant_add()" action="plantadd.php" autocomplete="off">
                    <div class="form-group">
                        <input type="text" oninput="remove_name_err()" onclick="remove_add_msg()" name="name" class="form-control" placeholder="Name" maxlength="30">
                    </div>
                    <span id="name_err" style="color: red;"></span>
                    <div class="form-group">
                        <input type="text" oninput="remove_sci_name_err()" onclick="remove_add_msg()" name="scientific_name" class="form-control" placeholder="Scientific name" maxlength="50">
                    </div>
                    <span id="sci_name_err" style="color: red;"></span>
                    <div class="form-group">
                        <input type="text" oninput="remove_family_name_err()" onclick="remove_add_msg()" name="family" class="form-control" placeholder="Family" maxlength="50">
                    </div>
                    <span id="family_err" style="color: red;"></span>
                    <div class="form-group">
                        <input type="text" oninput="remove_nativity_err()" onclick="remove_add_msg()" name="nativity" class="form-control" placeholder="Nativity" maxlength="100">
                    </div>
                    <span id="nav_err" style="color: red;"></span>
                    <div class="form-group">
                        <textarea name="description" oninput="remove_descr_err()" onclick="remove_add_msg()" name="description" class="form-control" placeholder="Description" maxlength="255"></textarea>
                    </div>
                    <span id="descr_err" style="color: red;"></span>
                    <div class="form-group">
                        <textarea name="imagelink" oninput="remove_link_err()" onclick="remove_add_msg()" name="link" class="form-control" placeholder="Image link" maxlength="100"></textarea>
                    </div>
                    <span id="link_err" style="color: red; display: block;"></span>
                    <span id="add_success" style="color: green;">
						<?php
							if(isset($_SESSION["success"])) {
								echo $_SESSION["success"];
								unset($_SESSION["success"]);
						?>
                    <a class="btn btn-primary back" href="plants.php">Go back</a>
                    <?php
							}
					?>
					</span>
					<span id="add_fail" style="color: red;">
						<?php
							if(isset($_SESSION["failure"])) {
								echo $_SESSION["failure"];
                                unset($_SESSION["failure"]);
							}
						?>
					</span>
                    <button type="submit" class="btn" name="addbtn">Add</button>
                </form>
            </div>
        </div>
    </body>
</html>