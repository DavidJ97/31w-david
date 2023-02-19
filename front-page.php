<?php

get_header() ?>
<main>
    <code>front-page.php</code>
    <h3>index.php</h3>
   
        <?php 
        if (have_posts()):
            while (have_posts()) : the_post();
                //the_title('<h1>','</h1>');
                //the_permalink(); ?>
                
                    <h3><a href="<?php the_permalink(); ?>"><?= get_the_title();  ?> </a></h3>
                    <p><?php  echo wp_trim_words(get_the_excerpt(), 4); ?></p>
              
            <?php endwhile; ?>
        <?php endif; ?>   
    
</main> 
<?php get_footer(); ?>