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
            <th class="center">
                <label class="pos-rel">
                    <input type="checkbox" class="ace" />
                    <span class="lbl"></span>
                </label>
            </th>
            <!-- <th class="detail-col">Detail</th> -->
            <th>ID</th>
            <th>Service_Id</th>
            <th>Talent_Id</th>
            <th>Service Price</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
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
        <!-- untuk tabel umum -->
        @foreach($orderTemp as $data)
        <tr>
            <td class="center">
                <div class="action-buttons">
                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                        <i class="ace-icon fa fa-angle-double-down"></i>
                        <span class="sr-only">Details</span>
                    </a>
                </div>
            </td>

            <td>{{ $data->id }}</td>
            <td>{{ $data->service_id }}</td>
            <td>{{ $data->talent_id }}</td>
            <td>{{ $data->service_name }}</td>
            <td>{{ $data->service_price }}</td>
            <td>{{ $data->qty }}</td>
            <td>{{ $data->subtotal }}</td>

            <td>
                <div class="hidden-sm hidden-xs btn-group">
                    <button class="btn btn-xs btn-warning">
                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                    </button>
                </div>

                <div class="hidden-md hidden-lg">
                    <div class="inline pos-rel">
                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
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

            <!-- hapus dan mobile button -->
            <td class="hidden-sm hidden-xs">
                <div class="hidden-sm hidden-xs btn-group">
                    <button class="btn btn-xs btn-danger">
                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                    </button>
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
        </tr>

        <!-- untuk detail tabel umum -->
        <tr class="detail-row">
            <td colspan="9">
                <div class="table-detail">
                    <div class="row">
                        <div class="col-xs-12 col-sm-2">
                            <div class="text-center">
                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                                <br />
                                <div class="width-80 label label-info label-xlg">
                                    <div class="inline position-relative">
                                        <a class="user-title-label" href="#">
                                            <i class="ace-icon fa fa-circle light-green"></i>
                                            &nbsp;
                                            <span class="white">Kode : {{ $data->from }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-5">
                            <div class="space visible-xs"></div>

                            <div class="profile-user-info profile-user-info-striped">
                                <div class="profile-info-row">
                                    <div class="profile-info-name"> ID </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->from }}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Jenis </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->jenis }}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Ukuran </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->ukuran }}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Berat </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->berat_kg }} Kg</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Merk </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->merk_besi }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-5">
                            <div class="space visible-xs"></div>

                            <div class="profile-user-info profile-user-info-striped">
                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Harga PerKg </div>

                                    <div class="profile-info-value">
                                        <span>Rp {{ number_format($data->harga_kg,2,',','.')  }} / Kg</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Harga Lonjor </div>

                                    <div class="profile-info-value">
                                        <span>Rp {{ number_format($data->harga_lonjor,2,',','.')  }} / Lonjor </span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Created at </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->created_at  }}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Updated at </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->updated_at  }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- <div class="col-xs-12 col-sm-3">
                            <div class="space visible-xs"></div>
                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                            <div class="space-6"></div>

                            <form>
                                <fieldset>
                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                </fieldset>

                                <div class="hr hr-dotted"></div>

                                <div class="clearfix">
                                    <label class="pull-left">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"> Email me a copy</span>
                                    </label>

                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                        Submit
                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                    </button>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>