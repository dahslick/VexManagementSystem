<h2 class="text-center">Request</h2>
<p class="text-center">Please enter the following information to request a Vex IQ kit.</p>
<p class="text-center small">Due to limited supply, requested will be filled by need.</p>
<br>

<?php echo validation_errors(); ?>
<?php echo form_open('requestForm'); ?>
<div class="row">
	<div class="col-md-3 offset-md-2">
		<label for="OrgName">Organization/School Name</label>
		<input type="text" class="form-control" name="OrgName" placeholder="Enter Name">
	</div>
	<div class="col-md-3 offset-md-2">
		<label for="OrgStreetAddr">Organization/School Street Address</label>
		<input type="text" class="form-control" name="OrgStreetAddr" placeholder="Enter Street">
	</div>
</div>
<br>
<br>
<div class="row">
	<div class="col-md-3 offset-md-2">
		<label for="OrgCity">Organization/School City</label>
		<input type="text" class="form-control" name="OrgCity" placeholder="Enter City">

	</div>
	<div class="col-md-3 offset-md-2">
		<label for="OrgZip">Organization/School Zip Code</label>
		<input type="number" class="form-control" name="OrgZip" placeholder="Enter Zip">
	</div>
</div>
<br>
<br>
<div class="row">
	<div class="col-md-3 offset-md-2">
		<label for="OrgPhone">Organization/School Phone</label>
		<input type="tel" class="form-control" name="OrgPhone" placeholder="Enter Phone #">
	</div>

	<div class="col-md-3 offset-md-2">
		<label for="OrgAdminEmail">Organization Admin Email</label>
		<input type="email" class="form-control" name="OrgAdminEmail" placeholder="Enter Admin Email">
	</div>
</div>
<br>
<br>
<div class="row">
	<div class="col-md-3 offset-md-2">
		<label for="ReqName">Requestee Name</label>
		<input type="text" class="form-control" name="ReqName" placeholder="Enter Requestee Name">
	</div>

	<div class="col-md-3 offset-md-2">
		<label for="ReqEmail">Requestee Email</label>
		<input type="email" class="form-control" name="ReqEmail" placeholder="Enter Requestee Email">
	</div>
</div>
<br>
<br>
<div class="row">
	<div class="col-md-3 offset-md-2">
		<label for="ReqPhone">Requestee Phone</label>
		<input type="tel" class="form-control" name="ReqPhone" placeholder="Enter Phone #">
	</div>
	<div class="col-md-3 offset-md-2">
		<label for="ReqKits">Kits Requested</label>
		<select class="form-control" name="ReqKits">
			<option value="" selected disabled>--</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
		<small id="requestHelp" class="form-text text-muted">*Limit 5</small>
	</div>
</div>
<br>
<br>
<div class="row">
	<div class=" col-md-4 offset-md-4 text-center">
		<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
	</div>
</div>
</form>
