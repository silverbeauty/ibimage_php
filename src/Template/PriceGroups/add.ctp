




<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PriceGroup $priceGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Price Groups'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Price Group Values'), ['controller' => 'PriceGroupValues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Price Group Value'), ['controller' => 'PriceGroupValues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="priceGroups form large-9 medium-8 columns content">
    <?= $this->Form->create($priceGroup) ?>
    <fieldset>
        <legend><?= __('Add Price Group') ?></legend>
        <?php
            echo $this->Form->control('group_name');
            echo $this->Form->control('description');
            echo $this->Form->control('is_active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
