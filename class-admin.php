<?php
//configs
define("PLUGIN_NAME","WP Fart");
define("PLUGIN_TAGLINE","Someone had to do it");
define("PLUGIN_PAGE_URL","http://www.shanejones.co.uk/wordpress-plugins/wp-fart-just-for-fun-100/");




add_action('admin_init', 'sdj_admin_template_init' );

function sdj_admin_template_init(){
	register_setting( 'sdj_admin_template_options', 'sdj_admin_template' );
}
 	
add_action('admin_menu', 'show_sdj_admin_template_options');

function show_sdj_admin_template_options() {
	add_options_page('WP Fart', 'WP Fart', 'manage_options', 'sdj_admin_template', 'sdj_admin_template_options');
}


// ADMIN PAGE
function sdj_admin_template_options() {
?>
    <link href="../wp-content/plugins/wp-fart/admin.css" rel="stylesheet" type="text/css">
    <div class="sdj_admin_wrap">
        <div class="sdj_admin_top">
            <h1><?php echo PLUGIN_NAME?> <small> - <?php echo PLUGIN_TAGLINE?></small></h1>
        </div>

        <div class="sdj_admin_main_wrap">
            <div class="sdj_admin_main_left">
                <div class="sdj_admin_signup">
                    Want to know about updates to this plugin without having to log into your site every time? Want to know about other cool plugins we've made? Add your email and we'll add you to our very rare mail outs.

                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                    <form action="http://latestnewsticker.us2.list-manage.com/subscribe/post?u=20ee43e7ba838878374172f82&amp;id=ed4b38bd9a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address
                    </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"><button type="submit" name="subscribe" id="mc-embedded-subscribe" class="sdj_admin_green">Sign Up!</button>
                    </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>	<div class="clear"></div>
                    </form>
                    </div>

                    <!--End mc_embed_signup-->
                </div>

                <p>To celebrate the Onion's awesome Fart plugin, we've knocked together a WordPress plugin so you can install it on your blog (or on a friends as a joke :D ).</p>


                <h2>THERE ARE NO OPTIONS FOR THIS PLUGIN.</h2>




            </div>
            <div class="sdj_admin_main_right">
                <div class="sdj_admin_logo">



                </div>

                <div class="sdj_admin_box">
                    <h2>About the Author</h2>
                    <p>Shane Jones is a Facebook App developer and Wordpress developer who specialises in PHP based web apps.</p>

                    <?php
                    $default = "http://reviews.evanscycles.com/static/0924-en_gb/noAvatar.gif";
                    $size = 50;
                    $shane_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( "shane@peadig.com" ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
                    ?>

                    <p class="sdj_admin_clear"><img class="sdj_admin_fl" src="<?php echo $shane_url; ?>" alt=Shane Jones"" /> <strong>Shane Jones</strong><br><a href="https://twitter.com/shanejones" class="twitter-follow-button" data-show-count="false">Follow @shanejones</a></p>

                </div>

                <div class="sdj_admin_box">
                    <h2>Like this Plugin?</h2>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=181590835206577";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-like" data-href="<?php echo PLUGIN_URL?>" data-send="true" data-layout="button_count" data-width="250" data-show-faces="true"></div>
                    <br>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo PLUGIN_URL?>" data-text="<?php echo PLUGIN_NAME?> - <?php echo PLUGIN_TAGLINE?><" data-via="shanejones">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    <br>
                    <div class="g-plusone" data-size="medium" data-href="<?php echo PLUGIN_URL?>"></div>
                    <script type="text/javascript">
                      window.___gcfg = {lang: 'en-GB'};

                      (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                      })();
                    </script>
                    <br>
                    <su:badge layout="3" location="<?php echo PLUGIN_URL?>"></su:badge>
                    <script type="text/javascript">
                      (function() {
                        var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true;
                        li.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//platform.stumbleupon.com/1/widgets.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s);
                      })();
                    </script>



                </div>

            </div>
        </div>
    </div>

<?php
}
?>