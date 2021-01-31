<?php

echo file_get_contents('templates/head.tpl');
echo file_get_contents('templates/nav.tpl');
?>



<div class="kozep">
<div style="margin: auto;width: 60%;">
	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<form id="fupForm" name="form1" method="post">
		<div class="form-group">
			<label for="pwd">Gépkocsi Rendszám:</label>
			<input type="text" class="form-control" id="gkrendszam" placeholder="Rendszám" name="gkrendszam">
		</div>
		<div class="form-group">
			<label for="pwd">Gépkocsi Szín:</label>
			<input type="text" class="form-control" id="gkszin" placeholder="Szín" name="gkszin">
		</div>
		<div class="form-group">
			<label for="pwd">Gépkocsi Alvázszám:</label>
			<input type="text" class="form-control" id="gkalvazszam" placeholder="Alvázszám" name="gkalvazszam">
		</div>
		<div class="form-group" >
			<label for="pwd">Gépkocsi Műszakiérvényesség:</label>
			<input type="date" class="form-control" id="gkmuszakierv" placeholder="Műszaki Érvényesség" name="gkmuszakierv">
		</div>
		<input type="button" name="save" class="btn btn-primary" value="Mentés" id="butsave">
	</form>
</div>
<?php



echo file_get_contents('templates/footer.tpl');
?>
