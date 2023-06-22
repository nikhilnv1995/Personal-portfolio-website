$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var widthh = $(window).width();
    if (scroll >= 50 && widthh >= 767) {
      $(".navbar").css({
        "box-shadow": "#8b8b8b45 1px 1px 5px 1px",
        transition: "all .3s",
        background: "#fff",
      });
      $(".navbar .navbar-brand, .navbar .call-button").css({
        transition: "all .3s",
        color: "#000000",
      });
    }
    if (scroll <= 50 && widthh >= 767) {
      $(".navbar").css({
        "box-shadow": "none",
        transition: "all .3s",
        background: "transparent",
      });
      $(".navbar .navbar-brand,.navbar .call-button").css({
        transition: "all .3s",
        color: "#ffffff",
      });
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
