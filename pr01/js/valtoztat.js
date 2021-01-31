$(document).ready(function() {
	$.ajax({

		url: "views/view_ajax.php",
		type: "POST",
		cache: false,
		success: function(dataResult){
			$('#table').html(dataResult);
		}
	});
	$(function () {
		$('#update_country').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget); /*Button that triggered the modal*/
			var id = button.data('id');
			var gkrendszam = button.data('gkrendszam');
			var gkszin = button.data('gkszin');
			var gkalvazszam = button.data('gkalvazszam');
			var gkmuszakierv = button.data('gkmuszakierv');
			var modal = $(this);
			modal.find('#name_modal').val(gkrendszam);
			modal.find('#email_modal').val(gkszin);
			modal.find('#phone_modal').val(gkalvazszam);
			modal.find('#city_modal').val(gkmuszakierv);
			modal.find('#id_modal').val(id);
		});
    });
	$(document).on("click", "#update_data", function() {
		$.ajax({
			url: "views/update_ajax.php",
			type: "POST",
			cache: false,
			data:{
				id: $('#id_modal').val(),
				gkrendszam: $('#name_modal').val(),
				gkszin: $('#email_modal').val(),
				gkalvazszam: $('#phone_modal').val(),
				gkmuszakierv: $('#city_modal').val(),
			},
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				if(dataResult.statusCode==200){
					$('#update_country').modal().hide();
					alert('Data updated successfully !');
					location.reload();
				}
			}
		});
	});
});
