<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PriceGroupValue $priceGroupValue
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Price Group Value'), ['action' => 'edit', $priceGroupValue->price_group_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Price Group Value'), ['action' => 'delete', $priceGroupValue->price_group_id], ['confirm' => __('Are you sure you want to delete # {0}?', $priceGroupValue->price_group_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Price Group Values'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Price Group Value'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Price Groups'), ['controller' => 'PriceGroups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Price Group'), ['controller' => 'PriceGroups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Photo Sizes'), ['controller' => 'PhotoSizes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo Size'), ['controller' => 'PhotoSizes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="priceGroupValues view large-9 medium-8 columns content">
    <h3><?= h($priceGroupValue->price_group_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Price Group') ?></th>
            <td><?= $priceGroupValue->has('price_group') ? $this->Html->link($priceGroupValue->price_group->id, ['controller' => 'PriceGroups', 'action' => 'view', $priceGroupValue->price_group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Size') ?></th>
            <td><?= $priceGroupValue->has('photo_size') ? $this->Html->link($priceGroupValue->photo_size->name, ['controller' => 'PhotoSizes', 'action' => 'view', $priceGroupValue->photo_size->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($priceGroupValue->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $this->Number->format($priceGroupValue->is_active) ?></td>
        </tr>
    </table>
</div>
