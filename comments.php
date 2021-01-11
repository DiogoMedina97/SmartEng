<?php 
    comment_form(array(
        'class_form' => 'row',
        'comment_notes_before' => '',
        'fields' => array(
            'author' => sprintf(
                '<div class="comment-form-author col-sm-6 col-xs-12">%s</div>',
                sprintf(
                    '<input id="author" name="author" type="text" value="%s" size="30" maxlength="245" placeholder="Nome"%s />',
                    esc_attr( $commenter['comment_author'] ),
                    $html_req
                )
            ),
            'email' => sprintf(
                '<div class="comment-form-email col-sm-6 col-xs-12">%s</div>',
                sprintf(
                    '<input id="email" name="email" %s value="%s" size="30" maxlength="100" aria-describedby="email-notes" placeholder="E-mail"%s />',
                    ( $html5 ? 'type="email"' : 'type="text"' ),
                    esc_attr( $commenter['comment_author_email'] ),
                    $html_req
                )
            ),
            'cookies' => ''
        ),
        'comment_field' => sprintf(
            '<div class="comment-form-comment col-sm-12 col-xs-12">%s</div>',
            '<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" placeholder="Participe da discussão..." required="required"></textarea>'
        ),
        'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="%3$s btn-custom" value="%4$s" />',
        'submit_field' => sprintf(
            '<div class="col-sm-12 col-xs-12">%s</div>',
            '<div class="form-submit">%1$s %2$s</div>'
        )
    ));
?>


<div id="comments">
    <ul>
        <?php wp_list_comments(); ?>
    </ul>
</div>
