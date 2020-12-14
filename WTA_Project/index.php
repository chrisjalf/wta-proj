<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Medileaf - Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/site.css">
    </head>
    <body>
        <?php
            include("header.php");
        ?>
        <div class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="welcome col-sm-12 text-center">
                        <?php
                            if(isset($_SESSION["user"])) { // if user is logged in
                        ?>
                        <h1>Welcome, <span><?php echo $_SESSION["user"]; ?></span></h1>
                        <?php
                            }
                            else { // else default view for visitors
                        ?>
                        <h1>Welcome to <span>Medileaf</span>, your teacher for medicinal plants</h1>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            if(isset($_SESSION["user"])) { // if user is logged in
        ?>
        <div class="container">
            <div class="row text-center index">
        <?php
            if($_SESSION["level"] == 1) {
        ?>
                <div class="col-md-6">
                    <a class="btn ctrb" href="contributors.php">Contributors</a>
                </div>
        <?php
            }
        ?>
                <div class="col-md-6">
                    <a class="btn plt" href="plants.php">Plants</a>
                </div>
            </div>
        </div>
        <?php
            }
            else {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 offset-sm-4 intro text-left">
                    <h2><img src="icon/si-glyph-leaf.svg"/> What is Medileaf?</h2>
                    <p>
                        A growing community consists of scientists, <br/>
                        researchers, enthusiasts, and whoever are <br/>
                        are willing to contribute their knowledge <br/>
                        about medicinal plants.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row powerful">
                <div class="col-sm-12 text-center">
                    <h2>Most powerful medicinal plants</h2>
                </div>
            </div>
            <div class="row powerful">
                <div class="col-xs-12 col-lg-4">
                    <a href="#">
                        <img class="rounded" width="288" height="215" src="https://cdn4.themysteriousworld.com/wp-content/uploads/2013/12/chamomile.webp"/>
                        <div class="image-caption">
                            <span>Chamomile</span>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <a href="#">
                        <img class="rounded" width="288" height="215" src="https://cdn2.themysteriousworld.com/wp-content/uploads/2013/12/dadelion.webp"/>
                        <div class="image-caption">
                            <span>Dandelion</span>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <a href="#">
                        <img class="rounded" width="288" height="215" src="https://cdn3.themysteriousworld.com/wp-content/uploads/2013/12/echinacea.webp"/>
                        <div class="image-caption">
                            <span>Coneflower</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row powerful">
                <div class="col-xs-12 col-lg-4">
                    <a href="#">
                        <img class="rounded" width="288" height="215" src="https://cdn3.themysteriousworld.com/wp-content/uploads/2013/12/cayene-pepper.webp"/>
                        <div class="image-caption">
                            <span>Cayenne Pepper</span>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <a href="#">
                        <img class="rounded" width="288" height="215" src="https://cdn3.themysteriousworld.com/wp-content/uploads/2013/12/peppermint.webp"/>
                        <div class="image-caption">
                            <span>Peppermint</span>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <a href="#">
                        <img class="rounded" width="288" height="215" src="https://cdn.themysteriousworld.com/wp-content/uploads/2013/12/sage.webp"/>
                        <div class="image-caption">
                            <span>Sage</span>
                        </div>
                    </a>
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
        <?php
            }
        ?>
    </body>
</html>