<?php //fix bug header ?>

    <?php
/*
Template Name: conseils
*/
?>


        <!-- pour insérer le header -->
        <?php get_header(); ?>

            <div id="attente-bootstrap" class="placement">
                <!-- pour insérer la sidebar -->
                <?php get_sidebar(); ?>

                <div>
                    <section id="formeindex">
                        <h2>Nos Conseils</h2>
                        <div class="index-separator"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas aspernatur dolorum ullam quisquam ut qui velit molestias inventore esse asperiores modi possimus.</p>

                <!-- ICONES -->       
                        <div class="icone-generique">
                            <div class="center-generique">
                                <i class="fa fa-user-md fa-3x"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('dents')">Dents</button>
                            </div>

                            <div class="center-generique">
                                <i class="fa fa-eye fa-3x"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('yeux')">Yeux / Oreilles</button>
                            </div>

                            <div class="center-generique">
                                <i class="fa fa-paw fa-3x text-center"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('pelage')">Pelage</button>
                            </div>
                            
                            <div class="center-generique">
                                <i class="fa fa-bug fa-3x text-center"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('parasites')">Parasites</button>
                            </div>
                        </div>
                        
                        <div class="icone-generique">
                            <div class="center-generique">
                                <i class="fa fa-plus-square fa-3x"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('vaccinChien')">Vaccin Chien</button>
                            </div>

                            <div class="center-generique">
                                <i class="fa fa-medkit fa-3x"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('vaccinChat')">Vaccin Chat</button>
                            </div>

                            <div class="center-generique">
                                <i class="fa fa-barcode fa-3x text-center"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('identification')">Identification</button>
                            </div>
                            
                            <div class="center-generique">
                                <i class="fa fa-book fa-3x text-center"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('education')">Education</button>
                            </div>
                        </div>
                    </section>
                
        

                <section>
                    <!--AFFICHAGE DES ARTICLES-->
                    
                    <!-- articles dents -->                           
                    <div class="uniform-article" id="dents">
                       <?php query_posts('category_name=dents'); ?>
                       <?php if(have_posts()) : ?>
                       <?php while(have_posts()) : the_post();?>

                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>    
                        <div class="index-separator"></div>
                            <div class= "post" id="post-<?php the_ID(); ?>"> 
                                <div class= "post_content alignement_article">
                                    <div class="imgPage"> <?php the_post_thumbnail(array(250,250));?>
                                    </div>
                                    <div class="contenu_article"><?php the_content(); ?></div>
                                </div> 
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    
                    <!-- articles yeux oreilles -->
                    <div class="uniform-article" id="yeux">
                       <?php query_posts('category_name=yeux'); ?>
                       <?php if(have_posts()) : ?>
                       <?php while(have_posts()) : the_post();?>

                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>    
                        <div class="index-separator"></div>
                            <div class= "post" id="post-<?php the_ID(); ?>"> 
                                <div class= "post_content alignement_article">
                                    <div class="imgPage"> <?php the_post_thumbnail(array(250,250));?>
                                    </div>
                                    <div class="contenu_article"><?php the_content(); ?></div>
                                </div> 
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    
                    <!-- articles pelage -->
                    <div class="uniform-article" id="pelage">
                       <?php query_posts('category_name=pelage'); ?>
                       <?php if(have_posts()) : ?>
                       <?php while(have_posts()) : the_post();?>

                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>    
                        <div class="index-separator"></div>
                            <div class= "post" id="post-<?php the_ID(); ?>"> 
                                <div class= "post_content alignement_article">
                                    <div class="imgPage"> <?php the_post_thumbnail(array(250,250));?>
                                    </div>
                                    <div class="contenu_article"><?php the_content(); ?></div>
                                </div> 
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    
                    <!-- articles parasites -->
                    <div class="uniform-article" id="parasites">
                       <?php query_posts('category_name=parasites'); ?>
                       <?php if(have_posts()) : ?>
                       <?php while(have_posts()) : the_post();?>

                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>    
                        <div class="index-separator"></div>
                            <div class= "post" id="post-<?php the_ID(); ?>"> 
                                <div class= "post_content alignement_article">
                                    <div class="imgPage"> <?php the_post_thumbnail(array(250,250));?>
                                    </div>
                                    <div class="contenu_article"><?php the_content(); ?></div>
                                </div> 
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    
                    <!-- articles vaccin chien -->
                    <div class="uniform-article" id="vaccinChien">
                       <?php query_posts('category_name=vaccinChien'); ?>
                       <?php if(have_posts()) : ?>
                       <?php while(have_posts()) : the_post();?>

                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>    
                        <div class="index-separator"></div>
                            <div class= "post" id="post-<?php the_ID(); ?>"> 
                                <div class= "post_content alignement_article">
                                    <div class="imgPage"> <?php the_post_thumbnail(array(250,250));?>
                                    </div>
                                    <div class="contenu_article"><?php the_content(); ?></div>
                                </div> 
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    
                    <!-- articles vaccin chat -->
                    <div class="uniform-article" id="vaccinChat">
                       <?php query_posts('category_name=vaccinChat'); ?>
                       <?php if(have_posts()) : ?>
                       <?php while(have_posts()) : the_post();?>

                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>    
                        <div class="index-separator"></div>
                            <div class= "post" id="post-<?php the_ID(); ?>"> 
                                <div class= "post_content alignement_article">
                                    <div class="imgPage"> <?php the_post_thumbnail(array(250,250));?>
                                    </div>
                                    <div class="contenu_article"><?php the_content(); ?></div>
                                </div> 
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    
                    <!-- articles identification -->
                    <div class="uniform-article" id="identification">
                       <?php query_posts('category_name=identification'); ?>
                       <?php if(have_posts()) : ?>
                       <?php while(have_posts()) : the_post();?>

                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>    
                        <div class="index-separator"></div>
                            <div class= "post" id="post-<?php the_ID(); ?>"> 
                                <div class= "post_content alignement_article">
                                    <div class="imgPage"> <?php the_post_thumbnail(array(250,250));?>
                                    </div>
                                    <div class="contenu_article"><?php the_content(); ?></div>
                                </div> 
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <!-- articles education -->
                    <div class="uniform-article" id="education">
                       <?php query_posts('category_name=education'); ?>
                       <?php if(have_posts()) : ?>
                       <?php while(have_posts()) : the_post();?>

                    
                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>    
                        <div class="index-separator"></div>
                            <div class= "post" id="post-<?php the_ID(); ?>"> 
                                <div class= "post_content alignement_article">
                                    <div class="imgPage"> <?php the_post_thumbnail(array(250,250));?>
                                    </div>
                                    <div class="contenu_article"><?php the_content(); ?></div>
                                </div> 
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </section>
                </div>
            </div>



            <!-- pour insérer le footer -->
            <?php get_footer(); ?>