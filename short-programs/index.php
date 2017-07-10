<?php $rootPath = '../'; $page = "short-programs"; include('../parts/head.php'); ?>
<body>
    <?php include('../parts/navbar.php'); ?>
    <?php include('../parts/pop-up-form.php'); ?>
    <?php include('../parts/agreement.php'); ?>
    <?php include('../parts/paypal-pop-up.php'); ?>

    <span class="hidden" id="short-programs-page"></span>

    <section class="above-the-fold">
        <div class="container">
            <a href="<?php echo $rootPath ?>">
                <img src="../images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <h1 class="page-title">short programs</h1>
            <p class="page-subtitle">Get the skills to push your business or career to the next level</p>
        </div>
    </section>

    <div class="programs-bar">
        <div class="container">
            <button data-program="aws">Amazon Web Services</button>
            <button data-program="wordpress">WordPress</button>
            <button data-program="intro" class="active">Introduction</button>
        </div>
    </div>

    <section class="summary">
        <div class="container">
            <h2 class="section-title aws-content switchable appear">Amazon Web Services (AWS)</h2>
            <h2 class="section-title wordpress-content switchable appear">WordPress</h2>
            <div class="intro-content switchable">
                <p>Take your skills and knowledge to the next level with TechLaunch's short programs. We've designed them to be a great addition to our more immersive programs and they're perfect for those who who have prior experience in web development. The programs give an accelerated understanding without all the risks and frustration of trial and error.</p>
                <p>Our short programs are made available through a quick and easy online enrollment process.</p>
                <p><strong><em>Please note:</em></strong> Our programs may change from time to time so check back in the future for additions. If you want to know about new programs, subscribe to our newsletters at the bottom of the page and you'll be one of the first to know!</p>
            </div>
            <div class="split-4 aws-content switchable">
                <div class="split-box appear">
                    <img src='../images/icons/database.svg' alt='' class="icon">
                    <h4>Get Certified</h4>
                    <p>Amazon Web Services (AWS) Certification is fast becoming a must-have for IT pros. This prepares you for the <strong>AWS Certified Solutions Architect (CSA) - Associate Exam</strong>.</p>
                </div>
                <div class="split-box appear delay-200">
                    <img src='../images/icons/smartphone.svg' alt='' class="icon">
                    <h4>Start From the Beginning</h4>
                    <p>No prior knowledge of AWS or programming skills required. The course will be highly actionable in terms of showing how you can leverage AWS resources.</p>
                </div>
                <div class="split-box appear delay-400">
                    <img src='../images/icons/server.svg' alt='' class="icon">
                    <h4>Become More Valuable</h4>
                    <p>Learn how to speed up a website by deploying CDNs, document versioning and backups, optimize the cost of backups, and create virtual machines.</p>
                </div>
                <div class="split-box appear delay-600">
                    <img src='../images/icons/monitor.svg' alt='' class="icon">
                    <h4>Science Based Learning</h4>
                    <p>We look at education in a holistic way. Our instructors will help you develop the skills and habits that will accelerate your journey to mastery.</p>
                </div>
            </div>
            <div class="split-4 wordpress-content switchable">
                <div class="split-box appear">
                    <img src='../images/icons/database.svg' alt='' class="icon">
                    <h4>Become Job Ready</h4>
                    <p>By providing enough hands-on practice and filling your portfolio full of projects, you will be well-prepared for a job as a WordPress Developer.</p>
                </div>
                <div class="split-box appear delay-200">
                    <img src='../images/icons/smartphone.svg' alt='' class="icon">
                    <h4>Learn In-Demand Skills</h4>
                    <p>WordPress is one of the quickest and most popular ways to build a dynamic website, powering <a target="_blank" rel="noopener" href="https://w3techs.com/technologies/details/cm-wordpress/all/all">28%</a> of all websites.</p>
                </div>
                <div class="split-box appear delay-400">
                    <img src='../images/icons/server.svg' alt='' class="icon">
                    <h4>Open Source Platform</h4>
                    <p>WordPress's open-source platform offers millions of themes and plugins available for anyone to use.</p>
                </div>
                <div class="split-box appear delay-600">
                    <img src='../images/icons/monitor.svg' alt='' class="icon">
                    <h4>Learn By Doing</h4>
                    <p>We don't believe in boring lectures or glossing over concepts. Our courses are based projects and labs custom made to maximize your learning.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta switchable aws-content wordpress-content">
        <div class="container">
            <table class="appear">
                <tbody>
                    <tr>
                        <th>When</th>
                        <td>Fridays: 6:30pm to 10:30pm<br><br>Saturdays: 10:00am to 3:00pm</td>
                    </tr>
                    <tr>
                        <th>Total Cost</th>
                        <td>$1200</td>
                    </tr>
                    <tr class="down-payment">
                        <th>Down Payment</th>
                        <td>$600</td>
                    </tr>
                </tbody>
            </table>
            <!-- <p class="disclaimer appear">*subject to demand</p> -->
            <button data-enroll="true" data-cost="$600" data-form-program="AWS" class="enroll appear switchable aws-content">Enroll in AWS</button>
            <button data-enroll="true" data-cost="$600" data-form-program="WordPress" class="enroll appear switchable wordpress-content">Enroll in WordPress</button>
        </div>
    </section>

    <section class="syllabus">
        <div class="container">
            <div class="content intro-content switchable">
                <h2 class="section-title">Select A Program</h2>
                <div class="program-cards split-2">
                    <div class="split-box program-card" data-program="aws">
                        <img src="../images/logos/amazon-web-services.png" alt="Amazon Web Services" class="logo">
                        <p class="start-date">Next Start Date - <span class="date">7/24/17</span></p>
                    </div>
                    <div class="split-box program-card" data-program="wordpress">
                        <img src="../images/logos/wordpress-white.png" alt="WordPress" class="logo">
                        <p class="start-date">Next Start Date - <span class="date">8/14/17</span></p>
                    </div>
                </div>
            </div>
            <div class="content aws-content switchable">
                <h2 class="section-title">AWS Projects You Will Build</h2>
                <div class="split-2">
                    <div class="split-box">
                        <div class="item appear">
                            <p>Secure, encrypted corporate storage on S3</p>
                        </div>
                        <div class="item appear">
                            <p>NodeJS and PHP deployments to auto-scaling infrastructure</p>
                        </div>
                        <div class="item appear">
                            <p>A/B testing websites by using Route53 DNS routing</p>
                        </div>
                    </div>
                    <div class="split-box">
                        <div class="item appear">
                            <p>Severless API with Lamba and API gateway</p>
                        </div>
                        <div class="item appear">
                            <p>Build an Alexa skill</p>
                        </div>
                        <div class="item appear">
                            <p>Virtual private cloud with secure subnets</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content wordpress-content switchable">
                <h2 class="section-title">WordPress Syllabus</h2>
                <div class="split-2">
                    <div class="split-box">
                        <div class="item appear">
                            <p>Local WordPress development, including local server setup, installing WordPress, and migrating WordPress</p>
                        </div>
                        <div class="item appear">
                            <p>Build a website with themes and plugins and learn how to use code to enable custom content, widgets, and menus</p>
                        </div>
                        <div class="item appear">
                            <p>Learn PHP for WordPress, including PHP basics, template tags, the Loop, and functions in WordPress</p>
                        </div>
                        <div class="item appear">
                            <p>Theme development, including theme template hierarchy, common functions, and setting up widget and menu areas</p>
                        </div>
                        <div class="item appear">
                            <p>WordPress Customizer API and Live Customizer; controllers, sections, panels and transports; updating native controls</p>
                        </div>
                        <div class="item appear">
                            <p>Learn how to build WordPress Plugins and how to connect them to various APIs</p>
                        </div>
                    </div>
                    <div class="split-box">
                        <div class="item appear">
                            <p>Template Hierarchy, including a breakdown of each template and common functions used with specific templates</p>
                        </div>
                        <div class="item appear">
                            <p>WooCommerce Theme Development, including templates, functions, hooks, and how to Build Custom WooCommerce Themes</p>
                        </div>
                        <div class="item appear">
                            <p>Learn how Hooks work; learn how to use Filters and Actions</p>
                        </div>
                        <div class="item appear">
                            <p>Customizing the WordPress Admin Area, such as the login screen, admin navigation, and dashboard widgets</p>
                        </div>
                        <div class="item appear">
                            <p>SEO For WordPress, including a content-first approach, SEO in themes, and SEO in Plugins</p>
                        </div>
                        <div class="item appear">
                            <p>Learn how to integrate Bootstrap with WordPress, such as importing CSS and JS files, and using common components</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <script src="https://www.paypalobjects.com/api/checkout.js" data-version-4></script>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
