<?php 
ob_start();
?>
<body class="contact-us">
	<?php include 'include/nav.php'; ?>

	<!--Breadcrumb Section-->
	<section class="breadcrumb-box">
		<div id="contact-map"></div>
		<div class="inner-container container">
			<h1>Contact Us</h1>
			<div class="breadcrumb">
				<ul class="list-inline">
					<li class="home"><a href="../index.html">Home</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</section>
	<!--Breadcrumb Section-->

	<section class="main-container container">
		<div class="descriptive-section">
			<h2 class="hsq-heading type-2">How to Contact</h2>
			<div class="content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda beatae consequuntur doloremque eos eum ex fugit iste labore mollitia necessitatibus odio officiis optio perferendis porro quae qui quia quod reiciendis sit temporibus ullam unde ut vel veniam, vero voluptatum! Dignissimos fugiat iusto numquam. Ad distinctio earum et harum maiores officiis perferendis quia tenetur? Aspernatur dolore doloremque error et, ex hic illo laborum minus modi praesentium, quasi quos repellat soluta!
			</div>
		</div>
		<div class="contact-info clearfix">
			<div class="contact-info-box col-md-6 col-lg-4">
				<div class="inner-container">
					<i class="fa fa-envelope-o"></i>
					<div class="value">info@RavisTheme.com</div>
				</div>
			</div>
			<div class="contact-info-box col-md-6 col-lg-4">
				<div class="inner-container">
					<i class="fa fa-phone"></i>
					<div class="value">0185 26 37 48 59</div>
				</div>
			</div>
			<div class="contact-info-box col-md-push-2 col-md-6 col-lg-push-0 col-lg-4">
				<div class="inner-container">
					<i class="fa fa-map-marker"></i>
					<div class="value">133 Elizabeth street, Sydney 4000, Australia</div>
				</div>
			</div>
		</div>
		<div class="contact-form">
			<div class="row">
				<div class="col-sm-6 field-box">
					<input type="text" placeholder="Name *">
				</div>
				<div class="col-sm-6 field-box">
					<input type="email" placeholder="Email *">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 field-box">
					<input type="text" placeholder="Phone">
				</div>
				<div class="col-sm-6 field-box">
					<input type="url" placeholder="Website">
				</div>
			</div>
			<div class="row message">
				<textarea id="message">Your Message *</textarea>
			</div>
			<div class="row button-box">
				<button class="btn">Submit</button>
			</div>
		</div>
	</section>

	<!--Top Footer-->
	<section id="top-footer">
		<div class="inner-container container">
			<div class="widget-box col-md-6">
				<h4>Home Square Newsletter</h4>
				<div class="desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cum in, mollitia nemo, non nostrum perferendis porro qui quisquam rem sit, tempora! Beatae cupiditate esse id itaque perspiciatis quasi sed.
				</div>
			</div>
			<div class="widget-box col-md-6">
				<h4>Get our free newsletter</h4>
				<form action="#" id="newsletter-form">
					<div class="input-container">
						<input type="text" placeholder="Your Email">
					</div>
					<button class="btn">Submit</button>
				</form>
			</div>
		</div>
	</section>
	<!--End of Top Footer-->

	<footer id="main-footer">
		<div class="inner-container container">
			<div id="go-up" class="fa fa-angle-double-up"></div>
			<div class="top-section clearfix">
				<div class="col-md-4 widgets">
					<div class="logo-main-box">
						<span class="bold">Home</span>
						<span> S</span>
						<div class="logo"></div>
						<span>uare</span>
					</div>
					<div class="desc">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolore doloremque dolores enim et ex excepturi exercitationem facere harum illum in., iusto magnam non nostrum numquam odio placeat possimus praesentium quae quo recusandae.
					</div>
				</div>
				<div class="col-md-4 widgets">
					<h4 class="title">Tags</h4>
					<ul class="list-inline tag-list">
						<li><a href="#">Apartment</a></li>
						<li><a href="#">Villa</a></li>
						<li><a href="#">Office For Rent</a></li>
						<li><a href="#">Office</a></li>
						<li><a href="#">Vacation Rental</a></li>
						<li><a href="#">Villa For Sale</a></li>
						<li><a href="#">Luxury Houses</a></li>
					</ul>
				</div>
				<div class="col-md-4 widgets">
					<h4 class="title">Get in touch with us</h4>
					<ul class="contact-info">
						<li><i class="fa fa-map-marker"></i>133 Elizabeth street, Sydney 4000, Australia</li>
						<li class="phone"><i class="fa fa-phone"></i>0185 26 37 48 59</li>
						<li><i class="fa fa-envelope"></i>info@RavisTheme.com</li>
					</ul>
				</div>
			</div>
			<div class="bott-section .clearfix">
				<div class="col-md-6 copy-right">
					Copyright by <a href="http://ravistheme.com" target="_blank">RavisTheme</a>. All rights reserved.
				</div>
				<div class="col-md-6 social-icons">
					<ul class="list-inline">
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-skype"></a></li>
						<li><a href="#" class="fa fa-google-plus"></a></li>
						<li><a href="#" class="fa fa-youtube"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- JS Include Section 
	<script type="text/javascript" src="../assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/helper.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="../assets/js/template.js"></script> -->
	<!-- End of JS Include Section -->

	<script type="text/javascript">
	/*
		function initialize() {
			var myLatLng = new google.maps.LatLng(40.6700, -73.9400);
			var mapOptions = {
				zoom: 12,
				center: myLatLng,
				// This is where you would paste any style found on Snazzy Maps.
				styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]},{featureType:"water",elementType:"labels",stylers:[{visibility:"off"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}],

				// Extra options
				scrollwheel: false,
				mapTypeControl: false,
				panControl: false,
				zoomControlOptions: {
					style   : google.maps.ZoomControlStyle.SMALL,
					position: google.maps.ControlPosition.LEFT_BOTTOM
				}
			}
			var map = new google.maps.Map(document.getElementById('contact-map'),mapOptions);

			var image = '../assets/img/marker.png';

			var beachMarker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				icon: image
			});
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		*/
	</script>
<!--	<script type="text/javascript" src="../assets/js/style-selector.js"></script> -->
<?php		  
$content = ob_get_contents();
ob_end_clean();
include 'include/header.php';
print $content;
include 'include/footer.php'; 
?>