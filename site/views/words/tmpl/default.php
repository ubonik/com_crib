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
foreach ($items as $item): ?>
<?php // print_r($item); ?>

<div>

<?php echo $i.'. ----    '.$item->english.' -------- '; ?> 
 
<input type="checkbox" id="raz<?php echo $i; ?>" class="del"/><label for="raz<?php echo $i; ?>" class="del">нажать</label><span><?php echo ' -------- '.$item->rus; ?></span>
</div>
<?php $i++; ?>


<?php endforeach;  ?>
		
	<div colspan='5'>
     <div style="float:left"><?php echo $this->pagination->getListFooter()?></div>
		<div style="float:right"><?php echo $this->pagination->getLimitBox()?></div>
	 	</div>
	
	
	
	
   <input type = "hidden" name = "task" value="">  
<?php echo JHtml::_('form.token'); ?>

</form>


