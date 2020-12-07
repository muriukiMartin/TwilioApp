<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Twilio SMS App</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      
      <nav>
        <ul>
          <li><a href="contact.php">Go Back</a></li>
        </ul>
      </nav>
      <h2>Confirmation message</h2>
      <?php
        if(isset($_GET['sent'])){
            
            echo (
            '<div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
              <strong>Message has been sent successfully!</strong>
            </div>
            ');
        }
        else{
          echo (
            '<div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
            <strong>Message has not been sent! Please try again</strong>
          </div>');
        }
      ?>
    </div>
  </body>
</html>