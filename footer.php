<footer>


    <div>
        <nav>
            <h3>Social Media</h3>
            <?php if (is_active_sidebar('social-media-widget')) : ?>
                <?php dynamic_sidebar('social-media-widget'); ?>
            <?php else : ?>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/supergiantgames/" target="_blank" rel="noopener noreferrer">
                            <img src="/wp-content/themes/hades/assets/images/facebook.png" />
                            <span>facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/SupergiantGames" target="_blank" rel="noopener noreferrer">
                            <img src="/wp-content/themes/hades/assets/images/twitter.png" />
                            <span>twitter</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/supergiantgames" target="_blank" rel="noopener noreferrer">
                            <img src="/wp-content/themes/hades/assets/images/youtube.png" />
                            <span>youtube</span>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </nav>

        <nav>
            <h3>Buy from</h3>
            <?php if (is_active_sidebar('shop-widget')) : ?>
                <?php dynamic_sidebar('shop-widget'); ?>
            <?php else : ?>
                <ul class="shop-links">
                    <li>
                        <a href="https://store.steampowered.com/app/1145360/Hades/" target="_blank" rel="noopener noreferrer">
                            <img src="/wp-content/themes/hades/assets/images/steam.png" />
                            <span>steam</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://store.epicgames.com/en-US/p/hades" target="_blank" rel="noopener noreferrer">
                            <img src="/wp-content/themes/hades/assets/images/epic-games.png" />
                            <span>epic games</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.xbox.com/en-us/games/store/hades/9p8dl6w0jbb8" target="_blank" rel="noopener noreferrer">
                            <img src="/wp-content/themes/hades/assets/images/xbox.png" />
                            <span>xbox store</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://store.playstation.com/en-us/product/UP2125-PPSA03355_00-3466019145463410" target="_blank" rel="noopener noreferrer">
                            <img src="/wp-content/themes/hades/assets/images/playstation.png" />
                            <span>playstation store</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.nintendo.com/store/products/hades-switch/" target="_blank" rel="noopener noreferrer">
                            <img src="/wp-content/themes/hades/assets/images/switch.png" />
                            <span>switch store</span>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </nav>
    </div>


</footer>

<?php wp_footer() ?>
</body>

</html>