<div id="pop-up-form">
    <div class="pop-up-form-overlay"></div>
    <div class="form-container">
        <h2 class="title">Learn how to get started</h2>
        <i class="close-btn fa fa-times-circle" aria-hidden="true"></i>
        <form class="get-info-form" data-rootpath="<?php echo $rootPath ?>" data-enroll="false">
            <div class="form-input">
                <label>first name</label>
                <input type="text" name="first_name" required>
            </div>
            <div class="form-input">
                <label>last name</label>
                <input type="text" name="last_name" required>
            </div>
            <div class="form-input">
                <label>phone</label>
                <input type="tel" name="phone">
            </div>
            <div class="form-input">
                <label>email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-input">
                <label>zip code</label>
                <input type="number" name="zip">
            </div>
            <input type="text" name="program" value="" hidden>
            <button class="submit-btn" type="submit">get info</button>
            <div class="user-feedback"></div>
        </form>
        <p class="disclosure">By clicking "Get Info", you agree for TechLaunch@FVI to contact you using our autodialer, text, pre-recorded message, via telephone or mobile device (including SMS and MMS) and email, even if your number is currently listed on any state, federal or corporate "Do Not Call list.</p>
    </div>
</div>
