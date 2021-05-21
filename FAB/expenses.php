<?php
include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}
?>

<html>
<div class="container">
    <div class="main">
        <h1>Expenses </h1>
        <p>Use the form below to add any expenses for the business.</p><br>
        <div class="custform">
            <form action="includes/expenses.inc.php" method="post">
                <input type="text" name="name" placeholder="Name of transaction">
                <br>
                <input type="number" name="amount" placeholder="Amount of transaction">
                <br>
                <input type="date" name="date" placeholder="Date of transaction">
                <br>
                <input type="text" name="method" placeholder="Payment method">
                <br>
                <input type="text" name="notes" placeholder="Notes">
                <br>
                <br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<div class="article-container">
    <div class="results">




        <?php
        $sql = "SELECT * FROM expenses";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        echo "<a href='#'>
            <div>

                <p>Name: ".$row['e_name']."</p>
                <p>Price: £".$row['e_amount']."</p>
                <p>Date: ".$row['e_date']."</p>
                <p>Payment method: ".$row['e_method']."</p>
                <p>Notes: ".$row['e_notes']."</p>
                <p>------------------------------------------------------------------------------------------------</p>
            </div>
        </a>";

        }
        }
        ?>
    </div>
</div>

</html>

<?php
    include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 

?>
