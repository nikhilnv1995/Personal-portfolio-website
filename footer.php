 <footer>
     <div class="container">
         <ul class="d-block d-sm-flex flex-wrap justify-content-center text-sm-center text-white mb-0 list-inline">
             <li><a href="tel:+918606765147"><img src="assets/img/call-footer.svg" alt="call" class="img-fluid">+91 8606765147</a></li>
             <li><a href="mailto:nikhilnellikkulam92@gmail.com"><img src="assets/img/mail-footer.svg" alt="call" class="img-fluid">nikhilnellikkulam92@gmail.com</a></li>
         </ul>
     </div>
 </footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
 <script src="assets/js/core.js"></script>
 <script src="assets/js/script.js"></script>
 <script type="text/javascript">
     const instance = new Typewriter('#typewriter', {
         strings: ['UI/UX Developer', 'Responsive website for all devices', 'Using HTML, CSS & JAVASCRIPT'],
         autoStart: true,
         loop: true,
     });
 </script>
 <script>
     // swiper element
     const swiperEl = document.querySelector('#mac-swiper');

     // swiper parameters
     const swiperParams = {
         pagination: {
             el: ".swiper-paginationmac",
             type: "fraction",
         },
         navigation: {
             nextEl: ".arrow-next",
             prevEl: ".arrow-prev",
         },
         on: {
             init() {
                 // ...
             },
         },
     };

     // now we need to assign all parameters to Swiper element
     Object.assign(swiperEl, swiperParams);

     // and now initialize it
     swiperEl.initialize();
 </script>
 <script>
     // swiper element
     const swiperEl1 = document.querySelector('#mac-swiper2');

     // swiper parameters
     const swiperParams1 = {
         pagination: {
             el: ".swiper-pagination1",
             clickable: true,
         },
         on: {
             init() {
                 // ...
             },
         },
     };

     // now we need to assign all parameters to Swiper element
     Object.assign(swiperEl1, swiperParams1);

     // and now initialize it
     swiperEl1.initialize();
 </script>
 <script>
     // swiper element
     const swiperEl2 = document.querySelector('#macswiper3');

     // swiper parameters
     const swiperParams2 = {
         pagination: {
             el: ".swiper-pagination2",
             clickable: true,
         },
         on: {
             init() {
                 // ...
             },
         },
     };

     // now we need to assign all parameters to Swiper element
     Object.assign(swiperEl2, swiperParams2);

     // and now initialize it
     swiperEl2.initialize();
 </script>
 <script>
     // swiper element
     const swiperEl3 = document.querySelector('#ipadswiper');

     // swiper parameters
     const swiperParams3 = {
         navigation: {
             nextEl: ".arrow-next3",
             prevEl: ".arrow-prev3",
         },
         on: {
             init() {
                 // ...
             },
         },
     };

     // now we need to assign all parameters to Swiper element
     Object.assign(swiperEl3, swiperParams3);

     // and now initialize it
     swiperEl3.initialize();
 </script>
 <script>
     var swiper3 = new Swiper(".macswiper", {
         // grabCursor: true,
         // effect: "creative",
         // creativeEffect: {
         //     prev: {
         //         shadow: true,
         //         translate: [0, 0, -400],
         //     },
         //     next: {
         //         translate: ["100%", 0, 0],
         //     },
         // },
         slidesPerView: 1,
         spaceBetween: 0,
         // effect: 'flip',
         // speed: 500,
         loop: true,
         pagination: {
             el: ".swiper-pagination",
             type: "fraction",
             clickable: true,
         },
         navigation: {
             nextEl: ".swiper-button-nextt",
             prevEl: ".swiper-button-prevc",
         },
         autoplay: {
             delay: 4000,
             disableOnInteraction: false,
         },
     });
     var swiper4 = new Swiper(".macswiper2", {
         // grabCursor: true,
         // effect: "creative",
         // creativeEffect: {
         //     prev: {
         //         shadow: true,
         //         translate: [0, 0, -400],
         //     },
         //     next: {
         //         translate: ["100%", 0, 0],
         //     },
         // },
         slidesPerView: 1,
         spaceBetween: 0,
         // speed: 500,
         loop: true,
         pagination: {
             el: ".swiper-pagination2",
             clickable: true,
         },
         autoplay: {
             delay: 3500,
             disableOnInteraction: false,
         },
     });
     var swiper5 = new Swiper(".macswiper3", {
         effect: 'fade',
         speed: 500,
         loop: true,
         pagination: {
             el: ".swiper-pagination3",
             clickable: true,
         },
         autoplay: {
             delay: 3500,
             disableOnInteraction: false,
         },
     });
     var swiper6 = new Swiper(".ipadswiper", {
         speed: 500,
         slidesPerView: 1,
         loop: true,
         navigation: {
             nextEl: ".swiper-button-next2",
             prevEl: ".swiper-button-prev2",
         },
         autoplay: {
             delay: 4000,
             disableOnInteraction: false,
         },
     });
 </script>
 </body>

 </html>