<?php require "inc/header.php"; ?>

<section class="top-header">
    <div class="wrap">
        <div class="page-header">
            <div class="page-header__logo">
                <a href="/">
                    <img src="img/offhill-white-logo.png" alt="Offhill Logo White" />
                </a>
            </div>
            
            <div class="page-header__search-bar">
                <div class="page-header__search-box">
                    <p> Click here to search for brands </p>
                    <i class="ion-android-search"></i>
                </div>
                <form action="#" method="GET" class="page-header__search-form hide">
                    <button type="button" name="page-head-search-close" class="page-head-search-close"><i class="ion-close-round"></i></button>
                    <input type="text" name="page-search" class="page-header__search" placeholder="Search for Brands... ">
                    <button type="button" name="page-head-search" class="page-head-search"><i class="ion-android-search"></i></button>
                </form>
            </div>
            
            <div class="page-header__header-misc">
                <ul class="page-header__ul">
                    <li class="page-header__li"><a href="">Sign In</a></li>
                    <li class="page-header__li"><a href="">Register</a></li>
                    <li class="page-header__li show-more"><i class="ion-android-menu"></i><li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="categories">
    <div class="page">
        <?php require "inc/categories.php"; ?>
    </div>
</section>