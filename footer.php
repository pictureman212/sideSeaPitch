<?php
/**
 * Default Footer Template
 *
 */
?>

<footer class="footer text-center text-lg-start bg-info role="contentinfo">

      <div class="container text-center text-md-start py-4"">
         <div class="row mt-3">
         <div class="col-lg-2 col-xl-2 mx-auto mb-4">
            
            <nav class="nav-footer-wrap" role="navigation">
        <?php h5bs_footer_nav(); ?>
            </nav>
            </div>
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            
           
            <ul class="list-group list-group-flush list-unstyled text-secondary">
                    <li class="list-group-item">
                        <span class="fw-bold">Main Location:</span> 1215 K Street Suite 1835 Sacremento, Ca
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Phone:</span> 555-867-5309
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Email:</span> Main@center.mail.com
                    </li>
                </ul>
                
                <p class="text-secondary">
            A website demo pitch for a Junior Developer position with Side Sea by Tim Hunt
            </p>
            <a href="#"><i class="bi bi-twitter text-secondary mx-1"></i></a>
            <a href="#"><i class="bi bi-facebook text-secondary mx-1"></i></a>
            <a href="#"><i class="bi bi-linkedin text-secondary mx-1"></i></a>
            <a href="#"><i class="bi bi-instagram text-secondary mx-1"></i></a>
          </div>
      
        
          
          <div id='map' class="col-md-3" style='width: 500px; height: 400px;'></div>
         
        </div>
        
      </div>

    
  
   
    <div class="p-5 bg-info text-secondary text-center position-relative">
     <p>&copy; <?= date( 'Y' ); ?> <?= get_bloginfo( 'name' ); ?> demo by <a class="text-reset fw-bold" href="https://www.timhuntdesigns.com">Tim Hunt</a></p>
      

      <a href="#" class="position-absolute bottom-0 end-0 p-5 link-secondary">Back to top</a>
    </div>
    
  </footer>


<?php wp_footer(); ?>

 
</body>
</html>


