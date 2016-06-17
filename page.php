<!-- A7 Page.php -->
<?php get_header(); ?>

<!-- Main Page Content -->        

<div class="main-content">
<?php if (have_posts() ) : while (have_posts() ) : the_post();// start loop ?> 

<h2><a href="<?php the_permalink(); // link to page posting ?>"><?php the_title();// get page title ?></a></h2>
<?php the_content(''); // get page content ?>
<?php endwhile; endif; // end loop ?>
<p>page.php</p>
</div>

<!-- A6 SIDEBAR -->
<?php get_sidebar(); ?>
<!-- SIDEBAR -->

<?php get_footer(); ?>