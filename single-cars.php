<?php get_header();?>

<section class="page-wrap">
<div class="container">

    <h1 class="mb-5"><?php the_title();?></h1>



    <?php if(has_post_thumbnail()) :?>
        <img src="<?php the_post_thumbnail_url();?>" class="img-fluid mb-5 mt-5">
    <?php endif;?>



    <div class="row">
        <div class="col-lg-6">
            <?php get_template_part('includes/section','cars');?>
        </div>
        <div class="col-lg-6">
            <p>Some information on the right section.</p>
        </div>
    </div>

    

</div>
</section>



<?php get_footer();?>