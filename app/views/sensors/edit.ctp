<div class="sensors form">
<?php echo $this->Form->create('Sensor');?>
	<fieldset>
		<legend><?php __('Edit Sensor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sensor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Sensor.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Sensor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sensors', true), array('action' => 'index'));?></li>
	</ul>
</div>