  <div class="slick-image-slide">
    <div class="slide-wrap" <?php echo $slider_height_css ; ?>>		
      <img src="<?php echo esc_url($slider_img); ?>" alt="<?php the_title(); ?>" />
      <div class="slider-overlay">
        <div class="slider-content">
          <h2 class="slide-title"><?php the_title(); ?></h2>
          <?php if($show_content) { ?>
            <div class="slick-slider-short-content">
          		<?php the_content(); ?>
          	</div>
          <?php }
        	$sliderurl = get_post_meta( get_the_ID(),'wpsisac_slide_link', true );
    			if($sliderurl != '') { ?>
              <div class="readmore">
                <a href="<?php echo esc_url($sliderurl); ?>" class="slider-readmore">
                  <?php esc_html_e( 'Read More', 'wp-slick-slider-and-image-carousel' ); ?>
                </a>
              </div>
  				<?php } ?>
			</div>	
    </div>
	</div>
</div>
