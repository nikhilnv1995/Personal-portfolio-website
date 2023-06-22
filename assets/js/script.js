$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var widthh = $(window).width();
    if (scroll >= 50 && widthh >= 150) {
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
    if (scroll <= 50 && widthh >= 150) {
      $(".navbar").css({
        "box-shadow": "none",
        transition: "all .3s",
        background: "rgba(0, 0, 0, 0.5)",
      });
      $(".navbar .navbar-brand,.navbar .call-button").css({
        transition: "all .3s",
        color: "#ffffff",
      });
    }
  });
});
