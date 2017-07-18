<?php $rootPath = '../'; 

$page = ""; 
$metakeywords = "";
$metadesc = "";

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
            <a href="<?php echo $rootPath ?>">
                <img src="../images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <h1 class="page-title">Careerlaunch</h1>
        </div>
    </section>

    <section class="benefits">
        <div class="container">
            <div class="split">
                <div class="left">
                    <h2 class="section-title appear">Why Techlaunch?</h2>
                    <p class="appear">At TechLaunch @ Florida Vocational Institute, our goal is to train you for a high-tech career in less than a year. Every industry is evolving because of technology, and at TechLaunch we can help you understand the opportunities that this evolution is creating. Then, we’ll give you the tools and training you need to start a new career that grows with you.</p>
                    <p class="appear">If you’re new to the tech industry and are ready to learn about technology, we offer six and nine month programs. If you already have experience in the industry, we also offer short-term coding bootcamps and accelerated tech classes.</p>
                </div>
                <div class="right"></div>
            </div>
        </div>
    </section>

    <section class="testimonial-1">
        <div class="left">
            <img src="../images/people/business-professionals.png" alt="business professionals">
        </div>
        <div class="right">
            <p>When you start in one of our programs, you’ll notice that we use an extensive hands-on approach. In our dynamic classroom environment, our instructors will work by your side to help you learn. As a student, you’ll work on many projects so that you can learn by doing. You’ll also build and solve technological solutions that are similar to what our hiring partners use in their organizations.</p>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <p class="appear">We’ll prepare you for a career in the fast-growing fields of web development and design, coding, cybersecurity, network administration, cloud technologies and help desk support.</p>
            <a class="btn appear get-more-info">get more information</a>
        </div>
    </section>

    <section class="three-cards">
        <div class="cards-container">
            <div class="card appear delay-200 how-we-can-help">
                <div class="image"></div>
                <div class="text">
                    <h2 class="card-title">How We Help</h2>
                    <p>As part of our programs, we include career services designed to help you find the perfect position after graduation. Our dedicated Career Services Team will:</p>
                    <ul>
                        <li>Work to connect the right graduate with the right career opportunity</li>
                        <li>Help promote the success you’ve had in the classroom</li>
                        <li>Provide introductions and connections to potential employers</li>
                    </ul>
                </div>
            </div>

            <div class="card appear delay-400 hiring-partners">
                <div class="image"></div>
                <div class="text">
                    <h2 class="card-title">Hiring Partners</h2>
                    <p>By maintaining relationships with local technology hiring partners, we can help our students find quality careers. We use the feedback from our hiring partners to structure our curriculum, keeping our students up-to-date with the latest industry standards.</p>
                    <p>Our hiring partners also benefit by working with TechLaunch and saving money when looking for qualified talent. It’s a win-win for both our hiring partners and our students.</p>
                </div>
            </div>

            <div class="card appear delay-600 internships">
                <div class="image"></div>
                <div class="text">
                    <h2 class="card-title">Internships</h2>
                    <p>During your training, the Career Services Team at TechLaunch will work with you to find internship opportunities that are right for you. Once you graduate, we’ll help you find a great career in the tech industry.</p>
                    <p>At TechLaunch, we have strong hiring partner relationships with top companies in Miami, so we can match you with a career opportunity that blends your abilities with your passion.</p>
                </div>
            </div>
        </div>
    </section>

    <?php
        $testimonials = array('frank-veloz', 'peter-vegliante', 'lily-cantillo', 'yasiel-sanchez-caleo');
        include('../parts/testimonials/index.php');
    ?>

    <?php include('../parts/student-projects/index.php') ?>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
