<div class="rolls form">
<?php echo $this->Form->create('Roll'); ?>
	<fieldset>
		<legend><?php echo __('Edit Roll'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('barcode');
		echo $this->Form->input('weight');
		echo $this->Form->input('createdby',array('type'=>'hidden'));
		echo $this->Form->input('modifiedby',array('type'=>'hidden'));
		echo $this->Form->input('islabeled');
		echo $this->Form->input('greystorestatus_id');
		echo $this->Form->input('dyingstatus_id');
		echo $this->Form->input('finishingstatus_id');
		echo $this->Form->input('greystatus_id');
		echo $this->Form->input('orderstatus_id');
		echo $this->Form->input('mainstorestatus_id');
		echo $this->Form->input('jobcard_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Roll.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Roll.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rolls'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Greystorestatuses'), array('controller' => 'greystorestatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Greystorestatus'), array('controller' => 'greystorestatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dyingstatuses'), array('controller' => 'dyingstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dyingstatus'), array('controller' => 'dyingstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Finishingstatuses'), array('controller' => 'finishingstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Finishingstatus'), array('controller' => 'finishingstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Greystatuses'), array('controller' => 'greystatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Greystatus'), array('controller' => 'greystatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderstatuses'), array('controller' => 'orderstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderstatus'), array('controller' => 'orderstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mainstorestatuses'), array('controller' => 'mainstorestatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mainstorestatus'), array('controller' => 'mainstorestatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobcards'), array('controller' => 'jobcards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobcard'), array('controller' => 'jobcards', 'action' => 'add')); ?> </li>
	</ul>
</div>
