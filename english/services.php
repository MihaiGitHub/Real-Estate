<?php 
ob_start();

?>
<body class="services">
	<?php include 'include/nav.php'; ?>

	<!--Breadcrumb Section-->
	<section class="breadcrumb-box" data-parallax="scroll" data-image-src="../assets/img/breadcrumb-bg.jpg">
		<div class="inner-container container">
			<h1>Our Services</h1>
			<div class="breadcrumb">
				<ul class="list-inline">
					<li class="home"><a href="../index.html">Home</a></li>
					<li><a href="#">Our Services</a></li>
				</ul>
			</div>
		</div>
	</section>
	<!--Breadcrumb Section-->

	<section class="main-container container">
		<div class="descriptive-section">
			<h2 class="hsq-heading type-2">Our Services</h2>
			<div class="content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda beatae consequuntur doloremque eos eum ex fugit iste labore mollitia necessitatibus odio officiis optio perferendis porro quae qui quia quod reiciendis sit temporibus ullam unde ut vel veniam, vero voluptatum! Dignissimos fugiat iusto numquam. Ad distinctio earum et harum maiores officiis perferendis quia tenetur? Aspernatur dolore doloremque error et, ex hic illo laborum minus modi praesentium, quasi quos repellat soluta!
			</div>
		</div>

		<section class="service-box-container clearfix">
			<div class="col-sm-6 col-md-4 service-box">
				<div class="inner-container">
					<i class="hsq-font-house-percent"></i>
					<div class="title">Selling Your Properties</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet cumque eius id iure minus mollitia perspiciatis possimus quo soluta. Expedita facere hic illum ipsam minima natus quam sapiente, voluptatibus.
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 service-box">
				<div class="inner-container">
					<i class="hsq-font-house-search"></i>
					<div class="title">Best Deals Suggestions</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae dolores dolorum ducimus et eveniet ex explicabo fugiat hic illo, iste natus nostrum officiis pariatur recusandae totam, ut veniam, voluptas.
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 service-box">
				<div class="inner-container">
					<i class="hsq-font-house-dollar"></i>
					<div class="title">Give you professional consultation</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci atque distinctio ducimus eligendi, excepturi, fuga fugiat libero modi molestiae natus nihil nostrum odio quasi reiciendis repudiandae temporibus veniam. Excepturi, nesciunt.
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 service-box">
				<div class="inner-container">
					<i class="hsq-font-house-market"></i>
					<div class="title">Analyzing Real Estate Market</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at consequatur dolore earum facilis laudantium placeat sapiente suscipit. Ducimus enim, ex incidunt iste iure necessitatibus nihil officia saepe, sed sint unde ut, vero voluptatem voluptatum.
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 service-box">
				<div class="inner-container">
					<i class="hsq-font-house-deal"></i>
					<div class="title">Best Price / Best Deal</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eveniet iusto laborum porro, quam quod temporibus veniam. Beatae blanditiis distinctio facilis in, ipsum laborum laudantium numquam, officiis provident quasi voluptatum.
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 service-box">
				<div class="inner-container">
					<i class="hsq-font-house-agreement"></i>
					<div class="title">24/7 Customer Support</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequatur corporis delectus dignissimos distinctio eius error fuga fugiat in laudantium quia quidem quisquam sapiente similique, suscipit totam veniam voluptas voluptate?
					</div>
				</div>
			</div>
		</section>


	</section>

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