<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "caliskany22@itu.edu.tr";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $txt, $headers);
	header("Locatiın: index.html?mailsend");
}



