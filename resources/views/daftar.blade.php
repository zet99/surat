@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <i class="fa fa-user"></i> Daftar E-Office</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('getpegawai') }}">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">NIP</label>
                            <div class="col-md-9">
                                <input id="name" name="nip" type="text" class="form-control" placeholder="Masukkan Nip" value="{{ session('nip') != null ? session('nip') : '' }}" >
                                <i>*) NIP selanjutnya akan digunakan untuk login</i>
                            </div>
                        </div>

                        @if(session('nip') != null )
                            <div class="alert alert-danger" role="alert">
                              <strong>Maaf</strong> NIP tidak terdaftar di simpeg, coba nip baru
                            </div>
                        @endif

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
