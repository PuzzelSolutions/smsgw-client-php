<?php
	error_reporting(E_ALL | E_STRICT);
	ini_set('display_errors', 1);

	require __DIR__ . '/vendor/autoload.php';

	$server = 'https://something.example.invalid/gw/rs/sendMessages'; // replace something.example.invalid with real hostname
	$serviceId = your-service-id; // integer, e.g., 4000
	$username = 'your-username';
	$password = 'your-password';

	$smsGwClient = new Intelecom_Service_SMSGW($server, $serviceId, $username, $password);

	$msisdn = 'E.164-formattet-msisdn'; // e.g., +4790011222
	$test = $smsGwClient->sendSameMessageToRecipients('Test message', $msisdn);