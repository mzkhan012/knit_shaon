<div class="orderitems view">
<h2><?php  echo __('Orderitem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($orderitem['Orderitem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Internalorder'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orderitem['Internalorder']['title'], array('controller' => 'internalorders', 'action' => 'view', $orderitem['Internalorder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($orderitem['Orderitem']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($orderitem['Orderitem']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($orderitem['Orderitem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($orderitem['Orderitem']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Createdby'); ?></dt>
		<dd>
			<?php echo h($orderitem['Orderitem']['createdby']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modifiedby'); ?></dt>
		<dd>
			<?php echo h($orderitem['Orderitem']['modifiedby']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orderitem'), array('action' => 'edit', $orderitem['Orderitem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orderitem'), array('action' => 'delete', $orderitem['Orderitem']['id']), null, __('Are you sure you want to delete # %s?', $orderitem['Orderitem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderitems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderitem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Internalorders'), array('controller' => 'internalorders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Internalorder'), array('controller' => 'internalorders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Knitingplans'), array('controller' => 'knitingplans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Knitingplan'), array('controller' => 'knitingplans', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Knitingplans'); ?></h3>
	<?php if (!empty($orderitem['Knitingplan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Orderitem Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Jobcard Count'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($orderitem['Knitingplan'] as $knitingplan): ?>
		<tr>
			<td><?php echo $knitingplan['id']; ?></td>
			<td><?php echo $knitingplan['orderitem_id']; ?></td>
			<td><?php echo $knitingplan['title']; ?></td>
			<td><?php echo $knitingplan['jobcard_count']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'knitingplans', 'action' => 'view', $knitingplan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'knitingplans', 'action' => 'edit', $knitingplan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'knitingplans', 'action' => 'delete', $knitingplan['id']), null, __('Are you sure you want to delete # %s?', $knitingplan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Knitingplan'), array('controller' => 'knitingplans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
