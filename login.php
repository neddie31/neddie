<?php
	$fb = new Facebook\Facebook([
	  'app_id' => '1946347745654145', // Replace {app-id} with your app id
	  'app_secret' => 'ca2e99193b563cb587ca76f114543372',
	  'default_graph_version' => 'v2.10',
	  ]);

	$helper = $fb->getRedirectLoginHelper();

	$permissions = ['email']; // Optional permissions
	$loginUrl = $helper->getLoginUrl('https://neddie31.github.io/neddie/fb-callback.php', $permissions);

	echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>