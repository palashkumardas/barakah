@extends('master')
@section('content')
@section('title','Cookies')
  <main id="main" style="margin-top: 80px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
    <h1 class="mt-5"><center>Cookies Policy</center></h1>
   <!-- Privacy policy Details -->
 <p>{!! $cookies->description !!}</p>

    </div><!--end col-->
    </div> <!--end row-->
    </div><!--end container-->
    </main><!-- End #main -->

@endsection