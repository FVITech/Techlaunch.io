<?php $rootPath = '../'; 
$page = "prepare"; 
$meta_title="Prepare";
$meta_key="";
$meta_desc="Techlaunch is information IT vocational school in Miami for programming boot camps and courses in cybersecurity, wed and app development and digital marketing.";    
include('../parts/head.php'); ?>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DZRJ7D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
      include('../parts/navbar.php');
      $classes = "";
      include('../parts/get-info-form.php');
    ?>

    <section class="above-the-fold">
        <div class="container">
            <a href="<?= $rootPath ?>">
                <img src="<?= $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <h1 class="page-title">Prepare</h1>
        </div>
    </section>

    <section class="content">
        <div class="container">
<div class="split-2" style="width:100%;">
                <div class="split-box left text appear">
                    <h1 class="section-title">Florida Vocational Institute Continues to Closely Monitor Hurricane Dorian</h1>
                   <p><strong>Thursday, August 29th, 2:00pm</strong></p>

<p>Florida Vocational Institute is closely monitoring Hurricane Dorian. The current track of the storm does bring it toward South Florida, but given the margin of error in the forecast it is still too early to know what, if any, impacts will be experienced.</p>

<p><strong>At this time, all classes, events, and activities are operating on a regular schedule, and there are no plans to reschedule or modify overall operations.</strong></p>

<p><strong>FVI'sCrisis Management Team will continue to actively monitor and assess the situation over the coming days. We are ready to take comprehensive preparatory actions if needed.</strong></p>

<h3>Emergency Notification Information</h3>

<p><strong><i>STUDENTS:</i></strong> Continue to regularly monitor official communications issued by Florida Vocational Institutes on the website for updates on class schedule and operations at <a href="http://www.fvi.edu">http://www.fvi.edu</a>.</p>

<p><strong><i>INSTRUCTORS, FACULTY AND STAFF</i></strong>: Continue to regularly monitor official communications issued by Florida Vocational Institutes on the website at <a href="http://www.fvi.edu">http://www.fvi.edu</a>. When a situation warrants, mass text and voice messages and emails containing emergency information will be sent.</p>

<p><strong>Florida Vocational Institutes Information Hotline: 1-855-934-0493</strong></p>

<p>8/29/19 – TIMELY REQUEST</p>

<p><strong>Life-Threatening Emergency at Any Center: 911</strong></p>
                </div>
                
            </div>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
