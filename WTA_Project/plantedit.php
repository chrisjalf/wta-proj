<?php
    $conn = mysqli_connect("localhost", "root", "", "medileaf");
    session_start();

    if(isset($_POST["savebtn"]) && isset($_POST["plantid"])) {
        $plantid = $_POST["plantid"];
        $name = $_POST["name"];
        $sci_name = $_POST["scientific_name"];
        $family = $_POST["family"];
        $nativity = $_POST["nativity"];
        $description = $_POST["description"];
        $image_link = $_POST["imagelink"];

        $update = "update plant set
                   plant_name = '$name',
                   plant_family = '$sci_name',
                   scientific_name = '$family',
                   nativity = '$nativity',
                   description = '$description',
                   plant_image_link = '$image_link'  
                   where plant_id = '$plantid'
                  ";

        $result = mysqli_query($conn, $update);

        if (!$result)
            echo "Unable to update record". mysqli_error($conn);
        else {
            $_SESSION["success-u"] = "Successfully updated";
            mysqli_close($conn);
            header("Location: plants.php");
        }
    }
    else if(isset($_POST["removebtn"]) && isset($_POST["plantid"])) {
        $plantid = $_POST["plantid"];
        $delete = "delete from plant where plant_id = '$plantid'";
        $result = mysqli_query($conn, $delete);
        $_SESSION["success-r"] = "Successfully removed";
        mysqli_close($conn);
        header("Location: plants.php");
    }