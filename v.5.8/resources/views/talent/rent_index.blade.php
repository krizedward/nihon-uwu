@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">List Order Job Dating</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>tanggal dating</th>
                                    <th>client</th>
                                    <th>service</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($list_rent->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($list_rent as $data)
                                    <tr>
                                        <td>1 Agustus 2022</td>
                                        <td>{{ $data->client->nickname }}</td>
                                        <td>{{ $data->service_talent->name_service }}</td>
                                        <td>
                                            <!-- <a href="#" class="badge badge-pill badge-warning">Detail</a> -->
                                            <button type="button" class="btn btn-success">Terima</button>
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
        <!-- tabel order berjalan -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Order Dating Progress</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>tanggal dating</th>
                                    <th>client</th>
                                    <th>service</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($list_rent->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($list_rent as $data)
                                    <tr>
                                        <td>1 Agustus 2022</td>
                                        <td>{{ $data->client->nickname }}</td>
                                        <td>{{ $data->service_talent->name_service }}</td>
                                        <td>
                                            <!-- <a href="#" class="badge badge-pill badge-warning">Detail</a> -->
                                            <button type="button" class="btn btn-success">Link WA</button>
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
        <!-- tabel order selesai -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Order Dating Done</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>tanggal selesai</th>
                                    <th>client</th>
                                    <th>service</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($list_rent->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($list_rent as $data)
                                    <tr>
                                        <td>1 Agustus 2022</td>
                                        <td>{{ $data->client->nickname }}</td>
                                        <td>{{ $data->service_talent->name_service }}</td>
                                        <td>
                                            <!-- <a href="#" class="badge badge-pill badge-warning">Detail</a> -->
                                            <button type="button" class="btn btn-warning">Detail</button>
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
        <!-- tabel order cancel -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Order Dating Cancel</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>tanggal cancel</th>
                                    <th>client</th>
                                    <th>service</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($list_rent->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($list_rent as $data)
                                    <tr>
                                        <td>1 Agustus 2022</td>
                                        <td>{{ $data->client->nickname }}</td>
                                        <td>{{ $data->service_talent->name_service }}</td>
                                        <td>
                                            <!-- <a href="#" class="badge badge-pill badge-warning">Detail</a> -->
                                            <button type="button" class="btn btn-warning">Cancel</button>
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
        <!-- tabel order report -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Order Dating Report</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>client</th>
                                    <th>service</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($list_rent->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($list_rent as $data)
                                    <tr>
                                        <td>Bermasalah</td>
                                        <td>{{ $data->client->nickname }}</td>
                                        <td>{{ $data->service_talent->name_service }}</td>
                                        <td>
                                            <!-- <a href="#" class="badge badge-pill badge-warning">Detail</a> -->
                                            <button type="button" class="btn btn-danger">Lapor</button>
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