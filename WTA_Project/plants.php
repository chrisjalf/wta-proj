<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Medileaf - Plants</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/site.css">
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
                        <h1>List of plants</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container plant">
            <div class="row">
                <div class="col-md-3">
                    <a class="btn add" href="addplant.php">Add plant</a>
                </div>
                <div class="col-md-8">
                <?php
                    if(isset($_SESSION["success-u"])) {
                ?>  <div id="msg" class="alert alert-success" role="alert"><?php echo $_SESSION["success-u"]; ?></div>
                <?php
                        unset($_SESSION["success-u"]);
                    }
                    else if(isset($_SESSION["success-r"])) {
                ?>  <div id="msg" class="alert alert-danger" role="alert"><?php echo $_SESSION["success-r"]; ?></div>
                <?php
                        unset($_SESSION["success-r"]);
                    }
                ?>
                </div>
            </div>
        </div>
        <div class="container plant">
        <?php
            $query = "select * from plant";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);

            while($row = mysqli_fetch_array($result)) {
        ?>
            <div class="row">
                <div class="col-md-3">
                    <?php echo '<img width="200" height="200" src="'.$row["plant_image_link"].'" />'; ?>
                </div>
                <div class="col-md-7">
                    <span><strong>Name:</strong></span>
                    <p><?php echo $row["plant_name"]; ?></p>
                    <span><strong>Scientific name:</strong></span>
                    <p><em><?php echo $row["scientific_name"]; ?></em></p>
                    <span><strong>Family:</strong></span>
                    <p><em><?php echo $row["plant_family"]; ?></em></p>
                    <span><strong>Nativity:</strong></span>
                    <p><?php echo $row["nativity"]; ?></p>
                    <span><strong>Description:</strong></span>
                    <p><?php echo $row["description"]; ?></p>
                </div>
                <div class="col-md-2">
                    <form name="plantedit" method="post" action="editplant.php">
                        <button type="submit" class="btn" name="editbtn">Edit</button>
                        <input type="hidden" name="plantid" value="<?php echo $row["plant_id"]; ?>" >
                    </form>
                </div>
            </div>
                <hr/>
        <?php
            }
        ?>
        </div>
    </body>
</html>