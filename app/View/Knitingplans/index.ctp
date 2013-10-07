<div class="knitingplans index">
	<h2><?php echo __('Knitingplans'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('orderitem_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('jobcard_count'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($knitingplans as $knitingplan): ?>
	<tr>
		<td><?php echo h($knitingplan['Knitingplan']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($knitingplan['Orderitem']['title'], array('controller' => 'orderitems', 'action' => 'view', $knitingplan['Orderitem']['id'])); ?>
		</td>
		<td><?php echo h($knitingplan['Knitingplan']['title']); ?>&nbsp;</td>
		<td><?php echo h($knitingplan['Knitingplan']['jobcard_count']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $knitingplan['Knitingplan']['id'])); ?>
            <?php echo $this->Html->link(__('Knittin Plan Detail'), array('action' => 'detail', $knitingplan['Knitingplan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $knitingplan['Knitingplan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $knitingplan['Knitingplan']['id']), null, __('Are you sure you want to delete # %s?', $knitingplan['Knitingplan']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Knitingplan'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Orderitems'), array('controller' => 'orderitems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderitem'), array('controller' => 'orderitems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobcards'), array('controller' => 'jobcards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobcard'), array('controller' => 'jobcards', 'action' => 'add')); ?> </li>
	</ul>
</div>
