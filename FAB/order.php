<?php


include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}


    
?>
<html>

<h1>Order Details</h1>
<div class="orderform">
    <form action="includes/order.inc.php" method="post">
        <input type="text" name="ref" placeholder="Order Reference">
        <br>
        <input type="text" name="cid" placeholder="Customer ID">
        <br>
        <input type="text" name="sdate" placeholder="Order Start Date">
        <br>
        <input type="text" name="edate" placeholder="Order End Date">
        <br>
        <input type="text" name="packageid" placeholder="Package id">
        <br>
        <button type="submit" name="submit">Submit Order</button>
    </form>
</div>

</html>
<?php
    include_once 'footer.php'; //Connects to header.php so i dont have to change it on every single page 

?>
