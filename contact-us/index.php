<?php $rootPath = '../'; $page = "contact-us"; include('../parts/head.php'); ?>
<body>
    <?php include('../parts/navbar.php'); ?>
    <?php include('../parts/pop-up-form.php'); ?>

    <section class="above-the-fold">
        <div class="container">
            <a href="<?php echo $rootPath ?>">
                <img src="<?php echo $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <br>
            <h1 class="page-title">Location</h1>
        </div>
    </section>

    <section class="request-more-info">
        <div class="main">
            <h2 class="section-title">Request More Information</h2>
            <form>
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
            <p class="disclosure">By clicking "Submit Info" above, you agree for TechLaunch to contact you using our autodialer, text, pre-recorded message, via telephone or mobile device (including SMS and MMS) and email, even if your number is currently listed on any state, federal or corporate "Do Not Call list.</p>
        </div>
        <aside>
            <h3>Contact Us</h3>
            <p>So now that you are ready to take that first step to changing your life, come meet with one of our admissions representatives and enroll today! Our admissions process is simple and easy to get you started on the path to success.</p>
            <p class="contact"><strong>Email:</strong> <a href="mailto:info@fvi.edu">info@fvi.edu</a></p>
            <p class="contact"><strong>Phone:</strong> <a href="tel:786-574-9511">786-574-9511</a></p>
            <img src="../images/people/group-at-pipeline.jpg" alt="Techlaunch students">
        </aside>
    </section>

    <section class="images-slider">
        <div class="carousel">
            <div id="left-btn" class="left-btn">‹</div>
            <div id="right-btn" class="right-btn">›</div>
            <div class="dots"></div>
            <div class="carousel-item image-1">
                <!-- Your content goes here -->
            </div>
            <div class="carousel-item image-2">
                <!-- Your content goes here -->
            </div>
            <div class="carousel-item image-3">
                <!-- Your content goes here -->
            </div>
            <div class="carousel-item image-4">
                <!-- Your content goes here -->
            </div>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
