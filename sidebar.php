<!-- Sub Nav -->

<div id="sub-nav" class="widget">
    
<h3 class="sub-nav-title"> //gateway page title 
    <?php echo get_the_title($post->post_parent); ?>
</h3>  
    
<ul class="sub-nav-items"> 
    <?php 
        if ($post->post_parent) {
            wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // IF the page has a parent
        } else {
            wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // if the page does NOT have a parent - list sub-pages without titles
        } ?>
    
</ul>
</div>