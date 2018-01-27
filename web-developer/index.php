<?php $rootPath = '../'; 
$page = "web-developer"; 
$meta_title="Miami Web Development Training Course - Web Developer Classes Near Me";
$meta_key="";
$meta_desc="When you are taking Miami Web Development Training Courses you are learning to Become a Web Developer.   Learn why more students are earning Web Developing Diplomas Here.";    
include('../parts/head.php'); ?>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DZRJ7D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include('../parts/navbar.php'); ?>
    <?php $program = "web-developer"; $classes = ""; include('../parts/get-info-form.php'); ?>

    <section class="above-the-fold">
        <div class="container">
            <a href="<?= $rootPath ?>">
                <img src="<?= $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <div class="content">
                <div class="text-box">
                    <h2>Become a<br>Web Developer</h2>
                    <h4>Join one of the fastest-growing professions on the planet<small>†</small></h4>
                    <div class="figures-container">
                        <div class="figure appear">
                            <p class="number">$37,290</p>
                            <span>$17.93/hr</span>
                            <p class="label">10% Salary</p>
                        </div>
                        <div class="figure appear delay-200">
                            <p class="number">$56,900</p>
                            <span>$27.36//hr</span>
                            <p class="label">50% Salary</p>
                        </div>
                        <div class="figure appear delay-400">
                            <p class="number">37%</p>
                            <p class="label">Expected<br>Growth</p>
                        </div>
                    </div>
                    <p class="disclosure">† Source: BLS.gov</p>
                </div>
                <?php
                    $classes = "on-page";
                    $program = "web-developer";
                    include('../parts/get-info-form.php');
                ?>
            </div>
        </div>
    </section>

    <section class="program-overview">
        <div class="container">
            <h2 class="section-title appear">Program Overview</h2>
            <div class="split-3">
                <p class="split-box subtitle appear">Our in-person Web Development courses are designed for busy adults who can't quit their day jobs but are driven to boost their professional skills or change their career.</p>
                <p class="split-box subtitle appear">Few Coding Schools offer the length and breadth of material that we do. We are a Computer Programming School devoted to creating Web Application Developers with sound Computer Science skills. Our curriculum is designed to be completed in a dense, but realistic time frame of nine months.</p>
                <p class="split-box subtitle appear">By the end of the 9-month program, each student will have their own portfolio full of web applications, something which university graduates lack and employers desperately seek.</p>
            </div>
            <div class="cards-container">
                <div class="left">
                    <div class="card appear">
                        <img class="lazyload" data-src="<?= $rootPath ?>images/icons/computer-monitor.png" alt="computer-monitor">
                        <p>Full-Stack Web Development</p>
                    </div>
                    <div class="card appear">
                        <img class="lazyload" data-src="<?= $rootPath ?>images/icons/diploma.png" alt="diploma">
                        <p>36-Week (9-Month) immersive program</p>
                    </div>
                    <div class="card appear">
                        <img class="lazyload" data-src="<?= $rootPath ?>images/icons/suit.png" alt="suit">
                        <p>Career Placement Assistance</p>
                    </div>
                    <div class="card appear">
                        <img class="lazyload" data-src="<?= $rootPath ?>images/icons/two-people.png" alt="two-people">
                        <p>Small Class sizes for one-on-one learning</p>
                    </div>
                </div>
                <div class="right">
                    <div class="card appear">
                        <img class="lazyload" data-src="<?= $rootPath ?>images/icons/piggy-bank.png" alt="piggy-bank">
                        <p>Federal Financial aid available to those who qualify</p>
                    </div>
                    <div class="card appear">
                        <img class="lazyload" data-src="<?= $rootPath ?>images/icons/growing-graph.png" alt="growing-graph">
                        <p>Campus located in Doral, a rapidly growing tech community</p>
                    </div>
                    <div class="card appear">
                        <img class="lazyload" data-src="<?= $rootPath ?>images/icons/search-the-globe.png" alt="search-the-globe">
                        <p>Curriculum designed with local Miami job market in mind</p>
                    </div>
                    <div class="card appear">
                        <img class="lazyload" data-src="<?= $rootPath ?>images/icons/graduate.png" alt="graduate">
                        <p>Complete the program with a Diploma and a Portfolio of work to show prospective employers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-we-compare">
        <h2 class="section-title appear">How We Compare</h2>
        <div class="content">
            <p class="section-subtitle appear delay-200">You don't have to give up your day job to take our classes</p>
            <div class="split-3">
                <div class="split-box appear">
                    <h4>Coding Bootcamps</h4>
                    <p>The South Florida region offers a handful of coding bootcamps. These programs are often effective, but they take place during the work day and do not offer financial aid. The technology programs at Techlaunch take place during the evenings and therefore don't interfere with the 9-5 career schedule and financial aid can cover the majority of tuition costs.</p>
                    <p>Most importantly, the coding bootcamps are 320 total hours while Techlaunch's program is 720 total hours. We think 320 hours is barely enough time to become a web developer, let alone a strong one. There are no shortcuts--you will become a strong web developer by the end of our program.</p>
                </div>
                <div class="split-box appear delay-300">
                    <h4>Computer Science Degrees</h4>
                    <p>A computer science degree will give you an excellent understanding of computers and the internet, but it won't give you any coding skills to apply your knowledge. You won't have a portoflio of projects proving you can make stuff.</p>
                    <p>A developer's portfolio is the most important part of their resume.</p>
                    <p>By the end of Techlaunch's Web Developer program, you will have a rich portfolio full of varied, in-depth, relevant projects.</p>
                </div>
                <div class="split-box appear delay-600">
                    <h4>Online Programs</h4>
                    <p>There are a few different online coding schools and websites that can take a beginner from amateur to intermediate however, online programs are notorious for low completion rates.</p>
                    <p>As a student in Techlaunch's Web Developer program, you will be learning and coding with a professional web developer in the same room who can immediately answer any questions, look at your code, and offer you feedback and encouragement. Such a close student-mentor relationship cannot be found in online programs.</p>
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
                    <img class="lazyload" data-src="<?= $rootPath ?>images/people/yasiel-sanchez-caleo.jpg" alt="Yasiel Sanchez Caleo">
                    <span class="name">Yasiel Sanchez Caleo</span>
                </div>
                <div class="testimonial appear delay-200">
                    <p class="quote">"TechLaunch demonstrated to me that no matter when you decide, great things can happen if you try. I've acquired knowledge every day, and every single minute I've spent inside of their classroom has made me better."</p>
                    <img class="lazyload" data-src="<?= $rootPath ?>images/people/alan-espinet.jpg" alt="Alan Espinet Lluvet">
                    <span class="name">Alan Espinet Lluvet</span>
                </div>
                <div class="testimonial appear delay-400">
                    <p class="quote">"Before I started at TechLaunch I was concerned. I thought that coding was difficult and I didn’t know what to expect. Now I feel that it is easier than everybody thinks."</p>
                    <img class="lazyload" data-src="<?= $rootPath ?>images/people/lily-cantillo.jpg" alt="Lilianne Cantillo">
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
                    <p class="appear">The <strong>Web Developer Program</strong> from Techlaunch will prepare graduates to develop practical skills and knowledge needed for career opportunities in areas involving software design and development, systems analysis, programming, process design and management, and other areas related to computer software production and deployment. The fast growth in web and mobile development, combined with the increasing use of software, continues to create <strong>strong demand for software developers</strong>.</p>
                </div>
                <div class="right">
                    <p class="appear">The career services team at TechLaunch work to guide you in finding internship opportunities during training and upon graduation assist you in finding a great career as a web developer.</p>
                    <p class="appear">Techlaunch maintains strong working relationships with top companies in the area so we can match your passion and ability to career opportunities.</p>
                </div>
            </div>
            <div class="image-section">
                <div class="left appear lazyload" data-bg="<?= $rootPath ?>images/people/guy-on-laptop.jpeg"></div>
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
                        <img class="logo lazyload" data-src="<?= $rootPath ?>images/logos/html5-logo.png" alt="HTML5 logo">
                        <p>Frontend web development with HTML5, CSS3, JavaScript, and modern JavaScript frameworks</p>
                    </div>
                    <div class="card appear">
                        <img class="logo lazyload" data-src="<?= $rootPath ?>images/logos/ajax-logo.png" alt="AJAX programming logo">
                        <p>AJAX programming and best practices to manage the request-response model within the context of the web browser</p>
                    </div>
                    <div class="card appear">
                        <img class="logo lazyload" data-src="<?= $rootPath ?>images/logos/css3-logo.png" alt="CSS3 logo">
                        <p>How to effectively use CSS media queries to create fully response, mobile-friendly websites and web apps</p>
                    </div>
                    <div class="card appear">
                        <img class="logo lazyload" data-src="<?= $rootPath ?>images/logos/react-logo.png" alt="React logo">
                        <p>Frontend programming in plain JavaScript and jQuery, as well as advanced JavaScript design patterns under MV* frameworks</p>
                    </div>
                    <div class="card appear">
                        <img class="logo lazyload" data-src="<?= $rootPath ?>images/logos/webpack-logo.png" alt="Webpack 2 logo">
                        <p>How to optimize web pages and use bleeding edge development workflows such as minifying and concatenating assets using Webpack 2</p>
                    </div>
                </div>
                <div class="image-container">
                    <img class="lazyload" data-srcset="<?= $rootPath ?>images/people/group-at-pipeline-mobile.jpg 440w, <?= $rootPath ?>images/people/group-at-pipeline.jpg 1000w" data-sizes="auto" alt="Techlaunch students">
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
                <div class="right lazyload" data-bg="<?= $rootPath ?>images/backgrounds/teaching-mobile.jpg"></div>
            </div>
        </div>
    </section>

    <section class="our-campus">
        <div class="container">
            <div class="split-2">
                <div class="split-box image-container">
                    <div class="image appear first lazyload" data-bgset="<?= $rootPath ?>images/pipeline/workspace-mobile.jpg [--small] | <?= $rootPath ?>images/pipeline/workspace.jpg [--large]"></div>
                </div>
                <div class="split-box text">
                    <h2 class="section-title appear">Our Campus</h2>
                    <p>We are located at the Pipeline Doral co-working space. The Doral area is home to numerous tech companies.</p>
                </div>
                <div class="split-box image-container">
                    <div class="image appear second lazyload" data-bgset="<?= $rootPath ?>images/pipeline/students-3-mobile.jpg [--small] | <?= $rootPath ?>images/pipeline/students-3.jpg [--large]"></div>
                </div>
                <div class="split-box image-container">
                    <div class="image appear delay-300 third lazyload" data-bgset="<?= $rootPath ?>images/pipeline/learning-1-mobile.jpg [--small] | <?= $rootPath ?>images/pipeline/learning-1.jpg [--large]"></div>
                </div>
            </div>
        </div>
    </section>

    <?php include('../parts/student-projects/index.php') ?>

    <style>
        section.hiring-partners .logos-container img {
            height: 100% !important;
            margin: 0px !important;
        }
    </style>
    <section class="hiring-partners">
        <h2 class="section-title appear">Hiring Partners</h2>
        <div class="logos-container">
            <img class="lazyload" data-src="https://techlaunch.io/blog/wp-content/uploads/2017/07/coach-hq-1-1.png" alt="Coach HQ">
            <img class="lazyload" data-src="https://techlaunch.io/blog/wp-content/uploads/2017/07/logo-spiderboost-2.png" alt="Spider Boost">
            <img class="lazyload" data-src="https://techlaunch.io/blog/wp-content/uploads/2017/07/Starthub_MainLogoFile-2.png" alt="Start Hub">
            <img class="lazyload" data-src="https://techlaunch.io/blog/wp-content/uploads/2017/07/tango_mango_logo.jpg-1.png" alt="Tango Mango">
            <img class="lazyload" data-src="https://techlaunch.io/blog/wp-content/uploads/2017/07/the-fitz-solution-2.png" alt="Fitz Solution">
            <img class="lazyload" data-src="https://techlaunch.io/blog/wp-content/uploads/2017/07/WhereByUs-2.pngfinal-2.png" alt="Where by us">
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
