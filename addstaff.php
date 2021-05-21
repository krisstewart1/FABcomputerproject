<?php

include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}
?>
<html>
<div class="container">
    <div class="main">
        <h1>Add new staff member </h1>
        <p>Use the form below to add a new staff member to the database.<< /p><br>
                <div class="custform">
                    <form action="includes/addstaff.inc.php" method="post">
                        <input type="text" name="first" placeholder="First name">
                        <br>
                        <input type="text" name="last" placeholder="Last name">
                        <br>
                        <input type="text" name="road" placeholder="Road name">
                        <br>
                        <input type="text" name="postcode" placeholder="Postcode">
                        <br>
                        <input type="number" name="telephone" placeholder="Telephone">
                        <br>
                        <input type="text" name="email" placeholder="Email">
                        <br>
                        <input type="text" name="notes" placeholder="Notes">
                        <br>
                        <input type="text" name="role" placeholder="Staff Position">
                        <br>
                        <input type="date" name="commencement" placeholder="Date Started: ">
                        <br>
                        <br>
                        <button type="submit" name="submit">Add Staff</button>
                    </form>
                </div>
    </div>
</div>


</html>

<?php
    include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 

?>
