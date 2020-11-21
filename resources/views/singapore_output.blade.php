@extends('layouts.main') @section('content')
<div class="jumbotron">
    <h1>BBFS Singapore</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-success bigSize" role="alert"><b>{{ $output }}</b></div>
                <a href="{{ route('singapore') }}" class="btn btn-info btn-lg btn-block">Kembali</a>
            </div>

        </div>
    </div>
</div>
@endsection
