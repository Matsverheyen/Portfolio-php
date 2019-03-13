
<?php
$to = "mats@verheyen.me";
if (isset($_POST['submit'])) {
	if (!isset($_POST['name'])) {
		echo "Naam is niet ingevuld!";
	}
	elseif (!isset($_POST['email'])) {
		echo 'Email is niet ingevuld!';
	}
	elseif (!isset($_POST['subject'])) {
		echo 'Onderwerp is niet ingevuld';
	}
	elseif (!isset($_POST['msg'])) {
		echo 'Er is geen bericht ingevuld!';
	}
	else { 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
    $msg = $_POST['msg'];
		$headers = "From: testsite < " . $email . " >\n";
		$headers.= "Cc: testsite < mail@testsite.com >\n";
		$headers.= "X-Sender: testsite < " . $email . " >\n";
		$headers.= 'X-Mailer: PHP/' . phpversion();
		$headers.= "Return-Path: " . $to . "\n";
		$headers.= "MIME-Version: 1.0\r\n";
		$headers.= "Content-Type: text/html; charset=iso-8859-1\n";
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo 'Email is niet geldig!';
		} else {
      mail($to,$subject,$msg,$headers);
      header("Location: contact.php");
    }
  }
}

?>