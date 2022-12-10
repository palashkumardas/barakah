<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 12:38:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('fontend/assets/img/barakah/Fav-icon.png')}}">
    <title>Barakah Money Transfer || Admin Dashboard</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{asset('backend/assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="{{asset('backend/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <!-- <link href="{{asset('backend/dist/css/pages/icon-page.css')}}" rel="stylesheet"> -->
    <link href="{{asset('backend/dist/css/pages/dashboard1.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/toastr.min.css') }}">
    <link href="{{asset('backend/assets/node_modules/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .required{
            color: red;
            font-weight: 600;
        }
    </style>
    @stack('css')
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Barakah Money Transfer</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('backend.include.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('backend.include.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Barakah Money Transfer</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item active">Barakah Money Transfer</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                @yield('content')
                <!-- ============================================================== -->
                <!-- End PAge Content -->
               
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            &copy; <?php echo date('Y') ?> Barakah Money Transfer
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('backend/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- <script src="{{asset('backend/assets/node_modules/morrisjs/morris.min.js')}}"></script> -->
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{asset('backend/assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{asset('backend/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('backend/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('backend/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('backend/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('backend/dist/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <!-- <script src="{{asset('backend/assets/node_modules/raphael/raphael-min.js')}}"></script> -->
    <!-- <script src="{{asset('backend/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script> -->
    <!-- Popup message jquery -->
    <!-- <script src="{{asset('backend/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script> -->
    <script src="{{asset('backend/assets/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>
    <!-- select2 -->
    <script src="{{asset('backend/assets/node_modules/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/assets/node_modules/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <!-- Chart JS -->
    <!-- <script src="{{asset('backend/dist/js/dashboard1.js')}}"></script> -->

    <script src="{{ asset('backend/assets/sweetalert2.all.js') }}"></script>
    <!-- toastr -->
    <script src="{{ asset('backend/assets/toastr.min.js') }}"></script>
    {{-- {!! Toastr::message() !!} --}}

      <script>
          @if($errors->any())
              @foreach($errors->all() as $error)
                  toastr.error('{{ $error }}','Error',{
                      closeButton:true,
                      progressBar:true,

                  });
              @endforeach
          @endif
      </script>

      <script type="text/javascript">
          function deleteCertification(id){
            const swalWithBootstrapButtons = Swal.mixin({
              confirmButtonClass: 'btn btn-success',
              cancelButtonClass: 'btn btn-danger',
              buttonsStyling: false,
            })

            swalWithBootstrapButtons({
              // title: @lang('cmn.number'),
              title: "Are you sure ?",
              text: 'you want to delete this !',
              type: 'warning',
              showCancelButton: true,
              confirmButtonText: "Yes Delete",
              cancelButtonText: "No, Cancel",
              reverseButtons: true
            }).then((result) => {
              if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
              } else if (
                // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.cancel
              ) {
                // swalWithBootstrapButtons()
              }
            })
        }
    </script>
      </script>
    @stack('js')
</body>


</html>