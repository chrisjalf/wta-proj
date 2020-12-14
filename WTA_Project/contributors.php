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
        if((!(isset($_SESSION["user"]))) || $_SESSION["level"] != 1) { // redirect to index (visitors/contributors) if attempting to access pages for privileged contributors
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
                        <h1>List of contributors</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container plant">
            <div class="row">
                <div class="col-md-3">
                    <a class="btn add" href="addcontributor.php">Add contributor</a>
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
            $query = "select * from contributor";
			$result = mysqli_query($conn, $query);
			
			while($row = mysqli_fetch_array($result)) {
        ?>
                <div class="row">
                    <div class="col-md-7 offset-md-3">
                        <span><strong>Name:</strong></span>
                        <p><?php echo $row["name"]; ?></p>
                        <span><strong>Email:</strong></span>
                        <p><?php echo $row["contributor_username"]; ?></p>
                        <span><strong>Privilege level: </strong><?php echo $row["contributor_level"]; ?></span>
                    </div>
                </div>
                <hr/>
                <?php
            }
            ?>
        </div>
    </body>
</html>