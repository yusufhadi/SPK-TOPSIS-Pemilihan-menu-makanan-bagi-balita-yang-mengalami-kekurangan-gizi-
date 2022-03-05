@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">proses Perhitungan Metode</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <div class="d-flex bd-highlight">
                                    <div class="p-2 flex-grow-1 bd-highlight">
                                        <h3 class="card-title">Data Bayi</h3>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="d-flex bd-highlight">
                                    <div class="p-2 flex-grow-1 bd-highlight">
                                        <h3 class="card-title">Data Bayi</h3>
                                    </div>
                                </div>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Balita</th>
                                            <th>Umur</th>
                                            <th>Tinggi Badan</th>
                                            <th>Berat Badan</th>
                                            <th>Alergi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($Penentuan as $a)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $a->nama }}</td>
                                                <td>{{ $a->penentuan_umur }}</td>
                                                <td>{{ $a->penentuan_beratBadan }}</td>
                                                <td>{{ $a->penentuan_tinggiBadan }}</td>
                                                <td>{{ $a->penentuan_alergi }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Tidak Ada Data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <br>
                                <hr>
                                <div class="d-flex bd-highlight">
                                    <div class="p-2 flex-grow-1 bd-highlight">
                                        <h3 class="card-title">Data Bayi</h3>
                                    </div>
                                </div>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Balita</th>
                                            <th>Umur</th>
                                            <th>Tinggi Badan</th>
                                            <th>Berat Badan</th>
                                            <th>Alergi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($Alternatif as $b)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $b->alternatif }}</td>
                                                <td>{{ $b->bobot_umur }}</td>
                                                <td>{{ $b->bobot_beratBadan }}</td>
                                                <td>{{ $b->bobot_tinggiBadan }}</td>
                                                <td>{{ $b->bobot_alergi }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Tidak Ada Data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
