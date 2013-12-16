<?php get_header(); ?>
		<div class="entry">
			<?php if (have_posts()) : ?>
			
		<?php while (have_posts()) : the_post(); ?>
			
			<div <?php post_class('post') ?> id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

				
					<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>

		<?php endwhile; ?>
		
		<?php else : ?>
		
			<?php mf_print_not_found(); ?>

		<?php endif; ?>
				</div>
				<?php get_sidebar(); ?>

<?php get_footer(); ?>