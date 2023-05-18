<?php
$args = array(
    'post_type' => 'about_section'
);
$the_query = new WP_Query($args);

if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
?>

        <section id="about">
            <h2>
                <?php the_title() ?>
            </h2>
            <div>
                <?php the_post_thumbnail() ?>
                <?php the_content() ?>
            </div>
        </section>

<?php
    }
}
wp_reset_query();
?>