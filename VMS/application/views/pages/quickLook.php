<h1 class="title text-center mt-5">Quick Look</h1>
	<div class="card-deck mt-5">
		<div class="card text-white bg-secondary col-6 col-md-4 mr-4">
			<div class="card-header text-center Text-info">
				<h3>Available:</h3>
			</div>
			<div class="card-body">
				<p class="card-text text-center display-2 text-success">##</p>
			</div>
		</div>
		<div class="card text-white bg-secondary col-6 col-md-4 mx-4 ">
			<div class="card-header text-center text-info">
				<h3>Requests:</h3>
			</div>
			<div class="card-body">
				<p class="card-text text-center display-2 text-danger">
					<?php echo $requests; ?>
				</p>
			</div>
</div>
		<div class="card text-white bg-secondary col-6 col-md-4 ml-4 ">
			<div class="card-header text-center text-info">
				<h3>Checked Out:</h3>
			</div>
			<div class="card-body">
				<p class="card-text text-center display-2 text-warning">
					<?php echo $checkedOut; ?>
				</p>
			</div>
		</div>
	</div>
