<?php $rootPath = '../'; 
$page = "privacy-policy"; 
$meta_title="Privacy Policy";
$meta_key="";
$meta_desc="Privacy Policy";    
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
            <h1 class="page-title">privacy policy</h1>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <h2 class="section-title">FVI School of Technology Privacy Policy</h2>
            <p>This privacy policy discloses the privacy practices for <a target="_blank" rel="noopener" href="<?= $rootPath ?>">FVI School of Technology</a>.</p>
            <p>This privacy policy applies solely to information collected by this web site. It will notify you of the following:</p>
            <ul>
                <li>What personally identifiable information is collected from you through the web site, how it is used and with whom it may be shared.</li>
                <li>What choices are available to you regarding the use of your data.</li>
                <li>The security procedures in place to protect the misuse of your information.</li>
                <li>How you can correct any inaccuracies in the information.</li>
            </ul>
            <h3>Information Collection, Use, and Sharing</h3>
            <p>We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us via email or other direct contact from you. We will not sell or rent this information to anyone.</p>
            <p>We will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request, e.g. to ship an order.</p>
            <p>Unless you ask us not to, we may contact you via email in the future to tell you about specials, new products or services, or changes to this privacy policy.</p>
            <h3>Your Access to and Control over Information</h3>
            <p>You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address or phone number given on our website:</p>
            <ul>
                <li>See what data we have about you, if any.</li>
            	<li>Change/correct any data we have about you.</li>
            	<li>Have us delete any data we have about you.</li>
            	<li>Express any concern you have about our use of your data.</li>
            </ul>
            <h3>Security</h3>
            <p>We take precautions to protect your information. When you submit sensitive information via the website, your information is protected both online and offline.</p>
            <p>Wherever we collect sensitive information (such as credit card data), that information is encrypted and transmitted to us in a secure way. You can verify this by looking for a closed lock icon at the bottom of your web browser, or looking for “https” at the beginning of the address of the web page.</p>
            <p>While we use encryption to protect sensitive information transmitted online, we also protect your information offline. Only employees who need the information to perform a specific job (for example, billing or customer service) are granted access to personally identifiable information. The computers/servers in which we store personally identifiable information are kept in a secure environment.</p>
            <h3>Cookies</h3>
            <p>We use “cookies” on this site. A cookie is a piece of data stored on a site visitor’s hard drive to help us improve your access to our site and identify repeat visitors to our site. For instance, when we use a cookie to identify you, you would not have to log in a password more than once, thereby saving time while on our site. Cookies can also enable us to track and target the interests of our users to enhance the experience on our site. Usage of a cookie is in no way linked to any personally identifiable information on our site.</p>
            <h3>Sharing</h3>
            <p>We partner with another party to provide specific services. When the user signs up for these services, we will share names, or other contact information that is necessary for the third party to provide these services. These parties are not allowed to use personally identifiable information except for the purpose of providing these services.</p>
            <h3>Updates</h3>
            <p>Our Privacy Policy may change from time to time and all updates will be posted on this page.</p>
            <p>If you feel that we are not abiding by this privacy policy, you should contact us immediately via telephone at 786-574-3350 or via email.</p>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
