$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var gkrendszam = $('#gkrendszam').val();
		var gkszin = $('#gkszin').val();
		var gkalvazszam = $('#gkalvazszam').val();
		var gkmuszakierv = $('#gkmuszakierv').val();
		if(gkrendszam!="" && gkszin!="" && gkalvazszam!="" && gkmuszakierv!=""){
			$.ajax({
				url: "views/save.php",
				type: "POST",
				data: {
					gkrendszam: gkrendszam,
					gkszin: gkszin,
					gkalvazszam: gkalvazszam,
					gkmuszakierv: gkmuszakierv				
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Adatok feltöltve az adatbázisba !'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Kérem töltse ki az adatokat !');
		}
	});
});