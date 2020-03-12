<?php $rootPath = '../'; 
$page = "financial-aid"; 
$meta_title="Financial Aid";
$meta_key="";
$meta_desc="Apply for Financial Aid Here for our Coding or Cyber Security Program.  Financial aid is available for those who qualify.";    
include('../parts/head.php'); ?>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DZRJ7D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
      include('../parts/navbar.php');
      $classes = "";
      include('../parts/get-info-form.php');
    ?>

    <section class="above-the-fold">
        <div class="container">
            <a href="<?= $rootPath ?>">
                <img src="<?= $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="FVI School of Technology logo" class="logo">
            </a>
            <h1 class="page-title">Financial Aid</h1>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Financing Your Dreams</h2>
            <p>At FVI School of Technology, we know that many of our students may need help with their educational expenses. Financial Aid is available for those who qualify for some of our programs.  We have a full staff of financial aid professionals ready to assist you in understanding the options available to help cover your education expenses. We’ll walk you through the process, so you understand the difference between federal grant and loan programs and student loans from a private lender. Then you can decide which option is right for you. </p>
            <p>Federal assistance programs are administered by the U.S. Department of Education. Any U.S. citizen, national, or person in the United States for other than temporary reasons who is enrolled and accepted may apply for these programs. Most forms of financial assistance are available during each July 1-June 30 award period.</p>
            <p>If you’re considering applying for federal financial aid, it’s important to request a copy of the current guide, Funding Your Education, which is published by the U.S. Department of Education. You can find this document online at <a href="http://studentaid.ed.gov/">http://studentaid.ed.gov/</a>. It’s designed to help students understand eligibility requirements. </p>
        </div>
    </section>

    <section class="banner teaching"></section>

    <section class="net-price-calculator bg-gray">
        <div class="container">
            <h2 class="section-title">Net Price Calculator</h2>
            <a class="btn" target="_blank" rel="noopener" href="http://www.fvi.edu/calculator/npcalc.htm">use calculator</a>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
