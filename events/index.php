<?php $rootPath = '../'; 
$page = "events"; 
$meta_title="Techlaunch.io | Events";
$meta_key="";
$meta_desc="Techlaunch.io events.";    
include('../parts/head.php'); ?>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DZRJ7D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include('../parts/navbar.php'); ?>
    <?php $program = ""; $classes = ""; include('../parts/get-info-form.php'); ?>

    <section class="above-the-fold">
        <div class="container">
            <a href="<?php echo $rootPath ?>">
                <img src="../images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <h1 class="page-title">events</h1>
        </div>
    </section>

    <section class="events-list">
        <div class="container">
            <p class="section-summary">Techlaunch regularly hosts various events, including free coding workshops and informational sessions.</p>
            <div class="events-list-container">
                <div class="date-events-list" data-date="">
                    <div class="date-section">
                        <?php $eventDate = "Wed, October 11th"; ?>
                        <h3 class="date-title"><?php echo $eventDate ?></h3>
                        <?php
                            $title = "Intro to HTML &amp; CSS";
                            $imageUrl = "images/pipeline/students-3.jpg";
                            $eventUrl = "#";
                            $startTime = "6:00pm";
                            $endTime = "9:00pm";
                            $description = "<p>HTML and CSS are markup languages and the building blocks that make up the web. This course is called \"Not your Typical Intro\" because it does not follow the usual pattern of other courses and tutorials that you find on the Internet. Usually HTML and CSS are taught with a focus on language syntax.</p><p>But knowing syntax alone does not enable you to create a webpage from a design. You need to know where to start and how to approach the task, in other words - you need to learn how to think like a front-end developer.</p>";
                            $location = "Pipeline Doral<br>8400 NW 36th St #450<br>Doral, FL 33166";
                            $links = "";
                            include('./event.php');
                        ?>
                    </div>
                    <div class="date-section">
                        <?php $eventDate = "Mon, October 16th"; ?>
                        <h3 class="date-title"><?php echo $eventDate ?></h3>
                        <?php
                            $title = "Amazon Web Services Info Session";
                            $imageUrl = "images/pipeline/students-1.jpg";
                            $eventUrl = "#";
                            $startTime = "5:30pm";
                            $endTime = "7:30pm";
                            $description = "<p>Amazon Web Services (AWS) Certification is fast becoming a must-have for IT pros. This prepares you for the AWS Certified Solutions Architect (CSA) - Associate Exam.</p><p>Learn how to speed up a website by deploying CDNs, document versioning and backups, optimize the cost of backups, and create virtual machines.</p>";
                            $location = "Pipeline Doral<br>8400 NW 36th St #450<br>Doral, FL 33166";
                            $links = "";
                            include('./event.php');
                        ?>
                        <?php
                            $title = "World Port Hackathon";
                            $imageUrl = "images/pipeline/students-2.jpg";
                            $eventUrl = "#";
                            $startTime = "5:30pm";
                            $endTime = "9:30pm";
                            $description = "<p>Do you want to hack the port? Do you have the brains to come up with creative solutions? Do you want to join this event full of great energy? We are looking for you! The challenges are defined in co-creation with the port community, technology partners and the partner ports.</p><p>The World Port Hackathon is the place where the diverse worlds make their daily challenges visible and tangible. It solves real challenges from the port community within 24-hours. Vibrant energy, loads of data, creative thinking, collaboration, inspiration, coding, innovation, and above all fun are key during the Hackathon. Participate!</p>";
                            $location = "Pipeline Doral<br>8400 NW 36th St #450<br>Doral, FL 33166";
                            $links = "";
                            include('./event.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
