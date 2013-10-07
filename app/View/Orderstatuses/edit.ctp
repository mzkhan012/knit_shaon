<div class="orderstatuses form">
<?php echo $this->Form->create('Orderstatus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Orderstatus'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('statuscode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Orderstatus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Orderstatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orderstatuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rolls'), array('controller' => 'rolls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roll'), array('controller' => 'rolls', 'action' => 'add')); ?> </li>
	</ul>
</div>
