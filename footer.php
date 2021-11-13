<footer class="site-footer pt-5">
	<div class="container mb-5">
		<div class="row">
			<div class="col-12 col-md-6 text-center text-md-left">
				<h3 class="section-title-dark">Contact <span>Us</span></h3>
			</div>
			<div class="col-6 text-right my-auto<?php if(is_page(159)){ ?> d-none<?php } else { ?> d-none d-md-block<?php } ?>">
				<a class="section-title-link-dark" href="<?php the_permalink(159); ?>" title="More Contact Info">More Contact Info<i class="icons icon-arrow-right ml-2" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
	<div class="footer-contacts">
		<div class="container">
			<div class="row mb-4">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="footer-address">
						<div class="footer-address-text-wrapper d-flex align-items-center justify-content-center">
							<div class="footer-address-text">
								<p>Long Island Office</p>
								<a href="<?php echo otm_get_option('address_link'); ?>" title="Get directions to our Main Headquarters" target="_blank"><?php echo otm_get_option('address_line_1'); ?><br><?php echo otm_get_option('address_line_2'); ?></a>
								<p><small>Main Headquarters</small></p>
							</div>
						</div>
						<iframe class="d-none d-sm-block w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.8184342605914!2d-73.64339208459681!3d40.65593257933795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c27b455aa0c01f%3A0xf5f2e82b29223c54!2s371+Merrick+Rd+%23302%2C+Rockville+Centre%2C+NY+11570%2C+USA!5e0!3m2!1sen!2slv!4v1544620314170" style="border:0; height: 200px;" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="footer-address">
						<div class="footer-address-text-wrapper d-flex align-items-center justify-content-center">
							<div class="footer-address-text">
								<p>New York City Office</p>
								<a href="https://goo.gl/maps/guforJPcHjM2" title="Get directions to our Satellite Office" target="_blank">5 Penn Plaza, 23rd Floor<br>New York, NY 10001</a>
							</div>
						</div>
						<iframe class="d-none d-sm-block w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12089.826910653352!2d-73.9940672!3d40.7519783!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa60793c55697fd97!2sIsaacson%2C+Schiowitz+%26+Korson%2C+LLP!5e0!3m2!1sen!2slv!4v1544559538540" style="border:0; height: 200px;" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="footer-form-wrapper">
						<p class="footer-form-title">Request <span>Free</span> Consultation</p>
					  <form class="footer-contact-form">
					    <input type="hidden" name="suburl" class="sub-url" value="">
					    <input type="hidden" name="submitted-from" class="submitted-from" value="">
					    <!-- TESTING REMOVE ON LIVE -->
					    <input type="hidden" name="test" value="linards@onthemapmarketing.com">
					    <!-- END TESTING SECTION -->
					    <div class="row">
					      <div class="col-12 col-md-4 col-lg-12 input-wrapper">
					        <i class="fas fa-user fa-fw form-icon" aria-hidden="true"></i>
					        <input type="text" name="from" placeholder="Full Name" required>
					      </div>
					      <div class="col-12 col-md-4 col-lg-12 input-wrapper">
					        <i class="fas fa-phone fa-fw form-icon" aria-hidden="true"></i>
					        <input type="text" name="phone" placeholder="Phone Number" required>
					      </div>
					      <div class="col-12 col-md-4 col-lg-12 input-wrapper">
					        <i class="fas fa-envelope fa-fw form-icon" aria-hidden="true"></i>
					        <input type="email" name="sender" placeholder="E-Mail" required>
					      </div>
					    </div>
					    <div class="row">
					      <div class="col-12 input-wrapper text-center">
					        <i class="fas fa-info fa-fw form-icon" aria-hidden="true"></i>
					        <textarea name="msg" placeholder="Message"></textarea>
					      </div>
					    </div>
					    <div class="row">
					      <div class="col-12 input-wrapper">
					        <button class="btn btn-block btn-tertiary" type="submit" title="Send Message">Send Message</button>
					      </div>
					    </div>
					  </form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 col-md-6 col-lg-3 text-center">
					<a class="footer-contact" href="mailto:<?php echo otm_get_option('email'); ?>" title="Send us an Email">
						<span>Email</span>
						<?php echo otm_get_option('email'); ?>
					</a>
				</div>
				<div class="col-6 col-md-6 col-lg-3 text-center">
					<a class="footer-contact" href="fax:<?php echo otm_get_option('fax'); ?>" title="Send us a document by Fax">
						<span>Fax</span>
						<?php echo otm_get_option('fax'); ?>
					</a>
				</div>
				<div class="col-6 col-md-6 col-lg-3 text-center">
					<a class="footer-contact" href="tel:<?php echo otm_get_option('phone_number_intl'); ?>" title="Call Us">
						<span>NYC</span>
						<?php echo otm_get_option('phone_number'); ?>
					</a>
				</div>
				<div class="col-6 col-md-6 col-lg-3 text-center">
					<a class="footer-contact" href="tel:1-516-800-9000" title="Call Us">
						<span>Long Island</span>
						516-800-9000
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<hr>
			<div class="row">
				<div class="copy-content col d-flex justify-content-between flex-column">
					<div class="d-flex align-items-center text-center justify-content-center pt-3 pb-2">
						<p class="m-0"><?php echo do_shortcode(otm_get_option( 'copyright_text' )); ?></p>
					</div>
					<div class="d-flex align-items-center justify-content-center pb-3 py-lg-3">
						<a class="otm-branding-link text-center" href="https://www.onthemapmarketing.com/industries/law-firm-website-design-development/" title="Lawyer Websites &amp; SEO" target="_blank">
							<span class="mb-1 mb-sm-0 d-block d-sm-inline">Lawyer Web Design: </span>
							<img class="otm-branding-logo" style="max-width: 160px;" src="<?php bloginfo('template_url'); ?>/assets/images/otm/otm-logo-blue-white.svg" title="Lawyer Websites &amp; SEO" alt="Websites &amp; SEO">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
<?php get_template_part('includes/footer-options'); ?>

<script>
	AOS.init({
		offset: 200,
		duration: 800,
		delay: 50,
		once: true,
		disable: 'mobile',
	});
</script>

<?php if(is_front_page()): ?>
<script>
//Hero Video
var bv = new Bideo();
bv.init({
  // Video element
  videoEl: document.querySelector('#hero-background-video'),

  // Container element
  container: document.querySelector('body'),

  // Resize
  resize: true,

  isMobile: window.matchMedia('(max-width: 768px)').matches,

  playButton: document.querySelector('#play'),
  pauseButton: document.querySelector('#pause'),

  // Array of objects containing the src and type
  // of different video formats to add
  src: [
    {
      src: '<?php echo get_template_directory_uri(); ?>/assets/videos/hero.mp4',
      type: 'video/mp4'
    },
    {
      src: '<?php echo get_template_directory_uri(); ?>/assets/videos/hero.webm',
      type: 'video/webm;codecs="vp8, vorbis"'
    }
  ],

  // What to do once video loads (initial frame)
  onLoad: function () {
    document.querySelector('#video_cover').style.display = 'none';
  }
});
</script>
<?php endif; ?>

<!-- <script src="//chatterbox-powered.com/scripts/invitation.ashx?company=ISKlaw" async></script> -->
<script src="//app.callbacktracker.com/tracker/c7915da4cb9e9519760109d1e268a4276fa698ac" charset="UTF-8"  async="async" type="text/javascript"></script>
<script type="text/javascript" src="https://d3h66sfd9htnrp.cloudfront.net/otmwidget.run.js?apikey=fd9bfa70-e38c-11e8-97bf-3f7903a3fbd0"></script>
</body>
</html>