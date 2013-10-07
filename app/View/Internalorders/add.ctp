<div class="internalorders form">
<?php echo $this->Form->create('Internalorder'); ?>
	<fieldset>
		<legend><?php echo __('Add Internalorder'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('orderitem_count',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Internalorders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orderitems'), array('controller' => 'orderitems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderitem'), array('controller' => 'orderitems', 'action' => 'add')); ?> </li>
	</ul>
</div>
