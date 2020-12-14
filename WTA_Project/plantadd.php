<?php
    $conn = mysqli_connect("localhost", "root", "", "medileaf");
	session_start();

    if(isset($_POST["addbtn"])) {
        $name = $_POST["name"];
        $sci_name = $_POST["scientific_name"];
        $family = $_POST["family"];
        $nativity = $_POST["nativity"];
        $description = $_POST["description"];
        $image_link = $_POST["imagelink"];

        $insert = "insert into plant (plant_name, plant_family, scientific_name, nativity, description, plant_image_link) values
                                      ('$name', '$sci_name', '$family', '$nativity', '$description', '$image_link')
                  ";

        if(mysqli_query($conn, $insert)) {
			$_SESSION["success"] = "Successfully added";
            mysqli_close($conn);
			header("Location: addplant.php");
        }
        else {
            $_SESSION["failure"] = "Error: " . $insert . "<br>" . mysqli_error($conn);
            mysqli_close($conn);
			header("Location: addplant.php");
        }
        mysqli_close($conn);
    }