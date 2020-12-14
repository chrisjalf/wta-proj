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
                        <h1>Edit plant</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container plant">
        <?php
            if(isset($_POST["editbtn"]) || isset($_POST["plantid"])) {
                $plantid = $_POST["plantid"];
                $query = "select * from plant where plant_id = '$plantid'";
                $result = mysqli_query($conn, $query);

                if ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="row">
                <div class="col-md-3">
                    <?php echo '<img width="200" height="200" src="'.$row["plant_image_link"].'" />'; ?>
                </div>
                <div class="col-md-9">
                    <form name="editplants" autocomplete="off" method="post" onsubmit="return validate_plant_edit()" action="plantedit.php">
                        <span style="display: block;"><strong>Name:</strong></span>
                        <div class="form-group">
                            <input oninput="remove_name_err()" class="form-control" name="name" type="text" value="<?php echo $row["plant_name"]; ?>" maxlength="30">
                        </div>
                        <span id="name_err" style="color: red; display:block; margin-bottom: 1rem;"></span>
                        <span style="display: block;"><strong>Scientific name:</strong></span>
                        <div class="form-group">
                            <input oninput="remove_sci_name_err()" class="form-control" name="scientific_name" type="text" value="<?php echo $row["scientific_name"]; ?>" maxlength="50">
                        </div>
                        <span id="sci_name_err" style="color: red; display:block; margin-bottom: 1rem;"></span>
                        <span style="display: block;"><strong>Family:</strong></span>
                        <div class="form-group">
                            <input oninput="remove_family_name_err()" class="form-control" name="family" type="text" value="<?php echo $row["plant_family"]; ?>" maxlength="50">
                        </div>
                        <span id="family_err" style="color: red; display:block; margin-bottom: 1rem;"></span>
                        <span style="display: block;"><strong>Nativity:</strong></span>
                        <div class="form-group">
                            <input oninput="remove_nativity_err()" class="form-control" name="nativity" type="text" value="<?php echo $row["nativity"]; ?>" maxlength="100">
                        </div>
                        <span id="nav_err" style="color: red; display:block; margin-bottom: 1rem;"></span>
                        <span style="display: block;"><strong>Description:</strong></span>
                        <div class="form-group">
                            <textarea oninput="remove_descr_err()" class="form-control" name="description" maxlength="255"><?php echo $row["description"]; ?></textarea>
                        </div>
                        <span id="descr_err" style="color: red; display:block; margin-bottom: 1rem;"></span>
                        <span style="display: block;"><strong>Image link:</strong></span>
                        <div class="form-group">
                            <textarea oninput="remove_link_err()" class="form-control" name="imagelink" maxlength="100"><?php echo $row["plant_image_link"]; ?></textarea>
                        </div>
                        <span id="link_err" style="color: red; display:block; margin-bottom: 1rem;"></span>
                        <button type="submit" class="btn" name="savebtn">Save</button>
                        <button type="submit" class="btn remove" name="removebtn">Remove</button>
                        <input type="hidden" name="plantid" value="<?php echo $row["plant_id"]; ?>">
                    </form>
                </div>
            </div>
        <?php
                }
            }
            else {
                mysqli_close($conn);
                header("Location: plants.php");
            }
        ?>
        </div>
    </body>
</html>
