<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Star Hotels Helps you Discover The Perfect Balance
	Of Hospitality, Luxury And
	Comfort.">
	<title>WHBMS</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/global-header.css">
	<link rel="stylesheet" href="./assets/css/global-footer.css">
	<link rel="stylesheet" href="./assets/css/accesibility.css">
	<link rel="stylesheet" href="./assets/css/index.css">
	<link rel="shortcut icon" href="./assets/img/favicon.webp" type="image/x-icon">
</head>
<body class="scroll-bar">
	<div id="loader">
		<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
			<path fill="#d4af37" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
				<animateTransform 
					attributeName="transform" 
					attributeType="XML" 
					type="rotate"
					dur="1s" 
					from="0 50 50"
					to="360 50 50" 
					repeatCount="indefinite" />
		</path>
		</svg>
	</div>
   <header>
      <div class="header-container">
         <nav class="header-nav-bar">
				<div class="header-nav-logo">
					<a href="index.html">
					<img src="./assets/img/whbms.png"
							alt="whbmslogo">
					</a>
				</div>
				<ul class="header-nav-lists">
						<li class="header-nav-list">
							<a class="header-nav-link header-active" href="index.php">Home</a>
						</li>
						<li class="header-nav-list"><a class="header-nav-link"
								href="#">Venuess</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="facilities.html">Services</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="contact-page.html">Contact Us</a></li>
						<li class="header-nav-list"><a class="header-btn header-btn-custom" href="index.php">LOGIN</a></li>
					</ul>
            
            <div class="header-hamburger-icon">
               <div class="header-hamburger-line-1"></div>
               <div class="header-hamburger-line-2"></div>
               <div class="header-hamburger-line-3"></div>
            </div>
         </nav>
      </div>

      </div>
	</header>

	<div class="jumbotron-container">
		<div class="jumbotron-left">
			<h2 class="jumbotron-header">Plan Your Dream Wedding <br> with Us</h2>
			<p>Discover the perfect venue for your special day, <br>tailored to your style and preferences.</p>
			<a href="#" class="btn btn-fill btn-large">Venues</a>
		</div>
		<div class="jumbotron-right">
        <form method="post" action="signup.php" class="jumbotron-form">
        <h3>Create a New Account</h3><br>
        <label class="hide" for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username" required><br>
        <label class="hide" for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required><br>
        <button type="submit" class="rates">SIGN UP</button>
		<p> Already have an Account? <a href="./index.php" > Login</a>
    </form>

		</div>
	</div>

	<!-- Enjoy your stay in our hotel -->
	<div class="enjoy-container">
		<div class="enjoy-header">
			<h2 class="enjoy-heading">Welcome to <br>Wedding Hall Management System</h2>
			<hr class="horizontal">
			<p>Choose from a variety of stunning venues tailored to your preferences and guest count.</p>
		</div>
	<div class="enjoy-services">
		<div class="first-col">
			<div class="upper">
					<span>
						<img src="./assets/img/clock.svg" alt="clock icon" class="enjoy__clock-icon">
					</span>
					<h3>Venue Selection</h3>
					<p>You have access to 24-hours a day room service at our hotel.</p>
			</div>
			<div class="lower">
				<span>
					<img src="./assets/img/database.svg" alt="fitness icon" class="enjoy__fitness-icon">
				</span>
				<h3>Catering Services</h3>
				<p>Indulge your guests with delicious and customizable catering options, from appetizers to desserts.</p>
			</div>
			
		</div>
		<div class="sec-col">
				<div class="upper">
					<span>
						<img src="./assets/img/coffee.svg" alt="coffee icon" class="enjoy__coffee-icon">
					</span>
						<h3>Restaurant and Bars</h3>
					<p>You have access to the world state of art restaurants and bars at our hotel</p>
				</div>
				<div class="lower">
					<span>
						<img src="./assets/img/wifi.svg" alt="wifi icon" class="enjoy__wifi-icon">
					</span>
						<h3>Decorations</h3>
						<p>Transform your venue into a magical setting with our expert decoration services, tailored to your theme and style.</p>
				</div>
		</div>
		<div class="third-col cont">
			<img src="./assets/img/ant-design_play-circle-filled.svg" alt="video play icon" class="enjoy__play-icon">
			<img src="./assets/img/video link.webp" alt="women in swimming pool" class="third-col-video">
		</div>
	</div>

	</div>
	<section class="special-offers">
		<!-- Top Text -->
		<div class="page-header-container">

		  <h2 class="page-header">Simplicity is the ultimate <br>Watchword</h2>
	
            
            </div>
			<div class="row center-lg">
				<div class="col image-col right-marg">
					<img src="assets/img/hotel-1.webp" alt="room-image" class="small-image">
					<img src="assets/img/hotel-2.webp" alt="room-image" class="small-image">
					<img src="assets/img/hotel-3.webp" alt="room-image" class="small-image img-hide">
					<div class="side-by-side-container">
						<div class="large-image-container">
							<img src="assets/img/hotel-4-large.webp" alt="room-image-large" class="large-image">
						</div>
						<section class="stacked-image-container">
						  <div><img src="assets/img/hotel-5.webp" alt="room-image" class="small-image"></div>
						  <div><img src="assets/img/hotel-6.webp" alt="room-image" class="small-image"></div>
						</section>
					</div>
				</div>
				<div class="col">
					<p class="offers-sub-title">
							The fact that we are run by hospitality professionals<br>and equipped with the world best interior designers <br> is why our Halls and Banquets are second to none in <br>the Country
					</p>
					<ul class="offers-list">
						<li>
							<div>
								<img src="assets/img/check-square.svg" alt="tick" class="list-icon">
								<p class="list-text">Shah Jahan Hall</p>
							</div>
						</li>
						<li>
							<div>
								<img src="assets/img/check-square.svg" alt="tick" class="list-icon">
								<p class="list-text">Mugahal e Azam Hall</p>
							</div>
						</li>
						<li>
							<div>
								<img src="assets/img/check-square.svg" alt="tick" class="list-icon">
								<p class="list-text">Anarkali Hall</p>
							</div>
						</li>
					</ul>
					<a href="https://timbu.com/search?query=hotel" class="btn btn-fill btn-large centered">Book Now</a>
				</div>
			</div>
		</section>

	<!-- Client Reviews -->
	<div class="review-container">
		<div class="review-header">
			<h2 class="review-title">
				Client Reviews
			</h2>
			<hr class="horizontal">
			<p class="">We are very proud of the services we offer to our customers.<br>Read every word from our happy customers.</p>
		</div>
		<div class="cards-container">
				<div class="card">
					<img src="./assets/img/customer1.webp" alt="" class="card-avi">
					<h2 class="card-title">
							Ghulam Ishaq Khan
					</h2>
					<h3 class="card-subtitle">
						DI Khan, Punjab.
					</h3>
					<p class="card-desc">Words can't explain the kind of treatment I received from the management of WBHMS. They are the best in the country.</p>
				</div>
				<div class="card">
					<img src="./assets/img/customer2.webp" alt="" class="card-avi">
					<h2 class="card-title">
							Aslam Raisani
					</h2>
					<h3 class="card-subtitle">
							Multan, Punjab.
					</h3>
					<p class="card-desc">Star Banquets makes you feel the best room quality that makes you feel the comfort of a home.</p>
				</div>
				<div class="card">
					<img 
						src="./assets/img/customer3.webp" 
						alt="" 
						class="card-avi">
					<h2 class="card-title">
						Akbar Khan
					</h2>
					<h3 class="card-subtitle">
						Lodhran, Punjab.
					</h3>
					<p class="card-desc">My Family and I are very happy when we visit into Star Banquets. They are by far the best in the universe.</p>
				</div>
				

			</div>
	</div>
	<footer class="footer">
		<div class="footer-container">
			<nav class="footer-nav">
				<div class="footer-description">
					<h3 class="footer-description-title">WBHMS</h3>
					<p>Your Perfect Venue Solution</p>
				</div>
				<div class="footer-contact-us">
					<h3 class="footer-description-title">Contact Us</h3>
					<p class="footer-description-detail"> 
						<img src="./assets/img/map-pin.svg" class="footer-description-icon" alt="star hotel location">

						<span>23, Wedding Avenue, Bahawalpur, Country</span>
					<p class="footer-description-detail">
						<img src="./assets/img/phone.svg" class="footer-description-icon" alt="star hotels phone number"> 
						<span>
					 08185956620</span></p>
					<p class="footer-description-detail">
						<img src="./assets/img/mail.svg" class="footer-description-icon" alt="star hotels email">
						<span>support@wbhms.com</span> </p>
				</div>
				<div class="footer-follow-us">
					<h3 class="footer-description-title">Follow Us</h3>
					<ul class="footer-follow-us-lists">
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/facebook.svg" alt="star hotels facebook page">
							</a>
						</li>
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/twitter.svg" alt="star hotels twitter page">
							</a>
						</li>
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/instagram.svg" alt="star hotels instagram page">
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		
	</footer>
	<script defer async>
		(() => {
			const loader = document.getElementById('loader');
			const scrollBar = document.getElementsByClassName('scroll-bar')[0];
			window.addEventListener('load', () => {
				loader.classList.add('none');
				scrollBar.classList.remove('scroll-bar')
			});
		})();
	</script>
	<script  defer async src="assets/js/toggleHamburger.js"></script>
</body>
</html>