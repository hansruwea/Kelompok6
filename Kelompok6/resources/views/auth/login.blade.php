@extends('layouts.template')
@section('content')
<div class="container">
    <div><img src="{{asset('img/jogjat.jpg') }}" class="rounded float-left" alt="..."></div>
        <div class="row justify-content-right">
        <div class="col-md-6">
            <div class="card text-white bg-info mb-3" style="max-width: 60rem;">
                <div class="card-header">{{ __('Login Admin Penjualan') }}</div>

                <div class="card-body">
                    @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning">{{ $error }}</div>
                    @endforeach
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-warning">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Kata Sandi</label>
                            <input type="password" name="password" id="password" required class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mb-4">Masuk</button>
                            <p>Tidak memiliki Akun? <a href="{{ route('register') }}" class="text-decoration-none">Buat Akun</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

