<!-- A7 Page.php -->
<?php get_header(); ?>

<!-- Main Page Content -->        

<div class="main-content">
<?php if (have_posts() ) : while (have_posts() ) : the_post();// start loop ?> 
<h3><a href="<?php the_permalink(); //link to page posting ?>"><?php the_title(); //get the title ?></a></h3>
<?php the_content(''); //loop content retrieval ?>
<?php endwhile; endif; //end loop ?>
    
<small>front-page.php</small>
</div>

<h2>Latest Blog Posts</h2>
    <ul class="blogposts">
<?php rewind_posts(); //stop loop ?>
<?php query_posts('showposts=4'); //give directions to loop two ?>
<?php while (have_posts()) : the_post(); // start loop TWO ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>"</a></li>
<?php endwhile; //end loop two ?>
    </ul>


    <!-- What will go in Flexslider --   >     
	 <img src="images/storefront.jpg" alt="Biscuit Bitch Downtown Storefront" height="80%" width="90%">
        
    <h3>Check out the Process, Bitches!</h3>
        <div class="figure">
            
    	  <figure>
		    <img src="images/biscuits1.jpg" alt="Biscuit Photo" title="Fresh Biscuits" />
		  </figure>
            
		  <figure>
		    <img src="images/biscuits.jpg" alt="Biscuits" title="Biscuit Bitch Pike Storefront" />
		  </figure>
            
        </div>
    <!-- What will go in Flexslider -->        

    <h3>#biscuitbitch when you come in, and your pic could show up here!</h3>
<!-- INSTANSIVE WIDGET --><script src="//instansive.com/widget/js/instansive.js"></script><iframe src="//instansive.com/widgets/8e34a79a5c19bd2505fcfa7a8a5eaa19e358a043.html" id="instansive_8e34a79a5c" name="instansive_8e34a79a5c"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

<!-- A6 SIDEBAR -->
<?php get_sidebar(); ?>
<!-- SIDEBAR -->

<?php get_footer(); ?>