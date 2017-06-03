<html>
	<head>
		<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/sidr.css">
	    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">


		<!-- JS -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
		<!--  Removing the sidr for now. Trying to make the look more clean 
		<script src="//cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js"></script>
		-->
		<script src="js/main.js"></script>

	</head>
	<body>
	<!--  Removing the sidr for now. Trying to make the look more clean 
		<div id="sidr">
		  <ul>
		    <li><a href="#"><i class="glyphicon glyphicon-console" aria-hidden="true"> </i>Projects</a></li>
		    <li><a href="Resume_SauravK.pdf" target="_blank"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"> </i>Resume</a></li>
  		    <li><a href="mailto:sauravkadavath@berkeley.edu"><i class="glyphicon glyphicon-envelope" aria-hidden="true"> </i>Email</a></li>
		  </ul>
		</div>
	-->
		<div class="navigation">
			<div class="row">
				
				<!-- Removing the sidr for now. Trying to make the look more clean 
				<a id="simple-menu" href="#sidr">
	  				<div class="col-xs-3 col-md-2 navIcon">
	  					<div class="navWordsWrapper">
	  						<span class="navWordsWrapperSpan"> Menu </span>
	  					</div>
	  				</div>
				</a>
				-->

  				<div class="col-xs-12 col-md-12 navMain">
  					<div class="innerMain">
  						<img class="pfp img-circle" src="img/dummypfp.png" />
		  				<h2 class="titleH2">
		  					Saurav Kadavath
		  				</h2>
		  				<h3 class="titleH3">
		  					Developer <span class="circle"></span> Student <span class="circle"></span> Innovator
		  				</h3>
	  				</div>
  				</div>
  			</div>
		</div>

		<div class="container-fluid">
			<div class="col-lg-2 col-md-1"></div> 
			<div class="col-lg-8 col-md-10 main">
					<div class="headerName">
						<h1> Projects </h1>
					</div>

					<a href="http://tinyurl.com/polisight" >
						<div class="highlight">
							<div class='col-md-6 dark'>
								<div class='col-md-12 highlightTitle'>
									<p> PoliSight </p>
								</div>
								<div class='col-md-12 highlightInfo'>
									<p> Polisight is a web application that scrapes various news sources and applies natural language processing and AI APIs to analyze multiple news articles at a time and portray the results in an easy-to understand fashion. It uses the News API and IBM Watson's Alchemy API to bring users an unbiased news source. </p>

									<p>
									Built at CalHacks 3.0
									</p>
								</div>
							</div>
							<div class='col-md-6 light img_col polisightImg'>
								
							</div>
						</div>
					</a>
					
					<a href="http://tinyurl.com/rummage-sk">
						<div class="highlight">
								<div class='col-md-6 light img_col rummageImg'>
								</div>
								<div class='col-md-6 dark'>
									<div class='col-md-12 highlightTitle'>
										<p> Rummage </p>
									</div>
									<div class='col-md-12 highlightInfo'>
										<p> Rummage is a Chrome extension that I built. It is able to extend the Google search engine’s capabilities to parse the user’s personal files. Users can login to my app with services such as Google Drive and Dropbox, and Rummage modifies the Google search results page to include result from the user's personal files.</p>
										<p>
											Built at HS Hacks II
										</p>
									</div>
								</div>
						</div>
					</a>

					<div class="highlight">
							<div class='col-md-6 dark'>
								<div class='col-md-12 highlightTitle'>
									<p> Websites </p>
								</div>
								<div class='col-md-12 highlightInfo'>
									<p> I have worked on multiple websites for different organizations, including ATB Academy (a local afterschool academy), EzPzDay (a startup in SF), and Senior Personal Emergency Preparedness (a club at my old high school). The projects have involved technologies including Wordpress, jQuery, AJAX, OAuth, PHP, and much more.</p>
								</div>
							</div>
							<div class='col-md-6 light img_col atbImg'>
							</div>
					</div>
			</div>
		</div>

		<div class="footer">
			<div class="container-fluid">
				<div class="col-md-6 footerLeft">
					<div class="footerSectionContainer">
						<p class="email">
							sauravkadavath [at] berkeley [dot] edu
						</p>
					</div>
					<div class="footerSectionContainer">
						<table class="contactTable">
							<tr>
								<td>
									<a href="Resume_SauravK.pdf" target="_blank"> 
										<div class="footerSectionContainer footerSectionContainerResume">
											<p class="resume">
												 Resume 
											</p>
										</div>
									</a>
								</td>
								<td>
									<a href="https://www.linkedin.com/in/saurav-kadavath-808b07132"> <img src="img/lin.png" class="networking_image" /> </a>
								</td>
							</tr>
						</table>
					</div>
					<div class="footerSectionContainer">
						<p class="copyright">
							Copyright &copy; 2017 by Saurav Kadavath
							<br/ >
							Hand-built by me :)
						</p>
					</div>
				</div>
				<div class="col-md-6 footerRight">
					<p class="contactMe"> Contact Me </p>
					<form action="index.php" method="post" class="contactForm">
						<div class="footerSectionContainer footerSectionContainerRight">
							<input type="text" class="formInput formInputName" placeholder="Name" name="name" />
							<input type="text" class="formInput formInputEmail" placeholder="Email" name="email" />
							<br />
							<br />
							<input type="text" class="formInput formInputSubject" placeholder="Subject" name="subject" />
							<br />
							<br />
							<textarea class="formInput formInputMessage" placeholder="Message" name="message"> </textarea>
							<br />
							<br />
							<input type="submit" class="submit" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
	

	<span style="display:none">
		<?php 
			if ($_POST['message']) {
				$name    = $_POST["name"];
				$email   = $_POST["email"];
				$subject = $_POST["subject"];
				$message = $_POST["message"];

				$headers = 'From: '. $email . "\r\n" .
				    'Reply-To: ' . $email . "\r\n" .
				    'X-Mailer: PHP/' . phpversion();

				mail("sauravkadavath@berkeley.edu", $subject, $message, $headers);
			}
		?>
	</span>


</html>