<?php get_header();?>

<section class="page-wrap">
<div class="container">





    <section class="row">

        <div class="col-lg-3">
                <?php if(is_active_sidebar('page-sidebar')): ?>
                <?php dynamic_sidebar('page-sidebar');?>
                <?php endif;?>
        </div>

        <div class="col-lg-9">
                <h1 class="mb-4"><?php the_title();?></h1>
                <?php get_template_part('includes/section','content');?>

                
                <?php if(has_post_thumbnail()) :?>
                    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid mb-4 mt-4 img-thumbnail">
                <?php endif;?>
        </div>

        

    </section>

   


    

</div>
</section>



<?php get_footer();?>