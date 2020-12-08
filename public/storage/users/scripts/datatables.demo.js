/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Data Tables
 */

(function($) {
	"use strict";

	if ($('#example').length)
		$('#example').DataTable();

	if ($('#example-scroll-y').length)
		$('#example-scroll-y').DataTable( {
			"scrollY":        "200px",
			"scrollCollapse": true,
			"paging":         false
		} );

	if ($('#example-row-grouping').length){
		var table = $('#example-row-grouping').DataTable({
			"columnDefs": [
				{ "visible": false, "targets": 2 }
			],
			"order": [[ 2, 'asc' ]],
			"displayLength": 25,
			"drawCallback": function ( settings ) {
				var api = this.api();
				var rows = api.rows( {page:'current'} ).nodes();
				var last=null;
	 
				api.column(2, {page:'current'} ).data().each( function ( group, i ) {
					if ( last !== group ) {
						$(rows).eq( i ).before(
							'<tr class="group"><td colspan="5">'+group+'</td></tr>'
						);
	 
						last = group;
					}
				} );
			}
		} );
	 
		// Order by the grouping
		$('#example-row-grouping tbody').on( 'click', 'tr.group', function () {
			var currentOrder = table.order()[0];
			if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
				table.order( [ 2, 'desc' ] ).draw();
			}
			else {
				table.order( [ 2, 'asc' ] ).draw();
			}
			return false;
		} );
	}

	if ($('#example-edit').length){
		$('#example-edit').DataTable();
		$('#example-edit').editableTableWidget();
	}
})(jQuery);