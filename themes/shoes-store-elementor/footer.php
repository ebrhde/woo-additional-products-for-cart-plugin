<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoes Store Elementor
 */

?>

<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('shoes-store-elementor-footer-sidebar')) {
        echo '<div class="row footer-area">';
          dynamic_sidebar('shoes-store-elementor-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-lg-6 col-md-6 align-self-center">
        <p class="mb-0 py-3 text-center text-md-left">
          <?php
            if (!get_theme_mod('shoes_store_elementor_footer_text') ) { ?>
            <?php esc_html_e('Shoes Store Elementor WordPress Theme','shoes-store-elementor'); ?>
          <?php } else {
              echo esc_html(get_theme_mod('shoes_store_elementor_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('shoes_store_elementor_copyright_enable', true) == true ) : ?>
          <?php
            /* translators: %s: WP Elemento */
            printf( esc_html__( ' By %s', 'shoes-store-elementor' ), 'WP Elementor' ); ?>
          <?php endif; ?>
        </p>
      </div>
      <div class="col-lg-6 col-md-6 align-self-center text-center text-md-right">
        <?php if ( get_theme_mod('shoes_store_elementor_copyright_enable', true) == true ) : ?>
          <a href="<?php echo esc_url('https://wordpress.org'); ?>" rel="generator"><?php  /* translators: %s: WordPress */ printf( esc_html__( 'Proudly powered by %s', 'shoes-store-elementor' ), 'WordPress' ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
