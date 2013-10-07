<div class="rolls index">
		 <?php 
	
		echo $this->Form->create('Roll', array(
			'url' => array_merge(array('action' => 'find'), $this->params['pass'])
		));
		echo $this->Form->input('barcode', array('div' => false));
		echo $this->Form->submit(__('Search'), array('div' => false));
		echo $this->Form->end();
	?>
		
		<h2><?php echo __('Rolls'); ?></h2>
	<h2><?php echo 'User group: '.$_SESSION['UserAuth']['UserGroup']['name']; ?></h2>
	<h2><?php echo 'User group: '.$_SESSION['UserAuth']['UserGroup']['id']; ?></h2>
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
	<h2><?php echo __('Rolls'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('createdby'); ?></th>
			<th><?php echo $this->Paginator->sort('modifiedby'); ?></th>
			<th><?php //echo $this->Paginator->sort('islabeled'); ?></th>
			<th><?php //echo $this->Paginator->sort('greystorestatus_id'); ?></th>
			<th><?php //echo $this->Paginator->sort('dyingstatus_id'); ?></th>
			<th><?php //echo $this->Paginator->sort('finishingstatus_id'); ?></th>
			<th><?php //echo $this->Paginator->sort('greystatus_id'); ?></th>
			<th><?php //echo $this->Paginator->sort('orderstatus_id'); ?></th>
			<th><?php //echo $this->Paginator->sort('mainstorestatus_id'); ?></th>
			<th><?php //echo $this->Paginator->sort('jobcard_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($rolls as $roll): ?>
	<tr>
		<td><?php echo h($roll['Roll']['id']); ?>&nbsp;</td>
		<td><?php echo h($roll['Roll']['barcode']); ?>&nbsp;</td>
		<td><?php echo h($roll['Roll']['created']); ?>&nbsp;</td>
		<td><?php echo h($roll['Roll']['modified']); ?>&nbsp;</td>
		<td><?php echo h($roll['Roll']['weight']); ?>&nbsp;</td>
		<td><?php echo h($roll['Roll']['createdby']); ?>&nbsp;</td>
		<td><?php echo h($roll['Roll']['modifiedby']); ?>&nbsp;</td>
		<td><?php echo h($roll['Roll']['islabeled']); ?>&nbsp;</td>
		<td>
			<?php //echo $this->Html->link($roll['Greystorestatus']['title'], array('controller' => 'greystorestatuses', 'action' => 'view', $roll['Greystorestatus']['id'])); ?>
		</td>
		<td>
			<?php //echo $this->Html->link($roll['Dyingstatus']['title'], array('controller' => 'dyingstatuses', 'action' => 'view', $roll['Dyingstatus']['id'])); ?>
		</td>
		<td>
			<?php //echo $this->Html->link($roll['Finishingstatus']['title'], array('controller' => 'finishingstatuses', 'action' => 'view', $roll['Finishingstatus']['id'])); ?>
		</td>
		<td>
			<?php //echo $this->Html->link($roll['Greystatus']['title'], array('controller' => 'greystatuses', 'action' => 'view', $roll['Greystatus']['id'])); ?>
		</td>
		<td>
			<?php //echo $this->Html->link($roll['Orderstatus']['title'], array('controller' => 'orderstatuses', 'action' => 'view', $roll['Orderstatus']['id'])); ?>
		</td>
		<td>
			<?php //echo $this->Html->link($roll['Mainstorestatus']['title'], array('controller' => 'mainstorestatuses', 'action' => 'view', $roll['Mainstorestatus']['id'])); ?>
		</td>
		<td>
			<?php //echo $this->Html->link($roll['Jobcard']['title'], array('controller' => 'jobcards', 'action' => 'view', $roll['Jobcard']['id'])); ?>
		</td>
		<td class="actions">
        <?php echo $this->Html->link(__('Received'), array('action' => 'received', $roll['Roll']['id'])); ?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $roll['Roll']['id'])); ?>
            <?php echo $this->Html->link(__('Released'), array('action' => 'released', $roll['Roll']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $roll['Roll']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $roll['Roll']['id']), null, __('Are you sure you want to delete # %s?', $roll['Roll']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Roll'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Greystorestatuses'), array('controller' => 'greystorestatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Greystorestatus'), array('controller' => 'greystorestatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dyingstatuses'), array('controller' => 'dyingstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dyingstatus'), array('controller' => 'dyingstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Finishingstatuses'), array('controller' => 'finishingstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Finishingstatus'), array('controller' => 'finishingstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Greystatuses'), array('controller' => 'greystatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Greystatus'), array('controller' => 'greystatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderstatuses'), array('controller' => 'orderstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderstatus'), array('controller' => 'orderstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mainstorestatuses'), array('controller' => 'mainstorestatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mainstorestatus'), array('controller' => 'mainstorestatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobcards'), array('controller' => 'jobcards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobcard'), array('controller' => 'jobcards', 'action' => 'add')); ?> </li>
	</ul>
</div>
