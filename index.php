<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
 
 if(!empty($_POST["send"])){
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userPhone = $_POST["userPhone"];
    $userMessage = $_POST["userMessage"];
    $toEmail = "canozgur800@gmail.com";

    $mailHeaders = "Name: " . $userName .
	"\r\n Email: " . $userEmail  . 
	"\r\n Phone: " . $userPhone  . 
	"\r\n Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}


 }
 ?>


<div class="form-container">
        <form name="emailContact" method="post">
            <div class="input-row">
                <label>Name <em>*</em></label>
                <input type="text" name="userName">
            </div>
            <div class="input-row">
                <label>Email <em>*</em></label>
                <input type="email" name="userEmail">
            </div>

            <div class="input-row">
                <label>Phone <em>*</em></label>
                <input type="tel" name="userPhone">
            </div>

            <div class="input-row">
                <label>Message <em>*</em></label>
                <textarea name="userMessage" required></textarea>
            </div>

            <div class="input-row">
                <input type="submit" name="send" required value="submit">
                <?php if(!empty($message)){ ?>
                <div class="success">
                    <strong><?php echo $message; ?></strong>
                </div>
                <?php } ?>
            </div>
        </form>
    </div>
    
</body>
</html>