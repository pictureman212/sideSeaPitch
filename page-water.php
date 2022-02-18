<?php 

    /**
 * Water Page
 *
 */
    get_header();


  

    
?>

<main class="water-main content-wrap row">

<?php if(have_rows('water_layout')):?>
    <?php while(have_rows('water_layout')): the_row();?>

<?php if (get_row_layout()=='accordion'):?>
    <?php if(have_rows('accordian_content')):
        $i = 1;
        ?>
<!--Accordian-->        
<section>

<div class="accordion" id="accordionExample">

  <div class="accordion-item">
  <?php while(have_rows('accordian_content')): the_row();
    
?>
    <h2 class="accordion-header" id="heading<?php echo $i;?>">
    
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $i;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>">
      <?php echo (get_sub_field('headline'))?>
      </button>
    </h2>
    <div id="collapse-<?php echo $i;?>" class="accordion-collapse collapse " aria-labelledby="heading<?php echo $i;?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong><?php echo (get_sub_field('strong'))?></strong> <p><?php echo (get_sub_field('text'))?></p>
      </div>
    </div>
  </div>
  <?php 
$i++;
endwhile;?>
</div>
</section>

<?php endif;?>
<?php endif;?>

<!--badge-->
<?php if (get_row_layout()=='badge'):?>
<section>
<h1><?php echo (get_sub_field('headline'))?><span class="badge bg-secondary ms-5 fs-6"> <?php echo (get_sub_field('category'))?></span></h1>
</section>
<?php endif;?>



<!--buttons--->
<?php if (get_row_layout()=='button'):
    $link = get_sub_field('link')?>
<section>
    
<a href="<?php echo ($link['url'])?>"><button type="button" class="btn btn-primary btn-sm m-2"><?php echo ($link['title'])?></button></a>


</section>
<?php endif;?>

<!--Cards-->
<?php if (get_row_layout()=='card'):
    $link01 = get_sub_field('link_01');
    $link02 = get_sub_field('link_02');?>
<section>
<div class="card" style="width: 18rem;">

  <div class="card-body">
    <h3 class="card-title"><?php echo (get_sub_field('title'))?></h3>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo (get_sub_field('subtitle'))?></h6>
    <p class="card-text"><?php echo (get_sub_field('text'))?></p>
    <a href="<?php echo ($link01['url'])?>" class="card-link"><?php echo ($link01['title'])?></a>
    <a href="<?php echo ($link02['url'])?>" class="card-link"><?php echo ($link02['title'])?></a>
  </div>
</div>
</section>
<?php endif;?>


<!--Featured Card-->
<?php if (get_row_layout()=='featured_card'):
    $link = get_sub_field('link');?>
<section>
<div class="card text-center">
  <div class="card-header">
  <?php echo (get_sub_field('headline'))?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo (get_sub_field('title'))?></h5>
    <p class="card-text"><?php echo (get_sub_field('text'))?></p>
    <a href="<?php echo ($link['url'])?>" class="btn btn-primary"><?php echo ($link['title'])?></a>
  </div>
  <div class="card-footer text-muted">
  <?php echo (get_sub_field('category'))?>
  </div>
</div>
</section>
<?php endif;?>












<!--Modal-->
<?php if (get_row_layout()=='modal'):?>
<section>
    
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
<?php echo (get_sub_field('button'))?>
</button>


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo (get_sub_field('title'))?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php echo (get_sub_field('text'))?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo (get_sub_field('close_button'))?></button>
        <button type="button" class="btn btn-primary"><?php echo (get_sub_field('action_button'))?></button>
      </div>
    </div>
  </div>
</div>
</section>
<?php endif;?>

<!--List-->
<?php if (get_row_layout()=='list'):?>
<section>
<ul class="list-group">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
</section>
<?php endif;?>


<!--Image Card-->
<?php if (get_row_layout()=='image_card'):?>
<section>
<div class="card bg-dark text-white">
  <img src="<?php echo (get_sub_field('image'))?>" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title"><?php echo (get_sub_field('title'))?></h5>
    <p class="card-text"><?php echo (get_sub_field('caption'))?></p>
    
  </div>
</div>
</section>
<?php endif;?>


















<?php endwhile;?>
<?php endif;?>

</main>


