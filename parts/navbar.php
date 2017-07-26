<div id="menu-overlay"></div>

<?php
    $origin = "no-origin";
    $phone_num = "305-783-3599";

    if(isset($_GET['origin'])){
      $origin = $_GET['origin'];
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
    elseif($origin=='google' || $origin=='es-google'){?>
    <!--Origin - Google-->
    <script type="text/javascript">
      var google_replace_number=<?php echo $origin=='google' ? "786-574-9511" : "305-851-5511"; ?>;
      (function(a,e,c,f,g,b,d){var h={ak:"939988187",cl:"a4GcCIWJ-WAQ26mcwAM"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[f]||(a[f]=h.ak);b=e.createElement(g);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(g)[0];d.parentNode.insertBefore(b,d);a._googWcmGet=function(b,d,e){a[c](2,b,h,d,null,new Date,e)}})(window,document,"_googWcmImpl","_googWcmAk","script");
    </script>
  <?php }?>

<nav id="navbar">
    <div class="get-info">Get Info</div>
    <a class="phone" href="tel:<?php echo $phone_num?>"><?php echo $phone_num?></a>
    <div id="menu-button" class="menu-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <div class="menu-container" id="menu-container">
        <div class="menu">
            <div class="menu-section">
                <a class="menu-header dropdown" href="<?php echo $rootPath ?>programs/">Tech Career Programs</a>
                <div class="menu-list">
                    <a class="mobile-link" href="<?php echo $rootPath ?>programs/">Programs Summary</a>
                    <a href="<?php echo $rootPath ?>web-developer/">Web Developer</a>
                    <a href="<?php echo $rootPath ?>cyber-security-and-network-technician/">CyberSecurity and Network Technician</a>
                </div>
            </div>
            <div class="menu-section tech-skills-upgrade">
                <a class="menu-header dropdown" href="<?php echo $rootPath ?>tech-skills-upgrade-programs/">Tech Skills Upgrades</a>
                <div class="menu-list">
                    <a class="mobile-link" href="<?php echo $rootPath ?>tech-skills-upgrade-programs/">Tech Skills Upgrades Summary</a>
                    <a href="<?php echo $rootPath ?>tech-skills-upgrade-programs/#aws">Amazon Web Services</a>
                    <!-- <a href="<?php echo $rootPath ?>tech-skills-upgrade-programs/#wordpress">WordPress</a> -->
                </div>
            </div>
            <div class="menu-section">
                <a class="menu-header dropdown" href="<?php echo $rootPath ?>careerlaunch/">Career Launch &amp; Services</a>
                <div class="menu-list">
                    <a class="mobile-link" href="<?php echo $rootPath ?>careerlaunch/">Careerlaunch &amp; Career Services</a>
                    <a href="<?php echo $rootPath ?>hiring-partners/">Hiring Partners</a>
                </div>
            </div>
            <div class="menu-section">
                <a class="menu-header dropdown" href="<?php echo $rootPath ?>about-us/">About Us</a>
                <div class="menu-list">
                    <a class="mobile-link" href="<?php echo $rootPath ?>about-us/">About Us Summary</a>
                    <a target="_blank" rel="noopener" href="https://www.techlaunch.io/blog">Blog</a>
                    <a href="<?php echo $rootPath ?>contact-us/">Contact Us</a>
                </div>
            </div>
            <div class="menu-section">
                <a class="menu-header" href="<?php echo $rootPath ?>financial-aid/">Financial Aid</a>
            </div>
            <div class="menu-section">
                <a class="menu-header" href="<?php echo $rootPath ?>veterans/">Veterans</a>
            </div>
            <div class="menu-section">
                <a class="menu-header" target="_blank" rel="noopener" href="https://www.techlaunch.io/blog">Blog</a>
            </div>
        </div>
        <div class="logo-box">
            <a class="home-btn-logo" href="<?php echo $rootPath ?>">
                <img src="<?php echo $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
        </div>
    </div>
</nav>
