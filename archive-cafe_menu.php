<?php get_header(); ?>

<div class="container">
    <h1><?php post_type_archive_title(); ?></h1>
    <div class="cafe-menu-grid">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="cafe-menu-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="cafe-menu-thumbnail">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>
                    <h2 class="cafe-menu-title"><?php the_title(); ?></h2>
                    <div class="cafe-menu-content"><?php the_excerpt(); ?></div>
                    <div class="cafe-menu-price">
                        <?php
                        $price = get_post_meta(get_the_ID(), '_cafe_menu_price', true);
                        if ($price) {
                            echo '<p>Price: $' . esc_html($price) . '</p>';
                        }
                        ?>
                    </div>
                    <a href="<?php echo esc_url(add_query_arg('add-to-cart', get_the_ID(), home_url())); ?>" class="button add-to-cart">Add to Cart</a>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e('No cafe menus found.'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
