<?php
require 'vendor/autoload.php';
require_once('recaptchalib.php');
  $privatekey = "your_private_key";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);


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
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo 'Email is niet geldig!';
		} else {
$email = new \SendGrid\Mail\Mail(); 
$email->setFrom($email);
$email->setSubject($subject);
$email->addTo($to, "Mats Verheyen");
$email->addContent(
    "text/html", $msg
);

if (!$resp->is_valid) {
  echo "Error";   
} else {
  $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
    header('Location: contact.php');
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
        }
      }
    }
  }
}

?>