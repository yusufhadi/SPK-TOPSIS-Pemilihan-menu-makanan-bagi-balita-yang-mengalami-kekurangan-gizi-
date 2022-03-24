@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
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
                            <div class="card-header">
                                <div class="d-flex bd-highlight">
                                    <div class="p-2 flex-grow-1 bd-highlight">
                                        <h3 class="card-title">Data Balita</h3>
                                    </div>
                                    @if (Auth::user()->role == 'Admin')
                                        <div class="p-2 bd-highlight">
                                            <a href="{{ route('form') }}" class="btn btn-info d-flex justify-content-end">
                                                Tambahkan Data
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Balita</th>
                                            <th>Umur</th>
                                            <th>Berat Badan</th>
                                            <th>Tinggi Badan</th>
                                            <th>Alergi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->umur }}</td>
                                                <td>{{ $item->beratBadan }}</td>
                                                <td>{{ $item->tinggiBadan }}</td>
                                                <td>{{ $item->alergi }}</td>
                                                <td>
                                                    <a href="{{ route('metode', $item->id) }}"
                                                        class="btn btn-primary btn-sm mr-1"> <i class="fas fa-eye"></i>
                                                    </a>
                                                    @if (Auth::user()->role == 'Admin')
                                                        <a href="{{ route('edit-data', $item->id) }}"
                                                            class="btn btn-warning btn-sm mr-1">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="{{ route('hapus-data', $item->id) }}"
                                                            class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak Ada Data</td>
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
