<div class="finishingstatuses view">
<h2><?php  echo __('Finishingstatus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($finishingstatus['Finishingstatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($finishingstatus['Finishingstatus']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Statuscode'); ?></dt>
		<dd>
			<?php echo h($finishingstatus['Finishingstatus']['statuscode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Finishingstatus'), array('action' => 'edit', $finishingstatus['Finishingstatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Finishingstatus'), array('action' => 'delete', $finishingstatus['Finishingstatus']['id']), null, __('Are you sure you want to delete # %s?', $finishingstatus['Finishingstatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Finishingstatuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Finishingstatus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rolls'), array('controller' => 'rolls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roll'), array('controller' => 'rolls', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rolls'); ?></h3>
	<?php if (!empty($finishingstatus['Roll'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Createdby'); ?></th>
		<th><?php echo __('Modifiedby'); ?></th>
		<th><?php echo __('Islabeled'); ?></th>
		<th><?php echo __('Greystorestatus Id'); ?></th>
		<th><?php echo __('Dyingstatus Id'); ?></th>
		<th><?php echo __('Finishingstatus Id'); ?></th>
		<th><?php echo __('Greystatus Id'); ?></th>
		<th><?php echo __('Orderstatus Id'); ?></th>
		<th><?php echo __('Mainstorestatus Id'); ?></th>
		<th><?php echo __('Jobcard Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($finishingstatus['Roll'] as $roll): ?>
		<tr>
			<td><?php echo $roll['id']; ?></td>
			<td><?php echo $roll['barcode']; ?></td>
			<td><?php echo $roll['created']; ?></td>
			<td><?php echo $roll['modified']; ?></td>
			<td><?php echo $roll['weight']; ?></td>
			<td><?php echo $roll['createdby']; ?></td>
			<td><?php echo $roll['modifiedby']; ?></td>
			<td><?php echo $roll['islabeled']; ?></td>
			<td><?php echo $roll['greystorestatus_id']; ?></td>
			<td><?php echo $roll['dyingstatus_id']; ?></td>
			<td><?php echo $roll['finishingstatus_id']; ?></td>
			<td><?php echo $roll['greystatus_id']; ?></td>
			<td><?php echo $roll['orderstatus_id']; ?></td>
			<td><?php echo $roll['mainstorestatus_id']; ?></td>
			<td><?php echo $roll['jobcard_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rolls', 'action' => 'view', $roll['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rolls', 'action' => 'edit', $roll['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rolls', 'action' => 'delete', $roll['id']), null, __('Are you sure you want to delete # %s?', $roll['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Roll'), array('controller' => 'rolls', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
