<div class="orderitems form">
<?php echo $this->Form->create('Orderitem'); ?>
	<fieldset>
		<legend><?php echo __('Add Orderitem'); ?></legend>
	<?php
		echo $this->Form->input('internalorder_id');
		echo $this->Form->input('title');
		echo $this->Form->input('weight');
		echo $this->Form->input('createdby');
		echo $this->Form->input('modifiedby');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Orderitems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Internalorders'), array('controller' => 'internalorders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Internalorder'), array('controller' => 'internalorders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Knitingplans'), array('controller' => 'knitingplans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Knitingplan'), array('controller' => 'knitingplans', 'action' => 'add')); ?> </li>
	</ul>
</div>
