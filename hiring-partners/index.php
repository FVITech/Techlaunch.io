<?php $rootPath = '../'; $page = "hiring-partners"; include('../parts/head.php'); ?>
<body>
    <?php include('../parts/navbar.php'); ?>
    <?php include('../parts/pop-up-form.php'); ?>

    <section class="above-the-fold">
        <div class="container">
            <a href="<?php echo $rootPath ?>">
                <img src="../images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <h1 class="page-title">Hiring Partners</h1>
        </div>
    </section>

    <section class="talent">
        <div class="container">
            <h2 class="section-title">Find the Talent That You Need</h2>
            <p>Becoming a hiring partner for TechLaunch gives your business access to highly trained candidates with our Zero Cost Recruiting program. There’s no need to place an ad or hire a recruiter. We’ll take responsibility for understanding the needs of your company and matching you with the ideal candidate. </p>
            <p>Our career services department has experience working closely with our hiring partners to understand their company culture, business needs, and technology stack. Our team then matches our partners with TechLaunch @ FVI graduates who have the skills their business is looking for. We can help our hiring partners find qualified candidates for temp-to-perm opportunities, paid internships, and unpaid internships while minimizing business risk, turnover rates, and costs. </p>
        </div>
    </section>

    <?php
        $testimonials = array('frank-veloz', 'peter-vegliante', 'lily-cantillo');
        include('../parts/testimonials/index.php');
    ?>

    <section class="reasons">
        <div class="container">
            <h2 class="section-title">Reasons To Hire A TechLaunch Graduate</h2>
            <p class="section-subtitle">Our training sets our students apart and is designed to prepare them to work in the tech industry. We do this by: </p>
            <div class="split-2">
                <ul class="list split-box">
                    <li>
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/database.svg">
                        Using group projects to teach our students to work in teams
                    </li>
                    <li>
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/atom.svg">
                        Teaching popular software applications
                    </li>
                    <li>
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/clipboard.svg">
                        Immersing our students in a nine-month program
                    </li>
                    <li>
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/monitor.svg">
                        Providing more in-depth training than 10-week bootcamps
                    </li>
                    <li>
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/smartphone.svg">
                        Basing our curriculum on feedback from hiring partners and local businesses
                    </li>
                </ul>
                <ul class="list split-box">
                    <li>
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/statistics.svg">
                        Providing problem-solving opportunities in our problem resolution labs
                    </li>
                    <li>
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/server.svg">
                        Using extensive hands-on learning
                    </li>
                    <li>
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/calculator.svg">
                        Providing internship opportunities
                    </li>
                    <li>
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/database.svg">
                        Giving our partners access to our Zero-Cost Tech Recruiting program
                    </li>
                    <li>
                        <img class="icon" src="<?php echo $rootPath ?>images/icons/atom.svg">
                        Helping students design a portfolio of work to show hiring partners
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="learning bg-gray">
        <div class="content">
            <h2 class="section-title appear">Culture of Learning</h2>
            <p class="appear">At TechLaunch, the primary skill we teach our students is to be life-long learners. By hiring our graduates and allowing them to grow within your organization, you will help foster a culture of teaching, learning, and collaboration amongst your team members. This often results in engaged, loyal employees who want to “pay it forward.”  </p>
        </div>
    </section>

    <section class="impact">
        <div class="container">
            <h2 class="section-title appear">Bridging the Skills Gap</h2>
            <p class="appear">Many companies and individuals in the tech industry are very socially conscious and understand the skills gap, the digital divide, and the under-representation of minorities in the world of tech. At TechLaunch, we prepare every student who has the right combination of skills and grit to succeed in tech. By hiring our grads, you have the opportunity to have an impact by bringing people with diverse backgrounds and ideas into the industry and effect change for the better that bridges the gaps in the world of tech.</p>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
