<?php get_header(); ?>

<main>
    <!-- Breadcrumb -->
    <div class="c-breadcrumb__wrap">
        <nav class="c-breadcrumb" aria-label="パンくずリスト">
            <a href="<?php echo esc_url(home_url('/')); ?>">HOME</a>
            <span>></span>
            <span><?php the_title(); ?></span>
        </nav>
    </div>

    <!-- Single Post -->
    <article class="p-single">
        <div class="l-container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <header class="p-single__header">

                        <div class="p-single__meta">

                            <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                                <?php echo esc_html(get_the_date('Y.m.d')); ?>
                            </time>

                            <?php
                            $categories = get_the_category();

                            if ($categories) :
                                ?>
                                <ul class="p-single__categories">
                                    <?php foreach ($categories as $category) : ?>
                                        <li>
                                            <?php echo esc_html($category->name); ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                        </div>

                        <h1 class="p-single__title">
                            <?php the_title(); ?>
                        </h1>

                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="p-single__thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="p-single__content">
                        <?php the_content(); ?>
                    </div>

                    <!-- 前後の記事 -->
                    <nav class="p-single__nav">

                        <div class="p-single__nav-prev">
                            <?php previous_post_link(
                                '%link',
                                '← %title'
                            ); ?>
                        </div>

                        <div class="p-single__nav-next">
                            <?php next_post_link(
                                '%link',
                                '%title →'
                            ); ?>
                        </div>

                    </nav>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </article>

    <!-- Contact -->
    <section class="p-contact l-section">
        <div class="l-container">

            <div class="c-section-title">
                <h2 class="c-section-title__ja">お問い合わせ</h2>
                <p class="c-section-title__en">CONTACT</p>
            </div>

            <p class="p-contact__lead">
                ご相談・お問い合わせはこちらからお気軽にご連絡ください。
            </p>

            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c-contact-btn">
                お問い合わせ
            </a>

        </div>
    </section>

</main>

<?php get_footer(); ?>
