<?php

defined('_JEXEC') or die();

JHtml::_('behavior.framework');
JHtml::_('bootstrap.framework');
JHtml::_('bootstrap.loadCss');

?>

<form action = "<?php echo htmlspecialchars(JUri::getInstance()->toString());?>" method = "post" name = "adminForm" id = "adminForm">

<?php  
    $items = $this->items;
    $i = 1;
?>
<? if ($items):?>
<?php foreach ($items as $key => $item): ?>

    <div>
    <span class="hidden"><?php echo JHtml::_('grid.id', $key, $item->id); ?></span>	
	<?php echo CribHelper::learnedWords($item->lerned, $key, 'sitewords.') ?> 
    <?php echo $i.'. ----    '.$item->english.' -------- '; ?>
 
        <input type="checkbox" id="raz<?php echo $i; ?>" class="del hidden" />
        <label for="raz<?php echo $i; ?>" class="del" > жми</label>
        <span class="del visible"><?php echo ' -------- '.$item->rus; ?></span>
    </div> 
<?php $i++; ?>

<?php endforeach; ?>
<?php endif; ?>
		
	    <div colspan='5'>
            <div style="float:left"><?php echo $this->pagination->getListFooter()?></div>
		    <div style="float:right"><?php echo $this->pagination->getLimitBox()?></div>
	 	</div>
	 		
        <input type = "hidden" name = "task" value="">
        <input type="hidden" name="boxchecked" value="0">
         
<?php echo JHtml::_('form.token'); ?>

</form>
