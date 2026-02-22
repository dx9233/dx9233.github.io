<?php get_header(); ?>

<main>
<?php $hero_bg = get_field('hero_bg', 6); ?>
<section class="hero">
  <div class="container">
  <img src="<?php echo esc_url($hero_bg['url']); ?>" alt="Background" class="hero-bg">
  <div class="hero-content">
    <h1><?php the_field('hero_title', 6); ?></h1>
    <p><?php the_field('hero_subtitle', 6); ?></p>
    <a href="<?php the_field('hero_btn_link', 6); ?>" class="btn">
      <?php the_field('hero_btn_text', 6); ?>
    </a>
  </div>
  </div>
</section>

<section class="about">
  <div class="container">

    <div class="about-top">
      <div class="about-text">
        <?php if( get_field('about_title', 6) ): ?>
          <h2><?php the_field('about_title'); ?></h2>
        <?php endif; ?>

        <?php if( get_field('about_text', 5) ): ?>
          <div class="about-description">
            <?php the_field('about_text'); ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="about-gallery">
        <?php if( $img1 = get_field('about_image_1', 5) ): ?>
          <div class="about-gallery-item">
            <img src="<?php echo esc_url($img1['sizes']['medium_large']); ?>" alt="<?php echo esc_attr($img1['alt']); ?>">
          </div>
        <?php endif; ?>

        <?php if( $img2 = get_field('about_image_2', 5) ): ?>
          <div class="about-gallery-item">
            <img src="<?php echo esc_url($img2['sizes']['medium_large']); ?>" alt="<?php echo esc_attr($img2['alt']); ?>">
          </div>
        <?php endif; ?>
      </div>
    </div>

    <?php if( $bottom_image = get_field('about_bottom_image', 5) ): ?>
      <div class="about-bottom">
        <img src="<?php echo esc_url($bottom_image['sizes']['large']); ?>" alt="<?php echo esc_attr($bottom_image['alt']); ?>">
      </div>
    <?php endif; ?>

  </div>
</section>
</main>


<?php get_footer(); ?>
