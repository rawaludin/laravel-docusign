<?php

return [
	'email' => $_ENV['DOCUSIGN_EMAIL'],
	'password' => $_ENV['DOCUSIGN_PASSWORD'],
	'key' => $_ENV['DOCUSIGN_KEY'], // integrator key
	'accountid' => $_ENV['DOCUSIGN_ACCOUNT_ID'],
	'host' => $_ENV['DOCUSIGN_HOST']
];
