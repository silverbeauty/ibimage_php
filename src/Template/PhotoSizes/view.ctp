<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $photoSize
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Photo Size'), ['action' => 'edit', $photoSize->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Photo Size'), ['action' => 'delete', $photoSize->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photoSize->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Photo Sizes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo Size'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="photoSizes view large-9 medium-8 columns content">
    <h3><?= h($photoSize->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($photoSize->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($photoSize->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($photoSize->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Default Price') ?></th>
            <td><?= $this->Number->format($photoSize->default_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $photoSize->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
