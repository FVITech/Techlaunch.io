<div id="get-info-form" class="<?php echo $classes ?>">
    <div class="get-info-form-overlay"></div>
    <div class="form-container">
        <h2 class="title">Learn how to get started</h2>
        <div class="steps">
            <span class="step active">Step 1</span>
            <span class="connector"></span>
            <span class="step">Step 2</span>
            <span class="connector"></span>
            <span class="step">Step 3</span>
        </div>
        <i class="close-btn fa fa-times-circle" aria-hidden="true"></i>
        <form data-rootpath="<?php echo $rootPath ?>" data-enroll="false">
            <div class="form-input">
                <label>Program of Interest</label>
                <select name="program">
                    <option value="--" disabled selected>-- Select --</option>
                    <option value="web-developer">Web Developer</option>
                    <option value="cyber-security">Cyber Security Network Technician</option>
                    <option value="aws">Amazon Web Services</option>
                    <option value="wordpress">WordPress</option>
                </select>
            </div>
            <div class="form-input split-2">
                <div class="split-box">
                    <label>first name</label>
                    <input type="text" name="fname" required>
                </div>
                <div class="split-box">
                    <label>last name</label>
                    <input type="text" name="lname" required>
                </div>
            </div>
            <div class="form-input split-2">
                <div class="split-box">
                    <label>phone</label>
                    <input type="tel" name="day_phone">
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