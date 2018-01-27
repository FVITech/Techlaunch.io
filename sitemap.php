<?php $rootPath = '';
$page = "sitemap";
$meta_title="Sitemap";
$meta_key="";
$meta_desc="TechLaunch Code School Offers Coding Bootcamp Programs, Training And Classes For Students To Crack The Code To Their Future. Learn More On How To Earn Degrees Here.";
include('parts/head.php'); ?>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DZRJ7D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
      include('parts/navbar.php');
      $classes = "";
      include('parts/get-info-form.php');
    ?>
    <section class="above-the-fold">
        <div class="container">
            <a href="<?= $rootPath ?>">
                <img src="<?= $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <h2 class="page-title">sitemap</h2>
        </div>
    </section>

    <section class="links">
        <div class="container">
            <p><a class="sitemap-link" href="https://techlaunch.io/programs/">Programs</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/web-developer/">Web Developer Program</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/cyber-security-and-network-technician/">Cyber Security and Network Technician Program</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/tech-skills-upgrade-programs/">Tech Skills Upgrade Programs</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/tech-skills-upgrade-programs/#aws">Amazon Web Services Program</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/tech-skills-upgrade-programs/#wordpress">Wordpress Program</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/careerlaunch/">Careerlaunch</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/hiring-partners/">Hiring Partners</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/about-us/">About Us</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/campus-locations/">Campus Locations</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/contact-us/">Contact Us</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/financial-aid/">Financial Aid</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/veterans/">Veterans</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/events/">Events</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/blog/">Blog</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/student-disclosures/">Student Disclosures</a></p>
            <p><a class="sitemap-link" href="https://techlaunch.io/privacy-policy/">Privacy Policy</a></p>
        </div>
    </section>

    <?php $rootPath = ''; include('parts/footer.php') ?>
    <?php $rootPath = ''; include('parts/bottom.php') ?>

</body>
</html>
