<?php get_header(); ?>

<?php if (is_category()) : ?>
	<h1>Onze publicaties over <?php echo strtolower(single_cat_title('', false)); ?></h1>
<?php elseif (is_author()) : ?>
	<h1>De publicaties van <?php the_author(); ?></h1>
<?php endif; ?>

<div class="content">

	<div class="articles">

		<?php get_template_part( 'partials/list' ); ?>

	</div>
	<aside>

		<?php if (is_category()) : ?>

			<div class="widget widget-posts">
				<div class="widget-content">
					<h3>Onze categori&euml;n:</h3>
					<ul>
						<?php wp_list_categories(array(
							'title_li' => ''
						)); ?>
					</ul>
					<a href="<?php echo home_url(); ?>/publicaties" class="btn" title="Alle publicaties">Alle publicaties</a>

				</div>
			</div>
		<?php else : ?>

			<div class="widget widget-author">
				<div class="image"><?php echo get_avatar( get_the_author_meta( 'ID' ), '150' ); ?></div>

				<h2 class="author-heading"><?php printf( 'Over %s', get_the_author() ); ?></h2>

				<p><?php echo get_the_author_meta( 'intro' ) ; ?></p>
				<p class="contact-info">
					<span class="glyphicon glyphicon-mail"></span><a class="email" href="mailto:<?php the_author_meta( 'email' ); ?>"><?php the_author_meta( 'email' ); ?></a>
				</p>
				<a class="btn" href="<?php echo site_url(); ?>/advocaten#<?php echo get_the_author_meta( 'nicename' ); ?>">
					<?php printf( 'Lees meer over %s', get_the_author() ); ?>
				</a>
			</div>

		<?php endif; ?>

	</aside>
</div>
<?php get_footer(); ?>