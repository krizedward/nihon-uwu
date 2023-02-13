@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- tabel pembayaran -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Payment Order Dating</div>

                    <div class="card-body">
                        <!-- <h5>Halaman Ini Masih Dalam Tahap Pengembangan</h5> -->
                        <table class="table">
                            @php
                                $no = 1;
                            @endphp
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>talent</th>
                                    <th>service</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($list_rentService->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($list_rentService as $data)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->talent->nickname}}</td>
                                        <td>{{$data->service_talent->name_service}}</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Bayar</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">List Order Dating</div>

                    <div class="card-body">
                        <!-- <h5>Halaman Ini Masih Dalam Tahap Pengembangan</h5> -->
                        <table class="table">
                            @php
                                $no = 1;
                            @endphp
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>talent</th>
                                    <th>service</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($list_payService->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($list_payService as $data)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->talent->nickname}}</td>
                                        <td>{{$data->service_talent->name_service}}</td>
                                        <td>
                                            <a href="#" class="badge badge-pill badge-warning">{{ $data->status_dating }}</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-old')
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Order Create Service Talent</div>
                    <form action="{{ route('client.rent.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <!-- <div class="row">
                            <div class="col">
                                <form action="" method="post">
                                    <input type="text" name="text" id="text">
                                </form>
                            </div>
                        </div> -->

                        <!-- <div class="row">
                            <div class="col">
                                <input type="date" class="form-control" name="start_date" placeholder="Tanggal Mulai" aria-label="First name">
                            </div>
                            <div class="col">
                                <input type="date" class="form-control" name="end_date"  placeholder="Tanggal Berakhir" aria-label="Last name">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <select class="form-control" name="talent_id" id="exampleFormControlSelect1">
                                    @foreach($list_talent as $data)
                                        <option value="{{ $data->id }}">{{ $data->fullname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-control" name="servicetalent_id" id="exampleFormControlSelect1">
                                    @foreach($list_serviceTalent as $data)
                                        <option value="{{ $data->id }}">{{ $data->name_service }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> -->
                        
                        <!-- <h5>Halaman Ini Masih Dalam Tahap Pengembangan</h5> -->
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

                    <div class="card-footer">
                        <button class="btn btn-success float-right m-3" type="submit">
                            Submit
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
@endsection