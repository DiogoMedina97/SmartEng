<?php 
    get_header();
?>
<section class="single-article-section">
    <?php 
        if(have_posts()) {
            while(have_posts()) {
                the_post();
    ?>
                <article class="single-article">
                    <div class="single-article__thumb">
                        <div class="single-article__thumb-background" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
                        <div class="container">
                            <img class="img-responsive" alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>">
                        </div>
                    </div>
                    <div class="container">
                        <h1 class="single-article__title">
                            <?php the_title(); ?>
                        </h1>
                        <?php the_content(); ?>
                    </div>
                </article>
                <div class="container">
                    <div class="share-article">
                        <span>Compartilhe este artigo</span>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="article-author">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12">
                                <div class="article-author__thumb"></div>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <span>Sérgio Schina</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pretium ullamcorper risus, nec placerat leo lobortis eu. Nulla ac est dolor. Pellentesque porttitor bibendum risus a vestibulum. Morbi tristique nibh eu mi congue eleifend. Donec vitae risus vitae neque vestibulum accumsan ac ac quam. Quisque eget lorem non mauris dapibus faucibus eget id odio. Proin eu nisi justo.
                                </p>
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
<?php get_footer(); ?>