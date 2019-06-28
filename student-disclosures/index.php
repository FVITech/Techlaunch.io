<?php $rootPath = '../';
$page = "student-disclosures";
$meta_title="Student Disclosures";
$meta_key="";
$meta_desc="Student Disclosures";
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
            <h1 class="page-title">disclosures</h1>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <h2 class="section-title">Consumer Information and Gainful Employment Disclosures</h2>
            <p>Here you will find the campus catalog, tuition and fees, and other various consumer information that is required by federal regulations and in accordance with school policy. The information presented here is to help you make informed decisions about your education.</p>
            <ul class="pdfs">
                <li>
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                    <a target="_blank" rel="noopener" href="https://fvi.edu/catalog/fvi_catalog.pdf">FVI Catalog</a>
                </li>
                <li>
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                    <a target="_blank" rel="noopener" href="<?= $rootPath ?>2015-Annual-Security-Report-FVI.pdf">2015 Annual Security Report &amp; Campus Crime Statistics</a>
                </li>
                <li>
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                    <a target="_blank" rel="noopener" href="<?= $rootPath ?>Health-and-Saftey-Plan.pdf">Health and Safety Plan</a>
                </li>
                <li>
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                    <a target="_blank" rel="noopener" href="<?= $rootPath ?>drug_and_alcohol_policy.pdf">Drug and Alcohol Policy</a>
                </li>
            </ul>
            <p>Florida Vocational Institute is accredited by the Council on Occupational Education (COE), a national accrediting agency recognized by the United States Department of Education and licensed by the Florida Department of Education Commission for Independent Education (CIE).</p>
            <p>It is required by the U.S. Department of Education that Florida Vocational Institute reports and discloses specific information about its school’s programs in a clear, prominent, user-friendly, and easily understood manner. The intent of the requirement is to enable students to make an informed choice about a program of study. To this end, Florida Vocational Institute will provide the following information:</p>
            <ul>
                <li>Occupations by Program</li>
                <li>Retention Rate</li>
                <li>Graduation Rate</li>
                <li>Placement Rate</li>
            </ul>

            <h3 id="occupations">1. Occupatons By Program</h3>
            <p>Florida Vocational Institute offers the following approved tech programs:</p>
            <ul>
                <li><strong>15-1142:</strong> <a rel="noopener" href="http://www.fvi.edu/ge/IT/Gedt.html">Cyber Security and Network Technician</a></li>
                <li><strong>15-1134:</strong> <a rel="noopener" href="http://www.fvi.edu/ge/WEB/Gedt.html">Web Developer</a></li>
            </ul>

            <h3 id="retention-rate">2. Retention Rate</h3>
            <p>Retention rates measure the percentage of first-time students who return to the institution to continue the following fall. The information is reported the U.S. Department of Education via the IPEDS website that is presented on the <a target="_blank" rel="noopener" href="https://nces.ed.gov/collegenavigator/?q=Florida+Vocational+Institute&s=FL&zc=33144&zd=0&of=3&id=476939">College Navigator website</a>.</p>
            <p><em>Who is a first-time student?</em></p>
            <p>A first-time student is someone who has had no prior postsecondary experience before enrolling at Florida Vocational Institute.</p>
            <p>Percentage of students who began their studies in the Fall 2014 and returned in the Fall 2015:</p>
            <ul>
                <li>Full-time students:  n/a</li>
                <li>Part-time students:  91%</li>
            </ul>

            <h3 id="graduation-rate">3. Graduation Rate</h3>
            <p><em>Who is considered a completed student? Who is considered a graduate?</em></p>
            <p>A <strong>“completer”</strong> is a student who is no longer enrolled at Florida Vocational Institute and has either completed the time allowed or has completed the graduation requirements for their medical field program. A completer may also be classified as a <strong>“graduate”</strong> if they meet all of the following criteria:</p>
            <ul>
                <li>Has achieved a GPA of 2.0 or greater at graduation</li>
                <li>Has successfully passed all required courses in the program</li>
                <li>Has satisfied all other requirements for graduation such as payment of tuition</li>
                <li>Has received the appropriate credentials</li>
                <li>Ceased enrollment in the program at the institution</li>
            </ul>
            <p><em>How are graduation rates calculated?</em></p>
            <p>Graduation rates are calculated using the Student Right-to-Know formula in order to comply with U.S. Department of Education requirements. These statistics track all first-time, full-time diploma seeking students who began school during the start date range and reached program completion within the normal time period or normal program length. The graduation rate is the percentage of first-time, full-time students who have completed their program within the normal time period or normal program length.</p>
            <p><strong>*The Institution did not report any first-time full-time undergraduate students in the cohort year; therefore, graduation information was not reported via the IPEDS website.</strong></p>

            <h3 id="placement-rate">4. Placement Rate</h3>
            <p><em>What is the placement rate for graduates of your institution?</em></p>
            <p>Placement rates vary depending on the methods of compiling, calculating, and reporting of data by the regulatory agency or institution. Placement rates are intended to provide information on the number of students who have obtained employment in their field of study after graduation. The rates disclosed below reflect historical outcomes and should not be relied on by anyone as an implicit or explicit representation or promise of future outcomes or employability for any student following completion of a program of study at Florida Vocational Institute. Numerous individual and market factors affect a graduate’s ability to secure employment in his/her field or in a related field after graduation, and the institution has little or no control over many of these factors.</p>
            <p><em>Therefore, Florida Vocational Institute cannot and does not guarantee employment or estimate the likelihood of securing employment upon graduation for any student.</em></p>
           <!-- <p>The graduation and placement program data reported in the institution’s 2016 Annual Report filed with the Council on Occupational Education (COE)  is for the reporting period of  7/1/2015 – 6/30/2016.</p>-->
           <p>The graduation and placement program data reported in the institution's 2018 Annual Report filed with the Council on Occupational Education (COE) is for the reporting period of 7/1/2017 – 6/30/2018.</p>
            <!--<table class="placement-rate">
                <tbody>
                    <tr>
                        <td class="title" colspan="7"><strong>Placement Rate</strong></td>
                    </tr>
                    <tr>
                        <th>Program</th>
                        <th>Credential</th>
                        <th>Total Placed</th>
                        <th>Total Graduates</th>
                        <th>Students Excluded from Placement Rate</th>
                        <th>Total Completion Rate (%)</th>
                        <th>Total Placement Rate (%)</th>
                    </tr>
                    <tr>
                        <th>Web Developer</th>
                        <td>Diploma</td>
                        <td>n/a</td>
                        <td>0</td>
                        <td>0</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <th>Cyber Security and Network Technician</th>
                        <td>Diploma</td>
                        <td>N/A</td>
                        <td>&nbsp;0</td>
                        <td>0</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                </tbody>
            </table>-->
            <table class="placement-rate">
                <tbody>
                    <tr>
                        <td class="title" colspan="7"><strong>Placement Rate</strong></td>
                    </tr>
                    <tr>
                        <th>Program</th>
                        <th>Credential</th>
                        <th>Total Placed</th>
                        <th>Total Graduates</th>
                        <th>Students Excluded from Placement Rate</th>
                        <th>Total Completion Rate (%)</th>
                        <th>Total Placement Rate (%)</th>
                    </tr>
                    <tr>
  <td  style="background-color: #eee;">Home Health Aid</td>
  <td>Diploma</td>
  <td>6</td>
  <td>10</td>
  <td>2</td>
  <td>100%</td>
  <td>75%</td>
</tr>
<tr>
  <td  style="background-color: #eee;">Medical Assistant</td>
  <td>Diploma</td>
  <td>71</td>
  <td>126</td>
  <td>55</td>
  <td>80%</td>
  <td>76%</td>
</tr>
<tr>
  <td  style="background-color: #eee;">Nursing Assistant/Home Health Aide</td>
  <td>Diploma</td>
  <td>23</td>
  <td>46</td>
  <td>12</td>
  <td>92%</td>
  <td>70%</td>
</tr>
<tr>
  <td  style="background-color: #eee;">Patient Care Technician</td>
  <td>Diploma</td>
  <td>68</td>
  <td>106</td>
  <td>38</td>
  <td>80%</td>
  <td>79%</td>
</tr>
<tr>
  <td  style="background-color: #eee;">Pharmacy Technician</td>
  <td>Diploma</td>
  <td>60</td>
  <td>124</td>
  <td>64</td>
  <td>78%</td>
  <td>71%</td>
</tr>
<tr>
  <td  style="background-color: #eee;">Web Developer</td>
  <td>Diploma</td>
  <td>10</td>
  <td>16</td>
  <td>6</td>
  <td>48%</td>
  <td>71%</td>
</tr>
<tr>
  <td  style="background-color: #eee;">Home Health Aide</td>
  <td>Diploma</td>
  <td>50</td>
  <td>96</td>
  <td>46</td>
  <td>93%</td>
  <td>72%</td>
</tr>
<tr>
  <td  style="background-color: #eee;">Nursing Assistant/Home Health Aide</td>
  <td>Diploma</td>
  <td>1</td>
  <td>1</td>
  <td>0</td>
  <td>100%</td>
  <td>100%</td>
</tr>
<tr>
  <td  style="background-color: #eee;">IT Programs (No Grads)</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
                </tbody>
            </table>

            <h3 id="voter-registration">Voter Registration Policy</h3>
            <p><strong>Florida Vocational Institute recognizes September 17th as US Constitution Day.</strong></p>
            <p>The school encourages its students to register to vote. The National Mail Voter Registration Form is available from the U.S. Election assistance commission (EAC) website. U.S. citizens who are students and of voting age, can find information specific to their states of residence from: <a href="www.eac.gov/voterresources">www.eac.gov/voterresources</a> or call the Election Assistance Office at <a href="tel:866-747-1471">866-747-1471</a>.</p>

            <h3 id="senate-bill-524">Senate Bill 524 (Sexually Violent Predators)</h3>
            <p>Effective July 1, 2014</p>
            <p>This legislation requires each licensed institution to inform students and employees at orientation and on its website of the existence of the Florida Department of Law Enforcement (FDLE) sexual predator and sexual offender registry website and toll free telephone number.</p>
            <p><a target="_blank" rel="noopener" href="http://offender.fdle.state.fl.us/offender/homepage.do">FDLE website</a></p>
            <p>FDLE toll-free number:</p>
            <ul>
                <li><a href="tel:1-888-357-7332">1-888-357-7332</a></li>
                <li><a href="tel:1-877-414-7234"></a> for TTY Accessibility</li>
            </ul>

            <h3 id="textbook-listing">Textbook Listing and Costs</h3>
            <ul class="pdfs">
                <li>
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                    <a target="_blank" rel="noopener" href="<?= $rootPath ?>it_programs.pdf">2016 Textbook and Resource List- IT Programs</a>
                </li>
            </ul>

            <p><a target="_blank" rel="noopener" href="http://www.fvi.edu/calculator/npcalc.htm" class="btn" id="net-price-calculator">NET PRICE CALCULATOR <span class="arrow">→</span></a></p>

            <h3 id="gainful-employment-disclosures">Gainful Employment Disclosures</h3>
            <ul>
                <li><a target="_blank" rel="noopener" href="https://techlaunch.io/images/Cyber_Security.docx" download>Cyber Security and Network Technician</a> - Diploma (CIP Code: 11.0901)</li>
                <li><a target="_blank" rel="noopener" href="https://techlaunch.io/images/Web_Developer.docx" download>Web Developer</a> - Diploma (CIP Code: 11.0201)</li>
            </ul>
        </div>
    </section>

    <?php $rootPath = '../'; include('../parts/footer.php') ?>
    <?php $rootPath = '../'; include('../parts/bottom.php') ?>

</body>
</html>
