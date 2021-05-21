<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'header.php'; //Connects to header.php so i dont have to change it on every single page 

?>

<html>

<body>
    <h1>One off commercial clean</h1>

    <p> A one off clean will have you bin looking brand new again! Our specialist team will attend your property on the day that your bin is emptied to clean the bin. Using one of our specialist trucks designed specifically for cleaning large commercial bins, we will deep clean the bin removing and built up dirt and grime form bin. After the bin has been cleaned with our powerful preassure washers, our team will then proceed to dry and deodourise the bin, so that not only does it look clean, it will smell good too! <br><br> If you would like to book in for this service then all you have to do is enter you phone number and address in the boxes below and click on the 'Buy Now' button. You can choose to pay through either Credit or Debit card and through Paypal. You will then recieve a confirmation of your transaction to the email address associated with your paypal account. <br><br>
    <h3>Please note that it is important to enter your contact details so we know which property to attend so we can clean the bin! When you are paying, in the delivery address field please put the address that the bin is located at! This will be the address we attend when coming to service your bin. Any issues please <u><i><strong><a href="contact.php">click here</a></strong></i></u> to use our contact form and we will be in touch. <br><br>Thank you! </h3>
    </p>
    <br>

    <div class="paypalbutton">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="59Z9C3LKBJ264">
            <table>
                <tr>
                    <td><input type="hidden" name="on0" value="Qty of bins:">Qty of bins:</td>
                </tr>
                <tr>
                    <td><select name="os0">
                            <option value="One Off Commercial Clean">One Off Commercial Clean £15.00 GBP</option>
                        </select> </td>
                </tr>
                <tr>
                    <td><input type="hidden" name="on1" value="Please enter your address:">Please enter your address:</td>
                </tr>
                <tr>
                    <td><input type="text" name="os1" maxlength="200"></td>
                </tr>
            </table>
            <input type="hidden" name="currency_code" value="GBP">
            <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
        </form>

    </div>

</html>
