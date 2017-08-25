<html>
	<head> 
		<link rel="shortcut icon" href="new_icon.ico" type="image/x-icon" />
		<link rel="icon" href="new_icon.ico" type="image/x-icon" />
	</head>
	
	<title> NieT Page </title>
	
	<body> 
		<br>
		<marquee HEIGHT=50 direction = right><b> Chào mừng các bạn đến với NieT </b></marquee>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1946347745654145";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
		<?php 
			$fb = new Facebook\Facebook([
					'app_id' => '1946347745654145',
					'app_secret' => 'ca2e99193b563cb587ca76f114543372',
					'default_graph_version' => 'v2.10',
					]);

			
		?>
	</body>	
	
</html>