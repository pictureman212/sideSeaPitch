<?php
/**
 * Default page template
 *
 */

get_header();

$title = get_field('hero_headline');
$span = get_field('hero_span');
$subtitle = get_field('hero_subheading');
$linkOne = get_field('link_one');
$linkTwo = get_field('link_two');
$video = get_field('background_video');




?>
/**
Hero Section 
*/
<section class="text-light p-3  d-flex align-items-center justify-content-start heroMain ">
<div class="overlay"></div>
<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo $video ?>" type="video/mp4">
  </video> 

    <div class="container">
        
            <div class="w-100 text-white">
             
                <h1 class="fw-bold"><?php  echo $title;?> 
                <span class="text-secondary text-uppercase "><?php  echo $span;?> </span> </h1>
                <p class="lead my-3 fw-bold">
                <?php  echo $subtitle;?> 
                </p>
                <a href="<?php echo $linkOne['url'];?>" target="<?php echo $linkOne['target'];?>"><button class="btn btn-secondary btn-lg"><?php echo $linkOne['title'];?></button>
                </a>

                <a href="<?php echo $linkTwo['url'];?>" target="<?php echo $linkTwo['target'];?>"><button class="btn btn-secondary btn-lg"><?php echo $linkTwo['title'];?></button>
                </a>
                
               
            </div>
        
    </div>
</section>










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

<main class="content-wrap page-content">



</main>

<?php get_footer(); ?>