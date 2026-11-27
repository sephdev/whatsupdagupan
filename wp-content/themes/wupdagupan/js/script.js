(function($) {

    var init = function() {
        var navbarFixed = $('nav.navbar.fixed-top');
        if(navbarFixed.length) {
            navbarFixed = navbarFixed.first();
            var ptval = navbarFixed.first().outerHeight() + 'px';
            $('body').css('padding-top', ptval);
        }
    };

    /**
     * Push navbar fixed-top
     * with a value based on
     * wpadminbar's outer height.
     */
    var wpadminbar = function() {
        var view = 'desktop';

        pushNavbar();

        $(window).on('load resize', function() {
            var currentView = 'desktop';

            if ( matchMedia( 'only screen and (max-width: 768px)' ).matches ) {
                currentView = 'mobile';
            }

            if ( currentView !== view ) {
                view = currentView;
                pushNavbar();
            }
        });

        function pushNavbar() {
            var $wpadminbar = $('#wpadminbar');
            if(!$wpadminbar.length) return;
            var topValue = $wpadminbar.outerHeight();
            $('.navbar.fixed-top').css('top', topValue);
        }
    }

    $(function() {
        init();
        wpadminbar();
    });

})(jQuery);
