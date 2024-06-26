<?php 
    // Template name: Search
    get_header('search');

    $limit = intval(get_option('posts_per_page'));
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $queried_object = get_queried_object();
    $s = get_search_query();

    $args = array(
        'posts_per_page' => $limit,
        'paginate' => true,
        'paged' => $paged
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
    $total_pages = $query->max_num_pages;

    if($total_pages > 1) {
        $current_page = max(1, $paged);

        $pagination = paginate_links(array(
            'current' => $current_page,
            'total' => $total_pages,
            'end_size' => 1,
            'mid_size' => 2,
            'type' => 'list',
            'prev_text'    => __('<i class="fa fa-caret-left"></i>'),
            'next_text'    => __('<i class="fa fa-caret-right"></i>')
        ));
    }
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
                <div class="article-pagination">
                    <?=$pagination?>
                </div>
        <?php 
            } else {
        ?>
                <p>Nenhum resultado encontrado. ):</p><br>
                <a class="btn-custom" href="<?php bloginfo('url'); ?>/blog" style="margin-bottom: 50px !important;">Ver todos os artigos</a>
        <?php 
            }
        ?>
    </div>
</section>
<?php get_footer(); ?>