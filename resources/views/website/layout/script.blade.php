
 <script src="//maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>

 <script src="{{ asset('assets/vendors/jquery.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/fastdom/fastdom.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/lity/lity.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/gsap/utils/SplitText.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/flickity/flickity.pkgd.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/gsap/minified/gsap.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/gsap/minified/ScrollTrigger.min.js')}}"></script>
<script src="{{ asset('assets/vendors/gsap/minified/DrawSVGPlugin.min.js')}}"></script>
<script src="{{ asset('assets/vendors/gsap/utils/CustomEase.min.js')}}"></script>
<script src="{{ asset('assets/vendors/draw-shape/liquidDrawShape.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/fontfaceobserver.js')}}"></script>
 <script src="{{ asset('assets/js/liquid-gdpr.min.js')}}"></script>
 <script src="{{ asset('assets/js/theme.min.js')}}"></script>
 <script src="{{ asset('assets/js/liquid-ajax-contact-form.min.js')}}"></script>

 <script src="{{ asset('assets/vendors/isotope/isotope.pkgd.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/isotope/packery-mode.pkgd.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/imagesloaded.pkgd.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/draggabilly.pkgd.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/particles.min.js')}}"></script>
 <script src="{{ asset('assets/vendors/fresco/js/fresco.js')}}"></script>
 <script src="{{ asset('assets/vendors/lottie/lottie.min.js')}}"></script>
 <script src="{{ asset('assets/js/demo/start-hub-4.js')}}"></script>
 <script src="{{ asset('assets/js/LBI/BrandModal.js')}}"></script>

 @include('sweetalert::alert')

 @stack('script')
