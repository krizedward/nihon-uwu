@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Rating Talent</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>jumlah</th>
                                    <th>service</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_jadwal as $data)

                                @php 
                                    $tanggal = date_format($data->created_at, 'l')
                                @endphp
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->day_off }}</td>
                                    <td>{{ $jadwal->cariTanggal($data->created_at) }}</td>
                                    <td>{{ date_format($data->created_at, 'l') }}</td>
                                    @if ($tanggal == 'Wednesday')
                                        <td>true</td>
                                    @endif
                                    <td>
                                        <a href="#" class="badge badge-pill badge-warning">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Rating Client</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>jumlah</th>
                                    <th>service</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>50 ribu</td>
                                    <td>dating</td>
                                    <td>
                                        <a href="#" class="badge badge-pill badge-warning">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection