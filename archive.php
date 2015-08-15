<?php get_header(); ?>

<h1>Onze publicaties over <?php echo strtolower(single_cat_title('', false)); ?></h1>

<div class="content">

	<div class="articles">

		<?php get_template_part( 'partials/list' ); ?>

	</div>
	<aside>


		<div class="widget widget-posts">
			<div class="widget-content">
				<h3>Meer publicaties:</h3>
				<ul>
					<?php wp_list_categories(array(
						'title_li' => ''
					)); ?>
				</ul>
				<a href="<?php echo home_url(); ?>/publicaties" class="btn" title="Alle publicaties">Alle publicaties</a>

			</div>
		</div>


	</aside>
</div>
<?php get_footer(); ?>