<!-- SUB NAV -->
<!-- A6 -->
<div id="sidebar">
<?php if (is_page()) : ?>
<h3 class="sub-nav"> 
    <?php echo get_the_title($post->post_parent); //gateway page title ?>
</h3>  
    
<ul class="sub-nav-items"> 
    <?php 
        if ($post->post_parent) {
            wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // IF the page has a parent, list sub-pages without title
        } else {
            wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // if the page does NOT have a parent - list sub-pages without titles
        } ?>
    
</ul>
    
<?php endif; //endif we are in sub pages - the pages not involved in the main navigation ?>
    
<?php if (!(is_page())) : ?>
<h2 class="sub-nav-title">Contact</h2>
<ul class="sub-nav-item"><?php wp_list_categories(array('title_li' => __(''))); // - list categories with no main nav title! ?></ul>
<?php endif; ?>
    
</div>

<!-- SUB-NAV over -->