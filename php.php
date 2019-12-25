<?php 
$recipient = "thwilliams4129@gmail.com"; 
$subject = "Site contact form"; 
$from = "From: ".$_POST['email']."\n"; 
$replyTo = "Reply-To: ".$_POST['email']."\n"; 
$name = "Name: ".$_POST['name']."\n"; 
$style = "Style Shoot: ".$_POST['style']."\n"; 
$date = "Desired Photography date: ".$_POST['date']."\n";
$location = "Location: ".$_POST['location']."\n";
$comment = "Comment: ".$_POST['comment']."\n";
$MESSAGE_BODY = "$from \n $replyTo \n $name \n $style \n $date \n $location \n $comment \n";

mail($recipient, $subject, $MESSAGE_BODY) or die ("Failure"); 
echo "Thank you!";
?> 