<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PriceGroupValue[]|\Cake\Collection\CollectionInterface $priceGroupValues
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Price Group Value'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Price Groups'), ['controller' => 'PriceGroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Price Group'), ['controller' => 'PriceGroups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photo Sizes'), ['controller' => 'PhotoSizes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo Size'), ['controller' => 'PhotoSizes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="priceGroupValues index large-9 medium-8 columns content">
    <h3><?= __('Price Group Values') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('price_group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_size_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($priceGroupValues as $priceGroupValue): ?>
            <tr>
                <td><?= $priceGroupValue->has('price_group') ? $this->Html->link($priceGroupValue->price_group->id, ['controller' => 'PriceGroups', 'action' => 'view', $priceGroupValue->price_group->id]) : '' ?></td>
                <td><?= $priceGroupValue->has('photo_size') ? $this->Html->link($priceGroupValue->photo_size->name, ['controller' => 'PhotoSizes', 'action' => 'view', $priceGroupValue->photo_size->id]) : '' ?></td>
                <td><?= $this->Number->format($priceGroupValue->price) ?></td>
                <td><?= $this->Number->format($priceGroupValue->is_active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $priceGroupValue->price_group_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $priceGroupValue->price_group_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $priceGroupValue->price_group_id], ['confirm' => __('Are you sure you want to delete # {0}?', $priceGroupValue->price_group_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
