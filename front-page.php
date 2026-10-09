<?php get_header(); ?>

<main>
    <!-- My Slider Revolution-->
    <section class="p-msr-fv">
        <?php echo do_shortcode('[my_slider id="73"]'); ?>
    </section>

    <!-- FV -->
    <section class="p-fv">
        <div class="p-fv__inner">
            <p class="p-fv__catch u-center">
                暮らしと未来を<br>
                もっと豊かに。
            </p>
            <p class="p-fv__txt">
                〇〇株式会社は、地域に根ざしたサービスを通じて<br>
                お客様の暮らしをサポートします。
            </p>
        </div>
    </section>

    <!-- FV_スライダー -->
    <div class="p-fv-slider">
        <div class="p-fv-slider__slide" style="background-image: url(<?php tempurl(); ?>/images/fv_slide_01.jpg);">
            <div class="p-fv-slider__content">
                <p class="p-fv-slider__head">暮らしと未来を<br>もっと豊かに。</p>
                <p class="p-fv-slider__txt">〇〇株式会社は、地域に根ざしたサービスを通じて<br>
                お客様の暮らしをサポートします。</p>
            </div>
        </div>
        <div class="p-fv-slider__slide" style="background-image: url(<?php tempurl(); ?>/images/fv_slide_02.jpg);">
            <div class="p-fv-slider__content">
                <p class="p-fv-slider__head">暮らしと未来を<br>もっと豊かに。</p>
                <p class="p-fv-slider__txt">〇〇株式会社は、地域に根ざしたサービスを通じて<br>
                お客様の暮らしをサポートします。</p>
            </div>
        </div>
    </div>

    <!-- About -->
    <section id="ac_about" class="p-about l-section js-fadein">
        <div class="l-container">
            <div class="c-section-title">
                <h2 class="c-section-title__ja">私たちについて</h2>
                <p class="c-section-title__en">ABOUT</p>
            </div>
            <div class="p-about__content">
                <div class="p-about__image">
                    <img src="https://placehold.jp/400x400.png" alt="私たちについて">
                </div>
                <div class="p-about__body">
                    <h3>
                        地域とともに歩む会社です。
                    </h3>
                    <p>
                        〇〇株式会社は、地域のお客様に寄り添い、
                        安心してご利用いただけるサービスを提供しています。
                    </p>
                    <p>
                        お客様一人ひとりの声を大切にし、
                        長く信頼していただける企業を目指しています。
                    </p>
                    <a href="#" class="c-more-btn">
                        MORE
                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- Service -->
    <section id="ac_service" class="p-service l-section js-fadein">
        <div class="l-container">
            <div class="c-section-title">
                <h2 class="c-section-title__ja">サービス</h2>
                <p class="c-section-title__en">SERVICE</p>
            </div>
            <div class="p-service__list">
                <article class="c-card">
                    <div class="c-card__img">
                        <img src="https://placehold.jp/400x400.png" alt="">
                    </div>
                    <div class="c-card__body">
                        <h3 class="c-card__title">
                            サービス01
                        </h3>
                        <p class="c-card__txt">
                            サービスの概要をここに掲載します。
                        </p>
                    </div>
                </article>
                <article class="c-card">
                    <div class="c-card__img">
                        <img src="https://placehold.jp/400x400.png" alt="">
                    </div>
                    <div class="c-card__body">
                        <h3 class="c-card__title">
                            サービス02
                        </h3>
                        <p class="c-card__txt">
                            サービスの概要をここに掲載します。
                        </p>
                    </div>
                </article>
                <article class="c-card">
                    <div class="c-card__img">
                        <img src="https://placehold.jp/400x400.png" alt="">
                    </div>
                    <div class="c-card__body">
                        <h3 class="c-card__title">
                            サービス03
                        </h3>
                        <p class="c-card__txt">
                            サービスの概要をここに掲載します。
                        </p>
                    </div>
                </article>
            </div>
            <!-- Slick -->
            <div class="js-slider_01 u-mt100">
                <div>
                    <img src="<?php tempurl(); ?>/images/slide_01.jpg" alt="">
                </div>

                <div>
                    <img src="<?php tempurl(); ?>/images/slide_02.jpg" alt="">
                </div>

                <div>
                    <img src="<?php tempurl(); ?>/images/slide_03.jpg" alt="">
                </div>

                <div>
                    <img src="<?php tempurl(); ?>/images/slide_04.jpg" alt="">
                </div>
            </div>
        </div>
    </section> 

    <!-- Works -->
    <section id="ac_works" class="p-works l-section js-fadein">
        <div class="l-container">

            <div class="c-section-title">
                <h2 class="c-section-title__ja">実績</h2>
                <p class="c-section-title__en">WORKS</p>
            </div>

            <div class="p-works__list">

                <article class="c-card">
                    <div class="c-card__image">
                        <img src="https://placehold.jp/400x400.png" alt="">
                    </div>
                    <div class="c-card__body">
                        <h3 class="c-card__title">
                            実績タイトル
                        </h3>
                        <p class="c-card__text">
                            実績の概要を掲載します。
                        </p>
                    </div>
                </article>

                <article class="c-card">
                    <div class="c-card__image">
                        <img src="https://placehold.jp/400x400.png" alt="">
                    </div>
                    <div class="c-card__body">
                        <h3 class="c-card__title">
                            実績タイトル
                        </h3>
                        <p class="c-card__text">
                            実績の概要を掲載します。
                        </p>
                    </div>
                </article>

                <article class="c-card">
                    <div class="c-card__image">
                        <img src="https://placehold.jp/400x400.png" alt="">
                    </div>
                    <div class="c-card__body">
                        <h3 class="c-card__title">
                            実績タイトル
                        </h3>
                        <p class="c-card__text">
                            実績の概要を掲載します。
                        </p>
                    </div>
                </article>

            </div>
            <!-- ギャラリー -->
            <!-- レイアウトフィルタ_isotope -->
            <div class="c-gallery u-mt50">
                <div class="c-gallery__btns">
                    <button class="c-gallery__filter-btn is-active" data-filter="*">すべて</button>
                    <button class="c-gallery__filter-btn" data-filter=".cat-a">カテゴリA</button>
                    <button class="c-gallery__filter-btn" data-filter=".cat-b">カテゴリB</button>
                    <button class="c-gallery__filter-btn" data-filter=".cat-c">カテゴリC</button>
                </div>
                <div class="c-gallery__grid">
                    <div class="c-gallery__item cat-a">カテゴリA</div>
                    <div class="c-gallery__item cat-a">カテゴリA</div>
                    <div class="c-gallery__item cat-b">カテゴリB</div>
                    <div class="c-gallery__item cat-b">カテゴリB</div>
                    <div class="c-gallery__item cat-b">カテゴリB</div>
                    <div class="c-gallery__item cat-c">カテゴリC</div>
                    <div class="c-gallery__item cat-c">カテゴリC</div>
                </div>
            </div>
        </div>

    </section>

    <!-- News -->
    <section id="ac_news" class="p-news l-section js-fadein">
        <div class="l-container">
            <div class="c-section-title">
                <h2 class="c-section-title__ja">お知らせ</h2>
                <p class="c-section-title__en">NEWS</p>
            </div>
            <?php
            $news_query = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'category_name'  => 'news',
            ));
            ?>
            <div class="p-news__list">
                <?php if ($news_query->have_posts()) : ?>
                    <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>

                        <article class="p-news__item">
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                <?php echo get_the_date('Y.m.d'); ?>
                            </time>

                            <a class="p-news__link" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </article>

                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="ac_contact" class="p-contact l-section js-fadein">
        <div class="l-container">
            <div class="c-section-title">
                <h2 class="c-section-title__ja">お問い合わせ</h2>
                <p class="c-section-title__en">CONTACT</p>
            </div>
            <p class="p-contact__lead">
                ご相談・お問い合わせはこちらからお気軽にご連絡ください。
            </p>
            <a href="<? homeurl(); ?>/contact" class="c-contact-btn">
                お問い合わせ
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>

