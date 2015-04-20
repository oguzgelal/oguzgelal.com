<?php

// THIS FILE IS THE EXACT COPY OF MAIL.PHP FILE WITHOUT THE PASSWORDS

if (isset($_POST['email']) && isset($_POST['message'])){
	$mail = new \PHPMailer;

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = '';
	$mail->Password = '';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->From = $_POST['email'];
	$mail->FromName = $_POST['name'];
	$mail->addAddress('o.gelal77@gmail.com', 'Oguz Gelal');
	$mail->addReplyTo($_POST['email'], $_POST['name']);

	$mail->isHTML(true);

	$mail->Subject = 'OGUZGELAL - New Message';
	$mail->Body    = 'New message on oguzgelal.com <br><br> <b>Name</b>: '.$_POST['name']."<br><b>Phone</b>: ".$_POST['phone']."<br><b>Email</b>: ".$_POST['email']."<br><b>Message</b>: ".$_POST['email'];
	$mail->AltBody = 'New message on oguzgelal.com. Name: '.$_POST['name'].", Phone: ".$_POST['phone'].", Email: ".$_POST['email'].", Message: ".$_POST['email'];

	if(!$mail->send()) { echo "0"; }
	else { echo "1"; }
}
else { echo "-1"; }