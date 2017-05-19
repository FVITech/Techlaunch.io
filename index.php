<?php $page = "homepage"; include('parts/head.php'); ?>
<body>
    <?php include('parts/navbar.php'); ?>
    <section class="above-the-fold">
        <div class="container">
            <img src="/images/logos/techlaunch-blackbg.svg" alt="Techlaunch logo" class="logo">
            <div class="cta-box">
                <h2>launch a career in technology</h2>
                <p>Techlaunch offers programs in Web Development, Web Design, and IT Security. We teach more than short-term coding bootcamps to ensure that you will not only be prepared to get a new career, but will also thrive.</p>
                <button class="browse-programs">Browse Programs</button>
                <button class="get-more-info">Get More Info</button>
            </div>
        </div>
    </section>

    <section class="launch">
        <div class="left">
            <img src="/images/rocket.svg" alt="Techlaunch logo">
            <h2>launch a great tech career in under a year</h2>
        </div>
        <div class="right">
            <p>Miami springs critical mass dale cafe llave leah arts district upper east side, Pepe Billete art basel. Arroz con mango cafe bustelo LIV pero like abuelita meng bulykkk. West flagler sweetwater westchester south beach downtown dale tiki tiki music Marlins cafe llave bird road Dolphins. Gorda bottles calle ocho critical mass ya tu sabes power love hour LIV Azucar bulykkk cafecito MiMo.</p>
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
        <h2 class="section-title">tech industry outlook</h2>
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
            <p class="explanation">Miami springs critical mass dale cafe llave leah arts district upper east side, Pepe Billete art basel. Arroz con mango cafe bustelo LIV pero like abuelita meng bulykkk. West flagler sweetwater westchester south beach downtown dale tiki tiki music Marlins cafe llave bird road Dolphins. Gorda bottles calle ocho critical mass ya tu sabes power love hour LIV Azucar bulykkk cafecito MiMo.</p>
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

    <section class="testimonials">
        <div id="left-btn" class="left-btn">‹</div>
        <div id="right-btn" class="right-btn">›</div>
        <div class="dots">
            <!-- EDIT: the number of dots must match the number of testimonials -->
            <span data-index="0" class="dot"></span>
            <span data-index="1" class="dot"></span>
            <span data-index="2" class="dot"></span>
            <span data-index="3" class="dot"></span>
        </div>
        <div class="testimonial">
            <div class="left">
                <img src="/images/people/person-holding-computer.png" alt="person holding computer">
            </div>
            <div class="right">
                <h3 class="heading">some heading text</h3>
                <p class="quote">"I’m grateful to FVI and all the professors, like Victor Moreno and Randy Ferrer, for providing me with skills and abilities that helped open the doors to a world full of new opportunities. Coding literally changed my life and has become a powerful tool to grow and improve my life in several aspects. Excellence, knowledge, respect, dedication are the things you’ll find every step of the learning process."</p>
                <p class="author">- John Doe Smith Rodriguez</p>
            </div>
        </div>
        <div class="testimonial fade-out">
            <div class="left">
                <img src="/images/people/suit-guy.png" alt="suit guy">
            </div>
            <div class="right">
                <h3 class="heading">some heading text</h3>
                <p class="quote">"I’m grateful to FVI and all the professors, like Victor Moreno and Randy Ferrer, for providing me with skills and abilities that helped open the doors to a world full of new opportunities. Coding literally changed my life and has become a powerful tool to grow and improve my life in several aspects. Excellence, knowledge, respect, dedication are the things you’ll find every step of the learning process."</p>
                <p class="author">- Johnny Bravo Dominguez</p>
            </div>
        </div>
        <div class="testimonial fade-out">
            <div class="left">
                <img src="/images/people/guy-on-laptop.jpeg" alt="">
            </div>
            <div class="right">
                <h3 class="heading">some heading text</h3>
                <p class="quote">"I’m grateful to FVI and all the professors, like Victor Moreno and Randy Ferrer, for providing me with skills and abilities that helped open the doors to a world full of new opportunities. Coding literally changed my life and has become a powerful tool to grow and improve my life in several aspects. Excellence, knowledge, respect, dedication are the things you’ll find every step of the learning process."</p>
                <p class="author">- Johnny Bravo Dominguez</p>
            </div>
        </div>
        <div class="testimonial fade-out">
            <div class="left">
                <img src="/images/people/girl-on-laptop.jpg" alt="">
            </div>
            <div class="right">
                <h3 class="heading">some heading text</h3>
                <p class="quote">"I’m grateful to FVI and all the professors, like Victor Moreno and Randy Ferrer, for providing me with skills and abilities that helped open the doors to a world full of new opportunities. Coding literally changed my life and has become a powerful tool to grow and improve my life in several aspects. Excellence, knowledge, respect, dedication are the things you’ll find every step of the learning process."</p>
                <p class="author">- Johnny Bravo Dominguez</p>
            </div>
        </div>
    </section>

    <section class="benefits">
        <h2 class="section-title">benefits of techlaunch</h2>
        <div class="benefits-container">
            <div class="left">
                <p>Rationis enim perfectio est virtus; Universa enim illorum ratione cum tota vestra confligendum puto. Etsi qui potest intellegi aut cogitari esse aliquod animal, quod se oderit? Sic, et quidem diligentius saepiusque ista loquemur inter nos agemusque communiter. Non autem hoc: igitur ne illud quidem. Nondum autem explanatum satis, erat, quid maxime natura vellet. Tertium autem omnibus aut maximis rebus iis, quae secundum naturam sint, fruentem vivere.</p>
            </div>
            <div class="middle">
                <img src="/images/phone-and-laptop.jpg" alt="phone and laptop">
            </div>
            <div class="right">
                <ul>
                    <li>
                        <img class="icon" src="/images/icons/atom.svg" alt="atom icon">
                        <p>Arroz con mango cafe bustelo LIV pero like abuelita meng bulykkk.</p>
                    </li>
                    <li>
                        <img class="icon" src="/images/icons/calculator.svg" alt="calculator icon">
                        <p>Arroz con mango cafe bustelo LIV pero like abuelita meng bulykkk.</p>
                    </li>
                    <li>
                        <img class="icon" src="/images/icons/statistics.svg" alt="statistics icon">
                        <p>Arroz con mango cafe bustelo LIV pero like abuelita meng bulykkk.</p>
                    </li>
                    <li>
                        <img class="icon" src="/images/icons/clipboard.svg" alt="clipboard icon">
                        <p>Arroz con mango cafe bustelo LIV pero like abuelita meng bulykkk.</p>
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
        <h2 class="section-title">stacks we teach</h2>
        <div class="stacks-container">
            <div class="stack">
                <div class="box">
                    <h3 class="title">mern</h3>
                    <div class="tech">
                        <span>MongoDB</span>
                        <span>ExpressJS</span>
                        <span>ReactJS</span>
                        <span>NodeJS</span>
                    </div>
                    <div class="company-logos">
                        <div class="logo">
                            <img src="/images/logos/khan-academy.png" alt="khan academy logo">
                        </div>
                        <div class="logo">
                            <img src="/images/logos/netflix.png" alt="netflix logo">
                        </div>
                        <div class="logo">
                            <img src="/images/logos/yahoo.png" alt="yahoo logo">
                        </div>
                        <div class="logo">
                            <img src="/images/logos/uber.jpg" style="width: auto; height: 100%;" alt="uber logo">
                        </div>
                        <div class="logo">
                            <img src="/images/logos/paypal.png" alt="paypal logo">
                        </div>
                        <div class="logo">
                            <img src="/images/logos/facebook.png" style="width: auto; height: 90%;" alt="facebook logo">
                        </div>
                    </div>
                </div>
                <button>read more</button>
            </div>
            <div class="stack">
                <div class="box">
                    <h3 class="title">lamp</h3>
                    <div class="tech">
                        <span>Linux</span>
                        <span>Apache</span>
                        <span>MySQL</span>
                        <span>PHP</span>
                    </div>
                    <div class="company-logos">
                        <!-- <div class="logo">
                            <img src="/images/logos/rackspace.png" alt="rackspace logo">
                        </div> -->
                        <div class="logo">
                            <img src="/images/logos/zynga.png" alt="zynga logo">
                        </div>
                        <div class="logo">
                            <img src="/images/logos/tesla.png" style="width: auto; height: 90%;" alt="tesla logo">
                        </div>
                        <div class="logo">
                            <img src="/images/logos/wordpress.png" alt="wordpress logo">
                        </div>
                        <div class="logo">
                            <img src="/images/logos/udemy.png" style="width: auto; height: 100%;" alt="udemy logo">
                        </div>
                        <div class="logo">
                            <img src="/images/logos/lyft.png" style="width: auto; height: 100%;" alt="lyft logo">
                        </div>
                        <div class="logo">
                            <img src="/images/logos/tumblr.png" alt="tumblr logo">
                        </div>
                    </div>
                </div>
                <button>read more</button>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="logos-container">
            <img src="/images/logos/cssf.png" alt="Career Source South Florida logo">
            <img src="/images/logos/coe.jpg" alt="Council on Occupational Education logo">
            <img src="/images/logos/fl-doe.jpg" alt="Florida Department of Education logo">
            <img src="/images/logos/fapsc.jpeg" alt="FAPSC logo">
        </div>
    </section>

    <?php include('parts/footer.php') ?>

    <script src="/js/bundle.js"></script>
</body>
</html>
