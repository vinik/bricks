
<div class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo $mashup['Mashup']['nome']; ?></h3>
	</div>

	<div class="panel-body">
		
		<?php echo $this->element($mashupContent, array('campos' => $objetos[0], 'chaves' => $chaves[0])); ?>
	
	</div>
</div>