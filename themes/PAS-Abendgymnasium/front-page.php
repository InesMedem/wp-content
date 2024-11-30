<?php
get_header(); ?>



<div class="page-banner overlay ">
  <div class="page-banner__bg-image"

    style="background-image: url(<?php
                                  $thumbnail_url = get_the_post_thumbnail_url(null, 'header-crop');
                                  if ($thumbnail_url) {
                                    echo $thumbnail_url;
                                  } else {
                                    echo get_theme_file_uri('images/Friedrich-Ebert-Schule_Front.jpg');
                                  }
                                  ?>)">

  </div>
  <div class="page-banner__content container t-center c-white container--hero">
    <h1 class="headline headline--large"><?php the_title(); ?></h1>
    <h3 class="headline headline--small container--narrower">
      <?php echo strip_tags(get_the_excerpt(), '<h3>'); ?></h3>
    <a href="#" class="btn btn--large btn--blue">Jetzt Anmelden</a>
  </div>
</div>

<!-- container--narrow -->
<div class="container page-section container--narrow">
  <div class="generic-content">
    <?php the_content(); ?>
  </div>
</div>


<!--*** OUR BLOG  ***-->


<div class="aktuelles">
  <div class="aktuelles__headline container container--narrower">
    <span class="headline headline--large">Unsere Schule </span>
    <span class="headline headline--small">Neues und Aktuelles</span>
  </div>
</div>

<section>

  <div class="container container--narrower page-section aktuelles-summary__outer">

    <?php
    // Custom query to get only 5 posts
    $args = array(
      'posts_per_page' => 5, // Limit to 5 posts
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
    ?>
        <div class="aktuelles-summary">
          <a class="aktuelles-summary__date " href="<?php the_permalink(); ?>">
            <span class="aktuelles-summary__month"><?php echo get_the_date('M'); ?></span>
            <span class="aktuelles-summary__day"><?php echo get_the_date('d'); ?></span>
            <span class="aktuelles-summary__year"><?php echo get_the_date('Y'); ?></span>

          </a>
          <div class="aktuelles-summary__content">
            <h5 class="aktuelles-summary__title headline headline--small">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h5>
            <p>
              <?php echo wp_trim_words(get_the_content(), 18); ?>
              <a href="<?php the_permalink(); ?>" class="nu gray"> Weiterlesen </a>
            </p>
          </div>
        </div>

    <?php
      endwhile;
    endif;

    wp_reset_postdata();
    ?>

    <p class="t-center no-margin">
      <a href="<?php echo site_url('/aktuelles'); ?>" class="btn btn--blue">Aktuelles</a>
    </p>

  </div>
</section>

<!--*** OUR contact  ***-->

<!-- <section class="contact generic-content">
  <div class="contact__container container container--narrow page-section ">
    <h2 class="headline headline--large">Wir helfen gerne</h2>
    <h3 class="headline headline--small container--narrower">If you are interested in registering or have a specific question, please contact us by phone or using our contact form.
    </h3>



    <div class="contact__details">

      <div class="contact__img-wrapper">
        <img class="contact__img" src="http://localhost:10014/wp-content/uploads/2024/11/Peter-A.-Silbermann-Schule-Architektur.jpg" alt="Peter A. Silbermann School Architecture" />
      </div>

      <div class="contact__wrapper">
        <ul>
          <li class="contact__icon">
            <svg class="btn btn--orange" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="white">
              <path d="M798.48-111.87q-126.44 0-249.87-55.1-123.44-55.1-224.87-156.29Q222.3-424.7 167.21-548.25q-55.1-123.55-55.1-249.99 0-21.35 14.15-35.62 14.15-14.27 35.5-14.27h161.76q19.5 0 33.37 11.53 13.87 11.53 17.31 29.56l25.76 134.97q2.95 19.59-.88 33.22-3.84 13.63-14.71 23.78l-98.44 96.09q19.05 34.37 45.11 66.96 26.07 32.59 58.11 63.63 29.81 29.8 61.42 54.63 31.6 24.83 66.26 44.91l95.67-94.95q11.63-11.4 28.52-16.37 16.89-4.98 34.48-2.03l131.54 27.29q19.03 5.43 30.06 18.44 11.03 13.01 11.03 31.04v163.67q0 21.35-14.27 35.62-14.27 14.27-35.38 14.27Z" />
            </svg>
            <a href="tel:+493089745160" target="_blank">
              <p>+49 (0)30 / 897 451 60</p>
            </a>
          </li>
          <li class="contact__icon">
            <svg class="btn btn--orange" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="white">
              <path d="m608.41-290.57 61.5-61.02-146.32-146.32V-678.8h-87.18v216.13l172 172.1ZM480-71.87q-84.91 0-159.34-32.12-74.44-32.12-129.5-87.17-55.05-55.06-87.17-129.5Q71.87-395.09 71.87-480t32.12-159.34q32.12-74.44 87.17-129.5 55.06-55.05 129.5-87.17 74.43-32.12 159.34-32.12t159.34 32.12q74.44 32.12 129.5 87.17 55.05 55.06 87.17 129.5 32.12 74.43 32.12 159.34t-32.12 159.34q-32.12 74.44-87.17 129.5-55.06 55.05-129.5 87.17Q564.91-71.87 480-71.87Z" />
            </svg>
            <a href="mailto:info@abendgymnasium.de" target="_blank">
              <p>info@abendgymnasium.de</p>
            </a>
          </li>
          <li class="contact__icon">
            <svg class="btn btn--orange" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="white">
              <path d="M480-477.61q34.2 0 58.29-24.1 24.1-24.09 24.1-58.29t-24.1-58.29q-24.09-24.1-58.29-24.1t-58.29 24.1q-24.1 24.09-24.1 58.29t24.1 58.29q24.09 24.1 58.29 24.1Zm0 405.74Q315.17-211.26 233.52-329.36q-81.65-118.1-81.65-223.6 0-153.28 98.95-244.22 98.95-90.95 229.18-90.95 130.23 0 229.18 90.95 98.95 90.94 98.95 244.22 0 105.5-81.65 223.6T480-71.87Z" />
            </svg>
            <a href="https://maps.app.goo.gl/VPGC7Uc4kcSgC9P28" target="_blank">
              <p>Blissestraße 22, 10713 Berlin-Wilmersdorf</p>
            </a>
          </li>
        </ul>

      </div>
    </div>
  </div>
</section> -->


<section class="contact">
    <div class="contact__content ">
    <div class="contact__wrapper  ">
        <ul class="container--narrower">
          <li class="contact__icon">
            <svg class="btn btn--orange" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="white">
              <path d="M798.48-111.87q-126.44 0-249.87-55.1-123.44-55.1-224.87-156.29Q222.3-424.7 167.21-548.25q-55.1-123.55-55.1-249.99 0-21.35 14.15-35.62 14.15-14.27 35.5-14.27h161.76q19.5 0 33.37 11.53 13.87 11.53 17.31 29.56l25.76 134.97q2.95 19.59-.88 33.22-3.84 13.63-14.71 23.78l-98.44 96.09q19.05 34.37 45.11 66.96 26.07 32.59 58.11 63.63 29.81 29.8 61.42 54.63 31.6 24.83 66.26 44.91l95.67-94.95q11.63-11.4 28.52-16.37 16.89-4.98 34.48-2.03l131.54 27.29q19.03 5.43 30.06 18.44 11.03 13.01 11.03 31.04v163.67q0 21.35-14.27 35.62-14.27 14.27-35.38 14.27Z" />
            </svg>
            <a href="tel:+493089745160" target="_blank">
              <p>+49 (0)30 / 897 451 60</p>
            </a>
          </li>
          <li class="contact__icon">
            <svg class="btn btn--orange" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="white">
              <path d="m608.41-290.57 61.5-61.02-146.32-146.32V-678.8h-87.18v216.13l172 172.1ZM480-71.87q-84.91 0-159.34-32.12-74.44-32.12-129.5-87.17-55.05-55.06-87.17-129.5Q71.87-395.09 71.87-480t32.12-159.34q32.12-74.44 87.17-129.5 55.06-55.05 129.5-87.17 74.43-32.12 159.34-32.12t159.34 32.12q74.44 32.12 129.5 87.17 55.05 55.06 87.17 129.5 32.12 74.43 32.12 159.34t-32.12 159.34q-32.12 74.44-87.17 129.5-55.06 55.05-129.5 87.17Q564.91-71.87 480-71.87Z" />
            </svg>
            <a href="mailto:info@abendgymnasium.de" target="_blank">
              <p>info@abendgymnasium.de</p>
            </a>
          </li>
          <li class="contact__icon">
            <svg class="btn btn--orange" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="white">
              <path d="M480-477.61q34.2 0 58.29-24.1 24.1-24.09 24.1-58.29t-24.1-58.29q-24.09-24.1-58.29-24.1t-58.29 24.1q-24.1 24.09-24.1 58.29t24.1 58.29q24.09 24.1 58.29 24.1Zm0 405.74Q315.17-211.26 233.52-329.36q-81.65-118.1-81.65-223.6 0-153.28 98.95-244.22 98.95-90.95 229.18-90.95 130.23 0 229.18 90.95 98.95 90.94 98.95 244.22 0 105.5-81.65 223.6T480-71.87Z" />
            </svg>
            <a href="https://maps.app.goo.gl/VPGC7Uc4kcSgC9P28" target="_blank">
              <p>Blissestraße 22, 10713 Berlin-Wilmersdorf</p>
            </a>
          </li>
        </ul>

      </div>
    </div>
</section>

 

</div>

<div> 





<?php
get_footer();

?>