@extends('layouts.main') @section('content')
<div class="jumbotron">
    <h1>Sydney</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-warning bigSize" role="alert">BBFS <b>{{ $bbfs }}</b></div>
            </div>
            <a href="{{ route('sydney') }}" class="btn btn-info btn-lg btn-block">Kembali</a>
        </div>
    </div>
</div>
</div>
@endsection