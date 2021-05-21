<?php
    session_start();
    include 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>FAB Bin Cleaning - Cleansing and Hygiene</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/website2/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/website2/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/website2/img/favicon-16x16.png">
    <link rel="manifest" href="/website2/img/site.webmanifest">
</head>

<body>
    <nav class="navigation">
        <div class="logo"><a href="index.php" class="">FAB Bin Cleaning</a></div>
        <a href="#" class="dropdown">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navlink">
            <ul>
                <?php
            if (isset($_SESSION["useruid"])) {
                
                
                
                echo "<li><a href='staff.php'>Staff Home </a></li>";
                echo "<li><a href='timesheet.php'>Timesheet</a></li>";
                echo "<li><a href='update.php'>Records </a></li>";
                echo "<li><a href='expenses.php'>Expenses</a></li>";
                echo "<li><a href='find.php'>Customer Search</a></li>"; 
                echo "<li><a href='routes.php'>Routes</a></li>";
                echo "<li><a href='signup.php'>Staff sign up</a></li>";
                echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
              
            }
         else {
                echo "<li><a href='index.php'>Home</a></li>";
                echo "<li><a href='about.php'>About us</a></li>";
                echo "<li><a href='services.php'>Services</a></li>";
                echo "<li><a href='contact.php'>Contact us</a></li>";
                echo "<li><a href='custfaq.php'>FAQ's and information</a></li>"; 
                echo "<li><a href='login.php'>Staff Login</a></li>"; 
         }
        ?>
            </ul>
        </div>
    </nav>
</body>

</html>
