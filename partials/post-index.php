
<div class="main-article-container">

    
        <div class="row d-sm-flex align-items-center justify-content-center mb-3  text-center text-sm-start px-5 main-article-content">
            <div class="col-md p-2 d-flex justify-content-center slide-left">
            <?php echo get_the_post_thumbnail( $post_id, 'large', array('class' => "img-fluid")); ?>
            </div>
            <div class="col-md p-3 text-white slide-right">
                <h1 class="text-secondary text-uppercase"><?php the_title(); ?></h1>
                <div class="text-primary">
                <?php the_excerpt(); ?>
                </div>
                <!-- # would be replaced with php the_permalink; if this was real site -->
                <a href="#" class="btn btn-info">Read More</a>
            </div>
           
        </div>
    

</div>






  