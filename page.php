<?php get_header(); ?>

<main>
    <!-- Page Content -->
    <section class="p-page l-section">
        <div class="l-container">
            <div class="c-section-title">
                <h1 class="c-section-title__ja">
                    <?php the_title(); ?>
                </h1>
                <p class="c-section-title__en">
                    <?php
                    $slug = get_post_field('post_name', get_the_ID());
                    echo strtoupper($slug);
                    ?>
                </p>
            </div>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="p-page__content">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>