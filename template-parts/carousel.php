<section id="carousel">
    <div id="carousel-slides" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $args = array(
                'post_type' => 'carousel',
                'posts_per_page' => -1
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                $index = 0;
                while ($query->have_posts()) : $query->the_post();

                    if ($index == 0) {
                        echo '<div class="carousel-item active">';
                    } else {
                        echo '<div class="carousel-item">';
                    }

                    echo '
                    ' . get_the_post_thumbnail() . '
                        <div class="description">
                            <h2>' . get_the_title() . '</h2>
                            <p>' . get_the_excerpt() . '</p>
                        </div>
                    </div>
                ';
                    $index = $index + 1;
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>