<?php $rootPath = '../';
$page = "testimonials";
$meta_title="Graduate Testimonials | Miami & Miramar Coding Bootcamp School";
$meta_key="";
$meta_desc="Techlaunch testimonials. Hear what students say about us.";
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
                <img src="<?= $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
            </a>
            <h1 class="page-title">testimonials</h1>
        </div>
    </section>

    <main class="testimonials-page">
        <?php
            $options = "&";
            $options .= "&rel=0";
            $options .= "&showinfo=0";
            $options .= "&fs=0";
            $options .= "&iv_load_policy=3";
            $options .= "&origin=1";
        ?>
         <section class="testimonials-page testimonial" id="eric-phillips">
         <style>
		 .custom-video-last {
    margin-right: 0 !important;
}.custom-video-1 {
    width: 31%;
    display: inline-block;
    margin-right: 3%;
}
		 </style>
            <div class="container">
            <div class="custom-video-1">
            <iframe class="lazyload" data-src="https://www.youtube.com/embed/umw2N9SerDs?ecver=2<?= $options ?>" frameborder="0"></iframe></div>
            <div class="custom-video-1">
            
            <iframe class="lazyload" data-src="https://www.youtube.com/embed/A09-JyVC41Y?ecver=2<?= $options ?>" frameborder="0"></iframe>
         </div>
            <div class="custom-video-1 custom-video-last">            <iframe class="lazyload" data-src="https://www.youtube.com/embed/iPxOcFpNMBI?ecver=2<?= $options ?>" frameborder="0"></iframe></div>
            </div></section>

        <section class="testimonials-page testimonial" id="eric-phillips">
            <div class="container">
                <img class="image lazyload" data-src="<?= $rootPath ?>images/people/eric_phillips.jpg" src="https://via.placeholder.com/800x752" alt="Eric Phllips, Techlaunch @ FVI Graduate">
                <div class="">
                    <h3 class="author">Eric Phillips</h3>
                    <p class="title" style="margin-bottom: 5px;">Web Developer Graduate</p>
                    <p class="title" style="margin-bottom: 5px;">Employed at Seeed (Miami, FL)</p>
                    <p class="title" style="margin-bottom: 25px;">6 Year US Navy Veteran</p>
                    <h4 class="question">What was your educational background before enrolling at Techlaunch?</h4>
                    <p class="quote">I have a bachelor’s degree, but it was in History, not very useful. Wasn’t working in that area, just had a job.</p>
                    <h4 class="question">Why did you choose to enroll at Techlaunch?</h4>
                    <p class="quote"><span class="teaser-overlay eric"></span>The world runs on code now. The first time I ever thought about it really, I was working for a cable company doing installs. I went to someone’s house for an install and they were working at home. They told me they were creating apps for the Cartoon Network and started talking about how they got into it. They didn’t get a degree or anything, just learned it. I was like, alright! I had just assumed that you had to be like ‘pocket protector’ and 6 years of going to school.</p>
                    
                    <div id="eric-teaser">
                        <script>
                            var showFullInterview = function () {
                                document.getElementById('eric-interview-continued').style.display = 'block';
                                document.getElementById('eric-teaser').style.display = 'none';
                                document.querySelector('.teaser-overlay.eric').style.display = 'none';
                            };
                        </script>
                        <a onClick="showFullInterview()" style="cursor: pointer; font-size: 14px;">Continue reading Eric's interview...</a>
                    </div>

                    <div id="eric-interview-continued" style="display: none;">
                        <h4 class="question">What is your new position?</h4>
                        <p class="quote">It’s with a company called Seeed digital marketing. What I’ve done so far is that people have a website that they need help with, we’ll redesign it for them.</p>
                        <h4 class="question">How did the instructors and courses at Techlaunch prepare you for your new career?</h4>
                        <p class="quote">Great! It was a direct application. I was able to go into the interview and show my skills. In fact the owner of the company mentioned in the interview how much work they had to go and sat me down, showed me what they needed, and sat me down and said here, do it if you can. And I did.</p>
                        <h4 class="question">How did the team at Techlaunch help you find your new job?</h4>
                        <p class="quote">They did prepare me. Techlaunch career services told me about the job, gave me the guys number, I went to the office for the interview and actually got the job that day! I went in for the interview at 10 in the morning and left the office at 5 started working on a website that day.</p>
                        <h4 class="question">Would you recommend Techlaunch to others?</h4>
                        <p class="quote">Yes, absolutely. The instructor themselves are great, even outside of class. When I’ve been working on stuff over the weekend I’ve reached out using Slack. Send them messages and has always gotten replies every time, several times. I got an internship over the Summer through Techlaunch and it looks like this job with SEEED will be full time for a while.</p>
                        <h4 class="question">How would you compare a 9 month program like Techlaunch to a shorter bootcamp program?</h4>
                        <p class="quote">From my experience I can’t imagine doing this stuff in 12 weeks, no. 9 months was just about right, getting more comfortable right at the 9 months.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials-page testimonial" id="lily-cantillo">
            <div class="container">
                <div class="video-container">
                    <iframe class="lazyload" data-src="https://www.youtube.com/embed/sOfvKZQ3Xp4?ecver=2<?= $options ?>" frameborder="0"></iframe>
                </div>
                <div class="">
                    <h3 class="author">Lilianne Cantillo</h3>
                    <p class="title">Web Developer Graduate</p>
                    <p class="quote">"Hello, my name is Lilianne Cantillo, I am from Cuba. Since I moved to United States I have been working in the hospitality business, but this has never been my passion. My passion is in computers, and one day I will become software developer. I did some research and I found TechLaunch. I decided to enroll in the school and since I started there, I have had an amazing experience.  One of the things I love about the school is that classes are small, and anytime that I have a question, the instructors are there to help me. Before I started at TechLaunch I was concerned. I thought that coding was difficult and I didn’t know what to expect. Now I feel that it is easier than everybody thinks. You need to put a little bit of effort and time; but if I can do it, you can do it too. So far it has been a great experience and I am looking forward to finally finding my dream job as a web developer."</p>
                </div>
            </div>
        </section>

        <section class="testimonials-page testimonial" id="peter-vegliante">
            <div class="container">
                <div class="video-container">
                    <iframe class="lazyload" data-src="https://www.youtube.com/embed/GHzKGGoIgMo?ecver=2<?= $options ?>" frameborder="0"></iframe>
                </div>
                <div class="">
                    <h3 class="author">Peter Vegliante</h3>
                    <p class="title">Web Developer Graduate</p>
                    <p class="quote">"Before TechLaunch, I was in the Marine Corps and when I got out of the Marines, I struggled to find a place to work. I jumped from job to job, and I finally started doing Audio/Video for events. Long hours, not lot of pay, and didn’t get to see my family a lot--that's why I decided to enroll at TechLaunch. So far, the experience has been amazing. The instructors have a lot of knowledge, and they are willing to share everything they know. The class size is small, so you get good, one-on-one personal attention with the instructors. They are also available during after hours. At Techlaunch, you get real-world experience--you are making an actual app; you are making a chat application; you are making a simple video game; you are making a web page that can be used by someone out in the real world. It doesn’t seem fake, it is something you can use as soon as you are done with school."</p>
                </div>
            </div>
        </section>

        <section class="testimonials-page testimonial" id="frank-veloz">
            <div class="container">
                <div class="video-container">
                    <iframe class="lazyload" data-src="https://www.youtube.com/embed/TqSNjcM-KrE?ecver=2<?= $options ?>" frameborder="0"></iframe>
                </div>
                <div class="">
                    <h3 class="author">Frank Veloz</h3>
                    <p class="title">Web Developer Graduate</p>
                    <p class="quote">"I graduated from TechLaunch six months ago, now I am working as a web developer at Tango Mango. TechLaunch has changed my life. I was working as a packer when I decided to go to school. After I graduated, I got 3 job offers. When I told my boss that I was leaving to work as a web developer, he didn’t want me to leave. I received a raise, they improved my position, and I created the IT department. When I started at TechLaunch a year ago, I didn’t know anything about coding. The professors gave me a lot of support. They are always there for you, and you can always count on them. The things you will learn at Techlaunch are going to change your life. If you have dedication, you can learn coding and the necessary tools to create and improve your skills. My advice to someone who is interested in learning to code, or likes technology is to visit TechLaunch and the programs they offer. The sooner you start learning how to code, the better future you are going to have."</p>
                </div>
            </div>
        </section>

        <section class="testimonials-page testimonial" id="yasiel-sanchez">
            <div class="container">
                <img class="image lazyload" data-src="<?= $rootPath ?>images/people/yasiel-sanchez-caleo.jpg" src="https://via.placeholder.com/730x613" alt="Yasiel Sanchez Caleo, Techlaunch @ FVI Graduate">
                <div class="">
                    <h3 class="author">Yasiel Sanchez Caleo</h3>
                    <p class="title">Web Developer Student</p>
                    <p class="quote">"I have so much to thank the school and their teachers for, because thanks to them I've graduated as a Web Developer and increased my knowledge greatly. I thought that becoming a programmer was something that was unachievable for me, but thanks to Victor Moreno, Rady Ferrer and Jose, I was able to do so easily. This is why I invite you to join me in turning your dreams into reality at TechLaunch. Thank you TechLaunch for everything, I am so thankful."</p>
                </div>
            </div>
        </section>
    </main>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
