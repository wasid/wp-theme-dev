<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wordpress_theme_dev
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div class="post-details">
                			    
			    <i class="fa fa-user"></i> <?php the_author(); ?>
			    <i class="fa fa-clock-o"></i><time> <?php the_date(); ?></time>
			    <i class="fa fa-folder"></i> Category: <?php the_category(', '); ?>
			    
			    <i class="fa fa-tags"></i> Tags: <?php the_tags(); ?>		
    			
    			<div class="post-comments-badge">
    				<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number(0, 1, '%'); ?></a>
    			</div><!-- post-comments-badge -->
				<?php edit_post_link('Edit', '<i class="fa fa-pencil"></i>', ''); ?>
			</div><!-- post-details -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	
	<div class="post-image">
	<?php if (the_post_thumbnail()) { ?>
        <?php the_post_thumbnail(); ?>
    <?php } ?>
    </div>
	
	
    <div class="post-excerpt">
        <?php the_excerpt(); ?>
    </div>

	<!--<footer class="entry-footer">-->
	<!--	<?php wordpress_theme_dev_entry_footer(); ?>-->
	<!--</footer>-->
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
