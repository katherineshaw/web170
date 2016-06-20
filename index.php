<?php get_header(); ?>
<title><?php bloginfo('description'); ?><?php bloginfo('name'); ?></title>
<!-- Content -->        

<div class="main-content">
<?php if ( have_posts()) : while ( have_posts()) : the_post();// start loop ?> 
    
    <article class="post-excerpt">
<h4><a href="<?php the_permalink(); // link to the page ?>"><?php the_title();// get page title ?></a></h4>
<small>Posted on <?php the_time('F j, Y'); //retrieve time ?> by <?php the_author(); //retrieve author ?> in <?php the_category(', '); //retrieve category ?></small>
<a href="<?php the_permalink(); //link to posting ?>"> 
<?php the_post_thumbnail('thumbnail'); //get thumbnail ?></a>    
<?php the_excerpt(''); // get excerpt from post ?>
        <p class="read-more"><a href="<?php the_permalink(); //link to FULL posting via read more tag ?>">Read More!</a></p>
    </article>
<?php endwhile; endif; // end loop ?>
<small>index.php</small>

</div>
        
<!-- A6 SIDEBAR -->
<?php get_sidebar(); ?>
<!-- SIDEBAR -->

<?php get_footer(); ?>