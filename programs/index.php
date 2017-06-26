<?php $rootPath = '../'; $page = "programs"; include('../parts/head.php'); ?>
<body>
    <?php include('../parts/navbar.php'); ?>

    <section class="above-the-fold">
        <div class="container">
            <a href="<?php echo $rootPath ?>">
                <img src="../images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <h1 class="page-title">tech career programs</h1>
            <p class="page-subtitle">Join Florida Vocational Institute for technology training in the rapidly changing field of computer programming, I.T. security, cloud computing, and other areas of Information Technology. Learn from experienced instructors the essential technical skills and expertise to gain a career in I.T.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="programs-container">
                <a class="program web-dev appear" href="<?php echo $rootPath ?>web-developer/">
                    <div class="image">
                        <h3>Web Development Program</h3>
                    </div>
                    <p>As a Web Developer, you will gain a wide array of fundamental and in-depth training on front end web development, as well as fundamentals of back end development. You will learn how to effectively write front-end programs which interact with servers and load asynchronously. You will also learn to design and implement graphical interfaces which follow best practices of UX design and are mobile-friendly.</p>
                </a>
                <a class="program cyber appear delay-300" href="<?php echo $rootPath ?>cyber-security-and-network-technician/">
                    <div class="image">
                        <h3>Cyber Security Network Technician</h3>
                    </div>
                    <p>As a IT Security and Cloud Professional, you are able to validate your ability to handle day-to-day management of the server operating system, file structure, and directory services. You will also learn to handle software distribution and updates; monitor servers; provide troubleshooting support; build and configure servers; implement auditing policy; perform scheduled vulnerability-assessment scans; and monitor logs for firewalls and intrusion-detection systems.</p>
                </a>
            </div>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>

    <script src="../js/bundle.js"></script>
</body>
</html>
