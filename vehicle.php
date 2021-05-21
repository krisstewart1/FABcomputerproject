<?php


include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}
?>
<html>
<div class="container">
    <div class="main">
        <h1>Vehicles</h1>
        <p>Enter the details of any company vehicles below. </p><br>
        <div class="custform">
            <form action="includes/vehicle.inc.php" method="post">
                <input type="text" name="reg" placeholder="Registration Number">
                <br>
                <input type="text" name="make" placeholder="Vehicle Make">
                <br>
                <input type="text" name="model" placeholder="Vehicle Model">
                <br>
                <input type="date" name="purchased" placeholder="Date Purchased">
                <br>
                <input type="text" name="price" placeholder="Price of vehicle">
                <br>
                <input type="text" name="driver" placeholder="Staff ID of Driver">
                <br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

</html>

<?php
    include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 

?>
