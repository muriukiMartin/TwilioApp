<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twilio SMS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

     <div class="container">
         <div class=img>
             <img src="img\twilio-logo.svg">
         </div>
        <h1>Twilio SMS App</h1>   
        <form action="send.php" method="POST">
            <h4>Send an SMS now!</h4>
            <div class="cred">            
                <label for="">Name</label>
                <input id="input" type="text" name="name" required placeholder="Please input your name">
                                           
                <label for="">Recipient's Number</label>
                <input id="input" type="text" name="phone" required placeholder="Format: +254712345678">
            </div>
            <div class="message">                         
                <label for="">Message</label>
                <textarea rows="5" name="body" placeholder="Your Message goes here"></textarea>
            </div>
            <input id="send" type="submit" value="Send Message" name="send" >
        </form>
    </div>           
</body>
</html>
<?php
?>