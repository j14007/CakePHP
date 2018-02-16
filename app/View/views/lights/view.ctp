<div class="lights view">
<h2><?php  __('Light');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $light['Light']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Light'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $light['Light']['light']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Light', true), array('action' => 'edit', $light['Light']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Light', true), array('action' => 'delete', $light['Light']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $light['Light']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lights', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Light', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
