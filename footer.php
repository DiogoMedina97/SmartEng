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
                            <img alt="Logo" class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png">
                        </a>
                        <?php if($description) { ?>
                                <p><?=$description?></p>
                        <?php } ?>
                    </div>
                    <div class="footer-middle col-sm-4 col-xs-12">
                        <ul>
                            <?php if($address) { ?>
                                    <li>
                                        <b>Endereço</b>
                                        <?=$address?>
                                    </li>
                            <?php } ?>
                            <?php if($phone) { ?>
                                    <li>
                                        <b>Telefone</b>
                                        <?=$phone?>
                                    </li>
                            <?php } ?>
                            <?php if($email) { ?>
                                    <li>
                                        <b>E-mail</b>
                                        <?=$email?>
                                    </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="footer-right col-sm-4 col-xs-12">
                        <b>Fique por dentro das novidades</b>
                        <div class="footer-social-networks">
                            <ul>
                                <?php if($instagram) { ?>
                                        <li>
                                            <a href="https://instagram.com/<?=$instagram?>">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                <?php } ?>
                                <?php if($youtube) { ?>
                                        <li>
                                            <a href="https://youtube.com/channel/<?=$youtube?>">
                                                <i class="fa fa-youtube-play"></i>
                                            </a>
                                        </li>
                                <?php } ?>
                                <?php if($facebook) { ?>
                                        <li>
                                            <a href="https://facebook.com/<?=$facebook?>">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <p>© <?=date('Y')?> SmartEng.</p>
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