<div id="qsl_card_labels_container" class="container">

<br>
	<?php if($this->session->flashdata('message')) { ?>
		<!-- Display Message -->
		<div class="alert-message error">
		  <p><?php echo $this->session->flashdata('message'); ?></p>
		</div>
	<?php } ?>

<?php echo validation_errors(); ?>

<form method="post" action="<?php echo site_url('labels/createpaper'); ?>" name="create_paper_type">

	<div class="card">
		<h2 class="card-header"><?php echo $page_title; ?></h2>

		<div class="card-body">

			<!-- Label Name Input -->
	    	<div class="form-group row">
			    <label class= "col-sm-2 col-form-label" for="PaperName">Paper Type Name</label>
				<div class="col-sm-4">
					<input name="paper_name" type="text" class="form-control" id="PaperName" aria-describedby="paper_nameHelp">
					<small id="paper_nameHelp" class="form-text text-muted">Paper name used for display purposes, so pick something meaningful.</small>
	</div>
					<label class="col-sm-2 col-form-label" for="measurementType">Measurement used</label>
					<div class="col-sm-4">
						<select name="measurementType" class="form-control" id="measurementType">
							<option selected value="mm">Millimeters</option>
							<!-- <option value="in">Inches</option> -->
						</select>
					</div>
  			</div>

			<div class="form-group row">
    			<label class="col-sm-2 col-form-label" for="width">Width of paper</label>
			    <div class="col-sm-4">
				    <input name="width" type="text" class="form-control" id="width" aria-describedby="widthHelp">
			    	<small id="widthHelp" class="form-text text-muted">Total width of paper.</small>
			    </div>

    			<label class="col-sm-2 col-form-label" for="height">Height of paper</label>
			    <div class="col-sm-4">
				    <input name="height" type="text" class="form-control" id="height" aria-describedby="heightHelp">
			    	<small id="heightHelp" class="form-text text-muted">Total height of paper</small>
			    </div>
  			</div>

  			<button type="submit" class="btn btn-primary"><i class="fas fa-plus-square"></i> Save Paper Type</button>
		</div>
	</div>

</form>

</div>
<br>
