<h2 class="text-center mt-4">Requests</h2 <div class="table-responsive">
<table class="table table-hover table-condensed table-striped table-bordered mt-4">
	<thead>
		<tr>
			<th scope="col">Org Name</th>
			<th scope="col">Org Address</th>
			<th scope="col">Org Phone</th>
			<th scope="col">Org Email</th>
			<th scope="col">Req Name</th>
			<th scope="col">Req Email</th>
			<th scope="col">Req Phone</th>
			<th scope="col">Req kits</th>
			<th scope="col">Req Date</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($requests as $request) : ?>
		<tr>
			<th scope="row">
				<?php echo ucfirst($request['OrgName']); ?>
			</th>
			<td class="small">
				<?php echo $request['OrgStreetAddr']; ?><br>
				<?php echo $request['OrgCity']; ?>,&nbsp AR<br>
				<?php echo $request['OrgZip']; ?>
			</td>
			<td class="small">
				<?php echo $request['OrgPhone']; ?>
			</td>
			<td class="small">
				<?php echo $request['OrgAdminEmail']; ?>
			</td>
			<td class="small">
				<?php echo ucfirst($request['ReqName']); ?>
			</td>
			<td class="small">
				<?php echo $request['ReqEmail']; ?>
			</td>
			<td class="small">
				<?php echo $request['ReqPhone']; ?>
			</td>
			<td class="small">
				<?php echo $request['ReqKits']; ?>
			</td>
			<td class="small">
				<?php $timestamp = strtotime($request['ReqDate']); echo date('m/d/y', $timestamp);?>
			</td>
			<td class='small'>
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<?php echo form_open('/requests/checkout/'.$request['id']); ?>
					<input type="submit" value="checkout" class="btn btn-outline-success"></form>
					<?php echo form_open('/requests/delete/'.$request['id']); ?>
					<input type="submit" value="delete" class="btn btn-outline-danger"></form>
				</div>
			</td>
			<?php endforeach; ?>
		</tr>

	</tbody>
</table>
</div>
