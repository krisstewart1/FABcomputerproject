<?php
include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}

?>
<html>
<div class="container">
    <div class="main">
        <h1>Staff Home</h1>
        <p>Staff will need to check this page reguarly as any updates about the company will be posted on this page.</p>
        <div class="custform">
            <form action="includes/notices.inc.php" method="post">
                <input type="text" name="notice_sender" placeholder="Enter your name">
                <br>
                <input type="date" name="notice_date" placeholder="Date">
                <br>
                <input type="text" name="notice_subject" placeholder="Message subject">
                <br>
                <input type="text" name="notice_message" placeholder="Enter Message">
                <br>
                <button type="submit" name="submit">submit</button>
            </form>
        </div>
        <br>
        <h2>All Notices</h2>

        <div class="article-container">
            <div class="results">
                <?php
        $sql = "SELECT * FROM notices";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
    
        
    
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='#'><div>
                
                <p>From: ".$row['notice_sender']."</p>
                <p>Date: ".$row['notice_date']."</p>
                <p>Subject: ".$row['notice_subject']."</p>
                <p>Message : ".$row['notice_message']."</p>
                                <p>------------------------------------------------------------------------------------------------</p>
                </div></a>"; 
                    
            }
        }
    ?>
            </div>
        </div>
    </div>
</div>


</html>

<?php
    include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 

?>
