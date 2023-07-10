@extends('layouts.app')
@section('title', 'SPK SAW | DASBOARD')
@section('css')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@stop
@section('content')


                 <!-- Begin Page Content -->
                 <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <p style="font-size: 18px; line-height: 1.5; text-align: justify;">
                            Sistem Pendukung Keputusan (SPK) karyawan kontrak adalah suatu sistem yang digunakan untuk membantu pengambilan keputusan dalam memilih karyawan kontrak yang paling sesuai dan layak untuk diangkat menjadi karyawan tetap berdasarkan kriteria-kriteria yang telah ditentukan. 
                            Dengan menggunakan metode SAW (Simple Additive Weighting), 
                            SPK ini memberikan perhitungan dan analisis terhadap data karyawan kontrak untuk menghasilkan hasil yang obyektif dan terstruktur.
                        </p>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-primary text-white shadow h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Kriteria</div>
                                            <div class="h5 mb-0 font-weight-bold">5</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-success text-white shadow h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                <a class="text-white" href="{{ route('alternatif.index') }}">Alternatif</a>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold">5</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 mb-4">
                            <div class="card shadow">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Perhitungan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2" style="position: relative; height: 200px;">
                                        <canvas id="myPieChart" style="display: block; width: 100%; height: 100%;"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2" style="color: #4e73df;">
                                            <i class="fas fa-circle" style="color: #4e73df;"></i> Kriteria
                                        </span>
                                        <span class="mr-2" style="color: #1cc88a;">
                                            <i class="fas fa-circle" style="color: #1cc88a;"></i> Alternatif
                                        </span>
                                        <span class="mr-2" style="color: #36b9cc;">
                                            <i class="fas fa-circle" style="color: #36b9cc;"></i> Bobot
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-lg-8 mb-4">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Alternatif</th>
                                                    <th>Progress/Bobot</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Absensi</td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">30%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ide Proposal</td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 55%"
                                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lama Kerja</td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 70%"
                                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">15%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pendidikan</td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 85%"
                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">15%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pengalaman Kerja</td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">15%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    
              
   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
@stop
 
