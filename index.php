<?php get_header(); ?>

<h1>Onze publicaties</h1>

<div class="content">
	<div class="articles">

		<?php get_template_part( 'partials/list' ); ?>

	</div>
	<aside>

		<div class="widget widget-categories">
			<div class="widget-content">
				<h3>Meer publicaties:</h3>
				<ul>
					<?php wp_list_categories(array(
						'title_li' => ''
					)); ?>
				</ul>
			</div>
		</div>

	</aside>
</div>
<?php get_footer(); ?>