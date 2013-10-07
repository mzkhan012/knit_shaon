<?php $knitting_plan_id = (int) $this->params['pass'];?>
<div class="jobcards form">
<?php echo $this->Form->create(array('url'=>array('controller'=>'knitingplans','action'=>'place', $knitting_plan_id))); ?>
<h2><?php echo ('CREATE JOBCARD'); ?></h2>
<dt>
<?php echo $this->Form->input('Number Of Job Card',array('type' => 'text','name'=>'data[Jobcard][totalJobCard]')); ?>

<?php //echo $this->Html->link('CREATE', array('controller'=>'knitingplans','action'=>'place'));  ?>
</dt>
<?php echo $this->Form->submit(); ?>
</div>