<?php get_header(); ?>

    <!--  Contenido articulo   -->
    <div class="container">
        <div class="row">
                <!-- articulo --> 
                <div class="col-12 col-md-9 my-5">
                <?php if (have_posts()):
                  while (have_posts()) : the_post(); ?>
                      <!-- img -->
                      <?php if (has_post_thumbnail()){
                        the_post_thumbnail('post-thumbnail', array('class' =>'img-fluid'));
                      } ?>
                      <h2 class="my-3"><?php the_title();?></h2>
                      <p class="lead"><?php echo get_the_date();?></p>
                      <div class="text-justify">
                        <?php the_content(); ?>
                      </div>
                  <?php endwhile;  endif; ?>
                </div>

                <!-- Fin articulo -->

                <!-- Aside -->
                <div class="col-12 col-md-3">
                    <div class="my-3">
                        <h3>Lorem ipsum</h3>
                        <img src="https://loremflickr.com/940/788" class="img-fluid">
                    </div>
                    <div class="my-3">
                        <h3>Lorem ipsum</h3>
                        <img src="https://loremflickr.com/940/788" class="img-fluid">
                    </div>
                    <div class="my-3">
                        <h3>Lorem ipsum</h3>
                        <img src="https://loremflickr.com/940/788" class="img-fluid">
                    </div>

                </div>
                <!-- Fin Aside -->
        </div>
    </div>
    <!--  Fin Contenido rticulo    -->
 
    <?php get_footer(); ?>