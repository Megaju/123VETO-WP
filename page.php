<?php //fix bug header ?>

<?php
/*
Template Name: pagetype
*/
?>
<!-- pour insérer le header -->
<?php get_header(); ?>
<!-- pour insérer la sidebar -->
<?php get_sidebar(); ?>

<div>
   <i class="fa fa-stethoscope fa-4x"></i>
    <button class="bouton-generique">Consul.</button>
</div>

<div>
    <i class="fa fa-camera fa-4x"></i>
    <button class="bouton-generique">Imagerie</button>
</div>

<div>
   <i class="fa fa-medkit fa-4x text-center"></i>
    <button class="bouton-generique">Analyses</button>
</div>

<div>
   <i class="fa fa-heartbeat fa-4x"></i>
    <button class="bouton-generique">Chirurgie</button>
</div>

<div>
   <i class="fa fa-hospital-o fa-4x"></i>
    <button class="bouton-generique">Hosp.</button>
</div>

<div>
   <i class="fa fa-paw fa-4x"></i>
    <button class="bouton-generique">NAC</button>
</div>





<!-- pour insérer le footer -->
<?php get_footer(); ?>