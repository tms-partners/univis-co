<?php get_header(); ?>
		<div class="uk-cover-background bg_ttlsec">
    		<div class="uk-container uk-container-center">
    			<h1><?php the_title(); ?></h1>
    			<?php breadCrumb(); ?>
    		</div>
    	</div>
    	<div class="bg_content" id="page_content">
    		<div class="uk-container uk-container-center">
    			<div class="uk-grid">
                    <div class="uk-width-medium-3-4">
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <?php echo get_custom_content()['body']; ?>
                        <?php endwhile; endif; ?>
                    </div>
                    <div class="uk-width-medium-1-4 uk-hidden-small">
                        <div id="side_nav">
                            <h3>目次</h3>
                            <hr>
                            <?php echo get_custom_content()['nav']; ?>
                        </div>
                    </div>
                </div>
    		</div>
    	</div>
<?php get_footer(); ?>