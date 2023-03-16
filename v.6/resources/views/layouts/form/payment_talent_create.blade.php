<form class="form-horizontal" action="{{ route('admin.tp.create') }}" method="post" enctype="multipart/form-data">
	@csrf
	@method('POST')

	<!-- service -->
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Service </label>
		<div class="col-sm-9">
			<select name="service" class="col-xs-10 col-sm-5" id="form-field-select-1">
				<option value="" disabled selected>Pilih Service..</option>
				@foreach($serviceTalent as $data)
					<option value="{{ $data->id }}">{{ $data->service_sort }} | {{ $data->service_name }} - {{ $data->duration }}</option>
				@endforeach
			</select>
		</div>
	</div>

	<!-- tanggal-start -->
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Mulai </label>
		<div class="col-sm-9">
			<div class="input-group col-xs-10 col-sm-5">
				<input name="start_service" placeholder="Pilh Tanggal.." class="form-control date-picker " id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
				<span class="input-group-addon">
					<i class="fa fa-calendar bigger-110"></i>
				</span>
			</div>
		</div>
	</div>
	<!-- tanggal-end -->
	<!-- temp-order -->
	
	<!-- talent -->
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Talent </label>
		<div class="col-sm-9">
			<input type="text" name="talent" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Nama Talent.." />
		</div>
	</div>

	<!-- client -->
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Client </label>
		<div class="col-sm-9">
			<input type="text" name="client" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Nama Client.." />
		</div>
	</div>

	<!-- Upload Bukti Tf -->
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1" place> Upload Bukti Tf </label>
		<div class="col-sm-9">
			<input type="file" name="images_product"/>
		</div>
	</div>

	<div class="space-4"></div>
	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button class="btn btn-info" type="submit">
				<i class="ace-icon fa fa-check bigger-110"></i>
				Submit
			</button>
			&nbsp; &nbsp; &nbsp;
			<button class="btn" type="reset">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Reset
			</button>
		</div>
	</div>
</form>

<form action="#" method="post" enctype="multipart/form-data">
	<input type="hidden" class="kode_id">
	<input type="hidden" class="kode_nomor">
	<input type="hidden" class="order_id">
</form><!-- form baru -->