<div class="knitingplans view">
<h2><?php echo __('Internalorder'); //debug($knitingplan); die()?></h2>
<dl>
<dt><?php echo __('Title'); ?></dt>
<dd><?php echo h($knitingplan['Orderitem']['Internalorder']['title']); ?></dd>
<dt><?php echo __('Id'); ?></dt>
<dd><?php echo h($knitingplan['Orderitem']['Internalorder']['id']); ?></dd>
</dl>
</div>

<div class="knitingplans view">
<h2><?php echo __('Order Item'); //debug($knitingplan); die()?></h2>
<dl>
<dt><?php echo __('Title'); ?></dt>
<dd><?php echo h($knitingplan['Orderitem']['Internalorder']['title']); ?></dd>
<dt><?php echo __('Id'); ?></dt>
<dd><?php echo h($knitingplan['Orderitem']['Internalorder']['id']); ?></dd>
</dl>
</div>


<div class="knitingplans view">
<h2><?php  echo __('Knitingplan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($knitingplan['Knitingplan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orderitem'); ?></dt>
		<dd>
			<?php echo $this->Html->link($knitingplan['Orderitem']['title'], array('controller' => 'orderitems', 'action' => 'view', $knitingplan['Orderitem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($knitingplan['Knitingplan']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jobcard Count'); ?></dt>
		<dd>
			<?php echo h($knitingplan['Knitingplan']['jobcard_count']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Knitingplan'), array('action' => 'edit', $knitingplan['Knitingplan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Knitingplan'), array('action' => 'delete', $knitingplan['Knitingplan']['id']), null, __('Are you sure you want to delete # %s?', $knitingplan['Knitingplan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Knitingplans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Knitingplan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderitems'), array('controller' => 'orderitems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderitem'), array('controller' => 'orderitems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobcards'), array('controller' => 'jobcards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobcard'), array('controller' => 'jobcards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Jobcards'); ?></h3>
	<?php if (!empty($knitingplan['Jobcard'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Knitingplan Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Jobcardno'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Roll Count'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Createdby'); ?></th>
		<th><?php echo __('Modifiedby'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($knitingplan['Jobcard'] as $jobcard): ?>
		<tr>
			<td><?php echo $jobcard['id']; ?></td>
			<td><?php echo $jobcard['knitingplan_id']; ?></td>
			<td><?php echo $jobcard['title']; ?></td>
			<td><?php echo $jobcard['jobcardno']; ?></td>
			<td><?php echo $jobcard['barcode']; ?></td>
			<td><?php echo $jobcard['roll_count']; ?></td>
			<td><?php echo $jobcard['created']; ?></td>
			<td><?php echo $jobcard['modified']; ?></td>
			<td><?php echo $jobcard['createdby']; ?></td>
			<td><?php echo $jobcard['modifiedby']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobcards', 'action' => 'view', $jobcard['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobcards', 'action' => 'edit', $jobcard['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobcards', 'action' => 'delete', $jobcard['id']), null, __('Are you sure you want to delete # %s?', $jobcard['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Jobcard'), array('controller' => 'jobcards', 'action' => 'totaljobcard')); ?> </li>
		</ul>
	</div>
</div>
