
<?php

echo file_get_contents('templates/head.tpl');
echo file_get_contents('templates/nav.tpl');
?>
  <div class="felvlista">

  <h2>Felvitelre került adatok</h2>
  <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<table class="table table-bordered table-sm" >
    <thead>
      <tr>
        <th>Rendszám</th>
        <th>Szín</th>
        <th>Alvázszám</th>
		<th>Műszaki Érvényesség</th>
		<th>Törlés</th>
		<th>Szerkesztés</th>
      </tr>
    </thead>
    <tbody id="table">

    </tbody>
  </table>
</div>

<!-- Modal Update-->
    <div class="modal fade" id="update_country" role="dialog">
		<div class="modal-dialog modal-sm">
		  <div class="modal-content">
			<div class="modal-header" style="color:#fff;background-color: #e35f14;padding:6px;">
			  <h5 class="modal-title"><i class="fa fa-edit"></i> Update</h5>

			</div>
			<div class="modal-body">

				<!--1-->
				<div class="row">
					<div class="col-md-3">
					    <label>gkrendszam</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="name_modal" id="name_modal" class="form-control-sm" required>
					</div>
				</div>
			    <!--2-->
				<div class="row">
					<div class="col-md-3">
					    <label>gkszin</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="email_modal" id="email_modal" class="form-control-sm" required>
					</div>
				</div>
			    <!--3-->
				<div class="row">
					<div class="col-md-3">
					    <label>gkalvazszam</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="phone_modal" id="phone_modal" class="form-control-sm" required>
					</div>
				</div>
				<!--4-->
				<div class="row">
					<div class="col-md-3">
					    <label>gkmuszakierv</label>
					</div>
					<div class="col-md-9">
						<input type="date" name="city_modal" id="city_modal" class="form-control-sm" required>
					</div>
				</div>
				<input type="hidden" name="id_modal" id="id_modal" class="form-control-sm">
			</div>
			<div class="modal-footer" style="padding-bottom:0px !important;text-align:center !important;">
			<p style="text-align:center;float:center;"><button type="submit" id="update_data" class="btn btn-default btn-sm" style="background-color: #e35f14;color:#fff;">Save</button>
			<button type="button" class="btn btn-default btn-sm" data-dismiss="modal" style="background-color: #e35f14;color:#fff;">Close</button></p>

		  </div>

		  </div>
		</div>
	</div>
<?php
echo file_get_contents('templates/footer.tpl');
?>

</div>

<script src="js/valtoztat.js"></script>
<script src="js/torles.js"></script>
</body>
</html>
