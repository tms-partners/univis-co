<?php get_header(); ?>
    <div class="uk-cover-background bg_ttlsec">
        <div class="uk-container uk-container-center">
        </div>
    </div>
    <div class="bg_content Service" id="page_content">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-medium-3-4">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php if ( has_post_thumbnail($post->id)): //アイキャッチ画像があれば ?>
                            <?php //アイキャッチ画像の取得
                            $thumbnail_id = get_post_thumbnail_id($post->id); // アタッチメントIDの取得
                            $image = wp_get_attachment_image_src($thumbnail_id,'full'); //「full」サイズのアイキャッチの情報を取得
                            $src = $image[0];    // URL
                            ?>
                        <div class="Service__eyecatch">
                            <img src="<?php echo $src;?>" class="eyecatch__box__img" alt="">
                        </div>
                        <?php endif;?>
                        <div class="Service__body">
                            <?php the_content(); ?>
                        </div>
                    <div class="Relate">
                        <h2 class="Relate__head">その他の人気記事</h2>
                        <?php
                        foreach((get_the_category()) as $cat) {
                            $catid = $cat->cat_ID ;
                            break ;
                        }
                        $get_posts_parm = "'numberposts=10&category=" . $catid . "&exclude=".get_the_ID()."";
                        ?>
                        <ul class="Relate__list">
                            <?php $posts = get_posts($get_posts_parm); ?>
                            <?php foreach($posts as $post): ?>
                                <li class="Relate__list__box">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <div class="Relate__list__box__img">
                                            <?php if ( has_post_thumbnail($post->id)): //アイキャッチ画像があれば ?>
                                                <?php //アイキャッチ画像の取得
                                                $thumbnail_id = get_post_thumbnail_id($post->id); // アタッチメントIDの取得
                                                $image = wp_get_attachment_image_src($thumbnail_id,'full'); //「full」サイズのアイキャッチの情報を取得
                                                $src = $image[0];    // URL
                                                ?>
                                                <img src="<?php echo $src;?>" class="Relate__list__box__img__img" alt="">
                                            <?php endif;?>
                                        </div>
                                        <div class="Relate__list__box__text">
                                            <h3 class="Relate__list__box__text__title"><?php the_title(); ?></h3>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="uk-width-medium-1-4 uk-hidden-small">
                    <div id="" class="ServiceSide">
                        <h3>最近の投稿</h3>
                        <hr>
                        <div class="Columns">
                            <?php
                            $get_posts_parm = "'numberposts=5'";
                            ?>
                                <?php $posts = get_posts($get_posts_parm); ?>
                                <?php foreach($posts as $post):
                                ?>

                                <a href="<?php echo get_permalink($post->id); // ID指定でリンクを取得 ?>" class="Column">
                                    <?php if ( has_post_thumbnail($post->id)): //アイキャッチ画像があれば ?>
                                        <?php //アイキャッチ画像の取得
                                        $thumbnail_id = get_post_thumbnail_id($relation['link']); // アタッチメントIDの取得
                                        $image = wp_get_attachment_image_src($thumbnail_id,'full'); //「full」サイズのアイキャッチの情報を取得
                                        $src = $image[0];    // URL
                                        ?>
                                        <img src="<?php echo $src;?>" class="Column__img" alt="">
                                    <?php endif;?>
                                    <p class="Column__title"><?php echo get_the_title($post->id); //タイトルの取得 ?></p>
                                </a>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>