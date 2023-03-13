<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">Temp Order</h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                            <!-- <tr>
                        <th class="detail-col">Detail</th>
                        <th>Jenis</th>
                        <th>Ukuran</th>
                        <th>Harga/Lonjor</th>
                        <th class="hidden-480">Berat (Kg)</th>
                        <th class="hidden-480">Status</th>
                        <th>Edit</th>
                        <th class="hidden-xs hidden-sm">Hapus</th>
                    </tr> -->

                            <tr>
                                <th>ID</th>
                                <th class="hidden-xs hidden-sm">Client</th>
                                <th>Talent</th>
                                <th class="hidden-480">Harga</th>
                                <th class="hidden-480">Jumlah</th>
                                <th>Subtotal</th>
                                <th>Hapus</th>
                                <!-- <th>Harga Jual</th>
                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    Update
                                </th>
                                <th class="hidden-480">Status</th>
                                <th class="hidden-480">Edit</th>
                                <th class="hidden-480">Hapus</th> -->
                            </tr>
                        </thead>

                        <tbody>
                            @if($orderTemp->isEmpty())
                            <tr>
                                <td colspan="7">Tidak Ada Data</td>
                            </tr>
                            @endif
                            @php
                            $no = 0;
                            $total = 0;
                            @endphp
                            <!-- untuk tabel umum -->
                            @foreach($orderTemp as $data)

                            @php
                            $subtotal = $data->subtotal_service;
                            $total = $total + $subtotal;
                            @endphp
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td class="hidden-xs hidden-sm">{{ $data->client_id }}</td>
                                <td>{{ $data->talent->nickname }}</td>
                                <td class="hidden-480">Rp {{ number_format($data->price_service,2,',','.')  }}</td>
                                <td class="hidden-480">{{ $data->qty_service }}</td>
                                <td>Rp {{ number_format($data->subtotal_service,2,',','.')  }}</td>

                                <!-- hapus dan mobile button -->
                                <td class="hidden-sm hidden-xs">
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <form action="{{ route('admin.ot.delete',[$data->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-xs btn-danger">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                            </button>
                                        </form>
                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                        <span class="blue">
                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                        <span class="red">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <form action="{{ route('admin.ot.delete',[$data->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </button>
                                                    </form>
                                                    <!-- <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                        <span class="red">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </span>
                                                    </a> -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.temp order -->

    <div class="col-xs-12 col-sm-6">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">Detailnya Order</h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main">

                    <form class="form-horizontal" action="{{ route('admin.os.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="total" value="{{ $total }}">
                        <div class="form-group col-sm-3">
                            <button>Tambah</button>
                        </div>
                    </form>

                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Invoice</th>
                                <th class="hidden-480">Tgl Mulai</th>
                                <th class="hidden-480">Tgl Selesai</th>
                                <th>Total</th>
                                <th>Detail</th>
                                <!-- <th>Harga Jual</th>
                                    <th>
                                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                        Update
                                    </th>
                                    <th class="hidden-480">Status</th>
                                    <th class="hidden-480">Edit</th>
                                    <th class="hidden-480">Hapus</th> -->
                            </tr>
                        </thead>

                        <tbody>
                            @if($orderService->isEmpty())
                            <tr>
                                <td colspan="7">Tidak Ada Data</td>
                            </tr>
                            @endif
                            <!-- untuk tabel umum -->
                            @foreach($orderService as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->invoice }}</td>
                                <td class="hidden-480">{{ $data->start_service }}</td>
                                <td class="hidden-480">{{ $data->end_service }}</td>
                                <td>Rp {{ number_format($data->total_payment,2,',','.')  }}</td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <a class="btn btn-xs btn-warning" href="{{ route('admin.os.detail', $data->invoice) }}">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                        </a>
                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="{{ route('admin.os.detail', [$data->invoice] ) }}" class="tooltip-success" data-rel="tooltip" title="Detail">
                                                        <span class="blue">
                                                            <i class="ace-icon fa fa-eye bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.resume order -->
</div><!-- /.row -->