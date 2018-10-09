<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$client_notes = $_POST['client notes'];
$formcontent=" From: $name \n Phone: $phone \n Address: $address \n Client_notes: $client_notes";
$recipient = "YOUREMAIL@HERE.COM";
$subject = "Client Profile";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
