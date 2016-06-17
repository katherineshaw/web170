<!-- A7 single.php -->
<?php get_header(); ?>      

<div class="main-content">
<?php if (have_posts() ) : while (have_posts() ) : the_post();// start loop ?> 
<div id="posting">
<h2><a href="<?php the_permalink(); // link to page posting ?>"><?php the_title();// get page title ?></a></h2>
<small>Posted <?php the_time ('F j, Y'); ?> by <?php the_author_posts_link; ?></small>
<?php the_post_thumbnail('large'); ?>
<?php the_content(''); // get page content ?>
<?php endwhile; endif; // end loop ?>
<p>single.php</p>
</div>
    

<!-- A6 SIDEBAR -->
<?php get_sidebar(); ?>
<!-- SIDEBAR -->
    
</div>

<?php get_footer(); ?>