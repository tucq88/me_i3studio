<div id="f">
    <div class="container">
        <div class="row centered">
            <div class="col-md-8 col-md-offset-2">
                <a href="#"><i class="ion-social-twitter"></i></a>
                <a href="#"><i class="ion-social-dribbble"></i></a>
                <a href="#"><i class="ion-social-instagram"></i></a>
                <a href="#"><i class="ion-social-facebook"></i></a>
            </div>
            <!--/col-md-8-->
        </div>
    </div>
    <!--/container-->
</div>
<!--/.F-->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/retina-1.1.0.js"></script>
<script src="assets/js/jquery.hoverdir.js"></script>
<script src="assets/js/jquery.hoverex.min.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/jquery.isotope.min.js"></script>
<script src="assets/js/custom.js"></script>


<script>
    // Portfolio
    (function ($) {
        "use strict";
        var $container = $('.portfolio'),
            $items = $container.find('.portfolio-item'),
            portfolioLayout = 'fitRows';

        if ($container.hasClass('portfolio-centered')) {
            portfolioLayout = 'masonry';
        }

        $container.isotope({
            filter: '*',
            animationEngine: 'best-available',
            layoutMode: portfolioLayout,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            },
            masonry: {}
        }, refreshWaypoints());

        function refreshWaypoints() {
            setTimeout(function () {
            }, 1000);
        }

        $('nav.portfolio-filter ul a').on('click', function () {
            var selector = $(this).attr('data-filter');
            $container.isotope({filter: selector}, refreshWaypoints());
            $('nav.portfolio-filter ul a').removeClass('active');
            $(this).addClass('active');
            return false;
        });

        function getColumnNumber() {
            var winWidth = $(window).width(),
                columnNumber = 1;

            if (winWidth > 1200) {
                columnNumber = 5;
            } else if (winWidth > 950) {
                columnNumber = 4;
            } else if (winWidth > 600) {
                columnNumber = 3;
            } else if (winWidth > 400) {
                columnNumber = 2;
            } else if (winWidth > 250) {
                columnNumber = 1;
            }
            return columnNumber;
        }

        function setColumns() {
            var winWidth = $(window).width(),
                columnNumber = getColumnNumber(),
                itemWidth = Math.floor(winWidth / columnNumber);

            $container.find('.portfolio-item').each(function () {
                $(this).css({
                    width: itemWidth + 'px'
                });
            });
        }

        function setPortfolio() {
            setColumns();
            $container.isotope('reLayout');
        }

        $container.imagesLoaded(function () {
            setPortfolio();
        });

        $(window).on('resize', function () {
            setPortfolio();
        });
    })(jQuery);
</script>
</body>
</html>