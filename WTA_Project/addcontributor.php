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
                    <h1>Add contributor</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row form plant">
            <form class="col-md-4 offset-md-4 add" name="addcontributors" method="post" onsubmit="return validate_contributor_add()" action="contributoradd.php" autocomplete="off">
                <div class="form-group">
                    <input type="text" name="username" oninput="remove_username_err()" onclick="remove_add_msg()" class="form-control" placeholder="Username" maxlength="50">
                </div>
                <span id="username_err" style="color: red;"></span>
                <div class="form-group">
                    <input type="password" name="password" oninput="remove_password_err()" onclick="remove_add_msg()" class="form-control" placeholder="Password" maxlength="30">
                </div>
                <span id="password_err" style="color: red;"></span>
                <div class="form-group">
                    <input type="text" name="name" oninput="remove_name_err()" onclick="remove_add_msg()" class="form-control" placeholder="Name" maxlength="100">
                </div>
                <span id="name_err" style="color: red;"></span>
                <div class="form-group">
                    <select name="level" oninput="remove_priviledge_err()" onclick="remove_add_msg()" class="form-control">
                        <option value="">Privilege level</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <span id="privilege_err" style="color: red; display: block;"></span>
                <span id="add_success" style="color: green;">
                            <?php
                                if(isset($_SESSION["success"])) {
                                    echo $_SESSION["success"];
                                    unset($_SESSION["success"]);
                            ?>
                                    <a class="btn btn-primary back" href="contributors.php">Go back</a>
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