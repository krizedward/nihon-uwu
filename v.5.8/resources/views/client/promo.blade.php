@extends('layouts.app')

@section('content-old')
    <div class="container">

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Promo Service</div>

                    <div class="card-body">
                        <h5>Yuk Daftarkan diri supaya dapat free ondate</h5>
                        <!-- <table class="table">
                            <thead>
                                <tr>
                                    <th>nama</th>
                                    <th>email</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Admin</td>
                                    <td>admin@gmail.com</td>
                                    <td>
                                        <a href="#" class="badge badge-pill badge-warning">Info</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Promo Service</div>

                    <div class="card-body">
                        <!-- <h5>Yuk Daftarkan diri supaya dapat free ondate</h5> -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>nama service</th>
                                    <th>harga normal</th>
                                    <th>harga promo</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_service as $data)
                                <tr>
                                    <td>{{$data->name_service}}</td>
                                    <td>{{$data->price_service}}</td>
                                    <td>{{$data->price_service}}</td>
                                    <td>
                                        <a href="#" class="badge badge-pill badge-warning">order</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Promo Service</div>

                    <div class="card-body">
                        <h5>Coming Soon</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>   
@endsection