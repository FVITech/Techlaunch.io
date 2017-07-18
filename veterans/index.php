<?php $rootPath = '../'; $page = "veterans"; include('../parts/head.php'); ?>
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
            <a href="<?php echo $rootPath ?>">
                <img src="../images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <h1 class="page-title">veterans</h1>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Veterans Services</h2>
            <h3>Career Training For Veterans</h3>
            <p>Serving Those Who Served</p>
            <p>At TechLaunch we’re dedicated to providing career education and training to members of the military, both past and present, as well as their dependents. Our programs are designed to help you get the training and skills you need so you can land your dream job in the tech industry.</p>
            <p>You sacrificed for our country, and at TechLaunch we think that effort should be rewarded. That’s why, when you enter one of our programs, you’ll receive:</p>
            <ul>
                <li>Specialized career training that fits your skills and your schedule</li>
                <li>Preferential placement opportunities</li>
                <li>Specialty support to assist you and your family while transitioning to civilian life and a new career</li>
            </ul>
            <p>With a focus on training Veterans for the next phase of their life, we’re proud to help prepare you for a career in the growing tech industry. We’ve also made an effort to ensure that the Veterans Administration approves of all of our programs.</p>
            <p>The TechLaunch team provides more than an education – we’ve committed to seeing you succeed, which is why, when you become a TechLaunch student, we’ll arrange for a student services support team member and a career services support team member to work with you so you can reach your training goals and feel prepared for new career opportunities.</p>
            <p>You can count on our team to help you with:</p>
            <ul>
                <li>Resume writing services</li>
                <li>Developing interviewing skills and techniques</li>
                <li>Updating your LinkedIn page</li>
                <li>Highlighting your certifications and projects</li>
            </ul>
            <p>At TechLaunch, we want to make sure you reach your dreams. Our mission is to prepare and support you on your journey to a new career in the tech industry. To do this, our career services team will promote your success in the classroom, and use this to make important introductions so you can build connections with potential employers.</p>
            <p>Find out more about our programs today and discover the possibilities. And if you have questions about your Veterans benefits, please follow the link below.</p>
            <p><a href="">U.S. Department | VA | Post-9/11 GI Bill®</a></p>
        </div>
    </section>

    <?php
        $testimonials = array('peter-vegliante');
        $classes = 'veterans';
        include('../parts/testimonials/index.php');
    ?>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
