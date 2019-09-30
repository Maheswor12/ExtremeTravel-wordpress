<?php
get_header();
?>
<!-- travel-banner-section !-->
<section class="travel-category-banner">
	<div class="mycontainer">
		<div class="banner-text">
			<h1>CONTACT US</h1>
			<nav class="breadcrumbs">
				<ul>
					<li><a href="<?= home_url(); ?>"><i class="fas fa-home"></i>&nbsp;Home</a></li>
					<li><a href="#"><i class="fas fa-list-alt"></i>&nbsp;Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
</section>
<!-- //travel-banner-section !-->
<section class="travel-contact">
	<div class="mycontainer">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 travel-contact">
				<h2 class="form-title">Get in Touch</h2>
				<form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST" role="form">
				<?=  do_shortcode('[contact-form-7 id="155" title="Get in touch"]'); ?>
					<!-- <div class="form-group">
						<label class="form-label" id="nameLabel" for="name"></label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1">
					</div>

					<div class="form-group">
						<label class="form-label" id="emailLabel" for="email"></label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2">
					</div>

					<div class="form-group">
						<label class="form-label" id="subjectLabel" for="sublect"></label>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
					</div>

					<div class="form-group">
						<label class="form-label" id="messageLabel" for="message"></label>
						<textarea rows="6" cols="60" name="message" class="form-control" id="message" placeholder="Your message" tabindex="4"></textarea>
					</div>

					<div class="text-center margin-top-25">
						<button type="submit" class="btn btn-mod btn-border btn-large">Send Message</button>
					</div> -->
				</form>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 travel-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.7074007280853!2d85.34365961416052!3d27.72631908278406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb196636148319%3A0x18818dadf379a809!2sIceberg+Technology!5e0!3m2!1sen!2snp!4v1563694887550!5m2!1sen!2snp" width="600" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="travel-contact-box contact-box1">
					<?php
					$coodestar_contact = get_option('my_framework');
					if ($coodestar_contact['phone'] || $coodestar_contact['office_number'] != "") : ?>
						<ul>
							<li class="text-center"><i class="fas fa-phone"></i></li>
							<?php $coodestar_contact = get_option('my_framework'); ?>
							<li class="text-center"><a href="tel:<?= $coodestar_contact['phone']; ?>"><?= $coodestar_contact['phone']; ?></a> | <a href="tel: <?= $coodestar_contact['office_number']; ?>"><?= $coodestar_contact['office_number']; ?></a></li>
						</ul>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="travel-contact-box contact-box2">
					<?php if ($coodestar_contact['address'] != "") : ?>
						<ul>
							<li class="text-center"><i class="fas fa-map-marker-alt"></i></li>
							<li class="text-center"><?= $coodestar_contact['address']; ?></li>
						</ul>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="travel-contact-box contact-box3">
					<?php if ($coodestar_contact['email'] != "") : ?>
						<ul>
							<li class="text-center"><i class="fas fa-envelope"></i></li>
							<a href="mailto:<?= $coodestar_contact['email']; ?>">
								<li class="text-center"><?= $coodestar_contact['email']; ?></li>
							</a>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>
