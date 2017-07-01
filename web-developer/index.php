<?php $rootPath = '../'; $page = "web-developer"; include('../parts/head.php'); ?>
<body>
    <?php include('../parts/navbar.php'); ?>
    <?php include('../parts/pop-up-form.php'); ?>

    <section class="above-the-fold">
        <div class="container">
            <a href="<?php echo $rootPath ?>">
                <img src="../images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <div class="content">
                <div class="text-box">
                    <h2>Become a Software Developer</h2>
                    <h4>Join the most in-demand profession on the planet<small>†</small></h4>
                    <div class="figures-container">
                        <div class="figure appear">
                            <p class="number">$102,280</p>
                            <p class="label">Median Salary</p>
                        </div>
                        <div class="figure appear delay-200">
                            <p class="number">1,114,000</p>
                            <p class="label">Job Openings</p>
                        </div>
                        <div class="figure appear delay-400">
                            <p class="number">17%</p>
                            <p class="label">Annual Growth</p>
                        </div>
                    </div>
                    <p class="disclosure">† <a target="_blank" rel="noopener" href="https://www.bls.gov/ooh/computer-and-information-technology/software-developers.htm">BLS.gov</a></p>
                </div>
                <div class="form-container">
                    <h2 class="title">Learn how to get started</h2>
                    <form class="get-info-form">
                        <div class="form-input">
                            <label>first name</label>
                            <input type="text" name="first_name">
                        </div>
                        <div class="form-input">
                            <label>last name</label>
                            <input type="text" name="last_name">
                        </div>
                        <div class="form-input">
                            <label>phone</label>
                            <input type="tel" name="phone">
                        </div>
                        <div class="form-input">
                            <label>email</label>
                            <input type="email" name="email">
                        </div>
                        <div class="form-input">
                            <label>zip code</label>
                            <input type="number" name="zip">
                        </div>
                        <input type="text" name="program" value="web-developer" hidden>
                        <button class="submit-btn" type="submit">get info</button>
                        <div class="user-feedback"></div>
                    </form>
                    <p class="disclosure">By clicking "Get Info", you agree for TechLaunch @ FVI to contact you using our autodialer, text, pre-recorded message, via telephone or mobile device (including SMS and MMS) and email, even if your number is currently listed on any state, federal or corporate "Do Not Call list.</p>
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
                        <img src="../images/icons/atom.svg" alt="">
                        <p>Full-Stack Web Development</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/calculator.svg" alt="">
                        <p>36-Week (9-Month) immersive program</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/clipboard.svg" alt="">
                        <p>Career Placement Assistance</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/statistics.svg" alt="">
                        <p>Small Class sizes for one-on-one learning</p>
                    </div>
                </div>
                <div class="right">
                    <div class="card appear">
                        <img src="../images/icons/clipboard.svg" alt="">
                        <p>Federal Financial aid available to those who qualify</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/statistics.svg" alt="">
                        <p>Campus located in Doral, a rapidly growing tech community</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/atom.svg" alt="">
                        <p>Curriculum designed with local Miami job market in mind</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/calculator.svg" alt="">
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
                    <p class="quote">"I’m grateful to FVI and all the professors, like Victor Moreno and Randy Ferrer, for providing me with skills and abilities that helped open the doors to a world full of new opportunities."</p>
                    <img src="../images/people/frank.jpg" alt="Frank">
                    <span class="name">Frank Veloz</span>
                </div>
                <div class="testimonial appear delay-200">
                    <p class="quote">"When I started school I didn’t have the slightest idea of how much I would learn. I started the course without knowing anything about healthcare and the care that it requires."</p>
                    <img src="../images/people/tatiana.png" alt="Tatiana">
                    <span class="name">Tatiana Torres</span>
                </div>
                <div class="testimonial appear delay-400">
                    <p class="quote">"FVI helped me to accommodate my externship hours around my busy schedule. Today, I am working as a Medical Assistant in a doctor's office."</p>
                    <img src="../images/people/yanet.png" alt="Yanet">
                    <span class="name">Yanet Gonzalez</span>
                </div>
            </div>
        </div>
    </section>

    <section class="job-info">
        <div class="container">
            <h2 class="section-title appear">What kind of job can I get as a graduate?</h2>
            <div class="split">
                <div class="left">
                    <p class="appear">The <strong>Web Developer Program</strong> from Techlaunch at FVI will prepare graduates to develop practical skills and knowledge needed or entry-level career opportunities in areas involving sotware design and development, systems analysis, programming, process design and management, and other areas related to computer software production and deployment. The fast growth in web and mobile development, combined with the increasing use of software, continues to create <strong>strong demand for software developers</strong>.</p>
                </div>
                <div class="right">
                    <p class="appear">The career services team at FVI will work with you to provide internships during training and upon graduation assist you in finding a great career as a web developer.</p>
                    <p class="appear">FVI maintains strong working relationships with top companies in the area so we can match your passion and ability to career opportunities.</p>
                </div>
            </div>
            <div class="image-section">
                <div class="left appear"></div>
                <div class="right">
                    <h3 class="appear">Will I obtain any certifications?</h3>
                    <p class="appear">Upon graduation from the <strong>Web Developer Program</strong>, students will receive a diploma. Additionally, students will have a portfolio of work showcasing their abilities in order to aid them in finding full-time jobs or freelance web development contracts.</p>
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
                        <img src="../images/icons/clipboard.svg" alt="">
                        <p>Frontend web development with HTML5, CSS3, JavaScript, and modern JavaScript frameworks</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/atom.svg" alt="">
                        <p>AJAX programming and best practices to manage the request-response model within the context of the web browser</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/calculator.svg" alt="">
                        <p>How to effectively use CSS media queries to create fully response, mobile-friendly websites and web apps</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/statistics.svg" alt="">
                        <p>Frontend programming in plain JavaScript and jQuery, as well as advanced JavaScript design patterns under MV* frameworks</p>
                    </div>
                    <div class="card appear">
                        <img src="../images/icons/clipboard.svg" alt="">
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
