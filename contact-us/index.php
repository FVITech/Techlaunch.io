<?php $rootPath = '../';
$page = "contact-us";
$meta_title="Contact Us";
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
            <h1 class="page-title">Location</h1>
            <p class="page-subtitle">Techlaunch is is conveniently located in heart of the Doral Business District, inside Pipeline Workspaces. Situated just steps away from CityPlace Doral with easy access from expressway and many parking spaces available.</p>
        </div>
    </section>

    <section class="request-more-info">
        <div class="main">
            <h2 class="section-title">Request More Information</h2>
            <form method="POST" action="<?= $form_action; ?>">
                <div class="form-input">
                    <div>
                        <label>First Name</label>
                        <input type="text" name="first_name">
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type="text" name="last_name">
                    </div>
                </div>
                <div class="form-input">
                    <div>
                        <label>Email</label>
                        <input type="email" name="email">
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="tel" name="phone">
                    </div>
                </div>
                <div class="form-input">
                    <div>
                        <label>City</label>
                        <input type="text" name="city">
                    </div>
                    <div>
                        <label>Zip</label>
                        <input type="number" name="zip">
                    </div>
                </div>
                <button type="submit">submit info</button>
            </form>
            <p class="disclosure">By clicking "Submit Info" above, you agree for TechLaunch to contact you using our autodialer, text, pre-recorded message, via telephone or mobile device (including SMS and MMS) and email, even if your number is currently listed on any state, federal or corporate "Do Not Call list".</p>
        </div>
        <aside>
            <h3>Contact Us</h3>
            <p>So now that you are ready to take that first step to changing your life, come meet with one of our admissions representatives and enroll today! Our admissions process is simple and easy to get you started on the path to success.</p>
            <h4>Classroom Location:</h4>
            <a class="address-link" target="_blank" rel="noopener" href="https://www.google.com/maps/place/8400+NW+36th+St+%23450,+Doral,+FL+33166/@25.809245,-80.3350155,17z/data=!3m1!4b1!4m5!3m4!1s0x88d9b96336b2c0ab:0x6ce8e1e27de65384!8m2!3d25.809245!4d-80.3328268">
                <address>
                    8400 NW 36th St #450,<br>
                    Doral, FL 33166<br>
                </address>
            </a>
            <br>
<!--            <p class="contact"><strong>Email:</strong> <a href="mailto:info@fvi.edu">info@techlaunch.io</a></p>
-->            <p class="contact"><strong>Phone:</strong> <a href="tel:786-574-9511">305-783-3599</a></p>
            <img class="lazyload" data-src="<?= $rootPath ?>images/people/group-at-pipeline-mobile.jpg" alt="Techlaunch Students at Pipeline Doral">
        </aside>
    </section>

    <section class="images-slider">
        <div class="carousel">
            <div id="left-btn" class="left-btn">‹</div>
            <div id="right-btn" class="right-btn">›</div>
            <div class="dots"></div>
            <div class="carousel-item image-1 lazyload" data-bg="<?= $rootPath ?>images/pipeline/learning-1.jpg"></div>
            <div class="carousel-item image-2 lazyload" data-bg="<?= $rootPath ?>images/pipeline/students-2.jpg"></div>
            <div class="carousel-item image-3 lazyload" data-bg="<?= $rootPath ?>images/pipeline/teaching-1.jpg"></div>
            <div class="carousel-item image-4 lazyload" data-bg="<?= $rootPath ?>images/pipeline/workspace.jpg"></div>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
