<div class="internalorders form">
<?php echo $this->Form->create('Internalorder'); ?>
	<fieldset>
		<legend><?php echo __('Add Internalorder'); ?></legend>
	<?php
		echo $this->Form->input('Internalorder.title');
		echo $this->Form->input('orderitem_count',array('type'=>'hidden'));
	?>
<?php echo $this->Form->create('Orderitem'); ?>
    <legend><?php echo __('Add Orderitem');?></legend>
    <?php echo $this->Form->input('Orderitem.0.title');?>
    <?php echo $this->Form->input('Orderitem.0.weight');?>
    <?php echo $this->Form->input('Orderitem.1.title');?>
    <?php echo $this->Form->input('Orderitem.1.weight');?>
    <?php echo $this->Form->input('Orderitem.2.title');?>
    <?php echo $this->Form->input('Orderitem.2.weight');?>
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
