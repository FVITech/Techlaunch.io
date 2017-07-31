<?php $rootPath = '';
$page = "homepage";
$meta_title="Miami Coding Bootcamp - Programs, Training, Classes Near Me";
$meta_key="";
$meta_desc="TechLaunch Code School Offers Coding Bootcamp Programs, Training And Classes For Students To Crack The Code To Their Future. Learn More On How To Earn Degrees Here.";
include('parts/head.php'); ?>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DZRJ7D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
      include('parts/navbar.php');
      $classes = "";
      include('parts/get-info-form.php');
    ?>
    <section class="above-the-fold">
        <div class="container">
            <a href="<?php echo $rootPath ?>">
                <img src="<?php echo $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <h2 class="page-title">Ready to Launch a Career in Technology?</h2>
            <p class="page-subtitle">With programs in Web Development and IT Security, TechLaunch offers immersive programs designed to take you from zero to hero in no time!</p>
            <div class="buttons-box">
                <a class="btn browse-programs" href="<?php echo $rootPath ?>programs/">Browse Programs</a>
                <a class="btn get-more-info">Get More Info</a>
            </div>
        </div>
    </section>

    <section class="hero">
        <div class="split-3">
            <div class="split-box">
                <h2>Become a Hero in the Tech Industry!</h2>
                <!-- <img class="image" src="<?php echo $rootPath ?>images/people/hero_dad_bod.png" alt="Tech Hero"> -->
                <img class="image" src="<?php echo $rootPath ?>images/super-hero.png" alt="Tech Hero">
            </div>
            <div class="split-box">
                <div class="video-container">
                    <?php
                        $options = "&";
                        $options .= "&rel=0";
                        $options .= "&showinfo=0";
                        $options .= "&iv_load_policy=3";
                        $options .= "&origin=1";
                    ?>
                    <iframe src="https://www.youtube.com/embed/6eS5xHsJCPs?ecver=2<?php echo $options ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="split-box">
                <p>When you’re a student at TechLaunch, you’ll get the training you need to enter the world of tech. With a dynamic classroom environment, our instructors use an extensive hands-on approach and work by your side to teach you <strong>actual job skills</strong>.</p>
            </div>
        </div>
    </section>

    <section class="programs">
        <div class="left">
            <a class="program-title" href="<?php echo $rootPath ?>programs/">
                tech career programs
            </a>
        </div>
        <div class="right">
            <a class="program-title" href="<?php echo $rootPath ?>tech-skills-upgrade-programs/">
                Tech Skills Upgrade
            </a>
        </div>
    </section>

    <section class="tech-industry">
        <h2 class="section-title appear">The Great Tech Boom</h2>
        <div class="container">
            <div class="graph-container">
                <div class="graph">
                    <div class="bar-container">
                        <div class="bar">
                            <div class="rocket-container">
                                <img src="<?php echo $rootPath ?>images/rocket2.svg" alt="rocket" class="rocket">
                                <img src="<?php echo $rootPath ?>images/fire.svg" alt="flame" class="flame">
                            </div>
                            <span>27%</span>
                        </div>
                        <label>Web<br>Developers</label>
                    </div>
                    <div class="bar-container">
                        <div class="bar">
                            <div class="rocket-container">
                                <img src="<?php echo $rootPath ?>images/rocket2.svg" alt="rocket" class="rocket">
                                <img src="<?php echo $rootPath ?>images/fire.svg" alt="flame" class="flame">
                            </div>
                            <span>17%</span>
                        </div>
                        <label>Software<br>Developers</label>
                    </div>
                    <div class="bar-container">
                        <div class="bar">
                            <div class="rocket-container">
                                <img src="<?php echo $rootPath ?>images/rocket2.svg" alt="rocket" class="rocket">
                                <img src="<?php echo $rootPath ?>images/fire.svg" alt="flame" class="flame">
                            </div>
                            <span>18%</span>
                        </div>
                        <label>Cyber<br>Security</label>
                    </div>
                    <div class="bar-container">
                        <div class="bar">
                            <div class="rocket-container">
                                <img src="<?php echo $rootPath ?>images/rocket2.svg" alt="rocket" class="rocket">
                                <img src="<?php echo $rootPath ?>images/fire.svg" alt="flame" class="flame">
                            </div>
                            <span>7%</span>
                        </div>
                        <label>Average of<br>all jobs</label>
                    </div>
                </div>
                <p class="graph-label">job growth 2014-2024</p>
            </div>
            <p class="explanation appear delay-300">The tech industry is continuing to grow at warp speed and demand for qualified employees is growing just as quickly. By working with our hiring partners, we regularly revise our curriculum to meet industry standards so that our grads learn how to use the latest, cutting-edge technology and become vital assets to any company looking for new talent.</p>
            <div class="income-div appear delay-600">
                <h4>median tech income</h4>
                <div class="stats-container">
                    <div class="stat-box">
                        <p class="income one">$102K</p>
                        <p class="position one">software developer</p>
                    </div>
                    <div class="stat-box">
                        <p class="income two">$92K</p>
                        <p class="position two">cyber security technician</p>
                    </div>
                    <div class="stat-box">
                        <p class="income three">$66K</p>
                        <p class="position three">web developer</p>
                    </div>
                </div>
                <span class="citation">† Source: BLS.gov</span>
            </div>
        </div>
    </section>

    <?php
        $testimonials = array('lily-cantillo', 'frank-veloz', 'peter-vegliante');
        include('parts/testimonials/index.php');
    ?>

    <section class="benefits">
        <h2 class="section-title appear">An Education That Works For You</h2>
        <div class="benefits-container">
            <div class="left">
                <p class="appear">There are many benefits of getting your education at TechLaunch. With our dedicated instructors, understanding support staff, and Career Services team on your side, you’ll learn the skills you need for a new career in tech.</p>
            </div>
            <div class="middle">
                <img class="appear" src="<?php echo $rootPath ?>images/pipeline/students-1.jpg" alt="phone and laptop">
            </div>
            <div class="right">
                <ul>
                    <li class="appear">
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/diploma.png" alt="diploma icon">
                        <p>Immersive training to prepare you for a exciting and rewarding career in the booming technology industry</p>
                    </li>
                    <li class="appear">
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/hands-holding-box.png" alt="hands holding box icon">
                        <p>Get real-world experience in a hands-on environment</p>
                    </li>
                    <li class="appear">
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/search-the-globe.png" alt="search the globe icon">
                        <p>Work with our Career Services Team to find great job opportunities</p>
                    </li>
                    <li class="appear">
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/growing-graph.png" alt="growing graph icon">
                        <p>Enter a growing field where your skills are vital</p>
                    </li>
                    <li class="appear">
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/piggy-bank.png" alt="piggy bank icon">
                        <p>Financial aid is available for those who qualify</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="celebrity">
        <div class="code-org-logo">
            <span>C</span>
            <span>O</span>
            <span>D</span>
            <span>E</span>
        </div>
        <p class="quote">
          "The programmers of tomorrow are the wizards of the future. You're going to look like you have magic powers compared to everybody else."
        </p>
        <p class="author">Gabe Newell</p>
        <p class="title">Founder & President, Valve</p>
    </section>

    <section class="stacks">
        <h2 class="section-title">Software Stacks We Teach</h2>
        <div class="stacks-container">
            <div class="stack">
                <div class="box appear">
                    <h3 class="title">mern</h3>
                    <div class="tech">
                        <span>MongoDB</span>
                        <span>ExpressJS</span>
                        <span>ReactJS</span>
                        <span>NodeJS</span>
                    </div>
                    <div class="company-logos">
                        <div class="logo">
                            <img src="<?php echo $rootPath ?>images/logos/khan-academy.png" alt="khan academy logo">
                        </div>
                        <div class="logo">
                            <img src="<?php echo $rootPath ?>images/logos/netflix.png" alt="netflix logo">
                        </div>
                        <div class="logo">
                            <img src="<?php echo $rootPath ?>images/logos/yahoo.png" alt="yahoo logo">
                        </div>
                        <div class="logo uber">
                            <img src="<?php echo $rootPath ?>images/logos/uber.jpg" alt="uber logo">
                        </div>
                        <div class="logo">
                            <img src="<?php echo $rootPath ?>images/logos/paypal.png" alt="paypal logo">
                        </div>
                        <div class="logo facebook">
                            <img src="<?php echo $rootPath ?>images/logos/facebook.png" alt="facebook logo">
                        </div>
                    </div>
                </div>
                <a class="appear read-more" href="<?php echo $rootPath ?>web-developer/">read more</a>
            </div>
            <div class="stack">
                <div class="box appear delay-200">
                    <h3 class="title">lamp</h3>
                    <div class="tech">
                        <span>Linux</span>
                        <span>Apache</span>
                        <span>MySQL</span>
                        <span>PHP</span>
                    </div>
                    <div class="company-logos">
                        <!-- <div class="logo">
                            <img src="images/logos/rackspace.png" alt="rackspace logo">
                        </div> -->
                        <div class="logo">
                            <img src="<?php echo $rootPath ?>images/logos/zynga.png" alt="zynga logo">
                        </div>
                        <div class="logo tesla">
                            <img src="<?php echo $rootPath ?>images/logos/tesla.png" alt="tesla logo">
                        </div>
                        <div class="logo">
                            <img src="<?php echo $rootPath ?>images/logos/wordpress.png" alt="wordpress logo">
                        </div>
                        <div class="logo udemy">
                            <img src="<?php echo $rootPath ?>images/logos/udemy.png" alt="udemy logo">
                        </div>
                        <div class="logo lyft">
                            <img src="<?php echo $rootPath ?>images/logos/lyft.png" alt="lyft logo">
                        </div>
                        <div class="logo">
                            <img src="<?php echo $rootPath ?>images/logos/tumblr.png" alt="tumblr logo">
                        </div>
                    </div>
                </div>
                <a class="appear read-more" href="<?php echo $rootPath ?>web-developer/">read more</a>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="logos-container">
            <img src="<?php echo $rootPath ?>images/logos/cssf.png" alt="Career Source South Florida logo">
            <img src="<?php echo $rootPath ?>images/logos/coe.jpg" alt="Council on Occupational Education logo">
            <img src="<?php echo $rootPath ?>images/logos/fl-doe.jpg" alt="Florida Department of Education logo">
            <img src="<?php echo $rootPath ?>images/logos/fapsc.jpeg" alt="FAPSC logo">
        </div>
    </section>

    <?php $rootPath = ''; include('parts/footer.php') ?>
    <?php $rootPath = ''; include('parts/bottom.php') ?>

</body>
</html>
