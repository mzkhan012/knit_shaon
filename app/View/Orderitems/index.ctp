<div class="orderitems index">
	<h2><?php echo __('Orderitems'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('internalorder_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('createdby'); ?></th>
			<th><?php echo $this->Paginator->sort('modifiedby'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($orderitems as $orderitem): ?>
	<tr>
		<td><?php echo h($orderitem['Orderitem']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($orderitem['Internalorder']['title'], array('controller' => 'internalorders', 'action' => 'view', $orderitem['Internalorder']['id'])); ?>
		</td>
		<td><?php echo h($orderitem['Orderitem']['title']); ?>&nbsp;</td>
		<td><?php echo h($orderitem['Orderitem']['weight']); ?>&nbsp;</td>
		<td><?php echo h($orderitem['Orderitem']['created']); ?>&nbsp;</td>
		<td><?php echo h($orderitem['Orderitem']['modified']); ?>&nbsp;</td>
		<td><?php echo h($orderitem['Orderitem']['createdby']); ?>&nbsp;</td>
		<td><?php echo h($orderitem['Orderitem']['modifiedby']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $orderitem['Orderitem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $orderitem['Orderitem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $orderitem['Orderitem']['id']), null, __('Are you sure you want to delete # %s?', $orderitem['Orderitem']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Orderitem'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Internalorders'), array('controller' => 'internalorders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Internalorder'), array('controller' => 'internalorders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Knitingplans'), array('controller' => 'knitingplans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Knitingplan'), array('controller' => 'knitingplans', 'action' => 'add')); ?> </li>
	</ul>
</div>
