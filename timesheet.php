<?php


include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}


    
?>
<html>
<div class="container">
    <div class="main">
        <h1>Timesheets</h1>
        <p>Use the form below to enter the day you have worked this week. </p><br>
        <div class="custform">
            <form action="includes/timesheet.inc.php" method="post">
                <input type="text" name="staffid" placeholder="Staff ID number">
                <br>
                <input type="date" name="date" placeholder="Date">
                <br>
                <input type="time" name="starttime" placeholder="Start time">
                <br>
                <input type="time" name="finishtime" placeholder="Finish time">
                <br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>




</html>

<?php
    include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 

?>
