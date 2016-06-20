<!-- A7 single.php -->
<?php get_header(); ?>      

<div class="main-content">
<?php if (have_posts() ) : while (have_posts() ) : the_post();// start loop ?> 
<div id="posting">
<h2><a href="<?php the_title(); // get posting title ?>"></a></h2>
<small>Posted on <?php the_time ('F j, Y'); ?> by <?php the_author(); in <?php the_category(', '); ?></small>
<?php the_post_thumbnail('large'); // get image ?>
<?php the_content(''); // get page content ?>
<?php endwhile; endif; // end loop ?>
<small>single.php</small>
</div>
    

<!-- A6 SIDEBAR -->
<?php get_sidebar(); ?>
<!-- SIDEBAR -->
    
</div>

<?php get_footer(); ?>