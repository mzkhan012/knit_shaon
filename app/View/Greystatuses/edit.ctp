<div class="greystatuses form">
<?php echo $this->Form->create('Greystatus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Greystatus'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Greystatus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Greystatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Greystatuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rolls'), array('controller' => 'rolls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roll'), array('controller' => 'rolls', 'action' => 'add')); ?> </li>
	</ul>
</div>
