  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    @php $contact = App\Models\Contact::get()->first() @endphp

    <div class="footer-content">
      <div class="container">
        <div class="row g-4">

          <div class="col-lg-5 col-md-6 pe-md-5 pe-0">
            <div class="footer-info footer-newsletter">
              <!-- <h3>Razikeen</h3> -->
              <a href="{{ url('/') }}"><img src="{{ asset('fontend/assets/img/barakah/white.png') }}" alt="barakah" class="img-fluid" width="290"></a><br><br>
              <!-- <p style="padding-left:7px">
                {{-- {{ $contact->address }}<br><br>
                <strong>Phone:</strong> <a href="tel:{{ $contact->phone_one }}" style="color: #fff;">{{ $contact->phone_one }}</a><br>
                <strong>Email:</strong> <a href="mailto:{{ $contact->email_one }}" style="color: #fff;">{{ $contact->email_one }}</a><br> --}}
                "BARAKAH MONEY TRANSFER LTD, a company incorporated in England with registered number 07905661 whose registered address is at 131 Whitechapel Road, London, United Kingdom E1 1DT is authorised by the Financial Conduct Authority (“FCA”) under Worldwide west 2 east services limited, trading as WORLDWIDE SERVICES (The Principal), with registered number 07684314 whose address is at 92a Plumstead High Street, London, England, SE18 1SL, FRN 563795, the Payment Services Regulations 2009 (SI 2009 No. 209) (the “Regulations”) for the provision of payment services, with FCA register number 672534 as a PSD agent."
                {{-- Barakah Money Transfer LTD, a company incorporated in England with registered number 07905661 whose registered address is at 131 Whitechapel Road, London, England, E1 1DT  is authorised by the Financial Conduct Authority (“FCA”) under the Payment Services Regulations 2009 for the provision of payment services with FCA register number 672534. --}}
              </p> -->
              <h5>Our Newsletter</h5>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
              <div class="my-5">
                {{-- <p><img src="{{ asset('fontend/assets/img/barakah/payment_method.png') }}" alt="" height="40"></p> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/about/')}}">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/services/')}}">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('terms') }}">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('privacy') }}">Privacy policy</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('cookies') }}">Cookies policy</a></li>

            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Bank Transfer</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Cash Pickup</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Mobile Wallet</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 ">
          <strong style="padding-left: 14%;">Powered By</strong> 

            <div>
              <p><img src="{{ asset('fontend/assets/img/barakah/white-power.png') }}" alt="" class="img-fluid " width="200" alt="Worldwide"></p>
            </div>

          </div>

        </div>
        <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 pe-md-5 pe-5">
                    <p>
BARAKAH MONEY TRANSFER LTD, a company incorporated in England with registered number 07905661 at 131 Whitechapel Road, London, United Kingdom E1 1DT. The Barakah Money Transfer Ltd is registered with FCA as PSD agent, FRN 672534 under Worldwide West 2 East services Limited, trading as WORLDWIDE SERVICES (The Principal). Worldwide Services FRN in FCA register is 563795 with company registration no 07684314 at address, 92A Plumstead High Street London SE18 1SL, United Kingdom.
</p>
                </div>
              </div>

      </div>
    </div>

    <div class="footer-legal text-center">
      <div
        class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Barakah Money Transfer</span></strong>. All Rights Reserved
          </div>
        </div>
        <div>
          <img src="" alt="">
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="{!! $contact->twitter !!}" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
          <a href="{!! $contact->facebook !!}" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="{!! $contact->instagram !!}" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
          <!-- <a href="#" class="google-plus"><i class="bi bi-skype"></i></a> -->
          <a href="{!! $contact->linkedin !!}" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('fontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('fontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('fontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('fontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('fontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('fontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('fontend/assets/js/main.js')}}"></script>

</body>

</html>
