<div class="jobcards form">
<?php echo $this->Form->create('Jobcard'); ?>
<?php echo $this->Form->create('Knitingplan'); ?>
 <fieldset>
  <legend><?php echo __('Add Jobcard'); ?></legend>
 <?php 
  echo $this->Form->input('knitingplan_id',array('type'=>'hidden')); 
  $title='title';
  $jobcardno='jobcardno';
                $barcode='barcode';
                $rollcount='roll_count';
                               
  for($i=0;$i<$number_of_row;$i++){
  echo $this->Form->input('Jobcard'.'.'.$i.'.'.$title);
  echo $this->Form->input('Jobcard'.'.'.$i.'.'.$jobcardno);
                echo $this->Form->input('Jobcard'.'.'.$i.'.'.$barcode,array('type'=>'hidden'));
  echo $this->Form->input('Jobcard'.'.'.$i.'.'.$rollcount,array('type'=>'hidden'));
  }
  
 ?>
 </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
 <h3><?php echo __('Actions'); ?></h3>
 <ul>

  <li><?php echo $this->Html->link(__('List Jobcards'), array('action' => 'index')); ?></li>
  <li><?php echo $this->Html->link(__('List Knitingplans'), array('controller' => 'knitingplans', 'action' => 'index')); ?> </li>
  <li><?php echo $this->Html->link(__('New Knitingplan'), array('controller' => 'knitingplans', 'action' => 'add')); ?> </li>
 </ul>
</div>