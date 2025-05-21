(function ($) {
    "use strict";

    // $(window).on("load", function () {
    //     $('.site-wrap').addClass('fixed-top');
    //     // 隱藏 Loading 效果
    //     setTimeout(function () {
    //         $("#loading").fadeOut("slow");
    //     }, 350);

    // });

    $(function () {
        // 當頁面加載完成後，將 id="main" 的區域自動滾動到可視範圍內
        $("html, body").animate(
            {
                scrollTop: $("#main").offset().top - $('.site-navbar').height(),
                //
            },
            1000
        ); // 1000 毫秒（1 秒）滾動到該區域

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

        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $(".site-navbar").addClass("scrolled");
            } else {
                $(".site-navbar").removeClass("scrolled");
            }
        });

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
