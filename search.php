<?php


include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}


    
?>
<h1>Search Page</h1>



<div class="article-container">
    <?php
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM customer WHERE c_fname LIKE '%$search%' OR c_sname LIKE '%$search%' OR c_rdname LIKE '%$search%' OR c_postcode LIKE '%$search%' OR c_tel LIKE '%$search%' OR c_email LIKE '%$search%' OR c_notes LIKE '%$search%' OR c_binday LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        
        echo "We have found ".$queryResult." results";
        
        
        if($queryResult > 0){
        while ($row = mysqli_fetch_assoc($result)) {
        echo "<a href='article.php?title=".$row['c_id']."&date=".$row['c_postcode']."'><div>
                <p>".$row['c_fname']."</p>
                <p>".$row['c_sname']."</p>
                <p>".$row['c_rdname']."</p>
                <p>".$row['c_postcode']."</p>
                </div></a>";
            }
            
        } else {
            echo "";
        }
    }
  ?>
</div>
