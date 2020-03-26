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
			<h1 class="page-title">Reskilling Scholarship</h1>
		</div>
	</section>

	<section>
		<div class="container">
			<h2 class="section-title">Workforce Reskilling Scholarship</h2>
			<p>FVI School of Technology will offer qualified applicants a TUITION ONLY scholarship worth up to $15,000 for the Medical Assistant Program and the Cyber Security and Network Technician Program. A maximum of scholarships will be awarded for each of the two programs and for each term start for the Spring and Summer terms</p>
			<p>Applicants must meet the following requirements:</p>
			<ul>
				<li>The applicant must demonstrate that he/she worked in the hospitality, travel and or restaurant business, and his or her employment was terminated or impacted because of the COVID-19 virus.</li>
				<li>The applicant must meet all entrance requirements published in the school catalog</li>
				<li>The applicant must agree to apply for financial aid in the form of a Pell Grant.</li>
				<li>The applicant agrees that any Grant aid will be subrogated by the school.  Any amount awarded will reduce the scholarship aide proportionately.</li>
				<li>The applicant cannot apply for and not participate in federal student loan programs.</li>
				<li>The applicant will forfeit all scholarship awards if the applicant uses any student loan funds during his or her enrollment period</li>
				<li>This scholarship is not transferrable</li>
				<li>This scholarship has no cash value (cannot be converted to cash)</li>
				<li>The scholarship will be applied at the end of each academic term (2 terms).  One half for the first term and the other half at the end of the second term</li>
				<li>The student must remain in academic satisfactory progress and hold at least a 2.0-grade point average at the end of each term.</li>
				<li>The student must abide by the requirements published in the school catalog.</li>
			</ul>
		 </div>
	</section>

	<?php $rootPath = '../'; include('../parts/footer.php') ?>
	<?php $rootPath = '../'; include('../parts/bottom.php') ?>
</body>
</html>
