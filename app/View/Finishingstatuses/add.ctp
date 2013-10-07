<div class="finishingstatuses form">
<?php echo $this->Form->create('Finishingstatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Finishingstatus'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('statuscode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Finishingstatuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rolls'), array('controller' => 'rolls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roll'), array('controller' => 'rolls', 'action' => 'add')); ?> </li>
	</ul>
</div>
