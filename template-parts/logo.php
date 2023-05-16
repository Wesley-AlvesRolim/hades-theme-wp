<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
?>

<?php if (has_custom_logo()) {
    echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . " logo" . '">';
} else {
    echo '<h1>' . get_bloginfo('name') . ' </h1>';
} ?>