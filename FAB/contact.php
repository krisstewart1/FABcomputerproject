<!DOCTYPE html>
<?php
    include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 
?>
<html lang="en">

<body>

    <main>
        <h1>Contact Form</h1>
        <p>if you have any queries and would like to contact us about quotes for our services please use the contact form below and we will look to respond to you within 24 hours.</p>
        <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder="Full Name ">
            <input type="text" name="mail" placeholder="Email:">
            <input type="text" name="subject" placeholder="Subject: ">
            <textarea name="message" placeholder="Enter your message:"></textarea>
            <button type="submit" name="submit">Send</button>
        </form>
    </main>

</body>

</html>
