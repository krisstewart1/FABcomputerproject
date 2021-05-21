<?php


include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}
    
?>
<html>
<h1> Select the from the list below the information you would like to add or update</h1>


<div class="wrapper">

    <div>
        <h2><a href='addcust.php'>Customer</a>
    </div>
    <div>
        <h2><a href='addproduct.php'>Product</a>
    </div>
    <div>
        <h2><a href='addstaff.php'>Staff</a>
    </div>
    <div>
        <h2><a href='vehicle.php'>Vehicles</a>
    </div>

</div>



<?php
    include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 

?>
