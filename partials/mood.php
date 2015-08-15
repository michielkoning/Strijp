<?php if (has_post_thumbnail()) : ?>

	<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>
	<?php $image_url = $thumbnail[0]; ?>

<?php else : ?>

	<?php $image_url = get_template_directory_uri() . "/images/mood.png"; ?>

<?php endif ;?>
<div class="mood" style="background-image: url('<?php echo $image_url; ?>');">

	<?php if (get_field('subtitle')) : ?>

		<div class="mood-title"><?php the_field('subtitle'); ?></div>

	<?php endif; ?>
	<?php if (is_front_page() || get_post_ancestors( $post->ID )[0] == EXPERTISE_ID || get_the_ID() == EXPERTISE_ID) : ?>
		<?php
			$expertises = get_pages(array(
			'sort_order' => 'asc',
			'sort_column' => 'menu_order',
			'child_of' => EXPERTISE_ID
			));
		?>

		<?php if ($expertises) : ?>
			<ul class="tabs">
				<?php foreach ( $expertises as $expertise ) : ?>

					<li><a href="<?php echo get_page_link( $expertise->ID ); ?>" title="<?php echo $expertise->post_title;?>"<?php echo (get_the_ID() == $expertise->ID) ? ' class="active"' : ''; ?>><?php echo $expertise->post_title;?></a></li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	<?php endif; ?>
</div>