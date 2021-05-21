<?php


    include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit; }
?>


<html>



<h1>Customer Search</h1>
<p> Use the search box below to find a customer or select them from the "All records" section below. Once you have found the customer you are looking for, click on there name to see there information and contact details. You can also add a new order for that customer and view any current or past orders. </p> <br>

<div class="search-box">
    <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submit-search">Search</button>
    </form>
</div>
<br>
<h2>All records:</h2>
<div class="article-container">
    <div class="results">
        <?php
        $sql = "SELECT * FROM customer";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
    
        
    
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='article.php?title=".$row['c_id']."&date=".$row['c_postcode']."'><div>
                <p>".$row['c_fname']."</p>
                <p>".$row['c_sname']."</p>
                <p>".$row['c_rdname']."</p>
                <p>".$row['c_postcode']."</p>
                <p>------------------------------------------------------------------------------------------------</p>
                </div></a>"; 
                    
            }
        }
    ?>
    </div>
</div>
<?php
    include_once 'footer.php'; //Connects to footer.php so i dont have to change it on every single page 
?>

</html>
