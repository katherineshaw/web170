<?php get_header(); ?>
<title><?php bloginfo('description'); ?> // <?php bloginfo('name'); ?></title>
<!-- Main Page Content -->        
	 <img src="images/storefront.jpg" alt="Biscuit Bitch Downtown Storefront" height="80%" width="90%">

<div class="first_Index">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
<?php the_content(''); // get page or posting written content ?>
<?php endwhile; endif; // end the loop ?>
</div>
        
    <h3>Check out the Process, Bitches!</h3>
        <div class="figure">
            
    	  <figure>
		    <img src="images/biscuits1.jpg" alt="Biscuit Photo" title="Fresh Biscuits" />
		  </figure>
            
		  <figure>
		    <img src="images/biscuits.jpg" alt="Biscuits" title="Biscuit Bitch Pike Storefront" />
		  </figure>
            
        </div>
    <h3>#biscuitbitch when you come in, and your pic could show up here!</h3>
<!-- INSTANSIVE WIDGET --><script src="//instansive.com/widget/js/instansive.js"></script><iframe src="//instansive.com/widgets/8e34a79a5c19bd2505fcfa7a8a5eaa19e358a043.html" id="instansive_8e34a79a5c" name="instansive_8e34a79a5c"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

<?php get_footer(); ?>