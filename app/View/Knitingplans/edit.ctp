<div class="knitingplans form">
<?php echo $this->Form->create('Knitingplan'); ?>
	<fieldset>
		<legend><?php echo __('Edit Knitingplan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('orderitem_id');
		echo $this->Form->input('title');
		echo $this->Form->input('jobcard_count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Knitingplan.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Knitingplan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Knitingplans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orderitems'), array('controller' => 'orderitems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderitem'), array('controller' => 'orderitems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobcards'), array('controller' => 'jobcards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobcard'), array('controller' => 'jobcards', 'action' => 'add')); ?> </li>
	</ul>
</div>
