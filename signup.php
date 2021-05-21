<?php
include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}
    
?>

<section class="signup-form">
    <div class="container">
        <div class="signup-title">
            <h2 class="paragraph">Sign Up</h2>
            <p>Use the form below to add a new user to the system. The user will be able to access all the information on this system so it is important they they keep their username and password secure.</p>
        </div>
    </div>



    <form action="includes/signup.inc.php" method="post">

        <form class="div-form">
            <div class="first-part">
                <div class="column-1">
                    <input type="text" name="name" placeholder="Full Name"> <!-- creates and input text box for entering name-->
                    <input type="text" name="email" placeholder="Email address">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password"> <!-- Similar to the name input but the input type is changed to password-->
                    <input type="password" name="pwdrepeat" placeholder="Re-enter Password">
                    <div class="second-part">
                        <input type="submit" name="submit" placeholder"submit"> <!-- this is for the submit button-->

                    </div>
                </div>
            </div>
        </form>
    </form>


    <div class="php"></div>
    <?php
     if (isset($_GET["error"])) {
         if ($_GET["error"] == "emptyinput") {
             echo "<p>Fill in all fields!</p>";
         }
        else if ($_GET["error"] == "invaliduid") {
            echo "<P>Choose a different username!</p>";
     }
        else if ($_GET["error"] == "invalidemail") {
            echo "<P>Choose a different email!</p>";
     }
         else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<P>Passwords don't match!</p>";
     }
        else if ($_GET["error"] == "stmtfailed") {
           echo "<P>something went wrong, please try again!</p>";
     }
         else if ($_GET["error"] == "usernametake") {
           echo "<P>Please select another username!</p>";
     }
        else if ($_GET["error"] == "none") {
           echo "<P>Congratulations You have signed up!</p>";
     }
     }
         ?>

    <br>
    <br>
    <br>
    <p> If there are any issues with signing up please use this contact form to contact the site administrators</p>
    <br>
    <br>
    <br>
    <br>




    <?php
    include_once 'footer.php'; //Connects to footer.php so i dont have to change it on every single page 
?>
