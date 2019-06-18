<?php
/*
Template Name: 問い合わせページ用テンプレート
*/
?>
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
                    <div class="uk-width-medium-2-3 uk-push-1-6">
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
    		</div>
    	</div>
<?php get_footer(); ?>