$(document).ready(function() {
				
	var showResult = function(data) {
		$('#searchResult td').parent().remove();
		$.each(data, function(index, info) {
			$('#searchResult tr:last').after(
				'<tr class="tablerow">' +
					'<td><a href="?team=' + info['id'] + '">' + info['name'] + '</td>' +
					'<td>' + info['rating']  + '</td>' +
					'<td>' + info['rank'] + '</td>' +
                '</tr>'
			);
		});
	};
	
	$('#searchbar').on('input', function () {
		search();
	});

	$('.type').on('change', function () {
		search();
	});

	function search() {
		$.get('functions/arenasearch.php', {
			name: $('#searchbar').val(),
			type: $('.type:checked').val()
		}, showResult)
		
		.fail(function() {

		});
	}
					
});