<?php 
    //ça en ligne 1 sinon ça plante.
?>
<div class="sidebar"> 
    <ul>
        <!-- search bar -->
        <li id="search"><?php include(TEMPLATEPATH . '/searchform.php'); ?></li>
        <!-- categories -->
        <li><h2>Categories</h2><ul><?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?></ul></li>
        <!-- calendar -->
        <li id="calendar"><h2>Calendrier</h2><?php get_calendar(); ?></li>
    </ul> 
</div>