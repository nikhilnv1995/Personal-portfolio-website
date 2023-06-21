<footer>
    <a href="" class="to-top d-none d-sm-block"><img src="assets/img/top.png" alt="" class="img-fluid"></a>
    <div class="container">
        <div class="footer-top">
            <div class="footer-logo">
                <a href=""><img src="assets/img/logo.svg" alt=""></a>
            </div>
            <div class="footer-contact">
                <ul class="list-inline contact-list">
                    <li class="list-inline-item">
                        <p>CALL US</p>
                        <a href="">+64 21 231 9631</a>
                    </li>
                    <li class="list-inline-item">
                        <p>EMAIL US</p>
                        <a href="">binurajan@portabote.co.nz​</a>
                    </li>
                </ul>
                <ul class="list-inline social">
                    <li class="list-inline-item"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <ul class="list-inline text-center">
                <li class="list-inline-item"><a href="">Home</a></li>
                <li class="list-inline-item"><a href="">About</a></li>
                <li class="list-inline-item"><a href="">Models</a></li>
                <li class="list-inline-item"><a href="">Accessories</a></li>
                <li class="list-inline-item"><a href="">Contact</a></li>
            </ul>
            <p class="text-center">Copyright © 2020 Portaboat New Zealand</p>
        </div>
    </div>
</footer>
<!-- from submission -->
<script src="assets/js/php-email-form.js"></script>
<!-- form submission -->
<script>
    // AOS.init();
    $(document).ready(function () {
        $('#video-popup').on('hidden.bs.modal', function (e) {
            var $iframes = $(e.target).find('iframe');
            $iframes.each(function (index, iframe) {
                $(iframe).attr('src', $(iframe).attr('src'));
            });
        })


        var btn = $('.to-top');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, '300');
        });
        $("#grid-view").click(function () {
            $(".list-view").css({"display": "none"});
            $(".grid-view").css({"display": "block"});
            $("#grid-view").css({"opacity": "1"});
            $("#list-view").css({"opacity": "0.5"});
        });
        $("#list-view").click(function () {
            $(".list-view").css({"display": "block"});
            $(".grid-view").css({"display": "none"});
            $("#grid-view").css({"opacity": "0.5"});
            $("#list-view").css({"opacity": "1"});
        });
        var owl = $('.loading-slider');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 15,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            autoplaySpeed: 2000,
        });
        var owl = $('.thumb-images');
        owl.owlCarousel({
            items: 3,
            loop: false,
            margin: 15,
            nav: true,
            dots: false,
            autoplay: false,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            autoplaySpeed: 2000,
        });
        $('.thumb').click(function (event) {
            var img = $('.image-view img');
            var alink = $('.image-view a');
            img.attr('src', $(this).attr('data-src'));
            alink.attr('href', $(this).attr('data-src'));
            $(".image-view iframe").removeClass("main-nav");
            $(".image-view .popup-link").removeClass("main-nav");
        });
        $(".support .content-block .plans .plan a.view-detail.premium").click(function () {
            $(".support .content-block .plans .plan a.view-detail.premium").toggleClass("show");
            $(".price-block.premium").toggleClass("show");
        });
        var owl = $('.banner-slider');
        owl.owlCarousel({
            loop: true,
            nav: true,
            // margin: 0,
            dots: false,
            center: false,
            autoplay: false,
            autoplayTimeout: 5500,
            autoplayHoverPause: true,
            autoplaySpeed: 2500,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                },

                1600: {
                    items: 1
                }
            }
        });
        var owl = $('.pdt-slider');
        owl.owlCarousel({
            loop: true,
            nav: true,
            // margin: 0,
            dots: false,
            center: false,
            autoplay: false,
            autoplayTimeout: 5500,
            autoplayHoverPause: true,
            autoplaySpeed: 2500,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                },

                1600: {
                    items: 1
                }
            }
        });
        var owl = $('.review-slider');
        owl.owlCarousel({
            loop: true,
            nav: false,
            // margin: 0,
            dots: true,
            center: false,
            autoplay: false,
            autoplayTimeout: 5500,
            autoplayHoverPause: true,
            autoplaySpeed: 2500,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                },

                1600: {
                    items: 1
                }
            }
        });
        var owl = $('.client-slider');
        owl.owlCarousel({
            loop: true,
            nav: true,
            // margin: 0,
            dots: false,
            center: false,
            autoplay: false,
            autoplayTimeout: 5500,
            autoplayHoverPause: true,
            autoplaySpeed: 2500,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                992: {
                    items: 1.5
                },
                1200: {
                    items: 1.5
                },

                1600: {
                    items: 1.5
                }
            }
        });
        var owl = $('.news-slider');
        owl.owlCarousel({
            loop: true,
            nav: false,
            margin: 30,
            dots: true,
            center: false,
            autoplay: false,
            autoplayTimeout: 5500,
            autoplayHoverPause: true,
            autoplaySpeed: 2500,
            responsive: {
                0: {
                    items: 1,
                    margin: 15
                },
                600: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                },

                1600: {
                    items: 3
                }
            }
        });
        var owl = $('.gallery-slider');
        owl.owlCarousel({
            loop: true,
            nav: true,
            // margin: 30,
            dots: false,
            center: false,
            autoplay: false,
            autoplayTimeout: 5500,
            autoplayHoverPause: true,
            autoplaySpeed: 2500,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 4
                },

                1600: {
                    items: 4
                }
            }
        });
        var owl = $('.accessories-slider');
        owl.owlCarousel({
            loop: true,
            nav: true,
            margin: 30,
            dots: false,
            center: false,
            autoplay: false,
            autoplayTimeout: 5500,
            autoplayHoverPause: true,
            autoplaySpeed: 2500,
            responsive: {
                0: {
                    items: 1.75,
                    margin: 15
                },
                600: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 4
                },

                1600: {
                    items: 4
                }
            }
        });
        // $('.product-slider').on("dragged.owl.carousel", function (e) {
        //     console.log('center item is:' + (e.item.index + 1));
        // });
        var owl = $('.product-slider');
        owl.owlCarousel({
            loop: true,
            nav: true,
            margin: 30,
            dots: false,
            // dotsData: true,
            center: true,
            autoplay: true,
            autoplayTimeout: 5500,
            autoplayHoverPause: true,
            autoplaySpeed: 1250,
            responsive: {
                0: {
                    items: 1.3
                },
                600: {
                    items: 3
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 5
                },

                1600: {
                    items: 5
                }
            }
        });
        $('[data-toggle="tooltip"]').tooltip()
        $(".loading").click(function () {
            loop();
        });

        function loop() {
            $("#boat").animate({left: "73%"}, 80000, function () {
                $("#boat").animate({left: '73%'}, 800000)
            });
        }
    });
</script>
</body>
</html>
