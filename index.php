<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
				<div id="post-<?php the_ID(); ?>" <?php post_class()?>>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
					<span class="post-meta">Posted by <?php the_author(); ?> on <?php the_time('d/m/Y') ?></span>
					<?php edit_post_link(__('Edit'));?>
					<?php the_field('text'); ?>
				</div><!-- .post --> 

	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched you\'re criteria.'); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>