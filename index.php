<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['send'])) {

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$number = mysqli_real_escape_string($conn, $_POST['number']);
	$msg = mysqli_real_escape_string($conn, $_POST['message']);

	$select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

	if (mysqli_num_rows($select_message) > 1) {
		$message[] = 'Message sent already!';
		header("Refresh:3; url=index.php");
	}
	else {
		mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
		$message[] = 'Message sent successfully!';
		header("Refresh:3; url=index.php");
	}

}

?>

<!DOCTYPE html>
<html>
<head>

	<link rel="icon" type="text/css" href="img/logotransparent.png">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Albion Morina Portfolio</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="texy/css" href="css/services.css">

	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  	<link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

</head>
<body>
	
	<!--------header---->
	<header>
		<a href="#home" class="logo"><img src="img/logotransparent.png" style="height:70px; width:120px;"></a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navlist">
			<li><a href="#home">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#portfolio">Portfolio</a></li>
			<li><a href="#service">Service</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		<a href="img/albionmorinacv.pdf" download class="top-btn">Download CV</a>
	</header>

	<!--------home---->
	<section class="home" id="home">

		<div class="home-text">
		
		<?php

if (isset($message)) {
	foreach ($message as $message) {
		echo '
						<div class="message">
							<span>' . $message . '</span>
							<i class="fas fa-times" onclick="this.parentElement.remove();"></i>
						</div>';
	}
}

?>
		
			<br>
			<h3>Hi, I'm</h3>
			<h1>Albion Morina</h1>
			<h5>A Creative and Hardworking Developer from <br> <span> Malishevë, Republic of Kosovo</span></h5>
			<p>I'm creative developer based in Malishevë, <br> I'm very passionate and dedicated to my work.</p>
			<div class="social">
				<a href="#"><i class='bx bxl-facebook'></i></a>
				<a href="#"><i class='bx bxl-twitter' ></i></a>
				<a href="#"><i class='bx bxl-linkedin' ></i></a>
				<a href="#"><i class='bx bxl-instagram' ></i></a>
				<a href="#"><i class='bx bxl-whatsapp' ></i></a>
				<a href="#"><i class='bx bxl-gmail' ></i></a>
			</div>
			<a href="#" class="top-btn">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Software Developer &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
		</div>

		<div class="home-img">
			<img src="img/albionmorinaa.png" style="height: 420; width: 370px;">
		</div>
	</section>

	<!--------sub service---->
	<section class="sub-service">
		<div class="items">
			<div class="sub-box">
				<div class="sub-img">
					<img src="img/target.svg">
				</div>
				<h3>Albion Morina</h3>
				<p>I am Albion Morina, 24 years old. I am from Malisheve Municipality, Republic of Kosovo. Communicative, ability to adapt to different work environments and culture...</p>
			</div>

			<div class="sub-box">
				<div class="sub-img">
					<img src="img/brush.svg">
				</div>
				<h3>Graduated Dev</h3>
				<p>BSc in Computer Science graduated with exceptional analytical skills, seeking the role of Software Developer. Graduated at the University of Prizren, respectively in Software Design.</p>
			</div>

			<div class="sub-box">
				<div class="sub-img">
					<img src="img/energy.svg">
				</div>
				<h3>Software Developer</h3>
				<p>Talented individual with in-depth knowledge of designing and development tools and coding languages. Constantly challengin myself with new technologies and techniques.</p>
			</div>
		</div>
	</section>

	<!--------About---->
	<section class="about" id="about">
		<div class="about-img">
			<br>
			<br>
			<br>
			<br>
			<img src="img/about.jpg">
		</div>

		<div class="about-text">
			<br>
			<br>
			<br>
			<h3>I'm a Software Developer</h3>
			<p>BSc in Computer Science graduated with exceptional analytical skills, seeking the role of Software Developer. Talented individual with in-depth knowledge of designing and development tools and coding languages. Interesting in this position where I can utilise my understanding of coding and software development to efficiently fulfil the requirements of clients and contributing towards augmenting the reputation of the company. Constantly challenging myself with new technologies and techniques.</p>
			<a href="#" class="btn">Hire Me</a>
		</div>
	</section>

	<!--------portfolio---->
	<section class="portfolio" id="portfolio">
		<div class="heading">
				
				<br>
				<br>
			
			<h3>Portfolio</h3>
			<p>Here are some of my projects. If you want to explore them just click in the name of the project and it will directly link to my github page where you can download and use project for free.</p>
		</div>

		<div class="portfolio-content">
			
			<div class="col">
				<img src="img/work1.png">
				<div class="layer">
					<a href="https://github.com/Albion007/Amorii7Company"><h3>Amorii7 Company</h3></a>
				</div>
			</div>

			<div class="col">
				<img src="img/work2.webp">
				<div class="layer">
					<a href="https://github.com/Albion007/my-portfolio"><h3>My portfolio with react, sanity and tailwind.</h3></a>
				</div>
			</div>

			<div class="col">
				<img src="img/work3.jpg">
				<div class="layer">
					<a href="https://github.com/Albion007/projektirestuaranti"><h3>Valencia Restaurant</h3></a>
				</div>
			</div>

			<div class="col">
				<img src="img/work4.png">
				<div class="layer">
					<a href="https://github.com/Albion007/expenses_app"><h3>Expenses App</h3></a>
				</div>
			</div>
		</div>
		
	</section>

	<!--------service---->
	<section class="service" id="service">
			<div class="heading">
				<h3>Services</h3>
				<p>A creative company specialized in brand strategy and digital creation.</p>
			</div>

				<div class="content">
					<div class="serviceBx">
						<img src="img/img1.png" style="height: 200px; width: 200px;">
						<h2>Web Design</h2>
						<p>Design is not just what it looks like and feels like, design is how it works. Be An Effective Communicator.</p>
						 <a href="#"><span class="read-more-btn1" style="color:#9095BF">Read more...</span></a>
					</div>
					<div class="serviceBx">
						<img src="img/logo1.png" style="height: 200px; width: 200px;">
						<h2>Branding Design</h2>
						<p>Design is the best silent ambassador of your. when it comes to branding, we know that design matters.</p>
						<a href="#"><span class="read-more-btn1" style="color:#9095BF">Read more...</span></a>
					</div>
					<div class="serviceBx">
						<img src="img/img3.jpg" style="height: 200px; width: 200px;">
						<h2>Web Development</h2>
						<p>Intuitive design is how we give the user new superpowers. Learn the Basics of UI and UX. Learn the Basics of SEO.</p>
						<a href="#"><span class="read-more-btn1" style="color:#9095BF">Read more...</span></a>
					</div>
					<div class="serviceBx">
						<img src="img/img4.png" style="height: 200px; width: 200px;">
						<h2>e-Commerce Solutions</h2>
						<p>Amazing things will happen when you listen to the consumer.</p>
						<a href="#"><span class="read-more-btn1" style="color:#9095BF">Read more...</span></a>
					</div>
					<div class="serviceBx">
						<img src="img/img5.png" style="height: 200px; width: 200px;">
						<h2>Graphics Design</h2>
						<p>Design is a formal response to a strategic question.</p>
						<a href="#"><span class="read-more-btn1" style="color:#9095BF">Read more...</span></a>
					</div>
					<div class="serviceBx">
						<img src="img/img6.jpg" style="height: 200px; width: 200px;">
						<h2>Social Marketing</h2>
						<p>The strength of your social media is determined by the strength of your Content.</p>
						<a href="#"><span class="read-more-btn1" style="color:#9095BF">Read more...</span></a>
					</div>
				</div>

	</section>
	
	<!------contact -->
	<section class="contact" id="contact">

		<div class="heading">

			<br>
			<br>

			<h3>Contact me</h3>
			<p>For all enquiries, please email me using the form below.</p>
			<br>
		</div>
		
		<form action="" method="post">
   		<div class="flex">
	  		<input data-aos="fade-right" type="text" name="name" placeholder="Your name" class="box" required>
	  		<input data-aos="fade-left" type="email" name="email" placeholder="Your email" class="box" required>
   		</div>
   			<input data-aos="fade-up" type="number" min="0" name="number" placeholder="Your number" class="box" required>
   			<textarea data-aos="fade-up" name="message" class="box" required placeholder="Your message" cols="30" rows="10"></textarea>
   			<input type="submit" data-aos="zoom-in" value="Send" name="send" class="top-btn">
		</form>

	</section>

	<!-------footer------>
	<div class="ends">
		<p>Made by Albion Morina © <?php echo date('Y'); ?></p>
	</div>

	<script src="https://unpkg.com/scrollreveal"></script>

	<!--------Link to js---->
	<script type="text/javascript" src="js/script.js"></script>
	
</body>
</html>