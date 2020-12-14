<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Medileaf - About Us</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/site.css">
    </head>
    <body>
        <?php
            include("header.php");
            if(isset($_SESSION["user"])) { // redirect to index (contributors) if attempting to access pages for visitors
                header("Location: index.php");
            }
        ?>
        <div class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="welcome col-sm-12 text-left">
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row about">
                <div class="col-sm-8 text-left">
                    <p>
                        Founded in 2017, Medileaf intends to help conserving the population of medical plants through public awareness.
                        With knowledge sharing, we hope that everyone can appreciate the greatness of mother nature and grow as community.
                        Also, it is to promote the ability of medical plants as an alternative to modern medicines.

                        <br/>
                        <br/>

                        We uphold the passion in studying and sharing our findings to anyone and currently expanding our connections and welcome those are interested to join our cause.
                    </p>
                </div>
                <div class="col-sm-4 text-right">
                    <img src="icon/si-glyph-flower.svg"/>
                </div>
            </div>
            <div class="row about">
                <div class="col-sm-12 text-left">
                    <h5>Contact Us:</h5>
                </div>
                <div class="col-sm-8 text-left contact">
                    <p>
                        +606-252 1223
                        <br/>
                        +606-252 1224
                        <br/>
                        <a href="mailto:support@medileaf.com">support@medileaf.com</a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>