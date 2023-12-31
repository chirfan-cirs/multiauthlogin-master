@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Edit Record')
@section('content')


@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('timesheet.update',$timesheet->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="row md-5 mb-5">
            <div class="col-lg-5 margin-top 0">
                <div class="float-left">
                    <h1>Timesheet / Absen</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" class="form-control" value="{{ $timesheet->nama }}" placeholder="Masukan Nama">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <strong>Tanggal</strong>
                    <input type="date" name="tanggal" class="form-control" value="{{ $timesheet->tanggal }}" placeholder="dd/mm/yy">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Divisi</strong>
                    <select type="text" class="form-control" name="proyek" value="{{ $timesheet->proyek }}" placeholder="">
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
                    <select type="text" class="form-control" name="tempat_kerja" value="{{ $timesheet->tempat_kerja }}" placeholder="Work Place">
                        <option style="background-color: #808080; color: white;">Select</option>
                        <option>Work From Office (Kantor)</option>
                        <option>Work From Home (Rumah)</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Waktu Masuk</strong>
                    <input type="time" class="form-control" name="waktu" value="{{ $timesheet->waktu }}" placeholder="" />
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Waktu Keluar</strong>
                    <input type="time" class="form-control" name="waktu_out" value="{{ $timesheet->waktu }}" placeholder="" />
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <strong>Aktivitas</strong>
                    <input type="text" name="aktivitas" class="form-control" value="{{ $timesheet->aktivitas }}" placeholder="Aktivitas yang akan dilakukan...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</form>
@endsection