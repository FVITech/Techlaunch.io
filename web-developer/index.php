<?php $rootPath = '../'; $page = "web-developer"; include('../parts/head.php'); ?>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DZRJ7D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include('../parts/navbar.php'); ?>
    <?php include('../parts/pop-up-form.php'); ?>

    <section class="above-the-fold">
        <div class="container">
            <a href="<?php echo $rootPath ?>">
                <img src="../images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <div class="content">
                <div class="text-box">
                    <h2>Become a<br>Web Developer</h2>
                    <h4>Join one of the fastest-growing professions on the planet<small>†</small></h4>
                    <div class="figures-container">
                        <div class="figure appear">
                            <p class="number">$66,130</p>
                            <p class="label">Median Salary</p>
                        </div>
                        <div class="figure appear delay-200">
                            <p class="number">148,500</p>
                            <p class="label">Job Openings</p>
                        </div>
                        <div class="figure appear delay-400">
                            <p class="number">27%</p>
                            <p class="label">Annual Growth</p>
                        </div>
                    </div>
                    <p class="disclosure">† Source: BLS.gov</p>
                </div>
                <div class="form-container">
                    <h2 class="title">Learn how to get started</h2>
                    <form class="get-info-form">
                        <div class="form-input">
                            <label>Program of Interest</label>
                            <select name="program">
                                <option value="--" disabled>-- Select --</option>
                                <option value="web-developer" selected>Web Developer</option>
                                <option value="cyber-security">Cyber Security Network Technician</option>
                            </select>
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
                                <input type="tel" name="phone">
                            </div>
                            <div class="split-box">
                                <label>zip code</label>
                                <input type="number" name="zip_code">
                            </div>
                        </div>
                        <div class="form-input">
                            <label>email</label>
                            <input type="email" name="email" required>
                        </div>
                        <button class="submit-btn" type="submit">get info</button>
                        <div class="user-feedback"></div>
                    </form>
                    <p class="disclosure">By clicking "Get Info", you agree for TechLaunch to contact you using our autodialer, text, pre-recorded message, via telephone or mobile device (including SMS and MMS) and email, even if your number is currently listed on any state, federal or corporate "Do Not Call list".</p>
                </div>
            </div>
        </div>
    </section>

    <section class="program-overview">
        <div class="container">
            <h2 class="section-title appear">Program Overview</h2>
            <p class="subtitle appear">Techlaunch offers a more robust program than traditional short-term coding boot camps. Come with passion and leave with a valuable skill set you can put to work.</p>
            <div class="cards-container">
                <div class="left">
                    <div class="card appear">
                        <img src="../images/icons/computer-monitor.png" alt="">
                        <p>Full-Stack Web Development</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/diploma.png" alt="">
                        <p>36-Week (9-Month) immersive program</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/suit.png" alt="">
                        <p>Career Placement Assistance</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/two-people.png" alt="">
                        <p>Small Class sizes for one-on-one learning</p>
                    </div>
                </div>
                <div class="right">
                    <div class="card appear">
                        <img src="../images/icons/piggy-bank.png" alt="">
                        <p>Federal Financial aid available to those who qualify</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/growing-graph.png" alt="">
                        <p>Campus located in Doral, a rapidly growing tech community</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/search-the-globe.png" alt="">
                        <p>Curriculum designed with local Miami job market in mind</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/graduate.png" alt="">
                        <p>Complete the program with a Diploma and a Portfolio of work to show prospective employers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="students-success">
        <h2 class="section-title appear">Student Success</h2>
        <div class="container">
            <div class="testimonials-container">
                <div class="testimonial appear">
                    <p class="quote">"I have so much to thank the school and their teachers for. I thought that becoming a programmer was something that was unachievable for me, but thanks to the instructors, I was able to do so easily."</p>
                    <img src="../images/people/yasiel-sanchez-caleo.jpg" alt="Yasiel Sanchez Caleo">
                    <span class="name">Yasiel Sanchez Caleo</span>
                </div>
                <div class="testimonial appear delay-200">
                    <p class="quote">"TechLaunch demonstrated to me that no matter when you decide, great things can happen if you try. I've acquired knowledge every day, and every single minute I've spent inside of their classroom has made me better."</p>
                    <img src="../images/people/alan-espinet.jpg" alt="Alan Espinet Lluvet">
                    <span class="name">Alan Espinet Lluvet</span>
                </div>
                <div class="testimonial appear delay-400">
                    <p class="quote">"Before I started at TechLaunch I was concerned. I thought that coding was difficult and I didn’t know what to expect. Now I feel that it is easier than everybody thinks."</p>
                    <img src="../images/people/lily-cantillo.jpg" alt="Lilianne Cantillo">
                    <span class="name">Lilianne Cantillo</span>
                </div>
            </div>
        </div>
    </section>

    <section class="job-info">
        <div class="container">
            <h2 class="section-title appear">What kind of job can I get as a graduate?</h2>
            <div class="split">
                <div class="left">
                    <p class="appear">The <strong>Web Developer Program</strong> from Techlaunch will prepare graduates to develop practical skills and knowledge needed for career opportunities in areas involving sotware design and development, systems analysis, programming, process design and management, and other areas related to computer software production and deployment. The fast growth in web and mobile development, combined with the increasing use of software, continues to create <strong>strong demand for software developers</strong>.</p>
                </div>
                <div class="right">
                    <p class="appear">The career services team at TechLaunch work to guide you in finding internship opportunities during training and upon graduation assist you in finding a great career as a web developer.</p>
                    <p class="appear">Techlaunch maintains strong working relationships with top companies in the area so we can match your passion and ability to career opportunities.</p>
                </div>
            </div>
            <div class="image-section">
                <div class="left appear"></div>
                <div class="right">
                    <h3 class="appear">Build a Portfolio</h3>
                    <p class="appear">Upon graduation from the Web Developer Program, students will receive a diploma. Additionally, students will have a portfolio of work showcasing their abilities to aid them in finding full-time jobs or freelance web development contracts.</p>
                    <button data-form-program="web-developer" class="get-more-info appear">get info</button>
                </div>
            </div>
        </div>
    </section>

    <section class="what-you-will-learn">
        <div class="container">
            <h2 class="section-title appear">What You Will Learn</h2>
            <div class="content">
                <div class="cards-container">
                    <div class="card appear">
                        <img class="logo" src="../images/logos/html5-logo.png" alt="HTML5 logo">
                        <p>Frontend web development with HTML5, CSS3, JavaScript, and modern JavaScript frameworks</p>
                    </div>
                    <div class="card appear">
                        <img class="logo" src="../images/logos/ajax-logo.png" alt="AJAX programming logo">
                        <p>AJAX programming and best practices to manage the request-response model within the context of the web browser</p>
                    </div>
                    <div class="card appear">
                        <img class="logo" src="../images/logos/css3-logo.png" alt="CSS3 logo">
                        <p>How to effectively use CSS media queries to create fully response, mobile-friendly websites and web apps</p>
                    </div>
                    <div class="card appear">
                        <img class="logo" src="../images/logos/react-logo.png" alt="React logo">
                        <p>Frontend programming in plain JavaScript and jQuery, as well as advanced JavaScript design patterns under MV* frameworks</p>
                    </div>
                    <div class="card appear">
                        <img class="logo" src="../images/logos/gulp-logo.png" alt="Gulp logo">
                        <p>How to optimize web pages and employ popular optimization worklows such as Gulp and Apache's mod_pagespeed for blazing fast page load times</p>
                    </div>
                </div>
                <div class="image-container">
                    <img src="../images/people/group-at-pipeline.jpg" alt="Techlaunch students">
                </div>
            </div>
        </div>
    </section>

    <section class="our-instructors">
        <div class="container">
            <div class="content">
                <div class="left">
                    <h2 class="section-title appear">Our Instructors</h2>
                    <p class="appear">Our instructors take a <strong>hands-on</strong> approach and work closely with you to ensure that you gain the necessary skills to succeed. Our students will learn how to <strong>work in teams</strong> using git-based workflows that are commonly employed in software companies.</p>
                    <button data-form-program="web-developer" class="get-more-info appear">get info</button>
                </div>
                <div class="right"></div>
            </div>
        </div>
    </section>

    <?php include('../parts/student-projects/index.php') ?>

    <section class="hiring-partners">
        <h2 class="section-title appear">Hiring Partners</h2>
        <div class="logos-container">
            <img class="appear" src="../images/logos/microsoft.png" alt="Microsoft logo">
            <img class="appear" src="../images/logos/google.png" alt="Google logo">
            <img class="appear" src="../images/logos/amazon.png" alt="Amazon logo">
            <img class="appear" src="../images/logos/facebook.png" alt="Facebook logo">
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
