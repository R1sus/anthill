<?php 
$to  = "dendomenko@gmail.com"; 
 

$subject = "Birthday Reminders for August"; 

$message = ' 
<html> 
    <head> 
        <title>Birthday Reminders for August</title> 
    </head> 
    <body> 
        <p>Here are the birthdays upcoming in August!</p> 
    </body> 
</html>'; 



$m = mail($to, $subject, $message); 
echo $m;