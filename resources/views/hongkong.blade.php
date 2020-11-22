@extends('layouts.main') @section('content')
<div class="jumbotron">
    <h1>All Hongkong</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-primary informasi" role="alert">Input 4 Nomor Yang Keluar Kemarin</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('hk_proses') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="number" class="form-control" id="last_number" name="last_number"
                            autocomplete="off" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Proses</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection