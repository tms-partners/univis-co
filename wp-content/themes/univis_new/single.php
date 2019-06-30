<?php get_header(); ?>
		<div class="uk-cover-background bg_ttlsec">
    		<div class="uk-container uk-container-center">
    			<h1><?php the_title(); ?></h1>
    			<?php breadCrumb(); ?>
    		</div>
    	</div>
    	<div class="bg_wt">
    		<div class="uk-container uk-container-center">
                <div class="uk-grid">
                    <div class="uk-width-medium-4-4">
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                    <!-- <div class="uk-width-medium-3-4">
                        <p>test</p>
                    </div> -->
                </div>
    		</div>
    	</div>
<?php get_footer(); ?>