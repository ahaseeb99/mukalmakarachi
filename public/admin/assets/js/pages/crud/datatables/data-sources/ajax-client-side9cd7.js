'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

	var initTable1 = function() {

		var table = $('#kt_datatable');

			// begin first table
		var t =	table.DataTable({
			    searchDelay: 350,
				responsive: true,
				dom: `<'row'<'col-sm-12'tr>>
				<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
				ajax: {
					url:'http://127.0.0.1:8000/admin/users/api',
					type: 'GET',
					data: {},
				},
				columns:[
					{data: 'key'},
					{data: 'id'},
					{data: 'name'},
					{data: 'email'},
					{data: 'role'},
					{data: 'date'},
					{data: 'status'},
					{data: 'actions',},
				],
			});

		
		$('#kt_subheader_search_form').on( 'keyup', function () {
			t.search( this.value ).draw();
		} );


		$('#kt_datatable_search_status').on('change', function () {
			t.columns(6).search( this.value).draw();
		 });

		 
		 $('#kt_datatable_search_role').on('change', function () {
			t.columns(4).search( this.value).draw();
	     });
	
	};

	return {
		//main function to initiate the module
		init: function() {
			initTable1();
		},
	};
}();

jQuery(document).ready(function() {
	KTDatatablesDataSourceAjaxClient.init();
});
