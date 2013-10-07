<div class="greystorestatuses view">
<h2><?php  echo __('Greystorestatus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($greystorestatus['Greystorestatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($greystorestatus['Greystorestatus']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Statuscode'); ?></dt>
		<dd>
			<?php echo h($greystorestatus['Greystorestatus']['statuscode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Greystorestatus'), array('action' => 'edit', $greystorestatus['Greystorestatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Greystorestatus'), array('action' => 'delete', $greystorestatus['Greystorestatus']['id']), null, __('Are you sure you want to delete # %s?', $greystorestatus['Greystorestatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Greystorestatuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Greystorestatus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rolls'), array('controller' => 'rolls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roll'), array('controller' => 'rolls', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rolls'); ?></h3>
	<?php if (!empty($greystorestatus['Roll'])): ?>
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
		foreach ($greystorestatus['Roll'] as $roll): ?>
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
