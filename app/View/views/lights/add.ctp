<div class="lights form">
<?php echo $this->Form->create('Light');?>
	<fieldset>
		<legend><?php __('Add Light'); ?></legend>
	<?php
		echo $this->Form->input('light');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lights', true), array('action' => 'index'));?></li>
	</ul>
</div>