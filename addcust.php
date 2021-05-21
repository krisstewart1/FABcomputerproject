<?php
include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}    
?>
<html>
<div class="container">
    <div class="main">
        <h1>New Customer</h1>
        <p>Use this form to add any new customers into the system. You will find their information on Paypal via their transaction. Only add a customer if they have made an order on Paypal. Once the customer has been added you can view their information via the <b><a href="find.php">Customer search page or by clicking here.</a></b></p><br>
        <div class="custform">
            <form action="includes/addcustomer.inc.php" method="post">
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
                <br>
                <br>
                <p>Select their Bin day: </p>
                <select id="binday" name="binday">
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                </select>
                <br>
                <br>
                <button type="submit" name="submit">Add Customer</button>
            </form>
        </div>
    </div>
</div>


</html>

<?php
    include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 

?>
