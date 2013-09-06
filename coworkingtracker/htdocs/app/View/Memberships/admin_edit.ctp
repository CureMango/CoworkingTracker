<div class="memberships form">
<?php echo $this->Form->create('Membership'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Membership'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Membership.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Membership.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Memberships'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
