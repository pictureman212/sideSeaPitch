<!--this is the partial for the people custom post type -->
<div class="col-md-6 col-lg-3 py-5">
                <div class="card bg-success" style="--bs-bg-opacity: .5;">
                    <div class="card-body d-flex flex-column text-center text-white ">
                        <div class="rounded-circle mb-3"><?php echo get_the_post_thumbnail( $post_id, 'large', array('class' => "img-fluid rounded-circle mb-3")); ?></div>
                        <h2 class="card-title mb-3 text-uppercase"><?php the_title(); ?></h2>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <!-- # would be replaced with php the_permalink; if this was real site -->
                <a href="#" class="btn  mt-auto btn-primary text-secondary">Read More</a>
                    </div>
                </div>
            </div>