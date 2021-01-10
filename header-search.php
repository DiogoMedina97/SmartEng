<?php 
    get_header();

    $args = array(
        'offset' => 2,
        'orderby' => 'count',
        'order' => 'DESC'
    );

    $categories = get_categories($args);
    $categories = array_slice($categories, 0, 4);

    $s = get_search_query();
?>
<section class="header-search">
    <div class="container">
        <img alt="Banner Academics" class="header-search__banner img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/banner_academics.png">
        <form class="header-search__form" method="get" action="<?php bloginfo('url'); ?>">
            <input type="search" name="s" value="<?=$s != '' ? $s : ''?>" placeholder="Faça uma busca">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
        </form>
        <?php 
            if(count($categories)) {
        ?>
                <div class="header-search__categories">
                    <h4>Principais categorias:</h4>
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
                </div>
        <?php 
            }
        ?>
    </div>
</section>