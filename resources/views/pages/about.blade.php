@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp



    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2 style="color:#059652;">About Us</h2>
                    <ol>
                        <li><a href="{{url('/')}}" style="color:#36976a;">Home</a></li>
                        <li style="color:#059652;">About Us</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                        <div class="about-img">
                            <img style="height:250px; width:350px;margin-left:10%;" src="{{ asset('fontend/assets/img/barakah/about-us.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7">
                                              {!! $about->description !!}

                        <!-- <h3 class="pt-0 pt-lg-5">Send & Receive money to your loved ones in minutes with great rates and low fees.</h3> -->


                        <!-- Tabs -->

                        <!-- <ul class="nav nav-pills mb-3">--}}
                                                  <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a></li>
                                                  <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a></li>
                                                  <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a></li>
                                                </ul> -->
                        <!-- End Tabs -->


                        <!-- Tab Content -->
                        

                    </div>

                </div>

            </div>
        </section>


    </main><!-- End #main -->

@endsection
