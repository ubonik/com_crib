<?php

defined('_JEXEC') or die;


?>

<form action="<?php echo JRoute::_('index.php?option=com_crib&view=categories') ?>" method="POST" name="adminForm" id="adminForm">

 <?php if(!empty($this->sidebar)) :?>
    <div id="j-sidebar-container" class="span2">
		<?php echo $this->sidebar; ?>
	</div>
<?php endif; ?>

<div id="j-main-container" class="span10">
<table class="table table-striped table-hover">
	<thead>
		<th width="1%">
			<?php echo '#'; ?>
		</th>
		<th width="2%">
			
			<?php echo JHtml::_('grid.checkall'); ?>
		</th>
		<th width="90%">
			<?php echo 'Наименование'; ?>		
		</th>
		<th width="5%">
			<?php echo JText::_('JSTATUS'); ?>
		</th>
		<th width="2%">
			<?php echo 'ID'; ?>
		</th>
		<th></th>
		<th></th>
	
	
	</thead>
	<tbody>
		<?php if(!empty($this->items)):?>
	    <?php $i = 1; ?>
			<?php foreach($this->items as $key=>$item): ?>			
				<tr>
					<td>
					   <?php  echo $i; ?>
					</td>
					<td>
						<?php  echo JHtml::_('grid.id', $key, $item->id); ?>
					</td>					
				    <td>
						<?php $link = JRoute::_("index.php?option=com_crib&task=category.edit&id=".$item->id);?>
						<?php  echo JHtml::_('link', $link, $item->name); ?>
				    </td>			
					<td>
						<?php  echo JHtml::_('jgrid.published', $item->state, $key, 'categories.'); ?>
					</td>	
				    <td>
						<?php echo $item->id; ?>
				    </td>				   						
				</tr>
			  <?php  $i++; ?>
			<?php endforeach;  ?>
		<?php endif; ?>
	
	</tbody>
    <tfoot>
		<tr>
	        <td colspan='5'>
		    <div style="float:left"><?php echo $this->pagination->getListFooter()?></div>
		    <div style="float:right">Показать:  <?php echo $this->pagination->getLimitBox()?></div>
	        </td>	
	    </tr>	
	</tfoot>
</table>

<input type="hidden" name="task" value="">
<input type="hidden" name="boxchecked" value="0">

<?php echo JHtml::_('form.token')?>
</form>
