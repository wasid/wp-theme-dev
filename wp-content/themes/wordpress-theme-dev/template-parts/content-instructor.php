<?php

    // Advanced Custom Fields - Instructor section
    
    $instructor_section_title   = get_field('instructor_section_title');
    $instructor_name            = get_field('instructor_name');
    $short_bio                  = get_field('short_bio');
    $full_bio                   = get_field('full_bio');
    
    $twitter_username       = get_field('twitter_username');
    $facebook_username      = get_field('facebook_username');
    $google_plus_username   = get_field('google_plus_username');
    
    $num_students  = get_field('num_students');
    $num_reviews   = get_field('num_reviews');
    $num_courses   = get_field('num_courses');

?>

    <section id ="instructor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2><?php echo $instructor_section_title ?> <small><?php echo $instructor_name ?></small></h2>
                        </div>
                        <div class="col-lg-4">
                            <?php if (!empty($twitter_username)) { ?>
                                <a href="#<?php echo $twitter_username ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <?php } ?>
                        
                            <?php if (!empty($facebook_username)) { ?>
                                <a href="#<?php echo $facebook_username ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <?php } ?>
                            
                            <?php if (!empty($google_plus_username)) { ?>
                                <a href="#<?php echo $google_plus_username ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <?php } ?>
                        </div>
                        
                    </div>
                    <p class="lead">
                        <?php echo $short_bio ?>
                    </p>
                    <?php echo $full_bio?>
                    <hr>
                    <h3>The Number's <small>They Don't Lie!</small></h3>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $num_students ?> <span>Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $num_reviews ?>+ <span>Reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $num_courses ?>+ <span>Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>