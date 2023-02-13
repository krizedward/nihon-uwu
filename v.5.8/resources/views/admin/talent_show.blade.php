@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-uwu">Tabel Talent</div>
                    <img class="card-img-top" src="https://static.vecteezy.com/system/resources/previews/000/574/512/original/vector-sign-of-user-icon.jpg" alt="Card image" style="width:20%">
                    <div class="card-body">
                        <ul>
                            <li>Nama : {{ $data_talent->fullname }}</li>
                        </ul>
                        <a href="/home">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection