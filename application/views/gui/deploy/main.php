<!-- Upload artifact -->

<div>
	<?php if (isset($succes)): ?>
		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Artifact added!</strong> <?php echo $succes; ?> has succesfully been added to the repository.
		</div>
	<?php endif; ?>
	<div class="page-header">
		<h2><strong>Step 1:</strong> Upload artifact file</h2>
	</div>
	<?php if (isset($errors)): ?>
		<div class="alert alert-danger">
			Only jar files smaller then 8M can be uploaded.
		</div>
	<?php endif; ?>
	<form role="form" method="post" enctype="multipart/form-data" action="<?php echo Route::get('default') -> uri(array('controller' => 'deploy', 'action' => 'upload')); ?>">
		<div class="form-group">
			<label for="artifactorSelector">Artifact upload</label>
			<input type="file" name="artifact" class="btn-default" id="artifactorSelector" title="Select your artifact">
			<p class="help-block">Select a artifact to upload, next you can edit the pom details.</p>
		</div>
		<button type="submit" class="btn btn-primary">
			Upload
		</button>
	</form>
</div>