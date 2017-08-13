<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wordpress_theme_dev
 */

 // Advanced Custom Fields - Boost your income section
    
    $project_featureTitle = get_field('project_featureTitle');
    $project_featureBody  = get_field('project_featureBody');
?>

    <section id="project-features">
        <div class="container">
            <h2><?php echo $project_featureTitle; ?></h2>
            <p class="lead"><?php echo $project_featureBody; ?></p>
            <div class="row">
                
                <?php $loop = new WP_Query( array( 'post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC'  )); ?>
                
                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                
                <div class="col-sm-4">
                    <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                    ?>
                    <h3><?php the_title(); ?></h3>
                    <p>
                        <?php the_content(); ?>
                    </p>
                
                </div>    
                
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
        
    </section>