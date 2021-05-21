<?php
include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}
?>
<html>
<div class="container">
    <div class="main">
        <h1>Add Product</h1>
        <p>Input the details of the new product below to add it to the database</p><br>
        <div class="custform">
            <form action="includes/addproduct.inc.php" method="post">
                <input type="text" name="prodcode" placeholder="Product code">
                <br>
                <input type="text" name="prodname" placeholder="Product name">
                <br>
                <input type="number" name="prodlength" placeholder="Product duration">
                <br>
                <input type="number" name="prodprice" placeholder="Product price">
                <br>

                <button type="submit" name="submit">Add Product</button>
            </form>
        </div>
    </div>
</div>
<br>
<h2>Products and Price list:</h2>
<div class="article-container">
    <div class="results">
        <?php
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
    
        
    
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='#'><div>
                
                <p>Product Code: ".$row['product_code']."</p>
                <p>Product Name: ".$row['product_name']."</p>
                <p>Duration of Product in weeks: ".$row['product_length']."</p>
                <p>Price of Product : £".$row['product_price']."</p>
                                <p>------------------------------------------------------------------------------------------------</p>
                </div></a>"; 
                    
            }
        }
    ?>
    </div>
</div>


</html>

<?php
    include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 

?>
