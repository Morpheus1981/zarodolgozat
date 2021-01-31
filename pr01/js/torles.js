$(document).ready(function() {
	$.ajax({
		url: "views/view_ajax.php",
		type: "POST",
		cache: false,
		success: function(dataResult){
			$('#table').html(dataResult);
		}
	});
	$(document).on("click", ".delete", function() {
		var $ele = $(this).parent().parent();
		$.ajax({
			url: "views/delete.php",
			type: "POST",
			cache: false,
			data:{
				id: $(this).attr("data-id")
			},
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				if(dataResult.statusCode==200){
					$ele.fadeOut().remove();
				}
			}
		});
	});
});
