<?php get_header( )?>
    <div class="flex post">
                <div class="quart">
                        <?php if(has_post_thumbnail( )) : ?>
                            <?php the_post_thumbnail('small', ['class' => 'fluide'] );?>
                       <?php endif ?>
                </div>
                <div class="texte-article trois-quart">
                        <h3><?php the_title();?></h3>
                        <p> <?php the_content( );?></p>
                        <p>Ce sujet vous intéresse consulter d'autres articles dans la catégorie <?php the_category(',' )?></p>
                </div>
    </div>
<?php get_footer( )?>