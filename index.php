<?php 
    // Template name: Search
    get_header('search');

    $limit = 12;
    $paged = get_query_var('paged');
    $paged = $paged <= 0 ? 1 : $paged;
    $queried_object = get_queried_object();
    $s = get_search_query();

    $args = array(
        'limit' => $limit,
        'paginate' => true,
        'page' => $paged
    );

    if($queried_object->term_id != null) {
        $taxonomy = 'category_name';
        if($queried_object->taxonomy == 'post_tag') {
            $taxonomy = 'tag';
        }
        $args[$taxonomy] = $queried_object->name;
    }

    if($s != '') {
        $args['s'] = $s;
    }

    $query = new WP_Query($args);
?>
<section class="articles">
    <div class="container">
        <?php 
            if($taxonomy == 'category_name') {
        ?>
                <h3>Categoria: <b><?=$queried_object->name?></b></h3><br>
        <?php 
            } elseif($taxonomy == 'tag') {
        ?>
                <h3>Tag: <b><?=$queried_object->name?></b></h3><br>
        <?php 
            } elseif($s != '') {
        ?>
                <h3>Resultados encontrados para: <b><?=$s?></b></h3><br>
        <?php 
            }

            if($query->have_posts()) {
        ?>
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
                                    </div>
                                    <div class="article__content">
                                        <h4 class="article__title">
                                            <?php the_title(); ?>
                                        </h4>
                                        <div class="article__description">
                                            <?php the_excerpt(); ?>
                                        </div>
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
                                </a>
                            </article>
                        </div>
        <?php 
                    }
        ?>
                </div>
        <?php 
            } else {
        ?>
                <p>Nenhum resultado encontrado. ):</p><br>
                <a class="btn-custom" href="<?php bloginfo('url'); ?>/blog" style="margin: 0 0 50px 0;">Ver todos os artigos</a>
        <?php 
            }
        ?>
    </div>
</section>
<?php get_footer(); ?>