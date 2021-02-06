<?php

defined('_JEXEC') or die ();

JHtml::_('formbehavior.chosen','select');
JHtml::_('behavior.keepalive');

?>

<form action="<?php echo JRoute::_('index.php?option=com_crib&layout=edit&id=' . (int)$this->item->id); ?>"  method="POST" name="adminForm" id="adminForm" class="form-validate">

<div class="row-fluid" >
	<div class="span9">
		<?php $fieldset = $this->form->getFieldset('basic'); ?>
		
		      <?php foreach($fieldset as $field): ?>
				  
				<?php  if(!($field->getAttribute('name') == 'state')): ?>	
				
					<?php	echo $field->renderField();	?>
						
				<?php endif ?>				
								  
			   <?php endforeach ?> 	
	</div>
	<div class="span3">
	
	<?php echo JLayoutHelper::render('edit.global', $this, '/administrator/components/com_crib'); ?>
	
	</div>

</div>

<?php echo $this->form->getField('id')->renderField(); ?>

<input type="hidden" name="task" value="word.edit" >

<?php echo JHtml::_('form.token'); ?>

</form>

