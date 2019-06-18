<?php
/*
Template Name: 固定ページアーカイブ用
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
    			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php echo get_custom_content()['body']; ?>
                <?php endwhile; endif; ?>
    		</div>
    	</div>
<?php get_footer(); ?>