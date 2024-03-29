<!-- import-template -->
@extends('layouts.ace')
@section('title','static dynamic')

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
<!-- none -->
<h4 class="pink">
    <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
    <a href="#modal-table" role="button" class="green" data-toggle="modal"> Table Inside a Modal Box </a>
</h4>

<div id="modal-table" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="white">&times;</span>
                    </button>
                    Results for "Latest Registered Domains
                </div>
            </div>

            <div class="modal-body no-padding">
                <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                    <thead>
                        <tr>
                            <th>Domain</th>
                            <th>Price</th>
                            <th>Clicks</th>

                            <th>
                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                Update
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <a href="#">ace.com</a>
                            </td>
                            <td>$45</td>
                            <td>3,330</td>
                            <td>Feb 12</td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#">base.com</a>
                            </td>
                            <td>$35</td>
                            <td>2,595</td>
                            <td>Feb 18</td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#">max.com</a>
                            </td>
                            <td>$60</td>
                            <td>4,400</td>
                            <td>Mar 11</td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#">best.com</a>
                            </td>
                            <td>$75</td>
                            <td>6,500</td>
                            <td>Apr 03</td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#">pro.com</a>
                            </td>
                            <td>$55</td>
                            <td>4,250</td>
                            <td>Jan 21</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="modal-footer no-margin-top">
                <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Close
                </button>

                <ul class="pagination pull-right no-margin">
                    <li class="prev disabled">
                        <a href="#">
                            <i class="ace-icon fa fa-angle-double-left"></i>
                        </a>
                    </li>

                    <li class="active">
                        <a href="#">1</a>
                    </li>

                    <li>
                        <a href="#">2</a>
                    </li>

                    <li>
                        <a href="#">3</a>
                    </li>

                    <li class="next">
                        <a href="#">
                            <i class="ace-icon fa fa-angle-double-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endsection

<!-- script -->
@push('script')
<!-- none -->
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


<!-- inline_scripts -->
@push('inline_scripts')
<!-- none -->
<script type="text/javascript">
	jQuery(function($) {
		//initiate dataTables plugin
		var myTable =
			$('#dynamic-table')
			//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
			.DataTable({
				bAutoWidth: false,
				"aoColumns": [{
						"bSortable": false
					},
					null, null, null, null, null,
					{
						"bSortable": false
					}
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
			});



		$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

		new $.fn.dataTable.Buttons(myTable, {
			buttons: [{
					"extend": "colvis",
					"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
					"className": "btn btn-white btn-primary btn-bold",
					columns: ':not(:first):not(:last)'
				},
				{
					"extend": "copy",
					"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
					"className": "btn btn-white btn-primary btn-bold"
				},
				{
					"extend": "csv",
					"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
					"className": "btn btn-white btn-primary btn-bold"
				},
				{
					"extend": "excel",
					"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
					"className": "btn btn-white btn-primary btn-bold"
				},
				{
					"extend": "pdf",
					"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
					"className": "btn btn-white btn-primary btn-bold"
				},
				{
					"extend": "print",
					"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
					"className": "btn btn-white btn-primary btn-bold",
					autoPrint: false,
					message: 'This print was produced using the Print button for DataTables'
				}
			]
		});
		myTable.buttons().container().appendTo($('.tableTools-container'));

		//style the message box
		var defaultCopyAction = myTable.button(1).action();
		myTable.button(1).action(function(e, dt, button, config) {
			defaultCopyAction(e, dt, button, config);
			$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
		});


		var defaultColvisAction = myTable.button(0).action();
		myTable.button(0).action(function(e, dt, button, config) {

			defaultColvisAction(e, dt, button, config);


			if ($('.dt-button-collection > .dropdown-menu').length == 0) {
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
				if (div.length == 1) div.tooltip({
					container: 'body',
					title: div.parent().text()
				});
				else $(this).tooltip({
					container: 'body',
					title: $(this).text()
				});
			});
		}, 500);





		myTable.on('select', function(e, dt, type, index) {
			if (type === 'row') {
				$(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
			}
		});
		myTable.on('deselect', function(e, dt, type, index) {
			if (type === 'row') {
				$(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
			}
		});




		/////////////////////////////////
		//table checkboxes
		$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

		//select/deselect all rows according to table header checkbox
		$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function() {
			var th_checked = this.checked; //checkbox inside "TH" table header

			$('#dynamic-table').find('tbody > tr').each(function() {
				var row = this;
				if (th_checked) myTable.row(row).select();
				else myTable.row(row).deselect();
			});
		});

		//select/deselect a row when the checkbox is checked/unchecked
		$('#dynamic-table').on('click', 'td input[type=checkbox]', function() {
			var row = $(this).closest('tr').get(0);
			if (this.checked) myTable.row(row).deselect();
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
		$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {
			var th_checked = this.checked; //checkbox inside "TH" table header

			$(this).closest('table').find('tbody > tr').each(function() {
				var row = this;
				if (th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
				else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
			});
		});

		//select/deselect a row when the checkbox is checked/unchecked
		$('#simple-table').on('click', 'td input[type=checkbox]', function() {
			var $row = $(this).closest('tr');
			if ($row.is('.detail-row ')) return;
			if (this.checked) $row.addClass(active_class);
			else $row.removeClass(active_class);
		});



		/********************************/
		//add tooltip for small view action buttons in dropdown menu
		$('[data-rel="tooltip"]').tooltip({
			placement: tooltip_placement
		});

		//tooltip placement on right or left
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('table')
			var off1 = $parent.offset();
			var w1 = $parent.width();

			var off2 = $source.offset();
			//var w2 = $source.width();

			if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
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