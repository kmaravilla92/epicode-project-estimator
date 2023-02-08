<?= __( 'Best', EPC_LANG_DOMAIN ) ?> <?= $admin_name ?>,
<br>
<br>
<?= __( 'A contact request has been sent by', EPC_LANG_DOMAIN ) ?> <?= $client_name ?> <?= __( 'via', EPC_LANG_DOMAIN ) ?> <a href="<?= get_bloginfo('url'); ?>" target="_blank"><?= get_bloginfo( 'name' ) ?></a>.
<?= __( 'Click', EPC_LANG_DOMAIN ) ?> <a href="<?= $submission_link ?>" target="_blank"><?= __( 'here', EPC_LANG_DOMAIN ) ?></a> <?= __( 'to view the submission details', EPC_LANG_DOMAIN ) ?>.
<br>
<?= __( 'Regards,', EPC_LANG_DOMAIN ) ?>
<br>
<br>
<?= $admin_name ?>
