<?php $rootPath = ''; $page = "homepage"; include('parts/head.php'); ?>
<body>
    <?php include('parts/navbar.php'); ?>
    <section class="above-the-fold">
        <div class="container">
            <a href="<?php echo $rootPath ?>">
                <img src="images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <div class="cta-box">
                <h2>START YOUR CAREER IN TECHNOLOGY</h2>
                <p>With programs in Web Development, Web Design, and IT Security, TechLaunch @ FVI offers a lot more than short-term coding bootcamps. We go above and beyond to make sure you’re prepared for a new career where you can grow and thrive.</p>
                <button class="browse-programs">Browse Programs</button>
                <button class="get-more-info">Get More Info</button>
            </div>
        </div>
    </section>

    <section class="launch">
        <div class="left">
            <img src="images/rocket.svg" alt="Techlaunch logo">
            <h2 class="appear">launch a great tech career in under a year</h2>
        </div>
        <div class="right">
            <p class="appear">When you’re a student at TechLaunch @ FVI, you’ll get the training you need to enter the world of tech within six to nine months. With a dynamic classroom environment, our instructors use an extensive hands-on approach and work by your side to teach you the ins and outs of the technological industry.</p>
        </div>
    </section>

    <section class="programs">
        <div class="left">
            <div class="program-title">
              <a href="programs/">
                tech career programs
              </a>
            </div>
        </div>
        <div class="right">
            <div class="program-title">
              <a href="short-programs/">
                short skills programs
              </a>
            </div>
        </div>
    </section>

    <section class="tech-industry">
        <h2 class="section-title">THE GREAT TECH BOOM</h2>
        <div class="container">
            <div class="graph-container">
                <div class="graph">
                    <div class="bar-container left">
                        <div class="bar">
                            <div class="rocket-container">
                                <img src="images/rocket2.svg" alt="rocket" class="rocket">
                                <img src="images/fire.svg" alt="flame" class="flame">
                            </div>
                            <span>27%</span>
                        </div>
                        <label>Web<br>Developers</label>
                    </div>
                    <div class="bar-container middle">
                        <div class="bar">
                            <div class="rocket-container">
                                <img src="images/rocket2.svg" alt="rocket" class="rocket">
                                <img src="images/fire.svg" alt="flame" class="flame">
                            </div>
                            <span>17%</span>
                        </div>
                        <label>Software<br>Developers</label>
                    </div>
                    <div class="bar-container right">
                        <div class="bar">
                            <div class="rocket-container">
                                <img src="images/rocket2.svg" alt="rocket" class="rocket">
                                <img src="images/fire.svg" alt="flame" class="flame">
                            </div>
                            <span>7%</span>
                        </div>
                        <label>Average of<br>all jobs</label>
                    </div>
                </div>
                <p class="graph-label">job growth 2014-2024</p>
            </div>
            <p class="explanation">The tech industry is continuing to grow at warp speed and demand for qualified employees is growing just as quickly. By working with our hiring partners, we regularly revise our curriculum to meet industry standards so that our grads learn how to use the latest, cutting-edge technology and become vital assets to any company looking for new talent.</p>
            <div class="income-div">
                <h4>median tech income</h4>
                <p class="income one">$102K</p>
                <p class="position one">software developer</p>
                <p class="income two">$92K</p>
                <p class="position two">cyber security technician</p>
                <p class="income three">$66K</p>
                <p class="position three">web developer</p>
            </div>
        </div>
    </section>

    <section class="testimonials homepage">
        <div class="carousel">
            <div id="left-btn" class="left-btn">‹</div>
            <div id="right-btn" class="right-btn">›</div>
            <div class="dots"></div>
            <div class="carousel-item">
                <div class="left">
                    <img src="images/people/person-holding-computer.png" alt="person holding computer">
                </div>
                <div class="right">
                    <h3 class="heading">some heading text</h3>
                    <p class="quote">"I’m grateful to FVI and all the professors, like Victor Moreno and Randy Ferrer, for providing me with skills and abilities that helped open the doors to a world full of new opportunities. Coding literally changed my life and has become a powerful tool to grow and improve my life in several aspects. Excellence, knowledge, respect, dedication are the things you’ll find every step of the learning process."</p>
                    <p class="author">- John Doe Smith Rodriguez</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="left">
                    <img src="images/people/suit-guy.png" alt="suit guy">
                </div>
                <div class="right">
                    <h3 class="heading">some heading text</h3>
                    <p class="quote">"I’m grateful to FVI and all the professors, like Victor Moreno and Randy Ferrer, for providing me with skills and abilities that helped open the doors to a world full of new opportunities. Coding literally changed my life and has become a powerful tool to grow and improve my life in several aspects. Excellence, knowledge, respect, dedication are the things you’ll find every step of the learning process."</p>
                    <p class="author">- Johnny Bravo Dominguez</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="left">
                    <img src="images/people/guy-on-laptop.jpeg" alt="">
                </div>
                <div class="right">
                    <h3 class="heading">some heading text</h3>
                    <p class="quote">"I’m grateful to FVI and all the professors, like Victor Moreno and Randy Ferrer, for providing me with skills and abilities that helped open the doors to a world full of new opportunities. Coding literally changed my life and has become a powerful tool to grow and improve my life in several aspects. Excellence, knowledge, respect, dedication are the things you’ll find every step of the learning process."</p>
                    <p class="author">- Johnny Bravo Dominguez</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="left">
                    <img src="images/people/girl-on-laptop.jpg" alt="">
                </div>
                <div class="right">
                    <h3 class="heading">some heading text</h3>
                    <p class="quote">"I’m grateful to FVI and all the professors, like Victor Moreno and Randy Ferrer, for providing me with skills and abilities that helped open the doors to a world full of new opportunities. Coding literally changed my life and has become a powerful tool to grow and improve my life in several aspects. Excellence, knowledge, respect, dedication are the things you’ll find every step of the learning process."</p>
                    <p class="author">- Johnny Bravo Dominguez</p>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits">
        <h2 class="section-title appear">AN EDUCATION THAT WORKS FOR YOU</h2>
        <div class="benefits-container">
            <div class="left">
                <p class="appear">There are many benefits of getting your education at TechLaunch @ FVI. With our dedicated instructors, understanding support staff, and Career Services team on your side, you’ll learn the skills you need for a new career in tech.</p>
            </div>
            <div class="middle">
                <img class="appear" src="images/phone-and-laptop.jpg" alt="phone and laptop">
            </div>
            <div class="right">
                <ul>
                    <li class="appear">
                        <img class="icon" src="images/icons/atom.svg" alt="atom icon">
                        <p>Train for a career in technology in less than a year</p>
                    </li>
                    <li class="appear">
                        <img class="icon" src="images/icons/clipboard.svg" alt="clipboard icon">
                        <p>Get real-world experience in a hands-on environment</p>
                    </li>
                    <li class="appear">
                        <img class="icon" src="images/icons/statistics.svg" alt="statistics icon">
                        <p>Work with our Career Services Team to find great job opportunities</p>
                    </li>
                    <li class="appear">
                        <img class="icon" src="images/icons/calculator.svg" alt="calculator icon">
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
        <p class="quote">"Here we are, 2013, we <em>all</em> depend on technology to communicate, to bank, and none of us know how to read and write code. It's important for these kids, right now, starting at 8 years old, to read and write code."</p>
        <p class="author">will.i.am</p>
        <p class="title">Musician and Entrepreneur</p>
    </section>

    <section class="stacks">
        <h2 class="section-title appear">stacks we teach</h2>
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
                            <img src="images/logos/khan-academy.png" alt="khan academy logo">
                        </div>
                        <div class="logo">
                            <img src="images/logos/netflix.png" alt="netflix logo">
                        </div>
                        <div class="logo">
                            <img src="images/logos/yahoo.png" alt="yahoo logo">
                        </div>
                        <div class="logo uber">
                            <img src="images/logos/uber.jpg" alt="uber logo">
                        </div>
                        <div class="logo">
                            <img src="images/logos/paypal.png" alt="paypal logo">
                        </div>
                        <div class="logo facebook">
                            <img src="images/logos/facebook.png" alt="facebook logo">
                        </div>
                    </div>
                </div>
                <a class="appear read-more">read more</a>
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
                            <img src="images/logos/zynga.png" alt="zynga logo">
                        </div>
                        <div class="logo tesla">
                            <img src="images/logos/tesla.png" alt="tesla logo">
                        </div>
                        <div class="logo">
                            <img src="images/logos/wordpress.png" alt="wordpress logo">
                        </div>
                        <div class="logo udemy">
                            <img src="images/logos/udemy.png" alt="udemy logo">
                        </div>
                        <div class="logo lyft">
                            <img src="images/logos/lyft.png" alt="lyft logo">
                        </div>
                        <div class="logo">
                            <img src="images/logos/tumblr.png" alt="tumblr logo">
                        </div>
                    </div>
                </div>
                <a class="appear read-more">read more</a>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="logos-container">
            <img class="appear" src="images/logos/cssf.png" alt="Career Source South Florida logo">
            <img class="appear" src="images/logos/coe.jpg" alt="Council on Occupational Education logo">
            <img class="appear" src="images/logos/fl-doe.jpg" alt="Florida Department of Education logo">
            <img class="appear" src="images/logos/fapsc.jpeg" alt="FAPSC logo">
        </div>
    </section>

    <?php $rootPath = ''; include('parts/footer.php') ?>

    <script src="js/bundle.js"></script>
</body>
</html>
