<!--<h1>Hello World</h1>-->
<?php
/*
Template Name: Special Template
*/
get_header();

if (have_posts()) :
    while(have_posts()):the_post();?>
        <article class="post page">
            <h2><?php the_title();?></h2>
            <h1>this is a test</h1>
            <?php the_content(); ?>
        </article>
    <?php endwhile;

else :
    echo '<p>No Content found</p>';
endif;

get_footer();
?>
