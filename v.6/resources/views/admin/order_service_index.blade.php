<!-- import-template -->
@extends('layouts.ace')
@section('title','Order Service Index')

<!-- header -->
@push('header')
<!-- none -->
@endpush

<!-- breadcrumbs -->
@section('breadcrumbs')
<!-- step -->
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="/">Dashboard</a>
		</li>

        <!-- <li class="active">Payment Client</li> -->

		<!-- <li>
            <a href="#">Other Pages</a>
        </li>
        <li class="active">Blank Page</li> -->
	</ul><!-- /.breadcrumb -->

	<div class="nav-search" id="nav-search">
		<form class="form-search">
			<span class="input-icon">
				<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
				<i class="ace-icon fa fa-search nav-search-icon"></i>
			</span>
		</form>
	</div><!-- /.nav-search -->
</div>
@endsection

<!-- page-header -->
@section('page-header')
<!-- none -->
@endsection

<!-- main -->
@section('main')
<!-- form-tambah -->
<div class="row">
	@include('layouts.form.order_temp_index')
</div>
<!-- tabel-service -->
<div class="row">
	@include('layouts.table.order_temp_index')
</div><!-- /.row -->

<div class="row">
    <div class="col-xs-12">
        <!-- div.dataTables_borderWrap -->
        <div style="display: none;">
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                
            </table>
        </div>
    </div>
</div>
@endsection

<!-- script -->
@push('script')
<!-- none -->
<!-- page specific plugin scripts -->

@endpush


<!-- inline_scripts -->
@push('inline_scripts')
<!-- none -->

@endpush