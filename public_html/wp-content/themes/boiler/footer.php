    <?php wp_footer(); ?>
</div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php dynamic_sidebar( 'footer-content' ); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <?php wp_nav_menu( array('theme_location' => 'footer_menu', 'menu_class' => 'nav navbar-nav', 'depth'=> 1, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
                </div>
            </div>
        </div>
    </footer>
    <nav id="right-nav" class="navmenu navmenu-default navmenu-fixed-right offcanvas" role="navigation">
        <div class="main-nav">
            <a href="javascript:" class="close-offcanvas-navbar">
                <span>Close</span>
                <i class="fa fa-lg fa-times pull-right"></i>
            </a>
            <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_class' => 'nav navbar-nav', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
            <?php wp_nav_menu( array('theme_location' => 'secondary_menu', 'menu_class' => 'nav navbar-nav secondary-menu', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
        </div>
    </nav>



<div id="outdated" class="outdated-browser-container">
    <div class="outdated-browser-inner">
        <h6>Hmmm. It looks like your browser is out of date.</h6>
        <p>An out of date browser can make navigating and using our site difficult
            and may mean that some functions aren’t available to you. It also
            represents a security risk. To get the best experience from our
            site you should update your browser to the latest version.</p>
        <p>Updating is quick and easy. To find out how to update your browser
            all you need to do is click on the following link:
            <a href="http://outdatedbrowser.com/" target="_blank">outdatedbrowser.com</a>.
            If you have any queries please call 00000 000 0000.</p>
        <a href="javascript:" id="close-outdated" class="close" title="Ignore this warning"><i class="fa fa-close"></i></a>
    </div>
</div>

<script async src="<?php echo esc_url( get_template_directory_uri() ); ?>/javascript/min/main.min.js"></script>

<?php /*
 // Uncomment if you plan to use YouTube videos
<script>
    var player;

    window.onYouTubeIframeAPIReady = function() {
        initVideos();
    };

    function initVideos() {
        for (var i = 0; i < ytPlayerList.length; i++) {
            var player = ytPlayerList[i];
            var pl = new YT.Player(player.DivId, {
                height: '390',
                width: '100%',
                videoId: player.VideoId
            });
            window[player.Id] = pl;
        }
    }

    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>
<?php
 */ ?>

</body>
</html>