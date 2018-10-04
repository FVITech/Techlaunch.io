<footer data-rootpath="<?= $rootPath ?>">
    <div class="first">
        <div class="first-wrapper">
            <a href="<?= $rootPath ?>" class="logo-container">
                <img src="<?= $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <hr>
            <address>
                <strong>Miami Campus</strong><br>
                7757 W Flagler St #220,<br>
                Miami, FL 33144 <br>
                <br>
                <strong>Miramar Campus</strong><br>
                3520 Enterprise Way,<br>
                Miramar, FL  33025<br>
                <br>
                <small>Florida Vocational Institute of Miramar is an Extension Campus of Florida Vocational Institute, Miami</small>
                <br><br>
                Email: <a target="_blank" rel="noopener" href="mailto:info@techlaunch.io">info@techlaunch.io</a><br>
                Phone: <a href="tel:3057833599">(305) 783-3599</a>
                <br> <br>
                <small>TechLaunch is registered DBA of Florida Vocational Institute</small>
            </address>
        </div>
    </div>
    <div class="second">
        <h3 class="heading">Useful Links</h3>
        <ul>
            <li>
                <a target="_blank" rel="noopener" href="https://www.techlaunch.io/blog">
                    Blog
                </a>
            </li>
            <li>
                <a href="<?= $rootPath ?>student-disclosures/">
                    Student Disclosures
                </a>
            </li>
            <li>
                <a target="_blank" rel="noopener" href="https://fvi.edu/catalog/fvi_catalog.pdf">Catalog</a>
            </li>
            <li>
                <a target="_blank" rel="noopener" href="http://www.fvi.edu/calculator/npcalc.htm">
                    Net Price Calculator
                </a>
            </li>
            <li>
                <a target="_blank" rel="noopener" href="<?= $rootPath ?>privacy-policy/">
                    Privacy Policy
                </a>
            </li>
            <li>
                <a target="_blank" rel="noopener" href="<?= $rootPath ?>sitemap.php">
                    Sitemap
                </a>
            </li>
        </ul>
        <div class="social-media">
            <a target="_blank" rel="noopener" href="https://www.facebook.com/Techlaunchio">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a target="_blank" rel="noopener" href="https://twitter.com/@Techlaunchio">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a target="_blank" rel="noopener" href="https://www.linkedin.com/company/techlaunch/">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a target="_blank" rel="noopener" href="https://www.instagram.com/techlaunchmiami/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a target="_blank" rel="noopener" href="https://www.youtube.com/channel/UCGJcXuVSkHrNSzXsM_lBZ4w">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div class="third">
        <h3 class="heading">Our Latest Tweets</h3>
        <div class="tweets-list">
            <a class="tweet" target="_blank" rel="noopener" href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <div class="text-container">
                    <p class="text">FVI is hiring instructors! Do you know #javascript and live in #miami? Join the team! #miamitech</p>
                    <p class="date">Jan 22 2017</p>
                </div>
            </a>
            <a class="tweet" target="_blank" rel="noopener" href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <div class="text-container">
                    <p class="text">RT @ForbesTech: How Companies Like Facebook Use Benefits To Build Millennial Traps: http://forbes.com/16has8</p>
                    <p class="date">Feb 15 2017</p>
                </div>
            </a>
            <a class="tweet" target="_blank" rel="noopener" href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <div class="text-container">
                    <p class="text">10 Web Design &amp; UX Trends for 2017 That Can Boost Conversions</p>
                    <p class="date">May 04 2017</p>
                </div>
            </a>
        </div>
    </div>

    <style>
    .blog_title {
        margin-bottom: 16px;
    }
	.blog_title > a {
		color: #aaa !important;
        font-size: 14px !important;
        font-style: normal !important;
        text-decoration:none;
	}
	.blog_title > p {
        color: #777 !important;
        font-size: 12px !important;
	}
	footer .fourth p {
        margin-bottom: 3px !important;
        margin-top: 4px !important;
    }
	</style>

    <div class="fourth">
        <h3 class="heading">Our Latest Blog Posts</h3>
        <div class="blog-list">
        
        <?php
		error_reporting(1);
		$curl = curl_init();
        curl_setopt_array($curl, Array(
            CURLOPT_URL            => 'https://techlaunch.io/blog/feed/',
            CURLOPT_USERAGENT      => 'spider',
            CURLOPT_TIMEOUT        => 120,
            CURLOPT_CONNECTTIMEOUT => 30,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_ENCODING       => 'UTF-8',
            CURLOPT_SSL_VERIFYPEER => false,
        ));
        $data = curl_exec($curl);
        curl_close($curl);
        $xml = simplexml_load_string(trim($data), 'SimpleXMLElement', LIBXML_NOCDATA);
        ?>

        <?php
        $i=1;
        foreach ($xml->channel->item as $item) {
            if($i==6) {
                break;
            }

            date_default_timezone_set('America/Havana');
            $source = $item->pubDate;
            $date = new DateTime($source);
        ?>

        <div class="blog_title">
            <a target="_blank" href="<?=$item->link?>"><?=$item->title?></a>
            <p class="blog-date"><?= $date->format('D M j  Y')?></p>
        </div>

        <?php
        $i++;
        }
        ?>

        </div>
        <!-- <br>
        
        <h3 class="heading">Newsletter</h3>
        <p>Get updates from Techlaunch</p>
        <form action="" id="newsletter-form">
            <div class="form-input">
                <input type="email" placeholder="Your email">
                <button type="submit"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
            </div>
        </form> -->
    </div>
</footer>
