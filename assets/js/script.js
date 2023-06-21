$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var widthh = $(window).width();
        if (scroll >= 550 && widthh >= 767) {
            // $(".navbar").css({
            //     "box-shadow": "#8b8b8b45 1px 1px 5px 1px",
            //     "height": "auto",
            //     "transition": "all .3s",
            //     "background": "#fff"
            // });
            // $(".navbar .navbar-nav li.nav-item a.nav-link").css({
            //     "transition": "all .3s",
            //     "color": "#000000"
            // });
            // $(".navbar .navbar-brand").css({
            //     "transition": "all .3s",
            //     "width": "77px"
            // });
            // $(".navbar").removeClass("fixed-top")
            // $(".navbar").css({
            //     "transition": "all .3s",
            //     "height": "0",
            //     "opacity": "0"
            // })
            // $(".social-media .social-media-inner a img.side-logo").css({
            //     "transition": "all .3s",
            //     "transition-delay": "0.1s",
            //     "width": "74",
            //     "opacity": "1"
            // })
        }
        if (scroll <= 550 && widthh >= 767) {
            // $(".navbar").addClass("fixed-top");
            // $(".navbar").css({
            //     "transition": "all .3s",
            //     "height": "144",
            //     "opacity": "1"
            // })
            // $(".social-media .social-media-inner a img.side-logo").css({
            //     "transition": "all .3s",
            //     "transition-delay": "0.1s",
            //     "width": "0",
            //     "opacity": "0"
            // })

            // $(".navbar").css({
            //     "box-shadow": "none",
            //     "height": "auto",
            //     "transition": "all .4s",
            //     "background": "transparent"
            // });
            // $(".navbar .navbar-nav li.nav-item a.nav-link").css({
            //     "transition": "all .3s",
            //     "color": "#ffffff"
            // });
            // $(".navbar .navbar-brand").css({
            //     "transition": "all .3s",
            //     "width": "164px"
            // });
        }
    });
    // $(window).scroll(function () {
    //     var scrolll = $(window).scrollTop();
    //     var widthhh = $(window).width();
    //     if (scrolll >= 50 && widthhh <= 991) {
    //         $(".navbar").css({
    //             "box-shadow": "#8b8b8b45 1px 1px 5px 1px",
    //             "height": "auto",
    //             "transition": "all .3s",
    //             "background": "#fff"
    //         });
    //     }
    //     if (scrolll <= 50 && widthhh <= 991) {
    //         $(".navbar").css({
    //             "box-shadow": "none",
    //             "height": "auto",
    //             "transition": "all .4s",
    //             "background": "transparent"
    //         });
    //     }
    // });
});
