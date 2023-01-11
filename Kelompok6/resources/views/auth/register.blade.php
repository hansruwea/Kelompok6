@extends('layouts.template')

@section('content')
<div class="container">
<div><img src="{{asset('img/jogjat.jpg') }}" class="rounded float-left" alt="..."></div>
    <div class="row justify-content-right">
        <div class="col-md-6">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">{{ __('Buat Akun Baru') }}</div>

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
                    <form method="POST" action="{{ route('register') }}">
                        <div class="row">
                            <div class="col">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama Lengap</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phone">No Handphone</label>
                                    <input type="text" name="phone" id="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Konfirmasi Sandi</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success mb-4">Buat Akun</button>
                                    <p>Sudah punya akun? Login <a href="{{ route('login') }}" class="text-decoration-none">disini</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection