<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PriceGroup $priceGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Price Group'), ['action' => 'edit', $priceGroup->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Price Group'), ['action' => 'delete', $priceGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $priceGroup->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Price Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Price Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Price Group Values'), ['controller' => 'PriceGroupValues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Price Group Value'), ['controller' => 'PriceGroupValues', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="priceGroups view large-9 medium-8 columns content">
    <h3><?= h($priceGroup->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Group Name') ?></th>
            <td><?= h($priceGroup->group_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($priceGroup->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($priceGroup->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $priceGroup->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Price Group Values') ?></h4>
        <?php if (!empty($priceGroup->price_group_values)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Price Group Id') ?></th>
                <th scope="col"><?= __('Photo Size Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($priceGroup->price_group_values as $priceGroupValues): var_dump($priceGroupValues)?>
            <tr>
                <td><?= h($priceGroupValues->price_group->group_name) ?></td>
                <td><?= h($priceGroupValues->photo_size->name) ?></td>
                <td><?= h($priceGroupValues->price) ?></td>
                <td><?= h($priceGroupValues->is_active) ?></td>
                <td class="actions">
                    <?/*= $this->Html->link(__('View'), ['controller' => 'PriceGroupValues', 'action' => 'view', $priceGroupValues->]) */?><!--
                    --><?/*= $this->Html->link(__('Edit'), ['controller' => 'PriceGroupValues', 'action' => 'edit', $priceGroupValues->]) */?>
                    <?/*= $this->Form->postLink(__('Delete'), ['controller' => 'PriceGroupValues', 'action' => 'delete', $priceGroupValues->], ['confirm' => __('Are you sure you want to delete # {0}?', $priceGroupValues->)]) */?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
