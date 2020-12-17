@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat datang</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>SELAMAT DATANG {{ Auth::user()->name }}</h2>
                    <h4>Terima Kasih telah bergabung di Sanberbook.Sosial Media kita bersama! </h4>
                    <a class="text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
