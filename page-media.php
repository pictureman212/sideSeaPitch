<?php 

    /**
 * Water Page
 *
 */
    get_header();


  

    
?>

<main class="water-main content-wrap row">

<?php if(have_rows('slideshow')):?>
    <!--Carousel-->

<section>

  <?php while(have_rows('slideshow')): the_row();
    ?>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo (get_sub_field('slide'))?>
   " class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="<?php echo (get_sub_field('slide'))?>
   " class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="<?php echo (get_sub_field('slide'))?>
   " class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="<?php echo (get_sub_field('slide'))?>
   " class="d-block w-100" alt="...">
    </div>
    
  </div>
</div>
    
    <?php 

endwhile;?>
</section>
<!--End Carousel-->

<?php endif;?>

</main>


