<?php $rootPath = '../';
$page = "campus-locations";
$meta_title="Campus Locations";
$meta_key="";
$meta_desc="";
include('../parts/head.php'); ?>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DZRJ7D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include('../parts/navbar.php'); ?>
    <?php $classes = ""; include('../parts/get-info-form.php'); ?>

    <section class="above-the-fold">
        <div class="container">
            <a href="<?= $rootPath ?>">
                <img src="<?= $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <br>
            <h1 class="page-title">Campus Locations</h1>
        </div>
    </section>

    <section class="summary-and-form bg-gray">
        <div class="container">
            <div class="split-2">
                <div class="split-box">
                    <div class="campus-summary">
                        <h3>Miami (Doral) Campus</h3>
                        <p>The Miami campus of FVI is conveniently located in the Pipeline co-working space in Doral on NW 36th St. Home to a diverse community of startups, professionals and small businesses, this location is ideal to learn in a true working environment.</p>
                        <p>Our programs are designed to get you in a career fast, with most designed to be completed in 9 months. Along with an excellent education, our career services team is there to help you prepare for and find a terrific career opportunity.</p>
                    </div>
                    <br>
                    <br>
                    <img data-srcset="<?= $rootPath ?>images/pipeline/students-2.jpg" alt="Pipeline Doral" class="lazyload appear workspace">
                    <!-- <div class="campus-summary">
                        <h3>Miramar Campus</h3>
                        <p>With a convenient Broward County location near Pembroke Pines and minutes from both the Florida Turnpike and I-75, the Miramar campus of FVI features in-demand programs in both Allied Health and Information Technology.</p>
                        <p>Our programs are designed to get you in a career fast, with most designed to be completed in 9 months. Along with an excellent education, our career services team is there to help you prepare for and find a terrific career opportunity.</p>
                    </div>
                    <br>
                    <br> -->
                </div>
                <div class="split-box">
                    <?php
                        $classes = "on-page";
                        $program = "cyber-security";
                        include('../parts/get-info-form.php');
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="photos-and-maps">
        <div class="container">
            <div class="split-2">
                <div class="split-box image-container">
                    <h4 class="location-title">Miami Campus - Pipeline Doral</h4>
                    <iframe class="location-map appear lazyload" frameborder="0" data-src="https://www.google.com/maps/embed/v1/place?q=Pipeline%20Doral&key=AIzaSyDaSsFoC1uGHddMd2hFgIKfHiupzPUhZQY" allowfullscreen></iframe>
                </div>
                <div class="split-box text">
                    <h2 class="section-title">Our Campus</h2>
                    <p>Located at Pipeline Doral.</p>
                </div>
                <div class="split-box image-container">
                    <div class="image appear first lazyload"></div>
                </div>
                <div class="split-box image-container">
                    <div class="image appear fourth lazyload"></div>
                </div>
                <!-- <div class="split-box image-container">
                    <h4 class="location-title">Miramar Campus</h4>
                    <iframe class="location-map appear delay-300 lazyload" frameborder="0" data-src="https://www.google.com/maps/embed/v1/place?q=3520%20Enterprise%20Way%2C%20Miramar%2C%20FL%2033025&key=AIzaSyDaSsFoC1uGHddMd2hFgIKfHiupzPUhZQY" allowfullscreen></iframe>
                </div> -->
            </div>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
