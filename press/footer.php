
        
        <!-- SCRIPTS JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="static/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="static/js/vendor/jquery.easing.1.3.min.js"></script>
        <script src="static/js/vendor/jquery.transit.js"></script>
        <script src="static/js/main.js"></script>
        <?php            
            if( isset( $pageJS ) && !empty( $pageJS ) ){
                if( is_array( $pageJS ) ){
                    foreach ( $pageJS as $key => $js) { ?>
        <script type="text/javascript" src="<?= $BASEURL ?>static/js/<?= $js ?>"></script>
                    <?php }
                } else { ?>
        <script type="text/javascript" src="<?= $BASEURL ?>static/js/<?= $pageJS ?>"></script>
                <?php }
            }
        ?>

        <div id="zoomSlider">
            <div class="bloc">
                <div class="close rollable"></div>
                <div class="title">lkhfdsfsjkhdfs</div>
                <div class="slider">
                    <div class="slide">
                        <div class="visu"></div>
                        <div class="legend">jhl kfdjhjkldsh f</div>
                    </div>
                </div>
                <div class="arrow rollable left"></div>
                <div class="arrow rollable right"></div>
            </div>
        </div>
    </body>
</html>
