/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Tree View
 */

$(function() {

	var defaultData = [
		{
			text: 'Parent 1',
			href: '#parent1',
			tags: ['4'],
			nodes: [
				{
					text: 'Child 1',
					href: '#child1',
					tags: ['2'],
					nodes: [
						{
							text: 'Grandchild 1',
							href: '#grandchild1',
							tags: ['0']
						},
						{
							text: 'Grandchild 2',
							href: '#grandchild2',
							tags: ['0']
						}
					]
				},
				{
					text: 'Child 2',
					href: '#child2',
					tags: ['0']
				}
			]
		},
		{
			text: 'Parent 2',
			href: '#parent2',
			tags: ['0']
		},
		{
			text: 'Parent 3',
			href: '#parent3',
			 tags: ['0']
		},
		{
			text: 'Parent 4',
			href: '#parent4',
			tags: ['0']
		},
		{
			text: 'Parent 5',
			href: '#parent5'  ,
			tags: ['0']
		}
	];

	var alternateData = [
		{
			text: 'Parent 1',
			tags: ['2'],
			nodes: [
				{
					text: 'Child 1',
					tags: ['3'],
					nodes: [
						{
							text: 'Grandchild 1',
							tags: ['6']
						},
						{
							text: 'Grandchild 2',
							tags: ['3']
						}
					]
				},
				{
					text: 'Child 2',
					tags: ['3']
				}
			]
		},
		{
			text: 'Parent 2',
			tags: ['7']
		},
		{
			text: 'Parent 3',
			icon: 'glyphicon glyphicon-earphone',
			href: '#demo',
			tags: ['11']
		},
		{
			text: 'Parent 4',
			icon: 'glyphicon glyphicon-cloud-download',
			href: '/demo.html',
			tags: ['19'],
			selected: true
		},
		{
			text: 'Parent 5',
			icon: 'glyphicon glyphicon-certificate',
			color: 'pink',
			backColor: 'red',
			href: 'http://www.tesco.com',
			tags: ['available','0']
		}
	];

	var json = '[' +
		'{' +
			'"text": "Parent 1",' +
			'"nodes": [' +
				'{' +
					'"text": "Child 1",' +
					'"nodes": [' +
						'{' +
							'"text": "Grandchild 1"' +
						'},' +
						'{' +
							'"text": "Grandchild 2"' +
						'}' +
					']' +
				'},' +
				'{' +
					'"text": "Child 2"' +
				'}' +
			']' +
		'},' +
		'{' +
			'"text": "Parent 2"' +
		'},' +
		'{' +
			'"text": "Parent 3"' +
		'},' +
		'{' +
			'"text": "Parent 4"' +
		'},' +
		'{' +
			'"text": "Parent 5"' +
		'}' +
	']';


	$('#treeview1').treeview({
		data: defaultData,
		selectedBackColor: "#304ffe",
		onhoverColor: "rgba(0, 0, 0, 0.05)",
		expandIcon: 'fa fa-plus',
		collapseIcon: 'fa fa-minus',
		nodeIcon: 'fa fa-folder',
	});

	$('#treeview2').treeview({
		levels: 1,
		data: defaultData,
		selectedBackColor: "#304ffe",
		onhoverColor: "rgba(0, 0, 0, 0.05)",
		expandIcon: 'fa fa-plus',
		collapseIcon: 'fa fa-minus',
		nodeIcon: 'fa fa-folder',
	});

	$('#treeview3').treeview({
		levels: 99,
		data: defaultData,
		selectedBackColor: "#304ffe",
		onhoverColor: "rgba(0, 0, 0, 0.05)",
		expandIcon: 'fa fa-plus',
		collapseIcon: 'fa fa-minus',
		nodeIcon: 'fa fa-folder',
	});

	$('#treeview4').treeview({
		color: "#304ffe",
		data: defaultData,
		selectedBackColor: "#304ffe",
		onhoverColor: "rgba(0, 0, 0, 0.05)",
		expandIcon: 'fa fa-plus',
		collapseIcon: 'fa fa-minus',
		nodeIcon: 'fa fa-folder',
	});

	$('#treeview5').treeview({
		color: "#304ffe",
		expandIcon: 'fa fa-chevron-right',
		collapseIcon: 'fa fa-chevron-down',
		nodeIcon: 'fa fa-bookmark',
		data: defaultData,
		selectedBackColor: "#304ffe",
		onhoverColor: "rgba(0, 0, 0, 0.05)",
	});

	$('#treeview6').treeview({
		color: "#304ffe",
		expandIcon: "fa fa-square",
		collapseIcon: "fa fa-square-o",
		nodeIcon: "fa fa-user",
		showTags: true,
		data: defaultData,
		selectedBackColor: "#304ffe",
		onhoverColor: "rgba(0, 0, 0, 0.05)",
	});

	$('#treeview10').treeview({
		color: "#304ffe",
		enableLinks: true,
		data: defaultData,
		selectedBackColor: "#304ffe",
		onhoverColor: "rgba(0, 0, 0, 0.05)",
		expandIcon: 'fa fa-plus',
		collapseIcon: 'fa fa-minus',
		nodeIcon: 'fa fa-folder',
	});



	var $searchableTree = $('#treeview-searchable').treeview({
		data: defaultData,
		selectedBackColor: "#304ffe",
		onhoverColor: "rgba(0, 0, 0, 0.05)",
		expandIcon: 'fa fa-plus',
		collapseIcon: 'fa fa-minus',
		nodeIcon: 'fa fa-folder',
	});

	var search = function(e) {
		var pattern = $('#input-search').val();
		var options = {
			ignoreCase: $('#chk-ignore-case').is(':checked'),
			exactMatch: $('#chk-exact-match').is(':checked'),
			revealResults: $('#chk-reveal-results').is(':checked')
		};
		var results = $searchableTree.treeview('search', [ pattern, options ]);

		var output = '<p>' + results.length + ' matches found</p>';
		$.each(results, function (index, result) {
			output += '<p>- ' + result.text + '</p>';
		});
		$('#search-output').html(output);
		return false;
	}

	$('#btn-search').on('click', search);
	$('#input-search').on('keyup', search);

	$('#btn-clear-search').on('click', function (e) {
		$searchableTree.treeview('clearSearch');
		$('#input-search').val('');
		$('#search-output').html('');
		return false;
	});


})