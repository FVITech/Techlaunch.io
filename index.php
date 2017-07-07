<?php $rootPath = ''; $page = "homepage"; include('parts/head.php'); ?>
<body>
    <?php include('parts/navbar.php'); ?>
    <?php include('parts/pop-up-form.php'); ?>
    <section class="above-the-fold">
        <div class="container">
            <a href="<?php echo $rootPath ?>">
                <img src="<?php echo $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <h2 class="page-title">Start Your Career in Technology</h2>
            <p class="page-subtitle">With programs in Web Development, IT Security, and Amazon Web Services, TechLaunch offers a lot more than short-term coding bootcamps. We go above and beyond to make sure you’re prepared for a new career where you can grow and thrive.</p>
            <div class="buttons-box">
                <a class="btn browse-programs" href="<?php echo $rootPath ?>programs/">Browse Programs</a>
                <a class="btn get-more-info">Get More Info</a>
            </div>
        </div>
    </section>

    <section class="launch">
        <div class="split-3">
            <div class="split-box">
                <img class="appear delay-200" src="<?php echo $rootPath ?>images/rocket.svg" alt="Techlaunch logo">
                <h2 class="appear delay-400">launch a great tech career in under a year</h2>
            </div>
            <div class="split-box">
                <div class="video-container appear delay-900">
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
                <p class="appear delay-600">When you’re a student at TechLaunch, you’ll get the training you need to enter the world of tech within six to nine months. With a dynamic classroom environment, our instructors use an extensive hands-on approach and work by your side to teach you the ins and outs of the technology industry.</p>
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
            <a class="program-title" href="<?php echo $rootPath ?>short-programs/">
                short programs
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
                <p class="income one">$102K</p>
                <p class="citation"><a target="_blank" rel="noopener" href="https://www.bls.gov/ooh/computer-and-information-technology/software-developers.htm">BLS.gov</a></p>
                <p class="position one">software developer</p>
                <p class="income two">$92K</p>
                <p class="citation"><a target="_blank" rel="noopener" href="https://www.bls.gov/ooh/computer-and-information-technology/information-security-analysts.htm">BLS.gov</a></p>
                <p class="position two">cyber security technician</p>
                <p class="income three">$66K</p>
                <p class="citation"><a target="_blank" rel="noopener" href="https://www.bls.gov/ooh/computer-and-information-technology/web-developers.htm">BLS.gov</a></p>
                <p class="position three">web developer</p>
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
                <img class="appear" src="<?php echo $rootPath ?>images/phone-and-laptop.jpg" alt="phone and laptop">
            </div>
            <div class="right">
                <ul>
                    <li class="appear">
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/atom.svg" alt="atom icon">
                        <p>Train for a career in technology in less than a year</p>
                    </li>
                    <li class="appear">
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/clipboard.svg" alt="clipboard icon">
                        <p>Get real-world experience in a hands-on environment</p>
                    </li>
                    <li class="appear">
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/statistics.svg" alt="statistics icon">
                        <p>Work with our Career Services Team to find great job opportunities</p>
                    </li>
                    <li class="appear">
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/calculator.svg" alt="calculator icon">
                        <p>Enter a growing field where your skills are vital</p>
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
        <p class="quote">"Here we are, 2013, we <strong>all</strong> depend on technology to communicate, to bank, and none of us know how to read and write code. It's important for these kids, right now, starting at 8 years old, to read and write code."</p>
        <p class="author">will.i.am</p>
        <p class="title">Musician and Entrepreneur</p>
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
