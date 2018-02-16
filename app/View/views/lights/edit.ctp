<div class="lights form">
<?php echo $this->Form->create('Light');?>
	<fieldset>
		<legend><?php __('Edit Light'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('light');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Light.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Light.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lights', true), array('action' => 'index'));?></li>
	</ul>
</div>