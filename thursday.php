<?php


include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}


    
?>

<html>
<h1>Thursday Work sheet</h1>
<div><button onClick="window.print()">Print this page
    </button></div>
<div class="article-container">
    <div class="results">
        <?php
        $sql = "SELECT * FROM orders INNER JOIN customer ON orders.c_id = customer.c_id WHERE c_binday='thursday' AND orders_edate >= CURDATE() AND orders_sdate <= CURDATE() ;";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
    
        
    
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div>
                <p>Order ID: ".$row['orders_id']."</p>
                <p>Order Reference: ".$row['orders_ref']."</p>
               <br> 
                <p>Customer ID: ".$row['c_id']."</p>
                <p>First Name: ".$row['c_fname']."</p>
                <p>Surname: ".$row['c_sname']."</p>
                <p>Address: ".$row['c_rdname']."</p>
                <p>".$row['c_postcode']."</p>
                <br>
                <p>Order Starts: ".$row['orders_sdate']."</p>
                <p>Order Ends: ".$row['orders_edate']."</p>
                <p>Product: ".$row['product_id']."</p>
                
                <p>------------------------------------------------------------------------------------------------</p>
                </div></a>"; 
                    
            }
        }
    ?>
