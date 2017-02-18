	</div>
	<footer>
		<div class="footer-col">
			<h2>Expertises</h2>
			<?php $expertises = get_pages(array(
					'sort_order' => 'asc',
					'sort_column' => 'menu_order',
					'child_of' => EXPERTISE_ID
				)); ?>
			<?php if ($expertises) : ?>

				<ul>

					<?php foreach ( $expertises as $expertise ) : ?>
						<li><a href="<?php echo get_page_link( $expertise->ID ); ?>" title="<?php echo $expertise->post_title;?>"><?php echo $expertise->post_title;?></a></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
		<div class="footer-col">
			<h2>Over Strijp</h2>
			<?php wp_nav_menu( array(
				'theme_location'  => 'footer'
			));?>
		</div>
		<div class="clearfix-footer-cols"></div>
		<div class="footer-col">
			<h2>Adresgegevens</h2>
			<p>
				Strijp advocatuur<br>
				Freddy van Riemsdijkweg 4<br>
				5657 EE Eindhoven<br>
				KVK nr. 59036168
			</p>
			<p class="contact-info">
				<span class="glyphicon glyphicon-mail"></span><a href="mailto:info@strijpadvocatuur.nl">info@strijpadvocatuur.nl</a><br>
				<span class="glyphicon glyphicon-phone"></span><a href="tel:040 251 60 30">040 251 60 30</a><br>
				<span class="glyphicon glyphicon-fax"></span>040 251 80 91
			</p>
			<a href="https://maps.google.com?daddr=Freddy+van+Riemsdijkweg+4+Eindhoven" title="Routebeschrijving" class="btn" target="_blank">Routebeschrijving</a>
			<!-- div class="follow-us">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt=""></a>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt=""></a>
			</div-->

		</div>
		<div class="footer-col">
			<h2>Aangesloten bij:</h2>
			<div class="partners">
				<a href="https://www.advocatenorde.nl/" class="partner-advocatenorde" target="_blank" title="Nederlandse orde van advocaten"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-orde-van-advocaten.png" alt="Nederlandse orde van advocaten"></a>
				<a href="http://www.rvr.org/" class="partner-rvr" target="_blank" title="Raad van Rechtsbijstand"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-rvr.png" alt="Raad van Rechtsbijstand"></a>
				<a href="https://www.juridischloket.nl/" class="partner-juridisch-loket" target="_blank" title="Het juridisch loket"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-juridisch-loket.png" alt="Het juridisch loket"></a>
			</div>
		</div>


	</footer>
</div>

<script>
	var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>

<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21327909-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<?php wp_footer(); ?>

</body>
</html>