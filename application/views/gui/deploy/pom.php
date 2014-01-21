<!-- Upload artifact -->

<div>
	<div class="page-header">
		<h2><strong>Step 2:</strong> Edit artifact details</h2>
	</div>
	<?php if (isset($errors)): ?>
		<div class="alert alert-danger">
			All fields exept the classifier are required.
		</div>
	<?php endif; ?>
	<form role="form" method="post">
		<div class="form-group">
			<label for="repository">Repository</label>
			<select class="form-control" name="repository" id="repository">
				<?php foreach ($repositories as $repository): ?>
					<option <?php if ($settings['repository'] == $repository) { echo 'selected="selected"'; } ?>><?php echo $repository; ?></option>
				<?php endforeach; ?>
				
			</select>
		</div>
		<div class="form-group">
			<label for="groupId">Group id</label>
			<input type="text" class="form-control" name="groupId" id="groupId" value="<?php echo $settings['groupId']; ?>">
		</div>
		<div class="form-group">
			<label for="artifactId">Artifact id</label>
			<input type="text" class="form-control" name="artifactId" id="artifactId" value="<?php echo $settings['artifactId']; ?>">
		</div>
		<div class="form-group">
			<label for="version">Version</label>
			<input type="text" class="form-control" name="version" id="version" value="<?php echo $settings['version']; ?>">
		</div>
		<div class="form-group">
			<label for="classifier">Classifier</label>
			<input type="text" class="form-control" name="classifier" id="classifier" value="<?php if (isset($settings['classifier'])) echo $settings['classifier']; ?>">
		</div>
		<div class="form-group">
			<label for="type">Type</label>
			<input type="text" class="form-control" name="type" id="type" value="<?php echo $settings['type']; ?>">
			<p class="help-block">This has to be jar or war.</p>
		</div>
		<div class="btn-group">
			<button type="submit" class="btn btn-primary">
				Deploy
			</button>
			<a class="btn btn-default" href="<?php echo Route::get('default') -> uri(array('controller' => 'deploy', 'action' => 'dependency')); ?>">
				Add dependencies
			</a>
		</div>
		
		<div class="form-group">
			<label for="pom">Pom</label>
			<textarea name="pom" id="pom" class="form-control" rows="30" readonly="readonly"><?php echo htmlspecialchars($settings['pom']); ?></textarea>
		</div>
	</form>
</div>