<?php
include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}    
?>
<html>

<h1>Customer Information</h1>

<h1>Order Details</h1>

<p>Enter the details of the order in the form below. You will find the Transaction ID on the Paypal order conformation </p>
<div class="orderform">
    <form action="includes/order.inc.php" method="post">
        <input type="text" name="ref" placeholder="Transaction ID">
        <br>
        <p>You will find the Customer ID below in the customer details section</p>
        <input type="text" name="cid" placeholder="Customer ID">
        <br>
        <p>Enter the start date of the order, this can be found on the Paypal order under the "Transaction date" field</p>
        <input type="date" id="sdate" name="sdate" value="2021-01-01" min="2021-01-01" max="2100-12-31">
        <br>
        <p>Enter the end date of the order, for one off cleans it will be 1 week from the start date. For weekly cleans it will be 4 weeks from the start date</p>
        <input type="date" id="edate" name="edate" value="2021-01-01" min="2021-01-01" max="2100-12-31">
        <br>
        <p>Select the product name the customer has ordered from the dropdown menu below and input the product ID in the field below</p>
        <select>
            <?php
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);  
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                 {
        echo '<option value=' . $row['product_id'] . '> PRODUCT ID: ' . $row['product_id'] .  '          PRODUCT NAME: ' . $row['product_name'] .  '</option>';
                 }
                    
            }
        }
   ?>
        </select> <br>
        <input type="text" name="packageid" placeholder="Product ID">
        <br>
        <button type="submit" name="submit">Submit Order</button>
    </form>
</div>




<br>

<h1>Customers details and current orders</h1>

</html>
<div class="results">
    <div class="article-container">
        <?php
    $title = mysqli_real_escape_string($conn, $_GET['title']);
    $date = mysqli_real_escape_string($conn, $_GET['date']);
    
        $sql = "SELECT * FROM customer WHERE c_id='$title' AND c_postcode='$date'";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
    
        
    
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <div>
                <p>Customer ID: ".$row['c_id']."</p>
                <p>First Name: ".$row['c_fname']."</p>
                <p>Surname: ".$row['c_sname']."</p>
                <p>Address: ".$row['c_rdname']."</p>
                <p>Postcode: ".$row['c_postcode']."</p>
                <p>Telephone number: +44".$row['c_tel']."</p>
                <p>Email: <a href=".$row['c_email'].">".$row['c_email']."</a></p>
                <p>Customer notes:".$row['c_notes']."</p>
                <p>Bin collection day: ".$row['c_binday']."</p>
                </div>"; 
                   
            }
        }
    ?>
    </div>
    <div class="article-container">

        <?php
        $sql = "SELECT * FROM orders WHERE c_id='$title' AND orders_edate > CURDATE();";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
    
        
  
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <br>
              <p> Orders:  </p>
                <p>Customer ID: ".$row['c_id']."</p>
                <p>Order ID: ".$row['orders_id']."</p>
                <p>Order Ref: ".$row['orders_ref']."</p>
                <p>Order Start Date: ".$row['orders_sdate']."</p>
                <p>Order End Date: ".$row['orders_edate']."</p>
                <p>Product ID: ".$row['product_id']."</p>
                <br>"; 
                
                
                    
            }
        }
    ?>
    </div>
</div>
<h1>Past orders</h1>
<div class="results">
    <div class="article-container">

        <?php
        $sql = "SELECT * FROM orders WHERE c_id='$title' AND orders_edate < CURDATE();";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
    
        
  
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <br>
              <p> Orders:  </p>
                <p>Customer ID: ".$row['c_id']."</p>
                <p>Order ID: ".$row['orders_id']."</p>
                <p>Order Ref: ".$row['orders_ref']."</p>
                <p>Order Start Date: ".$row['orders_sdate']."</p>
                <p>Order End Date: ".$row['orders_edate']."</p>
                <p>Product ID: ".$row['product_id']."</p>
                <br>"; 
                
                
                    
            }
        }
    ?>
    </div>
</div>





<?php
    include_once 'footer.php'; //Connects to footer.php so i dont have to change it on every single page 
?>
