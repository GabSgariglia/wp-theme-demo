<?php get_header() ?>

<h2>Résultat de recherche</h2>
<?php if(have_posts(  )): ?>

<?php while(have_posts(  )) : the_post(  );?>
    <div class="flex post">
                    
            <div class="texte-article">
                <h2><?php the_title();?></h2>
                <p> <?php the_excerpt( );?><a href="<?php the_permalink(  )?>">En savoir plus...</a></p>
                            
            </div>
    </div>
    <?php endwhile; ?>

    <?php else :?>

        <p>aucun résultat pour cette requête...</p>
<?php endif;?>


<?php get_footer( ) ?>