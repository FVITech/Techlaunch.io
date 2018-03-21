<div class="get-info-form <?= $classes ?>">
    <div class="get-info-form-overlay"></div>
    <div class="form-container">
        <h2 class="title">Learn how to get started</h2>
        <?php
          $url = '';
          $escaped_url = 'unknown';
          if (isset($_SERVER['HTTP_HOST'])){
            $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
          }
          $form_action = "https://secure.velocify.com/Import.aspx?Provider=FloridaVocationalInstitute&Client=30010&XmlResponse=True&CampaignId=1093&URL=https://www.techlaunch.io/thank-you&referrerpage=" . $escaped_url;
          
          $campus = '';
          if ( isset($_GET['location'])){
            $campus = $_GET['location'];
          }
          
          if (!isset($origin)){
            //this is just hardening the script, since $origin is set in navbar.php
            $origin = "no-origin";
            if (isset($_GET['origin'])){
              $origin = $_GET['origin'];
            }
            if (isset($_SESSION) && isset($_SESSION['origin'])){
              $origin = $_SESSION['origin'];
            }
          }

          if ($origin == 'bing'){
            $form_action = "https://secure.velocify.com/Import.aspx?Provider=YahooBingPPC&Client=30010&CampaignId=1065&URL=https://www.techlaunch.io/thank-you&referrerpage=" . $escaped_url;
          }
          elseif ($origin == 'es-bing'){
            $form_action = "https://secure.velocify.com/Import.aspx?Provider=YahooBingPPCSpanish&Client=30010&CampaignId=1083&URL=https://www.techlaunch.io/thank-you&referrerpage=" . $escaped_url;
          }
          elseif ($origin == 'facebook'){
            $form_action = "https://secure.velocify.com/Import.aspx?Provider=FacebookAds&Client=30010&CampaignId=1059&URL=https://www.techlaunch.io/thank-you&referrerpage=" . $escaped_url;
          }
          elseif ($origin == 'coursereport'){
            $form_action = "https://secure.velocify.com/Import.aspx?Provider=CourseReport&Client=30010&CampaignId=1102&URL=https://www.techlaunch.io/thank-you&referrerpage=" . $escaped_url;
          }
          elseif ($origin == 'google'){
            $form_action = "https://secure.velocify.com/Import.aspx?Provider=ExploreFVI&Client=30010&CampaignId=1101&URL=https://www.techlaunch.io/thank-you&referrerpage=" . $escaped_url;
          }
        ?>
        <i class="close-btn fa fa-times-circle" aria-hidden="true"></i>
        <form method="POST" action="<?= $form_action; ?>">
            <div class="form-input">
                <label>Preferred Location</label>
                <select name="campus" id="campus">
                    <option value="Miami" <?php if ($campus == 'miami' || $campus == '') echo 'selected' ?>>Miami</option>
                    <option value="Miramar" <?php if( $campus == 'miramar') echo 'selected' ?>>Miramar</option>
                </select>
            </div>
            <div class="form-input">
                <label>Program of Interest</label>
                <select name="program_name" id="program_name">
                    <option value="--" disabled <?php if (!isset($program) || $program == '') echo 'selected' ?>>-- Select --</option>
                    <option value="Web Developer" <?php if(isset($program) && $program == 'web-developer') echo 'selected' ?>>Web Developer</option>
                    <option value="Cyber Security Network Technician" <?php if(isset($program) && $program == 'cyber-security') echo 'selected' ?>>Cyber Security Network Technician</option>
                    <option value="Web Design and Digital Marketing" <?php if(isset($program) && $program == 'web-design-and-digital-marketing') echo 'selected' ?>>Web Design and Digital Marketing</option>
                    <option value="aws" <?php if(isset($program) && $program == 'aws') echo 'selected' ?>>Amazon Web Services</option>
                    <!-- <option value="wordpress" <?php if(isset($program) && $program == 'wordpress') echo 'selected' ?>>WordPress</option> -->
                </select>
                <input type="hidden" name="program_id" id="legacy_program" value="<?php if(isset($program)) echo $program ?>" />
            </div>
            <div class="form-input split-2">
                <div class="split-box">
                    <label>first name</label>
                    <input type="text" name="first_name" required>
                </div>
                <div class="split-box">
                    <label>last name</label>
                    <input type="text" name="last_name" required>
                </div>
            </div>
            <div class="form-input split-2">
                <div class="split-box">
                    <label>phone</label>
                    <input type="tel" name="day_phone" required>
                </div>
                <div class="split-box">
                    <label>zip code</label>
                    <input type="number" name="zipcode">
                </div>
            </div>
            <div class="form-input">
                <label>email</label>
                <input type="email" name="email" required>
            </div>
            <button class="submit-btn" type="submit">get info</button>
            <div class="user-feedback"></div>
        </form>
        <p class="disclosure">By clicking "Get Info", you agree for TechLaunch@FVI to contact you using our autodialer, text, pre-recorded message, via telephone or mobile device (including SMS and MMS) and email, even if your number is currently listed on any state, federal or corporate "Do Not Call list".</p>
    </div>
</div>


<script>
    document.getElementById("program_name").onchange = function(){
        document.getElementById("legacy_program").value = document.getElementById("program_name").value;
    }
</script>
