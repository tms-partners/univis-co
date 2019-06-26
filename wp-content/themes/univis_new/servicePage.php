<?php
/*
Template Name: サービスページ下層用テンプレート
*/
?>
<?php get_header(); ?>


    <div class="uk-cover-background bg_ttlsec">
        <div class="uk-container uk-container-center">
            <?php breadCrumb(); ?>
        </div>
    </div>
    <div class="bg_content Service" id="page_content">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-medium-3-4">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="Service__body">

                        <?php echo get_custom_content()['body']; ?>
                    </div>
                    <?php $introductions =  get_field("introduction",get_the_ID());
                    if($introductions):?>
                        <div class="Introduction-wrapper">
                            <h2 class="Introduction-wrapper-head">サービス導入事例</h2>
                            <div class="Introductions">
                                <?php foreach( $introductions as $introduction ):
                                    ?>
                                    <div class="Introduction">

                                        <div class="Introduction__fv">
                                            <img src="<?php echo $introduction['company_img']['url'];?>" alt="" class="Introduction__fv__img">
                                            <h3 class="Introduction__fv__name"><?php echo $introduction['company_name'];?></h3>
                                        </div>
                                        <div class="Introduction__body">
                                            <h3 class="Introduction__body__head">案件概要</h3>
                                            <div class="Introduction__body__content" id="introductionContent">
                                                <?php echo $introduction['overview'];?>
                                            </div>
                                            <span class="Introduction__body__show" id="showMore" onclick="show();"><span class="Introduction__body__show__arrow">＞＞</span><br>show more</span>

                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php endwhile; endif; ?>
                </div>
                <div class="uk-width-medium-1-4 uk-hidden-small">
                    <div id="" class="ServiceSide">
                        <h3>SERVICES</h3>
                        <hr>
                        <?php
                        wp_nav_menu( array(
                            'menu' => 'service'
                        ) );
                        ?>
                    </div>
                    <?php $relations =  get_field("relation",get_the_ID());
                    if($relations):?>
                        <div id="" class="ServiceSide">
                            <h3>関連コラム</h3>
                            <hr>
                            <div class="Columns">
                                <?php foreach( $relations as $relation):
                                    ?>

                                    <a href="<?php echo get_permalink($relation['link']); // ID指定でリンクを取得 ?>" class="Column">
                                        <?php if ( has_post_thumbnail($relation['link'])): //アイキャッチ画像があれば ?>
                                            <?php //アイキャッチ画像の取得
                                            $thumbnail_id = get_post_thumbnail_id($relation['link']); // アタッチメントIDの取得
                                            $image = wp_get_attachment_image_src($thumbnail_id,'full'); //「full」サイズのアイキャッチの情報を取得
                                            $src = $image[0];    // URL
                                            ?>
                                            <img src="<?php echo $src;?>" class="Column__img" alt="">
                                        <?php endif;?>
                                        <p class="Column__title"><?php echo get_the_title($relation['link']); //タイトルの取得 ?></p>
                                    </a>
                                <?php endforeach;?>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>