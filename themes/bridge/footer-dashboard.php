 </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        

<?php 

wp_footer(); 

?>


<!-- jQuery  -->
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/js/detect.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/js/fastclick.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/js/waves.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/js/jquery.scrollTo.min.js"></script>
        

        
        <!-- drgula (Drag and drop) js -->
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/dragula/dragula.min.js"></script>

        <!-- Modal-Effect -->
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/custombox/dist/custombox.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/custombox/dist/legacy.min.js"></script>

        <!-- isotope filter plugin -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/isotope/dist/isotope.pkgd.min.js"></script>

        <!-- Magnific popup -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

  		<!--Chartist Chart-->
		<script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/chartist/dist/chartist.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/chartist/dist/chartist-plugin-tooltip.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/pages/jquery.chartist.init.js"></script>


		<!-- Flot chart js -->
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/flot-chart/jquery.flot.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- flot init -->
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/pages/jquery.flot.init.js"></script>

		<!--Morris Chart-->
		<script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/morris/morris.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/raphael/raphael-min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/pages/jquery.morris.init.js"></script>

		<!-- index.html -->
		<!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/jquery-knob/jquery.knob.js"></script>
        <!-- Circliful -->
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
         <!-- Sparkline charts -->
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/pages/jquery.other-charts.js"></script>
        <!-- peity charts -->
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/peity/jquery.peity.min.js"></script>


        <!--Morris Chart-->
		<script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/morris/morris.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/pages/jquery.dashboard.js"></script>
		<!-- index.html -->
         <!-- Chart JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/chart.js/chart.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/pages/jquery.chartjs.init.js"></script>
        <!-- App js -->
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/js/jquery.core.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/Dark/assets/js/jquery.app.js"></script>

        <script type="text/javascript">

            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                });
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });

             dragula([document.querySelector('#drag-upcoming'), document.querySelector('#drag-inprogress'), document.querySelector('#drag-complete')], {
                isContainer: function (el) {
                    return false; // only elements in drake.containers will be taken into account
                },
                moves: function (el, source, handle, sibling) {
                    return true; // elements are always draggable by default
                },
                accepts: function (el, target, source, sibling) {
                    return true; // elements can be dropped in any of the `containers` by default
                },
                invalid: function (el, handle) {
                    return false; // don't prevent any drags from initiating by default
                },
                direction: 'vertical',             // Y axis is considered when determining where an element would be dropped
                copy: false,                       // elements are moved by default, not copied
                copySortSource: false,             // elements in copy-source containers can be reordered
                revertOnSpill: false,              // spilling will put the element back where it was dragged from, if this is true
                removeOnSpill: false,              // spilling will `.remove` the element, if this is true
                mirrorContainer: document.body,    // set the element that gets mirror elements appended
                ignoreInputTextSelection: true     // allows users to select input text, see details below
            });
        </script>
    </body>
</html>


