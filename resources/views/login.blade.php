<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Sistem Informasi Management Laboratorium">
    <meta name="author" content="ThemePixels">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo.png')}}">
    <title>HUMIC Engineering Telkom University</title>
    <link href="{{asset('assets/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/dashforge.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashforge.auth.css')}}">
    <style>
        .custom-btn {
          background-color: #B90000;
          color: #ffffff;
        }

        .custom-btn:hover {
          background-color: #ff0000;
        }
      </style>

<body>
    <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/lib/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/lib/jquery.flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('assets/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/lib/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('assets/lib/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/lib/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('assets/lib/sweetalert2/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('assets/lib/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('assets/js/dashforge.js')}}"></script>
    <script src="{{asset('assets/js/dashforge.sampledata.js')}}"></script>
    <!-- append theme customizer -->
    <script src="{{asset('assets/lib/js-cookie/js.cookie.js')}}"></script>

    <div class="content content-fixed content-auth">
        <div class="container">
            <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
                <div class="media-body align-items-center d-none d-lg-flex">
                    <div class="mx-wd-600">
                        <img src="{{asset('assets/img/bg.png')}}" class="img-fluid" alt="">
                    </div>
                </div><!-- media-body -->
                <form class="" method="POST" action="{{ route('survey.index') }}">
                    @csrf
                    <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
                        <div class="wd-100p">
                            <h3 class="tx-color-01 mg-b-5">Dashboard HUMIC Survey</h3>
                            <p class="tx-color-03 tx-16 mg-b-40">Selamat Datang! Harap mengisi alamat email untuk melanjutkan survey.</p>
                            <div class="form-group">
                                <label>Email </label>
                                <input type="email" class="form-control" placeholder="yourname@yourmail.com" name="email">
                            </div>

                            <button type="submit" class="btn btn-brand-02 btn-block custom-btn">Mulai</button>
                        </div>
                    </div><!-- sign-wrapper -->
                </form>
            </div><!-- media -->
        </div><!-- container -->
    </div><!-- content -->
    <footer class="footer">
        <div>
            <span>HUMIC Engineering Telkom University</span>
        </div>
    </footer>

        <script>
        @if($message = session('success'))
        Swal.fire(
            'Good job!',
            '{{ $message }}',
            'success'
        )
        @endif
        @if($message = session('error'))
        Swal.fire(
            'Peringatan!',
            '{{ $message }}',
            'error'
        )
        @endif
        </script>
</body>

</html>
