@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

<style>
 .calc-img img{
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center ;
  width:100%;
  height:100%;
}

.cal-ifr iframe{
  width: 100%;
  margin-left:20px;
}
@media screen and (min-width:767px) and (max-width:991px) {
  .calc-img img{
    height: 390px;
  }
  .cal-ifr iframe{
    width: 100%;
  }
}
@media screen and (max-width:767px) {
  .calc-img img{
    height: 100%;
  }
  .cal-ifr iframe{
    width: 100%;
  }
}
@media (min-width: 576px) { 
  .cal-ifr iframe{
    width: 100%;
  }
}   
</style>
    <section id="hero-animated" class="hero-animated d-flex align-items-center">

        <div class="container">
            <div class="row"> 
                <div class="col-md-8 col-lg-8 col-12 calc-img">
                    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative">
                        {{-- <img src="{{ asset('fontend/assets/img/quick.png') }}"> --}}
                        <h2>Send Money with <br> <span>Barakah</span> Money <br>Transfer</h2>
                        {{-- <p>Send & Receive money to your loved ones in minutes with great rates and low fees.</p> --}}
                        <div class="d-flex">
                        <a href="https://worldwide.barakahmoneytransfer.com/" class="btn-get-started scrollto">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-12">
                    <iframe src="https://worldwidesvc.co.uk/shacal/indexv2.php?aid=6ca8c12f-2eb9-42cd-a99a-b6378a4d9609" style="border:0px #ffffff none;border-radius:5px;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="430px" width="115%" allowfullscreen></iframe>

                    {{-- 6ca8c12f-2eb9-42cd-a99a-b6378a4d9609 --}}
                  {{-- <iframe src="https://worldwidesvc.co.uk/shacal/indexv2.php?aid=6ca8c12f-2eb9-42cd-a99a-b6378a4d9609" style="border:0px  #ffffff none float:left;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="100%" width="100%" allowfullscreen></iframe>  --}}
                    <div class="text-center">
              <p class="text-black" style="font-size:14px"><strong>Powered By</strong> <img src="fontend/assets/img/barakah/power.png" class="img-fluid" width="200" alt="Worldwide"></p>
            </div>
                </div>
            </div>
        </div>
    
    </section>
    
    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                            <h4><a href="" class="stretched-link">CHECK FOR BEST RATES</a></h4>
                            <p>Transparent on how much the recipient will receive.</p>
                        </div>
                    </div><!-- End Service Item -->
 
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-file-lock2"></i></div>
                            <h4><a href="" class="stretched-link">SAFE & SECURE</a></h4>
                            <p>Security is our priority, identity checks and authentication on every transaction.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-phone-flip icon"></i></div>
                            <h4><a href="" class="stretched-link">FAST TRANSFER</a></h4>
                            <p>Transfer to a Bangladesh bank in a couple of days.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-phone-vibrate icon"></i></div>
                            <h4><a href="" class="stretched-link">PAYOUT NOTIFICATIONS</a></h4>
                            <p>Be kept up-to-date when the recipient collects the transaction.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

     <!--start another feature section-->
        <section class="business_section">
            <div class="container">
                <div class="row g-5 align-items-top">
                    <div class="col-md-4 col-12 ">
                    <img class="d-block m-auto mb-5" src="{{asset('fontend/assets/img/barakah/phone.png')}}" alt=""style="height:330px;object-fit:contain">
                        <h3 style="color:#00a651;">Mobile app</h3>
                        <p class="mt-4 mb-4">We developed a mobile app that will allow you to send money in the comfort of your own home. 
                            </p>
                            <p>
                                The interface is user-friendly which will allow you to navigate the features withease.The goal is to help you execute tasks or enjoy our services remotely and conveniently.</p>
                                <div class="mt-4 d-flex">
                                    <a href="https://play.google.com/store/apps/details?id=com.barakah" target="_blank"><img class="me-3"  src="{{asset('fontend/assets/img/barakah/playstore.png')}}" alt="" style="width:150px;object-fit:contain">
                                    </a>
                                    <a href="https://apps.apple.com/gb/app/barakah-money-transfer/id1556643358" target="_blank"><img class="" src="{{asset('fontend/assets/img/barakah/apple.png')}}" alt=""style="width:150px;object-fit:contain">
                                    </a>
                        </div>
                      
                    </div>
                    <div class="col-md-4 col-12 tex-start ">
                    <img class=" mb-5" src="{{asset('fontend/assets/img/barakah/laptop.png')}}" alt=""style="width:100%;height:330px;object-fit:contain">
                    <h3 class="mb-4" style="color:#00a651;">Website</h3>
                        <p>We created an interactive and dynamic website where you can make transactions locally and internationally.We also customize the website design to cater to your specific needs and requirements.The aim is to fuse aesthetics and functionality in one.</p>
                        
                    </div>
                    <div class="col-md-4 col-12 tex-start ">
                    <img class="mb-5" src="{{asset('fontend/assets/img/barakah/Shop.png')}}" alt=""style="width:100%;height:330px;object-fit:contain">
                    <h3 style="color:#00a651;">Shop</h3>
                        <p class="mb-4 mt-4">Some customers might not be comfortable making the transaction themselves,so we also set up an Agent Portal Shop where we can process the transaction on the customer’s behalf and their beneficiary will receive the payment in real-time.</p>
                        <p>The goal of these 3 platforms – mobile app, website, and Agent Portal Shop is to provide top-rate service and convenience to our customers.</p>
                    </div>
                </div>
    
            </div>
        </section>
        <!-- end of feature section -->
        <!-- ======= Call To Action Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                    <div
                        class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>The Secure, easiest and fastest way to <span style="color:#00a651;">transfer money.</span>
                        </h3>
                        <p> Your dedicated money transfer specialist with
                            thousands of locations across Bangladesh
                            for cash pick-up, Mobile wallet (Bkash) and bank deposit.</p>
                        <a class="cta-btn align-self-start" href="#">Send Money</a>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                        <div class="img">
                            <img src="{{ asset('fontend/assets/img/barakah/money_transfer_2.jpeg') }}" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Call To Action Section -->

    </main><!-- End #main -->

@endsection
