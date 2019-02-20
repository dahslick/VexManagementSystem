<h2 class="text-center">Request</h2>
<p class="text-center">Please enter the following information to request a Vex IQ kit.</p>
<p class="text-center small">Due to limited supply, requested will be filled by need.</p>
<br>
<form>
	<fieldset class="form-group">
		<div class="row">
			<div class="col-md-3 offset-md-2">
				<label for="inputOrganizationName">Organization/School Name</label>
				<input type="text" class="form-control" id="inputOrg" placeholder="Enter Name">
			</div>
			<div class="col-md-3 offset-md-2">
				<label for="inputOrganizationStreet">Organization/School Street Address</label>
				<input type="text" class="form-control" id="inputStreet" placeholder="Enter Street">
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-3 offset-md-2">
				<label for="inputOrganizationCity">Organization/School City</label>
				<input type="text" class="form-control" id="inputCity" placeholder="Enter City">

			</div>
			<div class="col-md-3 offset-md-2">
				<label for="inputOrganizationZip">Organization/School Zip Code</label>
				<input type="number" class="form-control" id="inputZip" placeholder="Enter Zip">
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-3 offset-md-2">
				<label for="inputOrganizationPhone">Organization/School Phone</label>
				<input type="tel" class="form-control" id="inputOrgPhone" placeholder="Enter Phone #">
			</div>
			<div class="col-md-3 offset-md-2">
				<label for="inputRequesterName">Requester/Teacher Name</label>
				<input type="text" class="form-control" id="inputRequestName" placeholder="Enter Name">
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-3 offset-md-2">
				<label for="inputOrganizationPhone">Requester/Teacher Phone</label>
				<input type="tel" class="form-control" id="inputOrgPhone" placeholder="Enter Phone #">
			</div>
			<div class="col-md-3 offset-md-2">
				<label for="inputKitRequest">Kits Requested</label>
				<select class="form-control" id="inputKitRequestNumber">
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
	</fieldset>
</form>
