<?php
ob_start(); 
session_start();

if(!$_SESSION['auth']){ 
	header('Location: index.php?authen=false');
	exit;
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	print_r($_POST);

	include 'include/dbconnect.php';

	$stmt = $objDb->prepare('INSERT INTO properties (`title`, `description`) VALUES (:title, :description)');
	if($stmt->execute(array('title' => $_POST['p-title'], 'description' => $_POST['p-desc']))){
		echo 'added successfully';
	}
}
?>
<body class="submit-property">
	<?php include 'include/nav.php'; ?>
<span class="submit-property">
	<!--Breadcrumb Section-->
	<section class="breadcrumb-box" data-parallax="scroll" data-image-src="../assets/img/breadcrumb-bg.jpg">
		<div class="inner-container container">
			<h1>Submit Property</h1>

			<div class="breadcrumb">
				<ul class="list-inline">
					<li class="home"><a href="../index.html">Home</a></li>
					<li><a href="#">Submit Property</a></li>
				</ul>
			</div>
		</div>
	</section>
	<!--Breadcrumb Section-->

	<section class="main-container container">
		<div class="descriptive-section">
			<h2 class="hsq-heading type-2">Submit Property</h2>

			<div class="content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda beatae consequuntur doloremque
				eos eum ex fugit iste labore mollitia necessitatibus odio officiis optio perferendis porro quae qui quia
				quod reiciendis sit temporibus ullam unde ut vel veniam, vero voluptatum! Dignissimos fugiat iusto numquam.
				Ad distinctio earum et harum maiores officiis perferendis quia tenetur? Aspernatur dolore doloremque error
				et, ex hic illo laborum minus modi praesentium, quasi quos repellat soluta!
			</div>
		</div>
		<div class="submit-main-box clearfix">
			<form action="submit-property.php" id="submit-property-main-form" method="POST">
				<div class="row t-sec">
					<div class="col-md-6 l-sec">
						<div class="information-box">
							<h3>Basic Details <i class="fa fa-info"></i></h3>

							<div class="box-content">
								<div class="field-row">
									<input type="text" placeholder="Title" id="p-title" name="p-title">
								</div>
								<div class="field-row clearfix">
									<div class="col-xs-6">
										<select id="p-status">
											<option value="0">Property Status</option>
											<option value="1">For Sale</option>
											<option value="2">For Rent</option>
										</select>
									</div>
									<div class="col-xs-6">
										<select id="p-type">
											<option value="0">Property Type</option>
											<option value="1">Apartment</option>
											<option value="2">House</option>
											<option value="3">Villa</option>
											<option value="4">Office</option>
											<option value="5">Condo</option>
										</select>
									</div>
								</div>
								<div class="field-row clearfix">
									<div class="col-xs-6">
										<div class="input-group l-icon">
											<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
											<input type="text" class="form-control number-field" id="p-price"
												   placeholder="Price">
										</div>
									</div>
									<div class="col-xs-6">
										<select id="p-bedroom">
											<option value="0">Bedroom</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">+5</option>
										</select>
									</div>
								</div>
								<div class="field-row clearfix">
									<div class="col-xs-6">
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
									<div class="col-xs-6">
										<select id="garage">
											<option value="0">Garages</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">+5</option>
										</select>
									</div>
								</div>
								<div class="field-row clearfix">
									<div class="col-xs-6">
										<div class="input-group r-icon">
											<input type="text" class="form-control number-field" id="p-land"
												   placeholder="Land Area">
											<span class="input-group-addon">m2</span>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="input-group r-icon">
											<input type="text" class="form-control number-field" id="p-build"
												   placeholder="Build Aria">
											<span class="input-group-addon">m2</span>
										</div>
									</div>
								</div>
								<div class="field-row">
									<textarea name="p-desc" id="p-desc" placeholder="Description"></textarea>
								</div>
							</div>
						</div>

						<div class="information-box">
							<h3>Features <i class="fa fa-info"></i></h3>`

							<div class="box-content">
								<ul class="features-box-submit clearfix">
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-1">
											<input type="checkbox" value="1" id="p-f-1">
											<span></span>
											Attic
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-2">
											<input type="checkbox" value="1" id="p-f-2">
											<span></span>
											Gas heat
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-3">
											<input type="checkbox" value="1" id="p-f-3">
											<span></span>
											Ocean view
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-4">
											<input type="checkbox" value="1" id="p-f-4">
											<span></span>
											Wine cellar
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-5">
											<input type="checkbox" value="1" id="p-f-5">
											<span></span>
											Basketball court
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-6">
											<input type="checkbox" value="1" id="p-f-6">
											<span></span>
											Gym
										</label

									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-7">
											<input type="checkbox" value="1" id="p-f-7">
											<span></span>
											Pound
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-8">
											<input type="checkbox" value="1" id="p-f-8">
											<span></span>
											Fireplace
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-9">
											<input type="checkbox" value="1" id="p-f-9">
											<span></span>
											Lake view
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-10">
											<input type="checkbox" value="1" id="p-f-10">
											<span></span>
											Pool
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-11">
											<input type="checkbox" value="1" id="p-f-11">
											<span></span>
											Back yard
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-12">
											<input type="checkbox" value="1" id="p-f-12">
											<span></span>
											Front yard
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-13">
											<input type="checkbox" value="1" id="p-f-13">
											<span></span>
											Fenced yard
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-14">
											<input type="checkbox" value="1" id="p-f-14">
											<span></span>
											Sprinklers
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-15">
											<input type="checkbox" value="1" id="p-f-15">
											<span></span>
											Washer and dryer
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-16">
											<input type="checkbox" value="1" id="p-f-16">
											<span></span>
											Deck
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-17">
											<input type="checkbox" value="1" id="p-f-17">
											<span></span>
											Balcony
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-18">
											<input type="checkbox" value="1" id="p-f-18">
											<span></span>
											Laundry
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-19">
											<input type="checkbox" value="1" id="p-f-19">
											<span></span>
											Concierge
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-20">
											<input type="checkbox" value="1" id="p-f-20">
											<span></span>
											Doorman
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-21">
											<input type="checkbox" value="1" id="p-f-21">
											<span></span>
											Private space
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-22">
											<input type="checkbox" value="1" id="p-f-22">
											<span></span>
											Storage
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-23">
											<input type="checkbox" value="1" id="p-f-23">
											<span></span>
											Recreation
										</label>
									</li>
									<li class="col-xs-6 col-sm-4 hsq-checkbox">
										<label for="p-f-24">
											<input type="checkbox" value="1" id="p-f-24">
											<span></span>
											Roof Deck
										</label>
									</li>
								</ul>
							</div>
						</div>

						<div class="information-box">
							<h3>Floor Plans <i class="fa fa-info"></i></h3>
							<div class="box-content">
								<div class="uploader-container">
									<div id="floorplan-uploader" class="img-uploader">
										<div id="preview-template" class="preview-box">
											<i class="fa fa-remove" data-dz-remove></i>
											<img data-dz-thumbnail />
											<div class="error text-danger" data-dz-errormessage></div>
											<div class="progress-box" data-dz-uploadprogress></div>
										</div>
										<div class="btn add-images-btn" id="add-floorplan">Brows Image</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 r-sec">
					<div class="information-box">
						<h3>Location <i class="fa fa-info"></i></h3>

						<div class="box-content">
							<div class="field-row">
								<input type="text" placeholder="Address" name="p-address" id="p-address">
							</div>
							<div class="field-row">
								<div id="p-map"></div>
							</div>
							<div class="field-row clearfix">
								<div class="col-xs-6">
									<input type="text" placeholder="Longitude" id="p-long" disabled>
								</div>
								<div class="col-xs-6">
									<input type="text" placeholder="Latitude" id="p-lat" disabled>
								</div>
							</div>

						</div>
					</div>
					<div class="information-box">
						<h3>Neighborhood <i class="fa fa-info"></i></h3>
						<div class="box-content">
							<div class="neighborhood-container">
								<div class="neighborhood-row clearfix" id="neighborhood-pattern">
									<div class="col-xs-4 place-container">
										<input type="text" name="neighborhood[]['place']" class="p-neighbor-place" placeholder="Add a place">
									</div>
									<div class="col-xs-3 distance-container">
										<div class="input-group r-icon">
											<input type="text" name="neighborhood[]['distance']" class="form-control number-field" placeholder="ex: 3" class="p-neighbor-distance">
											<span class="input-group-addon">min</span>
										</div>
									</div>
									<div class="col-xs-5 btn-container">
										<input type="hidden" class="neighbor-by" name="neighborhood[]['by']">
										<div class="btn-group" role="group">
											<button type="button" class="btn" data-value="1"><i class="fa fa-bicycle"></i></button>
											<button type="button" class="btn" data-value="2"><i class="fa fa-train"></i></button>
											<button type="button" class="btn" data-value="3"><i class="fa fa-car"></i></button>
											<button type="button" class="btn" data-value="4"><i class="fa fa-male"></i></button>
										</div>
									</div>
								</div>
								<div class="neighborhood-row clearfix">
									<div class="col-xs-4 place-container">
										<input type="text" name="neighborhood[]['place']" class="p-neighbor-place" placeholder="Add a place">
									</div>
									<div class="col-xs-3 distance-container">
										<div class="input-group r-icon">
											<input type="text" name="neighborhood[]['distance']" class="form-control number-field" placeholder="ex: 3" class="p-neighbor-distance">
											<span class="input-group-addon">min</span>
										</div>
									</div>
									<div class="col-xs-5 btn-container">
										<input type="hidden" class="neighbor-by" name="neighborhood[]['by']">
										<div class="btn-group" role="group">
											<button type="button" class="btn" data-value="1"><i class="fa fa-bicycle"></i></button>
											<button type="button" class="btn" data-value="2"><i class="fa fa-train"></i></button>
											<button type="button" class="btn" data-value="3"><i class="fa fa-car"></i></button>
											<button type="button" class="btn" data-value="4"><i class="fa fa-male"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="add-neighborhood-btn btn bt-default"><i class="fa fa-plus"></i></div>

						</div>
					</div>
					<div class="information-box">
						<h3>Video Presentation <i class="fa fa-info"></i></h3>

						<div class="box-content">
							<div class="field-row">
								<textarea id="p-video" placeholder="Paste the embed code here"></textarea>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="row b-sec">
					<div class="information-box">
						<h3>Gallery <i class="fa fa-info"></i></h3>
						<div class="box-content">
							<div class="uploader-container">
								<div id="gallery-uploader" class="img-uploader">
									<div id="gallery-preview-template" class="preview-box">
										<i class="fa fa-remove" data-dz-remove></i>
										<img data-dz-thumbnail />
										<div class="error text-danger" data-dz-errormessage></div>
										<div class="progress-box" data-dz-uploadprogress></div>
									</div>
									<div class="btn add-images-btn" id="add-gallery">Brows Image</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row b-sec">
					<div class="information-box">
						<button class="btn" type="submit">Save Property</button>
					</div>
				</div>
			</form>
		</div>
	</section>
</span>
<?php		  
$content = ob_get_contents();
ob_end_clean();
include 'include/header.php';
print $content;
include 'include/footer.php'; 
?>