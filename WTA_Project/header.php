<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<nav class="navbar navbar-expand-lg navbar-light header">
    <a class="navbar-brand" href="index.php">Medileaf</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <?php
            session_start();
            if(isset($_SESSION["user"])) {
        ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
        <?php
            }
            else {
        ?>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="search.php">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
        <?php
            }
        ?>
        </ul>
    </div>
</nav>
</body>
</html>