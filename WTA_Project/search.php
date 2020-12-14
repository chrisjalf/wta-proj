<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Medileaf - Search</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/site.css">
    </head>
    <body>
        <?php
            include("header.php");
            $conn = mysqli_connect("localhost", "root", "", "medileaf");
        ?>
        <div class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="welcome col-sm-12 text-left">
        <?php
            if(!isset($_SESSION["user"])) { // if user is not logged in
        ?>
                        <h1>Search</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 search">
                    <form  action="search.php" method="post" autocomplete="off">
                        <input class="form-control" type="text" name="search" placeholder="Search for plant">
                        <button class="btn" type="submit">Go</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container plant">
        <?php
            if(isset($_POST['search'])){
                $search_string = $_POST['search'];
                $search_string = preg_replace("#[^0-9a-z]#i", "", $search_string);
                $query = "select * from plant where plant_name like '%$search_string%'";
                $result = mysqli_query($conn, $query);
                $count = mysqli_num_rows($result);

                if($count == 0 || $search_string == ""){
                    echo "
                    <div class='row text-center'>
                        <div class='col-md-4 offset-md-4'>
                            <h2>No search results</h2>
                        </div>
                    </div>
                    ";
                }
                else{
                    while($row = mysqli_fetch_array($result)){
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
            </div>
            <hr/>

        <?php
                    }
        ?>
        </div>
        <?php
                }
            }
        ?>
    </body>
        <?php
            }
            else { // else default view for visitors
                header("Location: index.php");
            }
        ?>

