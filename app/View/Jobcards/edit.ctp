<div class="jobcards form">
<?php echo $this->Form->create('Jobcard'); ?>
	<fieldset>
		<legend><?php echo __('Edit Jobcard'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('knitingplan_id');
		echo $this->Form->input('title');
		echo $this->Form->input('jobcardno');
		echo $this->Form->input('barcode');
		echo $this->Form->input('roll_count');
		echo $this->Form->input('createdby');
		echo $this->Form->input('modifiedby');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Jobcard.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Jobcard.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobcards'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Knitingplans'), array('controller' => 'knitingplans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Knitingplan'), array('controller' => 'knitingplans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rolls'), array('controller' => 'rolls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roll'), array('controller' => 'rolls', 'action' => 'add')); ?> </li>
	</ul>
</div>
