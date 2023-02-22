<form class="form-horizontal" action="{{ route('admin.tp.create') }}" method="post" enctype="multipart/form-data">
	@csrf
	@method('POST')

    <!-- service -->
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Service </label>
        <div class="col-sm-9">
            <select name="service" id="options" class="form-control" multiple>
                @foreach($serviceTalent as $data)
                    <option value="{{ $data->id }}">{{ $data->service_sort }} | {{ $data->service_name }} - {{ $data->duration }}</option>
                @endforeach
            </select>
		</div>
    </div>

    <!-- tanggal-start -->
    <!-- tanggal-end -->
    <!-- temp-order -->
    <!-- talent -->

    <!-- client -->
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Client </label>
		<div class="col-sm-9">
			<input type="text" name="client" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="client.."/>
		</div>
	</div>

	<!-- gambar -->
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1" place> Gambar </label>
		<div class="col-sm-9">
			<input type="file" name="images_product"/>
		</div>
	</div>

	<!-- kategori -->
	<!-- <div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kategori </label>
		<div class="col-sm-9">
			<input type="text" id="form-field-1" placeholder="kategori" class="col-xs-10 col-sm-5" />
		</div>
	</div> -->
	<!-- copy -->
				
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