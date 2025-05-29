(function ($) {
    "use strict";

    // $(window).on("load", function () {
    //     $('.site-wrap').addClass('fixed-top');
    //     // 隱藏 Loading 效果
    //     setTimeout(function () {
    //         $("#loading").fadeOut("slow");
    //     }, 350);

    // });

    // new WOW().init();
    $(function () {

        $('.site-mobile-menu').css({
            top: $(".site-navbar").height(),
        })
        setTimeout(function () {
            var siteNavbar = $(".site-navbar");
            var siteNavbarHeight = siteNavbar.height() || 73.5; // 提供預設值
            console.log("Navbar height after delay:", siteNavbarHeight); // 除錯用

            // 確保 #main 元素存在
            if ($("#main").length) {
                $("html, body").animate(
                    {
                        scrollTop: $("#main").offset().top - siteNavbarHeight,
                    },
                    1000
                );
            }
        }, 500); // 500毫秒延遲

        // Back to top button
        $(window).on("scroll", function () {
            if ($(this).scrollTop() > 300) {
                $(".back-to-top").fadeIn("slow");
                // $('.site-navbar').addClass('site-navbar-scroll');

                $('#hero').css({
                    marginTop: $(".site-navbar").height(),
                });
                $('.site-navbar').css({
                    position: 'fixed',
                    top: 0,
                    left: 0,
                    right: 0,
                    zIndex: 1000,
                })
            } else {
                $(".back-to-top").fadeOut("slow");
                // $('.site-navbar').removeClass('site-navbar-scroll');
                $('#hero').css({
                    marginTop: 0,
                });
                $('.site-navbar').css({
                    position: 'relative',
                    top: 0,
                    left: 0,
                    right: 0,
                    zIndex: 1000,
                })
            }
        });
        $(".back-to-top").on("click", function () {
            $("html, body").animate({ scrollTop: 0 }, 1500);
            return false;
        });

        // $(window).on("scroll", function () {
        //     if ($(window).scrollTop() > 300) {
        //         $(".site-navbar2").addClass("fixed-top");
        //     } else {
        //         $(".site-navbar2").removeClass("fixed-top");
        //     }
        // });

        // $(window)
        //     .resize(function () {
        //         $(".ab2-mask").attr(
        //             "style",
        //             "height: calc(" +
        //                 pxToRem($(".hp-ab-s2").height()) +
        //                 "rem - 10rem)"
        //         );
        //     })
        //     .trigger("resize");
    });

    // function pxToRem(pxValue) {
    //     // Get the root element's font size (default is usually 16px)
    //     var rootFontSize = parseFloat(
    //         getComputedStyle(document.documentElement).fontSize
    //     );
    //     // Convert px to rem by dividing by root font size
    //     return pxValue / rootFontSize;
    // }
})(jQuery);
