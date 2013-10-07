<div class="jobcards index">
	<h2><?php echo __('Jobcards'); ?></h2>
    
    <?php 
	
		echo $this->Form->create('Jobcard', array(
			'url' => array_merge(array('action' => 'find'), $this->params['pass'])
		));
		echo $this->Form->input('barcode', array('div' => false));
		echo $this->Form->submit(__('Search'), array('div' => false));
		echo $this->Form->end();
	?>
   	<?php
    $data_to_encode = '10120LAH07891011';
                   
    // Generate Barcode data
    $this->barcode->barcode();
    $this->barcode->setType('C39');
    $this->barcode->setCode($data_to_encode);
    $this->barcode->setSize(80,200);
    $this->barcode->hideCodeType('C39');
    
    // Generate filename           
    $random = rand(0,1000000);
    $file = 'img/barcode/code_'.$random.'.png';
    
    // Generates image file on server           
    $this->barcode->writeBarcodeFile($file);
    
    // Display image
    echo $this->html->image('barcode/code_'.$random.'.png');
    ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('knitingplan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('jobcardno'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode'); ?></th>
			<th><?php echo $this->Paginator->sort('roll_count'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('createdby'); ?></th>
			<th><?php echo $this->Paginator->sort('modifiedby'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobcards as $jobcard): ?>
	<tr>
		<td><?php echo h($jobcard['Jobcard']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jobcard['Knitingplan']['title'], array('controller' => 'knitingplans', 'action' => 'view', $jobcard['Knitingplan']['id'])); ?>
		</td>
		<td><?php echo h($jobcard['Jobcard']['title']); ?>&nbsp;</td>
		<td><?php echo h($jobcard['Jobcard']['jobcardno']); ?>&nbsp;</td>
		<td><?php echo h($jobcard['Jobcard']['barcode']); ?>&nbsp;</td>
		<td><?php echo h($jobcard['Jobcard']['roll_count']); ?>&nbsp;</td>
		<td><?php echo h($jobcard['Jobcard']['created']); ?>&nbsp;</td>
		<td><?php echo h($jobcard['Jobcard']['modified']); ?>&nbsp;</td>
		<td><?php echo h($jobcard['Jobcard']['createdby']); ?>&nbsp;</td>
		<td><?php echo h($jobcard['Jobcard']['modifiedby']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobcard['Jobcard']['id'])); ?>
            <?php echo $this->Html->link(__('Job card detail'), array('action' => 'detail', $jobcard['Jobcard']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobcard['Jobcard']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobcard['Jobcard']['id']), null, __('Are you sure you want to delete # %s?', $jobcard['Jobcard']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Jobcard'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Knitingplans'), array('controller' => 'knitingplans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Knitingplan'), array('controller' => 'knitingplans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rolls'), array('controller' => 'rolls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roll'), array('controller' => 'rolls', 'action' => 'add')); ?> </li>
	</ul>
    
    
</div>
