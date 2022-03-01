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
                                        <h3 class="card-title">Ubat Data Balita</h3>
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="{{ route('update-data', $a->id) }}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <label for="nama">Masukkan Nama Balita</label>
                                                <input type="name" class="form-control" name="nama"
                                                    placeholder="Masukkan nama balita" value="{{ $a->nama }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="umur">Umur</label>
                                                <select class="form-control select2" style="width: 100%;" name="umur">
                                                    <option selected="selected">{{ $a->umur }}</option>
                                                    @foreach ($items as $item)
                                                        @if ($item->criteria_id == 1)
                                                            <option>{{ $item->sub_criteria }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="beratBadan">Berat Badan</label>
                                                <select class="form-control select2" style="width: 100%;" name="beratBadan">
                                                    <option selected="selected">{{ $a->beratBadan }}</option>
                                                    @foreach ($items as $item)
                                                        @if ($item->criteria_id == 2)
                                                            <option>{{ $item->sub_criteria }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="tinggiBadan">Tinggi Badan</label>
                                                <select class="form-control select2" style="width: 100%;"
                                                    name="tinggiBadan">
                                                    <option selected="selected">{{ $a->tinggiBadan }}
                                                    </option>
                                                    @foreach ($items as $item)
                                                        @if ($item->criteria_id == 3)
                                                            <option>{{ $item->sub_criteria }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="alergi">Alergi</label>
                                                <select class="form-control select2" style="width: 100%;" name="alergi">
                                                    <option selected="selected">{{ $a->alergi }}
                                                    </option>
                                                    @foreach ($items as $item)
                                                        @if ($item->criteria_id == 4)
                                                            <option>{{ $item->sub_criteria }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
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
