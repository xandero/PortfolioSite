<?php

	// Contact
	$to = 'alexander.ohan@gmail.com';
	$subject = 'Portfolio site new contact';

	if(isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_message'])){
		$name    = $_POST['c_name'];
		$from    = $_POST['c_email'];
		$message = $_POST['c_message'];

		if (mail($to, $subject, $message, $from)) {
			$result = array(
				'message' => "Thanks for contacting me! You'll hear from me soon.",
				'sendstatus' => 1
				);
			echo json_encode($result);
		} else {
			$result = array(
				'message' => 'Sorry, something went wrong',
				'sendstatus' => 1
				);
			echo json_encode($result);
		}
	}

?>