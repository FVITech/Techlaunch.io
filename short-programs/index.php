<?php $rootPath = '../'; $page = "short-programs"; include('../parts/head.php'); ?>
<body>
    <?php include('../parts/navbar.php'); ?>
    <?php include('../parts/pop-up-form.php'); ?>

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
            <h2 class="section-title intro-content switchable appear">Introduction</h2>
            <h2 class="section-title aws-content switchable appear">Amazon Web Services (AWS)</h2>
            <h2 class="section-title wordpress-content switchable appear">WordPress</h2>
            <div class="split-4 intro-content switchable">
                <p>Miami ipsum D. Wade amet papo PLP in, cafe bustelo Pitbull occaecat aliquip west flagler tiki tiki music UM. Non basel ut duis, nostrud culpa coral way. 305 till I die botanica lorem officia midtown, elit sint guateber bottles incididunt Ultra power love hour. Kendall flagami bro voluptate croquetica gramps. Traffic bottles flagler in jackson memorial voluptate.</p>
                <p>Miami irregardless south beach edgewater pastelitos flaca cillum aliquip. Ea ricer gorda flagami cillum excepteur Pitbull little haiti. Tempor 836 in, pata sucia laborum miami midtown de pinga calle ocho do cafecito omni. Pata sucia exercitation west flagler little haiti.</p>
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

    <section class="syllabus">
        <div class="container">
            <div class="content intro-content switchable">
                <h2 class="section-title">Benefits of a Short Program</h2>
                <p>Miami ipsum D. Wade amet papo PLP in, cafe bustelo Pitbull occaecat aliquip west flagler tiki tiki music UM. Non basel ut duis, nostrud culpa coral way. 305 till I die botanica lorem officia midtown, elit sint guateber bottles incididunt Ultra power love hour. Kendall flagami bro voluptate croquetica gramps. Traffic bottles flagler in jackson memorial voluptate.</p>
                <p>Miami irregardless south beach edgewater pastelitos flaca cillum aliquip. Ea ricer gorda flagami cillum excepteur Pitbull little haiti. Tempor 836 in, pata sucia laborum miami midtown de pinga calle ocho do cafecito omni. Pata sucia exercitation west flagler little haiti.</p>
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
            <button class="download switchable aws-content wordpress-content">download your curriculum</button>
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
                    <tr>
                        <th>Down Payment</th>
                        <td>$600</td>
                    </tr>
                </tbody>
            </table>
            <p class="disclaimer appear">*subject to demand</p>
            <button class="enroll appear switchable aws-content">Enroll in AWS</button>
            <button class="enroll appear switchable wordpress-content">Enroll in WordPress</button>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>

    <script src="../js/bundle.js"></script>
</body>
</html>
