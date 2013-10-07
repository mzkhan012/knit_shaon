<div class="internalorders view">
<h2><?php  echo __('Internalorder'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($internalorder['Internalorder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($internalorder['Internalorder']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orderitem Count'); ?></dt>
		<dd>
			<?php echo h($internalorder['Internalorder']['orderitem_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($internalorder['Internalorder']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($internalorder['Internalorder']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Internalorder'), array('action' => 'edit', $internalorder['Internalorder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Internalorder'), array('action' => 'delete', $internalorder['Internalorder']['id']), null, __('Are you sure you want to delete # %s?', $internalorder['Internalorder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Internalorders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Internalorder'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderitems'), array('controller' => 'orderitems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderitem'), array('controller' => 'orderitems', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orderitems'); ?></h3>
	<?php if (!empty($internalorder['Orderitem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Internalorder Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Createdby'); ?></th>
		<th><?php echo __('Modifiedby'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($internalorder['Orderitem'] as $orderitem): ?>
		<tr>
			<td><?php echo $orderitem['id']; ?></td>
			<td><?php echo $orderitem['internalorder_id']; ?></td>
			<td><?php echo $orderitem['title']; ?></td>
			<td><?php echo $orderitem['weight']; ?></td>
			<td><?php echo $orderitem['created']; ?></td>
			<td><?php echo $orderitem['modified']; ?></td>
			<td><?php echo $orderitem['createdby']; ?></td>
			<td><?php echo $orderitem['modifiedby']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orderitems', 'action' => 'view', $orderitem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orderitems', 'action' => 'edit', $orderitem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orderitems', 'action' => 'delete', $orderitem['id']), null, __('Are you sure you want to delete # %s?', $orderitem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Orderitem'), array('controller' => 'orderitems', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
