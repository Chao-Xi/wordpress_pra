header.php
1.Language  Settings
  <?php  language_attribute(); ?>

2.charset="<?php bloginfo('charset');?>" 
  charset becomes dynamic
  
  bloginfo('charset')

3.bloginfo('name');
  bloginfo('description'); 

4.wp_head(); wp_footer(); show the dashboard bar 


footer.php
wp_footer();

index.php
get_header(); get_footer(); call the header.php and footer.php automatically

have_posts() database connection
the_posts() 

if(have_posts())
{
	while(have_posts())
	{
	  the_post(); 
	  <a href="<?php the_permalink();?>" class="title"><?php echo the_title(); ?></a>
	  <?php echo the_content(); ?>
	}
}

have_posts() the_post()//Iterate the post index in the loop.
href="the_permalink()"
the_title()
the_content()


functions.php

//autoload the style.css automatically
  function addStyleSheets()
  {
  	wp_enqueue_style('style', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts','addStyleSheets');

  addStyleSheets: wp_enqueue_style('style', get_stylesheet_uri());
  add_action('argument', 'function_name')

style.css
