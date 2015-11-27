<?php 

/**
 * Banner Image
 */
$banner = get_field( 'webic_banner_images' );

if ( $banner ): ?>
  <div class="w-banner">
    <div class="w-banner__inner">
      <?php foreach ( $banner as $image ): ?>
        <div class="w-banner__slide">
          <div class="w-banner__image" style="background-image: url(<?php echo $image[ 'url' ]; ?>);"></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>