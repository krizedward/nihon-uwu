<form class="form-horizontal" action="{{ route('admin.bm.store','master') }}" method="post" enctype="multipart/form-data">
	@csrf
	@method('POST')

	<!-- nama -->
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>
		<div class="col-sm-9">
			<input type="text" name="nama" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="nama barang.."/>
		</div>
	</div>

	<!-- deskripsi -->
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deskripsi </label>
		<div class="col-sm-9">
			<input type="text" name="deskripsi" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="deskripsi.." />
		</div>
	</div>

	<!-- harga beli -->
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Harga Beli </label>
		<div class="col-sm-9">
			<input type="text" name="harga_beli" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="harga beli.." />
		</div>
	</div>

	<!-- harga jual -->
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Harga Jual </label>
		<div class="col-sm-9">
			<input type="text" name="harga_jual" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="harga jual"/>
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