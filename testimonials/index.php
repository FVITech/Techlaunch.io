<?php $rootPath = '../';
$page = "testimonials";
$meta_title="Testimonials";
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

        <section class="testimonials-page testimonial" id="lily-cantillo">
            <div class="container">
                <div class="video-container">
                    <iframe class="lazyload" data-src="https://www.youtube.com/embed/sOfvKZQ3Xp4?ecver=2<?= $options ?>" frameborder="0"></iframe>
                </div>
                <div class="">
                    <h3 class="author">Lilianne Cantillo</h3>
                    <p class="title">Web Developer Student</p>
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
                    <p class="title">Web Developer Student</p>
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
                    <p class="title">Web Developer Student</p>
                    <p class="quote">"I graduated from TechLaunch six months ago, now I am working as a web developer at Tango Mango. TechLaunch has changed my life. I was working as a packer when I decided to go to school. After I graduated, I got 3 job offers. When I told my boss that I was leaving to work as a web developer, he didn’t want me to leave. I received a raise, they improved my position, and I created the IT department. When I started at TechLaunch a year ago, I didn’t know anything about coding. The professors gave me a lot of support. They are always there for you, and you can always count on them. The things you will learn at Techlaunch are going to change your life. If you have dedication, you can learn coding and the necessary tools to create and improve your skills. My advice to someone who is interested in learning to code, or likes technology is to visit TechLaunch and the programs they offer. The sooner you start learning how to code, the better future you are going to have."</p>
                </div>
            </div>
        </section>

        <section class="testimonials-page testimonial" id="yasiel-sanchez">
            <div class="container">
                <img class="image yasiel lazyload" data-src="<?= $rootPath ?>images/people/yasiel-sanchez-caleo.jpg" alt="Yasiel Sanchez Caleo, Techlaunch @ FVI student">
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
