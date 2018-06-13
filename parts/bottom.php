<script>
    window.lazySizesConfig = window.lazySizesConfig || {};
    window.lazySizesConfig.customMedia = {
        '--small': '(max-width: 440px)',
        '--large': '(min-width: 441px)'
    };
</script>

<script src="<?= $rootPath ?>vendor/picturefill.min.js"></script>
<script src="<?= $rootPath ?>vendor/ls.bgset.min.js"></script>
<script src="<?= $rootPath ?>vendor/ls.unveilhooks.min.js"></script>
<script src="<?= $rootPath ?>vendor/lazysizes.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="<?= $rootPath ?>build/js/bundle.js"></script>

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 5766241;
window.__lc.chat_between_groups = false;
 
(function() {
var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();

if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ){
    var LC_API = LC_API || {};
    LC_API.on_message = function(data)
    { 
        if(data.user_type ==  "agent"){      
            LC_API.open_chat_window();
        }
}};
</script>
<!-- End of LiveChat code -->
