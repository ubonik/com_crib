<?php

defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('formbehavior.chosen', 'select');


?>

<form action="<?php echo JRoute::_('index.php?option=com_crib&view=words')?>" 
    method="POST" name="adminForm" id="adminForm">
    
    <?php if (!empty($this->sidebar)): ?>
        <div id="j-sidebar-container" class="span2">
            <?php echo $this->sidebar; ?>
        </div>
    <?php endif; ?>
    <div id="j-main-container" class="span10">
		
		<?php echo JLayoutHelper::render('joomla.searchtools.default', ['view' => $this]) ?>
        <table class="table table-striped table-hover">
            <thead>				
                <th width="1%">номер</th>
                <th width="2%"><?php echo JHtml::_('grid.checkall') ?></th>
                <th width="35%">
					<?php echo JHtml::_('grid.sort', 'слово', 'english', $this->listDirn, $this->listOrder) ?>
				</th>
                <th width="35%">перевод</th>
                <th width="10%">
					<?php echo JHtml::_('grid.sort', 'JSTATUS', 'state', $this->listDirn, $this->listOrder) ?>
				</th>
				<th width="10%">					
					<?php echo JHtml::_('grid.sort', 'по порядку', 'ordering', $this->listDirn, $this->listOrder) ?>
					
					<?php if ($this->saveOrder):?>  
					    <?php echo JHtml::_('grid.order', $this->items, 'filesave.png', 'words.saveorder') ?>  
					<?php endif ?>    
				</th>
                <th width="7%">				
					<?php echo JHtml::_('grid.sort', 'id', 'id', $this->listDirn, $this->listOrder) ?>			
				</th>                
            </thead>
            <tbody>
				<?php if (!empty($this->items)): ?>
				<?php $i = 0; ?> 
				<?php foreach ($this->items as $key=>$item): ?>
                <tr>  
					        
                    <td><?php echo $i; ?></td>
                    <td><?php echo JHtml::_('grid.id', $key, $item->id); ?></td>
                    <?php $link = JRoute::_('index.php?option=com_crib&task=word.edit&id=' .$item->id) ?>
                    <td><?php echo JHtml::_('link', $link, $item->english); ?></td>
                    <td><?php echo $item->rus; ?></td>
                    <td><?php echo JHtml::_('jgrid.published', $item->state, $key, 'words.'); ?></td> 
                    
                    
                    <td>
						
						<?php if ($this->saveOrder): ?>
						    <?php if ($this->listDirn == 'asc'): ?>
						    <span><?php echo $this->pagination->orderUpIcon($i, true, 'words.orderup', 'JLIB_HTML_MOVE_UP',$this->saveOrder) ?></span>
						    <span><?php echo $this->pagination->orderDownIcon($i, $this->pagination->total, true, 'words.orderdown', 'JLIB_HTML_MOVE_DOWN', $this->saveOrder) ?></span>
						    
						    <?php elseif ($this->listDirn == 'desc'): ?>
						    <span><?php echo $this->pagination->orderUpIcon($i, true, 'words.orderdown', 'JLIB_HTML_MOVE_UP',$this->saveOrder) ?></span>
						    <span><?php echo $this->pagination->orderDownIcon($i, $this->pagination->total, true, 'words.orderup', 'JLIB_HTML_MOVE_DOWN', $this->saveOrder) ?></span>
						    <?php endif?>
						<?php endif ?>
						
						<?php $disabled = $this->saveOrder ? '': 'disabled="disabled"' ?>
						<input type="text" name="order[]" value="<?php echo $item->ordering ?>"  <?php echo $disabled ?> >
					</td> 
                    <td></td>                  
                </tr>
                <?php $i++; ?>
                <?php endforeach ?>        
                <?php endif ?>
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
    <input type="hidden" name="filter_order" value="<?php echo $this->listOrder; ?>">
    <input type="hidden" name="filter_order_Dir" value="<?php echo $this->listDirn ?>">
    
    <?php echo JHtml::_('form.token'); ?>
    
    </div>
</form>
