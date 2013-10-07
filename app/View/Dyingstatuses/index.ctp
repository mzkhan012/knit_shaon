<div class="dyingstatuses index">
	<h2><?php echo __('Dyingstatuses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('statuscode'); ?></th>
			<th><?php echo $this->Paginator->sort('batchno'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dyingstatuses as $dyingstatus): ?>
	<tr>
		<td><?php echo h($dyingstatus['Dyingstatus']['id']); ?>&nbsp;</td>
		<td><?php echo h($dyingstatus['Dyingstatus']['title']); ?>&nbsp;</td>
		<td><?php echo h($dyingstatus['Dyingstatus']['statuscode']); ?>&nbsp;</td>
		<td><?php echo h($dyingstatus['Dyingstatus']['batchno']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dyingstatus['Dyingstatus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dyingstatus['Dyingstatus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dyingstatus['Dyingstatus']['id']), null, __('Are you sure you want to delete # %s?', $dyingstatus['Dyingstatus']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dyingstatus'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rolls'), array('controller' => 'rolls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roll'), array('controller' => 'rolls', 'action' => 'add')); ?> </li>
	</ul>
</div>
