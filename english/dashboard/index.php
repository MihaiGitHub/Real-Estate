<?php
ob_start(); 
session_start();

if(!$_SESSION['auth']){ 
	header('Location: index.php?authen=false');
	exit;
}
/*
// Session timeout after 15 minutes
if((time() - $_SESSION['last_access']) > 1200){
	header('Location: index.php?timeout');
	exit;
} else {
	$_SESSION['last_access'] = time();
}
*/

if(array_key_exists('logout', $_GET)){
	session_unset();
	$green = 'You have been logged out successfully.';

	header("Location:../index.php");
}

include 'include/dbconnect.php';

$stmt = $objDb->prepare('SELECT id, title, description, lat, lng, price, bedrooms, bathrooms FROM properties WHERE uid = :uid');
$result = $stmt->execute(array('uid' => $_SESSION['id']));
$stmt->setFetchMode(PDO::FETCH_ASSOC);
?>

<body class="property-listing-page grid">
		<?php include 'include/nav.php'; ?>

	<!--Breadcrumb Section-->
	<section class="breadcrumb-box" data-parallax="scroll" data-image-src="../assets/img/breadcrumb-bg.jpg">
		<div class="inner-container container">
			<h1>Property Listing - Grid</h1>
			<div class="breadcrumb">
				<ul class="list-inline">
					<li class="home"><a href="../index.html">Home</a></li>
					<li><a href="#">Property Listing - Grid</a></li>
				</ul>
			</div>
		</div>
	</section>
	<!--Breadcrumb Section-->

	<!-- Recent Properties -->
	<section class="property-listing boxed-view clearfix">
		<div class="text-section container">
			<h2 class="hsq-heading type-2">Property Listing - Grid View</h2>
			<div class="description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse fugit illo ipsam iusto reiciendis tempora vel! Ad adipisci aliquid, asperiores aspernatur debitis deleniti, dolor dolorem enim eos eum, incidunt labore tempore? Accusantium aliquam at aut commodi consequatur culpa cum deleniti deserunt enim est ex excepturi harum id incidunt inventore ipsam iste libero, maiores minus nemo obcaecati officiis optio pariatur placeat provident quisquam ratione sapiente soluta temporibus vel veniam veritatis voluptatem.
			</div>
		</div>
		<div class="inner-container container">
			<?php while($row = $stmt->fetch()){ 
						$stmt2 = $objDb->prepare('SELECT id, url FROM properties_images WHERE pid = :pid');
						$result2 = $stmt2->execute(array('pid' => $row['id']));
						$stmt2->setFetchMode(PDO::FETCH_ASSOC);
						$row2 = $stmt2->fetch();
				?>
				<div class="property-box col-xs-12 col-sm-6 col-md-4 wow fadeInUp">
					<div class="inner-box">
						<a href="#" class="img-container">
							<span class="tag-label foreclosure">Foreclosure</span>
							<img src="<?php echo $row2['url']; ?>" alt="Image of Property">
							<span class="price">$<?php echo $row['price']; ?></span>
						</a>

						<div class="bottom-sec">
							<a href="#" class="title"><?php echo $row['title']; ?></a>

							<div class="desc">
									<?php echo $row['description']; ?>
							</div>
							<div class="extra-info clearfix">
								<div class="area col-xs-4">
									<div class="value">105</div>
									m2
								</div>
								<div class="bedroom col-xs-4">
									<div class="value"><?php echo $row['bedrooms']; ?></div>
									bed
								</div>
								<div class="bathroom col-xs-4">
									<div class="value"><?php echo $row['bathrooms']; ?></div>
									bath
								</div>
							</div>
						</div>
						<a href="#" class="btn more-link">More</a>
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
	</section>
	<!-- End of Recent Properties -->

	<!-- JS Include Section
	<script type="text/javascript" src="../assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/helper.js"></script>
	<script type="text/javascript" src="../assets/js/template.js"></script>
	<script type="text/javascript" src="../assets/js/style-selector.js"></script> -->
	<!-- End of JS Include Section -->

<?php		  
$content = ob_get_contents();
ob_end_clean();
include 'include/header.php';
print $content;
include 'include/footer.php'; 
?>