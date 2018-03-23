<div id="menu-overlay"></div>

<?php
    $origin = "no-origin";
    $phone_num = "305-783-3599";

    if(isset($_GET['origin'])){
      $origin = $_GET['origin'];
      $_SESSION['origin'] = $origin;
    }
    if (isset($_SESSION) && isset($_SESSION['origin'])  ){
      $origin = $_SESSION['origin'];
      ?><script>
      console.log("Session origin: <?= $_SESSION['origin']; ?>");
      </script><?php
    }

    if ($origin == 'bing'){
      $phone_num = '786-574-2599';
    }
    elseif ($origin == 'es-bing'){
      $phone_num = '305-615-6348';
    }
    elseif ($origin == 'facebook'){
      $phone_num = '786-574-6626';
    }
    elseif ($origin == 'coursereport'){
      $phone_num = '305-676-9569';
    }
    elseif($origin=='google' || $origin=='es-google'){
      $phone_num = $origin=='google' ? "(786) 574-9511" : "305-851-5511";
    ?>
    <!--Origin - Google-->
    <script type="text/javascript">
      var google_replace_number= "<?= $phone_num; ?>";
      (function(a,e,c,f,g,b,d){var h={ak:"939988187",cl:"a4GcCIWJ-WAQ26mcwAM"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[f]||(a[f]=h.ak);b=e.createElement(g);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(g)[0];d.parentNode.insertBefore(b,d);a._googWcmGet=function(b,d,e){a[c](2,b,h,d,null,new Date,e)}})(window,document,"_googWcmImpl","_googWcmAk","script");
    </script>
  <?php }?>
<script>
  console.log("Origin: <?= $origin; ?>");
</script>
<nav id="navbar">
    <div class="get-info">Get Info</div>
    <a class="phone" href="tel:<?= $phone_num?>"><?= $phone_num?></a>
    <div id="menu-button" class="menu-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <div class="menu-container" id="menu-container">
        <div class="menu">
            <div class="menu-section">
                <a class="menu-header dropdown" href="<?= $rootPath ?>programs/">Tech Career Programs</a>
                <div class="menu-list">
                    <a class="mobile-link" href="<?= $rootPath ?>programs/">Programs Summary</a>
                    <a href="<?= $rootPath ?>web-developer/">Web Developer</a>
                    <a href="<?= $rootPath ?>cyber-security-and-network-technician/">CyberSecurity and Network Technician</a>
                    <a href="<?= $rootPath ?>web-design-and-digital-marketing/">Web Design and Digital Marketing</a>
                </div>
            </div>
            <div class="menu-section tech-skills-upgrade">
                <a class="menu-header dropdown" href="<?= $rootPath ?>tech-skills-upgrade-programs/">Tech Skills Upgrades</a>
                <div class="menu-list">
                    <a class="mobile-link" href="<?= $rootPath ?>tech-skills-upgrade-programs/">Tech Skills Upgrades Summary</a>
                    <a href="<?= $rootPath ?>tech-skills-upgrade-programs/#aws">Amazon Web Services</a>
                    <!-- <a href="<?= $rootPath ?>tech-skills-upgrade-programs/#wordpress">WordPress</a> -->
                </div>
            </div>
            <div class="menu-section">
                <a class="menu-header dropdown" href="<?= $rootPath ?>careerlaunch/">Career Launch &amp; Services</a>
                <div class="menu-list">
                    <a class="mobile-link" href="<?= $rootPath ?>careerlaunch/">Careerlaunch &amp; Career Services</a>
                    <a href="<?= $rootPath ?>hiring-partners/">Hiring Partners</a>
                </div>
            </div>
            <div class="menu-section">
                <a class="menu-header dropdown" href="<?= $rootPath ?>about-us/">About Us</a>
                <div class="menu-list">
                    <a class="mobile-link" href="<?= $rootPath ?>about-us/">About Us Summary</a>
                    <a href="<?= $rootPath ?>campus-locations/">Campus Locations</a>
                    <a href="<?= $rootPath ?>contact-us/">Contact Us</a>
                </div>
            </div>
            <div class="menu-section">
                <a class="menu-header" href="<?= $rootPath ?>financial-aid/">Financial Aid</a>
            </div>
            <div class="menu-section">
                <a class="menu-header" href="<?= $rootPath ?>events/">Events</a>
            </div>
            <div class="menu-section">
                <a class="menu-header" href="<?= $rootPath ?>veterans/">Veterans</a>
            </div>
            <div class="menu-section">
                <a class="menu-header" target="_blank" rel="noopener" href="https://www.techlaunch.io/blog">Blog</a>
            </div>
            <div class="menu-section">
                <a class="menu-header" href="<?= $rootPath ?>testimonials/">Testimonials</a>
            </div>
        </div>
        <div class="logo-box">
            <a class="home-btn-logo" href="<?= $rootPath ?>">
                <img src="<?= $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
        </div>
    </div>
</nav>
