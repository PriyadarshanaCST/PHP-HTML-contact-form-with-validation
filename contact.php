
<?php  include('form_process.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>My contact form with validation</title>


<link rel="stylesheet" href="contact.css" type="text/css">

</head>
<body>
    
<div class="container">
    <form id ="contact" action="<?= $_SERVER['PHP_SELF'];  ?> "  method="POST">
    <h3>Quick Contact</h3>
    <h4>Contact us today,and reply with 24 hours!</h4>

<fieldset>
    <input type="text" placeholder="Your Name" tabindex="1" name="name" value="<?= $name ?>" autofocus>
    <span class="error"><?= $name_error ?></span>
</fieldset>
    
    <fieldset>
    
    <input type="text" placeholder="Your Email Address" tabindex="2" name="email"  value="<?= $email ?>" >
    <span class="error"><?= $email_error ?></span>
    </fieldset>
    
    <fieldset>
    <input type="text" placeholder="Your Phone Number " tabindex="3" name="phone" value="<?= $phone ?>" >
    <span class="error"><?= $phone_error ?></span>
    </fieldset>

<fieldset>
<input type="text" placeholder="Your Website Start With http:// " tabindex="4" name="url"  value="<?= $url ?>" >
<span class="error"><?= $url_error ?></span>
</fieldset>


<fieldset>
<textarea placeholder="Type your Message Here..." tabindex="5"  type="text" name="message"  value="<?= $message ?>" ></textarea>
</fieldset>


<fieldset> 
<button name="submit" type="submit" id="contact-submit" data-submit=".....sending">Submit</button>
</fieldset>

<div class="success"><?= $success; ?></div>
    
    </form>


</div>

</body>
</html>