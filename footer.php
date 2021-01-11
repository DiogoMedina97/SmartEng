<?php 
    $description = get_field('footer_description', 'option');
    $address = get_field('footer_address', 'option');
    $phone = get_field('footer_phone', 'option');
    $email = get_field('footer_email', 'option');
    $instagram = get_field('footer_instagram', 'option');
    $youtube = get_field('footer_youtube', 'option');
    $facebook = get_field('footer_facebook', 'option');
?>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="footer-left col-sm-4 col-xs-12">
                        <a class="footer-brand" href="<?php bloginfo('url'); ?>">
                            <img alt="Logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png">
                        </a>
                        <p>
                            <?=$description?>
                        </p>
                    </div>
                    <div class="footer-middle col-sm-4 col-xs-12">
                        <b>Endereço</b>
                        <p><?=$address?></p>
                        <br>
                        <b>Telefone</b>
                        <p><?=$phone?></p>
                        <br>
                        <b>E-mail</b>
                        <p><?=$email?></p>
                    </div>
                    <div class="footer-right col-sm-4 col-xs-12">
                        <b>Fique por dentro das novidades</b>
                        <div class="footer-social-networks">
                            <ul>
                                <li>
                                    <a href="https://instagram.com/<?=$instagram?>">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://youtube.com/channel/<?=$youtube?>">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/<?=$facebook?>">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p>© 2020 SmartEng.</p>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery-3.5.1.min.js"></script>
        <?php wp_footer(); ?>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/owlcarousel/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/functions.js"></script>
    </body>
</html>