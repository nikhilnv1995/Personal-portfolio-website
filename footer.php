 <footer>
     <div class="container">
         <ul class="d-block d-sm-flex flex-wrap justify-content-center text-sm-center text-white mb-0 list-inline">
             <li><a href="tel:+918606765147"><img src="assets/img/call-footer.svg" alt="call" class="img-fluid">+91 8606765147</a></li>
             <li><a href="mailto:nikhilnellikkulam92@gmail.com"><img src="assets/img/mail-footer.svg" alt="call" class="img-fluid">nikhilnellikkulam92@gmail.com</a></li>
         </ul>
         <ul class="social-media-links list-inline text-center mb-0 mt-2">
             <li class="list-inline-item"><a href="https://www.facebook.com/nikhil.varghese.1654/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
             <li class="list-inline-item"><a href="https://www.linkedin.com/in/nikhil-varghese-278a4a13b/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
             <li class="list-inline-item"><a href="https://www.instagram.com/worldofnikhil/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
             <li class="list-inline-item"><a href="https://wa.me/+918606765147?text=Hi" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
         </ul>
     </div>
 </footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
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
     };

     Object.assign(swiperEl, swiperParams);
     swiperEl.initialize();
 </script>
 </body>

 </html>