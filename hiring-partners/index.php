<?php $rootPath = '../';
$page = "hiring-partners";
$meta_title="Hiring Partners";
$meta_key="";
$meta_desc="Becoming a hiring partner for FVI School of Technology gives your business access to motivated candidates trained in both technical and professional skills.";
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
            <a href="<?= $rootPath; ?>">
                <img src="<?= $rootPath; ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="FVI School of Technology logo" class="logo">
            </a>
            <h1 class="page-title">Hiring Partners</h1>
        </div>
    </section>

    <section class="talent">
        <div class="container">
            <h2 class="section-title">Find the Talent That You Need</h2>
            <div class="split-2">
                <div class="split-box">
                    <p>Becoming a hiring partner for FVI School of Technology gives your business access to highly trained candidates with our Zero Cost Recruiting program. There’s no need to place an ad or hire a recruiter. We’ll take responsibility for understanding the needs of your company and matching you with the ideal candidate. </p>
                    <p>Our career services department has experience working closely with our hiring partners to understand their company culture, business needs, and technology stack. Our team then matches our partners with FVI School of Technology @ FVI graduates who have the skills their business is looking for. We can help our hiring partners find qualified candidates for temp-to-perm opportunities, paid internships, and unpaid internships while minimizing business risk, turnover rates, and costs. </p>
                </div>
                <div class="split-box">
                    <img class="lazyload" data-src="<?= $rootPath; ?>images/people/group-at-pipeline.jpg" alt="FVI School of Technology students">
                </div>
            </div>
        </div>
    </section>

    <section class="hiring-partner-button">
        <div class="container">
            <a class="btn" href="#hiring-partner-form-section" id="open-hiring-partner-form">Apply to Become a Hiring Partner →</a>
        </div>
    </section>

    <section class="reasons">
        <div class="container">
            <h2 class="section-title appear">Reasons To Hire A FVI School of Technology Graduate</h2>
            <p class="section-subtitle appear delay-200">Our training sets our students apart and is designed to prepare them to work in the tech industry. We do this by: </p>
            <div class="split-2">
                <ul class="list split-box appear">
                    <li>
                        <img class="icon lazyload" data-src="<?= $rootPath; ?>images/icons/teamwork.png">
                        Using group projects to teach our students to work in teams
                    </li>
                    <li>
                        <img class="icon lazyload" data-src="<?= $rootPath; ?>images/icons/teaching-1.png">
                        Teaching popular software applications
                    </li>
                    <li>
                        <img class="icon lazyload" data-src="<?= $rootPath; ?>images/icons/characteristics-1.png">
                        Immersing our students in a nine-month program
                    </li>
                    <li>
                        <img class="icon lazyload" data-src="<?= $rootPath; ?>images/icons/gears-1.png">
                        Providing more in-depth training than 10-week bootcamps
                    </li>
                    <li>
                        <img class="icon lazyload" data-src="<?= $rootPath; ?>images/icons/conversation-1.png">
                        Basing our curriculum on feedback from hiring partners and local businesses
                    </li>
                </ul>
                <ul class="list split-box appear delay-200">
                    <li>
                        <img class="icon lazyload" data-src="<?= $rootPath; ?>images/icons/conversation-2.png">
                        Providing problem-solving opportunities in our problem resolution labs
                    </li>
                    <li>
                        <img class="icon lazyload" data-src="<?= $rootPath; ?>images/icons/person-at-computer.png">
                        Using extensive hands-on learning
                    </li>
                    <li>
                        <img class="icon lazyload" data-src="<?= $rootPath; ?>images/icons/person-with-suitcase.png">
                        Providing internship opportunities
                    </li>
                    <li>
                        <img class="icon lazyload" data-src="<?= $rootPath; ?>images/icons/person-hierarchy.png">
                        Giving our partners access to our Zero-Cost Tech Recruiting program
                    </li>
                    <li>
                        <img class="icon lazyload" data-src="<?= $rootPath; ?>images/icons/certificate.png">
                        Helping students design a portfolio of work to show hiring partners
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="hiring-partner-testimonials">
        <div class="container">
            <h2 class="section-title appear">Join Our Hiring Partners</h2>
            <div class="testimonials-container">
                <div class="testimonial">
                    <h3 class="name">Spiderboost</h3>
                    <video class="lazyload" controls>
                        <source src="<?= $rootPath ?>videos/Spiderboost_Testimony.mp4" type="video/mp4">
                        <source src="<?= $rootPath ?>videos/Spiderboost_Testimony.ogg" type="video/ogg">
                    </video>
                </div>
                <div class="testimonial">
                    <h3 class="name">LaunchCode</h3>
                    <div class="text">
                        <p>"We've always been impressed with FVI School of Technology graduates and have been very happy bringing Lily on-board as an instructor for LaunchCode."</p>
                        <p class="author-name">Matt Mawhinney</p>
                        <p class="author-title">South Florida Community Manager at LaunchCode</p>
                    </div>
                </div>
                <div class="testimonial">
                    <h3 class="name">StartHub</h3>
                    <div class="text">
                        <p>"Eric has been instrumental in getting our own web presence sharpened-up to attract more web visitors and increase our flow of conversions."</p>
                        <p class="author-name">Hector Rodriguez</p>
                        <p class="author-title">Community Director at StartHub</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="logos">
        <div class="logos-container">
            <img class="lazyload" data-src="https://tech.fvi.edu/blog/wp-content/uploads/2017/07/coach-hq-1-1.png" alt="Coach HQ">
            <img class="lazyload" data-src="https://tech.fvi.edu/blog/wp-content/uploads/2017/07/logo-spiderboost-2.png" alt="Spider Boost">
            <img class="lazyload" data-src="https://tech.fvi.edu/blog/wp-content/uploads/2017/07/Starthub_MainLogoFile-2.png" alt="Start Hub">
            <img class="lazyload" data-src="https://tech.fvi.edu/blog/wp-content/uploads/2017/07/tango_mango_logo.jpg-1.png" alt="Tango Mango">
            <img class="lazyload" data-src="https://tech.fvi.edu/blog/wp-content/uploads/2017/07/the-fitz-solution-2.png" alt="Fitz Solution">
            <img class="lazyload" data-src="https://tech.fvi.edu/blog/wp-content/uploads/2017/07/WhereByUs-2.pngfinal-2.png" alt="Where by us">
        </div>
    </section>

    <section class="learning bg-gray">
        <div class="content">
            <h2 class="section-title appear">Culture of Learning</h2>
            <p class="appear">At FVI School of Technology, the primary skill we teach our students is to be life-long learners. By hiring our graduates and allowing them to grow within your organization, you will help foster a culture of teaching, learning, and collaboration amongst your team members. This often results in engaged, loyal employees who want to “pay it forward.”  </p>
        </div>
    </section>

    <section class="bridging-the-gap">
        <div class="container">
            <h2 class="section-title">Bridging the Skills Gap</h2>
            <div class="split-2">
                <div class="split-box">
                    <p>Many companies and individuals in the tech industry are very socially conscious and understand the skills gap, the digital divide, and the under-representation of minorities in the world of tech. At FVI School of Technology, we prepare every student who has the right combination of skills and grit to succeed in tech. By hiring our grads, you have the opportunity to have an impact by bringing people with diverse backgrounds and ideas into the industry and effect change for the better that bridges the gaps in the world of tech.</p>
                </div>
                <div class="split-box">
                    <img class="lazyload" data-src="<?= $rootPath; ?>images/bridging-the-gap.jpg" alt="Bridging the Skills Gap">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-page hiring-partner-form-section" id="hiring-partner-form-section">
        <div class="container">
            <!-- script tag that handles this form is at the bottom of this file -->
            <form id="hiring-partner-form" action="<?= $rootPath; ?>hiring-partners/contact.php" method="POST" enctype="multipart/form-data">
                <h2 class="section-title">Become A Hiring Partner</h2>
                <div class="split-2">
                    <div class="form-input split-box">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" required>
                    </div>
                    <div class="form-input split-box">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" required>
                    </div>
                </div>
                <div class="split-2">
                    <div class="form-input split-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form-input split-box">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" required>
                    </div>
                </div>
                <div class="split-2">
                    <div class="form-input split-box">
                        <label for="company">Company</label>
                        <input type="text" name="company" id="company" required>
                    </div>
                    <div class="form-input split-box">
                        <label for="logo">Logo</label>
                        <input type="file" accept="image/*" name="logo" id="logo">
                    </div>
                </div>
                <div class="form-input">
                    <label for="website">Website</label>
                    <input type="text" name="website" id="website">
                </div>
                <div class="form-input">
                    <label for="message">Message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <button class="btn" type="submit" id="submit">Send Form</button>
                <p id="user-feedback"></p>
            </form>
        </div>
    </section>

    <?php include('../parts/footer.php') ?>
    <?php include('../parts/bottom.php') ?>

    <script>
        const $hiringPartnerForm = $('#hiring-partner-form')
        const $userFeedback = $('#user-feedback')

        $hiringPartnerForm.on('submit', function(e) {
            e.preventDefault()

            $.ajax({
                url: $hiringPartnerForm[0].action
            })
            .done(function(response) {
                console.log(response)
                $userFeedback
                    .addClass('success')
                    .text('Thanks for signing up! You will be contacted shortly.')
                $hiringPartnerForm[0].reset()
            })
            .fail(function(err) {
                console.error(err)
                $userFeedback
                    .addClass('error')
                    .text('An error occurred while sending this form.')
            })
        })
    </script>

</body>
</html>
