@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-light">
                <div class="card-header bg-success">
                    Selamat datang Di JOGJATRONIK !
                </div>
                <div class="card-body text-dark text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Anda Berhasil Masuk !') }}
                    <a>Ayo Ke Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
