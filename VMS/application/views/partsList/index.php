<h2 class="text-center mt-4">Parts List</h2> 
<?php echo validation_errors(); ?>

<?php echo form_open('partsList','class="row col-md-12"');?>
		<div class="col-md-4">
		<input class="form-control mr-sm-2" type="text" name="name" placeholder="Name">
		</div>
		<div class="col-md-2">
		<input class="form-control mr-sm-2" type="text" name="spc" placeholder="Spc">
		</div>
		<div class="col-md-2">
		<input class="form-control mr-sm-2" type="text" name="amountInOrder" placeholder="Prod Bundle">
		</div>
		<div class="col-md-2">
		<input class="form-control mr-sm-2" type="text" name="cost" placeholder="Cost">
		</div>
		<button class="btn btn-outline-success col-md-2" type="submit">Add</button>
</form>


<div class="table-responsive">
<table class="table table-hover table-condensed table-striped table-bordered mt-4">
	<thead>
		<tr>
			<th scope="col" class="text-center">Prod Name</th>
			<th scope="col" class="text-center">Prod Spc</th>
			<th scope="col" class="text-center">Prod Bundle</th>
            <th scope="col" class="text-center">Prod Count</th>
            <th scope="col" class="text-center">Prod Cost</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($parts as $part) : ?>
		<tr>
			<th scope="row">
				<?php echo ucfirst($part['name']); ?>
			</th>
			<td class="small text-center">
				<?php echo $part['spc']; ?>
			</td> 
			<td class="small text-center">
				<?php echo ucfirst($part['amountInOrder']); ?>
            </td>
            <td class="small text-center">
				<?php echo ucfirst($part['totalCount']); ?>
            </td>
            <td class="small text-center">
				<?php echo $part['cost']; ?>
            </td> 
			<?php endforeach; ?>
        </tr>
	</tbody>
</table>
</div>
