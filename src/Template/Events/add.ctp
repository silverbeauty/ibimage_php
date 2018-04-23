<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Event Metas'), ['controller' => 'EventMetas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event Meta'), ['controller' => 'EventMetas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Event Shares'), ['controller' => 'EventShares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event Share'), ['controller' => 'EventShares', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photo Shares'), ['controller' => 'PhotoShares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo Share'), ['controller' => 'PhotoShares', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Add Event') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('place');
            echo $this->Form->control('started');
            echo $this->Form->control('ended', ['empty' => true]);
            echo $this->Form->control('is_approved');
            echo $this->Form->control('parent');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
