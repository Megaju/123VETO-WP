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
                    <section class="formeindex">
                        <div class="uniform-article">
                                <?php query_posts('category_name=titre-intro-conseils'); ?>
                                    <?php if(have_posts()) : ?>
                                        <?php while(have_posts()) : the_post();?>

                                            <!-- affichage des articles -->
                                            <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                            <div class="index-separator"></div>
                                            <div class="post" id="post-<?php the_ID(); ?>">
                                                <div class="post_content alignement_article">
                                                    <div class="contenu_article">
                                                        <?php the_content(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                                <?php endif; ?>
                            </div>

                    <!-- ICONES -->       
                        <div class="icone-generique">
                            <div class="center-generique">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 52.488 52.488" style="enable-background:new 0 0 52.488 52.488;" xml:space="preserve" width="60px" height="60px">
                                    <g>
                                        <path d="M46.324,8.615c-0.111-2.072-1.259-4.713-2.296-5.924c-1.038-1.21-2.974-2.359-4.321-2.567   c-1.349-0.207-4.108-0.148-6.164,0.133l-7.299,0.995l-7.299-0.995c-2.057-0.281-4.816-0.34-6.165-0.133   c-1.349,0.208-3.283,1.357-4.321,2.567C7.422,3.902,6.275,6.543,6.163,8.615c-0.198,3.667,0.046,9.474,2.672,14.804   c0,0,1.879,3.758,1.879,9.77c0,4.396,1.675,13.876,3.85,18.093c0.951,1.845,3.801,1.491,4.378-0.503   c2.02-6.988,3.46-24.59,7.301-24.541c3.839-0.049,5.279,17.553,7.302,24.541c0.578,1.994,3.428,2.348,4.379,0.503   c2.174-4.217,3.85-13.694,3.85-18.093c0-6.012,1.879-9.77,1.879-9.77C46.278,18.089,46.522,12.282,46.324,8.615z" fill="#F58900"/>
                                    </g>
                                </svg>
                                <button class="bouton-generique" onclick="fiche_conseil('dents')">Dents</button>
                            </div>

                            <div class="center-generique">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve" width="60px" height="60px">
                                    <path d="M294.908,142.226c-0.566-0.756-14.168-18.72-38.881-36.693c-32.842-23.887-70.023-36.511-107.525-36.511  c-37.501,0-74.683,12.624-107.526,36.51C16.262,123.506,2.658,141.47,2.092,142.226c-2.789,3.718-2.789,8.831,0,12.549  c0.566,0.756,14.17,18.72,38.884,36.694c32.844,23.885,70.025,36.51,107.526,36.51c37.502,0,74.683-12.625,107.525-36.511  c24.713-17.974,38.315-35.938,38.881-36.693C297.697,151.057,297.697,145.943,294.908,142.226z M141.274,90.398  c-5.92,17.643-10.027,51.152-10.027,58.102c0,6.949,4.107,40.459,10.027,58.102c-28.893-3.574-51.336-28.258-51.336-58.102  C89.939,118.656,112.382,93.973,141.274,90.398z M155.73,206.602c5.92-17.643,10.028-51.152,10.028-58.102  c0-6.949-4.108-40.459-10.028-58.102c28.893,3.574,51.336,28.258,51.336,58.102C207.065,178.344,184.622,203.027,155.73,206.602z   M24.153,148.5c5.686-6.283,15.785-16.427,29.681-26.457c9.118-6.581,18.458-12.157,27.996-16.725  c-8.088,12.443-12.807,27.268-12.807,43.182s4.719,30.738,12.807,43.182c-9.538-4.567-18.878-10.144-27.996-16.725  C39.937,164.925,29.836,154.779,24.153,148.5z M243.167,174.957c-9.115,6.581-18.456,12.156-27.991,16.724  c8.086-12.442,12.805-27.268,12.805-43.181s-4.719-30.738-12.805-43.181c9.535,4.567,18.876,10.143,27.991,16.724  c13.897,10.032,23.998,20.178,29.68,26.457C267.162,154.783,257.063,164.927,243.167,174.957z" fill="#F58900"/>
                                </svg>
                                <button class="bouton-generique" onclick="fiche_conseil('yeux')">Yeux / Oreilles</button>
                            </div>

                            <div class="center-generique">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 868.3 868.301" style="enable-background:new 0 0 868.3 868.301;" xml:space="preserve">

                                    <path d="M539.5,377.4c-31.4-22.6-68.5-33.899-105.6-33.899c-37.101,0-74.2,11.3-105.601,34c-40.5,29.199-77.1,80.9-77.1,172.5    c0,85.4,15.3,147.6,33,191.1c24.8,60.701,54.5,85.1,54.5,85.1l21.5-43.699l1.6-3.301c1.4,3.5,2.8,6.801,4.2,10.102    c28.2,63.398,67.8,79,67.8,79s40.3-15.701,68.601-79.701c1.3-3,2.6-6.1,3.899-9.299l1.5,3.1l21.9,43.9c0,0,29.5-24.4,54.2-85    C601.6,697.801,616.8,635.5,616.8,550.1C616.901,458.301,580.1,406.6,539.5,377.4z M481,568.6h-94c-9.7,0-17.5-7.799-17.5-17.5    c0-9.699,7.8-17.5,17.5-17.5h29v-50c-21-6-37-23.1-37-43.299c0-25.201,24.5-45.701,54.6-45.701    c30.101,0,54.301,20.4,54.301,45.701c0,20-14.9,37-36.9,43.199v50.1h30c9.7,0,17.5,7.801,17.5,17.5    C498.5,560.801,490.701,568.6,481,568.6z" fill="#F58900"/>
                                    <path d="M337.6,40.4C327.401,25.5,301.401,0,243.901,0c-81.101,0-165.3,43.5-165.3,326.4c0,282.901-22.3,463.2-66.9,514.901    c0,0,115.6-18.301,165.7-122.701c0,0,0.5,85.1-22.8,122.701c0,0,56.3-33.801,102.6-74.301c-11-24.301-19.9-51-26.5-79.699    c-9.7-41.801-14.6-88-14.6-137.301c0-47.699,9.1-89.9,27.2-125.5c15.3-30.2,37-55.601,64.5-75.4c18.5-13.3,38.8-23.6,60.601-30.5    c21.199-6.7,43.199-10.1,65.5-10.1c22.3,0,44.3,3.4,65.5,10.1c21.699,6.9,42.1,17.1,60.5,30.4c27.5,19.8,49.3,45.1,64.699,75.399    c18.101,35.6,27.301,77.799,27.301,125.6c0,49.301-4.9,95.4-14.5,137.301c-6.601,28.699-15.5,55.5-26.4,79.799    c46.4,40.5,102.8,74.201,102.8,74.201c-23.399-37.5-22.899-122.701-22.899-122.701C741.1,823,856.6,841.301,856.6,841.301    c-44.6-51.701-67-232.102-67-514.901C789.6,43.6,705.401,0,624.3,0c-57.8,0-83.8,25.8-93.899,40.6    c29.399,16.1,51.5,40.2,64.8,70.9c3.8,8.9-0.2,19.2-9.101,23c-2.3,1-4.6,1.4-7,1.4c-6.8,0-13.199-3.9-16.1-10.5    c-1-2.4-2.1-4.9-3.3-6.9c-14.2-28-37.9-47.1-70.5-57.5c-6.3-2-12.4-3.5-18.101-4.7H471h0.1c-24.3-4.8-50.3-4.8-74.6,0    c-5.8,1.1-11.9,2.7-18.3,4.7c-32.601,10.4-56.3,29.5-70.5,57.5c-1.2,2-2.3,4.5-3.3,6.9c-3.801,8.9-14.2,12.9-23,9.1    c-8.9-3.8-12.9-14.2-9.101-23C285.701,80.6,308,56.5,337.6,40.4z M561.1,222.6c19.4,0,35.101,15.7,35.101,35.1    s-15.7,35.1-35.101,35.1c-19.399,0-35.1-15.7-35.1-35.1C526,238.4,541.701,222.6,561.1,222.6z M305.1,222.6    c19.4,0,35.101,15.7,35.101,35.1s-15.7,35.1-35.101,35.1c-19.399,0-35.1-15.7-35.1-35.1C270,238.4,285.701,222.6,305.1,222.6z" fill="#F58900"/>
                            </svg>
                                <button class="bouton-generique" onclick="fiche_conseil('pelage')">Pelage</button>
                            </div>
                            
                            <div class="center-generique">
                                <i class="fa fa-bug fa-3x text-center"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('parasites')">Parasites</button>
                            </div>
                        </div>
                        
                        <div class="icone-generique">
                            <div class="center-generique">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="60px" height="60px">
                                  <g>
                                      <path d="m495,93.5l-76.2-76.5c-8-8-20.9-8-28.9,0-8,8-8,20.9 0,28.9l23.7,23.8-19.9,19.9 28.8,28.9 19.9-19.9 23.7,23.7c12.5,11 24.9,4 28.9,0 8-7.9 8-20.9 0-28.8z" fill="#F58900"/>
                                      <path d="m320.8,74.2c-8-8-20.9-8-28.9,0-8,8-8,20.9 0,28.9l11,11-102.2,102.2 94.9,95.1 102.2-102.2 11,11c3.7,4.7 18,10.9 28.9,0 8-8 8-20.9 0-28.9l-116.9-117.1z" fill="#F58900"/>
                                      <path d="m103.6,313.4c-21.2,21.2-25.2,53.1-12.2,78.4l-74.4,74.3c-8,8-8,20.9 0,28.9 4,4 15.8,11.2 28.9,0l74.3-74.3c9.4,4.9 45,19.1 78.3-12.1l68.3-68.3-94.9-95.1-68.3,68.2z" fill="#F58900"/>
                                  </g>
                                </svg>
                                <button class="bouton-generique" onclick="fiche_conseil('vaccinChien')">Vaccin Chien</button>
                            </div>

                            <div class="center-generique">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 58.45 58.45" style="enable-background:new 0 0 58.45 58.45;" xml:space="preserve" width="60px" height="60px">
                                    <g>
                                        <path d="M58.157,56.743l-5.614-5.614c0.304-0.304,0.38-0.769,0.188-1.154l-2.539-5.078c1.457-1.935,1.325-4.694-0.436-6.455   l-2.992-2.992H24.136l14.305,14.305c0.934,0.934,2.174,1.448,3.495,1.448c1.087,0,2.11-0.366,2.963-1.01l5.075,2.538   c0.142,0.071,0.295,0.105,0.447,0.105c0.26,0,0.516-0.101,0.708-0.293l5.614,5.614c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293C58.547,57.766,58.547,57.133,58.157,56.743z M36.45,40.45c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1   s1,0.448,1,1C37.45,40.002,37.002,40.45,36.45,40.45z M41.45,46.45c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1   C42.45,46.002,42.002,46.45,41.45,46.45z M42.45,40.45c0-0.552,0.448-1,1-1s1,0.448,1,1c0,0.552-0.448,1-1,1   S42.45,41.002,42.45,40.45z" fill="#F58900"/>
                                        <path d="M18.278,23.935l-6.748-6.748l1.414-1.414l6.748,6.748l2.829-2.829l-6.748-6.748l1.414-1.414l6.748,6.748l2.829-2.829   l-6.748-6.748l2.121-2.121c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0l-2.121,2.121l-2.829,2.829L9.485,3.828   l2.121-2.121c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0l-9.899,9.899c-0.391,0.391-0.391,1.023,0,1.414   C0.488,11.802,0.744,11.899,1,11.899s0.512-0.098,0.707-0.293l2.121-2.121l6.288,6.288l-2.829,2.829l-2.121,2.121   c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l2.121-2.121l6.748,6.748   L18.278,23.935z M5.253,8.082l2.829-2.829l6.277,6.277l-2.829,2.829L5.253,8.082z" fill="#F58900"/>
                                        <path d="M23.692,33.45h21.071L28.177,16.864l-2.829,2.829l0,0l-5.657,5.657l0,0l-2.829,2.829l1.808,1.808l4.242-4.243   c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414l-4.242,4.243l1.414,1.414l4.243-4.242c0.391-0.391,1.023-0.391,1.414,0   s0.391,1.023,0,1.414L23.692,33.45z" fill="#F58900"/>
                                    </g>
                                </svg>
                                <button class="bouton-generique" onclick="fiche_conseil('vaccinChat')">Vaccin Chat</button>
                            </div>

                            <div class="center-generique">
                                <i class="fa fa-barcode fa-3x text-center"></i>
                                <button class="bouton-generique" onclick="fiche_conseil('identification')">Identification</button>
                            </div>
                            
                            <div class="center-generique">
                               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 98.445 98.444" style="enable-background:new 0 0 98.445 98.444;" xml:space="preserve">
                                    <circle cx="69.398" cy="10.595" r="10.595" fill="#F58900"/>
                                    <path d="M90.184,49.87l-4.899-22.869c-0.913-4.261-5.232-6.306-8.901-6.413c0,0-1.323,0.01-2.438,0.222    c-1.166,0.223-2.188,0.784-2.188,0.784c-2.703,1.31-5.29,4.02-5.607,7.308c-1.113,10.537-10.577,23.49-10.665,23.611    c-1.345,1.832-0.949,4.406,0.882,5.75c0.733,0.539,1.586,0.799,2.432,0.799c1.265,0,2.513-0.582,3.318-1.68    c0.251-0.343,3.919-5.387,7.192-12.13l1.861,8.691c0.598,2.791,2.558,4.582,4.875,5.505l0.021,33.392    c0.002,3.096,2.513,5.604,5.609,5.604c0.001,0,0.002,0,0.003,0c3.099-0.001,5.607-2.515,5.605-5.612l-0.021-35.291    C89.471,55.657,90.836,52.924,90.184,49.87z" fill="#F58900"/>
                                    <path d="M53.543,90.344h-9.729v-3.896l-11.62-6.663h-15.29l-4.75-3.815c-1.075-0.863-2.645-0.691-3.508,0.383    s-0.691,2.645,0.382,3.506l4.847,3.895v4.07c-0.001,0.031,0,0.062,0,0.093v0.168c0,0.007,0.016,0.021,0.019,0.027    c0.063,0.713,0.423,1.396,1.06,1.833l2.561,1.76l-5.316,0.006c-1.378,0.002-2.493,1.122-2.491,2.5    c0.002,1.377,1.119,2.49,2.495,2.49c0.001,0,0.003,0,0.004,0l13.326-0.021c1.092-0.002,2.057-0.713,2.379-1.756    c0.323-1.043-0.069-2.177-0.97-2.795l-4.282-2.892l0.519-0.429l4.604,2.306c1.376,0.946,1.991,2.62,1.591,4.224h13.444    c0.002,0,0.005,0,0.007,0h10.72c1.38,0,2.495-1.117,2.495-2.496S54.923,90.344,53.543,90.344z" fill="#F58900"/>
                                    <path d="M50.273,74.713c-1.542-1.453-2.059-3.154-3.79-4.386c-0.303-0.215-0.607-0.433-0.929-0.614    c-0.193-0.107-0.254-0.234-0.233-0.443c0.073-0.715,0.146-1.43,0.203-2.147c0.103-1.284-0.268-2.45-1.298-3.208    c-0.414-0.304-2.454-1.293-3.343,2.09c-0.194,0.736-0.456,1.469-0.807,2.139c-1.283,2.467-2.912,4.719-4.472,7.014    c-0.712,1.046-1.422,2.092-2.131,3.136l10.911,6.214c0,0,2.102-2.299,2.397-2.17c0.41,0.182,0.821,0.358,1.232,0.537    c1.201,0.521,2.453,0.766,3.766,0.688c2.23-0.129,4.553-1.313,4.765-3.987C56.742,77.117,50.793,75.203,50.273,74.713z" fill="#F58900"/>
</svg>
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