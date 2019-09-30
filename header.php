<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php
	// for favicon of site
	$codestar_header = get_option('my_framework');
	$favicon1 = $codestar_header['favicon1'];
	if ($favicon1 != "") :
		?>
		<link rel="shortcut icon" href="<?php echo $favicon1['url']; ?>" />
	<?php endif; ?>
	<?php wp_head(); ?>
	<title><?php bloginfo('name'); ?></title>
</head>

<body>
	<!-- header-top -->
	<section class="header-top">
		<div class="mycontainer">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2 logo-div">
					<?php
					$logo1 = $codestar_header['header_logo1'];
					if ($logo1 != "") :
						?>
						<div class="logo">
							<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo1['url']; ?>"></a>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 travel-header-top-contact">
					<div class="header-top-contact">
						<ul>
							<?php
							$email1 = $codestar_header['email'];
							if ($email1 != "") :
								?>
								<li class="hb">
									<h5>EMAIl</h5>
									<p>
										<a href="mailto:<?= $email1; ?>"><?= $email1; ?></a>
									</p>
								</li>
							<?php endif; ?>
							<?php
							$phone1 = $codestar_header['phone'];
							if ($phone1 != "") :
								?>
								<li class="hb">
									<h5>CALL US</h5>
									<p>
										<a href="tel:<?= $phone1; ?>"><?= $phone1; ?></a>
									</p>
								</li>
							<?php endif; ?>
							<?php
							$working1 = $codestar_header['working'];
							if ($working1 != "") :
								?>
								<li class="hb">
									<h5>WORKING HOURS</h5>
									<p>
										<?= $working1; ?>
									</p>
								</li>
							<?php endif;  ?>
						</ul>
					</div>
				</div>
				<div class="col-lg- col-md-2 col-sm-2">
					<div class="header-top-followus">
						<ul>
							<li class="hb">
								<h5>FOLLOW US</h5>
							</li>
						</ul>
						<ul>
							<?php
							$facebook1 = $codestar_header['facebook'];
							if ($facebook1 != "") :
								?>
								<li class="social-icons">
									<a href="<?= $facebook1; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
								</li>
							<?php endif; ?>
							<?php
							$twitter1 = $codestar_header['twitter'];
							if ($twitter1 != "") :
								?>
								<li class="social-icons">
									<a href="<?= $twitter1; ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
								</li>
							<?php endif; ?>
							<?php
							$linkedin1 = $codestar_header['linkedin'];
							if ($linkedin1 != "") :
								?>
								<li class="social-icons">
									<a href="<?= $linkedin1; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //header-top -->

	<!-- navigation-bar -->
	<section class="navigation">
		<div class="navbar">
			<div class="mycontainer">
				<div class="row">
					<div class="col-lg-12">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						));
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- //navigation-bar -->