<?php $rootPath = '../';
$page = "testimonials";
$meta_title="Graduate Testimonials | Miami & Miramar Coding Bootcamp School";
$meta_key="";
$meta_desc="FVI School of Technology testimonials. Hear what students say about us.";
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
        <section class="testimonials-page testimonial" id="lily-cantillo" style="clear: both;">
            <div class="container">
                <div class="video-container">
                    <iframe class="lazyload" data-src="https://www.youtube.com/embed/OYNA0GC4tm0?ecver=2<?= $options ?>" frameborder="0"></iframe>
                </div>
                <div class="">
                    <h3 class="author">Peter Lewis </h3>
                    <p class="title">Cyber Security Network Technician Student</p>
                    <p class="quote">My name is Peter Luis. I have a Haitian background. Before Tech Launch, I was really just job hopping from place to place. I was always interested in computers and then my friend recommended this school to me and ever since, it's been the best decision I've ever made. The experience shere that I've had has been pheno menal from the instructors to the faculty everyone being so friendly. The hands-on that we do is not cookie cutter and  every moment is worth it. Career Services helped a lot. My resume was awful. Vanessa in Career Services is just top-notch she recommends tips you should do during the interview. Questions you should ask employers and how you should dress.I would say to stay motivated, focused and driven because everyone here is willing to help, you just have to ask.
</p>
                </div>
            </div>
        </section>
        <section class="testimonials-page testimonial" id="lily-cantillo" style="clear: both;">
            <div class="container">
                <div class="video-container">
                    <iframe class="lazyload" data-src="https://www.youtube.com/embed/5xNTByNk0dI?ecver=2<?= $options ?>" frameborder="0"></iframe>
                </div>
                <div class="">
                    <h3 class="author">Kyron Singh</h3>
                    <p class="title">Cyber Security Network Technician Student</p>
                    <p class="quote">This school is awesome! The teachers are amazing. They actually want to teach you. The teachers here actually care. I was trying to go back to school for a while and didn't know what I was wanted to do and I came here. How they structure the classes is pretty nice. You get the certificates here that you need to boost your self up in a career. I've got to get to more certifications one security plus and another one.  I'm still contemplating a career, help desk to start off and then on to something else like junior network administrator. These certifications work for hospitals, police stations and big corporations. You've got Comcast, hotels, condominiums, you name it. if you're going do it, stick to it.  Don't let a failure stop you from achieving what you can in the future.  
 </p>
                </div>
            </div>
        </section>
        <!---->
        <section class="testimonials-page testimonial" id="lily-cantillo" style="clear: both;">
            <div class="container">
                <div class="video-container">
                    <iframe class="lazyload" data-src="https://www.youtube.com/embed/iPxOcFpNMBI?ecver=2<?= $options ?>" frameborder="0"></iframe>
                </div>
                <div class="">
                    <h3 class="author">Katherine Barrera</h3>
                    <p class="title">Cyber Security Network Technician Student</p>
                    <p class="quote">Before my journey with FVI School of Technology I was in the logistics industry.  I was an ocean import and export coordinator.  It was a lot of paperwork, a regular office job. I chose to enroll because they focus on the certifications.  It's a great opportunity to graduate knowing that I'll have an extensive background.  My experience with FVI School of Technology has been great.  I've been learning about routers and switches, doing spanning tree calls. This is a very high demand industry that keep on Growing.  My favorite thing about FVI School of Technology is the hands-on lab.  I get to play with routers and switches.  I get to connect them, I get to work with the command-prompt. We are now learning about hacking.  Tech is an industry where you keep learning every day and it's a great career because its very high demand and the pay is great in the end. I would definitely recommend FVI School of Technology if you love learning new things and everything that has to do with computers, technology, programming, code, whatever it is, this is the place for you especially women.  </p>
                </div>
            </div>
        </section>
         <section class="testimonials-page testimonial" id="lily-cantillo">
            <div class="container">
                <div class="video-container">
                    <iframe class="lazyload" data-src="https://www.youtube.com/embed/A09-JyVC41Y?ecver=2<?= $options ?>" frameborder="0"></iframe>
                </div>
                <div class="">
                    <h3 class="author">Rocky Webman</h3>
                    <p class="title">Cyber Security Network Technician Graduate</p>
                    <p class="quote">During my school search I came across Florida vacation Institute Miramar campus the nine-month accelerated certification program for cyber security network technician. It seemed right up my alley and was everything I wanted to better my knowledge as well as it's was a really great learning experience.  When you're here, you have fun. I had great instructors and a great group of students that I'm with. It's just a great time. If we can do it, so can you!</p>
                </div>
            </div>
        </section>

        <!--<section class="testimonials-page testimonial" id="eric-phillips">
            <div class="container">
                <img class="image lazyload" data-src="<?= $rootPath ?>images/people/eric_phillips.jpg" src="https://via.placeholder.com/800x752" alt="Eric Phllips, FVI School of Technology">
                <div class="">
                    <h3 class="author">Eric Phillips</h3>
                    <p class="title" style="margin-bottom: 5px;">Web Developer Graduate</p>
                    <p class="title" style="margin-bottom: 5px;">Employed at Seeed (Miami, FL)</p>
                    <p class="title" style="margin-bottom: 25px;">6 Year US Navy Veteran</p>
                    <h4 class="question">What was your educational background before enrolling at FVI School of Technology?</h4>
                    <p class="quote">I have a bachelor’s degree, but it was in History, not very useful. Wasn’t working in that area, just had a job.</p>
                    <h4 class="question">Why did you choose to enroll at FVI School of Technology?</h4>
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
                        <h4 class="question">How did the instructors and courses at FVI School of Technology prepare you for your new career?</h4>
                        <p class="quote">Great! It was a direct application. I was able to go into the interview and show my skills. In fact the owner of the company mentioned in the interview how much work they had to go and sat me down, showed me what they needed, and sat me down and said here, do it if you can. And I did.</p>
                        <h4 class="question">How did the team at FVI School of Technology help you find your new job?</h4>
                        <p class="quote">They did prepare me. FVI School of Technology career services told me about the job, gave me the guys number, I went to the office for the interview and actually got the job that day! I went in for the interview at 10 in the morning and left the office at 5 started working on a website that day.</p>
                        <h4 class="question">Would you recommend FVI School of Technology to others?</h4>
                        <p class="quote">Yes, absolutely. The instructor themselves are great, even outside of class. When I’ve been working on stuff over the weekend I’ve reached out using Slack. Send them messages and has always gotten replies every time, several times. I got an internship over the Summer through FVI School of Technology and it looks like this job with SEEED will be full time for a while.</p>
                        <h4 class="question">How would you compare a 9 month program like FVI School of Technology to a shorter bootcamp program?</h4>
                        <p class="quote">From my experience I can’t imagine doing this stuff in 12 weeks, no. 9 months was just about right, getting more comfortable right at the 9 months.</p>
                    </div>
                </div>
            </div>
        </section>-->

        <section class="testimonials-page testimonial" id="lily-cantillo">
            <div class="container">
                <div class="video-container">
                    <iframe class="lazyload" data-src="https://www.youtube.com/embed/sOfvKZQ3Xp4?ecver=2<?= $options ?>" frameborder="0"></iframe>
                </div>
                <div class="">
                    <h3 class="author">Lilianne Cantillo</h3>
                    <p class="title">Web Developer Graduate</p>
                    <p class="quote">"Hello, my name is Lilianne Cantillo, I am from Cuba. Since I moved to United States I have been working in the hospitality business, but this has never been my passion. My passion is in computers, and one day I will become software developer. I did some research and I found FVI School of Technology. I decided to enroll in the school and since I started there, I have had an amazing experience.  One of the things I love about the school is that classes are small, and anytime that I have a question, the instructors are there to help me. Before I started at FVI School of Technology I was concerned. I thought that coding was difficult and I didn’t know what to expect. Now I feel that it is easier than everybody thinks. You need to put a little bit of effort and time; but if I can do it, you can do it too. So far it has been a great experience and I am looking forward to finally finding my dream job as a web developer."</p>
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
                    <p class="quote">"Before FVI School of Technology, I was in the Marine Corps and when I got out of the Marines, I struggled to find a place to work. I jumped from job to job, and I finally started doing Audio/Video for events. Long hours, not lot of pay, and didn’t get to see my family a lot--that's why I decided to enroll at FVI School of Technology. So far, the experience has been amazing. The instructors have a lot of knowledge, and they are willing to share everything they know. The class size is small, so you get good, one-on-one personal attention with the instructors. They are also available during after hours. At FVI School of Technology, you get real-world experience--you are making an actual app; you are making a chat application; you are making a simple video game; you are making a web page that can be used by someone out in the real world. It doesn’t seem fake, it is something you can use as soon as you are done with school."</p>
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
                    <p class="quote">"I graduated from FVI School of Technology six months ago, now I am working as a web developer at Tango Mango. FVI School of Technology has changed my life. I was working as a packer when I decided to go to school. After I graduated, I got 3 job offers. When I told my boss that I was leaving to work as a web developer, he didn’t want me to leave. I received a raise, they improved my position, and I created the IT department. When I started at FVI School of Technology a year ago, I didn’t know anything about coding. The professors gave me a lot of support. They are always there for you, and you can always count on them. The things you will learn at FVI School of Technology are going to change your life. If you have dedication, you can learn coding and the necessary tools to create and improve your skills. My advice to someone who is interested in learning to code, or likes technology is to visit FVI School of Technology and the programs they offer. The sooner you start learning how to code, the better future you are going to have."</p>
                </div>
            </div>
        </section>

        <section class="testimonials-page testimonial" id="yasiel-sanchez">
            <div class="container">
                <img class="image lazyload" data-src="<?= $rootPath ?>images/people/yasiel-sanchez-caleo.jpg" src="https://via.placeholder.com/730x613" alt="Yasiel Sanchez Caleo, FVI School of Technology">
                <div class="">
                    <h3 class="author">Yasiel Sanchez Caleo</h3>
                    <p class="title">Web Developer Student</p>
                    <p class="quote">"I have so much to thank the school and their teachers for, because thanks to them I've graduated as a Web Developer and increased my knowledge greatly. I thought that becoming a programmer was something that was unachievable for me, but thanks to Victor Moreno, Rady Ferrer and Jose, I was able to do so easily. This is why I invite you to join me in turning your dreams into reality at FVI School of Technology. Thank you FVI School of Technology for everything, I am so thankful."</p>
                </div>
            </div>
        </section>
    </main>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
