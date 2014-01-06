<?php
	$menu = array(
		"home" => "Home",
		"artifacts" => "Artifacts",
		"deploy" => "Deploy",
		
	);

	foreach ($menu as $controller => $urltext):
?>
		<li <?php echo ($controller == $current_page) ? 'class="active"' : ''; ?>>
			<a href="<?php echo Route::get('menu')->uri(array('controller' => $controller)); ?>" >
				<?php echo $urltext; ?>
			</a>
		</li>
<?php	
	endforeach;
