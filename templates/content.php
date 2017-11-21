<article <?php post_class( 'single-article' ); ?>>
<a href="<?php the_permalink(); ?>">
   <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) );?>
   </a>
   <div class="single-article-content">
      <h4 class="entry-title" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
     <small class="text-muted"><?php get_template_part('templates/entry-meta'); ?></small>
     <?php the_content(); ?>
   </div>



</article>
