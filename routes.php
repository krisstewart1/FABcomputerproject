<?php


include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
if(!$_SESSION['useruid']){
 header("Location: index.php");
          exit;}


    
?>
<div class="container">
    <div class="main">

        <body>
            <h1>Daily Routes</h1>
            <p>To view the routes for this week click on the day below of the route that is required. The routes will change each date and will update with any new orders that need to be compeleted.</p>


            <div class="wrapper">
                <div>
                    <a href="monday.php">
                        <h1>Monday</h1>

                    </a>
                </div>
                <div>
                    <a href="tuesday.php">
                        <h1>Tuesday</h1>
                    </a>
                </div>
                <div>
                    <a href="wednesday.php">
                        <h1>Wednesday</h1>

                    </a>
                </div>
                <div>
                    <a href="thursday.php">
                        <h1>Thursday</h1>
                    </a>

                </div>
                <div>
                    <a href="friday.php">
                        <h1>Friday</h1>
                    </a>
                </div>


            </div>

        </body>
    </div>
</div>
