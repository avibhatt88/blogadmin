
 <!-- Footer Section Begin -->
 <footer class="footer">
     <div class="container-fluid">
         <div class="footer__instagram">
             <div class="footer__instagram__avatar">
                 <div class="footer__instagram__avatar--pic">
                     <img src="img/footer/instagram-avatar.jpg" alt="">
                 </div>
                 <div class="footer__instagram__avatar--text">
                     <h5>@ Myblog</h5>
                     <span>23,7k follower</span>
                 </div>
             </div>
             <div class="row">
                 @foreach ($posts as $item)
                     <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                         {{-- <div class="footer__instagram__item set-bg" data-setbg="{{ asset($item->image) }}"></div> --}}
                     </div>
                 @endforeach
             </div>
         </div>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="footer__text">
                     <div class="footer__logo">
                         <a href="{{ route('index') }}"><img src="{{ asset($websettings->logo) }}" alt=""></a>
                     </div>
                     <p>A blog is an informational website published on the World Wide Web consisting of discrete, often
                         informal diary-style text entries.<br> Posts are typically displayed in reverse chronological
                         order so that the most recent post appears first, at the top of the web page.

                     <div class="footer__social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-instagram"></i></a>
                         <a href="#"><i class="fa fa-youtube-play"></i></a>
                         <a href="#"><i class="fa fa-envelope-o"></i></a>
                     </div>
                 </div>
                 <div class="footer__copyright">
                     <p>
                         <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                         Copyright &copy;
                         <script>
                             document.write(new Date().getFullYear());
                         </script> All rights reserved | This Website is made with <i
                             class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                             target="_blank">RAVI BHATT</a>
                         <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- Footer Section End -->

 <!-- Search Begin -->
 <div class="search-model">
     <div class="h-100 d-flex align-items-center justify-content-center">
         <div class="search-close-switch">+</div>
         <form class="search-model-form">
             <input type="text" id="search-input" placeholder="Search here.....">
         </form>
     </div>
 </div>
 <!-- Search End -->

  <!-- Js Plugins -->
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
 </body>
 </html>
