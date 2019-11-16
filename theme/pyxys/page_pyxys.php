<?php /* Template Name: PÁGINA PYXYS */ ?>
<?php get_header();?>
<div class="mt-5">
<div class="container">



<?php
   $the_query = new WP_Query(array(
    'post_type' => 'paginas_pyxys',
	//'posts_per_page' => 6,
	'paged' => $paged
    ));			
				
			   while ( $the_query->have_posts() ) :
		$the_query->the_post();
			?>



    <div class="row row_reverse_pyxys">
      <div class="col-lg-6">
        <figure>
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
        </figure>
      </div>
      <div class="col-lg-6">
        <h3 class="display-5"><?php the_title();?></h3>
        <hr>
        <p class="text-justify">
          <?php the_content()?>
        </p>
      </div>
    </div>



        <?php endwhile; ?>
    </div>



    </div>











  <?php get_footer();?>
