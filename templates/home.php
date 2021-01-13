<?php 
    // Template name: Home
    get_header();
?>
<?php if(have_rows('banner')) { ?>
    <section class="banner">
        <div class="owl-banner owl-carousel owl-theme">
            <?php 
                while(have_rows('banner')) {
                    the_row();
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
            ?>
                    <div class="item">
                        <div class="banner" style="background-image: url('<?=$image?>');">
                            <?=$title?>
                        </div>
                    </div>
            <?php 
                }
            ?>
        </div>
    </section>
<?php } ?>
<?php 
    if(have_rows('about')) {
        the_row();
        $description = get_sub_field('description');
        $image = get_sub_field('image');
?>
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="section-title section-title--left">A SmartEng</h1>
                        <p><?=$description?></p>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <img alt="Sobre" class="img-responsive" src="<?=$image?>">
                    </div>
                </div>
            </div>
        </section>
<?php 
    }
?>
<?php if(have_rows('services')) { ?>
    <section id="services" class="services">
        <div class="container">
            <h1 class="section-title">Nossos serviços</h1>
            <div class="owl-services owl-carousel owl-theme">
                <?php 
                    while(have_rows('services')) {
                        the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                ?>
                        <div class="item">
                            <div class="box service">
                                <div class="box__content">
                                    <div class="box__icon">
                                        <img alt="<?=$title?>" class="img-responsive" src="<?=$icon?>">
                                    </div>
                                    <h3 class="box__title"><?=$title?></h3>
                                    <hr class="divider">
                                    <div class="box__description">
                                        <?=$description?>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </section>
<?php } ?>
<?php if(have_rows('cases')) { ?>
    <section id="cases" class="cases">
        <div class="container">
            <h1 class="section-title">Cases de Sucesso</h1>
            <div class="owl-cases owl-carousel owl-theme">
                <?php 
                    while(have_rows('cases')) {
                        the_row();
                        $thumb = get_sub_field('thumb');
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                ?>
                        <div class="item">
                            <div class="case">
                                <div class="case__thumb">
                                    <img class="img-responsive" src="<?=$thumb?>">
                                </div>
                                <div class="case__content">
                                    <h2 class="case__title"><?=$title?></h2>
                                    <div class="case__description">
                                        <?=$description?>
                                        <hr class="divider divider--secondary">
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </section>
<?php } ?>
<?php if(have_rows('courses')) { ?>
    <section id="courses" class="courses">
        <div class="container">
            <h1 class="section-title">Nossos Cursos</h1>
            <div class="owl-courses owl-carousel owl-theme">
                <?php 
                    while(have_rows('courses')) {
                        the_row();
                        $thumb = get_sub_field('thumb');
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $link = get_sub_field('link');
                ?>
                        <div class="item">
                            <div class="box course">
                                <div class="box__thumb">
                                    <img alt="<?=$title?>" class="img-responsive" src="<?=$thumb?>">
                                </div>
                                <div class="box__content">
                                    <h3 class="box__title">
                                        <?=$title?>
                                    </h3>
                                    <div class="box__description">
                                        <?=$description?>
                                    </div>
                                    <a class="btn-custom" href="<?=$link?>">Quero este curso</a>
                                </div>
                            </div>
                        </div>                        
                <?php 
                    }
                ?>
            </div>
        </div>
    </section>
<?php } ?>
<?php if(have_rows('testimonials')) { ?>
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h1 class="section-title">Depoimentos de nossos clientes</h1>
            <div class="owl-testimonials owl-carousel owl-theme">
                <?php 
                    while(have_rows('testimonials')) {
                        the_row();
                        $description = get_sub_field('description');
                        $author_image = get_sub_field('author_image');
                        $author_name = get_sub_field('author_name');
                        $subtitle = get_sub_field('subtitle');
                ?>
                        <div class="item">
                            <div class="testimonial">
                                <h2 class="testimonial__description">
                                    <?=$description?>
                                </h2>
                                <hr class="divider divider--secondary">
                                <div class="testimonial-author">
                                    <div class="testimonial-author__thumb">
                                        <img alt="<?=$author_name?>" class="img-responsive" src="<?=$author_image?>">
                                    </div>
                                    <div class="testimonial-author__content">
                                        <div class="testimonial-author__name"><?=$author_name?></div>
                                        <div class="testimonial-author__description"><?=$subtitle?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </section>
<?php } ?>
<?php if(have_rows('partners')) { ?>
    <section id="partners" class="partners">
        <div class="container">
            <h1 class="section-title">Nossos Parceiros</h1>
            <div class="owl-partners owl-carousel owl-theme">
                <?php 
                    while(have_rows('partners')) {
                        the_row();
                        $logo = get_sub_field('logo');
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                ?>
                        <div class="item">
                            <div class="box partner">
                                <div class="box__content">
                                    <div class="box__icon">
                                        <img alt="<?=$title?>" class="img-responsive" src="<?=$logo?>">
                                    </div>
                                    <h4 class="box__title"><?=$title?></h4>
                                    <div class="box__description">
                                        <?=$description?>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </section>
<?php } ?>
<?php 
    $args = array('posts_per_page' => 3);
    $query = new WP_Query($args);

    if($query->have_posts()) {
?>
        <section class="more-articles">
            <div class="container">
                <h1 class="section-title">Artigos</h1>
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
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <h1 class="section-title section-title--left">Entre em contato conosco</h1>
                <?=do_shortcode('[wpforms id="73"]')?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>