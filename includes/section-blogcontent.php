<?php if(have_posts()): while(have_posts()): the_post();?>


    <p class="post-details">Posted on: <?php echo get_the_date();?></p>

    <?php the_content();?>
    
    <?php
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    ?>
    <p class="post-details mt-5">Posted by:   <?php echo $fname;?> <?php echo $lname;?></p>



    <p class="post-details">Tags:  
                                    <?php 
                                        $tags = get_the_tags();
                                        
                                        if($tags): foreach($tags as $tag):?>

                                            <a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-light" style="color:grey;background-color:whitesmoke;">
                                                <?php echo $tag->name;?>
                                            </a>

                                    <?php endforeach;endif;?>
                                    
    </p>


    <p class="post-details mb-5">Category:  
                                    <?php 
                                        $categories = get_the_category();
                                        foreach($categories as $cat):?>

                                        <a href="<?php echo get_category_link($cat->term_id);?>" class="badge badge-light" style="color:grey;">
                                                <?php echo $cat->name;?>
                                        </a>  

                                    <?php endforeach;?>
    </p>


    <?php comments_template();?>

<?php endwhile; else: endif;?>