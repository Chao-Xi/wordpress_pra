<?php
   
   get_header();
?>

     <?php
        //have_posts() database connect 
        //wp_posts is the table 
        if(have_posts())
        {
           while(have_posts())
           {
           	 the_post();
      ?>

     <article class="post">
      <h2><a href="<?php the_permalink();?>" class="title"><?php echo the_title(); ?></a></h2>
      <p><?php echo the_content(); ?></p>
     </article>

      <?php 
       }}
      ?>
      

<?php
         get_footer();
 ?>  

