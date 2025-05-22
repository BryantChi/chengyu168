(function ($) {
    "use strict";

    // $(window).on("load", function () {
    //     $('.site-wrap').addClass('fixed-top');
    //     // 隱藏 Loading 效果
    //     setTimeout(function () {
    //         $("#loading").fadeOut("slow");
    //     }, 350);

    // });

    new WOW().init();

    $(function () {
        $('#hero').css({
            marginTop: $(".site-navbar").height(),
        });
        setTimeout(function () {
            var siteNavbar = $(".site-navbar");
            var siteNavbarHeight = siteNavbar.height() || 73.5; // 提供預設值
            console.log("Navbar height after delay:", siteNavbarHeight); // 除錯用

            // 確保 #main 元素存在
            if ($("#main").length && siteNavbar.length) {
                $("html, body").animate(
                    {
                        scrollTop: $("#main").offset().top - siteNavbarHeight,
                    },
                    1000
                );
            }
        }, 500); // 500毫秒延遲

        // Back to top button
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $(".back-to-top").fadeIn("slow");
                // $('.site-navbar').addClass('site-navbar-scroll');
            } else {
                $(".back-to-top").fadeOut("slow");
                // $('.site-navbar').removeClass('site-navbar-scroll');
            }
        });
        $(".back-to-top").click(function () {
            $("html, body").animate({ scrollTop: 0 }, 1500);
            return false;
        });

        // $(window).on("scroll", function () {
        //     if ($(window).scrollTop() > 300) {
        //         $(".site-navbar").addClass("fixed-top");
        //     } else {
        //         $(".site-navbar").removeClass("fixed-top");
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

    function pxToRem(pxValue) {
        // Get the root element's font size (default is usually 16px)
        var rootFontSize = parseFloat(
            getComputedStyle(document.documentElement).fontSize
        );
        // Convert px to rem by dividing by root font size
        return pxValue / rootFontSize;
    }
})(jQuery);
