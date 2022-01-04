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
                                <h3 class="card-title">Data Sub Kriteria Umur</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Sub Kriteria</th>
                                            <th>Bobot</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @forelse ($ages as $age)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $age->criteria_id }}</td>
                                                <td>{{ $age->sub_criteria }}</td>
                                                <td>{{ $age->bobot }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3"> Data Tidak Ada</td>
                                            </tr>
                                        @endforelse --}}
                                        @foreach ($ages as $age)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $age->sub_criteria }}</td>
                                                <td>{{ $age->bobot }}</td>
                                            </tr>
                                        @endforeach
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
