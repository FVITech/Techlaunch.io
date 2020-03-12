<?php $rootPath = '../'; 
$page = "events"; 
$meta_title="Events";
$meta_key="";
$meta_desc="FVI School of Technology events.";    
include('../parts/head.php'); ?>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DZRJ7D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include('../parts/navbar.php'); ?>
    <?php $program = ""; $classes = ""; include('../parts/get-info-form.php'); ?>

    <section class="above-the-fold">
        <div class="container">
            <a href="<?= $rootPath ?>">
                <img src="<?= $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="FVI School of Technology logo" class="logo">
            </a>
            <h1 class="page-title">events</h1>
        </div>
    </section>

    <section class="events-list" id="events-list">
        <div class="container">
            <p class="section-summary">FVI School of Technology hosts various events, including free coding workshops and informational sessions.</p>
            <div class="events-list-container" id="events-list-container">
                <br>
                <h3 style="text-align: center">Loading events...</h3>
                <br>
            </div>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
