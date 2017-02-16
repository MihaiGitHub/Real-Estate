<?php 
ob_start();

include 'include/dbconnect.php';

$stmt = $objDb->prepare('SELECT * FROM properties WHERE id = :id');
$result = $stmt->execute(array('id' => $_GET['id']));
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$row = $stmt->fetch();

$features_array = explode(",",$row['features']);

// Query images
$stmtImg = $objDb->prepare('SELECT url FROM properties_images WHERE pid = :pid');
$resultImg = $stmtImg->execute(array('pid' => $_GET['id']));
$stmtImg->setFetchMode(PDO::FETCH_ASSOC);

// Query images2
$stmtImg2 = $objDb->prepare('SELECT url FROM properties_images WHERE pid = :pid');
$resultImg2 = $stmtImg2->execute(array('pid' => $_GET['id']));
$stmtImg2->setFetchMode(PDO::FETCH_ASSOC);
?>
<body class="gallery four-cols">
	<?php include 'include/nav.php'; ?>
	
	
	
	<section id="property-slider-section">
		<div class="title-box container">
			<h1><?php echo $row['title']; ?></h1>
			<div class="location">4600 Cresthaven Drive, Colleyvile</div>
		</div>
		<!-- Main Slider -->
		<div id="property-main-slider">
			<?php while($rowImg = $stmtImg->fetch()){ ?>
				<div class="items">
					<div class="img-container" data-bg-img="dashboard/<?php echo $rowImg['url']; ?>"></div><!-- Change the URL section based on your image\'s name -->
				</div>
			<?php } ?>
			<!--
			<div class="items">
				<div class="img-container" data-bg-img="../assets/img/slider/1.jpg"></div>
			</div>
			<div class="items">
				<div class="img-container" data-bg-img="../assets/img/slider/2.jpg"></div>
			</div>
			<div class="items">
				<div class="img-container" data-bg-img="../assets/img/slider/3.jpg"></div>
			</div>
			<div class="items">
				<div class="img-container" data-bg-img="../assets/img/slider/4.jpg"></div>
			</div>
			<div class="items">
				<div class="img-container" data-bg-img="../assets/img/slider/5.jpg"></div>
			</div>
			<div class="items">
				<div class="img-container" data-bg-img="../assets/img/slider/6.jpg"></div>
			</div>
			-->
		</div>
		<!-- End of Main Slider -->



		<?php /* working
		<div id="property-thumb-slider" class="container">
		<?php while($rowImg = $stmtImg->fetch()){ ?>

			<div class="items">
				<div class="img-container" data-bg-img="dashboard/<?php echo $rowImg['url']; ?>"></div><!-- Change the URL section based on your image\'s name -->
			</div>

		<?php } ?>
			
		</div>
		*/ ?>
		
	<div id="property-thumb-slider" class="container image-main-boxx">
	
		<?php while($rowImg2 = $stmtImg2->fetch()){ ?>

			<div class="items">
				<a href="dashboard/<?php echo $rowImg2['url']; ?>" class="more-details">
					<div class="img-container" data-bg-img="dashboard/<?php echo $rowImg2['url']; ?>"></div><!-- Change the URL section based on your image\'s name -->
				</a>
			</div>

		<?php } ?>
			
	</div>
		
		
	</section>

<section class="main-container container">
		<div class="content-box col-sm-8">
			<div class="t-sec clearfix">
				<div class="col-md-4 left-sec">
					<!--Highlight Section-->
					<div class="highlight-container">
						<div class="highlight-details-box">
							<div class="value"><?php echo $row['land_area']; ?></div>
							<div class="text">Land Size</div>
							<div class="unit">m2</div>
						</div>
						<div class="highlight-details-box">
							<div class="value">345</div>
							<div class="text">Build Size</div>
							<div class="unit">m2</div>
						</div>
						<div class="highlight-details-box">
							<div class="value"><?php echo $row['bedrooms']; ?></div>
							<div class="text">Bedroom</div>
						</div>
						<div class="highlight-details-box">
							<div class="value"><?php echo $row['bathrooms']; ?></div>
							<div class="text">Bathroom</div>
						</div>
					</div>

					<!-- Property Map 
					<div class="property-details-map-container">
						<div id="property-details-map"></div>
					</div>
-->
					<div class="information-box">
						<h3>Attachments</h3>
						<div class="box-content">
							<div class="attachment-container">
								<a href="#" class="attachment-box">
									<div class="size">3.2 <div class="unit">mb</div></div>
									<div class="title">PDF Brochure</div>
									<div class="dl-times"><i class="fa fa-download"></i>1350 times</div>
								</a>
								<a href="#" class="attachment-box">
									<div class="size">5.2 <div class="unit">mb</div></div>
									<div class="title">Contract Sample</div>
									<div class="dl-times"><i class="fa fa-download"></i>1100 times</div>
								</a>
								<a href="#" class="attachment-box">
									<div class="size">6.4 <div class="unit">mb</div></div>
									<div class="title">Extra Information</div>
									<div class="dl-times"><i class="fa fa-download"></i>854 times</div>
								</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-8 right-sec">
					<div class="information-box">
						<div class="box-content main-info-box">
							<div class="t-sec clearfix">
								<div class="left-sec col-md-7">
									<ul class="main-info-li">
										<li>
											<div class="title">Property ID :</div>
											<div class="value">#2158799</div>
										</li>
										<li>
											<div class="title">Property Status :</div>
											<div class="value">For Rent</div>
										</li>
										<li>
											<div class="title">Property Type :</div>
											<div class="value">Apartment</div>
										</li>
									</ul>
								</div>
								<div class="right-sec col-md-5">
									<div href="" class="price">$<?php echo $row['price']; ?></div>
									<div class="price-type">Per Month</div>
								</div>
							</div>
							<div class="b-sec">
									<?php echo $row['description']; ?>
							</div>
						</div>
					</div>
					<div class="information-box">
						<h3>Features </h3>
						<div class="box-content">
							<ul class="features-box clearfix">
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Attic', $features_array, true)) echo 'active'; ?>">Attic</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Gas heat', $features_array, true)) echo 'active'; ?>">Gas heat</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Ocean view', $features_array, true)) echo 'active'; ?>">Ocean view</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Wine cellar', $features_array, true)) echo 'active'; ?>">Wine cellar</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Basketball court', $features_array, true)) echo 'active'; ?>">Basketball court</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Gym', $features_array, true)) echo 'active'; ?>">Gym</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Pound', $features_array, true)) echo 'active'; ?>">Pound</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Fireplace', $features_array, true)) echo 'active'; ?>">Fireplace</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Lake view', $features_array, true)) echo 'active'; ?>">Lake view</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Pool', $features_array, true)) echo 'active'; ?>">Pool</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Back yard', $features_array, true)) echo 'active'; ?>">Back yard</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Front yard', $features_array, true)) echo 'active'; ?>">Front yard</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Fenced yard', $features_array, true)) echo 'active'; ?>">Fenced yard</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Sprinklers', $features_array, true)) echo 'active'; ?>">Sprinklers</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Washer and dryer', $features_array, true)) echo 'active'; ?>">Washer and dryer</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Deck', $features_array, true)) echo 'active'; ?>">Deck</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Balcony', $features_array, true)) echo 'active'; ?>">Balcony</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Laundry', $features_array, true)) echo 'active'; ?>">Laundry</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Concierge', $features_array, true)) echo 'active'; ?>">Concierge</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Doorman', $features_array, true)) echo 'active'; ?>">Doorman</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Private space', $features_array, true)) echo 'active'; ?>">Private space</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Storage', $features_array, true)) echo 'active'; ?>">Storage</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Recreation', $features_array, true)) echo 'active'; ?>">Recreation</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Roof Deck', $features_array, true)) echo 'active'; ?>">Roof Deck</li>
							</ul>
						</div>
					</div>

					<div class="information-box">
						<h3>Neighborhood</h3>
						<div class="box-content">
							<div class="neighborhood-container clearfix">
								<div class="neighborhood-box col-md-6">
									<div class="btn-group" role="group" aria-label="...">
										<button type="button" class="btn btn-default title">Shopping Center</button>
										<button type="button" class="btn btn-default value">10 min</button>
										<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
									</div>
								</div>
								<div class="neighborhood-box col-md-6">
									<div class="btn-group" role="group" aria-label="...">
										<button type="button" class="btn btn-default title">Bus Station</button>
										<button type="button" class="btn btn-default value">2 min</button>
										<button type="button" class="btn btn-default icon"><i class="fa fa-male"></i></button>
									</div>
								</div>
								<div class="neighborhood-box col-md-6">
									<div class="btn-group" role="group" aria-label="...">
										<button type="button" class="btn btn-default title">School</button>
										<button type="button" class="btn btn-default value">5 min</button>
										<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
									</div>
								</div>
								<div class="neighborhood-box col-md-6">
									<div class="btn-group" role="group" aria-label="...">
										<button type="button" class="btn btn-default title">Hospital</button>
										<button type="button" class="btn btn-default value">15 min</button>
										<button type="button" class="btn btn-default icon"><i class="fa fa-train"></i></button>
									</div>
								</div>
								<div class="neighborhood-box col-md-6">
									<div class="btn-group" role="group" aria-label="...">
										<button type="button" class="btn btn-default title">City Center</button>
										<button type="button" class="btn btn-default value">20 min</button>
										<button type="button" class="btn btn-default icon"><i class="fa fa-bicycle"></i></button>
									</div>
								</div>
								<div class="neighborhood-box col-md-6">
									<div class="btn-group" role="group" aria-label="...">
										<button type="button" class="btn btn-default title">Airport</button>
										<button type="button" class="btn btn-default value">20 min</button>
										<button type="button" class="btn btn-default icon"><i class="fa fa-train"></i></button>
									</div>
								</div>
							</div>

						</div>
					</div>
<!--
					<div class="information-box">
						<h3>Floor Plans</h3>
						<div class="box-content">
							<ul class="image-main-box clearfix">
								<li class="item col-xs-6">
									<figure>
										<img src="../assets/img/floorplan/1.jpg" alt="11"/>
										<a href="../assets/img/floorplan/1.jpg" class="more-details">Enlarge</a>
									</figure>
								</li>
								<li class="item col-xs-6">
									<figure>
										<img src="../assets/img/floorplan/2.jpg" alt="11"/>
										<a href="../assets/img/floorplan/2.jpg" class="more-details">Enlarge</a>
									</figure>
								</li>
								<li class="item col-xs-6">
									<figure>
										<img src="../assets/img/floorplan/3.jpg" alt="11"/>
										<a href="../assets/img/floorplan/3.jpg" class="more-details">Enlarge</a>
									</figure>
								</li>
								<li class="item col-xs-6">
									<figure>
										<img src="../assets/img/floorplan/4.jpg" alt="11"/>
										<a href="../assets/img/floorplan/4.jpg" class="more-details">Enlarge</a>
									</figure>
								</li>
								<li class="item col-xs-6">
									<figure>
										<img src="../assets/img/floorplan/5.jpg" alt="11"/>
										<a href="../assets/img/floorplan/5.jpg" class="more-details">Enlarge</a>
									</figure>
								</li>
								<li class="item col-xs-6">
									<figure>
										<img src="../assets/img/floorplan/6.jpg" alt="11"/>
										<a href="../assets/img/floorplan/6.jpg" class="more-details">Enlarge</a>
									</figure>
								</li>
							</ul>
						</div>
					</div>
					-->
					<div class="information-box">
						<h3>Video Presentation</h3>
						<div class="box-content">
							<div class="video-box">
								<iframe src="https://www.youtube.com/embed/23BFVDEdi-0" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="b-sec">
				<div class="information-box property-agent-container">
					<h3>Contact Agent</h3>
					<div class="box-content clearfix">
						<div class="col-md-5 agent-container">
							<div class="agent-box">
								<div class="inner-container">
									<a href="#" class="img-container">
										<img src="../assets/img/agents/1.jpg" alt="Agent Image">
									</a>
									<div class="bott-sec">
										<div class="name">Claudia Green</div>
										<div class="title">Certificated Agent</div>
										<div class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur doloremque eius expedita molestiae molestias pariatur quod repellendus ullam vel!
										</div>
										<a href="#" class="view-listing">View Listing</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 contact-form-container">
							<div class="contact-form">
								<div class="field-box">
									<input type="text" placeholder="Name *">
								</div>
								<div class="field-box">
									<input type="email" placeholder="Email *">
								</div>
								<div class="field-box">
									<input type="text" placeholder="Phone">
								</div>
								<textarea id="message">Your Message *</textarea>
								<button class="btn btn-lg submit">Submit</button>
							</div>
						</div>
					</div>
				</div>
				<div class="information-box related-properties">
					<h3>Related Properties</h3>
					<div class="box-content">
						<div class="property-listing clearfix">
							<div class="property-box col-xs-12 col-sm-6">
								<div class="inner-box">
									<a href="#" class="img-container">
										<img src="../assets/img/property/3.jpg" alt="Image of Property">
										<span class="price">$703,500</span>
									</a>
									<div class="bottom-sec">
										<a href="#" class="title">River Dr E, Skykomish, WA</a>
										<div class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit soluta amet
											ipsa reiciendis accusantium, quaerat laudantium incidunt debitis excepturi
											itaque?
										</div>
										<div class="extra-info clearfix">
											<div class="area col-xs-4">
												<div class="value">300</div>
												m2
											</div>
											<div class="bedroom col-xs-4"><div class="value">3</div>bed</div>
											<div class="bathroom col-xs-4"><div class="value">2</div>bath</div>
										</div>
									</div>
									<a href="#" class="btn more-link">More</a>
								</div>
							</div>
							<div class="property-box col-xs-12 col-sm-6">
								<div class="inner-box">
									<a href="#" class="img-container">
										<span class="tag-label open-house">Open House</span>
										<img src="../assets/img/property/4.jpg" alt="Image of Property">
										<span class="price">$532,000</span>
									</a>

									<div class="bottom-sec">
										<a href="#" class="title">Wenatchee Ave, Wenatchee, WA</a>

										<div class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam optio
											earum modi maiores nobis nihil temporibus mollitia architecto dignissimos
											tempora.
										</div>
										<div class="extra-info clearfix">
											<div class="area col-xs-4">
												<div class="value">235</div>
												m2
											</div>
											<div class="bedroom col-xs-4">
												<div class="value">3</div>
												bed
											</div>
											<div class="bathroom col-xs-4">
												<div class="value">1</div>
												bath
											</div>
										</div>
									</div>
									<a href="#" class="btn more-link">More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<aside class="col-sm-4">
			<!--Sidebar Box -->
			<div class="sidebar-box">
				<h3>Property Search</h3>
				<div class="box-content">
					<div class="property-search-form vertical">
						<div class="main-search-sec">
							<div class="search-field">
								<input type="text" placeholder="Location" id="location-search-box2">
							</div>
							<div class="search-field">
								<select id="proeprty-status2">
									<option value="0">Property Status</option>
									<option value="1">For Sale</option>
									<option value="2">For Rent</option>
								</select>
							</div>
							<div class="search-field">
								<select id="proeprty-type2">
									<option value="0">Property Type</option>
									<option value="1">Apartment</option>
									<option value="2">House</option>
									<option value="3">Villa</option>
									<option value="4">Office</option>
									<option value="5">Condo</option>
								</select>
							</div>
							<div class="search-field">
								<input type="text" placeholder="Keyword" id="keyword2">
							</div>
							<div class="search-field">
								<select id="bedroom2">
									<option value="0">Bedroom</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">+5</option>
								</select>
							</div>
							<div class="search-field">
								<select id="bathroom2">
									<option value="0">Bathroom</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">+5</option>
								</select>
							</div>
							<div class="search-field">
								<input type="text" id="price_range2" class="range-slider" name="price" value="" data-min="0" data-max="5000" />
							</div>
							<div class="search-field">
								<button class="btn">Search</button>
								<button class="more-options btn">More Options</button>
							</div>
						</div>
						<div class="advanced-search-sec clearfix">
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-1">
										<input type="checkbox" value="81" id="field-1">
										<span></span>
										Parking
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-2">
										<input type="checkbox" value="81" id="field-2">
										<span></span>
										Balcony
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-3">
										<input type="checkbox" value="81" id="field-3">
										<span></span>
										Gym
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-4">
										<input type="checkbox" value="81" id="field-4">
										<span></span>
										Storage
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-5">
										<input type="checkbox" value="81" id="field-5">
										<span></span>
										Fireplace
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-6">
										<input type="checkbox" value="81" id="field-6">
										<span></span>
										Air Condition
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-7">
										<input type="checkbox" value="81" id="field-7">
										<span></span>
										Laundry Room
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-8">
										<input type="checkbox" value="81" id="field-8">
										<span></span>
										Swimming Pool
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-9">
										<input type="checkbox" value="81" id="field-9">
										<span></span>
										Central Heating
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-10">
										<input type="checkbox" value="81" id="field-10">
										<span></span>
										Central Heating
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-11">
										<input type="checkbox" value="81" id="field-11">
										<span></span>
										Fully Furnished
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-12">
										<input type="checkbox" value="81" id="field-12">
										<span></span>
										Built-In Kitchen
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Sidebar Box-->

			<div class="sidebar-box">
				<h3>Featured Properties</h3>
				<div class="box-content">
					<div class="featured-properties">
						<div class="property-box">
							<a href="#" class="clearfix">
								<span class="img-container col-xs-4">
									<img src="../assets/img/property/1.jpg" alt="">
								</span>
								<span class="details col-xs-8">
									<span class="title">Golden Family House</span>
									<span class="location">Broadway, Los Angles, California</span>
									<span class="price">$330,000</span>
								</span>
							</a>
							<a href="#" class="clearfix">
								<span class="img-container col-xs-4">
									<img src="../assets/img/property/2.jpg" alt="">
								</span>
								<span class="details col-xs-8">
									<span class="title">Great Villa</span>
									<span class="location">Wade Avenue, Raleigh, North Carolina</span>
									<span class="price">$250,000</span>
								</span>
							</a>
							<a href="#" class="clearfix">
								<span class="img-container col-xs-4">
									<img src="../assets/img/property/3.jpg" alt="">
								</span>
								<span class="details col-xs-8">
									<span class="title">Single Family Home</span>
									<span class="location">River Dr E, Skykomish, WA</span>
									<span class="price">$480,000</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="sidebar-box">
				<h3>Featured Agents</h3>
				<div class="box-content">
					<div class="agent-container">
						<div class="agent-box">
							<div class="inner-container">
								<a href="#" class="img-container">
									<img src="../assets/img/agents/4.jpg" alt="Agent Image">
								</a>
								<div class="bott-sec">
									<div class="name">Claudia Green</div>
									<div class="desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur doloremque eius expedita molestiae molestias pariatur quod repellendus ullam vel!
									</div>
									<a href="#" class="view-listing">View Listing</a>
									<div class="social-icons">
										<a href="#" class="fa fa-envelope"></a>
										<a href="#" class="fa fa-facebook"></a>
										<a href="#" class="fa fa-twitter"></a>
										<a href="#" class="fa fa-google-plus"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="agent-box">
							<div class="inner-container">
								<a href="#" class="img-container">
									<img src="../assets/img/agents/3.jpg" alt="Agent Image">
								</a>
								<div class="bott-sec">
									<div class="name">John Smith</div>
									<div class="desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur doloremque eius expedita molestiae molestias pariatur quod repellendus ullam vel!
									</div>
									<a href="#" class="view-listing">View Listing</a>
									<div class="social-icons">
										<a href="#" class="fa fa-envelope"></a>
										<a href="#" class="fa fa-facebook"></a>
										<a href="#" class="fa fa-twitter"></a>
										<a href="#" class="fa fa-google-plus"></a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</aside>
	</section>




<!------------------------------------------------------------------------------------------------------------------->






	

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
				<!--
				<div class="col-md-4 widgets">
					<h4 class="title">Get in touch with us</h4>
					<ul class="contact-info">
						<li><i class="fa fa-map-marker"></i>133 Elizabeth street, Sydney 4000, Australia</li>
						<li class="phone"><i class="fa fa-phone"></i>0185 26 37 48 59</li>
						<li><i class="fa fa-envelope"></i>info@RavisTheme.com</li>
					</ul>
				</div>
				-->
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



<?php		  
$content = ob_get_contents();
ob_end_clean();
include 'include/header.php';
print $content;
//include 'include/footer.php'; 
?>
	<!-- JS Include Section -->
	<script type="text/javascript" src="../assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/helper.js"></script>
	<script type="text/javascript" src="../assets/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="../assets/js/isotope.pkgd.min.js"></script>
	
	<!-- End of JS Include Section -->
	<script type="text/javascript" src="assets/js/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	
	
	<script type="text/javascript" src="../assets/js/template.js"></script>
	
	</body>
	</html>















<?php /* <?php 
ob_start();

include 'include/dbconnect.php';

$stmt = $objDb->prepare('SELECT * FROM properties WHERE id = :id');
$result = $stmt->execute(array('id' => $_GET['id']));
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$row = $stmt->fetch();

$features_array = explode(",",$row['features']);

// Query images
$stmtImg = $objDb->prepare('SELECT url FROM properties_images WHERE pid = :pid');
$resultImg = $stmtImg->execute(array('pid' => $_GET['id']));
$stmtImg->setFetchMode(PDO::FETCH_ASSOC);


?>
<body class="property-details">
		<?php include 'include/nav.php'; ?>

	<section id="property-slider-section">
		<div class="title-box container">
			<h1><?php echo $row['title']; ?></h1>
			<div class="location">4600 Cresthaven Drive, Colleyvile</div>
		</div>
		<!-- Main Slider -->
		<div id="property-main-slider">
			<div class="items">
				<div class="img-container" data-bg-img="../assets/img/slider/1.jpg"></div><!-- Change the URL section based on your image\'s name -->
			</div>
			<div class="items">
				<div class="img-container" data-bg-img="../assets/img/slider/2.jpg"></div>
			</div>
			<div class="items">
				<div class="img-container" data-bg-img="../assets/img/slider/3.jpg"></div>
			</div>
			<div class="items">
				<div class="img-container" data-bg-img="../assets/img/slider/4.jpg"></div>
			</div>
			<div class="items">
				<div class="img-container" data-bg-img="../assets/img/slider/5.jpg"></div>
			</div>
			<div class="items">
				<div class="img-container" data-bg-img="../assets/img/slider/6.jpg"></div>
			</div>
		</div>
		<!-- End of Main Slider -->

		<div id="property-thumb-slider" class="container">
		<?php while($rowImg = $stmtImg->fetch()){ ?>

			<div class="items">
				<div class="img-container" data-bg-img="dashboard/<?php echo $rowImg['url']; ?>"></div><!-- Change the URL section based on your image\'s name -->
			</div>

		<?php } ?>
			
		</div>
	</section>

	<section class="main-container container">
		<div class="content-box col-sm-8">
			<div class="t-sec clearfix">
				<div class="col-md-4 left-sec">
					<!--Highlight Section-->
					<div class="highlight-container">
						<div class="highlight-details-box">
							<div class="value"><?php echo $row['land_area']; ?></div>
							<div class="text">Land Size</div>
							<div class="unit">m2</div>
						</div>
						<div class="highlight-details-box">
							<div class="value">345</div>
							<div class="text">Build Size</div>
							<div class="unit">m2</div>
						</div>
						<div class="highlight-details-box">
							<div class="value"><?php echo $row['bedrooms']; ?></div>
							<div class="text">Bedroom</div>
						</div>
						<div class="highlight-details-box">
							<div class="value"><?php echo $row['bathrooms']; ?></div>
							<div class="text">Bathroom</div>
						</div>
					</div>

					<!-- Property Map -->
					<div class="property-details-map-container">
						<div id="property-details-map"></div>
					</div>

					<div class="information-box">
						<h3>Attachments</h3>
						<div class="box-content">
							<div class="attachment-container">
								<a href="#" class="attachment-box">
									<div class="size">3.2 <div class="unit">mb</div></div>
									<div class="title">PDF Brochure</div>
									<div class="dl-times"><i class="fa fa-download"></i>1350 times</div>
								</a>
								<a href="#" class="attachment-box">
									<div class="size">5.2 <div class="unit">mb</div></div>
									<div class="title">Contract Sample</div>
									<div class="dl-times"><i class="fa fa-download"></i>1100 times</div>
								</a>
								<a href="#" class="attachment-box">
									<div class="size">6.4 <div class="unit">mb</div></div>
									<div class="title">Extra Information</div>
									<div class="dl-times"><i class="fa fa-download"></i>854 times</div>
								</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-8 right-sec">
					<div class="information-box">
						<div class="box-content main-info-box">
							<div class="t-sec clearfix">
								<div class="left-sec col-md-7">
									<ul class="main-info-li">
										<li>
											<div class="title">Property ID :</div>
											<div class="value">#2158799</div>
										</li>
										<li>
											<div class="title">Property Status :</div>
											<div class="value">For Rent</div>
										</li>
										<li>
											<div class="title">Property Type :</div>
											<div class="value">Apartment</div>
										</li>
									</ul>
								</div>
								<div class="right-sec col-md-5">
									<div href="" class="price">$<?php echo $row['price']; ?></div>
									<div class="price-type">Per Month</div>
								</div>
							</div>
							<div class="b-sec">
									<?php echo $row['description']; ?>
							</div>
						</div>
					</div>
					<div class="information-box">
						<h3>Features </h3>
						<div class="box-content">
							<ul class="features-box clearfix">
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Attic', $features_array, true)) echo 'active'; ?>">Attic</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Gas heat', $features_array, true)) echo 'active'; ?>">Gas heat</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Ocean view', $features_array, true)) echo 'active'; ?>">Ocean view</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Wine cellar', $features_array, true)) echo 'active'; ?>">Wine cellar</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Basketball court', $features_array, true)) echo 'active'; ?>">Basketball court</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Gym', $features_array, true)) echo 'active'; ?>">Gym</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Pound', $features_array, true)) echo 'active'; ?>">Pound</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Fireplace', $features_array, true)) echo 'active'; ?>">Fireplace</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Lake view', $features_array, true)) echo 'active'; ?>">Lake view</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Pool', $features_array, true)) echo 'active'; ?>">Pool</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Back yard', $features_array, true)) echo 'active'; ?>">Back yard</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Front yard', $features_array, true)) echo 'active'; ?>">Front yard</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Fenced yard', $features_array, true)) echo 'active'; ?>">Fenced yard</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Sprinklers', $features_array, true)) echo 'active'; ?>">Sprinklers</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Washer and dryer', $features_array, true)) echo 'active'; ?>">Washer and dryer</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Deck', $features_array, true)) echo 'active'; ?>">Deck</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Balcony', $features_array, true)) echo 'active'; ?>">Balcony</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Laundry', $features_array, true)) echo 'active'; ?>">Laundry</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Concierge', $features_array, true)) echo 'active'; ?>">Concierge</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Doorman', $features_array, true)) echo 'active'; ?>">Doorman</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Private space', $features_array, true)) echo 'active'; ?>">Private space</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Storage', $features_array, true)) echo 'active'; ?>">Storage</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Recreation', $features_array, true)) echo 'active'; ?>">Recreation</li>
								<li class="col-sm-6 col-lg-4 <?php if(in_array('Roof Deck', $features_array, true)) echo 'active'; ?>">Roof Deck</li>
							</ul>
						</div>
					</div>

					<div class="information-box">
						<h3>Neighborhood</h3>
						<div class="box-content">
							<div class="neighborhood-container clearfix">
								<div class="neighborhood-box col-md-6">
									<div class="btn-group" role="group" aria-label="...">
										<button type="button" class="btn btn-default title">Shopping Center</button>
										<button type="button" class="btn btn-default value">10 min</button>
										<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
									</div>
								</div>
								<div class="neighborhood-box col-md-6">
									<div class="btn-group" role="group" aria-label="...">
										<button type="button" class="btn btn-default title">Bus Station</button>
										<button type="button" class="btn btn-default value">2 min</button>
										<button type="button" class="btn btn-default icon"><i class="fa fa-male"></i></button>
									</div>
								</div>
								<div class="neighborhood-box col-md-6">
									<div class="btn-group" role="group" aria-label="...">
										<button type="button" class="btn btn-default title">School</button>
										<button type="button" class="btn btn-default value">5 min</button>
										<button type="button" class="btn btn-default icon"><i class="fa fa-car"></i></button>
									</div>
								</div>
								<div class="neighborhood-box col-md-6">
									<div class="btn-group" role="group" aria-label="...">
										<button type="button" class="btn btn-default title">Hospital</button>
										<button type="button" class="btn btn-default value">15 min</button>
										<button type="button" class="btn btn-default icon"><i class="fa fa-train"></i></button>
									</div>
								</div>
								<div class="neighborhood-box col-md-6">
									<div class="btn-group" role="group" aria-label="...">
										<button type="button" class="btn btn-default title">City Center</button>
										<button type="button" class="btn btn-default value">20 min</button>
										<button type="button" class="btn btn-default icon"><i class="fa fa-bicycle"></i></button>
									</div>
								</div>
								<div class="neighborhood-box col-md-6">
									<div class="btn-group" role="group" aria-label="...">
										<button type="button" class="btn btn-default title">Airport</button>
										<button type="button" class="btn btn-default value">20 min</button>
										<button type="button" class="btn btn-default icon"><i class="fa fa-train"></i></button>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="information-box">
						<h3>Floor Plans</h3>
						<div class="box-content">
							<ul class="image-main-box clearfix">
								<li class="item col-xs-6">
									<figure>
										<img src="../assets/img/floorplan/1.jpg" alt="11"/>
										<a href="../assets/img/floorplan/1.jpg" class="more-details">Enlarge</a>
									</figure>
								</li>
								<li class="item col-xs-6">
									<figure>
										<img src="../assets/img/floorplan/2.jpg" alt="11"/>
										<a href="../assets/img/floorplan/2.jpg" class="more-details">Enlarge</a>
									</figure>
								</li>
								<li class="item col-xs-6">
									<figure>
										<img src="../assets/img/floorplan/3.jpg" alt="11"/>
										<a href="../assets/img/floorplan/3.jpg" class="more-details">Enlarge</a>
									</figure>
								</li>
								<li class="item col-xs-6">
									<figure>
										<img src="../assets/img/floorplan/4.jpg" alt="11"/>
										<a href="../assets/img/floorplan/4.jpg" class="more-details">Enlarge</a>
									</figure>
								</li>
								<li class="item col-xs-6">
									<figure>
										<img src="../assets/img/floorplan/5.jpg" alt="11"/>
										<a href="../assets/img/floorplan/5.jpg" class="more-details">Enlarge</a>
									</figure>
								</li>
								<li class="item col-xs-6">
									<figure>
										<img src="../assets/img/floorplan/6.jpg" alt="11"/>
										<a href="../assets/img/floorplan/6.jpg" class="more-details">Enlarge</a>
									</figure>
								</li>
							</ul>
						</div>
					</div>
					<div class="information-box">
						<h3>Video Presentation</h3>
						<div class="box-content">
							<div class="video-box">
								<iframe src="https://www.youtube.com/embed/23BFVDEdi-0" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="b-sec">
				<div class="information-box property-agent-container">
					<h3>Contact Agent</h3>
					<div class="box-content clearfix">
						<div class="col-md-5 agent-container">
							<div class="agent-box">
								<div class="inner-container">
									<a href="#" class="img-container">
										<img src="../assets/img/agents/1.jpg" alt="Agent Image">
									</a>
									<div class="bott-sec">
										<div class="name">Claudia Green</div>
										<div class="title">Certificated Agent</div>
										<div class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur doloremque eius expedita molestiae molestias pariatur quod repellendus ullam vel!
										</div>
										<a href="#" class="view-listing">View Listing</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 contact-form-container">
							<div class="contact-form">
								<div class="field-box">
									<input type="text" placeholder="Name *">
								</div>
								<div class="field-box">
									<input type="email" placeholder="Email *">
								</div>
								<div class="field-box">
									<input type="text" placeholder="Phone">
								</div>
								<textarea id="message">Your Message *</textarea>
								<button class="btn btn-lg submit">Submit</button>
							</div>
						</div>
					</div>
				</div>
				<div class="information-box related-properties">
					<h3>Related Properties</h3>
					<div class="box-content">
						<div class="property-listing clearfix">
							<div class="property-box col-xs-12 col-sm-6">
								<div class="inner-box">
									<a href="#" class="img-container">
										<img src="../assets/img/property/3.jpg" alt="Image of Property">
										<span class="price">$703,500</span>
									</a>
									<div class="bottom-sec">
										<a href="#" class="title">River Dr E, Skykomish, WA</a>
										<div class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit soluta amet
											ipsa reiciendis accusantium, quaerat laudantium incidunt debitis excepturi
											itaque?
										</div>
										<div class="extra-info clearfix">
											<div class="area col-xs-4">
												<div class="value">300</div>
												m2
											</div>
											<div class="bedroom col-xs-4"><div class="value">3</div>bed</div>
											<div class="bathroom col-xs-4"><div class="value">2</div>bath</div>
										</div>
									</div>
									<a href="#" class="btn more-link">More</a>
								</div>
							</div>
							<div class="property-box col-xs-12 col-sm-6">
								<div class="inner-box">
									<a href="#" class="img-container">
										<span class="tag-label open-house">Open House</span>
										<img src="../assets/img/property/4.jpg" alt="Image of Property">
										<span class="price">$532,000</span>
									</a>

									<div class="bottom-sec">
										<a href="#" class="title">Wenatchee Ave, Wenatchee, WA</a>

										<div class="desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam optio
											earum modi maiores nobis nihil temporibus mollitia architecto dignissimos
											tempora.
										</div>
										<div class="extra-info clearfix">
											<div class="area col-xs-4">
												<div class="value">235</div>
												m2
											</div>
											<div class="bedroom col-xs-4">
												<div class="value">3</div>
												bed
											</div>
											<div class="bathroom col-xs-4">
												<div class="value">1</div>
												bath
											</div>
										</div>
									</div>
									<a href="#" class="btn more-link">More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<aside class="col-sm-4">
			<!--Sidebar Box-->
			<div class="sidebar-box">
				<h3>Property Search</h3>
				<div class="box-content">
					<div class="property-search-form vertical">
						<div class="main-search-sec">
							<div class="search-field">
								<input type="text" placeholder="Location" id="location-search-box">
							</div>
							<div class="search-field">
								<select id="proeprty-status">
									<option value="0">Property Status</option>
									<option value="1">For Sale</option>
									<option value="2">For Rent</option>
								</select>
							</div>
							<div class="search-field">
								<select id="proeprty-type">
									<option value="0">Property Type</option>
									<option value="1">Apartment</option>
									<option value="2">House</option>
									<option value="3">Villa</option>
									<option value="4">Office</option>
									<option value="5">Condo</option>
								</select>
							</div>
							<div class="search-field">
								<input type="text" placeholder="Keyword" id="keyword">
							</div>
							<div class="search-field">
								<select id="bedroom">
									<option value="0">Bedroom</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">+5</option>
								</select>
							</div>
							<div class="search-field">
								<select id="bathroom">
									<option value="0">Bathroom</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">+5</option>
								</select>
							</div>
							<div class="search-field">
								<input type="text" id="price_range" class="range-slider" name="price" value="" data-min="0" data-max="5000" />
							</div>
							<div class="search-field">
								<button class="btn">Search</button>
								<button class="more-options btn">More Options</button>
							</div>
						</div>
						<div class="advanced-search-sec clearfix">
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-1">
										<input type="checkbox" value="81" id="field-1">
										<span></span>
										Parking
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-2">
										<input type="checkbox" value="81" id="field-2">
										<span></span>
										Balcony
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-3">
										<input type="checkbox" value="81" id="field-3">
										<span></span>
										Gym
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-4">
										<input type="checkbox" value="81" id="field-4">
										<span></span>
										Storage
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-5">
										<input type="checkbox" value="81" id="field-5">
										<span></span>
										Fireplace
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-6">
										<input type="checkbox" value="81" id="field-6">
										<span></span>
										Air Condition
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-7">
										<input type="checkbox" value="81" id="field-7">
										<span></span>
										Laundry Room
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-8">
										<input type="checkbox" value="81" id="field-8">
										<span></span>
										Swimming Pool
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-9">
										<input type="checkbox" value="81" id="field-9">
										<span></span>
										Central Heating
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-10">
										<input type="checkbox" value="81" id="field-10">
										<span></span>
										Central Heating
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-11">
										<input type="checkbox" value="81" id="field-11">
										<span></span>
										Fully Furnished
									</label>
								</div>
							</div>
							<div class="col-xs-6 search-field">
								<div class="hsq-checkbox check-box-container">
									<label for="field-12">
										<input type="checkbox" value="81" id="field-12">
										<span></span>
										Built-In Kitchen
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--End of Sidebar Box-->

			<div class="sidebar-box">
				<h3>Featured Properties</h3>
				<div class="box-content">
					<div class="featured-properties">
						<div class="property-box">
							<a href="#" class="clearfix">
								<span class="img-container col-xs-4">
									<img src="../assets/img/property/1.jpg" alt="">
								</span>
								<span class="details col-xs-8">
									<span class="title">Golden Family House</span>
									<span class="location">Broadway, Los Angles, California</span>
									<span class="price">$330,000</span>
								</span>
							</a>
							<a href="#" class="clearfix">
								<span class="img-container col-xs-4">
									<img src="../assets/img/property/2.jpg" alt="">
								</span>
								<span class="details col-xs-8">
									<span class="title">Great Villa</span>
									<span class="location">Wade Avenue, Raleigh, North Carolina</span>
									<span class="price">$250,000</span>
								</span>
							</a>
							<a href="#" class="clearfix">
								<span class="img-container col-xs-4">
									<img src="../assets/img/property/3.jpg" alt="">
								</span>
								<span class="details col-xs-8">
									<span class="title">Single Family Home</span>
									<span class="location">River Dr E, Skykomish, WA</span>
									<span class="price">$480,000</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="sidebar-box">
				<h3>Featured Agents</h3>
				<div class="box-content">
					<div class="agent-container">
						<div class="agent-box">
							<div class="inner-container">
								<a href="#" class="img-container">
									<img src="../assets/img/agents/4.jpg" alt="Agent Image">
								</a>
								<div class="bott-sec">
									<div class="name">Claudia Green</div>
									<div class="desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur doloremque eius expedita molestiae molestias pariatur quod repellendus ullam vel!
									</div>
									<a href="#" class="view-listing">View Listing</a>
									<div class="social-icons">
										<a href="#" class="fa fa-envelope"></a>
										<a href="#" class="fa fa-facebook"></a>
										<a href="#" class="fa fa-twitter"></a>
										<a href="#" class="fa fa-google-plus"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="agent-box">
							<div class="inner-container">
								<a href="#" class="img-container">
									<img src="../assets/img/agents/3.jpg" alt="Agent Image">
								</a>
								<div class="bott-sec">
									<div class="name">John Smith</div>
									<div class="desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur doloremque eius expedita molestiae molestias pariatur quod repellendus ullam vel!
									</div>
									<a href="#" class="view-listing">View Listing</a>
									<div class="social-icons">
										<a href="#" class="fa fa-envelope"></a>
										<a href="#" class="fa fa-facebook"></a>
										<a href="#" class="fa fa-twitter"></a>
										<a href="#" class="fa fa-google-plus"></a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</aside>
	</section>

	<!--Gallery Section-->
	<section class="gallery-container container">
		<h2 class="hsq-heading type-2">Our Gallery</h2>
		<div class="sort-section-container">
			<ul class="list-inline">
				<li><a href="#" data-filter="*">All</a></li>
				<li><a href="#" data-filter=".apartment">Apartment</a></li>
				<li><a href="#" data-filter=".villa">Villa</a></li>
				<li><a href="#" data-filter=".office">Office</a></li>
				<li><a href="#" data-filter=".condo">Condo</a></li>
			</ul>
		</div>
		<ul class="image-main-box clearfix">
			<li class="item col-xs-6 col-md-3 apartment">
				<figure>
					<img src="../assets/img/property/1.jpg" alt="11"/>
					<a href="../assets/img/property/1.jpg" class="more-details">Enlarge</a>
					<figcaption>
						Luxury House <span>in California</span>
					</figcaption>
				</figure>
			</li>
			<li class="item col-xs-6 col-md-3 apartment">
				<figure>
					<img src="../assets/img/property/2.jpg" alt="11"/>
					<a href="../assets/img/property/2.jpg" class="more-details">Enlarge</a>
					<figcaption>
						Modern Apartment <span>in Los Angles</span>
					</figcaption>
				</figure>
			</li>
			<li class="item col-xs-6 col-md-3 villa">
				<figure>
					<img src="../assets/img/property/3.jpg" alt="11"/>
					<a href="../assets/img/property/3.jpg" class="more-details">Enlarge</a>
					<figcaption>
						Family Home <span>in Paris</span>
					</figcaption>
				</figure>
			</li>
			<li class="item col-xs-6 col-md-3 villa">
				<figure>
					<img src="../assets/img/property/4.jpg" alt="11"/>
					<a href="../assets/img/property/4.jpg" class="more-details">Enlarge</a>
					<figcaption>
						Vintage Villa <span>in London</span>
					</figcaption>
				</figure>
			</li>
			<li class="item col-xs-6 col-md-3 condo">
				<figure>
					<img src="../assets/img/property/5.jpg" alt="11"/>
					<a href="../assets/img/property/5.jpg" class="more-details">Enlarge</a>
					<figcaption>
						Two Bedrooms House <span>in Rome</span>
					</figcaption>
				</figure>
			</li>
			<li class="item col-xs-6 col-md-3 office">
				<figure>
					<img src="../assets/img/property/6.jpg" alt="11"/>
					<a href="../assets/img/property/6.jpg" class="more-details">Enlarge</a>
					<figcaption>
						Modern Family House <span>in LA</span>
					</figcaption>
				</figure>
			</li>
			<li class="item col-xs-6 col-md-3 office">
				<figure>
					<img src="../assets/img/property/7.jpg" alt="11"/>
					<a href="../assets/img/property/7.jpg" class="more-details">Enlarge</a>
					<figcaption>
						Vacation Rental Villa <span>in Amsterdam</span>
					</figcaption>
				</figure>
			</li>
			<li class="item col-xs-6 col-md-3 office">
				<figure>
					<img src="../assets/img/property/8.jpg" alt="11"/>
					<a href="../assets/img/property/8.jpg" class="more-details">Enlarge</a>
					<figcaption>
						Luxury Mansion <span>in Barcelona</span>
					</figcaption>
				</figure>
			</li>
			<li class="item col-xs-6 col-md-3 condo">
				<figure>
					<img src="../assets/img/property/9.jpg" alt="11"/>
					<a href="../assets/img/property/9.jpg" class="more-details">Enlarge</a>
					<figcaption>
						Vintage Mansion <span>in Madrid</span>
					</figcaption>
				</figure>
			</li>
			<li class="item col-xs-6 col-md-3 condo">
				<figure>
					<img src="../assets/img/property/10.jpg" alt="11"/>
					<a href="../assets/img/property/10.jpg" class="more-details">Enlarge</a>
					<figcaption>
						Four Bedrooms House <span>in Beverly Hills</span>
					</figcaption>
				</figure>
			</li>
			<li class="item col-xs-6 col-md-3 condo">
				<figure>
					<img src="../assets/img/property/11.jpg" alt="11"/>
					<a href="../assets/img/property/11.jpg" class="more-details">Enlarge</a>
					<figcaption>
						Single Family House <span>in Texas</span>
					</figcaption>
				</figure>
			</li>
			<li class="item col-xs-6 col-md-3 condo">
				<figure>
					<img src="../assets/img/property/12.jpg" alt="11"/>
					<a href="../assets/img/property/12.jpg" class="more-details">Enlarge</a>
					<figcaption>
						Luxury 3 Bedroom Apartment <span>in Las Vegas</span>
					</figcaption>
				</figure>
			</li>
		</ul>
	</section>
	<!--End of Gallery Section-->
					

	<!-- JS Include Sectio
	<script type="text/javascript" src="../assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/helper.js"></script>
	<script type="text/javascript" src="../assets/js/select2.min.js"></script>
	<script type="text/javascript" src="../assets/js/ion.rangeSlider.min.js"></script>
	<script type="text/javascript" src="../assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
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
			var map = new google.maps.Map(document.getElementById('property-details-map'),mapOptions);

			var image = '../assets/img/marker.png';

			var beachMarker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				icon: image
			});
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		*/ /*
	</script>
	
<?php		  
$content = ob_get_contents();
ob_end_clean();
include 'include/header.php';
print $content;
//include 'include/footer.php'; 
?>

	<!-- JS Include Section -->
	<script type="text/javascript" src="../assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/helper.js"></script>
	<script type="text/javascript" src="../assets/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="../assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="../assets/js/template.js"></script>
	<script type="text/javascript" src="../assets/js/style-selector.js"></script>
	<!-- End of JS Include Section -->

</body>
</html>

*/ ?>