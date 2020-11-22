@extends('layouts.main') @section('content')
<div class="jumbotron">
    <h1>All Hongkong</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-warning bigSize" role="alert">BBFS <b>{{ $bbfs }}</b></div>
                <div class="alert alert-success bigSize" role="alert">Nomor Hidup <b>{{ $nomorHidup }}</b></div>
                <div class="alert alert-info bigSize" role="alert">Kepala Ekor Tunggal <b>{{ $kepalaEkorTunggal }}</b>
                </div>
                <a href="{{ route('hongkong') }}" class="btn btn-info btn-lg btn-block">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection