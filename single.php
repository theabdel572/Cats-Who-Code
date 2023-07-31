<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div id="post-<?php the_ID(); ?>" <?php post_class()?>>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <p>Single Page</p>
			<?php the_content(); ?>
			
			<span class="post-meta">Posted by <?php the_author(); ?> on <?php the_time('d/m/Y') ?>
				<br>
				<?php the_tags(); ?>
				<?php the_category(); ?>
			</span>

		</div><!-- .post --> 

	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched you\'re criteria.'); ?></p>
	<?php endif; ?>

	<?php comments_template( '', true );;?>

<?php get_footer(); ?>