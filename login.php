<?php
    include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
?>




<section class="signup-form">
    <div class="login-title">
        <h2 class="paragraph">Staff Log in</h2>
        <p>Please enter your login details</p>
    </div>

    <div class="signup-form-form">
        <form action="includes/login.inc.php" method="post">

            <div class="first-part">
                <div class="column-1">
                    <input type="text" name="uid" placeholder="Please enter your Username or Email">
                    <input type="password" name="pwd" placeholder="Please enter your Password">
                    <div class="second-part">
                        <input type="submit" name="submit"></button> <!-- this is for the submit button-->

                    </div>
                </div>
            
        </form>
    </div>
    <?php
     if (isset($_GET["error"])) {
         if ($_GET["error"] == "emptyinput") {
             echo "<p>Fill in all fields!</p>";
         }
        else if ($_GET["error"] == "wronglogin") {
            echo "<P>Incorrect login information!</p>";
     }
    }
?>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p> If there are any issues with signing up please use this contact form to contact the site administrators</p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


</section>


</article>


<?php
    include_once 'footer.php'; //Connects to footer.php so i dont have to change it on every single page 
?>
