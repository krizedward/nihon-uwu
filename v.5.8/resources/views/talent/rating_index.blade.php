@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">Rating Untuk Talent</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>service</th>
                                    <th>rating</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                                @php
                                    $no = 1;
                                @endphp
                            <tbody>
                                @if($list_ratingTalent->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($list_ratingTalent as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->rent->service_talent->name_service }}</td>
                                        <td>{{ $data->rating_point }}</td>
                                        <td>
                                            <a href="#" class="badge badge-pill badge-warning">Detail</a>
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
                    <div class="card-header">Rating Untuk Client</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>client</th>
                                    <th>rating</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                                @php
                                    $no = 1;

                                @endphp
                            <tbody>
                                @if($list_ratingTalent->isEmpty())
                                    <tr>
                                        <td colspan="4" style="text-align:center;">belum ada</td>
                                    </tr>
                                @else
                                    @foreach($list_ratingClient as $data)
                                        @if($data->rent->id == $idTalent)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->rent->client->nickname }}</td>
                                            <td>{{ $data->rating_point }}</td>
                                            <td>
                                                <a href="#" class="badge badge-pill badge-warning">Detail</a>
                                            </td>
                                        </tr>
                                        @endif
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