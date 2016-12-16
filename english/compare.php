<?php 
ob_start();
?>
<body class="compare">
	<?php include 'include/nav.php'; ?>

	<!--Breadcrumb Section-->
	<section class="breadcrumb-box" data-parallax="scroll" data-image-src="../assets/img/breadcrumb-bg.jpg">
		<div class="inner-container container">
			<h1>Compare Properties</h1>
			<div class="breadcrumb">
				<ul class="list-inline">
					<li class="home"><a href="../index.html">Home</a></li>
					<li><a href="#">Compare Properties</a></li>
				</ul>
			</div>
		</div>
	</section>
	<!--Breadcrumb Section-->

	<section class="main-container container">
		<div class="compare-main-container clearfix">
			<div class="col-xs-5 col-sm-5 col-md-3 title-col">
				<div class="img-container"></div>
				<div class="basic-details">
					<div class="title">Basic Details</div>
					<ul>
						<li>Title</li>
						<li>Location</li>
						<li>Property ID</li>
						<li>Property Status</li>
						<li>Property Type</li>
						<li>Land Size</li>
						<li>Build Size</li>
						<li>Bedroom</li>
						<li>Bathroom</li>
						<li>Garage</li>
					</ul>
				</div>
				<div class="price-details">
					<div class="title">Price Details</div>
					<ul>
						<li>Price</li>
						<li>Price Type</li>
					</ul>
				</div>
				<div class="feature-list">
					<div class="title">Features</div>
					<ul>
						<li>Attic</li>
						<li>Gas heat</li>
						<li>Ocean view</li>
						<li>Wine cellar</li>
						<li>Basketball court</li>
						<li>Gym</li>
						<li>Pound</li>
						<li>Fireplace</li>
						<li>Lake view</li>
						<li>Pool</li>
						<li>Back yard</li>
						<li>Front yard</li>
						<li>Fenced yard</li>
						<li>Sprinklers</li>
						<li>Washer and dryer</li>
						<li>Deck</li>
						<li>Balcony</li>
						<li>Laundry</li>
						<li>Concierge</li>
						<li>Doorman</li>
						<li>Private space</li>
						<li>Storage</li>
						<li>Recreation</li>
						<li>Roof Deck</li>
					</ul>
				</div>
				<div class="neighborhood">
					<div class="title">Neighborhood</div>
				</div>

			</div>
			<div class="col-xs-7 col-sm-7 col-md-9 content-col">
				<div id="property-compare-slider">
					<div class="items">
						<div class="img-container">
							<a href="#">
								<img src="../assets/img/property/1.jpg" alt="Image of Property">
							</a>
						</div>
						<div class="basic-details">
							<div class="title">Basic Details</div>
							<ul>
								<li class="highlighted">Golden Family House</li>
								<li>4600 Cresthaven Drive, Colleyvile</li>
								<li>#25456</li>
								<li>For Rent</li>
								<li>Apartment</li>
								<li>350 m2</li>
								<li>150 m2</li>
								<li>4</li>
								<li>2</li>
								<li>2</li>
							</ul>
						</div>
						<div class="price-details">
							<div class="title">Price Details</div>
							<ul>
								<li class="highlighted">$610,500</li>
								<li>Per Month</li>
							</ul>
						</div>
						<div class="feature-list">
							<div class="title">Features</div>
							<ul>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
							</ul>
						</div>
						<div class="neighborhood">
							<div class="title">Neighborhood</div>
							<div class="neighborhood-container">
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Shopping Center</button>
									<button type="button" class="btn btn-default value">10 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Bus Station</button>
									<button type="button" class="btn btn-default value">2 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-male"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">School</button>
									<button type="button" class="btn btn-default value">5 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Hospital</button>
									<button type="button" class="btn btn-default value">15 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-train"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">City Center</button>
									<button type="button" class="btn btn-default value">20 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-bicycle"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Airport</button>
									<button type="button" class="btn btn-default value">20 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-train"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="items">
						<div class="img-container">
							<a href="#">
								<img src="../assets/img/property/2.jpg" alt="Image of Property">
							</a>
						</div>
						<div class="basic-details">
							<div class="title">Basic Details</div>
							<ul>
								<li class="highlighted">Single Family Home</li>
								<li>Garrett St, Enumclaw, WA 98022</li>
								<li>#25438</li>
								<li>For Sale</li>
								<li>Apartment</li>
								<li>420 m2</li>
								<li>130 m2</li>
								<li>3</li>
								<li>5</li>
								<li>1</li>
							</ul>
						</div>
						<div class="price-details">
							<div class="title">Price Details</div>
							<ul>
								<li class="highlighted">$849,999</li>
								<li>-</li>
							</ul>
						</div>
						<div class="feature-list">
							<div class="title">Features</div>
							<ul>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
							</ul>
						</div>
						<div class="neighborhood">
							<div class="title">Neighborhood</div>
							<div class="neighborhood-container">
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Shopping Center</button>
									<button type="button" class="btn btn-default value">12 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Bus Station</button>
									<button type="button" class="btn btn-default value">5 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-train"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="items">
						<div class="img-container">
							<a href="#">
								<img src="../assets/img/property/3.jpg" alt="Image of Property">
							</a>
						</div>
						<div class="basic-details">
							<div class="title">Basic Details</div>
							<ul>
								<li class="highlighted">Seaside Villa </li>
								<li>19th Ave SE, Bellevue, WA 98006</li>
								<li>#25350</li>
								<li>For Sale</li>
								<li>Villa</li>
								<li>530 m2</li>
								<li>250 m2</li>
								<li>5</li>
								<li>3</li>
								<li>3</li>
							</ul>
						</div>
						<div class="price-details">
							<div class="title">Price Details</div>
							<ul>
								<li class="highlighted">$750,000</li>
								<li>-</li>
							</ul>
						</div>
						<div class="feature-list">
							<div class="title">Features</div>
							<ul>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><iclass="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
							</ul>
						</div>
						<div class="neighborhood">
							<div class="title">Neighborhood</div>
							<div class="neighborhood-container">
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Shopping Center</button>
									<button type="button" class="btn btn-default value">5 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-male"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Bus Station</button>
									<button type="button" class="btn btn-default value">10 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Hospital</button>
									<button type="button" class="btn btn-default value">7 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">City Center</button>
									<button type="button" class="btn btn-default value">25 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="items">
						<div class="img-container">
							<a href="#">
								<img src="../assets/img/property/4.jpg" alt="Image of Property">
							</a>
						</div>
						<div class="basic-details">
							<div class="title">Basic Details</div>
							<ul>
								<li class="highlighted">Furnished Apartment</li>
								<li>Wildwood Blvd SW, Issaquah, WA 98027</li>
								<li>#25320</li>
								<li>For Rent</li>
								<li>Apartment</li>
								<li>100 m2</li>
								<li>90 m2</li>
								<li>2</li>
								<li>1</li>
								<li>1</li>
							</ul>
						</div>
						<div class="price-details">
							<div class="title">Price Details</div>
							<ul>
								<li class="highlighted">$15,000</li>
								<li>Per Week</li>
							</ul>
						</div>
						<div class="feature-list">
							<div class="title">Features</div>
							<ul>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i></i></li>
							</ul>
						</div>
						<div class="neighborhood">
							<div class="title">Neighborhood</div>
							<div class="neighborhood-container">
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Shopping Center</button>
									<button type="button" class="btn btn-default value">15 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-train"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Bus Station</button>
									<button type="button" class="btn btn-default value">10 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-male"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">School</button>
									<button type="button" class="btn btn-default value">18 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">City Center</button>
									<button type="button" class="btn btn-default value">10 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-bicycle"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="items">
						<div class="img-container">
							<a href="#">
								<img src="../assets/img/property/5.jpg" alt="Image of Property">
							</a>
						</div>
						<div class="basic-details">
							<div class="title">Basic Details</div>
							<ul>
								<li class="highlighted">Luxury House</li>
								<li>192nd St, SeaTac, WA 98148</li>
								<li>#24350</li>
								<li>For Sale</li>
								<li>House</li>
								<li>350 m2</li>
								<li>250 m2</li>
								<li>5</li>
								<li>3</li>
								<li>2</li>
							</ul>
						</div>
						<div class="price-details">
							<div class="title">Price Details</div>
							<ul>
								<li class="highlighted">$935,000</li>
								<li>-</li>
							</ul>
						</div>
						<div class="feature-list">
							<div class="title">Features</div>
							<ul>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
							</ul>
						</div>
						<div class="neighborhood">
							<div class="title">Neighborhood</div>
							<div class="neighborhood-container">
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Bus Station</button>
									<button type="button" class="btn btn-default value">2 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">School</button>
									<button type="button" class="btn btn-default value">10 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-male"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="items">
						<div class="img-container">
							<a href="#">
								<img src="../assets/img/property/6.jpg" alt="Image of Property">
							</a>
						</div>
						<div class="basic-details">
							<div class="title">Basic Details</div>
							<ul>
								<li class="highlighted">Luxury Villa</li>
								<li>Lupine Dr, Moses Lake, WA 98837</li>
								<li>#25310</li>
								<li>For Sale</li>
								<li>Villa</li>
								<li>300 m2</li>
								<li>230 m2</li>
								<li>4</li>
								<li>3</li>
								<li>3</li>
							</ul>
						</div>
						<div class="price-details">
							<div class="title">Price Details</div>
							<ul>
								<li class="highlighted">$830,000</li>
								<li>-</li>
							</ul>
						</div>
						<div class="feature-list">
							<div class="title">Features</div>
							<ul>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i></i></li>
								<li><i class="active"></i></li>
								<li><i class="active"></i></li>
							</ul>
						</div>
						<div class="neighborhood">
							<div class="title">Neighborhood</div>
							<div class="neighborhood-container">
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Shopping Center</button>
									<button type="button" class="btn btn-default value">20 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Hospital</button>
									<button type="button" class="btn btn-default value">14 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-male"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">City Center</button>
									<button type="button" class="btn btn-default value">10 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
								</div>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default title">Airport</button>
									<button type="button" class="btn btn-default value">30 min</button>
									<button type="button" class="btn btn-default icon"><i class="fa fa-train"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- JS Include Section
	<script type="text/javascript" src="../assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/helper.js"></script>
	<script type="text/javascript" src="../assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="../assets/js/template.js"></script>
	<script type="text/javascript" src="../assets/js/style-selector.js"></script>-->
	<!-- End of JS Include Section -->

<?php		  
$content = ob_get_contents();
ob_end_clean();
include 'include/header.php';
print $content;
include 'include/footer.php'; 
?>