@section('old')
    <!-- tabel talent -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.talent.create') }}">    
                        Tambah Data Talent
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>nama asli</th>
                                <th>nama talent</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($talents as $data)
                            <tr>
                                <td>{{ $data->fullname }}</td>
                                <td>{{ $data->talentname }}</td>
                                <td>
                                    <a href="admin/talent/show/{{ Crypt::encrypt($data->id) }}" class="badge badge-pill badge-warning">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- tabel rent -->
    <!-- <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.rent.create') }}">    
                        Tambah Data Rental
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>nama talent</th>
                                <th>nama client</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rent_services as $data)
                            <tr>
                                <td>{{ $data->talent->fullname }}</td>
                                <td>{{ $data->client->fullname }}</td>
                                <td>
                                    <a href="admin/talent/show/{{ Crypt::encrypt($data->id) }}" class="badge badge-pill badge-warning">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> -->

    <!-- tabel service -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.service.create') }}">    
                        Tambah Data Service Talent
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>nama</th>
                                <th>harga</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($service_talents as $data)
                            <tr>
                                <td>{{ $data->name_service }}</td>
                                <td>{{ $data->price_service }}</td>
                                <td>
                                    <a href="admin/talent/show/{{ Crypt::encrypt($data->id) }}" class="badge badge-pill badge-warning">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- tabel rating -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">    
                    Data Rating Serivice
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>service</th>
                                <th>rating</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rating_talents as $data)
                            <tr>
                                <td>{{ $data->rent->service_talent->name_service }}</td>
                                <td>{{ $data->rating_point }}</td>
                                <td>
                                    <a href="admin/talent/show/{{ Crypt::encrypt($data->id) }}" class="badge badge-pill badge-warning">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- tabel payment -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tabel Payment</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>nama</th>
                                <th>jumlah</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payments as $data)
                            <tr>
                                <td>{{ $data->rent->client->fullname }}</td>
                                <td>{{ $data->total_amount }}</td>
                                <td>
                                    <a href="admin/client/show/{{ Crypt::encrypt($data->id) }}" class="badge badge-pill badge-warning">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- tabel client -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tabel Client</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>nama</th>
                                <th>email</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $data)
                            <tr>
                                <td>{{ $data->fullname }}</td>
                                <td>{{ $data->user->email }}</td>
                                <td>
                                    <a href="admin/client/show/{{ Crypt::encrypt($data->id) }}" class="badge badge-pill badge-warning">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header text-white bg-uwu"></div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="card-body">
                            <h5 class="card-title">Tutorial Card Bootstrap 4</h5>
                            <p class="card-text">Tutorial cara membuat card vertikal.</p>
                            <p class="card-text"><small class="text-muted">Diposting 19 menit lalu</small></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <img src="https://static.vecteezy.com/system/resources/previews/000/574/512/original/vector-sign-of-user-icon.jpg" class="card-img" alt="..." style="width: 100%">
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- tabel payment -->
    <!-- <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tabel Payments</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>metode</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payments as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->methode_payment }}</td>
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
    </div> -->

    <!-- tabel rating talent -->
    <!-- <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tabel Rating Talent</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>talent</th>
                                <th>rating</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rating_talents as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->methode_payment }}</td>
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
    </div> -->

    <!-- tabel rent service -->
    <!-- <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tabel Rent Service</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>talent</th>
                                <th>rating</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rent_services as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->methode_payment }}</td>
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
    </div> -->

    <!-- tabel service talent -->
    <!-- <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tabel Service Talent</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>talent</th>
                                <th>rating</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($service_talents as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->methode_payment }}</td>
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
    </div> -->

@endsection

@section('title','Dashboard')

<!-- css -->
@push('header')
    <!-- none -->
@endpush

@section('breadcrumbs')
    <li>
		<i class="ace-icon fa fa-home home-icon"></i>
		Dashboard
    </li>
@endsection

@section('page-header')
    <div class="page-header">
		<h1>
			Dashboard
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Halaman yang berisikan kesimpulan data.
			</small>
		</h1>
	</div><!-- /.page-header -->
@endsection

@section('main')
                        <div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Welcome to
									<strong class="green">
										Admin Nihon Uwu
										<small>(v2.1.2)</small>
									</strong>
								</div>

								<!-- <div class="row">
									<div class="space-6"></div>

									<div class="col-sm-12 infobox-container">
										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">32</span>
												<div class="infobox-content">comments + 2 reviews</div>
											</div>

											<div class="stat stat-success">8%</div>
										</div>

										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-twitter"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">11</span>
												<div class="infobox-content">new followers</div>
											</div>

											<div class="badge badge-success">
												+32%
												<i class="ace-icon fa fa-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-pink">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-shopping-cart"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">8</span>
												<div class="infobox-content">new orders</div>
											</div>
											<div class="stat stat-important">4%</div>
										</div>
									</div>

									<div class="vspace-12-sm"></div>
                                    
								</div> -->
                                <!-- /.row -->
								<div class="row">
                                    <div class="col-sm-6">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-users blue"></i>
													Client
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>Fake Name</th>
																<th>Real Name</th>
																<th>Kota</th>
																<th>Status</th>
															</tr>
														</thead>

														<tbody>
                                                        @foreach($talents as $data)
															<tr>
																<td>{{ $data->talentname }}</td>
																<td>{{ $data->fullname }}</td>
																<td>Malang</td>
																<td class="hidden-480">
																	<span class="label label-success">Aktif</span>
																</td>
															</tr>
                                                        @endforeach
														</tbody>
													</table>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col - client -->

									<div class="col-sm-6">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-user blue"></i>
													Talent
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>Fake Name</th>
																<th>Real Name</th>
																<th>Kota</th>
																<th>Status</th>
															</tr>
														</thead>

														<tbody>
                                                        @foreach($talents as $data)
															<tr>
																<td>{{ $data->talentname }}</td>
																<td>{{ $data->fullname }}</td>
																<td>Malang</td>
																<td class="hidden-480">
																	<span class="label label-success">Aktif</span>
																</td>
															</tr>
                                                        @endforeach
														</tbody>
													</table>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col - talent -->

                                    <div class="col-sm-6">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-book blue"></i>
													Pricelist
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>Jenis</th>
																<th>Durasi</th>
																<th>Harga</th>
																<th>Aksi</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td>Video Call</td>
																<td>10 Menit</td>
																<td>Rp.40.000</td>
																<td class="hidden-480">
																	<span class="label label-info">Detail</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col - pricelist -->

                                    <div class="col-sm-6">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-heart blue"></i>
													Order
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>Jenis</th>
																<th>Durasi</th>
																<th>Harga</th>
																<th>Aksi</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td>Video Call</td>
																<td>10 Menit</td>
																<td>Rp.40.000</td>
																<td class="hidden-480">
																	<span class="label label-info">Detail</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col - order -->

                                    <div class="col-sm-6">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-money blue"></i>
													Payment
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>Kode</th>
																<th>Client</th>
																<th>Nominal</th>
																<th>Status</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td>123123</td>
																<td>Edward</td>
																<td>Rp.40.000</td>
																<td class="hidden-480">
																	<span class="label label-warning">Pending</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col - payment -->

                                    <div class="col-sm-6">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-bank blue"></i>
													Withdraw
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>Kode</th>
																<th>Talent</th>
																<th>Nominal</th>
																<th>Status</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td>123123</td>
																<td>Edward</td>
																<td>Rp.40.000</td>
																<td class="hidden-480">
																	<span class="label label-warning">Pending</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col - withdraw -->

								</div><!-- /.row -->

								<div class="hr hr32 hr-dotted"></div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
    
    <!-- <div class="row">
		<div class="col-xs-12">
			<a href="#" class="btn btn-app btn-md btn-yellow no-hover">
				<i class="fa fa-cubes line-height-1 bigger-170 blue"></i>
				<br />
				<span class="line-height-1 smaller-90"> Tambah </span>
			</a>
		</div>
		
		<div class="col-xs-12">
			<div class="clearfix">
				<div class="pull-left tableTools-container"></div>
			</div>
		<div>
        <div class="row">
            <div class="col-sm-6">
                
                <div class="table-header">
                    Talent
                </div>

                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga Beli</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-6">
                
                <div class="table-header">
                    Talent
                </div>

                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
	</div> -->
@endsection

<!-- javascript -->
@push('script')
    <!-- page specific plugin scripts -->
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('assets/js/buttons.flash.min.js') }}"></script>
	<script src="{{ asset('assets/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('assets/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('assets/js/buttons.colVis.min.js') }}"></script>
	<script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>
@endpush

@push('inline_script')
        <script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					//   {
					// 	"extend": "colvis",
					// 	"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
					// 	"className": "btn btn-white btn-primary btn-bold",
					// 	columns: ':not(:first):not(:last)'
					//   },
					//   {
					// 	"extend": "copy",
					// 	"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
					// 	"className": "btn btn-white btn-primary btn-bold"
					//   },
					//   {
					// 	"extend": "csv",
					// 	"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
					// 	"className": "btn btn-white btn-primary btn-bold"
					//   },
					//   {
					// 	"extend": "excel",
					// 	"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
					// 	"className": "btn btn-white btn-primary btn-bold"
					//   },
					//   {
					// 	"extend": "pdf",
					// 	"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
					// 	"className": "btn btn-white btn-primary btn-bold"
					//   },
					//   {
					// 	"extend": "print",
					// 	"text": "<i class='fa fa-print bigger-110 green'></i> <span class='hidden'>Print</span>",
					// 	"className": "btn btn-white btn-primary btn-bold",
					// 	autoPrint: false,
					// 	message: 'This print was produced using the Print button for DataTables'
					//   },
					//   {
					// 	"extend": "add",
					// 	"text": "<i class='fa fa-print bigger-110 green'></i> <span class='hidden'>Add Data</span>",
					// 	"className": "btn btn-white btn-primary btn-bold",
					//   }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
@endpush