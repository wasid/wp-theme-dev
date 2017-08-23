<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wordpress_theme_dev
 */

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
        <h1 class="page-title">404! page not found!</h1>
    </section>
        <!--Blog Content-->

    <div class="container">
        <div class="row" id="primary">
            <main id="content" class="col-sm-8" role="main">

			<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wordpress-theme-dev' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<h3>Resouces</h3>
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the resouces below?', 'wordpress-theme-dev' ); ?></p>

					    <div class="resource-row clearfix">
                        <?php $loop = new WP_Query( array( 'post_type' => 'course_resources', 'orderby' => 'post_id', 'order' => 'ASC'  )); ?>
                
                        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                        
                        <?php
                            $resource_image = get_field('resource_image');
                            $resource_url   = get_field('resource_url');
                            $button_text    = get_field('button_text');
                        ?>
    						<div class="resource">
    							<img src="<?php echo $resource_image[url]; ?>" alt="<?php echo $resource_image[alt]; ?>">
    							
    							<h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>
    							     
    							     <?php the_content(); ?>
    							     
    				    		<?php if (!empty($button_text)) { ?>
    				    		    <a href="<?php echo $resource_url ?>" class="btn btn-success"><?php echo $button_text ?></a>
    				    		<?php } ?>
    				    		
    						</div><!-- resource -->
				        <?php endwhile; wp_reset_query(); ?>
					    </div>

					<div class="widget widget_categories">
						<h4 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'wordpress-theme-dev' ); ?></h4>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'wordpress-theme-dev' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'title=Our Archives', "before_title=<h4 class='widgettitle'>&after_title=</h4>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud', 'title=Our Tags', "before_title=<h4 class='widgettitle'>&after_title=</h4>" );
						
					?>
					<p>.....or, just go back to the <a href="<?php echo esc_url(home_url('/')); ?>">Home Page</a></p>
				</div><!-- .page-content -->
			</div><!-- .error-404 -->

			</main><!-- #main -->
			<aside class="col-sm-4">
	        	<?php get_sidebar(); ?>	
	        </aside><!-- sidebar -->
		</div><!-- #primary -->
	</div><!-- container -->

<?php
get_footer();
