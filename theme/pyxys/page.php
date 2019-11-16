<?php get_header();?>
<div class="mt-5">
    <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
            <h3 class="display-3"><?php the_title();?></h3>
   
        <hr>
        <p class="text-justify">
            <?php the_content()?>
        </p>
        <?php endwhile; else: ?>
        <p>
            <?php _e('Sorry, no posts matched your criteria.'); ?>
        </p>
        <?php endif; ?>
</div>
<?php get_footer();?>