
<!DOCTYPE html>
<html lang="fr-FR">

<head>

  <link rel="alternate" hreflang="en" href="http://www.akongo.eu/services/zoo-design.php"/>
  <link rel="alternate" hreflang="fr" href="http://www.akongo.fr/about/contact.php"/>


	<title>AKONGO - Contactez-Nous </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="L’équipe d’AKONGO vous fait profiter de son expertise en zoologie et zootechnie, alliant connaissances scientifiques, immersions en parcs zoologiques et retours d’expérience des visiteurs, pour vous accompagner dans la conception et l’aménagement d’enclos, et met en œuvre une démarche intégrative – prise en compte des besoins du personnel, du bien-être des animaux, des attentes des visiteurs, approche culturelle et éducative – afin de valoriser les missions essentielles de conservation et de pédagogie effectuées par les zoos d’aujourd’hui.">
	<meta name="keywords" content="aménagements, enclos, volières, parcs zoologiques, zoos, visiteurs, éducation, bien-être animal, design, scénographie, EAZA, WAZA">
	<meta name="author" content="AKONGO">
	<!-- CORE CSS -->
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/elegant-icons.css" rel="stylesheet" type="text/css">
	<!-- THEME CSS -->
	<link href="../assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
	
	<!-- GOOGLE FONTS -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:700,400,400italic,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,300,300italic' rel='stylesheet' type='text/css'>
	<!-- FAVICONS -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/bravana144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/bravana114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/bravana72.png">
	<link rel="apple-touch-icon-precomposed" href="../assets/ico/bravana57.png">
	<link rel="shortcut icon" href="../assets/ico/favicon.ico">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">



		<!-- NAVBAR -->
		<?php include('../subnavbar.php'); ?>

		<li class="dropdown">
							<a href="http://www.akongo.eu/about/contact.php"><img style="margin-top: -12px;" width="35" height="35" src="http://www.akongo.eu/assets/img/flags/uk-flag.png"></a>
						</li>		
					</ul>
				</div>
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>


		<!-- END NAVBAR -->
		<!-- PAGE HEADER WITH BACKGROUND IMAGE -->
		<div class="page-header has-background-image">
			<div class="overlay"></div>
			<div class="container">
				<h1 class="page-title" style="font-size: xx-large;">Contacter AKONGO</h1>
				<ol class="breadcrumb link-accent">
					<li><a href="http://www.school.akongo.fr/bien-etre-animal.php">Accueil</a></li>
					<li><a href="#">A propos</a></li>
					<li class="active">Contact</li>
				</ol>
			</div>
		</div>
		<!-- END PAGE HEADER WITH BACKGROUND IMAGE -->
		<!-- PAGE CONTENT -->
		<div class="page-content no-margin-top">
			
			<div class="margin-bottom-50"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h2 class="heading-border-left">Nous contacter</h2>
						<p></p>
						<form method="post" id="contact-form" class="form-horizontal form-minimal margin-top-30" novalidate>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="contact-name" class="control-label sr-only">Nom</label>
										<input type="text" class="form-control" id="contact-name" name="name" placeholder="Votre Nom*" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="contact-email" class="control-label sr-only">Email</label>
										<input type="email" class="form-control" id="contact-email" name="email" placeholder="Votre Email*" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="contact-subject" class="control-label sr-only">Objet</label>
								<div class="col-sm-12">
									<input type="text" class="form-control" id="contact-subject" name="subject" placeholder="Objet*">
								</div>
							</div>
							<div class="form-group">
								<label for="contact-message" class="control-label sr-only">Votre message</label>
								<div class="col-sm-12">
									<textarea class="form-control" id="contact-message" name="message" rows="5" cols="30" placeholder="Votre Message*" required></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<button id="submit-button" type="submit" class="btn btn-primary" style="text-align: right;"><i class="fa loading-icon"></i> <span>Envoyer</span></button>
								</div>
							</div>
							<input type="hidden" name="msg-submitted" id="msg-submitted" value="true">
						</form>


						<?php

// hide all basic notices from PHP
error_reporting(E_ALL ^ E_NOTICE); 

if( isset($_POST['msg-submitted']) ) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// server validation
	if( trim($name) === '' ) {
		$nameError = 'Nom manquant';
		$hasError = true;
	}

	if( trim($email) === '' ) {
		$emailError = 'Email manquant';
		$hasError = true;
	} else if( !preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($email)) ) {
		$emailError = 'Adresse email invalide';
		$hasError = true;
	}

	if( trim($message) === '' ) {
		$messageError = "Message manquant";
		$hasError = true;
	} else {
		if( function_exists( 'stripslashes' ) ) {
			$message = stripslashes( trim( $message ) );
		}
	}
		
	if(!isset($hasError)) {
		
		$emailTo = 'contact@akongo.fr';
		$subject = 'Votre message sur AKONGO: ' . $subject;
		$body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
		$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		
		
		$result = true;
	
	} else {

		$arrMessage = array( $nameError, $emailError, $messageError );

		foreach ($arrMessage as $key => $value) {
			if( !isset($value) )
				unset($arrMessage[$key]);
		}

		$message = implode( '<br/>', $arrMessage );
		$result = false;
	}

		include 'contact-succes.php';
	die();
}


?>



					</div>
					<div class="col-md-3">
						<div class="sidebar">
							<div class="widget">
								<h4 class="widget-title heading-border-left">CONTACT INFO</h4>
								<address class="contact-info">
									<p><i class="icon icon_pin_alt ico-styled text-primary"></i>Bureau d'étude AKONGO - 83 Boulevard sainte hélène</br>
							83000 Toulon, FRANCE</p>
									<p><i class="icon icon_phone ico-styled text-primary"></i> 06 63 80 04 59</p>
									<p><i class="icon icon_mail_alt ico-styled text-primary"></i> contact@akongo.fr</p>
								</address>
							</div>
							<div class="widget">
								<h4 class="widget-title heading-border-left">Nos salons 2017</h4>
								<ul class="list-unstyled">
									<li>	<b>Zoo Design Conference</b></br> Zoo de Wroclaw, Pologne</li></br> 
									<li>	<b>EAZA Annual Conference</b></br>  Zoo d’Emmen, Pays-Bas</li></br> 
									<li>	<b>SFECA Annual Conference</b></br> Paris, France</li></br> 
								

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT -->
						
		<!-- END PAGE CONTENT -->
		<!-- FOOTER -->
	

		<?php include ('../services/footer-to-footer.php'); ?>

		<!-- END FOOTER -->
		
		<?php include ('../back-to-top.php'); ?>

	<!-- END WRAPPER -->
	<!-- JAVASCRIPT -->
	<script src="../assets/js/jquery-2.1.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/plugins/easing/jquery.easing.min.js"></script>
	<script src="../assets/js/plugins/twitter/twitterFetcher.min.js"></script>
	<script src="../assets/js/bravana.js"></script>

</body>

</html>
