<?php get_header();?>

<section class="page-wrap">
<div class="container">

    <h1 class="mb-5"><?php the_title();?></h1>



    <?php if(has_post_thumbnail()) :?>
        <img src="<?php the_post_thumbnail_url('blog-large');?>" class="img-fluid mb-4 mt-4 img-thumbnail">
    <?php endif;?>



    <?php get_template_part('includes/section','blogcontent');?>

    <?php //wp_link_pages();?>  

</div>
</section>



<?php get_footer();?>