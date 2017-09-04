@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"> <i class="fa fa-user"></i> Daftar E-Office</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('getpegawai') }}">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">NIP</label>
                            <div class="col-md-8">
                                <input id="name" name="nip" type="text" class="form-control" value="{{$pegawai->nip_baru}}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Nama Lengkap</label>
                            <div class="col-md-8">
                                <input id="name" name="nama_lengkap" type="text" class="form-control" value="{{$pegawai->gelar_d or ''}} {{$pegawai->nama." ".$pegawai->gelar_b}}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Tempat Lahir</label>
                            <div class="col-md-8">
                                <input id="name" name="nip" type="text" class="form-control" value="{{$pegawai->tmp_lahir}}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Alamat</label>
                            <div class="col-md-8">
                                <textarea class="form-control" >{{$pegawai->alamat}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Nomor Hp</label>
                            <div class="col-md-8">
                                <input id="name" name="nip" type="text" class="form-control" value="{{$pegawai->no_hp}}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Alamat Email</label>
                            <div class="col-md-8">
                                <input id="name" name="nip" type="text" class="form-control" value="{{$pegawai->email}}" >
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Jabatan</label>
                            <div class="col-md-8">
                                <input id="name" name="nip" type="text" class="form-control" value="{{ $pegawai->jenis_jab != "STRUKTURAL" ? 'Staf' : $pegawai->nama_jab }}" >
                            </div>
                        </div>
                       


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Dafar
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
