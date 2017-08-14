<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title> Techlaunch </title>

  <!-- vendor css -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css" />

  <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.default.min.css" />
  <link rel="stylesheet" href="vendor/jquery/jquery-ui.min.css" />
  <link rel="stylesheet" href="vendor/easyTabs/easy-responsive-tabs.css" />


  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

  <!-- own css -->
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/media.css" />


  <?php
      $origin = "no-origin";
      $phone = "786-574-9511";
      $newaction = "https://secure.velocify.com/Import.aspx?Provider=ExploreFVI&Client=30010&CampaignId=1033&Url=http://www.fvi.edu/web_development/thanks.php";
      //http://www.fvi.edu/medical_assistant/?origin=gmail
      if(isset($_GET['origin'])){
        $origin = $_GET['origin'];//gmail
      }
  ?>



  <?php
    if($origin=='google'){?>
      <!--Origin - Google-->
      <script type="text/javascript">
        var google_replace_number="786-574-9511";
        (function(a,e,c,f,g,b,d){var h={ak:"939988187",cl:"a4GcCIWJ-WAQ26mcwAM"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[f]||(a[f]=h.ak);b=e.createElement(g);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(g)[0];d.parentNode.insertBefore(b,d);a._googWcmGet=function(b,d,e){a[c](2,b,h,d,null,new Date,e)}})(window,document,"_googWcmImpl","_googWcmAk","script");
      </script>
    <?php }elseif($origin=='bing') {
              echo "<!--Origin - Bing-->";
              $phone = '786-574-2599';
              $newaction = "https://secure.velocify.com/Import.aspx?Provider=YahooBingPPC&Client=30010&CampaignId=1065&Url=http://www.fvi.edu/web_development/thanks.php";
          }elseif($origin=='es-bing') {
              echo "<!--Origin - Bing Spanish-->";
              $phone = '305-615-6348';
              $newaction = "https://secure.velocify.com/Import.aspx?Provider=YahooBingPPCSpanish&Client=30010&CampaignId=1083&Url=http://www.fvi.edu/web_development/thanks.php";
          }elseif($origin=='facebook') {
              echo "<!--Origin - Facebook-->";
              $phone = '786-574-6626';
              $newaction = "https://secure.velocify.com/Import.aspx?Provider=FacebookAds&Client=30010&CampaignId=1059&Url=http://www.fvi.edu/web_development/thanks.php";
          }elseif($origin=='es-google') {?>
            <!--Origin - Google Spanish-->

            <script type="text/javascript">
              var google_replace_number="305-851-5511";
              (function(a,e,c,f,g,b,d){var h={ak:"939988187",cl:"a4GcCIWJ-WAQ26mcwAM"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[f]||(a[f]=h.ak);b=e.createElement(g);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(g)[0];d.parentNode.insertBefore(b,d);a._googWcmGet=function(b,d,e){a[c](2,b,h,d,null,new Date,e)}})(window,document,"_googWcmImpl","_googWcmAk","script");
            </script>
          <?php }
    ?>



</head>
<body>

   <!-- Google Tag Manager -->
   <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TF9598"
   height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
   new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
   j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
   '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
   })(window,document,'script','dataLayer','GTM-TF9598');</script>
   <!-- End Google Tag Manager -->


<header id="header" class="header-wrapper white-bg-color">
  <div class="container">
    <div class="header-content-wrapper">
      <div class="logo-wrapper">
        <a href="http://sites.spiderboost.com/techlaunch.io/landing/">
          <img src="images/logo.png" class="img-responsive" alt="">
        </a>
      </div>

      <div class="text-wrapper">
        <p>For immediate assistance call us at</p>
      </div>

      <div class="phone-wrapper blue-bg-color">
        <p> <a href="tel:<?php echo $phone;?>" class="white-text"><span class="hidden-xs"><?php echo $phone;?></span> <span><i class="fa fa-phone hidden-sm hidden-md hidden-lg" aria-label="call"></i></span></a> </p>
      </div>
    </div><!-- /.header-content-wrapper -->
  </div><!-- /.container -->
</header><!-- /#header -->


<div class="overall-wrapper-1">
 <div class="overall-wrapper-2">

<!-- content here -->
<div id="home-page">


  <!-- HERO -->
  <section id="hero">
    <div class="hero-wrapper">
      <img src="images/hero.jpg" class="img-responsive" alt="">

      <div class="hero-overlay">
        <div class="content">
          <h1 class="white-text">Web Developer Bootcamp</h1>
          <h3 class="white-text">Join one of the fastest-growing professions on the planet</h3>
          <a href="#enroll-anchor" class="green-bg-color">Apply Now</a>
        </div>
      </div>
    </div>
  </section><!-- /#hero -->



  <!-- STATICS -->
  <section id="statics" class="blue-bg-color">
    <div class="statics-wrapper">

      <div class="container">
        <div class="row">

          <div class="col-xs-12 col-sm-4">
            <div class="statics-block first-block text-center">
              <p class="statics-number white-text bold-text">$<span id="statics-salary">0</span></p>
              <p class="statics-description white-text light-text">Median Salary</p>
            </div><!-- /.statics-block -->
          </div>


          <div class="col-xs-12 col-sm-4">
            <div class="statics-block text-center">
              <p class="statics-number white-text bold-text"><span id="statics-job">0</span></p>
              <p class="statics-description white-text light-text">Job Openings</p>
            </div><!-- /.statics-block -->
          </div>


          <div class="col-xs-12 col-sm-4">
            <div class="statics-block last-block text-center">
              <p class="statics-number white-text bold-text"><span id="statics-annual">27</span>%</p>
              <p class="statics-description white-text light-text">Annual Growth</p>
            </div><!-- /.statics-block -->
          </div>


          <div class="col-xs-12 text-center">
            <p class="source-text white-text light-text">† Source: BLS.gov</p>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->


    </div>
  </section><!-- #statics -->



  <!-- EXPECT -->
  <section id="expect" class="white-bg-color text-center">
      <h2 class="blue-text">What can I expect from the Web Developer Program</h2>
      <div class="container model-container">
        <div class="expect-wrapper">

          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-6 content-column">
              <div class="expect-content">
                <img src="images/expect.jpg" alt="" class="img-responsive">
                <p class="text-left">Web Application development careers are in high demand. According to the U.S. Department of Labor the job market for software developers is forecasted to grow much faster than the average for other occupations. The fast growth in web applications and mobile computing combined with the increasing use of software continues to create strong demand for software developers. Florida Vocational Institute offers a program in web application development that is designed for someone with no programing experience to learn how to develop websites and web based applications in less than 10 months.</p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-7 col-md-6 form-column">
              <div class="enroll-form-wrapper blue-bg-color">

                <div class="container-fluid" id="enroll-anchor">
                  <div class="row">
                    <div class="col-xs-12 title-column">
                      <h2 class="white-text text-center">Enroll Now</h2>
                      <p class="white-text text-center enroll-description">If you’ll like more information about this course please fill the form below and a recruiting specialist will get in touch with you promptly.</p>
                    </div>

                    <form id="contact_form" action="<?php echo $newaction;?>" method="POST">
                        <input type="hidden" value="Web Developer" name="program_id">
                      <div class="col-xs-12 col-md-6 controls-column">
                        <div class="control-group text-left">
                           <label for="name">Name</label>
                           <input id="name" class="input form-control" name="first_name" type="text" value="" placeholder="Name" required/>
                        </div>
                      </div>

                      <div class="col-xs-12 col-md-6 controls-column">
                        <div class="control-group text-left">
                           <label for="lname">Last Name</label>
                           <input id="lname" class="input form-control" name="last_name" type="text" value="" placeholder="Last Name" required/>
                        </div>
                      </div>

                      <div class="col-xs-12 col-md-6 controls-column">
                        <div class="control-group text-left">
                           <label for="phone">Phone</label>
                           <input id="phone" class="input form-control" name="day_phone" type="number" value="" placeholder="Phone" required/>
                        </div>
                      </div>

                      <div class="col-xs-12 col-md-6 controls-column">
                        <div class="control-group text-left">
                           <label for="email">Email</label>
                           <input id="email" class="input form-control" name="email" type="text" value="" placeholder="Email" required/>
                        </div>
                      </div>


                      <div class="col-xs-12">
                        <button type="submit" name="btnSubmit" id="btn-submit">Submit Application</button>
                      </div>

                    </form>


                    <div class="col-xs-12 text-center">
                      <p class="white-text form-final-note">If you'll like more information about this course please fill the form below and a recruiting specialist will contact you shortly.</p>
                    </div>
                  </div>
                </div>

              </div><!-- /.enroll-form-wrapper -->
            </div>

          </div><!-- /.row -->
        </div><!-- /.expect-wrapper -->

        <div class="row expect-stats-row">
          <div class="col-sm-2 hidden-xs">
            <div class="expect-logo-wrapper">
              <img src="images/ExpectIcon.png" class="img-responsive" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-9 col-sm-offset-1">
            <div class="expect-stats blue-bg-color text-left">
              <p class="white-text light-text">The Bureau of Labor Statistics expects web development careers to grow at 20% between 2012 and 2022. FVI maintains strong working relationships with top companies in the area so we can match your passion and ability to career opportunities.</p>
              <div class="box-arrow blue-bg-color hidden-xs"></div>
            </div>
          </div>
        </div>
      </div><!-- /.container -->
  </section><!-- /#expect -->



  <!-- LEARN -->
  <section id="learn">
    <img src="images/learnHero.jpg" class="img-responsive learnHero hidden-xs" alt="">

    <div class="hero-overlay">
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="learn-title">
                <h2 class="white-text bold-tex text-center">What you will learn in the Web Developer Program</h2>
              </div>

              <div id="learnTabs">
               <ul class="resp-tabs-list resp-tabs-links vert">
                 <li>
                   <div class="tab-link-wrapper">
                     <img src="images/icons/html5.png" class="img-responsive" alt="">
                   </div>
                 </li>

                 <li>
                   <div class="tab-link-wrapper">
                     <img src="images/icons/js.png" class="img-responsive" alt="">
                   </div>
                 </li>

                 <li>
                   <div class="tab-link-wrapper">
                     <img src="images/icons/php-1.png" class="img-responsive" alt="">
                   </div>
                 </li>

                 <li>
                   <div class="tab-link-wrapper">
                     <img src="images/icons/js-1.png" class="img-responsive" alt="">
                   </div>
                 </li>

                 <li>
                   <div class="tab-link-wrapper">
                     <img src="images/icons/react-1.png" class="img-responsive" alt="">
                   </div>
                 </li>
               </ul>

               <div class="resp-tabs-container vert">
                 <div class="tab-content-wrapper">
                   <!-- <h5 class="blue-text light-text"> -->
                      <p>With HTML &amp; CSS, you will be able to build the frontend of almost everything that you see on the web. They are the most common and important languages on the web as both basic websites to complex systems, like Google and Facebook, use HTML and CSS. Although you cannot build an entire program with them alone, what you see on the web is made up of HTML &amp; CSS.</p>
                 </div>

                 <div class="tab-content-wrapper">
                   <!-- <h5 class="blue-text light-text"> -->
                      <p>Javascript is one of the three core technologies needed for web development and is currently the most popular language in the world. With Javascript, you will be able to take an ordinary website to extra ordinary by adding interactive features that bring life to the web that you see. You will also be able to build games, mobile apps and more with this incredibly diverse language.</p>
                 </div>

                 <div class="tab-content-wrapper">
                   <!-- <h5 class="blue-text light-text"> -->
                      <p>With PHP, you can build numerous different systems including E-Commerce stores and content management systems. This is a widely-used open source language that allows you to manipulate data, databases, forms and other server-side scripts and is used in the most popular platforms like Magento and Wordpress.</p>
                 </div>

                 <div class="tab-content-wrapper">
                   <!-- <h5 class="blue-text light-text"> -->
                      <p>With Node.js, you will be able to build a wide variety of projects ranging from chat applications to creating a remote control for a car to even creating your own  drawing tools application. Part of the Javascript family, this language is in high demand as companies like PayPal, LinkedIn, Uber and Netflix all heavily use Node.js.</p>
                 </div>

                 <div class="tab-content-wrapper">
                   <!-- <h5 class="blue-text light-text"> -->
                      <p>As one of the many frameworks of Javascript, many of the new social media platforms like Facebook and Instagram, both of them are built with React.js. Another language in the Javascript family, this language continues to be in high demand as Javascript continues to be the most widely used language in the world.</p>
                 </div>
               </div><!-- /.resp-tabs-container -->
             </div><!-- /#learnTabs -->
           </div><!-- /.col -->

           <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
             <div class="learn-colophon blue-bg-color">
               <p class="white-text light-text">Each major step of the program will include a project where you put your learning into action and enrich your personal portfolio.</p>
               <div class="top-box-arrow blue-bg-color hidden-xs"></div>
             </div>
           </div><!-- /.col -->
         </div><!-- /.row -->
       </div><!-- /.container -->
     </div><!-- /.content -->
   </div><!-- /.hero-overlay -->
  </section><!-- /#learn -->


  <!-- CARRER -->
  <section id="career" class="white-bg-color">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="career-title text-center">
            <h2 class="blue-text">Career Outlook</h2>
          </div>
        </div>

        <div class="col-xs-12 col-sm-3">
          <div class="photo-wrapper">
            <img src="images/careerPhoto.png" class="img-responsive" alt="">
          </div>
        </div>

        <div class="col-xs-12 col-sm-9">
          <div class="content-wrapper">
            <i class="fa fa-quote-left blue-text"></i>
            <p class="career-quote">"I'm grateful to FVI and all professors like Victor Moreno and Randy Ferrer for providing me with the skills and abilities that helped open the doors to a world full of new opportunities. Coding literally changed my life and has become a powerful tool to grow and improve my life in several aspects. Excellence, knowledge, respect, dedication are the things you'll find every step of the learning process."</p>
            <p class="signature blue-text light-text">— Frank Veloz, <i>Web Developer at Tango Mango</i>.</p>
          </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /#career -->


  <!-- GRADUATE -->
  <section id="graduate" class="blue-bg-color">
    <div class="container-fluid graduate-container">
      <div class="row">

        <div class="col-md-6 col-md-push-6 graduate-container-col">
          <div class="image-wrapper">
            <img src="images/graduatedPhoto.jpg" class="img-responsive hidden-xs hidden-sm hidden-md" alt="">
            <img src="images/graduatedPhotoMd.jpg" class="img-responsive hidden-xs hidden-sm hidden-lg" alt="">
            <img src="images/graduatedPhotoMobile.jpg" class="img-responsive hidden-md hidden-lg" alt="">
          </div>
        </div>

        <div class="col-xs-12 col-md-6 col-md-pull-6 graduate-container-col">
          <div class="content-wrapper">
            <div class="content-wrapper-inner">
              <h2 class="white-text light-text">What kind of job can I get as a graduate?</h2>
              <p class="white-text graduate-text first-graduate-text">The Web Developer Program from Techlaunch will prepare graduates to develop practical skills and knowledge needed for career opportunities in areas involving sotware design and development, systems analysis, programming, process design and management, and other areas related to computer software production and deployment. The fast growth in web and mobile development, combined with the increasing use of software, continues to create strong demand for software developers.</p>
              <p class="white-text graduate-text">Techlaunch maintains strong working relationships with top companies in the area so we can match your passion and ability to career opportunities.</p>

              <div class="note-text-wrapper">
                <span class="white-text">*</span>
                <p class="white-text note-text">Florida Vocational Institute cannot promise or guarantee job placement or a specific salary for its students or gradutes.</p>
              </div>
            </div>
          </div>
        </div>

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section><!-- /#graduate -->


  <!-- FEDERAL AID -->
  <section id="federal-aid">
    <img src="images/fedaid.jpg" class="img-responsive hidden-xs hidden-sm hidden-md" alt="">
    <img src="images/fedaidMd.jpg" class="img-responsive hidden-xs hidden-sm hidden-lg" alt="">

    <div class="hero-overlay">
      <div class="container federal-aid-container">
        <div class="row">
          <div class="col-xs-12 col-md-6 col-md-offset-6">
            <div class="content-wrapper">
              <div class="content-text">
                <h2 class="blue-text light-text">Federal Financial Aid Available</h2>
                <p><strong>Florida Vocational Institute strives on making quality education more affordable.</strong> With grants, easy payments and other ways to manage tuition costs, investing in your future can be more affordable than you think. Few, if any Coding Boot Camps or Web Developer Schools can offer the amount of options we can offer in terms of financing.</p>
              </div><!-- /.content-text -->

              <div class="fedaid-form">
                <div class="container-fluid">
                  <div class="row">

                    <form id="contact_form" action="<?php echo $newaction;?>" method="POST">
                       <input type="hidden" value="Financial" name="program_id">
                      <div class="col-xs-12 col-sm-6">
                        <div class="control-group text-left">
                           <label for="name">Name</label>
                           <input id="name" class="input form-control" name="first_name" type="text" value="" placeholder="Name" required/>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-6">
                        <div class="control-group text-left">
                           <label for="email">Email</label>
                           <input id="email" class="input form-control" name="email" type="text" value="" placeholder="Email" required/>
                        </div>
                      </div>

                      <div class="col-xs-12">
                        <button type="submit" name="btnFaaSubmit" id="btn-faaSubmit">See if you qualify</button>
                      </div>
                    </form>

                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div><!-- /.fedaid-form -->
            </div><!-- /.content-wrapper -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.hero-overlay -->
  </section><!-- /#federal-aid -->



  <!-- BOOTCAMP -->
  <section id="bootcamp" class="white-bg-color">
    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-md-6 col-md-push-6">
          <div class="image-wrapper">
            <img src="images/bootcamp.jpg" class="img-responsive" alt="">
          </div>
        </div>

        <div class="col-xs-12 col-md-6 col-md-pull-6 col-content-text">
          <div class="content-text">
            <h2 class="blue-text light-text">A Coding Boot Camp for the Everyone</h2>
            <p class="bootcamp-text">Our Computer Programming Courses are designed with busy adults in mind. Few other Web Developer Schools offer the length and breadth of material that we do, and even fewer Coding Schools tailor their curriculum to busy professionals who cannot devote 50 hours a week and don't want to learn challenging new material in only two months.</p>
            <p class="bootcamp-text">We are a Computer Programming School devoted to creating Application Developers with sound Computer Science skills. Our curriculum is designed to be completed in a tough, but doable time frame of nine months by anyone willing to invest 20 hours a week.</p>
          </div>
        </div>

      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.bootcamp -->


</div><!-- /#home-page -->


</div><!-- /.overall-wrapper-2 -->
</div><!-- /.overall-wrapper-1 -->


<footer id="footer" class="colophon-wrapper" role="contentinfo">

  <!-- WIDGETS -->
  <section id="widgets">
    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-md-4 widget-col first-widget">
          <div class="widget-col-wrapper">
            <h2 class="light-text">Our Campus</h2>

            <p class="white-text bold-text campus-title">Florida Vocational Institute</p>
            <p class="white-text">Ph: <?php echo $phone;?></p>
            <p class="white-text">Mall of Americas</p>
            <p class="white-text">7757 West Flagler Street #220 Miami, FL 33144</p>
            <p class="white-text campus-address"><a target="_blank" href="https://www.google.com/maps/place/7757+West+Flagler+Street+#220+,Miami,+FL,+33144" class="white-text get-directions"><i class="fa fa-map-marker" aria-hidden="true"></i> Get Campus Directions</a></p>

            <div class="circle first-circle hidden-xs hidden-sm"></div>
          </div><!--/.widget-col-wrapper -->
        </div>

        <div class="col-xs-12 col-md-4 widget-col mid-widget">
          <div class="widget-col-wrapper">
            <h2 class="light-text">Admissions</h2>

            <p class="white-text"><span class="bold-text">So now that you are ready</span> to take that first step to changing your life, come meet with one of our admissions representatives and enroll today! Our admissions process is simple and easy to get you started on the path of success</p>
            <a href="#enroll-anchor" class="green-bg-color green-button">Apply Now</a>

            <div class="circle second-circle hidden-xs hidden-sm"></div>
          </div><!--/.widget-col-wrapper -->
        </div>

        <div class="col-xs-12 col-md-4 widget-col last-widget">
          <div class="widget-col-wrapper">
            <h2 class="light-text">Financial Aid</h2>

            <p class="white-text"><span class="bold-text">Florida Vocational Institute strives</span> in making quality education more affordable. With grants, easy payments and other ways to manage tuition costs, investing in your future can be more affordable than you think.</p>
            <a href="#federal-aid" class="green-bg-color green-button">See if you qualify</a>
          </div><!--/.widget-col-wrapper -->
        </div>

      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /#widgets -->



  <!-- COLOPHON -->
  <div id="colophon">
    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-md-6">
          <div class="colophon-wrapper">
            <a href="index.php"><img src="images/footerLogo.png" class="img-responsive footer-logo-image" alt=""></a>
            <p class="white-text">Mall of Americas - 7757 West Flagler Street #220 Miami, FL 33144</p>
            <p class="white-text rights-note">All rights reserved FVI Florida Vocational Institute Ⓒ 2010 - 2017</p>
            <a href="https://techlaunch.io/privacy-policy/" target="_blank" class="white-text privacy-policy-link">Privacy Policy</a>
          </div>
        </div>


        <!-- <div class="col-xs-12 col-md-4">
          <div class="colophon-wrapper">
            <h2 class="white-text news-title">Newsletter</h2>
            <p class="white-text">Subscribe to our email list and get exclusive product updates & offers!</p>

            <form action="index.html" method="post">
              <div class="subscribe-form">
                <input type="text" name="newsEmail" id="news-email" placeholder="Enter your email">
                <button type="submit" name="newsSubmit" id="news-submit"><i class="fa fa-arrow-right"></i></button>
              </div>
            </form>

            <a href="#" class="white-text privacy-policy-link">Privacy Policy</a>
          </div>
        </div> -->


        <div class="col-xs-12 col-md-6">
          <div class="colophon-wrapper">
            <h2 class="white-text news-title">Follow Us</h2>
            <p class="white-text">Follow us in your favorite social medias!</p>

            <div class="social-links">
              <a href="https://www.facebook.com/FloridaVocationalInstitute"><i class="white-text fa fa-facebook-square"></i></a>
              <a href="https://twitter.com/intent/follow?source=followbutton&variant=1.0&screen_name=FVIMiami"><i class="white-text fa fa-twitter-square"></i></a>
              <a href="https://plus.google.com/117711427768218226264/about"><i class="white-text fa fa-google-plus-square"></i></a>
              <a href="https://www.linkedin.com/company/florida-vocational-institute"><i class="white-text fa fa-linkedin-square"></i></a>
              <a href="http://www.fvi.edu/en/blog"><i class="white-text fa fa-rss-square"></i></a>
            </div>

            <p class="white-text">Designed & Developed by Spiderboost</p>
          </div>
        </div>

      </div><!-- /.row -->
    </div><!-- /.col -->
  </div><!-- /.colophon -->

</footer>


<!-- vendor js -->
<script src="vendor/jquery/jquery.min.js" charset="utf-8"></script>
<script src="vendor/jquery/jquery-ui.min.js" charset="utf-8"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
<script src="vendor/owl-carousel/owl.carousel.js" charset="utf-8"></script>
<script src="vendor/animateNumber/jquery.animateNumber.min.js" charset="utf-8"></script>
<script src="vendor/easyTabs/easyResponsiveTabs.js" charset="utf-8"></script>

<!-- own js -->
<script src="js/front-screen.js" charset="utf-8"></script>
<script src="js/custom-behavior.js" async="async" defer="defer" charset="utf-8"></script>
</body>
</html>
