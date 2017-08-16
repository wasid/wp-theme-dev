<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wordpress_theme_dev
 */

// Advanced Custom Fields - Who should Take this course section
    
    $who_feature_image       = get_field('who_feature_image');
    $who_section_title       = get_field('who_section_title');
    $who_section_body        = get_field('who_section_body');

?>

	<section id="who-benefits">
        <div class="container">
            <div class="section-header">
                <?php if( !empty($who_feature_image) ) : ?>
                    
                    <img src="<?php echo $who_feature_image['url']; ?>" att="<?php echo $who_feature_image['alt']; ?>">
                
                <?php endif; ?>
                
                <h2><?php echo $who_section_title; ?></h2>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php echo $who_section_body; ?>
                </div>
            </div>
        </div>
    </section>