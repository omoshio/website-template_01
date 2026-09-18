<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプル株式会社</title>
    <meta name="description" content="サンプル株式会社の公式サイトです。">
    <?php wp_head(); ?>
</head>

<body>
<!-- Header -->
<header class="l-header">
    <div class="l-header__inner">
        <h1 class="c-head1 u-bold">
            <a href="<?php homeurl(); ?>" class="l-header__logo">
                サンプル株式会社
            </a>
        </h1>
        <nav class="l-header__nav">
            <ul class="l-header__nav-list">
                <li class="l-header__nav-item">
                    <a href="#ac_about">ABOUT</a>
                </li>
                <li class="l-header__nav-item">
                    <a href="#ac_service">SERVICE</a>
                </li>
                <li class="l-header__nav-item">
                    <a href="#ac_works">WORKS</a>
                </li>
                <li class="l-header__nav-item">
                    <a href="#ac_news">NEWS</a>
                </li>
                <li class="l-header__nav-item">
                    <a href="#ac_contact">CONTACT</a>
                </li>
            </ul>
        </nav>
        <div class="sp_none">
            <a class="c-header-btn" href="/contact">お問合わせ</a>
        </div>
        <div class="pc_none">
            <button
                class="c-menu-btn js-menu-btn"
                type="button"
                aria-label="メニューを開く"
                aria-expanded="false"
            >
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>