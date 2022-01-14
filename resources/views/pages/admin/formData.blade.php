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
                                        <h3 class="card-title">Masukkan Data Balita</h3>
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Masukkan Nama Balita</label>
                                            <input type="name" class="form-control" id="exampleInputEmail1"
                                                placeholder="Masukkan nama balita">
                                        </div>
                                        <div class="form-group">
                                            <label>Umur</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Pilih</option>
                                                @foreach ($items as $item)
                                                    @if ($item->criteria_id == 1)
                                                        <option>{{ $item->sub_criteria }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Berat Badan</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Pilih</option>
                                                @foreach ($items as $item)
                                                    @if ($item->criteria_id == 2)
                                                        <option>{{ $item->sub_criteria }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tinggi Badan</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Pilih</option>
                                                @foreach ($items as $item)
                                                    @if ($item->criteria_id == 3)
                                                        <option>{{ $item->sub_criteria }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.row -->
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
