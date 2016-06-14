<?php require 'inc/header.php'; ?>

<section class="header">
    <div class="wrap">
        <div class="header-wrapper">
            <div class="logo">
                <a href="/">
                    <img src="img/offhill-logo.png" alt="Offhill Logo">
                </a>
            </div>
            
            <div class="login-nav">
                <ul class="login-nav__ul">
                    <li class="login-nav__li"><a href="login.php">Sign In</a></li>
                    <li class="login-nav__li last"><a href="register.php">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="categories">
    <?php require "inc/categories.php"; ?>
</section>

<section class="home-banner">
    <div class="wrap">
        <div class="home-banner__home-header-content">
            <h2><b>Search Once.</b> Find The Best Reviewed Brands in Nigeria</h2>
            <p>Offhill.com analyzes thousands of articles and customer reviews to find the top-rated brands and their products. <b>We provide the facts, so you can avoid the junk.</b></p>
            <form action="#" method="GET" class="home-banner__home-search-form">
                <input type="text" name="search" placeholder="Search for Brand">
                <button type="submit" class="home-banner__search-submit-button"></button>
            </form>
            <ul class="home-banner__tags">Popular Searches
                <li class="home-banner__tags-li"><a href="">GTBank</a></li>
                <li class="home-banner__tags-li"><a href="">Jumia</a></li>
                <li class="home-banner__tags-li"><a href="">BusinessPlus</a></li>
                <li class="home-banner__tags-li"><a href="">Dangote Group</a></li>
                <li class="home-banner__tags-li"><a href="">Cowbell</a></li>
            </ul>
        </div>
    </div>
</section>