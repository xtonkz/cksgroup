<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>{{$title}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- dataTables:css -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- icon -->
    <link rel="shortcut icon" href="images/company_logo/favicon.png" />
  </head>
  <body>

    
    <div class="container-scroller">
        <!-- partial:partials/sidebar -->
        @include('member.partials.sidebar')
        <!------------------------------>
        <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_navbar -->
                @include('member.partials.navbar')
                <!------------------------------>
                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield('content')
                    </div>
                </div> <!-- main-panel ends -->           
        </div> <!-- page-body-wrapper ends -->     
    </div> <!-- container-scroller -->


    <!--route for js file-->
    {{-- <input type="hidden" id="data_user" url="{{route('getDataTableDataUser')}}" /> --}}
    {{-- <input type="hidden" id="data_afi" url="{{route('getDataTableDataAfi')}}" />
    <input type="hidden" id="data_pstnk" url="{{route('getDataTableDataPstnk')}}" />
    <input type="hidden" id="data_mstnk" url="{{route('getDataTableDataMstnk')}}" />
    <input type="hidden" id="data_stnkjadi" url="{{route('getDataTableDataStnkjadi')}}" />
    <input type="hidden" id="data_invoice" url="{{route('getDataTableDataInvoice')}}" /> --}}
   
    @stack('scripts')
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    {{-- <script src="assets/js/todolist.js"></script> --}}
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/get-table.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>