<?php 
ob_start();

include 'include/dbconnect.php';

$stmt = $objDb->prepare('SELECT id, title, description FROM properties');
$result = $stmt->execute();

?>
<body class="property-listing-page map">
	<?php include 'include/nav.php'; ?>


	<!-- Recent Properties -->
	<section class="property-listing map-view clearfix">
		<div class="left-section col-md-7">
			<div class="property-search-form horizontal">
				<div class="main-search-sec">
					<div class="col-xs-6 col-sm-3 search-field">
						<input type="text" placeholder="Location" id="location-search-box">
					</div>
					<div class="col-xs-6 col-sm-3 search-field">
						<select id="proeprty-status">
							<option value="0">Property Status</option>
							<option value="1">For Sale</option>
							<option value="2">For Rent</option>
						</select>
					</div>
					<div class="col-xs-6 col-sm-3 search-field">
						<select id="proeprty-type">
							<option value="0">Property Type</option>
							<option value="1">Apartment</option>
							<option value="2">House</option>
							<option value="3">Villa</option>
							<option value="4">Office</option>
							<option value="5">Condo</option>
						</select>
					</div>
					<div class="col-xs-6 col-sm-3 search-field">
						<input type="text" placeholder="Keyword" id="keyword">
					</div>
					<div class="col-xs-6 col-sm-3 search-field">
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
					<div class="col-xs-6 col-sm-3 search-field">
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
					<div class="col-xs-6 col-sm-3 search-field">
						<input type="text" id="price_range" class="range-slider" name="price" value="" data-min="0" data-max="5000" />
					</div>
					<div class="col-xs-6 col-sm-3 search-field">
						<button class="more-options btn">More Options</button>
					</div>
				</div>
				<div class="advanced-search-sec">
					<div class="col-xs-3 col-sm-3 col-md-2 search-field">
						<div class="hsq-checkbox check-box-container">
							<label for="field-1">
								<input type="checkbox" value="81" id="field-1">
								<span></span>
								Parking
							</label>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-2 search-field">
						<div class="hsq-checkbox check-box-container">
							<label for="field-2">
								<input type="checkbox" value="81" id="field-2">
								<span></span>
								Balcony
							</label>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-2 search-field">
						<div class="hsq-checkbox check-box-container">
							<label for="field-3">
								<input type="checkbox" value="81" id="field-3">
								<span></span>
								Gym
							</label>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-2 search-field">
						<div class="hsq-checkbox check-box-container">
							<label for="field-4">
								<input type="checkbox" value="81" id="field-4">
								<span></span>
								Storage
							</label>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-2 search-field">
						<div class="hsq-checkbox check-box-container">
							<label for="field-5">
								<input type="checkbox" value="81" id="field-5">
								<span></span>
								Fireplace
							</label>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-2 search-field">
						<div class="hsq-checkbox check-box-container">
							<label for="field-6">
								<input type="checkbox" value="81" id="field-6">
								<span></span>
								Air Condition
							</label>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-2 search-field">
						<div class="hsq-checkbox check-box-container">
							<label for="field-7">
								<input type="checkbox" value="81" id="field-7">
								<span></span>
								Laundry Room
							</label>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-2 search-field">
						<div class="hsq-checkbox check-box-container">
							<label for="field-8">
								<input type="checkbox" value="81" id="field-8">
								<span></span>
								Swimming Pool
							</label>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-2 search-field">
						<div class="hsq-checkbox check-box-container">
							<label for="field-9">
								<input type="checkbox" value="81" id="field-9">
								<span></span>
								Central Heating
							</label>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-2 search-field">
						<div class="hsq-checkbox check-box-container">
							<label for="field-10">
								<input type="checkbox" value="81" id="field-10">
								<span></span>
								Central Heating
							</label>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-2 search-field">
						<div class="hsq-checkbox check-box-container">
							<label for="field-11">
								<input type="checkbox" value="81" id="field-11">
								<span></span>
								Fully Furnished
							</label>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-2 search-field">
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
			<div class="property-container">
				<div class="inner-container clearfix">



<?php while($row = $stmt->fetch()){ ?>
					<div class="property-box col-xs-12 col-sm-6">
						<div class="inner-box">
							<a href="#" class="img-container">
								<span class="tag-label hot-offer">Hot Offer</span>
								<img src="../assets/img/property/1.jpg" alt="Image of Property">
								<span class="price">$850,000</span>
							</a>
							<div class="bottom-sec">
								<a href="#" class="title"><?php echo $row['title']; ?></a>
								<div class="desc">
									<?php echo $row['description']; ?>
								</div>
								<div class="extra-info clearfix">
									<div class="area col-xs-4">
										<div class="value">285</div>
										m2
									</div>
									<div class="bedroom col-xs-4">
										<div class="value">4</div>
										bed
									</div>
									<div class="bathroom col-xs-4"><div class="value">2</div>bath</div>
								</div>
							</div>
							<a href="property-details.php?id=<?php echo $row['id']; ?>" class="btn more-link">More</a>
						</div>
					</div>
<?php } ?>

				</div>
				<!-- Pagination -->
				<div class="pagination-box">
					<ul class="list-inline">
						<li class="active"><a href="#"><span>1</span></a></li>
						<li><a href="#"><span>2</span></a></li>
						<li><a href="#"><span>3</span></a></li>
						<li><a href="#"><span>4</span></a></li>
						<li><a href="#"><span>5</span></a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</div>
				<!-- End of Pagination -->
			</div>
		</div>
		<div class="map-container col-md-5">
			<!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
			<div id="map"></div>
		</div>
	</section>
	<!-- End of Recent Properties -->

	<!-- Map Js -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
	<script type="text/javascript" src="../assets/js/infobox_packed.js"></script>
	<script type="text/javascript" src="../assets/js/richmarker-compiled.js"></script>
	<script type="text/javascript" src="../assets/js/markerclusterer_packed.js"></script>
	<!-- END OF Map Js -->
	<?php /*

	<!-- JS Include Section -->
	<script type="text/javascript" src="../assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/helper.js"></script>
	<script type="text/javascript" src="../assets/js/select2.min.js"></script>
	<script type="text/javascript" src="../assets/js/ion.rangeSlider.min.js"></script>


	<script type="text/javascript" src="../assets/js/template.js"></script>
	<script type="text/javascript" src="../assets/js/style-selector.js"></script>
	<!-- End of JS Include Section -->
	*/ ?>

<?php		  
$content = ob_get_contents();
ob_end_clean();
include 'include/header.php';
print $content;
include 'include/footer.php'; 
?>