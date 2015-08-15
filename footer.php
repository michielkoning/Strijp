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
			<div class="follow-us">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt=""></a>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt=""></a>
			</div>

		</div>
		<div class="footer-col">
			<h2>Aangesloten bij:</h2>
			<div class="partners">
				<a href="https://www.advocatenorde.nl/" class="partner-advocatenorde" target="_blank" title="Nederlandse orde van advocaten"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-orde-van-advocaten.png" alt="Nederlandse orde van advocaten"></a>
				<a href="http://www.rvr.org/" class="partner-rvr" target="_blank" title="Raad van Rechtsbijstand"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-rvr.png" alt="Raad van Rechtsbijstand"></a>
			</div>
		</div>


	</footer>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
	var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>

<script src="<?php echo get_template_directory_uri(); ?>/scripts/functions.js"></script>

<?php wp_footer(); ?>

</body>
</html>