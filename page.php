<?php get_header( )?>
<?php if(have_posts(  )): ?>

<?php while(have_posts(  )) : the_post(  );?>
<div class="flex post">
                
                <div class="texte-article">
                        <h2><?php the_title();?></h2>
                        <p> <?php the_content( );?></p>
                        
                </div>
    </div>
    <?php endwhile; ?>
            <?php endif;?>

<?php get_footer( )?>