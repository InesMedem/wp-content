<?php
get_header();
while (have_posts()) {
  the_post(); ?>


  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/Friedrich-Ebert-Schule_Front.jpg') ?>)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>DONT FORGET TO REPLACE ME LATER</p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">
    metsbox will go here

    <div class="generic-content">

      <?php the_content(); ?>
    </div>
  </div>
<?php








}
get_footer();
?>