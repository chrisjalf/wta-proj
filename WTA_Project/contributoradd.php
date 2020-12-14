<?php
$conn = mysqli_connect("localhost", "root", "", "medileaf");
session_start();

if(isset($_POST["addbtn"])) {
    $username = $_POST["username"];
    $password = crypt($_POST["password"], wta);
    $name = $_POST["name"];
    $level = $_POST["level"];

    $insert = "insert into contributor (contributor_username, contributor_password, name, contributor_level) values
                                      ('$username', '$password', '$name', '$level')
              ";

    $query = "select * from contributor where contributor_username = '$username'";
    $checkusername = mysqli_query($conn, $query);
    $rowcount = mysqli_num_rows($checkusername);

    if($rowcount != 0) {
        $_SESSION["failure"] = "Username already existed";
        mysqli_close($conn);
        header("Location: addcontributor.php");
    }
    else {
        if(mysqli_query($conn, $insert)) {
            $_SESSION["success"] = "Successfully added";
            mysqli_close($conn);
            header("Location: addcontributor.php");
        }
        else {
            $_SESSION["failure"] = "Error: " . $insert . "<br>" . mysqli_error($conn);
            mysqli_close($conn);
            header("Location: addcontributor.php");
        }
        mysqli_close($conn);
    }
}
else {
    header("Location: index.php");
}