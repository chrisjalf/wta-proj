<?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "", "medileaf");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to database. " . mysqli_connect_error();
    }
    else {
        if (isset($_POST["loginbtn"])) {

            $username = $_POST["username"];
            //$password = $_POST["password"];
            $password = crypt($_POST["password"], wta);
            $query = "select * from contributor where contributor_username = '$username' and contributor_password = '$password'";

            $result = mysqli_query($conn, $query);

            if ($row = mysqli_fetch_assoc($result)) {
                $_SESSION["user"] = $row["name"];
                $_SESSION["level"] = $row["contributor_level"];
                mysqli_close($conn);
                header("Location: index.php");
            }
            else {
                $_SESSION["loginerr"] = "Incorrect username and password combination";
                mysqli_close($conn);
                header("Location: login.php");
            }
        }
    }


