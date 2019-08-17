<?php 
session_start();
$rootPath = '';
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
            <a href="<?= $rootPath ?>">
                <img src="<?= $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <h2 class="page-title">Ready to Launch a Career in Technology?</h2>
            <p class="page-subtitle">TechLaunch offers immersive programs and courses that prepare you today, for the recession proof tech careers of tomorrow.</p>
            <div class="buttons-box">
                <a class="btn browse-programs" href="<?= $rootPath ?>programs/">Browse Programs</a>
                <a class="btn get-more-info">Get More Info</a>
            </div>
        </div>
    </section>

    <section class="hero">
        <div class="split-3">
            <div class="split-box">
                <h2>Become a Hero in the Tech Industry!</h2>
                <img class="image lazyload" data-src="<?= $rootPath ?>images/super-hero.png" alt="Tech Hero">
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
                    <iframe class="lazyload" data-src="https://www.youtube.com/embed/KlM94Wiybjs?ecver=2<?= $options ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="split-box">
                <p>When you’re a student at TechLaunch, you’ll get the training you need to enter the world of tech. With a dynamic classroom environment, our instructors use an extensive hands-on approach and work by your side to teach you <strong>actual job skills</strong>.</p>
            </div>
        </div>
    </section>

    <section class="programs">
        <div class="left">
            <a class="program-title" href="<?= $rootPath ?>programs/">
                Tech Career Programs
            </a>
        </div>
        <div class="right">
            <a class="program-title" href="<?= $rootPath ?>tech-skills-upgrade-programs/">
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
                                <img src="<?= $rootPath ?>images/rocket2.svg" alt="rocket" class="rocket">
                                <img src="<?= $rootPath ?>images/fire.svg" alt="flame" class="flame">
                            </div>
                            <span>27%</span>
                        </div>
                        <label>Web<br>Developers</label>
                    </div>
                    <div class="bar-container">
                        <div class="bar">
                            <div class="rocket-container">
                                <img src="<?= $rootPath ?>images/rocket2.svg" alt="rocket" class="rocket">
                                <img src="<?= $rootPath ?>images/fire.svg" alt="flame" class="flame">
                            </div>
                            <span>17%</span>
                        </div>
                        <label>Software<br>Developers</label>
                    </div>
                    <div class="bar-container">
                        <div class="bar">
                            <div class="rocket-container">
                                <img src="<?= $rootPath ?>images/rocket2.svg" alt="rocket" class="rocket">
                                <img src="<?= $rootPath ?>images/fire.svg" alt="flame" class="flame">
                            </div>
                            <span>18%</span>
                        </div>
                        <label>Cyber<br>Security</label>
                    </div>
                    <div class="bar-container">
                        <div class="bar">
                            <div class="rocket-container">
                                <img src="<?= $rootPath ?>images/rocket2.svg" alt="rocket" class="rocket">
                                <img src="<?= $rootPath ?>images/fire.svg" alt="flame" class="flame">
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
                <img class="appear lazyload" data-src="<?= $rootPath ?>images/pipeline/students-1.jpg" alt="phone and laptop">
            </div>
            <div class="right">
                <ul>
                    <li class="appear">
                        <img class="icon lazyload" data-src="<?= $rootPath ?>images/icons/diploma.png" alt="diploma icon">
                        <p>Immersive training to prepare you for a exciting and rewarding career in the booming technology industry</p>
                    </li>
                    <li class="appear">
                        <img class="icon lazyload" data-src="<?= $rootPath ?>images/icons/hands-holding-box.png" alt="hands holding box icon">
                        <p>Get real-world experience in a hands-on environment</p>
                    </li>
                    <li class="appear">
                        <img class="icon lazyload" data-src="<?= $rootPath ?>images/icons/search-the-globe.png" alt="search the globe icon">
                        <p>Work with our Career Services Team to find great job opportunities</p>
                    </li>
                    <li class="appear">
                        <img class="icon lazyload" data-src="<?= $rootPath ?>images/icons/growing-graph.png" alt="growing graph icon">
                        <p>Enter a growing field where your skills are vital</p>
                    </li>
                    <li class="appear">
                        <img class="icon lazyload" data-src="<?= $rootPath ?>images/icons/piggy-bank.png" alt="piggy bank icon">
                        <p>Financial aid is available for those who qualify</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <?php
        $rootPath = '';
        $classes = '';
        include('parts/quotes.php')
    ?>
     <style>
	 .custom-video-home {
    width: 48%;text-align: center;
}
.custom-video-home .section-title {
    font-size: 22px !important;
    font-weight: bold !important;
    margin-top: 15px !important;
    margin-bottom: 0 !important;
}
		@media only screen and (max-width: 480px) {
.custom-if iframe{ width:335px !important; height:200px !important;}.custom-video-home {
    width: 100%!important;
}
.custom-video-home.custom-last {
    margin-top: 20px;
}
}
@media only screen and (min-width: 480px) and (max-width: 767px) {
.custom-if iframe{ width:400px !important; height:250px !important;}.custom-video-home {
    width: 100%!important;
}
.custom-video-home.custom-last {
    margin-top: 20px;
}
}
@media only screen and (min-width: 768px) and (max-width: 959px) {
.custom-video-home iframe {
    width: 100% !important;
}
}
		</style>
    <section class="stacks">
        <div class="stacks-container custom-if">
   
        <div class="custom-video-home">
                    <iframe style="width: 532px;height: 300px;" class="lazyload" data-src="https://www.youtube.com/embed/umw2N9SerDs?ecver=2<?= $options ?>" frameborder="0"></iframe>
                            <h2 class="section-title">Director of TechLaunch Education</h2></div>
                       <div class="custom-video-home custom-last">
                    <iframe style="width: 532px;height: 300px;" class="lazyload" data-src="https://www.youtube.com/embed/x5gYVj2v1lo?ecver=2<?= $options ?>" frameborder="0"></iframe>
                            <h2 class="section-title">Cyber Security &Network Tech Program Chair  </h2>
             </div>
            <!--<div class="stack">
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
                            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/khan-academy.png" src="https://via.placeholder.com/100x40" alt="khan academy logo">
                        </div>
                        <div class="logo">
                            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/netflix.png" src="https://via.placeholder.com/100x40" alt="netflix logo">
                        </div>
                        <div class="logo">
                            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/yahoo.png" src="https://via.placeholder.com/100x40" alt="yahoo logo">
                        </div>
                        <div class="logo uber">
                            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/uber.jpg" src="https://via.placeholder.com/100x40" alt="uber logo">
                        </div>
                        <div class="logo">
                            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/paypal.png" src="https://via.placeholder.com/100x40" alt="paypal logo">
                        </div>
                        <div class="logo facebook">
                            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/facebook.png" src="https://via.placeholder.com/100x40" alt="facebook logo">
                        </div>
                    </div>
                </div>
                <a class="appear read-more" href="<?=  $rootPath ?>web-developer/">read more</a>
            </div>-->
            <!--<div class="stack">
                <div class="box appear delay-200">
                    <h3 class="title">lamp</h3>
                    <div class="tech">
                        <span>Linux</span>
                        <span>Apache</span>
                        <span>MySQL</span>
                        <span>PHP</span>
                    </div>
                    <div class="company-logos">
                        <div class="logo">
                            <img class="lazyload" data-src="images/logos/rackspace.png" src="https://via.placeholder.com/100x40" alt="rackspace logo">
                        </div> -->
                       <!--  <div class="logo">
                            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/zynga.png" src="https://via.placeholder.com/100x40" alt="zynga logo">
                        </div>
                        <div class="logo tesla">
                            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/tesla.png" src="https://via.placeholder.com/100x40" alt="tesla logo">
                        </div>
                        <div class="logo">
                            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/wordpress.png" src="https://via.placeholder.com/100x40" alt="wordpress logo">
                        </div>
                        <div class="logo udemy">
                            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/udemy.png" src="https://via.placeholder.com/100x40" alt="udemy logo">
                        </div>
                        <div class="logo lyft">
                            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/lyft.png" src="https://via.placeholder.com/100x40" alt="lyft logo">
                        </div>
                        <div class="logo">
                            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/tumblr.png" src="https://via.placeholder.com/100x40" alt="tumblr logo">
                        </div>
                    </div>
                </div>
                <a class="appear read-more" href="<?= $rootPath ?>web-developer/">read more</a>
            </div>-->
        </div>
    </section>

    <section class="partners">
        <div class="logos-container">
            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/cssf.png" src="https://via.placeholder.com/240x80" alt="Career Source South Florida logo">
            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/coe.jpg" src="https://via.placeholder.com/240x80" alt="Council on Occupational Education logo">
            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/fl-doe.jpg" src="https://via.placeholder.com/240x80" alt="Florida Department of Education logo">
            <img class="lazyload" data-src="<?= $rootPath ?>images/logos/fapsc.jpeg" src="https://via.placeholder.com/240x80" alt="FAPSC logo">
        </div>
    </section>

    <?php $rootPath = ''; include('parts/footer.php') ?>
    <?php $rootPath = ''; include('parts/bottom.php') ?>
    
<script type="text/javascript">
var _userway_config = {
/* uncomment the following line to override default position*/
 position: '3', 
/* uncomment the following line to override default size (values: small, large)*/
size: 'large',  
/* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
  language: 'en-US',  
/* uncomment the following line to override color set via widget (e.g., #053f67)*/
  color: '#053f67',  
/* uncomment the following line to override type set via widget(1=person, 2=chair, 3=eye)*/
  type: '1',  
/* uncomment the following line to override support on mobile devices*/
  mobile: true,  
account: 'KIhnSLzwwc'
};
</script>
<script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>
</body>
</html>
