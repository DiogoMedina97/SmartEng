<?php 
    get_header();
?>
<section class="single-article-section">
    <?php 
        if(have_posts()) {
            while(have_posts()) {
                the_post();
                $post_id = get_the_ID();
                $author_image = get_avatar_url(get_the_author_meta('ID'), array('size' => '260'));
                $author_name = get_the_author_meta('display_name');
                $author_description = get_the_author_meta('description');
                $article_author = get_field('article_author');
    ?>
                <article class="single-article">
                    <div class="single-article__thumb">
                        <div class="single-article__thumb-background" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
                        <div class="container single-article-container">
                            <img class="img-responsive" alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>">
                        </div>
                    </div>
                    <div class="container single-article-container">
                        <div class="single-article__header">
                            <h1 class="single-article__title">
                                <?php the_title(); ?>
                            </h1>
                            <div class="single-article-infos">
                                <div class="single-article-infos__content">
                                    <div class="row">
                                        <div class="col-sm-2 col-xs-12">
                                            <div class="single-article-infos__date">
                                                <?php the_date('d/m/Y'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <?php 
                                                $categories = get_the_category(get_the_ID());
                                                if(count($categories)) {
                                            ?>
                                                    <ul class="categories">
                                            <?php 
                                                    foreach($categories as $category) {
                                            ?>
                                                        <li>
                                                            <a href="<?=get_term_link($category->term_id)?>">
                                                                <?=$category->name?>
                                                            </a>
                                                        </li>
                                            <?php 
                                                    }
                                            ?>
                                                    </ul>
                                            <?php 
                                                }
                                            ?>
                                        </div>
                                        <?php if($article_author) { ?>
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="single-article-infos__author">
                                                    <b>Autor:</b> <?=$article_author?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php the_content(); ?>
                    </div>
                </article>
                <div class="container single-article-container">
                    <div class="share-article">
                        <span>Compartilhe este artigo</span>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?=rawurlencode(get_the_permalink())?>">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://www.twitter.com/share?url=<?=rawurlencode(get_the_permalink())?>">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:?body=<?=rawurlencode(get_the_permalink())?>">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?text=<?=rawurlencode(get_the_permalink())?>">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="article-author">
                        <div class="article-author__thumb">
                            <img alt="<?=$author_name?>" class="img-responsive" src="<?=$author_image?>">
                        </div>
                        <div class="article-author__content">
                            <b class="article-author__name"><?=$author_name?></b>
                            <div class="article-author__description">
                                <?=$author_description?>
                            </div>
                        </div>
                    </div>
                    <?php comments_template(); ?>
                </div>
    <?php 
            }
        }
    ?>
</section>
<?php 
    $args = array('posts_per_page' => 3, 'post__not_in' => array($post_id));
    $query = new WP_Query($args);

    if($query->have_posts()) {
?>
        <section class="more-articles">
            <div class="container">
                <h1 class="section-title">Outros artigos</h1>
                <div class="row">
                    <?php 
                        while($query->have_posts()) {
                            $query->the_post();
                    ?>
                            <div class="col-sm-4 col-xs-12">
                                <article class="article">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="article__thumb">
                                            <img alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>">
                                            <?php 
                                                $categories = get_the_category(get_the_ID());
                                                if(count($categories)) {
                                            ?>
                                                    <ul class="categories">
                                            <?php 
                                                        foreach($categories as $category) {
                                            ?>
                                                            <li>
                                                                <span>
                                                                    <?=$category->name?>
                                                                </span>
                                                            </li>
                                            <?php 
                                                        }
                                            ?>
                                                    </ul>
                                            <?php 
                                                }
                                            ?>
                                        </div>
                                        <div class="article__content">
                                            <h4 class="article__title">
                                                <?php the_title(); ?>
                                            </h4>
                                        </div>
                                    </a>
                                </article>
                            </div>
                    <?php 
                        }
                    ?>
                </div>
                <a class="btn-custom" href="<?php bloginfo('url'); ?>/blog">Ver todos os artigos</a>
            </div>
        </section>
<?php 
    }
?>
<?php get_footer(); ?>