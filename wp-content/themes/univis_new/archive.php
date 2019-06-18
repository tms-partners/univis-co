<?php get_header(); ?>
		<div class="uk-cover-background bg_ttlsec">
    		<div class="uk-container uk-container-center">
    			<h1><?php single_cat_title(); ?></h1>
    			<?php breadCrumb(); ?>
    		</div>
    	</div>
    	<div class="bg_wt">
    		<div class="uk-container uk-container-center">
    			<div class="uk-grid">
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <a class="uk-width-medium-1-4 uk-width-1-2">
                        <h2><?php the_title(); ?></h2>
                        <img src="<?php the_post_thumbnail(); ?>" alt="<?php the_title(); ?>">
                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </a>
                    <?php endwhile; endif; ?>     
                </div>
    		</div>
    	</div>
<?php get_footer(); ?>