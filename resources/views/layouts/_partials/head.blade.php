<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>@yield('title')</title>

<!-- Custom fonts for this template-->
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <style>
        .navbar .nav-item .active {
            background-color: red; /* Ganti warna background sesuai yang diinginkan */
            color: white; /* Ganti warna teks sesuai yang diinginkan */
        }
    </style>
      <script>
        $(document).ready(function () {
            $('.nav-item').click(function () {
                $('.nav-item').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>

<!-- Custom styles for this template-->
<link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">