<div class="rolls view">
<h2><?php  echo __('Roll'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($roll['Roll']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode'); ?></dt>
		<dd>
			<?php echo h($roll['Roll']['barcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($roll['Roll']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($roll['Roll']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($roll['Roll']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Createdby'); ?></dt>
		<dd>
			<?php echo h($roll['Roll']['createdby']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modifiedby'); ?></dt>
		<dd>
			<?php echo h($roll['Roll']['modifiedby']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Islabeled'); ?></dt>
		<dd>
			<?php echo h($roll['Roll']['islabeled']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Greystorestatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($roll['Greystorestatus']['title'], array('controller' => 'greystorestatuses', 'action' => 'view', $roll['Greystorestatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dyingstatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($roll['Dyingstatus']['title'], array('controller' => 'dyingstatuses', 'action' => 'view', $roll['Dyingstatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Finishingstatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($roll['Finishingstatus']['title'], array('controller' => 'finishingstatuses', 'action' => 'view', $roll['Finishingstatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Greystatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($roll['Greystatus']['title'], array('controller' => 'greystatuses', 'action' => 'view', $roll['Greystatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orderstatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($roll['Orderstatus']['title'], array('controller' => 'orderstatuses', 'action' => 'view', $roll['Orderstatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mainstorestatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($roll['Mainstorestatus']['title'], array('controller' => 'mainstorestatuses', 'action' => 'view', $roll['Mainstorestatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jobcard'); ?></dt>
		<dd>
			<?php echo $this->Html->link($roll['Jobcard']['title'], array('controller' => 'jobcards', 'action' => 'view', $roll['Jobcard']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Roll'), array('action' => 'edit', $roll['Roll']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Roll'), array('action' => 'delete', $roll['Roll']['id']), null, __('Are you sure you want to delete # %s?', $roll['Roll']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rolls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roll'), array('action' => 'add')); ?> </li>
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
