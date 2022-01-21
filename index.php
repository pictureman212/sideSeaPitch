<?php
/**
 * Default Blog Template
 *
 */

get_header(); ?>

<!--HERO SECTION WITH BACKGROUND VIDEO-->
<section class="text-light p-3  d-flex align-items-center justify-content-start heroMain ">
<div class="overlay"></div>
<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo get_theme_file_uri('src/assets/images/headerVid01.mp4') ?>" type="video/mp4">
  </video> 

    <div class="container">
        
            <div class="w-100 text-white">
                <h1 class="fw-bold">Sharing Knowledge About <span class="text-secondary text-uppercase ">Forests</span> </h1>
                <p class="lead my-3 fw-bold">
                    The expert source on California Forestry
                </p>
                <button class="btn btn-secondary btn-lg">The Foundation</button>
                <button class="btn btn-secondary btn-lg m-3">Donate Now!</button>
            </div>
        
    </div>
</section>

<!--END HERO SECTION-->





<!--MAIN CONTENT USING DEFAULT POST TYPE-->

<div class="index-content" role="main" id="main">

  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      get_template_part( 'partials/post', 'index' );
    endwhile;

    get_template_part( 'partials/post', 'nav' );
  endif;
  ?>

</div>
<!--END MAIN CONTENT-->

<!--Begin Programs-->
<section id="programs" class="p-5 section-four">
    <div class="container">
        <h1 class="text-center text-white">Research Projects</h1>
        <h2 class="lead text-center text-white mb-5">
        ONGOING COLLABORATIVE RESEARCH PROJECTS
        </h2>
        <div class="row g-4">
        <?php
            $homepageProgram = new WP_Query(array(
              'posts_per_page' => 4,
              'post_type' => 'program'
             
            ));
            while($homepageProgram->have_posts()){
              $homepageProgram->the_post();
              get_template_part('partials/post', 'program');
            }?>


        </div>
    </div>
</section>

<!---End Programs-->





<?php // get_sidebar(); ?>

<?php get_footer(); ?>
