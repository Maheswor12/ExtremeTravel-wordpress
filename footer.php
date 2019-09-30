<section class="travel-footer">
	<div class="mycontainer">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="travel-footer-box">
					<h5>QUICK LINKS</h5>
					<ul>
						<li><a href="<?php echo home_url(); ?>"><i class="fas fa-chevron-right"></i>Company profile</a></li>
						<li><a href="<?php echo home_url(); ?>/about"><i class="fas fa-chevron-right"></i>About us</a></li>
						<li><a href="<?php echo home_url(); ?>"><i class="fas fa-chevron-right"></i>Contact us</a></li>
						<li><a href="<?php echo home_url(); ?>"><i class="fas fa-chevron-right"></i>Testimonials</a></li>
					</ul>
					<ul>
						<?php
						$codester_footer = get_option('my_framework');
						$facebook1 = $codester_footer['facebook'];
						if ($facebook1 != "") :
							?>
							<li class="footer-social-icons">
								<a href="<?= $facebook1 ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
							</li>
						<?php endif; ?>
						<?php
						$twitter1 = $codester_footer['twitter'];
						if ($twitter1 != "") :
							?>
							<li class="footer-social-icons">
								<a href="<?= $twitter1; ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
							</li>
						<?php endif; ?>
						<?php
						$linkedin1 = $codester_footer['linkedin'];
						if ($linkedin1 != "") :
							?>
							<li class="footer-social-icons">
								<a href="<?= $linkedin1 ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
							</li>
						<?php endif;  ?>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="travel-footer-box">
					<h5>TOURS IN NEPAL</h5>
					<ul>
						<li><a href="<?php echo home_url(); ?>"><i class="fas fa-chevron-right"></i>Kathmandu Valley</a></li>
						<li><a href="<?php echo home_url(); ?>"><i class="fas fa-chevron-right"></i>Chitwan safari tour</a></li>
						<li><a href="<?php echo home_url(); ?>"><i class="fas fa-chevron-right"></i>Pokhara Tour</a></li>
						<li><a href="<?php echo home_url(); ?>"><i class="fas fa-chevron-right"></i>Mustang Tour</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="travel-footer-box">
					<h5>TREKS IN NEPAL</h5>
					<ul>
						<li><a href="<?php echo home_url(); ?>/package-type/annapurna"><i class="fas fa-chevron-right"></i>Annapurna trek</a></li>
						<li><a href="<?php echo home_url(); ?>/package-type/muktinath/"><i class="fas fa-chevron-right"></i>Muktinath trek</a></li>
						<li><a href="<?php echo home_url(); ?>/package-type/mustang/"><i class="fas fa-chevron-right"></i>Mustang trek</a></li>
						<li><a href="<?php echo home_url(); ?>/package-type/gorepani/"><i class="fas fa-chevron-right"></i>Gorepani trek</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="travel-footer-box">
					<h5>CONTACT DETAILS</h5>
					<ul>
						<?php
						$address1 = $codester_footer['address'];
						if ($address1 != "") :
							?>
							<li><i class="fas fa-map-marker-alt"></i><?= $address1; ?></li>
						<?php endif; ?>
						<?php
						$phone1 = $codester_footer['phone'];
						if ($phone1 != "") :
							?>
							<li><a href="tel:<?= $phone1; ?>"><i class="fas fa-phone"></i><?= $phone1; ?></a></li>
						<?php endif; ?>
						<?php
						$email1 = $codester_footer['email'];
						if ($email1 != "") :
							?>
							<li><a href="mailto:<?= $email1; ?>"><i class="fas fa-envelope"></i><?= $email1; ?></a></li>
						<?php endif;  ?>
						<li class="travel-footer-inquery-btn"><a href="#" class="inquiry-btn" id="myBtn">SUBSCRIBE NOW</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 affiliation">
				<h6>WE ARE AFFILIATED WITH</h6>
				<ul>
					<?php
					$parentfeedback = get_option('my_framework');
					$parentfeedback1 = $parentfeedback['parentfeedback'];
					if ($parentfeedback1 != "") :
						foreach ($parentfeedback1 as $feed) :
							?>
							<li><a href="<?php echo $feed['Link']; ?>">
									<?php if ($feed['image1']['url'] != "") : ?>
										<img src="<?php echo $feed['image1']['url']; ?>">
									<?php endif; ?>
								</a></li>
						<?php
						endforeach;
					endif;
					?>
				</ul>
			</div>
			<div class="col-lg-6 payment-method">
				<h6>WE ACCEPT</h6>
				<ul>
					<li><img src="<?= home_url(); ?>/wp-content/uploads/2019/07/Mastercard-logo.jpg" alt="affiliation logo 1"></li>
					<li><img src="<?= home_url(); ?>/wp-content/uploads/2019/07/Visa-Logo-design-Vector-Download.png" alt="affiliation logo 2"></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-lg-12 copyright">
		<div class="footer-copyright">
			<p>&copy;
				<?php
				$copyright = get_option('my_framework');
				$copyright1 = $copyright['copyright'];
				echo $copyright1;
				?>
				<a href="https://icebergtechnepal.com/">Iceberg Technology</a>
			</p>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header" style="padding:35px 50px;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body" style="padding:40px 50px;">
				
						<?php echo do_shortcode('[contact-form-7 id="361" title="subscribe"]'); ?>
					
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
<?php wp_footer(); ?>

</html>