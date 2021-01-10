<?php 
    // Template name: Home
    get_header();
?>
<section class="banner">
    <div class="owl-banner owl-carousel owl-theme">
        <div class="item">
            <div class="banner" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/banner_01.png');">
                <h1>
                    Tecnologia <br>
                    ao seu alcance.
                </h1>
            </div>
        </div>
    </div>
</section>
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h1 class="section-title section-title--left">A SmartEng</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae dignissim quam. Etiam quam risus, auctor in facilisis eu, lobortis ac turpis. Suspendisse porta ac leo et venenatis. Curabitur urna ante, efficitur mattis vehicula ullamcorper, egestas et urna. Donec varius tempus justo nec tincidunt. Sed bibendum massa et ornare iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae dignissim quam. Etiam quam risus, auctor in facilisis eu, lobortis ac turpis. Suspendisse porta ac leo et venenatis. Curabitur urna ante, efficitur mattis vehicula ullamcorper, egestas et urna. Donec varius tempus justo nec tincidunt. Sed bibendum massa et ornare iaculis.
                </p>
            </div>
            <div class="col-sm-6 col-xs-12">

            </div>
        </div>
    </div>
</section>
<section id="services" class="services">
    <div class="container">
        <h1 class="section-title">Nossos serviços</h1>
        <?php 
            if(have_rows('services')) {
        ?>
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
        <?php 
            }
        ?>
    </div>
</section>
<section id="cases" class="cases">
    <div class="container">
        <h1 class="section-title">Cases de Sucesso</h1>
        <div class="owl-cases owl-carousel owl-theme">
            <div class="item">
                <div class="service">
                    <div class="service__thumb">
                        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/case_01.png">
                    </div>
                    <div class="service__content">
                        <h2 class="service__title">Lorem ipsum dolor sit amet</h2>
                        <div class="service__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel neque velit. Nam sagittis finibus ultrices. Phasellus cursus at velit vitae pellentesque. Phasellus auctor neque quam, in rhoncus risus ultricies eget. Maecenas tempor, magna a aliquam fringilla, sapien diam cursus sapien.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="courses" class="courses">
    <div class="container">
        <h1 class="section-title">Nossos Cursos</h1>
        <div class="row">
            <?php 
                if(have_rows('courses')) {
            ?>
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
            <?php 
                }
            ?>
        </div>
    </div>
</section>
<section id="testimonials" class="testimonials">
    <div class="container">
        <h1 class="section-title">Depoimentos de nossos clientes</h1>
        <div class="testimonial">
            <div class="testimonial__description">
                <p>
                    // Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                </p>
            </div>
            <div class="testimonial-author">
                <div class="testimonial-author__thumb">

                </div>
                <div class="testimonial-author__content">
                    <div class="testimonial-author__name">Fernando Costa</div>
                    <div class="testimonial-author__description">Banco Bancoso</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="partners" class="partners">
    <div class="container">
        <h1 class="section-title">Nossos Parceiros</h1>
        <div class="row">
            <?php 
                if(have_rows('partners')) {
            ?>
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
                }
            ?>

        </div>
    </div>
</section>
<section class="more-articles">
    <div class="container">
        <h1 class="section-title">Artigos</h1>
        <div class="row">
            <?php 
                $args = array('limit' => 3);
                $query = new WP_Query($args);

                if($query->have_posts()) {
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
                }
            ?>
        </div>
        <a class="btn-custom" href="<?php bloginfo('url'); ?>/blog">Ver todos os artigos</a>
    </div>
</section>
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <h1 class="section-title section-title--left">Entre em contato conosco</h1>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>