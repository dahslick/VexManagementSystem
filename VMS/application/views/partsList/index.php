<h2 class="text-center mt-4">Parts List</h2 <div class="table-responsive">
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
