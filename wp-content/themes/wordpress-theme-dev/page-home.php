<?php
/*
    Template Name: Home Page
*/

get_header(); ?>

    <!-- Hero Section-->
    <?php get_template_part( 'template-parts/content', 'hero' ); ?>
    
    <!-- Opt in section -->
    <?php get_template_part( 'template-parts/content', 'optin' ); ?>
    
    <!-- Boots your income -->
    <?php get_template_part( 'template-parts/content', 'boost' ); ?>
    
    <!-- who benefits -->
    <?php get_template_part( 'template-parts/content', 'benifit' ); ?>
    
    <!-- Course features -->
    <?php get_template_part( 'template-parts/content', 'course_features' ); ?>
    
    <!-- Projects Features -->
    <?php get_template_part( 'template-parts/content', 'pro_feature' ); ?>
    
    <!-- Video Featurette -->
    <?php get_template_part( 'template-parts/content', 'featurette' ); ?>
    
    <!-- Instructor -->
    <?php get_template_part( 'template-parts/content', 'instructor' ); ?>
    
    <!-- Testimonials -->
    <?php get_template_part( 'template-parts/content', 'testimonials' ); ?>

<?php

get_footer();
