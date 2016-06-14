<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'/>
        
    <!-- WP Head -->
    <?php wp_head(); ?>
    <!-- WP Head END -->
        
    </head>
    
    <body <?php body_class(); ?>>
    
    <header>
        
    <!-- Social Media Icons /* -->
        
        <div class="social">	 
            <a href="https://instagram.com/biscuit_bitch/"><img class="social" src="images/instagram.png" alt="Biscuit Bitch Instagram" height="20px" width="20px"></a>
            <a href="https://twitter.com/biscuitbitch"><img class="social" src="images/twitter.png" alt="Biscuit Bitch Downtown Twitter" height="20px" width="20px"></a>
        <a href="https://www.facebook.com/pages/Biscuit-Bitch/203361459675003?fref=ts><img class="><img class="social" src="images/facebook.png" alt="Biscuit Bitch Downtown Facebook" height="20px" width="20px"></a>
        </div>

    <!-- Social Media Icons End -->
        
    <h2 class="catchphrase">"Trailer Park to Table"</h2>
        <a href="http://katherineshawdesign.com/web200/protosite/"><img class="logo" src="<?php bloginfo('template_directory'); ?>images/biscuitbitchlogo.jpg" alt="Biscuit Bitch Logo" height="15%" width="15%"></a>
        
    <aside class="downtown">
    <p>
    Downtown Hours!
    </p>
    <p>
    Mon-Fri: 7:30am-3pm
    </p> 
    Saturday & Sunday: 8:30am-3pm
    <p>
    CLOSED Tuesdays!    
    </p>
    </aside>
        
    <aside class="belltown">
    <p>
    Belltown Hours!
    </p>
    <p>
    Tues-Fri: 7:30am-3pm
    </p> 
    <p>
    Saturday & Sunday: 8:30am-3pm
    </p>
    <p>
    Friday & Saturday:  9pm-2:30am  
    </p>
    </aside>

    </header>    
        
    <!-- hand coded Navigation Starts 

    <nav class="main center">
      <ul>
  	<li><a href="template.html">About Us</a></li>
  	<li><a href="menu.html">Menu</a></li>
  	<li><a href="press.html">Press</a></li>
	<li><a href="merch.html">Merch</a></li>
	<li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
        
     hand coded Navigation Ends -->
        
    <!-- Navigation wp_nav starts -->
    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'main center', 'items_wrap' => '<ul id="main center" class = nav</ul>',)); ?>
        
    <!-- Navigation wp_nav ends -->