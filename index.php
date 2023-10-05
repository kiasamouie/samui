<?php
	$data = json_decode(file_get_contents("data.json"), true);
	$socials = $data['socials'];
	$keys = array_keys($socials);
	shuffle($keys);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $data['title'] ?></title>
	<meta name="description" content="<?php echo $data['title'] ?>">
	<meta name="author" content="<?php echo $data['title'] ?>">
	<meta name="keywords" content="music production, beats, mixing, mastering, music studio, portfolio, soundcloud, spotify, apple music, youtube, contact,social media, collaborations, projects, genre, tracks, artist, bio, testimonials, store, events">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="img/icons/logo.png" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/slit-slider.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="https://kit.fontawesome.com/6bee25835f.js" crossorigin="anonymous"></script>
</head>

<body id="body">
	<header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="header-brand">
					<img src="img/icons/logo.png" alt="logo" width="30" height="30" />
					<h1 class="navbar-brand"><?php echo $data['title'] ?></h1>
				</div>
			</div>
			<!-- <nav class="collapse navbar-collapse navbar-right" role="navigation">
				<ul id="nav" class="nav navbar-nav">
					<li><a href="#body">Home</a></li>
					<li><a href="#price">Price</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav> -->
		</div>
	</header>
	<main class="site-content" role="main">
		<section id="home-slider">
			<div id="slider" class="sl-slider-wrapper">
				<?php for ($i = 0; $i < count($socials); $i++) { $name = $keys[$i]; $data = $socials[$name]; ?>
					<div class="sl-slider">
						<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
							<div class="bg-img" style="background-image: url(img/slider/<?php echo $name; ?>.png);"></div>
							<div class="slide-caption">
								<div class="caption-content">
									<div class="caption-box">
										<h2 class="animated fadeInDown"><?php echo $name ?></h2>
										<?php foreach ($data as $social => $url) { ?>
											<a href="<?php echo $url ?>" target="_blank">
												<i class="fab fa-<?php echo $social ?>">&nbsp;</i> <?php echo ucfirst($social) ?>
											</a>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<nav id="nav-arrows" class="nav-arrows visible-xs visible-sm visible-md visible-lg">
					<a href="javascript:;" class="sl-prev"><i class="fa fa-angle-left fa-3x"></i></a>
					<a href="javascript:;" class="sl-next"><i class="fa fa-angle-right fa-3x"></i></a>
				</nav>
			</div>
		</section>
	</main>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.singlePageNav.min.js"></script>
	<script src="js/jquery.slitslider.js"></script>
	<script src="js/jquery.ba-cond.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>