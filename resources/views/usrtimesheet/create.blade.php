@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Add Record')
@section('content')

<form action="{{ route('usrtimesheet.store') }}" method="POST">
    @csrf

    <div class="container">
        <div class="row md-5 mb-5">
            <div class="col-lg-5 margin-top 0">
                <div class="float-left">
                    <h1>Timesheet</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" value="{{ Auth::user()->name }}" name="nama" class="form-control" placeholder="Masukan Nama">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <strong>Tanggal</strong>
                    <input type="date" name="tanggal" class="form-control" placeholder="dd/mm/yy">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Divisi</strong>
                    <select type="text" class="form-control" name="proyek" placeholder="">
                        <option style="background-color: #808080; color: white;">Select</option>
                        <option>Akutansi</option>
                        <option>Komputer</option>
                        <option>Manajemen</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Tempat Kerja</strong>
                    <select type="text" class="form-control" name="tempat_kerja" placeholder="Work Place">
                        <option style="background-color: #808080; color: white;">Select</option>
                        <option>Work From Office (Kantor)</option>
                        <option>Work From Home (Rumah)</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Waktu Masuk</strong>
                    <input type="time" class="form-control" name="waktu" placeholder="" />
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Waktu Keluar</strong>
                    <input type="time" class="form-control" name="waktu_out" placeholder="" />
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <strong>Aktivitas</strong>
                    <input type="text" name="aktivitas" class="form-control" placeholder="Aktivitas yang akan dilakukan...">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>

</form>

@endsection