<h1>Bprint Theme Options</h1>
<?php settings_errors(); ?>

<form class="" action="options.php" method="post">
    <?php settings_fields('bprint-settings-group'); ?>
    <?php do_settings_sections('hask777-bprint'); ?>
    <?php submit_button(); ?>
</form>
