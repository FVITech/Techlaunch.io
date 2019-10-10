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
<!--            <p class="page-subtitle">Techlaunch is is conveniently located in heart of the Doral Business District, inside Pipeline Workspaces. Situated just steps away from CityPlace Doral with easy access from expressway and many parking spaces available.</p>
-->        </div>
    </section>

    <section class="request-more-info">
        <div class="main">
            <h2 class="section-title">Request More Information</h2>
            <form method="POST" action="<?= $form_action; ?>">
            <div class="form-input split-2">
            <div class="split-boxt">
                <label>Preferred Location</label>
                <select name="campus" id="campus" style="width: 100%;">
                    <!--<option value="Miami" <?php // if ($campus == 'miami' || $campus == '') echo 'selected' ?>>Miami</option>-->
                    <option value="Miramar" <?php if( $campus == 'miramar') echo 'selected' ?>>Miramar</option>
                </select>
            </div>
            <div class="split-box">
                <label>Program of Interest</label>
                <select name="program_name" id="program_name" style="width: 100%;">
                    <option value="--" disabled <?php if (!isset($program) || $program == '') echo 'selected' ?>>-- Select --</option>
                    <!--<option value="Web Developer" <?php // if(isset($program) && $program == 'web-developer') echo 'selected' ?>>Web Developer</option>-->
                    <option value="Cyber Security Network Technician" <?php if(isset($program) && $program == 'cyber-security') echo 'selected' ?>>Cyber Security and Network Technician</option>
                    <!--<option value="Web Design and Digital Marketing" <?php // if(isset($program) && $program == 'web-design-and-digital-marketing') echo 'selected' ?>>Web Design and Digital Marketing</option>-->
                   <!-- <option value="aws" <?php // if(isset($program) && $program == 'aws') echo 'selected' ?>>Amazon Web Services</option>-->
                    <!-- <option value="wordpress" <?php if(isset($program) && $program == 'wordpress') echo 'selected' ?>>WordPress</option> -->
                </select>
                <input type="hidden" name="program_id" id="legacy_program" value="<?php if(isset($program)) echo $program ?>" />
            </div>
            </div>
            <div class="form-input split-2">
                <div class="split-box">
                    <label>first name</label>
                    <input type="text" name="first_name" required>
                </div>
                <div class="split-box">
                    <label>last name</label>
                    <input type="text" name="last_name" required>
                </div>
            </div>
            <div class="form-input split-2">
                <div class="split-box">
                    <label>phone</label>
                    <input type="tel" name="day_phone" required>
                </div>
                <div class="split-box">
                    <label>zip code</label>
                    <input type="number" name="zipcode">
                </div>
            </div>
            <div class="form-input">
                <label>email</label>
                <input type="email" name="email" required>
            </div>
            <button class="submit-btn" type="submit">get info</button>
            <div class="user-feedback"></div>
        </form>
            <p class="disclosure">By clicking "Submit Info" above, you agree for TechLaunch to contact you using our autodialer, text, pre-recorded message, via telephone or mobile device (including SMS and MMS) and email, even if your number is currently listed on any state, federal or corporate "Do Not Call list".</p>
        </div>
        <aside>
            <h3>Contact Us</h3>
            <p>So now that you are ready to take that first step to changing your life, come meet with one of our admissions representatives and enroll today! Our admissions process is simple and easy to get you started on the path to success.</p>
            <h4>Classroom Location:</h4>
            <a  class="address-link" target="_blank" rel="noopener" href="https://goo.gl/maps/p6Cj7d8PLaS2">
                <address>
                    Miramar Campus<br>
                    3520 Enterprise Way,<br>
                    Miramar, FL 33025<br>
                </address>
            </a>
            <br>
<!--            <p class="contact"><strong>Email:</strong> <a href="mailto:info@fvi.edu">info@techlaunch.io</a></p>
           <p class="contact"><strong>Phone:</strong> <a href="tel:786-574-9511">305-783-3599</a></p>
-->            <p class="contact"><strong>Phone:</strong> <a href="tel:305-783-359">305-783-3599</a></p>
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
