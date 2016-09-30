<?php //123veto ?>
    <?php /*
	Template Name: contact

 */ ?>

        <?php get_header(); ?>

            <!--Formulaire de contact-->
                    <h2 class="bandeau bandeau-mt0">CONTACT</h2>

            <div class="contact">


                <div class="formulaire">
                    <div class="center-element-contact">
                    
                        <h2>Contact</h2>
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <?php the_post(); the_content(); ?>
                    </div>
                </div>




                <div class="localisation">
                   <div class="center-element-contact">
                    
                   <?php query_posts('category_name=contact'); ?>
                         <?php if(have_posts()) : ?>
                             <?php while(have_posts()) : the_post();?>
                                 <div class="">
                                 <div class="post" id="post-<?php the_ID(); ?>">
                                     <div class="">
                                         <div class="" id="">
                                             <?php the_post_thumbnail(array(250,250));?>
                                         </div>
                                         <div class="">
                                             <?php the_content(); ?>
                                         </div>
                                     </div>
                                 </div>
                                 </div>
                               <?php endwhile; ?>
                             <?php endif; ?>


                
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d145336.14207906913!2d-2.177957396807505!3d47.40134214702283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f80abaa6c1de3%3A0x7f75613c939f0679!2sClinique+V%C3%A9t%C3%A9rinaire+du+Docteur+Wintz!5e0!3m2!1sfr!2sfr!4v1475068304442" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
                </div>
            </div>
            <?php get_footer(); ?>